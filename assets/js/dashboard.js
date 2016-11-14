$(document).ready(function()
{
  var base_url = 'http://localhost/bposys/';


  $('[data-toggle="tooltip"]').tooltip();


  $('#btn-male').click(function(event)
  {
    jQuery.ajax({
      success: function(o) {
        $('#btn-male').addClass('active');
        $('#btn-female').removeClass('active');
        $("#hidden-gender").val("Male");
      }
    });
  });

  $('#btn-female').click(function(event)
  {
    jQuery.ajax({
      success: function(o) {
        $('#btn-female').addClass('active');
        $("#btn-male").removeClass('active');
        $("#hidden-gender").val("Female");
      }
    });
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
      $('.lessor-controls input[type=text], textarea').each(function() {
        $(this).prop('disabled', false);
        $(this).prop('required', true);
      });
    }
    else
    {
      $('.lessor-controls input[type=text], textarea').each(function() {
        $(this).prop('disabled', true);
        $(this).prop('required', false);
      });
    }    
  });

  var rowCount = 3;

  $('#btn-add-bus-activity').click(function(){
    rowCount++;
    $('#bus-activity > tbody:last-child').append("<tr class='data'><td>"+rowCount+"</td><td><input type='text' class=form-control></td><td><input type='text' class=form-control></td><td><input type='text' class=form-control></td><td><input type='text' class=form-control></td></tr>");
  });

  $('#btn-table-test').click(function(){
    var count = 1;
    $("#bus-activity tbody .data").each(function() {

      console.log('row:' + count);
      count++;
      console.log($(this).find("td:nth-child(2) input").val());
      console.log($(this).find("td:nth-child(3) input").val());
      console.log($(this).find("td:nth-child(4) input").val());
      console.log($(this).find("td:nth-child(5) input").val());
    });
  });


});
