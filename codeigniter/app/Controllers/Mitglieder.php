<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Mitglieder extends SessionController
{
    public function index()
    {
        $this->session_parameters();

        $data['INFO_title'] = "Aufgabenplaner: Mitglieder";
        $data['CSS_bootstrap'] = base_url().'/codeigniter/public/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/codeigniter/public/styles/custom.css';
        $data['DATA_mitglieder'] = $this->create_mitglieder();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/mitglieder');
    }
}