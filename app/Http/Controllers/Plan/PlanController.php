<?php

namespace App\Http\Controllers\Plan;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::get();
   
        return view("pricing.pricing", compact("plans"));
    }

    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();
   
        return view("pricing.subscription", compact("plan", "intent"));
    }
    /**
     * Write code on Method
     *
     */
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);
   
        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                        ->create($request->token);
   
        return view("user.pages.dashboard");
    }
    
}
