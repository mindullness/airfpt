<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    //
    public function book(Request $request)
    {
        $obFlights = DB::table("flights as f")
            ->join('routes as r', 'f.flight_number', '=', 'r.id')
            ->join('airports as a1', 'a1.iata_code', '=', 'r.origin')
            ->join('airports as a2', 'a2.iata_code', '=' , 'r.destination')
            ->where('f.date', '=', $request->depart_date)
            ->where('r.origin', '=', $request->origin)
            ->where('r.destination', '=', $request->destination)
            ->select(
                'f.*',
                'r.*',
                'a1.name as origin_name',
                'a2.name as dest_name',
                'a1.city as origin_city',
                'a2.city as dest_city'
            )->get();
            $ibFlights = DB::table("flights as f")
            ->join('routes as r', 'f.flight_number', '=', 'r.id')
            ->join('airports as a1', 'a1.iata_code', '=', 'r.origin')
            ->join('airports as a2', 'a2.iata_code', '=' , 'r.destination')
            ->where('f.date', '=', $request->depart_date)
            ->where('r.origin', '=', $request->destination)
            ->where('r.destination', '=', $request->origin)
            ->select(
                'f.*',
                'r.*',
                'a1.name as origin_name',
                'a2.name as dest_name',
                'a1.city as origin_city',
                'a2.city as dest_city'
            )->get();
 
        return view('airfpt.booking.booking', compact('obFlights', 'ibFlights'));
    }
}
