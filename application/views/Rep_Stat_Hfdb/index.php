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
</style>

<div class="card card-accent-success">
	<div class="card-header">
		<h4 class="card-title text-success"> Hospital Statistical Report</h4>
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
							<button id="btnCSS" class="btn btn-block btn-dark text-white"><i class="fa fa-print"></i>&nbsp;Print</button>
							<button id="compilevalues" class="btn btn-block btn-success text-white" onclick="moveCompile()"><i class="fa fa-folder-open"></i>&nbsp;Compile</button>
							<button id="btnSubmit" class="btn btn-block btn-info text-white"> <i class="fa fa-paper-plane"></i>&nbsp;Submit</button>
							<button id="statList" type="button" class="btn btn-block btn-danger text-white"><i class="fa fa-list-alt"></i>&nbsp;Submission Log</button>
						</div>
					</div>
				</div>
				<div class=" col-md-9">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-deck">
								<div class="card">
									<div class="card-body bg-dribbble">
										<h4 class="card-title text-white"> <i class="fa fa-map"></i> In-patient's Demographic Data</h4>
										<p class="card-text text-white">Congressional districts within the province, outside the province but within the region and outside the region</p>
									</div>
									<a href="<?php echo site_url('Rep_Hfdb/Demographic_Data_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>

								<div class="card">
									<div class="card-body bg-info">
										<h4 class="card-title text-white"> <i class="fa fa-bed"></i> Bed Capacity and Occupancy</h4>
										<p class="card-text text-white">Authorized bed capacity, Implementing beds, Actual beds, Additional beds used and Distribution of beds</p>
									</div>
									<a href="<?php echo site_url('Rep_Hfdb/Beds_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div><br>

					<div class="row">
						<div class="col-sm-12">
							<div class="card-deck">
								<div class="card">
									<div class="card-body bg-warning">
										<h4 class="card-title text-default"> <i class="fa fa-sign-out fa-lg"></i> Summary of Patients and Discharges</h4>
										<p class="card-text text-default">Summary of patients in the hospital, Discharges and Result of treatment / condition on dischagre</p>
									</div>
									<a href="<?php echo site_url('Rep_Hfdb/Discharge_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
								<div class="card">
									<div class="card-body bg-success">
										<h4 class="card-title text-default"> <i class="fa fa-stethoscope"></i> Morbidity</h4>
										<p class="card-text text-default">Leading causes of morbidity (over-all and by type of service)</p>
									</div>
									<a href="<?php echo site_url('Rep_Hfdb/Morbidity_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div><br>

					<div class="row">
						<div class="col-sm-12">
							<div class="card-deck">
								<div class="card">
									<div class="card-body bg-xing">
										<h4 class="card-title text-white"> <i class="fa fa-ambulance"></i> Deliveries and Abortions</h4>
										<p class="card-text text-white">Type of deliveries and Categories of abortion</p>
									</div>
									<a href="<?php echo site_url('Rep_Hfdb/Deliveries_Abortion_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
								<div class="card">
									<div class="card-body bg-yahoo">
										<h4 class="card-title text-white"> <i class="fa fa-heartbeat fa-lg"></i> Mortality / Deaths</h4>
										<p class="card-text text-white">Types of deaths and Leading causes of mortality (over-all and by type of service)</p>
									</div>
									<a href="<?php echo site_url('Rep_Hfdb/Mortality_View'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div><br>



					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body bg-github">
									<h3 class="card-title text-white"> <i class="fa fa-hospital-o"></i> Hospital Services</h3>
									<p class="card-text text-white"></p>
								</div>
								<a href="<?php echo site_url('Rep_Hfdb/hospitalServices'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body bg-behance">
									<h3 class="card-title text-white"> <i class="fa fa-users fa-lg"></i> Human Resource Compliment</h3>
									<p class="card-text text-white"></p>
								</div>
								<a href="<?php echo site_url('Rep_Hfdb/staffingPattern'); ?>" class="btn btn-default btn-block">More info <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
</div>
<input type="hidden" id="year">
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
					<h4 class="modal-title text-white"><i class="fa fa-file-pdf-o"></i> Hospital Statistical Report <small>(Year : <label id="reps_year" readonly></label>)</small></h4>
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
		<div class="modal-dialog modal-dialog-centered modal-md">
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
		<div class="modal-dialog modal-dialog-centered modal-md">
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
			/* buttonValidation($.session.get('year')); */
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
				/* buttonValidation(year); */
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

	$('.close').on('click', function() {
		location.reload();
	});

	$('#btnCSS').on('click', function(data) {
		$('#ModalCSS').modal('show');
		document.getElementById('reps_year').innerHTML = $.session.get('year');
		var year = $.session.get('year');
		var src = baseURL + 'Rep_Hfdb/Twenty_Three_Pages/' + year;
		var x = document.getElementById("CSS_pdf").src = src;
		$("#CSS_pdf").attr("src", src);
	});

	$('#ModalCSS').on('hidden.coreui.modal', function() {
		$("#CSS_pdf").removeAttr("src").attr("src", "");
	});
	/*
	$('#printpdf').on('click',function(){
		var baseURL = $("#baseURL").val(); 	
		$("DateSearch").modal('hide');
		var year = $.session.get('year');
		window.open(baseURL+"Rep_Hfdb/Twenty_Three_Pages/"+year); 
	});	
	*/

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
						url: baseURL + "Rep_Hfdb_Compile/compile/" + year,
						data: "JSON",
						async: false,
						success: function(data) {
							toastr.success(data);
							document.getElementById("compilevalues").disabled = true;
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

		/* var obj;
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
		}); */

	}

	function statreportList(year) {
		$('#statReplisttable').DataTable({
			"searching": false,
			"info": false,
			"destroy": true,
			"paging": false,
			"ajax": baseURL + "Rep_Statistical/statrepList_DataLoad/" + year,
			"destroy": true,
			"ordering": false,
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
</script>