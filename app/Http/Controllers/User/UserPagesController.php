<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\History;
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

        $history=History::where('user_id',Auth::id())->latest()->paginate(3);


        return view('user.pages.projects.index',compact('history'));

    }

    // views for avatar coming soon

    public function showUserKlevereChat(){

        return view('user.pages.chat.kleverechat');

    }

    // User account pages
    public function showUserAccount(){

        return view('user.pages.account.account');

    }
    public function showUserBilling(){

        return view('user.pages.account.billing');

    }

    public function showPricing(){

        return view('pricing');

    }





}
