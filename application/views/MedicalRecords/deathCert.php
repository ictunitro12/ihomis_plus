<form name="frmDeathCert" id="frmDeathCert" method="post">
<div class="modal" id="deathCertModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
	<div class="modal-content">
	<div class="modal-body">
		<h5 class="modal-title text-success"><i class="fa fa-exclamation-triangle"></i>&nbsp Death Certificate</h5>
		<div class="form-row">
			<div class="col-md-3 col-form-label text-default mb-1">
				Date of death:
			</div>	
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmpddate" name="frmpddate" placeholder = "MM/DD/YY" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date of Birth:
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmpatbdate" name="frmpatbdate" placeholder = "MM/DD/YY" />
			</div>
			<div class="col-md-3">
			
			</div>
			<div class="text-success col-md-5 border-right">
				Causes of death
			</div>
			<div class="text-success col-md-4">
				Interval between onset and death
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Immediate:
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmimmcoz" name="frmimmcoz" placeholder="Immediate cause of death" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frminimm" name="frminimm" placeholder="Immediate Interval" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Antecendent:
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmanteced" name="frmanteced"  placeholder="Antecedent cause of death" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frminant" name="frminant" placeholder="Antecedent Interval"/>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Underlying:
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmunderly" name="frmunderly" placeholder="Underlying cause of death" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frminunder" name="frminunder"  placeholder="Underlying Interval"/>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Other significant conditions
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmcontribute" name="frmcontribute" placeholder="Other Condition"/>
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class="fa fa-info"></i> Death by external causes</h5>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Manner of Death:
			</div>	
			<div class="col-md-9">
				<select  class="form-control form-control-mb" autocomplete="off" id="frmmanner" name="frmmanner" placeholder ="Please Select">
				<option value="">Please Select</option>
				<option value="H">Homicide</option>
				<option value="S">Suicide</option>
				<option value="A">Accident</option>
				<option value="O">Others specify</option>
				</select>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Specify:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off" disabled  id="frmothman" name="frmothman"  placeholder="Other's Specify"/>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Autopsied?:
			</div>	
			<div class="col-md-9">
				
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmautopsy" id="frmautopsy" value="N" checked/>
				  <label class="form-check-label" for="exampleRadios2">No</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmautopsy" id="frmautopsy" value="Y"  />
				  <label class="form-check-label" for="exampleRadios1">Yes</label>
				</div>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				if yes? Place of Occurence
			</div>
			<div class="col-md-9">
				<textarea type="text" class="form-control form-control-mb" autocomplete="off"   id="frmplace" name="frmplace" placeholder="Place of occurence"  disabled></textarea>
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class="fa fa-info"></i> Attendant</h5>
			</div>
			<div class="col-md-2">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="NONEE" checked />
				  <label class="form-check-label" for="frmdattend">:None</label>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="PRPHY"  />
				  <label class="form-check-label" for="frmdattend">:Private Physician</label>
				</div>
			</div>
			<div class="col-md-3">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="PUHOR" />
				  <label class="form-check-label" for="frmdattend">:Public Health Officer</label>
				</div>
			</div>
			<div class="col-md-2">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="HOSAU" />
				  <label class="form-check-label" for="frmdattend">:Hospital Authority</label>
				</div>
			</div>	
			<div class="col-md-2">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="OTHER" />
				  <label class="form-check-label" for="exampleRadios2">Others specify</label>
				</div>
			</div>
			
			<div class="col-md-3 col-form-label text-default mb-1">
				Other Specify:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmdothatt" name="frmdothatt" placeholder="Other's specify"  disabled/>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				If Attended, state duration
			</div>
			<div class="col-md-5">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmatfrom" name="frmatfrom" placeholder = "From" disabled/>
			</div>
			<div class="col-md-4">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmattendto" name="frmattendto" placeholder = "To" disabled/>
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class="fa fa-info"></i>Certification of death</h5>
			</div>
			<div class="col-md-6">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcertify" id="frmcertify" value="Y"/>
				  <label class="form-check-label" for="exampleRadios1">: have attended the deceased</label>
				</div>
			</div>	
			<div class="col-md-6">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcertify" id="frmcertify" value="N" checked />
				  <label class="form-check-label" for="exampleRadios2">: have not attended the deceased</label>
				</div>
			</div>
			
			<div class="col-md-3 col-form-label text-default mb-1">
				Time Occured
			</div>
			<div class="col-md-9">
				<input type="time" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" disabled/>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Certified Date:
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmcertdate" name="frmcertdate" placeholder="MM/DD/YY" disabled/>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Attendant Name:
			</div>
			<div class="col-md-9">
				<select  class="form-control form-control-mb" autocomplete="off" id="frmcertname" name="frmcertname" placeholder ="Please Select" disabled>
					<option value="">Please Select</option>
				</select>
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class="fa fa-info"></i>Corpse Disposal</h5>
			</div>
			
			
	
			<div class="col-md-12">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcorpse" id="frmcorpse" value="B">
				  <label class="form-check-label text-success" for="exampleRadios1"><b>Burial</b></label>
				</div>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Certification:
			</div>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmburyno" name="frmburyno" placeholder="Permit #" disabled />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date Issued:
			</div>
			<div class="col-md-3">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmburydate" name="frmburydate" placeholder = "MM/DD/YYYY" disabled />
			</div>
			
			<div class="col-md-12">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcorpse" id="frmcorpse" value="C" />
				  <label class="form-check-label" for="exampleRadios2"><b class="text-success">Cremation</b></label>
				</div>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Crematorium name:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmcemname" name="frmcemname" placeholder="Crematorium name" disabled/>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Address:
			</div>
			<div class="col-md-9">
				<textarea type="text" class="form-control form-control-mb" autocomplete="off"   id="frmcemadd" name="frmcemadd"placeholder="Crematorium Address" disabled></textarea>
			</div>

			<div class="col-md-12">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcorpse" id="frmcorpse" value="O" />
				  <label class="form-check-label" for="exampleRadios2"><b class="text-success">Other Specify</b></label>
				</div>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Address:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off" disabled   id="frmothcor" name="frmothcor" placeholder="Other Specify" />
			</div>

			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class="fa fa-info"></i> Certification Informant</h5>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Informant:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frminform" name="frminform" placeholder="Informant name"/>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Relation:
			</div>
			<div class="col-md-9">
				<select  class="form-control form-control-mb" autocomplete="off" id="frmrelation" name="frmrelation" placeholder ="Please Select">
					<option value="">Please Select</option>
					<option value="MOTHE">Mother</option>
					<option value="FATHE">Father</option>
					<option value="SISTE">Sister</option>
					<option value="BROTH">Brother</option>
					<option value="AUNT">Auntie</option>
					<option value="UNCLE">Uncle</option>
					<option value="NEPHE">Nephew</option>
					<option value="NIECE">Niece</option>
					<option value="COUSI">Cousin</option>
					<option value="SPOUS">Spouse</option>
					<option value="NEIGH">Neighbor</option>
				</select>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Address:
			</div>
			<div class="col-md-9">
				<textarea type="text" class="form-control form-control-mb" autocomplete="off"   id="frmininfadd" name="frmininfadd" placeholder="Informant Address"></textarea>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date:
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmininfdate" name="frmininfdate" placeholder = "MM/DD/YY" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class="fa fa-edit"></i>Signatory</h5>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Name:
			</div>
			<div class="col-md-9">
				<select  class="form-control form-control-mb" autocomplete="off" id="frmprename" name="frmprename" placeholder ="Please Select">
					<option value="">Please Select</option>
				</select>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date:
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmpredate" name="frmpredate" placeholder = "MM/DD/YY" />
			</div>
		</div>
			<input type="hidden" id="frmdeathenccode" name="frmdeathenccode" value="" />
	</div>
	<div class="modal-footer">
		<div class="btn-group">
			<button type="button" id="btnPrintDeathCert" class="btn btn-outline-primary"><i class="fa fa-print"></i>Print</button>
			<button type="submit" name="editDeath" id="editDeath"  class="btn btn-outline-success" data-style="slide-right"><i class="fa fa-save"></i>&nbsp Save</button>
			<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>Cancel</button>
		</div>
	</div>
	</div>
	</div>
</div>
</form>