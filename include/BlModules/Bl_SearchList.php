<?php 
include_once("../Configuration.php");
include_once("../DatabaseConnection.php");
db_connect();

$str1 = addslashes($_POST['data']);
if($_REQUEST['action']=='1'){	
	//if (trim($str1) != '') $str1 = trim($str1);
	//$Whecon = "WHERE `RGT_CompName` like '".$str1."%'";//AND
	//$sql    = "SELECT RGT_CompName,RGT_City,RGT_Area FROM `tbl_registration`   ".$Whecon." Order by RGT_CompName asc limit 0,5";
	//RGT_Status=1 
	if (trim($str1) != '') $str1 = trim($str1);
	{
	$Whecon  = "WHERE `RGT_CompName` like '".$str1."%'";//AND
	$Whecon1 = "WHERE `S_Name` like '".$str1."%'";
	$Whecon2 = "WHERE `Kd_Keyword` like '".$str1."%'";
	} 
	$sql    = "SELECT `RGT_CompName` as search, RGT_City,RGT_Area, '1' as type2 FROM `tbl_registration` ".$Whecon." UNION SELECT `S_Name` as search  ,'1' as RGT_City,'b' as RGT_Area ,'2' as type2 FROM `tbl_sector`  ".$Whecon1." UNION SELECT `Kd_Keyword` as search  ,'1' as RGT_City,'b' as RGT_Area ,'3' as type2 FROM `tbl_keywordmst`  ".$Whecon2."";
	
        //echo "SELECT `RGT_CompName` as search, RGT_City,RGT_Area, '1' as type2 FROM `tbl_registration` ".$Whecon." UNION SELECT `S_Name` as search  ,'1' as RGT_City,'b' as RGT_Area ,'2' as type2 FROM `tbl_sector`  ".$Whecon1." UNION SELECT `Kd_Keyword` as search  ,'1' as RGT_City,'b' as RGT_Area ,'3' as type2 FROM `tbl_keywordmst`  ".$Whecon2."";
        
	$result = db_query($sql) or die(db_error());
	if(db_num_rows($result))
	{		
		echo '<ul class="list">';
		while($row = db_fetch_array($result))
		{	
			$str = strtolower($row['search']);
			if($str1!=""){
				$start = strpos($str, $str1);
				$end = similar_text($str, $str1);
				$last = substr($str, $end, strlen($str));
				$first = substr($str, $start, $end);
			} else {
				$first = "";
				$last = $str;
			}
			$final = '<span class="bold">'.$first.'</span>'.$last;

			echo '<li><a href=\'javascript:void(0);\'>'.$final.'<span style="display:none;">**'.$row['RGT_City'].'**'.$row['RGT_City'].'**'.$row['RGT_Area'].'**'.AreaName($row['RGT_Area']).'**'.$row['type2'].'</span></a></li>';
		 }
		echo "</ul>";
	}
	else
		echo 0; 
} 
if($_REQUEST['action']=='2'){	

	if (trim($str1) != '') $str1 = trim($str1);
	$Whecon = "Where `ProductName` like '".$str1."%'";
	$sql    = "SELECT  ProductName FROM  ".TABLE_ADMINPRODUCT."  ".$Whecon." Order by ProductName asc limit 0,5";
    	
	$result = db_query($sql) or die(db_error());
	if(db_num_rows($result))
	{		
		echo '<ul class="list">';
		while($row = db_fetch_array($result))
		{	
			$str = strtolower($row['ProductName']);
			if($str1!=""){
				$start = strpos($str, $str1);
				$end = similar_text($str, $str1);
				$last = substr($str, $end, strlen($str));
				$first = substr($str, $start, $end);
			} else {
				$first = "";
				$last = $str;
			}
				 
			$final = '<span class="bold">'.$first.'</span>'.$last;

			echo '<li><a href=\'javascript:void(0);\'>'.$final.'</a></li>';
		 }
		echo "</ul>";
	}
	else
		echo 0;		
}   



