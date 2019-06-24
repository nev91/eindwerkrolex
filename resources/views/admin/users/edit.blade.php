@extends('layouts.admin')
@section('content')
    <a href="{{ URL::previous() }}"><i class="fas fa-angle-double-left mb-3"></i> Terug</a>
    <h1>User aanpassen</h1>
    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
    <div class="row">
        <div class="col-md-3 text-center align-middle">
            <img height="300" width="300" src="{{$user->photo ? asset($user->photo->file) : 'http://place-hold.it/300x300'}}" class="img-responsive mt-md-5" alt="">
            <div class="form-group mt-md-4">
                {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'E-mail:') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', [''=>'Choose options'] + $roles,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'),null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="row">
                <div class="col-9">
                    {!! Form::submit('User Updaten', ['class'=>'btn btn-primary w-100']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="col-3">
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                    {!! Form::submit('User verwijderen', ['class'=>'btn btn-danger w-100']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @include('includes.form_error')
@stop