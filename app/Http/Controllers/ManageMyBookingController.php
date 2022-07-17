<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageBookingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageMyBookingController extends Controller
{
    public function index()
    {
        return view('manageBooking.index');
    }

    public function show(ManageBookingRequest $request)
    {
        $pnr = $request->input('pnr');
        $lastname = $request->input('lastname');
        $booking = DB::table('bookings')
            ->join('flights', 'bookings.flight_id', '=', 'flights.id')
            ->join('routes', 'flights.flight_number', '=', 'routes.id')
            ->where('PNR', $pnr)
            ->where('last_name', $lastname)
            ->select(
                'flights.flight_number',
                'flights.date',
                'bookings.id',
                'bookings.PNR',
                'bookings.last_name',
                'bookings.first_name',
                'bookings.status',
                'routes.origin',
                'routes.destination',
                'routes.depart_time',
                'routes.duration',
            )
            ->get();
        return view('manageBooking.show', ['booking' => $booking, 'pnr' => $pnr]);
    }
    public function seat(Request $requests)
    {
        $flightNum = $_GET['flightNum'];
        $fltD = DB::table('flights')->where('flight_number', $flightNum)->select('date')->get();
        // File::copy('./sm/sm_aircrafts/Y180.json', './sm/sm_flights/' . $fltD[0]->date . '-' . $flightNum . '-Y180.json');


        $seatmap_file = file_get_contents(asset('./sm/sm_flights/' . $fltD[0]->date . '-' . $flightNum . '-Y180.json'));
        $seatmap = json_decode($seatmap_file, true);

        $bookingIds = $requests->input('bookingId');
        $booking1 = [];
        foreach ($bookingIds as $bookingId) {
            array_push($booking1, DB::table('bookings')
                ->where('id', $bookingId)
                ->get());
        }
        return view('manageBooking.seat', ['booking' => $booking1, 'flightNum' => $flightNum, 'seatmap' => $seatmap]);
    }
    public function showseat()
    {
        $flightNum = $_GET['flightNum'];
        $fltD = DB::table('flights')->where('flight_number', $flightNum)->select('date')->get();
        $seatmap_file = file_get_contents(asset('./sm/sm_flights/' . $fltD[0]->date . '-' . $flightNum . '-Y180.json'));
        $seatmap = json_decode($seatmap_file);
        $data = $_GET;
        $listId = [];
        foreach ($data as $key => $value) {
            if ($key !== "flightNum") {
                array_push($listId, $key);
            }
            DB::table('bookings')
                ->where('id', intval($key))
                ->update(['seat_no' => $value, 'status' => 'check-in']);
            foreach ($seatmap as $seat_key => $seat_value) {
                foreach ($seat_value as $row => $stt) {
                    if ($seat_key . $row == $value) {
                        $seat_value->$row = 0;
                    }
                }
            }
        }
        file_put_contents('./sm/sm_flights/' . $fltD[0]->date . '-' . $flightNum . '-Y180.json', json_encode($seatmap));
        return view('manageBooking.showseat', ['listId' => $listId, 'flightNum' => $flightNum]);
    }
    public function boardingpass(Request $requests)
    {
        // $flightNum = $_GET['flightNum'];
        $bookingIds = $requests->input('bookingId');
        $bookings = [];
        foreach ($bookingIds as $bookingId) {
            array_push($bookings, DB::table('bookings')
                ->join('flights', 'bookings.flight_id', '=', 'flights.id')
                ->join('routes', 'flights.flight_number', '=', 'routes.id')
                ->where('bookings.id', $bookingId)
                ->select(
                    'flights.flight_number',
                    'flights.date',
                    'flights.gate',
                    'bookings.id',
                    'bookings.PNR',
                    'bookings.last_name',
                    'bookings.first_name',
                    'bookings.seat_no',
                    'bookings.status',
                    'routes.origin',
                    'routes.destination',
                    'routes.depart_time',
                    'routes.duration',
                )
                ->get());
        }
        // $thisFlight = DB::table('routes')
        //     ->where('id', $flightNum)
        //     ->get();
        return view('manageBooking.boardingpass', ['bookings' => $bookings]);
    }
}
