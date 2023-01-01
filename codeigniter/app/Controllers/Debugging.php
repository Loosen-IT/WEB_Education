<?php

namespace App\Controllers;

class Debugging extends SessionController
{
    public function index()
    {
        $data['debug'] = $this->indexed_aufgaben_mitglieder_COMPLETE();
        return view('pages/debugging',$data);
    }
}