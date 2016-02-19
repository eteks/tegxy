<?php 
ob_start();
session_start();
include_once("include/config.php");
include_once("include/simplefunction.php");
if($_SESSION['lid']=='')
header("Location:index.php");

$lid   = $_SESSION['lid'];
$profiledetails = $database->query("call pro_registration($lid,1,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")->fetchAll();
$industrydisp = $database->query("call pro_industry(2,'".$profiledetails[0]['RGT_Sector']."')")->fetchAll();
$citydisp = $database->query("call pro_gcity('','','".$profiledetails[0]['RGT_State']."',2)")->fetchAll();
$profileurl = $profiledetails[0]['RGT_ProfileUrl'];
?>
<!Doctype html>
<html lang="en">
<head>
<link href="css/custumer.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Buttons hover effects-->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/w3.css" rel="stylesheet" type="text/css"/>
<link href="css/trans.css" rel="stylesheet" type="text/css"/>
<link href="css/style1.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/dropdown.js" type="text/javascript"></script>

<!-- Tab style -->

<link href="css/tab.css" rel="stylesheet" type="text/css"/>
<script src="js/modernizr.js"></script>
<!-- Start Functionality -->
<script src="js/general.js" type="text/javascript"></script>
<script src="js/manageprofile.js" type="text/javascript"></script>
<!-- End  Functionality -->
<style>
     .cd-tabs nav {
position: relative;
top: 0;
left: 0;
height: 100%;
box-shadow: inset -2px 0 3px rgba(203, 196, 130, 0.06);
z-index: 0;
}

    article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
display: block;
position: relative;
z-index: 0;
}

    .hvr-rectangle-out {
display: inline-block;
vertical-align: middle;
transform: translateZ(0px);
box-shadow: 0px 0px 1px transparent;
backface-visibility: hidden;
position: relative;
background: transparent;
transition-property: color;
transition-duration: 0.3s;
}
html
{
background: transparent;
}
</style>

    <script>
   $(function() {
            $('.cd-tabs-navigation li').click(function(){
               $('.cd-tabs-navigation li').removeClass('selected');
               $(this).addClass('active');
           });
       });
       
       
       $(document).ready(function(){
$('.estab').click(function(){    
    $('#cont-manag').fadeOut('slow', function(){
        $('#password').fadeOut('slow', function(){
        $('#estab').fadeIn('slow');
    });
    });
});

$('.cont-manag').click(function(){
    $('#estab').fadeOut('slow', function(){
        $('#password').fadeOut('slow', function(){
        $('#cont-manag').fadeIn('slow');
    });
     });
});

$('.password').click(function(){
    $('#estab').fadeOut('slow', function(){
        $('#cont-manag').fadeOut('slow', function(){
        $('#password').fadeIn('slow');
    });
     });
});
});
   </script>

<link rel="stylesheet" type="text/css" href="css/btn.css" />


<link rel="stylesheet" type="text/css" href="dialog/css/demo.css" />
<!-- common styles -->
<link rel="stylesheet" type="text/css" href="dialog/css/dialog.css" />
<!-- individual effect -->
<link rel="stylesheet" type="text/css" href="dialog/css/dialog-laura.css" />
 <script src="dialog/js/modernizr.custom.js"></script>
<script src="dialog/js/snap.svg-min.js"></script>

<!-- form design -->
<link rel="stylesheet" type="text/css" href="css/form.css" />

<!-- Scroll -->
<link rel="stylesheet" type="text/css" href="css/scroll.css" />
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

</head>

<body>
<Section>
<div class="w3-container w3-black head_style">
<div class="w3-image w3-padding-medium">
  <img src="image/logo.png" alt="logo" style="width:16%">
  <a class="w3-btn button11 hvr-rectangle-out" href="<?php if($_SESSION['lid']!=''){?>logout.php<?php } else {?>login.php<?php }?>"><?php if($_SESSION['lid']!=''){?>Sign Out<?php } else {?>Sign In<?php }?></a>
  <i class="icon-arrow-right icon-large signout_st"></i>
  <a class="w3-btn button11 hvr-rectangle-out" href="<?php echo $profileurl;?>">View Profile</a>
  <i class="icon-eye-open icon-large register_st "></i>
</div>
</div>

<!-- Start Main Menu -->
    <div class="row">
    <div class="container">
       
        <nav class="nav">
            <ul>
                <li class="estab"><a href="#" class="current">Establishment Profile</a></li>
                <li class="cont-manag"><a href="#">Content Management</a></li>
                <li><a class="password" href="#">Change Password</a></li>
            </ul>
        </nav>
<!-- End Main Menu --> 
<?php include("establishment.php");?>
<?php include("contentmanagement.php")?>
<?php include("changepassword.php")?>

     </div>
        </div>
    </div>
    
<?php include("footer.php");?>
</section>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/tab.js"></script> <!-- Resource jQuery -->

<script src="dialog/js/classie.js"></script>
<script src="dialog/js/dialogFx.js"></script>
<script src="js/form.js"></script>

<!-- custom scrollbar plugin -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="dialog/animate.js"></script>

<!-- Calender -->
<script type="text/javascript" src="bootstrapdatepicker/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrapdatepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript">

$('.form_date').datetimepicker({
weekStart: 1,
todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
});

</script>
</body>
</html> 