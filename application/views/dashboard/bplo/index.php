<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
      <a href="<?php echo base_url(); ?>dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
    </div>
    <!--End-breadcrumbs-->
  </div>



  <div class="container-fluid">
    <h1><?= "(".$user->get_middleName().") ". $user->get_lastName() . ", " . $user->get_firstName() ?></h1>
    <hr>
    <h3>Department: <?= $this->encryption->decrypt($this->session->userdata['userdata']['role']) ?></h3>
    <!--Action boxes-->
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
      <!--  <li class="bg_db"> <a href="<?php echo base_url(); ?>dashboard/incoming_applications"> <i class="fa fa-share fa-2x" aria-hidden="true"></i>
      <span class="label label-warning badge-incoming"><?= $incoming > 0 ? $incoming : "" ?></span><br>For Validation </a> </li> -->

      <li class="bg_lo"> <a href="<?php echo base_url(); ?>dashboard/on_process_applications"> <i class="fa fa-circle-o-notch fa-2x" aria-hidden="true"></i>
       <span class="label label-success badge-process"><?= $process > 0 ? $process : "" ?></span><br><span>On Process</span> </a> </li>
      <li class="bg_c"> <a href="<?php echo base_url(); ?>dashboard/completed_applications"> <i class="fa fa-th-list fa-2x" aria-hidden="true"></i>
        <span class="label label-info badge-completed"><?= $complete > 0 ? $complete : "" ?></span><br>Complete Requirements</a> </li>
      <li class="bg_ly span2"> <a href="<?php echo base_url(); ?>dashboard/finalize_applications"> <i class="fa fa-hourglass fa-2x" aria-hidden="true"></i>
        <span class="label label-important"><?= $finalization > 0 ? $finalization : "" ?></span><br><span>Finalization</span> </a> </li>
      <li class="bg_ls"> <a href="<?php echo base_url(); ?>dashboard/issued_applications"> <i class="fa fa-check-square fa-2x" aria-hidden="true"></i>
        <span class="label label-info badge-issued"><?= $issued > 0 ? $issued : "" ?></span><br>Issued</a> </li>
        <li class="bg_db span3"> <a href="<?php echo base_url(); ?>reports"><span><i class="fa fa-signal fa-2x" aria-hidden="true"></i> </span><br>View Reports</a> </li>
        <li class="bg_ly span3"> <a href="<?php echo base_url(); ?>Alerts"><span><i class="fa fa-bell-o fa-2x" aria-hidden="true"></i> </span><br>Create Alerts</a> </li>

        <li class="bg_db"> <a href="<?php echo base_url(); ?>reports"><span><i class="fa fa-signal fa-2x" aria-hidden="true"></i> </span><br>View Reports</a> </li>
        <li class="bg_lo"> <a href="<?php echo base_url(); ?>Alerts"><span><i class="fa fa-bell-o fa-2x" aria-hidden="true"></i> </span><br>Create Alerts</a> </li>
        <li class="bg_db"> <a href="<?php echo base_url(); ?>reports"><span><i class="fa fa-signal fa-2x" aria-hidden="true"></i> </span><br>View Reports</a> </li>
        <li class="bg_lo"> <a href="<?php echo base_url(); ?>Alerts"><span><i class="fa fa-bell-o fa-2x" aria-hidden="true"></i> </span><br>Create Alerts</a> </li>

      </ul>
    </div>
    <div class="quick-actions_homepage">
      <ul class="quick-actions">



     </ul>
   </div>
   <div class="row-fluid">
    <div class="span4">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
          <h5><?= date('Y') ?> Reports</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>#</th>
              </tr>
            </thead>
            <tbody>
              <tr >
                <td><a href="<?php echo base_url(); ?>reports">Total No. of Issued Applications</a></td>
                <td><?= $issued ?></td>
              </tr>
              <tr >
                <td><a href="<?php echo base_url(); ?>reports">Total No. of Renewed Applications</a></td>
                <td><?= $renewed ?></td>
              </tr>
              <tr >
                <td><a href="<?php echo base_url(); ?>reports">Total No. of Unrenewed Applications</a></td>
                <td><?= $expired ?></td>
              </tr>
              <tr >
                <td><a href="<?php echo base_url(); ?>reports">Total No. of Cancelled Applications</a></td>
                <td><?= $cancelled ?></td>
              </tr>
              <tr >
                <td><a href="<?php echo base_url(); ?>reports">Total No. Retired Businesses</a></td>
                <td><?= "0"//$applications ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="span4">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-arrow-right"></i> </span>
          <h5>Latest Applications On Process</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Business Name</th>
                <!-- <th>Visits</th> -->
              </tr>
            </thead>
            <tbody class="">
              <?php if (isset($latest_applications)): ?>
                <?php foreach ($latest_applications as $key => $application): ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>dashboard/incoming_applications"><?= $application->get_BusinessName() ?></a>
                    </td>
                  </tr>
                <?php endforeach ?>
              <?php endif ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="span4">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
          <h5>Latest Issued Applications</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Business Name</th>
                <th>Date Issued</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($latest_issued as $key => $application): ?>
                <tr>
                  <td><?= $key+1 ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>dashboard/issued_applications"><?= $application->get_BusinessName() ?></a>
                  </td>
                  <td><?= $application->get_DateIssued() ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php if($this->session->flashdata('message')): ?>
  <script>
    alert("<?= $this->session->flashdata('message'); ?>");
  </script>
<?php endif; ?>


<!--Footer-part-->

<!-- <div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div> -->

<!--end-Footer-part-->
