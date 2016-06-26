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
										<h3 class="content-title pull-left">Edit User</h3>
									</div>
									<div class="description"> edit user info</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->

						<!-- MAIN CONTENT -->


						
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
											<div class="box border purple">
												<div class="box-title">
													<h4><i class="fa fa-bars"></i>Edit User</h4>

												</div>
												<div class="box-body big">
													<div class="row">
													  <form action="<?php echo URL;?>user/editinfo" method="post" enctype="multipart/form-data" >
													  	<div class="col-md-10">
														<label>First Name</label><br />
													  		
												<input type="text" class="form-control" name="firstname" value="<?php echo isset($user_info[0]->first_name)?$user_info[0]->first_name:$_POST["firstname"]; ?>" required/>
			
													  	</div>
														</div>
														<div class="row">
														<div class="col-md-10">
														<label>Last Name</label><br />
							<input type="text" class="form-control" name="lastname" value="<?php echo isset($user_info[0]->last_name)?$user_info[0]->last_name:$_POST["last_name"]; ?>" required/>
														</div>
														</div>
														<div class="row">
														<div class="col-md-10">
														<label>Email</label><br />
<input type="email" class="form-control" name="email" value="<?php echo isset($user_info[0]->email)?$user_info[0]->email:$_POST["email"]; ?>" required/>

														</div>
														</div>
														<div class="row">
														<div class="col-md-5"><br />
<input name="submit" type="submit" class="btn btn-primary btn-block" value="Edit User">								
														<input type="hidden" value="<?php echo $user_id;?>" name="userid"/>
		<?php unset($user_info);?>
														</div>
														</div>
													  </form>
													</div>
												</div>
											</div>											
							</div>
						</div>
						

						<!-- /MAIN CONTENT -->
					</div>
				</div>
			</div>
		</div>

