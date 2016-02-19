<?php 
ob_start(); 
session_start();
include_once("include/config.php");
if($_SESSION['lid']!=''){
$database->query("call  pro_registration('".$_SESSION['lid']."','5','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();    
}
session_destroy();
header("location:index.php");
 ?>