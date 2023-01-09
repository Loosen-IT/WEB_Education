<?php

namespace App\Controllers;
use App\Models\ProjekteModel;
use CodeIgniter\Controller;
use App\Models\AufgabenModel;
use App\Models\ReiterModel;

class Home extends SessionController
{
    public function __construct(){
        $this->AufgabenModel = new AufgabenModel();
        $this->ReiterModel = new ReiterModel();
        $this->ProjekteModel = new ProjekteModel();
    }

    function create_uebersicht(){
        $reiters = $this->ReiterModel->getReiter();
        $aufgaben = $this->AufgabenModel->getAufgaben();

        $uebersicht = array();

        foreach ($reiters as $reiter){;
            $aufgaben_zu_reiter = array();
            foreach ($aufgaben as $aufgabe){
                if(strcmp($aufgabe['id_reiter'],$reiter['id_reiter'])==0){
                    $aufgaben_zu_reiter = array_merge($aufgaben_zu_reiter,$aufgabe);
                }
            }
            $uebersicht = array_merge($uebersicht, array('reiter' => $reiter, 'aufgaben' => $aufgaben_zu_reiter));
        }

        return $uebersicht;
    }

    public function index()
    {
        $this->session_parameters();

        if(!isset($_SESSION['STATUS_logged'])) return var_dump($_SESSION);

        if (!$_SESSION["STATUS_logged"]) return redirect()->to(base_url('login/logout'));

        $tmp = $this->ProjekteModel->getProjekte($_SESSION['STATUS_project']);
        $data['INFO_title'] = "Aufgabenplaner: ".$tmp['name'];
        $data['CSS_bootstrap'] = base_url('/styles/').'/bootstrap.css';
        $data['CSS_custom'] = base_url('/styles/').'/custom.css';

        $data['DATA_uebersicht'] = $this->create_uebersicht();
        $data['DATA_reiter'] = $this->ReiterModel->getReiter();
        $data['DATA_aufgaben_mitglieder_COMPLETE'] = $this->AufgabenModel->getAufgaben_Mitglieder();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/uebersicht', $data);
    }
}
