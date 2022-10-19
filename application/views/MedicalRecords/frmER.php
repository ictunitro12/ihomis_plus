<form id = "frmER" name="frmER">'
<div class="modal" id="patientERModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-body">
		<h4 class="modal-title text-success"><i class="fa fa-stethoscope"></i>&nbsp Emergency</h4>
		<div class="form-row">
			<div class="col-md-5 col-form-label text-default mb-1">
				Registration Date: 
			</div>	
			<div class="col-md-7">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" step="any"  id="erdate" name="erdate">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Datetime discharge:  
			</div>	
			<div class="col-md-7">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"  step="any"   id="erdisdate" name="erdisdate" placeholder ="mm/dd/yyyy">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				 Notified:  
			</div>	
			<div class="col-md-7">
				<select class="form-control " name="selNotif"  id="selNotif" required>
					<option value="">Select</option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
					<option value="X">N/A</option>
				</select>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				 has TB:  
			</div>	
			<div class="col-md-7">
				<select class="form-control " name="hastb"  id="hastb" required>
					<option value="">Select</option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				 Condition on Arrival:  
			</div>	
			<div class="col-md-7">
				<select class="form-control form-control-mb" name="selCondArrival"  id="selCondArrival" required>
							<option value="">Select</option>
							<option value="GOOD">Good</option>
							<option value="FAIR">Fair</option>
							<option value="POOR">Poor</option>
							<option value="SHOCK">Shock</option>
							<option value="HEMOR">Hemorrhagic</option>
							<option value="DOA">Dead On Arrival</option>
							<option value="COMATOSE">Comatose</option>
						</select>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Case:  
			</div>	
			<div class="col-md-7">
				<select class="form-control form-control-mb-1" name="selCase"  id="selCase" required>
					<option value="">Select</option>
					<option value="Y">ER</option>
					<option value="N">Non ER</option>
				</select>
			</div>
			
			<div class="col-md-5 col-form-label text-default mb-1">
				Notes:  
			</div>	
			<div class="col-md-7">
				<textarea class="form-control form-control-mb-1" name="ernotes"  id="ernotes" placeholder="Notes" required>
				</textarea>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Source Payment(1):
			</div>	
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="ersopcode1" name="ersopcode1" placeholder ="Please Select">
					<option value="">Please Select</option>
					<option value="SELPA">Self pay</option>
					<option value="NOCHA">No Charge(free charity, special research or teaching</option>
					<option value="OTHGO">Other goverment payers</option>
					<option value="WORCO">Workers compensation</option>
					<option value="CRECA">c/o Credit Card</option>
					<option value="INSUR">Insurance Company</option>
					<option value="COMPA">Company</option>
					<option value="DOCTR">c/o Doctor</option>
					<option value="EMPLO">c/o Employee</option>
					<option value="HMOIN">Health Maitenance Organization</option>
					<option value="MEDIC">Medicare</option>
				</select>	
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Source Payment(2):
			</div>	
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="ersopcode2" name="ersopcode2" placeholder ="Please Select">
					<option value="">Please Select</option>
					<option value="SELPA">Self pay</option>
					<option value="NOCHA">No Charge(free charity, special research or teaching</option>
					<option value="OTHGO">Other goverment payers</option>
					<option value="WORCO">Workers compensation</option>
					<option value="CRECA">c/o Credit Card</option>
					<option value="INSUR">Insurance Company</option>
					<option value="COMPA">Company</option>
					<option value="DOCTR">c/o Doctor</option>
					<option value="EMPLO">c/o Employee</option>
					<option value="HMOIN">Health Maitenance Organization</option>
					<option value="MEDIC">Medicare</option>
				</select>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Source Payment(3):
			</div>	
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="ersopcode3" name="ersopcode3" placeholder ="Please Select">
					<option value="">Please Select</option>
					<option value="SELPA">Self pay</option>
					<option value="NOCHA">No Charge(free charity, special research or teaching</option>
					<option value="OTHGO">Other goverment payers</option>
					<option value="WORCO">Workers compensation</option>
					<option value="CRECA">c/o Credit Card</option>
					<option value="INSUR">Insurance Company</option>
					<option value="COMPA">Company</option>
					<option value="DOCTR">c/o Doctor</option>
					<option value="EMPLO">c/o Employee</option>
					<option value="HMOIN">Health Maitenance Organization</option>
					<option value="MEDIC">Medicare</option>
				</select>
			</div>	
			<input type="hidden" id="erhpercode" name="erhpercode"  />
			<input type="hidden" id="erenccode" name="erenccode"  />
	</div>
	</div>
	<div class="modal-footer">
		<div class="btn-group">
			<button type="submit" name="updatefrmAdmit" id="updatefrmAdmit"  class="btn btn-outline-success btn-ladda" data-style="slide-right"><i class="fa fa-save"></i>&nbsp Save</button>
			<button type="button" class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>Close</button>
		</div>
	</div>
</div>
</div>
</div>
</form>