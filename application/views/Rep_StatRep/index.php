<style>
	#myCompileProgress {
		width: 100%;
		background-color: #ddd;
	}

	#myCompileBar {
		width: 0%;
		height: 30px;
		background-color: #1F45FC;
		text-align: center;
		line-height: 30px;
		color: white;
	}

	#mySubmitProgress {
		width: 100%;
		background-color: #ddd;
	}

	#mySubmitBar {
		width: 0%;
		height: 30px;
		background-color: #1F45FC;
		text-align: center;
		line-height: 30px;
		color: white;
	}

	tr:hover {
		background: #80DB88 !important;
	}

	th {
		background-color: #20962a;
		color: white;
	}
</style>

<div class="card card-accent-success">
	<div class="card-header">
		<h4 class="card-title text-success"> Online Health Facility Statistical Report System</h4>
	</div>
	<section class="content">
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="card-card card-profile">
						<div class="card border">
							<ul class="list-group list-group-bordered">
								<li class="list-group-item bg-success" style="color:white">
									<h4><i class="fa fa-calendar-o"></i> Reporting Year : <label id="rep_year" readonly></label>
										<h4>
								</li>
								<li class="list-group-item" style="color:black">
									<i class="fa fa-h-square"></i> Facility Code: <?php echo FacilityInfo()->newfhudcode; ?>
								</li>
								<li class="list-group-item" style="color:black">
									<i class="fa fa-map"></i> Region: <?php echo FacilityInfo()->regname; ?>
								</li>
								<li class="list-group-item" style="color:black">
									<i class="fa fa-map-marker"></i> Province: <?php echo FacilityInfo()->provname; ?>
								</li>
								<li class="list-group-item" style="color:black">
									<i class="fa fa-map-pin"></i> City: <?php echo FacilityInfo()->ctyname; ?>
								</li>
							</ul>
						</div>
					</div>
					<div class="card card-primary">
						<div class="card-body box-profile border">
							<button id="select_year" class="btn btn-block btn-warning text-white"><i class="fa fa-calendar"></i>&nbsp;Select Year</button>
							<button id="btnCSS" class="btn btn-block btn-dark text-white"><i class="fa fa-print"> </i>&nbsp;Print</button>
							<button id="compilevalues" class="btn btn-block btn-success text-white" onclick="moveCompile()"><i class="fa fa-folder-open"></i>&nbsp;Compile</button>
							<button id="btnSubmit" class="btn btn-block btn-info text-white"> <i class="fa fa-paper-plane"></i>&nbsp;Submit</button>
							<button id="statList" type="button" class="btn btn-block btn-danger text-white"><i class="fa fa-list-alt"></i>&nbsp;Submission Log</button>
						</div>
						<!--<div class = "row text-center" id = "compile_load" hidden>
							<div class = "col">
								<div class="spinner-border" role="status">
									<span class="spinner-border sr-only">Compiling...</span>
								</div>
							</div>
						</div>
						-->
					</div>
				</div>
				<div class=" col-md-9">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-deck">
								<div class="card">
									<div class="card-body bg-info">
										<h4 class="card-title text-white"> <i class="fa fa-hospital-o fa-lg"></i> General Information</h4>
										<p class="card-text text-white">Classification, quality management and bed capacity / occupancy</p>

									</div>
									<a href="<?php echo site_url('Rep_Statistical/General_Information_View'); ?>" class="btn btn-block btn-default">More info <i class="fa fa-arrow-right"></i></a>
								</div>
								<!-- <div class="col-sm-6">
								<div class="card">
									<div class="card-body bg-facebook">
										<h4 class="card-title text-white"> <i class="fa fa-check fa-lg"></i> Quality Management</h4>
										<p class="card-text text-white">Patient care and services</p>

									</div>
									<a href="<?php echo site_url('Rep_Statistical/Quality_Management_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
							</div> -->
								<div class="card">
									<div class="card-body bg-warning">
										<h4 class="card-title text-default"> <i class="fa fa-sign-out fa-lg"></i> Summary of Patients and Discharges</h4>
										<p class="card-text text-default">Summary of patients in the hospital and discharges</p>
									</div>
									<a href="<?php echo site_url('Rep_Statistical/Discharge_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-deck">
								<div class="card">
									<div class="card-body bg-success">
										<h4 class="card-title text-default"> <i class="fa fa-stethoscope fa-lg"></i> Morbidity<br></h4>
										<p class="card-text text-default">Leading causes of morbidity</p>
									</div>
									<a href="<?php echo site_url('Rep_Statistical/Morbid_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
								<div class="card">
									<div class="card-body bg-facebook">
										<h4 class="card-title text-white"> <i class="fa fa-venus-mars fa-lg"></i> Deliveries, Visits & Tests</h4>
										<p class="card-text text-white">Deliveries, outpatient visits, including emergency care, testing and other services</p>
									</div>
									<a href="<?php echo site_url('Rep_Statistical/Delivery_Visit_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-deck">
								<div class="card">
									<div class="card-body bg-yahoo">
										<h4 class="card-title text-white"> <i class="fa fa-heartbeat fa-lg"></i> Mortality / Deaths</h4>
										<p class="card-text text-white">Types of deaths and leading causes of mortality / deaths</p>
									</div>
									<a href="<?php echo site_url('Rep_Statistical/Mort_Death_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
								<div class="card">
									<div class="card-body bg-pinterest">
										<h4 class="card-title text-white"> <i class="fa fa-flask fa-lg"></i> HAI and Surgical Operations</h4>
										<p class="card-text text-white">Healthcare associated infections and surgical operations</p>
									</div>
									<a href="<?php echo site_url('Rep_Statistical/Inf_Rate_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-deck">
								<div class="card">
									<div class="card-body bg-github">
										<h4 class="card-title text-white"> <i class="fa fa-money fa-lg"></i> Expenses & Revenues</h4>
										<p class="card-text text-white">Total money spent and received</p>
									</div>
									<a href="<?php echo site_url('Rep_Statistical/Exp_Rev_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
								<div class="card">
									<div class="card-body bg-xing">
										<h4 class="card-title text-white"> <i class="fa fa-users fa-lg"></i> Human Resource Complement</h4>
										<p class="card-text text-white">Number of staffs in the facility</p>
									</div>
									<a href="<?php echo site_url('Rep_Statistical/Staffing_Pattern'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div><br><br>
				</div>
			</div>
		</div>
	</section>
