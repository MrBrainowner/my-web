<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
    public function signin(){
        return view('pages.signin');
    }
    public function signup(){
        return view('pages.signup');
    }
}
