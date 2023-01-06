<?php

namespace App\Controllers;
use App\Models\ProjekteModel;
use CodeIgniter\Controller;
use App\Models\MitgliederModel;

class Login extends SessionController
{
    public function __construct(){
        $this->MitgliederModel = new MitgliederModel();
        $this->ProjekteModel = new ProjekteModel();
    }

    public function index()
    {
        $this->session_parameters();

        $data['INFO_title'] = "Aufgabenplaner: Login";
        $data['CSS_bootstrap'] = base_url().'/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/styles/custom.css';

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/login');
    }

    public function check_password(){
        $password = $this->MitgliederModel->loginMitglieder();
        if(!isset($password)) return false;
        if(password_verify($_POST['passwort'], $password['passwort'])) return true;
        else return false;
    }

    public function login(){
        if($this->check_password()){
            $_SESSION['STATUS_logged'] = true;
            $_SESSION['DATA_user'] = $this->MitgliederModel->getMitglieder_MAIL($_POST['email']);
            if(!isset($_COOKIE['STATUS_project'])){ $_COOKIE['STATUS_project'] = $this->ProjekteModel->getProjekte_Mitglieder($_SESSION['DATA_user']['id_mitglieder'][0]); }
            $_SESSION['STATUS_project'] = $_COOKIE['STATUS_project'];
            return redirect()->to(base_url('/home'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout(){
        $_SESSION['STATUS_project'] = NULL;
        $_SESSION['STATUS_logged'] = false;
        $_SESSION['DATA_user'] = NULL;
        return redirect()->to(base_url('/login'));
    }
}
