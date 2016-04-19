$(document).ready(function(){
// 	Change placeholders for username and password boxes
	$('#user_login').attr( 'placeholder', 'Username' );
	$('#user_pass').attr( 'placeholder', 'Password' );

// 	Add class of login button
	var d = document.getElementById("wp-submit");
	d.className += "form-control btn btn-login custom btn-margin";
	});
	
// 
