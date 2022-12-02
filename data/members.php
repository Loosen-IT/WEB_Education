<?php

/**
 * Haben jedem Array noch einen Key (der der ID entsprechen soll gegeben).
 * So koennen Arrays mit der ID ohne foreach-Schleife gefunden werden.
**/

function get_members(){
    $mitglieder = array(
        '1' => array(
                'id' => 1,
                'username' => 'janniclas',
                'email' => 's4jaloos@uni-trier.de',
                'projektID' => 1
        ),
        '2' => array(
                'id' => 2,
                'username' => 'elena',
                'email' => 'elena@example.com',
                'projektID' => 1
        )
    );
    return $mitglieder;
}
?>