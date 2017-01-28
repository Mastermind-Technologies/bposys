<body class="content-container">
	<!-- Page Content -->
	<div style="padding-top:45px;" id="page-wrapper">
		<div class="container-fluid">

			<?php if($this->session->flashdata('error')): ?>
				<div class="alert alert-danger"> <!--bootstrap error div-->
					<?=$this->session->flashdata('error')?>
				</div>
			<?php endif; ?>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>Application Details</h3>
				</div>
				<div class="panel-body">

					<h2>Reference Number: <strong class="text-danger"><?= $this->encryption->decrypt($application->get_referenceNum()) ?></strong></h2>
					<h3>Status: <?php $status = $application->get_status();
						if($status == "Expired")
						{
							echo "<strong style='color:red'>".$status."</strong>";
						}
						else
						{
							echo "<strong>".$status."</strong>";
						} ?></h3>
						<div class="row">
							<?php if ($application->get_status() == "Expired"): ?>
								<div class="col-sm-3">
									<a type="button" class="btn btn-danger btn-block" href="<?php echo base_url('form/renew/'.bin2hex($this->encryption->encrypt($this->encryption->decrypt($application->get_applicationId()).'|'.$this->encryption->decrypt($application->get_referenceNum()), $custom_crypto))); ?>">Renew</a>
								</div>
								<div class="col-sm-3">
									<input type="button" class="btn btn-warning btn-block" value="Edit Application">
								</div>
							<?php else: ?>
								<div class="col-sm-3">
									<input type="button" class="btn btn-warning btn-block" value="Edit Application">
								</div>
							<?php endif ?>
						</div>
						<br>
				</div>
				<!-- /.panel-body -->
			</div>


				<!-- <div class="boxes">
				  <input type="checkbox" id="box-1">
				  <label for="box-1">Billy Pogi</label>

				  <input type="checkbox" id="box-2" checked>
				  <label for="box-2">Billy mas pogi </label>

				  <input type="checkbox" id="box-3">
				  <label for="box-3">Billy super pogi</label>
				</div> -->

				<h4>Select form to view:</h4>
				<div class="row" style="margin:0">
					<ul  class="nav nav-tabs">
						<li class="active">
							<a  href="#bploform" class="testing" data-toggle="tab">BPLO</a>
						</li>
						<li><a href="#zoningform" data-toggle="tab">Zoning</a>
						</li>
						<li><a href="#engineeringform" data-toggle="tab">Engineering</a>
						</li>
						<li><a href="#healthdeptform" data-toggle="tab">Health Dept.</a>
						</li>
						<li><a href="#firedeptform" data-toggle="tab">Fire Dept.</a>
						</li>
						<li><a href="#cenroform" data-toggle="tab">CENRO</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="tab-content clearfix">
						<div class="tab-pane active" id="bploform">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>BPLO Application Form</h3>
								</div>
								<div class="panel-body">

									<div class="mdl-card mdl-shadow--2dp">

										<div class="mdl-card__supporting-text">

											<div class="mdl-stepper-horizontal-alternative">
												<div class="mdl-stepper-step active-step step-done">
													<div class="mdl-stepper-circle"><span>1</span></div>
													<div class="mdl-stepper-title">Setup an appointment with BPLO</div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step active-step">
													<div class="mdl-stepper-circle"><span>2</span></div>
													<div class="mdl-stepper-title">Visit BPLO for assessment and interview</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step"> <!-- <div class="mdl-stepper-step active-step"> -->
													<div class="mdl-stepper-circle"><span>3</span></div>
													<div class="mdl-stepper-title">Complete requirements</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step">
													<div class="mdl-stepper-circle"><span>4</span></div>
													<div class="mdl-stepper-title">Claim Business Permit</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
											</div>

										</div>

									</div>

									<div class="application-form">
										<table class="application-form-table">
											<tr class="application-form-table-row">
												<td>
													<label for="date_of_application">Date of Application</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="dti_registration_number">DTI/SEC/CDA Registration No.</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="reference_no">Reference No.</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="dti_date_of_registration">DTI/SEC/CDA Date of Registration</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td colspan="2">
													<label for="type_of_organization">Type of Organization</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="ctc_no">CTC No.</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="tin">TIN</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="is_enjoying_tax_incentives">Tax incentive from any Government Entity?</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="specified_entity">Specified Entity:</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td colspan="2">
													<label for="name_of_tax_payer">Name of Tax Payer</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td colspan="2">
													<label for="business_name">Business Name</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td colspan="2">
													<label for="trade_name_franchise">Trade Name/ Franchise</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td colspan="2">
													<label for="name_of_president_or_treasurer">Name of President/ Treasurer of Corporation</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td style="text-align:center">
													<h4 style="font-weight: bolder">Business Address</h4>
												</td>
												<td style="text-align:center">
													<h4 style="font-weight: bolder">Owner's Address Address</h4>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_house_no">House No. / Bldg. No.</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_house_no">House No. / Bldg. No.</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_building_name">Building Name</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_building_name">Building Name</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_unit_no">Unit No.</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_unit_no">Unit No.</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_street">Street</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_street">Street</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_brgy">Barangay</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_brgy">Barangay</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_subdivision">Subdivision</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_subdivision">Subdivision</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_city_municipality">City/ Municipality</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_city_municipality">City/ Municipality</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_province">Province</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_city_province">Province</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_tel_no">Tel No.</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_tel_no">Tel No.</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_email_address">Email Address</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_email_address">Email Address</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_property_index_no">Property Index Number (PIN)</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_business_area">Business Area (in sq. m.)</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="business_address_no_of_employees_in_establishment">Property Index Number (PIN)</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="owners_address_no_of_employees_residing_in_lgu">Business Area (in sq. m.)</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td colspan="2">
													<label for="lessors_name">Lessor's Name</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td colspan="2">
													<label for="lessors_address">Lessor's Address</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="lessor_monthly_rental">Monthly Rental</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="lessor_tel_cel_no">Tel No./ Cel.No.</label>
													<h5>???</h5>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td>
													<label for="lessor_email_address">Email Address</label>
													<h5>???</h5>
												</td>
												<td>
													<label for="lessor_in_case_of_emergency">In case of emergency</label>
													<h5>???</h5>
												</td>
											</tr>


										</table>
										<table class="application-form-table" style="text-align:center">
											<tr class="application-form-table-row">
												<td colspan="6" style="text-align:center">
													<label for="business_activities">BUSINESS ACTIVITY</label>
												</td>
											</tr>
											<tr class="application-form-table-row">
												<td rowspan="2" style="width: 15%">
													<label for="business_activity_code">Code</label>
												</td>
												<td rowspan="2" style="width: 30%">
													<label for="business_activity_line_of_business">Line of Business</label>
												</td>
												<td rowspan="2" style="width: 10%">
													<label for="business_activity_no_of_units">No. of Units</label>
												</td>
												<td rowspan="2" style="width: 20%">
													<label for="business_activity_capitalization">Capitalization</label>
												</td>
												<td colspan="2" style="width: 25%">
													<label for="business_activity_gross_sales_receipt">Gross Sales/ Receipts</label>
												</td>
											</tr>
											<tr>
												<td style="width: 10%">
													<label for="business_activity_essential">Essential</label>
												</td>
												<td style="width: 10%">
													<label for="business_non_essential">Non-essential</label>
												</td>
											</tr>
											<!-- BUSINESS ACTIVITIES (MAKE DYNAMIC) -->
											<tr>
												<td style="width: 15%">
													<h5>???</h5>
												</td>
												<td style="width: 30%">
													<h5>???</h5>
												</td>
												<td style="width: 10%">
													<h5>???</h5>
												</td>
												<td style="width: 20%">
													<h5>???</h5>
												</td>
												<td style="width: 10%">
													<h5>???</h5>
												</td>
												<td style="width: 10%">
													<h5>???</h5>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>





						</div>
						<div class="tab-pane" id="zoningform">
							<h3>Zoning Office Application Form</h3>
						</div>
						<div class="tab-pane" id="engineeringform">
							<h3>Engineering Office Application Form</h3>
						</div>
						<div class="tab-pane" id="healthdeptform">
							<h3>Health Department Application Form</h3>
						</div>
						<div class="tab-pane" id="firedeptform">
							<h3>Fire Department Application Form</h3>
						</div>
						<div class="tab-pane" id="cenroform">
							<h3>CENRO Application Form</h3>
						</div>
					</div>
				</div>


        <!-- <div class="row">
          <div class="col-lg-6 view-application-thumbnail">

          </div>
          <div class="col-lg-6 view-application-thumbnail">

          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 view-application-thumbnail">

          </div>
          <div class="col-lg-6 view-application-thumbnail">

          </div>
      </div> -->


  </div>
  <!-- /.container-fluid -->
</div>
<!-- </body>
