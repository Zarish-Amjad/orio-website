<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"/>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font  -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i"
        rel="stylesheet">
    <!-- icofont icon -->
    <link rel="stylesheet" href="assets/css/icofont.css">
    <!-- font awesome icon -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--- meanmenu Css-->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" media="all"/>
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- venobox -->
    <link rel="stylesheet" href="assets/venobox/css/venobox.css"/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
    <title>Orio</title>
</head>

<style>
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    @media screen and (max-width: 600px) and (min-width: 577px) {
        #check {
            margin-top: 28%;
        }
    }

    @media screen and (max-width: 700px) and (min-width: 601px) {
        #check {
            margin-top: 22%;
        }
    }

    @media screen and (max-width: 960px) and (min-width: 701px) {
        #check {
            margin-top: 22%;
        }
    }

    @media screen and (max-width: 1195px) and (min-width: 961px) {
        #check {
            margin-top: 20%;
        }
    }

    input[type=email],
    input[type=text],
    input[type=tel] {
        width: 100%;
        padding: 5px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-radius: 0;
        border-bottom: 1px solid #6d1ed4;
    }

    @media screen and (min-width: 676px) {
        .modal-dialog {
            max-width: 820px;
        }
    }

    #google_translate_element span {
        display: none;
    }

    #google_translate_element select {
        background: #6d1ed4;
        padding: 7px;
        color: white;
    }

    #google_translate_element select option {
        display: none;
    }

    #google_translate_element select option[value="zh-CN"] {
        display: block;
    }

    #google_translate_element select option[value="zh-TW"] {
        display: block;
    }

    #google_translate_element select::-webkit-outer-spin-button,
    #google_translate_element select::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    #google_translate_element select {
        -moz-appearance: textfield;
    }

    div.main-1 {

        overflow: hidden;
        height: auto;
        padding: 2em 0;
        color: #E4F6F8;
        font-size: 30px;
        margin-top: -30px;
    }

    div.slide-right p {
        -moz-animation: 1s slide-right;
        -webkit-animation: 1s slide-right;
        -o-animation: 1s slide-right;
        animation: 1s slide-right;
        margin: 0;
        color: #6d1ed4;
        font-size: 41px;
        font-weight: 500;
    }

    div.slide-left p {
        -moz-animation: 1s slide-left;
        -webkit-animation: 1s slide-left;
        -o-animation: 1s slide-left;
        animation: 1s slide-left;
        margin: 0;
        font-size: 30px;
    }

    @-webkit-keyframes slide-right {
        from {
            margin-left: 100%;
            width: 300%;
        }

        to {
            margin-left: 0%;
            width: 100%;
        }
    }

    @-moz-keyframes slide-right {
        from {
            margin-left: 100%;
            width: 300%;
        }

        to {
            margin-left: 0%;
            width: 100%;
        }
    }

    @-o-keyframes slide-right {
        from {
            margin-left: 100%;
            width: 300%;
        }

        to {
            margin-left: 0%;
            width: 100%;
        }
    }

    @keyframes slide-right {
        from {
            margin-left: 100%;
            width: 300%;
        }

        to {
            margin-left: 0%;
            width: 100%;
        }
    }

    @-webkit-keyframes slide-left {
        from {
            margin-left: 0%;
            width: 100%;
        }

        to {
            margin-left: -100%;
            width: 300%;
        }
    }

    @-moz-keyframes slide-left {
        from {
            margin-left: 0%;
            width: 100%;
        }

        to {
            margin-left: -100%;
            width: 300%;
        }
    }

    @-o-keyframes slide-left {
        from {
            margin-left: 0%;
            width: 100%;
        }

        to {
            margin-left: -100%;
            width: 300%;
        }
    }

    @keyframes slide-left {
        from {
            margin-left: 0%;
            width: 100%;
        }

        to {
            margin-left: -100%;
            width: 300%;
        }
    }

    @media only screen and (max-width: 767px) {

        .container {
            max-width: 100%;
        }

        #back {
            background-color: #6d1ed4;
            width: 100%;
            margin-bottom: -66px;
            margin-top: -48px;
        }

        #i {
            display: block;
            margin-top: 10px;
        }

        #h {
            display: none;
        }


        div.slide-right p {
            color: white;
            font-size: 30px;
        }

        .slider-section {
            background-color: #6d1ed4;
        }


        .home-3 .slider-section {
            margin-top: 65px;
        }

        .banner-text p {
            color: #ffffff;

        }

        .btn-ban {
            background-color: white;
            transform: none;
            border: none;
            color: #6d1ed4;
            height: 41px;
            margin-bottom: 2px;
        }

        ::placeholder {
            color: #ffffff;
        }

        .btn-style {
            text-transform: uppercase;
            padding: 5px 30px;
            display: inline-block;
            border-radius: 12px;

        }

        input {
            border: 2px solid #ffffff !important;
            line-height: 35px !important;
            width: 56% !important;
            padding-left: 7px !important;
            background-color: #6d1ed4 !important;

        }

    }

    @media only screen and (min-width: 990px) {
    }

    @media only screen and (min-width: 768px) {
        .size-gif video {
            height: 400px !important;

        }

        .size-gif-1 {
            display: none;

        }


    }

    @media only screen and (max-width: 767px) {

        .size-gif {
            display: none !important;

        }
    }

    .bullelements {
        margin-top: -2px;
        font-size: 32px;
    }

    .first_a {
        position: absolute;
        top: 25px;
        right: 50%;
        left: 50%;
    }

    .second_a {
        position: absolute;
        top: 55px;
        right: 20%;
        left: 29%;
        color: #191919;
    }

    .three_a {
        position: absolute;
        top: 36%;
        right: 20%;
        left: 30%;
        text-align: left;
        color: #191919;
    }

    .first_b {
        position: absolute;
        top: 25px;
        right: 50%;
        left: 55%;
    }

    .second_b {
        position: absolute;
        top: 20%;
        right: 30%;
        left: 34%;
        color: #191919;
    }

    .three_b {
        position: absolute;
        top: 40%;
        right: 20%;
        left: 30%;
        text-align: left;
        color: #191919;
    }

    .first_c {
        position: absolute;
        top: 25px;
        right: 50%;
        left: 47%;
    }

    .second_c {
        position: absolute;
        top: 30%;
        right: 30%;
        left: 31%;
        color: #191919;
    }

    .three_c {
        position: absolute;
        top: 50%;
        right: 20%;
        left: 30%;
        text-align: justify;
        color: #191919;
    }

    @media only screen and (max-width: 410px) {
        .three p {
            font-size: 11px !important;
        }

        .second p {
            font-size: 14px !important;
        }

    }

    @media (min-width: 996px and max-width:

    1214px

    ) {
        .three p {
            font-size: 12px !important;
        }

    }

    @media only screen and (max-width: 525px) {
        .text {
            margin-top: 50px;
        }

        .col3 {
            margin-top: 100px;
        }
    }

    .text p {
        margin-bottom: 4px;
    }

    @media screen and (max-width: 440px) and (min-width: 360px) {
        .lan_btn {
            width: 115px;
            margin-top: -5px;
        }
    }

    @media screen and (max-width: 361px) and (min-width: 300px) {
        .lan_btn {
            width: 99px;
            margin-top: -9px;
        }
    }

    @media only screen and (max-width: 440px) {

        .three_a p {
            font-size: 10px !important;

        }

        .three_b p {
            font-size: 10px !important;

        }

        .three_c p {
            font-size: 10px !important;

        }

        .second_a p {
            font-size: 12px !important;
            margin-top: -4%;

        }

        .second_b p {
            font-size: 12px !important;
            margin-top: 6%;

        }

        .second_c p {
            font-size: 12px !important;
            margin-top: 6%;

        }
    }

    .c-p {
        cursor: pointer;
    }

    #img1:hover {
        border-bottom: none;
    }

    @media screen and (max-width: 425px) and (min-width: 321px) {
        #img2 {
            font-size: small;
            margin-left: 0%;
        }
    }

    @media screen and (max-width: 320px) and (min-width: 250px) {
        #img2 {
            font-size: small;
            margin-left: -10%;
        }

        #img3 {
            font-size: small;
            margin-left: 5%;
        }

        .second_b {
            top: 15%;
        }

        .first_c {
            left: 44%;
        }

        .three_a {
            left: 26%;
        }
    }

    @media screen and (max-width: 1024px) and (min-width: 768px) {
        .div-img {
            width: 325px !important;
        }

        .three_a p, .three_b p, .three_c p {
            font-size: 13px !important;
        }

        .three_a, .three_b, .three_c {
            left: 25%;
        }


    }
