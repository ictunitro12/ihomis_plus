<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<form id="form_patrec" name="form_patrec" method="post">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto">
					<div class="h3 text text-success">
						<h4 class="modal-title text-success"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Discharged Summary Report</h4>
					</div>
				</div>
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" title="Search Patient" role="group" aria-label="">
						<button onclick="searchPatient()" class="btn btn-success btn-md btn-ladda" title="Search patient" data-style="zoom-in"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
			<embed id="pdf_patrec" type="application/pdf" frameborder="2" width="100%" height="800px">
		</div>
		<div class="card-footer"></div>
	</div>
</form>
<form id="frmPatSearch" method="post">
	<div class="modal fade" id="PatSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
					<h1 class="modal-title text-success"><i class="fa fa-search fa-2x"></i> Patient Search</h1>
					<br><br>
					<div class="row">
						<div class=" h6 col-md-2 col-form-label text-success  text-default mb-1">
							Record#:
						</div>
						<div class="col-md-10 mb-2">
							<input type="text" class="form-control form-control-lg" placeholder="Hospital Number" name="shpercode" id="shpercode" autocomplete="off">
						</div>
						<div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
							Lastname:
						</div>
						<div class=" col-md-10 mb-2">
							<input type="text" class="form-control form-control-lg" placeholder="LastName" name="slname" id="slname" autocomplete="off">
						</div>
						<div class="h6 col-md-2 col-form-label text-success text-default mb-1">
							Firstname:
						</div>
						<div class="col-md-10 mb-2">
							<input type="text" class="form-control form-control-lg" placeholder="FirstName" name="sfname" id="sfname" autocomplete="off">
						</div>
						<div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
							Middlename:
						</div>
						<div class="col-md-10 mb-2">
							<input type="text" class="form-control form-control-lg" placeholder="MiddleName" name="smname" id="smname" autocomplete="off">
						</div>
						<div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
							Birthdate:
						</div>
						<div class="col-md-10 mb-2">
							<input type="date" class="form-control form-control-lg" placeholder="BirthDate" name="sbod" id="sbod" autocomplete="off">
						</div>
						<div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
							Sex:
						</div>
						<div class="col-md-10 mb-2">
							<select name="ssex" id="ssex" class="form-control form-control-lg">
								<option>Select</option>
								<option value="M">Male</option>
								<option value="F">Female</option>
							</select>
						</div>
					</div>
					<button type="submit" name="sSubmit" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-search"></i> &nbsp SEARCH</button>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmPatSearchList" method="post">
	<div class="modal fade" id="PatSearchList" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<h1 class="modal-title text-success"><i class="fa fa-th-list"></i>&nbsp Patient List</h1>
					<table id="TblPatSearchList" class="table table-hover table-sm table table-striped table-bordered table-condensed" width="100%">
						<thead>
							<tr>
								<th>Health Record:</th>
								<th>Patient name(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
								<th>Date of Birth(<small>md/dd/yyyy</small>)</th>
								<th>Sex(<small>Male/Female</small>)</th>
							</tr>
						</thead>
					</table>
					<a href="<?php echo site_url('Patient/PatientRegister'); ?>" class="btn btn-success  btn-ladda btn-md " data-style="zoom-in"><i class="fa fa-plus"></i> Register</a>
					<button class="btn btn-danger  btn-ladda btn-md" data-style="zoom-in" onclick="searchAgain();"><i class="fa fa-close"></i> Close</button>

				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmPatHistoryList" method="post">
	<div class="modal" id="PatadmitList" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Admission History</h1>
					<table id="admitllog" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
						<thead class="thead-dark">
							<tr>
								<th>DATE/TIME</th>
								<th>DATE/TIME</th>
								<th>TYPE OF ENCOUNTER</th>
								<th>DISCHARGE DATE</th>
								<th>FINAL DIAGNOSIS</th>
							</tr>
						</thead>
						<tfoot class="thead-dark">
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="modal-footer bg-secondary">
					<button class="btn btn-danger btn-square  btn-ladda btn-lg" onclick="searchPatientList();" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>

<?php echo ViewSearchPatient(); ?>
<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/scripts/admissionreports/patinfo_dischargesum.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#PatSearch").modal({backdrop:'static'}).draggable();
	});
</script>