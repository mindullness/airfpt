<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Routes;

class RoutesController extends Controller
{
    //
    public function index(){
        $routes = Routes::all();
        return view('admin.routes.index', ['routes'=>$routes]);
    }

    public function create(){
        return view('admin.routes.create');
    }

    public function postCreate(Request $request){
        $routes = $request->all();

        $r = new Routes($routes);
        $r->save();

        return redirect()->route('admin.routes.index');
    }

    public function update($id){
        $route = Routes::find($id);
        return view('admin.routes.update', ['route'=>$route]);
    }

    public function postUpdate(Request $request, $id){

        $route = $request->all();

        $r = Routes::find($id);
        $r->id = $route['id'];
        $r->origin = $route['origin'];
        $r->destination = $route['destination'];
        $r->depart_time = $route['depart_time'];
        $r->duration = $route['duration'];
        $r->save();
        return redirect()->route('admin.routes.index');
    }

    public function delete($id){
        $route = Routes::find($id);
        $route->delete();

        return redirect()->action([RoutesController::class, 'index']);
    }
}