</style>
<body>

<div class="container-fluid"
     style="background: url(assets/img/homebanner.png) no-repeat center; background-size: cover;">
    <div class="row px-5 py-3">
        <div class="col-6 mt-4" style="display: flex;">
            <span>
                <img id="img1" onclick="goBack()" class="img-fluid c-p" src="assets/img/backnew1.png" alt="">
            </span>
            <span>
                <a href="{{route('mainPage')}}" id="img1">
                    <img id="img1" class="img-fluid ml-1" src="assets/img/Orio Logo Trace-02.png" alt=""> </a>
            </span>
        </div>

    </div>
    <div class="row px-5">
        <div class="col-lg-6 col-sm-12 mt-4 text-center" style="color: #6d1ed4;">
            <h3 style="color: #6d1ed4; font-family:'Montserrat';">
                Frictionless
                <br>
                Currency

            </h3>
            <br>
            <p style="font-size: large; font-family:'Montserrat';"><b>ORIO.</b> The world's most scalable and secured
                progressive medium
                of exchange for people and communities around the world. </p>
            <br>
            <button id="img2" type="button" style="background: #fc2828; border: none; font-family:'Montserrat';"
                    class="btn btn-primary btn-lg px-5 mt-3">OPEN <b>ORIO</b> WALLET
            </button>
        </div>
        <div class="col-lg-6 col-sm-12 text-center mt-4" style="color: #6d1ed4;">
            <img class="img-fluid" src="assets/img/Group 304@2x.png" alt="">
        </div>
    </div>
