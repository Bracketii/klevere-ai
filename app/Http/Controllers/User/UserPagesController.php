<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPagesController extends Controller
{
    // Functions for showing User pages and sub-pages
    public function showUserDashboard(){

        return view('user.pages.dashboard');

    }

    public function showUserProjects(){

        return view('user.pages.projects.index');

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
    
    

   
}
