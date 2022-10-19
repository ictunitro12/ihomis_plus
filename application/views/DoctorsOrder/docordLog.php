<div class="card card-accent-success">
	<h4 class="card-header">
		<div class="row">
			<div class="col-md-6">
				<div class="text text-success"> 
					<i class="fa fa-user-md"></i>
					&nbsp Doctor's order
				</div>
			</div>
		</div>
	</h4>
<div class="card-body">
   <div id="caseInfo"></div>
   <hr></hr>
	<ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
		 <li class="nav-item">
			<a class="nav-link text text-success active" id="exam-tab" data-toggle="tab" href="#exam" role="tab" aria-controls="exam" aria-expanded="true"><i class="fa fa-flask fa-2x"></i>&nbsp Examination</a>
		 </li>
		 <li class="nav-item">
			<a class="nav-link text text-success" id="prescri-tab" data-toggle="tab" href="#prescri" role="tab" aria-controls="prescri"><i class="fa fa-prescription fa-2x"></i>&nbsp Prescription</a>
		 </li>
		 <li class="nav-item">
			<a class="nav-link text text-success" id="supplies-tab" data-toggle="tab" href="#supplies" role="tab" aria-controls="supplies"><i class="fa fa-medkit fa-2x"></i> Supplies</a>
		 </li>
		 <li class="nav-item">
			<a class="nav-link text text-success" id="diet-tab" data-toggle="tab" href="#diet" role="tab" aria-controls="diet"><i class="fa fa-cutlery fa-2x"></i>&nbsp Diet</a>
		 </li>
	</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="exam" role="tabpanel" aria-labelledby="exam-tab">
  <div class=" float-left">
	<div class="h5 p-2 text-success"><i class="fa fa-flask"></i> Order list</div>
  </div>
  <div class="btn-group p-2 float-right">
		<button class ="btn btn-outline-success btn-md" name = "btnAddExam" id = "btnAddExam" onclick="addExam('<?php echo $enccode; ?>','<?php echo $hpercode;?>');"><i class="fa fa-plus"></i> Add Examination</button>
		<button class ="btn btn-outline-success btn-md" name = "btnRxExam" id = "btnRx"><i class="fa fa-file-pdf"></i></button>
	</div>
  <table id="docOrdexam" class="table table-sm table-striped table-bordered table-condensed table-hover "  width="100%">
		<thead>
			<tr>
				<th></th>
				<th>Datelog</th>
				<th width="140px">Code</th>
				<th>Description</th>
				<th>Priority</th>
				<th>Reason</th>
				<th>Notes</th>
				<th>Fee</th>
				<th width="50px"></th>
			</tr>
		</thead>
	</table>  
  </div>
  <div class="tab-pane fade" id="prescri" role="tabpanel" aria-labelledby="prescri-tab">
  <div class="float-left">
	<div class="h5 p-2 text-success"><i class="fa fa-pills"></i> Prescription/s List</div>
  </div>
	<div class="btn-group p-2 float-right">
		<button class ="btn btn-outline-success btn-md" name = "btnAddPrescription" id = "btnAddPrescription"><i class="fa fa-plus"></i> Add Prescription/Order</button>
		<button class ="btn btn-outline-success btn-md" name = "btnCancelOrder" disabled id ="btnCancelOrder"><i class="fa fa-remove"></i> Cancel Order</button>
		<button class ="btn btn-outline-success btn-md" name = "btnRxDrug" id = "btnRxDrug"><i class="fa fa-file-pdf"></i> e Prescription</button>
	</div>
   <table id="docOrdpres" style ="cursor:pointer;"; class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%"> 
		<thead>
			<tr>
				<th width="200px"></th>
				<th></th>
				<th></th>
				<th>DateLog</th>
				<th>Code</th>
				<th>ctr</th>
				<th>Drug Description</th>		
				<th>Ordering Doctor</th>
				<th>Priority</th>				
				<th>Type</th>	
				<th>Order Status</th>					
				<th width="50px"></th>
			</tr>
		</thead>
	</table>
  </div>
  <div class="tab-pane fade" id="supplies" role="tabpanel" aria-labelledby="supplies-tab">
<div class="btn-group p-2 float-right">
	<button class ="btn btn-outline-success btn-md" id="btnAddSupplies" name="btnAddSupplies"><i class="fa fa-plus"></i> Add Supplies</button>
	<button class ="btn btn-outline-success btn-md" name = "btnCancelSupp" disabled id ="btnCancelSupp"><i class="fa fa-remove"></i> Cancel Order</button>
	</div>
  <table id="docOrdsupp" style ="cursor:pointer;"; class="table table-sm table-striped table-bordered table-condensed table-hover "  width="100%"> 
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th>Date Log</th>
				<th width="200px">Code</th>
				<th>Item description</th>
				<th>Quantity</th>
				<th>Ordering Doctor</th>
				<th>Priority</th>
				<th>Status</th>
				<th width="40px"></th>
			</tr>
		</thead>
	</table>
  </div>
  <div class="tab-pane fade" id="diet" role="tabpanel" aria-labelledby="diet-tab">
  <div class="btn-group p-2 float-right">
	<button class ="btn btn-outline-success btn-md" id="btnAddDiet" name="btnAddSupplies"><i class="fa fa-plus"></i> Add Diet</button>
	<button class ="btn btn-outline-success btn-md" name = "btnCancelDiet" disabled id ="btnCancelSupp"><i class="fa fa-remove"></i> Cancel Order</button>
	</div>
  <table id="docOrdDiet" class="table table-sm table-striped table-bordered table-condensed table-hover "  width="100%"> 
		<thead>
			<tr>
				<th width="200px"></th>
				<th></th>
				<th></th>
				<th>Date log</th>
				<th>Ordering Doctor</th>
				<th>Type</th>
				<th>Date</th>
				<th>Time</th>
				<th width="50px"></th>
			</tr>
		</thead>
	</table>
  </div>
</div>
</div>
</div>