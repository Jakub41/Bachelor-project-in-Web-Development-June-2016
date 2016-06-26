<!--right column-->
<div class="container main-container headerOffset"> 
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="w100 clearfix category-top">
        <h2> RECIPIES LIST </h2>
        
      </div>
      <div class="w100 productFilter clearfix">
        <p class="pull-left"> Showing products </p>
        <div class="pull-right ">
          <div class="change-view pull-right"> <a href="#" title="Grid" class="grid-view"> <i class="fa fa-th-large"></i> </a> <a href="#" title="List" class="list-view "><i class="fa fa-th-list"></i></a> </div>
        </div>
      </div>
      <!--/.productFilter-->
      <div class="row  categoryProduct xsResponse clearfix">
        <?php foreach ($product_list as $product) { ?>
          <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
            <div class="product">
              <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist"  data-placement="left">
                <i class="glyphicon glyphicon-heart"></i>
              </a>
              <div>
                
                <div class="image">
                  <a href="#"><img src="<?php echo URL .'public/uploads/' .$product->recipe_image; ?>"  alt="Recipe Image" class="img-responsive"/></a> 
                </div>
				<br>
                <h3 style="text-transform: capitalize"><?php echo ($product->recipe_name); ?></h3>
              </div>
              <div class="price"> <span>$<?php echo $product->recipe_price; ?></span> </div>
			  <br>
              <div class="action-control"> 
      <a href="<?php echo URL .'frontend/recipe/'.$product->recipe_ID.''?>">  <h1><button class="btn btn-info btnview">
			  <span class="glyphicon glyphicon-eye-open">
			  </span>   View					   		 </button></h1> </a> 
              </div>
            </div>
          </div>
          <!--/.item--> 
        <?php } ?>

        
      </div>
      <!--/.categoryProduct || product content end-->
      
      <!-- <div class="w100 categoryFooter">
        <div class="pagination pull-left no-margin-top">
          <ul class="pagination no-margin-top">
            <li> <a href="#">«</a></li>
            <li class="active"><a href="#">1</a></li>
            <li> <a href="#">2</a></li>
            <li> <a href="#">3</a></li>
            <li> <a href="#">4</a></li>
            <li> <a href="#">5</a></li>
            <li> <a href="#">»</a></li>
          </ul>
        </div>
        <div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
          <p>Showing 1–450 of 12 results</p>
        </div>
      </div> -->
      <!--/.categoryFooter--> 
    </div>
    <!--/right column end--> 
  </div>
  <!-- /.row  --> 
</div>
<!-- /main container -->

<div class="gap"> </div>
</div>