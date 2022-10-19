<style>

table#AdmissionTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#icd10_index1_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#icd10_index2_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#icd10_index3_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#icd10_index4_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#tableSearchExtDiag.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">

			<div class="col-md-6">
				<div class="h3 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp  <?php echo $header;?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">

				</div>

			</div>	

		</div>

	</div>

	<div class="card-body table-responsive">
		<div class="btn-group pull-left" role="group" aria-label="">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
				<label class="form-check-label" for="inlineRadio1">All</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
				<label class="form-check-label" for="inlineRadio2">Admit</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
				<label class="form-check-label" for="inlineRadio3">OPD</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option4">
				<label class="form-check-label" for="inlineRadio3">ER</label>
			</div>
		</div>
		<br/><br/>
		<table id="AdmissionTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
			<thead class="thead-dark">
				<tr>
					<th>ENCOUNTER CODE</th>
					<th >HOSPITAL NUMBER</th>
					<th>PATIENT NAME</th>
					<th>ENCOUNTER TYPE</th>
					<th>DATE / TIME</th>
					<th>ATTENDING DOCTOR</th>
					<th>ICD-10 CODE</th>
					<th>FINAL DIAGNOSIS</th>
					<th style="width: 90px;"></th>
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
					<th style="width: 90px;"></th>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="card-footer">

	</div>
</div>

<!-- update final diagnosis -->

<form id="frmupdatediag" method="post">
	<div class="modal fade" id="modalupdatediag" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="text text-success"><i class="fa fa-user-circle"></i> Patient Information</h3>
					<div class="box-body box-profile">
						<div class="h5 profile-username text-center text-success" id="fullname"></div>
						<ul class="list-group">
							<input type="hidden" name="hiddenenccodess" class="pull-right text text-success" id ="hiddenenccodess" />


							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-address-book"></i>&nbsp HOSPITAL NUMBER:</b> 
								<input type="hidden" name="hiddenhpatcode" class="pull-right text text-success" id ="hiddenhpatcode" />
								<span id="hpatcode_span" class="pull-right">N/A</span>
							</li>	
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp ENCOUTER TYPE:</b>
								<input type="hidden" name="hiddenenctype" class="pull-right text text-success" id ="enctype" />
								<span id="enctype_span" class="pull-right">N/A</span>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp DATE/TIME:</b>
								<input type="hidden" name="hiddenencdate" class="pull-right text text-success" id ="hiddenencdate" />
								<span id="encdate_span" class="pull-right">N/A</span>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-user-md"></i>&nbsp ATTENDING DOCTOR:</b>
								<input type="hidden" name="hiddendiaglicno" class="pull-right text text-success" id ="hiddenlicno" />
								<span id="licno_span" class="pull-right">N/A</span>
							</li>
							<li class="list-group-item">
								<!-- START : ICD-10 BUTTON -->
								<button id="btn_icd10" class="btn btn-secondary pull-right ml-3">...</button>
								<!-- END : ICD-10 BUTTON -->
								<b class="text text-success"><i class="fa fa-stethoscope"></i>&nbsp ICD-10 CODE:</b>
								<input type="hidden" name="hiddendiagcode" class="pull-right text text-success" id="hiddendiagcode" />
								<span id="diagcode_span" class="pull-right">N/A</span>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-stethoscope"></i>&nbsp FINAL DIAGNOSIS:</b>
								<input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="hiddendiagtext" name="hiddendiagtext" placeholder ="">
							</li>

						</ul>
						<div class="modal-footer bg-secondary">
							<button type="submit" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnSaveProcedure" name="btnSaveProcedure"><i class="fa fa-plus"></i></button>
							<button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>
</form>
<!-- update final diagnosis -->




<!-- deathcert -->

