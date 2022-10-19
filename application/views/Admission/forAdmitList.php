<style>

table#forAdmissionList.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<form id="frmforAdmit" method="post">
<div class="modal fade" id="forAdmitModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
   <div class="modal-content">
   	<div class="modal-header bg-success">
	   <h4 class="modal-title text-white"><i class="fa fa-th-list"></i> Patient For Admission List</h4>
          <button type="button" class="close" aria-label="Close" id="closeforadm">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
	<div class="modal-body">
	
	<fieldset class="form-group">
		<div class="input-group"><span class="input-group-prepend">
			<span class="input-group-text">ENCOUNTER DATE:&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i></span></span>
			<input class="form-control" name="foradmissiondate" id="foradmissiondate" type="date">
		</div>
	</fieldset>

	  <!-- h4 class="modal-title text-success"><i class="fa fa-th-list"></i> Patient List</h4 -->
	<table id="forAdmissionList"  style="cursor:pointer;"class="table table-hover table-sm table table-striped table-bordered table-condensed" width="100%">
	<thead>
	<tr>
		<th>Health Record:</th>
		<th>Patient name</th>
		<th>Date of Birth</th>
		<th>Sex</th>
		<th>From</th>
		<th>Reason</th>
	</tr>
	</thead>
	</table>
      </div>
    </div>
  </div>
</div>
</form>