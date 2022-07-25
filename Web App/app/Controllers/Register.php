<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        if(session()->get('logged_in'))
        {
            return redirect()->to(base_url());
        }
        return view('register_utama');
    }
}