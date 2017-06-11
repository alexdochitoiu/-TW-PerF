@extends('layouts.master')

@section('title')
    Adauga anunt
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('adauga.anunt')}}" method="post">
                <div class="col-sm-12 col-xs-12 background-black margin-top-20">

                    <h1 class="text-center title_add_announce">Adauga anuntul tau aici</h1>

                    <div class="col-sm-6 col-xs-12">
                        <h3 class="text-center title_add_announce">Adauga Imagini</h3>
                        <div class="add_photo_announce col-sm-12 col-xs-12 margin-top-bottom-15px background-grey">
                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div class="col-sm-12 col-xs-12 display-inline add_image  text-center background-image-announce-first background-image-announce"
                                     id="image1">
                                    <input id="imagePreview1" data-preview="#preview" name="image" accept="image/*"
                                           type="file" id="imageInput" class="hidden-input">

                                </div>
                                <img class="col-sm-12" id="output"/>
                            </div>

                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div id="theDiv"
                                     class="col-sm-12 col-xs-12 display-inline background-image-announce text-center">
                                    <i class="fa fa-file-image-o " aria-hidden="true"></i>
                                    <input class="input_image upload_img" style="display:none;" type="file" name="pic"
                                           accept="image/*">
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div class="col-sm-12 col-xs-12 display-inline background-image-announce text-center">
                                    <i class="fa fa-file-image-o " aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div class="col-sm-12 col-xs-12 display-inline background-image-announce text-center">
                                    <i class="fa fa-file-image-o " aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div class="col-sm-12 col-xs-12 display-inline background-image-announce text-center">
                                    <i class="fa fa-file-image-o " aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div class="col-sm-12 col-xs-12 display-inline background-image-announce text-center">
                                    <i class="fa fa-file-image-o " aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div class="col-sm-12 col-xs-12 display-inline background-image-announce text-center">
                                    <i class="fa fa-file-image-o " aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div class="col-sm-12 col-xs-12 display-inline background-image-announce text-center">
                                    <i class="fa fa-file-image-o " aria-hidden="true"></i>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="text-center title_add_announce">Adauga Detalii</h3>
                        <div class="col-sm-12 col-xs-12 margin-top-bottom-15px padding-right-0 padding-left-0">
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="titlu" type="text" value=""
                                                            placeholder="Titlu anunt"></label>
                            <label class="width-100"><textarea
                                        class="text_input width-100 font-size-20px details_announce textarea-announce"
                                        maxlength="500" name="descriere"
                                        placeholder="Descriere"></textarea></label>
                            <label class="width-100"><input
                                        class="text_input width-100 font-size-20px details_announce display-inline"
                                        maxlength="60" name="pret" type="text" value=""
                                        placeholder="Pret (RON)"></label>

                            <h5 class="title_add_announce">Categorie</h5>
                            <select name="tipImobil" id="select_add_announce"
                                    class="form-control height-70px margin-8-0 font-size-20px border-radius-10 margin-bottom-10">
                                <option value="2">Locuinta</option>
                                <option value="1">Birou</option>
                                <option value="0">Teren</option>
                            </select>

                            <h5 class="title_add_announce">Vanzare / Inchiriere</h5>
                            <select name="tipTranzactie"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option value="Vanzare">Vanzare</option>
                                <option value="Inchiriere">Inchiriere</option>


                            </select>
                        </div>
                    </div>
                    <div id="DivLocuintaID">
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">Suprafata</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="suprafataL" type="text" value=""
                                                            placeholder="Suprafata (mp)"></label>
                            <h5 class="title_add_announce">Tip proprietate</h5>
                            <select name="tipL"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option value="Casa">Casa</option>
                                <option value="Apartament">Apartament</option>
                                <option value="Cabana">Cabana</option>
                                <option value="Vila">Vila</option>
                                <option value="Casa cu mansarda">Casa cu mansarda</option>
                                <option value="Casa tip duplex">Casa tip duplex</option>


                            </select>
                            <h5 class="title_add_announce">Localitate</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="localitateL" type="text" value=""
                                                            placeholder="Localitate"></label>
                            <h5 class="title_add_announce">Zona</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="zonaL" type="text" value=""
                                                            placeholder="Zona"></label>
                            <h5 class="title_add_announce">Orientare</h5>
                            <select name="orientareL"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option value="Est">Est</option>
                                <option value="Vest">Vest</option>
                                <option value="Nord">Nord</option>
                                <option value="Sud">Sud</option>
                                <option value="Nord-Est">Nord-Est</option>
                                <option value="Nord-Vest">Nord-Vest</option>
                                <option value="Sud-Est">Sud-Est</option>
                                <option value="Sud-Vest">Sud-Vest</option>

                            </select>
                            <h5 class="title_add_announce">Compartimentare</h5>
                            <select name="compartimentareL"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option value="Decomandat">Decomandat</option>
                                <option value="Nedecomandat">Nedecomandat</option>
                                <option value="Semidecomandat">Semidecomandat</option>


                            </select>

                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">An contructie</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="anConstructieL" type="text" value=""
                                                            placeholder="An constructie"></label>
                            <h5 class="title_add_announce">Etaj</h5>
                            <div class="col-sm-5 padding-left-0">
                                <select name="etajL"
                                        class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10 max-height-40px">
                                    <option>Selecteaza...</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>

                                </select>
                            </div>
                            <div class="col-sm-2">
                                <p style="color:white ; font-size:20px" class="text-center">din</p>
                            </div>
                            <div class="col-sm-5 padding-right-0">
                                <select name="totalEtajeL"
                                        class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10 max-height-40px">
                                    <option>Selecteaza...</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>

                                </select>
                            </div>
                            <h5 class="title_add_announce">Numar camere</h5>
                            <select name="nrCamereL"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <h5 class="title_add_announce">Stare</h5>
                            <select name="stareL"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option value="Nou">Nou</option>
                                <option value="Utilizat">Utilizat</option>
                                <option value="In constructie">In constructie</option>
                                <option value="Renovat">Renovat</option>
                            </select>
                            <h5 class="title_add_announce">Nr bai</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="numarBaiL" type="text" value=""
                                                            placeholder="Nr Bai"></label>

                            <h5 class="title_add_announce">Alte detalii</h5>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="centralaTermL" value="0" type="hidden"/>
                                <input name="centralaTermL" value="1" type="checkbox"> Centrala termica
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="balconL" value="0" type="hidden"/>
                                <input name="balconL" value="1" type="checkbox"> Balcon
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="gradinaL" value="0" type="hidden"/>
                                <input name="gradinaL" value="1" type="checkbox"> Gradina
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="liftL" value="0" type="hidden"/>
                                <input name="liftL" value="1" type="checkbox"> Lift
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="aerL" value="0" type="hidden"/>
                                <input name="aerL" value="1" type="checkbox"> Aer conditionat
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="suprVideoL" value="0" type="hidden"/>
                                <input name="suprVideoL" value="1" type="checkbox"> Supravegheat video
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="mobilatL" value="0" type="hidden"/>
                                <input name="mobilatL" value="1" type="checkbox"> Mobilat
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="alarmaL" value="0" type="hidden"/>
                                <input name="alarmaL" value="1" type="checkbox"> Alarma
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="usaBlindataL" value="0" type="hidden"/>
                                <input name="usaBlindataL" value="1" type="checkbox">Usa blindata
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="gazL" value="0" type="hidden"/>
                                <input name="gazL" value="1" type="checkbox"> Detector Gaz
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="parcareL" value="0" type="hidden"/>
                                <input name="parcareL" value="1" type="checkbox"> Parcare
                            </label>
                        </div>
                    </div>
                    <div id="DivTerenID" class="display-search something">
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">Suprafata</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="suprafataT" type="text" value=""
                                                            placeholder="Suprafata (mp)"></label>
                            <h5 class="title_add_announce">Tip</h5>
                            <select name="tipT"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option value="Intravilan">Intravilan</option>
                                <option value="Extravilan">Extravilan</option>


                            </select>
                            <h5 class="title_add_announce">Localitate</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="localitateT" type="text" value=""
                                                            placeholder="Localitate"></label>


                        </div>
                        <div class="col-sm-6 col-xs-12">

                            <h5 class="title_add_announce">Zona</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="zonaT" type="text" value=""
                                                            placeholder="Zona"></label>

                            <h5 class="title_add_announce">Vanzare / Inchiriere</h5>

                            <h5 class="title_add_announce">Alte detalii</h5>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="electricitateT" value="0" type="hidden">
                                <input name="electricitateT" value="1" type="checkbox"> Electricitate
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="gazT" value="0" type="hidden">
                                <input name="gazT" value="1" type="checkbox"> Gaz
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="gardT" value="0" type="hidden">
                                <input name="gardT" value="1" type="checkbox"> Gard
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="apaT" value="0" type="hidden">
                                <input name="apaT" value="1" type="checkbox"> Apa
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="canalizareT" value="0" type="hidden">
                                <input name="canalizareT" value="1" type="checkbox"> Canalizare
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="irigatieT" value="0" type="hidden">
                                <input name="irigatieT" value="1" type="checkbox"> Irigatie
                            </label>

                        </div>
                    </div>
                    <div id="DivBirouID" class="display-search something">
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">Suprafata</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="suprafataB" type="text" value=""
                                                            placeholder="Suprafata(m2)"></label>
                            <h5 class="title_add_announce">Tip</h5>
                            <select name="tipB"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option value="Singular">Singular</option>
                                <option value="Modular">Modular</option>
                            </select>
                            <h5 class="title_add_announce">Localitate</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="localitateB" type="text" value=""
                                                            placeholder="Localitate"></label>
                            <h5 class="title_add_announce">Zona</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="zonaB" type="text" value=""
                                                            placeholder="Zona"></label>
                            <h5 class="title_add_announce">Orientare</h5>
                            <select name="orientareB"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option value="Est">Est</option>
                                <option value="Vest">Vest</option>
                                <option value="Nord">Nord</option>
                                <option value="Sud">Sud</option>
                                <option value="Nord-Est">Nord-Est</option>
                                <option value="Nord-Vest">Nord-Vest</option>
                                <option value="Sud-Est">Sud-Est</option>
                                <option value="Sud-Vest">Sud-Vest</option>

                            </select>
                            <h5 class="title_add_announce">Compartimentare</h5>
                            <select name="compartimentareB"
                                    class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option value="Decomandat">Decomandat</option>
                                <option value="Nedecomandat">Nedecomandat</option>
                                <option value="Semidecomandat">Semidecomandat</option>


                            </select>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">An constructie</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="anConstructieB" type="text" value=""
                                                            placeholder="An constructie"></label>
                            <h5 class="title_add_announce">Etaj</h5>
                            <div class="col-sm-5 padding-left-0">
                                <select name="etajB"
                                        class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10 max-height-40px">
                                    <option>Selecteaza...</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>

                                </select>
                            </div>
                            <div class="col-sm-2">
                                <p style="color:white ; font-size:20px" class="text-center">din</p>
                            </div>
                            <div class="col-sm-5 padding-right-0">
                                <select name="totalEtajeB"
                                        class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10 max-height-40px">
                                    <option>Selecteaza...</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>

                                </select>
                            </div>
                            <h5 class="title_add_announce">Locuri Parcare</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="locuriParcareB" type="text" value=""
                                                            placeholder="Locuri parcare"></label>
                            <h5 class="title_add_announce">Nr bai</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="numarBaiB" type="text" value=""
                                                            placeholder="Nr Bai"></label>

                            <h5 class="title_add_announce">Alte detalii</h5>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="balconB" value="0" type="hidden"/>
                                <input name="balconB" value="1" type="checkbox"> Balcon
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="terasaB" value="0" type="hidden"/>
                                <input name="terasaB" value="1" type="checkbox"> Terasa
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="suprVideoB" value="0" type="hidden"/>
                                <input name="suprVideoB" value="1" type="checkbox"> Supravegheat video
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="liftB" value="0" type="hidden"/>
                                <input name="liftB" value="1" type="checkbox"> Lift
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="alarmaB" value="0" type="hidden"/>
                                <input name="alarmaB" value="1" type="checkbox"> Alarma
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="aerB" value="0" type="hidden"/>
                                <input name="aerB" value="1" type="checkbox"> Aer conditionat
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="sedinteB" value="0" type="hidden"/>
                                <input name="sedinteB" value="1" type="checkbox"> Sala Sedinte
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input name="receptieB" value="0" type="hidden"/>
                                <input name="receptieB" value="1" type="checkbox"> Receptie
                            </label>
                        </div>
                    </div>


