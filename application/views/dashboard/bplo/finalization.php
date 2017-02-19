<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?php echo base_url(); ?>dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> 
      <a href="<?php echo base_url(); ?>dashboard/completed_applications" class="tip-bottom">Complete Applications</a>
      <a href="#" class="tip-bottom">View</a> 
      <a href="#" class="current">Finalization</a>
    </div>
    <h1>Finalization</h1>
  </div>
  <!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span8 offset2">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Information</h5>
          </div>
          <div class="widget-content nopadding">
          <form action="<?php echo base_url(); ?>form/submit_finalization" method="post" class="form-horizontal" data-parsley-validate="">
              <div class="control-group">
                <label class="control-label">Reference Number:</label>
                <label class='control-label' style='text-align: left; padding-left:20px'><strong><?= $this->encryption->decrypt($application->get_referenceNum()) ?></strong></label>
                <input type="hidden" name="ref" value='<?= str_replace(['/','+','='], ['-','_','='], $application->get_referenceNum()) ?>'> 
              </div>
              <div class="control-group">
                <label class="control-label">Business Name:</label>
                <label class='control-label' style='text-align: left; padding-left:20px'><strong><?= $application->get_businessName() ?></strong></label> 
              </div>
              <div class="control-group">
                <label class="control-label">Due:</label>
                <label class='control-label' style='text-align: left; padding-left:20px'><strong><?= $application->get_assessment()->amount ?></strong></label>
              </div>
              <div class="control-group">
                <label class="control-label">Paid Up To:</label>
                <div class="controls">
                  <div data-toggle="buttons-radio" class="btn-group">
                    <button name='paid-up-to' id='paid-up-to' value="First Quarter" class="btn btn-default paid-up-to <?= $application->get_assessment()->paidUpTo=="First Quarter" ? 'active' : '' ?> <?= $application->get_assessment()->paidUpTo=="None" ? "active" : '' ?>" type="button">First Quarter</button>
                    <button name='paid-up-to' id='paid-up-to' value="Second Quarter" class="btn btn-default paid-up-to <?= $application->get_assessment()->paidUpTo=="Second Quarter" ? 'active' : '' ?>" type="button">Second Quarter</button>
                    <button name='paid-up-to' id='paid-up-to' value="Third Quarter" class="btn btn-default paid-up-to <?= $application->get_assessment()->paidUpTo=="Third Quarter" ? 'active' : '' ?>" type="button">Third Quarter</button>
                    <button name='paid-up-to' id='paid-up-to' value="Fourth Quarter" class="btn btn-default paid-up-to <?= $application->get_assessment()->paidUpTo=="Fourth Quarter" ? 'active' : '' ?>" type="button">Fourth Quarter</button>
                  </div>
                  <input type="hidden" name="hidden-paid-up-to" value="<?= $application->get_assessment()->paidUpTo!='None' ? $application->get_assessment()->paidUpTo : 'First Quarter' ?>" id="hidden-paid-up-to">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">OR Number:</label>
                <div class="controls">
                  <input type="text" name='or-number' required class="span4" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Amount Paid:</label>
                <div class="controls">
                  <input type="text" name='amount-paid' data-parsley-type="digits" required class="span4" />
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success btn-large pull-right">Issue Business Permit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if ($this->session->flashdata('message')): ?>
  <script>
    alert('<?= $this->session->flashdata('message') ?>');
  </script>
<?php endif ?>

<!--Footer-part-->

<!-- <div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div> -->

<!--end-Footer-part-->