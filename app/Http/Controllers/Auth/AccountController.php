<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{

    //sign up form
    public function ShowSignupForm(){
        $currentPage = '/signup';
        return view('auth.signup', compact('currentPage'));
    }
    public function signup(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'pass' => 'required|min:8',
            'rpass' => 'required|same:pass',
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->pass);
        $user->save();

        return redirect()->route('profile')->with('success', 'Registration successful');

    }
    
    // sign in form
    public function ShowSigninForm(){
        $currentPage = '/signin';
        return view('auth.signin', compact('currentPage'));
    }
    public function signin(SignInRequest $request){
         $request->validate([
            'email' => 'required|email',
            'pass' => 'required',
        ]);
        $credentials = $request->only('email', 'pass');
        if (Auth::attempt($credentials)) {
            return redirect()->route('profile')->with('success', 'Logged In successful');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
