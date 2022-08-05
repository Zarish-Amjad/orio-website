<!DOCTYPE html>
<html lang="zxx">
<!-- about.html 04:54  -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"/>
    <title>Orio</title>
    <!-- Bootstrap core CSS -->
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
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="assets/css/extralayers.css" media="screen"/>
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- venobox -->
    <link rel="stylesheet" href="assets/venobox/css/venobox.css"/>
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>

        .authentication-label h1 {
            padding-top: 50px;
            color: #ffffff;
            /*padding-bottom: 33px;*/
            font-family: 'Montserrat', sans-serif;
            /*font-weight: 700;*/
            font-size: 40px;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        .container {
            padding-block-start: 1rem
        }

        .authentication-label p {
            padding-top: 20px;
            padding-bottom: 33px;
            color: #ffffff;
            font-size: 18px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }

        /*.authentication-text{*/
        /*    height:500px;*/
        /*    background-color:#6d1ed4;*/
        /*}*/
        .authentication-text h1 {
            padding-top: 10px;
            margin-top: 87px;
            color: #6d1ed4;
            /*padding-bottom: 33px;*/
            font-family: 'Montserrat', sans-serif;
            /*font-weight: 700;*/
        }

        .authentication-text p {
            padding-top: 20px;
            padding-bottom: 100px;
            color: #000000;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }

        .delight-text h1 {
            padding-top: 100px;
            color: #6d1ed4;
            /*padding-bottom: 33px;*/
            font-family: 'Montserrat', sans-serif;
            /*font-weight: 700;*/
        }

        .delight-text p {
            padding-top: 20px;
            padding-bottom: 50px;
            color: #000000;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }

        .headaches-text h1 {
            padding-top: 100px;
            color: #6d1ed4;
            /*padding-bottom: 33px;*/
            font-family: 'Montserrat', sans-serif;
            /*font-weight: 700;*/
        }

        .headaches-text p {
            padding-top: 20px;
            padding-bottom: 50px;
            color: #000000;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }

        /*        .{*/
        /*     background:#fff;*/
        /*    color: ;*/
        /*}*/
        .button1 {
            border: 1px solid #ffffff;
            color: #6d1ed4;
            outline: none;
            background-color: #ffffff;
            border-radius: 12px;
            text-align: center;
            padding: 10px 20px;
        }

        .button2 {
            border: 1px solid #6d1ed4;
            color: #ffffff;
            outline: none;
            background-color: #6d1ed4;
            border-radius: 12px;
            text-align: center;
            padding: 10px 20px;
        }

        .fa-check-circle {
            color: #4cd24c;
            font-size: 19px;
        }

        .fa-copy {
            font-size: 19px;
            cursor: pointer;
            display: none;
        }

        .language-curl:hover .fa-copy, .fa-check-circle {
            display: flex;
            float: right;
            padding-block-start: 0.5rem;


        }

        .buttonclip {
            border: 1px solid #ffffff;
            color: #6d1ed4;
            outline: none;
            background-color: #000000;
            border-radius: 12px;
            text-align: center;
            padding: 10px 20px;
        }


        .access-padding {
            padding-bottom: 33px;
        }

        .headaches {
            padding-top: 50px;
            /*padding-left:80px;*/
        }

        .passwordless-text h1 {
            padding-top: 100px;
            color: #6d1ed4;
            /*padding-bottom: 33px;*/
            font-family: 'Montserrat', sans-serif;
            /*font-weight: 700;*/
        }

        .headaches-text p {
            padding-top: 20px;
            padding-bottom: 70px;
            color: #000000;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
        }

        .authentication-page-banner {
            width: 100%;
            display: block;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            padding-left: 16px;
            padding-right: 16px;
        }

        code[class*='language-'],
        pre[class*='language-'] {
            color: #f8f8f2;
            background: none;
            font-family: 'IBM Plex Mono', monospace;
            font-size: 1em;
            text-align: left;
            white-space: pre-wrap;
            word-spacing: normal;
            word-break: normal;
            word-wrap: normal;
            line-height: 1.5;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            -webkit-hyphens: none;
            -moz-hyphens: none;
            -ms-hyphens: none;
            hyphens: none;
        }

        pre[class*='language-'] {
            padding: 1em;
            /*margin: 0.5em 0;*/
            overflow: auto;
            border-radius: 0.3em;
        }

        .token.curl {
            color: #0cd7d4;
            text-align: left;
        }

        .token.option {
            color: #f0f432;
        }

        .delight-text {
            padding-right: 0px !important;
            padding-left: 40px !important;
        }

        .authentication-content {
            position: relative;
            max-width: 900px;
            font-size: 16px;
            box-shadow: 0px 5px 35px 0px rgb(31, 34, 31, 0.35);
            margin-top: 80px;
            margin-bottom: 32px;
        }

        #myInput {
            position: absolute;
            opacity: .01;
            height: 0;
            overflow: hidden;
        }

        @media screen and (max-width: 768px) and (min-width: 450px) {
            .authentication-label h1 {
                font-size: 34px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                cursor: pointer;
                display: flex;
                float: right;
                padding-block-start: 0.6rem;
                margin-inline-end: 3rem;
            }
        }

        @media screen and (min-width: 768px) {

            .second_img {
                max-width: 100%;
            }

        }

        @media screen and (max-width: 768px) and (min-width: 731px) {
            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 4rem;
            }
        }

        @media screen and (max-width: 730px) and (min-width: 722px) {
            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 5rem;
            }
        }

        @media screen and (max-width: 723px) and (min-width: 716px) {
            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 6rem;
            }
        }

        @media screen and (max-width: 715px) and (min-width: 698px) {
            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 7rem;
            }
        }

        @media screen and (max-width: 697px) and (min-width: 664px) {
            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 1rem;
            }
        }

        @media screen and (max-width: 697px) and (min-width: 650px) {
            .authentication-content {
                width: 674px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 1rem;
            }
        }

        @media screen and (max-width: 649px) and (min-width: 630px) {
            .authentication-content {
                width: 674px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 2rem;
            }
        }

        @media screen and (max-width: 629px) and (min-width: 615px) {
            .authentication-content {
                width: 674px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 3rem;
            }
        }

        @media screen and (max-width: 614px) and (min-width: 595px) {
            .authentication-content {
                width: 674px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 4rem;
            }
        }

        @media screen and (max-width: 594px) and (min-width: 579px) {
            .authentication-content {
                width: 674px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 5rem;
            }
        }

        @media screen and (max-width: 578px) and (min-width: 566px) {
            .authentication-content {
                width: 674px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 6rem;
            }
        }

        @media screen and (max-width: 565px) and (min-width: 540px) {
            .authentication-content {
                width: 674px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 8rem;
            }
        }

        @media screen and (max-width: 539px) and (min-width: 515px) {
            .authentication-content {
                width: 532px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 1.2rem;
            }
        }

        @media screen and (max-width: 514px) and (min-width: 501px) {
            .authentication-content {
                width: 532px;
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 2rem;
            }
        }

        @media screen and (max-width: 500px) and (min-width: 450px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 1rem;
            }
        }

        @media screen and (max-width: 449px) and (min-width: 430px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 2rem;
            }
        }

        @media screen and (max-width: 429px) and (min-width: 415px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 3rem;
            }
        }

        @media screen and (max-width: 414px) and (min-width: 395px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 4rem;
            }
        }

        @media screen and (max-width: 394px) and (min-width: 385px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 5rem;
            }
        }

        @media screen and (max-width: 384px) and (min-width: 366px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 6rem;
            }
        }

        @media screen and (max-width: 365px) and (min-width: 355px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 7rem;
            }
        }

        @media screen and (max-width: 354px) and (min-width: 345px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 8rem;
            }
        }

        @media screen and (max-width: 344px) and (min-width: 335px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 9rem;
            }
        }

        @media screen and (max-width: 334px) and (min-width: 325px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 9rem;
            }
        }

        @media screen and (max-width: 324px) and (min-width: 315px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 9.5rem;
            }
        }

        @media screen and (max-width: 314px) and (min-width: 300px) {
            .authentication-content {
                width: 475px;
                height: 255px;
            }

            .container {
                padding-block-start: 3rem
            }

            .language-curl:hover .fa-copy, .fa-check-circle {
                margin-inline-end: 12rem;
            }
        }

        @media screen and (max-width: 449px) and (min-width: 360px) {
            .authentication-label h1 {
                font-size: 27px;
            }

            .width-height img {
                height: 204px;

            }

            .second_img {
                width: 224px !important;
            }

            .first_img {
                height: 231px !important;
            }
        }

        @media screen and (max-width: 359px) {
            .authentication-label h1 {
                font-size: 21px;
            }

            .width-height img {
                height: 204px;

            }

            .second_img {
                width: 176px !important;
            }

            .first_img {
                height: 231px !important;
            }

            .headaches-text h1, .delight-text h1 {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 991px) {
            .headaches-text h1 {
                padding-top: 0px;
                text-align: center;
            }

            .delight-text {
                padding-left: 0px;
            }

            .delight-text p, .headaches-text p {
                text-align: initial;
            }

            .authentication-label {
                padding-block-start: 2rem;
            }
        }

        @media (max-width: 734.95px) {
            .authentication-content {
                font-size: 14px;
            }
        }

        @media screen and (min-width: 766px) and (max-width: 798px) {

        }

        /* @media screen and (min-width: 0px) and (max-width: 765px) {*/
        /*  #my-content { display: block; }  */
        /*}*/
        /*@media screen and (min-width: 766px) {*/
        /*  #my-content { display: none; }  */
        /*}*/
    </style>
</head>
<body>
<!-- START PRELOADER -->
<!-- START PRELOADER -->
<!--<div id="page-preloader">-->
<!--    <div class="theme-loader">ORIO</div>-->
<!--</div>-->
<!-- END PRELOADER -->
<!-- START HEADER SECTION -->
<div class="bg-banner-5">

    <!--<section class="authentication-passwordless">-->
    <!--    <div class="digital-banner text-center">-->
    <!--        <img  width="100%"  src="assets/img/authentication-banner.png" alt="">-->
    <section class="authentication-page-banner">
        <div class="authentication-label text-center">
            <h1>User infrastructure for<br> modern applications</h1>
            <p>Orio's APIs make it simple to seamlessly onboard, authenticate, and engage users.<br> Improve security
                and user experience with passwordless authentication.</p>
        </div>
        <!--<div class="bg-banner">-->
        <!--</div>-->
    </section>
    <div class="text-center">
        <a href="#">
            <button class="btn-group button1"><b>Get early access</b></button>
        </a>
    </div>
    <!--d-none d-sm-block d-md-none-->
    <!--  <div class="text-center " id= "my-content">-->

    <!--   <button class="btn-group buttonclip"  onclick="myFunction()"><b >Copy hide code</b></button>-->
    <!--or-->
    <!--</div>-->
    <textarea id="myInput">curl -X POST https://api.orio.io/v1/magic_links/send_by_email \
                  -H 'Content-Type: application/json' \
                  -u 'project-live-c60c0abe-c25a-4472-a9ed-320c6667d317:secret-live-80JASucyk7z_G8Z-7dVwZVGXL5NT_qGAQ2I=' \
                  -d '{
                "email": "contact@orio.io",
                "magic_link_url": "https://orio.io",
                "expiration_minutes": 60,
                }'</textarea>


    <div class="authentication-content">





            <pre class="language-curl">
