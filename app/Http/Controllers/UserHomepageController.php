<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserHomepageController extends Controller
{
    //
    public function index(){
        $news = DB::table('news')->get();
        $airports = DB::table('airports')->get();
        return view('airfpt.index', ['news'=>$news, 'airports'=>$airports]);
    }

    public function faqs(){
        return view('airfpt.faqs');
    }

    public function flightList(Request $request){
        $flight_list = $request->all();
        return view('airfpt.booking.flightList', ['flight_list'=>$flight_list]);
    }

    public function searchFlight(){
        return view('airfpt.booking.searchFlight');
    }
}
