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
<!--    
 Calender 
<!--<link href="calender/ion.calendar.css" rel="stylesheet" type="text/css"/>
<script src="calender/ion.calendar.js" type="text/javascript"></script>
<script src="calender/ion.calendar.min.js" type="text/javascript"></script>
<script src="calender/moment-with-locales.min.js" type="text/javascript"></script>-->
</head>

<body>
<Section>
    
<!-- header -->    
    <div class="w3-container w3-black head_style">
	<div class="w3-image w3-padding-medium">
	  <img src="images/logo.png" alt="logo" style="width:16%">
	  <a class="w3-btn button11 hvr-rectangle-out">Sign Out</a>
	  <i class="icon-arrow-right icon-large signout_st"></i>
	  <a class="w3-btn button11 hvr-rectangle-out">View Profile</a>
	  <i class="icon-eye-open icon-large register_st "></i>
	</div>
    </div>

<!-- Menu-->
    <div class="row">
    <div class="container">
       
        <nav class="nav">
            <ul>
                <li class="estab"><a href="#" class="current">Establishment Profile</a></li>
                <li class="cont-manag"><a href="#">Content Management</a></li>
                <li class="password"><a href="#">Change Password</a></li>
            </ul>
        </nav>
        
        
<!-- Mainmenu1 -->   
 <!-- Establishment Profile  --> 
<div id="estab" class="cd-tabs" >
    <nav>
	<ul class="cd-tabs-navigation" style="border-bottom: 3px solid rgb(163, 38, 42); padding-bottom: 20px;">
            
            <li style="margin-left: 29%;"><a data-content="name" class="selected particular" href="#0">
                    <div class="wrapper-simple">
                        <input class="hvr-pulse-shrink" value="1" style="" type="submit">
                        <p>Company name</p>
                    </div>
                </a>
            </li>
            <li class="tabborder"></li>
            <li><a data-content="details" class="particular" href="#0">
                    <div class="wrapper-simple">
                        <input class="hvr-pulse-shrink" value="2" style="" type="submit">
                        <p>owner details</p>
                    </div>
                </a>
            </li>
        </ul> <!-- cd-tabs-navigation -->
    </nav>
    

    <ul class="cd-tabs-content">
        
        <!--Company name-->
        <li data-content="name" class="selected">
            <table class="table">
                <thead>
                    <tr style="border-top: 1px solid rgb(221, 221, 221);">
                      <th>Company Name</th>
                      <th>Industry</th>
                      <th>City</th>
                      <th>ACTION</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Private Limited</td>
                        <td>Education</td>
                        <td>Pondicherry</td>
                        <td>
<!--                                    <img src="images/add.png"/>-->
                       <section id="set-8">
                        <div class="hi-icon-wrap hi-icon-effect-8">

                            <div class="button-wrap">
                                <a href="#set-8" class="hi-icon hi-icon-pencil" data-dialog="somedialog" class="trigger">Edit</a>

                            </div>
                        </div>
                       </section>
                        </td>
                    </tr>
                </tbody>
            </table>

