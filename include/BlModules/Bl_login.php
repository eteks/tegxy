<?php
ob_start();
session_start();
include_once("../config.php");
include("../../Mailer/class.phpmailer.php");


if($_REQUEST['submit']=='Sign In')
{

$username = $_REQUEST['username'];
// $password = base64_encode($_REQUEST['password']);
$password =$_REQUEST['password'];
 // //added by kalai
 //    //*******
 //    echo $username;
 //    echo $password;
 //    //*******


$check=$database->query("call  pro_registration('','2','".$username."','".$password."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();
    if(count($check)>0)
        {
            $lid = $check[0]['RGT_PK'];
            $type = $check[0]['RGT_type'];
            $username = $check[0]['RGT_UserName'];

            $_SESSION['lid']= $lid;
            $_SESSION['type']= $type;
            $_SESSION['username']= $username;
            $check=$database->query("call  pro_registration('".$_SESSION['lid']."','3','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();
            echo 'ok';
        }
    else
           echo 'not';
}

if($_REQUEST['fsubmit']=='Submit')
{
$emailid= $_REQUEST['emailid'];
$check=$database->query("call  pro_registration('','4','','','".$emailid."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();
    if(count($check)>0)
    {
    $Lid       = $check[0][0];
    $Type      = $check[0][1];
    $UserName  = $check[0][2];
    $Password  = $check[0][3];
    $PEmail    = $check[0][4];
    $PMobile   = $check[0][5];
    $BEmail    = $check[0][6];
    $BMobile   = $check[0][7];
    $PName     = $check[0][8];
    $BName	   = $check[0][9];
    $ToEmail        = $PEmail;	
    $ToName         = $PName;	
    $ToMobile       = $PMobile;	

        if($ToMobile!='')
        {
            $mainusername   =9092371237;
            $mainpassword   ='icrtwicrtw';
            $receiver   = $ToMobile;
            $message    = "Dear ".$ToName.", Your Login Name : ".$UserName.",Password : ".$Password." ";

                require '../../sms/Way2Sms.php';
                $sms            =   new Way2Sms();
                $result         =   $sms->login($mainusername, $mainpassword);
                if($result)
                {
                    $smsStatus  =   $sms->send($receiver, $message);
                    if($smsStatus)
                        echo "Message sent successfully!!!";
                    else
                        echo "Unable to send message";
                    $sms->logout();
                }
                else
                    echo "Invalid Username or Password";
        }


        $Message     = "<table border='0' cellpadding='0' cellspacing='0'  style='font-size: 12px; line-height: 25px;font-family:Arial, Helvetica, sans-serif;padding-left:5px;padding-bottom:10px;'>
        <tr><td colspan='2' height='10'></td></tr>
        <tr><td colspan='2' style='color:#006DB8;font-size:15px;'>Dear ".$ToName.",</td></tr>
        <tr><td colspan='2' style='padding-left:20px;'>We had received a request for password from your account. Please refer the following</td></tr>
        <tr><td colspan='2' style='padding-left:20px;font-weight:bold;'>Username : ".$UserName."</td></tr>
        <tr><td colspan='2' style='padding-left:20px;font-weight:bold;'>Password : ".base64_decode($Password)."</td></tr>
        </table>";

        $mailContent = file_get_contents("../../mailtemplate.php");
        $Message = str_replace('MSGCONTENT',$Message, $mailContent);
        $Message = str_replace('images/',HTTP_SERVER.'images/', $Message);

        $Subject='Forgot Password';
        $ToAddress=$ToEmail;
        $ToName=$ToName;
        $FromName='XYGET';
        $FromAddress='rajeswari@atomicka.com';
        PHP_Mailer($Message,$Subject,$ToAddress,$ToName,$FromAddress,$FromName,$Attachmenttemp,$Attachment);
        echo '2';
    }
    else
        echo '1';
}

?>