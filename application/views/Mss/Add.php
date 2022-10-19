<form id="frmAddFamily">
	<div class="modal" id="AddFamily" name="AddFamily"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content card-accent-success">
				<input type="hidden" name="AddIden" id="AddIden">
						<input type="hidden" name="addenccode" id="addenccode">
						<input type="hidden" name="addhpercode" id="addhpercode">
						<input type="hidden" name="famseqid" id="famseqid">

				
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i> Family Composition</h2>
				</div>
				<div class="modal-body border-success">
					<div class="form-row">
						<label class="col-md-3 col-form-label text-default mb-1">First Name:</label>
						<div class="col-md-9">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="fam_fname" name="fam_fname"  placeholder = "First Name">
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Last Name:</label>
						<div class="col-md-9">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="fam_lname" name="fam_lname"  placeholder = "Last Name">
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Middle Name:</label>
						<div class="col-md-9">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="fam_middle" name="fam_middle"  placeholder = "Middle Name">
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Age:</label>
						<div class="col-md-9">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="fam_age" name="fam_age"  placeholder = "Age">
						</div>

						<label class="col-md-5 col-form-label text-default mb-1">Civil Status:</label>
						<div class="col-md-7">
							<select  name="fam_cs" id="fam_cs" class="form-control form-control-mb" >
								<option value="">Select</option> 
								<option value="S">Single</option> 
								<option value="M">Married</option> 
								<option value="D">Divorced</option> 
								<option value="X">Separated</option> 
								<option value="W">Widow/Widower</option> 
								<option value="N">N/A</option> 
							</select>
						</div>

						<label class="col-md-5 col-form-label text-default mb-1">Relationship to the Patient:</label>
						<div class="col-md-7">
							<select  name="fam_relToPat" id="fam_relToPat" class="form-control form-control-mb" >
								<option value="">Select</option> 
								<option value="MOTHE">Mother</option> 
								<option value="FATHE">Father</option> 
								<option value="SISTE">Sister</option> 
								<option value="BROTH">Brother</option> 
								<option value="AUNT">Aunt</option> 
								<option value="UNCLE">Uncle</option> 
								<option value="NEPHE">Nephew</option> 
								<option value="NIECE">Niece</option>
								<option value="COUSI">Cousin</option> 
								<option value="SPOUS">Spouse</option> 
								<option value="FHEAD">Head of Family</option> 
								<option value="N">N/A</option> 
							</select>
						</div>

						<label class="col-md-5 col-form-label text-default mb-1">Educational Attainment :</label>
						<div class="col-md-7">
							<select  name="fam_educAttain" id="fam_educAttain" class="form-control form-control-mb" >
								<option value="">Select</option> 
								<option value="N">None</option> 
								<option value="E">Elementary Graduate</option> 
								<option value="H">Highschool Graduate</option> 
								<option value="V">Vocational</option> 
								<option value="C">College Graduate</option> 
								<option value="L">Elementary Level</option> 
								<option value="I">Highschool Level</option> 
								<option value="O">College Level</option>
							</select>
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Occupation:</label>
						<div class="col-md-9">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="fam_occupation" name="fam_occupation"  placeholder = "Occupation">
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Monthly Income:</label>
						<div class="col-md-9">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="fam_income" name="fam_income"  placeholder = "Monthly Income">
						</div>
						
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit"  class="btn btn-success btn-md btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> SAVE</button>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteFamily" id="frmDeleteFamily">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	<input type="hidden" name="deleteseqid" id="deleteseqid">
	

	<div class="modal fade" id="DeleteMSSFamily" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white" ><i class="fa fa-user-o"></i>&nbsp <span id="mssenccode"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer bg-secondary">
					<button  type ="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
				</div>
			</div>
		</div>
	</div>
</form>

<form name ="frmAssessment_form" id="frmAssessment_form" method="post">
	<div class="modal" id="ModalAssessmentForm" role="form">
		<div class="modal-dialog modal-vertical dialog modal-xl" role="form">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i> MSWD ASSESSMENT FORM</h2>
				</div>
				<div class="modal-body border-success">
					<embed src="<?php echo site_url('MSS/AssessmentForm');?>" frameborder="2" width="100%" height="800px">
					</div>
					<div class="modal-footer bg-secondary"></div>
				</div>
			</div>
		</div>
	</form>


	<div class="modal fade" id="ModalPatientAssessment"  role="form">
		<input type="hidden" name="assessenccode" id="assessenccode">
		<input type="hidden" name="assesshpercode" id="assesshpercode">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="text text-success"><i class="fa fa-user-circle"></i> MSWD No. 3 Form Summary</h3>
					<div class="box-body box-profile">
						<ul class="list-group">
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp SOURCE OF REFERRAL NAME:</b> 
								<a class="pull-right text text-success" id ="sourcerefname">MONICO OCAMPO</a>
							</li>	
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp ADDRESS:</b>
								<a class="pull-right text text-success" id="address">BATANGAS</a>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp TEL NO:</b>
								<a class="pull-right text text-success" id="telno">1941</a>
							</li>

						</ul>	
						<div class="card-footer">
							<div class="col-md-12">
								<div class="btn-group pull-left" role="group" aria-label="">

									<a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Assessment Tool"  class="btn btn-success ModalEditAssessments" id="ModalEditAssessments"><i class="fa fa-edit"></i>&nbsp Edit</a>

									<a href="javascript:void(0);" class="btn btn-danger ModalDeleteAssessment"><i class="fa fa-trash"></i>&nbsp Delete</a>

									<a href="javascript:void(0);"  data-toggle="tooltip" title="Assessment Form" class="btn btn-success btn-md  btn-ladda ModalPrintAssessment" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>&nbsp Print</a>

								</div>	


							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<form name="frmDeleteAssessment" id="frmDeleteAssessment">
		<input type="hidden" name="formIdentification" id="formIdentification" value="delete">
		<input type="hidden" name="toolenccode" id="toolenccode">
		<input type="hidden" name="toolhpercode" id="toolhpercode">


		<div class="modal fade" id="DeleteAssessment" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>
					<div class="modal-footer bg-secondary">
						<button  type ="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
					</div>
				</div>
			</div>
		</div>
	</form>


	<script type="text/javascript">




		

		$("#ModalEditAssessments").click(function() {
			var enccode = encodeURIComponent(encodeURIComponent($('#enccode').val()));
			var	hpercode = encodeURIComponent(encodeURIComponent($('#hpercode').val()));

			window.location.href = baseURL + "MSS/MssAssementForm/"+hpercode +"/"+ enccode;
		});

		

$("#ModalPatientAssessment").on("click",".ModalPrintAssessment",function(){
	window.open(href = baseURL + "MSS/AssessmentForm");
	$('#ModalPatientAssessment').modal('hide');

});

$("#ModalPatientAssessment").on("click",".ModalDeleteAssessment",function(){

	var enccode=$('#enccode').val();
	var	hpercode= $('#hpercode').val();
	$('#DeleteAssessment').modal('show');
	$("#formIdentification").val("delete");
	$("#toolenccode").val(enccode);
	$("#toolhpercode").val(hpercode);

});




</script>

<script src="<?php echo base_url()?>assets/scripts/mss/mss.js"></script>
<script src="<?php echo base_url()?>assets/scripts/mss/mss_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/mss/delete.js"></script>





