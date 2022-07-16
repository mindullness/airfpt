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
        $bookings = Bookings::orderBy('created_at', 'desc')->get();
        
        return view('admin.passenger.index', ['bookings'=>$bookings]);
    }
}
