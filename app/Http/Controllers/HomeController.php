<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('airfpt.index');
    }
    public function faqs(){
        return view('airfpt.faqs');
    }
}
