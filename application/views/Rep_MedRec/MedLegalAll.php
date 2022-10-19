<div class="row">
	<div class="col-md-6">
		<?php echo ViewSearchPatient();?>
	</div>
	<input name="module" id ="module" type="hidden" value="medrec">

	<form name ="frmMedicoLegalAllPDF" id="frmMedicoLegalAllPDF" method="post">
		<div class="modal" id="ModalMedicoLegalAll" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
				<div class="modal-content card-accent-success">
					<div class="modal-header">
						<input name="code" id ="code" type="hidden">
						<input name="percode" id ="percode" type="hidden">
						<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i>Medico Legal Certificate ALL Form</h2>
					</div>
					<div class="modal-body border-success" id="MedicoLegalAllPDF">


					</div>
					<div class="modal-footer bg-secondary"></div>
				</div>
			</div>
		</div>
	</form>

	<form name="frmRequest"   id="frmRequest">
		<input  type="hidden" name="formIden" id="formIden">
		<input  type="hidden" name="enccode" id="enccode">
		<input  type="hidden" name="hpercode" id="hpercode">
		<div class="modal" id="ModalRequest" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-m" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $header;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-row">
							<label class="col-md-6 col-form-label text-default mb-1">CERTIFICATE NUMBER:</label>
							<div class="col-md-6">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="certno" name="certno"  placeholder = "CERTIFICATE NUMBER" onchange ="intkey();" value="">
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-6 col-form-label text-default mb-1">REQUESTING PERSON:</label>
							<div class="col-md-6">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="reqperson" name="reqperson"  placeholder = "REQUESTING PERSON">
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-6 col-form-label text-default mb-1">PURPOSE:</label>
							<div class="col-md-6">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="purpose" name="purpose"  placeholder = "PURPOSE">
							</div>
						</div>
					</div>
					<div class="modal-footer bg-secondary">
						<button  class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;Save</button>
					</div>
					
				</div>
			</div>
		</div>
	</form>

	<form id="frmRequest" method="post">
		<input  type="hidden" name="formIden" id="formIden">
		<input  type="hidden" name="enccode" id="enccode">
		<input  type="hidden" name="hpercode" id="hpercode">
		<div class="modal" id="ModalRequest" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-m" role="dialog">
				<div class="modal-content">
					<div class="modal-body">

						<div class="form-row">
							<label class="col-md-6 col-form-label text-default mb-1">CERTIFICATE NUMBER:</label>
							<div class="col-md-6">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="certno" name="certno"  placeholder = "CERTIFICATE NUMBER" value="">
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-6 col-form-label text-default mb-1">REQUESTING PERSON:</label>
							<div class="col-md-6">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="reqperson" name="reqperson"  placeholder = "REQUESTING PERSON:">
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-6 col-form-label text-default mb-1">PURPOSE:</label>
							<div class="col-md-6">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="purpose" name="purpose"  placeholder = "PURPOSE">
							</div>
						</div>
					</div>
					<div class="modal-footer bg-secondary">
						<button type="submit"  class="btn btn-success btn-md btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> SAVE</button>
					</div>
				</div>
			</div>
		</div>
	</form> 
<!-- 
	<form name="frmSave" id="frmSave">
		<input  type="hidden" name="Enccode" id="Enccode">
		<input  type="hidden" name="Hpercode" id="Hpercode">
		<div class="modal fade" id="Save" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" >Status</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>The record has been saved.</h4>
					</div>
					<div class="modal-footer bg-secondary">
						<div class="btn-group pull-left" role="group" aria-label="">

							<a href="javascript:void(0)"  id="ok" data-toggle="tooltip" data-placement="top"  class="btn btn-success btn-md  btn-ladda" data-style="zoom-in">OK</a>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</form> -->

</div>
</div>
<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
<script type="text/javascript">
	$(document).ready(function()
	{	
		uppercase();
		$("#PatSearch").modal({backdrop: "static"});
		$("#PatientImage").prop('src','assets/img/avatars/none.png');
	});
</script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script> 
<script src="<?php echo base_url()?>assets/scripts/rep_medrec/medicolegalall.js"></script>

