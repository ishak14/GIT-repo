$(document).ready(function(){
// 	Change placeholders for username and password boxes
	$('#live_lecture').attr( 'placeholder', 'Live lecture' );
	$('#select_course').attr( 'placeholder', 'Select course' );

// 	Add class of login button
	var d = document.getElementById("wp-submit");
	d.className += "form-control btn btn-login custom btn-margin";
	});