<form id="frmDeletePhysical" name="frmDeletePhysical" method="post">
	<div class="modal" id="deletePhysicalModal" name="deleteVitalModal" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"><i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="delphyenccode" id="delphyenccode">
			<input type="hidden" name="delphydatelog" id="delphydatelog">
			<input type="hidden" name="phyformIdenDelete" id="phyformIdenDelete" value="delete">
		</div>
		<div class="modal-footer ">
		<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
		<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
	</div>
</form>

<form id="frmPhyExam" name="frmPhyExam" class="form">
<div class="modal" id="PhyExamModal"  role="dialog">
<div class="modal-dialog modal-dialog-vertical modal-md">
<div class="modal-content">
<div class="modal-body">
<h4 class="modal-title text-success">	<i class="fa fa-universal-access"></i> &nbsp Physical Exam</h4>
<hr>
<div class="form-row">
<div class="col-md-4 col-form-label text-default mb-1">
Skin:
</div>
<div class="col-md-8">
			<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phySkin" name="phySkin" placeholder ="Skin"></textarea>
			</div>				
			<div class="col-md-4 col-form-label text-default mb-1">
			Head/EENT:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyEENT" name="phyEENT" placeholder ="Head/EENT"></textarea>
			</div>		
			<div class="col-md-4 col-form-label text-default mb-1">
			Lymphnodes:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyLymph" name="phyLymph" placeholder ="Lymphnodes"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Chest-Lungs:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyLungs" name="phyLungs" placeholder ="Lungs"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Chest-Cardiovascular:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyCardio" name="phyCardio" placeholder ="Cardiovascular"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Breast:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyBreast" name="phyBreast" placeholder ="Breast"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Abdomen:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyAbdo" name="phyAbdo" placeholder ="Abdomen"></textarea>
			</div>			
			<div class="col-md-4 col-form-label text-default mb-1">
			Rectum:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyRectum" name="phyRectum" placeholder ="Rectum"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Genitalia:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyGenitalia" name="phyGenitalia" placeholder ="Genitalia"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Musculoskeletal:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyMusco" name="phyMusco" placeholder ="Musculoskeletal"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Extremities:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyExtrem" name="phyExtrem" placeholder ="Extremities"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Neurological:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="phyNeuro" name="phyNeuro" placeholder ="Neurological"></textarea>
			</div>			
		</div>
	</div>
	<input type="hidden" name="phyEnccode" id="phyEnccode" >
	<input type="hidden" name="phyHpercode" id="phyHpercode">
	<input type="hidden" name="phyformIden" id="phyformIden">
	<div class="modal-footer">
	<button type="submit" name="btnSavePhy" id="btnSavePhy"  class="btn btn-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i></button>
<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
	</div>
	</div>
	</div>
</div>
</form>