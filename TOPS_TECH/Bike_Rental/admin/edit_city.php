<?php
include_once('header.php');
if (empty($_SESSION['admin_id'])) {
    include_once('index.php');
}
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">EDIT CITY</h4>
                
                            </div>

        </div>
        <form action="" enctype="multipart/form-data" name="" method="post">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                        Edit City
                        </div>
                        <div class="panel-body">
						
							<div class="form-group">
								<label>City Name</label>
								<input class="form-control" type="text" name="city" value=<?php echo $fetch->city ?> />
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
                            <label>Select State</label>
											<select class="form-control" id="" name="state_id">
                                            <option>Select State</option>
                
                                    <?php 
                                    foreach($state as $s)
                                    {
                                        if($s->state_id==$fetch->state_id){
                                    ?>
                                        <option value="<?php echo $s->state_id?>" selected>
                                            <?php echo $s->state ?>
                                        </option>

                                    <?php
                                    }
                                    else {
                                       ?>
                                       <option value="<?php echo $s->state_id?>">
                                            <?php echo $s->state ?>
                                        </option>
                                    <?php 
                                    }
                                    }
                                    ?>
								</select>
							</div>
         
								 <div class="form-group">
									
                                 <input type="submit" class="btn btn-primary" name="submit" Value="Edit"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
                                </from>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 