<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class ARRAYS
{
    public function create_aufgaben(){
        $exercises = array(
            array(
                'id' => 'e0',
                'bezeichnung' => 'HTML Datei erstellen',
                'beschreibung' => 'HTML Datei erstellen',
                'reiter' => 'r1',
                'person' => 'm1',
                'project' => 'p1'
            ),
            array(
                'id' => 'e1',
                'bezeichnung' => 'CSS Datei erstellen',
                'beschreibung' => 'CSS Datei erstellen',
                'reiter' => 'r1',
                'person' => 'm1',
                'project' => 'p1'
            ),
            array(
                'id' => 'e2',
                'bezeichnung' => 'PC eingeschaltet',
                'beschreibung' => 'PC einschalten',
                'reiter' => 'r2',
                'person' => 'm2',
                'project' => 'p1'
            ),
            array(
                'id' => 'e3',
                'bezeichnung' => 'Kaffee trinken',
                'beschreibung' => 'Kaffee langsam trinken und genießen',
                'reiter' => 'r2',
                'person' => 'm2',
                'project' => 'p1'
            ),
            array(
                'id' => 'e4',
                'bezeichnung' => 'Für die Uni lernen',
                'beschreibung' => 'Für die Uni lernen',
                'reiter' => 'r3',
                'person' => 'm1',
                'project' => 'p1'
            ),
            array(
                'id' => 'e5',
                'bezeichnung' => 'Kaffee trinken',
                'beschreibung' => 'Kaffeepause machen und Zeit schinden',
                'reiter' => 'r4',
                'person' => 'm3',
                'project' => 'p2'
            )
        );
        return $exercises;
    }

    public function create_mitglieder(){
        $mitglieder = array(
            'm1' => array(
                'id' => 'm1',
                'username' => 'janniclas',
                'email' => 's4jaloos@uni-trier.de',
                'projects' => array('p1', 'p2')
            ),
            'm2' => array(
                'id' => 'm2',
                'username' => 'alexander',
                'email' => 's4alrieb@uni-trier.de',
                'projects' => array('p1')
            ),
            'm3' => array(
                'id' => 'm3',
                'username' => 'unbekannt',
                'email' => 's4unbekannt@uni-trier.de',
                'projects' => array('p2')
            )
        );
        return $mitglieder;
    }

    public function create_reiter(){
        $reiter = array(
            'r1' => array(
                'id' => 'r1',
                'name' => 'ToDo',
                'beschreibung' => 'Dinge die erledigt werden müssen.',
                'project' => 'p1'
            ),
            'r2' => array(
                'id' => 'r2',
                'name' => 'Erledigt',
                'beschreibung' => 'Dinge die erledigt sind.',
                'project' => 'p1'
            ),
            'r3' => array(
                'id' => 'r3',
                'name' => 'Verschoben',
                'beschreibung' => 'Dinge die später erledigt werden.',
                'project' => 'p1'
            ),
            'r4' => array(
                'id' => 'r4',
                'name' => 'Entspannt',
                'beschreibung' => 'Erstmal Pause machen!',
                'project' => 'p2'
            )
        );
        return $reiter;
    }

    function create_projekte(){
        $projekte = array(
            'p1' => array(
                'id' => 'p1',
                'name' => 'Webentwicklung WS 22',
                'beschreibung' => 'Wir bauen eine To-Do-Liste.'
            ),
            'p2' => array(
                'id' => 'p2',
                'name' => 'Kaffee-Trink AG',
                'beschreibung' => 'Wir trinken gerne Kaffe.'
            )
        );
        return $projekte;
    }


    function get_uebersicht(){
        $reiters = $this->create_reiter();
        $aufgaben = $this->create_mitglieder();

        $uebersicht = array();

        foreach ($reiters as $reiter){;
            if(strcmp($reiter['project'],$_SESSION['project'])==0){
                $aufgaben_zu_reiter = array();
                foreach ($aufgaben as $aufgabe){
                    if(strcmp($aufgabe['reiter'],$reiter['id'])==0){
                        $aufgaben_zu_reiter = array_merge($aufgaben_zu_reiter,$aufgabe);
                    }
                }
                $uebersicht = array_merge($uebersicht, array('reiter' => $reiter, 'aufgaben' => $aufgaben_zu_reiter));
            }
        }

        return $uebersicht;
    }
}