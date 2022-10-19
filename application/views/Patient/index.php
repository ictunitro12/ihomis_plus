<div class="card card-accent-success">	
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<div class="h4 text text-success"> 
				<i class="fa fa-users"></i>
					&nbsp <?php echo $header; ?> 
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
				<a href="<?php echo site_url('Patient/PatientRegister'); ?>" data-toggle="tooltip" title="Register Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i>
				</a>
			   </div>
			 </div>		
		</div>	
		</br>
			<div class="table-responsive">
				<table id="PatientTable" class="table table-sm table-bordered  table-striped table-condensed table-hover">
					<thead class="thead-dark">
						<tr>
						<th width ="130px">HEALTH RECORD #</th>
						<th>PATIENT NAME(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
						<th>SEX(<small>Male,Female</small>)</th>
						<th>DATE OF BIRTH(<small>mm/dd/yyyy</small>)</th>
						<th>STATUS(<small>Active/Inactive</small>)</th>
						<th width ="50px"><i class="fa fa-hand"></i></th>
						</tr>
					</thead>
				</table>
			</div>
	</div>
</div>
<script type="text/javascript">
	$(function()
	{
		RegisteredPatients();
    });
</script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>

