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
  <!--/.row-->
  
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-7">
      <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Checkout</span></h1>
    </div>
<!--    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
      <h4 class="caps"><a href="<?php //echo URL.'frontend/category'; ?>"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
    </div>-->
  </div> <!--/.row-->
  
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
                <h2 class="block-title-2"> To add a new address, please fill out the form below. </h2>
              </div>
              
              <form action="<?php echo URL.'frontend/checkout_2'?>" method="post">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group required">
                    <label for="InputName">First Name <sup>*</sup> </label>
                    <input required type="text" class="form-control" id="InputName" name="InputName" placeholder="First Name">
                  </div>
                  <div class="form-group required">
                    <label for="InputLastName">Last Name <sup>*</sup> </label>
                    <input required type="text" class="form-control" id="InputLastName" name="InputLastName" placeholder="Last Name">
                  </div>
                  <div class="form-group">
                    <label for="InputEmail">Email </label>
                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="InputCompany">Company </label>
                    <input type="text" class="form-control" id="InputCompany" name="InputCompany" placeholder="Company">
                  </div>
                  <div class="form-group required">
                    <label for="InputAddress">Address <sup>*</sup> </label>
                    <input required type="text" class="form-control" id="InputAddress" name="InputAddress" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="InputAddress2">Address (Line 2) </label>
                    <input type="text" class="form-control" id="InputAddress2" name="InputAddress2" placeholder="Address">
                  </div>
                  <div class="form-group required">
                    <label for="InputCity">City <sup>*</sup> </label>
                    <input required type="text" class="form-control" id="InputCity" name="InputCity" placeholder="City">
                  </div>
                  <div class="form-group required">
                    <label for="InputState">State <sup>*</sup> </label>
              
                      <select class="form-control" required aria-required="true" id="InputState" name="InputState">
                      <option value="">Choose</option>
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Arkansas">Arkansas</option>
                    <option value="California">California</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Connecticut">Connecticut</option>
                    <option value="Delaware">Delaware</option>
                    <option value="District of Columbia">District of Columbia</option>
                    <option value="Florida">Florida</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Idaho">Idaho</option>
                    <option value="Illinois">Illinois</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Iowa">Iowa</option>
                    <option value="Kansas">Kansas</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Louisiana">Louisiana</option>
                    <option value="Maine">Maine</option>
                    <option value="Maryland">Maryland</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Michigan">Michigan</option>
                    <option value="Minnesota">Minnesota</option>
                    <option value="Mississippi">Mississippi</option>
                    <option value="Missouri">Missouri</option>
                    <option value="Montana">Montana</option>
                    <option value="Nebraska">Nebraska</option>
                    <option value="Nevada">Nevada</option>
                    <option value="New Hampshire">New Hampshire</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="New Mexico">New Mexico</option>
                    <option value="New York">New York</option>
                    <option value="North Carolina">North Carolina</option>
                    <option value="North Dakota">North Dakota</option>
                    <option value="Ohio">Ohio</option>
                    <option value="Oklahoma">Oklahoma</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Pennsylvania">Pennsylvania</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Rhode Island">Rhode Island</option>
                    <option value="South Carolina">South Carolina</option>
                    <option value="South Dakota">South Dakota</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="US Virgin Islands">US Virgin Islands</option>
                    <option value="Utah">Utah</option>
                    <option value="Vermont">Vermont</option>
                    <option value="Virginia">Virginia</option>
                    <option value="Washington">Washington</option>
                    <option value="West Virginia">West Virginia</option>
                    <option value="Wisconsin">Wisconsin</option>
                    <option value="Wyoming">Wyoming</option>
                  </select>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group required">
                    <label for="InputZip">Zip / Postal Code <sup>*</sup> </label>
                    <input required type="text" class="form-control" id="InputZip" name="InputZip" placeholder="Zip / Postal Code">
                  </div>
                  <div class="form-group required">
                    <label for="InputCountry">Country <sup>*</sup> </label>
                      <select class="form-control" required aria-required="true" id="InputCountry" name="InputCountry">
                      <option value="">Choose</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="Greece">Greece</option>
                    <option value="HongKong">HongKong</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Ivory Coast">Ivory Coast</option>
                    <option value="Japan">Japan</option>
                    <option value="Luxemburg">Luxemburg</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Norway">Norway</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Romania">Romania</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Spain">Spain</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Togo">Togo</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option selected="selected" value="United States">United States</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="InputAdditionalInformation">Additional information</label>
                    <textarea rows="3" cols="26" name="InputAdditionalInformation" class="form-control" id="InputAdditionalInformation"></textarea>
                  </div>
                  <div class="form-group required">
                    <label for="InputMobile">Mobile phone <sup>*</sup></label>
                    <input  required type="tel"  name="InputMobile" class="form-control" id="InputMobile">
                  </div>
                  <div class="form-group required">
                    <label for="addressAlias">Please assign an address title for future reference. <sup>*</sup></label>
                    <input required type="text" value="My address" name="addressAlias" class="form-control" id="addressAlias">
                  </div>
				    <div class="form-group required">
                    <label for="addressAlias">Please assign an address title for future reference. <sup>*</sup></label>
                    <input required type="text" value="My address" name="addressAlias" class="form-control" id="addressAlias">
					<input type="submit" value="Shipping address" class="btn btn-primary btn-small "/>
                  </div>
                </div>
              </form>
            </div>
            <!--/row end--> 
            
          </div>
          
          <!--/ cartFooter --> 
          
        </div>
      </div>
      <!--/row end--> 
      
    </div>
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
      <!--  /cartMiniTable--> 
      
    </div>
    <!--/rightSidebar--> 
    
  </div> <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /.main-container-->
<div class="gap"> </div>