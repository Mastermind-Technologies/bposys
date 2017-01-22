$(document).ready(function()
{
  var base_url = 'http://localhost/bposys/';
  var interval = window.setInterval(check_application_status, 3000);

  $('#btn-notif').click(function(){
    $('.fa-bell').html("");
    $.ajax({
      type:'POST',
      url:base_url+'dashboard/update_notif',
      success: function(data){
        $('#notif-section').html(data);
      }
    });
  });

  $('[data-toggle="tooltip"]').tooltip();

  $('#cnc').click(function(){
    if($('#cnc').is(':checked'))
    {
      $('#cnc-date-issued').prop('disabled',false);
      $('#cnc-date-issued').prop('required',true);
    }
    else
    {
      $('#cnc-date-issued').prop('disabled',true);
      $('#cnc-date-issued').prop('required',false);
      $('#cnc-date-issued').val("");
    }
  });

  $('#llda').click(function(){
    if($('#llda').is(':checked'))
    {
      $('#llda-date-issued').prop('disabled',false);
      $('#llda-date-issued').prop('required',true);
    }
    else
    {
      $('#llda-date-issued').prop('disabled',true);
      $('#llda-date-issued').prop('required',false);
      $('#llda-date-issued').val("");
    }
  });

  $('#discharge-permit').click(function(){
    if($('#discharge-permit').is(':checked'))
    {
      $('#discharge-permit-date-issued').prop('disabled',false);
      $('#discharge-permit-date-issued').prop('required',true);
    }
    else
    {
      $('#discharge-permit-date-issued').prop('disabled',true);
      $('#discharge-permit-date-issued').prop('required',false);
      $('#discharge-permit-date-issued').val("");
    }
  });

  $('#apsci').click(function(){
    if($('#apsci').is(':checked'))
    {
      $('#apsci-date-issued').prop('disabled',false);
      $('#apsci-date-issued').prop('required',true);
    }
    else
    {
      $('#apsci-date-issued').prop('disabled',true);
      $('#apsci-date-issued').prop('required',false);
      $('#apsci-date-issued').val("");
    }
  });

  $('#steam-generator-others').click(function(){
    if($('#steam-generator-others').is(':checked'))
    {
      $('#steam-generator-specify').prop('disabled',false);
      $('#steam-generator-specify').prop('required',true);
    }
    else
    {
      $('#steam-generator-specify').prop('disabled',true);
      $('#steam-generator-specify').prop('required',false);
      $('#steam-generator-specify').val("");
    }
  });

  $('#steam-generator-specify').change(function(){
    $('#steam-generator-others').val($('#steam-generator-specify').val());
  });

  $('#pending-llda-case').click(function(){
    if($('#pending-llda-case').is(':checked'))
    {
      $('#llda-case-no').prop('disabled',false);
      $('#llda-case-no').prop('required',true);
    }
    else
    {
      $('#llda-case-no').prop('disabled',true);
      $('#llda-case-no').prop('required',false);
      $('#llda-case-no').val("");
    }
  });

  $('#garbage-radio input').on('change',function(){
    // console.log($('input[name=garbage-collection-frequency]:checked').val());
    if($('#garbage-collection-others').is(':checked'))
    {
      $('#garbage-collection-specify').prop('disabled',false);
      $('#garbage-collection-specify').prop('required',true);
    }
    else
    {
      $('#garbage-collection-specify').prop('disabled',true);
      $('#garbage-collection-specify').prop('required',false);
      $('#garbage-collection-specify').val("");
    }
  });


  $('#garbage-collection-specify').change(function(){
    $('#garbage-collection-others').val($('#garbage-collection-specify').val());
    // console.log($('#garbage-collection-others').val());
  });

  $('#drainage-system').click(function(){
    if($('#drainage-system').is(':checked'))
    {
      $('#drainage-system-type1').prop('disabled',false);
      $('#drainage-system-type1').prop('checked',true);
      $('#drainage-system-type2').prop('disabled',false);

      $('#drainage-where-discharged1').prop('disabled',false);
      $('#drainage-where-discharged1').prop('checked',true);
      $('#drainage-where-discharged2').prop('disabled',false);
    }
    else
    {
      $('#drainage-system-type1').prop('disabled',true);
      $('#drainage-system-type1').prop('checked',false);
      $('#drainage-system-type2').prop('disabled',true);

      $('#drainage-where-discharged1').prop('disabled',true);
      $('#drainage-where-discharged1').prop('checked',false);
      $('#drainage-where-discharged2').prop('disabled',true);
    }
  });

  $('#septic-tank').click(function(){
    if($('#septic-tank').is(':checked'))
    {
      $('#sewerage-where-discharged1').prop('disabled',false);
      $('#sewerage-where-discharged1').prop('checked',true);
      $('#sewerage-where-discharged2').prop('disabled',false);
    }
    else
    {
      $('#sewerage-where-discharged1').prop('disabled',true);
      $('#sewerage-where-discharged1').prop('checked',false);
      $('#sewerage-where-discharged2').prop('disabled',true);
    }
  });

  $('#date-of-operation').datetimepicker({
    format: 'MM/DD/YYYY',
    viewMode: 'years'
  });

  $('#cnc-date-issued').datetimepicker({
    format: 'MM/DD/YYYY',
    viewMode: 'years'
  });

  $('#llda-date-issued').datetimepicker({
    format: 'MM/DD/YYYY',
    viewMode: 'years'
  });

  $('#discharge-permit-date-issued').datetimepicker({
    format: 'MM/DD/YYYY',
    viewMode: 'years'
  });

  $('#apsci-date-issued').datetimepicker({
    format: 'MM/DD/YYYY',
    viewMode: 'years'
  });

  $('#DTISECCDA_Date').datetimepicker({
    format: 'MM/DD/YYYY',
    viewMode: 'years'
  });

  $('#organization-type').change(function(event){
    if($('#organization-type').val() == 'Corporation')
    {
      $('#corporation-name').prop('disabled',false);
      $('#corporation-name').prop('required',true);
    }
    else
    {
      $('#corporation-name').prop('disabled',true);
      $('#corporation-name').prop('required',false);
    }
  });

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

  $('#business').change(function(event){
    $.ajax({
      type:"GET",
      dataType:"JSON",
      url:base_url+"dashboard/get_business_profile",
      data:{id:$('#business').val()},
      success:function(data){
        // console.log(data);
        $('#tax-payer-name').html(data.taxPayerName);
        $('#president-treasurer-name').html(data.presidentTreasurerName);
        $('#pollution-control-officer').html(data.pollutionControlOfficer);
        $('#male-employees').html(data.maleEmployees);
        $('#female-employees').html(data.femaleEmployees);
        $('#pwd-employees').html(data.PWDEmployees);
        $('#company-name').html(data.companyName);
        $('#business-name').html(data.businessName);
        $('#trade-name').html(data.tradeName);
        $('#signage-name').html(data.signageName);
        $('#nature-of-business').html(data.natureOfBusiness);
        $('#organization-type').html(data.organizationType);
        $('#corporation-name').html(data.corporationName);
        $('#pin').html(data.PIN);
        $('#date-of-operation-text').html(data.dateOfOperation);
        $('#business-desc').html(data.businessDesc);
        $('#house-bldg-no').html(data.houseBldgNum);
        $('#unit-no').html(data.unitNum);
        $('#subdivision').html(data.subdivision);
        $('#province').html(data.province);
        $('#street').html(data.street);
        $('#city-municipality').html(data.cityMunicipality);
        $('#barangay').html(data.barangay);
        $('#bldg-name').html(data.bldgName);
        $('#business-area').html(data.businessArea);
        $('#tel-num').html(data.telNum);
        $('#email').html(data.email);
      }
    });
  });

  function count_business_activities()
  {
    var total_rows = 0;
    $("#bus-activity tbody .data").each(function() {
      total_rows++;
    });
    return total_rows;
  }

  function check_application_status()
  {
    if($('#application-table').length != 0)
    {
      $.ajax({
        type:'POST',
        url:base_url+'dashboard/check_application_status',
        data:{user_id:$('#user-id').val()},
        success:function(data){
          $('#application-table-body').html(data);
        },
        error:function()
        {
          clearInterval(interval);
        }
      });
    }
    else
    {
      clearInterval(interval);
    }
  }

  $('.btn-cancel').click(function(){
    var r = confirm('Are you sure you want to cancel this application?');
    if(r==true)
      window.location = this.id;
    else
      return false;
  });

  function check_notifications()
  {
    //
  }

}); //End of Jquery
