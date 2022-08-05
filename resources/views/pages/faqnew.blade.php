<!DOCTYPE html>
<html>

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
    <title>Orio</title>
</head>
<style>
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

    #f1 {
        background-color: #6d1ed4;
    }

    h4,
    p {
        color: white;
    }

    body {
        background-color: #f4f4f4;
    }

    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    #img1:hover {
        border-bottom: none;
    }

    .c-p {
        cursor: pointer;
    }

    #google_translate_element span {
        display: none;
    }

    #google_translate_element select {
        background: #6d1ed4;
        color: white;
        border: 2px solid #6d1ed4;
        border-radius: 15px;
        padding-left: 25px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .goog-te-combo option[value="en"] {
        padding: 20px !important;
    }

    .goog-te-banner-frame {
        display: none;
    }

    #google_translate_element select option {
        display: none;
    }

    #google_translate_element select option {
        margin: 40px;
    }

    #google_translate_element select option[value="zh-CN"] {
        display: block;
    }

    #google_translate_element select option[value="fr"] {
        display: block;
    }

    #google_translate_element select option[value="en"] {
        display: block;
    }

    #google_translate_element select option[value="es"] {
        display: block;
    }

    #google_translate_element select option[value="pt"] {
        display: block;
    }

    #google_translate_element select option[value="ar"] {
        display: block;
    }

    #google_translate_element select option[value="hi"] {
        display: block;
    }

    #google_translate_element select option[value="ko"] {
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

    .skiptranslate {

    }

    /* apply CSS to the select tag of
          .dropdown-container div*/

    #google_translate_element select {
        /* for Firefox */
        -moz-appearance: none;
        /* for Safari, Chrome, Opera */
        -webkit-appearance: none;
    }

    /* for IE10 */
    #google_translate_element select::-ms-expand {
        display: none;
    }

    .skiptranslate.goog-te-gadget {

    }

    .goog-te-gadget {
        color: transparent !important;
    }
</style>

<body>
<video autoplay muted loop id="myVideo">
    <source src="assets/img/Website Design BG.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
