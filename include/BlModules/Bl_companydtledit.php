<?php 
ob_start();
session_start();
include_once("../config.php");
include_once("../simplefunction.php");
$lid           = $_SESSION['lid'];
$profiledetails = $database->query("call pro_registration($lid,1,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();
echo "####".$profiledetails[0]['RGT_CompName']."####".$profiledetails[0]['RGT_GroupName']."####".$profiledetails[0]['RGT_Sector']."####".$profiledetails[0]['RGT_Email']."####".$profiledetails[0]['RGT_RegNo']."####".dateformate($profiledetails[0]['RGT_YrofEstablish'])."####".$profiledetails[0]['RGT_CompType']."####".$profiledetails[0]['RGT_EmpStrength']."####".$profiledetails[0]['RGT_Address1']."####".$profiledetails[0]['RGT_Address2']."####".$profiledetails[0]['RGT_Country'];
echo "####".$profiledetails[0]['RGT_State']."####".$profiledetails[0]['RGT_City']."####".$profiledetails[0]['RGT_Area']."####".$profiledetails[0]['RGT_Pincode']."####".$profiledetails[0]['RGT_Mobile']."####".$profiledetails[0]['RGT_Landline']."####".$profiledetails[0]['RGT_Website'];