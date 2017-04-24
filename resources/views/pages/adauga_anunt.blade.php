@extends('layouts.master')

@section('title')
    Adauga anunt
@endsection

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 background-black margin-top-20">

                <h1 class="text-center title_add_announce">Adauga anuntul tau aici</h1>

                    <div class="col-sm-6 col-xs-12">
                        <h3 class="text-center title_add_announce">Adauga Imagini</h3>
                        <div class="add_photo_announce col-sm-12 col-xs-12 margin-top-bottom-15px background-grey">
                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div class="col-sm-12 col-xs-12 display-inline add_image text-center background-image-announce-first background-image-announce">
                                    <i class="fa fa-plus " aria-hidden="true"></i>
                                </div>
                            </div>


                            <div class="col-sm-3 col-xs-4 padding-10">
                                <div id="theDiv"
                                     class="col-sm-12 col-xs-12 display-inline background-image-announce text-center">
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
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Titlu anunt"></label>
                            <label class="width-100"><textarea
                                        class="text_input width-100 font-size-20px details_announce textarea-announce"
                                        maxlength="500" name="title" type="text" value=""
                                        placeholder="Detalii"></textarea></label>
                            <label class="width-100"><input
                                        class="text_input width-100 font-size-20px details_announce display-inline"
                                        maxlength="60" name="title" type="text" value=""
                                        placeholder="Pret(RONI)"></label>

                            <h5 class="title_add_announce">Categorie</h5>
                            <select id="select_add_announce"
                                    class="form-control height-70px margin-8-0 font-size-20px border-radius-10 margin-bottom-10">
                                <option value="locuinta">Locuinta</option>
                                <option value="birou">Birou</option>
                                <option value="teren">Teren</option>
                            </select>
                        </div>
                    </div>
                    <div id="DivLocuintaID">
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">Suprafata</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Suprafata(m2)"></label>
                            <h5 class="title_add_announce">Tip proprietate</h5>
                            <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option>Casa</option>
                                <option>Apartament</option>
                                <option>Cabana</option>
                                <option>Vila</option>
                                <option>Casa cu mansarda</option>
                                <option>Casa tip duplex</option>


                            </select>
                            <h5 class="title_add_announce">Localitate</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Localitate"></label>
                            <h5 class="title_add_announce">Zona</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Zona"></label>
                            <h5 class="title_add_announce">Orientare</h5>
                            <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option>Est</option>
                                <option>Vest</option>
                                <option>Nord</option>
                                <option>Sud</option>
                                <option>Nord-Est</option>
                                <option>Nord-Vest</option>
                                <option>Sud-Est</option>
                                <option>Sud-Vest</option>

                            </select>
                            <h5 class="title_add_announce">Compartimentare</h5>
                            <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option>Decomandat</option>
                                <option>Nedecomandat</option>
                                <option>Semidecomandat</option>


                            </select>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">An contructie</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="An constructie"></label>
                            <h5 class="title_add_announce">Etaj</h5>
                            <div class="col-sm-5 padding-left-0">
                                <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10 max-height-40px">
                                    <option>Selecteaza...</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>

                                </select>
                            </div>
                            <div class="col-sm-2">
                                <p style="color:white ; font-size:20px" class="text-center">din</p>
                            </div>
                            <div class="col-sm-5 padding-right-0">
                                <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10 max-height-40px">
                                    <option>Selecteaza...</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>

                                </select>
                            </div>
                            <h5 class="title_add_announce">Stare</h5>
                            <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Nou</option>
                                <option>Utilizat</option>
                                <option>In constructie</option>
                                <option>Renovat</option>
                            </select>
                            <h5 class="title_add_announce">Nr bai</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Nr Bai"></label>
                            <h5 class="title_add_announce">Alte detalii</h5>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Balcon
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Gradina
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Lift
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Aer conditionat
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Supravegheat video
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Mobilat
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Alarma
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox">Usa blindata
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Detector Gaz
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Parcare
                            </label>
                        </div>
                    </div>
                    <div id="DivTerenID" class="display-search something">
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">Suprafata</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Suprafata(m2)"></label>
                            <h5 class="title_add_announce">Tip</h5>
                            <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Intravilan</option>
                                <option>Extravilan</option>


                            </select>
                            <h5 class="title_add_announce">Localitate</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Localitate"></label>


                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">Zona</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Zona"></label>

                            <h5 class="title_add_announce">Alte detalii</h5>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Electricitate
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Gaz
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Gard
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Apa
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Canalizare
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Irigare
                            </label>

                        </div>
                    </div>
                    <div id="DivBirouID" class="display-search something">
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">Suprafata</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Suprafata(m2)"></label>
                            <h5 class="title_add_announce">Tip</h5>
                            <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option>Singular</option>
                                <option>Modular</option>


                            </select>
                            <h5 class="title_add_announce">Localitate</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Localitate"></label>
                            <h5 class="title_add_announce">Zona</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Zona"></label>
                            <h5 class="title_add_announce">Orientare</h5>
                            <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option>Est</option>
                                <option>Vest</option>
                                <option>Nord</option>
                                <option>Sud</option>
                                <option>Nord-Est</option>
                                <option>Nord-Vest</option>
                                <option>Sud-Est</option>
                                <option>Sud-Vest</option>

                            </select>
                            <h5 class="title_add_announce">Compartimentare</h5>
                            <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10">
                                <option>Selecteaza...</option>
                                <option>Decomandat</option>
                                <option>Nedecomandat</option>
                                <option>Semidecomandat</option>


                            </select>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <h5 class="title_add_announce">An constructie</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="An constructie"></label>
                            <h5 class="title_add_announce">Etaj</h5>
                            <div class="col-sm-5 padding-left-0">
                                <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10 max-height-40px">
                                    <option>Selecteaza...</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>

                                </select>
                            </div>
                            <div class="col-sm-2">
                                <p style="color:white ; font-size:20px" class="text-center">din</p>
                            </div>
                            <div class="col-sm-5 padding-right-0">
                                <select class="form-control  margin-8-0 font-size-20px border-radius-5 margin-bottom-10 max-height-40px">
                                    <option>Selecteaza...</option>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>

                                </select>
                            </div>
                            <h5 class="title_add_announce">Locuri Parcare</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Locuri parcare"></label>
                            <h5 class="title_add_announce">Nr bai</h5>
                            <label class="width-100"><input class="text_input width-100 font-size-20px details_announce"
                                                            maxlength="60" name="title" type="text" value=""
                                                            placeholder="Nr Bai"></label>
                            <h5 class="title_add_announce">Alte detalii</h5>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Balcon
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Terasa
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Supravegheat video
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Lift
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Alarma
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Aer conditionat
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Sala Sedinte
                            </label>
                            <label class="col-sm-6 col-xs-6 text-white">
                                <input type="checkbox"> Receptie
                            </label>
                        </div>
                    </div>


                
                <div id="add_announce_submit" class="col-sm-12 col-xs-12 padding-10 margin-bottom-30px" >
                    <div class="col-sm-12 col-xs-12 text-center">
                <label class=" text-white  padding-10 display" >
                    <input type="checkbox"> Sunt de acord cu termenii si conditiile
                </label>
                    </div>
                    <div class=" col-sm-12 col-xs-12 text-center">
                       <a href="/"><span class="bottom_announce_1" >
                            Adauga anunt
                        </span> </a>
                    </div>
                    <div class="padding-10"></div>

                </div>


            </div>
        </div>
    </div>
@endsection