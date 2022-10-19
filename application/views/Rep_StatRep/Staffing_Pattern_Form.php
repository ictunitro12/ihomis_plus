<style>
	thead,
	tbody {
		display: inline-block;
		width: 99%;
	}

	tbody {
		height: 560px;
		/* Just for the demo          */
		overflow-y: auto;
		/* Trigger vertical scroll    */
		overflow-x: hidden;
		/* Hide the horizontal scroll */
		width: 100%;
	}

	tr:hover {
		background: #80DB88 !important;
	}

	th {
		background-color: #20962a;
		color: white;
	}

	input:focus {
		outline: solid;
	}
</style>
<form id="frmStaffing">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-accent-success">
				<div class="card-header">
					<div class="row">
						<div class="col-md-9 col-md-auto">
							<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Human Resource Compliment</div>
						</div>
						<div class="col-md-3 col-md-auto">
							<div class="btn-group float-right" role="group" aria-label="">
								<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SUBMIT</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body table-responsive">
					<table id="StaffingPatternTable" class="table table-sm table-bordered table-condensed table-hover" width="99%">
						<thead>
							<tr>
								<th width="30%" class="align-middle text-center" rowspan="2">Profession / Position / Designation</th>
								<th width="10%" class="align-middle text-center" rowspan="2">Specialty Board Certified</th>
								<th width="20%" class="align-middle text-center" colspan="2">Total staff working full time (at least 40 hours/week)</th>
								<th width="20%" class="align-middle text-center" colspan="2">Total staff working part time (at least 40 hours/week)</th>
								<th width="10%" class="align-middle text-center" rowspan="2">Active Rotating or Visiting / Affiliate (For Private)</th>
								<th width="10%" class="align-middle text-center" rowspan="2">Outsourced</th>
							</tr>
							<tr>
								<th width="10%" class="align-middle text-center">Number of permanent staff</th>
								<th width="10%" class="align-middle text-center">Number of contractual staff</th>
								<th width="10%" class="align-middle text-center">Number of permanent staff</th>
								<th width="10%" class="align-middle text-center">Number of contractual staff</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</form>

