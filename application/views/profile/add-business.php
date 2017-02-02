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
												<input type="text" required name="president-treasurer-name" id="president-treasurer-name" class="form-control" placeholder="Last Name, First Name, Middle Name">
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
												<label for="male-employees">No. of Male Employees</label>
												<input type="text" class="form-control" data-parsley-type="digits" name="male-employees" required name="employee-male">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="female-employees">No. of Female Employee</label>
												<input type="text" class="form-control" data-parsley-type="digits" name="female-employees" required name="employee-female">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="pwd-employees">No. of PWD Employee</label>
												<input type="text" class="form-control" data-parsley-type="digits" name="pwd-employees" required name="employee-pwd">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label for="lgu-employees">No. of Employees Residing in LGU</label>
												<input type="text" id="lgu-employees" name='lgu-employees' required data-parsley-type='digits' class='form-control'>
											</div>
										</div>
									</div>
									<h4 class="panel-header">Business Details</h4>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="business-name">Business Name</label>
												<input type="text" name="business-name" required id="business-name" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="company-name">Company Name</label>
												<input type="text" id='company-name' required name='company-name' class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="trade-name">Trade/Franchise Name</label>
												<input type="text" id="trade-name" required name="trade-name" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="signage-name">Signage Name</label>
												<input type="text" id="signage=name" required name="signage-name" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="nature-of-business">Nature of Business</label>
												<input type="text" id="nature-of-business" required name="nature-of-business" class="form-control">
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
												<label for="date-of-operation">Date of Operation/Date Started</label>
												<div class="input-group date">
													<input type="text" required id="date-of-operation" name="date-of-operation" class="form-control" data="DateTimePicker" />  <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="business-area">Business Area (in sq. m.)</label>
												<input type="text" required name="business-area" id="business-area" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="business-desc">Description of Business</label>
												<textarea name="business-desc" required id="business-desc" rows="1" class='form-control'></textarea>
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
												<select name="barangay" required id="barangay" class="form-control">
													<option disabled selected>Select Barangay</option>
													<option value=<?= $this->encryption->encrypt("Biñan")?>>Biñan</option>
													<option value=<?= $this->encryption->encrypt("Bungahan")?>>Bungahan</option>
													<option value=<?= $this->encryption->encrypt("Canlalay")?>>Canlalay</option>
													<option value=<?= $this->encryption->encrypt("Casile")?>>Casile</option>
													<option value=<?= $this->encryption->encrypt("Dela Paz")?>>Dela Paz</option>
													<option value=<?= $this->encryption->encrypt("Ganado")?>>Ganado</option>
													<option value=<?= $this->encryption->encrypt("Langkiwa")?>>Langkiwa</option>
													<option value=<?= $this->encryption->encrypt("Loma")?>>Loma</option>
													<option value=<?= $this->encryption->encrypt("Malaban")?>>Malaban</option>
													<option value=<?= $this->encryption->encrypt("Malamig")?>>Malamig</option>
													<option value=<?= $this->encryption->encrypt("Mampalasan")?>>Mampalasan</option>
													<option value=<?= $this->encryption->encrypt("Platero")?>>Platero</option>
													<option value=<?= $this->encryption->encrypt("Poblacion")?>>Poblacion</option>
													<option value=<?= $this->encryption->encrypt("San Antonio")?>>San Antonio</option>
													<option value=<?= $this->encryption->encrypt("San Francisco (Halang)")?>>San Francisco (Halang)</option>
													<option value=<?= $this->encryption->encrypt("San Jose")?>>San Jose</option>
													<option value=<?= $this->encryption->encrypt("San Vicente")?>>San Vicente</option>
													<option value=<?= $this->encryption->encrypt("Santo Domingo")?>>Santo Domingo</option>
													<option value=<?= $this->encryption->encrypt("Soro-Soro")?>>Soro-Soro</option>
													<option value=<?= $this->encryption->encrypt("Sto. Niño")?>>Sto. Niño</option>
													<option value=<?= $this->encryption->encrypt("Sto. Tomas (Calabuso)")?>>Sto. Tomas (Calabuso)</option>
													<option value=<?= $this->encryption->encrypt("Timbao")?>>Timbao</option>
													<option value=<?= $this->encryption->encrypt("Tubigan")?>>Tubigan</option>
													<option value=<?= $this->encryption->encrypt("Zapote")?>>Zapote</option>
												</select>
												<!-- <input type="text" required class="form-control" name="barangay" value=""> -->
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="city-municipality">City/Municipality</label>
												<h4>Biñan City</h4>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="province">Province</label>
												<h4>Laguna</h4>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="PIN">Zip/Postal Code</label>
												<input type="text" required data-parsley-type='digits' name="PIN" id="PIN" class="form-control">
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

									<div class="row">
										<div class="col-sm-12">
											<h4>In case of emergency</h4>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="contact-name">Contact Person Name</label>
												<input type="text" required name="emergency-contact-name" class="form-control">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="emergency-tel-cel-no">Tel No./Cel No.</label>
												<input type="text" required name="emergency-tel-cel-no" data-parsley-type="digits" class="form-control">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="emergency-email">Email Address</label>
												<input type="email" required name="emergency-email" class="form-control">
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