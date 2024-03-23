<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
    public function signin(){
        $currentPage = '/signin';
        return view('pages.signin', compact('currentPage'));
    }
    
    public function signup(){
        $currentPage = '/signup';
        return view('pages.signup', compact('currentPage'));
    }
}
