	<style>

table#FamilyPlanningTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
	<div class="row">
		<div class="col-md-3">
			<?php echo ViewPatientInformation();?>
			<?php echo ViewSearchPatient();?>
		</div>
		<div class="col-md-9">
			<div class="card card-accent-success">
				<div class="card-body table-responsive">
					<div class="row">
						<div class="col-md-12">
							<div class="h3 text text-success"> 
								<i class="fa fa-heartbeat"></i>
								&nbsp Family Planning
							</div>
						</div>
					</div>

					<div class="form-row">	
						<div class="col-md-12 col-md-auto">

							<input type="hidden" class="form-control form-control-mg" name ="percode" id="percode" autocomplete="off"/>
							<input type="hidden" class="form-control form-control-mg" name ="encode" id="encode" autocomplete="off"/>
							<input type="hidden" class="form-control form-control-mg" name ="toeccode" id="toeccode" autocomplete="off"/>
							<input type="hidden" class="form-control form-control-mg" name ="entrybycode" id="entrybycode" value="<?php echo $entryby;?>" />
							<div class="btn-group pull-right" role="group" aria-label="">
								<button type="button" id="hey" class="btn btn-outline-success btn-ladda  float-right"data-toggle="tooltip" title="Register Patient" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">	<i class="fa fa-search"></i> Search</button>
								<button type="button" id="btnFamilyPlanning" class="btn btn-outline-success btn-ladda  float-right" >Family Planning Form </button>								
							</div>
						</div>
					</div>	
					
					<div class="col-md-12">

						<table id="FamilyPlanningTable" class="table table-sm table-condensed table-bordered"width="100%">
							<thead>
								<tr>
									<th>enccode</th>
									<th>Health Record #</th>
									<th>Type of Client</th>
									<th>Method</th>
									<th>Type of Patient</th>
									<th>Consult Date</th>
									<th>Schedule next visit</th>
									<th></th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

<form name="frmDeleteFamilyPlanning" id="frmDeleteFamilyPlanning">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	<input type="hidden" name="deletepercode" id="deletepercode">

	<div class="modal fade" id="DeleteFamilyPlanning" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer bg-secondary">
					<button  type ="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
				</div>
			</div>
		</div>
	</div>
</form>	


<form name ="frmFamilyPlanningPDF" id="frmFamilyPlanningPDF" method="post">
	<div class="modal" id="ModalFamilyPlanning" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<input name="code" id ="code" type="hidden">
					<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i> Family Planning Form</h2>
				</div>
				<div class="modal-body border-success" id="FamilyPlanningPDF">

				</div>
				<div class="modal-footer bg-secondary"></div>
			</div>
		</div>
	</div>
</form>


<input name="module" id ="module" type="hidden"  value="<?php echo $module;?>">
<input name="base_url" id ="base_url" type="hidden"  value="">

<script type="text/javascript">
	$(function()
	{		
		var enccode= encodeURIComponent(encodeURIComponent(enccode));
		if(($.session.get('hpercode') !== undefined) && ($.session.get('enccode') !== undefined))
		{
			initWomenHealth($.session.get('enccode'),$.session.get('hpercode'));
		}
		else
		{
			$("#PatSearch").modal('show');
			$("#PatientImage").prop('src','assets/img/avatars/none.png');
		}
	});

</script>

<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/familyplanning/family.js"></script>
<script src="<?php echo base_url()?>assets/scripts/familyplanning/delete.js"></script>







