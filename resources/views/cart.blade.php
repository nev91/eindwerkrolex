@extends('layouts.frontlayout')
@section('content')
    <section class="text-center">
        <div class="container py-lg-3">
            <h1 class="contacth1 my-3">Shopping-cart</h1>
        </div>
        @if(Cart::count()>0)
            <div class="container" style="min-height: 500px">
                <div class="row watch mb-2">
                    <div class="col-md-8">
                        <div class="cart">
                            <div class="cart-wrapper">
                                <div class="cart-body">
                                    @foreach(Cart::content() as $cartitem)
                                        <div class="watch d-flex align-items-center justify-content-between">
                                            <!--Afbeelding + Titel-->
                                            <div class="col-8 col-md-6 offset-md-1 d-flex flex-watch p-0">
                                                <img src="{{asset('images/assets/full/'.$cartitem->options->fullimage)}}" class="h-25 cart-item-img">
                                                <div class="cart-title ml-2 d-flex align-items-start flex-column">
                                                    <a href="detail.html" class="text-uppercase text-dark"><strong>{{$cartitem->name}}</strong></a><br>
                                                    <p>€{{$cartitem->price}}</p>
                                                </div>
                                            </div>
                                            <!--Aantal-->
                                            <div class="col-2 p-0 mb-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="btn btn-items btn-items-decrease input-items">
                                                        <a href="{{route('minusQty', $cartitem->rowId)}}"><i class="fa fa-minus"></i></a>
                                                    </div>
                                                    <input type="text" disabled value="{{$cartitem->qty}}" class="form-control form-control-sm text-center input-box w-100">
                                                    <div class="btn btn-items btn-items-increase input-items">
                                                        <a href="{{route('plusQty', $cartitem->rowId)}}"><i class="fa fa-plus"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--Verwijderen-->
                                            <div class="col-2 p-0 mb-3 cart-remove text-right"><a href="{{route('remove.cart', $cartitem->rowId)}}"><i class="fa fa-times"></i></a></div>
                                        </div>
                                        <hr class="m-0 mb-1">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1 p-0">
                        <div class="row">
                            <div class="col-md-6 py-md-2 px-0 shoppingcartprice pricetitle">
                                <p class="text-uppercase">Subtotaal excl. BTW</p>
                            </div>
                            <div class="watch text-right col-5 py-md-2 px-0 shoppingcartprice">
                                <p class="text-uppercase">€{{Cart::subtotal()}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 py-md-2 px-0 shoppingcartprice pricetitle">
                                <p class="text-uppercase">Verzendingskosten</p>
                            </div>
                            <div class="watch text-right col-5 py-md-2 px-0 shoppingcartprice">
                                <p class="text-uppercase">€0.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 py-md-2 px-0 shoppingcartprice pricetitle">
                                <p class="text-uppercase">BTW</p>
                            </div>
                            <div class="watch text-right col-5 py-md-2 px-0 shoppingcartprice">
                                <p class="text-uppercase">€{{Cart::tax()}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 py-md-2 px-0 shoppingcartprice pricetitle">
                                <p class="text-uppercase">Totaal</p>
                            </div>
                            <div class="watch text-right col-5 py-md-2 px-0 shoppingcartprice">
                                <p class="text-uppercase">€{{Cart::total()}}</p>
                            </div>
                        </div>
                        </row>
                    </div>
                </div>
                <div class="row">
                    <div class="watch d-flex my-5 w-100 justify-content-between align-items-center">
                        <div class="col-6 shoppingcartbuttons pl-0">
                            <a href="{{route('shop')}}" class="btn btn-link text-muted"><i class="fa fa-chevron-left"></i> Verder winkelen</a>
                        </div>
                        @if (Auth::guest())
                            <div class="col-6 shoppingcartbuttons pl-0">
                                <a href="{{route('login')}}" class="btn btn-link text-muted">Inloggen voor betaling <i class="fa fa-sign-in-alt"></i></a>
                            </div>
                        @elseif ($user->street == null || $user->number == null || $user->city == null || $user->country == null)
                            <div class="col-6 shoppingcartbuttons pl-0">
                                <a href="{{route('profile.edit',$user->id)}}" class="btn btn-link text-muted">Adres aanvullen voor betaling <i class="fa fa-map"></i></a>
                            </div>
                        @else
                            <div class="col-6 shoppingcartbuttons">
                                <form id="checkout-form" action="thankyou" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="stripeToken" id="stripeToken">
                                    <input type="hidden" name="stripeEmail" id="stripeEmail">

                                    <button id="aankoopbutton" type="submit" class="btn btn-shopping-cart p-1">Afrekenen <i class="fa fa-chevron-right"></i></button>
                                    <script src="https://checkout.stripe.com/checkout.js"></script>
                                    <script>

                                        let stripe = StripeCheckout.configure({
                                            key: "{{config('services.stripe.key')}}",
                                            image: "{{asset('images/assets/rolex_logo.png')}}",
                                            locale: "auto",
                                            token: function (token) {
                                                console.log(token);
                                                document.querySelector('#stripeEmail').value = token.email;
                                                document.querySelector('#stripeToken').value = token.id;
                                                document.querySelector('#checkout-form').submit();
                                            }
                                        });
                                        document.querySelector('#aankoopbutton').addEventListener('click', function (e) {
                                            stripe.open({
                                                name:'Rolex',
                                                description:'Vul hier uw gegevens in',
                                                zipCode:false,
                                                amount:'{{Cart::total(2,'.','')}}'*100,
                                                currency: 'eur',
                                            });
                                            e.preventDefault();
                                        })
                                    </script>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <h2>U hebt momenteel niets in uw winkelmandje</h2>
            <img class="my-md-4" src="{{asset('images/assets/emptycart.jpeg')}}" alt="empty cart">
            <p></p>
        @endif
    </section>
@endsection