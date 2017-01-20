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

				<div class="panel panel-primary">
					<div class="panel-heading">
						Manage Business Address
					</div>
					<div class="panel-body">
						<form action="<?php echo base_url(); ?>profile/save_business_address" method="post" data-parsley-validate="" onsubmit="return confirm('Is this final? Once submitted, address cannot be changed.')">
							<div class="row">
								<div class="col-sm-12">
									<h3>Business Address</h3>
									<small>Manage your business addresses here</small>
									<hr>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="business-address-name">Address Name</label>
												<input type="text" required name="business-address-name" class="form-control" placeholder="i.e.: My business at platero, etc.">
											</div>
										</div>

									</div>
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
									<div class="row">
										<div class="col-sm-4 col-sm-offset-4">
											<div class="form-group">
												<button id="submit-address" class="btn btn-success btn-block">Add Address</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- /.panel-body -->
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Your Business Addresses
					</div>
					<div class="panel-body">
						<div class="row">

							<?php foreach ($business_addresses as $address): ?>
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="business-address-name">Address Name</label>
												<h5><?= $address->addressName ?></h5>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="house-bldg-no">House No./Bldg No.</label>
												<h5><?= $address->houseBldgNum ?></h5>
											</div>

										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="bldg-name">Building Name</label>
												<h5><?= $address->bldgName ?></h5>
											</div>

										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="unit-no">Unit Number</label>
												<h5><?= $address->unitNum ?></h5>
											</div>

										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="street">Street</label>
												<h5><?= $address->street ?></h5>
											</div>

										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="barangay">Barangay</label>
												<h5><?= $address->barangay ?></h5>
											</div>

										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="subdivision">Subdivision</label>
												<h5><?= $address->subdivision ?></h5>
											</div>

										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="city-municipality">City/Municipality</label>
												<h5><?= $address->cityMunicipality ?></h5>
											</div>

										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="province">Province</label>
												<h5><?= $address->province ?></h5>
											</div>
										</div>
									</div>
									<hr>
								</div>
							<?php endforeach ?>

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