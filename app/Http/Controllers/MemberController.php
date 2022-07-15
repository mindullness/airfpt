<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest_PhucDuy;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class MemberController extends Controller
{
    public function mem_register(){
        return view('airfpt.mem_register');
    }

    public function mem_postRegister(LoginRequest_PhucDuy $request)
    {
            $first_name = $request->mem_first_name;
            $last_name = $request->mem_last_name;
            $email = $request->mem_email;
            $username = $request->mem_username;
            $password = Hash::make($request->mem_password);
            $phone = $request->mem_phone;
            $title = $request->mem_title;
            DB::table('member')->insert([
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'email'=>$email,
                'username'=>$username,
                'password'=>$password,
                'phone'=>$phone,
                'title'=>$title,
            ]);
        $alert='Member created succesfully. You can now login.';
        return redirect()->action([MemberController::class, 'mem_login'])->with('alert',$alert);
    }

    public function mem_login()
    {
        return view('airfpt.mem_login');
    }

    public function mem_postLogin(Request $request)
    {
        $alert2 ='Username hoặc Password không chính xác.';
        $login = [
            'username' => $request->mem_username,
            'password' => $request->mem_password,
        ];
        if (Auth::guard('web')->attempt($login)) {
            if (Auth::user()->role == '1') {
                
                return redirect()->action([AdminController::class, 'index']);

            }
            return redirect()->action([UserHomepageController::class, 'index']);
        } else {
            return redirect()->back()->with('alert',$alert2);
        }
    }

    public function mem_update(){
        return view('airfpt.mem_update');
    }

    public function mem_postUpdate(LoginRequest_PhucDuy $request){
        $member = $request->all();

        $memberN = Member::find(Auth::id());
        $memberN->first_name = $member['mem_first_name'];
        $memberN->last_name = $member['mem_last_name'];
        $memberN->username = $member['mem_username'];
        $memberN->password = Hash::make($request->mem_password);
        $memberN->email = $member['mem_email'];
        $memberN->phone = $member['mem_phone'];
        $memberN->title = $member['mem_title'];
        $memberN->save();
        return redirect()->action([MemberController::class, 'mem_detail']);
    }

    public function mem_pass()
    {
        return view('airfpt.mem_pass');
    }

    public function mem_detail()
    {
        return view('airfpt.mem_detail');
    }
}
