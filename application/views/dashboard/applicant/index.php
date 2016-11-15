<body>
	<div id="content-container">
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header"><?= $user[0]->firstName . " " . $user[0]->lastName ?></h1>

						<div class="panel panel-default">
							<div class="panel-heading">
								Application Form
								<button class="btn btn-success" id="btn-edit-info"><i class="fa fa-plus-circle" aria-hidden="true"></i> New</button>
							</div>
							<div class="panel-body">
							<?php if(sizeof($application)>0): ?>
								<table class="table table-bordered">
									<th class="text-center">Reference Number</th>
									<th class="text-center">Details</th>
									<th class="text-center">Actions</th>
									<tbody>
										<tr>
											<td style="width:30%;"><p class="lead text-center text-danger"><?= $application[0]->referenceNum ?></p></td>
											<td style="width:45%;" class='text-center'>
												<div class="row">
													<div class="col-sm-12">
														<span>Status: <strong><?= $application[0]->status ?></strong></span>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<span>Business Name: <strong><?= $application[0]->businessName?></strong></span>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-4" style="padding-right:0;">
														<span class="text-muted"> 40% Complete</span>
													</div>
													<div class="col-sm-8" style="padding-left:0;">
														<div class="progress progress-striped active">
															<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
																<span class="sr-only">40%</span>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td style="width:25%;">
												<div class="block text-center">
													<a href="#" class="btn btn-primary">View Details</a>
													<a href="#" class="btn btn-danger">Delete</a>
												</div>

											</td>
										</tr>
									</tbody>
								</table>
							<?php else: ?>
								<h2 class="text-center text-muted"><i class="fa fa-hand-spock-o fa-5x" aria-hidden="true"></i></h2>
								<h2 class="text-center text-muted">Nothing to display at the moment.</h2>
							<?php endif; ?>
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
	<!-- Page Content -->
</body>

<?php if($this->session->flashdata('message')): ?>
	<script>
		alert("<?= $this->session->flashdata('message'); ?>");
	</script>
<?php endif; ?>