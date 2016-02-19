<?php 
include_once("../config.php");
$action = $_REQUEST['action'];
$data   = $_REQUEST['data'];
$data2  = $_REQUEST['data2'];
$data3  = $_REQUEST['data3'];
$data4  = $_REQUEST['data4'];

if($action=='state')
{
    $selectstate=$database->query("call  pro_gstate('".$data."',1)")->fetchAll();
    echo "<option value=''>--Select--</option>";
    foreach($selectstate as $fetchstate)
    {
    echo "<option  value='".$fetchstate[0]."' >".$fetchstate[1]."</option>";
    }
}

if($action=='city')
{
    $selectcity=$database->query("call  pro_gcity('".$data."','".$data2."','',1)")->fetchAll();
    echo "<option value=''>--Select--</option>";
    foreach($selectcity as $fetchcity)
    {
    echo "<option  value='".$fetchcity[0]."' >".$fetchcity[1]."</option>";
    }
}

if($action=='area')
{
    $selectarea=$database->query("call  pro_area('".$data."','".$data2."','".$data3."',1)")->fetchAll();
    echo "<option value=''>--Select--</option>";
    foreach($selectarea as $fetcharea)
    {
    echo "<option  value='".$fetcharea[0]."' >".$fetcharea[1]."</option>";
    }
}

if($action=='pincode')
{
    $selectpin=$database->query("call  pro_pincode('".$data."','".$data2."','".$data3."','".$data4."',1)")->fetchAll();
    echo "<option value=''>--Select--</option>";
    foreach($selectpin as $fetchpin)
    {
    echo "<option  value='".$fetchpin[0]."' >".$fetchpin[1]."</option>";
    }
}