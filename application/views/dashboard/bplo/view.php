<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?php echo base_url(); ?>dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> 
      <?php if ($application->get_status() == "For validation..."): ?>
        <a href="<?php echo base_url(); ?>dashboard/incoming_applications">Incoming Applications</a> 
      <?php elseif ($application->get_status() == "For applicant visit"): ?>
        <a href="<?php echo base_url(); ?>dashboard/pending_applications">Pending Applications</a> 
      <?php endif ?>
      
      <a href="#" class="current">View</a>
    </div>
    <!--End-breadcrumbs-->
    <h1><?= $application->get_businessName() ?></h1>
    <hr>
  </div>

  <div class="container-fluid">

    <pre>
      <?php print_r($application); ?>
      <?php print_r($owner); ?>
    </pre>
    <div class="row text-center">
      <?php if ($application->get_status() == "For validation..."): ?>
        <a href="<?php echo base_url(); ?>dashboard/validate_application/<?= $application->get_referenceNum() ?>" class="btn btn-success">Validate</a>
        <a href="#" class="btn btn-danger btn-lg">Reject</a>
      <?php elseif ($application->get_status() == "For applicant visit"): ?>
        <a href="#" class="btn btn-success">Approve</a>
        <a href="#" class="btn btn-warning btn-lg">Edit information</a>
      <?php endif ?>
    </div>


    <!-- End Container Fluid -->
  </div>


</div>
