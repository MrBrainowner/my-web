<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\ProtectPage;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class AccountController extends Controller
{   

    public function __construct()
    {
        new Middleware('protect');
    }

    //sign up form
    public function ShowRegisterForm(){
        $currentPage = '/register';
        return view('auth.register', compact('currentPage'));
    }
    public function register(Request $request){
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
    public function ShowLogInForm(){
        $currentPage = '/login';
        return view('auth.login', compact('currentPage'));
    }
    public function login(SignInRequest $request){
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
