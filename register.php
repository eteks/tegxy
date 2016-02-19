<?php include("loginheader.php");
      include("Mailer/class.phpmailer.php");
      include("include/simplefunction.php");
?>
<link href="css/register.css" rel="stylesheet" type="text/css"/>
<link rel="StyleSheet" href="Tagedit-master/css/ui-lightness/jquery-ui-1.9.2.custom.min.css" type="text/css" media="all"/>
<link rel="StyleSheet" href="Tagedit-master/css/jquery.tagedit.css" type="text/css" media="all"/>

<script type="text/javascript" src="Tagedit-master/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery.autoGrowInput.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery.tagedit.js"></script>
<link href="jquery-ui-timepicker-0.3.3/jquery.ui.timepicker.css" />
<link href="jquery-ui-timepicker-0.3.3/include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" />
<script type="text/javascript" src="jquery-ui-timepicker-0.3.3/jquery.ui.timepicker.js?v=0.3.3" ></script>
<!-- Start Functionality -->
<script type="text/javascript" src="js/general.js"></script>
<script type="text/javascript" src="js/Register.js"></script>
<!-- End Functionality -->
<script type="text/javascript">
jQuery.noConflict();
(function( $ ) {
$(function() {
// Fullexample
$("#tagform-full").find('input.tag').tagedit(
{
autocompleteURL: 'Tagedit-master/server/autocomplete.php',
//checkToDeleteURL: 'server/checkToDelete.php'
});

$('#timepicker_1').timepicker({
showPeriod: true,
showLeadingZero: true,
showCloseButton: true
});

$('#timepicker_2').timepicker({
showPeriod: true,
showLeadingZero: true,
showCloseButton: true
});

$('#timepicker_3').timepicker({
showPeriod: true,
showLeadingZero: true,
showCloseButton: true
});

$('#timepicker_4').timepicker({
showPeriod: true,
showLeadingZero: true,
showCloseButton: true
});

});
})(jQuery);
</script>
<!-- Keyword related script -->
<style>
select
{
    padding: 3px !important;
	width:103%;
}
</style>