if($_REQUEST['action']=='5'){	

	if (trim($str1) != '') $str1 = trim($str1);
	$Whecon = "Where `ServiceName` like '".$str1."%'";
	$sql    = "SELECT  ServiceName  FROM  ".TABLE_ADMINSERVICE."  ".$Whecon." Order by ServiceName asc limit 0,5";
    	
	$result = db_query($sql) or die(db_error());
	if(db_num_rows($result))
	{		
		echo '<ul class="list">';
		while($row = db_fetch_array($result))
		{	
			$str = strtolower($row['ServiceName']);
			if($str1!=""){
				$start = strpos($str, $str1);
				$end = similar_text($str, $str1);
				$last = substr($str, $end, strlen($str));
				$first = substr($str, $start, $end);
			} else {
				$first = "";
				$last = $str;
			}
				 
			$final = '<span class="bold">'.$first.'</span>'.$last;

			echo '<li><a href=\'javascript:void(0);\'>'.$final.'</a></li>';
		 }
		echo "</ul>";
	}
	else
		echo 0;		
} 


if($_REQUEST['action']=='3'){	

$searchkey = $_REQUEST['searchkey'];
$requesttype = $_REQUEST['requesttype'];
  
if($requesttype=='company'){
    
$search=db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  RGT_CompName Like '%$searchkey'  AND  RGT_Status=1 AND RGT_Type=2");
$cityid='';
$resCount = db_num_rows($search);
if($resCount>0){
    while($getcity = mysql_fetch_array($search)){ 
 if($cityid!=''){$dlmt=',';}else{$dlmt='';}    
          $cityid.= $dlmt.$getcity['RGT_City'];     
    } 
} 
    ?>
                                                             
<select class="units reset" id="userCity" name="userCity"> 
    <option value="">Select city</option>
<?php       

       $select=db_query("SELECT * FROM  ".TABLE_GENERALAREAMASTER." WHERE Id IN ($cityid)");
      
       while($row = db_fetch_array($select)){  
?> 
<option <?php if($row['Id']==$userCity){ ?> selected="selected"  <?php }  ?> value="<?php echo $row['Id']; ?>"><?php echo $row['Area']; ?></option> 
     <?php } ?>              
                                
</select>  
    
<?php
} 

if($requesttype=='bestdeals'){
  
if($searchkey!='')
{ 
// Based On Keyword, Display
$findproductmatch     = get_Search_Id(TABLE_ADMINPRODUCT, "Id", "ProductName", $searchkey);
//echo $findproductmatch.'</br>';
$findkeywordmatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Keyword", $searchkey);
//echo $findkeywordmatch.'</br>';
$finddisplaymatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Display", $searchkey);
//echo $finddisplaymatch.'</br>';
if($findproductmatch!='' || $findkeywordmatch!='' || $finddisplaymatch!='' )
{ 
$con = " WHERE (PS_Display=''";
if($findproductmatch!='')
{
$con .=" OR ";	
$con .="PS_Fk IN (".$findproductmatch.")";
} 
if($findkeywordmatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$findkeywordmatch.")";
}
if($finddisplaymatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$finddisplaymatch.")";
}
$con .= ")";
}
else
$con = "WHERE PS_Display=''";
}    
    
  
$search1=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE."  $con");
//echo "SELECT * FROM ".TABLE_PRODUCTSERVICE."  $con";
$compyid='';
$resCount1 = db_num_rows($search1);
if($resCount1>0){
    while($compid = mysql_fetch_array($search1)){ 
 if($compyid!=''){$dlmt=',';}else{$dlmt='';}    
          $compyid.= $dlmt.$compid['PS_User_Fk'];
    } 
}
if($compyid!=''){
    $copvar="WHERE RGT_PK IN ($compyid)";
}
else{
    $copvar='';
}

$search2=db_query("SELECT * FROM ".TABLE_REGISTRATION." $copvar");
$compycity='';
$resCount2 = db_num_rows($search2); 
if($resCount2>0){ 
    while($compcity = mysql_fetch_array($search2)){ 
 if($compycity!=''){$dlmt=',';}else{$dlmt='';}    
          $compycity.= $dlmt.$compcity['RGT_City'];
    } 
}

    ?>
    
<select class="units reset" id="userCity" name="userCity"> 
    <option value="">Select city</option>
<?php       

       $select=db_query("SELECT * FROM  ".TABLE_GENERALAREAMASTER." WHERE Id IN ($compycity)");
      
       while($row = db_fetch_array($select)){  
?> 
<option <?php if($row['Id']==$userCity){ ?> selected="selected"  <?php }  ?> value="<?php echo $row['Id']; ?>"><?php echo $row['Area']; ?></option> 
     <?php } ?>              
                                
</select>  
    
<?php
} 
if($requesttype=='Service'){
  
if($searchkey!='')
{ 
// Based On Keyword, Display
$findproductmatch     = get_Search_Id(TABLE_ADMINPRODUCT, "Id", "ProductName", $searchkey);
//echo $findproductmatch.'</br>';
$findkeywordmatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Keyword", $searchkey);
//echo $findkeywordmatch.'</br>';
$finddisplaymatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Display", $searchkey);
//echo $finddisplaymatch.'</br>';
if($findproductmatch!='' || $findkeywordmatch!='' || $finddisplaymatch!='' )
{ 
$con = " WHERE (PS_Display=''";
if($findproductmatch!='')
{
$con .=" OR ";	
$con .="PS_Fk IN (".$findproductmatch.")";
} 
if($findkeywordmatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$findkeywordmatch.")";
}
if($finddisplaymatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$finddisplaymatch.")";
}
$con .= ")";
}
else
$con = "WHERE PS_Display=''";
}    
    
  
$search1=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE."  $con");
//echo "SELECT * FROM ".TABLE_PRODUCTSERVICE."  $con";
$compyid='';
$resCount1 = db_num_rows($search1);
if($resCount1>0){
    while($compid = mysql_fetch_array($search1)){ 
 if($compyid!=''){$dlmt=',';}else{$dlmt='';}    
          $compyid.= $dlmt.$compid['PS_User_Fk'];
    } 
}
if($compyid!=''){
    $copvar="WHERE RGT_PK IN ($compyid)";
}
else{
    $copvar='';
}