<!-- Pop up content-->
    <div id="somedialog" class="dialog">
        <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <div class="morph-shape" data-morph-open="M0,33.699V0c0,0,13.458,0,40.125,0C66.793,0,80,0,80,0v33.974v0.103V60c0,0-13.333,0-40,0c-26.667,0-40,0-40,0V33.699" data-morph-close="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
                            <path d="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699"></path>
                    </svg>
                </div>
                
                <div class="dialog-inner">
                    <div>
                        <img src="images/clos.png" class="img-responsive" data-dialog-close style="width: 19px; float: right; cursor: pointer;"/>
                    </div>
                    <h1>PROFILE</h1>
                    
                    <div class="mCustomScrollbar content fluid light" data-mcs-theme="inset-2-dark">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-31" />
                                    <label class="input__label input__label--madoka" for="input-31">
                                            <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                            </svg>
                                            <span class="input__label-content input__label-content--madoka">Company name</span>
                                    </label>
                                </span>
                            </div>
                            <br>
                            <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-32" />
                                    <label class="input__label input__label--madoka" for="input-32">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Group name</span>
                                    </label>
                                </span>
                            </div>
                            
                        <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select name="my-dropdown"  class="input__field input__field--madoka" id="input-33" >
                                            <option value="0">Please Select</option>
                                            <option value="1">West</option>
                                            <option value="2">Land</option>
                                            <option value="3">Easter</option>
                                            <option value="4">Springtime</option>
                                            <option value="5">Celtic</option>
                                            <option value="6">Spectacular/</option>
                                            <option value="7">Weekend</option>
                                            <option value="8">Dark</option>
                                            <option value="9">Treasures</option>
                                    </select>
                                    <label class="input__label--madoka" for="input-33">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i33" class="sp"></span>
                                    </label>
                                </span>
                            </div>
                        <br>
                        <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-34" />
                                    <label class="input__label input__label--madoka" for="input-34">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Email</span>
                                    </label>
                                </span>
                            </div>
                        <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-35" />
                                    <label class="input__label input__label--madoka" for="input-35">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Corporate Identification No(CIN) </span>
                                    </label>
                                </span>
                            </div>
                        <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-36" />
                                    <label class="input__label input__label--madoka" for="input-36">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Year Of Establishment</span>
                                    </label>
                                </span>
                            </div>
                        
                            <br>
                            <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-37" />
                                    <label class="input__label input__label--madoka" for="input-37">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Type Of Company</span>
                                    </label>
                                </span>
                            </div>
                            
                            <br>
                            <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-38" />
                                    <label class="input__label input__label--madoka" for="input-38">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Employment Strength</span>
                                    </label>
                                </span>
                            </div>
                        
                            <br>
                            <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-39" />
                                    <label class="input__label input__label--madoka" for="input-39">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Address Line 1</span>
                                    </label>
                                </span>
                            </div>
                            <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-40" />
                                    <label class="input__label input__label--madoka" for="input-40">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Address Line 2</span>
                                    </label>
                                </span>
                            </div>
                                                   
                            <br>
                            <br>
                            
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-41" />
                                    <label class="input__label input__label--madoka" for="input-41">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Country</span>
                                    </label>
                                </span>
                            </div>
                            <br>
                        <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-42" />
                                    <label class="input__label input__label--madoka" for="input-42">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">State</span>
                                    </label>
                                </span>
                            </div>
                      
                            <br>
                            <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-43" />
                                    <label class="input__label input__label--madoka" for="input-43">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">City</span>
                                    </label>
                                </span>
                            </div>
                            <br>
                        <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-44" />
                                    <label class="input__label input__label--madoka" for="input-44">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Area</span>
                                    </label>
                                </span>
                            </div>
                    
                            <br>
                            <br>
                            
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-45" />
                                    <label class="input__label input__label--madoka" for="input-45">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Pincode</span>
                                    </label>
                                </span>
                            </div>
                            <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-46" />
                                    <label class="input__label input__label--madoka" for="input-46">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Mobile Number</span>
                                    </label>
                                </span>
                            </div>
                        
                            <br>
                            <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-47" />
                                    <label class="input__label input__label--madoka" for="input-47">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Land Line</span>
                                    </label>
                                </span>
                            </div>
                            
                            <br>
                            <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-48" />
                                    <label class="input__label input__label--madoka" for="input-48">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Website</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                            <br>
                            <br>
                         
                        <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-49" />
                                    <label class="input__label input__label--madoka" for="input-49">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">localhost/xyget/</span>
                                    </label>
                                </span>
                        </div>
                            <br>
                            <br>
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                            <button class="action" data-dialog-close>Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </li>
        
        <!--    owner details-->
        <li data-content="details">
            <table class="table">
                <thead>
                    <tr style="border-top: 1px solid rgb(221, 221, 221);">
                      <th>Owner Name</th>
                      <th>Designation</th>
                      <th>City</th>
                      <th>ACTION</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Private Limited</td>
                        <td>Education</td>
                        <td>Pondicherry</td>
                        <td>