<<<<<<< HEAD
                <div id="add_announce_submit" class="col-sm-12 col-xs-12 padding-10 margin-bottom-30px">
                    <h5 class="title_add_announce">Alegeti metoda de marcare a imobilului pe harta:</h5>
                    <select id="select_marker_method"
=======
                    <div id="add_announce_submit" class="col-sm-12 col-xs-12 padding-10 margin-bottom-30px">
                        <h5 class="title_add_announce">Alegeti metoda de marcare pe harta:</h5>
                        <select id="select_marker_method"
>>>>>>> c29739d91e702d739f436a3ae2c7804a0f753f26
                                class="form-control height-70px margin-8-0 font-size-20px border-radius-10 margin-bottom-10">
                            <option value="map">Click pe harta - Daca nu va aflati in acest moment in imobilul pe care
                                doriti sa-l vindeti/inchiriati
                            </option>
                            <option value="posActuala">Pozitia actuala - Daca va aflati in acest moment in imobilul pe
                                care doriti sa-l vindeti/inchiriati
                            </option>
                        </select>
                        <div id="mapSelected">
                            <div class="map" id="map">
                                <div id="adaugaAnunt">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 text-center">
                            <label class=" text-white  padding-10 display">
                                <input type="checkbox"> Sunt de acord cu termenii si conditiile
                            </label>
                        </div>
                        <div class=" col-sm-12 col-xs-12 text-center">
                            <button type="submit" style="background :none;border:none;"><span class="bottom_announce_1">
                            Adauga anunt
                        </span></button>
                        </div>
                        <input type="hidden" value="{{ Session::token() }}" name="_token"/>
                        <div class="padding-10"></div>

                    </div>


                </div>
            </form>
        </div>
    </div>
@endsection