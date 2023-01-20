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

        return view('pages/login')  ;
    }

    public function check_password(){
        $password = $this->MitgliederModel->loginMitglieder();
        if(!isset($password)) return false;
        if(password_verify($_POST['passwort'], $password['passwort'])) return true;
        else return false;
    }

    public function login(){

        if($this->validation->run($_POST,'loginvalidation')) {
            if ($this->check_password()) {
                $_SESSION['STATUS_logged'] = true;
                $_SESSION['DATA_user'] = $this->MitgliederModel->getMitglieder_MAIL($_POST['email']);

                //Aktuell ist noch keine Auswahl von Projekten implementiert
                $tmp = $this->ProjekteModel->getProjekte_Mitglieder($_SESSION['DATA_user']['id_mitglieder']);
                if (isset($tmp['id_projekte'])) $_SESSION['STATUS_project'] = $tmp['id_projekte'];
                else $_SESSION['STATUS_project'] = '0';

                return redirect()->to(base_url('/home'));
            } else {
                return redirect()->to(base_url('/login'));
            }
        }
        else {
            $data['INFO_title'] = "Aufgabenplaner: Login";
            $data['CSS_bootstrap'] = base_url().'/styles/bootstrap.css';
            $data['CSS_custom'] = base_url().'/styles/custom.css';

            $data['logindaten'] = $_POST;
            $data['error'] = $this->validation->getErrors();

            echo view('templates/head.php', $data);
            echo view('templates/block.php');
            return view('pages/login');
        }
    }

    public function logout(){
        $_SESSION['STATUS_project'] = NULL;
        $_SESSION['STATUS_logged'] = false;
        $_SESSION['DATA_user'] = NULL;
        return redirect()->to(base_url('/login'));
    }
}