</div>
<section id="team" class="section-padding" style="background: white;">
    <div class="container">
        <div class="row text-center">
            <div class="team-slider owl-carousel owl-theme">
                <div class="single-team-wrapper">
                    <img class="img-fluid" src="assets/img/a.png" alt="">
                </div>
                <!-- end col -->
                <div class="single-team-wrapper">

                    <img class="img-fluid" src="assets/img/b.png" alt="">

                </div>
                <!-- end col -->
                <div class="single-team-wrapper">

                    <img class="img-fluid" src="assets/img/c.png" alt="">

                </div>
                <!-- end col -->
                <div class="single-team-wrapper">
                    <img class="img-fluid" src="assets/img/d.png" alt="">

                </div>

                <!-- end col -->
            </div>
        </div>
        <div class="row py-5">
            <div class="col text-center mt-3">
                <h3><span style="color: 6d1ed4;">ORIO</span> at YOUR DCP</h3>

            </div>

        </div>
        <!-- end row -->
    </div>
    <!--- END CONTAINER -->
</section>


<section id="service" class="section-padding mb-5">
    <div class="buy-sell text-center">


    </div>
    <div class="row col-lg-12 col-sm-12 col-12 orio-dcp">
        <div class="col-lg-2 col-sm-12 col-12">
            <div class="row">
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 col-12 px-5">
            <div class="row">
                <div class="width-height">
                    <img src="assets/img/Group 298@2x.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-lg-5 pd-top-desktop" style="font-family:'Montserrat'; color: black;">
            <div class="row mb-center">
                <div class="col-lg-3 col-md-3 col-12 mb-lg-4 mb-md-4 mb-4">
                    <div class="single-service-item">
                        <img class="img-fluid" src="assets/img/dcp.png" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-12 mb-lg-4 mb-md-4 mb-4 padding-zero">
                    <div class="single-service-title">
                        <div class="single-service-text">
                            <h2>DCP</h2>
                        </div>
                    </div>
                    <div class="single-service-dec">
                        <p>Transact directly from DCP's available in your location.

                        </p>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="row mb-center">
                <div class="col-lg-3 col-md-3 col-12 mb-lg-4 mb-md-4 mb-4">
                    <div class="single-service-item">
                        <img class="img-fluid" src="assets/img/transparent.png" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-12 mb-lg-4 mb-md-4 mb-4 padding-zero">
                    <div class="single-service-title">
                        <div class="single-service-text">
                            <h2>TRANSPARENT</h2>
                        </div>
                    </div>
                    <div class="single-service-dec">
                        <p>Your funds are hold by your own DCP'S BANKS. All DCP's are subject to monthly audits.
                        </p>
                    </div>

                </div>
            </div>
            <!-- end col -->
            <div class="row mb-center">
                <div class="col-lg-3 col-md-3 col-12 mb-lg-4 mb-md-4 mb-4">
                    <div class="single-service-item" style="float: right;">
                        <!--                        <div class="single-service">-->
                        <!--                            <div class="single-service-img">-->
                        <img class="img-fluid" src="assets/img/available.png" alt="">
                    </div>
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
                <div class="col-lg-9 col-md-9 col-12 mb-lg-4 mb-md-4 mb-4 padding-zero">
                    <div class="single-service-title">
                        <div class="single-service-text">
                            <h2>Available World Wide</h2>
                        </div>
                    </div>
                    <div class="single-service-dec">
                        <p>We are enrolling banking Partners throughout the world.
                        </p>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
        <div class="col-lg-1 col-sm-12 col-12">
            <div class="row">

            </div>
        </div>
    </div>
    <!--- END CONTAINER -->

