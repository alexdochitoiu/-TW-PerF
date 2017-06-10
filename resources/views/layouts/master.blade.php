<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/perf.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ol.css')}}">
    <!-- Core CSS file -->
    <link rel="stylesheet" href="gallery/photoswipe.css">

    <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
         In the folder of skin CSS file there are also:
         - .png and .svg icons sprite,
         - preloader.gif (for browsers that do not support CSS animations) -->
    <link rel="stylesheet" href="gallery/default-skin/default-skin.css">

    <!-- Core JS file -->
    <script src="gallery/photoswipe.min.js"></script>

    <!-- UI JS file -->
    <script src="gallery/photoswipe-ui-default.min.js"></script>

    <!-- Open Layers JS file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ol3/3.2.0/ol.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ol3/3.2.0/ol.min.js" type="text/javascript"></script>

    <link rel="icon" href="images/icon.png" type="image/png"/>
    @yield('head')
</head>
<body>
<div class="header-desktop-normal color-header no-on-mobile">
    <div class="container container-header">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="img-logo-header">
                    <a href="/"><img class="logo-header" src="../images/logo.png" alt="image logo"/></a>
                </div>
                <div class="menu-desktop">
                    <div class="header-information">
                        <ul class="menu-normal-information line-height-header">
                            <li><a href="/autentificare">Autentificare</a></li>
                            <li><a href="/inregistrare">Creare cont</a></li>
                            <li><a href="/ajutor">Ajutor</a></li>
                        </ul>

                    </div>
                    <a href="/adauga_anunt">
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
            <a href="/ajutor"><span class="informationMenuText"><i class="fa fa-envira" aria-hidden="true"></i> Despre</span></a>
            <a href="/adauga_anunt"><span class="informationMenuText"><i class="fa fa-plus-circle" aria-hidden="true"></i> Adauga anunt</span></a>

            <a href="/ajutor"><span class="informationMenuText"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Ajutor</span></a>

        </div>
    </div>

</div>
@yield('content')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/perf.js')}}"></script>
<footer class="color-header">
    <h4> Ne puteti urmari pe: </h4>
    <a href="http://www.facebook.com/"><img src="../images/facebook.png" alt="fb"/></a>
    <a href="http://www.google.com/"><img src="../images/googleplus.png" alt="google"/></a>
    <a href="http://www.twitter.com/"><img src="../images/twitter.png" alt="twitter"/></a>
    <br>
    <span>PerF &copy; 2017</span>
</footer>
</body>
</html>
