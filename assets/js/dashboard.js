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

  var rowCount = 1;
  $('#btn-add-bus-activity').click(function(){
      // $("#bus-activity tbody.table-body tr:first").clone(true).find("input").each(function() {
      //   $(this).val('').attr({
      //     'id': function(_, id) {return id + rowCount },
      //     'name': function(_, name) { return name + rowCount },
      //     'value': ''               
      //   });
      // }).end().appendTo("table");
      // rowCount++;
    $('#bus-activity > tbody:last-child').append("<tr class='data'><td><input type='text' required class=form-control></td><td><input type='text' required class=form-control></td><td><input type='text' required class=form-control></td><td><input type='text' required class=form-control></td></tr>");
    rowCount++;
    //removed:
    //<td>"+rowCount+"</td>
    //<td><button type='button' id='btn-delete' class='btn btn-danger btn-block'>Delete</button></td>
  });

 //  $('#btn-delete').click(function(){
 //    var count = $('#bus-activity tr').length;
 //    console.log(count);
 //    if(count == 2)
 //    {
 //      //do nothing
 //    }
 //    else
 //    {
 //     $(this).closest('tr.data').remove();
 //     return false;
 //    }
 // });

  $('#btn-table-test').click(function(){
    var count = 1;
    $("#bus-activity tbody .data").each(function() {

      console.log('row:' + count);
      count++;
      console.log($(this).find("td:nth-child(1) input").val());
      console.log($(this).find("td:nth-child(2) input").val());
      console.log($(this).find("td:nth-child(3) input").val());
      console.log($(this).find("td:nth-child(4) input").val());
    });
  });


});
