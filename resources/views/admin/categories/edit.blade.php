@extends('layouts.admin')
@section('content')
    <a href="{{ URL::previous() }}"><i class="fas fa-angle-double-left mb-3"></i> Terug</a>
    <h1>Categorie aanpassen</h1>
    {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id], 'files'=>false]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('name', 'Naam:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="row">
                <div class="col-9">
                    {!! Form::submit('Update category', ['class'=>'btn btn-primary w-100']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="col-3">
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
                    {!! Form::submit('Categorie verwijderen', ['class'=>'btn btn-danger w-100']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @include('includes.form_error')
@stop

