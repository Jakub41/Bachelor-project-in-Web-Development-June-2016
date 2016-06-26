
<footer>
  <div class="footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
          <h3> Food Service </h3>
          <ul>
            <li> <a href="<?php echo URL; ?>"> Home </a> </li>
            <li> <a href="<?php echo URL.'frontend/category'; ?>"> Category </a> </li>
            <li><a href="<?php echo URL.'dashboard' ?>">ADMIN LOGIN</a></li>
          </ul>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
          <h3> Information </h3>
          <ul>
            <li> <a href="<?php echo URL.'frontend/about_us'; ?>"> About us </a> </li>
            <li> <a href="<?php echo URL.'frontend/contact_us'; ?>"> Contact us </a> </li>
            <li> <a href="<?php echo URL.'frontend/terms_conditions'; ?>"> Terms &amp; Conditions </a> </li>
          </ul>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
          <h3> My Account </h3>
          <ul>
            <?php
              if (@$_SESSION['isThatOK'] == 'OK') { ?>
                <li> <a href="<?php echo URL.'frontend/my_account'; ?>"> Edit Settings </a> </li>
              <li> <a href="<?php echo URL.'frontend/my_address'; ?>"> Update Address </a> </li>
              <li> <a href="<?php echo URL.'frontend/my_orders'; ?>"> Order List </a> </li>
              <li> <a href="<?php echo URL.'frontend/my_wishlist'; ?>"> Wish List </a> </li>
            <?php } else{ ?>
            <li> <a href="<?php echo URL; ?>frontend/login"> Login </a> </li>
            <?php } ?>

          </ul>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12">
          <h3> Stay in touch </h3>
          <ul>
            <li>
              <div class="input-append newsLatterBox text-center">
                <form method="post" action="<?php echo URL.'dashboard/addnewsletter'?>">

				<div class="input-group">

              <input type="email" name="email" id="newsletter-email" placeholder="Email" class="form-control input-lg" required>
              <span class="input-group-btn">
                <button class="btn btn-default btn-lg" type="submit"><i class="fa fa-envelope"></i></button>
              </span>
			  </div>
			  </form>

			</div>
            </li>
          </ul>
          <ul class="social">
            <li> <a href="http://facebook.com/"> <i class="fa fa-facebook"> &nbsp; </i> </a> </li>
            <li> <a href="http://twitter.com/"> <i class="fa fa-twitter"> &nbsp; </i> </a> </li>
            <li> <a href="https://plus.google.com/"> <i class="fa fa-google-plus"> &nbsp; </i> </a> </li>
            <li> <a href="http://youtube.com/"> <i class="fa fa-youtube"> &nbsp; </i> </a> </li>
          </ul>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->

</div>
  <!--/.footer-->

  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left"> &copy; Ezboxrecipes 2016. All right reserved. </p>
      <div class="pull-right paymentMethodImg">
        <img height="30" class="pull-right" src="<?php echo URL; ?>img/site/payment/master_card.png" alt="img" >
        <img height="30" class="pull-right" src="<?php echo URL; ?>img/site/payment/paypal.png" alt="img" >
        <img height="30" class="pull-right" src="<?php echo URL; ?>img/site/payment/american_express_card.png" alt="img" >
        <img  height="30" class="pull-right" src="<?php echo URL; ?>img/site/payment/discover_network_card.png" alt="img" >
        <img  height="30" class="pull-right" src="<?php echo URL; ?>img/site/payment/google_wallet.png" alt="img" >
      </div>
    </div>
  </div>
  <!--/.footer-bottom-->
</footer>



<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="<?php echo URL; ?>frontend/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- include jqueryCycle plugin -->
<script src="<?php echo URL; ?>frontend/assets/js/jquery.cycle2.min.js"></script>

<!-- include easing plugin -->
<script src="<?php echo URL; ?>frontend/assets/js/jquery.easing.1.3.js"></script>

