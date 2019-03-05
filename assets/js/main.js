$(document).ready(function(){

	$('.headsection').on('click',function(){
		$('.headsection').css('color','#fff');
		$('.headsection').css('background','red');
		$('.headsection').slideUp(1000, function(){
			alert(vars);
		});
	});

	$('.main-content').on('click',function(){
		$('.headsection').css('color','#000');
		$('.headsection').css('background','#eefb28');
		$('.headsection').slideDown(1000);
	});



});