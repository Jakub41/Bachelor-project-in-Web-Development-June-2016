
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
									<div class="description">See all Subcategories, add, delete or edit Subcategories</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						<!-- MAIN CONTENT -->


						<!-- ADD CATEGORY -->
						<div class="row">
							<div class="col-md-9 col-md-offset-1">
											<div class="box border purple">
												<div class="box-title">
													<h4><i class="fa fa-bars"></i>Add New SubCategory</h4>
													<div class="tools hidden-xs">
														
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
												<div class="box-body big">
													<div class="row">
		<p id="error" class="error alert-danger"><?php echo isset($errormessage)?$errormessage:'';?></p>																			
													  <form action="<?php echo URL; ?>recipe/sub_category" method="post" enctype="multipart/form-data" >
													  <div class="col-md-3">
													 <select name="category_ID" class="form-control">
													 <?php foreach ($all_categories as $category): ?>	
													 <option value="<?php echo $category->category_ID;?>"><?php echo $category->category_name; ?></option>
													 <?php endforeach;?>
													 </select>								

													  	</div>
													  	<div class="col-md-3">
													  		<input class="form-control" type="text" name="sub_category_name" required>
													  	</div>
														<div class="col-md-3">
													  		<input class="form-control" type="file" name="fileToUpload" required>
													  	</div>
														
														<div class="col-md-3">
															<input name="submit" type="submit" class="btn btn-primary btn-block" value="Add Category">	
														</div>
													  </form>
													</div>
												</div>
											</div>											
							</div>
						</div>
						<!-- /ADD CATEGORY -->

						<!-- SHOW CATEGORY -->
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>All SubCategories</h4>
										<div class="tools">

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
										<table class="table table-striped">
											<thead>
											  <tr>
												<th>SubCategory Name</th>
												<th>Image</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											<?php foreach ($all_sub_categories as $sub_category) { ?>									
											  <tr>
												<td><?php echo $sub_category->sub_category_name; ?></td>
								<td>
								<img src="<?php echo URL.'public/uploads/subcategoryimg/'.$sub_category->imgname;?>" height="100px" width="100px"/></td>
												<td>
													<a href="<?php echo URL . 'recipe/editsubcategory/' . htmlspecialchars($sub_category->sub_category_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-warning">Edit</a>
												</td>
												<td>
													<a href="<?php echo URL . 'recipe/deleteSubCategory/' . htmlspecialchars($sub_category->sub_category_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-danger deleteit">Delete</a>
												</td>
											  </tr>
											<?php } ?>

											</tbody>
										  </table>
									</div>
								</div>
							</div>
						</div>

						<!-- /SHOW CATEGORY -->





						<!-- /MAIN CONTENT -->
					</div>
				</div>
			</div>
		</div>