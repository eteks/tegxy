$(document).ready(function(){

	var inp = $('#emailhere');
	var i = 0;
	var emailField = $('<section style="display: none;" class="emailc"><input type="email" name="email" id="email" class="field"><label for="email" class="email">E-mail</label></section');

	// Do stuff when you click to show register form
	$('ul.tabs li.register').click(function(){

		$('#do').val('register');

		$('.button').val('Register');

		$('.login').removeClass('active');
		$('.register').addClass('active');

		if ( i < 1 ) {
			   
			$(emailField).appendTo('#emailhere').slideDown('slow');

		};

	});

	// Do stuff when you click to show login form
	$('ul.tabs li.login').click(function(){

		var i = 0;

		$('#do').val('login');

		$('.button').val('Login');
	
		$('.emailc').slideUp('slow', function(){ $('.emailc').remove(); });

		$('.register').removeClass('active');
		$('.login').addClass('active');	

	});	

	// Moving the input labels correctly.
	$('#login').on("blur", "input",function() {

		// Make the label stay above if the field is not empty.
	    if( this.value ) {
	        $(this).next().addClass('notEmpty');
	    }

	    // Make the label go back on the field if the field is empty.
	    if( !this.value ) {
	        $(this).next().removeClass('notEmpty');
	    }

	});

});