<form id = "frmAdmit" name="frmAdmit">
<div class="modal" id="patientAdmitModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-body">
		<h4 class="modal-title text-success">	<i class="fa fa-stethoscope"></i>&nbsp Admission</h4>
		<div class="form-row">
			<div class="col-md-5 col-form-label text-default mb-1">
				Date & time Entered: 
			</div>	
			<div class="col-md-7">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" step="any"  id="admDate" name="admDate">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Date & time Discharge:  
			</div>	
			<div class="col-md-7">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"  step="any"   id="admDisdate" name="admDisdate">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Admitting notes: 
			</div>	
			<div class="col-md-7">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="admDiag" name="admDiag" placeholder="Notes"></textarea>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Mode of Admission:
			</div>	
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="admMode" name="admMode" placeholder ="Please Select">
				<option value="">Please Select</option>
				<option value="UNKNO">Unknown</option>
				<option value="WILET">Walk-in following non-ambulance, law enforce trans</option>
				<option value="WIPRI">Walk-in following transport to private tran</option>
				<option value="WIPUB">Walk-in following transport to public tran</option>
				<option value="WINSP">Walk-in not ontherwise specified</option>
				</select>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Pregnancy Status: 
			</div>	
			<div class="col-md-7">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="admPreg" id="admPreg" value="Y" >
				  <label class="form-check-label" for="exampleRadios1">Yes</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="admPreg" id="admPreg" value="N">
				  <label class="form-check-label" for="exampleRadios2">No</label>
				</div>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Name of Informant:
			</div>
			<div class="col-md-7 col-form-label text-default mb-1">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="patinfname" name="patinfname" placeholder="Full name" >
			</div>	
			<div class="col-md-5 col-form-label text-default mb-1">
				Complete address:
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="patinfadd" name="patinftel" placeholder="Complete address">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Telephone #:
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="patinftel" name="patinftel" placeholder="Contact no">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Relation:
			</div>	
			<div class="col-md-7">
				<select name="relacode" id="relacode" class="form-control">
					<option value="">Select</option>
					<option value="MOTHE">Mother</option>
					<option value="FATHE">Father</option>
					<option value="SISTE">Sister</option>
					<option value="BROTH">Brother</option>
					<option value="AUNT">Aunt</option>
					<option value="UNCLE">Uncle</option>
					<option value="NEPHE">Nephew</option>
					<option value="NIECE">Niece</option>
					<option value="COUSI">Cousin</option>
					<option value="SPOUS">Spouse</option>
					<option value="FHEAD"></option>
				</select>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Source Payment(1)
			</div>	
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="admsop1" name="admsop1" placeholder ="Please Select">
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
				Source Payment(2) 
			</div>	
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="admsop2" name="admsop2" placeholder ="Please Select">
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
				Source Payment(3)
			</div>	
			<div class="col-md-7">
				<select  class="form-control form-control-mb" autocomplete="off" id="admsop3" name="admsop3" placeholder ="Please Select">
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
			<input type="hidden" id="admhpercode" name="admhpercode">
			<input type="hidden" id="admenccode" name="admenccode">
	</div>
	</div>
	<div class="modal-footer">
		<div class="btn-group">
			<button type="submit" name="saveAdmit" id="saveAdmit"  class="btn btn-outline-success btn-ladda" data-style="slide-right"><i class="fa fa-save"></i>&nbsp Save</button>
			<button type="button" class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>Close</button>
		</div>
	</div>
</div>
</div>
</div>
</form>