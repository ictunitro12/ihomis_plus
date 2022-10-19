
	<div class="modal" id="ModalManageRoom" tabindex="-1" role="form">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
	<div class="modal-content">
	<div class="modal-body">
	<div class="h4 modal-title text-success" ><i class="fa fa-bed"></i>&nbsp Manage Room</div>
	<div class="row">
	<div class="col-md-3">
	<img id="patientPhoto" src="" class="img-fluid img-thumbnail" height="200" width="200"></img>
	</div>
	<div class="border-right"></div>
	<div class="col-md-8">
	<table class="table table-sm table-striped">
	<tr>
	<td class="bg-success" >Case Number</td>
	<td id="roomCasenum"></td>
	</tr>
	<tr>
	<td class="bg-success" >Hospital Record no:</td>
	<td id="roomHpercode"></td>
	</tr>
	<tr>
	<td class="bg-success" >Patient Name:</td>
	<td id="roomPatName"></td>
	</tr>
	<tr>
	<td class="bg-success" >Age:</td>
	<td id="roomAge"></td>
	</tr>
	<tr>
	<td class="bg-success" >Date of Admission:</td>
	<td id="roomAdmDate"></td>
	</tr>
	<tr>
	<td class="bg-success" >Ward/Room/Bed:</td>
	<td id="roomWard"></td>
	</tr>
	</table>
	</div>
	</div>
	<div class="btn-group">
	<button class="btn btn-outline-success btn-md btn-ladda" id="btnTransferRoom"><i class="fa fa-refresh"></i> Transfer</button>
	<button class="btn btn-outline-success btn-md btn-ladda" id="btnAddRoom"><i class="fa fa-plus"></i> Add Room</button>
	</div>
	<small class="text text-success">Note:To revoke click the room.</small>
	<hr class="card card-accent-success">
	<h5 class="text text-success"><i class="fa fa-th-list"></i> Room History</h5>
	<table id="InPatientRoom" style="cursor:pointer;" class="table table-sm table-bordered table-condensed table-hover ">	
	<thead>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th>Occupancy </th>
			<th>Room</th>
			<th>Bed</th>
			<th>Status</th>
			<th>Type</th>
			<th width="50px"></th>
		</tr>
	</thead>
	</table>
	</div>
	<div class="modal-footer">
	<button class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
	</div>
	</div>
	</div>
	</div>



