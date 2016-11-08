<body class="content-container">
	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><?= $user[0]->firstName . " " . $user[0]->lastName ?></h1>

					<div class="panel panel-default">
						<div class="panel-heading">
							Application Form
							<button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="panel-header">Basic Information</h3>
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<label for="static">First Name</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Middle Name</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Last Name</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Suffix</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Gender</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Birthdate</label>
											<p name="static" class="form-control-static">email@example.com</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-header">Address</h3>
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<label for="static">House No./Bldg. No.</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Building Name</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Unit Number</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Street</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Barangay</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Subdivision</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">City/Municipality</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Province</label>
											<p name="static" class="form-control-static">email@example.com</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-header">Contact Details</h3>
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<label for="static">Contact Number</label>
											<p name="static" class="form-control-static">email@example.com</p>
											<label for="static">Telephone Number (Landline)</label>
											<p name="static" class="form-control-static">email@example.com</p>
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
	<!-- /#page-wrapper -->
</div>
</body>

<?php if($this->session->flashdata('message')): ?>
	<script>
		alert("<?= $this->session->flashdata('message'); ?>");
	</script>
<?php endif; ?>