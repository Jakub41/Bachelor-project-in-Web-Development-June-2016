
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
									
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						<!-- MAIN CONTENT -->


						<!-- SHOW CATEGORY -->
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Edit Category</h4>
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
									<p id="error" class="error alert-danger"><?php echo isset($errormessage)?$errormessage:'';?></p>								
									<form method="post" action="<?php echo URL . 'recipe/editCategory/'.$category->category_ID.''?>">
										<table class="table table-striped">
											<thead>
											  <tr>
												<th>Category Name</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											
											  <tr>
	<td>
	
									<input type="text" name="categoryname" value="<?php echo isset($category->category_name)?$category->category_name:$_POST['categoryname']; ?>" required/></td>
												<td>
												<input name="submit" type="submit" class="btn btn-primary btn-block" value="Edit Category">		
												</td>
												
											  </tr>
											

											</tbody>
										  </table>
										  </form>
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