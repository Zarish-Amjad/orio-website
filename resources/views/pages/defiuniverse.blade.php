<body>

@include('includes.defiuniverse_header')
<div class="container">
    <div class="mt-1">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 mt-1 mb-4 text-center" style="margin: 0 auto;">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 m-0 p-1">
                        <button id="img2" type="button"
                                style="background: #fc2828; border: none; width: 100%; font-family:'Montserrat'; font-size: medium;"
                                class="btn btn-primary btn-lg px-5"><span>Prediction</span></button>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 m-0 p-1">
                        <button id="img2" type="button"
                                style="background: #fc2828; border: none; width: 100%; font-family:'Montserrat'; font-size: medium;"
                                class="btn btn-primary btn-lg px-1"><span>Decentralized Derivatives</span>
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 m-0 p-1">
                        <button id="img2" type="button"
                                style="background: #fc2828; border: none; width: 100%; font-family:'Montserrat'; font-size: medium;"
                                class="btn btn-primary btn-lg px-5"><span>Stake</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 mt-3 mb-4 text-center" style="margin: 0 auto;">
                <h2 style="color: #6d1ed4; font-family:'Montserrat'; font-weight: 600">Available to Billion
                    WorldWide</h2>
                <p style="font-size: large; margin-top: 2%; font-family:'Montserrat';"> Earn a Steady Income by Simply
                    Holding <b>ORIO</b> 1% Transaction fees stored on every Transaction</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-6 mt-3 mb-4 text-center" style="margin: 0 auto;">
                <h2 style="color: #6d1ed4; font-family:'Montserrat'; font-weight: 600">Prediction</h2>
                <div class="card" style="border-radius: 7px; box-shadow: 1px 3px 12px #383838;">
                    <div class="card-body px-4 p-0">
                        <p style="font-size: large; margin-top: 2%; font-family:'Montserrat';">Predict against another
                            Pool the price of <b>ORIO</b> everyday and earn up for 100% if you win the Prediction</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 mt-3 mb-4 text-center" style="margin: 0 auto;">
                <h2 style="color: #6d1ed4; font-family:'Montserrat'; font-weight: 600">Decentralized Derivatives</h2>
                <div class="card" style="border-radius: 7px; box-shadow: 1px 3px 12px #383838;">
                    <div class="card-body px-4 p-0">
                        <p style="font-size: large; margin-top: 2%; font-family:'Montserrat';"> Access Future trading
                            For everyone everywhere in the world.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background: none; border: none;">
                    <div class="container">
                        <div class="row">
                            <div class="col-4"
                                 style="background-image: url('assets/img/Untitled-2-02.png'); background-repeat: no-repeat; background-size: cover;"></div>
                            <div class="col-8 py-4 px-5"
                                 style="background: white; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">
                                <p class="text-center py-3"
                                   style="color: #6d1ed4; font-size: large; letter-spacing: 1px;"><b> sign-up</b></p>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Financial Institution">
                                    </div>
                                    <div class="form-group">
                                        <select
                                            style=" border: none; border-radius: 0; border-bottom: 1px solid #6d1ed4;"
                                            class="form-control">
                                            <option>&nbsp;Country</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Box to Leave a Message">
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
    </div>
</div>
</div>
@include('.includes.footer_new')
@include('.includes.defiuniverse_footer')
</body>
