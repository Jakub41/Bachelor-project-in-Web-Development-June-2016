<?php //error_reporting(0); ?>
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
											<a href="<?php echo  URL; ?>">Home</a>
										</li>
										<li>
											<a href="<?php echo URL; ?>newsletter">Newsletter</a>
										</li>
										<li>Newletter Subscriptions</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
									<h3 class="content-title pull-left">Newsletter</h3>
									</div>
									<div class="description">Newsletter Subscribers</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						<div class="row">
							<div class="col-md-8">
								<!-- BOX -->
								<div class="box border pink">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Newsletter Subscribers</h4>
										<div class="tools">											
											<a href="<?php echo URL; ?>dashboard/newsletter" class="reload">
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
										<table class="table">
											<thead>
											  <tr>
												<th>ID</th>
												<th>Email</th>
												<th>Date</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
											<?php foreach ($newsletter as $key => $Subscribers) { ?>				
											  <tr>
												<td><?php echo $Subscribers->newsletter_ID; ?></td>
												<td><?php echo $Subscribers->email; ?></td>
												<td><?php echo $Subscribers->date; ?></td>
												<td>
													<a href="<?php echo URL . 'dashboard/deleteNewsletter/' . htmlspecialchars($Subscribers->newsletter_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-danger deleteit">Delete</a>
												</td>
											  </tr>
											 <?php } ?>
											  
											</tbody>
										  </table>
									</div>
								</div>
								<!-- /BOX -->

							</div>
						</div>
					</div>
				</div>				
			</div>						
		</div>