<div class="row">
<div class="col-12 col-lg-12">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success p-4 mfe-3">
                          <i class="fa fa-bed fa-lg"></i>
                      </div>
                      <div>
                        <div class="text-value text-primary" id="Inpatient"></div>
                        <div class="text-muted text-uppercase font-weight-bold small">Inpatient</div>
                      </div>
                    </div>
                  </div>
				</div>

		   	 <div class="col-3 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success p-4 mfe-3">
                        <i class="fa fa-sign-out fa-lg"></i>
                      </div>
                      <div>
                        <div class="text-value text-primary" id="Discharged"></div>
                        <div class="text-muted text-uppercase font-weight-bold small">Discharged</div>
                      </div>
                    </div>
                  </div>
           </div>
		 
		    <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success p-4 mfe-3">
                      <i class="fa fa-wheelchair fa-lg"></i>
                      </div>
                      <div>
                        <div class="text-value text-primary" id="DAMA"></div>
                        <div class="text-muted text-uppercase font-weight-bold small">Dischaged Against Medical Advise</div>
                      </div>
                    </div>
				</div>
           </div>
		   	 <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success p-4 mfe-3">
                      <i class="fa fa-remove fa-lg"></i>
                      </div>
                      <div>
                        <div class="text-value text-primary" id="Absconded"></div>
                        <div class="text-muted text-uppercase font-weight-bold small">Absconded</div>
                      </div>
                    </div>
				</div>
           </div>
		    <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success p-4 mfe-3">
                      <i class="fa fa-refresh fa-lg"></i>
                      </div>
                      <div>
                        <div class="text-value text-primary" id="Transferred"></div>
                        <div class="text-muted text-uppercase font-weight-bold small">Transferred</div>
                      </div>
                    </div>
				</div>
           </div>
		 
		   	 <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success p-4 mfe-3">
                      <i class="fa fa-heart fa-lg"></i>
                      </div>
                      <div>
                        <div class="text-value text-primary" id="Deaths"></div>
                        <div class="text-muted text-uppercase font-weight-bold small">Deaths</div>
                      </div>
                    </div>
                  </div>
           </div>
		    <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success p-4 mfe-3">
                      <i class="fa fa-check-circle fa-lg"></i>
                      </div>
                      <div>
                        <div class="text-value text-primary" id="Improved"></div>
                        <div class="text-muted text-uppercase font-weight-bold small">Improved</div>
                      </div>
                    </div>
				</div>
           </div>
		    <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success p-4 mfe-3">
                      <i class="fa fa-check fa-lg"></i>
                      </div>
                      <div>
                        <div class="text-value text-primary" id="Recovered"></div>
                        <div class="text-muted text-uppercase font-weight-bold small">Recovered</div>
                      </div>
                    </div>
				</div>
           </div>
		    <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-gradient-success p-4 mfe-3">
                      <i class="fa fa-bed fa-lg"></i>
                      </div>
                      <div>
                        <div class="text-value text-primary" id="Unimproved"></div>
                        <div class="text-muted text-uppercase font-weight-bold small">Unimproved</div>
                      </div>
                    </div>
				</div>
           </div>
		   <!-- Modal -->
<form name="frmAdmissionStatistics" id="frmAdmissionStatistics" method="POST">
<div class="modal fade" id="Datemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text text-white" id="exampleModalLongTitle"><i class="fa fa-calendar"></i> Date Range</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	
		<div class="form-row">
            <label for="dateFrom" class="form-control-label">Date from:</label>
            <input type="date" class="form-control" name="dateFrom" id="dateFrom">
            <label for="dateTo" class="form-control-label">Date To:</label>
            <input type="date" class="form-control" name="dateTo" id="dateTo">
          </div>
		
      </div>
      <div class="modal-footer bg-secondary">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
        <button type="submit" name="Submit" class="btn btn-primary"><i class="fa fa-check"></i></button>
      </div>
    </div>
  </div>
</div>
</form>
	</div>
	<script src="<?php echo base_url()?>assets/js/statistics.js"></script>