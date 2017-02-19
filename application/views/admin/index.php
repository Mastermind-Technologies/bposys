<title>BPOSys | <?= $title ?></title>

<body>
	<div id="content" style="padding-top: 20px; padding-left: 20px">
		<div class="container-fluid">
			<div class="quick-actions_homepage">
	      <ul class="quick-actions">
				<li class="bg_lo"> <a href="<?php echo base_url(); ?>Bposys_admin/users/"> <i class="fa fa-user fa-2x" aria-hidden="true"></i>
					<span class="label label-success badge-process">2</span><br><span>Total Employee Accounts</span> </a> </li>
					<li class="bg_c"> <a href="<?php echo base_url(); ?>Bposys_admin/users/"> <i class="fa fa-users fa-2x" aria-hidden="true"></i>
					<span class="label label-info badge-completed">3</span><br>Total Users</a> </li>
					<!-- <li class="bg_ly"> <a href="<?php echo base_url(); ?>dashboard/finalize_applications"> <i class="fa fa-hourglass fa-2x" aria-hidden="true"></i>
					<span class="label label-important">4</span><br><span>Finalization</span> </a> </li>
					<li class="bg_ls"> <a href="<?php echo base_url(); ?>dashboard/issued_applications"> <i class="fa fa-check-square fa-2x" aria-hidden="true"></i>
					<span class="label label-info badge-issued">5</span><br>Issued</a> </li> -->
				</ul>
		</div>
	</div>
</body>

<?php if($this->session->flashdata('message')): ?>
	<script>
		alert("<?= $this->session->flashdata('message'); ?>");
	</script>
<?php endif; ?>
