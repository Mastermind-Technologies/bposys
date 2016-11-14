<!-- <body class="content-container"> -->
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

				<div class="panel panel-default">
					<div class="panel-heading">
						New Application
					</div>
					<div class="panel-body">
						<form method="post" data-parsley-validate="">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="panel-header text-center">Unified Application Form for Business Permit</h3>

										<h4 class="text-center">Tax Year: <?= date('Y') ?></h4>
										<input type="hidden" name="tax-year" id="tax-year" value="<?= date('Y') ?>">
										<div class="row">
											<div class="col-sm-4 col-sm-offset-2">
												<label for="reference-number">Reference Number</label>
												<p>Reference Number Here</p>
												<input type="hidden" name="reference-number" value="XXXXXX">
											</div>
											<div class="col-sm-4 col-sm-offset-2">
												<label for="application-date">Date of Application</label>
												<p><?= date('F j, Y') ?></p>
												<input type="hidden" id="application-date" name="application-date" value="<?= date('F j, Y') ?>">
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-4">
												<label for="DTISECCDA_RegNum">DTI/SEC/CDA Registration Number*</label>
												<input type="text" required name="DTISECCDA_RegNum" class="form-control">
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
												<input required type="text" name="ctc-number" class="form-control">
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
												<label for="tax-first-name">Middle Name*</label>
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
												<label for="pt-first-name">Middle Name</label>
												<input type="text" name="pt-middle-name" class="form-control">
											</div>
											<div class="col-sm-4">
												<label for="pt-first-name">Last Name*</label>
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
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="house-bldg-no">House No./Bldg No.*</label>
													<input required type="text" name="house-bldg-no" class="form-control">
												</div>
											</div>
											
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="bldg-name">Building Name*</label>
													<input required type="text" name="bldg-name" class="form-control">
												</div>
											</div>
											
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="unit-no">Unit Number*</label>
													<input required type="text" name="unit-no" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="street">Street*</label>
													<input required type="text" name="street" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="barangay">Barangay*</label>
													<input required type="text" name="barangay" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="subdivision">Subdivision*</label>
													<input required type="text" name="subdivision" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="city-municipality">City/Municipality*</label>
													<input required type="text" name="city-municipality" class="form-control">
												</div>
											</div>
											
											<div class="col-sm-3">
												<div class="form-group">
													<label for="province">Province*</label>
													<input required type="text" name="province" class="form-control">
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
												<input required type="text" class="form-control" name="tel-num">
											</div>
											<div class="col-sm-4">
												<label for="email">Email Address*</label>
												<input required type="text" class="form-control" name="email">
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
												<h4>Other Details</h4>
											</div>

											<div class="col-sm-4">
												<label for="">Property Index Number (PIN)*</label>
												<input required type="text" class="form-control" name="pin">
											</div>
											<div class="col-sm-4">
												<label for="">Number of Employees in Establishment*</label>
												<input required type="text" class="form-control" name="total-employee-num">
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
														<input type="text" disabled class="form-control" name="lessor-monthly-rental">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label for="lessor-tel-cel-no">Tel No./Cel No.*</label>
														<input type="text" disabled class="form-control" name="lessor-tel-cel-no">
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label for="">Email Address*</label>
														<input type="text" disabled class="form-control" name="lessor-email">
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
														<input type="text" disabled name="emergency-tel-cel-no" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label for="emergency-email">Email Address*</label>
														<input type="text" disabled name="emergency-email" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-12">
												<h4>Business Activity</h4>
											</div>
											<table id='bus-activity' class="table table-bordered">
												<th>No.</th>
												<th>Code</th>
												<th>Line of Business</th>
												<th>No. of Units</th>
												<th>Capitalization</th>
												<tbody>
													<tr class="data">
														<td>1</td>
														<td><input type="text" class=form-control></td>
														<td><input type="text" class=form-control></td>
														<td><input type="text" class=form-control></td>
														<td><input type="text" class=form-control></td>
													</tr>
													<tr class="data">
														<td>2</td>
														<td><input type="text" class=form-control></td>
														<td><input type="text" class=form-control></td>
														<td><input type="text" class=form-control></td>
														<td><input type="text" class=form-control></td>
													</tr>
													<tr class="data">
														<td>3</td>
														<td><input type="text" class=form-control></td>
														<td><input type="text" class=form-control></td>
														<td><input type="text" class=form-control></td>
														<td><input type="text" class=form-control></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="row">
											<div class="col-sm-4 col-sm-offset-4">
												<a id="btn-add-bus-activity" class="btn btn-primary btn-block">Add Bussiness Activity</a>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 col-sm-offset-4">
												<a id="btn-table-test" class="btn btn-primary btn-block">Test</a>
											</div>
										</div>

								</div>
							</div>
							<div class="row">
								<hr>
								<div class="row">
									<div class="col-sm-3 col-sm-offset-3">
										<input type="submit" value="Save" class="btn btn-success btn-block" >
									</div>
									<div class="col-sm-3">
										<a href="<?php echo base_url() ?>dashboard" class="btn btn-danger btn-block">Cancel</a>
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
<!-- </body> -->