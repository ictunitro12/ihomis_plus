<style>

table#examList.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#prescList.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#physical.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#systemreview.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
<h4 class="card-header">
		<div class="row">
			<div class="col-md-6">
				<div class="text text-success"> 
					<i class="fa fa-medkit"></i>
					&nbsp Result Lists
				</div>
			</div>
		</div>
	</h4>
<div class="card-body">
<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active  text text-success" id="lab-tab" data-toggle="tab" href="#lab" role="tab" aria-controls="lab" aria-expanded="true"> <i class="fa fa-flask"></i>&nbsp Examination</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text text-success" id="pres-tab" data-toggle="tab" href="#pres" role="tab" aria-controls="pres"><i class="fa fa-pills"></i> Prescription</a>
  </li>
 <li class="nav-item">
    <a class="nav-link text text-success" id="rthe-tab" data-toggle="tab" href="#rthe" role="tab" aria-controls="rthe"><i class="fa fa-medkit"></i> Supplies</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text text-success" id="radio-tab" data-toggle="tab" href="#radio" role="tab" aria-controls="radio"><i class="fa fa-cutleryre"></i> Diet</a>
  </li>
</ul>
<div class="tab-content " id="myTabContent">
<div class="tab-pane fade show active" id="lab" role="tabpanel" aria-labelledby="exam-tab">
<br></br>
	<table id="examList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">							
		<thead>
			<tr>
				<th></th>
				<th width="140px">Date Log</th>
				<th width="30px" >Code</th>
				<th>Description</th>
				<th width="60px">Priority</th>
				<th>Note/Remarks</th>
				<th width="50px">Status</th>
				<th width="100px">Type</th>
				<th width="50px" ></th>
			</tr>
		</thead>							
	</table>
</div>
 <div class="tab-pane fade" id="pres" role="tabpanel" aria-labelledby="pres-tab">
<br></br>

	  <table id="prescList" class="table table-sm table-striped table-bordered table-condensed table-hover "  width="100%"> 
		<thead>
			<tr>
				<th width="200px"></th>
				<th></th>
				<th></th>
				<th>DateLog</th>
				<th>Description</th>
				<th>Qty intake</th>		
				<th>Ordering Doctor</th>
				<th>Priority</th>				
				<th width="50px"></th>
			</tr>
		</thead>
		</tfoot>
	</table>
</div>
<div class="tab-pane fade" id="phyexam" role="tabpanel" aria-labelledby="phyexam-tab">
<br>
<button class ="btn btn-success btn-sm" data-toggle="modal" data-target="#PhyExamModal"><i class="fa fa-plus"></i></button>
	<table id="physical" class="table table-sm table-striped table-bordered table-condensed table-hover " width="100%">					
		<thead class="thead-dark">
			<tr>
				<th width="140px">DATELOG</th>
				<th>DESC</th>
				<th>STATUS</th>									
				<th width="50px"></th>
			</tr>
		</thead>		
	
	</table>
</div>
<div class="tab-pane fade" id="system" role="tabpanel" aria-labelledby="system-tab">
<br>
<button class ="btn btn-success btn-sm" data-toggle="modal" data-target="#outpatientSysRevModal"><i class="fa fa-plus"></i></button>
	<table id="systemreview" class="table table-sm table-striped table-bordered table-condensed table-hover " width="100%">					
		<thead class="thead-dark">
			<tr>
				<th width="140px">DATELOG</th>
				<th>HISTORY</th>
				<th>TYPE</th>
				<th>STATUS</th>									
				<th width="80px"></th>
			</tr>
		</thead>		
		
	</table>
</div>
</div>
<div class="card-footer"></div>
</div>
</div>

