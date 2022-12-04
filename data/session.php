<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();

    require_once('exercises.php');
    require_once('members.php');
    require_once('projects.php');
    require_once('reiter.php');
    require_once('uebersicht.php');

    //Aktuelles Projekt (DEFAULT: p1)
    $_SESSION['project']='p1';
}
$_SESSION['members']=get_members();
$_SESSION['projects']=get_projects();
$_SESSION['reiter']=get_reiters();
$_SESSION['exercises']=get_exercises();
$_SESSION['uebersicht']=get_uebersicht();
?>
