<form name="frmDeathCert" id="frmDeathCert" method="post">
<div class="modal fade" id="DeathCert" tabindex="-1" role="dialog">
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
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmpddate" name="frmpddate" placeholder = "MM/DD/YY" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				DATE OF BIRTH:
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmpatbdate" name="frmpatbdate" placeholder = "MM/DD/YY" />
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
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmimmcoz" name="frmimmcoz" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frminimm" name="frminimm" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Antecendent:
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmanteced" name="frmanteced" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frminant" name="frminant" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Underlying:
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmunderly" name="frmunderly" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frminunder" name="frminunder" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Other significant conditions
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmcontribute" name="frmcontribute" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>DEATH BY EXTERNAL CAUSES</h5>
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
				<option value="O">Other's specify</option>
				</select>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Specify:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmothman" name="frmothman" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				AUTOPSY:
			</div>	
			<div class="col-md-9">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmautopsy" id="frmautopsy" value="Y" checked />
				  <label class="form-check-label" for="exampleRadios1">Yes</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmautopsy" id="frmautopsy" value="N" />
				  <label class="form-check-label" for="exampleRadios2">No</label>
				</div>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Place of Occurence
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmplace" name="frmplace" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>ATTENDANT</h5>
			</div>
			<div class="col-md-2">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="PRPHY" checked />
				  <label class="form-check-label" for="exampleRadios1">Private Physician</label>
				</div>
			</div>
			<div class="col-md-2">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="PUHOR" />
				  <label class="form-check-label" for="exampleRadios2">Public Health Officer</label>
				</div>
			</div>
			<div class="col-md-2">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="HOSAU" />
				  <label class="form-check-label" for="exampleRadios2">Hospital Authority</label>
				</div>
			</div>
			<div class="col-md-2">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="NONEE" />
				  <label class="form-check-label" for="exampleRadios2">None</label>
				</div>
			</div>	
			<div class="col-md-2">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmdattend" id="frmdattend" value="OTHER" />
				  <label class="form-check-label" for="exampleRadios2">Other's specify</label>
				</div>
			</div>
			
			<div class="col-md-3 col-form-label text-default mb-1">
				Specify:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmdothatt" name="frmdothatt" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				If Attended, state duratiion
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmatfrom" name="frmatfrom" placeholder = "From" />
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmattendto" name="frmattendto"
				placeholder = "To" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>CERRIFICATION OF DATE</h5>
			</div>
			<div class="col-md-6">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcertify" id="frmcertify" value="Y" checked />
				  <label class="form-check-label" for="exampleRadios1">have attended the deceased</label>
				</div>
			</div>	
			<div class="col-md-6">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcertify" id="frmcertify" value="N" />
				  <label class="form-check-label" for="exampleRadios2">have not attended the deceased</label>
				</div>
			</div>
			</br>			
			</br>
			<div class="col-md-3 col-form-label text-default mb-1">
				Time Occured
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date Certification
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmcertdate" name="frmcertdate" placeholder="MM/DD/YY" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Attendant Name:
			</div>
			<div class="col-md-9">
				<select  class="form-control form-control-mb" autocomplete="off" id="frmcertname" name="frmcertname" placeholder ="Please Select">
				<option value="">Please Select</option>
				</select>
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>CORPSE DISPOSAL</h5>
			</div>
			<div class="col-md-4">
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcorpse" id="frmcorpse" value="B" checked>
				  <label class="form-check-label" for="exampleRadios1">Burial</label>
				</div>
			</div>	
			<div class="col-md-4">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcorpse" id="frmcorpse" value="C" />
				  <label class="form-check-label" for="exampleRadios2">Creamatic</label>
				</div>
			</div>
			<div class="col-md-4">	
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="frmcorpse" id="frmcorpse" value="O" />
				  <label class="form-check-label" for="exampleRadios2">Other's specify</label>
				</div>
			</div>
			</br>	
			</br>	
			<div class="col-md-3 col-form-label text-default mb-1">
				Specify:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmothcor" name="frmothcor" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				BURIAL CREMATION PERMIT
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Number:
			</div>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmburyno" name="frmburyno" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date Issued:
			</div>
			<div class="col-md-3">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmburydate" name="frmburydate" placeholder = "MM/DD/YYYY" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				NAME AND ADDRESS OF CEMENTERY OR CREMATORY
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Name:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmcemname" name="frmcemname" />
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Address:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmcemadd" name="frmcemadd" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>CERRIFICATION OF INFORMANT</h5>
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Informant:
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frminform" name="frminform" />
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
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmininfadd" name="frmininfadd">
			</div>
			<div class="col-md-3 col-form-label text-default mb-1">
				Date:
			</div>
			<div class="col-md-9">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmininfdate" name="frmininfdate" placeholder = "MM/DD/YY" />
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				<h5 class="text text-success"><i class=""></i>PREPARED BY</h5>
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
	<div class="modal-footer bg-secondary">
	<button type="button" data-enccode="" id="btnPrintDeathCert" class="btn btn-default  btn-square btn-ladda pull-left"><i class="fa fa-print"></i>PRINT</button>
	<button type="submit" name="editDeath" id="editDeath"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
	<button class="btn btn-danger  btn-square btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>CLOSE</button>
	
	</div>
	</div>
	</div>
</div>
</form>