</div>
<!--
<div class="modal fade" id="Compiling_Modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
     <div class="row">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <h5 class="modal-title text-white" style="font-size:22px"> Compiling...</h5> &nbsp &nbsp &nbsp
		<i class="fa fa-hourglass-end fa-spin" style="font-size:28px;color:green"></i>
    </div>
  </div>
</div>
-->

<form id="dateRange" method="post">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h4 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Year </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div id="baseDateControl">
					<div class="row-sm-3">
						<div class="modal-body">
							<div id="baseDateControl">
								<div id="yearly">
									<div class="row-sm-3">
										<input type="number" min="2010" max="<?php echo date("Y") - 1; ?>" value="<?php echo date("Y") - 1; ?>" class="form-control form-control-mg" placeholder="yyyy" name="qyear" id="qyear" autocomplete="on" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" />
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success btn-block" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmCSS">
	<div class="modal fade" id="ModalCSS" tabindex="-1" role="dialog">
		<!-- <div class="modal-dialog modal-xl" role="dialog"> -->
		<div class="modal-dialog modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h4 class="modal-title text-white"><i class="fa fa-file-pdf-o"></i> Annual Health Facility Statistical Report <small>(Year : <label id="reps_year" readonly></label>)</small></h4>
					<button type="button" class="close" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" id="enccodeCSS">
					<iframe id="CSS_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="ProgressBar1">
	<div class="modal fade" id="ModalProgressBar1" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div id="myCompileProgress">
						<div id="myCompileBar">0%</div>
						<div align="center">
							<label class="text-success"><b>
									<br>
									<h6>Compiling..</h6>
								</b></label>&nbsp;&nbsp;&nbsp;
							<span class="spinner-border spinner-border-sm text-success"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="ProgressBar2">
	<div class="modal fade" id="ModalProgressBar2" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div id="mySubmitProgress">
						<div id="mySubmitBar">0%</div>
						<div align="center">
							<label class="text-success"><b>
									<br>
									<h6>Submitting..</h6>
								</b></label>&nbsp;&nbsp;&nbsp;
							<span class="spinner-border spinner-border-sm text-success"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<!--<form id="formSubmit">
	<div class="modal fade" id="modalSubmit" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-xl" role="dialog"> 
		<div class="modal-dialog modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-success"><i class="fa fa-bar-chart"></i> Online Health Facility Statistical Report System - Log List </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<input type="hidden" id="year" name="report_year" value=""></input>
				<div class="card-body table-responsive">
					<div class="modal-body">
						<table id="submitRepTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
							<thead class="thead-dark">
								<tr>
									<th width="15%"></th>
									<th width="25%">FUNCTION NAME </th>
									<th width="25%">STATUS</th>
									<th width="20%">REPORT YEAR</th>
									<th width="15%">CODE</th>
								</tr>
							</thead>

						</table>
					</div>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
	</div>
