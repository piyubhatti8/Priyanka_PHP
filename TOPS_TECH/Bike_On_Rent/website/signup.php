<?php
include_once('header.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Signup</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <form action="#" enctype="multipart/form-data" method="post">
    <div class="site-section">
      <div class="container">
        <div class="row">
      
          <div class="col-md-12">
    
            <form action="" method="post" enctype="multipart/form-data">
            <div class="section-heading p-5">
              <h2><em>User Registration</em></h2>             
            </div>          
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


