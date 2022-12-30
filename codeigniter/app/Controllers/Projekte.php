<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Projekte extends SessionController
{
    public function index()
    {
        $this->session_parameters();

        $data['INFO_title'] = "Aufgabenplaner: Projekte";
        $data['CSS_bootstrap'] = base_url().'/codeigniter/public/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/codeigniter/public/styles/custom.css';
        $data['DATA_projekte'] = $this->create_projekte();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/projekte');
    }
}