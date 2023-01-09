<?php
include_once('header.php');
?>


    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><em>User Registration</em></h2>
              <span></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
            <body>
    <form action="#" enctype="multipart/form-data" method="post">
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Signup Here</h2>
          </div>
          <div class="col-md-12">
    
            <form action="" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="name">
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Mobile <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="c_lname" name="mobile">
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_fname" name="unm">
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_lname" name="pass">
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Male" >Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Female">Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Lang <span class="text-danger">*</span></label>
                    <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="Hindi" >Hindi
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="English" >English
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="Gujarati" >Gujarati
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
				  
				  <div class="col-md-6">
					<label for="Email" class="text-black">Select Country <span class="text-danger">*</span></label>
					<select class="form-control" id="c_fname" name="cid">
						<option>Select Country</option>
						<?php 
						foreach($country as $c)
						{
						?>
							<option value="<?php echo $c->cid?>">
								<?php echo $c->country ?>
							</option>
						<?php
						}
						?>
					</select>
				  </div>
				  <div class="col-md-6">
					<label for="password" class="text-black">Upload profile <span class="text-danger">*</span></label>
					<input type="file" class="form-control" id="c_lname" name="file">
				  </div>
					
                </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Signup">
                  </div>
				   <div class="col-lg-12">
                    <a href="login" name="submit" > Allreday Register then login Here</a>
                  </div> 
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    </form>
    
<?php
include_once('footer.php');
?>



            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
      <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-item">
            <h4>Car Rental Website</h4>
            <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Vivamus ut tellus mi</a></li>
              <li><a href="#">Nulla nec cursus elit</a></li>
              <li><a href="#">Vulputate sed nec</a></li>
              <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li>
            </ul>
          </div>
          <div class="col-md-4 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>

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
</html>