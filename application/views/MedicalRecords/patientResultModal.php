<form id="frmResultEdit" name="frmResultEdit" role="form">
<div class="modal fade" id="ResultEdit" tabindex="-1" role="form">
	<div class="modal-dialog modal-dialog modal-md" role="form">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white">	<i class="fa fa-exclamation-triangle"></i>&nbsp Result</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
	
		<div class="form-row">
			<div class="col-md-4 col-form-label text-default mb-1">
			DISCHAGRE DATE:
			</div>	
			<div class="col-md-8">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="resdisdate" name="resdisdate" placeholder ="MM/DD/YYYY">
			</div>				
				<div class="col-md-4 col-form-label text-default mb-1">
			DISCHAGRE TIME:
			</div>
			<div class="col-md-8">
				<input type="time" class="form-control form-control-mb" autocomplete="off"   id="resdistime" name="resdistime" placeholder ="HH/MM/SS">
			</div>		
			<div class="col-md-4 col-form-label text-default mb-1">
			DISPOSITION:
			</div>
			<div class="col-md-8">
				<select  class="form-control form-control-mb" autocomplete="off" id="resdispcode" name="resdispcode">
				<option value="">Please Select</option>
				<option value="ABSC">Absconded</option>
				<option value="DIEDD">Died</option>
				<option value="DAMA">Discharge Agains Medical Advice</option>
				<option value="DISCH">Discharge</option>
				<option value="TRANS ">Transferred</option>
				</select>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			RESULT:
			</div>
			<div class="col-md-8">
				<select  class="form-control form-control-mb" autocomplete="off" id="rescondcode" name="rescondcode">
				<option value="">Please Select</option>
				<option value="DIEMI">Died < 48 hrs Autopsied</option>
				<option value="DIENA">Died < 48 hrs Not Autopsied</option>
				<option value="DIEPO">Died > 48 hrs Autopsied </option>
				<option value="DPONA">Died > 48 hrs Not Autopsied</option>
				<option value="IMPRO ">Imporve</option>
				<option value="RECOV ">Recovered</option>
				<option value="UNIMP ">Uninmprove</option>
				</select>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			SPECIAL INSTRUCTION:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdesc" name="frmalertdesc" placeholder =""></textarea>
			</div>
			
		<input type="hidden" id="reshpercode" name="reshpercode" value="" />
		<input type="hidden" id="resenccode" name="resenccode" value="" />
		</div>
		
		
	</div>
	<div class="modal-footer bg-secondary">
	<button type="submit" name="savefrmAlert" id="savefrmAlert"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
	<button class="btn btn-danger  btn-square btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>CLOSE</button>
	</div>
	</div>
	</div>
</div>
</form>