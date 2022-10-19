<div class="row">
	<div class="col-sm-3">
		<?php echo ViewPatientInformation();?>
		<?php echo ViewSearchPatient(); ?>
	</div>
	<div class="col-sm-9">	
	<div class="card card-accent-success">
    <div class="card-body">
		
		<div id="container"><i class="fa fa-spinner fa-spin text-success col d-flex justify-content-center" style="font-size:50px;  margin: 0 auto; float: none;  margin-bottom: 10px;"></i></div>
		</div>
</div>
	</div>
</div>

<div class="modal" name="drugIssueModal" id="drugIssueModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-xl" tab-index="-1" role="form">
		<div class="modal-content">
			<div class="modal-header">
				<div class="text text-success h4 float-left"><i class="fa fa-pills"></i> Available Drug/s & Medicines</div>
					<button type="button" id="closeSearch" class="close text-danger  float-right" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<table id="lotnotbl"  style="cursor:pointer;"class="table table-md table-striped table-bordered  table-hover" width="100%">
					<thead>
						<tr>
							<th width="50px" >Lot No</th>
							<th width="100px">Description(<small>(Generic/Strength/Form/Route)</small>)</th>
							<th  style="text-align:center; vertical-align:middle;" >Price</th>
							<th  style="text-align:center; vertical-align:middle;">Available</th>
							<th  style="text-align:center; vertical-align:middle;">dmdcomb</th>
							<th  style="text-align:center; vertical-align:middle;">dmdctr</th>
							<th  style="text-align:center; vertical-align:middle;">dmhdrsub</th>
							<th  style="text-align:center; vertical-align:middle;">Expiry</th>
							<th  style="text-align:center; vertical-align:middle;">Account</th>
							<th  style="text-align:center; vertical-align:middle;">Date as of</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
	</div>
<input type="hidden" id="module" value='issueDrug'>

<script src="<?php echo base_url()?>assets/scripts/pharmacy/issueDrug.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>