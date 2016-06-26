
		<div id="main-content">
			<div class="container">
				<div class="row">
					<div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
						<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- STYLER -->
									
									<!-- /STYLER -->
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="<?php echo URL; ?>dashboard">Home</a>
										</li>
										<li>
											<a href="<?php echo URL; ?>recipe/sub_category">SubCategory</a>
										</li>
										<li>Category</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">SubCategory Management</h3>
									</div>
									
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						<!-- MAIN CONTENT -->


						<!-- ADD CATEGORY -->
						<div class="row">
							<div class="col-md-8 col-md-offset-1">
											<div class="box border purple">
												<div class="box-title">
													<h4><i class="fa fa-bars"></i>Edit SubCategory</h4>
													
												</div>
												<div class="box-body big">
													<div class="row">
				<p id="error" class="error alert-danger"><?php echo isset($errormessage)?$errormessage:'';?></p>																												
						<form action="<?php echo URL; ?>recipe/editsubcategory/<?php echo $subcategory_id;?>" method="post" enctype="multipart/form-data" >
													  <div class="col-md-3">
													 <select name="category_ID" class="form-control">
											   <?php foreach ($all_categories as $category): ?>	
		                                        <?php $isselected=($category->category_ID==$catagoryid)?"selected":'';?>
													 <option value="<?php echo $category->category_ID;?>" <?php echo $isselected;?>><?php echo $category->category_name; ?></option>
													 <?php endforeach;?>
													 </select>								

													  	</div>
													  	<div class="col-md-3">
<input class="form-control" type="text" name="sub_category_name" value="<?php echo isset($subcategoryname)?$subcategoryname:'';?>" required>
													  	</div>
														<div class="col-md-3">
													  		<input class="form-control" type="file" name="fileToUpload">
													  	</div>
														<div class="col-md-3">
															<input name="submit" type="submit" class="btn btn-primary btn-block" value="Edit SubCategory">	
														</div>
														<input type="hidden" value="<?php echo $subcategory_id;?>" name="sub_category_ID"/>
													  </form>
													</div>
												</div>
											</div>											
							</div>
						</div>
						<!-- /ADD CATEGORY -->

						<!-- SHOW CATEGORY -->
						

						<!-- /SHOW CATEGORY -->





						<!-- /MAIN CONTENT -->
					</div>
				</div>
			</div>
		</div>