<!--                                    <img src="images/add.png"/>-->
                            <section id="set-8">
                             <div class="hi-icon-wrap hi-icon-effect-8">

                                 <div class="button-wrap">
                                     <a href="#set-9" class="hi-icon hi-icon-pencil" data-dialog1="somedialog1" class="trigger">Edit</a>
                                 </div>
                             </div>
                            </section>
                        </td>
                    </tr>
                </tbody>
            </table>
        
    <!-- Pop up content-->
    <div id="somedialog1" class="dialog">
        <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <div class="morph-shape" data-morph-open="M0,33.699V0c0,0,13.458,0,40.125,0C66.793,0,80,0,80,0v33.974v0.103V60c0,0-13.333,0-40,0c-26.667,0-40,0-40,0V33.699" data-morph-close="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
                            <path d="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699"></path>
                    </svg>
                </div>
                
                 <div class="dialog-inner">
                    <div><img src="images/clos.png" class="img-responsive" data-dialog-close style="width: 19px; float: right; cursor: pointer; cursor: pointer;"/>
                    </div>
                    <h1>Owner Profile</h1>
                    
                    <div class="mCustomScrollbar content fluid light" data-mcs-theme="inset-2-dark">
                        <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-50" />
                                    <label class="input__label input__label--madoka" for="input-50">
                                            <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                            </svg>
                                            <span class="input__label-content input__label-content--madoka">Owner Name</span>
                                    </label>
                                </span>
                        </div>
                        
                        <br>
                        <br>
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="input-51" />
                                <label class="input__label input__label--madoka" for="input-51">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Designation</span>
                                </label>
                            </span>
                        </div>
                        
                        <br>
                        <br>
                       
                        
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="input-52" />
                                <label class="input__label input__label--madoka" for="input-52">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Date Of Birth</span>
                                </label>
                            </span>
                        </div>
                        
                        <br>
                        <br>
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select name="my-dropdown"  class="input__field input__field--madoka sp1" id="input-53" >
                                        <option value="0">Gender</option>
                                        <option value="1">Male</option>
                                        <option value="1">Female</option>
                                </select>
                                <label class="input__label--madoka" for="input-53">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                <span id="gen1" class="sp"></span>
                                </label>
                            </span>
                        </div>
                        
                        <br>
                        <br>
                        
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="input-54" />
                                <label class="input__label input__label--madoka" for="input-54">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Address</span>
                                </label>
                            </span>
                        </div>
                        
                        <br>
                        <br>
                        
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select name="my-dropdown"  class="input__field input__field--madoka" id="input-55" >
                                        <option value="0">Country</option>
                                        <option value="1">India</option>
                                </select>

                                <label class="input__label--madoka" for="input-55">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="i55" class="sp"></span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select name="my-dropdown"  class="input__field input__field--madoka" id="input-56" >
                                        <option value="0">State</option>
                                        <option value="1">Select State</option>
                                </select>
                                <label class="input__label--madoka" for="input-56">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="i56" class="sp"></span>
                                </label>
                            </span>
                        </div>
                         
                            <br>
                            <br>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select name="my-dropdown"  class="input__field input__field--madoka" id="input-57" >
                                            <option value="0">City</option>
                                            <option value="1">Select City</option>
                                </select>
                                <label class="input__label--madoka" for="input-57">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="i57" class="sp"></span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                           
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select name="my-dropdown"  class="input__field input__field--madoka" id="input-58" >
                                            <option value="0">Select Area</option>
                                            <option value="1">Annanagar</option>
                                </select>
                                <label class="input__label--madoka" for="input-58">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="i58" class="sp"></span>
                                </label>
                            </span>
                        </div>
                            
                            <br>
                            <br>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <select name="my-dropdown"  class="input__field input__field--madoka" id="input-59" >
                                            <option value="0">Pincode</option>
                                            <option value="1">600040</option>
                                </select>
                                <label class="input__label--madoka" for="input-59">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span id="i59" class="sp"></span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="input-60" />
                                <label class="input__label input__label--madoka" for="input-60">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Mobile Number</span>
                                </label>
                            </span>
                        </div>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="input-61" />
                                <label class="input__label input__label--madoka" for="input-61">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Land Line</span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                        
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="input-62" />
                                <label class="input__label input__label--madoka" for="input-62">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Email</span>
                                </label>
                            </span>
                        </div>
                            
                        <div class="col-sm-12">
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="input-63" />
                                <label class="input__label input__label--madoka" for="input-63">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Education Details</span>
                                </label>
                            </span>
                        </div>
                        
                            <br>
                            <br>
                        
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                            <button class="action" data-dialog-close>Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </li>
    </ul>
            
</div> <!-- cd-tabs -->

<!-- Mainmenu2 -->   
 <!-- Content Management  --> 
