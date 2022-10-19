
<form id="frmPatHistoryList" method="post">
<div class="modal fade" id="PatHistoryList" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
   <div class="modal-content">
	<div class="modal-body">
	  <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> InpatientLog</h1>
	<table id="visitLogList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead >
				<tr>
					<th>EntryDate</th>
					<th>Entrytime</th>
					<th>DischargeDate</th>
					<th>Discharge Time</th>
					<th>Encounter</th>
				</tr>
			</thead>
		
	</table> 
		<button  class="btn btn-danger btn-ladda btn-md" onclick="searchPatientList();" ><i class="fa fa-close"></i></button>	
      </div>
     
    </div>
  </div>
</div>
</form>