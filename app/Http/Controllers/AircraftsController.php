<?php

namespace App\Http\Controllers;

use App\Models\Aircrafts;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AircraftsController extends Controller
{
    //
    public function index(){
        $aircrafts = Aircrafts::all();       
        return view('admin.aircrafts.index', ['aircrafts'=>$aircrafts]);
    }
    public function create(){
        return view('admin.aircrafts.create');
    }

    public function postCreate(Request $request){

        $aircrafts = $request->all();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect('admin.aircrafts.create', ['errors'=>'Only file with extension "jpg", "png", "jpeg" is allowed!']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move('./img/acrt', $imageName);
        } else{
            $imageName = null;
        }

        // Seatmap
        if($request->hasFile('seatmap')){
            $seatmapfile = $request->file('seatmap');
            $extension = $seatmapfile->getClientOriginalExtension();

            $seatmap = $seatmapfile->getClientOriginalName();
            $seatmapfile->move('./sm/sm_aircrafts', $seatmap);
        } else{
            $seatmap = null;
        }

        $acrt = new Aircrafts($aircrafts);
        $acrt->image = $imageName;
        $acrt->seatmap = $seatmap;
        $acrt->save();

        return redirect()->route('admin.aircrafts.index');
    }

    public function update($id){
        $acrt = Aircrafts::find($id);
        return view('admin.aircrafts.update', ['acrt'=>$acrt]);
    }

    public function postUpdate(Request $request, $id){

        $acrt = $request->all();
        $r = Aircrafts::find($id);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect()->route('admin.aircrafts.update', ['id'=>$id]);
             }
            $imageName = $file->getClientOriginalName();
            $file->move('./img/acrt', $imageName);
        } else{
            $imageName = $r->image;
        }
        if($request->hasFile('seatmap')){
            $seatmapfile = $request->file('seatmap');

            $seatmap = $seatmapfile->getClientOriginalName();
            $seatmapfile->move('./sm/sm_aircrafts', $seatmap);
        } else{
            $seatmap = $r->seatmap;
        }
        
        $r->reg = $acrt['reg'];
        $r->config = $acrt['config'];
        $r->type = $acrt['type'];
        $r->image = $imageName;
        $r->seatmap = $seatmap;
        $r->touch();
        $r->save();
        return redirect()->route('admin.aircrafts.index');
    }

    public function delete($id){
        $acrt = Aircrafts::find($id);
        $acrt->delete();

        return redirect()->action([AircraftsController::class, 'index']);
    }
}
