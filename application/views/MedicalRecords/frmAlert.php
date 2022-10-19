

<form id = "frmUpdateAlert" name="frmUpdateAlert">
<div class="modal fade" id="updatealert" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white">	<i class="fa fa-exclamation-triangle"></i>&nbsp PATIENT ALERT</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
	
		<div class="form-row">
			<div class="col-md-4 col-form-label text-default mb-1">
			Date Alert Was Recognized
			</div>	
			<div class="col-md-8">
				<input type="date" class="form-control form-control-mb" autocomplete="off"   id="frmaleredittdate" name="frmalerteditdate" placeholder ="MM/DD/YYYY">
			</div>				
				<div class="col-md-4 col-form-label text-default mb-1">
			Time Alert Was Recognized :
			</div>
			<div class="col-md-8">
				<input type="time" class="form-control form-control-mb" autocomplete="off"   id="frmaleredittime" name="frmaleredittime" placeholder ="HH/MM/SS">
			</div>		
			<div class="col-md-4 col-form-label text-default mb-1">
			Type of Alert:
			</div>
			<div class="col-md-8">
				<select  class="form-control form-control-mb" autocomplete="off" id="frmaleredittype" name="frmaleredittype" placeholder ="Please Select">
				<option value="00">Please Select</option>
				<option value="01">Allergy</option>
				<option value="02">Disability</option>
				<option value="03">Drug</option>
				<option value="04">Handicaps</option>
				<option value="05">Impairment</option>
				</select>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Alert Details:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalerteditdesc" name="frmalerteditdesc" placeholder =""></textarea>
			</div>
		</div>
		
		<input type="hidden" id="alertedithpercode" name="alertedithpercode" value="" />
		<input type="hidden" id="alertedithalseqno" name="alertedithalseqno" value="" />
	
	</div>
	<div class="modal-footer bg-secondary">
	<button type="submit" name="updatefrmAlert" id="updatefrmAlert"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
	<button class="btn btn-danger  btn-square btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>CLOSE</button>
	</div>
	</div>
	</div>
</div>
</form>