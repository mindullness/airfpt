<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;

class AdminLoginController extends Controller
{
    public function admin_login()
    {
        return view('airfpt.admin_login');
    }

    public function admin_postLogin(Request $request)
    {
        $Adminlogin = [
            'username' => $request->mem_username,
            'password' => $request->mem_password,
        ];
        if (Auth::guard('guard_admin')->attempt($Adminlogin)) {

            return redirect()->action([UserHomepageController::class, 'index']);
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
}
