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
        if($_POST['passwort']==''){
            return redirect()->to(base_url('mitglieder'));
        }

        $this->MitgliederModel->updateMitglieder_ID();

        $help = $this->ProjekteModel->worksOnProjekte_Mitglieder($_POST['id_mitglieder'],$_SESSION['STATUS_project']);
        $_POST['id_projekte'] = $_SESSION['STATUS_project'];

        // Fügt Mitglied zum Projekt neu hinzu, wenn checkbox ausgewählt ist und das Mitglied noch nicht am Projekt teilnimmt
        if(isset($_POST['belong'])){
            if($help){
                $this->ProjekteModel->createProjekte_Mitglieder();
            }
        } else {
        // Entfernt Mitglied vom Projekt , wenn checkbox nicht ausgewählt ist und das Mitglied am Projekt teilnimmt
            if($help){ } else {
                $this->ProjekteModel->deleteProjekte_Mitglieder();
            }
        }

        return redirect()->to(base_url('mitglieder'));
    }


    public function create(){
        $this->MitgliederModel->createMitglieder();
        return redirect()->to(base_url('mitglieder'));
    }

    public function create_not_logged(){
        $this->MitgliederModel->createMitglieder();
        return redirect()->to(base_url('login'));
    }
}

