<body class="content-container"> -->
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
							Renew Application
						</div>
						<div class="panel-body">
							<!-- action="<?php echo base_url() ?>dashboard/submit_application" -->
							<form id="new_application_form" method="post" data-parsley-validate="">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="panel-header">Business Permit Renewal Form</h3>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<span><strong>Application Number:</strong> <?= $this->encryption->decrypt($application->get_referenceNum()) ?></span>
												</div>
												<div class="col-sm-6">
													<span><strong>Application Date:</strong> <?= date('F j, Y') ?></span>
												</div>
											</div>	
										</div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6"><strong>Business Name:</strong> <?= $application->get_businessName() ?></div>
												<div class="col-sm-6"><strong>Tel. No.:</strong> <?= $application->get_telNum() ?></div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<span><strong>Business Address:</strong> <?= 
														$application->get_houseBldgNum().", ".
														$application->get_unitNum().", ".
														$application->get_street().", ".
														$application->get_subdivision().", ".
														$application->get_barangay().", ".
														$application->get_cityMunicipality().", ".
														$application->get_province() ?></span>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-sm-6"><span><strong>Owner's Name: </strong><?= $owner->get_lastName().", ".$owner->get_firstName()." (".$owner->get_middleName().") "?></span></div>
													<div class="col-sm-6"><span><strong>Tel No.:</strong> <?= $owner->get_telNum() ?></span></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">

													<div class="col-sm-12">
														<span><strong>Owner's Address: </strong><?= 
															$owner->get_houseBldgNo().", ".
															$owner->get_unitNum().", ".
															$owner->get_bldgName().", ".
															$owner->get_street().", ".
															$owner->get_subdivision().", ".
															$owner->get_barangay().", ".
															$owner->get_cityMunicipality().", ".
															$owner->get_province() ?>
														</span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6">
														<span><strong>Position: </strong><?= $owner->get_position() ?></span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">

													<div class="col-sm-6">
														<span><strong>Paid Up to: </strong><?= "???" ?></span>
													</div>
													<div class="col-sm-6">
														<span><strong>Date Started: </strong><?= $application->get_dateStarted() ?></span>
													</div>
												</div>
											</div>
											
											<table class="table table-bordered">
												<thead>
													<tr>
														<td><strong>LINE OF BUSINESS</strong></td>
														<td><strong>LAST CAPITAL/GROSS DECLARED</strong></td>
														<td><strong>No. of Units</strong></td>
														<td><strong>GROSS SALES/RECEIPTS</strong></td>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($application->get_businessActivities() as $activity): ?>
														<tr>
															<td><?= $activity->lineOfBusiness ?></td>
															<td><?= $activity->capitalization ?></td>
															<td><?= $activity->numOfUnits ?></td>
															<td><?= "???" ?></td>
														</tr>
													<?php endforeach ?>
												</tbody>
											</table>
											<hr>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6">
														<span>
															<strong>Lessor Name: </strong><?= isset($application->get_lessors()->firstName)? 
															$application->get_lessors()->lastName.", ".
															$application->get_lessors()->firstName." (".
															$application->get_lessors()->middleName.")" 
															: "" ?>
														</span>
													</div>
													<div class="col-sm-6">
														<span>
															<strong>Monthly Rental: </strong><?= $application->get_lessors()->monthlyRental?>
														</span>
													</div>
												</div>	
											</div>
											
											<div class="form-group">
												<div class="row">
													<div class="col-sm-12">
														<span>
															<strong>Lessor Address: </strong><?= 
															$application->get_lessors()->address.", ".
															$application->get_lessors()->subdivision.", ".
															$application->get_lessors()->barangay.", ".
															$application->get_lessors()->cityMunicipality.", ".
															$application->get_lessors()->province ?>
														</span>
													</div>
												</div>
											</div>
											
											<div class="row">
												<hr>
												<div class="row">
													<div class="col-sm-4 col-sm-offset-4">
														<button type="submit" id="btn-submit" class="btn btn-primary btn-block"><i id="fa-submit" class="fa fa-check" aria-hidden="true"></i> Request Renewal</button>
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
<!-- </body>