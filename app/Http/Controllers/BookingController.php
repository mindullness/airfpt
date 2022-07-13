<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    //
    public function book(Request $request)
    {
        $adl = $request['adl'];
        $chd = $request['chd'];
        $inf = $request['inf'];

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
                'r.origin',
                'r.destination',
                'r.depart_time',
                'duration'
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
                    'r.origin',
                    'r.destination',
                    'r.depart_time',
                    'duration'
                )
                ->get();

            return view('airfpt.booking.booking', compact('ori_airports', 'dest_airports', 'obFlights', 'ibFlights', 'adl', 'chd', 'inf'));
        } else {
            return view('airfpt.booking.booking', compact('ori_airports', 'dest_airports', 'obFlights', 'adl', 'chd', 'inf'));
        }
    }

    public function postBooking(Request $request)
    {
        $bookings = $request->all();

        $ob_flight_id = $bookings['txt_ob_flight'];
        $ib_flight_id = $bookings['txt_ib_flight'];
        $adl = intval($bookings['adl_quantity']);
        $chd = intval($bookings['chd_quantity']);
        $inf = intval($bookings['inf_quantity']);

        // Create Infant first
        for ($i = 1 + $adl + $chd; $i <=  $adl + $chd + $inf; $i++) {

            $last_name = $bookings['last_name' . $i];
            $first_name = $bookings['first_name' . $i];
            $dob = $bookings['year' . $i] . '-' . $bookings['month' . $i] . '-' . $bookings['day' . $i];
            
            DB::table('infants')->insert([
                'first_name' => $first_name,
                'last_name'=> $last_name,
                'dob'=>  $dob
            ]);
        }
        for ($i = 1; $i <= $adl; $i++) {
            for($j = 1; $j<=$inf; $j++){
                if($i == $bookings['accompanied_'.$j]){
                    $inf_id = $j;
                }
            }
            $last_name = $bookings['last_name' . $i];
        }

        dd($adl, $chd, $inf);
        return view('airfpt.index');
    }
}
