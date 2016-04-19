$(document).ready(function(){
	$('.menu-items').hide();
	$menu = false;
	});
	
$(document).ready(function(){
	$('.menu-menu').click(function(){
		if ($menu){
		$menu = false;
		$('.menu-items').hide(300);		

		}
		else {
		$menu = true;
		$('.menu-items').show(300);
		}
		});
	});	
	
	