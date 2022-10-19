<form id="frmPhyExam" name="frmPhyExam">
<div class="modal fade" id="PhyExamModal"  role="dialog">
	<div class="modal-dialog modal-dialog modal-md">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white">	<i class="fa fa-universal-access"></i> &nbsp Physical Exam</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
		<div class="form-row">
			<div class="col-md-4 col-form-label text-default mb-1">
			Skin:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phySkin" name="phySkin" placeholder ="Skin">
			</div>				
			<div class="col-md-4 col-form-label text-default mb-1">
			Head/EENT:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyEENT" name="phyEENT" placeholder ="Head/EENT">
			</div>		
			<div class="col-md-4 col-form-label text-default mb-1">
			Lymphnodes:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyLymph" name="phyLymph" placeholder ="Lymphnodes">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Chest-Lungs:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyLungs" name="phyLungs" placeholder ="Lungs">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Chest-Cardiovascular:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyCardio" name="phyCardio" placeholder ="Cardiovascular">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Breast:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyBreast" name="phyBreast" placeholder ="Breast">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Abdomen:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyAbdo" name="phyAbdo" placeholder ="Abdomen">
			</div>			
			<div class="col-md-4 col-form-label text-default mb-1">
			Rectum:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyRectum" name="phyRectum" placeholder ="Rectum">
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Genitalia:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyGenitalia" name="phyGenitalia" placeholder ="Genitalia">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Musculoskeletal:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyMusco" name="phyMusco" placeholder ="Musculoskeletal">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Extremities:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyExtrem" name="phyExtrem" placeholder ="Extremities">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Neurological:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyNeuro" name="phyNeuro" placeholder ="Neurological">
			</div>			
		</div>
	</div>
	<input type="hidden" name="phyEnccode" id="phyEnccode" value='<?php echo $this->uri->segment(3)."/".$this->uri->segment(4)."/".$this->uri->segment(5);?>'>
	<input type="hidden" name="phyHpercode" id="phyHpercode" value='<?php echo $this->uri->segment(6);?>'>
	<input type="hidden" name="phyformIden" id="phyformIden" value='insert'>
	<div class="modal-footer bg-secondary">
	<button type="submit" name="btnSavePhy" id="btnSavePhy"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
	<a href="<?php echo site_url('Admission');?>" class="btn btn-danger btn-square"><i class="fa fa-close"></i>&nbsp CLOSE</a>
	</div>
	</div>
	</div>
</div>
</form>
