<?php

use App\Models\User;

use App\Http\Controllers\AI\SalesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AI\AIController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\EditProjectController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AI\MarketingController;
use App\Http\Controllers\AI\hrController;
use App\Http\Controllers\AI\GuidanceController;
use App\Http\Controllers\AI\ArtistController;
use App\Http\Controllers\AI\TechController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\User\UserPagesController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Marketing\BlogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Sales\ColdEmailController;

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
    Route::get('admin-analytics', [AdminPagesController::class, 'showAdminAnalytics'])->name('admin.analytics');
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

// Account Activation
Route::get('activation/{token?}', [UserAuthController::class, 'accountActivation'])->name('user.account.activation');

//update Routes
Route::get('edit-project/{id}', [EditProjectController::class, 'showEditForm'])->name('showEdit');
Route::post('edit-project/{id}', [EditProjectController::class, 'Edit'])->name('EditProject');

//delete Routes
Route::get('delete-project/{id}', [EditProjectController::class, 'showDeleteForm'])->name('showDelete');






// Middleware user routes
Route::group(['middleware'=>'userauth'],function(){
    Route::get('user', [UserPagesController::class, 'showUserDashboard'])->name('user.dashboard');
    Route::get('user-projects', [UserPagesController::class, 'showUserProjects'])->name('user.projects');
    Route::get('user-account', [UserPagesController::class, 'showUserAccount'])->name('user.account');
    Route::get('user-billing', [UserPagesController::class, 'showUserBilling'])->name('user.billing');
    /**
     * AI routes
     */

    //  Marketing
    Route::get('marketing', [BlogController::class, 'index'])->name('marketing.list');
    Route::get('blog', [BlogController::class, 'show'])->name('blog.show');
    Route::post('blog', [BlogController::class, 'textCompletion'])->name('blog.generate');

    //  Sales
    Route::get('sales', [ColdEmailController::class, 'index'])->name('sales.list');
    Route::get('cold-email', [ColdEmailController::class, 'show'])->name('cold-email.show');
    Route::post('cold-email', [ColdEmailController::class, 'textCompletion'])->name('cold-email.generate');


    // Chat
    Route::get('chat', [AIController::class, 'index'])->name('chat');
    Route::post('chat-text', [AIController::class, 'textCompletion'])->name('chat.text');




    //history saving routes
    Route::post('project-save-marketing',[HistoryController::class,'projectSaveMarketing'])->name('projectSave.marketing');
    Route::post('project-save-artist',[HistoryController::class,'projectSaveArtist'])->name('projectSave.artist');
    Route::post('project-save-guidance',[HistoryController::class,'projectSaveGuidance'])->name('projectSave.guidance');
    Route::post('project-save-hr',[HistoryController::class,'projectSaveHR'])->name('projectSave.hr');
    Route::post('project-save-sales',[HistoryController::class,'projectSaveSales'])->name('projectSave.sales');
    Route::post('project-save-tech',[HistoryController::class,'projectSaveTech'])->name('projectSave.tech');
    Route::post('chat-history',[HistoryController::class,'projectSaveChat'])->name('projectSave.chat');
});


// order route start
 Route::get('order',[OrderController::class,'index'])->name('order');
 Route::post('orderr/{id}',[OrderController::class,'checkout'])->name('checkout');
 Route::get('/success',[OrderController::class,'success'])->name('checkout.success');
 Route::get('/cancel',[OrderController::class,'cancel'])->name('checkout.cancel');
// order route end



// Route::get('confirm-password',[ConfirmablePasswordController::class,'confirmPassword'])->name('user.confirm.password');
// Route::post('submit-password',[ConfirmablePasswordController::class,'SubmitPassword'])->name('user.submit.password');











/**
 * Social Auth routes with methods
 */

////socialite in google////
Route::get('google/redirect', function () {
    return Laravel\Socialite\Facades\Socialite::driver('google')->redirect();
})->name('google');

Route::get('google/callback', function () {
    $user = Socialite::driver('google')->user();
    $userEmail = $user->getEmail();
    $userName = strtolower(implode('_',explode(' ',$user->getName())));

    $getUser = User::where('email',$userEmail)->first();

    if($getUser){
        Auth::login($getUser);
        return redirect('user');
    } else{
        $user = User::create([
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

    $getUser = User::where('email',$userEmail)->first();

    if($getUser){
        Auth::login($getUser);
        return redirect('user');
    } else{
        $user = User::create([
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

    $getUser = User::where('email',$userEmail)->first();

    if($getUser){
        Auth::login($getUser);
        return redirect('user');
    } else{
        $user = User::create([
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



