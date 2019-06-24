@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/Rolex/public/admin">
                            <div class="sidebar-brand-text mx-3">Ga door naar ADMIN</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
