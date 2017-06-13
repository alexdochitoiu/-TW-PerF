@extends('layouts.master')

@php $errors=Session::get('error');
    $errors=json_decode($errors);
@endphp

@section('title')
    Editeaza cont
@endsection

@section('content')
    <form method="POST" action="/edit_account">
        {{csrf_field()}}
        <div class="container">
            <div class="box_register">
                <h3 class="authTitle">Editeaza cont pe PerF</h3>


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
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" title="Atentie, intre 15 si 18 caractere fara spatii!!" pattern=".{15,18}" class="form-control" name="username" id="username"  placeholder="Nume Cont(max 20 caractere)"
                                           required value="{{$user->username}}">
                                </div>
                                @if(!empty($errors->username))
                                    <h4 style="color:red"><i class="fa fa-hand-o-up"
                                                             aria-hidden="true"></i>{{' '.$errors->username}}</h4>
                                @endif
                                <h4 class="text_login">Email:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                           value="{{ $user->email }}" disabled>

                                </div>
                                @if(!empty($errors->email))
                                    <h4 style="color:red"><i class="fa fa-hand-o-up"
                                                             aria-hidden="true"></i>{{' '.$errors->email}}</h4>
                                @endif
                                <h4 class="text_login">Persoana Fizica:</h4>
                                <label class="checkbox text_login">
                                    <input type="checkbox" name="pers_fizica"  >Persoana
                                    Fizica
                                </label>


                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h3 class="text_login costum_responsive">Detalii Personale</h3>
                                <h4 class="text_login">Nume:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                    <input type="text" class="form-control" name="last_name"
                                           placeholder="Nume de familie" required value="{{ $user->name}}">
                                </div>

                                <h4 class="text_login">Nr Telefon:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="number" class="form-control" name="phone_number"
                                           placeholder="ex:0733096380"  value="{{ $user->phone}}" disabled>
                                </div>

                                <h4 class="text_login">Localitate:</h4>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" class="form-control" name="localitate" placeholder="Localitate"
                                           required value=" {{$user->location}}">
                                </div>

                                <br>
                                <button class="btn btn-lg btn-primary btn-block btn_costum" type="submit">Modifica
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="question_register_align">
                <h3 class="title"> Vreti sa schimbati parola?</h3>
                <hr class="hrOr">
                <a href="/reset_password" class="btn btn-lg btn-primary btn-block btn_costum">Schimba parola</a>
            </div>
        </div>
    </form>
@endsection