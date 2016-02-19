<?php 
ob_start();
session_start();
include_once("include/config.php");
$pagename = basename($_SERVER['SCRIPT_FILENAME'],'.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title><?php echo $Title;?></title>
<link rel="icon" href="images/favi.ico.png">
<!-- new -->
<meta charset="utf-8" />
<!-- disable zooming -->
<meta name="viewport" content="initial-scale=1.0, user-scalable=0" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/trans.css" />
<link rel="stylesheet" type="text/css" href="css/w3.css" />
<script src="js/jquery-1.11.3.min.js"></script>
<style media="screen">

.register_st {
    float: right;
    position: absolute;
    margin-left: 68.6%;
    margin-top: 8px;
    border: 1px solid #fff;
    width: 26px;
    text-align: center;
    height: 28px;
    color: #000;
    background: #fff;
    border-radius: 12px 0px 14px;
}
.button1 {
    border: 1px solid #FFF;
    float: right;
    margin-top: 11px;
    margin-right: 60px;
}
</style>

</head>
<body>		
<?php include("header.php");?>