<script type="text/javascript" src="js/CalendarControl.js"></script>
<link href="css/CalendarControl.css" rel="stylesheet" type="text/css" />
<div class="gradient">
<div class="container ">
<?php if($_SESSION['xygetreg']=='success')
{?>
    <div class="reg_form"><br>                           
<p>Dear <strong><?php echo $_SESSION['xygetregname'];?></strong>,</p>
<p>Thank you for showing interest in joining our XYGET.com family. You will receive a confirmation mail on approval of your registration.</p>
<p>Thanks,</p>
<p><strong>XYGET.com Team</strong></p>
<p><a href="index"  style=" color:#ED5222;text-decoration: none;">Click here</a> 
to continue browsing XYGET.com</p>
</div>
<?php $_SESSION['xygetreg']='';$_SESSION['xygetregname']=''; } else {?>    
<form class="form-inline" method="post" id="registerform" name="registerform" action="register.php">    
<div class="reg_form">
    <div >
    <div style="float:left;margin-right: 121px;">
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Company Name</div>
          <input type="text" name="companyname" id="companyname" class="form-control" autocomplete="off">
        </div>
      </div>
    
    </div>
        <div >
        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Group Name</div>
          <input type="text" name="groupname" id="groupname" class="form-control" autocomplete="off">
        </div>
      </div>
    
    </div>
        
    </div>

    <div >
    <div style="    float: left;
    margin-right: 100px;">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Year Of Establishment</div>
          <input type="text" name="yearofest"  id="yearofest" class="form-control" autocomplete="off"  readonly="readonly" autocomplete="off"  />
		  
        </div>
		<img src="images/Cal.png" width="16" height="16" style="cursor:pointer" onclick="showCalendarControl(document.forms['registerform'].yearofest)"  />
      </div>
   
    </div>
        <div >
       <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Type Of Company</div>
          <select name="typeofcomp" id="typeofcomp" class="form-control" >
            <option value="">--Select Company Type--</option>
            <option value="1" >Cooperative Societies</option>
            <option value="2" >Government Based</option>
            <option value="3" >Joint Stock Companies</option>
            <option value="4" >Partnership</option>
            <option value="5" >Private Limited</option>
            <option value="6" >Sole Proprietorship</option>
            </select>
        </div>
      </div>
    
    </div>
        
    </div>
    
     <div >
    <div style="float:left;margin-right: 121px;">
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Company Strength</div>
          <input type="text" name="compstrength"  id="compstrength" class="form-control" autocomplete="off">
        </div>
      </div>
    
    </div>
        <div >
        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Contact Person</div>
          <input type="text" name="ownername"  id="ownername" class="form-control" autocomplete="off">
        </div>
      </div>
    
    </div>
        
    </div>
    
     <div >
    <div style="float:left;margin-right: 121px;">
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">designation</div>
          <input type="text" name="designation"  id="designation" class="form-control" autocomplete="off">
        </div>
      </div>
    
    </div>
        <div >
        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Date Of Birth</div>
          <input type="text" name="dob"  id="dob"  class="form-control" autocomplete="off"  readonly="readonly"  />
        </div>
		<img src="images/Cal.png" width="16" height="16" style="cursor:pointer" onClick="showCalendarControl(document.forms['registerform'].dob)"  />
      </div>
    
    </div>
        
    </div>
    <div >
    <div style="">
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Industry</div>
          <select name="industry" id="industry"   class="inp-text" >
           <option value="">--Select Industry--</option>
                <?php $selectsector=$database->query("call pro_industry(1,'')")->fetchAll();
                foreach($selectsector as $fetchsector)
                {?>
                <option  value="<?php echo $fetchsector[0]; ?>" <?php if($profiledetails[0]['RGT_Sector']==$fetchsector[0]){?>selected="selected"<?php }?>><?php echo $fetchsector[1]; ?></option><?php 
                }?>
            </select>
        </div>
      </div>
      <div style="float:left;margin-right: 121px;">
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Email</div>
         <input type="text" name="email"  id="email"  class="form-control" autocomplete="off" />
        </div>
      </div>
    
    </div>
    </div>
        <div style="display:none;" id="keywordgrid">
     
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Offers</div>
          <div class="seventy" id="tagform-full"><input type="text" name="tag[]"   class="tag" /></div>
        </div>
      </div>
   
    </div>
    </div>
     <div >
    <div style="float:left;margin-right: 121px;">
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Username</div>
         <input type="text" name="username"  id="username"  class="form-control" autocomplete="off" />
        </div>
      </div>
    
    </div>
    <div style="float:left;margin-right: 121px;">
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Password</div>
         <input type="password" name="password"  id="password"  class="form-control" autocomplete="off" />
        </div>
      </div>
    
    </div>
        <div >
        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Confirm password</div>
          <input type="password" name="Cpassword"  id="Cpassword" class="form-control" autocomplete="off" />
        </div>
      </div>
    
    </div>
        
    </div>
     <div >
    <div style="float:left;margin-right:121px;">
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Address Line 1</div>
         <input type="text" name="address1"  id="address1"  class="form-control" autocomplete="off" />
        </div>
      </div>
    
    </div>
        <div >
        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Address Line 2</div>
          <input type="text"  name="address2"  id="address2"class="form-control" autocomplete="off" />
        </div>
      </div>
    
    </div>
        
    </div>
     <div >
    <div style="float:left;margin-right:30px;">
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Country</div>
         <select name="selcountry" id="selcountry"  class="inp-text" >
        <option value="">--Select Country--</option>
        <?php $selectcountry=$database->query("call  pro_gcountry(1)")->fetchAll();
         foreach($selectcountry as $fetchcountry)
        {?>
        <option  value="<?php echo $fetchcountry[0]; ?>" <?php if($profiledetails[0]['RGT_Country']==$fetchcountry[0]){?>selected=selected<?php }?> ><?php echo $fetchcountry[1]; ?></option><?php 
        }?>
        </select>
        </div>
      </div>
    
    </div>
        <div style="float:left;margin-right:30px;" >
        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">State</div>
          <select  class="memberinput" name="selstate" id="selstate">
             <?php
                $selectstate=$database->query("call  pro_gstate('".$profiledetails[0]['RGT_Country']."',1)")->fetchAll();
               foreach($selectstate as $fetchstate)
            {?>
            <option  value="<?php echo $fetchstate[0]; ?>" <?php if($profiledetails[0]['RGT_State']==$fetchstate[0]){?>selected=selected<?php }?> ><?php echo $fetchstate[1]; ?></option><?php 
            }?>
            </select>
        </div>
      </div>
    
    </div>
        
    </div>
    <div >
    <div style="float:left;margin-right:30px;" >
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">City</div>
          <select name="selcity" id="selcity"></select>
        </div>
      </div>
    
    </div>
        <div style="float:left;margin-right:30px;">
        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Area</div>
          <select name="barea" id="barea"></select>
        </div>
      </div>
    
    </div>
        
    </div>
    
    <div >
    <div >
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Pincode</div>
          <select name="bpincode" id="bpincode"></select>
        </div>
      </div>
    
    </div>
        <div style="float:left;margin-right: 121px;">
        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Mobile Number</div>
          <input type="text"  name="mobile"  id="mobile" class="form-control" onkeyup="checkNumber(this);" />
        </div>
      </div>
    
    </div>
        
    </div>
      <div >
    <div >
     <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Land Line</div>
          <input type="text"  name="landline"  id="landline" class="form-control" onkeyup="checkNumber(this);" autocomplete="off" />
        </div>
      </div>
    
    </div>
        <div style="float:left;margin-right:93px">
        
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Operating Areas</div>
          
            <select id="oparea" name="oparea[]" multiple="multiple" style="height: 85px;">
             <?php
               $selectgarea=$database->query("call pro_garea(1,'')")->fetchAll();
               foreach($selectgarea as $fetchgarea)
            {?>
            <option  value="<?php echo $fetchgarea[0]; ?>"><?php echo $fetchgarea[1]; ?></option><?php 
            }?>
            </select>
	    <span id='selecttext' onclick="selectall('selecttext','oparea');" style="float:right;font-style:italic;cursor:pointer;"> Select All</span>
        </div>
      </div>
    
    </div>
        
    </div>
    
    <div >
    <div >
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon1">Working Days
         <div style="    width: 96%;
    margin-top: 6px;"> From<select class="inp-text" name="fromwd"  id="fromwd" style="width:100px;">
            <option value="">--Select --</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
            </select> To<select class="inp-text" name="towd"  id="towd" style="width:100px;">
            <option value="">--Select--</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option></select>
        </div>
		</div>
		</div>
      </div>
   
    </div>
        <div >
       <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Business Timing</div>
          <input type="text" name="fromot"  id="timepicker_1" value="From" class="form-control" autocomplete="off" style="width:100px;"> 
		  <input type="text" name="toot"  id="timepicker_2"  value="To" class="form-control" autocomplete="off" style="width:100px;">
        </div>
      </div>
    
    </div>
        
    </div>
    
       
    <div >
    <div >
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Break Time</div>
          <input type="text" name="frombt" value="From" id="timepicker_3" class="form-control" autocomplete="off" style="width:100px;"> 
		  <input type="text" name="tobt" value="To" id="timepicker_4" class="form-control" autocomplete="off" style="width:100px;">
        
        </div>
      </div>
   
    </div>
      
    </div>
    <div><input type="submit" value="SUBMIT"  name="submit" id="regsubmit" style="color: black;
    width: 100px;
    margin-top: 31px;
    margin-bottom: 10px;
    margin-left: 36%;"></div>
</div>
</form>
<?php }?>
</div>
</body>
</html>
<?php
if( $_REQUEST['companyname']!='')
{
$compname = $_REQUEST['companyname'];
if($compname!='')
{
$toaddress = trim($_REQUEST['email']);
$toname    = trim($_REQUEST['ownername']); 	
$ownname = trim($_REQUEST['ownername']);
$industry = trim($_REQUEST['industry']);
$username = trim($_REQUEST['username']);
$password = base64_encode(trim($_REQUEST['password']));
$address1 = trim($_REQUEST['address1']);
$address2 = trim($_REQUEST['address2']);
$country = trim($_REQUEST['selcountry']);
$state = trim($_REQUEST['selstate']);
$city = trim($_REQUEST['selcity']);
$mobile = trim($_REQUEST['mobile']);
$landline = trim($_REQUEST['landline']);
$email = trim($_REQUEST['email']);	
$yearofest = trim($_REQUEST['yearofest']);
$designation = trim($_REQUEST['designation']);
$dob = trim($_REQUEST['dob']);
$area = trim($_REQUEST['barea']);
$pincode = trim($_REQUEST['bpincode']);
$typeofcomp = trim($_REQUEST['typeofcomp']);
$fromwd = trim($_REQUEST['fromwd']);
$towd = trim($_REQUEST['towd']);
$fromot = trim($_REQUEST['fromot']);
$toot = trim($_REQUEST['toot']);
$frombt = trim($_REQUEST['frombt']);
$tobt = trim($_REQUEST['tobt']);
$groupname    = trim($_REQUEST['groupname']);
$compstrength = trim($_REQUEST['compstrength']);
$type="2";
$regon = date('Y-d-m');

$database->query("call  pro_registration('','6','','','','".$compname."','".$groupname."','".$yearofest."','".$typeofcomp."','".$compstrength."','".$ownname."','".$designation."','".$dob."','".$industry."','".$email."','".$username."','".$password."','".$address1."','".$address2."','".$country."','".$state."','".$city."','".$mobile."','".$landline."','".$type."','".$fromwd."','".$towd."','".$fromot."','".$toot."','".$frombt."','".$tobt."','".$area."','".$pincode."','','','','','".$regon."')")->fetchAll();
$lastid = $database->query("call  pro_registration('','7','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll(); 
$busid  = $lastid[0][0]; 

$database->query("call  pro_contact('".$busid."','".$compname."','".$address1."','".$address2."','".$country."','".$state."','".$city."','".$area."','".$pincode."','".$landline."','".$email."','".$ownname."',1)")->fetchAll(); 


foreach($_POST['oparea'] as $opvalue)
{
$database->query("call  pro_oparea('".$busid."','".$opvalue."',1)")->fetchAll();
}

foreach($_POST['tag'] as $tagvalue)
{
$checkexist      = $database->query("call  pro_key('','".$tagvalue."',2)")->fetchAll();
if(count($checkexist)>0)
$keyid = $checkexist[0]['Kd_Id'];
else
{
$database->query("call  pro_key('".$industry."','".$tagvalue."',1)")->fetchAll();    
$keyid = $database->query("call  pro_key('','',3)")->fetchAll();
}
$database->query("call  pro_memkey('".$busid."','".$keyid."',1)")->fetchAll();
}

}

$message     = "<table border='0' cellpadding='0' cellspacing='0'  style='font-size: 12px; line-height: 25px;font-family:Arial, Helvetica, sans-serif;padding-left:5px;padding-bottom:10px;'>
<tr><td colspan='2' height='10'></td></tr>
<tr><td colspan='2' style='color:#006DB8;font-size:15px;'>Dear ".$toname.",</td></tr>
<tr><td colspan='2' height='10'></td></tr>
<tr><td colspan='2' >Thank you for showing interest in joining our tracemein.com family. You will receive a confirmation mail on approval of your registration.</td></tr>
</table>";

$mailcontent = file_get_contents("mailtemplate.php");
$message = str_replace('MSGCONTENT',$message, $mailcontent);
$message = str_replace('images/',HTTP_SERVER.'images/', $message);
$subject='Registration';
$fromname='XYGET';
$fromaddress='rajeswari@atomicka.com';
PHP_Mailer($message,$subject,$toaddress,$toname,$fromaddress,$fromname,'','');

$_SESSION['xygetregname']=$compname;
$_SESSION['xygetreg']='success';
// header("Location:register.php/?Id=1");	
header("Location:register.php");  
	
}
