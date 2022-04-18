<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TContent;
use Illuminate\Support\Facades\DB;

class TContentController extends Controller
{
    public function index(){
        $tcontent = $tcontent = DB::table('tcontent')->get();
        $tcontent = TContent::orderBy('id')->simplePaginate(5);
        return view('tcontent.content', [
            'tcontent' => $tcontent,
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
        TContent::create($request->all());
        return redirect()->back()->with('success', 'Add Data Successfully');
    }
    public function destroy( $id){
        TContent::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $TContent = DB::table('tcontent')->where('id', $id)->first();;
        return view('tcontent.edit',['title' => 'Edit Content'],compact('TContent'));
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
    TContent::find($id)->update($request->all());
    return redirect('/tcontent/content')->with('success', 'Update Successfully');
    }
}
