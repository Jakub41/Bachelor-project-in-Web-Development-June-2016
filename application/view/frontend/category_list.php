<div class="container main-container headerOffset"> 
  
  <!-- Main component call to action -->
  
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="<?php echo URL; ?>">Home</a> </li>
        <li class="active">CATEGORY </li>
      </ul>
    </div>
  </div>
  <!-- /.row  -->
  
  <div class="row"> 
    
    <!--left column-->
    
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="panel-group" id="accordionNo"> 
        <!--Category-->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse"  href="#collapseCategory" class="collapseWill"> <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Category </a> </h4>
          </div>
          <div id="collapseCategory" class="panel-collapse collapse in">
            <div class="panel-body">
              <ul class="nav nav-pills nav-stacked tree">
              <?php foreach ($all_category as $category) { ?>
                <li class="active dropdown-tree open-tree" > 
                  <a class="dropdown-tree-a" > 
                    <?php 
                      $amount_of_recipes = $this->model->getAmountOfRecipes($category->category_ID); 
                      if ($amount_of_recipes != 0) { ?>
                    <span class="badge pull-right">

                    <?php
                        echo $amount_of_recipes;
                      }
                    ?>
                    </span> 
                    <?php echo strtoupper($category->category_name); ?> 
                  </a>

                  <?php 
                    $amount_of_sub_category = $this->model->getAmountOfSubCategory($category->category_ID) ;
                    if ($amount_of_sub_category != 0) {
                      $sub_category = $this->model->getSubCategory($category->category_ID);
                  ?>
                  <ul class="category-level-2 dropdown-menu-tree">
                  <?php foreach ($sub_category as $sub_category) { ?>
                    <li><a href="<?php echo URL.'frontend/sub_category_wise_product_list/'.htmlspecialchars($sub_category->sub_category_ID, ENT_QUOTES, 'UTF-8'); ?>"><?php echo $sub_category->sub_category_name; ?></a></li>
                  <?php } ?>
                  </ul>
                  <?php } ?>
                </li>
              <?php } ?>                
              </ul>
            </div>
          </div>
        </div>
        <!--/Category menu end-->
      </div>
    </div>
    
