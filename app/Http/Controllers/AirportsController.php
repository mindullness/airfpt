<?php

namespace App\Http\Controllers;

use App\Models\Airports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirportsController extends Controller
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

    public function update($iata_code){
        $airport = DB::table('airports')
            ->where('iata_code', $iata_code)
            ->first();
        return view('admin.airports.update', ['airport'=>$airport]);
    }

    public function postUpdate(Request $request, $iata_code){

        $airports = $request->all();

        $airport = Airports::find($iata_code);
        $airport->iata_code = $airports['iata_code'];
        $airport->name = $airports['name'];
        $airport->city = $airports['city'];
        $airport->save();
        return redirect()->route('admin.airports.index');
    }

    public function delete($iata_code){

        $airport = Airports::find($iata_code);
        $airport->delete();

        return redirect()->action([AirportsController::class, 'index']);
    }
}
