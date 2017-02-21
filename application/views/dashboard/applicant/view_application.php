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

				<!-- class "colored-tooltip" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom" -->
				<div class="panel-body" style="background-color: #f9f9f9">

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

						<br>

						<div class="mdl-card mdl-shadow--2dp">
							<div class="mdl-card__supporting-text">
								<div class="mdl-stepper-horizontal-alternative">
									<div class="mdl-stepper-step active-step step-done">
										<div class="mdl-stepper-circle"><span>1</span></div>
										<div class="mdl-stepper-title">Submit an Online Application</div>
										<div class="mdl-stepper-bar-left"></div>
										<div class="mdl-stepper-bar-right"></div>
									</div>
									<div class="mdl-stepper-step active-step">
										<div class="mdl-stepper-circle"><span>2</span></div>
										<div class="mdl-stepper-title">Submit Requirements</div>
										<div class="mdl-stepper-optional"></div>
										<div class="mdl-stepper-bar-left"></div>
										<div class="mdl-stepper-bar-right"></div>
									</div>
									<div class="mdl-stepper-step"> <!-- <div class="mdl-stepper-step active-step"> -->
										<div class="mdl-stepper-circle"><span>3</span></div>
										<div class="mdl-stepper-title">Interview and Assessment</div>
										<div class="mdl-stepper-optional"></div>
										<div class="mdl-stepper-bar-left"></div>
										<div class="mdl-stepper-bar-right"></div>
									</div>
									<div class="mdl-stepper-step">
										<div class="mdl-stepper-circle"><span>4</span></div>
										<div class="mdl-stepper-title">Payment of Taxes</div>
										<div class="mdl-stepper-optional"></div>
										<div class="mdl-stepper-bar-left"></div>
										<div class="mdl-stepper-bar-right"></div>
									</div>
									<div class="mdl-stepper-step">
										<div class="mdl-stepper-circle"><span>5</span></div>
										<div class="mdl-stepper-title">Claim Business Permit</div>
										<div class="mdl-stepper-optional"></div>
										<div class="mdl-stepper-bar-left"></div>
										<div class="mdl-stepper-bar-right"></div>
									</div>
								</div>
							</div>
						</div>

				<div class="row" style="padding: 15px">
					<div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th style="text-align:center; background-color: #eeeeee">Requirement</th>
									<th style="text-align:center; background-color: #eeeeee">Office/Agency</th>
									<th style="text-align:center; background-color: #eeeeee">Status</th>
									<th style="text-align:center; background-color: #eeeeee">Action</th>
								</tr>
								<tr class="success">
									<td>DTI/SEC/CDA Registration</td>
									<td>DTI/SEC/CDA</td>
									<td style="text-align:center"><span style="text-align:center" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
									<td style="text-align:center"><button type="button" class="btn btn-primary">View Details</button></td>
								</tr>
								<tr class="success">
									<td>Engineering Clearance</td>
									<td>Office of the Building Official</td>
									<td style="text-align:center"><span style="text-align:center" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
									<td style="text-align:center"><button type="button" class="btn btn-primary">View Details</button></td>
								</tr>
								<tr class="danger">
									<td>Barangay Clearance</td>
									<td>Barangay</td>
									<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
									<td style="text-align:center"><button type="button" class="btn btn-primary">View Details</button></td>
								</tr>
								<tr class="danger">
									<td>Sanitary Permit/Health Clearance</td>
									<td>City Health Office</td>
									<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
									<td style="text-align:center"><button type="button" class="btn btn-primary">View Details</button></td>
								</tr>
								<tr class="danger">
									<td>City Environmental Certificate</td>
									<td>City Environmental and Natural Resources Office</td>
									<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
									<td style="text-align:center"><button type="button" class="btn btn-primary">View Details</button></td>
								</tr>
								<tr class="danger">
									<td>Fire Safety Inspection Certificate</td>
									<td>Bureau of Fire Protection</td>
									<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
									<td style="text-align:center"><button type="button" class="btn btn-primary">View Details</button></td>
								</tr>
								<tr class="danger">
									<td>Zoning Clearance</td>
									<td>City Planning & Development Office</td>
									<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
									<td style="text-align:center"><button type="button" class="btn btn-primary">View Details</button></td>
								</tr>
							</div>

						</table>
					</div>
				</div>
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

				<!---
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
													<div class="mdl-stepper-title">Submit an Online Application</div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step active-step">
													<div class="mdl-stepper-circle"><span>2</span></div>
													<div class="mdl-stepper-title">Submit Requirements</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step"> <div class="mdl-stepper-step active-step">
													<div class="mdl-stepper-circle"><span>3</span></div>
													<div class="mdl-stepper-title">Interview and Assessment</div>
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
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Zoning Application Form</h3>
								</div>
								<div class="panel-body">

									<div class="mdl-card mdl-shadow--2dp">
										<div class="mdl-card__supporting-text">
											<div class="mdl-stepper-horizontal-alternative">
												<div class="mdl-stepper-step active-step step-done">
													<div class="mdl-stepper-circle"><span>1</span></div>
													<div class="mdl-stepper-title">Visit City Planning and Development Office</div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step active-step">
													<div class="mdl-stepper-circle"><span>2</span></div>
													<div class="mdl-stepper-title">Submit Requirements</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step">
													<div class="mdl-stepper-circle"><span>4</span></div>
													<div class="mdl-stepper-title">Claim Zoning Permit</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="application-form">


									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="engineeringform">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Engineering Application Form</h3>
								</div>
								<div class="panel-body">

									<div class="mdl-card mdl-shadow--2dp">
										<div class="mdl-card__supporting-text">
											<div class="mdl-stepper-horizontal-alternative">
												<div class="mdl-stepper-step active-step step-done">
													<div class="mdl-stepper-circle"><span>1</span></div>
													<div class="mdl-stepper-title">Visit City Engineering Office</div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step active-step">
													<div class="mdl-stepper-circle"><span>2</span></div>
													<div class="mdl-stepper-title">Submit Requirements</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step">
													<div class="mdl-stepper-circle"><span>4</span></div>
													<div class="mdl-stepper-title">Claim Engineering Permit</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="application-form">


									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="healthdeptform">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Health Application Form</h3>
								</div>
								<div class="panel-body">

									<div class="mdl-card mdl-shadow--2dp">
										<div class="mdl-card__supporting-text">
											<div class="mdl-stepper-horizontal-alternative">
												<div class="mdl-stepper-step active-step step-done">
													<div class="mdl-stepper-circle"><span>1</span></div>
													<div class="mdl-stepper-title">Visit City Health Office</div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step active-step">
													<div class="mdl-stepper-circle"><span>2</span></div>
													<div class="mdl-stepper-title">Submit Requirements</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step">
													<div class="mdl-stepper-circle"><span>4</span></div>
													<div class="mdl-stepper-title">Claim Sanitary Permit</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="application-form">


									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="firedeptform">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Fire Application Form</h3>
								</div>
								<div class="panel-body">

									<div class="mdl-card mdl-shadow--2dp">
										<div class="mdl-card__supporting-text">
											<div class="mdl-stepper-horizontal-alternative">
												<div class="mdl-stepper-step active-step step-done">
													<div class="mdl-stepper-circle"><span>1</span></div>
													<div class="mdl-stepper-title">Visit Bureau of Fire Protection Biñan</div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step active-step">
													<div class="mdl-stepper-circle"><span>2</span></div>
													<div class="mdl-stepper-title">Submit Requirements</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step">
													<div class="mdl-stepper-circle"><span>4</span></div>
													<div class="mdl-stepper-title">Claim Fire Permit</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="application-form">


									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="cenroform">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>CENRO Application Form</h3>
								</div>
								<div class="panel-body">

									<div class="mdl-card mdl-shadow--2dp">
										<div class="mdl-card__supporting-text">
											<div class="mdl-stepper-horizontal-alternative">
												<div class="mdl-stepper-step active-step step-done">
													<div class="mdl-stepper-circle"><span>1</span></div>
													<div class="mdl-stepper-title">Visit City Environmental and Natural Resources Office</div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step active-step">
													<div class="mdl-stepper-circle"><span>2</span></div>
													<div class="mdl-stepper-title">Submit Requirements</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
												<div class="mdl-stepper-step">
													<div class="mdl-stepper-circle"><span>4</span></div>
													<div class="mdl-stepper-title">Claim Environmental Permit</div>
													<div class="mdl-stepper-optional"></div>
													<div class="mdl-stepper-bar-left"></div>
													<div class="mdl-stepper-bar-right"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="application-form">


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				--->


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

			<div id="modal-bplo-requirements" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Business Permit Requirements <span class="badge">2/7</span></h4>
			      </div>
			      <div class="modal-body">

			        <div class="row">
			          <div class="col-sm-12">
									<div class="table-responsive">
				            <table class="table table-bordered">
											<tr>
												<th>Requirement</th>
												<th>Office/Agency</th>
												<th>Status</th>
											</tr>
											<tr class="success">
												<td>DTI/SEC/CDA Registration</td>
												<td>DTI/SEC/CDA</td>
												<td style="text-align:center"><span style="text-align:center" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
											</tr>
											<tr class="success">
												<td>Engineering Clearance</td>
												<td>Office of the Building Official</td>
												<td style="text-align:center"><span style="text-align:center" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
											</tr>
											<tr class="danger">
												<td>Barangay Clearance</td>
												<td>Barangay</td>
												<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
											</tr>
											<tr class="danger">
												<td>Sanitary Permit/Health Clearance</td>
												<td>City Health Office</td>
												<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
											</tr>
											<tr class="danger">
												<td>City Environmental Certificate</td>
												<td>City Environmental and Naturao Resources Office</td>
												<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
											</tr>
											<tr class="danger">
												<td>Fire Safety Inspection Certificate</td>
												<td>Bureau of Fire Protection</td>
												<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
											</tr>
											<tr class="danger">
												<td>Zoning Clearance</td>
												<td>City Planning & Development Office</td>
												<td style="text-align:center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
											</tr>
										</div>

									</table>
			          </div>
			        </div>

			        <hr>

			      </form>

			    </div>

			  </div>
			</div>


  </div>
  <!-- /.container-fluid -->
</div>
<!-- </body> -->
<script>
$(document).ready(function(){
    $("a").tooltip();
});
</script>
