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

										<h4><b>Tax Year:</b> <?= date('Y') ?></h4>
										<input type="hidden" name="tax-year" id="tax-year" value="<?= date('Y') ?>">
										<div class="row">
<!-- 											<div class="col-sm-4 col-sm-offset-2">
												<label for="reference-number">Reference Number</label>
												<p>Reference Number Here</p>
												<input type="hidden" name="reference-number" value="XXXXXX">
											</div> -->
											<div class="col-sm-4">
												<label for="application-date">Date of Application</label>
												<p><?= date('F j, Y') ?></p>
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
												<input required type="text" name="DTISECCDA_Date" class="form-control">
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-4">
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
											<div class="col-sm-4">
												<label for="business-name">Business Name*</label>
												<input required type="text" name='business-name' class='form-control'>
											</div>
											<div class="col-sm-4">
												<label for="trade-name">Trade Name/Franchise*</label>
												<input required type="text" name='trade-name' class='form-control'>
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
										<div class="form-group">
											
										</div>
										<div class="row">
											<div class="col-sm-12">
												<h4>Business Address</h4>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6">
											<label for="organization-type">Business Address Name*</label>
												<select required name="business-address" id="business-address" class="form-control">
												<option selected disabled>Select Business Address</option>
													<?php foreach ($business_addresses as $address): ?>
														<option value="<?= $address->addressId ?>"><?= $address->addressName ?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="house-bldg-no">House No./Bldg No.*</label>
													<input type="text" disabled name="house-bldg-no" class="form-control">
												</div>
											</div>
											
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="bldg-name">Building Name*</label>
													<input type="text" disabled name="bldg-name" class="form-control">
												</div>
											</div>
											
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="unit-no">Unit Number*</label>
													<input type="text" disabled name="unit-no" data-parsley-type="digits" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="street">Street*</label>
													<input type="text" disabled name="street" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="barangay">Barangay*</label>
													<input type="text" disabled name="barangay" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="subdivision">Subdivision*</label>
													<input type="text" disabled name="subdivision" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="city-municipality">City/Municipality*</label>
													<input type="text" disabled name="city-municipality" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="province">Province*</label>
													<input type="text" disabled name="province" class="form-control">
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
										<h4>Certificates/Permits (!)</h4>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-5">
													<div class="checkbox" id="cnc" name="cnc">
														<label><input type="checkbox" value=""><strong>Environmental Compliance Certificate/CNC</strong></label>
													</div>
												</div>
												<div class="col-sm-5">
													<div class="checkbox" id="llda" name="llda">
														<label><input type="checkbox" value=""><strong>LLDA Clearance / Certificate of Exemption</strong></label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<label for="cnc-date-issued">Date Issued:</label>
													<input type="text" disabled="" class="form-control" name="cnc-date-issued">
												</div>
												<div class="col-sm-3 col-sm-offset-2">
													<label for="llda-date-issued">Date Issued:</label>
													<input type="text" disabled="" class="form-control" name="llda-date-issued">
												</div>
											</div>

											<div class="row">
												<div class="col-sm-5">
													<div class="checkbox" id="discharge-permit" name="discharge-permit">
														<label><input type="checkbox" value=""><strong>Discharge Permit</strong></label>
													</div>
												</div>
												<div class="col-sm-5">
													<div class="checkbox" id="apsci" name="apsci">
														<label><input type="checkbox" value=""><strong>Permit to Operate/APSCI</strong></label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<label for="discharge-permit-date-issued">Date Issued:</label>
													<input type="text" disabled="" class="form-control" name="discharge-permit-date-issued">
												</div>
												<div class="col-sm-3 col-sm-offset-2">
													<label for="apsci-date-issued">Date Issued:</label>
													<input type="text" disabled="" class="form-control" name="apsci-date-issued">
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
												<div class="checkbox" id="" name="">
													<label><input type="checkbox" value=""><strong>Smoke/Emission</strong></label>
												</div>
											</div>
											<div class="col-sm-5">
												<div class="checkbox" id="" name="">
													<label><input type="checkbox" value=""><strong>Volatile Compound</strong></label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-5">
												<span>Fugitive Particulates:</span>
												<div class="checkbox">
													<label><input type="checkbox" value="Dust"><strong>Dust</strong></label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="Mist"><strong>Mist</strong></label>
												</div>
												<div class="checkbox"><label><input type="checkbox" value="Gas"><strong>Gas</strong></label></div>
											</div>
											<div class="col-sm-5">
												<span>Steam Generator:</span>
												<div class="checkbox">
													<label><input type="checkbox" value=""><strong>Boiler</strong></label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value=""><strong>Furnace</strong></label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value=""><strong>Others</strong></label>
													<input type="text" disabled placeholder="Please specify">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-4">
												<label for="air-pollution-control-devices">Air Pollution Control Devices Being Used</label>
												<input type="text" id="air-pollution-control-devices" name="air-pollution-control-devices" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="stack-height">Stack Height</label>
												<input type="text" name="stack-height" id="stack-height" class="form-control">
											</div>
										</div>
										<!-- END AIR POLLUTION -->
										<hr>
										<h4>Wastewater (!)</h4>
										<div class="row">
											<div class="col-sm-12">
												<span><strong>Note: When visiting CENRO, furnish copy of latest wastewater laboratory test results</strong></span>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-4 ">
												<label for="wastewater-treament-facility">Wastewater Treament Facility</label>
												<input type="text" name="wastewater-treament-facility" id="wastewater-treament-facility" class="form-control">
											</div>
										</div>

										<div class="row">
											<div class="col-sm-5">
												<div class="checkbox">
													<label><input type="checkbox" value=""><strong>Wastewater Treatment Operation and Process</strong></label>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-3">
												<div class="checkbox">
													<label><input type="checkbox" value=""><strong>Pending Case with LLDA?</strong></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<label for="case-no">Case No.</label>
												<input type="text" disabled name="case-no" id="case-no" class="form-control">
											</div>
										</div>
										<!-- END OF WASTEWATER -->
										<hr>
										<h4>Solid Wastes (!)</h4>
										<div class="row">
											<div class="col-sm-4">
												<label for="type-of-solid-wastes">Type of Solid Wastes Generated</label>
												<input type="text" id="type-of-solid-wastes" name="type-of-solid-wastes" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="qty-per-day">Quantity per day</label>
												<input type="text" id="qty-per-day" name="qty-per-day" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="method-of-garbage-collection">Method of Garbage Collection</label>
												<input type="text" id="method-of-garbage-collection" name="method-of-garbage-collection" class="form-control">
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-sm-12">
												<span>Frequency of Garbage Collection:</span>
												<div class="checkbox-inline">
													<label><input type="checkbox" value=""><strong>Daily</strong></label>
												</div>
												<div class="checkbox-inline">
													<label><input type="checkbox" value=""><strong>Weekly</strong></label>
												</div>
												<div class="checkbox-inline">
													<label><input type="checkbox" value=""><strong>Others</strong></label>
													<input type="text" disabled placeholder="Please specify">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-5">
												<label for="collector">Person / Company Collecting Solid Wastes</label>
												<input type="text" id="collector" name="collector" class="form-control">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<label for="collector-address">Address</label>
												<textarea name="collector-address" id="collector-address" class="form-control"></textarea>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-sm-12">
												<span>Method of Garbage Disposal:</span>
												<div class="radio-inline">
													<label><input type="radio" name="garbage-disposal-method" value="Sanitary Landfill"><strong>Sanitary Landfill</strong></label>
												</div>
												<div class="radio-inline">
													<label><input type="radio" name="garbage-disposal-method" value="Controlled Dumpsite"><strong>Controlled Dumpsite</strong></label>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<span>Method of Waste Minimization:</span>
												<div class="checkbox-inline">
													<label><input type="checkbox" name="" value=""><strong>Recycling</strong></label>
												</div>
												<div class="checkbox-inline">
													<label><input type="checkbox" name="" value=""><strong>Reduction</strong></label>
												</div>
												<div class="checkbox-inline">
													<label><input type="checkbox" name="" value=""><strong>Reuse</strong></label>
												</div>
											</div>
										</div>
										<!-- END OF SOLID WASTES -->
										<hr>
										<h4>Drainage (!)</h4>
										<div class="row">
											<div class="col-sm-4">
												<div class="checkbox">
													<label><input type="checkbox"><strong>Drainage System</strong></input></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<div class="radio-inline">
													<label><input type="radio" disabled name="type"><strong>Closed/Underground</strong></input></label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="radio-inline">
													<label><input type="radio" disabled name="type"><strong>Open Canal</strong></input></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<div class="radio-inline">
													<label><input type="radio" disabled name="where-discharged-drainage" value="Public Drainage System"><strong>Public Drainage System</strong></input></label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="radio-inline">
													<label><input type="radio" disabled name="where-discharged-drainage" value="Nature Outfall/Waterbody"><strong>Nature Outfall/Waterbody</strong></input></label>
												</div>
											</div>
										</div>
										<!-- END OF DRAINAGE -->
										<hr>
										<h4>Sewerage (!)</h4>
										<div class="row">
											<div class="col-sm-4">
												<div class="checkbox">
													<label><input type="checkbox"><strong>Sewerage System</strong></input></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="checkbox">
													<label><input type="checkbox"><strong>Septic Tank</strong></input></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<div class="radio-inline">
													<label><input type="radio" disabled name="where-discharged-sewerage" value="Public Drainage System"><strong>Public Drainage System</strong></input></label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="radio-inline">
													<label><input type="radio" disabled name="where-discharged-sewerage" value="Treatment in Septic Tank"><strong>Treatment in Septic Tank</strong></input></label>
												</div>
											</div>
										</div>
										<!-- END OF SEWERAGE -->
										<hr>
										<h4>Water Supply/Source (!)</h4>
										<div class="row">
											<div class="col-sm-3">
												<div class="checkbox">
													<label><input type="checkbox"><strong>Deep Well</strong></input></label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox">
													<label><input type="checkbox"><strong>Local Water Utility</strong></input></label>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="checkbox">
													<label><input type="checkbox"><strong>Surface Water</strong></input></label>
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
<!-- </body>