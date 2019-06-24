@extends('layouts.admin')
@section('content')
    <h1>Nieuwe User</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>true]) !!}
    <div class="row">
        <div class="col-12 col-md-3 mt-5 text-center">
            <div class="form-group">
                {!! Form::label('photo_id', 'Foto:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="row">
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
                                    {!! Form::label('email', 'E-mail:') !!}
                                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('role_id', 'Rol:') !!}
                                    {!! Form::select('role_id', [''=>'Kies rol'] + $roles,null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('is_active', 'Status:') !!}
                                    {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'),0, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password', 'Paswoord:') !!}
                                    {!! Form::password('password', ['class'=>'form-control']) !!}
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
                                <div class="row w-100">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('street', 'Straat:') !!}
                                            {!! Form::text('street', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('city', 'Gemeente:') !!}
                                            {!! Form::text('city', null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('number', 'Huisnummer:') !!}
                                            {!! Form::text('number', null, ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('country', 'Land:') !!}
                                            {!! Form::text('country', null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mt-md-3">
                {!! Form::submit('User aanmaken', ['class'=>'btn btn-success']) !!}
                <a class="btn btn-danger" href="{{route('users.index')}}">Annuleren</a>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    @include('includes.form_error')
@stop
