<style>

table#drugsAndMeds_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#drugMedsIssue.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#lotnotbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#drugMedsReturn.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
	<div  name="OPD_buttons" class="row">
			<div class="col-md-6">
				 <div class="h4  text-success"><i class="fa fa-user-md"></i> Doctor/s Order</div>
				 <cite id="txtDateRange" class="text-success p-1 mb-2 p-1 h6"></cite>
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
	<div class="tab-pane fade show active" id="drugsAndMeds" role="tabpanel" aria-labelledby="drugsAndMeds-tab">
		<table id="drugsAndMeds_tbl" style="cursor:pointer" class="table table-sm  table-bordered table-condensed table-hover" style="width=100%";>
			<thead>
				<tr>
					<th width="20px">Date</th>
					<th width="140px">Chargeslip</th>
					<th width="300px">Patient Name</th>
					<th width="450px">Description</th>
					<th width="5px">Ordered(Qty)</th>
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
		
	</div>
	
<form id="frmIssueDrug" name="frmIssueDrug">
	<div class="modal" id="modalDrugIssue" role="dialog"  tab-index="1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="h4 modal-title text-success"><i class="fa fa-pills"></i> Ordered List/s</div>
			</div>
			<div class="modal-body">
				<div id="issue_patientInfo"></div>
					<h6 class="text text-success"><i class="fa fa-th-list"></i> List of Drug/Medicine</h6>
				<table id="drugMedsIssue" style="cursor:pointer" class="table table-sm  table-bordered table-condensed table-hover compact" width="100%">
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
							<th><small>dmdcomb</small></th>
							<th><small>dmdctr</small></th>
							<th><small>chrgcod</small></th>
							<th><small>dmdprdte</small></th>
						</tr>
					</thead>
				</table>
				<input type="hidden" name="action" id="action">
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


    <div class="modal" name="drugIssueModal" id="drugIssueModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" tab-index="-1" role="form">
		<div class="modal-content">
		<div class="modal-header">
		<div class="modal-title">
			<div class="text text-success h4"><i class="fa fa-pills"></i> Issue Drug</div>
		</div>
		</div>
			<div class="modal-body">
				<table id="lotnotbl"  style="cursor:pointer;"class="table table-md table-striped table-bordered  table-hover" width="100%">
					<thead>
						<tr>
							<th width="50px" >Lot No</th>
							<th width="100px">Description(<small>(Generic/Strength/Form/Route)</small>)</th>
							<th  style="text-align:center; vertical-align:middle;" >Price</th>
							<th  style="text-align:center; vertical-align:middle;">Available</th>
							<th  style="text-align:center; vertical-align:middle;">dmdcomb</th>
							<th  style="text-align:center; vertical-align:middle;">dmdctr</th>
							<th  style="text-align:center; vertical-align:middle;">dmhdrsub</th>
							<th  style="text-align:center; vertical-align:middle;">Expiry</th>
							<th  style="text-align:center; vertical-align:middle;">Account</th>
							<th  style="text-align:center; vertical-align:middle;">Date as of</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"  data-style="zoom-in"><i class="fa fa-close"></i> Close</button>
			</div>
		</div>
	</div>
	</div>



  <div class="modal" name="pharmChargeSlip" id="pharmChargeSlip" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" tab-index="-1" role="form">
		<div class="modal-content">
		<div class="modal-header">
		<div class="modal-title">
			<div class="text text-success h4"><i class="fa fa-file-pdf"></i> <b id="chrgno"></b></div>
		</div>
		</div>
			<div class="modal-body">
				<iframe id="chargeslip" type="application/pdf" frameborder="2" width="100%" height="500px"></iframe>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"  data-style="zoom-in"><i class="fa fa-close"></i> Close</button>
			</div>
		</div>
	</div>
	</div>

	
	<form name="formReturn" id="formReturn">	
	<div class="modal" id="modalDrugReturn">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="form">
		<div class="modal-content">
			<div class="modal-header">
				<div class="h4 modal-title text-success"><i class="fa fa-user"></i> Return</div>
			</div>
			<div class="modal-body">
					<i id="sample"></i>
					<div id="return_patientInfo"></div>
					<h6 class="text text-success"><i class="fa fa-th-list"></i> List of Drug/Medicine</h6>
				<table id="drugMedsReturn" style="cursor:pointer" class="table table-sm  table-bordered table-condensed table-hover compact" width="100%">
					<thead>
						<tr>
							<th><small>#</small></th>
							<th><small>Ordered</small></th>
							<th><small>Issued</small></th>
							<th><small>Lot No</small></th>
							<th><small>Description</small></th>
							<th><small>Status</small></th>
							<th><small>Issued</small></th>
							<th><small>Return</small></th>
							<th><small>Unit Price</small></th>
							<th><small>Amount</small></th>
							<th><small>docointkey</small></th>
							<th><small>enccode</small></th>
							<th><small>hpercode</small></th>
							<th><small>dmdcomb</small></th>
							<th><small>dmdctr</small></th>
							<th><small>dmhdrsub</small></th>
							<th><small>qty</small></th>
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
<script src="<?php echo base_url()?>assets/scripts/pharmacy/docord.js"></script>

	