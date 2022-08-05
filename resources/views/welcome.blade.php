<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('.includes.header_links')
    <title>Orio</title>
</head>
<body>

<video autoplay muted loop id="myVideo">
    <source src="{{asset("assets/img/Website Design BG.mp4")}}" type="video/mp4">
    Your browser does not support HTML5 video.
</video>


<div>
    <div class="container" id="con">
        <div class="row mt-2">
            <div class="col-lg-5 col-md-6 col-sm-12 mt-4 anchor">
                <a href="{{route('mainPage')}}">
                    <span> <img id="img1" class="img-fluid ml-1" src="{{asset("assets/img/Orio Logo Trace-02.png")}}"
                                alt=""> </span>
                </a>
                <input type="text" id="csrf-token" value="{{csrf_token()}}" hidden>

            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 mt-4">
                <li id="dropdown1" class="nav-item dropdown" style="display: flex; float: right; margin-top: 2%;">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" v-pre title="EN"
                       style="color: white; background-color: #6d1ed4; border-radius: 5px;">
                        <span id="langText" style="color: white;">EN</span>
                        <i class="fas fa-caret-down" style="color: black;"></i>
                    </a>

                    <div translate="no" id="mainmenu1" class="dropdown-menu dropdown-menu-right"
                         aria-labelledby="navbarDropdown" class="notranslate"
                         style="background: #6d1ed4; max-height: 300px; overflow-y: scroll;">

                        <a class="dropdown-item lang-select text-uppercase" data-lang="en" href="#googtrans(en|en)">English</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="hi" href="#googtrans(en|hi)">हिंदी</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="ar" href="#googtrans(en|ar)">Arabic</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="es" href="#googtrans(en|es)">Español</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="nl" href="#googtrans(en|nl)">Deutsch</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="so" href="#googtrans(en|so)">Suomalainen</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="tl" href="#googtrans(en|tl)">Filipino</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="fr" href="#googtrans(en|fr)">Français</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="hu" href="#googtrans(en|hu)">Magyar</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="id" href="#googtrans(en|id)">Bahasa
                            Indonesia</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="it" href="#googtrans(en|it)">Italiano</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="ja"
                           href="#googtrans(en|ja)">日本語</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="ko"
                           href="#googtrans(en|ko)">한국어</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="nl" href="#googtrans(en|nl)">Nederlands</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="pl" href="#googtrans(en|pl)">Polski</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="pt" href="#googtrans(en|pt)">Português
                            (Brazil)</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="pt" href="#googtrans(en|pt)">Português</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="ro" href="#googtrans(en|ro)">Română</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="ru" href="#googtrans(en|ru)">Русский</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="sv" href="#googtrans(en|sv)">Svenska</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="ta" href="#googtrans(en|ta)">தமிழ்</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="tr" href="#googtrans(en|tr)">Türkçe</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="uk" href="#googtrans(en|uk)">Українська</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="vi" href="#googtrans(en|vi)">Tiếng
                            Việt</a>
                        <a class="dropdown-item lang-select text-uppercase" data-lang="zh-CN"
                           href="#googtrans(en|zh-CN)">简体中文</a>
                        <a style="display: none;" class="dropdown-item lang-select text-uppercase" data-lang="ps"
                           href="#googtrans(en|ps)">Pashto</a>
                    </div>
                </li>
                @if(session()->has(Config::get('constants.USER')))
                    <div class="dropdown "
                         style="float: right;   margin-right: 5%; margin-top: 2%">
                        <a class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <img
                                src="https://mpng.subpng.com/20180411/rzw/kisspng-user-profile-computer-icons-user-interface-mystique-5aceb0245aa097.2885333015234949483712.jpg"
                                class="rounded-circle" width="30" height="30">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" style="background-color: #6D1ED4" href="{{route('logout')}}">Logout</a></li>
                        </ul>
                    </div>
                @else
                    <button
                        style="float: right; font-size: 14px; background: #fc2828; border: none; padding: 8px; font-family:'Montserrat'; margin: 2%;"
                        class="btn btn-primary" data-toggle="modal" data-target="#openQr">OPEN <b>ORIO</b> WALLET
                    </button>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mt-0 mb-3 p-4"
                 style="color: #6d1ed4; text-transform: uppercase; text-align: center; margin: 0 auto; border-radius: 1%;">
                <h1 style="color: #6d1ed4; font-family:'Montserrat';">A UNIVERSE OF WEB3 Innovation Protocols and
                    beyond</h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3 col-md-6 col-xs-12 mt-2">
                <a href="{{route('home')}}" style="text-decoration: none;">
                    <div id="f1" class="p-2" style="border: 3px solid #6d1ed4; border-radius: 16px; height: 60%;">
                        <h4 style="text-transform: uppercase; font-family:'Montserrat';"
                            class="text-center mt-3 text-white"><b>ORIO</b>
                        </h4>
                        <p style="text-transform: uppercase; font-family:'Montserrat';" class="text-center mt-3 mb-4"
                           id="priceSum">stable progressive
                            currency</p>
                    </div>
                </a>
                <div>
                    <p class="text-center mt-3 mb-0 px-3"
                       style="color: #6d1ed4; font-size: 16px; font-family:'Montserrat';">A Global reserve currency for
                        everyone </p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 mt-2">
                <a href="{{route('cbds')}}" style="text-decoration: none;">
                    <div id="f1" class="p-2" style="border: 3px solid #6d1ed4; border-radius: 16px; height: 60%;">
                        <h4 style="text-transform: uppercase; font-family:'Montserrat';"
                            class="text-center mt-3 text-white"><b>ORIO</b>
                        </h4>
                        <p style="text-transform: uppercase; font-family:'Montserrat';" class="text-center mt-3 mb-4"
                           id="priceSum">CBDC platform</p>
                    </div>
                </a>
                <div class="mb-5">
                    <p class="text-center mt-3 mb-0 px-3"
                       style="color: #6d1ed4; font-size: 16px; font-family:'Montserrat';">Allow all central bank and
                        financial institutions around to seamlessly create their own digital currency </p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 mt-2">
                <a href="{{route('defiuniverse')}}" style="text-decoration: none;">
                    <div id="f1" class="p-2" style="border: 3px solid #6d1ed4; border-radius: 16px; height: 60%;">
                        <h4 style="text-transform: uppercase; font-family:'Montserrat';"
                            class="text-center mt-3 text-white"><b>ORIO</b>
                        </h4>
                        <p style="text-transform: uppercase; font-family:'Montserrat';" class="text-center mt-3 mb-4"
                           id="priceSum">Defi universe
                        </p>
                    </div>
                </a>
                <div>
                    <p class="text-center mt-3 mb-0 px-3"
                       style="color: #6d1ed4; font-size: 16px; font-family:'Montserrat';">Decentralized finance made
                        easy and accessible to everyone everywhere </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 mt-2">
                <a href="comingsoon.php" style="text-decoration: none;">
                    <div id="f1" class="p-2" style="border: 3px solid #6d1ed4; border-radius: 16px; height: 60%;">
                        <h4 style="text-transform: uppercase; font-family:'Montserrat';"
                            class="text-center mt-3 text-white"><b>ORIO</b>
                        </h4>
                        <p style="text-transform: uppercase; font-family:'Montserrat';" class="text-center mt-3 mb-4"
                           id="priceSum">Simplified payment
                            system (direct-real time)</p>
                    </div>
                </a>
                <div>
                    <p class="text-center mt-3 mb-0 px-3"
                       style="color: #6d1ed4; font-size: 16px; font-family:'Montserrat';">A payment system that meets
                        today challenges</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-6 mt-5 mb-5 text-center" style="margin: 0 auto; display: flex;"></div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-12 col-sm-12 mt-2 mb-3 text-center" style="margin: 0 auto;">
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 mt-2 mb-3 text-center" style="margin: 0 auto;">
                <button
                    style="width: 100%; font-size: 14px; background: black; border: none; padding: 9px; font-family:'Montserrat'; float: right;"
                    class=" px-4 btn btn-primary">
                    <b></b> PlayStore <i class="fab fa-google-play" style="color: white;"></i></button>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 mt-2 mb-3 text-center" style="margin: 0 auto;">
                <button
                    style="width: 100%; font-size: 14px; background: #fc2828; border: none; padding: 9px; font-family:'Montserrat'; float: left;"
                    class="mx-2 btn btn-primary" data-toggle="modal" data-target="#openQr">
                    OPEN<b> ORIO</b> WALLET
                </button>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 mt-2 mb-3 text-center" style="margin: 0 auto;">
                <button
                    style="width: 100%; font-size: 14px; background: black; border: none; padding: 9px; font-family:'Montserrat';"
                    class=" px-4 btn btn-primary">IOS <i class="fab fa-apple" style="color: white;"></i></button>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 mt-2 mb-3 text-center" style="margin: 0 auto;">
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="openQr" tabindex="-1" role="dialog" aria-labelledby="openQrlLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display: none;" class="modal-title" id="openQrLabel">Scan for Open Orio App</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="text-center">Scan to login from Orio App</h6>
                <div class="row mt-4">
                    <div class="d-flex justify-content-center" id="qrBox" style="cursor: pointer; margin: 0 auto;">
                        <canvas id="qr-code"></canvas>
                    </div>
                </div>
                <a href="http://play.google.com/store/apps">
                    <h5 class="text-center mt-5">Download App</h5>
                </a>
            </div>
            <div class="text-center mb-4">
                <button type="button" class="btn btn-outline-dark block" data-dismiss="modal" aria-label="Close"
                        style="width: 30%;">Cancel
                </button>
            </div>
        </div>
    </div>
</div>

@include('.includes.footer_new')

<script>
    $("#dropdown1").click(function () {
        $("#mainmenu1").css('display', 'block');
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
<script src="assets/js/websockets/mobileConnection.js"></script>
</body>

</html>


