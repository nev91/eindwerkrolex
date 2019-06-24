@extends('layouts.frontlayout')
@section('content')
    <section class="contacts1 text-center" style="min-height: 600px">
        <a href="{{ URL::previous() }}"><i class="fas fa-angle-double-left mb-3"></i> Terug</a>
        <div class="container py-lg-3">
            <h1 class="contacth1 my-3">Uw gegevens aanpassen</h1>
        </div>
        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['ProfileController@update', $user->id], 'files'=>false]) !!}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        {!! Form::label('name', 'Naam:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        {!! Form::label('street', 'Straat:') !!}
                        {!! Form::text('street', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        {!! Form::label('number', 'Huisnummer:') !!}
                        {!! Form::text('number', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        {!! Form::label('city', 'Gemeente:') !!}
                        {!! Form::text('city', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        {!! Form::label('country', 'Land:') !!}
                        {!! Form::text('country', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 offset-3 mt-md-4">
                    {!! Form::submit('Update gegevens', ['class'=>'btn btn-primary w-100']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @include('includes.form_error')
    </section>
@endsection