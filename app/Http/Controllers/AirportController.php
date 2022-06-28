<?php

namespace App\Http\Controllers;

use App\Models\Airports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirportController extends Controller
{
    //
    public function index(){
        $airports = DB::table('airports')->get();
        return view('admin.airports.index', ['airports'=>$airports]);
    }

    public function create(){
        return view('admin.airports.create');
    }

    public function postCreate(Request $request){
        $airports = $request->all();

        $a = new Airports($airports);
        $a->save();

        return redirect()->route('admin.airports.index');
    }
    public function delete($iata_code){
        $airport = Airports::find($iata_code);
        $airport->delete();

        return redirect()->action([AirportController::class, 'index']);
    }
}
