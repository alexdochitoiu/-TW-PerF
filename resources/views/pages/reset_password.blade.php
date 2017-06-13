@php $errors=Session::get('error');
    $errors=json_decode($errors);
@endphp
@extends('layouts.master')

@section('title')
    Autentificare - PerF
@endsection

@section('content')
    <form method="POST" action="/reset_password">
        {{csrf_field()}}
        <div class="container">
            <div class="box_login">
                <h3 class="authTitle">Autentificare pe cont PerF</h3>




                <div class="row form_align">
                    <div class="col-xs-12 col-sm-10">
                        <form class="loginForm" autocomplete="off" method="POST">
                            @if(!empty($user->confirmed))
                                <h4 style="color:red">{{' '.$user->confirmed}}!</h4>
                            @endif
                            <h4 class="text_login"> Parola:</h4>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="old_password" placeholder="Parola veche">
                            </div>
                            @if(!empty($errors->old_password))
                                <h4 style="color:red">{{' '.$errors->old_password}}</h4>
                            @endif
                            <h4 class="text_login"> Parola noua:</h4>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Parola noua">
                            </div>
                            <h4 class="text_login">Reintrodu parola noua:</h4>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input  type="password" class="form-control" name="r_password" placeholder="Reintrodu parola noua">
                            </div>
                            @if(!empty($errors->password))
                                <h4 style="color:red">{{' '.$errors->password}}</h4>
                            @endif


                            <br>
                            <button class="btn btn-lg btn-primary btn-block btn_costum" type="submit">Schimba Parola</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="question_register">
                <h3 class="title"> Vreti sa va editati profilul?</h3>
                <hr class="hrOr">
                <a href="/edit_account" class="btn btn-lg btn-primary btn-block btn_costum">Editati profilul</a>
            </div>

            @include('includes.forgotpass')

        </div>
    </form>

@endsection