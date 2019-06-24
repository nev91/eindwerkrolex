<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class AankopenController extends Controller
{
    public function store(){

        Stripe::setApiKey(config('services.stripe.secret'));

        $customer = Customer::create([
            'email'=> request('stripeEmail'),
            'source'=> request('stripeToken'),
        ]);

        Charge::create([
            'customer' => $customer->id,
            'amount' => Cart::total(2,'.','')*100,
            'currency' => 'eur',
        ]);

        return view('aankopen');
    }
}