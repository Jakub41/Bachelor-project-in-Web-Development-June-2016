
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
										<h3 class="content-title pull-left">Edit Recipe</h3>
									</div>
									
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						
						<div class="row">
							
							<div class="col-sm-8 col-sm-offset-2">
							
								<div class="box border orange">
								
									<div class="box-title">
										<h4><i class="fa fa-pencil-square"></i> Edit Recipe</h4>
										
									</div>
									<div class="box-body">
									<p id="error" class="error alert-danger"><?php echo isset($errormessage)?$errormessage:'';?></p>														
										<form class="form-horizontal" role="form" action="<?php echo URL; ?>recipe/edit/<?php echo $recipe->recipe_ID;?>" method="post" enctype="multipart/form-data">
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Category</span>
<select name="category_ID" class="form-control recipecategory">
													 <?php  foreach ($all_categories as $category): ?>	
													 <option value="<?php echo $category->category_ID;?>" <?php echo($category->category_ID==$recipe->category_ID)?"selected":""?>><?php echo $category->category_name;?></option>
													 <?php endforeach;?>
													 </select>																</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">Sub-Category</span>
													 	<select name="sub_category_ID" class="form-control" id="sub_category_ID">
													
													 <?php foreach ($all_sub_categories as $subcategory):$displaythis=($subcategory->category_ID==$recipe->category_ID)?"block;":'none;'; ?>
													 
													 <option value="<?php echo $subcategory->sub_category_ID;?>" style="display:<?php echo $displaythis;?>" class="remain category_<?php echo $subcategory->category_ID;?>" <?php echo($subcategory->sub_category_ID==$recipe->sub_category_ID)?"selected":""?>><?php echo $subcategory->sub_category_name;?></option>
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
													 	<input type="text" name="recipe_name" value="<?php
														echo isset($recipe->recipe_name)?$recipe->recipe_name:$_POST["recipe_name"];?>" class="form-control" placeholder="e.g. Chicken Fry" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<div class="input-group">
													 	<span class="input-group-addon">$</span>
													 	<input type="text" name="recipe_price" class="form-control" placeholder="Price" value="<?php echo isset($recipe->recipe_price)?$recipe->recipe_price:$_POST["recipe_price"];?>" required>
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
										<h4><i class="fa fa-pencil-square"></i>Recipe Details</h4>
										
									</div>
									<div class="box-body">							
										<textarea class="ckeditor" name="recipe_details" required>
								<?php echo isset($recipe->recipe_details)?$recipe->recipe_details:$_POST["recipe_details"];?>
										</textarea>
									</div>								
								</div>
								<!-- /CKE -->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4">
								<input type="submit" name="submit" value="EDIT RECIPE" class="btn btn-primary btn-block">
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
