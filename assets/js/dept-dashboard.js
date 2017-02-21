$(document).ready(function(){

	var base_url = "http://localhost/bposys/";
	var info_active = false;
	var success_active = false;
	var warning_active = false;
	// if($('#notif-count').val() != "-")
	var interval = window.setInterval(notif_check, 3000);
	

	if($('#notif-count').val() > 0)
	{
		info_active = true;
		if($('#notif-count').val() > 1)
		{
			var message = "You have <strong id='incoming-notif'>"+ $('#notif-count').val() + "</strong> new incoming applications";
		}
		else
		{
			var message = "You have <strong id='incoming-notif'>"+ $('#notif-count').val() + "</strong> new incoming application";
		}
		notify(message, "information");
	}

	if($('#new-count').val() > 0)
	{
		warning_active = true;
		if($('#new-count').val() > 1)
		{
			var message = "You have <strong id='new-notif'>"+ $('#new-count').val() + "</strong> new applications";
		}
		else
		{
			var message = "You have <strong id='new-notif'>"+ $('#new-count').val() + "</strong> new application";
		}
		notify(message, "warning");
	}

	if($('#completed-count').val() > 0)
	{
		success_active = true;
		if($('#completed-count').val() > 1)
		{
			var message = "<strong id='completed-notif'>"+$('#completed-count').val() + "</strong> new complete applications";
		}
		else
		{
			var message = "<strong id='completed-notif'>"+$('#completed-count').val() + "</strong> new complete application";
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
					var message = 'You have <strong id="incoming-notif">'+data.notifications+'</strong> new incoming application';
					$('#notif-count').val(data.notifications);
					// $('.badge-issued').html();
					if(!info_active)
					{
						notify(message,"information");
						info_active = true;
					}
					else
						$('#incoming-notif').html(data.notifications);
				}
				if(data.complete > 0 && data.complete != $('#completed-count').val())
				{
					var message = '<strong id="completed-notif">'+data.complete+'</strong> new completed application';
					$('#completed-count').val(data.complete);
					// $('.badge-issued').html();
					if(!success_active)
					{
						notify(message,"success");
						success_active = true;
					}
					else
						$('#completed-notif').html(data.complete);
				}
				if(data.new > 0 && data.new != $('#new-count').val())
				{
					var message = 'You have <strong id="new-notif">'+data.new+'</strong> new application';
					$('#new-count').val(data.new);
					// $('.badge-issued').html();
					if(!warning_active)
					{
						notify(message,"warning");
						warning_active = true;
					}
					else
						$('#new').html(data.new);
				}

				//update quick action badges
				$('.badge-incoming').html(data.incoming>0 ? data.incoming : "");
				$('.badge-process').html(data.process>0 ? data.process : "");
				$('.badge-completed').html(data.completed>0 ? data.completed : "");
				console.log(data);
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
		    //timeout: 30000,
		    theme: 'metroui',
		    template: '<div class="noty_message"><img src="http://localhost/bposys/assets/matrix/img/demo/envelope.png"/> <span class="noty_text" id="'+(type=='information' ? 'info_message' : 'success_message')+'"></span><div class="noty_close"></div></div>',
		    callback: {
		    	// onShow: function() {},
		    	// afterShow: function() {},
		    	// onClose: function() {},
		    	// afterClose: function() {},
		    	onCloseClick: function() {
		    		//ajax
		    		if(type == "information")
		    			var notifType = 'Incoming';
		    		else if(type == "success")
		    			var notifType = 'Completed';
		    		$.ajax({
		    			type:'POST',
		    			url:base_url+'dashboard/update_notif/'+notifType,
		    			success: function(data)
		    			{
		    				if(type == "success")
		    					window.location = base_url+"dashboard/completed_applications";
		    				else if(type == "information")
		    					window.location = base_url+"dashboard/incoming_applications";
		    				else if(type == "warning")
		    					window.location = base_url+"dashboard/on_process_applications";
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

	$('.paid-up-to').click(function(){
		$('#hidden-paid-up-to').val($(this).val());
		console.log($('#hidden-paid-up-to').val());
	});

	var requirements_count = $('.requirements-checkbox').length;
	console.log(requirements_count);
	var checked_count = 0;
	$('.requirements-checkbox').click(function(){
		if($(this).is(':checked'))
		{
			checked_count++;
		}
		else
		{
			checked_count--;
		}
		if(checked_count == requirements_count)
		{
			$('#approve-btn').prop('disabled', false);
		}
		else
		{
			$('#approve-btn').prop('disabled', true);
		}
	});

});//End of Jquery