<script> 
$(document).ready(function(){
	$(".hide1").hide();
        
    $("#visible").click(function(){
             
		$(".hide1").show("slow");
                $("#visible").hide("slow");
                $(".visible").show("slow");
                
    });
    
     $(".visible").click(function(){
        
		$(".hide1").hide("slow");
                $("#visible").show("slow");
                $(".visible").hide("slow");
                
    });
    
});

$(document).ready(function(){
	        
    $(".selected").click(function(){
             
		$(".submenu1").show("slow");                
    });
    
});


$(document).ready(function(){
    
    $("#list1").click(function(){
        
                $("#list").show("slow");
                $("#grid").hide("slow");
                 $(this).addClass("active");
                $("#grid1").removeClass("active");
    });
    $("#grid1").click(function(){
                $("#list").hide("slow");
                $("#grid").show("slow");     
                 $(this).addClass("active");
                $("#list1").removeClass("active");
    });
    });
</script> 


<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>

<!--Slider-->
<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
<script src="js/style.js" type="text/javascript"></script>


<!--scripts end-->
<script type="text/javascript" src="js/Searchlist.js"></script>
<!--<link href="css/popup.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/popupbox.js"></script>-->


<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>
<script type="text/javascript">  
function Searchusingenterkey(e)
{       
if(type2=='')
type2 = $("#type2").val();
else
type2 = type2 ;
selectcity('$type2');
selectsector('$type2');
    
// look for window.event in case event isn't passed in
//if (typeof e == 'undefined' && window.event) { e = window.event; }
//if (e.keyCode == 13)
// alert("enterkey");
//searchResult($('#searchlist').val(),'','');
}
</script> 

<link href="css/menu-mtree.css" rel="stylesheet" type="text/css"/>

<style>
.mtree-demo .mtree {
  background: red;
  margin: 20px auto;
  max-width: 320px;
  border-radius: 3px;
}

.mtree-skin-selector {
  text-align: center;
  background: #EEE;
  padding: 10px 0 15px;
}

.mtree-skin-selector li {
  display: inline-block;
  float: none;
}

.mtree-skin-selector button {
  padding: 5px 10px;
  margin-bottom: 1px;
  background: #BBB;
}

.mtree-skin-selector button:hover { background: #999; }

.mtree-skin-selector button.active {
  background: #999;
  font-weight: bold;
}

.mtree-skin-selector button.csl.active { background: #FFC000; }
</style>

<?php 
if(isset($_REQUEST['searchkey'])){
$searchkey=$_REQUEST['searchkey'];
$requestType=$_REQUEST['requesttype']; 
$userCity=$_REQUEST['usercity'];
$userArea=AreaName($_REQUEST['userarea']);
$type2 = $_REQUEST['type2'];
$prodserviceid = $_REQUEST['prodservice'];

$sectorid = $_REQUEST['usersector'];

//echo $type2;
//$findcitymatch=get_Search_Id(TABLE_GENERALAREAMASTER,"Id","Area",$userCity);
////echo $findcitymatch;
//if($findcitymatch!='')
//$querycitymatch ="AND RGT_City IN (".$findcitymatch.")";
//else
//$querycitymatch='';
//TO SEARCH AND FIND THE MERGED SQL 
//echo $userCity;
//$findcitymatch=get_Search_Id(TABLE_GENERALAREAMASTER,"Id","Area",$userCity);
//echo $findcitymatch;

//echo $userCity; 

if($userCity!='')
$querycitymatch ="AND RGT_City IN (".$userCity.")";
else
$querycitymatch='';

//echo $querycitymatch;

if($sectorid!='')
  $querysectormatch ="AND RGT_Sector IN (".$sectorid.")";
else
  $querysectormatch ='';
   

$findareamatch=get_Search_Id(TABLE_AREAMASTER,"AM_Id","AM_Area",$userArea); 
if($findareamatch!='')
$queryareamatch ="AND RGT_Area IN (".$findareamatch.")";
else
$queryareamatch ='';
//if($type2 == 1) 
//{
if($searchkey!='') 
$searchsql = "`RGT_CompName` ='$searchkey'  AND";
else
$searchsql =""; 
//} 
//else if($type2 == 3)
//{
//$findkeywordmatch=get_Search_Id(TABLE_KEYWORDMST,"Kd_Id","Kd_Keyword",$searchkey);
//if($findkeywordmatch!='')
//$findkeywordmatchIds=get_Search_Id(TABLE_MEMBERKEYWORD,"Mk_MemFk","Mk_KeywordFk",$findkeywordmatch); 
//if($findkeywordmatchIds!='')
//$searchsql = "`RGT_PK` IN (".$findkeywordmatchIds.") AND";
//else
//$searchsql ="";
//}
//else
//{
//$findsectormatch=get_Search_Id(TABLE_SECTOR,"Id","S_Name",$searchkey); 
//if($findsectormatch!='')
//$searchsql ="RGT_Sector IN (".$findsectormatch.") AND";
//else
//$searchsql ='';
//}

if($requestType=='company'){
$searchtTitle="Company List";
if($searchkey!='') {
$searchquery=db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch $querysectormatch");
$searchquery1=db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch $querysectormatch");
$searchquery2=db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch $querysectormatch");
$countresult=mysql_num_rows($searchquery); 
while($fetchquery=mysql_fetch_array($searchquery1)){
$relatedsearch.=$fetchquery['RGT_Sector'].',';

}
}
//echo "SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch $querysectormatch";
//echo "SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch $querysectormatch";
} 


else if($requestType=='bestdeals'){
if($prodserviceid!=''){
$searchquery=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE." WHERE PS_Id='".$prodserviceid."'");
$countresult=mysql_num_rows($searchquery);
}
}


else if($requestType=='Service'){
if($prodserviceid!=''){
$searchquery=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE." WHERE PS_Id='".$prodserviceid."'");
$countresult=mysql_num_rows($searchquery);
}
}

}


