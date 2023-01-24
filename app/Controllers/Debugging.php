<?php

namespace App\Controllers;

class Debugging extends SessionController
{
    public function index()
    {
        return view('pages/debugging');
    }
}