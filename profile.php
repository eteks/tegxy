<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Signin</title>
        <link rel="stylesheet" type="text/css" href="css/profile.css" />
        <link rel="stylesheet" type="text/css" href="css/trans.css" />
        <link rel="stylesheet" type="text/css" href="css/w3.css" />
		<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
		
		.w3-sidenav .nav_sty:hover,.w3-sidenav .nav_sty:focus{background-color:#616766! important; border-radius:6px; margin-right:10px; margin-left:10px;}
		
		.w3-sidenav .nav_sty{padding: 6px 68px;}
		
		.a_space {
        line-height: 1em;
    display: inline-block;
    text-decoration: none;	
	margin-top:20px;
	margin-bottom:20px;
	color:#fff;
	margin-top: 10px;
}

.a_space :hover
{
<!-- font-weight:bold; -->
background-color:#616766! important; 

}



		</style>
		
		
    </head>
    <body>	

<nav class="w3-sidenav  w3-card-2 w3-medium" style="display:none;z-index: 2;margin-top: 69px;width: 260px;background-color: #4b595c !important">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-right closenav1">&times;</a><br>
  <span class="a_space"> <a href="javascript:void(0)" class="nav_sty" style="margin-top:20px;">Profile</a></span>
  <span class="a_space"><a href="javascript:void(0)" class="nav_sty">Show Case</a></span>	
  <span class="a_space"><a href="javascript:void(0)" class="nav_sty">Events</a></span>	
  <span class="a_space"><a href="javascript:void(0)" class="nav_sty">Gallery</a></span>	
  <span class="a_space"><a href="javascript:void(0)" class="nav_sty">Contact us</a></span> 	
</nav>

	
	<header class="w3-container w3-black ">
	 
  <div class="w3-image w3-padding-medium">
  <img src="image/logo.png" alt="logo" style="width:16%">
  
  <a class="w3-btn w3-btn1 button11 hvr-rectangle-out">Register</a>
  <i class="icon-arrow-right icon-large signout_st"></i>
 
  <a class="w3-btn w3-btn1 button11 hvr-rectangle-out">Sign Out</a>
  <i class="icon-eye-open icon-large register_st "></i>

</div>
</header>
<span class="w3-opennav w3-xxlarge" onclick="w3_open()">&#9776;</span>
	
<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>

</body>
</html>



    </body>
</html>