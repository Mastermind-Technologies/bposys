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
											<label for="suffix">Suffix</label>
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
													<option <?= $user[0]->civilStatus=="" ? 'selected' : '' ?> disabled select>Civil Status</option>
													<option <?= $user[0]->civilStatus=="Single" ? 'selected' : '' ?> value="Single">Single</option>
													<option <?= $user[0]->civilStatus=="Married" ? 'selected' : '' ?> value="Married">Married</option>
													<option <?= $user[0]->civilStatus=="Separated" ? 'selected' : '' ?> value="Separated">Separated</option>
													<option <?= $user[0]->civilStatus=="Widowed" ? 'selected' : '' ?> value="Widowed">Widowed</option>
													<option <?= $user[0]->civilStatus=="Divorced" ? 'selected' : '' ?> value="Divorced">Divorced</option>
													<option <?= $user[0]->civilStatus=="Annulled" ? 'selected' : '' ?> value="Annulled">Annulled</option>
													<option <?= $user[0]->civilStatus=="Widower" ? 'selected' : '' ?> value="Widower">Widower</option>
													<option <?= $user[0]->civilStatus=="Single Parent" ? 'selected' : '' ?> value="Single Parent">Single Parent</option>	
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-header">Address</h3>
									<?php if(isset($user[0]->ownerId)): ?>
										<div class="row">
											<div class="col-sm-3">
												<label for="house-bldg-no">House No./Bldg No.</label>
												<input type="text" class="form-control" name="house-bldg-no" value="<?= $user[0]->houseBldgNo ?>">
											</div>
											<div class="col-sm-3">
												<label for="bldg-name">Building Name</label>
												<input type="text" class="form-control" name="bldg-name" value="<?= $user[0]->bldgName ?>">
											</div>
											<div class="col-sm-3">
												<label for="unit-no">Unit Number</label>
												<input type="text" class="form-control" name="unit-no" value="<?= $user[0]->unitNum ?>">
											</div>
											<div class="col-sm-3">
												<label for="street">Street</label>
												<input type="text" class="form-control" name="street" value="<?= $user[0]->street ?>">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<label for="barangay">Barangay</label>
												<input type="text" class="form-control" name="barangay" value="<?= $user[0]->barangay ?>">
											</div>
											<div class="col-sm-3">
												<label for="subdivision">Subdivision</label>
												<input type="text" class="form-control" name="subdivision" value="<?= $user[0]->subdivision ?>">
											</div>
											<div class="col-sm-3">
												<label for="city-municipality">City/Municipality</label>
												<input type="text" class="form-control" name="city-municipality" value="<?= $user[0]->cityMunicipality ?>">
											</div>
											<div class="col-sm-3">
												<label for="province">Province</label>
												<input type="text" class="form-control" name="province" value="<?= $user[0]->province ?>">
											</div>
										</div>
									<?php else: ?>
										<div class="row">
											<div class="col-sm-3">
												<label for="house-bldg-no">House No./Bldg No.</label>
												<input type="text" class="form-control" name="house-bldg-no" value="">
											</div>
											<div class="col-sm-3">
												<label for="bldg-name">Building Name</label>
												<input type="text" class="form-control" name="bldg-name" value="">
											</div>
											<div class="col-sm-3">
												<label for="unit-no">Unit Number</label>
												<input type="text" class="form-control" name="unit-no" value="">
											</div>
											<div class="col-sm-3">
												<label for="street">Street</label>
												<input type="text" class="form-control" name="street" value="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<label for="barangay">Barangay</label>
												<input type="text" class="form-control" name="barangay" value="">
											</div>
											<div class="col-sm-3">
												<label for="subdivision">Subdivision</label>
												<input type="text" class="form-control" name="subdivision" value="">
											</div>
											<div class="col-sm-3">
												<label for="city-municipality">City/Municipality</label>
												<input type="text" class="form-control" name="city-municipality" value="">
											</div>
											<div class="col-sm-3">
												<label for="province">Province</label>
												<input type="text" class="form-control" name="province" value="">
											</div>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-header">Contact Details</h3>
									<?php if(isset($user[0]->ownerId)): ?>
										<div class="row">
											<div class="col-sm-3">
												<label for="contact-number">Contact Number</label>
												<input type="text" class="form-control" name="contact-number" value="<?= $user[0]->contactNum ?>">
											</div>
											<div class="col-sm-3">
												<label for="telephone-number">Telephone Number (Landline)</label>
												<input type="text" class="form-control" name="telephone-number" value="<?= $user[0]->telNum ?>">
											</div>
										</div>
									<?php else: ?>
										<div class="row">
											<div class="col-sm-3">
												<label for="contact-number">Contact Number</label>
												<input type="text" class="form-control" name="contact-number" value="">
											</div>
											<div class="col-sm-3">
												<label for="telephone-number">Telephone Number (Landline)</label>
												<input type="text" class="form-control" name="telephone-number" value="">
											</div>
										</div>
									<?php endif; ?>
									<h3 class="page-header">Others</h3>
									<?php if(isset($user[0]->ownerId)): ?>
										<div class="row">
											<div class="col-sm-3">
												<label for="business-area">Business Area (in sq. m.)</label>
												<input type="text" class="form-control" name="business-area" value="<?= $user[0]->businessArea ?>">
											</div>
											<div class="col-sm-3">
												<label for="num-of-employees">Number of Employees Residing</label>
												<input type="text" class="form-control" name="num-of-employees" value="<?= $user[0]->numOfEmployeesLGU ?>">
											</div>
										</div>
									<?php 	else: ?>
										<div class="row">
											<div class="col-sm-3">
												<label for="business-area">Business Area (in sq. m.)</label>
												<input type="text" class="form-control" name="business-area" value="">
											</div>
											<div class="col-sm-3">
												<label for="num-of-employees">Number of Employees Residing</label>
												<input type="text" class="form-control" name="num-of-employees" value="">
											</div>
										</div>
									<?php 	endif; ?>
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
<!-- </body> -->