<code class=" jss52 language-curl" id="div1"><i class="fas fa-copy" onclick="myFunction()"></i><span class="token curl">curl</span><span
        class="token option"> -X </span>POST <span
        class="token url">https://api.orio.io/v1/magic_links/send_by_email</span> \
<span class="token option">  -H </span><span class="token value">'Content-Type: application/json'</span> \
<span class="token option">  -u </span>'project-live-c60c0abe-c25a-4472-a9ed-320c6667d317:secret-live-80JASucyk7z_G8Z-7dVwZVGXL5NT_qGAQ2I=<span
        class="token value"></span>' \
<span class="token option">  -d </span>'{
<span class="token value">"email"</span>: <span class="token value">"contact@orio.io"</span>,
<span class="token value">"magic_link_url"</span>: "<span class="token url">https://orio.io</span>",
<span class="token value">"expiration_minutes"</span>: 60,
}'</code></pre>
    </div>
</div>
<div class="authentication-body container">
    <div class="authentication-text" style="text-align:initial;">
        <h1>Build, customize, and launch your</br>integration in minutes</h1>
        <p>Build your user authentication with only a few lines of code. SDK and API solutions</br> allow you to build
            customized authentication flows in the time it takes to brew a pot of <br>coffee.</p>
    </div>
    <!--<div class="bg-banner">-->
    <!--</div>-->
    <div class="row col-lg-12 col-sm-12 col-12 delight">
        <div class="col-lg-6 col-sm-12 col-12">
            <div class="row">
                <div class="width-height">
                    <img src="assets/img/authentication.png" class="first_img"
                         style="overflow: hidden; text-align:right;    padding: 0rem 0rem 0rem 2rem!important;max-width:100%">
                </div>
            </div>
        </div>
        <div class="col-lg-6 delight-text">
            <div class="row mb-center" style="text-align:inherit;">
                <h1>Maximize conversion and delight your users</h1>
                <p>Remove the friction and frustration of passwords to provide users with a seamless sign-up and login
                    experience. Quickly iterate and test different authentication flows with our flexible API and SDKs
                    to optimize your conversion and retention.</p>
            </div>
        </div>
    </div>
    <div class="row col-lg-12 col-sm-12 col-12 headaches">
        <div class="col-lg-6 headaches-text">
            <h1 style="text-align: inherit;">Focus on your product, not authentication headaches</h1>
            <p>ORIO abstracts away the complexity of authentication and removes the most common and costly security
                vulnerability for businesses: passwords. Focus on building your core product, and don’t stress about
                building secure and reliable user authentication.</p>
        </div>
        <div class="col-lg-6 col-sm-12 col-12">
            <div class="row" style="padding:10px 50px;text-align:right;">
                <div class="width-height">
                    <img src="assets/img/authentication1.png" class="second_img" style="overflow: hidden">
                </div>
            </div>
        </div>
    </div>
    <div class="passwordless-text text-center">
        <h1>ORIO PASSORDLESS AUTHENTICATION</h1>
        <p>Request early access to get started.</p>
    </div>
    <div class="text-center access-padding">
        <a href="#">
            <button class="btn-group button2"><b>Get early access</b></button>
        </a>
    </div>
    <!--</section>-->
