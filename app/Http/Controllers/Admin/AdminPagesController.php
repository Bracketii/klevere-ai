<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Product;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPagesController extends Controller
{
    // Functions for showing Admin pages and sub-pages
    public function showAdminDashboard(){

        return view('admin.pages.dashboard');

    }

    public function showAdminPricing(){

        $all_products = Product::get();
        return view('admin.pages.pricing',[
            'all_products'    => $all_products,
        ]);

    }


    public function showAdminUsers(){

        $all_users = user::latest()->get();

        return view('admin.pages.users', [
            'all_users'     => $all_users,
        ]);

    }

    public function showAdminAccount(){

        return view('admin.pages.account.account');

    }
    public function showAdminAnalytics(){

        return view('admin.pages.analytics');

    }
    

    


}
