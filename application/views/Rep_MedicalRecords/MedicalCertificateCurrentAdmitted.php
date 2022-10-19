<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<form id="form_patrec" name="form_patrec" method="post">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto">
					<div class="h3 text text-success">
						<h4 class="modal-title text-success"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Medical Certificate Currently Admitted</h4>
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
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="modal-footer bg-secondary">
					<button class="btn btn-danger btn-square  btn-ladda btn-lg" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="formAddCert">
	<div class="modal" id="EnterPurpos" tabindex="-1" role="dialog">
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
							<label class="text-success" style="font-size: 15px">CERTIFICATE NUMBER:</label>
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-lg mb-1" name="certno" id="certno" readonly autocomplete="off" />
						</div>
						<div class="col-md-4">
							<label class="text-success" style="font-size: 15px">REQUESTING PERSON:</label>
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-lg mb-1" placeholder="" name="purpose" id="purpose" autocomplete="off" />
						</div>
						<div class="col-md-4">
							<label class="text-success" style="font-size: 15px">PURPOSE:</label>
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-lg mb-1" placeholder="" name="reqper" id="reqper" autocomplete="off" />
						</div>
						<input type="hidden" name="enccode" id="enccode" />
						<input type="hidden" name="hpercode" id="hpercode" />
						<input type="hidden" name="upicode" id="upicodeid" />
						<input type="hidden" name="updsw" id="updsw" />
						<input type="hidden" name="datemod" id="datemod" />
						<input type="hidden" name="dateasof" id="dateasof" />
						<input type="hidden" name="entryby" id="entryby" />
						<input type="hidden" name="formIden" id="formIden" />
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit" class="btn btn-success btn-ladda mr-auto" data-style="zoom-in"><i class="fa fa-save"></i> &nbsp save</button>
					<button type="button" id="cancelsave" class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> &nbsp cancel</button>
				</div>
			</div>
		</div>
	</div>
</form>


<form method="post">
	<div class="modal" id="form_patrec" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
					<button class="btn btn-danger btn-square  float-right" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
				</div>
				<div class="modal-body">
					<embed id="pdf_patrec" type="application/pdf" frameborder="2" width="100%" height="800px">
				</div>
				<div class="modal-footer bg-secondary">

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

<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script type="text/javascript">
	$(document).ready(function() {
		$("#PatSearch").modal({
						backdrop: 'static'
					}).draggable();
	});
	$('#searchpat').click('click', function() {
		$("#PatSearch").modal({
						backdrop: 'static'
					}).draggable();
	});

	function upperCaseF(a) {
		setTimeout(function() {
			a.value = a.value.toUpperCase();
		}, 1);
	}

	function check_if_exist(enccode, certno) {
		enccoded = encodeURIComponent(encodeURIComponent(enccode));

		$.ajax({
			type: "POST",
			url: "../Rep_MedicalRecord/checkhCert/" + enccoded,
			data: "JSON",
			success: function(data) {
				if (data == 1) {
					var y = new Date;
					var yeartoday = y.getFullYear();
					let cn = certno;
					var cert_no = cn.substr(0, 4);
					if (cert_no != yeartoday) {
						var certno_ = cn.replace(cert_no, yeartoday);
						$("#certno").val(certno_);
					} else {
						$("#certno").val(cn);
					}
					$("#PatadmitList").modal('hide');
					$('#EnterPurpos').modal({
						backdrop: 'static'
					}).draggable();
					$('#formIden').val('update');
					$("#enccode").val(enccode);

				} else {
					var y = new Date;
					var yeartoday = y.getFullYear();
					let cn = certno;
					var cert_no = cn.substr(0, 4);
					if (cert_no != yeartoday) {
						var certno_ = cn.replace(cert_no, yeartoday);
						$("#certno").val(certno_);
					} else {
						$("#certno").val(cn);
					}
					$("#PatadmitList").modal('hide');
					$('#EnterPurpos').modal({
						backdrop: 'static'
					}).draggable();
					$('#formIden').val('insert');
					$("#enccode").val(enccode);
				}
			},
			error: function(data) {
				alert('Please Try Again!');
			}
		});
	}

	function PatVisitList(data) {
		$('#admitllog').off();
		var table = $("#admitllog").DataTable({
			data: data,
			destroy: true,
			className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [{
					"data": "admdate"
				},
				{
					"data": "toecode"
				},
				{
					"data": "didate"
				},
				{
					"data": "diagdesc"
				}
			],
		});
		$('#admitllog').on('click', 'tr', function() {
			var data = table.row(this).data();
			var certno = data['certno'];
			var enccode = data['enccode'];
			check_if_exist(enccode, certno);
			$("#hpercode").val(data['hpercode']);
			PDFshow(enccode);
		});
	}

	function PatSearchList(data) {
		var table = $("#TblPatSearchList").DataTable({
			data: data,
			destroy: true,
			className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [{
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
		});
		$('#TblPatSearchList').on('click', 'tr', function() {
			var data = table.row(this).data();
			$.ajax({
				type: "POST",
				url: baseURL + "Rep_MedicalRecord/CurrentAdmitHisto/" + data['hpercode'],
				data: "JSON",
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function(data) {

					$('#PatSearchList').modal('hide');
					$('#PatadmitList').modal({
						backdrop: 'static'
					}).draggable();
					PatVisitList(data['data']);
					$('#cancelsave').click('onclick', function() {
						$('#PatadmitList').modal({
							backdrop: 'static'
						}).draggable();
						PatVisitList(data['data']);
					});
				},
				error: function(data) {
					toastr.error('Error: Fetching Patient Visits!', 'Error');
				}
			});
		});
	}
function PDFshow(enccode)	{
	$('#formAddCert').validate({
		submitHandler: function(form) {
			var POSTURL = baseURL + "Rep_MedicalRecord/saveMedCert";
			$.ajax({
				type: "POST",
				url: POSTURL,
				dataType: "JSON",
				cache: false,
				async: true,
				data: $(form).serialize(),
				success: function(data) {
					if ($('#formIden').val() == 'insert') {
						$("#EnterPurpos").modal('hide');
						$('#PatadmitList').modal('hide');
						var x = document.getElementById("pdf_patrec").src = baseURL + "Rep_MedicalRecord_pdf/MedicalCertCurrentAdmit_pdf/" + encodeURIComponent(encodeURIComponent(enccode));
						toastr.success('Successfully Saved!', 'Success');
					} else if ($('#formIden').val() == 'update') {
						$("#EnterPurpos").modal('hide');
						$('#PatadmitList').modal('hide');
						var x = document.getElementById("pdf_patrec").src = baseURL + "Rep_MedicalRecord_pdf/MedicalCertCurrentAdmit_pdf/" + encodeURIComponent(encodeURIComponent(enccode));
					} else {
						toastr.error('Error on saving!', 'Error');

					}
				},
				error: function(data) {
					toastr.error('Error on saving!', 'Error');
				}
			});
			return false;
			$(form).submit();
		},
		rules: {

			reqper: 'required',
			purpose: 'required',

		},
		messages: {
			reqper: 'required',
			purpose: 'required',
		},
		errorElement: 'span',
		errorPlacement: function errorPlacement(error, element) {
			error.addClass('invalid-feedback');

			if (element.prop('type') === 'checkbox') {
				error.insertAfter(element.parent('label'));
			} else if (element.hasClass('select2-hidden-accessible')) {
				element = $("#selReg" + element.attr("id") + "ul").parent();

				error.insertAfter(element);
			} else {
				error.insertAfter(element);
			}
		},

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
	});}
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