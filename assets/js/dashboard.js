$(document).ready(function()
{
  var base_url = 'http://localhost/bposys/';

  $('[data-toggle="tooltip"]').tooltip();

  $('#btn-male').click(function(event)
  {
    $('#btn-male').addClass('active');
    $('#btn-female').removeClass('active');
    $("#hidden-gender").val("Male");
  });

  $('#btn-female').click(function(event)
  {
    $('#btn-female').addClass('active');
    $("#btn-male").removeClass('active');
    $("#hidden-gender").val("Female");
  });

  $('#btn-edit-info').click(function(event)
  {
    jQuery.ajax({
      type: 'get',
      url:base_url + 'dashboard/new_application',
      success: function(o) {
        $('#content-container').html(o);
      }
    });
  });

  $('#tax-incentive').click(function() {
    if($('#tax-incentive').is(':checked'))
    {
      $("#entity").prop('disabled', false);
      $("#entity").prop('required', true);
    }
    else
    {
      $("#entity").prop('disabled', true);
      $("#entity").prop('required', false);
    }    
  });

  $('#rented').click(function() {
    if($('#rented').is(':checked'))
    {
      $('.lessor-controls input[type=text], textarea, input[type=email]').each(function() {
        $(this).prop('disabled', false);
        $(this).prop('required', true);
      });
    }
    else
    {
      $('.lessor-controls input[type=text], textarea, input[type=email]').each(function() {
        $(this).prop('disabled', true);
        $(this).prop('required', false);
      });
    }    
  });

  var rowCount = 1;
  $('#btn-add-bus-activity').click(function(){
    rowCount++;
    console.log(rowCount);
    $('#bus-activity > tbody:last-child').append("<tr class='data'><td><input type='text' required class=form-control></td><td><input type='text' required class=form-control></td><td><input type='text' required class=form-control></td><td><input type='text' required class=form-control></td></tr>");

  });

  $('#new_application_form').submit(function(e){
    $("#btn-submit").prop('disabled', true);
    $("#btn-add-bus-activity").prop('disabled', true);
    $("#fa-submit").removeClass('fa-check');
    $("#fa-submit").addClass('fa-circle-o-notch fa-spin');
    e.preventDefault();
    jQuery.ajax({
      type:"POST",
      dataType:'json',
      url:base_url+"dashboard/submit_application",
      data:$('form#new_application_form').serialize(),
      success: function(data) {
        if(data.error)
        {
          console.log(data.error);
          $("#btn-submit").prop('disabled', false);
          $("#btn-add-bus-activity").prop('disabled', false);
          $("#fa-submit").removeClass('fa-circle-o-notch fa-spin');
          $("#fa-submit").addClass('fa-check');
        }
        else
        {
          process_business_activity(data.referenceNum);
        }
        
      }
    });
    return false;
  });

  function process_business_activity(reference_number)
  {
    var ctr = 0;
    var total_rows = count_business_activities();
    $("#bus-activity tbody .data").each(function() {
      ctr++;
      var code = $(this).find("td:nth-child(1) input").val();
      var lineOfBusiness = $(this).find("td:nth-child(2) input").val();
      var numOfUnits = $(this).find("td:nth-child(3) input").val();
      var capitalization = $(this).find("td:nth-child(4) input").val();

      if(code == '' || lineOfBusiness == '' || numOfUnits == '' || capitalization == '')
      {
        //do nothing
      }
      else
      {
        $.ajax({
          type:"POST",
          url:base_url+"dashboard/store_business_activity",
          dataType:'json',
          data:{ctr:ctr, total_rows:total_rows, code:code, lineOfBusiness:lineOfBusiness, numOfUnits:numOfUnits, capitalization:capitalization, referenceNum:reference_number},
          success: function(o){
            if(o == "success")
            {
              console.log("Success!");
              console.log("Redirecting...");
              window.setTimeout(function() { 
                window.location = base_url+"dashboard"; 
              },2000);
            }
            else
            {
              console.log(o);
            }
          }
        });
      }
      // console.log(ctr);
      // if(ctr == rowCount)
      // {

      // }
    });
  }

  function count_business_activities()
  {
    var total_rows = 0;
    $("#bus-activity tbody .data").each(function() {
      total_rows++;
    });
    return total_rows;
  }


}); //End of Jquery
