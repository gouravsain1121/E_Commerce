<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmireController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function login()
    {
        return view('pages.login');
    }
}

