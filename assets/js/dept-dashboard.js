$(document).ready(function(){

	$('#btn-test-noty').click(function(){
		var n = noty({
			layout: 'topRight',
			text: ' You have 1 new message!',
			type: 'information',
			animation: {
		        open: 'animated bounceInRight', // jQuery animate function property object
		        close: 'animated bounceOutRight', // jQuery animate function property object
		        easing: 'swing', // easing
		        speed: 500 // opening & closing animation speed
		    },
		    timeout: false,
		    theme: 'relax',
		    template: '<div class="noty_message"><img src="http://localhost/bposys/assets/matrix/img/demo/envelope.png"/><span class="noty_text"></span><div class="noty_close"></div></div>',
		});
	});

});//End of Jquery