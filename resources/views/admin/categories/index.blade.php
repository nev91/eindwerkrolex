@extends('layouts.admin')
@section('content')
    @if(Session::has('deleted_category'))
        <p class="bg-danger text-white text-center">{{session('deleted_category')}}</p>
    @endif
    <div class="row">
        <div class="col-12 d-flex">
            <h1>Categorieën</h1>
            <a class="ml-auto" href="{{route('categories.create')}}"><i class="text-success fas fa-plus fa-3x"></i></a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        @if($categories)
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection