<form id="frmDischargePatient" name="frmDischargePatient">
	<div class="modal" id="ModalDischargePatient" role="form">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
	<div class="modal-content">
	<div class="modal-body">
	<h4 class="modal-title text-success mb-2" ><i class="fa fa-sign-out"></i>&nbsp Discharge Patient </h4>
	<div class="row">
	<div class="col-md-3">
	<img id="patientPhoto" src="" class="img-fluid img-thumbnail patientPhoto" height="200" width="200"></img>
	</div>
	<div class="col-md-9">
		<table class="table table-sm table-striped">
			<tr>
				<td class="bg-success" >Case Number</td>
				<td id="dischCasenum"></td>
			</tr>
			<tr>
				<td class="bg-success" >Hospital Record no:</td>
				<td id="dischHpercode"></td>
			</tr>
			<tr>
				<td class="bg-success" >Patient Name:</td>
				<td id="dischPatName"></td>
			</tr>
			<tr>
				<td class="bg-success" >Age:</td>
				<td id="dischAge"></td>
			</tr>
			<tr>
				<td class="bg-success" >Date of Admission:</td>
				<td id="dischAdmDate"></td>
			</tr>
			<tr>
				<td class="bg-success" >Ward/Room/Bed:</td>
				<td id="dischWard"></td>
			</tr>
			<tr>
				<td class="bg-success" >Balance:</td>
				<td id="dischBalance"></td>
			</tr>
		</table>
	</div>
	</div>
	<hr class="card card-accent-success"></hr>
	<div class="text-success h5"><i class="fa fa-info"></i> Discharge Details</div>
	<div class="form-row">
		<div class="col-md-2 col-form-label  text-default mb-1">
			Discharge Date/Time:
		</div>
		<div class="col-md-10">
			<input type="datetime-local" class="form-control form-control-md" stepup = "any" min="2017-12-31T12:59" name ="disDateTime" id="disDateTime" disabled>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-2 col-form-label  text-default mb-1">
			Death Date/Time:
		</div>
		<div class="col-md-10">
		<input type="datetime-local" class="form-control form-control-md"  name ="diedTime" id="diedTime" disabled>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-2 col-form-label  text-default mb-1">
			Disposition:
		</div>
	<div class="col-md-10">
		<select name="dischDisp" id="dischDisp"  onchange="ConditionRadio(this.value);"class="form-control form-control-md">
			<option value="">Select</option>
			<option value="DISCH">Discharge</option>
			<option value="TRANS" data-toggle="collapse" href="#collapseRefferal">Transfer/Referral</option>
			<option value="DAMA">Discharge against medical advise</option>
			<option value="ABSC">Absconded</option>
			<option value="DIEDD">Died</option>
		</select>
	</div>	
	</div>
	<div class="form-row">
		<div class="col-md-2 col-form-label  text-default mb-1">
			Condition:
		</div>
	<div class="col-md-3">
	<input type="radio" id="recov" name="dischCond" value="RECOV" disabled> Recovered</br>
	<input type="radio" id="impro" name="dischCond" value="IMPRO" disabled> Improved</br>
	<input type="radio" id="unimp" name="dischCond" value="UNIMP" disabled> Unimproved</br>
	</div>
		<div class="col-md-2 col-form-label  text-default mb-1">
			Died:
		</div>
	<div class="col-md-5">
	<input type="radio" id="diemi" name="dischCond" value="DIEMI" disabled> Died Less than 48hours Autopsied  </br>
	<input type="radio" id="diena" name="dischCond" value="DIENA" disabled>  Died Less than 48hours not Autopsied </br>
	<input type="radio" id="diepo" name="dischCond" value="DIEPO" disabled> Died Greater than 48hours Autopsied</br>
	<input type="radio" id="dpona" name="dischCond" value="DPONA" disabled>  Died Greater than 48hours not Autopsied</br>
	</div>
	</div>
	<div class="form-row">
		<div class="col-md-2 col-form-label  text-default mb-1">
			Discharge Notes:
		</div>
	<div class="col-md-10">
		<textarea type="text" class="form-control form-control-md" placeholder="Discharge Notes" name ="dischNotes" disabled id="dischNotes"></textarea>
	</div>
	</div>
	</div>
	<div class="modal-footer">
		<div class="btn-group">
			<button type ="submit" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-sign-out"></i> Discharge</button>
			<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i> Cancel</button>
		</div>
	</div>
		<input type = "hidden" name = "dischEnccode"  id="dischEnccode">
		<input type = "hidden" name = "discHpercode"  id="discHpercode">
		<input type = "hidden" name = "dischBed"  id="dischBed">
	</div>
	</div>
	</div>
	</form>