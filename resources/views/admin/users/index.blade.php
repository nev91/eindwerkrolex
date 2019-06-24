@extends('layouts.admin')
@section('dashboard-stats')
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number of users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            @if($users){{$users->count()}}@endif
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hashtag fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Most Recent user</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">@if($users){{$users->last()->name}}@endif</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-crown fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users with books</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">80%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Number of admins</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">@if($users){{$users->where('role_id','1')->count()}}@endif</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-key fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @if(Session::has('deleted_user'))
        <p class="bg-danger text-white text-center">{{session('deleted_user')}}</p>
    @endif
    <div class="row">
        <div class="col-12 d-flex">
            <h1>Users</h1>
            <a class="ml-auto" href="{{route('users.create')}}"><i class="text-success fas fa-plus fa-3x"></i></a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" class="text-center">Id</th>
            <th scope="col">Naam</th>
            <th scope="col">E-mail</th>
            <th scope="col" class="text-center">Rol</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Straat</th>
            <th scope="col" class="text-center">Nummer</th>
            <th scope="col" class="text-center">Gemeente</th>
            <th scope="col" class="text-center">Land</th>
            <th scope="col" class="text-center">Created</th>
            <th scope="col" class="text-center">Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td class="text-center">{{$user->id}}</td>
                    <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td class="text-center">{{$user->role ? $user->role->name : 'User without role'}}</td>
                    <td class="text-center">{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td class="text-center">{{$user->street}}</td>
                    <td class="text-center">{{$user->number}}</td>
                    <td class="text-center">{{$user->city}}</td>
                    <td class="text-center">{{$user->country}}</td>
                    <td class="text-center">{{$user->created_at}}</td>
                    <td class=text-center>{{$user->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection