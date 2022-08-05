<?php //include ('Layouts/Header/aboutus_header.php'); ?>
@include('.includes.aboutus_header')
<body>
  <video autoplay muted loop id="myVideo">
    <source src="assets/img/Website Design BG.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
<div>
    <div class="container-fluid">
        <div class="row px-5 py-0">
            <div class="col-6 mt-4" style="display: flex;">
                <span>
                    <img onclick="goBack()" id="img1" class="img-fluid c-p" src="assets/img/backnew1.png" alt="">
                </span>
                <span>
                    <a href="{{route('mainPage')}}" id="img1"> <img id="img1" class="img-fluid ml-1" src="assets/img/Orio Logo Trace-02.png" alt=""> </a> </span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-0 mb-3 p-2" style="color: #6d1ed4; text-align: center; margin: 0 auto; border-radius: 1%;">
                <span class="about">ABOUT</span><br>
                <span class="orio">ORIO</span>
                <br>
                <span class="orio_head">Orio Currency. Simply the Best</span>
                <br>
                <span class="orio_p">Bringing financial value to the world</span>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 col-xs-12 mt-2">
                <div class="card mt-2 mb-2 bg-n">
                    <div id="f1" class="card-body p-3 f1">
                        <p class="mt-2 mb-3 ff" id="priceSum">Orio is an innovative digital
                            currency and application trusted by 200 million individuals and all
                            central banks from across the world. We're the first company to introduce a CaaS (Currency
                            as a Service) that enables central banks to seamlessly create and deploy their own digital
                            currencies.
                            <br> <br>
                            Established in June of 2017, ORIO is the world's most stable and highly scalable, and
                            progressive Medium of Exchange system. The only progressive currency that accelerates
                            value over time with the promise of no deflation, transforming financial stability and
                            reliability
                            for central banks, governments, and individual investors.
                            <br> <br>
                            ORIO is based on a DAG (Directed Acyclic Graph) data structure. Our DAG enables
                            independent and free transactions between all parties in the network. Managing transactions
                            and issuing of ORIOs are carried out collectively by the ORIO Network. We believe that the
                            creation of the ORIO network complies with the regulation of all jurisdictions. ORIO
                            currency
                            is built to make the present better and the future shines brightly for everyone, anywhere,
                            anytime.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mt-0 mb-3 p-2 cmn_div">
                <br>
                <span class="orio_head">The ORIO Mission</span>
                <br>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 col-xs-12 mt-2">
                <div class="card mt-2 mb-2 bg-n">
                    <div id="f1" class="card-body p-3 f1">
                        <p class="mt-2 mb-3 ff" id="priceSum" style="font-family:'Montserrat';">We envision an
                            advancing, more reliable,
                            cost-effective “Medium of Exchange” system to foster financial inclusion and socio-economic
                            progress for communities across the world.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mt-0 mb-3 p-2 cmn_div">
                        <br>
                        <span class="stats">STATS</span>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-2 mb-4 bg-n">
            <div id="f1" class="card-body p-3 f1">
                <div class="row mb-4 mt-3">
                    <div class="col-lg-3 col-sm-12 col-xs-12">
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center">
                        <span class="b7">7 BILLIONS+</span>
                        <br>
                        <span class="b7_p">POTENTIAILLY DAILY USER</span>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 text-center">
                        <span class="b7">7 TRILLION+</span>
                        <br>
                        <span class="b7_p">POTENTIAILLY TRADED USER</span>
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
                    style="width: 30%;">Cancel</button>
            </div>
        </div>
    </div>
</div>
  @include('.includes.footer_new')
@include('.includes.aboutus_footer')
</body>
