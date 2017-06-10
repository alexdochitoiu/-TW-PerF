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
                            <li class="hover_contul_meu"><a href="/contul_meu"><i style="padding-right:5px" class="fa fa-user-o" aria-hidden="true"></i>{{$user->username}}</a>
                                <p class="contul_meu">




                                    <a href="/contul_meu"><i class="fa fa-user-o" aria-hidden="true"></i>Contul meu</a>

                                    <a href="/anunturile_mele">
                                        <i class="fa fa-bullhorn" aria-hidden="true"></i>Anunturi
                                    </a>
                                    <a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Deconectare</a>
                                </p>
                            </li>
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
                                                             aria-hidden="true"></i> {{$user->username}}</span></a>
            <a href="/"><span class="informationMenuText"> <i class="fa fa-home"
                                                              aria-hidden="true"></i> Acasa</span></a>
            <a href="/ajutor"><span class="informationMenuText"><i class="fa fa-envira"
                                                                   aria-hidden="true"></i> Despre</span></a>
            <a href="/adauga_anunt"><span class="informationMenuText"><i class="fa fa-plus-circle"
                                                                         aria-hidden="true"></i> Adauga anunt</span></span>
            </a>

            <a href="/ajutor"><span class="informationMenuText"><i class="fa fa-question-circle-o"
                                                                   aria-hidden="true"></i> Ajutor</span></a>
            <a href="/anunturile_mele"><span class="informationMenuText">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>Anunturile Mele</span>
            </a>
            <a href="/logout"><span class="informationMenuText"><i class="fa fa-sign-out" aria-hidden="true"></i>Deconectare</span></a>
        </div>
    </div>

</div>