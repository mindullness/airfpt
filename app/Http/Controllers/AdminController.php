<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function display_pax_booking(){
        $bookings = Bookings::leftjoin('infants', 'bookings.inf_id', '=', 'infants.id')
            ->orderBy('bookings.created_at', 'desc')
            ->select(
                'bookings.*',
                'infants.last_name as inf_last_name',
                'infants.first_name as inf_first_name',
                'infants.dob as inf_dob'
            )
            ->get();
        
        return view('admin.passenger.index', ['bookings'=>$bookings]);
    }
}