</div>
@include('.includes.footer_new')
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
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
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
<script>
    jQuery(document).ready(function () {
        jQuery('.tp-banner').show().revolution(
            {
                // 		dottedOverlay:"none",
                // 		delay:16000,
                // 		startwidth:1170,
                // 		startheight:550,
                // 		hideThumbs:200,

                // 		thumbWidth:100,
                // 		thumbHeight:50,
                // 		thumbAmount:5,

                // 		navigationType:"bullet",
                // 		// navigationArrows:"none",
                // 		navigationStyle:"preview3",

                // 		touchenabled:"on",
                // 		onHoverStop:"on",

                // 		swipe_velocity: 0.7,
                // 		swipe_min_touches: 1,
                // 		swipe_max_touches: 1,
                // 		drag_block_vertical: false,

                // 		parallax:"mouse",
                // 		parallaxBgFreeze:"on",
                // 		parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                // 		keyboardNavigation:"off",

                // 		navigationHAlign:"center",
                // 		navigationVAlign:"bottom",
                // 		navigationHOffset:0,
                // 		navigationVOffset:20,

                // 		soloArrowLeftHalign:"left",
                // 		soloArrowLeftValign:"center",
                // 		soloArrowLeftHOffset:20,
                // 		soloArrowLeftVOffset:0,

                // 		soloArrowRightHalign:"right",
                // 		soloArrowRightValign:"center",
                // 		soloArrowRightHOffset:20,
                // 		soloArrowRightVOffset:0,

                // 		shadow:0,
                // 		fullWidth:"on",
                // 		fullScreen:"off",

                // 		spinner:"spinner4",

                // 		stopLoop:"off",
                // 		stopAfterLoops:-1,
                // 		stopAtSlide:-1,

                // 		shuffle:"off",

                // 		autoHeight:"off",
                // 		forceFullWidth:"off",


                // 		hideThumbsOnMobile:"off",
                // 		hideNavDelayOnMobile:1500,
                // 		hideBulletsOnMobile:"off",
                // 		hideArrowsOnMobile:"off",
                // 		hideThumbsUnderResolution:0,

                // 		hideSliderAtLimit:0,
                // 		hideCaptionAtLimit:0,
                // 		hideAllCaptionAtLilmit:0,
                // 		startWithSlide:0,
                // 		fullScreenOffsetContainer: ""
            });


    });

    function myFunction() {
        $('#myInput').select();
        document.execCommand('copy');
        $('.fa-copy').addClass("fa-check-circle");
        $('.fa-copy').removeClass("fa-copy");
        setTimeout(function () {
            $('.fa-check-circle').addClass('fa-copy').removeClass('fa-check-circle');
        }, 1000);
    }


    //ready

</script>
<script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="languageScript.js" type="text/javascript"></script>
</body>
<!-- about.html 04:54  -->
</html>
