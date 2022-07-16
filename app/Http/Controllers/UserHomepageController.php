<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;


class UserHomepageController extends Controller
{
    //
    public function index(){
        $news = News::latest()->paginate(4);
        $airports = DB::table('airports')->get();
        return view('airfpt.index', ['news'=>$news, 'airports'=>$airports]);
    }


}
