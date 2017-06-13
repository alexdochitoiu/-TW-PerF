@extends('layouts.master')

@section('title')
    Bun venit pe PerF
    @endsection

@section('content')

    <form class="form" method="get" action="{{route('search.anunt')}}">
    <div class="search_background">
        <div class="container">
            <div class="row">
                <div class="search">
                        <div class="search-three-bar">
                            <div class="box">
                            <div class="col-sm-6 col-xs-12">
                                <div class="col-sm-6 col-xs-6">
                                    <select name="tipImobil"
                                            class="form-control height-70px margin-8-0 font-size-20px margin-bottom-10">
                                        <option value="2">Apartamente si Case</option>
                                        <option value="0">Terenuri</option>
                                        <option value="1">Birouri</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <select name="tipTranzactie"
                                            class="form-control height-70px margin-8-0 font-size-20px margin-bottom-10">
                                        <option name="Vanzare">Vanzare</option>
                                        <option name="Inchiriere">Inchiriere</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="input-group add-on margin-8-0 ">
                                    <input class="form-control height-70px font-size-20px border-radius-10 " placeholder="Introduceti orasul (ex: Constanta)" name="city"
                                           type="text">
                                    <div class="input-group-btn">
                                        <button class="search-bottom height-70px width-70px font-size-20px border-radius-10" type="submit">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box2 margin-bottom-10">
            <h2> Filtreaza rezultatele </h2>
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="col-sm-12 col-xs-12">
                        <select name="pretDeLa" class="form-control margin-bottom-10">
                            <option value="" disabled selected> Pret de la ... </option>
                            <option value="100">100 RON</option>
                            <option value="250">250 RON</option>
                            <option value="500">500 RON</option>
                            <option value="750">750 RON</option>
                            <option value="1000">1000 RON</option>
                        </select>
                        <select name="pretPanaLa"
                                class="form-control margin-bottom-10">
                            <option value="" disabled selected> Pret pana la ... </option>
                            <option value="100">100 RON</option>
                            <option value="250">250 RON</option>
                            <option value="500">500 RON</option>
                            <option value="750">750 RON</option>
                            <option value="1000">1000 RON</option>
                            <option value="2000">2000 RON</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="col-sm-12 col-xs-12">
                        <select name="suprafataDeLa"
                                class="form-control margin-bottom-10">
                            <option value="" disabled selected> Suprafata de la ...</option>
                            <option value="15">15 mp</option>
                            <option value="25">25 mp</option>
                            <option value="30">30 mp</option>
                            <option value="40">40 mp</option>
                            <option value="50">50 mp</option>
                            <option value="60">60 mp</option>
                            <option value="70">70 mp</option>
                            <option value="75">75 mp</option>
                            <option value="100">100 mp</option>
                            <option value="250">250 mp</option>
                            <option value="500">500 mp</option>
                        </select>
                        <select name="suprafataPanaLa"
                                class="form-control margin-bottom-10">
                            <option value="" disabled selected> Suprafata pana la ...</option>
                            <option value="15">15 mp</option>
                            <option value="25">25 mp</option>
                            <option value="30">30 mp</option>
                            <option value="40">40 mp</option>
                            <option value="50">50 mp</option>
                            <option value="60">60 mp</option>
                            <option value="70">70 mp</option>
                            <option value="75">75 mp</option>
                            <option value="100">100 mp</option>
                            <option value="250">250 mp</option>
                            <option value="500">500 mp</option>
                            <option value="1000">1000 mp</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 ">
                    <div class="col-sm-12 col-xs-12 ">
                        <select name="nrCamere"
                                class="form-control margin-bottom-10">
                            <option value="" disabled selected> Numar camere </option>
                            <option value="0">Toate</option>
                            <option value="1">O camera</option>
                            <option value="2">2 camere</option>
                            <option value="3">3 camere</option>
                            <option value="4">4 camere</option>
                            <option value="5">5 camere sau mai multe</option>
                        </select>
                        <select name="compartimentare"
                                class="form-control margin-bottom-10">
                            <option value="" disabled selected> Compartimentare </option>
                            <option value="0">Toate</option>
                            <option value="Decomandat">Decomandat</option>
                            <option value="Semidecomandat">Semidecomandat</option>
                            <option value="Nedecomandat">Nedecomandat</option>
                            <option value="Circular">Circular</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="col-sm-12 col-xs-12 ">
                        <select name="etaj"
                                class="form-control margin-bottom-10">
                            <option value="" disabled selected> Etaj </option>
                            <option value="0">Toate</option>
                            <option value="Parter">Parter</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10 sau peste</option>
                        </select>
                        <select name="anConstr"
                                class="form-control margin-bottom-10">
                            <option value="" disabled selected> An constructie </option>
                            <option value="0">Toate</option>
                            <option value="i1997">Inainte de 1977</option>
                            <option value="77-90">1977-1990</option>
                            <option value="90-00">1990-2000</option>
                            <option value="00-13">2000-2013</option>
                            <option value="d2013">Dupa 2013</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        @if(isset($anunturi))
            @foreach($anunturi as $anunt)
                <div class="col-xs-6 col-sm-4">
                    <a href="/anunturi/{{$anunt->id}}" >
                    <div class="announcement">
                        <div> <span>PRET</span> {{$anunt->pret}} RON</div>
                        <img src="{{$anunt->imagine_prezentare}}" alt="house"/>
                        <p id="title"> {{$anunt->titlu}}</p>
                        <p id="uploadedBy">Adaugat de {{ $anunt->name }}</p>
                        <p id="timeAdded">{{$anunt->created_at}}</p>
                    </div>
                    </a>
                </div>
            @endforeach
        @endif
        </div>
    </div>

    </form>
    <div style="padding-top:50px">

    </div>
    @endsection