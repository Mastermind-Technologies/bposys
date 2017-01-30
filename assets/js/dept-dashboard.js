$(document).ready(function(){

	var base_url = "http://localhost/bposys/";
	var info_active = false;
	var success_active = false;
	if($('#notif-count').val() != "-")
		var interval = window.setInterval(notif_check, 3000);
	

	if($('#notif-count').val() > 0)
	{
		if($('#notif-count').val() > 1)
		{
			var message = "You have <strong>"+ $('#notif-count').val() + "</strong> new incoming applications";
		}
		else
		{
			var message = "You have <strong>"+ $('#notif-count').val() + "</strong> new incoming application";
		}
		notify(message, "information");
	}

	if($('#completed-count').val() > 0)
	{
		if($('#completed-count').val() > 1)
		{
			var message = "<strong>"+$('#completed-count').val() + "</strong> new complete applications";
		}
		else
		{
			var message = "<strong>"+$('#completed-count').val() + "</strong> new complete application";
		}
		notify(message, "success");
	}

	function notif_check()
	{
		$.ajax({
			type:'POST',
			dataType:'JSON',
			url:base_url+'dashboard/check_notif',
			success:function(data){
				// console.log(data.notifications);
				if(data.notifications > 0 && data.notifications != $('#notif-count').val())
				{
					var message = 'You have <strong>'+data.notifications+'</strong> new incoming application';
					$('#notif-count').val(data.notifications);
					// $('.badge-issued').html();
					if(!info_active)
					{
						notify(message,"information");
						info_active = true;
					}
					else
						$('#info_message').html('You have <strong>'+data.notifications+'</strong> new incoming application');
				}
				if(data.complete > 0 && data.complete != $('#completed-count').val())
				{
					var message = '<strong>'+data.complete+'</strong> new completed application';
					$('#completed-count').val(data.complete);
					// $('.badge-issued').html();
					if(!success_active)
					{
						notify(message,"success");
						success_active = true;
					}
					else
						$('#success_message').html('<strong>'+data.complete+'</strong> new incoming application');
				}
				$('.badge-incoming').html(data.incoming>0 ? data.incoming : "");
				$('.badge-pending').html(data.pending>0 ? data.pending : "");
				$('.badge-process').html(data.process>0 ? data.process : "");
			}
		});
	}

	function notify(message,type)
	{
		var n = noty({
			layout: 'topRight',
			text: message,
			type: type,
			animation: {
		        open: 'animated bounceInRight', // jQuery animate function property object
		        close: 'animated bounceOutRight', // jQuery animate function property object
		        easing: 'swing', // easing
		        speed: 500 // opening & closing animation speed
		    },
		    timeout: 30000,
		    theme: 'metroui',
		    template: '<div class="noty_message"><img src="http://localhost/bposys/assets/matrix/img/demo/envelope.png"/> <span class="noty_text" id="'+(type=='information' ? 'info_message' : 'success_message')+'"></span><div class="noty_close"></div></div>',
		    callback: {
		    	// onShow: function() {},
		    	// afterShow: function() {},
		    	// onClose: function() {},
		    	// afterClose: function() {},
		    	onCloseClick: function() {
		    		//ajax
		    		$.ajax({
		    			type:'POST',
		    			url:base_url+'dashboard/update_notif',
		    			success: function(data)
		    			{
		    				if(info_active)
		    					info_active = false;
		    				if(success_active)
		    					success_active = false;
		    				window.location = base_url+"dashboard/incoming_applications";
		    			}
		    		});
		    	},
		    },
		});
	}

	$('#report-year').change(function(){
		$.ajax({
			type:'POST',
			url:base_url+'reports/report_year',
			data:{year:$('#report-year').val()},
			beforeSend: function() {
				$('#report-container').addClass('text-center');
				$('#report-container').html("<div style='height:400px;width:100%;'>"+
					"<i style='margin-top:150px' class='fa fa-circle-o-notch fa-spin fa-5x fa-fw text-center'></i>"+
					"<span class='sr-only text-center'>Loading...</span>"+
					"</div>");
			},
			success:function(data)
			{
				$('#report-container').removeClass('text-center');
				$('#report-container').html(data);
			}
		});
	});

	$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});


});//End of Jquery