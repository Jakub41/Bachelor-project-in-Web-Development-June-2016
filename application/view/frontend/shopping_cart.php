<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="<?php echo URL.'frontend/index'; ?>">Home</a> </li>
        <li> <a href="<?php echo URL.'frontend/category'; ?>">Category</a> </li>
        <li class="active">Cart </li>
      </ul>
    </div>
  </div><!--/.row-->
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Shopping cart </span></h1>
    </div>
    <!--<div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
      <h4 class="caps"><a href="<?php //echo URL.'frontend/category'; ?>"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
    </div>-->
  </div><!--/.row-->
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <div class="cartContent w100">
            <table class="cartTable table-responsive" style="width:100%">
              <tbody>
              
                <tr class="CartProduct cartTableHeader">
                  <td style="width:15%"  > Product </td>
                  <td style="width:40%"  >Details</td>
                  <td style="width:10%"  class="delete">&nbsp;</td>
                  <td style="width:10%" >QNT</td>
                  <td style="width:10%" >Discount</td>
                  <td style="width:15%" >Total</td>
                </tr>
                <?php
				$totalprice=0;

				if($hasvalue!=0):
				foreach($getdata["recipe"] as $row):

				?>
                <tr class="CartProduct">
                  <td  class="CartProductThumb"><div> <a href="#">
				  <img src="<?php echo URL.'public/uploads/'.$row->recipe_image;?>" height="100px" width="100px"/>
				  </a> </div></td>
                  <td ><div class="CartDescription">
                      <h4> <?php echo $row->recipe_name;?> </h4>
                      
                      <div class="price"> <span>$<?php echo $row->recipe_price;?></span></div>
                    </div></td>
                  <td class="delete"><a title="Delete" href="<?php echo URL.'frontend/deletecart/'.$row->recipe_ID;?>"> <i class="glyphicon glyphicon-trash fa-2x"></i></a></td>
                  <td ><input class="quanitySniper" type="text" value="<?php echo $getdata["recipetotal"][$row->recipe_ID];?>" name="quanitySniper" readonly="readonly"></td>
                  <td >0</td>
				  <?php
				  $totalprice=$totalprice+($row->recipe_price*$getdata["recipetotal"][$row->recipe_ID]);
				  ?>
                  <td class="price">$<?php echo $row->recipe_price*$getdata["recipetotal"][$row->recipe_ID];?></td>
                </tr>
                <?php
				endforeach;
				endif;
				?>
                
                
                
              </tbody>
            </table>
          </div>
          <!--cartContent-->
          
          <!--<div class="cartFooter w100">
            <div class="box-footer">
              <div class="pull-left"> <a href="<?php //echo URL.'frontend/category'; ?>" class="btn btn-default"> <i class="fa fa-arrow-left"></i> &nbsp; Continue shopping </a> </div>
              <div class="pull-right">
                <button type="submit" class="btn btn-default"> <i class="fa fa-undo"></i> &nbsp; Update cart </button>
              </div>
            </div>
          </div>--> <!--/ cartFooter --> 
          
        </div>
      </div>
      <!--/row end--> 
      
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
      <div class="contentBox" >
        <div class="w100 costDetails">
          <div class="table-block" id="order-detail-content"> <a class="btn btn-primary btn-lg btn-block " title="checkout" href="<?php echo URL.'frontend/checkout_1'; ?>" style="margin-bottom:20px"> Proceed to checkout &nbsp; <i class="fa fa-arrow-right"></i> </a>
            <div class="w100 cartMiniTable">
              <table id="cart-summary" class="std table">
                <tbody>
                  <tr >
                    <td>Total products</td>
                    <td class="price" ><?php echo $totalproduct;?></td>
                  </tr>
                  <tr  style="">
                    <td>Shipping</td>
                    <td class="price" ><span class="success">Free shipping!</span></td>
                  </tr>
                  <tr class="cart-total-price ">
                    <td>Total (tax excl.)</td>
                    <td class="price" >$<?php echo $totalprice;?></td>
                  </tr>
                  <tr >
                    <td>Total tax</td>
                    <td class="price" id="total-tax">$0.00</td>
                  </tr>
                  <tr >
                    <td > Total </td>
                    <td class=" site-color" id="total-price">$<?php echo $totalprice;?></td>
                  </tr>
                  <tr >
                    <td colspan="2"  ><div class="input-append couponForm">
                        <input class="col-lg-8" id="appendedInputButton" type="text"  placeholder="Coupon code" >
                        <button class="col-lg-4 btn btn-success" type="button">Apply!</button>
                      </div></td>
                  </tr>
                </tbody>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End popular --> 
      
    </div>
    <!--/rightSidebar--> 
    
  </div><!--/row-->
  
  <div style="clear:both"></div>
</div><!-- /.main-container -->

<div class="gap"> </div>