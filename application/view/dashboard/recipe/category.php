
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
											<a href="<?php echo URL; ?>recipe/category">Category</a>
										</li>
										<li>Category</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Category Management</h3>
									</div>
									<div class="description">See all categories, add, delete or edit categories</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						<!-- MAIN CONTENT -->


						<!-- ADD CATEGORY -->
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
											<div class="box border purple">
												<div class="box-title">
													<h4><i class="fa fa-bars"></i>Add New Category</h4>
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
													<p id="error" class="error alert-danger"><?php echo isset($_SESSION["errormessage"])?$_SESSION["errormessage"]:'';?>
<?php  if(isset($_SESSION["errormessage"])){unset($_SESSION["errormessage"]);}?></p>								
													  <form action="<?php echo URL; ?>recipe/addCategory" method="post" enctype="multipart/form-data" >
													  	<div class="col-md-8">
													  		<input class="form-control" type="text" name="category_name" required>
													  	</div>
														<div class="col-md-4">
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
										<h4><i class="fa fa-table"></i>All Categories</h4>
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
												<th>Category Name</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											<?php foreach ($all_categories as $category) { ?>									
											  <tr>
												<td><?php echo $category->category_name; ?></td>
												<td>
													<a href="<?php echo URL . 'recipe/editCategory/' . htmlspecialchars($category->category_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-warning">Edit</a>
												</td>
												<td>
													<a href="<?php echo URL . 'recipe/deleteCategory/' . htmlspecialchars($category->category_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-danger deleteit">Delete</a>
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