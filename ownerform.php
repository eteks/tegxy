   <form id="ownerform" method="post"> <div id="somedialog1" class="dialog">
        <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <div class="morph-shape" data-morph-open="M0,33.699V0c0,0,13.458,0,40.125,0C66.793,0,80,0,80,0v33.974v0.103V60c0,0-13.333,0-40,0c-26.667,0-40,0-40,0V33.699" data-morph-close="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
                            <path d="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699"></path>
                    </svg>
                </div>
                
                 <div class="dialog-inner">
                    <div>
                       
                        <img src="images/clos.png" class="img-responsive" data-dialog-close style="width: 19px; float: right; cursor: pointer"/>
                    </div>
                    <h1>Owner Profile</h1>
                    
                    <div class="mCustomScrollbar content fluid light" data-mcs-theme="inset-2-dark">
                        <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="ownername" name="ownername" value="<?php echo $profiledetails[0]['RGT_OwnerName'];?>" />
                                    <label class="input__label input__label--madoka" for="ownername">
                                            <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                            </svg>
                                            <span class="input__label-content input__label-content--madoka">Owner Name</span>
                                    </label>
                                </span>
                        </div>
                        
                        <br>
                        <br>
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="designation" name="designation" value="<?php echo $profiledetails[0]['RGT_OwnDesign'];?>" />
                                <label class="input__label input__label--madoka" for="designation">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Designation</span>
                                </label>
                            </span>
                        </div>
                        
                        <br>
                        <br>
                       <div class="col-sm-12 input input--madoka">
                                <span><div class="col-sm-6 controls input-append date form_date" data-date=""  data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                <input size="16" type="text" id="dob" name="dob" value="<?php echo dateformate($profiledetails[0]['RGT_OwnDOB']); ?>"  readonly><span class="add-on"><i class="icon-remove"></i></span><span class="add-on"><i class="icon-th"></i></span>
                                </div>Date Of Birth
                                </span>
                        
                            </div>
                       
                        <br>
                        <br>
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select   class="input__field input__field--madoka sp1" id="gender" name="gender">
                                        <option value="">--Select--</option>
                                        <option value="1" <?php if($profiledetails[0]['RGT_OwnGender']==1){?>selected<?php }?>>Male</option>
                                        <option value="2" <?php if($profiledetails[0]['RGT_OwnGender']==2){?>selected<?php }?>>Female</option>
                                </select>
                                <label class="input__label--madoka" for="gender">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                <span id="g30" class="sp"><?php if($profiledetails[0]['RGT_OwnGender']!=''){?>Select Gender<?php }?></span>
                                </label>
                            </span>
                        </div>
                        
                        <br>
                        <br>
                        
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="ownaddr" name="ownaddr" value="<?php echo $profiledetails[0]['RGT_OwnAddress'];?>" />
                                <label class="input__label input__label--madoka" for="ownaddr">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Address</span>
                                </label>
                            </span>
                        </div>
                        
                        <br>
                        <br>
                        
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select   class="input__field input__field--madoka" id="ownselcountry" name="ownselcountry">
                                        <option value="">--Select--</option>
                                        <?php $selectcountry=$database->query("call  pro_gcountry(1)")->fetchAll();
                                         foreach($selectcountry as $fetchcountry)
                                        {?>
                                        <option  value="<?php echo $fetchcountry[0]; ?>" <?php if($profiledetails[0]['RGT_OwnCountry']==$fetchcountry[0]){?>selected=selected<?php }?> ><?php echo $fetchcountry[1]; ?></option><?php 
                                        }?>
                                </select>

                                <label class="input__label--madoka" for="ownselcountry">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="g31" class="sp"><?php if($profiledetails[0]['RGT_OwnCountry']!=''){?>Select Country<?php }?></span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select   class="input__field input__field--madoka" id="ownselstate" name="ownselstate">
                                       <option value="">--Select--</option>
                                        <?php
                                        $selectstate=$database->query("call  pro_gstate('".$profiledetails[0]['RGT_OwnCountry']."',1)")->fetchAll();
                                       foreach($selectstate as $fetchstate)
                                    {?>
                                    <option  value="<?php echo $fetchstate[0]; ?>" <?php if($profiledetails[0]['RGT_OwnState']==$fetchstate[0]){?>selected=selected<?php }?> ><?php echo $fetchstate[1]; ?></option><?php 
                                    }?>
                                </select>
                                <label class="input__label--madoka" for="ownselstate">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="g32" class="sp"><?php if($profiledetails[0]['RGT_OwnState']!=''){?>Select State<?php }?></span>
                                </label>
                            </span>
                        </div>
                         
                            <br>
                            <br>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select   class="input__field input__field--madoka" id="ownselcity" name="ownselcity">
                                   <option value="">--Select--</option>
                                     <?php 
                                    $selectcity=$database->query("call  pro_gcity('".$profiledetails[0]['RGT_OwnCountry']."','".$profiledetails[0]['RGT_OwnState']."','',1)")->fetchAll();
                                    foreach($selectcity as $fetchcity)
                                    {?>
                                    <option  value="<?php echo $fetchcity[0]; ?>" <?php if($profiledetails[0]['RGT_OwnCity']==$fetchcity[0]){?>selected=selected<?php }?> ><?php echo $fetchcity[1]; ?></option><?php 
                                    }?>
                                </select>
                                <label class="input__label--madoka" for="ownselcity">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="g33" class="sp"><?php if($profiledetails[0]['RGT_OwnCity']!=''){?>Select City<?php }?></span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                           
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select   class="input__field input__field--madoka" id="oarea" name="oarea">
                                        <option value="">--Select--</option>
                                        <?php 
                                        $selectarea=$database->query("call  pro_area('".$profiledetails[0]['RGT_OwnCountry']."','".$profiledetails[0]['RGT_OwnState']."','".$profiledetails[0]['RGT_OwnCity']."',1)")->fetchAll();
                                        foreach($selectarea as $fetcharea)
                                        {?>
                                        <option  value="<?php echo $fetcharea[0]; ?>" <?php if($profiledetails[0]['RGT_OwnArea']==$fetcharea[0]){?>selected=selected<?php }?> ><?php echo $fetcharea[1]; ?></option><?php 
                                        }?>
                                </select>
                                <label class="input__label--madoka" for="oarea">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="g34" class="sp"><?php if($profiledetails[0]['RGT_OwnArea']!=''){?>Select Area<?php }?></span>
                                </label>
                            </span>
                        </div>
                            
                            <br>
                            <br>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select   class="input__field input__field--madoka" id="opincode" name="opincode">
                                    <option value="">--Select--</option>
                                  <?php 
                                  $selectpincode=$database->query("call pro_pincode('".$profiledetails[0]['RGT_OwnCountry']."','".$profiledetails[0]['RGT_OwnState']."','".$profiledetails[0]['RGT_OwnCity']."','".$profiledetails[0]['RGT_OwnArea']."',1)")->fetchAll();
                                  foreach($selectpincode as $fetchpincode)
                                  {?>
                                  <option  value="<?php echo $fetchpincode[0]; ?>" <?php if($profiledetails[0]['RGT_OwnPincode']==$fetchpincode[0]){?>selected=selected<?php }?> ><?php echo $fetchpincode[1]; ?></option><?php 
                                  }?>
                                </select>
                                <label class="input__label--madoka" for="opincode">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="g35" class="sp"><?php if($profiledetails[0]['RGT_OwnPincode']!=''){?>Select Pincode<?php }?></span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="ownphoneno"  name="ownphoneno" onkeyup="checkNumber(this);" value="<?php echo $profiledetails[0]['RGT_OwnMobile'];?>"/>
                                <label class="input__label input__label--madoka" for="ownphoneno">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Mobile Number</span>
                                </label>
                            </span>
                        </div>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="ownlandline" name="ownlandline" onkeyup="checkNumber(this);" value="<?php echo $profiledetails[0]['RGT_OwnLandline'];?>"  />
                                <label class="input__label input__label--madoka" for="ownlandline">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Land Line</span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                        
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="ownemail" name="ownemail" value="<?php echo $profiledetails[0]['RGT_OwnEmail'];?>" />
                                <label class="input__label input__label--madoka" for="ownemail" >
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Email</span>
                                </label>
                            </span>
                        </div>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="owneducate" name="owneducate" value="<?php echo $profiledetails[0]['RGT_OwnEducate'];?>" />
                                <label class="input__label input__label--madoka" for="owneducate">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Education Details</span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                        
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                            <input type="submit" class="action" id="ownerupdclk" data-dialog-close value="Update" />
                        </div>
                    </div>
                </div>
            </div>
    
</form>