<div id="cont-manag" style="display:none;"  class="cd-tabs" >
    <nav>
		<ul class="cd-tabs-navigation" style="border-bottom: 3px solid rgb(163, 38, 42); padding-bottom: 20px;">
			<li><a data-content="inbox" class="selected" href="#0">
                            <div class="wrapper-simple">
                                <input class="hvr-pulse-shrink" value="1" style="" type="submit">
                                <p>profile</p>
                            </div>
                            </a></li>
                            <li class="tabborder"></li>
			<li><a data-content="Showroom" href="#0">
                            <div class="wrapper-simple">
                                <input class="hvr-pulse-shrink" value="2" style="" type="submit">
                                <p>Showroom</p>
                            </div>
                            </a></li>
                        <li class="tabborder"></li>
			<li><a data-content="Events" href="#0">
                            <div class="wrapper-simple">
                                <input class="hvr-pulse-shrink" value="3" style="" type="submit">
                                <p>Events</p>
                            </div>
                            </a></li>
			<li class="tabborder"></li>
                        <li><a data-content="store" href="#0">
                            <div class="wrapper-simple">
                                <input class="hvr-pulse-shrink" value="4" style="" type="submit">
                                <p>Gallery</p>
                            </div>
                            </a></li>
                        <li class="tabborder"></li>
			<li><a data-content="settings" href="#0">
                            <div class="wrapper-simple">
                                <input class="hvr-pulse-shrink" value="5" style="" type="submit">
                                <p>Contact Info</p>
                            </div>
                            </a></li>
                        <li class="tabborder"></li>
			<li><a data-content="trash" href="#0">
                            <div class="wrapper-simple">
                                <input class="hvr-pulse-shrink" value="6" style="" type="submit">
                                <p>Header Settings</p>
                            </div>
                            </a></li>
                             <li class="tabborder"></li>
                            <li><a data-content="trash" href="#0">
                            <div class="wrapper-simple">
                                <input class="hvr-pulse-shrink" value="7" style="" type="submit">
                                <p>Logo</p>
                            </div>
                            </a></li>
		</ul> <!-- cd-tabs-navigation -->
                
	</nav>
    
	<ul class="cd-tabs-content">
            <!-- Profile -->
            
            <li data-content="inbox" class="selected">
			 <table class="table">
                            <thead>
                              <tr style="border-top: 1px solid rgb(221, 221, 221);">
                                <th>S.NO</th>
                                <th>title</th>
                                <th>action</th>
                              </tr>
                            </thead>
                            <tbody>
                             <tr>
                                <td>1</td>
                                <td>info bb</td>
                                <td>
<!--                                    <img src="images/add.png"/>-->
                               <section id="set-8">
				<div class="hi-icon-wrap hi-icon-effect-8">
                                    <div class="button-wrap">
                                    <a href="#set-8" class="hi-icon hi-icon-pencil" data-dialog3="somedialog3" class="trigger">Edit</a>
                                    <a href="#set-8" class="hi-icon hi-icon-archive">Delete</a>
                                    </div>
                                </div>
                               </section>
                                </td>
                              </tr>
                              
                               <tr>
                                <td></td>
                                <td></td>
                                <td style="float: right;">
<!--                                    <img src="images/save.png"/>-->
                                    <div class="btn1">
                                        <a class="hvr-rectangle-out1">Add New</a>
                                        <i class="icon-arrow-right icon-large signout_st1"></i>
                                      </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    
                    
       <div id="somedialog3" class="dialog">
        <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <div class="morph-shape" data-morph-open="M0,33.699V0c0,0,13.458,0,40.125,0C66.793,0,80,0,80,0v33.974v0.103V60c0,0-13.333,0-40,0c-26.667,0-40,0-40,0V33.699" data-morph-close="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
                            <path d="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699"></path>
                    </svg>
                </div>
                
                <div class="dialog-inner">
                    <div>
                        <img src="images/clos.png" class="img-responsive" data-dialog-close style="width: 19px; float: right; cursor: pointer;"/>
                    </div>
                    <h1>PROFILE</h1>
                    
                    <div class="mCustomScrollbar content fluid light" data-mcs-theme="inset-2-dark">
                        <div class="col-sm-12 br">
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-64" />
                                    <label class="input__label input__label--madoka" for="input-64">
                                            <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                            </svg>
                                            <span class="input__label-content input__label-content--madoka">Title</span>
                                    </label>
                                </span>
                            </div>
                            <br>
                            <br>
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-65" />
                                    <label class="input__label input__label--madoka" for="input-65">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Sub Title</span>
                                    </label>
                                </span>
                            </div>
                            
                        <br>
                        <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
<!--                                    <textarea class="input__field input__field--madoka" type="text" rows="4" cols="30" name="comment" form="usrform" id="input-66" >Enter text here...</textarea>-->
                                    <input class="input__field input__field--madoka" type="text" id="input-66" />
                                    <label class="input__label input__label--madoka" for="input-66">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        
                                        <span class="input__label-content input__label-content--madoka">Description</span>
                                    </label>
                                </span>
                            </div>
                        <br>
                        <br>
                        
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                            <button class="action" data-dialog-close>Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </div>
                </li>

                
            <!-- Showroom -->    
                
		<li data-content="Showroom">
			<table class="table">
                            <thead>
                              <tr style="border-top: 1px solid rgb(221, 221, 221);">
                                <th>S.NO</th>
                                <th>Display name</th>
                                <th>Industry</th>
                                <th>Type</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              <tr>
                                <td>1</td>
                                <td>champion ship this year</td>
                                <td>Agriculture</td>
                                <td>Provider</td>
                                <td>
                                 <section id="set-8">
                                    <div class="hi-icon-wrap hi-icon-effect-8">
                                        <div class="button-wrap">
                                        <a href="#set-8" class="hi-icon hi-icon-pencil" data-dialog4="somedialog4" class="trigger">Edit</a>
                                        <a href="#set-8" class="hi-icon hi-icon-archive">Delete</a>
                                        </div>
                                    </div>
                                 </section>
                                </td>
                              </tr>
                              
                               <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="float: right;">
