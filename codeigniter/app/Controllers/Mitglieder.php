<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MitgliederModel;

class Mitglieder extends SessionController
{
    public function __construct(){
        $this->MitgliederModel = new MitgliederModel();
    }

    public function index()
    {
        if ($_SESSION['logged']) redirect('/login', 'refresh');

        $data['INFO_title'] = "Aufgabenplaner: Mitglieder";
        $data['CSS_bootstrap'] = base_url().'/codeigniter/public/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/codeigniter/public/styles/custom.css';
        $data['DATA_mitglieder'] = $this->MitgliederModel->getMitglieder();
        $data['DATA_projekte_mitglieder'] = $this->create_projekte_mitglieder();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/mitglieder');
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