</form>-->

<form id="statReplist">
	<div class="modal fade" id="modalStatreplist" tabindex="-1" role="dialog">
		<!-- <div class="modal-dialog modal-xl" role="dialog"> -->
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h4 class="modal-title text-white"><i class="fa fa-list-alt"></i> Submission Log</h4>
					<button type="button" class="close" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<input type="hidden" id="year" name="report_year" value=""></input>
				<div class="modal-body">
					<div class="card-body table-responsive">
						<table id="statReplisttable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th width="20%">Status</th>
									<th width="10%">Report year</th>
									<th width="40%">Reported by</th>
									<th width="20%">Designation</th>
									<th width="10%">Date reported</th>
								</tr>
							</thead>
						</table>
						<table id="submitRepTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th width="20%">Status</th>
									<th width="10%">Report year</th>
									<th width="40%">Fucntion name </th>
									<th width="20%">Response</th>
									<th width="10%">Code</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<button type="button" id="button1" class="btn btn-success btn-block">Click Here To Start Progress Bar</button>
			<p>&nbsp;
			<p>
				<button type="button" id="button2" class="btn btn-danger btn-block">Click Here To Stop Progress Bar</button>
		</div>
		<div class="col-md-12">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div id="progressbar" style="border:1px solid #ccc; border-radius: 5px; "></div>

			<br>
			<div id="information"></div>
		</div>
	</div>
</div> -->

<iframe id="loadarea" style="display:none;"></iframe><br />