<!--                                    <img src="images/save.png"/>-->
                                    <div class="btn1">
                                        <a class="hvr-rectangle-out1">Add New</a>
                                        <i class="icon-arrow-right icon-large signout_st1"></i>
                                      </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    
        <div id="somedialog4" class="dialog">
        <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <div class="morph-shape" data-morph-open="M0,33.699V0c0,0,13.458,0,40.125,0C66.793,0,80,0,80,0v33.974v0.103V60c0,0-13.333,0-40,0c-26.667,0-40,0-40,0V33.699" data-morph-close="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
                            <path d="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699"></path>
                    </svg>
                </div>
                
                <div class="dialog-inner">
                    <div>
                        <img src="images/clos.png" class="img-responsive" data-dialog-close style="width: 19px; float: right; cursor: pointer;"/>
                    </div>
                    <h1>Best Deals</h1>
                    
                    <div class="mCustomScrollbar content fluid light" data-mcs-theme="inset-2-dark">
                        <div class="col-sm-12 br">
                            
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select name="my-dropdown"  class="round input__field input__field--madoka" id="input-80" >
                                                <option value="0">Select Option</option>
                                                <option value="1">Provider</option>
                                                <option value="2">Seeker</option>
                                    </select>
                                    <label class="input__label--madoka" for="input-80" style="cursor: pointer;">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i80" class="sp"></span>
                                    </label>
                                </span>
                            </div>
                            <br>
                            <br>
                            
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select name="my-dropdown"  class="round input__field input__field--madoka" id="input-81" >
                                                <option value="0">Select Option</option>
                                                <option value="1">Product</option>
                                                <option value="2">Service</option>
                                    </select>
                                    <label class="input__label--madoka" for="input-81" style="cursor: pointer;">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i81" class="sp"></span>
                                    </label>
                                </span>
                            </div>
                            <br>
                            <br>
                            
                              <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-82" />
                                    <label class="input__label input__label--madoka" for="input-82">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Display Name</span>
                                    </label>
                                </span>
                            </div>
                            
                        <br>
                        <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select name="my-dropdown"  class="round input__field input__field--madoka" id="input-83" >
                                                <option value="0">Select Industry</option>
                                                <option value="1">xxxx</option>
                                                <option value="2">yyyy</option>
                                    </select>
                                    <label class="input__label--madoka" for="input-83" style="cursor: pointer;">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i83" class="sp"></span>
                                    </label>
                                </span>
                            </div>
                            <br>
                            <br>
                            
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-84" />
                                    <label class="input__label input__label--madoka" for="input-84">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Description</span>
                                    </label>
                                </span>
                            </div>
                        <br>
                        <br>
                        
                        <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <select name="my-dropdown"  class="round input__field input__field--madoka" id="input-85" >
                                                <option value="0">Select Business Type</option>
                                                <option value="1">Manufacture</option>
                                                <option value="2">Trading</option>
                                    </select>
                                    <label class="input__label--madoka" for="input-85" style="cursor: pointer;">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i85" class="sp"></span>
                                    </label>
                                </span>
                            </div>
                            <br>
                            <br>
                        
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-86" />
                                    <label class="input__label input__label--madoka" for="input-86">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Keyword</span>
                                    </label>
                                </span>
                            </div>
                        <br>
                        <br>
                        
                        
                        
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-87" />
                                    <label class="input__label input__label--madoka" for="input-87">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Quantity</span>
                                    </label>
                                </span></div>
                            <div class="col-sm-4">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-88" />
                                    <label class="input__label input__label--madoka" for="input-88">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Price</span>
                                    </label>
                                </span></div>
                            <div class="col-sm-4">
                                <span class="input input--madoka">
                                    <select name="my-dropdown"  class="round input__field input__field--madoka" id="input-89" >
                                                <option value="0">INR</option>
                                                <option value="1">$4</option>
                                                <option value="2">$5</option>
                                    </select>
                                    <label class="input__label--madoka" for="input-89" style="cursor: pointer;">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span id="i89" class="sp"></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <br>
                        <br>
                        
                        <div class="col-sm-12">
                            <p><b>Want to add more details</b></p>
                            <span class="input input--madoka">
                                <input class="input__field input__field--madoka" type="text" id="input-91" />
                                <label class="input__label input__label--madoka" for="input-91">
                                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    <span class="input__label-content input__label-content--madoka">Enter Details here</span>
                                </label>
                            </span>
                        </div>
                        <br>
                        <br>                        
                        
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="col-sm-offset-1 col-sm-5">
                            <button class="action" data-dialog-close>Add Specification</button>
                        </div>
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="col-sm-offset-1 col-sm-3">
                            <button class="action" data-dialog-close>Reset</button>
                        </div>
                        <br>
                        <br> 
                        <div class="col-sm-12 input input--madoka">
                            <div class="col-sm-4" style="text-align: left; color: #7A7593; font-size: 15px; font-weight: bold;">Brochure : </div>
                            <div class="col-sm-3">
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <label for="fileToUpload" style="float: left;">
                                      <img src="images/upload.png" class="img-responsive" style="float: left; cursor:pointer"/>
                                    </label>
                                    <span class="float: left">Upload</span>
                                    <input type="File" name="fileToUpload" id="fileToUpload" style="display: none">

                                  </form>
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                            <br>
                            <br>
                        <div class="col-sm-12 input input--madoka">
                            <div class="col-sm-4" style="text-align: left; color: #7A7593; font-size: 15px; font-weight: bold;">Cover Image:</div>
                            <div class="col-sm-3">
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <label for="fileToUpload" style="float: left;">
                                      <img src="images/upload.png" class="img-responsive" style="float: left; cursor:pointer"/>
                                    </label>
                                    <span class="float: left">Upload</span>
