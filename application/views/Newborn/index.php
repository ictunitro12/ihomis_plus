<style>

	table#nbtbl.dataTable tbody tr:hover {
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
				<div class="form-row">
					<div class="col-md-6 col-md-auto">
						<h5 class="modal-title text-success"><i class="fas fa-baby"></i>&nbsp New Born</h5>
					</div>
					<div class="col-md-6 col-md-auto">
						<div class="btn-group pull-right" role="group" aria-label="">
							<button onclick="Searchpatient()" class="btn btn-outline-success btn-md btn-ladda"
							data-style="zoom-in" data-toggle="tooltip" title="Patient"><i
							class="fa fa-search"> </i> Patient Search
						</button>
						<button onclick="AddNewBorn()" id="btnNewborn"
						class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"
						data-toggle="tooltip" title="Add New Born" disabled><i class="fa fa-plus"> </i> Add New
						Born
					</button>
				</div>
			</div>
		</div>
		<br>

		<table id="nbtbl" class="table table-sm table-striped table-bordered table-condensed table-hover "
		width="100%">
		<thead>
			<tr>
				<th>ctr</th>
				<th>enccode</th>
				<th>Hospital no</th>
				<th>Firstname</th>
				<th>Middlename</th>
				<th>Lastname</th>
				<th>sex</th>
				<th>Birthdate</th>
				<th></th>
			</tr>
		</thead>
	</table>
</div>
</div>


</div>
</div>
<input name="module" id="module" type="hidden" value="<?php echo $module; ?>">
<input name="enccode" id ="enccode" type="hidden">
<input name="hhpercode" id ="hhpercode" type="hidden">

<?php $this->load->view('MedicalRecords/frmNewBorn.php'); ?>
<?php $this->load->view('MedicalRecords/frmLiveBirth.php'); ?>

<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/medicalrecords/newborn.js"></script>
<script src="<?php echo base_url()?>assets/scripts/medicalrecords/livebirth.js"></script>

<script src="<?php echo base_url()?>assets/scripts/library.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		var enccode=$.session.get('enccode');
		var hpercode=$.session.get('hpercode');
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var percode = encodeURIComponent(encodeURIComponent(hpercode));
		$('#PatSearch').modal({ backdrop: 'static'}).draggable({});	
	});
	

	function Searchpatient(){
		$("#PatSearch").modal({ backdrop: 'static'}).draggable({});	
	}
	function initNewBornModule(enccode, hpercode){

		$("#btnNewborn").removeAttr("disabled");

		$("#encounter").val(enccode);
		$("#percode").val(hpercode);

		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		newbornDetails(enctr);
	}
</script>




