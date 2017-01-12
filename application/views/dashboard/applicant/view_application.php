<body class="content-container">
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

    <h2>Reference Number: <strong class="text-danger"><?= $this->encryption->decrypt($application->get_referenceNum()) ?></strong></h2>
    <h3>Status: <?php $status = $application->get_status();
      if($status == "Expired")
      {
        echo "<strong style='color:red'>".$status."</strong>";
      }
      else
      {
        echo "<strong>".$status."</strong>";
      } ?></h3>
      <div class="row">
        <div class="col-sm-2 view-application-thumbnail">
          <h1>BPLO</h1>
        </div>
        <div class="col-sm-2 view-application-thumbnail">
          <h1>Zoning</h1>
        </div>
        <div class="col-sm-2 view-application-thumbnail">
          <h1>Engineering</h1>
        </div>
        <div class="col-sm-2 view-application-thumbnail">
          <h1>Health</h1>
        </div>
        <div class="col-sm-2 view-application-thumbnail">
          <h1>Fire</h1>
        </div>
      </div>
      <div class="row">
        <?php if ($application->get_status() == "Expired"): ?>
          <div class="col-sm-3 col-sm-offset-3">
            <a type="button" class="btn btn-danger btn-block" href="<?php echo base_url('form/renew/'.bin2hex($this->encryption->encrypt($this->encryption->decrypt($application->get_applicationId()).'|'.$this->encryption->decrypt($application->get_referenceNum()), $custom_crypto))); ?>">Renew</a>
          </div>
          <div class="col-sm-3">
          <input type="button" class="btn btn-warning btn-block" value="Edit Application">
          </div>
        <?php else: ?>
          <div class="col-sm-4 col-sm-offset-4">
            <input type="button" class="btn btn-warning btn-block" value="Edit Application">
          </div>
        <?php endif ?>
      </div>
        <!-- <div class="row">
          <div class="col-lg-6 view-application-thumbnail">

          </div>
          <div class="col-lg-6 view-application-thumbnail">

          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 view-application-thumbnail">

          </div>
          <div class="col-lg-6 view-application-thumbnail">

          </div>
        </div> -->

      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- </body>
