<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?php echo base_url(); ?>dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> 
      <a href="<?php echo base_url(); ?>dashboard/reports" class="current">View Reports</a>
    </div>
    <h1>Reports</h1>
    <hr>
  </div>
  <!--End-breadcrumbs-->

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
          <h5>Column Chart</h5>
        </div>
        <div class="widget-content">
          <div id="chartContainer" style="height: 400px; width: 100%;"></div>
        </div>
      </div>
    </div>

  </div>
<!--     <div class="block center-block">
      <label for="">Test Noty</label>
      <button class="btn btn-primary" id="btn-test-noty">Noty</button>
    </div> -->
  </div>
  <?php if ($this->session->flashdata('message')): ?>
    <script>
      alert('<?= $this->session->flashdata('message') ?>');
    </script>
  <?php endif ?>
  <script type="text/javascript">
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        title: {
          text: "Issued Business Permits Year <?= date('Y') ?>"
        },
        data: [{
          type: "stackedColumn",
          legendText: "New",
          showInLegend: "true",
          dataPoints: [
          { y: <?= $n_january ?>, label: "January" },
          { y: <?= $n_february ?>, label: "February" },
          { y: <?= $n_march ?>, label: "March" },
          { y: <?= $n_april ?>, label: "April" },
          { y: <?= $n_may ?>, label: "May" },
          { y: <?= $n_june ?>, label: "June" },
          { y: <?= $n_july ?>, label: "July" },
          { y: <?= $n_august ?>, label: "August" },
          { y: <?= $n_september ?>, label: "September" },
          { y: <?= $n_october ?>, label: "October" },
          { y: <?= $n_november ?>, label: "November" },
          { y: <?= $n_december ?>, label: "December" },
          ]
        }, {
          type: "stackedColumn",
          legendText: "Renewal",
          showInLegend: "true",
          indexLabel: "#total",
          indexLabelPlacement: "outside",
          dataPoints: [
          { y: <?= $r_january ?>, label: "January" },
          { y: <?= $r_february ?>, label: "February" },
          { y: <?= $r_march ?>, label: "March" },
          { y: <?= $r_april ?>, label: "April" },
          { y: <?= $r_may ?>, label: "May" },
          { y: <?= $r_june ?>, label: "June" },
          { y: <?= $r_july ?>, label: "July" },
          { y: <?= $r_august ?>, label: "August" },
          { y: <?= $r_september ?>, label: "September" },
          { y: <?= $r_october ?>, label: "October" },
          { y: <?= $r_november ?>, label: "November" },
          { y: <?= $r_december ?>, label: "December" },
          ]
        }
        ]
      });
      chart.render();
    }
  </script>

  <!--Footer-part-->

<!-- <div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div> -->

<!--end-Footer-part-->