<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function ShowSigninForm(){
        $currentPage = '/signin';
        return view('auth.signin', compact('currentPage'));
    }
    public function signin(Request $request){
         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/dashboard')->with('success', 'Logged in successfully!');
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    public function ShowSignupForm(){
        $currentPage = '/signup';
        return view('auth.signup', compact('currentPage'));
    }
    public function signup(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'pass' => 'required|min:8',
            'rpass' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->pass);
        $user->save();

        return redirect()->route('home')->with('success', 'Registration successful. Please log in.');

    }
}
