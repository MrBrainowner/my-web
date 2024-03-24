<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;

class ProfileController extends \Illuminate\Routing\Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile(Request $request)
    {
        if (Auth::check()) {
            return view('auth.profile');
        } else {
            return back()->withErrors(['error' => 'Invalid credentials']);
        }
    }

}
