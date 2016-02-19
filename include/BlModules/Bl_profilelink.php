<?php 
ob_start();
session_start();
include_once("../config.php");

$lid           = $_SESSION['lid'];
$profilelink = $_REQUEST['profilelink'];

$sqlchk = $database->query("call pro_registration('$lid',9,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','".$profilelink."','')")->fetchAll();
if(count($sqlchk)>0)
echo "Already Exists";
else
{
$sqlchk = $database->query("call pro_registration('$lid',10,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','".$profilelink."','')")->fetchAll();
echo "Saved Successfully";
}
$profiledetails = $database->query("call pro_registration($lid,1,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();
?>
######<?php echo $profiledetails[0]['RGT_ProfileUrl'];?>