<!--                                    <input type="File" name="fileToUpload" id="fileToUpload" style="display: none">-->

                                  </form>
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                            <br>
                            <br>
<div class="col-sm-12 input input--madoka">
                            <div class="col-sm-4" style="text-align: left; color: #7A7593; font-size: 15px; font-weight: bold;">Inner Image:</div>
                            <div class="col-sm-3">
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <label for="fileToUpload" style="float: left;">
                                      <img src="images/upload.png" class="img-responsive" style="float: left; cursor:pointer"/>
                                    </label>
                                    <span class="float: left">Upload</span>
                                    <input type="File" name="fileToUpload" id="fileToUpload" style="display: none">

                                  </form>
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                            <br>
                            <br>
                        
                    </div>
                </div>
            </div>
    </div>
        </div>
                </li>

                
                
                <!-- pending -->
		<li data-content="Events">
			<table class="table">
                            <thead>
                              <tr style="border-top: 1px solid rgb(221, 221, 221);">
                                <th>S.NO</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Date of the Activity</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              <tr>
                                <td>1</td>
                                <td><img src="images/showroom/show_1.jpg" class="img-responsive" width="50px" height="30px"/></td>
                                <td>Cultural</td>
                                <td>12&hyphen;10&hyphen;2015 &ndash; 31&hyphen;10&hyphen;2016</td>
                                <td>
                                    <section id="set-8">
                                        <div class="hi-icon-wrap hi-icon-effect-8">
                                            <div class="button-wrap">
                                            <a href="#set-8" class="hi-icon hi-icon-pencil" data-dialog5="somedialog5" class="trigger">Edit</a>
                                            <a href="#set-8" class="hi-icon hi-icon-archive">Delete</a>
                                            </div>
                                        </div>
                                    </section>
                                </td>
                              </tr>
                              
                               <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="float: right;">
<!--                                    <img src="images/save.png"/>-->
                                    <div class="btn1">
                                        <a class="hvr-rectangle-out1">Add New</a>
                                        <i class="icon-arrow-right icon-large signout_st1"></i>
                                      </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    
        <div id="somedialog5" class="dialog">
        <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <div class="morph-shape" data-morph-open="M0,33.699V0c0,0,13.458,0,40.125,0C66.793,0,80,0,80,0v33.974v0.103V60c0,0-13.333,0-40,0c-26.667,0-40,0-40,0V33.699" data-morph-close="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
                            <path d="M0,33.699V0c0,0,13.208,11,39.875,11C66.543,11,80,0,80,0v33.974v0.103v13.111C80,47.188,66.667,60,40,60C13.333,60,0,47.062,0,47.062V33.699"></path>
                    </svg>
                </div>
                
                <div class="dialog-inner">
                    <div>
                        <img src="images/clos.png" class="img-responsive" data-dialog-close style="width: 19px; float: right; cursor: pointer;"/>
                    </div>
                    <h1>Events</h1>
                    
                    <div class="mCustomScrollbar content fluid light" data-mcs-theme="inset-2-dark">
                        <div class="col-sm-12 br">
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-69" />
                                    <label class="input__label input__label--madoka" for="input-69">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Title</span>
                                    </label>
                                </span>
                            </div>  
                            <br>
                            <br>
                            
                            <div class="col-sm-12">
                                <span class="input input--madoka">
                                    <input class="input__field input__field--madoka" type="text" id="input-70" />
                                    <label class="input__label input__label--madoka" for="input-70">
                                        <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                        </svg>
                                        <span class="input__label-content input__label-content--madoka">Description</span>
                                    </label>
                                </span>
                            </div>
                            <br>
                            <br>
                            
                            <div class="col-sm-12 input input--madoka">
                                <div class="col-sm-4" style="color: #7A7593; font-size: 15px; font-weight: bold;">Cover Image:</div>
                                <div class="col-sm-3">
                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                        <label for="fileToUpload" style="float: left;">
                                          <img src="images/upload.png" class="img-responsive" style="float: left"/>
                                        </label>
                                        <span class="float: left">Upload</span>
                                        <input type="File" name="fileToUpload" id="fileToUpload" style="display: none">
                                    </form>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <br>
                            <br>
                            
                            <div class="col-sm-12 input input--madoka">
                                <div class="col-sm-4" style="color: #7A7593; font-size: 15px; font-weight: bold;">Event Image:</div>
                                <div class="col-sm-3">
                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                        <label for="fileToUpload" style="float: left;">
                                          <img src="images/upload.png" class="img-responsive" style="float: left"/>
                                        </label>
                                        <span class="float: left">Upload</span>
                                        <input type="File" name="fileToUpload" id="fileToUpload" style="display: none">
                                    </form>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <br>
                            <br>
                        
