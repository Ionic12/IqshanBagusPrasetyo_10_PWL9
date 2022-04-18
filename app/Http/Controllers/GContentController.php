<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GContent;
use Illuminate\Support\Facades\DB;

class GContentController extends Controller
{
    public function index(){
        $gcontent = $gcontent = DB::table('gcontent')->get();
        $gcontent = GContent::orderBy('id')->simplePaginate(5);
        return view('gcontent.content', [
            'gcontent' => $gcontent,
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
        GContent::create($request->all());
        return redirect()->back()->with('success', 'Add Data Successfully');
    }
    public function destroy( $id){
        GContent::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $GContent = DB::table('gcontent')->where('id', $id)->first();;
        return view('gcontent.edit',['title' => 'Edit Content'],compact('GContent'));
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
    GContent::find($id)->update($request->all());
    return redirect('/gcontent/content')->with('success', 'Update Successfully');
    }
}
