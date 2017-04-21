@extends('layouts.master')

@section('title')
    Bun venit pe PerF
    @endsection

@section('content')
    <div class="search_background">


        <div class="container">
            <div class="row">
                <div class="search">
                    <form class="form" role="form" method="get" action="">
                        <div class="search-three-bar">
                            <div class="box">
                            <div class="col-sm-6 col-xs-12">
                                <div class="col-sm-6 col-xs-6">
                                    <select class="form-control height-70px margin-8-0 font-size-20px border-radius-10 margin-bottom-10">
                                        <option>Apartamente</option>
                                        <option>Case</option>
                                        <option>Terenuri</option>
                                        <option>Birouri</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <select class="form-control height-70px margin-8-0 font-size-20px border-radius-10 margin-bottom-10">
                                        <option>Vanzare</option>
                                        <option>Inchiriere</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="input-group add-on margin-8-0 ">
                                    <input class="form-control height-70px font-size-20px border-radius-10 margin-bottom-10" placeholder="Introduceti orasul (ex: Constanta)" name="city"
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

    <div class="test">

    </div>
    @endsection