//if(isset($searchquery2)){
//while($fetchquery=db_fetch_array($searchquery2)){    
//if($requestType=='company'){
//$alreadylisteddetails .=$fetchquery['RGT_PK'].',';
//
//}
//if($requestType=='bestdeals'){
//$alreadylisteddetails.=$fetchquery['PS_Id'].',';
//}
//$finaldetails=substr($alreadylisteddetails, 0, -1);;    
//}
//}

?>

            <!-- Login Section -->
            <div class="container-fluid">
                <div class="co12" style="margin-top: 34px;">
    <div class="grid1">
        
<!--  <a onclick="Togglecity();" id="cityvalue" ></a>-->
<!--<input name="userCity" id="userCity"  type="hidden"  />-->
<input name="type2" id="type2"  type="hidden" value="<?php echo $_REQUEST['type2'] ;?>"  />  

<!--<input name="userCityselect" placeholder="Select City" autocomplete="off" id="userCityselect"  type="text"  value="" style="width:280px;height:20px;border:1px solid #C8C8C8;color:#000000; display:none;" /><div id="ListCityRes"></div>
<input type="hidden" name="citylisthidden" id="citylisthidden" value="" />
<div id="citysuggestions" style="display: none;"> <div style="position: relative; width: 260px;  max-height: 300px; z-index: 9999; display: block;background: none repeat scroll 0 0 #FFFFFF;text-align:left;list-style: none outside none;border: 1px solid rgba(0, 51, 255, 0.5);cursor:pointer;" id="citysuggestionlist"> &nbsp; </div></div>
<span style="display:none;"><span id="citydisplayname"></span></span>-->
        
<div class="wrapper-simple">  
<input style="width: 340px;" type="text" autocomplete="off" name="searchkey" id="searchlist" autofocus value="<?php echo $searchkey;?>"  onkeyup="Searchusingenterkey(event);" >
<div id="SearchListRes"></div>

                </div>
            </div> 
<!--onclick="searchResult($('#searchlist').val(),'','<?php echo $type2;?>');"-->
            <div class="grid2 wrapper-simple">
                <input class="hvr-pulse-shrink" value="GET" style="" type="submit" onclick="searchResult($('#searchlist').val(),'','<?php echo $type2;?>','');">
                <h4 id="visible" style="margin-top: 41px; float: right; width: 173px;" onclick="selectcity('$type2');selectsector('$type2');">Advance search</h4>
                <h4 class="visible" style="margin-top: 41px; display: none;width: 173px;float: right; ">Hide Advance search</h4>
            </div>
                        
<div class="grid3">  
    <?php
if($requestType=='Service')
 $sel = 'checked="checked"';
else
$sel = '';
       
if($requestType=='bestdeals')
$sell = 'checked="checked"';
else
$sell = '';
   
if($requestType=='company')
$sel1 = 'checked="checked"';
else
$sel1='';

    ?>
<div> 
  <?php 
//  echo $requestType;
//  echo $sel."sel";
//   echo $sell."sell";
//  echo $sel1."sel1"; 
  ?>
    <input type="radio" id="requestTypeser" name="requestType" <?php echo $sel; ?> value="Service" title="Service" onclick="changesearchtype();" />
    <label for="requestTypeser" style="font-size: 19px;" >SERVICE</label>
