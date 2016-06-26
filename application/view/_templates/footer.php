
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<!--<script src="<?php //echo URL; ?>js/jquery/jquery-2.0.3.min.js"></script>-->
	<!-- JQUERY UI-->
	<!--<script src="<?php //echo URL; ?>js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>-->
	<!-- BOOTSTRAP -->
	<!--<script src="<?php //echo URL; ?>bootstrap-dist/js/bootstrap.min.js"></script>-->
	
	<!--<script type="text/javascript" src="<?php //echo URL; ?>js/uniform/jquery.uniform.min.js"></script>-->
	
	<!--<script src="<?php //echo URL; ?>js/bootstrap-daterangepicker/moment.min.js"></script>-->
	
	<!--<script src="<?php //echo URL; ?>js/bootstrap-daterangepicker/daterangepicker.min.js"></script>-->
	<!-- SLIMSCROLL -->
	<!--<script type="text/javascript" src="<?php //echo URL; ?>js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="<?php //echo URL; ?>js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>-->
	<!-- COOKIE -->
	<!--<script type="text/javascript" src="<?php //echo URL; ?>js/jQuery-Cookie/jquery.cookie.min.js"></script>-->
	<!--<script type="text/javascript" src="<?php //echo URL; ?>js/jQuery-Cookie/jquery.cookie.min.js"></script>-->
	<!-- CUSTOM SCRIPT -->
<!--	<script src="<?php //echo URL; ?>js/jquery/bootbox.min.js"></script>
	<script>
	$(".deleteit").click(function(e)
	{
	var url= $(this).attr("href")
	e.preventDefault();
    bootbox.confirm("Are you sure to delete this", function(result) {
	if(result)
	{

	     document.location.href = url;
	}
	});
	})
	</script>-->
	<script src="<?php echo URL; ?>js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="<?php echo URL; ?>js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="<?php echo URL; ?>bootstrap-dist/js/bootstrap.min.js"></script>
	
	
	<!-- UNIFORM -->
	<script type="text/javascript" src="<?php echo URL; ?>js/uniform/jquery.uniform.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="<?php echo URL; ?>js/script.js"></script>
<script src="<?php echo URL; ?>js/jquery/bootbox.min.js"></script>
	<script>
	$(".deleteit").click(function(e)
	{
	var url= $(this).attr("href")
	e.preventDefault();
    bootbox.confirm("Are you sure to delete this", function(result) {
	if(result)
	{

	     document.location.href = url;
	}
	});
	})
	$(".recipecategory").change(function(){
			$("#sub_category_ID").val(0);
			$(".remain").hide();
			$(".category_"+$(this).val()).show();

			
			})
	</script>
	<script>
		jQuery(document).ready(function() 
		{	
		
      	
			App.setPage("widgets_box");  //Set current page
			App.init(); //Initialise plugins and elements
		 $("#userprofileform").submit(function(event)
       {
	      event.preventDefault();

		 $.post("<?php echo URL; ?>dashboard/userprofile/<?php echo isset($userid)?$userid:''; ?>",{"formdata":$("#userprofileform").serialize()},function(result)
        {
		 // console.log(result)
	      var obj=jQuery.parseJSON(result);
	  	  //console.log(obj);
	     console.log(obj);
	     $(".error").html("");
         if(obj.error!==undefined)
	     {
	     $("#error").html(obj.error);
	     }
		 if(obj.url!==undefined)
		 {
		 document.location=obj.url;
		 }

       })

		 
       })
		
		});
		
		
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>