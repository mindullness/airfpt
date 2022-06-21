<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserHomepageController extends Controller
{
    //
    public function index(){
        $news = DB::table('news')->get();
        return view('airfpt.index', ['news'=>$news]);
    }

    public function faqs(){
        return view('airfpt.faqs');
    }
}
