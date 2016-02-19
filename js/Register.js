$(document).ready(function(){
$('#industry').on('change',function(){     
var dat = $('#industry').val();   
$('#keywordgrid').show();    
    
$.ajax({
type:'POST',
url: 'include/BlModules/Bl_Setsessionval.php',
data: 'str='+dat,
success:function(data)
{
//
}
})    
    
});    


$('#regsubmit').on('click',function(){ 
 if($("#companyname").val()=='')
{
alert("Please Enter the Company Name");	
$("#companyname").focus();
return false;
}  
if($("#yearofest").val()=='')
{
alert("Please Select the Year Of Establishment");	
$("#yearofest").focus();
return false;
} 

else if($("#industry").val()=='')
{
alert("Please Select the Industry");	
$("#industry").focus();
return false;
}
else if($("#email").val()=='')
{
alert("Please Enter the Email");	
$("#email").focus();
return false;
}
else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())))
{
alert("Please Enter the Valid Email Id");	
$("#email").focus();
return false;
}
else if($("#username").val()=='')
{
alert("Please Enter the User Name");	
$("#username").focus();
return false;
}

else if($("#password").val()=='')
{
alert("Please Enter the Password");	
$("#password").focus();
return false;
}

else if($("#Cpassword").val()=='')
{
alert("Please Enter the Confirm Password");	
$("#Cpassword").focus();
return false;
}

else if($("#Cpassword").val()!=$("#password").val())
{
alert("Password Mismatched");	
$("#Cpassword").focus();
$("#password").val('');
$("#Cpassword").val('');
return false;
}

else if($("#address1").val()=='' && $("#address2").val()=='' )
{
alert("Please Enter the Address");	
$("#address1").focus();
return false;
}

else if($("#selcountry").val()=='')
{
alert("Please Select the Country");	
$("#selcountry").focus();
return false;
}
else if($("#selstate").val()=='')
{
alert("Please Select the State");	
$("#selstate").focus();
return false;
}
else if($("#selcity").val()=='')
{
alert("Please Select the City");	
$("#selcity").focus();
return false;
}

else if($("#mobile").val()=='' && $("#landline").val()=='')
{
alert("Please Enter the Mobile / Landline Number");	
$("#mobile").focus();
return false;
}
});

});
