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
                    <li> <a href="<?php echo URL.'frontend/checkout_1'; ?>">
                    <i class="fa fa-map-marker "></i>
                    <span> address</span>
                    </a> </li>
                    
                    <li> <a href="<?php echo URL.'frontend/checkout_2'; ?>">   <i class="fa fa fa-envelope  "></i>
                    <span> Billing </span></a></li>
                    
                    <li> <a href="<?php echo URL.'frontend/checkout_3'; ?>"><i class="fa fa-truck "> </i><span>Shipping</span> </a> </li>
                    
                 <li> <a href="<?php echo URL.'frontend/checkout_4'; ?>"><i class="fa fa-money  "> </i><span>Payment</span> </a>  </li>
                    
                    <li class="active"><a href="<?php echo URL.'frontend/checkout_5'; ?>"><i class="fa fa-check-square "> </i><span>Order</span></a>  </li>
                
                </ul><!--orderStep-->
        </div>
        
        
        <div class="w100 clearfix">
        
        
        	<div class="row userInfo">
                
                <div class="col-lg-12">
                    <h2 class="block-title-2"> Review Order </h2>
                </div>
                
            
            
            	<div class="col-xs-12 col-sm-12">
                      <div class="cartContent w100 checkoutReview ">
                        <table class="cartTable table-responsive"   style="width:100%">
                          <tbody>
                            <tr class="CartProduct cartTableHeader">
                              <th style="width:15%"> Product Name</th>
                             <th style="width:15%"> Product Image</th>
                              <th style="width:10%" >Unit Price</th>
                              <th class="hidden-xs" style="width:5%">QNT</th>
                              <th class="hidden-xs" style="width:10%" >Discount</th>
                              <th style="width:15%">Total</th>
                            </tr>
							<?php foreach($bookrecipe as $row):?>
                            <tr class="CartProduct">
                              <td >
                                  <h4> <a href="product-details.html"><?php echo $row->recipe_name;?> </a> </h4>
 
                                </td>
							  <td  class="CartProductThumb"><div> <img src="<?php echo URL .'public/uploads/' .$row->recipe_image; ?>"  alt="Recipe Image" class="img-responsive"/> </div></td>
                              
                              <td class="delete"><div class="price ">$<?php echo $row->recipe_price;?> </div></td>
                              <td class="hidden-xs">1</td>
                              <td class="hidden-xs">0</td>
                              <td class="price">$<?php echo $row->recipe_price;?></td>
                            </tr>
							<?php
							endforeach;
							?>
                            
                          </tbody>
                        </table>
                      </div>
                      <!--cartContent-->
                      
                      <div class="w100 costDetails">
                        <div class="table-block" id="order-detail-content">
                          <table class="std table" id="cart-summary">
                            <tr >
                              <td>Total products</td>
                              <td  class="price"><?php echo isset($getdata->totalproduct)?$getdata->totalproduct:0;?> </td>
                            </tr>
                            <tr style="" >
                              <td>Shipping</td>
                              <td  class="price"><span class="success">Free shipping!</span></td>
                            </tr>
                            <tr class="cart-total-price ">
                              <td>Total (tax excl.)</td>
                              <td  class="price">$<?php echo isset($getdata->totalammount)?$getdata->totalammount:0;?> </td>
                            </tr>
                            <tr >
                              <td>Total tax</td>
                              <td id="total-tax" class="price">0.00</td>
                            </tr>
                            <tr >
                              <td > Total </td>
                              <td id="total-price" class="price">$<?php echo isset($getdata->totalammount)?$getdata->totalammount:0;?> </td>
                            </tr>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--/costDetails-->
                      

          
          <!--/row-->
  
          
        </div>
                
                
                </div>
                
          
            
            
            
            </div><!--/row end-->
            
            
            
            <div class="cartFooter w100">
            <div class="box-footer">
               <div class="pull-right">
                <a href="<?php echo URL.'frontend/my_orders'; ?>" class="btn btn-primary btn-small " > 
					Confirm Order &nbsp; <i class="fa fa-check"></i>
                 </a>
              </div>
               
               
              
            </div>
          </div>
          <!--/ cartFooter --> 
    
        	
       
     
        
        
        
        
        
        </div>
          
          
          
                
        </div>
      </div>
      <!--/row end--> 
      
  
    <div class="col-lg-3 col-md-3 col-sm-12 rightSidebar"> 
      
  <div class="w100 cartMiniTable">
                            <table id="cart-summary" class="std table">
                                    <tbody><tr >
                                      <td>Total products</td>
                                      <td class="price" >$216.51</td>
                                    </tr>
                                    <tr  style="">
                                      <td>Shipping</td>
                                      <td class="price" ><span class="success">Free shipping!</span></td>
                                    </tr>
                                    <tr class="cart-total-price ">
                                      <td>Total (tax excl.)</td>
                                      <td class="price" >$216.51</td>
                                    </tr>
                                    <tr >
                                      <td>Total tax</td>
                                      <td class="price" id="total-tax">$0.00</td>
                                    </tr>
                                    <tr >
                                      <td > Total </td>
                                      <td class=" site-color" id="total-price">$216.51</td>
                                    </tr>
                                    
                                                                         
                                    </tbody><tbody>
                                    </tbody>
                                  </table> 
                                  </div>
      
    </div>
    <!--/rightSidebar--> 
    
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /wrapper --> 
<div class="gap"> </div>