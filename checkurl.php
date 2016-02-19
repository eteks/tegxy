<?php include_once("include/config.php");

$Runsql = $database->query("call pro_registration('',9,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','".$_GET["q"]."','')")->fetchAll();
if(count($Runsql)>0)
  $response="<span style='color:red'>Page Address Exists. Please Change it</span>";
else
  $response="";
echo $response;
?>