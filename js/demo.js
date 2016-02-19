
$(document).ready(function() {
	
	/* Simple Style */
	$('.wrapper-simple input[type=button]').toggle(function(){
       searchKey = $("#searchlist").val();
            if(searchKey!='') {
                           }
                           else{
                               $('.arrow2').hide();
                
		$('.wrapper-simple').animate({'width':'540px'})
				  .end().find('.wrapper-simple input[type=text]').animate({'width': '300px'})
				  .end().find('.wrapper-simple img').animate({'marginLeft': '-5px'})
				  .end().find(this).animate({'marginLeft':'16em'}).attr('value', 'GET');
		           $('#adv_sch').show();
				   $('.src_txt').hide();
                           }     
	}, function() {
		searchKey = $("#searchlist").val();
                      if(searchKey=='') {
		$('.arrow2').show();
		$('.wrapper-simple').animate({'width':'111px'})
				  .end().find('.wrapper-simple input[type=text]').animate({'width': '1px'})
				  .end().find('.wrapper-simple img').animate({'marginLeft': '21px'})
				  .end().find(this).animate({'marginLeft':'0px'}).attr('value', '');
				  $('#adv_sch').hide();
				   $('.src_txt').show(); 
                                   }
                                    else{
    } 
		
	});  
     

  
        

    
        
	
//	/* Cube Style */
//	$('.search-button1').click(function() {
//		
//			
//			$('.content-wrapper1').addClass('switch-show');
//			$('.search-box1').addClass('show-search-box');
//			
//			setTimeout(function(){
//		
//				$('.content-wrapper1').removeClass('switch-show');
//				$('.search-button1').removeClass('show-search-button').addClass('hide-search-button');
//				$('.search-box1').addClass('showed-search-box');
//			
//			},480);
//	});
//	
//	$('.search-box1 img').click(function() {
//		
//		$('.search-button1').removeClass('hide-search-button');
//		$('.search-box1').addClass('hidden-search-box');
//		$('.content-wrapper1').addClass('switch-hide');
//		
//			
//			setTimeout(function(){
//		
//				$('.content-wrapper1').removeClass('switch-hide');
//				$('.search-button1').removeClass('show-search-button');
//				$('.search-box1').removeClass('show-search-box showed-search-box hidden-search-box');
//			
//			},480);
//			
//	});
//	
//	/* Cube Style With Animate */
//	$('.search-button2').click(function() {
//		
//		$('.arrow').hide();
//		
//		$(this).stop().animate({'width':'300px'}, 500, function() {
//			
//			$('.content-wrapper2').addClass('switch-show');
//			$('.search-box2').addClass('show-search-box');
//			
//			setTimeout(function(){
//		
//				$('.content-wrapper2').removeClass('switch-show');
//				$('.search-button2').removeClass('show-search-button').addClass('hide-search-button');
//				$('.search-box2').addClass('showed-search-box');
//			
//			},480);
//			
//		});
//	});
//	
//	$('.search-box2 img').click(function() {
//		
//		
//		$('.search-button2').removeClass('hide-search-button');
//		$('.search-box2').addClass('hidden-search-box');
//		$('.content-wrapper2').addClass('switch-hide');
//		
//		$('.search-button2').addClass('show-search-button').stop().delay(500).animate({'width':'50px'}, 500, function() {
//			
//			$('.content-wrapper2').removeClass('switch-hide');
//			$('.search-button2').removeClass('show-search-button');
//			$('.search-box2').removeClass('show-search-box showed-search-box hidden-search-box');
//			
//			$('.arrow').show();
//			
//		});
//	});
//
//	if(!Modernizr.input.placeholder){
//		$("input").each( function(){
//				
//				thisPlaceholder = $(this).attr("placeholder");
//				
//				if(thisPlaceholder!=""){
//					
//					$(this).val(thisPlaceholder);
//					
//					$(this).focus(function(){ if($(this).val() == thisPlaceholder) $(this).val(""); });
//					$(this).blur(function(){ if($(this).val()=="") $(this).val(thisPlaceholder); });
//				}
//		});
//	}
});


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
window.location.href="search.php?action=Add&searchkey="+searchKey+"&requesttype="+requestType+"&usercity="+userCity+"&userarea="+userArea+"&type2=1";
}

function Searchusingenterkey(e)
{
// look for window.event in case event isn't passed in
if (typeof e == 'undefined' && window.event) { e = window.event; }
if (e.keyCode == 13)
Searchpage();
}