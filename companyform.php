<form id="compyform" name="compyform" method="post">
    <div id="somedialog" class="dialog">
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
                    <h1>PROFILE</h1>
                    
                    <div class="mCustomScrollbar content fluid light" data-mcs-theme="inset-2-dark">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off"   name="companyname"  id="companyname" value="<?php echo $profiledetails[0]['RGT_CompName'];?>" />
                                    <label class="input__label input__label--madoka" for="companyname">
                                            <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                            </svg>
                                            <span class="input__label-content input__label-content--madoka"  >Company name</span>
                                    </label>
                                </span>
                            </div>
                            <br>
                            <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off"   name="groupname" id="groupname" value="<?php echo $profiledetails[0]['RGT_GroupName'];?>" />
                                    <label class="input__label input__label--madoka" for="groupname">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka" >Group name</span>
                                    </label>
                                </span>
                            </div>
                            
                        <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select   class="input__field input__field--madoka"  name="industry" id="industry">
                                           <option value="">--Select Industry--</option>
                                            <?php $selectsector=$database->query("call pro_industry(1,'')")->fetchAll();
                                            foreach($selectsector as $fetchsector)
                                            {?>
                                            <option  value="<?php echo $fetchsector[0]; ?>" <?php if($profiledetails[0]['RGT_Sector']==$fetchsector[0]){?>selected="selected"<?php }?>><?php echo $fetchsector[1]; ?></option><?php 
                                            }?>
                                    </select>
                                    <label class="input__label--madoka" for="industry">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i33" class="sp"><?php if($profiledetails[0]['RGT_Sector']!=''){ echo 'Select Industry'; } ?></span>
                                    </label>
                                </span>
                            </div>
                        <br>
                        <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off"  name="email"  id="email" value="<?php echo $profiledetails[0]['RGT_Email'];?>" />
                                    <label class="input__label input__label--madoka" for="email">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Email</span>
                                    </label>
                                </span>
                            </div>
                        <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off"  name="requestno"  id="requestno" value="<?php echo $profiledetails[0]['RGT_RegNo'];?>" />
                                    <label class="input__label input__label--madoka" for="requestno">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Corporate Identification No(CIN) </span>
                                    </label>
                                </span>
                            </div>
                        <br>
                        <br>
                        
                            <div class="col-sm-12 input input--madoka">
                                <span><div class="col-sm-6 controls input-append date form_date" data-date=""  data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                <input size="16" type="text" name="yearofest" id="yearofest" value="<?php echo dateformate($profiledetails[0]['RGT_YrofEstablish']);?>" readonly /><span class="add-on"><i class="icon-remove"></i></span><span class="add-on"><i class="icon-th"></i></span>
                                </div>Year of Establishment
                                </span>
                        
                            </div>
                        
                            <br>
                            <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select   class="input__field input__field--madoka"  name="typeofcomp" id="typeofcomp" >
                                    <option value="">--Select Company Type--</option>
                                    <option value="1" <?php if($profiledetails[0]['RGT_CompType']=='1'){?>selected="selected"<?php }?>>Cooperative Societies</option>
                                    <option value="2" <?php if($profiledetails[0]['RGT_CompType']=='2'){?>selected="selected"<?php }?>>Government Based</option>
                                    <option value="3" <?php if($profiledetails[0]['RGT_CompType']=='3'){?>selected="selected"<?php }?>>Joint Stock Companies</option>
                                    <option value="4" <?php if($profiledetails[0]['RGT_CompType']=='4'){?>selected="selected"<?php }?>>Partnership</option>
                                    <option value="5" <?php if($profiledetails[0]['RGT_CompType']=='5'){?>selected="selected"<?php }?>>Private Limited</option>
                                    <option value="6" <?php if($profiledetails[0]['RGT_CompType']=='6'){?>selected="selected"<?php }?>>Sole Proprietorship</option>    
                                    </select>
                                    <label class="input__label input__label--madoka" for="typeofcomp">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg> 
                                        <span id="i55" class="sp"><?php if($profiledetails[0]['RGT_CompType']!=''){ echo 'Select Company Type'; } ?></span>
                                       </label>
                                </span>
                            </div>
                            
                            <br>
                            <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off"  name="empstr"  id="empstr" value="<?php echo $profiledetails[0]['RGT_EmpStrength'];?>" />
                                    <label class="input__label input__label--madoka" for="empstr">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Employment Strength</span>
                                    </label>
                                </span>
                            </div>
                        
                            <br>
                            <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off"  name="address1"  id="address1" value="<?php echo $profiledetails[0]['RGT_Address1'];?>" />
                                    <label class="input__label input__label--madoka" for="address1">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Address Line 1</span>
                                    </label>
                                </span>
                            </div>
                            <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off"  name="address2"  id="address2" value="<?php echo $profiledetails[0]['RGT_Address2'];?>"  />
                                    <label class="input__label input__label--madoka" for="address2">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Address Line 2</span>
                                    </label>
                                </span>
                            </div>
                                                   
                            <br>
                            <br>
                            
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select   class="input__field input__field--madoka"  name="selcountry" id="selcountry" >
                                        <option value="">--Select--</option>
                                        <?php $selectcountry=$database->query("call  pro_gcountry(1)")->fetchAll();
                                         foreach($selectcountry as $fetchcountry)
                                        {?>
                                        <option  value="<?php echo $fetchcountry[0]; ?>" <?php if($profiledetails[0]['RGT_Country']==$fetchcountry[0]){?>selected=selected<?php }?> ><?php echo $fetchcountry[1]; ?></option><?php 
                                        }?>
                                    </select>
                                    <label class="input__label input__label--madoka" for="selcountry">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i56" class="sp"><?php if($profiledetails[0]['RGT_Country']!=''){ echo 'Select Country'; } ?></span>
                                    </label>
                                </span>
                            </div>
                            <br>
                        <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select   class="input__field input__field--madoka" name="selstate" id="selstate" >
                                        <option value="">--Select--</option>
                                        <?php
                                        $selectstate=$database->query("call  pro_gstate('".$profiledetails[0]['RGT_Country']."',1)")->fetchAll();
                                       foreach($selectstate as $fetchstate)
                                    {?>
                                    <option  value="<?php echo $fetchstate[0]; ?>" <?php if($profiledetails[0]['RGT_State']==$fetchstate[0]){?>selected=selected<?php }?> ><?php echo $fetchstate[1]; ?></option><?php 
                                    }?>
                                    </select>
                                    <label class="input__label input__label--madoka" for="selstate">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i57" class="sp"><?php if($profiledetails[0]['RGT_State']!=''){ echo 'Select State'; } ?></span>
                                     </label>
                                </span>
                            </div>
                      
                            <br>
                            <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select   class="input__field input__field--madoka" name="selcity" id="selcity">
                                        <option value="">--Select--</option>
                                     <?php 
                                    $selectcity=$database->query("call  pro_gcity('".$profiledetails[0]['RGT_Country']."','".$profiledetails[0]['RGT_State']."','',1)")->fetchAll();
                                    foreach($selectcity as $fetchcity)
                                    {?>
                                    <option  value="<?php echo $fetchcity[0]; ?>" <?php if($profiledetails[0]['RGT_City']==$fetchcity[0]){?>selected=selected<?php }?> ><?php echo $fetchcity[1]; ?></option><?php 
                                    }?>
                                    </select>
                                    <label class="input__label input__label--madoka" for="selcity">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i58" class="sp"><?php if($profiledetails[0]['RGT_City']!=''){ echo 'Select City'; } ?></span>
                                        </label>
                                </span>
                            </div>
                            <br>
                        <br>
                                                       
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select   class="input__field input__field--madoka" name="barea" id="barea">
                                        <option value="">--Select--</option>
                                        <?php 
                                        $selectarea=$database->query("call  pro_area('".$profiledetails[0]['RGT_Country']."','".$profiledetails[0]['RGT_State']."','".$profiledetails[0]['RGT_City']."',1)")->fetchAll();
                                        foreach($selectarea as $fetcharea)
                                        {?>
                                        <option  value="<?php echo $fetcharea[0]; ?>" <?php if($profiledetails[0]['RGT_Area']==$fetcharea[0]){?>selected=selected<?php }?> ><?php echo $fetcharea[1]; ?></option><?php 
                                        }?>
                                    </select>
                                    <label class="input__label input__label--madoka" for="barea">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i59" class="sp"><?php if($profiledetails[0]['RGT_Area']!=''){ echo 'Select Area'; } ?></span>
                                    </label>
                                </span>
                            </div>
                            <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select   class="input__field input__field--madoka" name="bpincode" id="bpincode" >
                                        <option value="">--Select--</option>
                                    <?php 
                                    $selectpincode=$database->query("call pro_pincode('".$profiledetails[0]['RGT_Country']."','".$profiledetails[0]['RGT_State']."','".$profiledetails[0]['RGT_City']."','".$profiledetails[0]['RGT_Area']."',1)")->fetchAll();
                                    foreach($selectpincode as $fetchpincode)
                                    {?>
                                    <option  value="<?php echo $fetchpincode[0]; ?>" <?php if($profiledetails[0]['RGT_Pincode']==$fetchpincode[0]){?>selected=selected<?php }?> ><?php echo $fetchpincode[1]; ?></option><?php 
                                    }?>
                                    </selec>
                                    <label class="input__label input__label--madoka" for="bpincode">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i60" class="sp"><?php if($profiledetails[0]['RGT_Pincode']!=''){ echo 'Select Pincode'; } ?></span>
                                        </label>
                                </span>
                            </div>
                        
                            <br>
                            <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off"  id="mobile" name="mobile" onkeyup="checkNumber(this);" value="<?php echo $profiledetails[0]['RGT_Mobile'];?>" />
                                    <label class="input__label input__label--madoka" for="mobile">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Mobile Number</span>
                                    </label>
                                </span>
                            </div>
                            
                            <br>
                            <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off"  id="landline" name="landline" onkeyup="checkNumber(this);" value="<?php echo $profiledetails[0]['RGT_Landline'];?>" />
                                    <label class="input__label input__label--madoka" for="landline">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Landline Number</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                            <br>
                            <br>
                       <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off" id="website"  name="website"  value="<?php echo $profiledetails[0]['RGT_Website'];?>"  />
                                    <label class="input__label input__label--madoka" for="website" >
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Website</span>
                                    </label>
                                </span>
                        </div>
                            <?php if($profiledetails[0]['RGT_PaymentStatus']=='1'){?>
                            <br>
                            <br>
                             <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" autocomplete="off" id="profilelink"  name="profilelink" onkeyup="urlvalidate(this);showHint(this.value)" value="<?php echo $profiledetails[0]['RGT_ProfileUrl'];?>"  />
                                    <label class="input__label input__label--madoka" for="profilelink" >
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka"><?php echo HTTP_URL ;?>/</span>
                                    </label>
                                </span><br /><span style="padding-left: 160px;" id="txtHint"></span><input type="button" value="OK" id="prolinkclk" class="submit-btn">
                        </div>
                            <br>
                            <br>
                            <?php }?>
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                             <input type="submit"  class="action" id="compupdate" value="Update" />
                        </div>
                    </div>
                </div>
            </div>
    </div>
</form>
        