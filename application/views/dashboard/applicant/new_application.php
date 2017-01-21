<body class="content-container">
	<!-- Page Content -->
	<div style="padding-top:45px;" id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">

					<?php if($this->session->flashdata('error')): ?>
						<div class="alert alert-danger"> <!--bootstrap error div-->
							<?=$this->session->flashdata('error')?>
						</div>
					<?php endif; ?>

					<div class="panel panel-primary">
						<div class="panel-heading">
							New Application
						</div>
						<div class="panel-body">
							<!-- action="<?php echo base_url() ?>dashboard/submit_application" -->
							<form id="new_application_form" method="post" data-parsley-validate="">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="panel-header">Unified Application Form for Business Permit</h3>
										<div class="row">
											<div class="col-sm-4">
												<label for="tax-year">Tax Year:</label>
												<h3><strong><?= date('Y') ?></strong></h3>
												<input type="hidden" name="tax-year" id="tax-year" value="<?= date('Y') ?>">
											</div>
											<div class="col-sm-4">
												<label for="application-date">Date of Application</label>
												<h3><?= date('F j, Y') ?></h3>
												<input type="hidden" id="application-date" name="application-date" value="<?= date('F j, Y') ?>">
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-4">
												<label for="DTISECCDA_RegNum">DTI/SEC/CDA Registration Number*</label>
												<input type="text" required name="DTISECCDA_RegNum" data-parsley-type="digits" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="DTISECCDA_Date">DTI/SEC/CDA Date of Registration*</label>
												<div class="input-group">
													<input required type="text" name="DTISECCDA_Date" id="DTISECCDA_Date" class="form-control">  <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
												</div>
												
											</div>
										</div>
										<hr>

										<div class="row">
											<div class="col-sm-4">
												<label for="ctc-number">CTC Number*</label>
												<input required type="text" name="ctc-number" data-parsley-type="digits" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="tin">TIN*</label>
												<input required type="text" name="tin" class="form-control">
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="checkbox" id="tax-incentive" name="tax-incentive" data-toggle="tooltip" title="Please specify entity below">
													<label for="tax-incentive">Are you enjoying tax incentive from any Government Entity?</label>
												</div>

											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="entity">Specify Entity*</label>
													<input type="text" disabled id="entity" name="entity" class="form-control">
												</div>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
											</div>
											<div class="col-sm-12">
												<h4>Tax Payer Name</h4>
											</div>

											<div class="col-sm-4">
												<label for="tax-first-name">First Name*</label>
												<input required type="text" name="tax-first-name" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="tax-first-name">Middle Name</label>
												<input type="text" name="tax-middle-name" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="tax-first-name">Last Name*</label>
												<input required type="text" name="tax-last-name" class="form-control">
											</div>
										</div>
										<hr>

										<div class="row">
											<div class="col-sm-12">
												<h4>Name of President/Treasurer of Corporation</h4>
											</div>

											<div class="col-sm-4">
												<label for="pt-first-name">First Name*</label>
												<input required type="text" name="pt-first-name" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="pt-middle-name">Middle Name</label>
												<input type="text" name="pt-middle-name" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="pt-last-name">Last Name*</label>
												<input required type="text" name="pt-last-name" class="form-control">
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
												<h4>Business Details</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label for="company-name">Company Name* (!)</label>
													<input type="text" required="" name="company-name" id="company-name" class="form-control">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="business-name">Business Name*</label>
													<input required type="text" name='business-name' class='form-control'>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="trade-name">Trade Name/Franchise*</label>
													<input required type="text" name='trade-name' class='form-control'>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label for="trade-name">Signage Name* (!)</label>
													<input required type="text" name='signage-name' class='form-control'>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="nature-of-business">Nature of Business* (!)</label>
													<input type="text" name="nature-of-business" id="nature-of-business" required="" class="form-control">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="capital-invested">Capital Invested* (!)</label>
													<input required type="text" name='capital-invested' class='form-control' data-parsley-type="digits">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label for="organization-type">Organization Type*</label>
													<select required name="organization-type" id="organization-type" class="form-control">
														<option selected disabled>Select Organzation Type</option>
														<option value="Single">Single</option>
														<option value="Partnership">Partnership</option>
														<option value="Corporation">Corporation</option>
														<option value="Cooperative">Cooperative</option>
													</select>
												</div>

											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="corporation-name">Corporation Name <small>(if corporation)</small> (!)</label>
													<input type='text' disabled name="corporation-name" id="corporation-name" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label for="date-of-operation">Date of Operation* (!)</label>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<div class="input-group date">
																	<input type="text" id="date-of-operation" name="date-of-operation" class="form-control" data="DateTimePicker" />  <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="business-desc">Description of Business* (!)</label>
													<textarea name="business-desc" id="business-desc" rows="1" class='form-control'></textarea>
												</div>
											</div>
										</div>

										<hr>
										<div class="row">
											<div class="col-sm-12">
												<h4>Business Address</h4>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="organization-type">Business Address Name*</label>
													<select required name="business-address" id="business-address" class="form-control">
														<option selected disabled>Select Business Address</option>
														<?php foreach ($business_addresses as $address): ?>
															<option value="<?= $address->addressId ?>"><?= $address->addressName ?></option>
														<?php endforeach ?>
													</select>
												</div>
											</div>

										</div>


										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="house-bldg-no">House No./Bldg No.*</label>
													<input type="text" disabled name="house-bldg-no" id="house-bldg-no" class="form-control">
												</div>
											</div>


											<div class="col-sm-3">
												<div class="form-group">
													<label for="bldg-name">Building Name*</label>
													<input type="text" disabled name="bldg-name" id="bldg-name" class="form-control">
												</div>
											</div>


											<div class="col-sm-3">
												<div class="form-group">
													<label for="unit-no">Unit Number*</label>
													<input type="text" disabled name="unit-no" id="unit-no"  class="form-control">
												</div>
											</div>

											<div class="col-sm-3">
												<div class="form-group">
													<label for="street">Street*</label>
													<input type="text" disabled name="street" id="street" class="form-control">
												</div>
											</div>

											<div class="col-sm-3">
												<div class="form-group">
													<label for="barangay">Barangay*</label>
													<input type="text" disabled name="barangay" id="barangay" class="form-control">
												</div>
											</div>

											<div class="col-sm-3">
												<div class="form-group">
													<label for="subdivision">Subdivision*</label>
													<input type="text" disabled name="subdivision" id="subdivision" class="form-control">
												</div>
											</div>

											<div class="col-sm-3">
												<div class="form-group">
													<label for="city-municipality">City/Municipality*</label>
													<input type="text" disabled name="city-municipality" id="city-municipality" class="form-control">
												</div>
											</div>

											<div class="col-sm-3">
												<div class="form-group">
													<label for="province">Province*</label>
													<input type="text" disabled name="province" id="province" class="form-control">
												</div>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
												<h4>Contact Details</h4>
											</div>

											<div class="col-sm-4">
												<label for="tel-num">Telephone Number*</label>
												<input required type="text" class="form-control" data-parsley-type="digits" name="tel-num">
											</div>
											<div class="col-sm-4">
												<label for="email">Email Address*</label>
												<input required type="email" class="form-control" name="email">
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
												<h4>Other Details</h4>
											</div>

											<div class="col-sm-4">
												<label for="pin">Property Index Number (PIN)*</label>
												<input required type="text" class="form-control" name="pin">
											</div>
											<div class="col-sm-4">
												<label for="total-employee-num">Number of Employees in Establishment*</label>
												<input required type="text" class="form-control" data-parsley-type="digits" name="total-employee-num">
											</div>
											<div class="col-sm-4">
												<label for="pollution-control-officer">Pollution Control Officer (!)</label>
												<input type="text" class="form-control" required name="pollution-control-officer">
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
												<h4>Lessor Details</h4>
											</div>
										</div>
										
										<div class="lessor-controls">
											<div class="row">
												<div class="col-sm-12">
													<input type="checkbox" name='rented' id='rented' data-toggle="tooltip" title="Please identify lessor's information below if yes">
													<label for="rented">Is the business place rented?</label>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label for="lessor-first-name">First Name*</label>
														<input type="text" disabled class="form-control" name='lessor-first-name'>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label for="lessor-middle-name">Middle Name*</label>
														<input type="text" disabled class="form-control" name='lessor-middle-name'>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label for="lessor-last-name">Last Name*</label>
														<input type="text" disabled class="form-control" name='lessor-last-name'>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label for="lessor-address">Lessor's Address*</label>
														<textarea name="lessor-address" id="lessor-address" disabled rows="1" class='form-control' placeholder="House No./Bldg.No/Street"></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<label for="lessor-subdivision">Subdivision*</label>
														<input type="text" disabled class="form-control" name="lessor-subdivision">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label for="lessor-barangay">Barangay*</label>
														<input type="text" disabled class="form-control" name="lessor-barangay">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label for="lessor-city-municipality">City/Municipality*</label>
														<input type="text" disabled class="form-control" name="lessor-city-municipality">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label for="lessor-province">Province*</label>
														<input type="text" disabled class="form-control" name="lessor-province">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<label for="lessor-monthly-rental">Monthly Rental*</label>
														<input type="text" disabled class="form-control" data-parsley-type="digits" name="lessor-monthly-rental">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label for="lessor-tel-cel-no">Tel No./Cel No.*</label>
														<input type="text" disabled class="form-control" data-parsley-type="digits" name="lessor-tel-cel-no">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label for="">Email Address*</label>
														<input type="email" disabled class="form-control" name="lessor-email">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<h4>In case of emergency</h4>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label for="contact-name">Contact Person Name*</label>
														<input type="text" disabled name="emergency-contact-name" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label for="emergency-tel-cel-no">Tel No./Cel No.*</label>
														<input type="text" disabled name="emergency-tel-cel-no" data-parsley-type="digits" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label for="emergency-email">Email Address*</label>
														<input type="email" disabled name="emergency-email" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<hr>
										<h4>Issued Certificates/Permits (!)</h4>
										<small>Click the checkbox if specific permit is issued.</small>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-5">
													<div class="checkbox">
														<label><input type="checkbox" value="" id="cnc" name="cnc"><strong>Environmental Compliance Certificate/CNC</strong></label>
													</div>
												</div>
												<div class="col-sm-5">
													<div class="checkbox">
														<label><input type="checkbox" value="" id="llda" name="llda"><strong>LLDA Clearance / Certificate of Exemption</strong></label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<label for="cnc-date-issued">Date Issued:</label>
													<div class="input-group">
														<input type="text" disabled="" class="form-control" name="cnc-date-issued" id="cnc-date-issued"><span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
													</div>
												</div>
												<div class="col-sm-3 col-sm-offset-2">
													<label for="llda-date-issued">Date Issued:</label>
													<div class="input-group">
														<input type="text" disabled="" class="form-control" name="llda-date-issued" id="llda-date-issued"><span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
													</div>
													
												</div>
											</div>

											<div class="row">
												<div class="col-sm-5">
													<div class="checkbox">
														<label><input type="checkbox" value="" id="discharge-permit" name="discharge-permit"><strong>Discharge Permit</strong></label>
													</div>
												</div>
												<div class="col-sm-5">
													<div class="checkbox">
														<label><input type="checkbox" value="" id="apsci" name="apsci"><strong>Permit to Operate/APSCI</strong></label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<label for="discharge-permit-date-issued">Date Issued:</label>
													<div class="input-group">
														<input type="text" disabled="" class="form-control" name="discharge-permit-date-issued" id="discharge-permit-date-issued"><span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
													</div>
												</div>
												<div class="col-sm-3 col-sm-offset-2">
													<label for="apsci-date-issued">Date Issued:</label>
													<div class="input-group">
														<input type="text" disabled="" class="form-control" name="apsci-date-issued" id="apsci-date-issued"><span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label for="products-by-products">Products and By-Products</label>
													<input type="text" id="products-by-products" name="products-by-products" class="form-control" value="???">
												</div>
											</div>
										</div>
										<!-- END CERTIFICATES -->
										<hr>
										<h4>Air Pollutants (!)</h4>
										<div class="row">
											<div class="col-sm-5">
												<div class="checkbox">
													<label><input type="checkbox" name="smoke-emission" id="smoke-emission"><strong>Smoke/Emission</strong></label>
												</div>
											</div>
											<div class="col-sm-5">
												<div class="checkbox">
													<label><input type="checkbox" name="volatile-compound" id="volatile-compound"><strong>Volatile Compound</strong></label>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-5">
												<span>Fugitive Particulates:</span>
												<div class="checkbox">
													<label><input type="checkbox" name="fugitive-particulates[]" value="Dust"><strong>Dust</strong></label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" name="fugitive-particulates[]" value="Mist"><strong>Mist</strong></label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" name="fugitive-particulates[]" value="Gas"><strong>Gas</strong></label>
												</div>
											</div>
											<div class="col-sm-5">
												<span>Steam Generator:</span>
												<div class="checkbox">
													<label><input type="checkbox" name="steam-generators[]" value="Boiler"><strong>Boiler</strong></label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" name="steam-generators[]" value="Furnace"><strong>Furnace</strong></label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" name="steam-generators[]" id="steam-generator-others" value="" ><strong>Others</strong></label>
													<input type="text" name="steam-generator-specify" id="steam-generator-specify" disabled placeholder="Please specify...">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-4">
												<label for="air-pollution-control-devices">Air Pollution Control Devices Being Used</label>
												<input type="text" required id="air-pollution-control-devices" name="air-pollution-control-devices" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="stack-height">Stack Height</label>
												<input type="text" required name="stack-height" id="stack-height" class="form-control">
											</div>
										</div>
										<!-- END AIR POLLUTION -->
										<hr>
										<h4>Wastewater (!)</h4>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group well well-sm">
													<span><strong class="text-warning">Note: When visiting CENRO, furnish copy of latest wastewater laboratory test results</strong></span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-4 ">
												<label for="wastewater-treatment-facility">Wastewater Treatment Facility</label>
												<input required type="text" name="wastewater-treatment-facility" id="wastewater-treatment-facility" class="form-control">
											</div>
										</div>

										<div class="row">
											<div class="col-sm-5">
												<div class="checkbox">
													<label><input type="checkbox" name="wastewater-treatment-operation" id="wastewater-treatment-operation"><strong>Wastewater Treatment Operation and Process</strong></label>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-3">
												<div class="checkbox">
													<label><input type="checkbox" name="pending-llda-case" id="pending-llda-case"><strong>Pending Case with LLDA?</strong></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<label for="case-no">Case No.</label>
												<input type="text" disabled name="llda-case-no" id="llda-case-no" class="form-control">
											</div>
										</div>
										<!-- END OF WASTEWATER -->
										<hr>
										<h4>Solid Wastes (!)</h4>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label for="type-of-solid-wastes">Type of Solid Wastes Generated</label>
													<input required type="text" id="type-of-solid-wastes" name="type-of-solid-wastes" class="form-control">
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group">
													<label for="qty-per-day">Quantity per day</label>
													<input required type="text" id="qty-per-day" name="qty-per-day" class="form-control">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="method-of-garbage-collection">Method of Garbage Collection</label>
													<input required type="text" id="method-of-garbage-collection" name="method-of-garbage-collection" class="form-control">
												</div>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-sm-12">
												<div class="form-group" id="garbage-radio">
													<span>Frequency of Garbage Collection:</span>
													<div class="radio-inline">
														<label><input type="radio" checked name="garbage-collection-frequency" id="garbage-collection-frequency" value="Daily"><strong>Daily</strong></label>
													</div>
													<div class="radio-inline">
														<label><input type="radio" name="garbage-collection-frequency" value="Weekly" id="garbage-collection-frequency"><strong>Weekly</strong></label>
													</div>
													<div class="radio-inline">
														<label><input type="radio" name="garbage-collection-frequency" id="garbage-collection-others" value=""><strong>Others</strong></label>
														<input type="text" name="garbage-collection-specify" id="garbage-collection-specify" disabled placeholder="Please specify...">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<div class="form-group">
													<label for="collector">Person / Company Collecting Solid Wastes</label>
													<input required type="text" id="collector" name="collector" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<div class="form-group">
													<label for="collector-address">Collector's Address</label>
													<textarea required name="collector-address" id="collector-address" class="form-control"></textarea>
												</div>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<span>Method of Garbage Disposal:</span>
													<div class="radio-inline">
														<label><input type="radio" checked name="garbage-disposal-method" value="Sanitary Landfill"><strong>Sanitary Landfill</strong></label>
													</div>
													<div class="radio-inline">
														<label><input type="radio" name="garbage-disposal-method" value="Controlled Dumpsite"><strong>Controlled Dumpsite</strong></label>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<span>Method of Waste Minimization (if any):</span>
													<div class="checkbox-inline">
														<label><input type="checkbox" name="waste-minimization[]" value="Recycling"><strong>Recycling</strong></label>
													</div>
													<div class="checkbox-inline">
														<label><input type="checkbox" name="waste-minimization[]" value="Reduction"><strong>Reduction</strong></label>
													</div>
													<div class="checkbox-inline">
														<label><input type="checkbox" name="waste-minimization[]" value="Reuse"><strong>Reuse</strong></label>
													</div>
												</div>
											</div>
										</div>
										<!-- END OF SOLID WASTES -->
										<hr>
										<h4>Drainage (!)</h4>
										<small>Check if available</small>
										<div class="row">
											<div class="col-sm-4">
												<div class="checkbox">
													<label><input type="checkbox" name="drainage-system" id="drainage-system"><strong>Drainage System</strong></input></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-sm-12">
													<label for="">Type:</label>
												</div>
												<div class="col-sm-3 col-sm-offset-1">
													<div class="radio-inline">
														<label><input type="radio" disabled id="drainage-system-type1" name="drainage-system-type" value="Close/Underground"><strong>Closed/Underground</strong></input></label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="radio-inline">
														<label><input type="radio" disabled id="drainage-system-type2" name="drainage-system-type" value="Open Canal"><strong class="testing">Open Canal</strong></input></label>
													</div>
												</div>
											</div>

										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-sm-12">
													<label for="">Where Discharged:</label>
												</div>
												<div class="col-sm-3 col-sm-offset-1">
													<div class="radio-inline">
														<label><input type="radio" disabled name="drainage-where-discharged" id="drainage-where-discharged1" value="Public Drainage System"><strong>Public Drainage System</strong></input></label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="radio-inline">
														<label><input type="radio" disabled name="drainage-where-discharged" id="drainage-where-discharged2" value="Nature Outfall/Waterbody"><strong>Nature Outfall/Waterbody</strong></input></label>
													</div>
												</div>
											</div>
										</div>
										<!-- END OF DRAINAGE -->
										<hr>
										<h4>Sewerage (!)</h4>
										<small>Check if available</small>
										<div class="row">
											<div class="col-sm-4">
												<div class="checkbox">
													<label><input type="checkbox" name="sewerage-system" id="sewerage-system"><strong>Sewerage System</strong></input></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="checkbox">
													<label><input type="checkbox" id="septic-tank" name="septic-tank"><strong>Septic Tank</strong></input></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<label for="">Where Discharged:</label></div>
												<div class="col-sm-3 col-sm-offset-1">
													<div class="radio-inline">
														<label><input type="radio" disabled name="sewerage-where-discharged" id="sewerage-where-discharged1" value="Public Drainage System"><strong>Public Drainage System</strong></input></label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="radio-inline">
														<label><input type="radio" disabled name="sewerage-where-discharged" id="sewerage-where-discharged2" value="Treatment in Septic Tank"><strong>Treatment in Septic Tank</strong></input></label>
													</div>
												</div>
											</div>
											<!-- END OF SEWERAGE -->
											<hr>
											<h4>Water Supply/Source (!)</h4>
											<div class="row">
												<div class="col-sm-3">
													<div class="radio">
														<label><input type="radio" checked name="water-supply" value="Deep Well"><strong>Deep Well</strong></input></label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="radio">
														<label><input type="radio" name="water-supply" value="Water Utility"><strong>Local Water Utility</strong></input></label>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="radio">
														<label><input type="radio" name="water-supply" value="Surface Water"><strong>Surface Water</strong></input></label>
													</div>
												</div>
											</div>
											<!-- END OF WATER SUPPLY/SOURCE -->
											<hr>
											<h4>Hazardous Waste Treater/Transporter (!)</h4>
											???

											<hr>
											<div class="row">
												<div class="col-sm-12">
													<h4>Business Activity</h4>
												</div>
											</div>
											<table id='bus-activity' class="table table-bordered">
												<th>Code</th>
												<th>Line of Business</th>
												<th>No. of Units</th>
												<th>Capitalization</th>
												<!-- <th></th> -->
												<tbody class="table-body">
													<tr class="data">
														<td><input id="code" name="code" type="text" required class=form-control></td>
														<td><input id="line-of-business" name="line-of-business" type="text" required class=form-control></td>
														<td><input id="num-of-units" name="num-of-units" type="text" required class=form-control></td>
														<td><input id="capitalization" name="capitalization" type="text" required class=form-control></td>
														<!-- <td><button type="button" id="btn-delete" class="btn btn-danger btn-block">Delete</button></td> -->
													</tr>
												</tbody>
											</table>

											<div class="row">
												<div class="col-sm-4 col-sm-offset-4">
													<a id="btn-add-bus-activity" class="btn btn-primary btn-block"><i class="fa fa-plus" aria-hidden="true"></i> Add Row</a>
												</div>
											</div>

										</div>
									</div>
									<div class="row">
										<hr>
										<div class="row">
											<div class="col-sm-3 col-sm-offset-3">
												<button type="submit" id="btn-submit" class="btn btn-success btn-block"><i id="fa-submit" class="fa fa-check" aria-hidden="true"></i> Save</button>
											</div>
											<div class="col-sm-3">
												<a href="<?php echo base_url() ?>dashboard" class="btn btn-danger btn-block"><i class="fa fa-times" aria-hidden="true"></i> Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!-- /.panel-body -->
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>