<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?php echo base_url(); ?>dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> 
      <?php if ($application->get_status() == "For validation..."): ?>
        <a href="<?php echo base_url(); ?>dashboard/incoming_applications">Incoming Applications</a> 
      <?php elseif ($application->get_status() == "For applicant visit"): ?>
        <a href="<?php echo base_url(); ?>dashboard/pending_applications">Pending Applications</a> 
      <?php elseif ($application->get_status() == "On process"): ?>
        <a href="<?php echo base_url(); ?>dashboard/on_process_applications">On Process Applications</a> 
      <?php endif ?>
      
      <a href="#" class="current">View</a>
    </div>
    <!--End-breadcrumbs-->
  </div>

<!--   <pre>
    <?php print_r($application); ?>
  </pre> -->

  <div class="container-fluid">
<!--     <div class="row">
    <div class="col-sm-12">
            <h4>Business Name</h4>
      <h1><?= $application->get_businessName() ?></h1>
      <hr>
    </div> -->
  </div>
  <div class="widget-box">
    <div class="widget-title">
      <h5>BPLO Form</h5>
    </div>
    <div class="widget-content">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td>
              <label for="date_of_application">Date of Application</label>
              <h5><?=$application->get_applicationDate() ?></h5>
            </td>
            <td>
              <label for="dti_registration_number">DTI/SEC/CDA Registration No.</label>
              <h5><?= $application->get_DTISECCDARegNum() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="reference_no">Reference No.</label>
              <h5><?= $this->encryption->decrypt(str_replace(['-','_','='], ['/','+','='],  $application->get_referenceNum())) ?></h5>
            </td>
            <td>
              <label for="dti_date_of_registration">DTI/SEC/CDA Date of Registration</label>
              <h5><?= $application->get_DTISECCDADate() ?></h5>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="type_of_organization">Type of Organization</label>
              <h5><?= $application->get_organizationType() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="ctc_no">CTC No.</label>
              <h5><?= $application->get_CTCNum() ?></h5>
            </td>
            <td>
              <label for="tin">TIN</label>
              <h5><?= $application->get_TIN() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="is_enjoying_tax_incentives">Tax incentive from any Government Entity?</label>
              <h5><?= $application->get_entityName()=="NA" ? "No" : "Yes" ?></h5>
            </td>
            <td>
              <label for="specified_entity">Specified Entity:</label>
              <h5><?= $application->get_entityName() ?></h5>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="name_of_tax_payer">Name of Tax Payer</label>
              <h5><?= $application->get_LastName().", ".$application->get_FirstName()." (".$application->get_MiddleName().")" ?></h5>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="business_name">Business Name</label>
              <h5><?= $application->get_businessName() ?></h5>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="trade_name_franchise">Trade Name/ Franchise</label>
              <h5><?= $application->get_tradeName() ?></h5>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="name_of_president_or_treasurer">Name of President/ Treasurer of Corporation</label>
              <h5><?= $application->get_presidentTreasurerName() ?></h5>
            </td>
          </tr>
          <tr>
            <td style="text-align:center">
              <h4 style="font-weight: bolder">Business Address</h4>
            </td>
            <td style="text-align:center">
              <h4 style="font-weight: bolder">Owner's Address Address</h4>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_house_no">House No. / Bldg. No.</label>
              <h5><?= $application->get_houseBldgNum() ?></h5>
            </td>
            <td>
              <label for="owners_address_house_no">House No. / Bldg. No.</label>
              <h5><?= $application->get_houseBldgNum() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_building_name">Building Name</label>
              <h5><?= $application->get_bldgName() ?></h5>
            </td>
            <td>
              <label for="owners_address_building_name">Building Name</label>
              <h5><?= $application->get_OwnerbldgName() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_unit_no">Unit No.</label>
              <h5><?= $application->get_unitNum() ?></h5>
            </td>
            <td>
              <label for="owners_address_unit_no">Unit No.</label>
              <h5><?= $application->get_OwnerunitNum() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_street">Street</label>
              <h5><?= $application->get_street() ?></h5>
            </td>
            <td>
              <label for="owners_address_street">Street</label>
              <h5><?= $application->get_Ownerstreet() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_brgy">Barangay</label>
              <h5><?= $application->get_barangay() ?></h5>
            </td>
            <td>
              <label for="owners_address_brgy">Barangay</label>
              <h5><?= $application->get_Ownerbarangay() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_subdivision">Subdivision</label>
              <h5><?= $application->get_Subdivision() ?></h5>
            </td>
            <td>
              <label for="owners_address_subdivision">Subdivision</label>
              <h5><?= $application->get_Ownersubdivision() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_city_municipality">City/ Municipality</label>
              <h5><?= $application->get_cityMunicipality() ?></h5>
            </td>
            <td>
              <label for="owners_address_city_municipality">City/ Municipality</label>
              <h5><?= $application->get_OwnercityMunicipality() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_province">Province</label>
              <h5><?= $application->get_province() ?></h5>
            </td>
            <td>
              <label for="owners_address_city_province">Province</label>
              <h5><?= $application->get_Ownerprovince() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_tel_no">Tel No.</label>
              <h5><?= $application->get_telNum() ?></h5>
            </td>
            <td>
              <label for="owners_address_tel_no">Tel No.</label>
              <h5><?= $application->get_OwnertelNum() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_email_address">Email Address</label>
              <h5><?= $application->get_email() ?></h5>
            </td>
            <td>
              <label for="owners_address_email_address">Email Address</label>
              <h5><?= $application->get_OwnerEmail() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_property_index_no">Property Index Number (PIN)</label>
              <h5><?= $application->get_PIN() ?></h5>
            </td>
            <td>
              <label for="owners_address_business_area">Business Area (in sq. m.)</label>
              <h5><?= $application->get_businessArea() ?></h5>
            </td>
          </tr>
          <tr>
            <td>
              <label for="business_address_no_of_employees_in_establishment">Total No. of Employees in Establishment</label>
              <h5><?= $application->get_MaleEmployees() + $application->get_FemaleEmployees() + $application->get_PWDEmployees() ?></h5>
            </td>
            <td>
              <label for="owners_address_no_of_employees_residing_in_lgu">No. of Employees Residing in LGU</label>
              <h5><?= $application->get_LGUEmployees() ?></h5>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="lessors_name">Lessor's Name</label>
              <h5><?= isset($application->lessors) ? 
                $application->get_lessors()->lastName.", ".
                $application->get_lessors()->firstName." (".
                $application->get_lessors()->middleName.")" : "NA" ?></h5>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <label for="lessors_address">Lessor's Address</label>
                <h5><?= isset($application->lessors) ? 
                  $application->get_lessors()->address.", "
                  .$application->get_lessors()->subdivision.", "
                  .$application->get_lessors()->barangay.", "
                  .$application->get_lessors()->cityMunicipality.", "
                  .$application->get_lessors()->province : "NA" ?></h5>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="lessor_monthly_rental">Monthly Rental</label>
                  <h5><?= isset($application->lessors) ? $application->get_lessors()->monthlyRental : "NA" ?></h5>
                </td>
                <td>
                  <label for="lessor_tel_cel_no">Tel No./ Cel.No.</label>
                  <h5><?= isset($application->lessors) ? $application->get_lessors()->telNum : "NA" ?></h5>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="lessor_email_address">Email Address</label>
                  <h5><?= isset($application->lessors) ? $application->get_lessors()->email : "NA" ?></h5>
                </td>
                <td>
                  <label for="lessor_in_case_of_emergency">In case of emergency (Contact Person | Tel No./Cel No. | Email)</label>
                  <h5><?= 
                    $application->get_emergencyContactPerson()." | ".
                    $application->get_emergencyTelNum()." | ".
                    $application->get_emergencyEmail() ?></h5>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td colspan="5" style="text-align:center">
                    <h4 class=text-center>Business Activities</h4>
                  </td>
                </tr>
                <tr>
                  <!-- <th rowspan="2" style="width: 15%">
                    <label for="business_activity_code">Code</label>
                  </th> -->
                  <th rowspan="2" style="width: 30%">
                    <label for="business_activity_line_of_business">Line of Business</label>
                  </th>
                  <!-- <th rowspan="2" style="width: 10%">
                    <label for="business_activity_no_of_units">No. of Units</label>
                  </t -->h>
                  <th rowspan="2" style="width: 20%">
                    <label for="business_activity_capitalization">Capitalization</label>
                  </th>
                  <th colspan="2" style="width: 25%">
                    <label for="business_activity_gross_sales_receipt">Gross Sales/ Receipts</label>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($application->get_businessActivities() as $activity): ?>
                  <tr>
                    <!-- <td><?= $activity->code ?></td> -->
                    <td><?= $activity->lineOfBusiness ?></td>
                    <!-- <td><?= $activity->numOfUnits ?></td> -->
                    <td><?= $activity->capitalization ?></td>
                    <td><?= "???" ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
            <?php if ($application->get_status() == "Completed" || $application->get_status() == "Active" || $application->get_status() == "On process"): ?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td colspan="3">
                      <h4 class='text-center'>Verification of Documents</h4>
                    </td>
                  </tr>
                  <tr>
                    <th>Description</th>
                    <th>Office/Agency</th>
                    <th>Date Issued</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Barangay Clearance</td>
                    <td>Barangay</td>
                    <td><?= date('F j, o',strtotime($application->get_BrgyClearanceDateIssued())) ?></td>
                  </tr>
                  <tr>
                    <td>Zoning Clearance</td>
                    <td>City Planning and Development Office</td>
                    <td><?= isset($zoning[0]->createdAt) ? date('F j, o',strtotime($zoning[0]->createdAt)) : '' ?></td>
                  </tr>
                  <tr>
                    <td>Sanitary Permit / Health Clearance</td>
                    <td>City Health Office</td>
                    <td><?= isset($sanitary[0]->createdAt) ? date('F j, o',strtotime($sanitary[0]->createdAt)) : '' ?></td>
                  </tr>
                  <tr>
                    <td>City Environmental Certificate</td>
                    <td>City Environment and Natural Resources Office</td>
                    <td><?= isset($cenro[0]->createdAt) ? date('F j, o',strtotime($cenro[0]->createdAt)) : '' ?></td>
                  </tr>
                  <tr>
                    <td>Engineering Clearance</td>
                    <td>Office of the Building Official</td>
                    <td><?= isset($engineering[0]->createdAt) ? date('F j, o',strtotime($engineering[0]->createdAt)) : '' ?></td>
                  </tr>
                  <tr>
                    <td>Valid Fire Safety Inspection Certificate</td>
                    <td>Bureau of Fire Protection</td>
                    <td><?= isset($bfp[0]->createdAt) ? date('F j, o',strtotime($bfp[0]->createdAt)) : '' ?></td>
                  </tr>
                </tbody>
              </table>
            <?php endif ?>
          </div>
        </div>
        <div class="row text-center">
          <?php if ($application->get_status() == "For validation..."): ?>
            <a href="<?php echo base_url(); ?>dashboard/validate_application/<?= $application->get_referenceNum() ?>" class="btn btn-success">Validate</a>
            <a href="#" class="btn btn-danger btn-lg">Reject</a>
          <?php elseif ($application->get_status() == "For applicant visit"): ?>
            <a href="<?php echo base_url(); ?>dashboard/approve_application/<?= $application->get_referenceNum() ?>" class="btn btn-success">Approve</a>
            <!-- <a href="#" class="btn btn-warning btn-lg">Edit information</a> -->
          <?php elseif ($application->get_status() == "On Process"): ?>
            <!-- none -->
          <?php elseif ($application->get_status() == "Completed"): ?>
            <a href="<?php echo base_url(); ?>dashboard/issue_permit/<?= $application->get_referenceNum() ?>" class="btn btn-success btn-large">Issue Business Permit</a>
            <?php elseif ($application->get_status() == "Active"): ?>
            <a href="#" class="btn btn-info btn-large">Print Business Permit</a>
          <?php endif ?>
        </div>
        <!-- End Container Fluid -->
      </div>


    </div>
