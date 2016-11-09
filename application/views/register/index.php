<body>
  <?php if($this->session->flashdata('message')): ?>
    <script>
      alert("<?= $this->session->flashdata('message'); ?>");
    </script>
  <?php endif; ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <?php if($this->session->flashdata('error')): ?>
          <div class="alert alert-danger"> <!--bootstrap error div-->
            <?=$this->session->flashdata('error')?>
          </div>
        <?php endif; ?>
        <h1>Register</h1>
        <hr>

        <form class="form-group" action="<?php echo base_url();?>auth/register_user" method="post">
          <div class="row">
            <div class="col-sm-6">
              <label for="fname">First Name</label>
              <input type="text" name="fname" class="form-control" value="">
            </div>
            <div class="col-sm-6">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" class="form-control" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label for="mname">Middle Name</label>
              <input type="text" name="mname" class="form-control" value="">
            </div>
            <div class="col-sm-3">
              <label for="suffix">Suffix (Optional)</label>
              <input type="text" name="suffix" class="form-control" placeholder="Jr., Sr., III, etc." value="">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4"><p>
              <label for="gender">Gender</label>
              <div class="btn-group" style="margin-top:-10px;" role="group" aria-label="gender">
                <button type="button" class="btn btn-default" id="btn-male">Male</button>
                <button type="button" class="btn btn-default" id="btn-female">Female</button>
                <input type="hidden" name="gender" id="hidden-gender" value="">
              </div>
            </p>
          </div>
          <div class="col-sm-6 col-sm-offset-2">
            <label for="">Birth date</label>
            <div class="col-sm-12" style="padding:0;">
              <div class="col-sm-4" style="padding:0;"><input type="text" class="form-control" name="month" placeholder="MM" value=""></div>
              <div class="col-sm-4" style="padding:0;"><input type="text" class="form-control" name="day" placeholder="DD" value=""></div>
              <div class="col-sm-4" style="padding:0;"><input type="text" class="form-control" name="year" placeholder="YYYY" value=""></div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="col-sm-12" style="padding:0">
              <label for="civil-staus">Civil Status</label>
              <div class="form-group">
                <select class="form-control" name="civil-status" id="civil-status">
                  <option selected disabled select>Civil Status</option>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Separated">Separated</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Annulled">Annulled</option>
                  <option value="Widower">Widower</option>
                  <option value="Single Parent">Single Parent</option>
                </select>
              </div>
            </div>     
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="">
          </div>
          <div class="col-sm-6">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" name="confirm-password" value="">
          </div>
        </div>

        <hr>
        <div class="col-sm-6 col-sm-offset-3">
          <input type="submit" class="btn btn-primary btn-block" name="name" value="Submit">
        </div>
      </form>
    </div>
  </div>
</div>


</body>
