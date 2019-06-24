@extends('layouts.admin')
@section('content')
    @if(Session::has('deleted_role'))
        <p class="bg-danger text-white text-center">{{session('deleted_role')}}</p>
    @endif
    <div class="row">
        <div class="col-12 d-flex">
            <h1>Rollen</h1>
            <a class="ml-auto" href="{{route('roles.create')}}"><i class="text-success fas fa-plus fa-3x"></i></a>
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
        @if($roles)
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td><a href="{{route('roles.edit', $role->id)}}">{{$role->name}}</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection