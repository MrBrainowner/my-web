<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends \Illuminate\Routing\Controller
{
    public function profile()
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'You need to log in to access this page.');
        }
        else {
            return view('auth.profile');
        }
        
    }

}
