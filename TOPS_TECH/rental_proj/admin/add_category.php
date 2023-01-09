<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD CATEGORY</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Category
                        </div>
                        <div class="panel-body">
						<div class="form-group">
								<label>Category ID</label>
								<input class="form-control" type="text" name="cate_id"/>
								<p class="help-block">Help text here.</p>
							</div>
							 <div class="form-group">
								<label>Category</label>
								<input class="form-control" type="text" name="cate_name"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Category Image</label>
								<input class="form-control" type="file" name="cate_img"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Created Date/Time</label>
								<input class="form-control" type="datetime" name="created_dt"/>
							</div><div class="form-group">
								<label>Updated Date/Time</label>
								<input class="form-control" type="datetime" name="updated_dt"/>
							</div>
         
								 <div class="form-group">
									
								 <input type="submit" class="btn btn-primary" name="submit" Value="Add"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 