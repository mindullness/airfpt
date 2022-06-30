<?php

namespace App\Http\Controllers;

use App\Models\Aircrafts;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AircraftsController extends Controller
{
    //
    public function index(){
        $aircrafts = Aircrafts::all();
        return view('admin.aircrafts.index', ['aircrafts'=>$aircrafts]);
    }
    public function create(){
        return view('admin.aircrafts.create');
    }

    public function postCreate(Request $request){
        $aircrafts = $request->all();

        $acrt = new Aircrafts($aircrafts);
        $acrt->save();

        return redirect()->route('admin.aircrafts.index');
    }

    public function update($id){
        $acrt = Aircrafts::find($id);
        return view('admin.aircrafts.update', ['acrt'=>$acrt]);
    }

    public function postUpdate(Request $request, $id){

        $acrt = $request->all();

        $r = Aircrafts::find($id);
        $r->reg = $acrt['reg'];
        $r->config = $acrt['config'];
        $r->type = $acrt['type'];
        $r->save();
        return redirect()->route('admin.aircrafts.index');
    }

    public function delete($id){
        $acrt = Aircrafts::find($id);
        $acrt->delete();

        return redirect()->action([AircraftsController::class, 'index']);
    }
}
