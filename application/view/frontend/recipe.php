<div class="container main-container headerOffset">
	<p class="alert-warning"> <?php echo isset($_SESSION['error'])?$_SESSION['error']:'';?></p>
	<div class="recipe">
		<h1 class="xlarge"><?php echo strtoupper($chooserecipe->recipe_name);?></h1>
        
        <br/>
		<div class="item col-sm-6 col-lg-6 col-md-6 col-xs-6">
			<a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
				<i class="glyphicon glyphicon-heart"></i>
			</a>
            <div class="image">  
               
			   <?php 
				if(!empty($chooserecipe->recipe_image)):
				?>
					<a href="#"><img src="<?php echo URL .'public/uploads/' .$chooserecipe->recipe_image; ?>"  alt="Recipe Image" class="img-responsive"/></a>                                                <?php
											    endif;
											   ?>
            </div>
		</div>
		<div class="item col-sm-6 col-lg-6 col-md-6 col-xs-6 recipe_right">
              <div class="description">
                <div class="grid-description">
                  <p><?php echo trim($chooserecipe->recipe_details);?></p>
                </div>

              </div>
              <div class="price"> <span>$<?php echo $chooserecipe->recipe_price;?></span> </div>
              <div class="action-control"> 
				<a class="btn btn-primary" href="<?php echo URL?>frontend/addToCart/<?php echo $chooserecipe->recipe_ID;?>"> 
                  <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> 
                </a> 
              </div>
        </div>
	</div>

	<div>
	<h1>Users Comments</h1>
	<?php
	   $userid=0;
	    $outinc=0;
		$divratting=0;
		  foreach($userrecipecomment as $userrow):
		  $outinc++;
		  ?>
		  
		  <?php
		  if($userid!=$userrow->user_id):
		  $userid=$userrow->user_id;
		  $divratting=$outinc;
		  ?>
		  <h2>
		  <?php 
		  echo $userrow->name;
		  ?>:
		  </h2>
		  <div id="ratting_<?php echo $outinc;?>">
		  </div>
		  <?php
		  endif;
		  ?>
		  <pre><?php 
		  echo $userrow->comment;?>
		  </pre>
		  <?php
		  if(!empty($userrow->rating)):
		  ?>
		  <div style="display:none;" id="hid_<?php echo $divratting;?>">

		  <input  value="<?php echo $userrow->rating;?>" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg" readonly="readonly">
		  </div>
		  <?php
		  endif;
		  ?>
		  
		  <?php
         endforeach;
		 
		  ?>
		  
		  <?php
		 $adminid=0;

		$divratting=0;
		  foreach($adminrecipecomment as $adminrow):
		  		  $outinc++;
		 ?>

		  <?php
		  if($adminid!=$adminrow->user_id):
		  $adminid=$adminrow->user_id;
		  $divratting=$outinc;
		  ?>
		  <h2>
		  <?php 
		  echo $adminrow->name;
		  ?>:
		  </h2>
		  <div id="ratting_<?php echo $outinc;?>">
		  </div>
		  <?php
		  endif;
		  ?>
		  <pre><?php 
		  echo $adminrow->comment;?>
		  </pre>
		  <?php
		  if(!empty($adminrow->rating)):
		  ?>
		  <div style="display:none;" id="hid_<?php echo $divratting;?>">

		  <input  value="<?php echo $adminrow->rating;?>" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg" readonly="readonly">
		  </div>
		  <?php
		  endif;
		  ?>
		  <?php
		  endforeach;
		  ?>
		  <input type="hidden" id="totalusercomment" value="<?php echo $outinc;?>">
		  	<?php 
		if($islogin=="on")
		{
		?>
		<a href="javascript:void(0);" class="btn btn-info" id="entercomment">Enter Comments</a>
		<?php
		}elseif($islogin=="off")
		{
		?>
		<a href="<?php echo URL?>frontend/login" class="btn-link">For Enter Comments Log In</a>
		 <?php
		 }
		 ?>
		 <?php
		 if($islogin=="on"):
		  ?>
		  <form class="form-horizontal" role="form" method="post" style="display:none;" id="commentform" action="<?php echo URL?>frontend/recipe/<?php echo $recipe_id;?>">
		  
		 <div class="form-group form-group-lg">
		 <label class="col-sm-2 control-label" for="lg">Enter Your Comment</label>
		 <div class="col-sm-10">		 
		 <span id="message" class="alert alert-danger fade in"></span>
		 </div>
		 <div class="col-sm-10">
		 <input type="text" class="form-control" name="comment" id="comment" required/>
		 </div>
		 <label class="col-sm-2 control-label" for="lg">Provide Your Rating</label>
		 <div class="col-sm-10">
		 <input  value="0" type="number" name="Rating" class="rating" min=0 max=5 step=0.1 data-size="lg">
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

<!-- /wrapper -->

