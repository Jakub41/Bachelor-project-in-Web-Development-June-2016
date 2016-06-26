
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
											<a href="<?php echo URL; ?>blog">Blog</a>
										</li>
										<li>New Recipe</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">New Blog</h3>
									</div>
									<div class="description">Add New Blog</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="box border orange">
									<div class="box-title">
										<h4><i class="fa fa-pencil-square"></i> Add New Blog</h4>
										<div class="tools hidden-xs">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body">
			<p id="error" class="error alert-danger"><?php echo isset($errormessage)?$errormessage:'';?></p>																				
										<form class="form-horizontal" role="form" action="<?php echo URL; ?>blog/new_post" method="post" enctype="multipart/form-data">
											
											
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Blog Title</span>
													 	<input type="text" name="post_title" class="form-control" placeholder="Enter blog title" required>
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Upload Image</span>
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
										<div class="tools hidden-xs">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body">							
										<textarea class="ckeditor" name="post_content" required></textarea>
									</div>								
								</div>
								<!-- /CKE -->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<input type="submit" name="submit" value="ADD BLOG" class="btn btn-primary btn-block">
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
