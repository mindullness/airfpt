<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqsTermController extends Controller
{
    //
    public function faqs(){
        return view('airfpt.faqs');
    }

    public function term_con(){
        return view('airfpt.term_con');
    }

    public function condition_of_carriage(){
        return view('airfpt.condition_of_carriage');
    }

    public function contact(){
        return view('airfpt.contact');
    }

    public function customer_service(){
        return view('airfpt.customer_service');
    }
}
