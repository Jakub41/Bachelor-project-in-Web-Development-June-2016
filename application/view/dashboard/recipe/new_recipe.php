
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
											<a href="<?php echo URL; ?>recipe/index">Recipe</a>
										</li>
										<li>New Recipe</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">New Recipe</h3>
									</div>
									<div class="description">Add New Recipe</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="box border orange">
									<div class="box-title">
										<h4><i class="fa fa-pencil-square"></i> Add New Recipe</h4>
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
										<form class="form-horizontal" role="form" action="<?php echo URL; ?>recipe/new_recipe" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Category</span>
<select name="category_ID" class="form-control recipecategory">
													 <?php $count=1;
													 foreach ($all_categories as $category): if($count==1){$selectcat=$category->category_ID;}++$count;?>	
													 <option value="<?php echo $category->category_ID;?>"><?php echo $category->category_name; ?></option>
													 <?php endforeach;?>
													 </select>																</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Sub-Category</span>
													 	<select name="sub_category_ID" class="form-control" id="sub_category_ID">
													
													 <?php foreach ($all_sub_categories as $subcategory): $selectthis=($subcategory->category_ID==$selectcat)?"selected":'';$displaythis=($subcategory->category_ID==$selectcat)?"block;":'none;';?>
													 
													 <option value="<?php echo $subcategory->sub_category_ID;?>" class="remain category_<?php echo $subcategory->category_ID;?>" <?php echo $selectthis;?> style="display:<?php echo $displaythis;?>"><?php echo $subcategory->sub_category_name; ?></option>
													 <?php endforeach;?>
													  <option value="0" class='select' style="display:none;">--select--</option>	
													 </select>																
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Recipe Name</span>
													 	<input type="text" name="recipe_name" class="form-control" placeholder="e.g. Chicken Fry" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">$</span>
													 	<input type="text" name="recipe_price" class="form-control" placeholder="Price" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Image</span>
													 	<input type="file" class="form-control" name="fileToUpload" required>
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
										<h4><i class="fa fa-pencil-square"></i>Recipe Details</h4>
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
										<textarea class="ckeditor" name="recipe_details" required></textarea>
									</div>								
								</div>
								<!-- /CKE -->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<input type="submit" name="submit" value="ADD RECIPE" class="btn btn-primary btn-block">
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
