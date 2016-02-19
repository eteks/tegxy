
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Signin</title>
        <link rel="stylesheet" type="text/css" href="css/profile.css" />
        <link rel="stylesheet" type="text/css" href="css/trans.css" />
		<!--<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/style2.css" />-->
		<link rel="stylesheet" type="text/css" href="css/w3.css" />
		  <link rel="stylesheet" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
		 <script>
	$(document).ready(function(){
     $('.sub_menu ul li a').click(function(){    
        $('.sub_menu ul li a').removeClass('current');
        $(this).addClass('current');
});
	
 });	
 
	
 
 $(document).ready(function(){
    
    $("#show").click(function(){     
		$(".panel-group").fadeOut("slow");
		 $(".showcase").fadeIn("slow");
    });
	
	$("#profile").click(function(){
		$(".panel-group").fadeIn("slow");
		 $(".showcase").fadeOut("slow");
    });
	
	 $("#tabcurrent").click(function(){
		   $("#content1").fadeIn("slow");
		   $("#content2").hide();
		 $("#content3").hide();
      });
	  $("#tabcurrent1").click(function(){ 
		   $("#content2").fadeIn("slow");	
		   $("#content1").hide();
		 $("#content3").hide();
		 
      });
	  $("#tabcurrent2").click(function(){
		 
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
  
  
  <!-- tabs -->
  *, *:before, *:after 
  {
  margin: 0;
  padding: 0;
  }
  
 
</style>	
		

		
    </head>
    <body >	

	<header class="w3-container w3-black " style="z-index: 7;">
	 
  <div class="w3-image w3-padding-medium">
  <img src="image/logo.png" alt="logo" style="width:16%">
  
  <!--<a class="w3-btn w3-btn1 button11 hvr-rectangle-out">Register</a>-->
  <i class="icon-arrow-right icon-large signout_st"></i>
 
  <a class="w3-btn w3-btn1 button11 hvr-rectangle-out">Sign Out</a>
  <i class="icon-eye-open icon-large register_st "></i>

</div>
</header>

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
.panel-default>.panel-heading {
	    background: linear-gradient( to right, rgba(55, 68, 70, 0.76), #60685A););
		border-color: rgba(91, 98, 93, 0.83);
}
.panel-default {
   border-color: rgba(91, 98, 93, 0.83);
}
.panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 1px solid rgba(91, 98, 93, 0.83);
	    font-size: 1.05em;
    color: #fff;
}
.panel-title {
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

	<!-- search end -->
	
<div class="container" id="scrollbox3">

  <div class="panel-group outer" id="accordion" id=d3i>
    <div class="panel panel-default ">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <h4 class="panel-title" >
           <a style="width: 100%;text-decoration: none !important;">Profile Info</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
		
		
		<p>Company Name <span class="comp_space1" >: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>

		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <h4 class="panel-title">
          <a style="width: 100%;text-decoration: none !important;">Profile Info1</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <h4 class="panel-title">
          <a style="width: 100%;text-decoration: none !important;">Profile Info2</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        <h4 class="panel-title">
          <a  style="width: 100%;text-decoration: none !important;">Profile Info3</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        <h4 class="panel-title">
          <a style="width: 100%;text-decoration: none !important;">Profile Info4</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        <h4 class="panel-title">
          <a style="width: 100%;text-decoration: none !important;">Profile Info6</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	        <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
	
	<div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
        <h4 class="panel-title">
          <a style="width: 100%;text-decoration: none !important;">Profile Info7</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
        <h4 class="panel-title">
          <a style="width: 100%;text-decoration: none !important;">Profile Info8</a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
        <h4 class="panel-title">
          <a style="width: 100%;text-decoration: none !important;">Profile Info9</a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
        <h4 class="panel-title">
          <a style="width: 100%;text-decoration: none !important;">Profile Info10</a>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11">
        <h4 class="panel-title">
          <a style="width: 100%;text-decoration: none !important;">Profile Info11</a>
        </h4>
      </div>
      <div id="collapse11" class="panel-collapse collapse">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1">: xyget</span> </p>
	    <p>Group Name <span class="comp_space2">: xyget</span> </p>
		<p>Industry <span class="comp_space3">: Information Technology</span> </p>
		<p>Types of Company <span class="comp_space4">: Private limited</span> </p>
		<p>Year of Establishment<span class="comp_space5">: 07-10-2010</span> </p>
		<p>Company Strength <span class="comp_space6">: 100</span> </p>
		<p>Operating Areas <span class="comp_space7">: Pondicherry</span> </p>
		</div>
      </div>
    </div>
	
  </div> 
  
  <div class="showcase" id="showcase" style="display:none">
<div class="show">
  <img class="w3-image " src="image/show1.jpg"/>
  <div class="content_show">
  <h5>Princess Necklaces</h5>
   <h6>Description</h6>
   <span> A necklaces is an article of jewellery which is won around the neck. Necklaces are frequently formed....</span>
   </div>
   <div class="cost_show">
    <h5 class="cost">50000 &#8377;</h5>
    <span class="quantity"> Quantity:10</span>
   <input type="button" class="more_button w3-btn btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" value="Know More"></input>
   <!-- -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>	
          
        </div>
        <div class="modal-body">
		<img class="img-responsive pull-left" src="image/show1.jpg" width="285" height="200">
		<p><strong  style="color: #a3262a; font-size:17px; float:left;">Princess Necklaces</strong></p><br/>
          <label>Name</label><span>:xyget.com</span><br/>
		  <label>Business Source</label><span>:Software</span><br/>
		  <label>Price</label><span>:50000 &#8377;</span><br/>
		  <label>Quantity</label><span>:10</span><br/>
		  <label>Location</label><span>:India, Pondicherry, Pondicherry, Botanical Garden-605001</span>
		  <br><label>Description</label><br/>
			<p>A necklace is an article of jewellery which is worn around the neck. Necklaces are frequently formed from a metal jewellery chain. Others are woven or manufactured from cloth using string or twine</p>
		
        </div>
        
      </div>
    </div>
  </div>
   <!-- -->
   
   </div>
  </div>
  <div class="show">
  <img class="w3-image " src="image/show2.jpg"/>
  <div class="content_show">
  <h5>Princess Necklaces</h5>
   <h6>Description</h6>
   <span> A necklaces is an article of jewellery which is won around the neck. Necklaces are frequently formed....</span>
  </div>
  <div class="cost_show">
    <h5 class="cost">30000 &#8377;</h5>
    <span class="quantity"> Quantity:50</span>
   <input type="button" class="more_button w3-btn" value="Know More">
   </div>
  </div>
  <div class="show">
  <img class="w3-image " src="image/show3.jpg"/>
  <div class="content_show">
 <h5>Princess Necklaces</h5>
   <h6>Description</h6>
   <span> A necklaces is an article of jewellery which is won around the neck. Necklaces are frequently formed....</span>
  </div>
  <div class="cost_show">
    <h5 class="cost">40000 &#8377;</h5>
    <span class="quantity"> Quantity:40</span>
   <input type="button" class="more_button w3-btn" value="Know More">
   </div>
  </div>
  <div class="show">
  <img class="w3-image " src="image/show4.jpg"/>
  <div class="content_show">
 <h5>Princess Necklaces</h5>
   <h6>Description</h6>
   <span> A necklaces is an article of jewellery which is won around the neck. Necklaces are frequently formed....</span>
  </div>
  <div class="cost_show">
    <h5 class="cost">60000 &#8377;</h5>
    <span class="quantity"> Quantity:90</span>
   <input type="button" class="more_button w3-btn" value="Know More">
   </div>
  </div>
<div class="show">
  <img class="w3-image " src="image/show1.jpg"/>
  <div class="content_show">
  <h5>Princess Necklaces</h5>
   <h6>Description</h6>
   <span> A necklaces is an article of jewellery which is won around the neck. Necklaces are frequently formed....</span>
   </div>
   <div class="cost_show">
    <h5 class="cost">30000 &#8377;</h5>
    <span class="quantity"> Quantity:20</span>
   <input type="button" class="more_button w3-btn" value="Know More">
   </div>
  </div>
  <div class="show">
  <img class="w3-image " src="image/show2.jpg"/>
  <div class="content_show">
  <h5>Princess Necklaces</h5>
   <h6>Description</h6>
   <span> A necklaces is an article of jewellery which is won around the neck. Necklaces are frequently formed....</span>
  </div>
  <div class="cost_show">
    <h5 class="cost">20000 &#8377;</h5>
    <span class="quantity"> Quantity:100</span>
   <input type="button" class="more_button w3-btn" value="Know More">
   </div>
  </div>
  
  <div class="show">
  <img class="w3-image " src="image/show4.jpg"/>
  <div class="content_show">
 <h5>Princess Necklaces</h5>
   <h6>Description</h6>
   <span> A necklaces is an article of jewellery which is won around the neck. Necklaces are frequently formed....</span>
  </div>
  <div class="cost_show">
    <h5 class="cost">60000 &#8377;</h5>
    <span class="quantity"> Quantity:90</span>
   <input type="button" class="more_button w3-btn" value="Know More">
   </div>
  </div>
  
  
</div>
</div>
<!--end container -->
 <script src="js/jquery.min.js"></script>
<script src="js/transition.js"></script>
<script src="js/collapse.js"></script>  

<div class="main">
  
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1" id="tabcurrent">Related Profile</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2" id="tabcurrent1">Add</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3" id="tabcurrent2">Add</label>
  
    
  <section class="tab_section" id="content1" style="dispaly:block;">
  <p class="inline_space">
      <img src="image/img_2.png" class="circle pull-left" alt="img1">
    <span class="title">Joyalukkas</span ><br/>
      <span class="subtitle">Jewellery</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
   <hr/>
	<p>
      <img src="image/img_3.png" class="circle pull-left" alt="img2">
    <span class="title">Inform Atomicka Pvt Ltd</span ><br/>
      <span class="subtitle">IT Software </span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
    <hr/>
	<p>
      <img src="image/img_2.png" class="circle pull-left" alt="img1">
    <span class="title">Sri Manakula Vinayagar College</span ><br/>
      <span class="subtitle"> Engineering College</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span > 
   </p>
   <hr/>
	<p>
      <img src="image/img_3.png" class="circle pull-left" alt="img2">
    <span class="title"> Akshara Restaurant </span ><br/>
      <span class="subtitle">Hotel & Restaurant</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
   <hr/>
   <p> 
      <img src="image/img_2.png" class="circle pull-left" alt="img2">
    <span class="title"> Kumar Metal Stores</span ><br/>
      <span class="subtitle"> Store</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>   
  </section>
    
  <section class="tab_section" id="content2" style="dispaly:none;">
  <p>
      <img src="image/img_2.png" class="circle pull-left" alt="img1">
    <span class="title">Sri Manakula Vinayagar College</span ><br/>
      <span class="subtitle"> Engineering College</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >   
   </p>
   <hr/>
	<p>
      <img src="image/img_3.png" class="circle pull-left" alt="img2">
    <span class="title"> Akshara Restaurant </span ><br/>
      <span class="subtitle">Hotel & Restaurant</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
   <hr/>
    <p class="inline_space">
      <img src="image/img_2.png" class="circle pull-left" alt="img1">
    <span class="title">Joyalukkas</span ><br/>
      <span class="subtitle">Jewellery</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
   <hr/>
	<p>
      <img src="image/img_3.png" class="circle pull-left" alt="img2">
    <span class="title">Inform Atomicka Pvt Ltd</span ><br/>
      <span class="subtitle">IT Software </span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
    <hr/>
	
   <p> 
      <img src="image/img_2.png" class="circle pull-left" alt="img2">
    <span class="title"> Kumar Metal Stores</span ><br/>
      <span class="subtitle"> Store</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
   
  </section>
    
  <section class="tab_section" id="content3" style="dispaly:none;">
 
	<p>
      <img src="image/img_2.png" class="circle pull-left" alt="img1">
    <span class="title">Sri Manakula Vinayagar College</span ><br/>
      <span class="subtitle"> Engineering College</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
   <hr/>
	<p>
      <img src="image/img_3.png" class="circle pull-left" alt="img2">
    <span class="title"> Akshara Restaurant </span ><br/>
      <span class="subtitle">Hotel & Restaurant</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
   <hr/>
   <p>
      <img src="image/img_2.png" class="circle pull-left" alt="img2">
    <span class="title"> Kumar Metal Stores</span ><br/>
      <span class="subtitle"> Store</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
   <hr/>
    <p class="inline_space">
      <img src="image/img_2.png" class="circle pull-left" alt="img1">
    <span class="title">Joyalukkas</span ><br/>
      <span class="subtitle">Jewellery</span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p>
   <hr/>
	<p>
      <img src="image/img_3.png" class="circle pull-left" alt="img2">
    <span class="title">Inform Atomicka Pvt Ltd</span ><br/>
      <span class="subtitle">IT Software </span ><br/>
		<span class="timing">Last Logged-in: Oct 10, 15:10</span >
   </p> 
  </section>
</div>
<script src="js/classie.js"></script>
<!-- <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
	
		<script>

$(function () {
  var ua = window.navigator.userAgent;
  //$('#d1i').text('Native: ' + ua)
 
  $('#d3').jScrollPane({
    //showArrows: true,
    horizontalGutter: 30,
			verticalGutter: 30
      
    });
	});

</script>-->

<script src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/enscroll-0.6.1.min.js"></script>
		<script>

$(document).ready(function(){
$('#scrollbox3').enscroll({
    showOnHover: true,
    verticalTrackClass: 'track3',
    verticalHandleClass: 'handle3'
});
});

</script>



</body>
</html>


	