</div> 
<div>
    <input type="radio" name="requestType" id="requestTypedeals" <?php echo $sel1; echo $sell; ?> value="bestdeals" title="Xbit" onclick="changesearchtype();" />
    <label for="requestTypedeals" style="font-size: 19px;">PRODUCT</label>
</div>
</div> 
</div>  
<div class="co12 hide1" style="padding-bottom: 20px">
        <div class="grid4">
            <div class="wrapper-simple"> 
<div class="styleSelect" id="sourceselectsector"> 
    <select class="units reset" name="sector" id="sector">
    <option value="">Select Category</option> 
    <?php 
    $select=db_query("SELECT * FROM  ".TABLE_SECTOR."");
    while ($row = db_fetch_array($select)){  
    ?>
    <option <?php if($row['Id']==$sectorid){ ?> selected="selected"  <?php } ?> value="<?php echo $row['Id']; ?>"><?php echo $row['S_Name']; ?></option> 
  <?php } ?> 
  </select>
     <!--<span class="selectInner">V</span>-->
</div>
</div> 
            </div> 

    <div class="grid5">
        <div class="wrapper-simple">
         <div class="styleSelect" id="sourceselectcity">
             <select class="units reset" id="userCity" name="userCity" >
              <option value="">Select city</option>
                <?php 
$select=db_query("SELECT * FROM  ".TABLE_GENERALAREAMASTER."");
while ($row = db_fetch_array($select)){  
?> 
  <option <?php if($row['Id']==$userCity){ ?> selected="selected"  <?php }  ?> value="<?php echo $row['Id']; ?>"><?php echo $row['Area']; ?></option> 
<?php } ?>              

            </select>

          </div>
        </div> 
    </div>
                </div>
                
                <div class="co1m2">
                    <div class="list"><h4><!--List | Grid</h4>-->
		    <div class="btn-group"> 
                <button type="button" class="btn active" id="list1"><span class="glyphicon glyphicon-list-alt"> List</span></button>
    <button type="button" class="btn" id="grid1"><span class="glyphicon glyphicon-th"> Grid</span></button>
</div> 
		    </div>
                    <div class="list">
                        
                        <div style="float: right;">
                        <?php //echo getManagePagingLink($sqltot,$pagesize, $startdata, 'pagerole'); ?>
                        </div>
<!--                        <h4 style="float: right;"> 
                            Showing <?php //echo $_REQUEST['startdata']+1; ?> Out of <?php echo $rtot; ?>
                        </h4> -->
                        
                    </div>
                </div>
            </div> 
            <!--End Login Section -->


<?php

