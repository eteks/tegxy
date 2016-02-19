<?php 
include_once("include/Configuration.php");
include_once(PAGE_DBCONNECTION);
db_connect();
$pagename = basename($_SERVER['SCRIPT_FILENAME'],'.php');
?>

<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $Title;?></title> 
<link rel="stylesheet" href="css/sass-compiled.css" />
<link rel="stylesheet" href="css/_incontent.css" />
<script src="js/modernizr.js" type="text/javascript"></script>
<link rel="icon" href="images/favi.ico.png">
<link rel="stylesheet" href="css/fxd-bg.css">
<link href="css/Login.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.9.1.js" type="text/javascript"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.js" type="text/javascript"></script>
<link href="css/interior.css" rel="stylesheet" type="text/css"/>
<link href="css/hover.css" rel="stylesheet" media="all">
<script type="text/javascript" src="js/Common.js"></script>


<script> 
function pagerole(id)
{
searchResult1($('#searchlist').val(),'','',id);
}   
      
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
</script> 

<!-- overflow scrollbar-->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>

<!-- Select Menu Style-->
<link href="css/dd.css" rel="stylesheet" type="text/css"/>

<!-- Div Equal height set-->
  <link href="css/height.css" rel="stylesheet" type="text/css"/>
  



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
/*	position:absolute;*/
	display:none;
	padding:2px 0px;
	top:auto;
	font-family :verdana; 
	font-size:12px;
	width: 350px !important;
           margin-left: 50px;
/*	overflow-x: hidden;
	overflow-y: auto;*/

/*	overflow-x: hidden;
	overflow-y: hidden;*/
	height:130px;
	z-index:100;
        right: 40px; !important;
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

<!-- slider zoom effects-->
<!-- Add venobox -->
<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen"/>
<script type="text/javascript" src="venobox/venobox.js"></script>
<script>
    $(document).ready(function(){

    /* default settings */
    $('.venobox').venobox(); 


    /* custom settings */
    $('.venobox_custom').venobox({
        framewidth: '1000px',        // default: ''
        frameheight: '1000px',       // default: ''
        border: '10px',             // default: '0'
        bgcolor: '#5dff5e',         // default: '#fff'
        titleattr: 'data-title',    // default: 'title'
        numeratio: true,            // default: false
        infinigall: true            // default: false
    });

    /* auto-open #firstlink on page load */
    $("#firstlink").venobox().trigger('click');
   
    
});





</script>  


<!-- List and Grid-->
<script>
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

</head>
<body>

    <Section class="bg">
        <div class="wrapper_bg">
            
            <!-- Header Section -->
<div class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="but1">
                <a href="index.php"> <img src="images/title.png" width="200px;"/> </a>
            </div>

            <div class="but but1">
                <div>
                    <a href="#" class="hvr-rectangle-in">REGISTER</a>
                </div>

                <div>
                    <a href="#" class="hvr-rectangle-in">SIGN IN</a>
                </div>

            </div>
        </div>
    </div>
</div><!--End Header Section -->
            
            
           
<div class="content mCustomScrollbar mcusheight">
                  
<div id="searchResults">
                
                
                
<!--Company details-->    
<?php $path=''; include("Searchresult.php");?>      
<!--End Company details-->

</div>            
             <!--Company Related Search-->
             
             </div>
             <!--End Company Related Search-->
        </div> 
            
            <!-- Footer-->
            <section class="foot_wrap">
                <div class="pag_nav">
                    <ul class="foot_nav">
                        <li>Privacy Statement</li>
                        <li>User Terms</li>
                        <li>Contact</li>
                        <li>Sign In</li>
                        <li>Register</li>
                    </ul>
                </div>


            <footer>Copyright © 2015 Xyget. com All rights reserved.</footer>
            </section>
        </div>
    </Section>
    
<!-- Dropdown  Menu -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/velocity/0.2.1/jquery.velocity.min.js'></script>
<script src="js/menu-mtree.js" type="text/javascript"></script>-->


<!-- Mscroll-->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
		(function($){
			$(document).ready(function(){
				
				$("a[rel='load-content']").click(function(e){
					e.preventDefault();
					var url=$(this).attr("href");
					$.get(url,function(data){
						$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
						//scroll-to appended content 
						$(".content").mCustomScrollbar("scrollTo","h2:last");
					});
				});
				
				$(".content").delegate("a[href='top']","click",function(e){
					e.preventDefault();
					$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
				});
				
			});
		})(jQuery);
	</script>
<!-- slider -->

</body>
</html>

