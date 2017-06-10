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

    <link rel="icon" href="images/icon.png" type="image/png"/>
    @yield('head')
</head>
<body>
@if($user = Auth::user())
    @include('includes.user_header')
@else
    @include('includes.guest_header')
@endif

@yield('content')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/perf.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDY4I2IoUwC6L837NGs5_UbcoEdNclreww&libraries=places"></script>
<script src="{{ asset('js/map.js') }}"></script>
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


