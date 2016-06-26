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
											<a href="<?php echo URL; ?>order/all_orders">order</a>
										</li>
										<li>Blank Page</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Order</h3>
									</div>
									<div class="description">Display Delivered Order</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Display Delivered Order</h4>
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
											  <td>OrderID</td>
												<td>RecipeID</td>
												<td>userID</td>
												<td>Phone</td>
												<td>OrderDate</td>
												<td>Action</td>
												</tr>
											</thead>
											<tbody>
											<?php
											foreach($all_orders as $row){?>

											  <tr>
												<td><?php echo $row->order_ID;?></td>
												<td><?php echo $row->recipe_ID;?></td>
												<td><?php echo $row->user_ID;?></td>
												<td><?php echo $row->phone;?></td>
												<td><?php echo $row->order_date;?></td>
										        <td>									
												<a class="btn btn-danger deleteit" href="<?php echo URL."order/delete_order/".$row->order_ID.""; ?>">Delete</a>
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
		