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

					<div class="panel panel-default">
						<div class="panel-heading">
							Edit Information
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url(); ?>dashboard/save_edit_info" method="post">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="panel-header">Basic Information</h3>
										<div class="row">
											<div class="col-sm-3">
												<label for="fname">First Name</label>
												<input type="text" class="form-control" name="fname" value="<?= $user[0]->firstName ?>">
											</div>
											<div class="col-sm-3">
												<label for="mname">Middle Name</label>
												<input type="text" class="form-control" name="mname" value="<?= $user[0]->middleName ?>">
											</div>
											<div class="col-sm-3">
												<label for="lname">Last Name</label>
												<input type="text" class="form-control" name="lname" value="<?= $user[0]->lastName ?>">
											</div>
											<div class="col-sm-3">
												<label for="lname">Suffix</label>
												<input type="text" class="form-control" name="suffix" value="<?= $user[0]->suffix ?>">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<p>
													<label for="gender">Gender</label>
													<div class="btn-group" style="margin-top:-10px;" role="group" aria-label="gender">
														<button type="button" class="btn btn-default <?= $user[0]->gender=='Male' ? 'active' : '' ?>" id="btn-male">Male</button>
														<button type="button" class="btn btn-default <?= $user[0]->gender=='Female' ? 'active' : '' ?>" id="btn-female">Female</button>
														<input type="hidden" name="gender" id="hidden-gender" value="<?= $user[0]->gender=='Male' ? 'Male' : 'Female' ?>">
													</div>
												</p>
											</div>
											<div class="col-sm-3">
												<label for="">Birth date</label>
												<div class="col-sm-12" style="padding:0;">
													<div class="col-sm-4" style="padding:0;"><input type="text" class="form-control" name="month" placeholder="MM" value="<?= substr($user[0]->birthDate,0,2) ?>"></div>
													<div class="col-sm-4" style="padding:0;"><input type="text" class="form-control" name="day" placeholder="DD" value="<?= substr($user[0]->birthDate,3,2) ?>"></div>
													<div class="col-sm-4" style="padding:0;"><input type="text" class="form-control" name="year" placeholder="YYYY" value="<?= substr($user[0]->birthDate,6,4) ?>"></div>
												</div>
											</div>
											<div class="col-sm-3">
												<label for="civil-staus">Civil Status</label>
												<div class="form-group">
													<select class="form-control" name="civil-status" id="civil-status">
														<option selected disabled select>Civil Status</option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>
														<option value="Separated">Separated</option>
														<option value="Widowed">Widowed</option>
														<option value="Divorced">Divorced</option>
														<option value="Annulled">Annulled</option>
														<option value="Widower">Widower</option>
														<option value="Single Parent">Single Parent</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-header">Address</h3>
										
										<div class="row">
											<div class="col-sm-3">
												<label for="fname">House No./Bldg No.</label>
												<input type="text" class="form-control" name="house-bldg-no" value="">
											</div>
											<div class="col-sm-3">
												<label for="mname">Building Name</label>
												<input type="text" class="form-control" name="bldg-name" value="">
											</div>
											<div class="col-sm-3">
												<label for="lname">Unit Number</label>
												<input type="text" class="form-control" name="unit-no" value="">
											</div>
											<div class="col-sm-3">
												<label for="lname">Street</label>
												<input type="text" class="form-control" name="street" value="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<label for="fname">Barangay</label>
												<input type="text" class="form-control" name="barangay" value="">
											</div>
											<div class="col-sm-3">
												<label for="mname">Subdivision</label>
												<input type="text" class="form-control" name="subdivision" value="">
											</div>
											<div class="col-sm-3">
												<label for="lname">City/Municipality</label>
												<input type="text" class="form-control" name="city-municipality" value="">
											</div>
											<div class="col-sm-3">
												<label for="lname">Province</label>
												<input type="text" class="form-control" name="province" value="">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-header">Contact Details</h3>
										<div class="row">
											<div class="col-sm-3">
												<label for="lname">Contact Number</label>
												<input type="text" class="form-control" name="contact-number" value="">
											</div>
											<div class="col-sm-3">
												<label for="lname">Telephone Number (Landline)</label>
												<input type="text" class="form-control" name="telephone-number" value="">
											</div>
											<!-- <div class="col-sm-10 col-sm-offset-1">
												<label for="static">Contact Number</label>
												<p name="static" class="form-control-static">email@example.com</p>
												<label for="static">Telephone Number (Landline)</label>
												<p name="static" class="form-control-static">email@example.com</p>
											</div> -->
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-3 col-sm-offset-3">
												<input type="submit" value="Save" class="btn btn-success btn-block">
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
</body>