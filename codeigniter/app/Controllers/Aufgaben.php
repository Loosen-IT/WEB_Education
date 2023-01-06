<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Aufgaben extends SessionController
{
    public function index()
    {
        if ($_SESSION['logged']) redirect('/login', 'refresh');

        $data['INFO_title'] = "Aufgabenplaner: Aufgaben";
        $data['CSS_bootstrap'] = base_url().'/codeigniter/public/styles/bootstrap.css';
        $data['CSS_custom'] = base_url().'/codeigniter/public/styles/custom.css';

        $data['DATA_aufgaben_mitglieder'] = $this->create_aufgaben_mitglieder_COMPLETE();
        $data['DATA_reiter'] = $this->indexed_reiter();
        $data['DATA_mitglieder'] = $this->indexed_mitglieder();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/aufgaben');
    }
}
