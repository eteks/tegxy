<div class="panel-group outer" id="accordion" id=d3i>
    <div class="panel panel-default ">
      <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <h4 class="panel-title" >
           <a style="width: 100%;text-decoration: none !important;">Profile Info</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
		<p>Company Name <span class="comp_space1" >: <?php echo $companyname;?></span> </p>
                <?php if($groupname!=''){?><p>Group Name <span class="comp_space2">: <?php echo $groupname;?></span> </p><?php }?>
		<?php if($industrydisp!=''){?><p>Industry <span class="comp_space3">: <?php echo $industrydisp;?></span> </p><?php }?>
                <?php if($dispkeyword!=''){?><p>Offers <span class="comp_space3">: <?php echo  $dispkeyword;?></span> </p><?php }?>
		<?php if($companytype!=''){?><p>Types of Company <span class="comp_space4">: <?php echo $companytype;?></span> </p><?php }?>
		<?php if($yearofest!=''){?><p>Year of Establishment<span class="comp_space5">: <?php echo $yearofest;?></span> </p><?php }?>
		<?php if($compstrength!=''){?><p>Company Strength <span class="comp_space6">: <?php echo $compstrength;?></span> </p><?php }?>
		<?php if($dispareas!=''){?><p>Operating Areas <span class="comp_space7">: <?php echo $dispareas;?></span> </p><?php }?>
                <?php if($workfrom!=''){?><p>Working Days <span class="comp_space7">: <?php echo $workfrom.' - '.$workto;?></span> </p><?php }?>
                <?php if($bustimefrom!=''){?><p>Business Timing <span class="comp_space7">: <?php echo $bustimefrom.' - '.$bustimeto;?></span> </p><?php }?>
                <?php if($breakfrom!=''){?><p>Break Time <span class="comp_space7">: <?php echo $breakfrom.' - '.$breakto;?></span> </p><?php }?>
        </div>
      </div>
        
      <?php
            $profile = $database->query("call pro_profile($prolid,'',1)")->fetchAll();
            $i=2;
            foreach($profile as $fetprof)
            {?>
                <div class="panel panel-default">
                    <div class="panel-heading btn1 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">
                      <h4 class="panel-title">
                        <a style="width: 100%;text-decoration: none !important;"><?php echo $fetprof['PFE_Title'];?></a>
                      </h4>
                    </div>
                    <div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php 
                                    $profiledtl = $database->query("call pro_profile('','".$fetprof['PFE_Pk']."',2)")->fetchAll();
                                    foreach($profiledtl as $fetprofdtl)
                                    {?>
                                        <h3><?php echo $fetprofdtl['PDS_SubTitle'];?></h3>
                                        <?php echo stripslashes($fetprofdtl['PDS_Desc']);
                                    }?>
                            </div>
                    </div>
                  </div>
      <?php $i++;}?>
    </div>
  </div> 
