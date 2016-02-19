<header class="w3-container w3-black head_style">
    <div class="w3-image w3-padding-medium sty">
        <a href="index/"><img src="image/logo.png" alt="logo" style="width:16%"></a>
            <?php if($pagename!='profileview')
                 {?>  
                    <a class="w3-btn button1 hvr-rectangle-out" href="register.php">Register</a>
                    <i class="icon-eye-open icon-large register_st "></i>
            <?php }?>
            <?php if($pagename!='login')
                 {?>
                    <a class="w3-btn button11 hvr-rectangle-out" href="<?php if($_SESSION['lid']!=''){?>logout.php<?php } else {?>login.php<?php }?>"><?php if($_SESSION['lid']!=''){?>Sign Out<?php } else {?>Sign In<?php }?></a>
                    <i class="icon-arrow-right icon-large signout_st"></i>    
            <?php }?>

    </div>
</header>