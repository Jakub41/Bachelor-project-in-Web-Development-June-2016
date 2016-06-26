<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="A Template by Vision Studio Software"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->
<link rel="shortcut icon" href="<?php echo URL; ?>frontend/assets/ico/favicon.png">
<title>Food Service</title>
<!-- Bootstrap core CSS -->
<link href="<?php echo URL; ?>frontend/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- add theme styles for this template -->
<link id="pagestyle" rel="stylesheet" type="text/css" href="<?php echo URL; ?>frontend/assets/css/skin-3.css">

<!-- Custom styles for this template -->`
<link href="<?php echo URL; ?>frontend/assets/css/style.css" rel="stylesheet">

<!-- css3 animation effect for this template -->
<link href="<?php echo URL; ?>frontend/assets/css/animate.min.css" rel="stylesheet">

<!-- styles needed by carousel slider -->
<link href="<?php echo URL; ?>frontend/assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo URL; ?>frontend/assets/css/owl.theme.css" rel="stylesheet">

<!-- styles needed by checkRadio -->
<link href="<?php echo URL; ?>frontend/assets/css/ion.checkRadio.css" rel="stylesheet">
<link href="<?php echo URL; ?>frontend/assets/css/ion.checkRadio.cloudy.css" rel="stylesheet">

<!-- styles needed by mCustomScrollbar -->
<link href="<?php echo URL; ?>frontend/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">

<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- include pace script for automatic web page progress bar  -->
<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
</style>

    </head>

<body>

<!-- Fixed navbar start -->
<div class="navbar navbar-custm navbar-fixed-top megamenu" role="navigation">
  <div class="navbar-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
          <div class="pull-left ">
            <ul class="userMenu ">
              <li> <a href="#"> <span class="hidden-xs">HELP</span><i class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a> </li>
              <li class="phone-number"> <a href="#"> <span> <i class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs" style="margin-left:5px"> 01914090747 </span> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
          <div class="pull-right">
            <ul class="userMenu">
              
              <?php 
              if (@$_SESSION['isThatOK'] == 'OK') {
                $user = $this->model->getUserByEmail(@$_SESSION['email']);
                $user_first_name = @$user->first_name;
                $user_last_name = @$user->last_name;

                $amount_of_cart = $this->model->getAmountOfCart(@$_SESSION['email']);
                $shopping_cart = $this->model->getCartByUser(@$_SESSION['email']);

                echo '<li><a href="#">Hi '.@$user_first_name.' '.@$user_last_name.'</a></li>';
                echo '<li><a href="account-1.html"><span class="hidden-xs"> My Account</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a></li>';
                echo '<li><a href="'.URL.'frontend/Logout">Logout</a></li>';
              } 
              else{               

                echo '
                  <li><a href="'.URL.'frontend/login"  data-toggle="modal" data-target="#ModalLogin" class="gotoserver"> <span class="hidden-xs">Sign In</span> <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>

                  <li><a href="'.URL.'signup/SignupUser"  data-toggle="modal" data-target="#ModalLogin" class="gotoserver"> <span class="hidden-xs">Register</span> <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>
                  ';
              }
              ?>

              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.navbar-top-->
  
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"> <i class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Cart </span> </button>

      <a class="navbar-brand " href="<?php echo URL; ?>"> <img src="<?php echo URL;?>img/logo.png" alt="ShopEco"> </a> 
      
      <!-- this part for mobile -->
      <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
        <div class="input-group">
          <button class="btn btn-nobg getFullSearch" type="button"> <i class="fa fa-search"> </i> </button>
        </div>
        <!-- /input-group --> 
        
      </div>
    </div>
    
    <!-- this part is duplicate from cartMenu  keep it for mobile -->
    <div class="navbar-cart  collapse">
      <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
        <div class="w100 miniCartTable scroll-pane">
          <table  >
            <tbody>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="<?php echo URL;?>img/product/3.jpg" alt="img"> </a> </div></td>
                <td style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> ShopEco T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td  style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="<?php echo URL;?>img/product/2.jpg" alt="img"> </a> </div></td>
                <td  style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> ShopEco T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="<?php echo URL;?>img/product/5.jpg" alt="img"> </a> </div></td>
                <td  style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> ShopEco T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="<?php echo URL;?>img/product/3.jpg" alt="img"> </a> </div></td>
                <td  style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> ShopEco T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="<?php echo URL;?>img/product/3.jpg" alt="img"> </a> </div></td>
                <td  style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> ShopEco T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="<?php echo URL;?>img/product/4.jpg" alt="img"> </a> </div></td>
                <td  style="40%"><div class="miniCartDescription">
                    <h4> <a href="product-details.html"> ShopEco T shirt Black </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> $8.80 </span> </div>
                  </div></td>
                <td   style="10%" class="miniCartQuantity"><a > X 1 </a></td>
                <td  style="15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                <td  style="5%" class="delete"><a > x </a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--/.miniCartTable-->
        
        <div class="miniCartFooter  miniCartFooterInMobile text-right">
          <h3 class="text-right subtotal"> Subtotal: $100 </h3>
          <a href="<?php echo URL.'frontend/my_cart'; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> <a class="btn btn-sm btn-primary"> CHECKOUT </a> </div>
        <!--/.miniCartFooter--> 
        
      </div>
      <!--/.cartMenu--> 
    </div>
    <!--/.navbar-cart-->
    
    
      
      <!--- this part will be hidden for mobile version -->
      <div class="nav navbar-nav navbar-right hidden-xs">
        <div class="dropdown  cartMenu "> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart <?php /* if (@$_SESSION['isThatOK'] == 'OK') {
            echo "($100)";
        }else
          echo "($00)"; */?> </span> <b class="caret"> </b> </a>
          <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
            <div class="w100 miniCartTable scroll-pane">
              <table>
                <tbody>
                  <?php 
                    if (@$_SESSION['isThatOK'] == 'OK') {
                      if (@$amount_of_cart == 0) {
                         echo '<tr><td style="width:20%" class="miniCartProductThumb"></td><td><strong>Your Cart is empty.</strong> But it doesnt have to be.</td> </tr>';
                       }
                       else{ 
                        foreach ($shopping_cart as $cart) {     
                        $recipe = $this->model->getRecipeByPK($cart->recipe_ID);            
                  ?>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="product-details.html"> <img src="<?php echo URL.'public/uploads/'.$recipe->recipe_image;?>" alt="img" width="10%" height="10%"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="#"> <?php echo $recipe->recipe_name; ?> </a> </h4>
                        <!-- <span class="size"> 12 x 1.5 L </span> -->
                        <div class="price"> <span> $<?php echo $recipe->recipe_price; ?> </span> </div>
                      </div></td>
                    <td  style="width:10%" class="miniCartQuantity"><a > X 1 </a></td>
                    <td  style="width:15%" class="miniCartSubtotal"><span> $<?php echo $recipe->recipe_price; ?> </span></td>
                    <td  style="width:5%" class="delete"><a href="<?php echo URL.'frontend/deletecart/'.$recipe->recipe_ID;?>" > x </a></td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
            </div>
            <!--/.miniCartTable-->
              
            <div class="miniCartFooter text-right">
              <a href="<?php echo URL.'frontend/my_cart'; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a> 
              <a href="<?php echo URL.'frontend/checkout_1'; ?>" class="btn btn-sm btn-primary"> CHECKOUT </a> 
            </div>
            <!--/.miniCartFooter-->

                  <?php
                        }else{ 
                          echo '<tr><td style="width:20%" class="miniCartProductThumb"></td><td><strong>Your Cart is empty.</strong> But it doesnt have to be.</td></tr>';
                  ?>
                
            </div>
            <!--/.miniCartTable-->
              
            <div class="miniCartFooter text-right">
              <a href="<?php echo URL.'frontend/category'; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> SHOP NOW </a>
            </div>
            <!--/.miniCartFooter-->
                  <?php } ?>  
                              
                 
            
          </div>
          <!--/.dropdown-menu--> 
        </div>
        <!--/.cartMenu-->
        
        <div class="search-box">
          <div class="input-group">
            <button class="btn btn-nobg getFullSearch" type="button"> <i class="fa fa-search"> </i> </button>
          </div>
          <!-- /input-group --> 
          
        </div>
        <!--/.search-box --> 
      </div>
      <!--/.navbar-nav hidden-xs--> 

      <div class="navbar-collapse collapse">
	  
      <ul class="nav navbar-nav navbar-right">
        <li class="active"> <a href="<?php echo URL; ?>"> Home </a> </li>
        <li class="dropdown">
    <a  href="<?php echo URL; ?>frontend/category" data-toggle="dropdown" class="dropdown-toggle lowerhide">Categories
    <span class="caret"></span></a>
   
    <ul class="dropdown-menu dropdown-menu-left">
      <?php foreach($getmenu["catagoryname"] as $key=>$value):?>
      <li class="dropdown-submenu">
	  <a class="test" tabindex="-1" href="#" class="lowerhide">
	  <?php echo $value; ?><?php if(count($getmenu["subcatagory"][$key])): ?><span class="caret"></span><?php endif;?>
	  </a>
	  <?php if(count($getmenu["subcatagory"][$key])): ?>
       <ul class="dropdown-menu levelsecound">
	   <?php foreach($getmenu["subcatagory"][$key] as $row):?>
	    <li class="dropdown-submenu">
          <a class="test2" href="<?php echo URL; ?>frontend/category/<?php echo $row->sub_category_ID; ?>">
		  <?php echo $row->sub_category_name;?></a>
		   
	     </li>
        
		<?php endforeach; ?>
		</ul>
		<?php endif;?>
      </li>
	  <?php endforeach; ?>
    </ul>
		
		
		
		</li>
        <li><a href="<?php echo URL; ?>frontend/about_us">About</a></li>
        <li><a href="<?php echo URL; ?>frontend/terms_conditions">Terms & Conditions</a></li>
		<li><a href="<?php echo URL; ?>frontend/blog">Blog</a></li>
        
          </ul>
    </div>
    <!--/.nav-collapse --> 
    </div>
	
  <!--/.container -->
  
  <div class="search-full text-right"> <a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>
    <div class="searchInputBox pull-right">
      <input type="search"  data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search" class="search-input">
      <button class="btn-nobg search-btn" type="submit"> <i class="fa fa-search"> </i> </button>
    </div>
  </div>
  <!--/.search-full--> 
  
</div>
<!-- /.Fixed navbar  -->