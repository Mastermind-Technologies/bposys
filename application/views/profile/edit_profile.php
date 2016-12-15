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
						<form action="<?php echo base_url(); ?>profile/save_edit_info" method="post" data-parsley-validate="">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="panel-header">Basic Information</h3>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="fname">First Name</label>
												<input type="text" required class="form-control" name="fname" value="<?= $user->get_firstName() ?>">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="mname">Middle Name</label>
												<input type="text" class="form-control" name="mname" value="<?= $user->get_middleName() ?>">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="lname">Last Name</label>
												<input type="text" required class="form-control" name="lname" value="<?= $user->get_lastName() ?>">
											</div>

										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="suffix">Suffix</label>
												<input type="text" class="form-control" name="suffix" value="<?= $user->get_suffix() ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<p>
													<label for="gender">Gender</label>
													<div class="btn-group" style="margin-top:-10px;" role="group" aria-label="gender">
														<button type="button" class="btn btn-default <?= $user->get_gender()=='Male' ? 'active' : '' ?>" id="btn-male">Male</button>
														<button type="button" class="btn btn-default <?= $user->get_gender()=='Female' ? 'active' : '' ?>" id="btn-female">Female</button>
														<input type="hidden" name="gender" id="hidden-gender" value="<?= $user->get_gender()=='Male' ? 'Male' : 'Female' ?>">
													</div>
												</p>
											</div>
											
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="">Birth date</label>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<div class="input-group date">
																<input type="text" required id="datetimepicker1" name="birth-date" class="form-control" data="DateTimePicker" value="<?= $user->get_birthDate() ?>" />  <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
															</div>
														</div>
													</div>
												</div>
												<script>
													$(document).ready(function(){
														$('#datetimepicker1').datetimepicker({
															format: 'MM/DD/YYYY',
															viewMode: 'years'
														});
													});
												</script>
											</div>

										</div>
										<div class="col-sm-3">
											<label for="civil-staus">Civil Status</label>
											<div class="form-group">
												<select class="form-control" required name="civil-status" id="civil-status">
													<option <?= $user->get_civilStatus()=="" ? 'selected' : '' ?> disabled select>Civil Status</option>
													<option <?= $user->get_civilStatus()=="Single" ? 'selected' : '' ?> value="Single">Single</option>
													<option <?= $user->get_civilStatus()=="Married" ? 'selected' : '' ?> value="Married">Married</option>
													<option <?= $user->get_civilStatus()=="Separated" ? 'selected' : '' ?> value="Separated">Separated</option>
													<option <?= $user->get_civilStatus()=="Widowed" ? 'selected' : '' ?> value="Widowed">Widowed</option>
													<option <?= $user->get_civilStatus()=="Divorced" ? 'selected' : '' ?> value="Divorced">Divorced</option>
													<option <?= $user->get_civilStatus()=="Annulled" ? 'selected' : '' ?> value="Annulled">Annulled</option>
													<option <?= $user->get_civilStatus()=="Widower" ? 'selected' : '' ?> value="Widower">Widower</option>
													<option <?= $user->get_civilStatus()=="Single Parent" ? 'selected' : '' ?> value="Single Parent">Single Parent</option>	
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-header">Address</h3>
									<?php if(is_subclass_of($user, 'User')): ?>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="house-bldg-no">House No./Bldg No.</label>
													<input type="text" required class="form-control" name="house-bldg-no" value="<?= $user->get_houseBldgNo() ?>">
												</div>

											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="bldg-name">Building Name</label>
													<input type="text" required class="form-control" name="bldg-name" value="<?= $user->get_bldgName() ?>">
												</div>

											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="unit-no">Unit Number</label>
													<input type="text" required class="form-control" name="unit-no" value="<?= $user->get_unitNum() ?>">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="street">Street</label>
													<input type="text" required class="form-control" name="street" value="<?= $user->get_street() ?>">
												</div>
												
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="barangay">Barangay</label>
													<input type="text" required class="form-control" name="barangay" value="<?= $user->get_barangay() ?>">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="subdivision">Subdivision</label>
													<input type="text" required class="form-control" name="subdivision" value="<?= $user->get_subdivision() ?>">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="city-municipality">City/Municipality</label>
													<input type="text" required class="form-control" name="city-municipality" value="<?= $user->get_cityMunicipality() ?>">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="province">Province</label>
													<input type="text" required class="form-control" name="province" value="<?= $user->get_province() ?>">
												</div>
												
											</div>
										</div>
									<?php else: ?>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="house-bldg-no">House No./Bldg No.</label>
													<input type="text" required class="form-control" name="house-bldg-no" value="">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="bldg-name">Building Name</label>
													<input type="text" required class="form-control" name="bldg-name" value="">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="unit-no">Unit Number</label>
													<input type="text" required class="form-control" name="unit-no" value="">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="street">Street</label>
													<input type="text" required class="form-control" name="street" value="">
												</div>
												
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="barangay">Barangay</label>
													<input type="text" required class="form-control" name="barangay" value="">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="subdivision">Subdivision</label>
													<input type="text" required class="form-control" name="subdivision" value="">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="city-municipality">City/Municipality</label>
													<input type="text" required class="form-control" name="city-municipality" value="">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="province">Province</label>
													<input type="text" required class="form-control" name="province" value="">
												</div>
												
											</div>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-header">Contact Details</h3>
									<?php if(is_subclass_of($user, 'User')): ?>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="contact-number">Contact Number</label>
													<input type="text" required class="form-control" name="contact-number" value="<?= $user->get_contactNum() ?>">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="telephone-number">Telephone Number (Landline)</label>
													<input type="text" class="form-control" name="telephone-number" value="<?= $user->get_telNum() ?>">
												</div>
												
											</div>
										</div>
									<?php else: ?>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="contact-number">Contact Number</label>
													<input type="text" required class="form-control" name="contact-number" value="">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="telephone-number">Telephone Number (Landline)</label>
													<input type="text" class="form-control" name="telephone-number" value="">
												</div>
												
											</div>
										</div>
									<?php endif; ?>
									<h3 class="page-header">Others</h3>
									<?php if(is_subclass_of($user, 'User')): ?>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="business-area">Business Area (in sq. m.)</label>
													<input type="text" required class="form-control" name="business-area" value="<?= $user->get_businessArea() ?>">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="num-of-employees">Number of Employees Residing</label>
													<input type="text" required class="form-control" name="num-of-employees" value="<?= $user->get_numOfEmployeesLGU() ?>">
												</div>
												
											</div>
										</div>
									<?php 	else: ?>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label for="business-area">Business Area (in sq. m.)</label>
													<input type="text" required class="form-control" name="business-area" value="">
												</div>
												
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label for="num-of-employees">Number of Employees Residing</label>
													<input type="text" required class="form-control" name="num-of-employees" value="">
												</div>
												
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