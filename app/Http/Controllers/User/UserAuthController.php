<?php

namespace App\Http\Controllers\User;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\user as ModelsUser;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\Models\user as ModelsModelsUser;

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
        $user=ModelsUser::create([
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
            return redirect()->back()->with('error', 'credentials not matched');
        }
    }
    public function logout(){
        Auth::guard('web')->logout();
        return to_route('ShowLogin');
    }



    ///reset-password-link///



    // public function SendResetLink(Request $request)
    // {
    //     $request->validate([
    //         'email'=>'required|email|exists:users,email'
    //     ]);

    //     $token = Str::random(64);
    //     DB::table('users')->insert([
    //         'email'=>$request->email,
    //         'token'=>$token,
    //         'created_at'=>Carbon::now(),
    //     ]);
    //     $action_link = route('reset.password.form',['token'=>$token,'email'=>$request->email]);
    //     $body = "We are received a request to reset the password for<b>Your App Name</b> account associated with".$request->email.".You can reset your password by clicking the line bellow";
    //     Mail::send('email-forget', ['action_link'=>$action_link,'body'=>$body], function ($message) use ($request) {
    //         $message->from('noreply@example.com', 'Your App Name');
            
    //         $message->to('$request->email', 'Your Name')
    //                 ->subject('Reset Password');
    //     });
    //     return back()->with('success','We have e-mailed your')
    // }
}
