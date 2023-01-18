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
    public function showUserAccountOverview(){

        return view('user.pages.account.overview');

    }
    public function showUserAccountBilling(){

        return view('user.pages.account.billing');

    }
    public function showUserAccountProjects(){

        return view('user.pages.account.projects');

    }
    public function showUserAccountSettings(){

        return view('user.pages.account.settings');

    }

   
}
