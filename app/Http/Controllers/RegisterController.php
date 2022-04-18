<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register',[
            'title' => 'Register',]);
    }
    public function store(Request $request){
        $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'password' => 'required|min:8',
        ]);
        User::create($request->all());
        return redirect('/login')->with($request->only('email', 'password'));
    }
}
