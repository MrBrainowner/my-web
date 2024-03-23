<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function ShowSigninForm(){
        $currentPage = '/signin';
        return view('auth.signin', compact('currentPage'));
    }
    public function signin(){
        $currentPage = '/signin';
        return view('auth.signin', compact('currentPage'));
    }
    
    public function ShowSignupForm(){
        $currentPage = '/signup';
        return view('auth.signup', compact('currentPage'));
    }
    public function signup(Request $request){
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'pass' => 'required|min:8',
            'rpass' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $name = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('pass');
    }
}
