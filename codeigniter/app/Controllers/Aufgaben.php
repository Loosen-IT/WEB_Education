<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MitgliederModel;
use App\Models\AufgabenModel;
use App\Models\ReiterModel;

class Aufgaben extends SessionController
{
    public function __construct(){
        $this->MitgliederModel = new MitgliederModel();
        $this->AufgabenModel = new AufgabenModel();
        $this->ReiterModel = new ReiterModel();
    }
    public function index()
    {
        $this->session_parameters();

        if (isset($_SESSION['STATUS_logged']) && !$_SESSION['STATUS_logged']) return redirect()->to(base_url('/login'));

        $data['INFO_title'] = "Aufgabenplaner: Aufgaben";
        $data['CSS_bootstrap'] = base_url().'/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/styles/custom.css';

        $data['DATA_aufgaben_mitglieder'] = $this->AufgabenModel->getAufgaben_Mitglieder();
        $data['DATA_reiter'] = $this->ReiterModel->get_indexed_reiter();
        $data['DATA_mitglieder'] = $this->MitgliederModel->get_indexed_mitglieder();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        echo view('pages/aufgaben');
        return view('templates/footer.php');
    }
}
