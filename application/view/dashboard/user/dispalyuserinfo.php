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
										<li>Blank Page</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">User</h3>
									</div>
									<div class="description">Display User Info</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>User Info</h4>
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
												<th>Address</th>
												<th>City</th>
												<th>State</th>
												<th>Country</th>
												<th>Zip</th>
												<th>Phone</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											<?php
											foreach($userinfo as $row){?>

											  <tr>
												<td><?php echo $row->first_name;?></td>
												<td><?php echo $row->last_name;?></td>
												<td><?php echo $row->address;?></td>
												<td>
												<?php echo $row->city;?>
	</td>
	<td>
												<?php echo $row->state;?>
	</td>
												<td><?php echo $row->country;?>
												</td>
												<td><?php echo $row->zip;?>
												</td>
												<td><?php echo $row->phone;?>
												</td>
												<td>
												 
												<a href="<?php echo URL . 'dashboard/userprofile/' . htmlspecialchars(hash_hmac('sha256', $row->user_ID, $_SESSION["salt"]), ENT_QUOTES, 'UTF-8').'/'.htmlspecialchars(($row->user_ID+$_SESSION["salt"]),ENT_QUOTES, 'UTF-8').''; ?>" class="btn btn-warning">Edit</a>
												<a href="<?php echo URL . 'user/delete/' . htmlspecialchars(hash_hmac('sha256', $row->user_ID, $_SESSION["salt"]), ENT_QUOTES, 'UTF-8').'/'.htmlspecialchars(($row->user_ID+$_SESSION["salt"]),ENT_QUOTES, 'UTF-8').''; ?>" class="btn btn-danger deleteit">Delete</a>
												
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