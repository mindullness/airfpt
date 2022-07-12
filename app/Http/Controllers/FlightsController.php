<?php

namespace App\Http\Controllers;

use App\Models\Aircrafts;
use App\Models\Flights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FlightsController extends Controller
{
    public function index()
    {
        $flights = Flights::all();
        return view('admin.flights.index')->with(['flights' => $flights]);
    }
    public function create()
    {
        $flight_num = DB::table('routes')->get();
        return view('admin.flights.create')->with(['flight_num' => $flight_num]);
    }
    public function postCreate(Request $request)
    {
        $flights = $request->all();
        $flt = Aircrafts::find($flights['acid']);

        $f = new Flights($flights);
        $f->flight_number = $flights['number'];
        $f->date = $flights['date'];
        $f->etd = $flights['etd'];
        $f->gate = $flights['gate'];
        $f->ac_id = $flights['acid'];
        print_r($f->id);
        
        File::copy(public_path('./sm/sm_aircrafts/'.$flt->seatmap), public_path('./sm/sm_flights/'.$flights['date'].'-'.$flights['number'].$flt->seatmap));
        $f->current_seatmap = $flights['date'].'-'.$flights['number'].'-'.$flt->seatmap;

        $f->flight_status = $flights['status'];
        $f->base_price = $flights['price'];
        $f->save();
        return redirect()->route('admin.flights.index');
    }
    public function update($id)
    {
        $f = Flights::find($id);
        $flight_num = DB::table('routes')->get();
        return view('admin.flight.update', ['f' => $f, 'flight_num' => $flight_num]);
    }
    public function postUpdate(Request $request, $id)
    {
        $flights = $request->all();
        $f = Flights::find($id);
        $f->id = $flights['id'];
        $f->flight_num = $flights['number'];
        $f->date = $flights['date'];
        $f->ETD = $flights['etd'];
        $f->gate = $flights['gate'];
        $f->ac_id = $flights['acid'];
        $f->flight_status = $flights['status'];
        $f->base_price = $flights['price'];
        $f->save();
        return redirect()->route('admin.flights.index');
    }
    public function delete($id)
    {

        $f = Flights::find($id);
        $f->delete();
        return redirect()->route('admin.flights.index');
    }
    public function details($id)
    {
        $f = Flights::find($id);
        return view('admin.flight.details', ['f' => $f]);
    }
}
