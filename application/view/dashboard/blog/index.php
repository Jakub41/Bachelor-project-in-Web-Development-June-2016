
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
											<a href="<?php echo URL; ?>blog">Blog</a>
										</li>
										<li>Blank Page</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Blog</h3>
									</div>
									<div class="description">Display Blog</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>All Post</h4>
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
												<th>Title</th>
												<th>User</th>
												<th>Image</th>
												<th>Content</th>
												<th>Date</th>
											  </tr>
											</thead>
											<tbody>
											<?php
											foreach($post as $row)
											{?>

											  <tr>
												<td><?php echo $row->post_title;?></td>
												<td><?php echo $row->user_type;?></td>
												
												<td>
												<?php
												if(!empty($row->post_image)):
												?>
<img src="<?php echo URL .'public/uploads/blog/' .$row->post_image; ?>" height="100px" width="100px"/>                                                <?php
											    endif;
											   ?>
											
																							
												</td>
												</td>
												<td><?php 
												preg_match('/^(?>\S+\s*){1,30}/', $row->post_content, $match);
												echo $match[0];
												 ?></td>
												<td><a href="<?php echo URL . 'blog/edit/' . htmlspecialchars($row->post_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-warning">Edit</a>
												</td>
												<td><a href="<?php echo URL . 'blog/delete/' . htmlspecialchars($row->post_ID, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-danger deleteit">Delete</a>
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