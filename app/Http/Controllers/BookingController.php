<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    //
    public function book(Request $request)
    {
  
        $ori_airports = DB::table("airports")
            ->where('iata_code', '=', $request->origin)->first();
        
        $dest_airports = DB::table("airports")
            ->where('iata_code', '=', $request->destination)->first();

            // dd($ori_airports, $dest_airports);

        $obFlights = DB::table("flights as f")
            ->join('routes as r', 'f.flight_number', '=', 'r.id')
            ->where('f.date', '=', $request->depart_date)
            ->where('r.origin', '=', $request->origin)
            ->where('r.destination', '=', $request->destination)
            ->select(
                'f.*',
                'r.origin', 'r.destination', 'r.depart_time', 'duration'
            )
            ->get();

        if ($request->isRoundTrip == 'roundtrip') {
            $ibFlights = DB::table("flights as f")
                ->join('routes as r', 'f.flight_number', '=', 'r.id')
                ->where('f.date', '=', $request->return_date)
                ->where('r.origin', '=', $request->destination)
                ->where('r.destination', '=', $request->origin)
                ->select(
                    'f.*',
                    'r.origin', 'r.destination', 'r.depart_time', 'duration'
                )
                ->get();

            return view('airfpt.booking.booking', compact('ori_airports', 'dest_airports','obFlights', 'ibFlights'));
        }else{
            return view('airfpt.booking.booking', compact('ori_airports', 'dest_airports', 'obFlights'));
        }
    }

    
}
