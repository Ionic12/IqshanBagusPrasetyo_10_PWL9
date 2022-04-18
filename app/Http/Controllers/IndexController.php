<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\HContent;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        return view('cervelo.index',[
            'title' => 'Home',
            'part1' => HContent::first()->part1,
            'desc1' => HContent::first()->desc1,
            'part2' => HContent::first()->part2,
            'desc2' => HContent::first()->desc2,
            'part3' => HContent::first()->part3,
            'desc3' => HContent::first()->desc3,
            'part4' => HContent::first()->part4,
            'desc4' => HContent::first()->desc4,
        ]);
    }
}