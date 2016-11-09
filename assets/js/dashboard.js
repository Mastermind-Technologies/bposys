$(document).ready(function()
{
  var base_url = 'http://localhost/bposys/';

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
      url:base_url + 'dashboard/edit_info',
      success: function(o) {
        $('#content-container').html(o);
      }
    });
  });

});
