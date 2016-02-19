function trim(str) 
{
  return str.replace(/^\s*|\s*$/g,"");
}
function Disappear()
{
	setTimeout(settimedisp,2000);
}
function clearedate(obj)
{
$("#"+obj).val("");
}
function checkNumber(o,w)						// Function Numbers only
{
o.value = o.value.replace(/[^0-9 +-]+/g,'');	// replace empty value to the characters execpt (0-9 +)
}
function urlvalidate(o,w)							
{
o.value = o.value.replace(/[^a-zA-Z0-9-]+/g,'');
}
function showHint(str)
{
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Checkurl.php?q="+str,true);
xmlhttp.send();
}
function selectall(text,id)
{
$("#"+id).each(function(){
if($("#"+id+ " option").attr("selected"))
{
$("#"+id+"  option").removeAttr("selected");
$("#"+text).html("Select All");
}
else
{
$("#"+id+"  option").attr("selected", "selected");
$("#"+text).html("Deselect All");
}});
}
$(document).ready(function(){
    
$('#selcountry').on('change',function(){ 
var str = $('#selcountry').val();   
$.ajax({
type:'POST',
url: 'include/BlModules/Bl_address.php',
data: 'action=state&data='+str,
success:function(data)
{
$('#selstate').html(data);
$('#selcity').html('');
$('#barea').html('');
$('#bpincode').html('');
}
})
});

$('#selstate').on('change',function(){ 
var str = $('#selcountry').val();    
var str2 = $('#selstate').val();   
$.ajax({
type:'POST',
url: 'include/BlModules/Bl_address.php',
data: 'action=city&data='+str+'&data2='+str2,
success:function(data)
{
$('#selcity').html(data);
$('#barea').html('');
$('#bpincode').html('');
}
})


});

$('#selcity').on('change',function(){ 
var str = $('#selcountry').val();    
var str2 = $('#selstate').val();
var str3 = $('#selcity').val(); 
$.ajax({
type:'POST',
url: 'include/BlModules/Bl_address.php',
data: 'action=area&data='+str+'&data2='+str2+'&data3='+str3,
success:function(data)
{
$('#barea').html(data);
$('#bpincode').html('');
}
})
});


$('#barea').on('change',function(){ 
var str = $('#selcountry').val();    
var str2 = $('#selstate').val();
var str3 = $('#selcity').val(); 
var str4 = $('#barea').val(); 
$.ajax({
type:'POST',
url: 'include/BlModules/Bl_address.php',
data: 'action=pincode&data='+str+'&data2='+str2+'&data3='+str3+'&data4='+str4,
success:function(data)
{
$('#bpincode').html(data);
}
})
});    
    
});

