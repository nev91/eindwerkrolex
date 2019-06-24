@extends('layouts.frontlayout')
@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 p-0">
                <div align="center" class="embed-responsive embed-responsive-21by9 video">
                    <video autoplay loop class="videobig embed-responsive-item video_prof_watches" width="110%" src="{{asset('videos/professional-watches.mp4')}}">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <section class="horloge">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1 text-center py-lg-3">
                <div class="horlogeheader mx-auto">
                    <h1 class="productsh1 my-3">Professionele horloges</h1>
                    <p class="productsp mx-auto">Rolex biedt een ruime selectie professionele horloges die speciaal zijn ontworpen voor activiteiten zoals duiken, vliegen, zeilen of autoracen, en die functionaliteit combineren met stijl.</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if($watches)
                            <?php $i=1; ?>
                            @foreach($watches as $watch)
                                <?php if($i%2==0){ ?>
                                <div class="row">
                                    <div class="col-lg-6 order-lg-1">
                                        <div class="productskader py-lg-3">
                                            <a href="{{route('product', $watch->id)}}"><img class="img-fluid" src="{{$watch->photo ? asset($watch->photo->file) : 'http://placehold.it/1050x825'}}" alt="{{$watch->name}}"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 m-lg-auto order-lg-0">
                                        <div class="pb-5">
                                            <h3 class="productsh3">{{$watch->name}}</h3>
                                            <cite>"{{$watch->slogan}}"</cite>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++;}
                                elseif($i%2!=0) {?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="productskader py-lg-3">
                                            <a href="{{route('product', $watch->id)}}"><img class="img-fluid" src="{{$watch->photo ? asset($watch->photo->file) : 'http://placehold.it/1050x825'}}" alt="{{$watch->name}}"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 m-lg-auto">
                                        <div class="pb-5">
                                            <h3 class="productsh3">{{$watch->name}}</h3>
                                            <cite>"{{$watch->slogan}}"</cite>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; } ?>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection