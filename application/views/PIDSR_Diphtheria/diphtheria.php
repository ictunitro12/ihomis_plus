<style>
	table#DiphtheriaTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<form id="dateRange" method="post">
	<div class="modal" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
				</div>
				<div class="modal-body border-success">
					<div id="baseDateControl">
						<div class="row-md-6">
							<label class="text-success">From</label>
							<input type="date" class="form-control form-control-mg" placeholder="start date" name="from" id="from" autocomplete="off" />
						</div>
						<div class="row-md-6">
							<label class="text-success">to</label>
							<input type="date" class="form-control form-control-mg" placeholder="end date" name="to" id="to" autocomplete="off" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" id="submitdate" class="btn btn-success btn-block " data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
				</div>
			</div>
		</div>
	</div>
</form>

<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp;<?php echo $header; ?><small>&nbsp;&nbsp;<?php echo $subheader; ?></small>
				</div>
			</div>

			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="<?php echo site_url('PIDSR_Diphtheria/PatientForm'); ?>" data-toggle="tooltip" title="Register Patient" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i>
					</a>
					<!-- <button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Select Date Range" onclick="daterangeselect();"><i class="fa fa-calendar"></i></button> -->
					<!-- <button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Print" id="printpdf"><i class="fa fa-file-pdf-o"></i></button> -->
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table id="DiphtheriaTable" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
			<thead class="thead-dark">
				<tr>
					<th>encode</th>
					<th>HEALTH RECORD NUMBER</th>
					<th>PATIENT NAME</th>
					<th>DATE OF ADMISSION/CONSULTATION</th>
					<th>TYPE OF ENCOUNTER</th>
					<th>PROVIDER</th>
					<th width="20px"></th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<div class="modal fade" id="ModalPatientInfo" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h3 class="text text-success"><i class="fa fa-user-circle"></i> Patient Information</h3>
				<div class="box-body box-profile">
					<img id="PatientPicInfo" class="img-fluid bg-success img-thumbnail rounded mx-auto d-block mb-1" width="200px" alt="Patient Photo">
					<div class="h5 profile-username text-center text-success" id="patname"></div>
					<div class="h6 text-center text-success" id="hpercode"></div>
					<ul class="list-group">
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp SEX:</b>
							<a class="pull-right text text-success" id="patsex">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp CIVIL STATUS:</b>
							<a class="pull-right text text-success" id="civilstat">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp BIRTHDATE:</b>
							<a class="pull-right text text-success" id="patbdate">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp CONSULTATION DATE:</b>
							<a class="pull-right text text-success" id="consultdte">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp DATE OF DIAGNOSIS:</b>
							<a class="pull-right text text-success" id="dtediag">N/A</a>
						</li>
					</ul>
					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</div>
</div>


<form name="frmDeleteDiphtheria" id="frmDeleteDiphtheria">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	<div class="modal fade" id="DeleteDiphtheria" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger text-light">
					<div class="col-md-12">
						<i class="fa fa-exclamation-triangle" style="font-size: 30px;"></i>&nbsp;
						<label class="col-form-label" style="font-size: 15px;"> Data cannot be retrieved after being deleted.</label>
					</div>
				</div>
				<div class="modal-body">
					<h4>Are you sure you want to delete this ?</h4>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp; Delete</button>
					<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Cancel</button>
				</div>
			</div>
		</div>
	</div>
</form>


<form method="post">
	<div class="modal" id="ModalDiphtheria" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> &nbsp;<?php echo $header; ?></h2>
					<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<embed id="printdiphtheriapdfmodal" type="application/pdf" frameborder="2" width="100%" height="800px">
				</div>
				<div class="modal-footer bg-secondary">
				</div>
			</div>
		</div>
	</div>
</form>

<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<input name="encountercode" id="encountercode" type="hidden">
<input name="hpercode" id="hpercode" type="hidden">
<script src="<?php echo base_url() ?>assets/scripts/pidsr_diphtheria/delete.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/pidsr_diphtheria/diphtheria.js"></script>




<script type="text/javascript">
	$(function() {
		/* pdfprint(); */
		PatientLogList();
		$("#PatientPicInfo").prop('src', baseURL + 'assets/img/avatars/none.png');

	});

	/* function pdfprint() {

		$('#printpdf').click('click', function() {
			$('#ModalDiphtheria').modal({
				backdrop: 'static'
			}).draggable();
			var x = document.getElementById("printdiphtheriapdfmodal");
			x.src = baseURL + "PIDSR_Diphtheria/Diphtheria_pdf";
		});
	} */

	function PatientLogList() {
		var data = new Object();
		data.id = "DiphtheriaTable";
		data.link = baseURL + "PIDSR_Diphtheria/diphtheriaList";
		data.type = "POST";
		data.coldef = [{
			targets: [0, 1],
			visible: false,
			searchable: true,
		}];

		loadTable(data);
	}

	$("#DiphtheriaTable").on("click", ".ModalDeleteDiphtheria", function() {
		var data = $(this).data();
		$('#DeleteDiphtheria').modal({
			backdrop: 'static'
		}).draggable();
		$("#formIdentification").val('delete');
		$("#deletecode").val(data['enccode']);

	});
	$("#DiphtheriaTable").on("click", ".ModalDiphtheria", function() {
		var data = $(this).data();
		$('#ModalDiphtheria').modal({
			backdrop: 'static'
		}).draggable();
		var x = document.getElementById("printdiphtheriapdfmodal");
			x.src = baseURL + "PIDSR_Diphtheria/Diphtheria_pdf/";
	});
</script>