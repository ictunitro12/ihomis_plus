<form name="frmAddDeathCert" id="frmAddDeathCert" method="post">
<div class="modal fade" id="AddDeathCert" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white">	<i class="fa fa-exclamation-triangle"></i>&nbsp DEATH CERTIFICATE</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
	
		<div class="form-row">
			<div class="col-md-3 col-form-label text-default mb-1">
				DATE OF DEATH:
			</div>	
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="addpddate" name="addpddate" placeholder = "MM/DD/YY" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				DATE OF BIRTH:
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="addpatbdate" name="addpatbdate" placeholder = "MM/DD/YY" />
			</div>
			<div class="col-md-3">
			
			</div>
			<div class="col-md-5">
				CAUSES OF DEATH
			</div>
			<div class="col-md-4">
				INTERVAL BETWEEN ONSET AND DEATH
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Immediate:
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addimmcoz" name="addimmcoz" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addinimm" name="addinimm" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Antecendent:
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addanteced" name="addanteced" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addinant" name="addinant" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Underlying:
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addunderly" name="addunderly" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addinunder" name="addinunder" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Other significant conditions
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addcontribute" name="addcontribute" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>DEATH BY EXTERNAL CAUSES</h5>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Manner of Death:
			</div>	
			<div class="col-md-9">
				<select  class="form-control form-control-mb" autocomplete="off" id="addmanner" name="addmanner" placeholder ="Please Select">
				<option value="">Please Select</option>
				<option value="H">Homicide</option>
				<option value="S">Suicide</option>
				<option value="A">Accident</option>
				<option value="O">Other's specify</option>
				</select>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Specify:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addothman" name="addothman" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				AUTOPSY:
			</div>	
			<div class="col-md-9">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="addautopsy" id="addautopsy" value="Y" checked />
				  <label class="form-check-label" for="exampleRadios1">Yes</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="addautopsy" id="addautopsy" value="N" />
				  <label class="form-check-label" for="exampleRadios2">No</label>
				</div>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Place of Occurence
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addplace" name="addplace" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>ATTENDANT</h5>
			</div>
			<div class="col-md-2">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="adddattend" id="adddattend" value="PRPHY" checked />
				  <label class="form-check-label" for="exampleRadios1">Private Physician</label>
				</div>
			</div>
			<div class="col-md-2">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="adddattend" id="adddattend" value="PUHOR" />
				  <label class="form-check-label" for="exampleRadios2">Public Health Officer</label>
				</div>
			</div>
			<div class="col-md-2">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="adddattend" id="adddattend" value="HOSAU" />
				  <label class="form-check-label" for="exampleRadios2">Hospital Authority</label>
				</div>
			</div>
			<div class="col-md-2">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="adddattend" id="adddattend" value="NONEE" />
				  <label class="form-check-label" for="exampleRadios2">None</label>
				</div>
			</div>	
			<div class="col-md-2">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="adddattend" id="adddattend" value="OTHER" />
				  <label class="form-check-label" for="exampleRadios2">Other's specify</label>
				</div>
			</div>
			
			<div class="col-md-3 col-form-label text-default mb-1">
				Specify:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="adddothatt" name="adddothatt" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				If Attended, state duratiion
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addatfrom" name="addatfrom" placeholder = "From" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addattendto" name="addattendto"
				placeholder = "To" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>CERRIFICATION OF DATE</h5>
			</div>
			<div class="col-md-6">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="addcertify" id="addcertify" value="Y" checked />
				  <label class="form-check-label" for="exampleRadios1">have attended the deceased</label>
				</div>
			</div>	
			<div class="col-md-6">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="addcertify" id="addcertify" value="N" />
				  <label class="form-check-label" for="exampleRadios2">have not attended the deceased</label>
				</div>
			</div>
			</br>			
			</br>
			<div class="col-md-3 col-form-label text-default mb-1">
				Time Occured
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="blankaddeath" name="blankaddeath" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date Certification
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="addcertdate" name="addcertdate" placeholder="MM/DD/YY" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Attendant Name:
			</div>
			<div class="col-md-9">
				<select  class="form-control form-control-mb" autocomplete="off" id="addcertname" name="addcertname" placeholder ="Please Select">
				<option value="">Please Select</option>
				</select>
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>CORPSE DISPOSAL</h5>
			</div>
			<div class="col-md-4">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="addcorpse" id="addcorpse" value="B" checked>
				  <label class="form-check-label" for="exampleRadios1">Burial</label>
				</div>
			</div>	
			<div class="col-md-4">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="addcorpse" id="addcorpse" value="C" />
				  <label class="form-check-label" for="exampleRadios2">Creamatic</label>
				</div>
			</div>
			<div class="col-md-4">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="addcorpse" id="addcorpse" value="O" />
				  <label class="form-check-label" for="exampleRadios2">Other's specify</label>
				</div>
			</div>
			</br>	
			</br>	
			<div class="col-md-3 col-form-label text-default mb-1">
				Specify:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addothcor" name="addothcor" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				BURIAL CREMATION PERMIT
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Number:
			</div>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addburyno" name="addburyno" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date Issued:
			</div>
			<div class="col-md-3">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="addburydate" name="addburydate" placeholder = "MM/DD/YYYY" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				NAME AND ADDRESS OF CEMENTERY OR CREMATORY
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Name:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addcemname" name="addcemname" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Address:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addcemadd" name="addcemadd" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>CERRIFICATION OF INFORMANT</h5>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Informant:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addinform" name="addinform" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Relation:
			</div>
			<div class="col-md-9">
				<select  class="form-control form-control-mb" autocomplete="off" id="addrelation" name="addrelation" placeholder ="Please Select">
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
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addininfadd" name="addininfadd">
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date:
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="addininfdate" name="addininfdate" placeholder = "MM/DD/YY" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>PREPARED BY</h5>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Name:
			</div>
			<div class="col-md-9">
				<select  class="form-control form-control-mb" autocomplete="off" id="addprename" name="addprename" placeholder ="Please Select">
					<option value="">Please Select</option>
				</select>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date:
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="addpredate" name="addpredate" placeholder = "MM/DD/YY" />
			</div>
		</div>
		
			<input type="hidden" id="adddeathenccode" name="adddeathenccode" value="" />
		
	</div>
	<div class="modal-footer bg-secondary">
	<button type="submit" name="editDeath" id="editDeath"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
	<button class="btn btn-danger  btn-square btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>CLOSE</button>
	</div>
	</div>
	</div>
</div>
</form>