<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?php echo base_url(); ?>dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> 
      <a href="<?php echo base_url(); ?>dashboard/incoming_applications">Incoming Applications</a> 
      <a href="#" class="current">View</a>
    </div>
    <!--End-breadcrumbs-->
    <h1><?= $application[0]->businessName ?></h1>
    <hr>
  </div>

  <div class="container-fluid">

    <pre>
      <?php print_r($application); ?>
      <?php print_r($owner); ?>
    </pre>

    <!-- End Container Fluid -->
  </div>

  
</div>