<!-- include  parallax plugin -->
<script type="text/javascript"  src="<?php echo URL; ?>frontend/assets/js/jquery.parallax-1.1.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript"  src="<?php echo URL; ?>frontend/assets/js/helper-plugins/jquery.mousewheel.min.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="<?php echo URL; ?>frontend/assets/js/jquery.mCustomScrollbar.js"></script>

<!-- include checkRadio plugin //Custom check & Radio  -->
<script type="text/javascript" src="<?php echo URL; ?>frontend/assets/js/ion-checkRadio/ion.checkRadio.min.js"></script>

<!-- include grid.js // for equal Div height  -->
<script src="<?php echo URL; ?>frontend/assets/js/grids.js"></script>

<!-- include carousel slider plugin  -->
<script src="<?php echo URL; ?>frontend/assets/js/owl.carousel.min.js"></script>

<!-- jQuery minimalect // custom select   -->
<script src="<?php echo URL; ?>frontend/assets/js/jquery.minimalect.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="<?php echo URL; ?>frontend/assets/js/bootstrap.touchspin.js"></script>

<!-- include custom script for only homepage  -->
<script src="<?php echo URL; ?>frontend/assets/js/home.js"></script>
<!-- include custom script for site  -->
<script src="<?php echo URL; ?>frontend/assets/js/script.js"></script>
<script src="<?php echo URL; ?>frontend/assets/rating/js/star-rating.js"></script>
<script>
$(document).ready(function(){

if($("#totalusercomment").length)
{
   for(var f=1;f<=$("#totalusercomment").val();f++)
   {
   //alert(f)
    if($("#hid_"+f+"").length)
    {
	
	
 $("#ratting_"+f+"").append($("#hid_"+f+"").html());

    }

  }
}
/*for(var f=0;f<=$("#totalusercomment").val();f++)
{
 if($("#hid_"+f+"").length)
 {
 $("#ratting_"+f+"").html('<input  value="'$("#hid_"+f+"").val()'" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg" readonly="readonly">');
 }

}*/
$('.levelsecound').hide();

  $('.dropdown-submenu a.test').on("click", function(e){

$('.levelsecound').hide()
//$('.levelsecound2').hide()
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
  /*
  $('.dropdown-submenu a.test2').on("click", function(e){

$('.levelsecound2').hide()
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });*/
 $(".lowerhide").hover(function(){$('.levelsecound').hide();});

});
$(".gotoserver").click(function(){document.location=$(this).attr('href')})
</script>
<script>
$(window).scroll(function() {



    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".navbar").addClass("navbarnew");
    }
	else{
		$(".navbar").removeClass("navbarnew");
	}
});





jQuery(document).ready(function($){
  // Get current path and find target link
  //var path2 = "http://jakublemiszewski.com/devezboxrecipes/frontend/"+window.location.pathname.split("/");

  var path = "http://jakublemiszewski.com"+window.location.pathname;

url = path.slice(0, path.lastIndexOf('/'));


   if(url=='http://jakublemiszewski.com/devezboxrecipes/frontend/subcategory' || url=='http://jakublemiszewski.com/devezboxrecipes/frontend/category')
   {
	  $('.navbar-nav li.dropdown').addClass('active');
   }

  var target = $('.navbar-nav li a[href="'+path+'"]');
 // alert(target);
  // Add active class to target link
  target.addClass('active');
  $("#entercomment").click(function()
  {
  $("#message").hide();
  $("#message").html("");
  
  //alert($("#comment").val().trim());
  $("#commentform").show();
  })
  $("#addcomment").click(function(event){
   event.preventDefault();
   if($("#comment").val().trim()!=="")
   {
   $("#commentform").submit()
   }else
   {
   $("#message").html("Enter Your Comment!");
   $("#message").show();
   }
  })
 
});


// $('.navbar-nav li').click(function(e) {
	// $('.navbar-nav li.active').removeClass('active');
	// var $this = $(this);
    // if (!$this.hasClass('active')) {
        // $this.addClass('active');
    // }
    //e.preventDefault();
    //e.preventDefault(); //prevent the link from being followed
   // $('.navbar-nav li').removeClass('active');
    //$(this).addClass('active');
// });


</script>


</body>
</html>
