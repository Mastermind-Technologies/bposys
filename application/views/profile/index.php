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
						Your Information
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="panel-header">Basic Information</h3>
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label for="fname">First Name</label>
											<h5><?= $user->get_firstName() ?></h5>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="mname">Middle Name</label>
											<h5><?= $user->get_middleName() ?></h5>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="lname">Last Name</label>
											<h5><?= $user->get_lastName() ?></h5>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="suffix">Suffix</label>
											<h5><?= $user->get_suffix()==null ? "N/A" : $user->get_suffix() ?></h5>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<p>
												<label for="gender">Gender</label>
												<h5><?= $user->get_gender() ?></h5>
											</p>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="">Birth date</label>
											<h5><?= $user->get_birthDate() ?></h5>
										</div>

									</div>
									<div class="col-sm-3">
										<label for="civil-staus">Civil Status</label>
										<h5><?= $user->get_civilStatus() ?></h5>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-header">Address</h3>
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label for="house-bldg-no">House No./Bldg No.</label>
											<h5><?= $user->get_houseBldgNo() ?></h5>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="bldg-name">Building Name</label>
											<h5><?= $user->get_bldgName() ?></h5>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="unit-no">Unit Number</label>
											<h5><?= $user->get_unitNum() ?></h5>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="street">Street</label>
											<h5><?= $user->get_street() ?></h5>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label for="barangay">Barangay</label>
											<h5><?= $user->get_barangay() ?></h5>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="subdivision">Subdivision</label>
											<h5><?= $user->get_subdivision() ?></h5>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="city-municipality">City/Municipality</label>
											<h5><?= $user->get_cityMunicipality() ?></h5>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="province">Province</label>
											<h5><?= $user->get_province() ?></h5>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-header">Contact Details</h3>
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label for="contact-number">Contact Number</label>
											<h5><?= $user->get_contactNum() ?></h5>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="telephone-number">Telephone Number (Landline)</label>
											<h5><?= $user->get_telNum() ?></h5>
										</div>
									</div>
								</div>
								<h3 class="page-header">Others</h3>
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label for="business-area">Business Area (in sq. m.)</label>
											<h5><?= $user->get_businessArea() ?></h5>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="num-of-employees">Number of Employees Residing</label>
											<h5><?= $user->get_numOfEmployeesLGU() ?></h5>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-3 col-sm-offset-3">
										<a href="<?php echo base_url() ?>profile/edit" class="btn btn-warning btn-block">Edit</a>
									</div>
									<div class="col-sm-3">
										<a href="<?php echo base_url() ?>dashboard" class="btn btn-danger btn-block">Cancel</a>
									</div>
								</div>
							</div>
						</div>
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