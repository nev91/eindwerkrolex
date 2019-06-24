@extends('layouts.frontlayout')
@section('content')
    <section id="shop" class="my-md-4">
        <div class="row px-5">
            <div class="products-grid col-12">
                <header class="product-grid-header">
                    <div class="row">
                        <div class="col-12 my-2 mt-md-0 d-md-flex justify-content-md-between align-items-center">
                            <p class="shopp"><strong>{{$watches->count()}} </strong>van<strong> {{$watches->count()}} </strong>horloge's</p>
                        </div>
                    </div>
                </header>
                <div class="row">
                    @foreach($watches as $watch)
                        <div class="col-lg-4 p-3 d-flex align-items-stretch">
                            <div class="card">
                                <img src="{{$watch->photo ? asset($watch->photo->file) : 'http://placehold.it/1050x825'}}" class="card-img-top img-fluid" alt="{{$watch->name}}">
                                <div class="card-body">
                                    <h2 class="card-title">{{$watch->name}}</h2>
                                    <p class="card-text">{{$watch->description}}</p>
                                </div>
                                <div class="card-footer d-flex flex-md-row flex-column align-items-center justify-content-between">
                                    <h4 class="text--left text-center card-text m-0">€{{$watch->price}} <span class="badge">excl. btw</span></h4>
                                    <a href="{{route('add.cart', $watch->id)}}"><button class="btn btn-dark">Toevoegen <i class="fa fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
