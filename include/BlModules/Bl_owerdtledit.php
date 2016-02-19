<?php 
ob_start();
session_start();
include_once("../config.php");
include_once("../simplefunction.php");
$lid           = $_SESSION['lid'];
$profiledetails = $database->query("call pro_registration($lid,1,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();
echo "####".$profiledetails[0]['RGT_OwnerName']."####".$profiledetails[0]['RGT_OwnDesign']."####".$profiledetails[0]['RGT_OwnDOB']."####".$profiledetails[0]['gender']."####".$profiledetails[0]['RGT_OwnAddress']."####".dateformate($profiledetails[0]['ownselcountry'])."####".$profiledetails[0]['ownselstate']."####".$profiledetails[0]['ownselcity']."####".$profiledetails[0]['oarea']."####".$profiledetails[0]['opincode']."####".$profiledetails[0]['ownphoneno'];
echo "####".$profiledetails[0]['ownlandline']."####".$profiledetails[0]['ownemail']."####".$profiledetails[0]['owneducate'];