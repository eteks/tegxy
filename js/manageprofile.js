  
$(document).ready(function()
{
        $('#compyform').on('submit',function()
            { 
                if($('#companyname').val()=='')
                    {
                        alert("Please Enter the Company Name");
                        $('#companyname').focus();
                        return false;
                    }

                else if($('#industry').val()=='')
                    {
                        alert("Please Select the Sector");
                        $('#industry').focus();
                        return false;
                    }
                else if($('#email').val()=='')
                    {
                        alert("Please Enter the Email");
                        $('#email').focus();
                        return false;
                    }
                else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#email').val())))
                    {
                        alert("Please Enter the Valid Email Id");	
                        $('#email').focus();
                        return false;
                    }
                else if($('#yearofest').val()=='')
                    {
                        alert("Please Select the Year Of Establishment");
                        $('#yearofest').focus();
                        return false;
                    }
                else if($('#typeofcomp').val()=='')
                    {
                        alert("Please Select the Company Type");
                        $('#typeofcomp').focus();
                        return false;
                    }

                else if($('#address1').val()=='' && $('#address2').val()=='')
                    {
                        alert("Please Enter the Address");
                        $('#address1').focus();
                        return false;
                    }
                else if($('#selcountry').val()=='')
                    {
                        alert("Please Select the Country");
                        $('#selcountry').focus();
                        return false;
                    }
                else if($('#selstate').val()=='')
                    {
                        alert("Please Select the State");
                        $('#selstate').focus();
                        return false;
                    }
                else if($('#selcity').val()=='')
                    {
                        alert("Please Select the City");
                        $('#selcity').focus();
                        return false;
                    }
                else if($('#mobile').val()=='' && $('#landline').val()=='')
                    {
                        alert("Please Enter the Mobile / Landline Number");
                        $('#mobile').focus();
                        return false;
                    }



                    $.ajax({
                                type:'POST',
                                url: 'include/BlModules/Bl_companydetails.php',
                                data: $('#compyform').serialize(),
                                success:function(data)
                                    {
                                        if(data!='')
                                        {
                                            alert('Updated Successfully');
                                            $('#compdetlgrid').html(data);
                                        }
                                    }
                          })
            return false;
    });







    $('#selcountry').on('change',function()
    { 
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

    $('#ownselcountry').on('change',function()
    { 
        var str = $('#ownselcountry').val();   
            $.ajax({
                type:'POST',
                url: 'include/BlModules/Bl_address.php',
                data: 'action=state&data='+str,
                success:function(data)
                    {
                        $('#ownselstate').html(data);
                        $('#ownselcity').html('');
                        $('#oarea').html('');
                        $('#opincode').html('');
                    }
            })
    });

    $('#ownselstate').on('change',function()
    { 
        var str = $('#ownselcountry').val();    
        var str2 = $('#ownselstate').val();   
            $.ajax({
                type:'POST',
                url: 'include/BlModules/Bl_address.php',
                data: 'action=city&data='+str+'&data2='+str2,
                success:function(data)
                    {
                        $('#ownselcity').html(data);
                        $('#oarea').html('');
                        $('#opincode').html('');
                    }
            })


    });

    $('#ownselcity').on('change',function()
    { 
        var str = $('#ownselcountry').val();    
        var str2 = $('#ownselstate').val(); 
        var str3 = $('#ownselcity').val(); 
            $.ajax({
                    type:'POST',
                    url: 'include/BlModules/Bl_address.php',
                    data: 'action=area&data='+str+'&data2='+str2+'&data3='+str3,
                    success:function(data)
                        {
                            $('#oarea').html(data);
                            $('#opincode').html('');
                        }
                })
    });


    $('#oarea').on('change',function()
    { 
        var str = $('#ownselcountry').val();    
        var str2 = $('#ownselstate').val(); 
        var str3 = $('#ownselcity').val();  
        var str4 = $('#oarea').val(); 
            $.ajax({
                type:'POST',
                url: 'include/BlModules/Bl_address.php',
                data: 'action=pincode&data='+str+'&data2='+str2+'&data3='+str3+'&data4='+str4,
                success:function(data)
                    {
                     $('#opincode').html(data);
                    }
            })
    });


    $('#prolinkclk').on('click',function()
    { 
        var str = $('#profilelink').val();  
            if(str=='')
                {
                    alert("Please Enter the Page Address");
                    $('#profilelink').focus();
                    return false;
                }
            $.ajax({
                type:'POST',
                url: 'include/BlModules/Bl_profilelink.php',
                data: 'profilelink='+str,
                success:function(data)
                    {
                        if(data!='')
                        {    
                            var res = data.split("######");
                            alert(trim(res[0]));    
                            $('#profilelink').val(res[1]);
                        }
                    }
            })
    });

    $('#ownerform').on('submit',function()
    { 
        if($("#ownername").val()=='')
            {
                alert("Please Enter the Owner Name");
                $("#ownername").focus();
                return false;
            }
        if ($("#ownemail").val()!='' && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#ownemail").val())))
            {
                alert("Please Enter the Valid Email Id");	
                $("#ownemail").focus();
                return false;
            }
        $.ajax({
                type:'POST',
                url: 'include/BlModules/Bl_ownerdetails.php',
                data: $('#ownerform').serialize(),
                success:function(data)
                    {
                        alert('Updated Successfully');    
                        if(data!='')    
                        $('#ownerdetlgrid').html(data);
                    }
            })
    });


    $('#compedit').on('click',function()
    { 
        $.ajax({
            type:'POST',
            url: 'include/BlModules/Bl_companydtledit.php',
            success:function(data)
                {
                    if(data!='')
                    {    
                        var res = data.split("####");

                        $('#companyname').val(res[1]);
                        $('#groupname').val(res[2]);
                        $('#industry').val(res[3]);
                        $('#email').val(res[4]);
                        $('#requestno').val(res[5]);
                        $('#yearofest').val(res[6]);
                        $('#typeofcomp').val(res[7]);
                        $('#empstr').val(res[8]);
                        $('#address1').val(res[9]);
                        $('#address2').val(res[10]);
                        $('#selcountry').val(res[11]);
                        $('#selstate').val(res[12]);
                        $('#selcity').val(res[13]);
                        $('#barea').val(res[14]);
                        $('#bpincode').val(res[15]);
                        $('#mobile').val(res[16]);
                        $('#landline').val(res[17]);
                        $('#website').val(res[18]);
                    }
                }
        })
    });

    $('#ownedit').on('click',function()
    { 
        $.ajax({
                type:'POST',
                url: 'include/BlModules/Bl_ownerdtledit.php',
                success:function(data)
                    {
                        if(data!='')
                        {    
                            var res = data.split("####");

                            $('#ownername').val(res[1]);
                            $('#designation').val(res[2]);
                            $('#dob').val(res[3]);
                            $('#gender').val(res[4]);
                            $('#ownaddr').val(res[5]);
                            $('#ownselcountry').val(res[6]);
                            $('#ownselstate').val(res[7]);
                            $('#ownselcity').val(res[8]);
                            $('#oarea').val(res[9]);
                            $('#opincode').val(res[10]);
                            $('#ownphoneno').val(res[11]);
                            $('#ownlandline').val(res[12]);
                            $('#ownemail').val(res[13]);
                            $('#owneducate').val(res[14]);
                        }
                    }
            })
    });

});