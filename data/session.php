<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();

    require_once dirname(__FILE__).'/exercises.php';
    require_once dirname(__FILE__).'/members.php';
    require_once dirname(__FILE__).'/projects.php';
    require_once dirname(__FILE__).'/reiter.php';
    require_once dirname(__FILE__).'/uebersicht.php';

    //Aktuelles Projekt (DEFAULT: p1)
    $_SESSION['project']='p1';
}
$_SESSION['members']=get_members();
$_SESSION['projects']=get_projects();
$_SESSION['reiter']=get_reiters();
$_SESSION['exercises']=get_exercises();
$_SESSION['uebersicht']=get_uebersicht();
?>
