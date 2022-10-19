<div class="row">
	<div class="col-md-12">
		<?php echo ViewSearchPatient();?>


		<form id="frmMedicoLegalER" name="frmMedicoLegalER" method="post">
			<div class="card card-accent-success">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6 col-md-auto">
							<div class="h3 text text-success">
								<h4 class="modal-title text-success"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Medico Legal ER</h4>
							</div>
						</div>
						<div class="col-md-6 col-md-auto">
							<div class="btn-group pull-right" title="Search Patient" role="group" aria-label="">
								<button onclick="searchPatient()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body" id="MedicoLegalER"></div>
				<div class="card-footer"></div>
			</div>
		</form>
	</div>

	<form id="frmFollowRep" method="post">
		<input  type="hidden" name="follow_enc" id="follow_enc">
		<input  type="hidden" name="follow_per" id="follow_per">
		<div class="modal" id="FollowRep" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-sm" role="dialog">
				<div class="modal-content">
					<div class="modal-body">

						<h6 class="modal-title text" align="center"> Include the following in the report</h6>
						<br>
						<div class="col-md-6" align="center">
							<input type="checkbox" name="Citizenship" id="Citizenship"> <label>&nbsp; Citizenship</label>
						</div>
						<div class="col-md-6" align="center">
							<input type="checkbox" name="Occupation" id="Occupation"> <label>&nbsp; Occupation</label>
						</div>

						<div class="col-md-12" align="center">
							<a href="javascript:void(0)"  id="formlink" data-toggle="tooltip" data-placement="top"  class="btn btn-success btn-md  btn-ladda" data-style="zoom-in">OK</a>

						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


<form name="frmRequest"   id="frmRequest">
	<input  type="hidden" name="formIden" id="formIden">
	<input  type="hidden" name="req_enccode" id="req_enccode">
	<input  type="hidden" name="req_hpercode" id="req_hpercode">
	<div class="modal" id="ModalRequestER" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-m" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> Request Form</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<label class="col-md-5 col-form-label text-default mb-1">CERTIFICATE NUMBER:</label>
						<div class="col-md-7">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="certno" name="certno"  placeholder = "CERTIFICATE NUMBER" value="" readonly="">
						</div>
					</div>	
					<div class="form-row">
						<label class="col-md-5 col-form-label text-default mb-1">REQUESTING PERSON:</label>
						<div class="col-md-7">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="reqperson" name="reqperson"  placeholder = "REQUESTING PERSON">
						</div>
					</div>
					<div class="form-row">
						<label class="col-md-5 col-form-label text-default mb-1">PURPOSE:</label>
						<div class="col-md-7">
							<textarea type="text"  class="form-control form-control-mb" autocomplete="off" id="purpose" name="purpose"  placeholder = "PURPOSE"></textarea>
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
</div>
</div>
<input name="module" id="module" type="hidden" value="medicolegaler">
<script type="text/javascript">
	$(document).ready(function()
	{	
		uppercase();
		$("#PatSearch").modal({backdrop: "static"});
		$("#PatientImage").prop('src','assets/img/avatars/none.png');
	});
</script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script> 
<script src="<?php echo base_url()?>assets/scripts/certno.js"></script>
<script src="<?php echo base_url()?>assets/scripts/medicolegaler/legaler.js"></script>

