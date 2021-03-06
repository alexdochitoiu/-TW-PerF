@php $errors=Session::get('error');

@endphp
@extends('layouts.master')

@section('title')
    Autentificare - PerF
    @endsection

@section('content')
    <form method="POST" action="/autentificare">
        {{csrf_field()}}
    <div class="container">
        <div class="box_login">
            <h3 class="authTitle">Autentificare pe cont PerF</h3>
            <div class="row socialButtons">
                <div class="col-xs-4 col-sm-4">
                    <a href="http://localhost:8000/autentificare/facebook" class="btn btn-lg btn-block btn-facebook">
                        <i class="fa fa-facebook visible-xs"></i>
                        <span id="facebook" class="hidden-xs">Facebook</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-4">
                    <a href="/autentificare/twitter" class="btn btn-lg btn-block btn-twitter">
                        <i class="fa fa-twitter visible-xs"></i>
                        <span class="hidden-xs">Twitter</span>
                    </a>
                </div>  
                <div class="col-xs-4 col-sm-4">
                    <a href="/autentificare/google" class="btn btn-lg btn-block btn-google">
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
                <div class="col-xs-12 col-sm-10">    
                    <form class="loginForm" autocomplete="off" method="POST">
                         <h4 class="text_login"> Email:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="email" placeholder=" Email">
                        </div>
                        <h4 class="text_login">Parola:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input  type="password" class="form-control" name="password" placeholder="Parola">
                        </div>
                        @if(!empty($errors))
                            <h4 style="color:red">{{' '.$errors}}</h4>
                        @endif
                        <div class="col-xs-12 col-md-6">
                            <label class="checkbox text_login">
                                <input type="checkbox" value="remember-me">Tine-ma minte
                            </label>
                        </div>

                        <br>
                        <button class="btn btn-lg btn-primary btn-block btn_costum" type="submit">Autentificare</button>
                    </form>
                </div>      
            </div>
        </div>
        <div class="question_register">
            <h3 class="title"> Nu aveti un cont pe PerF?</h3>
            <hr class="hrOr">
            <a href="/inregistrare" class="btn btn-lg btn-primary btn-block btn_costum">Creati un cont nou</a>
        </div>

        @include('includes.forgotpass')

    </div>
    </form>

@endsection