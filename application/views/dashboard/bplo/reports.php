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
            <div class="right"> <strong>15598</strong> Businesses </div>
          </li>
          <li>
            <div class="left peity_line_neutral"><span><span style="display: none;">10,15,8,14,13,10,10,15</span>
              <canvas width="50" height="24"></canvas>
            </span><!-- 10% --></div>
            <div class="right"> <strong>150</strong> Issued/Active </div>
          </li>
          <li>
            <div class="left peity_bar_bad"><span><span style="display: none;">3,5,6,16,8,10,6</span>
              <canvas width="50" height="24"></canvas>
            </span><!-- -40% --></div>
            <div class="right"> <strong>4560</strong> Expired/Unrenewed</div>
          </li>
          <li>
            <div class="left peity_line_good"><span><span style="display: none;">12,6,9,23,14,10,17</span>
              <canvas width="50" height="24"></canvas>
            </span><!-- +60% --></div>
            <div class="right"> <strong>5672</strong> Cancelled </div>
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
                <tr>
                  <td>Biñan</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Bungahan</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Canlalay</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Casile</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Dela Paz</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Ganado</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Langkiwa</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Loma</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Malaban</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Malamig</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Mampalasan</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Platero</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Poblacion</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>San Antonio</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>San Francisco (Halang)</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>San Jose</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>San Vicente</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Santo Domingo</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Soro-Soro</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Sto. Niño</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Sto. Tomas (Calabuso)</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Timbao</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Tubigan</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Zapote</td>
                  <td></td>
                  <td></td>
                </tr>
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