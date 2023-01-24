<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProjekteModel;

use AllowDynamicProperties;
use CodeIgniter\Session\Session;

#[AllowDynamicProperties]

class Projekte extends SessionController
{
    public function __construct(){
        $this->ProjekteModel = new ProjekteModel();
    }

    public function index()
    {
        $this->session_parameters();

        if (!$_SESSION["STATUS_logged"]) return redirect()->to(base_url('login/logout'));

        $data['INFO_title'] = "Aufgabenplaner: Projekte";

        $data['CSS_bootstrap'] = base_url().'/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/styles/custom.css';
        $data['DATA_projekte'] = $this->ProjekteModel->get_indexed_projekte();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/projekte');
    }

    public function create(){
        $_POST['id_mitglieder'] = $_POST['id_ersteller'];
        $this->ProjekteModel->createProjekte();
        $this->ProjekteModel->createProjekte_Mitglieder();
        return redirect()->to(base_url('projekte'));
    }

    public function delete_or_swap(){
        if(isset($_POST['change'])){
            $_SESSION['STATUS_project'] = $_POST['id_projekte'];
            return redirect()->to(base_url('/home'));
        }

        if(isset($_POST['delete'])){
            if($_POST['id_projekte']==0){
                return redirect()->to(base_url('projekte'));
            }

            if($_SESSION['STATUS_project'] == $_POST['id_projekte']){
                $_SESSION['STATUS_project'] = '0';
            }
            $this->ProjekteModel->deleteProjekte();
            return redirect()->to(base_url('projekte'));
        }
    }

    public function update(){
        $this->ProjekteModel->updateProjekte();
        return redirect()->to(base_url('projekte'));
    }
}
