<title>BPOSys | <?= $title ?></title>
<!--Header-part-->
<div id="header">
  <h1><a href="#"></a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <input type="hidden" id="notif-count" value="<?= isset($notifications) ? count($notifications) : '-' ?>">
  <input type="hidden" id="completed-count" value="<?= isset($completed) ? count($completed) : '-' ?>">
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
<div id="sidebar"><a href="<?php echo base_url(); ?>dashboard" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?= $active=="Dashboard" ? "active" : '' ?>"><a href="<?php echo base_url() ?>dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu <?= $active=="Applications" ? "active" : '' ?>"> <a href="#"><i class="icon icon-th-list"></i> <span>Applications</span> <span class="label label-important"><?= $total>0 ? $total : "" ?></span></a>
      <ul>
        <li><a href="<?php echo base_url(); ?>dashboard/incoming_applications"><span>For Validation</span><span class="label label-important" style="float:right; margin-right:20px"><?= $incoming>0 ? $incoming : ""?></span></a></li>
        <?php if ($this->encryption->decrypt($this->session->userdata['userdata']['role']) == "BPLO" ): ?>
          <li><a href="<?php echo base_url(); ?>dashboard/pending_applications"><span>Pending</span><span class="label label-important" style="float:right; margin-right:20px"><?= $pending>0 ? $pending : ""?></span></a></li>
        <?php endif ?>
        
        <li><a href="<?php echo base_url(); ?>dashboard/on_process_applications"><span>On Process</span><span class="label label-important" style="float:right; margin-right:20px"><?= $process>0 ? $process : "" ?></span></a></li>
        <?php if ($this->encryption->decrypt($this->session->userdata['userdata']['role']) == "BPLO" ): ?>
          <li><a href="<?php echo base_url(); ?>dashboard/completed_applications"><span>Complete Requirements</span><span class="label label-important" style="float:right; margin-right:20px"><?= $complete>0 ? $complete : ""?></span></a></li>
        <?php endif ?>
        
        <li><a href="<?php echo base_url(); ?>dashboard/issued_applications"><span>Issued</span><span class="label label-important" style="float:right; margin-right:20px"><?= $issued>0 ? $issued : ""?></span></a></li>
      </ul>
    </li>
    <li class="<?= $active=="Reports" ? "active" : '' ?>"> <a href="<?php echo base_url(); ?>reports"><i class="icon icon-signal"></i> <span>View Reports</span></a> </li>
    <li class="<?= $active=="Settings" ? "active" : '' ?>"> <a href=""><i class="icon icon-wrench"></i> <span>Settings</span></a> </li>
    <li><a href="<?php echo base_url(); ?>auth/logout"><i class="icon icon-key"></i> <span>Logout</span></a></li>
    <!-- <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>

    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li> -->
  </ul>
</div>
<!--sidebar-menu-->