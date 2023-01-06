<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProjekteModel;

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
        $data['DATA_projekte'] = $this->ProjekteModel->getProjekte();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/projekte');
    }
}
