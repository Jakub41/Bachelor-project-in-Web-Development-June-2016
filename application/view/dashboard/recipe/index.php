
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
											<a href="<?php echo URL; ?>recipe">Recipe</a>
										</li>
										<li>Blank Page</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Recipe</h3>
									</div>
									<div class="description">Display Recipes</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>All Recipes</h4>
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
												<th>Recipe Name</th>
												<th>Recipe Price</th>
												<th>Recipe Details</th>
												<th>Recipe Image</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											<?php
											foreach($recipes as $row){?>

											  <tr>
												<td><?php echo $row->recipe_name;?></td>
												<td><?php echo $row->recipe_price;?></td>
												<td><?php echo $row->recipe_details;?></td>
												<td>
	<img src="<?php echo URL.'public/uploads/'.$row->recipe_image;?>" height="100px" width="100px"/>									</td>
												<td><a href="<?php echo URL . 'recipe/edit/' . htmlspecialchars($row->recipe_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-warning">Edit</a>
												</td>
												<td><a href="<?php echo URL . 'recipe/delete/' . htmlspecialchars($row->recipe_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-danger deleteit">Delete</a>
												</td>
											  </tr>
											<?php } ?>

											</tbody>
										  </table>
									</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
					</div>
				</div>
			</div>
		</div>