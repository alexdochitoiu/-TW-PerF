@extends('layouts.master')

@section('title')
    @if(isset($arr['teren']))
        Terenuri - {{$arr['anunt']->titlu}}
        <?php $imobil = $arr['teren']; ?>
    @endif
    @if(isset($arr['birou']))
        Birouri - {{$arr['anunt']->titlu}}
        <?php $imobil = $arr['birou']; ?>
    @endif
    @if(isset($arr['locuinta']))
        Locuinte - {{$arr['anunt']->titlu}}
        <?php $imobil = $arr['locuinta']; ?>
    @endif
@endsection

@section('content')
    <div class="container">
        <div class="row margin-top-20">
            <div class="col-sm-9 col-xs-9 contentAnunt">
                <div class="row">
                    <div class="col-sm-9">
                        <h1> <img src="{{asset('images/building_icon.png')}}" alt=""> {{$arr['anunt']->titlu}} </h1>
                    </div>
                    <div class="col-sm-3">
                        <h1 class="pretAnunt"> {{$arr['anunt']->pret}} <span>RON</span> </h1>
                    </div>
                </div>
                <h5 class="timeAdded">
                    <img src="{{asset('images/clock_icon.png')}}" alt="">{{$arr['anunt']->updated_at}}
                    <span><img src="{{asset('images/location_icon.png')}}" alt=""> {{$imobil->localitate}}, {{$imobil->zona}}</span></h5>

                <hr>

                <div id="imgGallery">
                    <div class="row">
                        <img src="{{$arr['imagine']->imagine1}}" alt="">
                        <img src="{{$arr['imagine']->imagine2}}" alt="">
                        <img src="{{$arr['imagine']->imagine3}}" alt="">
                        <img src="{{$arr['imagine']->imagine4}}" alt="">
                        <img src="{{$arr['imagine']->imagine5}}" alt="">
                        <img src="{{$arr['imagine']->imagine6}}" alt="">
                        <img src="{{$arr['imagine']->imagine7}}" alt="">
                        <img src="{{$arr['imagine']->imagine8}}" alt="">
                    </div>
                </div>

                <hr >
                @if(isset($arr['locuinta']))
                <div class="row">
                    <div class="col-sm-4 detaliiAnunt ">
                        <h2>Suprafata <span> {{$imobil->suprafata}} </span></h2>
                        <hr >
                        <h2>Numar camere <span> {{$imobil->numarCamere}} </span></h2>
                        <hr >
                        <h2>Etaj <span> {{$imobil->etaj}}/{{$imobil->totalEtaje}}</span></h2>
                        <hr >
                        <h2>Centrala termica <span> <?php echo $imobil->centralaTermica == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        <hr >
                        <h2>Alarma <span> <?php echo $imobil->alarma == 1 ?  'Da' :  'Nu' ?> </span></h2>
                    </div>
                    <div class="col-sm-4 detaliiAnunt verticalLine">
                        <h2>Stare <span> {{$imobil->stare}} </span></h2>
                        <hr >
                        <h2>Mobilat / Utilat <span> <?php echo $imobil->mobilat == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        <hr >
                        <h2>An constructie <span> {{$imobil->anConstructie}} </span></h2>
                        <hr >
                        <h2>Supr. video <span> <?php echo $imobil->supravegheatVideo == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        <hr >
                        <h2>Detector gaz <span> <?php echo $imobil->detectorGaz == 1 ?  'Da' :  'Nu' ?> </span></h2>
                    </div>
                    <div class="col-sm-4 detaliiAnunt verticalLine">
                        <h2>Compartimentare <span> {{$imobil->compartimentare}} </span></h2>
                        <hr >
                        <h2>Numar bai <span> {{$imobil->numarBai}} </span></h2>
                        <hr >
                        <h2>Balcon <span> <?php echo $imobil->balcon == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        <hr >
                        <h2>Gradina <span> <?php echo $imobil->gradina == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        <hr >
                        <h2>Orientare <span> {{$imobil->orientare}} </span></h2>
                    </div>
                </div>
                @elseif(isset($arr['teren']))
                    <div class="row">
                        <div class="col-sm-4 detaliiAnunt ">
                            <h2>Suprafata <span> {{$imobil->suprafata}} </span></h2>
                            <hr >
                            <h2>Electricitate <span> <?php echo $imobil->electricitate == 1 ?  'Da' :  'Nu' ?> </span></h2>
                            <hr >
                            <h2>Gaz <span> <?php echo $imobil->gaz == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        </div>
                        <div class="col-sm-4 detaliiAnunt verticalLine">
                            <h2>Irigatie <span> <?php echo $imobil->irigatie == 1 ?  'Da' :  'Nu' ?> </span></h2>
                            <hr >
                            <h2>Gard <span> <?php echo $imobil->gard == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        </div>
                        <div class="col-sm-4 detaliiAnunt verticalLine">
                            <h2>Canalizare <span> <?php echo $imobil->canalizare == 1 ?  'Da' :  'Nu' ?> </span></h2>
                            <hr >
                            <h2>Apa <span> <?php echo $imobil->apa == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-sm-4 detaliiAnunt ">
                            <h2>Suprafata <span> {{$imobil->suprafata}} </span></h2>
                            <hr >
                            <h2>Locuri parcare <span> {{$imobil->locuriParcare}} </span></h2>
                            <hr >
                            <h2>Etaj <span> {{$imobil->etaj}}/{{$imobil->totalEtaje}}</span></h2>
                            <hr >
                            <h2>Alarma <span> <?php echo $imobil->alarma == 1 ?  'Da' :  'Nu' ?> </span></h2>
                            <hr >
                            <h2>Lift <span> <?php echo $imobil->lift == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        </div>
                        <div class="col-sm-4 detaliiAnunt verticalLine">
                            <h2>Orientare <span> {{$imobil->orientare}} </span></h2>
                            <hr >
                            <h2>An constructie <span> {{$imobil->anConstructie}} </span></h2>
                            <hr >
                            <h2>Sala sedinte <span> <?php echo $imobil->salaSedinte == 1 ?  'Da' :  'Nu' ?> </span></h2>
                            <hr >
                            <h2>Receptie <span> <?php echo $imobil->receptie == 1 ?  'Da' :  'Nu' ?> </span></h2>
                            <hr >
                            <h2>Supr. video <span> <?php echo $imobil->supravegheatVideo == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        </div>
                        <div class="col-sm-4 detaliiAnunt verticalLine">
                            <h2>Compartimentare <span> {{$imobil->compartimentare}} </span></h2>
                            <hr >
                            <h2>Numar bai <span> {{$imobil->numarBai}} </span></h2>
                            <hr >
                            <h2>Balcon <span> <?php echo $imobil->balcon == 1 ?  'Da' :  'Nu' ?> </span></h2>
                            <hr >
                            <h2>Terasa <span> <?php echo $imobil->terasa == 1 ?  'Da' :  'Nu' ?> </span></h2>
                        </div>
                    </div>
                @endif

                <hr >

                <div class="description">
                    <h3> <img src="{{asset('images/description_icon.png')}}" alt=""> Descriere</h3>
                    <p>
                        {{$arr['anunt']->descriere}}
                    </p>
                </div>

                <hr >

                <div class="map" id="map">
                    
                </div>
                <hr>
                <div class="col-sm-12 col-xs-12 legendTitle">
                    <h3> <img src="{{asset('images/map-legend.png')}}" alt=""> Legenda</h3>
                    <div class="col-sm-12 col-xs-12">  <span class="display-inline font-size-20px"> <div style="background-color: red; margin-right: 12px;" class="legend  display-inline"></div>Zona cu poluare fonica ridicata</span></div>
                    <div class="col-sm-12 col-xs-12"> <span class="display-inline font-size-20px"><div style="background-color: green; margin-right: 12px;" class="legend  display-inline"></div>Zona cu aer curat</span></div>
                    <div class="col-sm-12 col-xs-12"> <span class="display-inline font-size-20px"><div style="background-color: black; margin-right: 12px;" class="legend display-inline"></div>Zona periculoasa cu cetateni de etnii diferite</span></div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-9 contactForm">
                <div class="title">
                    Contacteaza vanzatorul
                </div>
                <img src="{{asset('images/profile.png')}}" alt="Poza profil">
                <div class="sellerName">
                    {{$arr['user'] -> name}}
                </div>
                <p> <?php echo $arr['user']->pers_fizica == 1 ?  '(Persoana fizica)' :  '(Agentie imobiliara)' ?> </p>
                <button type="button" class="btn btn-warning contactBtn">
                    <img src="{{asset('images/phone.png')}}" alt="">
                    {{$arr['user'] -> phone}}
                </button>
                <button type="button" class="btn btn-primary contactBtn" data-toggle="modal" data-target="#modalSendMsg">
                    <img src="{{asset('images/message.png')}}" alt="">
                    Trimite mesaj privat
                </button>
            </div>
        </div>
    </div>

    @include('includes.gallery')
    @include('includes.sendmsg')
@endsection