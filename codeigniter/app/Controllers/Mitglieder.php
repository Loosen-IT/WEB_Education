<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MitgliederModel;
use App\Models\ProjekteModel;


class Mitglieder extends SessionController
{
    public function __construct(){
        $this->MitgliederModel = new MitgliederModel();
        $this->ProjekteModel = new ProjekteModel();
    }

    public function index()
    {
        $this->session_parameters();

        if (!$_SESSION["STATUS_logged"]) return redirect()->to(base_url('login/logout'));

        $data['INFO_title'] = "Aufgabenplaner: Mitglieder";
        $data['CSS_bootstrap'] = base_url().'/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/styles/custom.css';
        $data['DATA_mitglieder'] = $this->MitgliederModel->getMitglieder();
        $data['DATA_projekte_mitglieder'] = $this->ProjekteModel->getProjekte_Mitglieder();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/mitglieder');
    }


    public function stop(){
        $this->session_parameters();

        if (!$_SESSION["STATUS_logged"]) return redirect()->to(base_url('login/logout'));

        $data['INFO_title'] = "Aufgabenplaner: Mitglied Löschen";

        $data['CSS_bootstrap'] = base_url().'/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/styles/custom.css';

        echo view('templates/head.php', $data);
    }

    public function delete(){
        $this->MitgliederModel->deleteMitglieder();
        return redirect()->to(base_url('/mitglieder'));
    }


    public function update(){
        $help= $this->MitgliederModel->getMitglieder_ID($_POST['id_mitglieder']);

        if($_POST['passwort']!='' && $help['username']== $_POST['username']){
            $_POST['password_new']=$_POST['passwort'];
        }
        else{
            $_POST['password_new']=$help['passwort'];
        }
        $this->MitgliederModel->updateMitglieder_ID();
        return redirect()->to(base_url('mitglieder'));
    }


    public function create(){

        $this->MitgliederModel->createMitglieder();
        return redirect()->to(base_url('mitglieder'));
    }
}

