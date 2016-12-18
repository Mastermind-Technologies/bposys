<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?php echo base_url(); ?>dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> 
      <a href="<?php echo base_url(); ?>dashboard/incoming_applications">Incoming Applications</a> 
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
    <a href="<?php echo base_url(); ?>dashboard/validate_application/<?= $application->get_referenceNum() ?>" class="btn btn-success">Validate</a>
    <a href="#" class="btn btn-danger btn-lg">Reject</a>
    </div>
    

    <!-- End Container Fluid -->
  </div>

  
</div>
