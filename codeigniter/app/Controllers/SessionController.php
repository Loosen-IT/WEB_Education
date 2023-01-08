<?php

namespace App\Controllers;

class SessionController extends BaseController
{
    //Temporaere Loesung um aktuelles Projekt zu speichern
    public function session_parameters(){
        if (session_status() == PHP_SESSION_NONE) { session_start(); }
        if(! isset($_SESSION['STATUS_project'])) $_SESSION['STATUS_project'] = NULL;
        if(! isset($_SESSION['STATUS_logged'])) $_SESSION['STATUS_logged'] = false;
        if(! isset($_SESSION['DATA_user'])) $_SESSION['DATA_user'] = NULL;
    }
}