<?php

namespace App\Http\Middleware;

use App\Models\Orders;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class paidAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // $paid=Auth::user()->load->orders->where('status','paid');
        // if($paid){
        //   return $next($request);

        // }else{
        //     return to_route('order');
        // }
    }
}
