<?php 
function getMemberKeywords($memberid)
{
    
$database = new medoo($GLOBALS['db_name']);
$checkexist = $database->query("call  pro_memkey('".$memberid."','1',1)")->fetchAll();

    if(count($checkexist)>0)
        {	
            foreach($checkexist as $fetch)
                {
                    if($fetch['Kd_Keyword']!='')
                        {
                            if($result=='')
                            $result = $fetch['Kd_Keyword'];
                            else
                            $result .=', '.$fetch['Kd_Keyword'];	
                        }
                }
        }
    else
    $result = '';
    return $result;
}

function getOperatingAreas($memberid)
{
    $database = new medoo($GLOBALS['db_name']);
    $checkexist = $database->query("call  pro_garea(1,'".$memberid."')")->fetchAll();
        if(count($checkexist)>0)
            {	
                foreach($checkexist as $fetch)
                {
                    if($fetch['Area']!='')
                        {
                            if($result=='')
                            $result = $fetch['Area'];
                            else
                            $result .=', '.$fetch['Area'];	
                        }
                }
            }
        else
        $result = '-';
    return $result;
}

function XbitImage($productid)
    {
    $database = new medoo($GLOBALS['db_name']);
    $showcase = $database->query("call pro_proser('',2,'".$productid."')")->fetchAll(); 
    return ucfirst($showcase[0][0]);
    }
    

?>