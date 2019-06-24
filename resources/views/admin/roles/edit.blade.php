@extends('layouts.admin')
@section('content')

    <section class="contacts1 text-center" style="min-height: 600px">
        <a href="{{ URL::previous() }}"><i class="fas fa-angle-double-left mb-3"></i> Terug</a>
        <div class="container py-lg-3">
            <h1 class="contacth1 my-3">Uw gegevens</h1>
        </div>
        <div class="container">
            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['FrontController', $user->id], 'files'=>true]) !!}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('name', 'Naam:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="row">
                        <div class="col-9">
                            {!! Form::submit('Update Role', ['class'=>'btn btn-primary w-100']) !!}
                            {!! Form::close() !!}
                        </div>
                        <div class="col-3">
                            {!! Form::open(['method'=>'DELETE', 'action'=>['FrontController@profiledestroy', $role->id]]) !!}
                            {!! Form::submit('Rol verwijderen', ['class'=>'btn btn-danger w-100']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <h1>Profiel aanpas</h1>
    @include('includes.form_error')
@stop