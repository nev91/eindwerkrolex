@extends('layouts.admin')
@section('content')
    <h1>Nieuwe rol</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminRolesController@store','files'=>false]) !!}
    <div class="row">
        <div class="col-12">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mt-md-3">
                {!! Form::submit('Rol aanmaken', ['class'=>'btn btn-success']) !!}
                <a class="btn btn-danger" href="{{route('roles.index')}}">Annuleren</a>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    @include('includes.form_error')
@stop