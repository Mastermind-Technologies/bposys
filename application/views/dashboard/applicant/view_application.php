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
