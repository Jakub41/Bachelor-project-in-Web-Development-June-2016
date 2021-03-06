<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="index.html">Home</a> </li>
        <li> <a href="cart.html">Cart</a> </li>
        <li class="active"> Checkout </li>
      </ul>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Checkout</span></h1>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
      <h4 class="caps"><a href="<?php echo URL.'frontend/category'; ?>"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <div class="w100 clearfix">
            <ul class="orderStep orderStepLook2">
              <li class="active"> <a href="<?php echo URL.'frontend/checkout_1'; ?>"> <i class="fa fa-map-marker "></i> <span> address</span> </a> </li>
              <li> <a href="<?php echo URL.'frontend/checkout_2'; ?>"> <i class="fa fa fa-envelope  "></i> <span> Billing </span></a></li>
              <li> <a href="<?php echo URL.'frontend/checkout_3'; ?>"><i class="fa fa-truck "> </i><span>Shipping</span> </a> </li>
              <li> <a href="<?php echo URL.'frontend/checkout_4'; ?>"><i class="fa fa-money  "> </i><span>Payment</span> </a> </li>
              <li> <a href="<?php echo URL.'frontend/checkout_5'; ?>"><i class="fa fa-check-square "> </i><span>Order</span></a> </li>
            </ul>
            <!--/.orderStep end--> 
          </div>
          <div class="w100 clearfix">
            <div class="row userInfo">
              <div class="col-lg-12">
                <h2 class="block-title-2"> Payment method </h2>
                <p>Please select the preferred shipping method to use on this order.</p>
                <hr>
              </div>
              <div class="col-xs-12 col-sm-12">
                <div class="paymentBox">
                  <div class="panel-group paymentMethod" id="accordion">
				  <form method="post" action="<?php echo URL.'frontend/checkout_5'; ?>">
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-custom">
                        <h4 class="panel-title"> <a class="cashOnDelivery" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <span class="numberCircuil">Option 1</span> <strong> Cash on Delivery</strong> </a> </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <p>All transactions are secure and encrypted, and we neverstor To learn more, please view our privacy policy.</p>
                          <br>
                          <label class="radio-inline" for="radios-4">
                            <input name="radios" id="radios-4" value="4" type="radio">
                            Cash On Delivery </label>
                          <div class="form-group">
                            <label for="CommentsOrder">Add Comments About Your Order</label>
                            <textarea id="CommentsOrder" class="form-control" name="CommentsOrder" cols="26" rows="3"></textarea>
                          </div>
                          <div class="form-group clearfix">
                            <label class="checkbox-inline" for="checkboxes-1">
                              <input name="checkboxes" id="checkboxes-1" value="1" type="checkbox">
                              I have read and agree to the <a href="terms-conditions.html">Terms & Conditions</a> </label>
                          </div>
                          <input type="submit" value="Order" class="btn btn-primary btn-small "/> </div>
                        </div>
                      </div>
                    </div>
					<input type="hidden" value="cashondelivery" name="paymenttype"/>
					</form>
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-custom">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" > <span class="numberCircuil">Option 2</span><strong>PayPal</strong> </a> </h4>
                      </div>
					  <form method="post" action="<?php echo URL.'frontend/checkout_4'; ?>">
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>All transactions are secure and encrypted, and we neverstor To learn more, please view our privacy policy.</p>
                          <br>
                          <label class="radio-inline" for="radios-3">
                            <input name="radios" id="radios-3" value="4" type="radio">
                            <img src="images/site/payment/paypal-small.png" height="18" alt="paypal"> Checkout with Paypal </label>
                          <div class="form-group">
                            <label for="CommentsOrder2">Add Comments About Your Order</label>
                            <textarea id="CommentsOrder2" class="form-control" name="CommentsOrder2" cols="26" rows="3"></textarea>
                          </div>
                          <div class="form-group clearfix">
                            <label class="checkbox-inline" for="checkboxes-0">
                              <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
                              I have read and agree to the <a href="terms-conditions.html">Terms & Conditions</a> </label>
                          </div>
                          <div class="pull-right">
						  <input type="hidden" value="paypal" name="paymenttype"/> 
						  <input type="submit" value="Order" class="btn btn-primary btn-small "/></div>
                        </div>
                      </div>
					  </form>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-custom">
                        <h4 class="panel-title"> <a class="masterCard" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <span class="numberCircuil">Option 3</span> <strong> MasterCard</strong> </a> </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>All transactions are secure and encrypted, and we neverstor To learn more, please view our privacy policy.</p>
                          <br>
                          <div class="panel open">
                            <div class="creditCard">
                              <div class="cartBottomInnerRight paymentCard"> 
                              </div>
                              <span>Supported</span> <span>Credit Cards</span>
                              <div class="paymentInput">
                                <label for="CardNumber">Credit Card Number *</label>
                                <br>
                                <input id="CardNumber" type="text" name="Number">
                              </div>
                              <!--paymentInput-->
                              <div class="paymentInput">
                                <label for="CardNumber2">Name on Credit Card *</label>
                                <br>
                                <input type="text" name="CardNumber2" id="CardNumber2">
                              </div>
                              <!--paymentInput-->
                              <div class="paymentInput">
                                <div class="form-group">
                                  <label>Expiration date *</label>
                                  <br>
                                  <div class="col-lg-4 col-md-4 col-sm-4 no-margin-left no-padding">
                                    <select required aria-required="true" name="expire">
                                      <option value="">Month</option>
                                      <option value="1">01 - January</option>
                                      <option value="2">02 - February</option>
                                      <option value="3">03 - March</option>
                                      <option value="4">04 - April</option>
                                      <option value="5">05 - May</option>
                                      <option value="6">06 - June</option>
                                      <option value="7">07 - July</option>
                                      <option value="8">08 - August</option>
                                      <option value="9">09 - September</option>
                                      <option value="10">10 - October</option>
                                      <option value="11">11 - November</option>
                                      <option value="12">12 - December</option>
                                    </select>
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-4">
                                    <select required aria-required="true" name="year">
                                      <option value="">Year</option>
                                      <option value="2013">2013</option>
                                      <option value="2014">2014</option>
                                      <option value="2015">2015</option>
                                      <option value="2016">2016</option>
                                      <option value="2017">2017</option>
                                      <option value="2018">2018</option>
                                      <option value="2019">2019</option>
                                      <option value="2020">2020</option>
                                      <option value="2021">2021</option>
                                      <option value="2022">2022</option>
                                      <option value="2023">2023</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <!--paymentInput-->
                              
                              <div style="clear:both"></div>
                              <div class="paymentInput clearfix">
                                <label for="VerificationCode">Verification Code *</label>
                                <br>
                                <input type="text" id="VerificationCode" name="VerificationCode" style="width:90px;">
                                <br>
                              </div>
                              <!--paymentInput-->
                              
                              <div>
                                <input type="checkbox" name="saveInfo" id="saveInfoid">
                                <label for="saveInfoid">&nbsp;Save my Card information</label>
                              </div>
                            </div>
                            <!--creditCard-->
                            
                            <div class="pull-right"> <a href="<?php echo URL.'frontend/checkout_5'; ?>" class="btn btn-primary btn-small " > Order <i class="fa fa-arrow-circle-right"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!--/row--> 
                
              </div>
            </div>
          </div>
          <!--/row end-->
          
          <div class="cartFooter w100">
            <div class="box-footer">
              <div class="pull-left"> <a class="btn btn-default" href="<?php echo URL.'frontend/checkout_3'; ?>"> <i class="fa fa-arrow-left"></i> &nbsp; Billing address </a> </div>
            </div>
          </div>
        </div>
        
        <!--/ cartFooter --> 
        
      </div>
    </div>
    <!--/row end-->
    
    <div class="col-lg-3 col-md-3 col-sm-12 rightSidebar">
      <div class="w100 cartMiniTable">
        <table id="cart-summary" class="std table">
          <tbody>
            <tr >
              <td>Total products</td>
              <td class="price" ><?php echo isset($getdata->totalproduct)?$getdata->totalproduct:0;?></td>
            </tr>
            <tr  style="">
              <td>Shipping</td>
              <td class="price" ><span class="success">Free shipping!</span></td>
            </tr>
            <tr class="cart-total-price ">
              <td>Total (tax excl.)</td>
              <td class="price" >$<?php echo isset($getdata->totalammount)?$getdata->totalammount:0;?></td>
            </tr>
            <tr >
              <td>Total tax</td>
              <td class="price" id="total-tax">$0.00</td>
            </tr>
            <tr >
              <td > Total </td>
              <td class=" site-color" id="total-price">$<?php echo isset($getdata->totalammount)?$getdata->totalammount:0;?></td>
            </tr>
          </tbody>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
    <!--/rightSidebar--> 
    
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /.main-container -->
<div class="gap"> </div>
