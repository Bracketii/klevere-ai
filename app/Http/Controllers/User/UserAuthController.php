<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Notifications\UserAccountNotification;
use Carbon\Carbon;
use App\Models\History;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\Models\user as ModelsModelsUser;
use App\Models\Orders;

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
             'password_confirmation' => 'required',
             'email'=>'required|unique:users,email',
             'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()->symbols()]
        ]);

        // Creating token
        $token = md5(time().rand());


        $user=User::create([
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
            'access_token'  => $token,
           ])->orders()->create();
            //   $orderr=Auth::user()->orders()->create();
        // Sending activation link to user email
        $user -> notify(new UserAccountNotification($user));


        return to_route('ShowLogin')->with('danger', 'Please activate your account to log in! Check your email.');

    }

    // Account Activation
    public function accountActivation($token){
        if(!$token){
            return to_route('ShowLogin')->with('danger', 'Access Denied!');
        }
        // Check token validity
        if($token){
            $user_data = User::where('access_token', $token)->first();
            if($user_data){

                $user_data -> update([
                    'access_token'      => NULL,
                    'status'            => true,
                ]);


                return to_route('ShowLogin')->with('success', 'Account verified!');
            }else{
                return to_route('ShowLogin')->with('danger', 'Access Denied!');
            }
        }
    }

    
    public function login(){
        $this->validate(request(),[
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt([
          'email'=>request('email'),
          'password'=>request('password'),
          'status'  => true,
        ])){
            return to_route('user.dashboard');
        }else{
            return redirect()->back()->with('error', 'Please activate your account');
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
