<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Login extends SessionController
{
    public function index()
    {
        $data['INFO_title'] = "Aufgabenplaner: Login";
        $data['CSS_bootstrap'] = base_url().'/codeigniter/public/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/codeigniter/public/styles/custom.css';

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        echo view('pages/login');
    }
}
