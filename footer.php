<!-- Footer Starts Here -->
<footer>
  <div class="container">
    <div class="row" style="margin-left: 50px">
      <div class="col-md-3 footer-item">
        <h4>Useful Pages</h4>
        <ul class="menu-list">
          <li><a href="home.html">Home</a></li>
          <li><a href="cars.html">Search</a></li>
          <li><a href="cars.html">Sell</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="faq.html">FAQ</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-item" style="margin-left: 10px">
        <h4>Car Dealer Website</h4>
        <p>Join the community and be updated on the best deals</p>
        <ul class="social-icons">
          <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-item last-item" style="margin-left: 100px">
        <h4>Contact Us</h4>
        <div class="contact-form">
          <form id="contact footer-contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordions.js"></script>

<script language = "text/Javascript">
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t){                   //declaring the array outside of the
  if(! cleared[t.id]){                      // function makes it static and global
      cleared[t.id] = 1;  // you could use true and false, but that's more typing
      t.value='';         // with more chance of typos
      t.style.color='#fff';
      }
  }
</script>

</body>
