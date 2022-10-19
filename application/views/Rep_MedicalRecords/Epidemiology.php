<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<form id="dateRange" method="post">
	<div class="modal" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
					<button type="button" id="closeSearch" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body border-success">
					<div id="baseDateControl">
						<div class="row-md-6">
							<label class="text-success">From</label>
							<input type="date" class="form-control form-control-mg" mid="2000-01-01" max="<?php echo date('Y-m-d'); ?>" name="from" id="from" autocomplete="off" />
						</div>
						<div class="row-md-6">
							<label class="text-success">to</label>
							<input type="date" class="form-control form-control-mg" mid="2000-01-01" max="<?php echo date('Y-m-d'); ?>" name="to" id="to" autocomplete="off" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="RepPatientAdm" class="btn btn-success btn-block " data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
				</div>
			</div>
		</div>
	</div>
</form>


<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp <?php echo $header; ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" class="btn btn-success pull-right btn-md" data-toggle="modal" data-target="#DateSearch" title="Select Date">
						<i class="fa fa-calendar"></i>
					</button>&nbsp;
					<button type="button" class="btn btn-success pull-right btn-md" data-toggle="modal" title="Download" id="downloadmodalidbtn">
						<i class="fa fa-download"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="EpidTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
			<thead class="thead-dark">
				<tr>
					<th>Case #</th>
					<th>Patient Name</th>
					<th>Ward</th>
					<th>Municipality</th>
					<th>Hour</th>
					<th>Hour1</th>
					<th>Gcode</th>
					<th>Icd10a</th>
					<th>Icd10b</th>
					<th>Icd10c</th>
					<th>Icd10d</th>
					<th>Doctor's Name</th>
					<th>Street</th>
					<th>City</th>
					<th>Province</th>
					<th>Region</th>
					<th>Gender</th>
					<th>Civil Status</th>
					<th>Age</th>
					<th>Date Admitted</th>
					<th>Date Discharge</th>
					<th>Admission Month</th>
					<th>Generic Code</th>
					<th>Admitting Diagnosis</th>
					<th>Final Diagnosis</th>
					<th>Hospital Record #</th>
					<th>birthdate</th>
					<th>Disposition</th>
					<th>Licince No.</th>
				</tr>
			</thead>
			<tfoot class="thead-dark">
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
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

<form method="post">
	<div class="modal" id="downloadmodalid" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-question-circle"></i> Do you want to download this file?</h2>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<a id="downloadbtn" class="btn btn-outline-success btn-block" data-style="zoom-in" title="Download" href="<?php echo site_url('Rep_MedicalRecord_excel/Epidemiology_excel/'); ?>">
								<i class="fa fa-check"></i> YES
							</a>
						</div>
						<div class="col-md-6">
							<button class="btn btn-outline-danger btn-block" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i> NO</button>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
				</div>
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
	$(document).ready(function() {
		$("#DateSearch").modal({
				backdrop: 'static'
			}).draggable();
	});
	function getList(from, to) {
		$('#downloadmodalidbtn').on('click', function() {
			$('#downloadmodalid').modal({
				backdrop: 'static'
			}).draggable();
		});
		$.ajax({
			url: baseURL + 'Rep_MedicalRecord/Epidemiology_control/' + from + '/' + to,
			type: "POST",
			data: 'JSON',
			dataType: "JSON",
			processData: true,
			contentType: false,
			success: function(data, response) {
				$('#DateSearch').modal('hide');
				var hrefprintadmittedpdf = $("#downloadbtn").prop('href') + from + "/" + to;
				$("#downloadbtn").prop('href', hrefprintadmittedpdf);
				$('#downloadbtn').on('click', function() {
					$('#downloadmodalid').modal('hide');
				});
				var table = $("#EpidTable").dataTable({
					data: data,
					destroy: true,
					className: 'table table-sm table-striped table-borderless table-condensed table-hover',
					columns: [
						{"data": "casenum"},
						{"data": "patient"},
						{"data": "wardname"},
						{"data": "ctyname"},
						{"data": "hours"},
						{"data": "hours1"},
						{"data": "gcode"},
						{"data": "icd10A"},
						{"data": "icd10B"},
						{"data": "icd10C"},
						{"data": "icd10D"},
						{"data": "Doctor"},
						{"data": "patstr"},
						{"data": "ctyname"},
						{"data": "provname"},
						{"data": "regname"},
						{"data": "patsex"},
						{"data": "patcstat"},
						{"data": "patage"},
						{"data": "admdate"},
						{"data": "disdate"},
						{"data": "disdate"},
						{"data": "genericode"},
						{"data": "admittingdiag"},
						{"data": "finaldiag"},
						{"data": "hpercode"},
						{"data": "patbdate"},
						{"data": "disposition"},
						{"data": "licno"}
					],

					columnDefs: [{
							targets: 16,
							searchable: false,
							render: function(data, type, row) {
								switch (data) {
									case 'M':
										return '<i class="fa fa-male"></i>&nbsp MALE';
										break;
									case 'F':
										return '<i class="fa fa-female"></i>&nbsp FEMALE';
										break;
									default:
										return 'N/A';
								}
							},

						},
						{
							targets: [7, 8, 9, 10],
							visible: false,
						}
					],
				});
			},
			error: function(response) {
				alert("Error:Please try again!");
			}
		});
		return false;
	}

	$('#dateRange').validate({
		submitHandler: function(form) {
			var from = $("#from").val();
			var to = $("#to").val();
			if(from > to){
				toastr.error("'From' is greater than 'To'",'<i class="fa fa-exclamation-triangle"></i> Error.');
			}
			else{
			$.session.set('from', from);
			$.session.set('to', to);
			getList(from, to);
			$("#DateSearch").modal('hide');
			}
			return false;
			$(form).submit();
		},

		rules: {
			from: 'required',
			to: 'required',
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
</script>