<!--                         <div class="col-sm-12 input input--madoka">
                            <span><div class="col-sm-6 controls input-append date form_date" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input size="16" type="text" name="from" id="from" value="" readonly><span class="add-on"><i class="icon-remove"></i></span><span class="add-on"><i class="icon-th"></i></span>
                                    </div></span>
                        </div>-->
                            
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="col-sm-offset-1 col-sm-3">
                            <button class="action" data-dialog-close>Update</button>
                        </div>
                            
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="col-sm-offset-1 col-sm-3">
                            <button class="action" data-dialog-close>Reset</button>
                        </div>
                            
                        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="col-sm-offset-1 col-sm-3">
                            <button class="action" data-dialog-close>Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </div>
                </li>
##########
		<li data-content="store">
			<table class="table">
                            <thead>
                              <tr style="border-top: 1px solid rgb(221, 221, 221);">
                                <th>S.NO</th>
                                <th>title</th>
                                <th>action</th>
                              </tr>
                            </thead>
                            <tbody>
                             
                              <tr>
                                <td>1</td>
                                <td>info bb</td>
                                <td>
                                   <img src="images/closebt.png"/>
                                    <img src="images/edit.png"/>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>info cc</td>
                                <td>
                                    <img src="images/closebt.png"/>
                                    <img src="images/edit.png"/>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>info dd</td>
                                <td style="border-bottom: 1px solid rgb(221, 221, 221);">
                                   <img src="images/closebt.png"/>
                                    <img src="images/edit.png"/>
                                </td>
                              </tr>
                               <tr>
                                <td></td>
                                <td></td>
                                <td style="float: right;">
                                    <img src="images/save.png"/>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                </li>

		<li data-content="settings">
			<table class="table">
                            <thead>
                              <tr style="border-top: 1px solid rgb(221, 221, 221);">
                                <th>S.NO</th>
                                <th>title</th>
                                <th>action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>info bb</td>
                                <td>
                                   <img src="images/closebt.png"/>
                                    <img src="images/edit.png"/>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>info cc</td>
                                <td>
                                    <img src="images/closebt.png"/>
                                    <img src="images/edit.png"/>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>info dd</td>
                                <td style="border-bottom: 1px solid rgb(221, 221, 221);">
                                   <img src="images/closebt.png"/>
                                    <img src="images/edit.png"/>
                                </td>
                              </tr>
                               <tr>
                                <td></td>
                                <td></td>
                                <td style="float: right;">
                                    <img src="images/save.png"/>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                </li>

		<li data-content="trash">
			<table class="table">
                            <thead>
                              <tr style="border-top: 1px solid rgb(221, 221, 221);">
                                <th>S.NO</th>
                                <th>title</th>
                                <th>action</th>
                              </tr>
                            </thead>
                            <tbody>
                             <tr>
                                <td>1</td>
                                <td>info bb</td>
                                <td>
                                    <img src="images/closebt.png"/>
                                    <img src="images/edit.png"/>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>info cc</td>
                                <td>
                                   <img src="images/closebt.png"/>
                                    <img src="images/edit.png"/>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>info dd</td>
                                <td style="border-bottom: 1px solid rgb(221, 221, 221);">
                                    <img src="images/closebt.png"/>
                                    <img src="images/edit.png"/>
                                </td>
                              </tr>
                               <tr>
                                <td></td>
                                <td></td>
                                <td style="float: right;">
                                    <img src="images/save.png"/>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                </li>
	</ul> <!-- cd-tabs-content -->
    
