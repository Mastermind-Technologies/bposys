<?php foreach ($applications as $application): ?>
	<tr>
		<td style="width:30%;"><p id="referenceNumber" class="lead text-center text-danger"><?= $this->encryption->decrypt($application->get_referenceNum()) ?></p></td>
		<td style="width:45%;" class='text-center'>
			<div class="row">
				<div class="col-sm-12">
					<span>Business Name: <strong><?= $application->get_businessName()?></strong></span>
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<span>Status: <strong><?= $application->get_status() ?></strong></span>
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
				<a href="<?php echo base_url('dashboard/view_application'); ?>"  id="btn-view-details" class="btn btn-primary">View Details</a>
				<a href="#" class="btn btn-danger">Delete</a>
			</div>

		</td>
	</tr>
<?php endforeach; ?>
<input type="hidden" id="hidden-notif-count" value="<?= isset($notifications) ? $notifications : "" ?>">
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> -->
<script>
	$(document).ready(function(){
		if($("#hidden-notif-count").val() != "")
		{
			$(".fa-bell").html("<span class=notif-count>"+$("#hidden-notif-count").val()+"</span>");
		}
	});
</script>