<style>

table#CoViD19Table.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h4 text text-success">
					<i class="fa fa-file-text-o"></i>
					&nbsp<?php echo $header; ?>&nbsp;&nbsp;<small><?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="<?php echo site_url('CoViD19/Add'); ?>" data-toggle="tooltip" title="Add Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="CoViD19Table" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead class="thead-dark">
				<tr>
					<th class="align-middle" width="5%">Include</th>
					<th></th>
					<th class="align-middle" width="5%">Testing<br>Details</th>
					<th class="align-middle" width="10%">Specimen ID</th>
					<th class="align-middle" width="10%">Health Record<br>Number</th>
					<th class="align-middle" width="20%">Patient Name<br>(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
					<th class="align-middle" width="15%">Date of Consultation<br>(<small>mm/dd/yyyy</small>)</th>
					<th class="align-middle">Type of<br>Encounter</th>
					<th class="align-middle" width="20%">Provider<br>(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
					<th class="align-middle" width="15%">Date Uploaded<br>(<small>mm/dd/yyyy</small>)</th>
					<th></th>
					<th></th>
					<th class="align-middle">Actions</th>
				</tr>
			</thead>
		</table>
	</div>
	<div class="card-footer"></div>
</div>

<form name="frmDeleteCoViD19" id="frmDeleteCoViD19">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">

	<div class="modal fade" id="DeleteCoViD19" tabindex="-1" role="dialog">
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
					<button type="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmCoViD19PDF" name="frmCoViD19PDF" method="post">
	<div class="modal" id="ModalCoViD19" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<input type="hidden" name="code" id="code">
					<h4 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Coronavirus Disease (CoViD-19)</h4>
					<button class="btn btn-danger btn-square float-right" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
				</div>
				<div class="modal-body" id="CoViD19PDF"></div>
				<div class="modal-footer bg-secondary"></div>
			</div>
		</div>
	</div>
</form>

<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<input type="hidden" name="enccode" id="enccode">

<script type="text/javascript">
	$(function() {
		PatientLogList();
	});
</script>

<script src="<?php echo base_url() ?>assets/scripts/covid19/covid19.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/covid19/delete.js"></script>