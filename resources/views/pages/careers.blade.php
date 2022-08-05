<body>
<?php //include('Layouts/Header/careers_header.php'); ?>
@include('.includes.careers_header')
<div class="container">
    <div class="mt-1">
        <div class="row">
            <div class="col-lg-8 col-md-6 mb-4 mt-4" style="margin: 0 auto;">
                <div class="card card_h">
                    <div class="card-body px-4 p-0 text-center">
                        <p class="card_p">We're always eager to
                            meet fresh talents and create smarter
                            things with them. Think you have what it takes? Join the team and see where you stack
                            up! </p>
                    </div>
                </div>
                <h2 class="mt-4" style="color: #6d1ed4; font-family:'Montserrat';">Open Positions </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-6 mt-2 mb-4" style="margin: 0 auto;">
                <div class="card card_h">
                    <div class="card-body px-4 p-0 text-center">
                        <p class="card_p"> Currently, there are
                            no job openings, but we are always
                            looking for the best talents to join the team. </p>
                    </div>
                </div>
                <p class="mt-4 cv_drop">
                    <b>Drop your CV to ( <span style="color: #6d1ed4;">careers@orio.io</span> ) </b>
                </p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 signimg">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 py-4 px-5 sign">
                        <p class="text-center py-3 sign-up"><b> sign-up</b>
                        </p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp"
                                       placeholder="Financial Institution">
                            </div>

                            <div class="form-group">
                                <select class="form-control country">
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
                        <button type="button" class="btn btn-dark mt-2 mb-2 submit">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('.includes.footer_new')
<?php //include('Layouts/Footer/careers_footer.php'); ?>
</body>
