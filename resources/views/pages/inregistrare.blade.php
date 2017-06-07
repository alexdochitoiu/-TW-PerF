@extends('layouts.master')

@php $errors=Session::get('error');
    $errors=json_decode($errors);
@endphp

@section('title')
    Inregistrare - PerF
@endsection

@section('content')
    <form method="POST" action="/inregistrare">
        {{csrf_field()}}
        <div class="container">
            <div class="box_register">
                <h3 class="authTitle">Inregistrare cont pe PerF</h3>
                <div class="row socialButtons">
                    <div class="col-xs-4 col-sm-4">
                        <a href="#" class="btn btn-lg btn-block btn-facebook">
                            <i class="fa fa-facebook visible-xs"></i>
                            <span class="hidden-xs">Facebook</span>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4">
                        <a href="#" class="btn btn-lg btn-block btn-twitter">
                            <i class="fa fa-twitter visible-xs"></i>
                            <span class="hidden-xs">Twitter</span>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4">
                        <a href="#" class="btn btn-lg btn-block btn-google">
                            <i class="fa fa-google-plus visible-xs"></i>
                            <span class="hidden-xs">Google +</span>
                        </a>
                    </div>
                </div>

                <div class="row loginOr">
                    <div class="col-xs-12 col-sm-12">
                        <hr class="hrOr">
                        <span class="spanOr">sau</span>
                    </div>
                </div>

                <div class="row form_align">
                    <div class="col-xs-12 col-sm-12">
                        <form class="loginForm" autocomplete="off" method="POST">
                            <div class="col-xs-12 col-md-6">
                                <h3 class="text_login">Detalii Cont</h3>
                                <h4 class="text_login">Nume Cont:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Nume Cont"
                                           required value="{{ old('username') }}">
                                </div>
                                @if(!empty($errors->username))
                                    <h4 style="color:red"><i class="fa fa-hand-o-up"
                                                             aria-hidden="true"></i>{{' '.$errors->username}}</h4>
                                @endif
                                <h4 class="text_login">Email:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required
                                           value="{{ old('email') }}">

                                </div>
                                @if(!empty($errors->email))
                                    <h4 style="color:red"><i class="fa fa-hand-o-up"
                                                             aria-hidden="true"></i>{{' '.$errors->email}}</h4>
                                @endif
                                <h4 class="text_login">Parola:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Parola"
                                           required>
                                </div>
                                <h4 class="text_login">Confirma Parola:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="confirm-password"
                                           placeholder="Confirma Parola" required>
                                </div>
                                @if(!empty($errors->confirm_password))
                                    <h4 style="color:red"><i class="fa fa-hand-o-up"
                                                             aria-hidden="true"></i>{{' '.$errors->confirm_password}}</h4>
                                @endif
                                <label class="checkbox text_login">
                                    <input type="checkbox" value="termeni-si-conditii" required>Termeni si Conditii
                                </label>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h3 class="text_login costum_responsive">Detalii Personale</h3>
                                <h4 class="text_login">Nume:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                    <input type="text" class="form-control" name="last_name"
                                           placeholder="Nume de familie" required value="{{ old('last_name') }}">
                                </div>
                                <h4 class="text_login">Prenume:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                    <input type="text" class="form-control" name="first_name" placeholder="Prenume"
                                           required value="{{ old('first_name') }}">
                                </div>
                                <h4 class="text_login">Nr Telefon:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="number" class="form-control" name="phone_number"
                                           placeholder="ex:0733096380" required value="{{ old('phone_number') }}">
                                </div>
                                @if(!empty($errors->phone_number))
                                    <h4 style="color:red"><i class="fa fa-hand-o-up"
                                                             aria-hidden="true"></i>{{' '.$errors->phone_number}}</h4>
                                @endif
                                <h4 class="text_login">Localitate:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" class="form-control" name="localitate" placeholder="Localitate"
                                           required value="{{ old('localitate') }}">
                                </div>
                                <label class="checkbox text_login">
                                    <input type="checkbox" name="pers_fizica" value="{{ old('pers_fizica') }}">Persoana
                                    Fizica
                                </label>
                                <br>
                                <button class="btn btn-lg btn-primary btn-block btn_costum" type="submit">Inregistrare
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="question_register_align">
                <h3 class="title"> Aveti deja un cont PerF?</h3>
                <hr class="hrOr">
                <a href="/autentificare" class="btn btn-lg btn-primary btn-block btn_costum">Conecteaza-te</a>
            </div>
        </div>
    </form>
@endsection