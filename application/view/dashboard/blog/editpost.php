
		<div id="main-content">
			<div class="container">
				<div class="row">
					<div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
						<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="<?php echo URL; ?>dashboard">Home</a>
										</li>
										<li>
											<a href="<?php echo URL; ?>blog">blog</a>
										</li>
										<li>New Recipe</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Edit Blog</h3>
									</div>
									
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						
						<div class="row">
							
							<div class="col-sm-8 col-sm-offset-2">
							
								<div class="box border orange">
								
									<div class="box-title">
										<h4><i class="fa fa-pencil-square"></i> Edit Blog</h4>
										
									</div>
									<div class="box-body">
	<p id="error" class="error alert-danger"><?php echo isset($errormessage)?$errormessage:'';?></p>																																			
										<form class="form-horizontal" role="form" action="<?php echo URL; ?>blog/edit/<?php echo $blog->post_ID;?>" method="post" enctype="multipart/form-data">
											
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Title</span>
													 	<input type="text" name="post_title" value="<?php
														echo isset($blog->post_title)?$blog->post_title:$_POST["post_title"];?>" class="form-control" placeholder="e.g. Chicken Fry" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Image</span>
													 	<input type="file" class="form-control" name="fileToUpload">
													</div>
												</div>
											</div>
										
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<!-- CKE -->
								<div class="box border orange">
									<div class="box-title">
										<h4><i class="fa fa-pencil-square"></i>Blog Details</h4>
										
									</div>
									<div class="box-body">							
										<textarea class="ckeditor" name="post_content" required>
								<?php echo isset($blog->post_content)?$blog->post_content:$_POST["post_content"];?>
										</textarea>
									</div>								
								</div>
								<!-- /CKE -->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<input type="submit" name="submit" value="EDIT BLOG" class="btn btn-primary btn-block">
							</div>
						</div>

						</form>

						
					</div>
				</div>
			</div>
		</div>

	<!-- CKEDITOR -->
	<script type="text/javascript" src="<?php echo URL; ?>js/ckeditor/ckeditor.js"></script>

	<script>
		jQuery(document).ready(function() {		
			App.setPage("rich_text_editors");  //Set current page
			App.init(); //Initialise plugins and elements
			
		});
	</script>
