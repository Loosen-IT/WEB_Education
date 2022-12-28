<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        $data['INFO_title'] = "Aktuelles Projekt";
        $data['CSS_bootstrap'] = base_url('/styles/').'/bootstrap.css';
        $data['CSS_custom'] = base_url('/styles/').'/custom.css';
        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/uebersicht', $data);
    }
}
