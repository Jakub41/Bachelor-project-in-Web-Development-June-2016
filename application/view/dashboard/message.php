
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
											<a href="<?php echo URL; ?>message">Message</a>
										</li>
										<li>Blank Page</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Message</h3>
									</div>
									<div class="description">Display Message</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>All Message</h4>
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
												<th>Subject</th>
												<th>Message</th>
												<th>Date</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											<?php
											foreach($message as $row){
											?>

											  <tr>
												<td><?php echo $row->subject;?></td>
												<td><?php echo $row->message;?></td>
												<td><?php echo $row->date;?></td>
												<td><a href="<?php //echo URL . 'dashboard/messagesend/' . htmlspecialchars($row->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary">Send</a>
												</td>												
												<td><a href="<?php echo URL . 'dashboard/editmessage/' . htmlspecialchars($row->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-warning">Edit</a>
												</td>
												<td><a href="<?php echo URL . 'dashboard/deletemessage/' . htmlspecialchars($row->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-danger deleteit">Delete</a>
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