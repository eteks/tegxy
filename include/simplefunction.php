<?php

$weekDays = array("Monday" => "Monday","Tuesday" => "Tuesday","Wednesday" => "Wednesday","Thursday" => "Thursday","Friday" => "Friday","Saturday" => "Saturday","Sunday" => "Sunday");

function PHP_Mailer($Message,$Subject,$ToAddress,$ToName,$FromAddress,$FromName,$Attachmenttemp,$Attachment)
{ 
    $mail = new PHPMailer(true);
    try 
    {
        $mail->AddAddress($ToAddress,$ToName);
        $mail->SetFrom($FromAddress,$FromName);		  
        $mail->Subject = $Subject;
        if(isset($Attachment) && $Attachment!='')
        $mail->AddAttachment($Attachmenttemp,$Attachment);
        $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; 
        $mail->MsgHTML($Message);
        $mail->Send();
    } catch (phpmailerException $e)
        {
            echo $e->errorMessage(); 
        } 
        catch (Exception $e) 
        {
           echo $e->getMessage(); 
        } 
}
function dateformate($str)
{
    if($str!='' && $str!='00-00-0000' && $str!='0000-00-00')
    {  
        $split = explode('-',$str);
        $res   = $split[2].'-'.$split[1].'-'.$split[0];
    }
    else
        $res ='';    
    return $res;
}

function companytype($id)
{
    if($id == 1)
    $result = 'Cooperative Societies';
    else if($id == 2)	
    $result = 'Government Based';
    else if($id == 3)	
    $result = 'Joint Stock Companies';
    else if($id == 4)	
    $result = 'Partnership';
    else if($id == 5)	
    $result = 'Private Limited';
    else if($id == 5)	
    $result = 'Sole Proprietorship';
    else
    $result = '';
    return $result;
}
?>