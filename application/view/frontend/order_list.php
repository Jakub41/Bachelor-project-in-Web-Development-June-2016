<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="index.html">Home</a> </li>
        <li> <a href="account.html">My Account</a> </li>
        <li class="active"> Order List </li>
      </ul>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-list-alt"></i> Order List </span></h1>
      <div class="row userInfo">
        <div class="col-lg-12">
          <h2 class="block-title-2"> Your Order List  </h2>
        </div>
        
        <div class="col-xs-12 col-sm-12">
        
		<div class="box-body">
										<table class="table table-striped">
											<thead>
											<tr>
											  <td>OrderID</td>
												<td>No. of items</td>
												<td>Payment Method</td>
												<td>Price</td>
												
												<td>OrderDate</td>
												<td>Status</td>
												</tr>
											</thead>
											<tbody>
											<?php
											foreach($allorders as $row){?>

											  <tr>
												<td><?php echo $row->order_ID;?></td>
												<td><?php echo count(explode(',',$row->recipe_ID));?></td>
												<td><?php echo $row->payment_method;?></td>
												
												<td>$<?php echo $row->price;?></td>
												<td><?php echo $row->order_date;?></td>
												<td>
                                                  <?php echo($row->is_confirmed=='1'?'confirm':'pending');?>
									             </td>
												
												
											  </tr>
											<?php } ?>

											</tbody>
										  </table>
									</div>
		
		  
        </div>
        
        
      </div>
      <!--/row end--> 
      
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5"> </div>
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /main-container -->

<div class="gap"> </div>