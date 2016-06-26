<div class="container main-container headerOffset">
  <div class="row innerPage">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <h1 class=" text-left border-title"> Blogs </h1>

          <div class="w100 clearfix">
            <?php 

			foreach($blog as $row): ?>
			<h3> <?php echo $row->post_title;?> </h3>
			                                  <?php
												if(!empty($row->post_image)):
												?>
<img src="<?php echo URL .'public/uploads/blog/' .$row->post_image; ?>" height="200px" width="200px" class="img-rounded"/>                                                <?php
											    endif;
											   ?>
            <p><?php echo $row->post_content;?>&nbsp;<a class="btn btn-info" href="<?php echo URL.'frontend/bloginfo/'.$row->post_ID.''; ?>">Read More..</a></p>
            
			<hr>
            <?php endforeach;?>
          </div>
        </div>
      </div>
      <!--/row end--> 
      
    </div>
  </div>
  <!--/row-->
  
  <div style="clear:both"> </div>
</div>

<!-- /wrapper -->

<div class="gap"> </div>
