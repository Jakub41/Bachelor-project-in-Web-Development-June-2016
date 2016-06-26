<div class="container main-container headerOffset">
  <div class="row innerPage">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <h1 class=" text-left border-title"> Blogs </h1>

          <div class="w100 clearfix">
            <h3> <?php echo $blog->post_title;?> </h3>
			                                  <?php
												if(!empty($blog->post_image)):
												?>
<img src="<?php echo URL .'public/uploads/blog/' .$blog->post_image; ?>" height="200px" width="200px" class="img-rounded"/>                                                <?php
											    endif;
											   ?>
            <p><?php echo $blog->post_content;?></p>
            
			<hr>
            
          </div>
		  <h3>comments</h3>
		  <?php
		  foreach($commentsbyusers as $userrow):
		  ?>
		  
		  <h3>
		  <?php 
		  echo $userrow->name;
		  ?>:
		  </h3>
		  <pre><?php 
		  echo $userrow->comment;?>
		  </pre>
		  <?php
		  endforeach;
		  ?>
		  <?php
		  foreach($commentsbyadmin as $adminrow):
		  ?>
		  
		  <h3>
		  <?php 
		  echo $adminrow->name;
		  ?>:
		  </h3>
		  <pre><?php 
		  echo $adminrow->comment;?>
		  </pre>
		  <?php
		  endforeach;
		  ?>
		  		<?php 
		if($islogin=="on")
		{
		?>
		<a href="javascript:void(0);" class="btn btn-info" id="entercomment">Enter Comments</a>
		<?php
		}elseif($islogin=="off")
		{
		?>
		<a href="<?php echo URL .'frontend/login'?>" class="btn-link">For Enter Comments Log In</a>
		 <?php
		 }
		 ?>
		  <?php
		  if($islogin=="on"):
		  ?>
		  <form class="form-horizontal" role="form" method="post" style="display:none;" id="commentform" action="<?php echo URL?>frontend/bloginfo/<?php echo $blogid;?>">
		  
		 <div class="form-group form-group-lg">
		 <label class="col-sm-2 control-label" for="lg">Enter Your Comment</label>
		 <div class="col-sm-10">		 
		 <span id="message" class="alert alert-danger fade in"></span>
		 </div>
		 <div class="col-sm-10">

		 <input type="text" class="form-control" name="comment" id="comment" required/>
		 </div>
		 <div class="col-sm-2 pull-right">
		 <button type="submit" class="btn btn-info" id="addcomment">Add Comment</button>
		 </div>
		 </div>
		 </form>
		 <?php
		 endif;
		 ?>

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
