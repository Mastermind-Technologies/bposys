<title>BPOSys | <?= $title ?></title>
<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo base_url();?>bposys/dashboard"><img src="<?php echo base_url(); ?>assets/matrix/img/logo.png" style="height: 35px; margin-top: -33px; padding-left: 40px" alt=""></a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <?php if ($this->encryption->decrypt($this->session->userdata['userdata']['role']) != "Master Admin"): ?>
    <!-- Wala namang notif si admin so far, kaya tanggal muna to -->
    <input type="hidden" id="new-count" value="<?= isset($new) ? count($new) : '-' ?>">
    <input type="hidden" id="notif-count" value="<?= isset($notifications) ? count($notifications) : '-' ?>">
    <input type="hidden" id="completed-count" value="<?= isset($completed) ? count($completed) : '-' ?>">
  <?php endif ?>
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url(); ?>auth/logout"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--sidebar-menu-->
<div id="sidebar">
  <?php if ($this->encryption->decrypt($this->session->userdata['userdata']['role']) != "Master Admin"): ?>
    <a href="<?php echo base_url(); ?>dashboard" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <?php else: ?>
    <a href="<?php echo base_url(); ?>bposys_admin/dashboard" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <?php endif ?>

  <ul>
    <?php if ($this->encryption->decrypt($this->session->userdata['userdata']['role']) != "Master Admin"): ?>
      <li class="<?= $active=="Dashboard" ? "active" : '' ?>"><a href="<?php echo base_url() ?>dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li class="submenu <?= $active=="Applications" ? "active" : '' ?>"> <a href="#"><i class="icon icon-th-list"></i> <span>Applications</span> <span class="label label-important"><?= $total>0 ? $total : "" ?></span></a>
        <ul>
          <?php if ($this->encryption->decrypt($this->session->userdata['userdata']['role']) == "BPLO"): ?>
            <!-- <li><a href="<?php echo base_url(); ?>dashboard/incoming_applications"><span>For Validation</span><span class="label label-important" style="float:right; margin-right:20px"><?= $incoming>0 ? $incoming : ""?></span></a></li>

            <li><a href="<?php echo base_url(); ?>dashboard/pending_applications"><span>Pending</span><span class="label label-important" style="float:right; margin-right:20px"><?= $pending>0 ? $pending : ""?></span></a></li> -->

            <li><a href="<?php echo base_url(); ?>dashboard/on_process_applications"><span>On Process</span><span class="label label-important" style="float:right; margin-right:20px"><?= $process>0 ? $process : "" ?></span></a></li>

            <li><a href="<?php echo base_url(); ?>dashboard/completed_applications"><span>Complete Requirements</span><span class="label label-info" style="float:right; margin-right:20px"><?= $complete>0 ? $complete : ""?></span></a></li>

            <li><a href="<?php echo base_url(); ?>dashboard/finalize_applications"><span>Finalization</span><span class="label label-warning" style="float:right; margin-right:20px"><?= $finalization>0 ? $finalization : ""?></span></a></li>

            <li><a href="<?php echo base_url(); ?>dashboard/issued_applications"><span>Issued</span><span class="label label-success" style="float:right; margin-right:20px"><?= $issued>0 ? $issued : ""?></span></a></li>

            <li><a href="<?php echo base_url(); ?>dashboard/retirements"><span>Retirements</span><span class="label label-info" style="float:right; margin-right:20px"><?= $retirements>0 ? $retirements : ""?></span></a></li>

          <?php else: ?>

            <li><a href="<?php echo base_url(); ?>dashboard/incoming_applications"><span>Incoming Applications</span><span class="label label-important" style="float:right; margin-right:20px"><?= $incoming>0 ? $incoming : ""?></span></a></li>

            <li><a href="<?php echo base_url(); ?>dashboard/on_process_applications"><span>On Process</span><span class="label label-warning" style="float:right; margin-right:20px"><?= $process>0 ? $process : "" ?></span></a></li>

            <li><a href="<?php echo base_url(); ?>dashboard/issued_applications"><span>Issued</span><span class="label label-success" style="float:right; margin-right:20px"><?= $issued>0 ? $issued : ""?></span></a></li>

          <?php endif ?>
        </ul>
      </li>
      <?php if ($this->encryption->decrypt($this->session->userdata['userdata']['role']) == "BPLO"): ?>
        <li class="<?= $active=="Reports" ? "active" : '' ?>"> <a href="<?php echo base_url(); ?>reports"><i class="icon icon-signal"></i> <span>View Reports</span></a> </li>
      <?php endif ?>
      <!-- <li class="<?= $active=="Settings" ? "active" : '' ?>"> <a href=""><i class="icon icon-wrench"></i> <span>Settings</span></a> </li> -->
    <?php else: ?>
      <li class="<?= $active=="Dashboard" ? "active" : '' ?>"><a href="<?php echo base_url() ?>bposys_admin/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li class="<?= $active=="Users" ? "active" : '' ?>"><a href="<?php echo base_url() ?>bposys_admin/users"><i class="icon icon-home"></i> <span>Users</span></a></li>
    <?php endif ?>

    <li><a href="<?php echo base_url(); ?>auth/logout"><i class="icon icon-key"></i> <span>Logout</span></a></li>

  </ul>

</div>
<!--sidebar-menu-->
