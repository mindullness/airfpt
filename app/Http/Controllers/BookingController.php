<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use App\Models\Infants;
use App\Models\Bookings;
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

        $tax = 440000;
        // CHD = base_price * 0.75 (rate)
        $fee_chd = 0.75;
        $fee_inf = 100000;

        $adl = intval($bookings['adl_quantity']);
        $chd = intval($bookings['chd_quantity']);
        $inf = intval($bookings['inf_quantity']);

        // Generate PNR
        $pnr = time() + $adl + $chd + $inf;
        $pnr = strtoupper(substr(dechex($pnr), -6));

        // *** OUTBOUND FLIGHT ***

        // Get flight id
        $ob_flight_id = $bookings['txt_ob_flight'];
        // Get flight base price by flight id
        $ob_taxed_price = Flights::all()->find($ob_flight_id)->base_price + $tax;

        // Create INFANT first if any
        $inf_guardians = array();

        for ($i = 1 + $adl + $chd, $j = 1; $i <=  $adl + $chd + $inf; $i++, $j++) {

            $last_name = $bookings['last_name' . $i];
            $first_name = $bookings['first_name' . $i];
            $dob = $bookings['year' . $i] . '-' . $bookings['month' . $i] . '-' . $bookings['day' . $i];

            DB::table('infants')->insert([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'dob' =>  $dob
            ]);
            $temp_inf_id = (Infants::all()->last()->id);

            $inf_guardians[$bookings['accompanied_' . $j]] = $temp_inf_id;
        }

        // CREATE ADL
        for ($i = 1; $i <= $adl; $i++) {
            $adl_price = $ob_taxed_price;
            foreach ($inf_guardians as $guardian => $inf_id_val) {
                if ($i == $guardian) {
                    $inf_id = $inf_id_val;
                    $adl_price = $ob_taxed_price + $fee_inf;
                    break;
                } else {
                    $inf_id = null;
                    $adl_price = $ob_taxed_price;
                }
            }

            DB::table('bookings')->insert([
                'PNR' => $pnr,
                'created_at' => date('Y-m-d H:i:s'),
                'mem_id' => $bookings['mem_id' . $i],
                'flight_id' => $ob_flight_id,
                'title' => $bookings['title' . $i],
                'first_name' => $bookings['first_name' . $i],
                'last_name' => $bookings['last_name' . $i],
                'gender' => 'adl',
                'inf_id' => $inf_id,
                'status' => 'confirmed',
                'phone' => $bookings['phone'],
                'email' => $bookings['email'],
                'price' => $adl_price
            ]);
        }

        // CREATE CHD
        for ($i = $adl + 1; $i <= $adl + $chd; $i++) {

            DB::table('bookings')->insert([
                'PNR' => $pnr,
                'created_at' => date('Y-m-d H:i:s'),
                'mem_id' => $bookings['mem_id' . $i],
                'flight_id' => $ob_flight_id,
                'title' => $bookings['title' . $i],
                'first_name' => $bookings['first_name' . $i],
                'last_name' => $bookings['last_name' . $i],
                'gender' => 'chd',
                'status' => 'confirmed',
                'phone' => $bookings['phone'],
                'email' => $bookings['email'],
                'price' => $ob_taxed_price * $fee_chd
            ]);
        }

        // *** INBOUND FLIGHTS if any ***
        if (!empty($bookings['txt_ib_flight'])) {
            // Get flight id
            $ib_flight_id = $bookings['txt_ib_flight'];
            // Get flight base price by flight id
            $ib_taxed_price = Flights::all()->find($ib_flight_id)->base_price + $tax;

            // Create INFANT first if any
            $inf_guardians = array();

            for ($i = 1 + $adl + $chd, $j = 1; $i <=  $adl + $chd + $inf; $i++, $j++) {

                $last_name = $bookings['last_name' . $i];
                $first_name = $bookings['first_name' . $i];
                $dob = $bookings['year' . $i] . '-' . $bookings['month' . $i] . '-' . $bookings['day' . $i];

                DB::table('infants')->insert([
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'dob' =>  $dob
                ]);
                $temp_inf_id = (Infants::all()->last()->id);

                $inf_guardians[$bookings['accompanied_' . $j]] = $temp_inf_id;
            }

            // CREATE ADL
            for ($i = 1; $i <= $adl; $i++) {
                $adl_price = $ib_taxed_price;
                foreach ($inf_guardians as $guardian => $inf_id_val) {
                    if ($i == $guardian) {
                        $inf_id = $inf_id_val;
                        $adl_price = $ib_taxed_price + $fee_inf;
                        break;
                    } else {
                        $inf_id = null;
                        $adl_price = $ib_taxed_price;
                    }
                }

                DB::table('bookings')->insert([
                    'PNR' => $pnr,
                    'created_at' => date('Y-m-d H:i:s'),
                    'mem_id' => $bookings['mem_id' . $i],
                    'flight_id' => $ib_flight_id,
                    'title' => $bookings['title' . $i],
                    'first_name' => $bookings['first_name' . $i],
                    'last_name' => $bookings['last_name' . $i],
                    'gender' => 'adl',
                    'inf_id' => $inf_id,
                    'status' => 'confirmed',
                    'phone' => $bookings['phone'],
                    'email' => $bookings['email'],
                    'price' => $adl_price
                ]);
            }

            // CREATE CHD
            for ($i = $adl + 1; $i <= $adl + $chd; $i++) {

                DB::table('bookings')->insert([
                    'PNR' => $pnr,
                    'created_at' => date('Y-m-d H:i:s'),
                    'mem_id' => $bookings['mem_id' . $i],
                    'flight_id' => $ib_flight_id,
                    'title' => $bookings['title' . $i],
                    'first_name' => $bookings['first_name' . $i],
                    'last_name' => $bookings['last_name' . $i],
                    'gender' => 'chd',
                    'status' => 'confirmed',
                    'phone' => $bookings['phone'],
                    'email' => $bookings['email'],
                    'price' => $ib_taxed_price * $fee_chd
                ]);
            }
        }
        // End if empty($booking['txt_ib_flight'])

        return redirect()->route('airfpt.booking.travelItinerary', $pnr);
    }

    public function travelItinerary($pnr){

        $travelItinerary = Bookings::where('pnr', $pnr)->get();

        return view('airfpt.booking.travelItinerary', ['bookings'=> $travelItinerary]);
    }
}
