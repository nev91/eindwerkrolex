@extends('layouts.frontlayout')
@section('content')
    <section id="goldRolex" class="align-items-center">
        <div class="row">
            <div class="col-12 p-0">
                <img src="{{asset('images/assets/goldRolexSmall.jpg')}}" class="img-fluid w-100" alt="gold Rolex">
            </div>
        </div>
    </section>
    <section id="rolex-horloges">
        <div class="row text-center py-3 py-lg-4">
            <div class="col-lg-6 offset-lg-3 rolexh1">
                <h1 class="productsh1">Rolex-horloges</h1>
                <p class="productsp mx-auto">Van alle duizenden horlogemerken op aarde, zijn er maar weinig zo iconisch als Rolex. Dat heeft vele verschillende redenen, maar een van de belangrijkste redenen is dat de horloges zo tijdloos zijn.
                Rolex-horloges worden pas gemaakt na bestelling van de klant om zo de unieke eigenschappen van het merk te vrijwaren.</p>
            </div>
        </div>
    </section>
    <section id="klassiek-professioneel">
        <div class="row mt-lg-3">
            <div class="col-lg-6 my-3 mt-lg-0 text-center">
                <a href="{{ route('classic')}}">
                    <h2 class="homeh2">Klassiek</h2>
                    <cite class="homecite">"Tijdloze stijl, onmiddelijk herkenbaar"</cite>
                    <img class="img-fluid" src="{{asset('images/assets/classic-watches.png')}}" alt="classic watches">
                </a>
            </div>
            <div class="col-lg-6 my-3 mt-lg-0 text-center">
                <a href="{{ route('professional')}}">
                    <h2 class="homeh2">Professioneel</h2>
                    <cite class="homecite">"Tijdloos en functioneel tegeljk"</cite>
                    <img class="img-fluid" src="{{asset('images/assets/professional-watches.png')}}" alt="professional watches">
                </a>
            </div>
        </div>
    </section>
@endsection