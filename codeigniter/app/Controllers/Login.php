<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MitgliederModel;

class Login extends SessionController
{
    public function __construct(){
        $this->MitgliederModel = new MitgliederModel();
    }

    public function index()
    {
        $this->session_parameters();

        $data['INFO_title'] = "Aufgabenplaner: Login";
        $data['CSS_bootstrap'] = base_url().'/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/styles/custom.css';

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        echo view('pages/login');
    }

    public function check_password(){
        $password = $this->MitgliederModel->loginMitglied();
        if(password_verify($_POST['password'], $password[0]['passwort'])) return true;
        else return false;
    }

    public function login(){
        if($this->check_password()){
            $this->session_parameters(NULL ,$_POST['username'],true);
            redirect('home', 'refresh');
        }
    }
}
