<?php 
ob_start();
session_start();
include_once("../config.php");
include_once("../simplefunction.php");

$lid                       = $_SESSION['lid'];
$ownername                 = $_REQUEST['ownername'];
$designation = $_REQUEST['designation'];
$dob = dateformate($_REQUEST['dob']);
$address = $_REQUEST['ownaddr'];
$selcountry = $_REQUEST['ownselcountry'];
$selstate = $_REQUEST['ownselstate'];
$selcity = $_REQUEST['ownselcity'];
$mobile = $_REQUEST['ownphoneno'];
$landline = $_REQUEST['ownlandline'];
$email = $_REQUEST['ownemail'];
$owneducate = $_REQUEST['owneducate'];
$selarea = $_REQUEST['oarea'];
$selpincode = $_REQUEST['opincode'];
$gender = $_REQUEST['gender'];

$database->query("call pro_owner('".$ownername."','".$designation."','".$dob."','".$address."','".$selcountry."','".$selstate."','".$selcity."','".$mobile."','".$landline."','".$email."','".$owneducate."','".$gender."','".$selarea."','".$selpincode."',$lid,1)")->fetchAll();
$profiledetails = $database->query("call pro_registration($lid,1,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();
$citydisp = $database->query("call pro_gcity('','','".$profiledetails[0]['RGT_State']."',2)")->fetchAll();
include("../../ownergrid.php");?>

<script src="js/general.js" type="text/javascript"></script>
<script src="js/manageprofile.js" type="text/javascript"></script>
<script src="js/form.js"></script>
