<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login',[
            'title' => 'Login',]);
    }
    public function authenticate(Request $request)
    {
        $credentials=$request->validate([
            'email'=>'required|email:dns',
            'password'=>'required|min:8'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/about');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }
    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
}
}