<title>BPOSys | <?= $title ?></title>

<body>
	<div id="content" style="padding-top: 20px; padding-left: 20px">
		<div class="container-fluid">
			<a class="btn btn-success btn-large" href="<?php echo base_url(); ?>Bposys_admin/add_user/"><i class="fa fa-plus" aria-hidden="true"></i> New User</a>
	    <div class="widget-box">
	      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
	        <h5>Data table</h5>
	      </div>
	      <div class="widget-content nopadding">
	        <table class="table table-bordered data-table">
	          <thead>
	            <tr>
								<th>ID</th>
	              <th>Name</th>
	              <th>Office/Department</th>
	              <th>Actions</th>
	            </tr>
	          </thead>
	          <tbody>
							<!-- SAMPLE -->
							<tr>
								<td>1</td>
								<td>Labay, Billy James S.</td>
								<td>Business Permit and Licensing Office</td>
								<td style="text-align: center"><a href="<?php echo base_url(); ?>Bposys_admin/edit_user/" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>	<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
							</tr>
	            <!-- <?php if (is_array($incoming) || is_object($incoming)): ?>
	             <?php foreach ($incoming as $application): ?>
	              <tr>
	                <td><?= $this->encryption->decrypt($application->get_referenceNum()) ?></td>
	                <td><?= $application->get_businessName() ?></td>
	                <td><a href="<?php echo base_url(); ?>dashboard/view_application/<?= bin2hex($this->encryption->encrypt($application->get_applicationId(), $custom_encrypt)) ?>" class="btn btn-info btn-block">Show Details</a></td>
	              </tr>
	            <?php endforeach; ?>
	          <?php endif ?>
	        </tbody> -->
	      </table>
	    </div>
	  </div>
	</div>

	</div>
</body>

<?php if($this->session->flashdata('message')): ?>
	<script>
		alert("<?= $this->session->flashdata('message'); ?>");
	</script>
<?php endif; ?>
