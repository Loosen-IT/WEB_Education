<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['INFO_title'] = "Aktuelles Projekt";
        $data['CSS_bootstrap'] = base_url().'/education/codeigniter/public/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/education/codeigniter/public/styles/bootstrap.css';
        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/index', $data);
    }
}