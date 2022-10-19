<style>
	tr:hover {
		background: #80DB88 !important;
	}

	th {
		background-color: #20962a;
		color: white;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="row">
					<div class="col-md-9 col-md-auto">
						<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Human Resource Compliment <small>(Year : <label id="rep_year" readonly></label>)</small></div>
					</div>
					<div class="col-md-3 col-md-auto">
						<div class="btn-group float-right" role="group" aria-label="">
							<a href="<?php echo site_url('Rep_Statistical/Staffing_Pattern_Form'); ?>" data-toggle="tooltip" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-toggle="tooltip"><i class="fa fa-cog"></i> Manage</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="StaffingPatternTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
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
</div>

<script type="text/javascript">
	$(document).ready(function() {
		StaffPat($.session.get('year'));
		document.getElementById('rep_year').innerHTML = $.session.get('year');
	});

	function StaffPat(year) {
		var data = new Object();
		data.id = "StaffingPatternTable";
		data.link = baseURL + "Rep_Statistical/StaffingPattern_Dataload/" + year;
		data.type = "POST";
		data.paging = false;
		data.info = false;
		data.searching = false;
		data.destroy = true;
		data.coldef = [{
				targets: [0],
				searchable: false,
				orderable: false,
				render: function(data, type, row) {
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
				},
			},
			{
				targets: [1, 2, 3, 4, 5, 6, 7],
				orderable: false,
			}
		];
		loadTable(data);
	}
</script>