<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::latest()->get();
        return view('admin.news.index',['news'=>$news]);

    }
    // public function news(News $news ){

    // }

    public function create() {
        return view('admin.news.create');
    }

    public function postCreate(NewsRequest $request) {
        $news = $request->all();
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = $file->getClientOriginalName();
            $file->move('images',$imageName); 
        }else{
            $imageName = null;
        }
        $n = new News($news);
        $n->topic=$news['topic'];
        $n->title=$news['title'];
        $n->content=$news['content'];
        $n->created_at=$news['created_at'];
        $n->image = $imageName;
        $n->save();
        return redirect()->route('admin.news.index');
    }

    public function update($id) {
        $n = News::find($id);
        return view('admin.news.update',['n'=>$n]);
    }

    public function postUpdate(NewsRequest $request,$id) {
        $news = $request->all();
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = $file->getClientOriginalName();
            $file->move('images',$imageName);
        }else{
            $n = News::find($id);
            $imageName = $n->image;
        }
        $n = News::find($id);
        $n->topic=$news['topic'];
        $n->title=$news['title'];
        $n->content=$news['content'];
        $n->created_at=$news['created_at'];
        $n->image = $imageName;
        $n->save();
        return redirect()->route('admin.news.index');
    }

    public function delete($id) {
        $n = News::find($id);
        $n->delete();
        return redirect()->route('admin.news.index');
    } 
    public function details($id) {
        $n = News::find($id);
        return view ('airfpt.user.details',['n'=>$n]);
    }
    public function homeNews(){
        $allNews = News::latest()->paginate(4);
        return view('airfpt.user.homeNews',['allNews'=>$allNews]);
    }
    
    
    public function passenger_info() {
        return view('airfpt.user.passenger_info');
    }
    public function pass_info() {
        return view('airfpt.user.pass_info');
    }
    public function pass_info_carry() {
        return view('airfpt.user.pass_info_carry');
    }
    public function pass_info_checked() {
        return view('airfpt.user.pass_info_checked');
    }
    public function pass_info_cus() {
        return view('airfpt.user.pass_info_cus');
    }
    public function pass_info_travel() {
        return view('airfpt.user.pass_info_travel');
    }
   
    //Destination
 
   

}
