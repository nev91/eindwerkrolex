<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Photo;
use App\User;
use App\Watch;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class FrontController extends Controller
{
    public function rolex(){
        return view('rolex');
    }

    public function product($id){
        $watch = Watch::findOrFail($id);
        return view('product', compact('watch'));
    }
//    public function watch(){
//        $watches = Watch::all();
//        return view('product', compact('watches'));
//    }

    public function classic(){
        $watches = Watch::where('category_id', '=', 1)->get();
        return view('classic', compact('watches'));
    }

    public function professional(){
        $watches = Watch::where('category_id', '=', 2)->get();
        return view('professional', compact('watches'));
    }

    public function contact(){
        return view('contact');
    }

    public function shop(){
        $watches = Watch::orderBy('name', 'asc')->get();
        $categories = Category::all();
        return view('shop', compact('watches', 'categories'));
    }

    public function cart(){
        $user = Auth::user();
        return view('cart', compact('user'));
    }

    public function addtocart($id){
        $watch = Watch::findOrFail($id);
        Cart::add($watch->id, $watch->name, 1, $watch->price, ['fullimage' => $watch->fullimage,'$id'=>Auth::id()]);
        return back();
    }

    public function removeFromCart($id){
        Cart::remove($id);
        return back();
    }

    public function minusQty($rowId){
        $quantity = Cart::get($rowId)->qty;
        Cart::update($rowId,$quantity-1);
        return back();
    }

    public function plusQty($id){
        $quantity = Cart::get($id)->qty;
        Cart::update($id,$quantity+1);
        return back();
    }

    public function thankyou(){
        if (Auth::guest()) {
            return redirect('login');
        } else {

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
//            $order = Cart::all();
            Cart::destroy();
            return view('thankyou');
        }
    }
}

