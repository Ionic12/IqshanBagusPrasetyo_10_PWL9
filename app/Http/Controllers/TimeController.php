<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\TContent;
use Illuminate\Support\Facades\DB;

class TimeController extends Controller
{
    public function index(){
        //fungsi eloquent menampilkan data menggunakan pagination
        $time = $time = DB::table('time')->get(); // Mengambil semua isi tabel
        $time = Time::orderBy('id')->simplePaginate(5);
        //return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
        return view('time.time', [
            'time' => $time ,
             'title' => 'Bikes',
             'carrousel1' => TContent::first()->carrousel1,
             'carrousel2' => TContent::first()->carrousel2,
             'carrousel3' => TContent::first()->carrousel3,
             'desc1' => TContent::first()->desc1,
             'desc2' => TContent::first()->desc2,
             'desc3' => TContent::first()->desc3,
             'type1' => TContent::first()->type1,
             'typedesc1' => TContent::first()->typedesc1,
             'type2' => TContent::first()->type2,
             'typedesc2' => TContent::first()->typedesc2,
        ]);
    }
    public function destroy( $id){
        Time::find($id)->delete();
        return redirect()->back();
    }
    public function show($id){
        $Time = Time::find($id);
        return view('time.detail',['title' => 'Detail Spec'], compact('Time'));
    }
    public function edit($id){
        $Time = DB::table('time')->where('id', $id)->first();;
        return view('time.edit',['title' => 'Edit Spec'],compact('Time'));
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
    Time::find($id)->update($request->all());
    return redirect('/time')->with('success', 'Update Successfully');
    }
    public function create(){
        return view('time.create',[
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
        Time::create($request->all());
        return redirect()->back()->with('success', 'Add Data Successfully');
    }
}
