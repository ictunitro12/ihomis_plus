<link href="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/css/daterangepicker.css" rel="stylesheet">

<div class="row">
<div class="col-md-4">
<div class="card ">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="card-title mb-0"><i class="fa fa-graph"></i> Admission</h4>
                      <div class="small text-muted" id="admrangebview"></div>
                    </div>
						<input class="form-control form-control-sm col-md-4" name="datefilter" id="admRange" type="text">
                  </div>
                  <div class="c-chart-wrapper" style="height:250px; margin-top:10px;">
                    <canvas class="chart" id="inpatGraph" height="300"></canvas>
                  </div>
				       <div class="card-footer"> </div>
                </div>
              </div>
              </div>
			  
			  <div class="col-md-4">
			  <div class="card ">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="card-title mb-0">Outpatient</h4>
                      <div class="small text-muted" id="opdrangebview"></div>
                    </div>
                    <input class="form-control form-control-sm col-md-4" name="datefilter" id="opdRange" type="text">
                  </div>
                  <div class="c-chart-wrapper" style="height:250px;margin-top:10px;">
                    <canvas class="chart" id="opdGraph" height="300"></canvas>
                  </div>
				     <div class="card-footer"> </div>
              </div>
              </div>
              </div>
			  
			  <div class="col-md-4">
			  <div class="card ">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="card-title mb-0">Emergency</h4>
                      <div class="small text-muted" id="errangebview" ></div>
                    </div>
                  <input class="form-control form-control-sm col-md-4" name="datefilter" id="erRange" type="text">
                  </div>
                  </div>
                  <div class="c-chart-wrapper" style="height:250px;margin-top:10px;">
                    <canvas class="chart" id="erGraph" height="300"></canvas>
                  </div>
				     <div class="card-footer"> </div>
                </div>
              </div>
              </div>
	  
<script src="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/js/daterangepicker.js"></script>



	