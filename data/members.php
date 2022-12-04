<?php

/**
 * Haben jedem Array noch einen Key (der der ID entsprechen soll gegeben).
 * So koennen Arrays mit der ID ohne foreach-Schleife gefunden werden.
**/

function get_members(){
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
?>