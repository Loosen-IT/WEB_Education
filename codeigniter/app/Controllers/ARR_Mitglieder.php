<?php

namespace App\Controllers;

class ARRMitglieder
{
    public function create(){
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

}