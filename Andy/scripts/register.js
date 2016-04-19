
$(document).ready(function(){
	$('#menuID').hide();
});



$(document).ready(function(){
	$('#email').hide();
	$('.back_to_login').hide();
});

$(document).ready(function(){ 
    $('#register').click(function(){
/*
    	$('input[type="text"]').each(function() { 
        	var $this = $(this); 
			$this.attr("placeholder", "Enter desired username")
			$('.back_to_login').show();
        });
        $('input[type="password"]').each(function() { 
        	var $this = $(this); 
			$this.attr("placeholder", "Enter desired password")
        });
*/
	$('#user_login').attr( 'placeholder', 'Enter new username' );
	$('#user_pass').attr( 'placeholder', 'Enter new password' );
        $('#email').show(300);
        $('#login-submit').hide();
        $('.back_to_login').show();

        
  });
});

$(document).ready(function(){ 
    $('.back_to_login').click(function(){
	    $('#email').hide(300);
		$('.back_to_login').hide();
		$('#login-submit').show();
		$('input[type="text"]').each(function() { 
        	var $this = $(this); 
			$this.attr("placeholder", "Username")
        });
        $('input[type="password"]').each(function() { 
        	var $this = $(this); 
			$this.attr("placeholder", "Password")
/*
	$('#user_login').attr( 'placeholder', 'Username' );
	$('#user_pass').attr( 'placeholder', 'Password' );
*/
        });
	 });
	   
});
