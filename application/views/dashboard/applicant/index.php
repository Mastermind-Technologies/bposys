<body>
	<div id="content-container">
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<input type="hidden" value="<?= $user->get_userId() ?>" id="user-id">
						<h1 class="page-header"><?= $user->get_lastName() . ", " . $user->get_firstName() . " (".$user->get_middleName().")" ?></h1>

						<div class="panel panel-primary">
							<div class="panel-heading">
								Application Form
								<button class="btn btn-success" id="btn-edit-info"><i class="fa fa-plus-circle" aria-hidden="true"></i> New</button>
							</div>
							<div class="panel-body">
								<?php if(count($applications)>0): ?>
									<table id="application-table" class="table table-bordered">
										<th class="text-center">Reference Number</th>
										<th class="text-center">Details</th>
										<th class="text-center">Actions</th>
										<tbody id="application-table-body">
											<?php foreach ($applications as $application): ?>
												<?php if ($application->get_status() != "Cancelled"): ?>
													<tr>
														<td style="width:30%;"><p id="referenceNumber" class="lead text-center text-danger"><?= $this->encryption->decrypt($application->get_referenceNum()) ?></p></td>
														<td style="width:45%;" class='text-center'>
															<div class="row">
																<div class="col-sm-12">
																	<span>Business Name: <strong><?= $application->get_BusinessName()?></strong></span>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<span>Status: <?php $status = $application->get_status();
																		if($status == "Expired")
																		{
																			echo "<strong style='color:red'>".$status."</strong>";
																		}
																		else
																		{
																			echo "<strong>".$status."</strong>";
																		} ?>
																	</span>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4" style="padding-right:0;">
																	<span class="text-muted"> 80% Complete</span>
																</div>
																<div class="col-sm-8" style="padding-left:0;">
																	<div class="progress progress-striped">
																		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
																			<span class="sr-only">80%</span>
																		</div>
																	</div>
																</div>
															</div>
														</td>
														<td style="width:25%;">
															<div class="block text-center">
																<a href="<?php echo base_url('form/view/'.bin2hex($this->encryption->encrypt($application->get_applicationId().'|'.$this->encryption->decrypt($application->get_referenceNum()), $custom_encrypt))); ?>"  id="btn-view-details" class="btn btn-primary">View Details</a>
																<button id="<?php echo base_url('dashboard/cancel_application/'.bin2hex($this->encryption->encrypt($this->encryption->decrypt($application->get_referenceNum()),$custom_encrypt))) ?>" value="Cancel" class="btn btn-danger btn-cancel">Cancel</button>
															</div>

														</td>
													</tr>
												<?php endif ?>
											<?php endforeach; ?>
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
