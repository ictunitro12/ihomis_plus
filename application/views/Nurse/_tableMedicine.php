<style>

table#medStock.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#requestMed.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#requestMed.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<?php $this->load->view('nurse/drugsModalreq')?>
	<div class="card card-accent-success">
		<div class="card-header">
		<div class="clearfix">
			<div class="card-title h4 text text-success float-left"> 
				<i class="fa fa-bar-chart"></i>
				&nbsp Stocks <span>Drugs and Medicine</span>
			</div>
			<button class ="btn btn-outline-success btn-md float-right" id="btnRequestmeds" >
				<i class="fa fa-plus"></i>  Request
			</button>
		</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
					<table id="medStock" style ="cursor:pointer" class="table table-sm table-striped table-bordered table-hover" width="100%" >
						<thead>
							<tr >
								<th  style="text-align:center; vertical-align:middle" rowspan="2">Code</th>
								<th style="text-align:left; vertical-align:middle" rowspan="2">Item Description</th>
								<th style="text-align:center" colspan="2">Stock</th>
							</tr>
							<tr>
								<th style="text-align:center">Level</th>
								<th style="text-align:center">Balance</th>
							</tr>
						</thead>
					</table>
			</div>
		</div>
	</div>
<div class="modal" id="drugReqModal"  role="form">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
	<div class="modal-content">
	<div class="modal-body">
	<h2 class=" h4 modal-title text-success"><i class="fa fa-reply"></i> Receive/Request/Return</h2>

<ul class="nav nav-tabs nav-justified mb-1" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active  text text-success" id="requestMed-tab" data-toggle="tab" href="#requestMed" role="tab" aria-controls="requestMed" aria-expanded="true"> <i class="fa fa-reply"></i>&nbsp Request</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text text-success" id="receivedMed-tab" data-toggle="tab" href="#receivedMed" role="tab" aria-controls="receivedMed" aria-expanded="true"> <i class="fa fa-random"></i>&nbsp Receive</a>
  </li>
 </ul>
<div class="tab-content" id="requestMedTab">
	<div class="tab-pane  show active mb-1" id="vital" role="tabpanel" aria-labelledby="tab">
<button class ="btn btn-outline-success btn-sm Add" id="btnAddrequestmed" >
<i class="fa fa-plus"></i> New Request
</button>
<br>
<cite class="text text-info">Note: Click on the row inside the table to interact.</cite>
	<div class="table-responsive">
		<table id="requestMed"style ="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th>Date</th>
					<th>Item</th>
					<th>Quantity</th>
					<th>Ward</th>
					<th>Pharmacy</th>
					<th>Priority</th>
				</tr>
			</thead>
		</table>
	</div>
	</div>
	<div class="tab-pane " id="requestMed" role="tabpanel" aria-labelledby="-tab">
		<br>
			<button class ="btn btn-success btn-sm" id="btnAddVital" >
			<i class="fa fa-plus"></i> 
			</button>
		<br>
	<div class="table-responsive">
		<table id="requestMed" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
				<th>Quantity</th>
				<th>Item</th>
					<th>Quantity</th>
					<th>Priority</th>
					<th>Ward</th>
					<th>Pharmacy</th>
					<th>Priority</th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</div>

<script src="<?php echo base_url()?>assets/scripts/pharmacy/supplies_stock.js"></script>