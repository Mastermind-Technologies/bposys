<?php foreach ($applications as $application): ?>
	<?php if ($application->get_status() != "Cancelled"): ?>
		<tr>
			<td style="width:30%;"><p style="margin-top:13%" id="referenceNumber" class="lead text-center text-danger"><?= $this->encryption->decrypt($application->get_referenceNum()) ?></p></td>
			<td style="width:45%;">
				<?php if ($application->get_status() == "Draft"): ?>
					<div style="margin-top:2%" class="row">
						<div class="col-sm-12">
							<label for="">Draft Application</label>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<span>Last Edited: <strong><?= date('F j, Y', strtotime($application->get_LastEdited())) ?></strong></span>
						</div>
					</div>
				<?php else: ?>
					<div style="margin-top:2%" class="row">
						<div class="col-sm-12">
							<span>Business Name: <strong><?= $application->get_businessName()?></strong></span>

						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<span>Status: <?php $status = $application->get_status();
								if($status == "Expired")
								{
									echo "<span class='label label-danger' style='font-size:13px'>><$status</span>";
								}
								else
								{
									echo "<span class='label label-info' style='font-size:14px'>$status</span>";
							} ?>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<span>Application Type: <span class='label label-info' style='font-size:14px'><?= $application->get_applicationType() ?></span></span>
						</div>
					</div>
				<?php endif ?>
			</td>
			<td style="width:25%;">
				<div style="margin-top:15%" class="block text-center">
					<?php if ($application->get_status() == "Draft"): ?>
						<a href="<?php echo base_url(); ?>dashboard/draft_application/<?= str_replace(['/','+','='], ['-','_','='], $application->get_referenceNum()) ?>" class="btn btn-success">Continue Draft</a>
						<button class="btn btn-danger btn-delete" id="<?php echo base_url(); ?>dashboard/delete_draft/<?= str_replace(['/','+','='], ['-','_','='], $application->get_referenceNum()) ?>">Delete</button>
					<?php else: ?>
						<a href="<?php echo base_url('form/view/'.bin2hex($this->encryption->encrypt($application->get_applicationId().'|'.$this->encryption->decrypt($application->get_referenceNum()), $custom_encrypt))); ?>"  id="btn-view-details" class="btn btn-primary">View Details</a>
						<?php if ($application->get_status() != "Active" && $application->get_status() != "Expired" && $application->get_applicationType() != 'Renew'): ?>
							<button id="<?php echo base_url('dashboard/cancel_application/'.bin2hex($this->encryption->encrypt($this->encryption->decrypt($application->get_referenceNum()),$custom_encrypt))) ?>" value="Cancel" class="btn btn-danger btn-cancel">Cancel</button>
						<?php elseif($application->get_status() == "Expired"): ?>
							<a type="button" class="btn btn-warning" href="<?php echo base_url('form/renew/'.bin2hex($this->encryption->encrypt($this->encryption->decrypt($application->get_applicationId()).'|'.$this->encryption->decrypt($application->get_referenceNum()), $custom_encrypt))); ?>">Renew</a>
						<?php endif ?>
					<?php endif ?>
				</div>
			</td>
		</tr>
	<?php endif ?>
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
	$('.btn-cancel').click(function(){
		var r = confirm('Are you sure you want to cancel this application?');
		if(r==true)
			window.location = this.id;
		else
			return false;
	});
	$('.btn-delete').click(function(){
		console.log('test');
		var r = confirm('Are you sure you want to delete this drafted application?');
		if(r==true)
			window.location = this.id;
		else
			return false;
	});
</script>