<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_staffingpattern/validation.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		StaffPat($.session.get('year'));
	});

	function StaffPat(year) {
		$.ajax({
			url: baseURL + "Rep_Statistical/StaffingPattern_Dataload/" + year,
			type: "POST",
			dataType: "JSON",
			processData: false,
			fixedHeader: true,
			cache: false,
			async: true,
			success: function(data, response) {
				var obj = data.data;
				var tr = '';
				var counter = 1;
				$.each(obj, function(key, value) {

					if (counter == 1 || counter == 2 || counter == 17 || counter == 42) {
						tr += '<tr><td width="30%"><label name ="code" id="code">' + getProfessionalDesc(value.professiondesignation) + '</label></td>';

						tr += '<td width="10%"><input type="hidden" value="' + value.professiondesignation + '" name ="professiondesignation' + counter + '[]"><input type="text" readonly class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 1) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.specialtyboardcertified + '" tabindex="-1"/></td>';

						tr += '<td width="10%"><input type="text" readonly class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 2) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.fulltime40permanent + '" tabindex="-1"/></td>';

						tr += '<td width="10%"><input type="text" readonly class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 3) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.fulltime40contractual + '" tabindex="-1"/></td>';

						tr += '<td width="10%"><input type="text" readonly class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 4) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.parttimepermanent + '" tabindex="-1"/></td>';

						tr += '<td width="10%"><input type="text" readonly class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 5) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.parttimecontractual + '" tabindex="-1"/></td>';

						tr += '<td width="10%"><input type="text" readonly class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 6) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.actrotateaff + '" tabindex="-1"/></td>';

						tr += '<td width="10%"><input type="text" readonly class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 7) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.outsourced + '" tabindex="-1"/></td></tr>';
					} else {
						tr += '<tr><td width="30%"><label name ="code" id="code">' + getProfessionalDesc(value.professiondesignation) + '</label></td>';

						tr += '<td width="10%"><input type="hidden" value="' + value.professiondesignation + '" name ="professiondesignation' + counter + '[]"><input type="text" class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 1) + '" name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.specialtyboardcertified + '" data-column="1"/></td>';

						tr += '<td width="10%"><input type="text" class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 2) + '" name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.fulltime40permanent + '" data-column="2"/></td>';

						tr += '<td width="10%"><input type="text" class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 3) + '" name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.fulltime40contractual + '" data-column="3"/></td>';

						tr += '<td width="10%"><input type="text" class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 4) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.parttimepermanent + '" data-column="4" /></td>';

						tr += '<td width="10%"><input type="text" class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 5) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.parttimecontractual + '" data-column="5" /></td>';

						tr += '<td width="10%"><input type="text" class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 6) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.actrotateaff + '" data-column="6" /></td>';

						tr += '<td width="10%"><input type="text" class="form-control-plaintext text-center' + assignClass(value.professiondesignation, 7) + '"  name ="professiondesignation' + counter + '[]" id="ft40p" autocomplete="off" value="' + value.outsourced + '" data-column="7" /></td></tr>';
					}
					counter++;
				});
				$("#StaffingPatternTable tbody").html(tr);
			},
			error: function(response) {
				toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
			}
		});
	}

	function assignClass(data, column) {
		switch (data) {
			case '1':
				return ' consultantSum column' + column;
				break;
			case '2':
				return ' internalSum column' + column;
				break;
			case '3':
				return ' internal column' + column;
				break;
			case '4':
				return ' internal column' + column;
				break;
			case '5':
				return ' internal column' + column;
				break;
			case '6':
				return ' internal column' + column;
				break;
			case '7':
				return ' internal column' + column;
				break;
			case '8':
				return ' internal column' + column;
				break;
			case '9':
				return ' internal column' + column;
				break;
			case '10':
				return ' consultant column' + column;
				break;
			case '11':
				return ' consultant column' + column;
				break;
			case '12':
				return ' consultant column' + column;
				break;
			case '13':
				return ' consultant column' + column;
				break;
			case '14':
				return ' consultant column' + column;
				break;
			case '15':
				return ' consultant column' + column;
				break;
			case '16':
				return ' column' + column;
				break;
			case '17':
				return ' residentSum column' + column;
				break;
			case '18':
				return ' resident column' + column;
				break;
			case '19':
				return ' resident column' + column;
				break;
			case '20':
				return ' resident column' + column;
				break;
			case '21':
				return ' resident column' + column;
				break;
			case '22':
				return ' column' + column;
				break;
			case '23':
				return ' column' + column;
				break;
			case '24':
				return ' column' + column;
				break;
			case '25':
				return ' column' + column;
				break;
			case '27':
				return ' column' + column;
				break;
			case '28':
				return ' column' + column;
				break;
			case '29':
				return ' column' + column;
				break;
			case '30':
				return ' column' + column;
				break;
			case '31':
				return ' column' + column;
				break;
			case '32':
				return ' column' + column;
				break;
			case '33':
				return ' column' + column;
				break;
			case '34':
				return ' column' + column;
				break;
			case '35':
				return ' column' + column;
				break;
			case '36':
				return ' column' + column;
				break;
			case '37':
				return ' column' + column;
				break;
			case '38':
				return ' column' + column;
				break;
			case '39':
				return ' column' + column;
				break;
			case '40':
				return ' column' + column;
				break;
			case '41':
				return ' column' + column;
				break;
			case '42':
				return ' gssSum column' + column;
				break;
			case '43':
				return ' gss column' + column;
				break;
			case '44':
				return ' gss column' + column;
				break;
			case '45':
				return ' gss column' + column;
				break;
			default:
				return '';
		}
	}

	function getProfessionalDesc(data) {
		switch (data) {
			case '1':
				return '1. Consultants';
				break;
			case '2':
				return '1.1 Internal Medicine';
				break;
			case '3':
				return 'a. Generalist';
				break;
			case '4':
				return 'b. Cardiologist';
				break;
			case '5':
				return 'c. Endocrinologist';
				break;
			case '6':
				return 'd. Gastro-Enterologist';
				break;
			case '7':
				return 'e. Pulmonologist';
				break;
			case '8':
				return 'f. Nephrologist';
				break;
			case '9':
				return 'g. Neurologist';
				break;
			case '10':
				return '1.2. Obstetrics/ Gynecology (and sub-specialty)';
				break;
			case '11':
				return '1.3. Pediatrics (and sub-specialty)';
				break;
			case '12':
				return '1.4. Surgery (and sub-specialty)';
				break;
			case '13':
				return '1.5. Anesthesiologist';
				break;
			case '14':
				return '1.6. Radiologist';
				break;
			case '15':
				return '1.7. Pathologist';
				break;
			case '16':
				return '2. Post-Graduate Fellows';
				break;
			case '17':
				return '3. Residents';
				break;
			case '18':
				return '3.1. Internal Medicine';
				break;
			case '19':
				return '3.2. Obstetricts-Gynecology';
				break;
			case '20':
				return '3.3. Pediatrics';
				break;
			case '21':
				return '3.4. Surgery';
				break;
			case '22':
				return '1. Nurses';
				break;
			case '23':
				return '2. Midwives';
				break;
			case '24':
				return '3. Nursing Aides';
				break;
			case '25':
				return '4. Nutritionist';
				break;
			case '27':
				return '5. Physical Therapist';
				break;
			case '28':
				return '6. Pharmacists';
				break;
			case '29':
				return '7. Medical Technologist';
				break;
			case '30':
				return '8. Laboratory Technician';
				break;
			case '31':
				return '9. X-Ray Technologist/X-Ray Technician';
				break;
			case '32':
				return '10. Medical Equipment Technician';
				break;
			case '33':
				return '11. Social Worker';
				break;
			case '34':
				return '12. Medical Records Officer/ Hospital Health Information Officer';
				break;
			case '35':
				return '1. Chief Administrative Officer';
				break;
			case '36':
				return '2. Accountant';
				break;
			case '37':
				return '3. Budget officer';
				break;
			case '38':
				return '4. Cashier';
				break;
			case '39':
				return '5. Clerk';
				break;
			case '40':
				return '6. Engineer';
				break;
			case '41':
				return '7. Driver';
				break;
			case '42':
				return '9. General Support Staff';
				break;
			case '43':
				return '-Janitorial';
				break;
			case '44':
				return '-Maintenance';
				break;
			case '45':
				return '-Security';
				break;
			default:
				return '';
		}
	}

	$("#StaffingPatternTable").on('keyup', '.consultant', function() {
		var data_column = $(this).data('column');

		var internalSum = 0;
		var internal = $('input:text.internal.column' + data_column);
		for (let i = 0; i < internal.length; i++) {
			if ($(internal[i]).val() == '') {
				continue;
			}
			internalSum = internalSum + parseInt($(internal[i]).val());
		}

		var consultantSum = 0;
		var consultant = $('input:text.consultant.column' + data_column);
		for (let i = 0; i < consultant.length; i++) {
			if ($(consultant[i]).val() == '') {
				continue;
			}
			consultantSum = consultantSum + parseInt($(consultant[i]).val());
			cSum = internalSum + consultantSum
		}
		$('input:text.consultantSum.column' + data_column).val(cSum);
	});

	$("#StaffingPatternTable").on('keyup', '.internal', function() {
		var data_column = $(this).data('column');

		var internalSum = 0;
		var internal = $('input:text.internal.column' + data_column);
		for (let i = 0; i < internal.length; i++) {
			if ($(internal[i]).val() == '') {
				continue;
			}
			internalSum = internalSum + parseInt($(internal[i]).val());
		}
		$('input:text.internalSum.column' + data_column).val(internalSum);


		var consultantSum = 0;
		var consultant = $('input:text.consultant.column' + data_column);
		for (let i = 0; i < consultant.length; i++) {
			if ($(consultant[i]).val() == '') {
				continue;
			}
			consultantSum = consultantSum + parseInt($(consultant[i]).val());
			cSum = internalSum + consultantSum
		}
		$('input:text.consultantSum.column' + data_column).val(cSum);
	});

	$("#StaffingPatternTable").on('keyup', '.resident', function() {
		var data_column = $(this).data('column');

		var residentSum = 0;
		var resident = $('input:text.resident.column' + data_column);
		for (let i = 0; i < resident.length; i++) {
			if ($(resident[i]).val() == '') {
				continue;
			}
			residentSum = residentSum + parseInt($(resident[i]).val());
		}
		$('input:text.residentSum.column' + data_column).val(residentSum);
	});

	$("#StaffingPatternTable").on('keyup', '.gss', function() {
		var data_column = $(this).data('column');

		var gssSum = 0;
		var gss = $('input:text.gss.column' + data_column);
		for (let i = 0; i < gss.length; i++) {
			if ($(gss[i]).val() == '') {
				continue;
			}
			gssSum = gssSum + parseInt($(gss[i]).val());
		}
		$('input:text.gssSum.column' + data_column).val(gssSum);
	});

	$("#StaffingPatternTable").on('keypress', function() {
		return isNumber(event, this);
	});

	function isNumber(evt) {
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if ((charCode != 8) && (charCode < 48 || charCode > 57)) {
			return false;
		} else {
			return true;
		}
	}

	$('#StaffingPatternTable').on('paste', function(event) {
		if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
			event.preventDefault();
		}
	});
</script>