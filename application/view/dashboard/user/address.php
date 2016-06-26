<div id="main-content">
			
<div class="container "> 
<div class="row page-header" style="background-color:#FFFFFF;">
<div class="col-lg-9 col-md-9 col-sm-7" >
<div class="clearfix">
			<h3 class="content-title pull-left" > To add a new address, please fill out the form below.</h3>
									</div>
        </div>
</div>
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
                           <p id="error" class="error alert-danger">
			</p>
        	
        	<div class="row userInfo">
                  
                
                <form method="post" action="<?php echo URL.'dashboard/userprofile/'.$userid.''; ?>" id="userprofileform">
           
            	<div class="col-xs-12 col-sm-6">

    
                    
                    	<div class="form-group required">
                            <label for="InputName">First Name <sup>*</sup> </label>
        <input required type="text" class="form-control" id="InputName" name="userfname" value="<?php echo $userinfo[0]->first_name;?>" 
							placeholder="First Name">
                          </div>
                          
                          	<div class="form-group required">
                            <label for="InputLastName">Last Name <sup>*</sup> </label>
                            <input required type="text" class="form-control" id="InputLastName" name="userlname" value="<?php echo $userinfo[0]->last_name;?>"
							placeholder="Last Name">
                          </div>
                          
                           <div class="form-group required">
                            <label for="State">State <sup>*</sup>   </label><br />
                            <select class="form-control" required aria-required="true" id="InputState" name="userState">
                      <option value="">Choose</option>
                    <option value="Alabama" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Alabama'?'selected':''):''; ?>>Alabama</option>
                    <option value="Alaska" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Alaska'?'selected':''):''; ?>>Alaska</option>
                    <option value="Arizona" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Arizona'?'selected':''):''; ?>>Arizona</option>
                    <option value="Arkansas" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Arkansas'?'selected':''):''; ?>>Arkansas</option>
                    <option value="California" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='California'?'selected':''):''; ?>>California</option>
                    <option value="Colorado" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Colorado'?'selected':''):''; ?>>Colorado</option>
                    <option value="Connecticut" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Connecticut'?'selected':''):''; ?>>Connecticut</option>
                    <option value="Delaware" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Delaware'?'selected':''):''; ?>>Delaware</option>
                    <option value="District of Columbia" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='District of Columbia'?'selected':''):''; ?>>District of Columbia</option>
                    <option value="Florida" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Florida'?'selected':''):''; ?>>Florida</option>
                    <option value="Georgia" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Georgia'?'selected':''):''; ?>>Georgia</option>
                    <option value="Hawaii" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Hawaii'?'selected':''):''; ?>>Hawaii</option>
                    <option value="Idaho" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Idaho'?'selected':''):''; ?>>Idaho</option>
                    <option value="Illinois" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Illinois'?'selected':''):''; ?>>Illinois</option>
                    <option value="Indiana" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Indiana'?'selected':''):''; ?>>Indiana</option>
                    <option value="Iowa" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Iowa'?'selected':''):''; ?>>Iowa</option>
                    <option value="Kansas" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Kansas'?'selected':''):''; ?>>Kansas</option>
                    <option value="Kentucky" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Kentucky'?'selected':''):''; ?>>Kentucky</option>
                    <option value="Louisiana" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Louisiana'?'selected':''):''; ?>>Louisiana</option>
                    <option value="Maine" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Maine'?'selected':''):''; ?>>Maine</option>
                    <option value="Maryland" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Maryland'?'selected':''):''; ?>>Maryland</option>
                    <option value="Massachusetts" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Massachusetts'?'selected':''):''; ?>>Massachusetts</option>
                    <option value="Michigan" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Michigan'?'selected':''):''; ?>>Michigan</option>
                    <option value="Minnesota" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Minnesota'?'selected':''):''; ?>>Minnesota</option>
                    <option value="Mississippi" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Mississippi'?'selected':''):''; ?>>Mississippi</option>
                    <option value="Missouri" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Missouri'?'selected':''):''; ?>>Missouri</option>
                    <option value="Montana" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Montana'?'selected':''):''; ?>>Montana</option>
                    <option value="Nebraska" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Nebraska'?'selected':''):''; ?>>Nebraska</option>
                    <option value="Nevada" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Nevada'?'selected':''):''; ?>>Nevada</option>
                    <option value="New Hampshire" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='New Hampshire'?'selected':''):''; ?>>New Hampshire</option>
                    <option value="New Jersey" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='New Jersey'?'selected':''):''; ?>>New Jersey</option>
                    <option value="New Mexico" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='New Mexico'?'selected':''):''; ?>>New Mexico</option>
                    <option value="New York" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='New York'?'selected':''):''; ?>>New York</option>
                    <option value="North Carolina" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='North Carolina'?'selected':''):''; ?>>North Carolina</option>
                    <option value="North Dakota" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='North Dakota'?'selected':''):''; ?>>North Dakota</option>
                    <option value="Ohio" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Ohio'?'selected':''):''; ?>>Ohio</option>
                    <option value="Oklahoma" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Oklahoma'?'selected':''):''; ?>>Oklahoma</option>
                    <option value="Oregon" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Oregon'?'selected':''):''; ?>>Oregon</option>
                    <option value="Pennsylvania" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Pennsylvania'?'selected':''):''; ?>>Pennsylvania</option>
                    <option value="Puerto Rico" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Puerto Rico'?'selected':''):''; ?>>Puerto Rico</option>
                    <option value="Rhode Island" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Rhode Island'?'selected':''):''; ?>>Rhode Island</option>
                    <option value="South Carolina" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='South Carolina'?'selected':''):''; ?>>South Carolina</option>
                    <option value="South Dakota" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='South Dakota'?'selected':''):''; ?>>South Dakota</option>
                    <option value="Tennessee" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Tennessee'?'selected':''):''; ?>>Tennessee</option>
                    <option value="Texas" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Texas'?'selected':''):''; ?>>Texas</option>
                    <option value="US Virgin Islands" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='US Virgin Islands'?'selected':''):''; ?>>US Virgin Islands</option>
                    <option value="Utah" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Utah'?'selected':''):''; ?>>Utah</option>
                    <option value="Vermont" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Vermont'?'selected':''):''; ?>>Vermont</option>
                    <option value="Virginia" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Virginia'?'selected':''):''; ?>>Virginia</option>
                    <option value="Washington" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Washington'?'selected':''):''; ?>>Washington</option>
                    <option value="West Virginia" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='West Virginia'?'selected':''):''; ?>>West Virginia</option>
                    <option value="Wisconsin" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Wisconsin'?'selected':''):''; ?>>Wisconsin</option>
                    <option value="Wyoming" <?php echo isset($userinfo[0]->state)?($userinfo[0]->state=='Wyoming'?'selected':''):''; ?>>Wyoming</option>
                  </select>
                          </div>
                          
                          
                                   
                          <div class="form-group required">
                            <label for="InputZip">Zip / Postal Code <sup>*</sup>  </label>
                            <input required type="text" class="form-control" id="InputZip" name="userzip" placeholder="Zip / Postal Code" value="<?php echo $userinfo[0]->zip;?>">
                          </div>
                          
                          
                            <div class="form-group required">
                            <label for="InputCountry">Country <sup>*</sup>  </label>
                            <select class="form-control" required aria-required="true" id="InputCountry" name="usercountry" >
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
                </div>
                
                
                <div class="col-xs-12 col-sm-6">
                
                <div class="form-group required">
                            <label for="InputAddress">Address <sup>*</sup>   </label>
                            <input required type="text" class="form-control" id="InputAddress" placeholder="Address" value="<?php echo $userinfo[0]->address;?>" name="useraddress">
                          </div>
                          <div class="form-group">
                            <label for="InputAddress2">Mobile*    </label>
                            <input type="text" class="form-control" id="InputAddress2" name="usermobile" placeholder="Address" value="<?php echo $userinfo[0]->phone;?>">
                          </div>
                          
                           <div class="form-group required">
                            <label for="InputCity">City <sup>*</sup>   </label>
                            <input required type="text" class="form-control" id="InputCity" name="usercity" placeholder="City" value="<?php echo $userinfo[0]->city;?>">
                          </div>
                
                </div>
                
                <div class="col-lg-12 col-xs-12 clearfix">
                    <button type="submit" class="btn   btn-primary"><i class="fa fa-map-marker"></i> Save Address </button>
                </div>
                
                </form>
                
            
            </div><!--/row end-->
        	
       
        </div>
         
         
         
      </div><!--/row-->
      
      

  <div style="clear:both"></div>
</div>
<!-- /wrapper --> 
</div>
<div class="gap"> </div>
