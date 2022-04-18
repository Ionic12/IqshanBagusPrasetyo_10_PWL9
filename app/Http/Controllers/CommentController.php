<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{   
    public function index(){
        return view('cervelo.contact',[
            'title' => 'Contact Us',
        ]);
    }
    public function store(Request $request){
        $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zip' => 'required',
        'question' => 'required',
        ]);
        Comment::create($request->all());
        return view('cervelo.contact',[
            'title' => 'Contact Us',
        ]);
    }
}
