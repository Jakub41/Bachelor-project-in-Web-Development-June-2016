<div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="<?php echo URL; ?>">Home</a> </li>
        <li class="active">SUB CATEGORY </li>
      </ul>
    </div>
  </div>
  <!-- /.row  -->
  
  <div class="row"> 
    
    <!--left column-->
    
    <div class="col-lg-2 col-md-2 col-sm-12 leftmenu">
	
	
	<div class="list-group" id="categories_menu">		
<?php foreach($getmenu["subcatagory"][$category_id] as $key=>$value):
									?>
                                <a style="text-transform: capitalize;" class="list-group-item" href="javascript:void(0);"><?php echo ($value->sub_category_name);?></a>
                                      
                                    <?php
									endforeach;
									?>	
	<!--<a href="#" class="list-group-item" data-menu-id="1">Fitness and sport</a>			 	
	<a href="#" class="list-group-item" data-menu-id="2">Vegetarian</a>			 	
	<a href="#" class="list-group-item" data-menu-id="3">Gluten free</a>-->
	</div>
	
	
      <!--<div class="panel-group" id="accordionNo"> 
       
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapseCategory" class="collapseWill"> <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Sub Category </a> </h4>
          </div>
          <div id="collapseCategory" class="panel-collapse collapse in">
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked tree">
                              <li class="active dropdown-tree open-tree" > 
                  <a class="dropdown-tree-a" > 
                                        </span> 
                    <?php echo strtoupper($getmenu["catagoryname"][$category_id]);?> CATEGORY 
                  </a>

                                    <ul class="category-level-2 dropdown-menu-tree">
									<?php
									foreach($getmenu["subcatagory"][$category_id] as $key=>$value):
									?>
                                  <li><a href="javascript:void(0);"><?php echo strtoupper($value->sub_category_name);?></a></li>
                                      
                                    <?php
									endforeach;
									?>
									</ul>
                                  </li>
                                                            
              </ul>
            </div>
          </div>
        </div>
       
      </div>-->
    </div>
    
<!--right column-->
    <div class="col-lg-8 col-md-8 col-sm-12">
	<header class="headercategories">
			        <img src="<?php echo URL.'public/uploads/subcategoryimg/category.jpg'?>" class="imageheadercategories" style="width: 100%;">
			    </header>
	
      <div class="w100 productFilter clearfix b2">
        <p class="pull-left"> Showing Sub Category </p>
        </div>
          
		  
 <div class="row  categoryProduct xsResponse clearfix">
      
	  
 <?php $r=0;
  foreach($getmenu["subcatagory"][$category_id] as $key=>$value): ?>
				  <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
            <div class="product">
             
              <div class="image">  
<img src="<?php echo URL.'public/uploads/subcategoryimg/'.$value->imgname;?>" />
             </div>
              <br />
			  <h3 style="text-transform: capitalize;"><?php echo ($value->sub_category_name);?></h3>
			  <div><?php echo $value->description; ?></div>
									  
			  <br />
			
		
			  
			  
             <div class="action-control"> 
                <a href="<?php echo URL; ?>frontend/category/<?php echo $value->sub_category_ID; ?>"> 
                  <h1><button class="btn btn-info btnview">
			  <span class="glyphicon glyphicon-eye-open">
			  </span>   View					   		 </button></h1>
              </a> 
              </div> 
              
            </div>
          </div>
        <?php
		++$r;
		endforeach;
		?>             
	  
		  
 
				  
                               
        
      </div>
	  </div>
  </div>
  <!-- /.row  --> 
</div>
<!-- /main container -->

<div class="gap"> </div> 

