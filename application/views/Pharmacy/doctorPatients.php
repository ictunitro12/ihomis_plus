<style>

table#docOrdexam.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#docOrdpres.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
  <li class="nav-item">
    <a class="nav-link text text-success active" id="adm-tab" data-toggle="tab" href="#adm" role="tab" aria-controls="adm" aria-expanded="true"><i class="fa fa-flask fa-2x"></i>&nbsp INPATIENT/S</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text text-success" id="opd-tab" data-toggle="tab" href="#opd" role="tab" aria-controls="opd"><i class="fa fa-medkit  fa-2x"></i>&nbsp OUTPATIENT/S</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text text-success" id="er-tab" data-toggle="tab" href="#er" role="tab" aria-controls="er"><i class="fa fa-bar-chart  fa-2x"></i> EMERGENCY</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="exam" role="tabpanel" aria-labelledby="adm-tab">

  <table id="docOrdexam" class="table table-sm table-striped table-borderless table-condensed table-hover ">
		<thead class="thead-dark">
			<tr>
				<th></th>
				<th width="140px">CODE</th>
				<th>DESCRIPTION</th>
				<th>CHARGESLIP</th>
				<th>PRIORITY</th>
				<th>REASON</th>
				<th>NOTES</th>
				<th>READING FEE</th>
				<th>READING FEE</th>
				<th>READING FEE</th>
				<th width="50px"></th>
			</tr>
		</thead>
		<tfoot class="thead-dark">
			<tr>
				<th></th>
				<th width="140px"></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th> </th>
				<th></th>
				<th width="50px"></th>
			</tr>
		</tfoot>
	</table>  
  </div>
  <div class="tab-pane fade" id="prescri" role="tabpanel" aria-labelledby="prescri-tab">
  <table id="docOrdpres" class="table table-sm table-striped table-borderless table-condensed table-hover "  width="100%"> 

		<thead class="thead-dark">
			<tr>
				
				<th width="200px">DRUG ITEM</th>
				<th>CHARGESLIP</th>
				<th>QTY INTAKE</th>
				<th>UNITS</th>
				<th>TIMES</th>
				<th>UNITS</th>
				<th>DAYS</th>
				<th>UNITS</th>
				<th>1st</th>
				<th>2nd</th>
				<th>3rd</th>
				<th>4th</th>
				<th></th>
				<th ></th>
				<th width="50px"></th>
			</tr>
		</thead>
		<tfoot class="thead-dark">
			<tr>
				<th width="200px"></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
					<th ></th>
				<th ></th>
			
				<th width="50px"></th>
			</tr>
		</tfoot>
	</table>


  </div>
  <div class="tab-pane fade" id="supplies" role="tabpanel" aria-labelledby="supplies-tab">

  <table id="docOrdsupp" class="table table-sm table-striped table-borderless table-condensed table-hover "  width="100%"> 
		<thead class="thead-dark">
			<tr>
				<th width="200px">ITEM</th>
				<th>CHARGESLIP</th>
				<th width="50px"></th>
			</tr>
		</thead>
		<tfoot class="thead-dark">
			<tr>
				<th width="200px"></th>
				<th ></th>
				<th width="50px"></th>
			</tr>
		</tfoot>
	</table>
  </div>
</div>
