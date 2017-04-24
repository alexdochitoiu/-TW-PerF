@extends('layouts.master')

@section('title')
    Inregistrare - PerF
    @endsection

@section('content')
    <div class="container">
        <div class="box_register">
            <h3 class="omb_authTitle">Inregistrare cont pe PerF</h3>
            <div class="row omb_socialButtons">
                <div class="col-xs-4 col-sm-4">
                    <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                        <i class="fa fa-facebook visible-xs"></i>
                        <span class="hidden-xs">Facebook</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-4">
                    <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                        <i class="fa fa-twitter visible-xs"></i>
                        <span class="hidden-xs">Twitter</span>
                    </a>
                </div>  
                <div class="col-xs-4 col-sm-4">
                    <a href="#" class="btn btn-lg btn-block omb_btn-google">
                        <i class="fa fa-google-plus visible-xs"></i>
                        <span class="hidden-xs">Google +</span>
                    </a>
                </div>  
            </div>

            <div class="row omb_loginOr">
                <div class="col-xs-12 col-sm-12">
                    <hr class="omb_hrOr">
                    <span class="omb_spanOr">sau</span>
                </div>
            </div>

            <div class="row form_align">
                <div class="col-xs-12 col-sm-12">    
                    <form class="omb_loginForm" autocomplete="off" method="POST">
                        <div class="col-xs-12 col-md-6"> 
                            <center><h3 class="text_login">Detalii Cont</h3></center>
                            <h4 class="text_login">Nume Cont:</h4>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="username" placeholder="Nume Cont">
                            </div>
                            <h4 class="text_login">Email:</h4>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <h4 class="text_login">Parola:</h4>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input  type="password" class="form-control" name="password" placeholder="Parola">
                            </div>
                            <h4 class="text_login">Confirma Parola:</h4>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input  type="password" class="form-control" name="confirm-password" placeholder="Confirma Parola">
                            </div>
                            <label class="checkbox text_login">
                                    <input type="checkbox" value="termeni-si-conditii">Termeni si Conditii
                            </label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <center><h3 class="text_login costum_responsive">Detalii Personale</h3></center>
                        <h4 class="text_login">Nume:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                            <input type="text" class="form-control" name="last_name" placeholder="Nume de familie">
                        </div>
                        <h4 class="text_login">Prenume:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                            <input type="text" class="form-control" name="first_name" placeholder="Prenume">
                        </div>
                        <h4 class="text_login">Nr Telefon:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" name="phone_number" placeholder="Numar de telefon">
                        </div>
                        <h4 class="text_login">Localitate:</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input type="text" class="form-control" name="localitate" placeholder="Localitate">
                        </div>
                        <label class="checkbox text_login">
                                    <input type="checkbox" value="termeni-si-conditii">Persoana Fizica
                        </label>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block btn_costum" type="submit">Inregistrare</button>
                        </div> 
                        
                    </form>
                </div>      
            </div>
        </div>
        <div class="question_register_align">
            <h3 class="title"> Aveti deja un cont PerF?</h3>
            <hr class="omb_hrOr">
            <a href="/autentificare" class="btn btn-lg btn-primary btn-block btn_costum">Conecteaza-te</a>
        </div>
    </div>
@endsection