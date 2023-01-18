<?php

use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\User\UserPagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Admin all pages routes
Route::get('admin', [AdminPagesController::class, 'showAdminDashboard'])->name('admin.dashboard');
Route::get('admin-pricing', [AdminPagesController::class, 'showAdminPricing'])->name('admin.pricing');
Route::get('admin-subscriptions', [AdminPagesController::class, 'showAdminSubscriptions'])->name('admin.subscriptions');
Route::get('admin-userlist', [AdminPagesController::class, 'showAdminUserList'])->name('admin.userlist');
Route::get('admin-userroles', [AdminPagesController::class, 'showAdminUserRoles'])->name('admin.userroles');
Route::get('admin-settings', [AdminPagesController::class, 'showAdminSettings'])->name('admin.settings');
Route::get('admin-userpermissions', [AdminPagesController::class, 'showAdminUserPermissions'])->name('admin.userpermissions');
Route::get('admin-account-overview', [AdminPagesController::class, 'showAdminAccountOverview'])->name('admin.account.overview');
Route::get('admin-account-billing', [AdminPagesController::class, 'showAdminAccountBilling'])->name('admin.account.billing');
Route::get('admin-account-projects', [AdminPagesController::class, 'showAdminAccountProjects'])->name('admin.account.projects');
Route::get('admin-account-settings', [AdminPagesController::class, 'showAdminAccountSettings'])->name('admin.account.settings');

// User all pages routes
Route::get('user', [UserPagesController::class, 'showUserDashboard'])->name('user.dashboard');
Route::get('user-account-overview', [UserPagesController::class, 'showUserAccountOverview'])->name('user.account.overview');
Route::get('user-account-billing', [UserPagesController::class, 'showUserAccountBilling'])->name('user.account.billing');
Route::get('user-account-projects', [UserPagesController::class, 'showUserAccountProjects'])->name('user.account.projects');
Route::get('user-account-settings', [UserPagesController::class, 'showUserAccountSettings'])->name('user.account.settings');
// The operation pages will be added soon after the authentication
/**
 * Operation pages: Blog post generate, product desctiptions . . . and others with OpenAI API
 */



