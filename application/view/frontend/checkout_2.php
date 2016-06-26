<div class="container main-container headerOffset">
  <div class="row">
    <div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li> <a href="index.html">Home</a> </li>
        <li> <a href="cart.html">Cart</a> </li>
        <li class="active"> Checkout</li>
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
                <h2 class="block-title-2"> To add a billing address, please fill out the form below. </h2>
              </div>
			  <form action="<?php echo URL.'frontend/checkout_3'?>" method="post">
              <div class="col-xs-12 col-sm-12">
                <label class="checkbox-inline" for="checkboxes-0">
                  <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
                  My delivery and billing addresses are the same. </label>
                <hr>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="form-group required">
                  <label for="InputName">First Name <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputName" name="InputName" value="<?php echo isset($checkoutonedata["InputName"])?$checkoutonedata["InputName"]:'';?>" placeholder="First Name">
                </div>
                <div class="form-group required">
                  <label for="InputLastName">Last Name <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputLastName" name="InputLastName" value="<?php echo isset($checkoutonedata["InputLastName"])?$checkoutonedata["InputLastName"]:'';?>" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="InputEmail">Email </label>
                  <input type="text" class="form-control" id="InputEmail" name="InputEmail" value="<?php echo isset($checkoutonedata["InputEmail"])?$checkoutonedata["InputEmail"]:'';?>" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="InputCompany">Company </label>
                  <input type="text" class="form-control" id="InputCompany"  name="InputCompany" value="<?php echo isset($checkoutonedata["InputCompany"])?$checkoutonedata["InputCompany"]:'';?>" placeholder="Company">
                </div>
                <div class="form-group required">
                  <label for="InputAddress">Address <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputAddress" name="InputAddress" value="<?php echo isset($checkoutonedata["InputAddress"])?$checkoutonedata["InputAddress"]:'';?>" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="InputAddress2">Address (Line 2) </label>
                  <input type="text" class="form-control" id="InputAddress2" name="InputAddress2" value="<?php echo isset($checkoutonedata["InputAddress2"])?$checkoutonedata["InputAddress2"]:'';?>" placeholder="Address">
                </div>
                <div class="form-group required">
                  <label for="InputCity">City <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputCity" value="<?php echo isset($checkoutonedata["InputCity"])?$checkoutonedata["InputCity"]:'';?>" name="InputCity" placeholder="City">
                </div>
                <div class="form-group required">
                  <label for="InputState">State <sup>*</sup> </label>
                  <select class="form-control" required aria-required="true" id="InputState" name="InputState">
                      <option value="">Choose</option>
                    <option value="Alabama" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Alabama'?'selected':''):''; ?>>Alabama</option>
                    <option value="Alaska" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Alaska'?'selected':''):''; ?>>Alaska</option>
                    <option value="Arizona" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Arizona'?'selected':''):''; ?>>Arizona</option>
                    <option value="Arkansas" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Arkansas'?'selected':''):''; ?>>Arkansas</option>
                    <option value="California" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='California'?'selected':''):''; ?>>California</option>
                    <option value="Colorado" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Colorado'?'selected':''):''; ?>>Colorado</option>
                    <option value="Connecticut" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Connecticut'?'selected':''):''; ?>>Connecticut</option>
                    <option value="Delaware" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Delaware'?'selected':''):''; ?>>Delaware</option>
                    <option value="District of Columbia" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='District of Columbia'?'selected':''):''; ?>>District of Columbia</option>
                    <option value="Florida" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Florida'?'selected':''):''; ?>>Florida</option>
                    <option value="Georgia" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Georgia'?'selected':''):''; ?>>Georgia</option>
                    <option value="Hawaii" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Hawaii'?'selected':''):''; ?>>Hawaii</option>
                    <option value="Idaho" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Idaho'?'selected':''):''; ?>>Idaho</option>
                    <option value="Illinois" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Illinois'?'selected':''):''; ?>>Illinois</option>
                    <option value="Indiana" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Indiana'?'selected':''):''; ?>>Indiana</option>
                    <option value="Iowa" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Iowa'?'selected':''):''; ?>>Iowa</option>
                    <option value="Kansas" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Kansas'?'selected':''):''; ?>>Kansas</option>
                    <option value="Kentucky" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Kentucky'?'selected':''):''; ?>>Kentucky</option>
                    <option value="Louisiana" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Louisiana'?'selected':''):''; ?>>Louisiana</option>
                    <option value="Maine" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Maine'?'selected':''):''; ?>>Maine</option>
                    <option value="Maryland" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Maryland'?'selected':''):''; ?>>Maryland</option>
                    <option value="Massachusetts" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Massachusetts'?'selected':''):''; ?>>Massachusetts</option>
                    <option value="Michigan" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Michigan'?'selected':''):''; ?>>Michigan</option>
                    <option value="Minnesota" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Minnesota'?'selected':''):''; ?>>Minnesota</option>
                    <option value="Mississippi" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Mississippi'?'selected':''):''; ?>>Mississippi</option>
                    <option value="Missouri" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Missouri'?'selected':''):''; ?>>Missouri</option>
                    <option value="Montana" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Montana'?'selected':''):''; ?>>Montana</option>
                    <option value="Nebraska" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Nebraska'?'selected':''):''; ?>>Nebraska</option>
                    <option value="Nevada" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Nevada'?'selected':''):''; ?>>Nevada</option>
                    <option value="New Hampshire" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='New Hampshire'?'selected':''):''; ?>>New Hampshire</option>
                    <option value="New Jersey" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='New Jersey'?'selected':''):''; ?>>New Jersey</option>
                    <option value="New Mexico" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='New Mexico'?'selected':''):''; ?>>New Mexico</option>
                    <option value="New York" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='New York'?'selected':''):''; ?>>New York</option>
                    <option value="North Carolina" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='North Carolina'?'selected':''):''; ?>>North Carolina</option>
                    <option value="North Dakota" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='North Dakota'?'selected':''):''; ?>>North Dakota</option>
                    <option value="Ohio" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Ohio'?'selected':''):''; ?>>Ohio</option>
                    <option value="Oklahoma" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Oklahoma'?'selected':''):''; ?>>Oklahoma</option>
                    <option value="Oregon" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Oregon'?'selected':''):''; ?>>Oregon</option>
                    <option value="Pennsylvania" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Pennsylvania'?'selected':''):''; ?>>Pennsylvania</option>
                    <option value="Puerto Rico" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Puerto Rico'?'selected':''):''; ?>>Puerto Rico</option>
                    <option value="Rhode Island" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Rhode Island'?'selected':''):''; ?>>Rhode Island</option>
                    <option value="South Carolina" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='South Carolina'?'selected':''):''; ?>>South Carolina</option>
                    <option value="South Dakota" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='South Dakota'?'selected':''):''; ?>>South Dakota</option>
                    <option value="Tennessee" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Tennessee'?'selected':''):''; ?>>Tennessee</option>
                    <option value="Texas" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Texas'?'selected':''):''; ?>>Texas</option>
                    <option value="US Virgin Islands" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='US Virgin Islands'?'selected':''):''; ?>>US Virgin Islands</option>
                    <option value="Utah" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Utah'?'selected':''):''; ?>>Utah</option>
                    <option value="Vermont" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Vermont'?'selected':''):''; ?>>Vermont</option>
                    <option value="Virginia" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Virginia'?'selected':''):''; ?>>Virginia</option>
                    <option value="Washington" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Washington'?'selected':''):''; ?>>Washington</option>
                    <option value="West Virginia" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='West Virginia'?'selected':''):''; ?>>West Virginia</option>
                    <option value="Wisconsin" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Wisconsin'?'selected':''):''; ?>>Wisconsin</option>
                    <option value="Wyoming" <?php echo isset($checkoutonedata["InputState"])?($checkoutonedata["InputState"]=='Wyoming'?'selected':''):''; ?>>Wyoming</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="form-group required">
                  <label for="InputZip">Zip / Postal Code <sup>*</sup> </label>
                  <input required type="text" class="form-control" id="InputZip" name="InputZip" placeholder="Zip / Postal Code" value="<?php echo isset($checkoutonedata["InputZip"])?$checkoutonedata["InputZip"]:'';?>">
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
                  <textarea rows="3" cols="26" name="InputAdditionalInformation" class="form-control" id="other">
				  <?php echo isset($checkoutonedata["InputAdditionalInformation"])?$checkoutonedata["InputAdditionalInformation"]:'';?>
				  
				  </textarea>
                </div>
                <div class="form-group required">
                  <label for="InputMobile">Mobile phone <sup>*</sup></label>
                  <input  required type="tel"  name="InputMobile" class="form-control" id="InputMobile" value="<?php echo isset($checkoutonedata["InputMobile"])?$checkoutonedata["InputMobile"]:'';?>">
                </div>
                <div class="form-group required">
                  <label for="addressAlias">Please assign an address title for future reference. <sup>*</sup></label>
                  <input required type="text" value="My address" name="addressAlias" class="form-control" id="addressAlias" value="<?php echo isset($checkoutonedata["addressAlias"])?$checkoutonedata["addressAlias"]:'';?>">
                </div>
              </div>
            </div>
            <!--/row end--> 
            <input type="submit" value="Shipping method" class="btn btn-primary btn-small "/>
			</form>
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
    
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>
<!-- /main-container-->

<div class="gap"> </div>