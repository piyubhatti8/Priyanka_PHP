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
<div class="container">
        <div class="row">   
            <div class="col-md-4">
               <div class="p-3 py-5 align-items-center text-center">
                <img class="rounded-circle mt-5" width="150px" src="Images/upload/customer/<?php echo $fetch->file ?>">
                <div class="font-weight-bold"><?php echo $fetch->name ?></div><div class="text-black-50"><?php echo $fetch->unm ?></div>
               </div>
         
            </div>
            <div class="col-md-3">
                <div class="mt-5 h4">Edit Profile</div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="lable">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $fetch->name ?>">
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="lable">Phone Number</label>
                        <input type="text" class="form-control" name="mobile" value="<?php echo $fetch->mobile ?>">
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="lable">User Name</label>
                        <input type="email" class="form-control" name="unm" value="<?php echo $fetch->unm ?>">
                    </div>
                    
                </div>
                
                <div class="row mt-2">
                    <?php if ($fetch->gen = "Female") {
                        ?>
                    <div class="col-md-12"><label class="lable">Gender</label>
                        <input type="radio" class="form-control-inline" name="gen" placeholder="" value="Male">Male
                        <input type="radio" class="form-control-inline" name="gen" placeholder="" value="Female" checked>Female
                    </div>
                    <?php
                    }
                    else{
                        ?>
                    <div class="col-md-12"><label class="lable">Gender</label>
                        <input type="radio" class="form-control-inline" name="gen" placeholder="" value="Male" checked>Male
                        <input type="radio" class="form-control-inline" name="gen" placeholder="" value="Female" >Female
                    </div>  
                    <?php } ?>
                                     
                </div>               
                
                </div>
            <div class="col-md-5 mt-5">
              <div class="row mt-2 p-5x">
              <?php
					$lang=$fetch->lang;
					$lang_arr=explode(",",$lang);
					?>
                      <label class="lable">Language</label>
                      <input type="checkbox" class="form-control-inline" name="lang[]" value="English"
                      <?php if (in_array("English", $lang_arr)) {
                          echo "checked";
                     }
                      ?>
                      >English
                      <input type="checkbox" class="form-control-inline" name="lang[]" value="Hindi"
                      <?php if (in_array("Hindi", $lang_arr)) {
                          echo "checked";
                     }
                      ?>
                      >Hindi
                      <input type="checkbox" class="form-control-inline" name="lang[]" value="Gujarati"
                      <?php if (in_array("Gujarati", $lang_arr)) {
                          echo "checked";
                     }
                      ?>
                      >Gujarati
            
                     
                </div>
                <div class="row mt-2 p-2">
                    <div class=" col-md-12">
                    <label  class="text-black">Select Country <span class="text-danger">*</span></label>
                        <select class="form-control" id="" name="cid">
                          <option>Select Country</option>
                          <?php 
                          foreach($country as $c)
                          {
                            if($c->cid==$fetch->cid){

                            
                          ?>
                            <option value="<?php echo $c->cid?>" selected>
                              <?php echo $c->country ?>
                            </option>
                          <?php
                            }
                            else {
                            ?>
                            <option value="<?php echo $c->cid?>">
                              <?php echo $c->country ?>
                            </option>
                            
                            <?php                              
                            }
                          }
                          ?>
                        </select>
                  </div>
                  <div class="row mt-2 p-2">
                    <div class=" col-md-12">
                    <label for="password" class="text-black">Upload profile <span class="text-danger">*</span></label>
					          <input type="file" class="form-control" id="c_lname" name="file">
                  </div>
                </div>
                
                

                
            
              </div>
             
      </div>
      
</div>
<div class="row mt-2">
                    <div class="col-md-12 text-center"><button type="button" class="btn btn-primary" name="Submit">Save Profile</div>
                </div>
   </div>
   </form>  
</body> 
</html>

    
    <?php
    include_once('footer.php');
    ?>