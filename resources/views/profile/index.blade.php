@extends('layouts.frontlayout')
@section('content')
    <section class="contacts1 text-center" style="min-height: 600px">
        <div class="container py-lg-3">
            <h1 class="contacth1 my-3">Uw gegevens</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Naam</th>
                            <th scope="col">Straat</th>
                            <th scope="col">Huisnummer</th>
                            <th scope="col">Gemeente</th>
                            <th scope="col">Land</th>
                            <th scope="col">Aangemaakt op</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->street}}</td>
                            <td>{{$user->number}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->country}}</td>
                            <td>{{$user->created_at}}</td>
                            <td><a href="{{route('profile.edit',$user->id)}}"><button class="btn btn-dark">Aanpassen <i class="fa fa-pen"></i></button></a></td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection