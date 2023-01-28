<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AI\AIController;
use App\Http\Controllers\AI\MarketingController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\User\UserPagesController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\ConfirmablePasswordController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
Route::get('forgot-password',[ForgotPasswordController::class,'ShowForgotPassword'])->name('show.forgot.password');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


// Middleware user routes
Route::group(['middleware'=>'userauth'],function(){
    Route::get('user', [UserPagesController::class, 'showUserDashboard'])->name('user.dashboard');
    Route::get('user-projects', [UserPagesController::class, 'showUserProjects'])->name('user.projects');
    Route::get('user-account', [UserPagesController::class, 'showUserAccount'])->name('user.account');
    Route::get('user-billing', [UserPagesController::class, 'showUserBilling'])->name('user.billing');
    /**
     * AI routes
     */
    // Chat
    Route::get('chat', [AIController::class, 'index'])->name('chat');
    Route::post('chat-text', [AIController::class, 'textCompletion'])->name('chat.text');

    // Marketing
    Route::get('marketing', [MarketingController::class, 'index'])->name('marketing.chat');
    Route::post('marketing-result', [MarketingController::class, 'textCompletion'])->name('marketing.result');

});

// Route::get('confirm-password',[ConfirmablePasswordController::class,'confirmPassword'])->name('user.confirm.password');
// Route::post('submit-password',[ConfirmablePasswordController::class,'SubmitPassword'])->name('user.submit.password');




////socialite in google////
Route::get('google/redirect', function () {
    return Laravel\Socialite\Facades\Socialite::driver('google')->redirect();
})->name('google');

Route::get('google/callback', function () {
    $user = Socialite::driver('google')->user();
    $userEmail = $user->getEmail();
    $userName = strtolower(implode('_',explode(' ',$user->getName()))); 

    $getUser = \App\Models\user::where('email',$userEmail)->first();
    
    if($getUser){
        Auth::login($getUser);
        return redirect('user');
    } else{
        $user = \App\Models\user::create([
            'firstname' => $userName,
            'lastname' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
        Auth::login($user);
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
        Auth::login($getUser);
        return redirect('user');
    } else{
        $user = \App\Models\user::create([
            'firstname' => $userName,
            'lastname' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
        Auth::login($user);
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
        Auth::login($getUser);
        return redirect('user');
    } else{
        $user = \App\Models\user::create([
            'firstname' => $userName,
            'lastname' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
        Auth::login($user);
        return redirect('user');
    }

    // $user->token
});







/**
 * Test Routes
 */
// API Test routes


