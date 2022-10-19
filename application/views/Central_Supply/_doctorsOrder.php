<style>

table#supplyDocord_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#supIssue.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
	<div  name="OPD_buttons" class="row">
			<div class="col-md-6">
				 <div class="h4  text-success"><i class="fa fa-user-md"></i> Doctor's Order</div>
				 <cite id="txtDateRange" class="text-success p-1 mb-2 p-1 h6"></cite>
			</div>
			<div class="col-md-6">
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
	<table id="supplyDocord_tbl" style="cursor:pointer" class="table table-sm  table-bordered table-condensed table-hover" width="100%">
		<thead>
			<tr>
				<th width="20px">Date</th>
				<th width="140px">Chargeslip</th>
				<th width="300px">Patient Name</th>
				<th width="450px">Description</th>
				<th width="5px">Qty(Ordered)</th>
				<th width="20px">Price</th>
				<th width="20px">Amount</th>
				<th width="20px">Qty(Issued)</th>
				<th width="20px">Balance</th>
				<th width="5px">Status</th>
				<th width="5px">Priority</th>
				<th width="5px"></th>
			</tr>
		</thead>
	</table>
	
	
	<form id="frmIssueSup" name="frmIssueSup">
	<div class="modal" id="modalSupIssue"   tab-index="1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="h4 modal-title text-success"><i class="fa fa-pills"></i> Ordered List/s</div>
			</div>
			<div class="modal-body">
				<div id="issue_patientInfo"></div>
					<h6 class="text text-success"><i class="fa fa-th-list"></i> List of Supplies</h6>
				<table id="supIssue" style="cursor:pointer" class="table table-sm  table-bordered table-condensed table-hover compact" width="100%">
					<thead>
						<tr>
							<th><small>#</small></th>
							<th><small>Ordered</small></th>
							<th><small>Issued</small></th>
							<th><small>Lot No</small></th>
							<th><small>Description</small></th>
							<th><small>Status</small></th>
							<th ><small>Order</small></th>
							<th><small>Issue</small></th>
							<th><small>Unit Price</small></th>
							<th><small>Amount</small></th>
							<th><small>docointkey</small></th>
							<th><small>enccode</small></th>
							<th><small>hpercode</small></th>
							<th><small>cl2comb</small></th>
							<th><small>chrgcod</small></th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				<div class="btn-group">
					<button type="submit"  class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" ><i class="fa fa-check"></i> Save</button>
					<button class="btn btn-outline-danger btn-md btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i> Close</button>
				</div>
			</div>
		</div>
		</div>
	</div>
	</form>

	