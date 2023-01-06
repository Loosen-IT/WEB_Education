<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ReiterModel;

class Reiter extends SessionController
{
    public function __construct(){
        $this->ReiterModel = new ReiterModel();
    }

    public function index()
    {
        $this->session_parameters();

        if (!$_SESSION["STATUS_logged"]) return redirect()->to(base_url('login/logout'));

        $data['INFO_title'] = "Aufgabenplaner: Reiter";

        $data['CSS_bootstrap'] = base_url().'/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/styles/custom.css';
        $data['DATA_reiter'] = $this->create_reiter();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/reiter');
    }
}
