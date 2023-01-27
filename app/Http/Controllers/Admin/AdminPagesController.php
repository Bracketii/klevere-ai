<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    // Functions for showing Admin pages and sub-pages
    public function showAdminDashboard(){

        return view('admin.pages.dashboard');

    }

    public function showAdminPricing(){

        return view('admin.pages.pricing');

    }


    public function showAdminUsers(){

        return view('admin.pages.users');

    }

    public function showAdminAccount(){

        return view('admin.pages.account.account');

    }
    

    


}
