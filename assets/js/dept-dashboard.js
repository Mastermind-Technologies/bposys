$(document).ready(function(){

	if($('#notif-count').val() > 0)
	{
		if($('#notif-count').val() > 1)
		{
			var message = "You have "+ $('#notif-count').val() + " new incoming applications";
		}
		else
		{
			var message = "You have "+ $('#notif-count').val() + " new incoming application";
		}
		notify(message);
	}

	window.setInterval(notif_check, 3000);

	function notif_check()
	{
		$.ajax({
			type:'POST',
			dataType:'JSON',
			url:'dashboard/check_notif',
			success:function(data){
				if(data > 0 && data != $('#notif-count').val())
				{
					var message = 'You have '+data+' new incoming application';
					$('#notif-count').val(data);
					notify(message);
				}
			}
		});
	}

	function notify(message)
	{
		var n = noty({
			layout: 'topRight',
			text: message,
			type: 'information',
			animation: {
		        open: 'animated bounceInRight', // jQuery animate function property object
		        close: 'animated bounceOutRight', // jQuery animate function property object
		        easing: 'swing', // easing
		        speed: 500 // opening & closing animation speed
		    },
		    timeout: false,
		    theme: 'relax',
		    template: '<div class="noty_message"><img src="http://localhost/bposys/assets/matrix/img/demo/envelope.png"/> <span class="noty_text"></span><div class="noty_close"></div></div>',
		    callback: {
		    	// onShow: function() {},
		    	// afterShow: function() {},
		    	// onClose: function() {},
		    	// afterClose: function() {},
		    	onCloseClick: function() {
		    		//ajax
		    		$.ajax({
		    			type:'POST',
		    			url:'dashboard/update_notif',
		    			success: function(data)
		    			{
		    				window.location = "dashboard/incoming_applications";
		    			}
		    		});
		    	},
		    },
		});
	}


});//End of Jquery