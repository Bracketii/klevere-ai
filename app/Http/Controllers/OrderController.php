<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class OrderController extends Controller
{

    //showing product blade
    public function index(){
        //seeder/productSeeder
        $product=Product::all();
        return view('product.product',compact('product'));//resources/product/product.blade
    }
    public function checkout($id){
        $stripe = new \Stripe\StripeClient('sk_test_51M93A9E4o5Z9I1xT72Bb0YJQTglBDuxGDs8br56OZLrcsOIVbHXglgk6gVZluoaE7ZVdUDh3Xfo0VzF3FQnyMExO00EvAsFQGz');
        $products=Product::find($id);

        $line_items=[];
       
        $line_items[]=[

            'price_data' => [
              'currency' => 'usd',
              'product_data' => [
                'name' => $products->name,

              ],
              'unit_amount' => $products->price*100,
            ],
            'quantity' => 1,

    ];

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' =>  $line_items,

            'mode' => 'payment',
            'success_url' => route('checkout.success',[],true)."?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('checkout.cancel',[],true),
          ]);
          // user model
          $order=Auth::user()->orders()->create([
               'status'=>'unpaid',
               'session_id'=>$checkout_session->id,
               'total_price'=>$products->price,
               'package_name'=>$products->name

          ]);

          return redirect($checkout_session->url);
    }

    public function success(Request $request){
        $stripe = new \Stripe\StripeClient('sk_test_51M93A9E4o5Z9I1xT72Bb0YJQTglBDuxGDs8br56OZLrcsOIVbHXglgk6gVZluoaE7ZVdUDh3Xfo0VzF3FQnyMExO00EvAsFQGz');

         $sessionId=$request->get('session_id');
         try{
            $session = $stripe->checkout->sessions->retrieve($sessionId);
            if(!$session){
                throw new NotFoundHttpException();
             }
         $order=Orders::where('session_id',$session->id)->where('status','unpaid')->first();
         if(!$order){
            throw new NotFoundHttpException;
         }
         $order->status='paid';
         $order->save();
        return to_route('user.dashboard')->with('success', 'congratulations you subscribe successfully');

         }catch(\Exception $e){
            throw new NotFoundHttpException();
         }




    }
    public function cancel(){
        return "cancel";
   }
}
