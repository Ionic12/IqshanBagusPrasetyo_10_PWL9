<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HContent;
use Illuminate\Support\Facades\DB;

class HContentController extends Controller
{
    public function index(){
        $hcontent = $hcontent = DB::table('hcontent')->get();
        $hcontent = HContent::orderBy('id')->simplePaginate(5);
        return view('hcontent.content', [
            'hcontent' => $hcontent,
            'title' => 'Add Content',
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'part1' => 'required',
            'part2' => 'required',
            'part3' => 'required',
            'part4' => 'required',
            'desc1' => 'required',
            'desc2' => 'required',
            'desc3' => 'required',
            'desc4' => 'required',
        ]);
        HContent::create($request->all());
        return redirect()->back()->with('success', 'Add Data Successfully');
    }
    public function destroy( $id){
        HContent::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $HContent = DB::table('hcontent')->where('id', $id)->first();;
        return view('hcontent.edit',['title' => 'Edit Content'],compact('HContent'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'part1' => 'required',
            'part2' => 'required',
            'part3' => 'required',
            'part4' => 'required',
            'desc1' => 'required',
            'desc2' => 'required',
            'desc3' => 'required',
            'desc4' => 'required',
    ]);
    HContent::find($id)->update($request->all());
    return redirect('/hcontent/content')->with('success', 'Update Successfully');
    }
}