<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/plugin/JQuery-Session-Plugin-master/jquery.session.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		if ($.session.get('year') == undefined) {
			document.getElementById("compilevalues").disabled = true;
			document.getElementById("btnSubmit").disabled = true;
			document.getElementById("statList").disabled = true;
			/* document.getElementById("btnCSS").disabled = true; */
			$("#DateSearch").modal({
				backdrop: 'static'
			}).draggable({});
			document.getElementById('rep_year').innerHTML = 'yyyy';
		} else {
			buttonValidation($.session.get('year'));
			$("#DateSearch").modal('hide');
		}
		return false;
	});

	$('#filter').on('click', function() {
		var year = $("#qyear").val();
		if (year == "") {
			alert("Warning: Please input valid year!");
			$("#DateSearch").modal({
				backdrop: 'static'
			}).draggable({});
		} else {
			if (year >= 2010 && year <= (<?php echo date("Y") - 1; ?>)) {
				$.session.set('year', year);
				buttonValidation(year);
				$("#DateSearch").modal('hide');
				document.getElementById('rep_year').innerHTML = $.session.get('year');
				return false;
			}
		}
	});

	$('#select_year').on('click', function() {
		location.reload();
		$("#qyear").val($.session.get('year'));
		$.session.clear('year');
	});

	$('#compilevalues').on('click', function() {
		$("#ModalProgressBar1").modal({
			backdrop: 'static'
		});
	});

	$('#btnSubmit').on('click', function() {
		$("#ModalProgressBar2").modal({
			backdrop: 'static'
		});
		moveSubmit();
	});

	$('#statList').on('click', function() {
		var year = $.session.get('year');
		checkohsrsSubmitrep(year);
		statreportList(year);
		ohsrsLog(year);
		$("#modalStatreplist").modal({
			backdrop: 'static'
		});
	});

	$('.close').on('click', function() {
		location.reload();
	});

	$('#btnCSS').on('click', function(data) {
		$('#ModalCSS').modal('show');
		document.getElementById('reps_year').innerHTML = $.session.get('year');
		var year = $.session.get('year');
		var src = baseURL + 'Rep_Statistical/FourteenPages/' + year;
		var x = document.getElementById("CSS_pdf").src = src;
		$("#CSS_pdf").attr("src", src);
	});

	$('#ModalCSS').on('hidden.coreui.modal', function() {
		$("#CSS_pdf").removeAttr("src").attr("src", "");
	});

	var i = 0;

	function moveCompile() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("myCompileBar");
			var width = 10;
			var id = setInterval(frame, 20);

			function frame() {
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar1").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Rep_Statistical_Compile/compile/" + year,
						data: "JSON",
						async: false,
						success: function(data) {
							toastr.success('Successfuly compiled.', 'Success');
							/* document.getElementById("btnCSS").disabled = true; */
							document.getElementById("compilevalues").disabled = false;
							document.getElementById("btnSubmit").disabled = false;
							document.getElementById("statList").disabled = false;
						},
						error: function(data) {
							toastr.error("Error: Compiling!");
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmit() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					var year = $.session.get('year');
					$("#ModalProgressBar2").modal('hide');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitgenInfoclass/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							$("#ModalProgressBar2").modal('hide');
							toastr.success("Classification submitted!");
							moveSubmitQM();
						},
						error: function(data) {
							toastr.error("Error: Submitting Classification!");
							moveSubmitQM();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}

	}

	function moveSubmitQM() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitQM/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Quality Management submitted!");
							moveSubmitBedCapacity();
						},
						error: function(data) {
							toastr.error("Error: Submitting Quality Management!");
							moveSubmitBedCapacity();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitBedCapacity() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitbedcap/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Bed Capacity / Occupancy submitted!");
							moveSubmitSumofPatient();
						},
						error: function(data) {
							toastr.error("Error: Submitting Bed Capacity / Occupancy!");
							moveSubmitSumofPatient();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitSumofPatient() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitsumofpat/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Summary of Patients submitted!");
							moveSubmitDischargeSpecialty();
						},
						error: function(data) {
							toastr.error("Error: Submitting Summary of Patients!");
							moveSubmitDischargeSpecialty();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitDischargeSpecialty() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitdiscspic/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Discharge Specialty submitted!");
							moveSubmitMorbidity();
						},
						error: function(data) {
							toastr.error("Error: Submitting Discharge Specialty!");
							moveSubmitMorbidity();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	/* function moveSubmitDischargeSpecialtyOther() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitDischSpecialtyOthers/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Discharge Specialty Others submitted!");
							moveSubmitMorbidity();
						},
						error: function(data) {
							toastr.error("Error: Submitting Discharge Specialty Others!");
							moveSubmitMorbidity();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	} */

	function moveSubmitMorbidity() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitmobidity/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Morbidity submitted!");
							moveSubmitNumberofDeliveries();
						},
						error: function(data) {
							toastr.error("Error: Submitting Morbidity!");
							moveSubmitNumberofDeliveries();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitNumberofDeliveries() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitdischnodel/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Number of Deliveries submitted!");
							moveSubmitDischarges();
						},
						error: function(data) {
							toastr.error("Error: Submitting Number of Deliveries!");
							moveSubmitDischarges();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitDischarges() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitdischopv/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Outpatient Visits submitted!");
							moveSubmitDischargeOPD();
						},
						error: function(data) {
							toastr.error("Error: Submitting Outpatient Visits!");
							moveSubmitDischargeOPD();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitDischargeOPD() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitdischopd/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Leading OPD Consultations submitted!");
							moveSubmitDischargeER();
						},
						error: function(data) {
							toastr.error("Error: Submitting Leading OPD Consultations!");
							moveSubmitDischargeER();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitDischargeER() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitdiscer/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Leading ER Consultations submitted!");
							moveSubmitDischargeTest();
						},
						error: function(data) {
							toastr.error("Error: Submitting Leading ER Consultations!");
							moveSubmitDischargeTest();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitDischargeTest() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitdischtest/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Testing submitted!");
							moveSubmitDischargeEV();
						},
						error: function(data) {
							toastr.error("Error: Submitting Testing!");
							moveSubmitDischargeEV();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitDischargeEV() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitdischev/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Emergency Visits submitted!");
							moveSubmitDischargeDeath();
						},
						error: function(data) {
							toastr.error("Error: Submitting Emergency Visits!");
							moveSubmitDischargeDeath();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitDischargeDeath() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitdischDeath/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Deaths submitted!");
							moveSubmitMortality();
						},
						error: function(data) {
							toastr.error("Error: Submitting Deaths!");
							moveSubmitMortality();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitMortality() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitmortality/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Mortality submitted!");
							moveSubmitInfectionRate();
						},
						error: function(data) {
							toastr.error("Error: Submitting Mortality!");
							moveSubmitInfectionRate();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitInfectionRate() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitopthai/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Infection Rate submitted!");
							moveSubmitMajorOperation();
						},
						error: function(data) {
							toastr.error("Error: Submitting Infection Rate!");
							moveSubmitMajorOperation();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitMajorOperation() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitmajoropt/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Major Operations submitted!");
							moveSubmitMinorOperation();
						},
						error: function(data) {
							toastr.error("Error: Submitting Major Operations!");
							moveSubmitMinorOperation();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitMinorOperation() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitminoropt/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Minor Operations submitted!");
							moveSubmitStaffingPattern();
						},
						error: function(data) {
							toastr.error("Error: Submitting Minor Opearations!");
							moveSubmitStaffingPattern();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitStaffingPattern() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitstaffpat/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Human Resource Compliment submitted!");
							moveSubmitStaffingPatternOth();
						},
						error: function(data) {
							toastr.error("Error: Submitting Human Resource Compliment!");
							moveSubmitStaffingPatternOth();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitStaffingPatternOth() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitstaffpatother/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Human Resource Compliment Others submitted!");
							moveSubmitExpense();
						},
						error: function(data) {
							toastr.error("Error: Submitting Human Resource Compliment Others!");
							moveSubmitExpense();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitExpense() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitexpense/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Expenses submitted!");
							moveSubmitRevenue();
						},
						error: function(data) {
							toastr.error("Error: Submitting Expenses!");
							moveSubmitRevenue();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitRevenue() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitrevenue	/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Revenues submitted!");
							moveSubmitReport();
						},
						error: function(data) {
							toastr.error("Error: Submitting Revenues!");
							moveSubmitReport();
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function moveSubmitReport() {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$("#ModalProgressBar2").modal('hide');
					var year = $.session.get('year');
					$.ajax({
						type: "POST",
						url: baseURL + "Ohsrs_Webservice/submitsubmitreport/" + year,
						data: "JSON",
						async: false,
						success: function(data) {

							toastr.success("Reported by Deatils submitted!");
							checkohsrsSubmitrep(year);
							statreportList(year);
							ohsrsLog(year);
							$("#modalStatreplist").modal({
								backdrop: 'static'
							});

						},
						error: function(data) {
							toastr.error("Error: Submitting Reported by Details!");
							checkohsrsSubmitrep(year);
							statreportList(year);
							ohsrsLog(year);
							$("#modalStatreplist").modal({
								backdrop: 'static'
							});
						}
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "%";
				}
			}
		}
	}

	function checkohsrsSubmitrep(year) {
		var year = $.session.get('year');
		$.ajax({
			type: "POST",
			url: baseURL + "Ohsrs_Webservice/submitgetTable/" + year,
			data: "JSON",
			async: false,
			/* success: function(data) {

			},
			error: function(data) {
				alert("Warning: Report is not yet Submitted!");
			} */
		});
	}

	function ohsrsLog(year) {
		$('#submitRepTable').DataTable({
			"searching": false,
			"paging": false,
			"info": false,
			"destroy": true,
			"ajax": baseURL + "Rep_Statistical/ohsrsLog_DataLoad/" + year,
			"destroy": true,
			"ordering":false,
			"columns": [{
					data: "code",
					render: function(data, type, row) {

						if (row.code == 103) {
							return '<i class="fa fa-exclamation-circle" style="color:red">&nbsp; For compliance';
						} else if (row.code == 100) {
							return '<i class="fa fa-check-square-o" style="color:blue">&nbsp; For validation';
						} else if (row.code == 101) {
							return '<i class="fa fa fa-wrench" style="color:#cc6600">&nbsp; Under maintenance';
						} else if (row.code == 102) {
							return '<i class="fa fa-exclamation-triangle" style="color:orange">&nbsp; Authentication failed';
						} else if (row.code == '') {
							return '<i class="fa fa-exclamation" style="color:#ff9900">&nbsp; Not sent';
						} else {
							return '<i class="fa fa-paper-plane" style="color:green">&nbsp; Sent</i>';
						}
					},
				},
				{
					"data": "report_year"
				},
				{
					"data": "function_name"
				},
				{
					data: "status",
					render: function(data, type, row) {

						if (row.status == 'Web Service is Running') {
							return 'Waiting for Validation';
						} else {
							return data;
						}
					},
				},
				{
					"data": "code"
				},
			]
		});
	}

	function buttonValidation(year) {
		$.ajax({
			type: "POST",
			url: baseURL + "Rep_Statistical/statrepList_DataLoad/" + year,
			data: "json",
			success: function(data, status) {

				if (data.data < 1) {
					document.getElementById("compilevalues").disabled = false;
					/* document.getElementById("btnSubmit").disabled = true; */
					document.getElementById("statList").disabled = true;
					/* document.getElementById("btnCSS").disabled = true; */
				} else {
					const responseData = data.data[0];

					if (responseData.reportingstatus === 'V') {
						document.getElementById("compilevalues").disabled = true;
						/* document.getElementById("btnSubmit").disabled = true; */
						document.getElementById("statList").disabled = false;
						/* document.getElementById("btnCSS").disabled = false; */
					} else if (responseData.reportingstatus === 'S') {
						/* document.getElementById("compilevalues").disabled = false; */
						/* document.getElementById("btnSubmit").disabled = true; */
						document.getElementById("statList").disabled = false;
						/* document.getElementById("btnCSS").disabled = true; */
					} else if (responseData.reportingstatus === 'C') {
						document.getElementById("compilevalues").disabled = false;
						/* document.getElementById("btnSubmit").disabled = true; */
						document.getElementById("statList").disabled = false;
						/* document.getElementById("btnCSS").disabled = true; */
					} else {
						document.getElementById("compilevalues").disabled = false;
						/* document.getElementById("btnSubmit").disabled = true; */
						document.getElementById("statList").disabled = true;
						/* document.getElementById("btnCSS").disabled = true; */
					}
				}
			},
			error: function(data, status) {
				return status;
			}
		});

		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Rep_Statistical/statrepLogValidation_DataLoad/" + year,
			async: false,
			success: function(data, status) {
				var obj = $.parseJSON(data);

				if (obj['no'] == 22 || obj['no'] == 0) {
					document.getElementById("btnSubmit").disabled = true;
					document.getElementById("compilevalues").disabled = true;
				} else {
					document.getElementById("btnSubmit").disabled = false;
					document.getElementById("compilevalues").disabled = false;
				}
			},
			error: function(data, status) {}
		});

	}

	function statreportList(year) {
		$('#statReplisttable').DataTable({
			"searching": false,
			"info": false,
			"destroy": true,
			"paging": false,
			"ajax": baseURL + "Rep_Statistical/statrepList_DataLoad/" + year,
			"destroy": true,
			"ordering":false,
			"columns": [{
				
					data: "reportingstatus",
					render: function(data, type, row) {

						if (row.reportingstatus == 'V') {
							return '<i class="fa fa-check" style="color:green">&nbsp; Validated';
						} else if (row.reportingstatus == 'S') {
							return '<i class="fa fa-paper-plane" style="color:orange">&nbsp; Submitted';
						} else {
							return '<i class="fa fa-folder" style="color:blue">&nbsp; Compiled</i>';
						}
					},
				},
				{
					"data": "report_year"
				},
				{
					"data": "reportedby"
				},
				{
					"data": "designation"
				},
				{
					"data": "datereported"
				},
			]
		});
	}

	// function submitGenInfo() {
	// 	var year = $.session.get('year');
	// 	$.ajax({
	// 		type: "POST",
	// 		url: baseURL + "Ohsrs_Webservice/submitgenInfoclass/" + year,
	// 		data: "JSON",
	// 		async: false,
	// 		success: function(data) {
	// 			toastr.success(data);
	// 		},
	// 		error: function(data) {
	// 			toastr.error("Error: Compiling!");
	// 		}
	// 	});
	// }

	// function submitQM() {
	// 	var year = $.session.get('year');
	// 	$.ajax({
	// 		type: "POST",
	// 		url: baseURL + "Ohsrs_Webservice/submitQM/" + year,
	// 		data: "JSON",
	// 		async: false,
	// 		success: function(data) {
	// 			toastr.success("submitQM Submitted!");
	// 		},
	// 		error: function(data) {
	// 			toastr.error("Error: Compiling!");
	// 		}
	// 	});
	// }

	// $("#button1").click(function(){
	// 	var year = $.session.get('year');
	// 	var src = baseURL + 'Rep_Statistical/progressBar/';
	// 	var srcs = baseURL + 'Ohsrs_Webservice/submitgenInfoclass/' + year;
	// 	console.log(srcs);
	// 	document.getElementById('loadarea').src = src;
	// });
	// $("#button2").click(function(){
	// 	document.getElementById('loadarea').src = '';
	// });
</script>