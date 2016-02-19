<div id="estab" class="cd-tabs" >
    <nav>
	<ul class="cd-tabs-navigation" style="border-bottom: 3px solid rgb(163, 38, 42); padding-bottom: 20px;">
            <li style="margin-left: 29%;"><a data-content="name" class="selected particular" href="#0">
                    <div class="wrapper-simple">
                        <input class="hvr-pulse-shrink" value="1" style="" type="submit">
                        <p>Company Setup</p>
                    </div>
                </a>
            </li>
            <li class="tabborder"></li>
            <li><a data-content="details" class="particular" href="#0">
                    <div class="wrapper-simple">
                        <input class="hvr-pulse-shrink" value="2" style="" type="submit">
                        <p>Owner Details</p>
                    </div>
                </a>
            </li>
        </ul> 
    </nav>
  <ul class="cd-tabs-content">
      <li data-content="name" class="selected"><div id="compdetlgrid" ><?php include("companygrid.php");?></div><?php include("companyform.php");?></li>
     <li data-content="details"><div id="ownerdetlgrid" ><?php include("ownergrid.php");?></div><?php include("ownerform.php");?></li> 
   </ul>
            
</div> <!-- cd-tabs -->