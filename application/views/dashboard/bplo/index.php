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
    <input type="hidden" id="notif-count" value="<?= sizeof($notifications) ?>">
    <hr>
    <h3>Department: <?= $this->encryption->decrypt($this->session->userdata['userdata']['role']) ?></h3>
    <!--Action boxes-->
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_ly"> <a href="<?php echo base_url(); ?>dashboard/pending_applications"> <i class="fa fa-circle-o-notch fa-2x" aria-hidden="true"></i>
         <span class="label label-important badge-pending"><?= $pending ?></span><br><span>Pending</span> </a> </li>
         <li class="bg_db"> <a href="<?php echo base_url(); ?>dashboard/incoming_applications"> <i class="fa fa-share fa-2x" aria-hidden="true"></i>
           <span class="label label-success badge-incoming"><?= $incoming ?></span><br>Incoming </a> </li>
           <li class="bg_c"> <a href="#"> <i class="fa fa-check-square fa-2x" aria-hidden="true"></i>
             <span class="label label-info badge-issued"><?= $issued ?></span><br>Issued this month </a> </li>
        <!-- <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li>
        <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li> -->
       <!--  <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li> -->
      </ul>
    </div>
    <div class="row-fluid">
      <div class="span4">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
            <h5>Statistics</h5>
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
                <tr>
                  <td>Total issued applications</td>
                  <td>8850</td>
                </tr>
                <tr>
                  <td>Applications this month</td>
                  <td>5670</td>
                </tr>
                <tr>
                  <td>Issued applications this month</td>
                  <td>4130</td>
                </tr>
                <tr>
                  <td>Unrenewed Applications this year</td>
                  <td>1574</td>
                </tr>
                <tr>
                  <td>IDK</td>
                  <td>1044</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="span4">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-arrow-right"></i> </span>
            <h5>Latest Incoming Applications</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Business Name</th>
                  <!-- <th>Visits</th> -->
                </tr>
              </thead>
              <tbody class="">
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <!-- <td>12444</td> -->
                </tr>
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <!-- <td>10455</td> -->
                </tr>
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <!-- <td>8455</td> -->
                </tr>
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <!-- <td>4456</td> -->
                </tr>
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <!-- <td>2210</td> -->
                </tr>
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
                  <th>Business Name</th>
                  <th>Issued</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <td>DATE</td>
                </tr>
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <td>DATE</td>
                </tr>
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <td>DATE</td>
                </tr>
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <td>DATE</td>
                </tr>
                <tr>
                  <td><a href="#">Business Name</a></td>
                  <td>DATE</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Footer-part-->

<!-- <div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div> -->

<!--end-Footer-part-->