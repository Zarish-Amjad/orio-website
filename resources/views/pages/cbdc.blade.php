<body>
@include('.includes.cbdc_header')

<div class="container">
  <div class="row">
    <div class="col-lg-8 mt-4 col_p">
      <ul class="mt-2 mb-2">
        <li>Secure network</li>
        <li>Eco-friendly network: no miners needed, the network operates on all participating nodes (the user that owns
          an <b>ORIO </b> wallet) </li>
        <li>Almost Free to deploy</li>
        <li>Built-in Compliance for all user</li>
        <li>Advanced and simple identity authentication for all user</li>
        <li>Stable currency access globally for everyone</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-6 mt-2 mb-4 text-center" style="margin: 0 auto;">
      <button type="button" class="btn btn-primary btn-lg btn-block cntct_us_btn">CONTACT US</button>
      <br>
      <h6 class="create">Let's Create it Together</h6>
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
            <p class="text-center py-3 sign-up"> <b> sign-up</b></p>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Financial Institution">
              </div>
              <div class="form-group">
                <select class="form-select" aria-label="Default select example">
                <option selected>Country</option>
                <option value="1">Pak</option>
                <option value="2">USA</option>
                <option value="3">China</option>
                </select>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Email">
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Phone Number">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
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
<!--</footer>-->
@include('.includes.footer_new')
@include(".includes.cbdc_footer")

</body>
