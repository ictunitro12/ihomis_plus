
<div class="card card-accent-success">
	<div class="col-sm-12">
		<div class="btn-group float-right" role="group" aria-label="">
			<button id="btnmodalBlood" name="btnmodalBlood" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">Blood</button>
			<button id="btnmodalBloodChem" name="btnmodalBloodChem" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">BloodChem</button>
			<button id="btnmodalBloodTrans" name="btnmodalBloodTrans" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">BloodTrans</button>
			<button id="btnmodalBoneMarrow" name="btnmodalBoneMarrow" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">BoneMarrow</button>
			<button id="btnmodalClinicalMicrobiological" name="btnmodalClinicalMicrobiological" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">ClinicalMicrobiological
			<button id="btnmodalClinicalMicroSmear" name="btnmodalClinicalMicroSmear" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">ClinicalMicroSmear</button>
			<button id="btnmodalFecalysis" name="btnmodalFecalysis" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">Fecalysis</button>
			<button id="btnmodalGyneCytology" name="btnmodalGyneCytology" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">GyneCytology</button>
			<button id="btnmodalImmunology" name="btnmodalImmunology" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">Immunology</button>
			<button id="btnmodalImmunologyandSerology" name="btnmodalImmunologyandSerology" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">ImmunologyandSerology</button>
			<button id="btnmodalMiscellaneous" name="btnmodalMiscellaneous" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">Miscellaneous</button>
			<button id="btnmodalSurgicalPathological" name="btnmodalSurgicalPathological" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">SurgicalPathological</button>
			<button id="btnmodalUrinalysis" name="btnmodalUrinalysis" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">Urinalysis</button>
			<button id="btnspecimen" name="btnspecimen" data-toggle="tooltip" title="Charge Slip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">specimen</button>
		</div>
	</div>
	<div class="card-body">
		 <div id="container">
	<?php $this->load->view('Laboratory/modalBlood.php');?>
	<?php $this->load->view('Laboratory/modalBloodChem.php');?>
	<?php $this->load->view('Laboratory/modalBloodTrans.php');?>
	<?php $this->load->view('Laboratory/modalBoneMarrow.php');?>
	<?php $this->load->view('Laboratory/modalClinicalMicrobiological.php');?>
	<?php $this->load->view('Laboratory/modalClinicalMicroSmear.php');?>
	<?php $this->load->view('Laboratory/modalFecalysis.php');?>
	<?php $this->load->view('Laboratory/modalGyneCytology.php');?>
	<?php $this->load->view('Laboratory/modalImmunology.php');?>
	<?php $this->load->view('Laboratory/modalImmunologyandSerology.php');?>
	<?php $this->load->view('Laboratory/modalMiscellaneous.php');?>
	<?php $this->load->view('Laboratory/modalSurgicalPathological.php');?>
	<?php $this->load->view('Laboratory/modalUrinalysis.php');?>
	<?php $this->load->view('Laboratory/specimen.php');?>
		 </div>
	</div>
</div>
<script>
	$('#btnmodalBlood').click('click',function(){
		$('#modalBlood').modal('show');
	});
	$('#btnmodalBloodChem').click('click',function(){
		$('#modalBloodChem').modal('show');
	});
	$('#btnmodalBloodTrans').click('click',function(){
		$('#modalBloodTrans').modal('show');
	});
	$('#btnmodalBoneMarrow').click('click',function(){
		$('#modalBoneMarrow').modal('show');
	});
	$('#btnmodalClinicalMicrobiological').click('click',function(){
		$('#modalClinicalMicrobiological').modal('show');
	});
	$('#btnmodalClinicalMicroSmear').click('click',function(){
		$('#modalClinicalMicroSmear').modal('show');
	});
	$('#btnmodalFecalysis').click('click',function(){
		$('#modalFecalysis').modal('show');
	});
	$('#btnmodalGyneCytology').click('click',function(){
		$('#modalGyneCytology').modal('show');
	});
	$('#btnmodalImmunology').click('click',function(){
		$('#modalImmunology').modal('show');
	});
	$('#btnmodalImmunologyandSerology').click('click',function(){
		$('#modalImmunologyandSerology').modal('show');
	});
	$('#btnmodalMiscellaneous').click('click',function(){
		$('#modalMiscellaneous').modal('show');
	});
	$('#btnmodalSurgicalPathological').click('click',function(){
		$('#modalSurgicalPathological').modal('show');
	});
	$('#btnmodalUrinalysis').click('click',function(){
		$('#modalUrinalysis').modal('show');
	});
	$('#btnspecimen').click('click',function(){
		$('#modalSpecimen').modal('show');
	});















	
</script>