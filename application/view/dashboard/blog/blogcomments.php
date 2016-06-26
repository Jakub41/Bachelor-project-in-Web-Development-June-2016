
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
											<a href="<?php echo URL; ?>blog/blogcomment">Blog Comments</a>
										</li>
										<li>Blank Page</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Blog Comments</h3>
									</div>
									<div class="description">Display Blog Comments</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>All Blog Comments</h4>
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
												<th>Blog Title</th>
												<th>User Name</th>
												<th>Comment</th>
												<th>Date</th>
												<th>User Type</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											<?php
											foreach($blogcomments as $row){?>

											  <tr>
												<td><?php echo $row->post_title;?></td>
												<td><?php echo $row->name;?></td>
												<td><?php echo $row->comment;?></td>
												<td>
	                                                <?php echo $row->commentdate;?>
												<td>
												<?php echo $row->user_type;?>
												</td>
												<td><a href="<?php echo URL . 'blog/deletecomment/' . htmlspecialchars($row->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-danger deleteit">Delete</a>
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