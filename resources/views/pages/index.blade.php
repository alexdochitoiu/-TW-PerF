@extends('layouts.master')

@section('title')
    Bun venit pe PerF
    @endsection

@section('content')
    <div class="search_background">
        <div class="container">
            <div class="row">
                <div class="search">
                    <form class="form" method="get" action="#">
                        <div class="search-three-bar">
                            <div class="box">
                            <div class="col-sm-6 col-xs-12">
                                <div class="col-sm-6 col-xs-6">
                                    <select class="form-control height-70px margin-8-0 font-size-20px margin-bottom-10">
                                        <option>Apartamente</option>
                                        <option>Case</option>
                                        <option>Terenuri</option>
                                        <option>Birouri</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <select class="form-control height-70px margin-8-0 font-size-20px margin-bottom-10">
                                        <option>Vanzare</option>
                                        <option>Inchiriere</option>
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
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box2 margin-bottom-10">
            <h2> Filtreaza rezultatele </h2>
            <div class="row">
            <form class="form" method="get" action="#">
                <div class="col-sm-3 col-xs-6">
                    <div class="col-sm-12 col-xs-12">
                        <select class="form-control margin-bottom-10">
                            <option value="" disabled selected> Pret de la ... </option>
                            <option>100 RON</option>
                            <option>250 RON</option>
                            <option>500 RON</option>
                            <option>750 RON</option>
                        </select>
                        <select class="form-control margin-bottom-10">
                            <option value="" disabled selected> Pret pana la ... </option>
                            <option>100 RON</option>
                            <option>250 RON</option>
                            <option>500 RON</option>
                            <option>750 RON</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="col-sm-12 col-xs-12">
                        <select class="form-control margin-bottom-10">
                            <option value="" disabled selected> Suprafata de la ...</option>
                            <option>15 mp</option>
                            <option>25 mp</option>
                            <option>30 mp</option>
                            <option>40 mp</option>
                            <option>50 mp</option>
                            <option>60 mp</option>
                            <option>70 mp</option>
                            <option>75 mp</option>
                            <option>80 mp</option>
                            <option>90 mp</option>
                            <option>100 mp</option>
                        </select>
                        <select class="form-control margin-bottom-10">
                            <option value="" disabled selected> Suprafata pana la ...</option>
                            <option>15 mp</option>
                            <option>25 mp</option>
                            <option>30 mp</option>
                            <option>40 mp</option>
                            <option>50 mp</option>
                            <option>60 mp</option>
                            <option>70 mp</option>
                            <option>75 mp</option>
                            <option>80 mp</option>
                            <option>90 mp</option>
                            <option>100 mp</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 ">
                    <div class="col-sm-12 col-xs-12 ">
                        <select class="form-control margin-bottom-10">
                            <option value="" disabled selected> Numar camere </option>
                            <option>Toate</option>
                            <option>O camera</option>
                            <option>2 camere</option>
                            <option>3 camere</option>
                            <option>4 camere</option>
                            <option>5 camere sau mai multe</option>
                        </select>
                        <select class="form-control margin-bottom-10">
                            <option value="" disabled selected> Compartimentare </option>
                            <option>Toate</option>
                            <option>Decomandat</option>
                            <option>Semidecomandat</option>
                            <option>Nedecomandat</option>
                            <option>Circular</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="col-sm-12 col-xs-12 ">
                        <select class="form-control margin-bottom-10">
                            <option value="" disabled selected> Etaj </option>
                            <option>Toate</option>
                            <option>Parter</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10 sau peste</option>
                        </select>
                        <select class="form-control margin-bottom-10">
                            <option value="" disabled selected> An constructie </option>
                            <option>Toate</option>
                            <option>Inainte de 1977</option>
                            <option>1977-1990</option>
                            <option>1990-2000</option>
                            <option>2000-2013</option>
                            <option>Dupa 2013</option>
                        </select>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class="row">
            @if(isset($anunturi))
        @foreach($anunturi as $anunt)
                <div class="col-xs-6 col-sm-4">
                    <a href="/anunt" >
                    <div class="announcement">
                        <div> <span>PRET</span> {{$anunt->pret}} RON</div>
                        <img src="images/house.jpg" alt="house"/>
                        <p id="title"> {{$anunt->titlu}}</p>
                        <p id="uploadedBy">Adaugat de {{$anunt->firstName}} {{$anunt->lastName}}</p>
                        <p id="timeAdded">{{$anunt->dataPublicare}}</p>
                    </div>
                    </a>
                </div>
            @endforeach
                @endif
            <a href="/logout"><h1>Log out</h1></a>
        </div>
    </div>
    @endsection