$search2=db_query("SELECT * FROM ".TABLE_REGISTRATION." $copvar");
$compycity='';
$resCount2 = db_num_rows($search2); 
if($resCount2>0){ 
    while($compcity = mysql_fetch_array($search2)){ 
 if($compycity!=''){$dlmt=',';}else{$dlmt='';}    
          $compycity.= $dlmt.$compcity['RGT_City'];
    } 
}

    ?>
    
<select class="units reset" id="userCity" name="userCity"> 
    <option value="">Select city</option>
<?php       

       $select=db_query("SELECT * FROM  ".TABLE_GENERALAREAMASTER." WHERE Id IN ($compycity)");
      
       while($row = db_fetch_array($select)){  
?> 
<option <?php if($row['Id']==$userCity){ ?> selected="selected"  <?php }  ?> value="<?php echo $row['Id']; ?>"><?php echo $row['Area']; ?></option> 
     <?php } ?>              
                                
</select>  
    
<?php
} 
       }

if($_REQUEST['action']=='4'){	

$searchkey = $_REQUEST['searchkey'];
$requesttype = $_REQUEST['requesttype'];
  
if($requesttype=='company'){
    
$search=db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  RGT_CompName Like '$searchkey%'  AND  RGT_Status=1 AND RGT_Type=2");
$sector='';
$resCount = db_num_rows($search);
if($resCount>0){
    while($getcity = mysql_fetch_array($search)){ 
 if($sector!=''){$dlmt=',';}else{$dlmt='';}    
          $sector.= $dlmt.$getcity['RGT_Sector'];     
    } 
} 
    ?>
 <select class="units reset" name="sector" id="sector"> 
     <option value="">Select Category</option> 
<?php       
       $select=db_query("SELECT * FROM  ".TABLE_SECTOR." WHERE Id IN ($sector)");
       while($row = db_fetch_array($select)){  
?> 
<option <?php if($row['Id']==$sectorid){ ?> selected="selected"  <?php } ?> value="<?php echo $row['Id']; ?>"><?php echo $row['S_Name']; ?></option>  
     <?php } ?>                               
</select>  
<?php
} 
if($requesttype=='bestdeals'){
  
if($searchkey!='')
{ 
// Based On Keyword, Display
$findproductmatch     = get_Search_Id(TABLE_ADMINPRODUCT, "Id", "ProductName", $searchkey);
//echo $findproductmatch.'</br>';
$findkeywordmatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Keyword", $searchkey);
//echo $findkeywordmatch.'</br>';
$finddisplaymatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Display", $searchkey);
//echo $finddisplaymatch.'</br>';
if($findproductmatch!='' || $findkeywordmatch!='' || $finddisplaymatch!='' )
{ 
$con = " WHERE (PS_Display=''";
if($findproductmatch!='')
{
$con .=" OR ";	
$con .="PS_Fk IN (".$findproductmatch.")";
} 
if($findkeywordmatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$findkeywordmatch.")";
}
if($finddisplaymatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$finddisplaymatch.")";
}
$con .= ")";
}
else
$con = "WHERE PS_Display=''";
}    
    
  
$search3=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE."  $con");
//echo "SELECT * FROM ".TABLE_PRODUCTSERVICE."  $con";
$compyid='';
$resCount3 = db_num_rows($search3);
if($resCount3>0){
    while($compid = mysql_fetch_array($search3)){ 
 if($compyid!=''){$dlmt=',';}else{$dlmt='';}    
          $compyid.= $dlmt.$compid['PS_User_Fk'];
    } 
}

if($compyid!=''){
    $copvar="WHERE RGT_PK IN ($compyid)";
}
else{
    $copvar='';
}

$search4=db_query("SELECT * FROM ".TABLE_REGISTRATION." $copvar");
$compysector='';
$resCount4 = db_num_rows($search4); 
if($resCount4>0){ 
    while($compysec = mysql_fetch_array($search4)){ 
 if($compysector!=''){$dlmt=',';}else{$dlmt='';}    
          $compysector.= $dlmt.$compysec['RGT_Sector'];
    } 
}
//echo $compysector;
    ?>
  <select class="units reset" name="sector" id="sector">
     <option value="">Select Category</option> 
<?php       
       $select=db_query("SELECT * FROM  ".TABLE_SECTOR." WHERE Id IN ($compysector)");
      
       while($row = db_fetch_array($select)){  
?> 
<option <?php if($row['Id']==$sectorid){ ?> selected="selected"  <?php } ?> value="<?php echo $row['Id']; ?>"> <?php echo $row['S_Name']; ?></option> 
     <?php } ?>              
                                
</select>  
    
<?php
} 
if($requesttype=='Service'){
  
if($searchkey!='')
{ 
// Based On Keyword, Display
$findproductmatch     = get_Search_Id(TABLE_ADMINPRODUCT, "Id", "ProductName", $searchkey);
//echo $findproductmatch.'</br>';
$findkeywordmatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Keyword", $searchkey);
//echo $findkeywordmatch.'</br>';
$finddisplaymatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Display", $searchkey);
//echo $finddisplaymatch.'</br>';
if($findproductmatch!='' || $findkeywordmatch!='' || $finddisplaymatch!='' )
{ 
$con = " WHERE (PS_Display=''";
if($findproductmatch!='')
{
$con .=" OR ";	
$con .="PS_Fk IN (".$findproductmatch.")";
} 
if($findkeywordmatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$findkeywordmatch.")";
}
if($finddisplaymatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$finddisplaymatch.")";
}
$con .= ")";
}
else
$con = "WHERE PS_Display=''";
}    
    
  
$search3=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE."  $con");
//echo "SELECT * FROM ".TABLE_PRODUCTSERVICE."  $con";
$compyid='';
$resCount3 = db_num_rows($search3);
if($resCount3>0){
    while($compid = mysql_fetch_array($search3)){ 
 if($compyid!=''){$dlmt=',';}else{$dlmt='';}    
          $compyid.= $dlmt.$compid['PS_User_Fk'];
    } 
}

if($compyid!=''){
    $copvar="WHERE RGT_PK IN ($compyid)";
}
else{
    $copvar='';
}

$search4=db_query("SELECT * FROM ".TABLE_REGISTRATION." $copvar");
$compysector='';
$resCount4 = db_num_rows($search4); 
if($resCount4>0){ 
    while($compysec = mysql_fetch_array($search4)){ 
 if($compysector!=''){$dlmt=',';}else{$dlmt='';}    
          $compysector.= $dlmt.$compysec['RGT_Sector'];
    } 
}
//echo $compysector;
    ?>
  <select class="units reset" name="sector" id="sector">
     <option value="">Select Category</option> 
<?php       
       $select=db_query("SELECT * FROM  ".TABLE_SECTOR." WHERE Id IN ($compysector)");
      
       while($row = db_fetch_array($select)){  
?> 
<option <?php if($row['Id']==$sectorid){ ?> selected="selected"  <?php } ?> value="<?php echo $row['Id']; ?>"> <?php echo $row['S_Name']; ?></option> 
     <?php } ?>              
                                
</select>  
    
<?php
} 
     }
?>