</div>

 <!--Main menu 3-->
 <!-- Change Password  --> 
 <div id="password" class="cd-tabs" style="display:none">
     <div class="col-sm-12" style="text-align: center">
        <span class="input input--madoka">
            <input class="input__field input__field--madoka" type="text" id="input-100" />
            <label class="input__label input__label--madoka" for="input-100">
                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                    </svg>
                    <span class="input__label-content input__label-content--madoka">Old password</span>
            </label>
        </span>
          <br>
                        <br> 
         <span class="input input--madoka">
            <input class="input__field input__field--madoka" type="text" id="input-101" />
            <label class="input__label input__label--madoka" for="input-101">
                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                    </svg>
                    <span class="input__label-content input__label-content--madoka">New Password</span>
            </label>
        </span>
          <br>
                        <br> 
         <span class="input input--madoka">
            <input class="input__field input__field--madoka" type="text" id="input-102" />
            <label class="input__label input__label--madoka" for="input-102">
                    <svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                    </svg>
                    <span class="input__label-content input__label-content--madoka">Confirm Password</span>
            </label>
        </span>
         
          <br>
                        <br> 
         <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="col-sm-offset-4 col-sm-2">
                <button class="action" data-dialog-close>Submit</button>
         </div>
        <div style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="col-sm-2">
            <button class="action" data-dialog-close>Reset</button>
        </div>
                        <br>
                        <br> 
    </div>
 </div>
 
<script src="js/jquery-2.1.1.js"></script>
<script src="js/tab.js"></script> <!-- Resource jQuery -->
     </div>
        </div>
    </div>
    
    <?php include("footer.php");?>
</section>
    <script>
			var hash = window.location.hash,
				current = 0,
				demos = Array.prototype.slice.call( document.querySelectorAll( '#codrops-demos > a' ) );
			
			if( hash === '' ) hash = '#set-1';
			setDemo( demos[ parseInt( hash.match(/#set-(\d+)/)[1] ) - 1 ] );

			demos.forEach( function( el, i ) {
				el.addEventListener( 'click', function() { setDemo( this ); } );
			} );

			function setDemo( el ) {
				var idx = demos.indexOf( el );
				if( current !== idx ) {
					var currentDemo = demos[ current ];
					currentDemo.className = currentDemo.className.replace(new RegExp("(^|\\s+)" + 'current-demo' + "(\\s+|$)"), ' ');
				}
				current = idx;
				el.className = 'current-demo'; 
			}
		</script>
                
                <script src="dialog/js/classie.js"></script>
		<script src="dialog/js/dialogFx.js"></script>
		<script>
			(function() {

				var dlgtrigger = document.querySelector( '[data-dialog]' ),

					somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
					// svg..
					morphEl = somedialog.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

			})();
                        
                        (function() {

				var dlgtrigger = document.querySelector( '[data-dialog1]' ),

					somedialog1 = document.getElementById( dlgtrigger.getAttribute( 'data-dialog1' ) ),
					// svg..
					morphEl = somedialog1.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog1, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

			})();
                        
                        (function() {

				var dlgtrigger = document.querySelector( '[data-dialog3]' ),

					somedialog3 = document.getElementById( dlgtrigger.getAttribute( 'data-dialog3' ) ),
					// svg..
					morphEl = somedialog3.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog3, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
			})();
                        
                        (function() {

				var dlgtrigger = document.querySelector( '[data-dialog4]' ),

					somedialog4 = document.getElementById( dlgtrigger.getAttribute( 'data-dialog4' ) ),
					// svg..
					morphEl = somedialog4.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog4, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
			})();
                        
                        (function() {

				var dlgtrigger = document.querySelector( '[data-dialog5]' ),

					somedialog5 = document.getElementById( dlgtrigger.getAttribute( 'data-dialog5' ) ),
					// svg..
					morphEl = somedialog5.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog5, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 150 );
						},
						onCloseDialog : function( instance ) {
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
			})();
                        
                        
                        /*form*/
                        (function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled--t' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
                                       
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '') {
					classie.remove( ev.target.parentNode, 'input--filled' );
					}
					if( ev.target.value.trim() != '') {
					classie.remove( ev.target.parentNode, 'input--filled' );
					classie.add( ev.target.parentNode, 'input--filled--t' );
					}
				}
			})();
		</script>

                
<!-- Scroll -->
<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>
	
	<!-- custom scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
                
<script type="text/javascript" src="dialog/jQuery.js"></script>
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