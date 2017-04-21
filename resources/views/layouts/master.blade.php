<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/perf.css')}}">
    <link rel="icon" href="images/logo.png" type="image/png"/>

</head>
<body>
<div class="header-desktop-normal color-header no-on-mobile">
    <div class="container container-header">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="img-logo-header">
                    <a href="/"><img class="logo-header" src="images/logo.png" alt="image logo"/></a>
                </div>
                <div class="menu-desktop">
                    <div class="header-information">
                        <ul class="menu-normal-information line-height-header">
                            <a href="/autentificare">
                                <li>Autentificare</li>
                            </a>
                            <a href="/creare_cont">
                                <li>Creare cont</li>
                            </a>
                            <a href="/ajutor">
                                <li>Ajutor</li>
                            </a>

                        </ul>

                    </div>
                    <a href="/">
                        <span class="add_announce line-height-header">
                            <span class="add_announce_padding">
                                <i class="fa fa-plus display-inline" aria-hidden="true"></i>
                                <span class="display-inline">ADAUGA ANUNT</span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="header-mobile color-header no-on-desktop clearfix">
    <div class="clearfix">
        <div class="logo-header-mobile display-inline margin-top-20">
            <a href="/"><img class="logo-header" src="images/logo.png" alt="image logo"/></a>
        </div>
        <div class="menu-bottom toggle-mobile-menu display-inline margin-top-20">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
    </div>
    <div class="display-mobile mobile-menu-container">


        <div class="header-information header-info-mobile">

            <a href="/"><span class="informationMenuText"><i class="fa fa-user-o"
                                                             aria-hidden="true"></i> Contul meu</span></a>
            <a href="/"><span class="informationMenuText"> <i class="fa fa-home"
                                                              aria-hidden="true"></i> Acasa</span></a>
            <a href="/"><span class="informationMenuText"><i class="fa fa-envira" aria-hidden="true"></i> Despre</span></a>

        </div>
    </div>

</div>
@yield('content')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/perf.js')}}"></script>
<footer>

</footer>
</body>
</html>
