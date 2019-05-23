<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
Use Stripe\Stripe;
use Stripe\Charge;
use Session;
use Mail;

class CheckoutController extends Controller
{
  public function index()
  {
  	return view('ecom.checkout');
  }

  public function pay()
  {
    // dd(request()->all());
    Stripe::setApiKey('sk_test_iInCogt02Kf8t3CVhR1fAZqC00p2Tsp65m');
    // $token = request()->stripeToken;
    $charge = Charge::create([
      'amount' => Cart::total(),
      'currency' => 'usd',
      'description' => 'Testing purchasing',
      'source' => request()->stripeToken
    ]);

    Session::flash('success', 'You purchased succuessfully. Please wait for our mail');
    Cart::destroy();
    Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchasedSuccessful);
    return redirect('/');
     
  }
}
