<?php
function get_uebersicht(){
    $reiters = $_SESSION['reiter'];
    $aufgaben = $_SESSION['exercises'];

    $arr = array();

    foreach ($reiters as $reiter){;
        if(strcmp($reiter['project'],$_SESSION['project'])==0){
            $aufgaben_zu_reiter = array();
            foreach ($aufgaben as $aufgabe){
                if(strcmp($aufgabe['reiter'],$reiter['id'])==0){
                    $aufgaben_zu_reiter = array_merge($aufgaben_zu_reiter,$aufgabe);
                }
            }
            $arr = array_merge($arr, array('reiter' => $reiter, 'aufgaben' => $aufgaben_zu_reiter));
        }
    }

    return $arr;
}
?>