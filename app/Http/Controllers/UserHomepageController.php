<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserHomepageController extends Controller
{
    //
    public function index(){
        $news = DB::table('news')->get();
        $origin = DB::table('routes')->select('origin')->get();
        $destination = DB::table('routes')->select('destination')->get();
        echo "<br><br><br><br><br><br>";
        print_r($origin);
        print_r($destination);
        return view('airfpt.index', ['news'=>$news, 'origins'=>$origin, 'destination'=>$destination]);
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
