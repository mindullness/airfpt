<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberListController extends Controller
{
    //
    public function index()
    {
        $member = DB::table('member')->get();
        return view('admin.member.index', ['member'=>$member]);
    }

    public function create()
    {
        return view('admin.member.create');
    }

    public function postCreate(Request $request)
    {
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $username = $request->username;
        $password = Hash::make($request->password);
        $phone = $request->phone;
        $title = $request->title;
        $discount_rate_id = $request->discount;
        $points = $request->points;
        $role = $request->role;
        DB::table('member')->insert([
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'email'=>$email,
            'username'=>$username,
            'password'=>$password,
            'phone'=>$phone,
            'title'=>$title,
            'discount_rate_id'=>$discount_rate_id,
            'points'=>$points,
            'role'=>$role,
        ]);
        return redirect()->route('admin.member.index');
    }

    public function update($id){
        $member = DB::table('member')
            ->where('id', $id)
            ->first();
        return view('admin.member.update', ['member'=>$member]);
    }

    public function postUpdate(Request $request, $id){

        $member = $request->all();

        $memberN = Member::find($id);
        $memberN->first_name = $member['first_name'];
        $memberN->last_name = $member['last_name'];
        $memberN->discount_rate_id = $member['discount'];
        $memberN->username = $member['username'];
        $memberN->password = Hash::make($request->password);
        $memberN->email = $member['email'];
        $memberN->phone = $member['phone'];
        $memberN->role = $member['role'];
        $memberN->points = $member['points'];
        $memberN->title = $member['title'];
        $memberN->save();
        return redirect()->action([MemberListController::class, 'index']);
    }

    public function delete($id){

        $admin = Member::find($id);
        $admin->delete();

        return redirect()->action([MemberListController::class, 'index']);
    }
}
