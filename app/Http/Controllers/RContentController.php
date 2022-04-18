<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RContent;
use Illuminate\Support\Facades\DB;

class RContentController extends Controller
{
    public function index(){
        $rcontent = $rcontent = DB::table('rcontent')->get();
        $rcontent = RContent::orderBy('id')->simplePaginate(5);
        return view('rcontent.content', [
            'rcontent' => $rcontent,
            'title' => 'Add Content',
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'carrousel1' => 'required',
            'carrousel2' => 'required',
            'carrousel3' => 'required',
            'desc1' => 'required',
            'desc2' => 'required',
            'desc3' => 'required',
            'type1' => 'required',
            'type2' => 'required',
            'typedesc1' => 'required',
            'typedesc2' => 'required',
        ]);
        RContent::create($request->all());
        return redirect()->back()->with('success', 'Add Data Successfully');
    }
    public function destroy( $id){
        RContent::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $RContent = DB::table('rcontent')->where('id', $id)->first();;
        return view('rcontent.edit',['title' => 'Edit Content'],compact('RContent'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'carrousel1' => 'required',
            'carrousel2' => 'required',
            'carrousel3' => 'required',
            'desc1' => 'required',
            'desc2' => 'required',
            'desc3' => 'required',
            'type1' => 'required',
            'type2' => 'required',
            'typedesc1' => 'required',
            'typedesc2' => 'required',
    ]);
    RContent::find($id)->update($request->all());
    return redirect('/rcontent/content')->with('success', 'Update Successfully');
    }
}
