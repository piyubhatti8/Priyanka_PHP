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
                <img class="rounded-circle mt-5"src="images/upload/customer/<?php echo $fetch->file?>" width="200px" height="200px">
                <div class="font-weight-bold">Priyanka Solanki</div><div class="text-black-50">abc@gmail.com</div>
               </div>
         
            </div>
            <div class="col-md-3">
                <div class="mt-5 h4">Edit Profile</div>
                
                             <div class="p-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->uid?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->name?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->unm?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->mobile?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->gen?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Language</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->lang?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->country?></p>
                                            </div>
                                        </div>
                                        
                            </div>
                            <div class="col-md-6">
                                <div class="btn btn-primary"><a style="text-decoration: none;" href="edituser?btnedit=<?php echo $fetch->uid?>">Edit Profile</a></div>                                    
                            </div>
                
                </div>
                

      
</div>
            <div class="row">

                
            </div>
   </div>
   </form>  
</body> 
</html>

    
    <?php
    include_once('footer.php');
    ?>