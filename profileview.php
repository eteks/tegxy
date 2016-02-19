<?php 
ob_start();
session_start();
include("include/config.php");
include("include/generalfunction.php");
include("include/simplefunction.php");
$pagename = basename($_SERVER['SCRIPT_FILENAME'],'.php');
$requrl   = $_REQUEST['user'];
$lid      = $_SESSION['lid'];

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

if($requrl=='')
    $chk = 1;
else
    $chk = 11;

    if(isset($requrl)!='')
    {    
        $profiledetails = $database->query("call pro_registration('$lid',$chk,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','".$requrl."','')")->fetchAll();
        $prolid         = $profiledetails[0]['RGT_PK'];
        
        if(count($profiledetails)==0)
                header("Location:index.php"); 
            
            $companyname        = $profiledetails[0]['RGT_CompName'];
            $groupname          = $profiledetails[0]['RGT_GroupName'];
            $industry           = $database->query("call pro_industry(2,'".$profiledetails[0]['RGT_Sector']."')")->fetchAll();
            $industrydisp       = $industry[0][0];
            
            $getkey             = getMemberKeywords($profiledetails[0]['RGT_PK']);
            
            if(isset($getkey))
                {
                    if (strlen($getkey) > 35)	
                    $dispkeyword        = substr($getkey,0,35).'...';
                    else
                    $dispkeyword        = $getkey;
                }
            $companytype        = CompanyType($profiledetails[0]['RGT_CompType']);
            $yearofest          = $profiledetails[0]['RGT_YrofEstablish'];
            $compstrength       = $profiledetails[0]['RGT_EmpStrength'];
            
            
            $getoparea          = getOperatingAreas($profiledetails[0]['RGT_PK']);
            if(isset($getoparea))
                {
                    if (strlen($getoparea) > 35)	
                    $dispareas          =  substr($getoparea,0,35).'...';
                    else
                    $dispareas          =  $getoparea;
                }
            $workfrom           = $profiledetails[0]['RGT_WorkingdayFrom'];
            $workto             = $profiledetails[0]['RGT_WorkingdayTo'];
            $bustimefrom        = $profiledetails[0]['RGT_OfficetimeFrom'];
            $bustimeto          = $profiledetails[0]['RGT_OfficetimeTo'];
            $breakfrom          = $profiledetails[0]['RGT_BreaktimeFrom'];
            $breakto            = $profiledetails[0]['RGT_BreaktimeTo'];
            
            $city               = $database->query("call pro_gcity('','','".$profiledetails[0]['RGT_State']."',2)")->fetchAll();
            $citydisp           = $city[0][0];
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title><?php echo $Title;?></title>
<link rel="stylesheet" type="text/css" href="css/profile.css" />
<link rel="stylesheet" type="text/css" href="css/trans.css" />
<link rel="stylesheet" type="text/css" href="css/w3.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function()
{
    $('.sub_menu ul li a').click(function()
        {    
             $('.sub_menu ul li a').removeClass('current');
             $(this).addClass('current');
        });


    $("#show").click(function()
        {     
            $(".panel-group").fadeOut("slow");
            $(".showcase").fadeIn("slow");
        });

    $("#profile").click(function()
        {
            $(".panel-group").fadeIn("slow");
            $(".showcase").fadeOut("slow");
        });

    $("#tabcurrent").click(function()
        {
            $("#content1").fadeIn("slow");
            $("#content2").hide();
            $("#content3").hide();
       });
    $("#tabcurrent1").click(function()
        { 
            $("#content2").fadeIn("slow");	
            $("#content1").hide();
            $("#content3").hide();

        });
    $("#tabcurrent2").click(function()
        {

            $("#content3").fadeIn("slow");
            $("#content1").hide();
            $("#content2").hide();

        });


});

</script>		
<style>
@import url('css/search_subicon.css');

/* Icon when the collapsible content is shown */
.btn1:after {
font-family: "Glyphicons Halflings";
content: "\e114";
float: right;
font-size: 13px;
position: relative;
bottom: 18px;
color: #fff;
}
/* Icon when the collapsible content is hidden */
.btn1.collapsed:after {
content: "\e080";
font-size: 13px;
position: relative;
bottom: 18px;
color: #fff;
}


/* tabs  */
*, *:before, *:after 
{
margin: 0;
padding: 0;
}


</style>	
</head>
<body >	

<?php include("header.php");?>

<div class="w3-image w3-padding-medium" style="z-index:1;">
  <img src="image/sam_logo1.png" alt="logo" title="Logo" style="width:9%; float:left;margin-top: 48px;" />
  
</div>

<div id="menu">
    <div class="sub_menu">
        <ul>
            <li><a  href="#" id="profile" class="hvr-round-corners current">Profile</a></li>
            <li><a href="#" id="show" class="hvr-round-corners">Show Case</a></li>	
            <li><a href="#" class="hvr-round-corners">Events</a></li>
            <li><a href="#"class="hvr-round-corners">Gallery</a></li>
            <li><a href="#" class="hvr-round-corners">Contact us</a></li>
        </ul>
    </div>
</div>
<style>

.panel-body
    {
        background: linear-gradient( to right, #758387, #838A7E);
        padding-top: 22px;
        padding-left: 55px;
        padding-bottom: 15px;


    }
.panel-default>.panel-heading
   {
        background: linear-gradient( to right, rgba(55, 68, 70, 0.76), #60685A););
        border-color: rgba(91, 98, 93, 0.83);
   } 
.panel-default 
    {
        border-color: rgba(91, 98, 93, 0.83);
    }
.panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body
   {
        border-top: 1px solid rgba(91, 98, 93, 0.83);
        font-size: 1.05em;
        color: #fff;
   }
.panel-title 
   {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 1.09em;
        color: #fff;
   }
</style>
    <!-- search -->
<div class="sub_header" style="" >

    <div class="full_subhead">
        <div class="search_1">
            <span class="icon"><i class="fa fa-search"></i></span>
            <input type="search" id="search" placeholder="Search..." />
        </div>
        <div class="icon_subhead">
            <span class="tooltip-bottom" data-tooltip="Comments"><i class="fa fa-comments"></i></span>
            <span class="tooltip-bottom" data-tooltip="Notification"><i class="fa icon-bell"></i></span>
            <span class="tooltip-bottom" data-tooltip="Setting"><i class="fa fa-gear"></i></span>
            <span class="tooltip-bottom" data-tooltip="User Profile"><i class="fa fa-user"></i></span>
            <span class="tooltip-bottom" data-tooltip="Sign Out"><i class="fa fa-sign-out"></i></span>
        </div>

    </div>
</div>
<div class="container" id="scrollbox3">
    <?php include("profilee.php");?>
    <?php include("showcase.php");?>
</div> 
    
<script src="js/jquery.min.js"></script>
<script src="js/transition.js"></script>
<script src="js/collapse.js"></script>    

<?php include("vprofileright.php");?>

<script src="js/classie.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/enscroll-0.6.1.min.js"></script>
<script>

$(document).ready(function()
{
    $('#scrollbox3').enscroll({
            showOnHover: true,
            verticalTrackClass: 'track3',
            verticalHandleClass: 'handle3'
    });
});

</script>
</body>
</html>


	