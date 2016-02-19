<?php
ob_start();
session_start();
include_once("include/Configuration.php");
include_once(PAGE_DBCONNECTION);
db_connect();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
  <meta charset="utf-8">
  <title><?php echo $Title;?></title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint"> 
  <link href="css/demo.css" rel='stylesheet' type='text/css' />	
  <link rel="stylesheet" href="css/style.css"> 
  <script src="js/jquery-1.7.1.min.js"> </script>
 <script type="text/javascript" src="js/Common.js"></script>
  <script src="js/Searchlist.js" type="text/javascript"></script>
  <script src="js/scripts.js" type="text/javascript"></script>

  <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic|PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=8"/> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <style type="text/css">
#ListCityRes{
	border : 1px solid #8789E7;
	background : #FFFFFF;
	position:absolute;
	display:none;
	padding:2px 0px;
	top:auto;
	font-family :verdana;
	font-size:12px;
	width: 280px !important;
	overflow-x: hidden;
	overflow-y: auto;
	height:130px;
	z-index:100;
}
	
#ListCityRes .list {
	width: 280px;
	padding:0px 0px;
	margin:0px;
	list-style : none;
}
#SearchListRes{ 
/*	border : 1px solid #8789E7;
	background : #FFFFFF;*/
	position:absolute;
	display:none;
	padding:2px 0px;
	top:auto;
	font-family :verdana; 
	font-size:12px;
	width: 350px !important;
/*	overflow-x: hidden;
	overflow-y: auto;*/

	overflow-x: hidden;
	overflow-y: hidden;
	height:130px;
	z-index:100;
        right: 169px; !important;
         margin-top: 77px; !important;
}
	
#SearchListRes .list {
	width: 505px;
	padding:0px 0px;
	margin:0px;
	list-style : none;
}
.list li a{
	text-align : left;
	padding:2px 4px;
	cursor:pointer;
	display:block;
	text-decoration : none;
	color:#FFFFFF;
} 
.selected{
	background : #C3C4C6;
}
.bold{
	font-weight:bold;
	color: #c62026;
}

</style>
</head>

<body>
	<Section class="bg">
		<div class="wrapper_bg">
		<div class="logo"></div>
			<!-- Section 1-->
			<div class="Center_div" style="display:none;">
				<h2 class="text_beem">What you are looking for</h2>
				<div class="Get_pag1">
					<div class="pad_20">
						<div class="Search_icon"></div>
						<div class="get">GET</div>
					</div>
				</div>
			</div>
			<div class="Center_div push_div" style="display:block;">
           <form>            
<div style="width:850px;height:30px;display:none;" align="center" >

<input type="hidden" id="Searchmodel" value="1" />
<input type="radio" id="requestTypeCom" name="requestType" checked="checked" value="company" title="Company" onclick="changesearchtype();" /><label for="requestTypeCom">Company</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="radio" name="requestType" id="requestTypedeals" value="bestdeals" title="Xbit" onclick="changesearchtype();" /><label for="requestTypedeals" >Xbit</label>
</div> 
      
<div id="example"> 
<div class="wrapper-simple" style="width: 111px;">
<div class="expand_box"  style="width: 1px;">
<input type="text" placeholder="Enter what you are looking for" autocomplete="off" name="searchkey" id="searchlist" onkeypress="Searchusingenterkey(event);" style="width: 1px;">
<div class="advance_nav" id="adv_sch" style="display:none;">Advance search</div>
<div id="SearchListRes" ></div>   
</div> 
<input class="hvr-pulse-shrink" id="searchsubmit"  type="button" value="" style="margin-left: -5px;">
 
  <div id="suggestions" style="display: none;"> <div style="width:504px;height:auto;position: relative; z-index: 9999; display: block;text-align:left;border:1px solid #ccc;left:0px;" id="suggestionsList"> &nbsp; </div></div>
<input type="hidden" name="searchlisthidden" id="searchlisthidden" value="" />
    



<a onclick="Togglecity();" id="cityvalue" ></a>

<input name="userCity" id="userCity"  type="hidden" value="" />
<input name="selectarea" id="selectarea"  type="hidden" value="" />
<input name="userCityselect" placeholder="Select City" autocomplete="off" id="userCityselect"  type="text"  value="" style="width:280px;height:25px;border:1px solid #C8C8C8;color:#000000; display:none;" /><div id="ListCityRes"></div>
<input type="hidden" name="citylisthidden" id="citylisthidden" value="" />
<div id="citysuggestions" style="display: none;"> <div style="position: relative; width: 260px;  max-height: 300px; z-index: 9999; display: block;background: none repeat scroll 0 0 #FFFFFF;text-align:left;list-style: none outside none;border: 1px solid rgba(0, 51, 255, 0.5);cursor:pointer;" id="citysuggestionlist"> &nbsp; </div></div>
<span style="display:none;">Select Area in <span id="citydisplayname"  >Pondicherry</span>?</span>
<input type="hidden" name="selectarea" id="selectarea" value="" />
</form> 
    
    
    
						<img src="images/icon.png" style="margin-left: 20px;">
						<div class="src_txt">GET</div>
					<!-- 	<div style="width: 1px;">Advance search</div> -->
					</div>
				</div>
			</div> 
			<!-- Section 1 Ends--> 
			<section class="foot_wrap">
			<div class="pag_nav">
			<ul class="foot_nav">
				<li>Privacy Statement</li>
				<li>User Terms</li>
				<li>Contact</li>
                                <li><a href="<?php if($_SESSION['lid']!=''){?>logout.php<?php } else {?>login.php<?php }?>"><?php if($_SESSION['lid']!=''){?>Sign Out<?php } else {?>Sign In<?php }?></a></li>
                                <li><a href="register.php">Register</a></li>
			<ul>
			</div>
				<footer>
					Copyright © 2015 Xyget. com All rights reserved.
				</footer>
			</section>		
		</div>
	</Section>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
	<script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/demo.js"></script>
</body>
</html>


