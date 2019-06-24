@extends('layouts.admin')
@section('content')
    @if(Session::has('deleted_watch'))
        <p class="bg-danger text-white text-center">{{session('deleted_watch')}}</p>
    @endif
    <div class="row">
        <div class="col-12 d-flex">
            <h1>Horloges</h1>
            <a class="ml-auto" href="{{route('watches.create')}}"><i class="text-success fas fa-plus fa-3x"></i></a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" class="text-center">Id</th>
            <th scope="col" class="text-center">Afbeelding</th>
            <th scope="col">Naam</th>
            <th scope="col">Slogan</th>
            <th scope="col">Beschrijving</th>
            <th scope="col" class="text-center">Categorie</th>
            <th scope="col" class="text-center">Prijs</th>
            <th scope="col" class="text-center">Created at</th>
            <th scope="col" class="text-center">Updated at</th>
        </tr>
        </thead>
        <tbody>
        @if($watches)
            @foreach($watches as $watch)
                <tr>
                    <td class="text-center">{{$watch->id}}</td>
                    <td class="text-center"><img height="20" width="20" src="{{$watch->photo ? asset($watch->photo->file) : 'http://placehold.it/20x20'}}" alt=""></td>
                    <td><a href="{{route('watches.edit', $watch->id)}}">{{$watch->name}}</a></td>
                    <td>{{$watch->slogan}}</td>
                    <td>{{$watch->description}}</td>
                    <td class="text-center">{{$watch->category_id}}</td>
                    <td class="text-center">{{$watch->price}}</td>
                    <td class="text-center">{{$watch->created_at}}</td>
                    <td class=text-center>{{$watch->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection