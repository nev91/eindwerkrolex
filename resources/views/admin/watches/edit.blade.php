@extends('layouts.admin')
@section('content')
    <a href="{{ URL::previous() }}"><i class="fas fa-angle-double-left mb-3"></i> Terug</a>
    <h1>Horloge aanpassen</h1>
    {!! Form::model($watch, ['method'=>'PATCH', 'action'=>['WatchesController@update', $watch->id], 'files'=>true]) !!}
    <div class="row">
        <div class="col-md-3 text-center align-middle">
            <img src="{{$watch->photo ? asset($watch->photo->file) : 'http://place-hold.it/300x300'}}" class="img-fluid mt-md-5" alt="">
            <div class="form-group mt-lg-4">
                {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="row">
                <div class="col-12">
                    <div class="accordion w-100" id="accordionExample">
                        <div class="card">
                            <div class="card-header bg-dark" id="headingOne">
                                <h2 class="mb-0 text-center">
                                    <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseVerplicht" aria-expanded="true" aria-controls="collapseVerplicht">VERPLICHT</button>
                                </h2>
                            </div>
                            <div id="collapseVerplicht" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body bg-light">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Naam:') !!}
                                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('description', 'Beschrijving:') !!}
                                        {!! Form::text('description', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('slogan', 'Slogan:') !!}
                                        {!! Form::text('slogan', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('price', 'Prijs:') !!}
                                        {!! Form::text('price', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('category_id', 'Categorie:') !!}
                                        {!! Form::select('category_id', [''=>'Kies categorie'] + $categories,null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-dark" id="headingOne">
                                <h2 class="mb-0 text-center">
                                    <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#CollapseOptioneel" aria-expanded="false" aria-controls="CollapseOptioneel">OPTIONEEL</button>
                                </h2>
                            </div>
                            <div id="CollapseOptioneel" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body bg-light">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('wijzerplaat', 'Wijzerplaat:') !!}
                                                {!! Form::text('wijzerplaat', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('Oysterconstructie', 'Oysterconstructie:') !!}
                                                {!! Form::text('Oysterconstructie', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('materiaal', 'Materiaal:') !!}
                                                {!! Form::text('materiaal', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('opwindkroon', 'Opwindkroon:') !!}
                                                {!! Form::text('opwindkroon', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('waterdichtheid', 'Waterdichtheid:') !!}
                                                {!! Form::text('waterdichtheid', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('kaliber', 'Kaliber:') !!}
                                                {!! Form::text('kaliber', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('functies', 'Functies:') !!}
                                                {!! Form::text('functies', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('opwinden', 'Opwinden:') !!}
                                                {!! Form::text('opwinden', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('horlogeband', 'Horlogeband:') !!}
                                                {!! Form::text('horlogeband', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('sluiting', 'Sluiting:') !!}
                                                {!! Form::text('sluiting', null, ['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('modelkast', 'Modelkast:') !!}
                                                {!! Form::text('modelkast', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('diameter', 'Diameter:') !!}
                                                {!! Form::text('diameter', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('bezel', 'Bezel:') !!}
                                                {!! Form::text('bezel', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('horlogeglas', 'Horlogeglas:') !!}
                                                {!! Form::text('horlogeglas', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('uurwerk', 'Uurwerk:') !!}
                                                {!! Form::text('uurwerk', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('precisie', 'Precisie:') !!}
                                                {!! Form::text('precisie', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('oscillator', 'Oscillator:') !!}
                                                {!! Form::text('oscillator', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('gangreserve', 'Gangreserve:') !!}
                                                {!! Form::text('gangreserve', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('materiaalhorlogeband', 'Materiaal Horlogeband:') !!}
                                                {!! Form::text('materiaalhorlogeband', null, ['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('details', 'Details:') !!}
                                                {!! Form::text('details', null, ['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    {!! Form::submit('Horloge updaten', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="col-3">
                    {!! Form::open(['method'=>'DELETE', 'action'=>['WatchesController@destroy', $watch->id]]) !!}
                    {!! Form::submit('Horloge verwijderen', ['class'=>'btn btn-danger w-100']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    @include('includes.form_error')
@stop