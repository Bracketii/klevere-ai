<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showlogin(){
        return view('auth.admin.signin');
    }
    public function login(){
        $this->validate(request(),[
            'name'=>'required',
            'password'=>'required'
        ]);
        if(Auth::guard('admin')->attempt([
          'name'=>request('name'),
          'password'=>request('password')
        ])){
            return to_route('admin.dashboard');
        }else{
            return redirect()->back()->with('error', 'credential not matched');
        }

    }
    public function logout(){
        Auth::guard('admin')->logout();
        return to_route('admin.showlogin');
    }
}
