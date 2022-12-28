<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Reiter extends BaseController
{
    public function index()
    {
        $data['INFO_title'] = "Aktuelles Projekt";
        $data['CSS_bootstrap'] = base_url().'/education/codeigniter/public/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/education/codeigniter/public/styles/bootstrap.css';

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/reiter');
    }
}
