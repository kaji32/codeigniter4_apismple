<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        log_message('debug', "test");
        return view('welcome_message');
    }
}
