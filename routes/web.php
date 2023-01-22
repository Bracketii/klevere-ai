<?php

use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\User\UserPagesController;
use Illuminate\Support\Facades\Route;

/**---------------------------------------------------------- */

Route::redirect('/','login');

/**
 * Admin all pages routes
 */

// Admin auth routes
Route::get('admin/login',[AdminAuthController::class,'showlogin'])->name('admin.showlogin');
Route::post('admin/login',[AdminAuthController::class,'login'])->name('admin.login');
Route::get('admin/logout',[AdminAuthController::class,'logout'])->name('admin.logout');

// Middleware Admin routes
Route::group(['middleware' => 'adminauth'], function () {
    Route::get('admin', [AdminPagesController::class, 'showAdminDashboard'])->name('admin.dashboard');
    Route::get('admin-pricing', [AdminPagesController::class, 'showAdminPricing'])->name('admin.pricing');
    Route::get('admin-users', [AdminPagesController::class, 'showAdminUsers'])->name('admin.users');
    Route::get('admin-account', [AdminPagesController::class, 'showAdminAccount'])->name('admin.account');
});





/**
 * User all pages routes
 */

// User auth routes
Route::get('register',[UserAuthController::class,'ShowRegister'])->name('ShowRegister');
Route::post('register',[UserAuthController::class,'Register'])->name('Register');
Route::get('login',[UserAuthController::class,'Showlogin'])->name('ShowLogin');
Route::post('login',[UserAuthController::class,'login'])->name('login');
Route::get('logout',[UserAuthController::class,'logout'])->name('logout');
Route::get('forgot-password',[UserAuthController::class,'ShowForgotPassword'])->name('show.forgot.password');

// Middleware user routes
Route::group(['middleware'=>'userauth'],function(){
    Route::get('user', [UserPagesController::class, 'showUserDashboard'])->name('user.dashboard');
    Route::get('user-projects', [UserPagesController::class, 'showUserProjects'])->name('user.projects');
    Route::get('user-kleverechat', [UserPagesController::class, 'showUserKlevereChat'])->name('user.kleverechat');
    Route::get('user-account', [UserPagesController::class, 'showUserAccount'])->name('user.account');
    Route::get('user-billing', [UserPagesController::class, 'showUserBilling'])->name('user.billing');

});



/**
 * Test Routes
 */
