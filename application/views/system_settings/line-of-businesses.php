<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
      <a href="<?php echo base_url(); ?>dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
      <a href="<?php echo base_url(); ?>settings" class="tip-bottom"> Settings</a>
      <a href="#" class="current"> Line of Businesses</a>
    </div>
    <!--End-breadcrumbs-->
    <h1> Line of Businesses Settings</h1>
  </div>

  <div class="container-fluid">
    <hr>
    <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-error">
        <button class="close" data-dismiss="alert">×</button>
        <?= $this->session->flashdata('error') ?>
      </div>
    <?php endif ?>
    <div class="row-fluid">
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fa fa-user" aria-hidden="true"></i> </span>
            <h5>Add Line of Business</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url(); ?>settings/save_line_of_business" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Line of Business Name :</label>
                <div class="controls">
                  <input class="span11" required placeholder="i.e.: Food Manufacturing" type="text" name="line-of-business-name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description :</label>
                <div class="controls">
                  <textarea name="description" required class="span11" id="description" cols="30" rows="3"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Type :</label>
                <div class="controls">
                  <select name="type" required id="type">
                    <option selected disabled>Select Type</option>
                    <option value="Amusement">Amusement</option>
                    <option value="Amusement">Bowling Alley</option>
                    <option value="Common Enterprise">Common Enterprise</option>
                    <option value="Financial Institution">Financial Institution</option>
                    <option value="Amusement">Golf Course</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Tax Rate :</label>
                <div class="controls">
                  <div class="input-append">
                    <input class="span3" placeholder="10" required type="text" name="tax-rate">
                    <span class="add-on">%</span>
                  </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Garbage Service Fee :</label>
                <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on">PHP</span>
                    <input class="span4" placeholder=".00" required type="text" name="garbage-service-fee">
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-success pull-right">Submit Line of Business</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fa fa-info" aria-hidden="true"></i> </span>
            <h5>Common Enterprise Fees</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url(); ?>settings/save_common_enterprise" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Line of Business :</label>
                <div class="controls">
                  <select name="line-of-business" required class="span11" id="line-of-business">
                    <option disabled selected >Select Line of Business which will apply</option>
                    <?php foreach ($line_of_business as $key => $line): ?>
                      <option value="<?= $this->encryption->encrypt($line->lineOfBusinessId) ?>"><?= $line->name ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Cottage Fee :</label>
                <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on">PHP</span>
                    <input class="span5" placeholder=".00" required type="text" name="cottage-fee">
                  </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Small Scale Fee :</label>
                <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on">PHP</span>
                    <input class="span5" placeholder=".00" required type="text" name="small-scale-fee">
                  </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Medium Scale Fee :</label>
                <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on">PHP</span>
                    <input class="span5" placeholder=".00" required type="text" name="medium-scale-fee">
                  </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Large Scale Fee :</label>
                <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on">PHP</span>
                    <input class="span5" placeholder=".00" required type="text" name="large-scale-fee">
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-success pull-right">Submit Common Enterprise Fees</button>
              </div>
            </div>
          </form>
        </div>
      </div><!-- end of row fluid -->
    </div>

    <div class="row-fluid">
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fa fa-info" aria-hidden="true"></i> </span>
            <h5>Add Amusement Devices</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url() ?>settings/add_amusement_device" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                  <input type="text" required name="amusement-device-name" class="span5">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Rate per unit :</label>
                <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on">PHP</span>
                    <input class="span5" placeholder=".00" required type="text" name="rate-per-unit">
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-success pull-right">Submit Amusement Device</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fa fa-user" aria-hidden="true"></i> </span>
            <h5>Golf Link Fees</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Above :</label>
                <div class="controls">
                  <div class="input-append">
                    <input class="span4" required type="text" name="above">
                    <span class="add-on">holes</span>
                  </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Below :</label>
                <div class="controls">
                  <div class="input-append">
                    <input class="span4" required type="text" name="below">
                    <span class="add-on">holes</span>
                  </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Range Fee :</label>
                <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on">PHP</span>
                    <input class="span4" required placeholder=".00" type="text" name="range-fee">
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-success pull-right">Submit Golf Fee</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fa fa-user" aria-hidden="true"></i> </span>
            <h5>Bowling Alley Fees</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url() ?>settings/update_bowling_alley_fee" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Per Automatic Lane Fee :</label>
                <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on">PHP</span>
                    <input class="span4" required placeholder=".00" type="text" value="<?= $bowling_alley_fees->automaticLaneFee ?>" name="automatic-lane-fee">
                  </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Per Non-automatic Lane Fee :</label>
                <div class="controls">
                  <div class="input-prepend">
                    <span class="add-on">PHP</span>
                    <input class="span4" required placeholder=".00" type="text" value="<?= $bowling_alley_fees->nonAutomaticLaneFee ?>" name="non-automatic-lane-fee">
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-success pull-right">Submit Bowling Alley Fee</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fa fa-user" aria-hidden="true"></i> </span>
            <h5>Financial Institutions</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url(); ?>settings/add_financial_institution" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Description :</label>
                <div class="controls">
                  <input type="text" required placeholder="Pawnshops, lending investors, Moneyshops" class="span11" name='description'>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Scale :</label>
                <div class="controls">
                  <select name="scale" required class='span4' id="scale">
                  <option disabled selected>Select Scale</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                  </select>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-success pull-right">Financial Institution</button>
              </div>
            </form>
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
