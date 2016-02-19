

function Searchpage()
{
   // alert("enter");
searchKey = $("#searchlist").val();
var requestType=$("input[name='requestType']:checked").val();
var userCity=$("#userCity").val();
var userArea;
if(selectarea=='')
userArea=$("#selectarea").val();
else
userArea=selectarea;
//alert(requestType);
//alert(searchKey);
//alert(userCity);
//alert(userArea);
window.location.href="Search?action=Add&searchkey="+searchKey+"&requesttype="+requestType+"&usercity="+userCity+"&userarea="+userArea+"&type2=1";
}

function Searchusingenterkey(e)
{
// look for window.event in case event isn't passed in
if (typeof e == 'undefined' && window.event) { e = window.event; }
if (e.keyCode == 13)
Searchpage();
}
