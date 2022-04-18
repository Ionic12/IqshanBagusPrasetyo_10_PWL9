<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Road;
use App\Models\RContent;
use Illuminate\Support\Facades\DB;

class RoadController extends Controller
{
    public function index(){
        $road = $road = DB::table('road')->get();
        $road = Road::orderBy('id')->simplePaginate(5);
        return view('road.road', [
            'road' => $road, 
            'title' => 'Bikes',
            'carrousel1' => RContent::first()->carrousel1,
            'carrousel2' => RContent::first()->carrousel2,
            'carrousel3' => RContent::first()->carrousel3,
            'desc1' => RContent::first()->desc1,
            'desc2' => RContent::first()->desc2,
            'desc3' => RContent::first()->desc3,
            'type1' => RContent::first()->type1,
            'typedesc1' => RContent::first()->typedesc1,
            'type2' => RContent::first()->type2,
            'typedesc2' => RContent::first()->typedesc2,
        ]);
    }
    public function destroy( $id){
        Road::find($id)->delete();
        return redirect()->back();
    }
    public function show($id){
        $Road = Road::find($id);
        return view('road.detail',['title' => 'Detail Spec'], compact('Road'));
    }
    public function edit($id){
        $Road = DB::table('road')->where('id', $id)->first();;
        return view('road.edit',['title' => 'Edit Spec'],compact('Road'));
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
    Road::find($id)->update($request->all());
    return redirect('/road')->with('success', 'Update Successfully');
    }
}
