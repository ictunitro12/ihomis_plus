<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<form id="form_patrec" name="form_patrec" method="post">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto">
					<div class="h3 text text-success">
						<h4 class="modal-title text-success"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Medico Legal Currently Admitted</h4>
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
			<label class="h1 text-success nothingtoShow" hidden>NOTHING TO SHOW HERE...</label>
			<embed id="pdf_patrec" type="application/pdf" frameborder="2" width="100%" height="800px">
		</div>
		<div class="card-footer"></div>
	</div>
</form>
<form id="formAddCert">
	<div class="modal" id="MLCinput" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg " role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="col-md-12">
						<h1 class="modal-title text-success"><i class="fa fa-pencil-square-o"></i> Form
						</h1>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<label class="text-success" style="font-size: 15px">Certificate Number</label>
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-lg mb-1" name="certno" id="certno" autocomplete="off" />
						</div>
						<div class="col-md-4">
							<label class="text-success" style="font-size: 15px">Nearest kin</label>
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-lg mb-1" placeholder="" name="nearkin" id="nearkin" autocomplete="off" />
						</div>
						<div class="col-md-4">
							<label class="text-success" style="font-size: 15px">Nature and Probable Cause of Injury</label>
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-lg mb-1" name="natureinj" id="natureinj" autocomplete="off" />
						</div>
						<div class="col-md-4">
							<label class="text-success" style="font-size: 15px">Place of Injury</label>
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-lg mb-1" name="plcinj" id="plcinj" autocomplete="off" />
						</div>
						<div class="col-md-4">
							<label class="text-success" style="font-size: 15px">Date and Time of Injury</label>
						</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control form-control-lg mb-1" placeholder="" name="dteinj" id="dteinj" autocomplete="off" />
						</div>
						<div class="col-md-4">
							<label class="text-success" style="font-size: 15px">Findings</label>
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-lg mb-1" name="findings" id="findings" autocomplete="off" />
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit" id="pdfinsert" class="btn btn-success btn-ladda mr-auto" data-style="zoom-in"><i class="fa fa-print"></i> &nbsp Print</button>
					<button type="button" id="cancel" class="btn btn-danger" data-style="zoom-in" data-dismiss="modal" title="Close"><i class="fa fa-close"></i>&nbsp Close</button>
				</div>
			</div>
		</div>
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
							<input type="text" class="form-control form-control-lg" placeholder="LastName" onkeydown="upperCaseF(this)" name="slname" id="slname" autocomplete="off">
						</div>
						<div class="h6 col-md-2 col-form-label text-success text-default mb-1">
							Firstname:
						</div>
						<div class="col-md-10 mb-2">
							<input type="text" class="form-control form-control-lg" placeholder="FirstName" onkeydown="upperCaseF(this)" name="sfname" id="sfname" autocomplete="off">
						</div>
						<div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
							Middlename:
						</div>
						<div class="col-md-10 mb-2">
							<input type="text" class="form-control form-control-lg" placeholder="MiddleName" onkeydown="upperCaseF(this)" name="smname" id="smname" autocomplete="off">
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
								<th></th>
								<th>Health Record #</th>
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

<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script type="text/javascript">
	$(document).ready(function() {
		$('.nothingtoShow').prop('hidden',false);
		$("#PatSearch").modal({
						backdrop: 'static'
					}).draggable();

	});

	$('#searchpat').on('click', function() {
		location.reload();
	});

	function upperCaseF(a) {
		setTimeout(function() {
			a.value = a.value.toUpperCase();
		}, 1);
	}

	function inputCert(enccode) {
		$('#formAddCert').validate({
			submitHandler: function(form) {
				var certno = $('#certno').val();
				var nearkin = $('#nearkin').val();
				var natureinj = $('#natureinj').val();
				var plcinj = $('#plcinj').val();
				var dteinj = $('#dteinj').val();
				var find = $('#findings').val();
				if (certno == null || certno == "") {
					certno = "N/A";
				} else {
					certno = $('#certno').val();
				}
				if (nearkin == null || nearkin == "") {
					nearkin = "N/A";
				} else {
					nearkin = $('#nearkin').val();
				}
				if (natureinj == null || natureinj == "") {
					natureinj = "N/A";
				} else {
					natureinj = $('#natureinj').val();
				}
				if (plcinj == null || plcinj == "") {
					plcinj = "N/A";
				} else {
					plcinj = $('#plcinj').val();
				}
				if (dteinj == null || dteinj == "") {
					dteinj = "N/A";
				} else {
					dteinj = $('#dteinj').val();
				}
				if (find == null || find == "") {
					find = "No Findings";
				} else {
					find = $('#findings').val();
				}
				var x = document.getElementById("pdf_patrec");
				x.src = baseURL + "Rep_MedicalRecord_pdf/MedLegalCertCurrentAdmit_pdf/" + encodeURIComponent(encodeURIComponent(enccode)) + "/" + encodeURIComponent(encodeURIComponent(certno)) + "/" + encodeURIComponent(encodeURIComponent(nearkin)) + "/" + encodeURIComponent(encodeURIComponent(natureinj)) + "/" + encodeURIComponent(encodeURIComponent(plcinj)) + "/" + encodeURIComponent(encodeURIComponent(dteinj)) + "/" + encodeURIComponent(encodeURIComponent(find));
				$('#MLCinput').modal('hide');
				$('.nothingtoShow').prop('hidden',true);
				return false;
				$(form).submit();
			},
			rules: {
				dteinj: 'required',

			},
			messages: {
				dteinj: 'required',
			},
			errorElement: 'span',

			highlight: function highlight(element) {
				$(element).addClass('is-invalid').removeClass('is-valid');
				if ($(element).hasClass('select2-offscreen')) {
					element = $("#s2id_" + element.attr("id") + " ul").parent();
					$(element).addClass('is-invalid').removeClass('is-valid');
				}
			},

			unhighlight: function unhighlight(element) {
				$(element).addClass('is-valid').removeClass('is-invalid');
				if ($(element).hasClass('select2-offscreen')) {
					$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
				}
			}
		});
	}

	function PatSearchList(data) {
		var table = $("#TblPatSearchList").DataTable({
			data: data,
			destroy: true,
			className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [{
					"data": "enccode"
				},
				{
					"data": "hpercode"
				},
				{
					"data": "patientname"
				},
				{
					"data": "patbdate"
				},
				{
					"data": "patsex"
				}
			],
			columnDefs: [{
				targets: [0],
				visible: false,
			}, ],
		});
		$('#TblPatSearchList').on('click', 'tr', function() {
			var data = table.row(this).data();
			/*$('#form_patrec').modal('show');*/
			$('#MLCinput').modal({
				backdrop: 'static'
			}).draggable();
			var enccode = data['enccode'];
			inputCert(enccode);
			$("#PatSearchList").modal('hide');
		});
	}

	$('#frmPatSearch').submit('click', function() {
		$.ajax({
			url: baseURL + "Rep_MedicalRecord/PatientSearchAdmit",
			type: "POST",
			data: new FormData(this),
			dataType: "JSON",
			processData: false,
			contentType: false,
			cache: false,
			async: true,
			success: function(data, response) {
				$("#PatSearchList").modal({
					backdrop: 'static'
				}).draggable();
				$("#PatSearch").modal('hide');
				PatSearchList(data);
			},
			error: function(response) {
				alert("Error:Please try again!");
			}
		});
		return false;
	});
</script>