<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gravel;
use App\Models\GContent;
use Illuminate\Support\Facades\DB;

class GravelController extends Controller
{
    public function index(){
        $gravel = $gravel = DB::table('gravel')->get();
        $gravel = Gravel::orderBy('id')->simplePaginate(5);
        return view('gravel.gravel', [
            'gravel' => $gravel ,
            'title' => 'Bikes',
            'carrousel1' => GContent::first()->carrousel1,
            'carrousel2' => GContent::first()->carrousel2,
            'carrousel3' => GContent::first()->carrousel3,
            'desc1' => GContent::first()->desc1,
            'desc2' => GContent::first()->desc2,
            'desc3' => GContent::first()->desc3,
            'type1' => GContent::first()->type1,
            'typedesc1' => GContent::first()->typedesc1,
            'type2' => GContent::first()->type2,
            'typedesc2' => GContent::first()->typedesc2,
        ]);
    }
    public function destroy( $id){
        Gravel::find($id)->delete();
        return redirect()->back();
    }
    public function show($id){
        $Gravel = Gravel::find($id);
        return view('gravel.detail',['title' => 'Detail Spec'], compact('Gravel'));
    }
    public function edit($id){
        $Gravel = DB::table('gravel')->where('id', $id)->first();;
        return view('gravel.edit',['title' => 'Edit Spec'],compact('Gravel'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'models' => 'required',
            'type' => 'required',
            'wheels' => 'required',
            'chain' => 'required',
            'shifters' => 'required',
            'handlebar' => 'required',
            'caliper' => 'required',
    ]);
    Gravel::find($id)->update($request->all());
    return redirect('/gravel')->with('success', 'Update Successfully');
    }
    public function create(){
        return view('gravel.create',[
            'title' => 'Add Spec',
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'models' => 'required',
            'type' => 'required',
            'wheels' => 'required',
            'chain' => 'required',
            'shifters' => 'required',
            'handlebar' => 'required',
            'caliper' => 'required',
        ]);
        Gravel::create($request->all());
        return redirect()->back()->with('success', 'Add Data Successfully');
    }
}
