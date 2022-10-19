<form id = "frmAdmit" name="frmAdmit">
<div class="modal fade" id="patientAdmitModal" tabindex="-1" role="form">
	<div class="modal-dialog modal-dialog modal-md" role="form">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white">	<i class="fa fa-stethoscope"></i>&nbsp ADMITTING DETAILS</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
	
		<div class="form-row">
			<div class="col-md-5 col-form-label text-default mb-1">
				DATE / TIME OF ADMISSION: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" placeholder ="MM/DD/YYYY">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				DATE / TIME OF DISCHARGE: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" placeholder ="MM/DD/YYYY">
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				ADMITTING NOTES: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				MODE OF ADMISSION: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				PREGNANCY STATUS: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-12 col-form-label text-default mb-1">
				NAME OF INFORMANT 
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				LAST NAME: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				FIRST NAME: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				MIDDLE NAME: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				SUFFIX: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				COMPLETE ADDRESS: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				TELEPHONE NUMBER: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				RELATION TO PATIENT: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				SOURCE OF PAYMENT-1: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				SOURCE OF PAYMENT-2: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				SOURCE OF PAYMENT-3: 
			</div>	
			<div class="col-md-7">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmalertdate" name="frmalertdate" >
			</div>	
				
		<input type="hidden" name="vsEnccode" id="vsEnccode" value='<?php echo $this->uri->segment(3)."/".$this->uri->segment(4)."/".$this->uri->segment(5);?>'>
		<input type="hidden" name="vsHpercode" id="vsHpercode" value='<?php echo $this->uri->segment(6);?>'>
		<input type="hidden" name="vsformIden" id="vsformIden" value='insert'>
	
	</div>
	<div class="modal-footer bg-secondary">
	<button type="submit" name="btn_save" id="btn_save"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
	<button class="btn btn-danger  btn-square btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>CLOSE</button>
	</div>
	</div>
	</div>
</div>
</div>	
</form>