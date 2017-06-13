@extends('layouts.master')


@section('title')
    Cont Contul meu
@endsection

@section('content')


        <div class="container">
            <div class="box_register">
                <h3 class="authTitle">Cont Perf</h3>


                <div class="row loginOr">
                    <div class="col-xs-12 col-sm-12">
                        <hr class="hrOr">

                    </div>
                </div>

                <div class="row form_align">
                    <div class="col-xs-12 col-sm-12">
                        <form class="loginForm" autocomplete="off" method="POST">
                            <div class="col-xs-12 col-md-6">
                                <h3 class="text_login">Detalii Cont</h3>
                                <h4 class="text_login">Nume Cont:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user information-user"></i></span>
                                    <span class="input-group-addon">{{$user ->username}}</span>
                                </div>

                                <h4 class="text_login">Email:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-open information-user"></i></span>
                                    <span class="input-group-addon"> {{$user->email}}</span>

                                </div>
                                <h4 class="text_login">Persoana Fizica:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-info-circle information-user" aria-hidden="true"></i></span>
                                    <span class="input-group-addon"> @if ($user->pers_fizica) {{'Da'}} @else {{"Nu"}}@endif</span>

                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h3 class="text_login costum_responsive">Detalii Personale</h3>
                                <h4 class="text_login">Nume:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-card information-user"></i></span>
                                    <span class="input-group-addon"> {{$user->name}}</span>
                                </div>

                                <h4 class="text_login">Nr Telefon:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone information-user"></i></span>
                                    <span class="input-group-addon">{{$user->phone}}</span>
                                </div>
                                <h4 class="text_login">Localitate:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker information-user"></i></span>
                                    <span class="input-group-addon">{{$user->location}}</span>
                                </div>

                                <br>

                            </div>
                            <div class="col-xs-12 col-md-6">
                                <p class="forgotPwd">
                                    <a href="/edit_account" class="btn btn-lg btn-primary btn-block btn_costum">Editeaza</a>
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <p class="forgotPwd">
                                    <a href="/reset_password" class="btn btn-lg btn-primary btn-block btn_costum">Schimba parola</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

@endsection