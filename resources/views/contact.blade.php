@extends('layouts.frontlayout')
@section('content')
    <section class="contacts1 text-center">
        <div class="container py-lg-3">
            <h1 class="contacth1 my-3">Contact</h1>
        </div>
        <div class="container">
            <div class="row pb-md-4 pb-lg-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header contactbackground text-uppercase"><i class="fa fa-envelope"></i> Bericht</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">Naam</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Vul hier uw naam in" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Vul hier uw emailadres in" required>
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="message">Bericht</label>
                                    <textarea class="form-control" id="message" rows="6" required></textarea>
                                </div>
                                <div class="mx-auto">
                                    <button type="submit" class="btn contactbutton text-white">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header contactbackground text-uppercase"><i class="fa fa-home"></i> Adres</div>
                        <div class="card-body">
                            <p>Ieperse Steenweg 127</p>
                            <p>8630 VEURNE</p>
                            <p>BELGIË</p>
                            <p>Email : email@rolex.com</p>
                            <p>Tel. +33 12 56 11 51 84</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
