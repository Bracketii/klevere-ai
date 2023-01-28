<?php

namespace App\Http\Controllers\Plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\plan;


class PlanController extends Controller
{
    public function index(){
        $plans=plan::get();

        return view('plans',compact('plans'));
    }
    public function show(plan $plan, Request $request){
        $intent=auth()->user()->createSetupIntent();
        return view('subscription',compact(['plan','intent']));
     }
     public function subscription(Request $request){
        $plan=plan::find($request->plan);

        $subscription=$request->user()->newsubscription($request->plan, $plan->stripe_plan)->create($request->token);

        return view('subscription_success');
     }
}
