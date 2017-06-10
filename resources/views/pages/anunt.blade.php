@extends('layouts.master')

@section('title')
    Anunt
@endsection

@section('content')
    <div class="container">
        <div class="row margin-top-20">
            <div class="col-sm-9 col-xs-9 contentAnunt">
                <div class="row">
                    <div class="col-sm-9">
                        <h1> <img src="images/building_icon.png" alt=""> Aici o sa fie titlul anuntului</h1>
                    </div>
                    <div class="col-sm-3">
                        <h1 class="pretAnunt"> 1500 <span>RON</span> </h1>
                    </div>
                </div>
                <h5 class="timeAdded"><img src="images/clock_icon.png" alt="">12:55  12.03.2017 <span><img src="images/location_icon.png" alt=""> Iasi, Iasi</span></h5>

                <hr>

                <div id="imgGallery">
                    <div class="row">
                        <img src="images/house/img1.jpeg" alt="">
                        <img src="images/house/img2.jpeg" alt="">
                        <img src="images/house/img3.jpeg" alt="">
                        <img src="images/house/img4.jpeg" alt="">
                        <img src="images/house/img5.jpeg" alt="">
                        <img src="images/house/img6.jpeg" alt="">
                        <img src="images/house/img7.jpeg" alt="">
                        <img src="images/house/img8.jpeg" alt="">
                    </div>
                </div>

                <hr >

                <div class="row">
                    <div class="col-sm-4 detaliiAnunt ">
                        <h2>Suprafata <span> 55 mp </span></h2>
                        <hr >
                        <h2>Numar camere <span> 3 </span></h2>
                        <hr >
                        <h2>Etaj <span> 1 </span></h2>
                    </div>
                    <div class="col-sm-4 detaliiAnunt verticalLine">
                        <h2>Stare <span> Utilizat </span></h2>
                        <hr >
                        <h2>Mobilat / Utilat <span> Complet </span></h2>
                        <hr >
                        <h2>An constructie <span> 1997 </span></h2>
                    </div>
                    <div class="col-sm-4 detaliiAnunt verticalLine">
                        <h2>Compartimentare <span> Semidecomandat </span></h2>
                        <hr >
                        <h2>Numar bai <span> 1 </span></h2>
                        <hr >
                        <h2>Zona <span> Centru </span></h2>
                    </div>
                </div>

                <hr >

                <div class="description">
                    <h3> <img src="images/description_icon.png" alt=""> Descriere</h3>
                    <p>
                        Text messaging, or texting, is the act of composing and sending electronic messages, typically consisting of alphabetic and numeric characters, between two or more users of mobile phones, fixed devices (e.g., desktop computers) or portable devices (e.g., tablet computers or smartphones). While text messages are usually sent over a phone network, due to the convergence between the telecommunication and broadcasting industries in the 2000s, text messages may also be sent via a cable network or Local Area Network. The term originally referred to messages sent using the Short Message Service (SMS). It has grown beyond alphanumeric text to include multimedia messages (known as MMS) containing digital images, videos, and sound content, as well as ideograms known as emoji (happy faces and other icons).
                    </p>
                </div>

                <hr >

                <div class="map" id="map">
                    
                </div>
                <hr>
                <div class="col-sm-12 col-xs-12 legendTitle">
                    <h3> <img src="images/map-legend.png" alt=""> Legenda</h3>
                    <div class="col-sm-12 col-xs-12">  <span class="display-inline font-size-20px"> <div style="background-color: red; margin-right: 12px;" class="legend  display-inline"></div>Zona cu poluare fonica ridicata</span></div>
                    <div class="col-sm-12 col-xs-12"> <span class="display-inline font-size-20px"><div style="background-color: green; margin-right: 12px;" class="legend  display-inline"></div>Zona cu aer curat</span></div>
                    <div class="col-sm-12 col-xs-12"> <span class="display-inline font-size-20px"><div style="background-color: black; margin-right: 12px;" class="legend display-inline"></div>Zona periculoasa cu cetateni de etnii diferite</span></div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-9 contactForm">
                <div class="title">
                    Contacteaza vanzatorul
                </div>
                <img src="images/profile.png" alt="Poza profil">
                <div class="sellerName">
                    Costel Patent
                </div>
                <p> (Persoana fizica) </p>
                <button type="button" class="btn btn-warning contactBtn">
                    <img src="images/phone.png" alt="">
                    0745 556 660
                </button>
                <button type="button" class="btn btn-primary contactBtn" data-toggle="modal" data-target="#modalSendMsg">
                    <img src="images/message.png" alt="">
                    Trimite mesaj privat
                </button>
            </div>
        </div>
    </div>

    @include('includes.gallery')
    @include('includes.sendmsg')
@endsection