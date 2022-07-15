<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Auth;
// use Session;

class AdminListController extends Controller
{
    //
    public function index(){
        $admin = DB::table('admin')->get();
        return view('admin.admin.index', ['admin'=>$admin]);
    }

    public function create(){
        return view('admin.admin.create');
    }

    public function postCreate(Request $request){

        $username = $request->username;
        $password = Hash::make($request->password);
        $role = $request->role;
        $permission = $request->permission;
        DB::table('admin')->insert([
            'username'=>$username,
            'password'=>$password,
            'role'=>$role,
            'permission'=>$permission,
        ]);
        return redirect()->route('admin.admin.index');
    }

    public function update($id){
        $admin = DB::table('admin')
            ->where('id', $id)
            ->first();
        return view('admin.admin.update', ['admin'=>$admin]);
    }

    public function postUpdate(Request $request, $id){

        $admin = $request->all();

        $adminN = Admin::find($id);
        $adminN->username = $admin['username'];
        $adminN->password = Hash::make($request->password);
        $adminN->role = $admin['role'];
        $adminN->permission = $admin['permission'];
        $adminN->save();
        return redirect()->route('admin.admin.index');
    }

    public function delete($id){

        $admin = Admin::find($id);
        $admin->delete();

        return redirect()->action([AdminListController::class, 'index']);
    }
}
