<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?php echo base_url(); ?>dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> 
      <a href="<?php echo base_url(); ?>dashboard/reports" class="current">View Reports</a>
    </div>
    <h1>BPLO Application Reports</h1>
    <hr style="margin:10">
  </div>
  <!--End-breadcrumbs-->

  <div class="container-fluid">
    <div class="widget-box widget-plain">
      <div class="center">
        <ul class="stat-boxes2">
          <li>
            <div class="left peity_bar_neutral"><span><span style="display: none;">2,4,9,7,12,10,12</span>
              <canvas width="50" height="24"></canvas>
            </span><!-- +10% --></div>
            <div class="right"> <strong class='count'><?= $businesses ?></strong> Businesses </div>
          </li>
          <li>
            <div class="left peity_line_good"><span><span style="display: none;">10,15,8,14,13,10,10,15</span>
              <canvas width="50" height="24"></canvas>
            </span><!-- 10% --></div>
            <div class="right"> <strong class='count'><?= $issued ?></strong> Issued Permits </div>
          </li>
          <li>
            <div class="left peity_bar_bad"><span><span style="display: none;">3,5,6,16,8,10,6</span>
              <canvas width="50" height="24"></canvas>
            </span><!-- -40% --></div>
            <div class="right"> <strong class='count'><?= $expired ?></strong> Expired/Unrenewed</div>
          </li>
          <li>
            <div class="left peity_line_bad"><span><span style="display: none;">12,6,9,23,14,10,17</span>
              <canvas width="50" height="24"></canvas>
            </span><!-- +60% --></div>
            <div class="right"> <strong class='count'><?= $cancelled ?></strong> Cancelled </div>
          </li>
          <li>
            <div class="left peity_bar_neutral"><span>12,6,9,23,14,10,13</span><!-- +30% --></div>
            <div class="right"> <strong class='count'><?= $closed ?></strong> Closed</div>
          </li>
        </ul>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Issued Business Permits by Year</h5>
          </div>
          <div class="widget-content no-padding">
            <div class="control-group">
              <label class='control-label' for="year">Year:</label>
              <div class="controls">
                <select class='span3' name="report-year" id="report-year">
                  <option selected disabled value="<?= date('Y') ?>">Select Year</option>
                  <?php for ($i=date('Y'); $i >= 2012; $i--) { 
                    echo "<option value=$i>$i</option>";
                  } ?>
                </select>
              </div>
              
            </div>
            <div class="row-fluid">
              <div class='span12' id='report-container'>
                <div id="chartContainer" style="height: 400px; width: 100%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Business Owners by Gender</h5>
          </div>
          <div class="widget-content no-padding">
            <div class="row-fluid">
              <div class='span12' id=''>
                <div id="doughnut" style="height: 400px; width: 100%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Line Chart</h5>
          </div>
          <div class="widget-content no-padding">
            <div class="row-fluid">
              <div class='span12' id=''>
                <div id="line-chart" style="height: 400px; width: 100%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span8 offset2">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Report by Barangay</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Barangay</th>
                  <th>Businesses</th>
                  <th>Unrenewed Applications</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($barangay_array as $key => $barangay): ?>
                <tr>
                  <td><?= $barangay->barangay ?></td>
                  <td><?= $barangay->count ?></td>
                  <td><?= isset($barangay->expired) ? $barangay->expired : "0" ?></td>
                </tr>
              <?php endforeach ?>
              </tbody>
            </table>
          </div>
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
  $(document).ready(function(){

     var chart = new CanvasJS.Chart("chartContainer", {
        title: {
          text: "Issued Business Permits Year <?= date('Y') ?>"
        },
        animationEnabled: true,
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

      var total = <?= $male ?>+<?= $female?>;
      var chart = new CanvasJS.Chart("doughnut",
      {
        title:{
          text: "Business Owners with Active Businesses (Total: "+total+")",
        },
        animationEnabled: true,
        data: [
        {
          type: "doughnut",
          startAngle: 60,
          toolTipContent: "{legendText}: {y} - <strong>#percent% </strong>",
          showInLegend: true,
          explodeOnClick: false, //**Change it to true
          dataPoints: [
          {y: <?= $male ?>, indexLabel: "Male #percent%", legendText: "Male" },
          {y: <?= $female ?>, indexLabel: "Female #percent%", legendText: "Female" },
          ]
        }
        ]
      });
      chart.render();

      var chart = new CanvasJS.Chart("line-chart", {
        zoomEnabled: false,
        animationEnabled: true,
        title: {
          text: "Business Permit Applications"
        },
        axisY2: {
          // valueFormatString: "0.0",

          // maximum: 1.2,
          // interval: 1,
          interlacedColor: "#F5F5F5",
          gridColor: "#D7D7D7",
          tickColor: "#D7D7D7"
        },
        axisX: {
          interval: 1,
          valueFormatString: "#"
        },
        theme: "theme3",
        toolTip: {
          shared: true
        },
        legend: {
          verticalAlign: "bottom",
          horizontalAlign: "center",
          fontSize: 15,
          fontFamily: "Lucida Sans Unicode"
        },
        data: [{
          type: "line",
          lineThickness: 3,
          axisYType: "secondary",
          showInLegend: true,
          name: "New",
          dataPoints: [
          <?php foreach ($new as $key => $value): ?>
            { x: <?= $value->year ?>, y: <?= $value->count ?> },
          <?php endforeach ?>
          // { x: new Date(2001, 0), y: 0 },
          // { x: new Date(2002, 0), y: 0.001 },
          // { x: new Date(2003, 0), y: 0.01 },
          // { x: new Date(2004, 0), y: 0.05 },
          // { x: new Date(2005, 0), y: 0.1 },
          // { x: new Date(2006, 0), y: 0.15 },
          // { x: new Date(2007, 0), y: 0.22 },
          // { x: new Date(2008, 0), y: 0.38 },
          // { x: new Date(2009, 0), y: 0.56 },
          // { x: new Date(2010, 0), y: 0.77 },
          // { x: new Date(2011, 0), y: 0.91 },
          // { x: new Date(2012, 0), y: 0.94 }
          ]
        },
        {
          type: "line",
          lineThickness: 3,
          showInLegend: true,
          name: "Renew",
          axisYType: "secondary",
          dataPoints: [
          <?php foreach ($renew as $key => $value): ?>
            { x: <?= $value->year ?>, y: <?= $value->count ?> },
          <?php endforeach ?>
          // { x: new Date(2001, 00), y: 0.18 },
          // { x: new Date(2002, 00), y: 0.2 },
          // { x: new Date(2003, 0), y: 0.25 },
          // { x: new Date(2004, 0), y: 0.35 },
          // { x: new Date(2005, 0), y: 0.42 },
          // { x: new Date(2006, 0), y: 0.5 },
          // { x: new Date(2007, 0), y: 0.58 },
          // { x: new Date(2008, 0), y: 0.67 },
          // { x: new Date(2009, 0), y: 0.78 },
          // { x: new Date(2010, 0), y: 0.88 },
          // { x: new Date(2011, 0), y: 0.98 },
          // { x: new Date(2012, 0), y: 1.04 }
          ]
        },
        {
          type: "line",
          lineThickness: 3,
          showInLegend: true,
          name: "Expected Renewals",
          axisYType: "secondary",
          dataPoints: [
          <?php foreach ($expected as $key => $value): ?>
            { x: <?= $value->year ?>, y: <?= $value->count ?>},
          <?php endforeach ?>
          // { x: new Date(2001, 00), y: 0.16 },
          // { x: new Date(2002, 0), y: 0.17 },
          // { x: new Date(2003, 0), y: 0.18 },
          // { x: new Date(2004, 0), y: 0.19 },
          // { x: new Date(2005, 0), y: 0.20 },
          // { x: new Date(2006, 0), y: 0.23 },
          // { x: new Date(2007, 0), y: 0.261 },
          // { x: new Date(2008, 0), y: 0.289 },
          // { x: new Date(2009, 0), y: 0.3 },
          // { x: new Date(2010, 0), y: 0.31 },
          // { x: new Date(2011, 0), y: 0.32 },
          // { x: new Date(2012, 0), y: 0.33 }
          ]
        }
        ],
        // legend: {
        //   cursor: "pointer",
        //   itemclick: function (e) {
        //     if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        //       e.dataSeries.visible = false;
        //     }
        //     else {
        //       e.dataSeries.visible = true;
        //     }
        //     chart.render();
        //   }
        // }
      });

      chart.render();

  });
  </script>


  <!--Footer-part-->

<!-- <div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div> -->

<!--end-Footer-part-->