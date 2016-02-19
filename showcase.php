<div class="showcase" id="showcase" style="display:none">
<?php $showcase = $database->query("call pro_proser($prolid,1,'')")->fetchAll();
      foreach($showcase as $fetshowcase)
      {
         $dispname          = $fetshowcase['PS_Display'];
         $descp             = $fetshowcase['PS_Description'];
         $price             = $fetshowcase['PS_Price'];
         $currency          = $fetshowcase['PS_Currency'];
         $unit              = $fetshowcase['PS_Unit'];
         $xbitimg           = XbitImage($fetshowcase['PS_Id']);
         if($xbitimg!='')
           $xbitimg  =  $xbitimg; 
         else
           $xbitimg  =  'images/default/no_image.png';
          ?> 
            <div class="show">
                  <img class="w3-image" src="<?php echo $xbitimg;?>" />
                  <div class="content_show">
                      <h5><?php if(strlen(stripslashes($dispname))>15){ echo substr(stripslashes($dispname),0,20).'...' ;} else { echo stripslashes($dispname);} ?></h5>
                      <h6>Description</h6>
                      <span><?php if(strlen(stripslashes($descp))>45){ echo substr(stripslashes($descp),0,90).'...' ;} else { echo stripslashes($descp);} ?></span>
                   </div>
                  <div class="cost_show">
                      <h5 class="cost"><?php if($price!='' && $price!='0') { echo $price.' '.$currency; }?></h5>
                      <span class="quantity"><?php if($unit!=''){ echo 'Quantity: '.$unit; }?></span>
                      <input type="button" class="more_button w3-btn btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" value="Know More"></input>
                  </div>
            </div>
<?php }?>
</div>