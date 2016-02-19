<?php include("loginheader.php");?>
<style>
.validate {
color: #f00;
font-weight: bold;
text-align:center;
font-size:11px;
margin-bottom: 10px;
margin-top: -10px;
}  
</style>
<div class="gradient">
   <div class="container1">

     <div class="panel">
        <!--front form1 starts-->
        <div class="front">
             <div class="inside">
                 <div id="result_html">
		    <form class="form-1" id="loginform" name="loginform"  method="post" >
                        <p class="spa_space"> Sign In to Your Account  </p>
                        <p class="validate" id="loginmsg"></p>
                        <p class="field">
                            <input class="removeout" type="text" name="username" id="username" placeholder="Username / Email Id / Mobile No." autofocus autocomplete="off">
                            <i class="icon-user icon-large"></i>	
                        </p>
                        <p class="field spacing">
                            <input class="removeout" type="password" name="password" id="password" placeholder="Password" autocomplete="off">
                            <i class="icon-lock icon-large"></i>
                        </p>

                        <div class="space_bottom">
                                <input type="hidden" id="submit" name="submit"  value="Sign In" />
                            <p class="field field1">
                                <input type="submit" class="sign_button w3-btn" id="loginclick"  value="Sign In">
                            </p>
                            <div class="forget hvr-underline-from-left button_1">
                              <a href="">Forgot password</a> 
                            </div>

                        </div> 
		    </form>  
	        </div>
            </div>
        </div>
	
	<!--front form1 end -->
	
    <div class="back">
        <div class="inside">
       
	<!--Back form2 end-->	
		<form class="form-1" method="post" id="forgotpasswordform">
                    <p class="spa_space1"> Forgot Password  </p>
                    <p class="validate" id="forgotpasswordmsg"></p>
                    <p class="field spacing">
                            <input class="removeout" type="text" id="emailid" name="emailid" placeholder="Username / Email Id / Mobile No.">
                            <i class="icon-lock icon-large"></i>
                    </p>				
                    <div class="space_bottom1"><input type="hidden" id="fsubmit" name="fsubmit"  value="Submit" />
                        <p class="field field1">
                          <input class="sign_button w3-btn" type="submit" id="forgotclick"  value="Submit"  />
                        </p>					  
                        <div class="trans_sign hvr-underline-from-left button_1">
                          <a href="">Sign In</a> 
                        </div>				  
                    </div> 
		</form>
        </div>
    </div>
	
	<!--Back form2 end-->
	
  </div>

</div>
</div>

<script>
$("#username").focus();
$(document).ready(function(){
    $('.button_1').click(function(e){
            $(".panel").toggleClass('flip');
            e.preventDefault();
            $('#loginform')[0].reset();
            $('#forgotpasswordform')[0].reset();
            $('.validate').html(""); 
    }); 

$('#loginform').submit(function(){   
    if($("#username").val()=='')
        {
            $('#loginmsg').html('Please Enter the Username / Email Id / Mobile No.');	
            $("#username").focus();
        return false;
        }
    else if($("#password").val()=='')
        {
            $('#loginmsg').html('Please Enter the Password');	
            $("#password").focus();
            return false;
        }
    //added by kalai
    //*******
    alert($('#loginform').serialize());
    //*******
    $.ajax({
    type:'POST',
    url: 'include/BlModules/Bl_login.php',
    data: $('#loginform').serialize(),
        success:function(data)
            {
                alert(data);
                if(data=='not')  
                {
                    $('#loginmsg').html('Invalid Username or Password!'); 
                    $('#loginmsg').show();
                    $('#loginform')[0].reset();
                    $('.validate').delay(2000).fadeOut(); 

                }
                else
                    window.location.href="manageprofile.php";  
            }
        })
    return false;
});

$('#forgotpasswordform').submit(function(){
    if($("#emailid").val()=='')
    {
        $('#forgotpasswordmsg').html('Please Enter the Username / Email Id / Mobile No.');	
        $("#emailid").focus();
        return false;
    }

    $.ajax({
            type:'POST',
            url: 'include/BlModules/Bl_login.php',
            data: $('#forgotpasswordform').serialize(),
            success:function(data)
                {
                    if(data=='1')
                        {
                            $('#forgotpasswordmsg').html('Invalid Email Id / Mobile Number!');  
                            $('#forgotpasswordmsg').show();
                        }
                    else 
                        {
                            $('#forgotpasswordmsg').html('Password has been Sent to your Email Id and Mobile!');   
                            $('#forgotpasswordmsg').show();
                        }  
                    $('#forgotpasswordform')[0].reset();
                    $('.validate').delay(2000).fadeOut(); 

                }
          })
        return false;
    });
    
});
</script>
</body>
</html>
