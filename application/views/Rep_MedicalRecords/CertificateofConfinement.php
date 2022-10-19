<style>
	#TblPatSearchList tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<form id="form_patrec" name="form_patrec" method="post">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto">
					<div class="h3 text text-success">
						<h4 class="modal-title text-success"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Certificate of Confinement</h4>
					</div>
				</div>
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" title="Search Patient" role="group" aria-label="">
						<button onclick="searchPatient()" class="btn btn-success btn-md btn-ladda" title="Search patient" data-style="zoom-in"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body" id="ClearanceC">
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
					<br></br>
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
<form id="formAddCertConfine">
	<div class="modal" id="EnterPurpos" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<h3 class="modal-title text-success"><i class="fa fa-pencil-square-o"></i>&nbsp; Form</h3>
					<br>
					<div class="box-body box-profile">
						<ul class="list-group">
							<li class="list-group-item">
								<label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Certificate of Confinement Number :</label><br>
								<a><input type="text" class="form-control form-control-sm mb-1" readonly name="confno" id="confno" autocomplete="off" /></a>
							</li>
							<li class="list-group-item">
								<label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Requesting Person :</label><br>
								<a><input type="text" class="form-control form-control-sm mb-1" placeholder="" name="reqper" id="reqper" autocomplete="off" /></a>
							</li>
							<li class="list-group-item">
								<label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Puspose :</label><br>
								<a><input type="text" class="form-control form-control-sm mb-1" placeholder="" name="purpose" id="purpose" autocomplete="off" /></a>
							</li>
							<li class="list-group-item">
								<label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Medical Record Officer :</label>
								<p><select name="selEmployees" id="selEmployees" class="form-control form-control-md"></select></p>
							</li>
						</ul>
						<input type="hidden" name="enccode" id="enccode" />
						<input type="hidden" name="hpercode" id="hpercode" />
						<input type="hidden" name="upicode" id="upicodeid" />
						<input type="hidden" name="updsw" id="updsw" />
						<input type="hidden" name="datemod" id="datemod" value="<?php echo date('Y/m/d H:i:s') ?>" />
						<input type="hidden" name="entryby" id="entryby" />
						<input type="hidden" name="formIden" id="formIden" />
						<br>
						<div class="btn-group float-right ">
							<button type="submit" class="btn btn-outline-success btn-ladda mr-auto" data-style="zoom-in"><i class="fa fa-save"></i> &nbsp save</button>
							<button type="button" id="cancel" class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" title="Close"><i class="fa fa-close"></i>&nbsp cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#PatSearch").modal({
			backdrop: 'static'
		}).draggable();
		SelEmployees();
	});

	function upperCaseF(a) {
		setTimeout(function() {
			a.value = a.value.toUpperCase();
		}, 1);
	}

	function check_if_exist(enccode, confno) {
		enccoded = encodeURIComponent(encodeURIComponent(enccode));

		$.ajax({
			type: "POST",
			url: baseURL + "Rep_MedicalRecord/checkCertConfine/" + enccoded,
			data: "JSON",
			success: function(data) {
				if (data == 1) {
					var y = new Date;
					var yeartoday = y.getFullYear();
					let cn = confno;
					var conf_no = cn.substr(0, 4);
					if (conf_no != yeartoday) {
						var confno_ = cn.replace(conf_no, yeartoday);
						$("#confno").val(confno_);
					} else {
						$("#confno").val(confno);
					}
					/* $("#PatSearchList").modal('hide'); */
					$('#EnterPurpos').modal({
						backdrop: 'static'
					}).draggable();
					$('#formIden').val('update');
					$("#enccode").val(enccode);

				} else {
					var y = new Date;
					var yeartoday = y.getFullYear();
					let cn = confno;
					var conf_no = cn.substr(0, 4);
					if (conf_no != yeartoday) {
						var confno_ = cn.replace(conf_no, yeartoday);
						$("#confno").val(confno_);
					} else {
						$("#confno").val(confno);
					}
					$("#confno").val(confno);
					/* $("#PatSearchList").modal('hide'); */
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
				targets: 0,
				visible: false,
			}],
		});

		$('#TblPatSearchList').on('click', 'tr', function() {
			var data = table.row(this).data();
			var confno = data['confno'];
			var enccode = data['enccode'];
			var patientname
			check_if_exist(enccode, confno);
			$("#hpercode").val(data['hpercode']);
			getencountercode(enccode);

		});
	}

	function getencountercode(enccode) {
		$('#formAddCertConfine').validate({
			submitHandler: function(form) {
				var POSTURL = baseURL + "Rep_MedicalRecord/savecertofconf";
				$.ajax({
					type: "POST",
					url: POSTURL,
					dataType: "JSON",
					cache: false,
					async: true,
					data: $(form).serialize(),
					success: function(data) {
						var employees = $('#selEmployees').val();
						if ($('#formIden').val() == 'insert') {
							$("#EnterPurpos").modal('hide');
							toastr.success('Successfully Saved!', 'Success');
							var x = document.getElementById("pdf_patrec").src = baseURL + "Rep_MedicalRecord_pdf/MedicalCertofCon_pdf/" + encodeURIComponent(encodeURIComponent(btoa(enccode))) + '/'+ encodeURIComponent(encodeURIComponent(btoa(employees)));
						} else if ($('#formIden').val() == 'update') {
							$("#EnterPurpos").modal('hide');
							toastr.success('Successfully Saved!', 'Success');
							var x = document.getElementById("pdf_patrec").src = baseURL + "Rep_MedicalRecord_pdf/MedicalCertofCon_pdf/" + encodeURIComponent(encodeURIComponent(btoa(enccode))) + '/'+ encodeURIComponent(encodeURIComponent(btoa(employees)));
						} else {
							toastr.error('Error on saving!', 'Error');

						}
					},
					error: function(data) {
						toastr.error('Error Duplicate Entry!', 'Error');
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
				$('#cancelsave').click('onclick', function() {
					$("#PatSearchList").modal({
						backdrop: 'static'
					}).draggable();
					PatSearchList(data);
				});
			},
			error: function(response) {
				alert("Error:Please try again!");
			}
		});
		return false;
	});
</script>