if($requestType=='company'){?>

<?php if($countresult>0){?>
            
<!-- company list start-->
<div class="com-bg">
<div class="container-fluid company">
    
<?php  while($fetchquery=mysql_fetch_array($searchquery)){  
    
$yearofestablishment = explode('-',$fetchquery['RGT_YrofEstablish']);

 if(strlen(stripslashes($fetchquery['RGT_CompName']))>20){ $Compnamefixlimit = substr(stripslashes($fetchquery['RGT_CompName']),0,20).'...' ;} else { $Compnamefixlimit =  stripslashes($fetchquery['RGT_CompName']);} 
$Compnamedisp = '<span style="cursor:pointer;" title="'.$fetchquery['RGT_CompName'].'">'.$Compnamefixlimit.'</span>';     
   
if($fetchquery['RGT_Website']!=''){
    $url=$fetchquery['RGT_Website'];
    $display=$fetchquery['RGT_Website'];
}
else{
    $url="#";
    $display="-";  
}
?>
                <!-- company inner content end -->
                
<div class="co1m2">
    <div class="com1"> 
        <h3><?php echo $Compnamedisp; ?></h3>
<!--                    <img src="images/company.png" class="img-responsive" width="164" height="157"/>-->

<img src="<?php if($fetchquery['RGT_PK']!=''){ echo getLogodetails($fetchquery['RGT_PK'],$path); } else { echo 'images/default/no_image.png'; }?>"  width="164" height="157"  />

   </div>
<div class="com2">
<p style="text-transform: uppercase;">SINCE-<?php echo $yearofestablishment[2]; ?></p>
<p><strong>Website:</strong> <a href="<?php echo $url; ?>" style="color: red;" target="_blank"><?php echo $display; ?></a></p>
<p><strong>Custumer Reviews:</strong> <span style="color: #e7711b;">*****(39 Reviewa)</span></p>
<p><strong>Description:</strong> Welcome. Born out of a vision for first saree in a city known for its unique blend of Indian and French culture, and has, within a short span of [....]</p>
<div class="company1">
    <a href="#" class="hvr-rectangle-in">Offline</a>
</div>
<div class="company1">
    <a href="#" class="hvr-rectangle-in">View Services</a>
</div>
</div>
<div class="com3">
<img src="images/map.jpg" class="img-responsive"/>
<div class="map1">
    <?php

if (strlen($fetchquery['RGT_Address1']) > 20)	
$dispaddress =  substr($fetchquery['RGT_Address1'],0,20).'...';
else
$dispaddress = $fetchquery['RGT_Address1'];

if (strlen($fetchquery['RGT_Address2']) > 20)	
$dispaddress2 =  substr($fetchquery['RGT_Address2'],0,20).'...';
else
$dispaddress2 = $fetchquery['RGT_Address2'];
?>
                        
                        
<table width="100%">
    <tr>
        <td valign="top" width="30%"><b>Phone:</b></td>
        <td valign="top" width="70%"><?php if($fetchquery['RGT_Landline']!='') echo $fetchquery['RGT_Landline'];else echo $fetchquery['RGT_Mobile'] ;?></td>
    </tr>
</table>
</div>
<div class="map2">
<table width="100%">
    <tr>
        <td valign="top" width="30%"><b>Address :</b></td>
        <td valign="top" width="70%">
<?php 
echo '<span style="cursor:pointer;" title="'.$fetchquery['RGT_Address1'].'">'.$dispaddress.'</span>'.'<br>';
if($fetchquery['RGT_Address2']!=''){ echo ', <span style="cursor:pointer;" title="'.$fetchquery['RGT_Address2'].'">'.$dispaddress2.'</span><br/>';}
if($fetchquery['RGT_Area']!=''){ getAreadetails($fetchquery['RGT_Area']);}  if($fetchquery['RGT_City']!=''){ getCitydetails($fetchquery['RGT_City']); } if($fetchquery['RGT_State']!=''){  getStatedetails($fetchquery['RGT_State']); } if($fetchquery['RGT_Pincode']!=''){ getPindetails($fetchquery['RGT_Pincode']); } if($fetchquery['RGT_Country']!=''){ getCountrydetails($fetchquery['RGT_Country'],$fetchquery['RGT_Pincode']); } ?></td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
                </div>
                
           <!-- company inner content end -->      
                
<?php  } ?>          
                
                
            </div>
            </div>

<!-- company list end-->



<?php }else{  ?>

<!--
<div class="com-bg">
<div class="container-fluid company">
    
    
                 company inner content end 
                
            <div class="co1m2">
               <h3 style="text-align:center;">
                <span title="#" style="text-align:center;color: #c62026;">No Result Found</span></h3>
              
                </div>
                
            company inner content end       
                
          
                
                
            </div>
            </div>-->


<?php  }  } ?>

<!-- best deals-->