<div class="modal fade" id="modaldeath" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h3 class="text text-success"><i class="fa fa-user-circle"></i> Patient Information</h3>
				<div class="box-body box-profile">
					<img id="PatientPicInfo"class="img-fluid bg-success img-thumbnail rounded mx-auto d-block mb-1" width="200px"  src="" alt="User profile picture">
					<div class="h5 profile-username text-center text-success" id="patname"></div>
					<div class="h6 text-center text-success" id="hpercode"></div>
					<ul class="list-group">
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-address-book"></i>&nbsp CASE NUMBER:</b> 
							<a class="pull-right text text-success" id ="casenum">N/A</a>
						</li>	
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp ACCOUNT:</b>
							<a class="pull-right text text-success" id="accountno">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp AGE:</b>
							<a class="pull-right text text-success" id="patage">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-bed"></i>&nbsp ROOM:</b>
							<a class="pull-right text text-success" id="patwrb">N/A</a>
							<input type="hidden" name="patAge" id ="patAge">
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-stethoscope"></i>&nbsp DIAGNOSIS:</b>
							<a class="pull-right text text-success" id="patdiag">N/A</a>
						</li>

					</ul>

					<div class="card-footer"></div>
					<a href="<?php echo base_url();?>Admission/ClinicalCoverSheet/" class="btn btn-success btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i></a>
					<button class="btn btn-success  btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-file"></i></button>
				</div>


			</div>

		</div>
	</div>
</div>
<!-- deathcert -->

