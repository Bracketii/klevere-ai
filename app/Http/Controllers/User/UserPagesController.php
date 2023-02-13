<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\user;

class UserPagesController extends Controller
{
    // Functions for showing User pages and sub-pages
    public function showUserDashboard(){
        

        return view('user.pages.dashboard');

    }

    public function showUserProjects(){

        $history=History::where('user_id',Auth::id())->latest()->paginate(7);


        return view('user.pages.projects.index',compact('history'));

    }

    // views for avatar coming soon

    public function showUserKlevereChat(){

        return view('user.pages.chat.kleverechat');

    }

    // User account pages
    public function showUserAccount(){
        $user_data = Orders::where("user_id",Auth::id())->latest()->get();
        return view('user.pages.account.account', [
            'user_data'     => $user_data,
        ]);

    }
    public function showUserBilling(){

        return view('user.pages.account.billing');

    }

    public function showPricing(){

        return view('pricing');

    }





}
