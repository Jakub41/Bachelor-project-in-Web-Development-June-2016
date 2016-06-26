<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="A Template by Vision Studio Software"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->
<link rel="shortcut icon" href="<?php echo URL; ?>frontend/assets/ico/frugt_box1.png">
<title>EZBOXRECIPES</title>
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
<link rel="stylesheet" href="<?php echo URL; ?>frontend/assets/rating/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
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
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">

          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>




          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <div class="logo" style="float: left;">
			<a href="#"><img src="<?php echo URL .'public/uploads/frugt_box2.png'; ?>"  alt="Recipe Image" class="img-responsive" height="45px" width="100px" float="left"/>

            </a>

	  </div>
              <ul class="nav navbar-nav navbar-right">
                  <li ><a href="<?php echo URL; ?>"> Home </a></li>
                  <li class="dropdown"> <a href="javascript:void(0);"   data-toggle="dropdown" class="dropdown-toggle lowerhide">Categories<span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu dropdown-menu-left">
					  <?php foreach($getmenu["catagoryname"] as $key=>$value):?>
					  <li class="dropdown-submenu">
					  <a  href="<?php echo URL; ?>frontend/subcategory/<?php echo $key;?>" class="lowerhide">
					  <?php echo $value; ?></a>

					  </li>
					  <?php endforeach; ?>
				  </ul>

				  </li>
                  <li><a id="aboutmenu" href="<?php echo URL; ?>frontend/about_us">About</a></li>
                  <li><a id="contactmenu"  href="<?php echo URL; ?>frontend/terms_conditions">Terms & Conditions</a>
				  </li>
                  <li><a id="blogmenu"  href="<?php echo URL; ?>frontend/blog">Blog</a></li>
                  <li>

				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart <?php /* if (@$_SESSION['isThatOK'] == 'OK') {
            echo "($100)";
        }else
          echo "($00)"; */?> </span> <b class="caret"> </b> </a>
		  
		  <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 " style="min-width:350px;">
            <table >
                <tbody>
                  <?php
                    if (@$_SESSION['isThatOK'] == 'OK') {
					 $user = $this->model->getUserByEmail(@$_SESSION['email']);
                $user_first_name = @$user->first_name;
                $user_last_name = @$user->last_name;

                //$amount_of_cart = $this->model->getAmountOfCart(@$_SESSION['email']);
				$amount_of_cart =isset($_SESSION["recipeid"])?count($_SESSION["recipeid"]):0;
				$shopping_cart =array();
				if(isset($_SESSION["recipeid"]))
				$shopping_cart = $_SESSION["recipeid"];
                //$shopping_cart = $this->model->getCartByUser(@$_SESSION['email']);
				

                      if (@$amount_of_cart == 0) {
                         echo '<tr><td style="width:20%" class="miniCartProductThumb"></td><td><strong>Your Cart is empty.</strong> But it doesnt have to be.</td> </tr>';
                       }
                       else{

                        //foreach ($shopping_cart as $cart) 
						foreach ($shopping_cart as $cartkey=>$cartvalue) 
						{
                        $recipe = $this->model->getRecipeByPK($cartvalue);
                  ?>
                  <tr >
                    <td >  <img src="<?php echo URL.'public/uploads/'.$recipe->recipe_image;?>" alt="img" width="55px" height="55px"> </td>
                    <td style="width:40%">
                        <h4> <a href="#"> <?php echo $recipe->recipe_name; ?> </a> </h4>

                        <!--<div class="price"> <span> $<?php //echo $recipe->recipe_price; ?> </span> </div>-->
                      </td>
                    <td  style="width:20%"><a > X 1 </a></td>
                    <td  style="width:15%"><span> $<?php echo $recipe->recipe_price; ?> </span></td>
                    <td  style="width:5%" class="delete"><a href="<?php echo URL.'frontend/deletecart/'.$recipe->recipe_ID;?>" > <i class="glyphicon glyphicon-trash fa-2x"></i> </a></td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>

            <!--/.miniCartTable-->
            <?php
		if(@$amount_of_cart!= 0)
	       {
			?>
            <div class="miniCartFooter text-right">
              <a href="<?php echo URL.'frontend/my_cart'; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> VIEW CART </a>
              <a href="<?php echo URL.'frontend/checkout_1'; ?>" class="btn btn-sm btn-primary"> CHECKOUT </a>
            </div>
			<?php
			}
			?>
            <!--/.miniCartFooter-->

                  <?php
                        }else{
                          echo '<tr><td style="width:20%" class="miniCartProductThumb"></td><td><strong>Your Cart is empty.</strong> But it doesnt have to be.</td></tr>';
                  ?>
                </tbody>
              </table>

            <!--/.miniCartTable-->


                  <?php } ?>



          </div>
                  </li>
                  <?php
              if (@$_SESSION['isThatOK'] == 'OK') {
                $user = $this->model->getUserByEmail(@$_SESSION['email']);
                $user_first_name = @$user->first_name;
                $user_last_name = @$user->last_name;

                $amount_of_cart = $this->model->getAmountOfCart(@$_SESSION['email']);
                $shopping_cart = $this->model->getCartByUser(@$_SESSION['email']);

                echo '<li><a href="javascript:void(0);">Hi '.@$user_first_name.' '.@$user_last_name.'</a></li>';
                //echo '<li><a href="account-1.html"><span class="hidden-xs"> My Account</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a></li>';
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
  </nav>
