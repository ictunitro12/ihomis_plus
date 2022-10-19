		
		    <div class="tab-pane" id="transaction" role="tabpanel" aria-labelledby="transaction-tab">
		<div  name="OPD_buttons" class="row">
			<div class="col-md-12">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button data-toggle="collapse" data-target="#dateFilter" id ="filterOPD" title="Filter Date"  class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">
						<i class="fa fa-calendar"></i> 
					</button>
				</div>
			</div>
		</div>
			<div class="collapse float-right" id="dateFilter">
			   <form name="frmFilter" id="frmFilter">
				<div class="h5 text-success"> <i class="fa fa-filter"></i> Filter date:</div>
					<div class="shadow-lg p-3 mb-1"   style="width: 40rem;">
						<div class="form-label text-success">Select dates of consultations:</div>
						<div class="input-group mb-1">
							<input type="datetime-local" required class="form-control form-control-md" id="start"  name="start">
							<span class="input-group-text">-</span>
							<input type="datetime-local" required class="form-control form-control-md" id="end" name="end">
							<button class="btn btn-outline-success" id="btnFilter" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
	<table id="chargeTbl"  style="cursor:pointer;"class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
		<thead>
			<tr>
				<th style="text-align:center; vertical-align:middle;" width="10%">Date</th>
				<th style="text-align:center; vertical-align:middle;" width="10%">Chargeslip</th>
				<th style="text-align:left; vertical-align:middle;" width="50%">Patient name</th>
				<th style="text-align:center; vertical-align:middle;" width="15%">Amount</th>
				<th style="text-align:center; vertical-align:middle;" width="5%"></th>
			</tr>
		</thead>
	</table>
	</div>
	<script src="https://cdn.datatables.net/scroller/2.0.5/js/dataTables.scroller.min.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/cashier/charges.js"></script>