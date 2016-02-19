<?php 
ob_start();
session_start();
include_once("../config.php");
include_once("../simplefunction.php");

$lid           = $_SESSION['lid'];
$compname      = $_REQUEST['companyname'];
$industry      = $_REQUEST['industry'];
$address1      = $_REQUEST['address1'];
$address2      = $_REQUEST['address2'];
$country       = $_REQUEST['selcountry'];
$state         = $_REQUEST['selstate'];
$city          = $_REQUEST['selcity'];
$mobile        = $_REQUEST['mobile'];
$landline      = $_REQUEST['landline'];
$email         = $_REQUEST['email'];

$groupname     = $_REQUEST['groupname'];
$requestno     = $_REQUEST['requestno'];
$yearofest     = dateformate($_REQUEST['yearofest']);
$typeofcomp    = $_REQUEST['typeofcomp'];
$compstrength  = $_REQUEST['empstr'];
$website       = $_REQUEST['website'];
$area          = $_REQUEST['barea'];
$pincode       = $_REQUEST['bpincode'];


$database->query("call  pro_registration($lid,'8','','','','".$compname."','".$groupname."','".$yearofest."','".$typeofcomp."','".$compstrength."','','','','".$industry."','".$email."','','','".$address1."','".$address2."','".$country."','".$state."','".$city."','".$mobile."','".$landline."','','','','','','','','".$area."','".$pincode."','".$requestno."','".$website."','','')")->fetchAll();
$profiledetails = $database->query("call pro_registration($lid,1,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();
$industrydisp = $database->query("call pro_industry(2,'".$profiledetails[0]['RGT_Sector']."')")->fetchAll();
$citydisp = $database->query("call pro_gcity('','','".$profiledetails[0]['RGT_State']."',2)")->fetchAll();
include("../../companygrid.php");?>


<script src="js/general.js" type="text/javascript"></script>
<script src="js/manageprofile.js" type="text/javascript"></script>
<script src="js/form.js"></script>