</section>
<br>
<br>

<div class="container-fluid" style="background-image: linear-gradient(to right, #cdb1f1, white);">
    <div class="row">
    </div>
</div>

<div class="container">
    <div class="mt-5">

        <div class="row py-5">
            <div class="col-12 text-center" style="color: #6d1ed4;">
                <p style="font-size: x-large; font-family:'Montserrat';"> Making Digital Finance <b> Better (Efficient.
                        Scalable.
                        Cost-Effective.Faster) </b> for all.</p>
            </div>

        </div>
        <div class="row py-5">
            <div class="col-12 text-center">
                <div class="card" style="border-radius: 15px; box-shadow: 1px 3px 12px #383838;">
                    <div class="card-body">
                        <p style="font-size: large; font-family:'Montserrat'; color: black;"><b>ORIO</b> simpliﬁes
                            frictionless currency by enabling a
                            progressive medium of exchange system for greater economic opportunity and ﬁnancial
                            inclusion. A Stable Infrastructure for Digital Finance The only Progressive Currency to
                            increase value at every transaction.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row py-5">
            <div class="col-lg-2 col-sm-12 pd-top-desktop text-center" style="font-family:'Montserrat'; color: black;">
                <div class="row mb-center">

                    <div class="col-lg-12 col-md-12 col-12 mb-lg-4 mb-md-4 mb-4 mt-3 padding-zero">
                        <p style="font-size: x-large; position: relative; color: #6d1ed4; font-family:'Montserrat';"><b>The
                                Currency That Only
                                Increases The Value!</b></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div style="background-size: cover;
            background-image: url(assets/img/logo_shadow1.png);
            background-repeat: no-repeat;
            background-position: center;
            height: 325px;
            padding: 17% 0 0 20%;
            width: 100%;">
                    <div class="text" style="font-family:'Montserrat'; font-size: 12px;">
                        <p id="check" style="font-size: 50px; margin-bottom: -7px; color: #D9DFF2;"><b>01</b></p>
                        <ul>

                            <li><span class="bullelements">

                </span><b class="ml-1">&#9679; Merchant Transactions</b></li>
                            <p class="ml-3"> As You Buy - Sell Merchant Transactions Happen + 1% Fee is Applied.</p>

                            <li><b class="ml-1">&#9679; Your Funds</b></li>
                            <p class="ml-3"> Your Funds are Hold by own DCP’S BANKS. All DCP”S areSubject to Monthy
                                Audits.</p>

                            <li><b class="ml-1">&#9679; Increasing</b></li>
                            <p class="ml-3"> The Value Keeps Increasing</p>

                            <li><b class="ml-1">&#9679; Custom Zero Proof</b></li>
                            <p class="ml-3"> Allows You To Keep Your Transactions Conﬁdential All While Remaining
                                Complaint.</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col3">
                <div style="background-size: cover;
            background-image: url(assets/img/logo_shadow1.png);
            background-repeat: no-repeat;
            background-position: center;
            height: 325px;
            padding: 17% 0 0 20%;
            width: 100%;">
                    <div class="text" style="font-family:'Montserrat'; font-size: 12px;">
                        <p id="check" style="font-size: 50px; margin-bottom: -7px; color: #D9DFF2;"><b>02</b></p>
                        <ul>

                            <li><span class="bullelements">

                </span><b>&#9679; Powerful identity protocol</b></li>
                            <br>

                        </ul>
                        <ul>
                            <li><b>&#9679; The most advanced Security innovation in the game</b></li>
                            <br>
                        </ul>
                        <ul>
                            <li><b>&#9679; Unhackable</b></li>
                            <br>

                        </ul>
                        <ul>
                            <li><b>&#9679; Artiﬁcial Intelligence and biometrics integration for </b> <b class="ml-3">an
                                    ultimate security</b></li>
                            <br>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-5 mt-5">
            <div class="col-12 text-center" style="color: #6d1ed4;">
                <p style="font-size: large; font-family:'Montserrat'; color: black;"><b>ORIO is on track to deliver
                        robust infrastructure for security, scalability, and innovation. </b></p>
                <p style="font-size: x-large; font-family:'Montserrat';"><b>INFINITE TRANSACTIONS PER SECOND!</b></p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" style="color: #6d1ed4;">
                <img class="img-fluid div-img" src="assets/img/div 1.png" style="width: 86%" alt="">
                <div class="first_a"><p style="font-size: medium; font-family:'Montserrat';"><b>DAG</b></p>

                </div>
                <div class="second_a text-center">
                    <p style="font-size: 15px; font-family:'Montserrat';"><b>Directed Acyclic <br> Graph</b></p>
                </div>
                <div class="three_a p-1">
                    <p style="font-size: 14px; font-family:'Montserrat';"><b>ORIO</b> is built on a DAG data structure
                        where each transaction in the network is confirmed by two subsequent transactions <br>
                        instantly. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" style="color: #6d1ed4;">
                <img class="img-fluid div-img" src="assets/img/div 2.png" style="width: 86%" alt="">
                <div class="first_b"><p style="font-size: medium; font-family:'Montserrat';"><b>DW</b></p>

                </div>
                <div class="second_b text-center">
                    <p style="font-size: 15px; font-family:'Montserrat';"><b>Dummy <br> Witnesses</b></p>
                </div>
                <div class="three_b p-1">
                    <p style="font-size: 14px; font-family:'Montserrat';"> To avoid latency in own network. We have
                        nodes that split themeselves infinitely to confirm <br> transaction <br> instantly.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" style="color: #6d1ed4;">
                <img class="img-fluid div-img" src="assets/img/div 3.png" style="width: 86%" alt="">
                <div class="first_c"><p style="font-size: medium; font-family:'Montserrat';"><b>HYBRID <br> NETWORK</b>
                    </p>

                </div>
                <div class="second_c text-center">
                    <p style="font-size: 15px; font-family:'Montserrat';"><b>Centralized & De-centralized</b></p>
                </div>
                <div class="three_c p-1">
                    <p style="font-size: 14px; font-family:'Montserrat';"> The Dummy Witnesses <br> nodes are hosted in
                        our <br> centralized network <br> to avoid latency </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-4" style="display: none;">
    <div class="row text-center">
        <div class="col-lg-3"
             style="margin: 0 auto; background: rgb(255, 255, 255); border-radius: 1%; border: 2px solid #6d1ed4;">
            <br>
            <div style="line-height: 21px;">
                <p style="font-size: x-large; position: relative; color: #6d1ed4; font-family:'Montserrat';"><b>DAG</b>
                </p>
                <p style="font-size: large; position: relative; font-family:'Montserrat';"><b>Directed Acyclic Graph</b>
                </p>
                <p style="font-size: medium; position: relative; font-family:'Montserrat';"><b>ORIO</b> is built on a
                    DAG data structure where each transaction in the network is conﬁrmed by Two subsequent transactions
                    instantly.</p>
            </div>
        </div>
        <div class="col-lg-3"
             style="margin: 0 auto; background: rgb(255, 255, 255); border-radius: 1%;  border: 2px solid #6d1ed4;">
            <div style="line-height: 21px;">
                <br>
                <p style="font-size: x-large; position: relative; color: #6d1ed4; font-family:'Montserrat';"><b>DW</b>
                </p>
                <p style="font-size: large; position: relative; font-family:'Montserrat';"><b>Dummy Witnesses</b></p>
                <p style="font-size: medium; position: relative; font-family:'Montserrat';">To avoid latency in own
                    network. We have nodes that split themselves infinitely to confirm Transaction instantly.</p>
            </div>
        </div>
        <div class="col-lg-3"
             style="margin: 0 auto; background: rgb(255, 255, 255); border-radius: 1%;  border: 2px solid #6d1ed4;">
            <br>
            <div style="line-height: 21px;">
                <p style="font-size: x-large; position: relative; color: #6d1ed4; font-family:'Montserrat';"><b>HYBRID
                        NETWORK</b></p>
                <p style="font-size: large; position: relative; font-family:'Montserrat';"><b>Centralized &
                        De-certralized</b></p>
                <p style="font-size: medium; position: relative; font-family:'Montserrat';">The Dummy Witnesses nodes
                    are hosted in our centralized network to avoid latency.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <section id="chhoseus" class="section-padding bg-gray">
        <div class="container">

            <!-- end section title -->
            <div class="row">
                <div class="card bg-gray" style="border:2px solid grey; border-radius: 20px; padding: 28px;">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h3>Available Market</h3>
                                <p style="font-size: large; font-family:'Montserrat'; color: black;">We are delivering
                                    groundbreaking technology and cryptocurrencies for All Businesses - all in one
                                    place, hassle-free. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 6%; padding-right: 6%; font-size: 13px;">
                        <div class="col-lg-4 col-md-4 col-12 mb-5">
                            <div class="single-wcus" style="display: inline-flex;">
                                <div class="single-wcus-icon">
                                    <i class="icofont icofont-bill"></i>
                                </div>
                                <div class="single-wcus-text">
                                    <h5 style="font-size: 15px;">Financial Market</h5>
                                </div>
                            </div>
                        </div>
                        <!-- end single chooseus -->
                        <div class="col-lg-4 col-md-4 col-12 mb-5">
                            <div class="single-wcus" style="display: inline-flex;">
                                <div class="single-wcus-icon">
                                    <i class="icofont icofont-coins"></i>
                                </div>
                                <div class="single-wcus-text">
                                    <h5 style="font-size: 15px;">Crypto Market</h5>
                                </div>
                            </div>
                        </div>
                        <!-- end single chooseus -->
                        <div class="col-lg-4 col-md-4 col-12 mb-5">
                            <div class="single-wcus" style="display: inline-flex;">
                                <div class="single-wcus-icon">
                                    <i class="fas fa-hand-holding-usd" style="font-size: 38px;padding: 0px 16px;"></i>
                                </div>
                                <div class="single-wcus-text">
                                    <h5 style="font-size: 15px;">Retirement Account</h5>
                                </div>
                            </div>
                        </div>
                        <!-- end single chooseus -->
                        <div class="col-lg-4 col-md-4 col-12 mb-5">
                            <div class="single-wcus" style="display: inline-flex;">
                                <div class="single-wcus-icon">
                                    <i class="icofont icofont-money"></i>
                                </div>
                                <div class="single-wcus-text">
                                    <h5 style="font-size: 15px;">Country with instable currencies </h5>
                                </div>
                            </div>
                        </div>
                        <!-- end single chooseus -->
                        <div class="col-lg-4 col-md-4 col-12 mb-5">
                            <div class="single-wcus" style="display: inline-flex;">
                                <div class="single-wcus-icon">
                                    <i class="icofont icofont-ui-game"></i>
                                </div>
                                <div class="single-wcus-text">
                                    <h5 style="font-size: 15px;">Gaming</h5>
                                </div>
                            </div>
                        </div>
                        <!-- end single chooseus -->
                        <div class="col-lg-4 col-md-4 col-12 mb-5">
                            <div class="single-wcus" style="display: inline-flex;">
                                <div class="single-wcus-icon">

                                    <!--                        <i class="icofont icofont-industries"></i>-->
                                    <img src="assets/img/service/Autonomous.png"
                                         style="padding: 0px 17px; height: 38px;">

                                </div>
                                <div class="single-wcus-text">
                                    <h5 style="font-size: 15px;">Autonomous Industry</h5>
                                </div>
                            </div>
                        </div>
                        <!-- end single chooseus -->
                        <div class="col-lg-4 col-md-4 col-12 mb-5">
                            <div class="single-wcus" style="display: inline-flex;">
                                <div class="single-wcus-icon">
                                    <i class="icofont icofont-bank-alt"></i>
                                </div>
                                <div class="single-wcus-text">
                                    <h5 style="font-size: 15px;">BANKING</h5>
                                </div>
                            </div>
                        </div>
                        <!-- end single chooseus -->
                        <div class="col-lg-4 col-md-4 col-12 mb-5">
                            <div class="single-wcus" style="display: inline-flex;">
                                <div class="single-wcus-icon">
                                    <i class="icofont icofont-briefcase"></i>
                                </div>
                                <div class="single-wcus-text">
                                    <h5 style="font-size: 15px;">Mutual Funds</h5>

                                </div>
                            </div>
                        </div>
                        <!-- end single chooseus -->
                        <div class="col-lg-4 col-md-4 col-12 mb-5">
                            <div class="single-wcus" style="display: inline-flex;">
                                <div class="single-wcus-icon">
                                    <i class="icofont icofont-industries"></i>
                                </div>
                                <div class="single-wcus-text">
                                    <h5 style="font-size: 15px;">Remittence Industry </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <div class="section-title">
                        <h3 style="font-family:'Montserrat';">Join ORIO Network</h3>
                        <p style="font-size: large; font-family:'Montserrat'; color: black;">Learn how you can quickly
                            connect to ORIO Network and see
                            the world's first progressive currency in action.</p>
                        <button id="img3" type="button"
                                style="background: #fc2828; border: none; font-family:'Montserrat';" data-toggle="modal"
                                data-target="#exampleModal" class="btn btn-primary btn-lg px-5">
                            OPEN <b>ORIO</b> WALLET
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: none; border: none;">
            <div class="container">
                <div class="row">
                    <div class="col-4" style="background-image: url('assets/img/Untitled-2-02.png');
                    background-repeat: no-repeat;
                    background-size: cover;">
                    </div>
                    <div class="col-8 py-4 px-5"
                         style="background: white; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">
                        <p class="text-center py-3" style="color: #6d1ed4; font-size: large; letter-spacing: 1px;">
                            <b> sign-up</b></p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp"
                                       placeholder="Financial Institution">
                            </div>

                            <div class="form-group">
                                <select style=" border: none;
                                border-radius: 0;
                                border-bottom: 1px solid #6d1ed4;" class="form-control">
                                    <option>&nbsp;Country</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp"
                                       placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp"
                                       placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp"
                                       placeholder="Box to Leave a Message">
                            </div>
                        </form>
                        <button type="button"
                                style="background: #6d1ed4; padding: 8px; float: right; font-weight: 100; letter-spacing: 1px; font-size: smaller;"
                                class="btn btn-dark mt-2 mb-2">SUBMIT
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