<!-- START : ICD10 MODAL -->
<div class="modal" id="modalICD10" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Library Search</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="reset_icd10_codes()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-9">
							<div class="mb-3">
								<label class="text-muted mr-5">Type the first few letters of the word you're looking for.</label>
								<button class="btn btn-success float-right">Filter</button>
							</div>
							<div>
								<input type="text" class="form-control" />
							</div>
						</div>
						<div class="col-md-3">
							<fieldset class="border">
								<legend class="w-auto">&nbsp;<label class="text-muted">Criteria</label>&nbsp;</legend>
								<div class="radio">
									<span class="mr-4"></span><label><input type="radio" name="criteria" checked>&nbsp;By Category</label>
								</div>
								<div class="radio">
									<span class="mr-4"></span><label><input type="radio" name="criteria">&nbsp;By Keyword</label>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-3" style="height: 500px; overflow: scroll;">
						<h5 align="center" class="text-muted">1st Index</h5>
						<table id="icd10_index1_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="white-space: nowrap;">
							<thead class="thead-dark">
								<tr>
									<th>Code</th>
									<th>Category</th>
								</tr>
							</thead>
							<tbody></tbody>
							<tfoot></tfoot>
						</table>
					</div>
					<div class="col-md-3" style="height: 500px; overflow: scroll;">
						<h5 align="center" class="text-muted">2nd Index</h5>
						<table id="icd10_index2_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="white-space: nowrap;">
							<thead class="thead-dark">
								<tr>
									<th>Code</th>
									<th>Category</th>
								</tr>
							</thead>
							<tbody></tbody>
							<tfoot></tfoot>
						</table>
					</div>
					<div class="col-md-3" style="height: 500px; overflow: scroll;">
						<h5 align="center" class="text-muted">3rd Index</h5>
						<table id="icd10_index3_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="white-space: nowrap;">
							<thead class="thead-dark">
								<tr>
									<th>Code</th>
									<th>Category</th>
								</tr>
							</thead>
							<tbody></tbody>
							<tfoot></tfoot>
						</table>
					</div>
					<div class="col-md-3" style="height: 500px; overflow: scroll;">
						<h5 align="center" class="text-muted">4th Index</h5>
						<table id="icd10_index4_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="white-space: nowrap;">
							<thead class="thead-dark">
								<tr>
									<th>Extended</th>
									<th></th>
									<th>Code</th>
									<th>Category</th>
									<th>Add Dagger</th>
								</tr>
							</thead>
							<tbody></tbody>
							<tfoot></tfoot>
						</table>
					</div>
				</div>
				<hr>
				<form id="icd10_form">
					<div class="row mb-3">
						<div class="col-md-2">
							<label>ICD-10 Code:<label>
							</div>
							<div class="col-md-7">
								<input type="text" name="icd10_codes" class="form-control mr-5" id="icd10_codes" readonly />
							</div>
							<div class="col-md-3">
								<input type="submit" class="btn btn-success btn-block" id="btn_ok" value="OK" size="5" />
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-md-2">
							<label>Description:<label>
							</div>
							<div class="col-md-10">
								<textarea name="icd10_desc" class="form-control" id="icd10_desc" readonly></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer bg-secondary">
					</div>
				</div>
			</div>
		</div>
		<!-- END : ICD10 MODAL -->
		<!-- START : EXT DIAG MODAL-->
		<form id="frmSearchExtDiag" method="post">
			<div class="modal" id="modalSearchExtDiag" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<h3 class="modal-title text-success"><i class="fa fa-th-list"></i>Extended Diagnosis Code</h3>
								</div>
								<div class="col-md-6">
									<select class="form-control form-control-md" name="AddselectExtDiagtype" id="AddselectExtDiagtype">
										<option value="" hidden selected disabled>Select Extended Diagnosis Type</option>
										<?php
										if (!empty($getEXTDC)) {
											foreach ($getEXTDC as $value) {
												?>
												<option value="<?php echo $value->extdiagdesc; ?>"><?php echo $value->extdiagdesc; ?></option>
												<?php
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<table id="tableSearchExtDiag" class="table table-lg table-striped table-borderless table-condensed table-hover">
										<thead class="thead-dark">
											<tr>
												<th>CODE</th>
												<th>DESCRIPTION</th>
											</tr>
										</thead>
										<tfoot class="thead-dark">
											<tr>
												<th></th>
												<th></th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- END : EXT DIAG MODAL-->

		<script  type="text/javascript">
			$(function() {
				$('input[name=inlineRadioOptions][type=radio][value=option1]').prop('checked', true).trigger('click');
			});
			
			$('input[name=inlineRadioOptions][type=radio]').click(function() {
				var postdata = $('input[name=inlineRadioOptions][type=radio]:checked').val();
				var table2 = $('#AdmissionTable').DataTable({
					"pageLength": 10,
					"lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
					"pagingType": "full_numbers",
					"processing": true,
					"serverSide": true,
					"destroy": true,
					"order": [[0, "desc"]],
					"ajax": {
						url: '<?php echo site_url("Patientrecord/codeDiagnosisdt"); ?>',
						type: 'POST',
						data: {
							data: postdata
						}
					},
					"columns": [
					{'data': 'enccodess', 'defaultContent': ''},
					{'data': 'hpatcode', 'defaultContent': ''},
					{'data': 'fullname', 'defaultContent': ''},
					{'data': 'enctype', 'defaultContent': ''},
					{'data': 'encdate', 'defaultContent': ''},
					{'data': 'doctorname', 'defaultContent': ''},
					{'data': 'diagcode', 'defaultContent': ''},
					{'data': 'diagtext', 'defaultContent': ''},
					{
						sortable: false,
						render: function (data, type, row, meta) {
							var buttonID = row.enccodess;
							return '<div style="text-align:center;">\n\
							<button id=' + buttonID + ' data-encdate="'+ row.encdate +'" class="btn btn-sm btn-warning edit tooltips" title="Edit"><i class="fa fa-edit"></i></button>&nbsp&nbsp\n\
							<button id=' + buttonID + ' class="btn btn-sm btn-danger delete tooltips" title="Delete" style="width:34px;height:30px"><i class="fa fa-trash"></i></button></div>';
						}, 'defaultContent': ''
					}
					],
					"columnDefs": [{
						targets: [0],
						visible: false,
						orderable: false
					}]

				});
			});


			$('#AdmissionTable').on("click", ".edit", function() {
				var enccode = $(this).prop('id');
				var encdate = $(this).attr('data-encdate');
				$('#modalupdatediag').modal('show');
				modalEditDiag(enccode, encdate);
			});
			$('#AdmissionTable').on("click", ".delete", function() {
				var enccode = $(this).prop('id');
				var encdate = $(this).attr('data-encdate');
				$('#modaldeath').modal('show');
				modalEditDiag(enccode, encdate);
			});

			function modalEditDiag(enccode, encdate) {
				$.ajax({
					type: "POST",
					url: "<?php echo base_url() .'Patientrecord/InPatientInformation'; ?>",
					data: {
						'enccode': enccode,
						'encdate': encdate
					},
					async:false,
					success: function(data)
					{ 

						var obj = $.parseJSON(data);
						console.log(obj);
						var enccodess = obj[0]['enccode'];
						var hpatcode = obj[0]['hpatcode'];
						var fullname = obj[0]['fullname'];
						var enctype = obj[0]['enctype'];
						var encdate = obj[0]['encdate'];
						var doctorname = obj[0]['doctorname'];
						var diagcode_ext = obj[0]['diagcode_ext'];
						var diagcode = obj[0]['diagcode'];
						var diagtext = obj[0]['diagtext'];

						$('#modalupdatediag').modal('show');
						$('#hpatcode_span').html(hpatcode);
						$("#fullname").html(fullname);
						$('#enctype_span').html(enctype);
						$('#encdate_span').html(encdate);
						$('#licno_span').html(doctorname);
						$('#diagcode_span').html(diagcode);
						$('#hiddenenccodess').val(enccodess);
						$('#hiddenhpatcode').val(hpatcode);
						$('#hiddenenctype').val(enctype);
						$('#hiddenencdate').val(encdate);
						$('#hiddenlicno').val(doctorname);
						$('#hiddendiagcode').val(diagcode);
						$('#hiddendiagtext').val(diagtext);
					},	
					error: function(response)
					{
						toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching inpatient data!");
					}
				});

			}

			$('#frmupdatediag').on('submit', function (e) {
				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: '<?php echo site_url("Patientrecord/editCodeDiag"); ?>',
					data: $("#frmupdatediag").serialize(),
					success: function (data) {
						
						if (data == 1) {
							toastr.success('Successfully Saved!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Success');
							$('#modalupdatediag').modal('hide');
							location.reload();
						} else {
							toastr.warning('Failed to save!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Warning');

						}
					}

				});
			});
			

			/* START : ICD-10 CODES */
			/* INITIALIZE TOOLTIP */
			$(function(){
				$("[data-toggle='tooltip']").tooltip();
			});

			/* OPEN ICD-10 MODAL */
			$("#btn_icd10").on("click", function(e){

				e.preventDefault();

				/* JAVASCRIPT GLOBAL VARIABLE */
				window.icd10_index1_tbl = "";
				window.icd10_index2_tbl = "";
				window.icd10_index3_tbl = "";
				window.icd10_index4_tbl = "";

				$("#modalICD10").modal({"backdrop":"static"});
				$("#modalICD10").modal("show");

				/* DESTROY ALL INDEX MODAL */
				$("#icd10_index1_tbl").DataTable().destroy();
				$("#icd10_index2_tbl").DataTable().destroy();
				$("#icd10_index3_tbl").DataTable().destroy();
				$("#icd10_index4_tbl").DataTable().destroy();

				/* INDEX 1 TABLE */
				window.icd10_index1_tbl = $('#icd10_index1_tbl').DataTable({
					"ajax" : "<?php echo site_url('Patientrecord/icd10_index1'); ?>",
					"columns" : [
					{ data : "diagcat" },
					{ data : "catdesc" }
					],
					"searching" : false,
					"lengthChange" : false,
					"paging" : false,
					"info" : false,
					"pageLength" : 100
				});

				$("#icd10_index1_tbl").on("click", "tr", function(){

					var data = window.icd10_index1_tbl.row(this).data();

					/* DESTROY ALL INDEX MODAL */
					$("#icd10_index1_tbl").DataTable().destroy();
					$("#icd10_index2_tbl").DataTable().destroy();
					$("#icd10_index3_tbl").DataTable().destroy();
					$("#icd10_index4_tbl").DataTable().destroy();

					/* INDEX 2 TABLE */
					window.icd10_index2_tbl = $('#icd10_index2_tbl').DataTable({
						"ajax" : "<?php echo site_url('Patientrecord/icd10_index2/"+data.diagcat+"'); ?>",
						"columns" : [
						{ data : "diagscat" },
						{ data : "scatdesc" }
						],
						"searching" : false,
						"lengthChange" : false,
						"paging" : false,
						"info" : false,
						"pageLength" : 100
					});
				});

				$("#icd10_index2_tbl").on("click", "tr", function(){

					var data = window.icd10_index2_tbl.row(this).data();

					/* DESTROY ALL INDEX MODAL */
					$("#icd10_index1_tbl").DataTable().destroy();
					$("#icd10_index2_tbl").DataTable().destroy();
					$("#icd10_index3_tbl").DataTable().destroy();
					$("#icd10_index4_tbl").DataTable().destroy();

					/* INDEX 3 TABLE */
					window.icd10_index3_tbl = $('#icd10_index3_tbl').DataTable({
						"ajax" : "<?php echo site_url('Patientrecord/icd10_index3/"+data.diagscat+"'); ?>",
						"columns" : [
						{ data : "diagsubcat" },
						{ data : "subcatdesc" }
						],
						"searching" : false,
						"lengthChange" : false,
						"paging" : false,
						"info" : false,
						"pageLength" : 100
					});

				});

				$("#icd10_index3_tbl").on("click", "tr", function(){

					var data = window.icd10_index3_tbl.row(this).data();

					/* DESTROY ALL INDEX MODAL */
					$("#icd10_index1_tbl").DataTable().destroy();
					$("#icd10_index2_tbl").DataTable().destroy();
					$("#icd10_index3_tbl").DataTable().destroy();
					$("#icd10_index4_tbl").DataTable().destroy();

					/* INDEX 4 TABLE */
					window.icd10_index4_tbl = $('#icd10_index4_tbl').DataTable({
						"ajax" : "<?php echo site_url('Patientrecord/icd10_index4/"+data.diagsubcat+"'); ?>",
						"columns" : [
						{ render : function(data, type, row)
							{ return '<button id="btn' + row.diagcode.replace(".", "") +'" class="btn btn-secondary pull-right ml-3 btn_icd10_ext" disabled>...</button>'; } 
						},
						{ render : function(data, type, row)
							{ return '<input type="checkbox" class="checkBoxICD10" value="'+row.diagcode+'" id="'+row.diagdesc+'" data-toggle="tooltip" title="ADD TO CART" />'; } 
						},
						{ data : "diagcode" },
						{ data : "diagdesc" },
						{ render : function(data, type, row)
							{ return '<input type="checkbox" value="†" id="†" onchange="get_icd10_code(this)" data-toggle="tooltip" title="ADD TO CART" />'; } 
						},
						],
						"searching" : true,
						"lengthChange" : false,
						"paging" : false,
						"info" : false,
						"pageLength" : 100
					});
				});
			});


			/* JAVASCRIPT GLOBAL ARRAY */
			window.icd10_codes = [];
			window.icd10_descs = [];

			function reset_icd10_codes(){

				location.reload();
			}

			$('#icd10_index4_tbl').on('change', '.checkBoxICD10', function(){

				window.diagcode = $(this).attr('value');
				window.diagdesc = $(this).attr('id');

				if($(this).is(':checked'))
				{
					/*END : GET EXTENDED DIAGNOSIS DESC*/
					$("#icd10_index4_tbl").find('button[id=btn'+diagcode.replace(".", "")+']').prop("disabled", false);

					/* ADD ICD-10 CODE */
					window.icd10_codes.push(window.diagcode);
					$("#icd10_codes").val(window.icd10_codes);

					/* ADD ICD-10 DESC */
					window.icd10_descs.push(window.diagdesc);
					$("#icd10_desc").val(window.icd10_descs);

					/* change event */
					$('#AddselectExtDiagtype').on('change', function(){
						
						/*START : GET EXTENDED DIAGNOSIS DESC*/
						var extdiagtype = $(this).val();

						if($.fn.DataTable.isDataTable('#tableSearchExtDiag'))
						{
							$('#tableSearchExtDiag').DataTable().destroy();
						}

						var table = $("#tableSearchExtDiag").DataTable({
							oLanguage: {
								sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'
							},
							pageLength: 10,
							aLengthMenu: [[10, 15, 20, 50, 75, -1], [10, 15, 20, 50, 75, "All"]],
							processing: true,
							serverSide: true,
							searching: true,
							responsive: true,
							info: true,
							orderable: true,
							paging: true,
							autoWidth: true,
							destroy: true,
							ajax: {
								"url": "<?php echo site_url('Patientrecord/getEXTDIAGdesc'); ?>",
								"type": "POST",
								"data": {'extdiagtype': extdiagtype}
							}
						});

						$('#tableSearchExtDiag').off('dblclick', 'tr');

						$('#tableSearchExtDiag').on('dblclick', 'tr', function(){

							/* extended data*/
							var data = table.row(this).data();

							/* REMOVE ICD-10 CODE */
							var icd_code_index = window.icd10_codes.indexOf(window.diagcode);
							window.icd10_codes.splice(icd_code_index, 1);

							/* REMOVE ICD-10 DESC */
							var icd_desc_index = window.icd10_descs.indexOf(window.diagdesc);
							window.icd10_descs.splice(icd_desc_index, 1);

							/*push new icd-10 code*/
							window.icd10_codes.push(window.diagcode + "," + data[0]);
							$("#icd10_codes").val(window.icd10_codes);

							/*push new icd-10 desc*/
							window.icd10_descs.push(window.diagdesc + "," + data[1]);
							$("#icd10_desc").val(window.icd10_descs);

							/*for deletion purpose*/
							window.diagcode = window.diagcode + "," + data[0];
							window.diagdesc = window.diagdesc + "," + data[1];

							$('#modalSearchExtDiag').modal('hide');
						});
					});
				}
				else
				{
					/* REMOVE ICD-10 CODE */
					var icd_code_index = window.icd10_codes.indexOf(window.diagcode);
					window.icd10_codes.splice(icd_code_index, 1);
					$("#icd10_codes").val(window.icd10_codes);

					/* REMOVE ICD-10 DESC */
					var icd_desc_index = window.icd10_descs.indexOf(window.diagdesc);
					window.icd10_descs.splice(icd_desc_index, 1);
					$("#icd10_desc").val(window.icd10_descs);

					$("#icd10_index4_tbl").find('button[id=btn'+diagcode.replace(".", "")+']').prop("disabled", true);
				}
			});
			

			$('#icd10_index4_tbl').on('click', '.btn_icd10_ext', function() {
				$('#modalSearchExtDiag').modal('show');
			});

			/*function get_icd10_code(checkbox){

				if(checkbox.checked == true)
				{
					window.icd10_codes.push(checkbox.value);
					$("#icd10_codes").val(window.icd10_codes);

					window.icd10_descs.push(checkbox.id);
					$("#icd10_desc").val(window.icd10_descs);
				}
				else
				{
					var icd_code_index = window.icd10_codes.indexOf(checkbox.value);
					window.icd10_codes.splice(icd_code_index, 1);
					$("#icd10_codes").val(window.icd10_codes);

					var icd_desc_index = window.icd10_descs.indexOf(checkbox.id);
					window.icd10_descs.splice(icd_desc_index, 1);
					$("#icd10_desc").val(window.icd10_descs);
				}
			}*/

			/* SUBMIT ICD-10 CODE */
			$("#icd10_form").on("submit", function(e){

				e.preventDefault();

				$("#hiddendiagcode").val(window.icd10_codes);
				$("#diagcode_span").html(window.icd10_codes);
				$("#modalICD10").modal("hide");

				/*$.ajax({
					type : "POST",
					url : "<?php //echo site_url('Patientrecord/process_icd10'); ?>",
					data : $("#icd10_form").serialize(),
					success : function(result){
						
						console.log(result);
					}
				});*/

			});
			/*  : END : ICD-10 CODES */

			/*$('#AddselectExtDiagtype').on('change', function () {
				getICPMdt($(this).val());
			});*/

			/*START : GET EXTENDED DIAGNOSIS DESC*/
			/*function getICPMdt(extdiagtype) {

				if($.fn.DataTable.isDataTable('#tableSearchExtDiag'))
				{
					$('#tableSearchExtDiag').DataTable().destroy();
				}

				var table = $("#tableSearchExtDiag").DataTable({
					oLanguage: {
						sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'
					},
					pageLength: 10,
					aLengthMenu: [[10, 15, 20, 50, 75, -1], [10, 15, 20, 50, 75, "All"]],
					processing: true,
					serverSide: true,
					searching: true,
					responsive: true,
					info: true,
					orderable: true,
					paging: true,
					autoWidth: true,
					destroy: true,
					ajax: {
						"url": "<?php //echo site_url('Patientrecord/getEXTDIAGdesc'); ?>",
						"type": "POST",
						"data": {'extdiagtype': extdiagtype}
					}
				});

				$('#tableSearchExtDiag').off('dblclick', 'tr');

				$('#tableSearchExtDiag').on('dblclick', 'tr', function(){

					var data = table.row(this).data();
					console.log(window.icd10_codes);
					console.log(data);
					$('#modalSearchExtDiag').modal('hide');
				});
			}*/

			/*END : GET EXTENDED DIAGNOSIS DESC*/
			

		</script>


