<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Models\user as ModelsModelsUser;
use App\Models\user as ModelsUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserAuthController extends Controller
{
    public function ShowRegister(){
        return view('auth.signup');
    }
    public function Showlogin(){
        return view('auth.signin');
    }
    public function Register(){

        $this->validate(request(),[
             'firstname'=>'required',
             'lastname'=>'required',
             'email'=>'required|unique:users,email',
            //  'password'=>'required|confirmed',
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()->symbols()]
        ]);
        $user=\App\Models\user::create([
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
        ]);
        return to_route('ShowLogin');

    }
    public function login(){
        $this->validate(request(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt([
          'email'=>request('email'),
          'password'=>request('password')
        ])){
            return to_route('user.dashboard');
        }else{
            return redirect()->back()->with('error', 'credential not matched');
        }
    }
    public function logout(){
        Auth::guard('web')->logout();
        return to_route('ShowRegister');
    }
}