<?php
if($requestType=='bestdeals'){
   // echo "enterbestdeals";
    ?>

<?php if($countresult>0){
    
    //$bestdealres="0";
    ?>
            
<!-- company list start-->
<div class="com-bg">
<div class="container-fluid company">
    
<?php  while($fetchquery=mysql_fetch_array($searchquery)){ 
    
$yearofestablishment = explode('-',get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_YrofEstablish'));
 if(strlen(stripslashes(get_company_name($fetchquery['PS_Id'])))>25){ $Compnamefixlimit = substr(stripslashes(get_company_name($fetchquery['PS_Id'])),0,25).'...' ;} else { $Compnamefixlimit =  stripslashes(get_company_name($fetchquery['PS_Id']));} 
 
if($yearofestablishment[2]!='')
$Since = '<span style="color:#007088;"> (Since - '.$yearofestablishment[2].')</span>';
else
$Since ='';
$Compnamedisp = $Compnamefixlimit; 
?>
                <!-- company inner content end -->
                
<div class="co1m2">
    <div class="com1"> 
        <h3><?php echo $Compnamedisp; ?></h3>
<!--                    <img src="images/company.png" class="img-responsive" width="164" height="157"/>-->

<img src="<?php if($fetchquery['PS_CoverImg']!=''){ echo $fetchquery['PS_CoverImg']; } else { echo 'images/default/no_image.png'; }?>"  width="124" height="115" />

   </div>
<div class="com2">
<p style="text-transform: uppercase;">SINCE-<?php echo $yearofestablishment[2]; ?></p>
<!--<p><strong>Website:</strong> <a href="<?php echo $url; ?>" style="color: red;" target="_blank"><?php echo $display; ?></a></p>-->
<p><strong>Custumer Reviews:</strong> <span style="color: #e7711b;">*****(39 Reviewa)</span></p>
<p><strong>Product:</strong> <?php echo $fetchquery['PS_Display']?> <br>
<?php 
if($fetchquery['PS_Price']!=''&&$fetchquery['PS_Price']!='0'){
echo '<span> Price :'.' '.$fetchquery['PS_Price'].' '.CurrencyName($fetchquery['PS_Currency']).'</span>';
}
if($fetchquery['PS_Unit']!=''){
echo '<span> Unit :'.' '.$fetchquery['PS_Unit'].'</span>';
}

?>
</p>
<p><strong>Business Description:</strong> <?php if(strlen($fetchquery['PS_Description'])>150){ echo substr($fetchquery['PS_Description'],0,150).'...'; } else {echo $fetchquery['PS_Description']; } ?></p>
<div class="company1">
    <a href="#" class="hvr-rectangle-in">Offline</a>
</div>
<div class="company1">
    <a href="#" class="hvr-rectangle-in">View Services</a>
</div>
</div>
<div class="com3">
<img src="images/map.jpg" class="img-responsive"/>
<div class="map1">
    <?php

if (strlen($fetchquery['RGT_Address1']) > 20)	
$dispaddress =  substr($fetchquery['RGT_Address1'],0,20).'...';
else
$dispaddress = $fetchquery['RGT_Address1'];

if (strlen($fetchquery['RGT_Address2']) > 20)	
$dispaddress2 =  substr($fetchquery['RGT_Address2'],0,20).'...';
else
$dispaddress2 = $fetchquery['RGT_Address2'];
?>
                        
                        
<table width="100%">
    <tr>
        <td valign="top" width="30%"><b>Phone:</b></td>
        <td valign="top" width="70%"><?php if($fetchquery['RGT_Landline']!='') echo $fetchquery['RGT_Landline'];else echo $fetchquery['RGT_Mobile'] ;?></td>
    </tr>
</table>
</div>
<div class="map2">
<table width="100%">
    <tr>
        <td valign="top" width="30%"><b>Address :</b></td>
        <td valign="top" width="70%">
<?php 
echo '<span style="cursor:pointer;" title="'.$fetchquery['RGT_Address1'].'">'.$dispaddress.'</span>'.'<br>';
if($fetchquery['RGT_Address2']!=''){ echo ', <span style="cursor:pointer;" title="'.$fetchquery['RGT_Address2'].'">'.$dispaddress2.'</span><br/>';}
getAreadetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Area')); 
getCitydetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_City'));
getStatedetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_State'));
getPindetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Pincode'));
getCountrydetails2(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Country'));


 ?></td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
                </div>
                
           <!-- company inner content end -->      
                
<?php  } ?>          
                
                
            </div>
            </div>

<!-- company list end-->



<?php }else{ 

    ?>
<!--<div class="com-bg">
<div class="container-fluid company">
                 company inner content end 
            <div class="co1m2">
               <h3 style="text-align:center;">
                <span title="#" style="text-align:center;color: #c62026;">No Result Found</span></h3>
                </div>
            company inner content end       
            </div>
            </div>-->
<?php  }  } ?>

<?php

if($requestType=='Service'){?>

<?php if($countresult>0){
    //$serviceres="0";
    ?>
            

<!-- company list start-->
<div class="com-bg">
<div class="container-fluid company">
    
<?php  while($fetchquery=mysql_fetch_array($searchquery)){ 
    
$yearofestablishment = explode('-',get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_YrofEstablish'));
 if(strlen(stripslashes(get_company_name($fetchquery['PS_Id'])))>25){ $Compnamefixlimit = substr(stripslashes(get_company_name($fetchquery['PS_Id'])),0,25).'...' ;} else { $Compnamefixlimit =  stripslashes(get_company_name($fetchquery['PS_Id']));} 
 
if($yearofestablishment[2]!='')
$Since = '<span style="color:#007088;"> (Since - '.$yearofestablishment[2].')</span>';
else
$Since ='';
$Compnamedisp = $Compnamefixlimit; 
?>
                <!-- company inner content end -->
                
<div class="co1m2">
    <div class="com1"> 
        <h3><?php echo $Compnamedisp; ?></h3>
<!--                    <img src="images/company.png" class="img-responsive" width="164" height="157"/>-->

<img src="<?php if($fetchquery['PS_CoverImg']!=''){ echo $fetchquery['PS_CoverImg']; } else { echo 'images/default/no_image.png'; }?>"  width="124" height="115" />

   </div>
<div class="com2">
<p style="text-transform: uppercase;">SINCE-<?php echo $yearofestablishment[2]; ?></p>
<!--<p><strong>Website:</strong> <a href="<?php echo $url; ?>" style="color: red;" target="_blank"><?php echo $display; ?></a></p>-->
<p><strong>Custumer Reviews:</strong> <span style="color: #e7711b;">*****(39 Reviewa)</span></p>
<p><strong>Product:</strong> <?php echo $fetchquery['PS_Display']?> <br>
<?php 
if($fetchquery['PS_Price']!=''&&$fetchquery['PS_Price']!='0'){
echo '<span> Price :'.' '.$fetchquery['PS_Price'].' '.CurrencyName($fetchquery['PS_Currency']).'</span>';
}
if($fetchquery['PS_Unit']!=''){
echo '<span> Unit :'.' '.$fetchquery['PS_Unit'].'</span>';
}

?>
</p>
<p><strong>Business Description:</strong> <?php if(strlen($fetchquery['PS_Description'])>150){ echo substr($fetchquery['PS_Description'],0,150).'...'; } else {echo $fetchquery['PS_Description']; } ?></p>
<div class="company1">
    <a href="#" class="hvr-rectangle-in">Offline</a>
</div>
<div class="company1">
    <a href="#" class="hvr-rectangle-in">View Services</a>
</div>
</div>
<div class="com3">
<img src="images/map.jpg" class="img-responsive"/>
<div class="map1">
    <?php

if (strlen($fetchquery['RGT_Address1']) > 20)	
$dispaddress =  substr($fetchquery['RGT_Address1'],0,20).'...';
else
$dispaddress = $fetchquery['RGT_Address1'];

if (strlen($fetchquery['RGT_Address2']) > 20)	
$dispaddress2 =  substr($fetchquery['RGT_Address2'],0,20).'...';
else
$dispaddress2 = $fetchquery['RGT_Address2'];
?>
                        
                        
<table width="100%">
    <tr>
        <td valign="top" width="30%"><b>Phone:</b></td>
        <td valign="top" width="70%"><?php if($fetchquery['RGT_Landline']!='') echo $fetchquery['RGT_Landline'];else echo $fetchquery['RGT_Mobile'] ;?></td>
    </tr>
</table>
</div>
<div class="map2">
<table width="100%">
    <tr>
        <td valign="top" width="30%"><b>Address :</b></td>
        <td valign="top" width="70%">
<?php 
echo '<span style="cursor:pointer;" title="'.$fetchquery['RGT_Address1'].'">'.$dispaddress.'</span>'.'<br>';
if($fetchquery['RGT_Address2']!=''){ echo ', <span style="cursor:pointer;" title="'.$fetchquery['RGT_Address2'].'">'.$dispaddress2.'</span><br/>';}
getAreadetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Area')); 
getCitydetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_City'));
getStatedetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_State'));
getPindetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Pincode'));
getCountrydetails2(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Country'));


 ?></td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
                </div>
                
           <!-- company inner content end -->      
                
<?php  } ?>          
                
                
            </div>
            </div>

<!-- company list end-->



<?php }else{  
    
  
    ?>
<!--<div class="com-bg">
<div class="container-fluid company">
                 company inner content end 
            <div class="co1m2">
               <h3 style="text-align:center;">
                <span title="#" style="text-align:center;color: #c62026;">No Result Found</span></h3>
                </div>
            company inner content end       
            </div>
            </div>-->
<?php  }  } ?>

<div class="container-fluid">
<h4 style="color: white;">
    <?php
//echo $countresult;
if($countresult==0){
      echo "Search Result";
}
else{
  echo "Related search";
}
    ?>
    </h4>
                 
<!--grid items-->
<div class="col-sm-8" id="related">
     <!--List items-->
     <div class="content mCustomScrollbar" id="content3" style="height:540px;">

 <div id="list">
 
                      
 <?php 

   //echo $_REQUEST['type2'];
if($requestType=='company'){ getKeywordCompListFromSearchedCompany($_REQUEST['searchkey'],$_REQUEST['type2'],$userCity,$sectorid); } ?>
     
<?php if($requestType=='bestdeals') { getRelatedSearchBestdeals($_REQUEST['searchkey'],$userCity,$sectorid); } ?>

<?php if($requestType=='Service'){ getRelatedServiceBestdeals($_REQUEST['searchkey'],$userCity,$sectorid); } ?>     
                  </div>
                          
                          <div id="grid" style="display: none;">
			      <section class="wrapper cl">
		<!--Effect: Rotate More -->  
          <!-- grid starts-->      
<?php if($requestType=='company'){ getKeywordCompListFromSearchedCompany1($_REQUEST['searchkey'],$_REQUEST['type2'],$userCity,$sectorid); } ?>     
          
<?php if($requestType=='bestdeals') { getRelatedSearchBestdeals1($_REQUEST['searchkey'],$userCity,$sectorid); } ?>
     
 <?php if($requestType=='Service') { getRelatedServiceBestdeals1($_REQUEST['searchkey'],$userCity,$sectorid); } ?>         
          
          
          
<!--                <div class="pic">
		    <img src="img/03.png" class="pic-image" alt="Pic"/>
		    <span class="pic-caption rotate-in">
                        <h4>Company Type:</h4>
                        <p>Textile shop</p>
                        <h4>Company Review</h4>
                        <div id="grid">
                                          <ul>
                                              <li><img src="images/star.png" width="10%"/></li>
                                              <li><img src="images/star.png" width="10%"/></li>
                                              <li><img src="images/star.png" width="10%"/></li>
                                              <li><img src="images/star1a.png" width="10%"/></li>
                                              <li><img src="images/star1a.png" width="10%"/></li>
                                              <li><img src="images/star1a.png" width="10%"/></li>
                                          </ul>
                        </div>
		    </span>
		</div>-->
                
                
	<!-- grid ends-->     	
          
		
	</section>
                              
                              <script>
		document.addEventListener("touchstart", function(){}, true);
	</script>
                          </div>
			  </div>

                      
                     <!--Sliders-->
                     <ul class="bxslider" style="margin-top: 10px;">
                        <li>
                            <div class="slid" id="container">
                                      <div class="slider11" id="sidebar1">
                                      <img src="images/pic1.jpg"/>
                                      </div> 
                                      <div class="slider12" id="content1">
                                          <h5>Diamond earings</h5>
                                          <p id="lg">A earring is a piece of jewellery attached to the eat via a piercing in the ear</p>
                                          <a class="venobox" data-gall="myGallery" data-type="inline" href="#msg">Read More</a>
                                              <!-- Modal External Out of the total thirty one-->
                                        
                                         <div id="msg" style="display:none;">
                                             Hai
                                        </div>
                                          </div>
                                     </div> 
                                  
                        </li>
                        <li><div class="slid" id="container">
                                      <div class="slider11" id="sidebar1">
                                      <img src="images/pic1.jpg"/>
                                      </div>
                                       <div class="slider12" id="content1">
                                          <h5>Diamond earings</h5>
                                          <p id="lg">A earring is a piece of jewellery attached to the eat via a piercing in the ear</p>
                                          <a class="venobox" data-gall="myGallery" data-type="inline" href="#msg1">Read More</a>
                                              <!-- Modal External Out of the total thirty one-->
                                        
                                         <div id="msg1" style="display:none;">
                                             Hai1
                                        </div>
                                          </div>
                                  </div></li>
                        <li><div class="slid" id="container">
                                      <div class="slider11" id="sidebar1">
                                      <img src="images/pic1.jpg"/>
                                      </div>
                                       <div class="slider12" id="content1">
                                          <h5>Diamond earings</h5>
                                          <p id="lg">A earring is a piece of jewellery attached to the eat via a piercing in the ear</p>
                                          <a class="venobox" data-gall="myGallery" data-type="inline" href="#msg2">Read More</a>
                                              <!-- Modal External Out of the total thirty one-->
                                        
                                         <div id="msg2" style="display:none;">
                                             Hai2
                                        </div>
                                          </div> 
                                  </div></li>
                        <li><div class="slid" id="container">
                                      <div class="slider11" id="sidebar1">
                                      <img src="images/pic1.jpg"/>
                                      </div>
                                       <div class="slider12" id="content1">
                                          <h5>Diamond earings</h5>
                                          <p id="lg">A earring is a piece of jewellery attached to the eat via a piercing in the ear</p>
                                          <a class="venobox" data-gall="myGallery" data-type="inline" href="#msg3">Read More</a>
                                              <!-- Modal External Out of the total thirty one-->
                                        
                                         <div id="msg3" style="display:none;">
                                             Hai3
                                        </div>
                                          </div>
                                  </div></li>
                        <li><div class="slid" id="container">
                                      <div class="slider11" id="sidebar1">
                                      <img src="images/pic1.jpg"/>
                                      </div>
                                       <div class="slider12" id="content1">
                                          <h5>Diamond earings</h5>
                                          <p id="lg">A earring is a piece of jewellery attached to the eat via a piercing in the ear</p>
                                          <a class="venobox" data-gall="myGallery" data-type="inline" href="#msg4">Read More</a>
                                              <!-- Modal External Out of the total thirty one-->
                                        
                                         <div id="msg4" style="display:none;">
                                             Hai4
                                        </div>
                                          </div> 
                                  </div></li>
                      </ul>
                 </div>
                 <!--right side menu-->
                 
<div class="col-sm-4" id="related1a" style="padding: 15px; background: rgba(255, 255, 255, 0.28) none repeat scroll 0% 0%;">
                     
                     <!-- Menu 1-->
                     <div class="panel panel-default" id="related1" >
                        <div class="panel-heading">Popular products</div>
                        <div class="content mCustomScrollbar" id="content4" style="height:260px; background: #F2F2F2 none repeat scroll 0px 0px;">
                        <div class="panel-body">
                            <ul class="mtree transit">
                                <li><a href="#">All Categories</a>
                                    <ul>
                                      <li><a href="#">Product</a>
                                          <ul>
                                            <li><a href="#">Company</a>
                                                <ul>
                                                <li><a href="#">Restaurant</a></li>
                                                <li><a href="#">Agriculture</a></li>
                                                <li><a href="#">Automotive</a></li>
                                                <li><a href="#">Aviation</a></li>
                                                <li><a href="#">Banking</a></li>
                                                <li><a href="#">Construction</a></li>
                                                <li><a href="#">Defence</a></li>
                                                <li><a href="#">Education</a></li>
                                                <li><a href="#">Electricals</a></li>
                                                <li><a href="#">Electronics</a></li>
                                                <li><a href="#">Energy</a></li>
                                                <li><a href="#">Engineering</a></li>
                                                <li><a href="#">Entertainment </a></li>
                                                </ul>
                                            </li>
                                          </ul>
                                      </li>
                                    </ul>
                                </li>
                            </ul>
                              
                        </div><!-- pannel body closed -->
                        </div><!-- mscroll closed-->
                     </div><!-- pannel closed -->
                     
                     
                     <!-- Menu 2 -->
                     <div class="panel panel-default" id="related1" >
                        <div class="panel-heading">Popular products</div>
                        <div class="content mCustomScrollbar" id="content5" style="height:260px; background: #F2F2F2 none repeat scroll 0px 0px;">
                        <div class="panel-body">
                            <ul class="mtree transit">
                                <li><a href="#">All Categories</a>
                                    <ul>
                                      <li><a href="#">Product</a>
                                          <ul>
                                            <li><a href="#">Company</a>
                                                <ul>
                                                <li><a href="#">Floor protector</a></li>
                                                <li><a href="#">One coat plaster</a></li>
                                                <li><a href="#">Composite panel</a></li>
                                                <li><a href="#">Cement wall</a></li>
                                                <li><a href="#">Cement board</a></li>
                                                <li><a href="#">Building materials</a></li>
                                                <li><a href="#">Boundary wall</a></li>
                                                <li><a href="#">Structural glazing</a></li>
                                                </ul>
                                            </li>
                                          </ul>
                                      </li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- pannel body closed -->
                        </div><!-- mscroll closed-->
                     </div><!-- pannel closed -->
                <!-- /.sidebar-collapse -->
                </div>
                     
                     
                 </div>


<!-- Dropdown  Menu -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="js/jquery.velocity.min.js" type="text/javascript"></script>
<script src="js/menu-mtree.js" type="text/javascript"></script>


<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
    
    
//    $(document).ready(function(){
//    $("#content").mCustomScrollbar({
//                scrollButtons:{
//                    enable:true
//                }
//            });
//});
    
    
    
//		(function($){
//			$(window).load(function(){
//				
//				$("a[rel='load-content']").click(function(e){
//					e.preventDefault();
//					var url=$(this).attr("href");
//					$.get(url,function(data){
//						$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
//						//scroll-to appended content 
//						$(".content").mCustomScrollbar("scrollTo","h2:last");
//					});
//				});
//				
//				$(".content").delegate("a[href='top']","click",function(e){
//					e.preventDefault();
//					$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
//				});
//				
//			});
//		})(jQuery);
                
                
                
            $(document).ready(function(){
    $("#content3").mCustomScrollbar({
                scrollButtons:{
                    enable:true
                }
            });
}); 

 $(document).ready(function(){
    $("#content4").mCustomScrollbar({
                scrollButtons:{
                    enable:true
                }
            });
}); 

 $(document).ready(function(){
    $("#content5").mCustomScrollbar({
                scrollButtons:{
                    enable:true
                }
            });
}); 
	</script>
