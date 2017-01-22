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
				<?php if($this->session->flashdata('message')): ?>
					<div class="alert alert-info"> <!--bootstrap message div-->
						<?=$this->session->flashdata('message')?>
					</div>
				<?php endif; ?>

				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3>Manage Businesses</h3>
					</div>
					<div class="panel-body">
						<form action="<?php echo base_url(); ?>profile/save_business" method="post" data-parsley-validate="">
							<?php if($this->session->flashdata('ft')): ?>
								<input type="hidden" name="ft" value="1">
							<?php endif; ?>
							<div class="row">
								<div class="col-sm-12">
									<h4 class="panel-header">Employee Details</h4>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="owner">Business Owner</label>
												<select name="business-owner" required id="business-owner" class="form-control">
													<option disabled selected>Select Owner</option>
													<?php foreach ($owner as $o): ?>
														<option value="<?= $this->encryption->encrypt($o->ownerId) ?>"><?= $o->firstName." ".$o->lastName ?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="form-group">
												<label for="president-treasurer-name">Name of President/Treasurer of Corporation</label>
												<input type="text" name="president-treasurer-name" id="president-treasurer-name" class="form-control" placeholder="Last Name, First Name, Middle Name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="pollution-control-officer">Pollution Control Officer</label>
												<input type="text" class="form-control" required name="pollution-control-officer">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="male-employees">Total Male Employees</label>
												<input type="text" class="form-control" data-parsley-type="digits" name="male-employees" required name="employee-male">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="female-employees">Total Female Employee</label>
												<input type="text" class="form-control" data-parsley-type="digits" name="female-employees" required name="employee-female">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="pwd-employees">Total PWD Employee</label>
												<input type="text" class="form-control" data-parsley-type="digits" name="pwd-employees" required name="employee-pwd">
											</div>
										</div>
									</div>
									<h4 class="panel-header">Business Details</h4>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="business-name">Business Name</label>
												<input type="text" name="business-name" id="business-name" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="company-name">Company Name</label>
												<input type="text" id='company-name' name='company-name' class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="trade-name">Trade/Franchise Name</label>
												<input type="text" id="trade-name" name="trade-name" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="signage-name">Signage Name</label>
												<input type="text" id="signage=name" name="signage-name" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="nature-of-business">Nature of Business</label>
												<input type="text" id="nature-of-business" name="nature-of-business" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="organization-type">Organization Type</label>
												<select required name="organization-type" id="organization-type" class="form-control">
													<option selected disabled>Select Organzation Type</option>
													<option value="Single">Single</option>
													<option value="Partnership">Partnership</option>
													<option value="Corporation">Corporation</option>
													<option value="Cooperative">Cooperative</option>
												</select>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="corporation-name">Corporation Name</label>
												<input type="text" id="corporation-name" disabled name="corporation-name" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="date-of-operation">Date of Operation</label>
												<div class="input-group date">
													<input type="text" id="date-of-operation" name="date-of-operation" class="form-control" data="DateTimePicker" />  <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="business-area">Business Area (in sq. m.)</label>
												<input type="text" name="business-area" id="business-area" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="business-desc">Description of Business</label>
												<textarea name="business-desc" id="business-desc" rows="1" class='form-control'></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h4 class="page-header">Business Address</h4>

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
												<label for="subdivision">Subdivision</label>
												<input type="text" required class="form-control" name="subdivision" value="">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="barangay">Barangay</label>
												<input type="text" required class="form-control" name="barangay" value="">
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
									
									<h4 class="page-header">Contact Details</h4>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="contact-number">Email</label>
												<input type="text" required class="form-control" name="email" value="">
											</div>

										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="telephone-number">Telephone Number (Landline)</label>
												<input type="text" class="form-control" name="telephone-number" value="">
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-sm-4 col-sm-offset-4">
											<input type="submit" value="Submit" class="btn btn-success btn-block">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							
							<div class="row">
								
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