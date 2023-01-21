<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\User\UserPagesController;
use App\Http\Controllers\Admin\AdminPagesController;

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

route::redirect('/','login');
// Admin all pages routes
Route::get('admin/login',[AdminAuthController::class,'showlogin'])->name('admin.showlogin');
Route::post('admin/login',[AdminAuthController::class,'login'])->name('admin.login');
Route::get('admin/logout',[AdminAuthController::class,'logout'])->name('admin.logout');
Route::group(['middleware'=>'adminauth'],function(){
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
});



// User all pages routes
Route::get('register',[UserAuthController::class,'ShowRegister'])->name('ShowRegister');
Route::post('register',[UserAuthController::class,'Register'])->name('Register');
Route::get('login',[UserAuthController::class,'Showlogin'])->name('ShowLogin');
Route::post('login',[UserAuthController::class,'login'])->name('login');
Route::get('logout',[UserAuthController::class,'logout'])->name('logout');
Route::get('forgot-password',[UserAuthController::class,'ShowForgotPassword'])->name('show.forgot.password');

Route::group(['middleware'=>'userauth'],function(){
    Route::get('user', [UserPagesController::class, 'showUserDashboard'])->name('user.dashboard');
    Route::get('user-account-overview', [UserPagesController::class, 'showUserAccountOverview'])->name('user.account.overview');
    Route::get('user-account-billing', [UserPagesController::class, 'showUserAccountBilling'])->name('user.account.billing');
    Route::get('user-account-projects', [UserPagesController::class, 'showUserAccountProjects'])->name('user.account.projects');
    Route::get('user-account-settings', [UserPagesController::class, 'showUserAccountSettings'])->name('user.account.settings');
});


////socialite in google////
Route::get('google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google');


Route::get('google/callback', function () {
    $user = Socialite::driver('google')->user();
    $userEmail = $user->getEmail();
    $userName = strtolower(implode('_',explode(' ',$user->getName()))); 

    $getUser = \App\Models\user::where('email',$userEmail)->first();
    
    if($getUser){
        \Illuminate\Support\Facades\Auth::login($getUser);
        return redirect('user');
    } else{
        $user = \App\Models\user::create([
            'firstname' => $userName,
            'lastname' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
        \Illuminate\Support\Facades\Auth::login($user);
        return redirect('user');
    }

    // $user->token
});



////socialite in facebook////
Route::get('facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('facebook');


Route::get('facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();
    $userEmail = $user->getEmail();
    $userName = strtolower(implode('_',explode(' ',$user->getName()))); 

    $getUser = \App\Models\user::where('email',$userEmail)->first();
    
    if($getUser){
        \Illuminate\Support\Facades\Auth::login($getUser);
        return redirect('user');
    } else{
        $user = \App\Models\user::create([
            'firstname' => $userName,
            'lastname' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
        \Illuminate\Support\Facades\Auth::login($user);
        return redirect('user');
    }

    // $user->token
});
////socialite in linked-in////
Route::get('linkedin/redirect', function () {
    return Socialite::driver('linkedin')->redirect();
})->name('linkedin');


Route::get('linkedin/callback', function () {
    $user = Socialite::driver('linkedin')->user();
    $userEmail = $user->getEmail();
    $userName = strtolower(implode('_',explode(' ',$user->getName()))); 

    $getUser = \App\Models\user::where('email',$userEmail)->first();
    
    if($getUser){
        \Illuminate\Support\Facades\Auth::login($getUser);
        return redirect('user');
    } else{
        $user = \App\Models\user::create([
            'firstname' => $userName,
            'lastname' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
        \Illuminate\Support\Facades\Auth::login($user);
        return redirect('user');
    }

    // $user->token
});



// The operation pages will be added soon after the authentication
/**
 * Operation pages: Blog post generate, product desctiptions . . . and others with OpenAI API
 */


// The operation pages will be added soon after the authentication
/**
 * Operation pages: Blog post generate, product desctiptions . . . and others with OpenAI API
 */