@include('.includes.footer_new')

<script>
    function goBack() {
        window.history.back();
    }
</script>

<script src="assets/js/bs-animation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<!-- Latest jQuery -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<!-- popper js -->
<script src="assets/bootstrap/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- meanmenu min js  -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- Sticky JS -->
<script src="assets/js/jquery.sticky.js"></script>
<!-- owl-carousel min js  -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- jquery appear js  -->
<script src="assets/js/jquery.appear.js"></script>
<!-- countTo js -->
<script src="assets/js/jquery.inview.min.js"></script>
<!-- venobox js -->
<script src="assets/venobox/js/venobox.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<!-- scroll to top js -->
<script src="assets/js/scrolltopcontrol.js"></script>
<!-- WOW - Reveal Animations When You Scroll -->
<script src="assets/js/wow.min.js"></script>
<!-- scripts js -->
<script src="assets/js/scripts.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    var title = ['<p>Empower Communities</p>', '<p>Empower People</p>', '<p> Frictionless Currency</p>'];
    var index = 0;

    function change_title() {
        var x = title[index];
        $('.main-1').html(x);
        index++;
        if (index >= title.length) {
            index = 0;
        }
    };

    function change_left() {
        $('dev.remove').removeClass('slide-right').addClass('slide-left');
    }

    function change_right() {
        $('dev.remove').removeClass('slide-left').addClass('slide-right');
        change_title();
    }

    function to_left() {
        setInterval(change_left, 2500);
    };

    function to_right() {
        setInterval(change_right, 2500);
    };

    to_left();
    to_right();
</script>
<script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="languageScript.js" type="text/javascript"></script>
