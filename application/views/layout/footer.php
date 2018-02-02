
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="">

          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md text-left">
            <p>&copy;  Made with <span class="icon-heart text-danger"></span>  by <a href="https://www.instagram.com/evelwijaya/?hl=id">EvelynWijaya</a></p>
          </div>
        </div>
      </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-4 bg-image" style="background-image: url(asset/images/bg_3.jpg);"></div>
              <div class="col-lg-8 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Register Account</h1>
                <form action="/user/reg_submit" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Name</label>
                      <input type="text" class="form-control" id="m_fname" name="nama">
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group" >
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email" name="email">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Password</label>
                      <input type="password" class="form-control" name="pass1">
                      <small id="passwordHelpInline" class="text-muted">
                        Must be 8-20 characters long.
                      </small>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Verikasi Password </label>
                      <input type="password" class="form-control"  name="pass2">
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register Now">
                    </div>
                  </div>

                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="/asset/js/jquery.min.js"></script>
    <script src="/asset/js/popper.min.js"></script>
    <script src="/asset/js/bootstrap.min.js"></script>
    <script src="/asset/js/jquery.easing.1.3.js"></script>
    <script src="/asset/js/jquery.waypoints.min.js"></script>
    <script src="/asset/js/owl.carousel.min.js"></script>
    <script src="/asset/js/jquery.magnific-popup.min.js"></script>

    <script src="/asset/js/bootstrap-datepicker.js"></script>
    <script src="/asset/js/jquery.timepicker.min.js"></script>

    <script src="/asset/js/jquery.animateNumber.min.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="/asset/js/google-map.js"></script>

    <script src="/asset/js/main.js"></script>


  </body>
</html>
