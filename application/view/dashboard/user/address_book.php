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
											<a href="<?php echo URL; ?>user">User</a>
										</li>
										<li>Category</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Display All Users</h3>
									</div>
									<div class="description">See all Users,  delete or edit users</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						<!-- MAIN CONTENT -->


						<!-- SHOW USERS -->
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>All Users</h4>
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
												<th>First Name</th>
												<th>Last Name</th>
												<th>Email</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											<?php
											foreach($user_info as $row){?>

											  <tr>
												<td><?php echo $row->first_name;?></td>
												<td><?php echo $row->last_name;?></td>
												<td><?php echo $row->email;?></td>
												<td>
												<a href="<?php echo URL . 'user/editinfo/' . htmlspecialchars($row->user_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-warning">Edit</a>
												</td>
												<td><a href="<?php echo URL . 'user/delete/' . htmlspecialchars($row->user_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-danger deleteit">Delete</a>
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