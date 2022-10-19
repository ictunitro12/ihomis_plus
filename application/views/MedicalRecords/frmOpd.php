<form id = "frmOpd" name="frmOpd">'
<div class="modal" id="patientOPDModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-body">
		<h4 class="modal-title text-success"><i class="fa fa-stethoscope"></i>&nbsp Outpatient</h4>
		<div class="form-row">
			<div class="col-md-5 col-form-label text-default mb-1">
				Datetime visit: 
			</div>	
			<div class="col-md-7">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" step="any"  id="opdvisit" name="opdvisit">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Datetime discharge:  
			</div>	
			<div class="col-md-7">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"  step="any"   id="opddisdate" name="opddisdate" placeholder ="mm/dd/yyyy">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				has tubercolusis:  
			</div>	
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="hastb" name="hastb" placeholder ="Please Select">
					<option value="">Select</option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>	
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				New/Followup:  
			</div>
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="newold" name="newold" placeholder ="Please Select">
					<option value="">Select</option>
					<option value="N">New</option>
					<option value="F">Followup</option>
				</select>	
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Source Payment(1):
			</div>	
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="opdsopcode1" name="opdsopcode1" placeholder ="Please Select">
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
				<select  class="form-control form-control-mb" autocomplete="off" id="opdsopcode2" name="opdsopcode2" placeholder ="Please Select">
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
				<select  class="form-control form-control-mb" autocomplete="off" id="opdsopcode3" name="opdsopcode3" placeholder ="Please Select">
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
			<input type="hidden" id="opdhpercode" name="opdhpercode"  />
			<input type="hidden" id="opdenccode" name="opdenccode"  />
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