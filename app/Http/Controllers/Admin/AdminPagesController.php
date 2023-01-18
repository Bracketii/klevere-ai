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

    public function showAdminSubscriptions(){

        return view('admin.pages.subscriptions');

    }

    public function showAdminSettings(){

        return view('admin.pages.settings');

    }

    public function showAdminUserList(){

        return view('admin.pages.users.users-list');

    }

    public function showAdminUserRoles(){

        return view('admin.pages.users.roles.all-roles');

    }

    public function showAdminUserPermissions(){

        return view('admin.pages.users.permissions');

    }

    // Functions for showing My Account pages (Admin)
    public function showAdminAccountOverview(){

        return view('admin.pages.account.overview');

    }

    public function showAdminAccountBilling(){

        return view('admin.pages.account.billing');

    }
    public function showAdminAccountProjects(){

        return view('admin.pages.account.projects');

    }
    public function showAdminAccountSettings(){

        return view('admin.pages.account.settings');

    }

}