<div>
    <div class="container-fluid">
        <div class="row px-5 py-3">
            <div class="col-6 mt-4" style="display: flex;">
                <span>            <img id="img1" onclick="goBack()" class="img-fluid c-p" src="assets/img/backnew1.png"
                                       alt=""> </span>
                <span>           <a href="index.php" id="img1"> <img id="img1" class="img-fluid ml-1"
                                                                     src="assets/img/Orio Logo Trace-02.png"
                                                                     alt=""> </a> </span>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-8 mt-0 mb-3 p-2"
                 style="color: #6d1ed4; text-transform: uppercase; text-align: center; margin: 0 auto; border-radius: 1%;">
          <span style="font-size: xx-large; font-weight: 600; font-family:'Montserrat';">FREQUENTLY ASKED
            QUESTIONS</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12 col-md-6 col-xs-12 mt-2">
                <div id="accordion">
                    <div class="card mb-2" style="background: none; border: none;">
                        <div class="card-header text-center" id="headingOne"
                             style="cursor: pointer; background-color: #6d1ed4;"
                             data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true"
                             aria-controls="collapseOne">
                <span style="color: white; font-size: large; font-weight: 600; font-family:'Montserrat';">
                  What is ORIO? <br>
                </span>
                        </div>

                        <div style="background: #f4effb;" id="collapseOne1" class="collapse"
                             aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <p style="font-size: medium; font-family:'Montserrat'; color: black;"> ORIO is a
                                    universal progressive
                                    currency built for stability by increasing value over time. It is
                                    a radical digital asset based on DAG (Directed Acyclic Graph) data structure. <br>
                                    <br>
                                    ORIO can be a convenient medium of exchange system where you can transact or swap
                                    directly from DCP's available in your location, making it the world's most reliable
                                    currency for
                                    all. </p>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-2" style="background: none; border: none;">
                        <div class="card-header text-center" id="headingOne"
                             style="cursor: pointer; background-color: #6d1ed4;"
                             data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true"
                             aria-controls="collapseOne">
                <span style="color: white; font-size: large; font-weight: 600; font-family:'Montserrat';">
                  How Is ORIO used? <br>
                </span>
                        </div>

                        <div style="background: #f4effb;" id="collapseOne2" class="collapse"
                             aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <p style="font-size: medium; font-family:'Montserrat'; color: black;">Fast, stable, more
                                    secure than
                                    any other digital
                                    currency. Leveraging the power of innovative
                                    technology, ORIO focuses on unleashing the financial value to transform savings.
                                    Central
                                    banks and financial institutions worldwide can access our technology.</p>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-2" style="background: none; border: none;">
                        <div class="card-header text-center" id="headingOne"
                             style="cursor: pointer; background-color: #6d1ed4;"
                             data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true"
                             aria-controls="collapseOne">
                <span style="color: white; font-size: large; font-weight: 600; font-family:'Montserrat';">
                  How Does ORIO work? <br>
                </span>
                        </div>

                        <div style="background: #f4effb;" id="collapseOne3" class="collapse"
                             aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <p style="font-size: medium; font-family:'Montserrat'; color: black;"> ORIO Network is
                                    built on our
                                    Directed Acyclic Graph (DAG) on top of the Google Cloud
                                    Platform, members can take advantage of all the features offered by the Google Cloud
                                    Platform. <br> <br>
                                    By leveraging our open-source ORIO DAG platform, DLT networks can be easily created
                                    and managed. A 1% transaction fee is charged, but this fee paid is recirculated back
                                    into the
                                    system to provide members with meaningful savings. <br> <br>
                                    The CaaS (Currency as a Service) solution allows all centralized systems to be
                                    easily
                                    integrated into one another where global banks can deploy their own CBDCs
                                    seamlessly. In
                                    this way, our technology can be utilized by any central bank and financial
                                    institution around
                                    the world. With a stable medium of exchange and a smart contract, ORIO creates a new
                                    opportunity for financial services innovation.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-2" style="background: none; border: none;">
                        <div class="card-header text-center" id="headingOne"
                             style="cursor: pointer; background-color: #6d1ed4;"
                             data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true"
                             aria-controls="collapseOne">
                <span style="color: white; font-size: large; font-weight: 600; font-family:'Montserrat';">
                  Benefits of Orio Currency <br>
                </span>
                        </div>

                        <div style="background: #f4effb;" id="collapseOne4" class="collapse"
                             aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">


                                <div>
                    <span style="font-weight: 600; font-size: large; font-family:'Montserrat'; color: #6d1ed4;">
                      Fast
                    </span></div>
                                <p style=" font-size: medium; font-family:'Montserrat'; color: black;">
                                    Unlimited Transactions in a sec

                                    <br>
                                </p>
                                <div>
                    <span style="font-weight: 600; font-size: large; font-family:'Montserrat'; color: #6d1ed4;">
                      Scalable</span></div>
                                <p style="font-size: medium; font-family:'Montserrat'; color: black;">
                                    Handle Transactions of greater scale

                                </p>
                                <div>
                    <span style="font-weight: 600; font-size: large; font-family:'Montserrat'; color: #6d1ed4;">
                      Stable</span></div>
                                <p style="font-size: medium; font-family:'Montserrat'; color: black;">
                                    Stable technology and growth like no other
                                    <br>
                                </p>
                                <div>
                    <span style="font-weight: 600; font-size: large; font-family:'Montserrat'; color: #6d1ed4;">
                      No Mining</span></div>
                                <p style="font-size: medium; font-family:'Montserrat'; color: black;">
                                    Cost-effective and eco-friendly

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-2" style="background: none; border: none;">
                        <div class="card-header text-center" id="headingOne"
                             style="cursor: pointer; background-color: #6d1ed4;"
                             data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true"
                             aria-controls="collapseOne">
                <span style="color: white; font-size: large; font-weight: 600; font-family:'Montserrat';">
                  Global Reserve Currency <br>
                </span>
                        </div>

                        <div style="background: #f4effb;" id="collapseOne5" class="collapse"
                             aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <div>
                    <span style="font-weight: 600; font-size: large; font-family:'Montserrat'; color: #6d1ed4;">
                      Scalable progressive currency for universal adoption</span></div>
                                <br>
                                <p style="font-size: medium; font-family:'Montserrat'; color: black;">
                                    ORIO is an ideal progressive currency for central banks and other financial
                                    institutions
                                    preparing for investments, transactions, and savings. ORIO is a more scalable,
                                    secure, and
                                    more stable ecosystem built on top of the Google cloud platform. ORIO is digital
                                    money
                                    focused on savings on the internet similar to Bitcoin and lets you control funds
                                    from ORIO
                                    wallet.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-2" style="background: none; border: none;">
                        <div class="card-header text-center" id="headingOne"
                             style="cursor: pointer; background-color: #6d1ed4;"
                             data-toggle="collapse" data-target="#collapseOne6" aria-expanded="true"
                             aria-controls="collapseOne">
                <span style="color: white; font-size: large; font-weight: 600; font-family:'Montserrat';">
                  What is new about the global Reserve currency? <br>
                </span>
                        </div>

                        <div style="background: #f4effb;" id="collapseOne6" class="collapse"
                             aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <div>
                                    <br>
                                    <p style="font-size: medium; font-family:'Montserrat'; color: black;">
                                        There are many cryptocurrencies and stable coins, but there are some things you
                                        can only
                                        do with ORIO's universal Global Research Currency.
                                        <br>
                                    </p>
                                    <span
                                        style="font-weight: 600; font-size: large; font-family:'Montserrat'; color: #6d1ed4;">
                      Security</span>
                                </div>
                                <p style="font-size: medium; font-family:'Montserrat'; color: black;">
                                    ORIO has a unique approach to security protocols to secure your networks and
                                    blockchains
                                    from day one of deployment.
                                    <br>
                                </p>
                                <div>
                    <span style="font-weight: 600; font-size: large; font-family:'Montserrat'; color: #6d1ed4;">
                      Immutable</span></div>
                                <p style=" font-size: medium; font-family:'Montserrat'; color: black;">
                                    ORIO pioneers advanced technology for lightning-fast settlement of funds and
                                    automatic
                                    swaps while powering trust.
                                    <br>
                                </p>
                                <div>
                    <span style="font-weight: 600; font-size: large; font-family:'Montserrat'; color: #6d1ed4;">
                      Access to Innovation</span></div>
                                <p style=" font-size: medium; font-family:'Montserrat'; color: black;">
                                    Operate your digital currency with 100% uptime and secure transaction of multiplying
                                    value
                                    to unleash financial service innovation
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display: none;" class="modal-title" id="exampleModalLabel">Scan for Open Orio App</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="text-center">Scan to Open Orio App</h6>
                <div class="row mt-2">
                    <div class="col-8" id="metamask" style="cursor: pointer; margin: 0 auto;">
                        <img class="mt-2" width="100%" src="assets/img/ORIOWallet_QRCode.png" alt="">

                    </div>
                </div>
                <a href="http://play.google.com/store/apps/details?id=com.google.android.apps.maps">
                    <h5 class="text-center mt-5">Test App</h5>
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
@include ('.includes.footer_new')
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</html>
