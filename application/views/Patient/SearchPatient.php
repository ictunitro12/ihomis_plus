<style>

table#TblPatSearchList.dataTable tbody tr:hover {
  background-color: #80DB88;
}

table#visitLogList.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>

<form id="frmPatSearch" method="post">
	<div class="modal" id="PatSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
			<div class="modal-body">
			<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
		<h1 class="modal-title text-success"><i class="fa fa-thin fa-search fa-2x"></i> Patient Search</h1>
		<br></br>
		<div class="row">
				<div class=" h6 col-md-2 col-form-label text-success  text-default mb-1">
				 Record#:
				</div>
				<div class="col-md-10 mb-2">
					<input type="text" class="form-control form-control-lg" placeholder="Hospital Number" name ="shpercode" id="shpercode" autocomplete="off" >
				</div>
				<div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
				 Lastname:
				</div>
				<div class=" col-md-10 mb-2">
					<input type="text" class="form-control form-control-lg" placeholder="LastName" name ="slname" id="slname" autocomplete="off" >
				</div>
				<div class="h6 col-md-2 col-form-label text-success text-default mb-1">
				 Firstname:
				</div>
				<div class="col-md-10 mb-2">
					<input type="text" class="form-control form-control-lg" placeholder="FirstName" name ="sfname" id="sfname" autocomplete="off" >
				</div>
				<div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
				Middlename:
				</div>
				<div class="col-md-10 mb-2">
					<input type="text" class="form-control form-control-lg" placeholder="MiddleName" name ="smname" id="smname" autocomplete="off" >
				</div>
				<div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
				Birthdate:
				</div>
				<div class="col-md-10 mb-2">
					<input type="date" class="form-control form-control-lg" placeholder="BirthDate" name ="sbod" id="sbod" autocomplete="off" >
				</div>
				<div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
				 Sex:
				</div>
				<div class="col-md-10 mb-2">
					<select name="ssex" id="ssex" class="form-control form-control-lg" >
						<option>Select</option>
						<option value="M">Male</option>
						<option  value="F">Female</option>
					</select>
				</div>
			</div>
			<button type="submit" name="sSubmit" class="btn btn-outline-success btn-lg btn-block btn-ladda text-success" data-color="green" data-style="expand-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
			</div>
			</div>
		</div>
	</div>
</form>

<form id="frmPatSearchList" method="post">
<div class="modal" id="PatSearchList" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg">
   <div class="modal-content">
	<div class="modal-body">
	<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
	  <h3 class="modal-title text-success"><i class="fa fa-th-list"></i>&nbsp Patient List</h3>
		<table id="TblPatSearchList" class="table table-hover table-sm  table-bordered table-condensed"  style="cursor:pointer" width="100%">
			<thead>
				<tr>
					<th>Health Record:</th>
					<th>Patient name</th>
					<th>Date of Birth</th>
					<th>Sex</th>
				</tr>
			</thead>
		</table>
	<div class="btn-group float-right">
	  <a href="<?php echo site_url('Patient/PatientRegister');?>" class="btn btn-outline-success  btn-ladda btn-md " data-style="zoom-in"><i class="fa fa-plus"></i> Register</a>
	  <button  class="btn btn-outline-danger  btn-ladda btn-md"  data-style="zoom-in" onclick="searchAgain();"><i class="fa fa-close"></i>Cancel</button>
     </div>
    </div>
  </div>
</div>
</div>
</form>

<form id="frmPatHistoryList" method="post">
<div class="modal" id="PatHistoryList" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
   <div class="modal-content">
	<div class="modal-body">
	  <h3 class="modal-title text-success"><i class="fa fa-th-list"></i> Visit Log</h3>
		<table id="visitLogList"  style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
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
      </div>
		<div class="modal-footer">
			<button  class="btn btn-outline-danger btn-ladda btn-md" onclick="searchPatientList();" ><i class="fa fa-close"></i> Cancel</button>
		</div>
    </div>
  </div>
</div>
</form>

