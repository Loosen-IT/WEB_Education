<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends SessionController
{
    public function index()
    {
        $this->session_parameters();

        if (!$_SESSION['logged']) return redirect()->to(base_url('/login'));

        $data['INFO_title'] = "Aufgabenplaner: Aktuelles Projekt";
        $data['CSS_bootstrap'] = base_url('/styles/').'/bootstrap.css';
        $data['CSS_custom'] = base_url('/styles/').'/custom.css';

        $data['DATA_uebersicht'] = $this->create_uebersicht();
        $data['DATA_reiter'] = $this->create_reiter();
        $data['DATA_aufgaben_mitglieder_COMPLETE'] = $this->create_aufgaben_mitglieder_COMPLETE();

        echo view('templates/head.php', $data);
        echo view('templates/block.php');

        return view('pages/uebersicht', $data);
    }
}
