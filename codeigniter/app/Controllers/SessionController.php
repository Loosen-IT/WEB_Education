<?php

namespace App\Controllers;

class SessionController extends BaseController
{
    //Temporaere Loesung um aktuelles Projekt zu speichern
    public function session_parameters(){
        if(!isset($_SESSION['project'])) $_SESSION['project'] = "1";
        if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
        if(!isset($_SESSION['user'])) $_SESSION['user'] = NULL;
    }



    public function create_aufgaben(){
        $db = db_connect();
        $query = $db->query('SELECT * FROM aufgaben');
        return $query->getResultArray();
    }

    public function indexed_aufgaben(){
        $aufgaben = array();
        foreach($this->create_aufgaben() as $aufgabe){
            $aufgaben[$aufgabe['id_aufgaben']] = $aufgabe;
        }
        return $aufgaben;
    }



    public function create_mitglieder(){
        $db = db_connect();
        $query = $db->query('SELECT * FROM mitglieder');
        return $query->getResultArray();
    }

    public function indexed_mitglieder(){
        $mitglieder = array();
        foreach($this->create_mitglieder() as $mitglied){
            $mitglieder[$mitglied['id_mitglieder']] = $mitglied;
        }
        return $mitglieder;
    }



    public function create_aufgaben_mitglieder_COMPLETE(){
        $db = db_connect();
        $query = $db->query('SELECT * FROM mitglieder m INNER JOIN aufgaben_mitglieder am INNER JOIN aufgaben a ON m.id_mitglieder=am.id_mitglieder AND a.id_aufgaben=am.id_aufgaben');
        return $query->getResultArray();
    }

    public function create_projekte_mitglieder(){
        $db = db_connect();
        $query = $db->query('SELECT * FROM projekte_mitglieder');
        return $query->getResultArray();
    }



    public function create_reiter(){
        $db = db_connect();
        $query = $db->query('SELECT * FROM reiter');
        return $query->getResultArray();
    }

    public function indexed_reiter(){
        $reiters = array();
        foreach($this->create_reiter() as $reiter){
            $reiters[$reiter['id_reiter']] = $reiter;
        }
        return $reiters;
    }



    function create_projekte(){
        $db = db_connect();
        $query = $db->query('SELECT * FROM projekte');
        return $query->getResultArray();
    }

    public function indexed_projekte(){
        $projekte = array();
        foreach($this->create_projekte() as $projekt){
            $projekte[$projekt['id_projekte']] = $projekt;
        }
        return $projekte;
    }


    function create_uebersicht(){
        $reiters = $this->create_reiter();
        $aufgaben = $this->create_aufgaben();

        $uebersicht = array();

        foreach ($reiters as $reiter){;
            $aufgaben_zu_reiter = array();
            foreach ($aufgaben as $aufgabe){
                if(strcmp($aufgabe['id_reiter'],$reiter['id_reiter'])==0){
                    $aufgaben_zu_reiter = array_merge($aufgaben_zu_reiter,$aufgabe);
                }
            }
            $uebersicht = array_merge($uebersicht, array('reiter' => $reiter, 'aufgaben' => $aufgaben_zu_reiter));
        }

        return $uebersicht;
    }
}