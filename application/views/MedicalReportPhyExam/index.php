<div class="row">
	<div class="col-md-12">
		<?php echo ViewSearchPatient();?>

		<form id="frmMedicalReportPhyExamPDF" name="frmMedicalReportPhyExamPDF" method="post">
			<div class="card card-accent-success">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6 col-md-auto">
							<div class="h3 text text-success">
								<h4 class="modal-title text-success"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Report of Patient Admissions </h4>
							</div>
						</div>
						<div class="col-md-6 col-md-auto">
							<div class="btn-group pull-right" title="Search Patient" role="group" aria-label="">
								<button onclick="searchPatient()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body" id="MedicalReportPhyExam"></div>
				<div class="card-footer"></div>
			</div>
		</form>
	</div>
</div>
<input name="module" id="module" type="hidden" value="medicalrepphysical">
<script type="text/javascript">
	$(document).ready(function()
	{	
		uppercase();
		$("#PatSearch").modal({backdrop: "static"});
		$("#PatientImage").prop('src','assets/img/avatars/none.png');
	});
</script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script> 
<script src="<?php echo base_url()?>assets/scripts/medicalreportphyexam/medicalreportphyexam.js"></script>

