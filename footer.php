<section class="foot_wrap">
<div class="pag_nav">
<ul class="foot_nav">
        <li>Privacy Statement</li>
        <li>User Terms</li>
        <li>Contact</li>
        <li><a href="<?php if($_SESSION['lid']!=''){?>logout.php<?php } else {?>login/<?php }?>"><?php if($_SESSION['lid']!=''){?>Sign Out<?php } else {?>Sign In<?php }?></a></li>
        <li><a href="register/">Register</a></li>
<ul>
</div>
        <footer>
                Copyright &copy; 2015 Xyget. com All rights reserved.
        </footer>
</section>