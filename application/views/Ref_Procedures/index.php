<style>

	table#ProcedureTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style> 
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp<?php echo $header;?>
				</div>
			</div>

			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddProcedures()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Procedure" data-toggle="tooltip"><i class="fa fa-plus"></i> Add Procedure
					</button>
				</div>
			</div>	
		</div>	
	</div>
	<div class="card-body  table-responsive">
		<table id="ProcedureTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th class="all">Code</th>
					<th  class="all">Description</th>
					<th class="never">RVU</th>
					<th class="never">Test Result</th>
					<th  class="all">PHIC Benefit Type</th>
					<th class="never">chargecode</th>
					<th  class="all">Type of Charge</th>
					<th  class="all">Cost Center</th>
					<th  class="all">Identifier</th>
					<th  class="all">Status</th>
					<th>Section/ Laboratory Group</th>
					<th>Section-Detailed</th>
					<th class="never">OD/OS/OR</th>
					<th>Region</th>
					<th>Exercise Type</th>
					<th class="never">Specialized Exercise For Specific Condition</th>
					<th>Type of Operation Code</th>
					<th>Type of Procedure</th>
					<th>Result Template</th>
					<th>Notes</th>
					<th class="never">prmapto</th>
					<th class="never">restemplate</th>
					<th  class="all"width="10%">Actions</th>
				</tr>
			</thead>	
		</table>
	</div>
	<div class="card-footer">

	</div>
</div>
<form name="frmProcedures"   id="frmProcedures">
	<div class="modal fade" id="ModalAddProcedures"  role="form">
		<input type="hidden" name="formIden" id="formIden">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white" ><i class="fa fa-plus"></i>&nbsp Procedure Master Library</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<div class="form-row">	

							<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="code" name="code" placeholder ="Code" maxlength="10">
							</div>	

							<div class="col-md-3 col-form-label text-default mb-1">Section-Detailed:</div>
							<div class="col-md-3">
								<select name ="secdetail" id ="secdetail" class="form-control">
									<option value="">Section-Detailed</option>
									<option value="01">Urinalysis</option>
									<option value="02">Fecalysis</option>
									<option value="03">Others</option>
								</select>
							</div>	

							<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="name" name="name" placeholder ="Description" maxlength="255">
							</div>

							<div class="col-md-3 col-form-label text-default mb-1">OD/OS / OR:</div>
							<div class="col-md-3">
								<select name ="odosor" id ="odosor" class="form-control">
									<option value="">OD/OS / OR</option>
									<option value="01">OD/OS</option>
									<option value="02">OR</option>
								</select>
							</div>	


							<div class="col-md-3 col-form-label text-default mb-1">RVU:</div>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="rvu" name="rvu" placeholder ="RVU">
							</div>	


							<div class="col-md-3 col-form-label text-default mb-1">Region:</div>
							<div class="col-md-3">
								<select name ="region" id ="region" class="form-control">
									<option value="">Region</option>
									<option value="01">Chest Region</option>
									<option value="02">Upper Extremities</option>
									<option value="03">Lower Extremities</option>
									<option value="04">Abdomen</option>
								</select>
							</div>		

							<div class="col-md-3 col-form-label text-default mb-1">Test Results:</div>
							<div class="col-md-3">
								<select name ="testresult" id ="testresult" class="form-control">
									<option value="">Test Results</option>
									<option value="001">Urine</option>
									<option value="002">Blood Test Result</option>
									<option value="003">Clinical Microbiological Result</option>
									<option value="004">Gynecology Cytology Result</option>
									<option value="005">Serology Result</option>
									<option value="006">Immunology Result</option>
									<option value="007">Fecalysis Result</option>
									<option value="008">Chemistry Result Form</option>
									<option value="009">Blood Exam Result</option>
									<option value="010">Bone Marrow Study Result</option>
									<option value="011">Clinical Microbiology Smear Result</option>
									<option value="012">Blood Transfusion Result</option>
									<option value="013">Surgical Pathological Result</option>
									<option value="014">Miscellaneous Result Form</option>
								</select>
							</div>

							<div class="col-md-3 col-form-label text-default mb-1">Exercise Type:</div>
							<div class="col-md-3">
								<select name ="extype" id ="extype" class="form-control">
									<option value="">Exercise Type</option>
									<option value="01">Exercises Used for General Body Conditioning</option>
									<option value="02">Specialized Exercises Used for Specific Conditions</option>
								</select>
							</div>	

							<div class="col-md-3 col-form-label text-default mb-1">Benefit Type Code:</div>
							<div class="col-md-3">
								<select name ="bentype" id ="bentype" class="form-control">
									<option value="">Benefit Type Code</option>
									<option value="ROBOR">Room and board</option>
									<option value="DRUME">Drugs and medicine</option>
									<option value="XRAYL">X-ray, laboratory, others</option>
									<option value="DOCFE">Professional fee</option>
									<option value="OTHOS">Other hospital</option>
									<option value="OTDOC">Other doctor</option>
									<option value="SURFP">Surgical family planning</option>
									<option value="ORFEE">Procedure/Operating Room</option>
									<option value="SURFE">Surgeon's Fee</option>
									<option value="ANEFE">Anesthesiologist's Fee</option>
								</select>
							</div>	


							<div class="col-md-3 col-form-label text-default mb-1">Specialized Exercise For Specific Condition:</div>
							<div class="col-md-3">
								<select name ="specialextype" id ="specialextype" class="form-control">
									<option value="">Specialized Exercise For Specific Condition</option>
									<option value="01">Low back pain</option>
									<option value="02">Scoliosis</option>
									<option value="03">Neurologic Conditions</option>
									<option value="04">Obstetrics</option>
									<option value="05">Pulmo-PT</option>
									<option value="06">PVD</option>
									<option value="07">Neck pain/Vertebrobasilar insufficiency/Vertigo</option>
									<option value="08">Bells' palsy</option>
									<option value="03">Amputation</option>
									<option value="10">Myofascial pain syndrome</option>
								</select>
							</div>	

							<div class="col-md-3 col-form-label text-default mb-1">Type of Charge:</div>
							<div class="col-md-3">
								<select name ="selCharge" id ="selCharge" class="form-control">
								</select>
							</div>	

							<div class="col-md-3 col-form-label text-default mb-1">Type of Operation Code:</div>
							<div class="col-md-3">
								<select name ="operatype" id ="operatype" class="form-control">
									<option value="">Type of Operation Code</option>
									<option value="MAJOR">Major</option>
									<option value="MINOR">Minor</option>
								</select>
							</div>

							<div class="col-md-3 col-form-label text-default mb-1">Cost Center:</div>
							<div class="col-md-3">
								<select name ="cost" id ="cost" class="form-control">
									<option value="">Cost Center</option>
									<option value="LABOR">Laboratory</option>
									<option value="RADIO">Radiology</option>
									<option value="PROCE">Procedure</option>
									<option value="RADTH">Radio Therapy</option>
									<option value="NUCME">Nuclear Medicine</option>
									<option value="DENTA">Dental</option>
									<option value="DERMA">Dermatology</option>
									<option value="OPTHA">Opthalmology</option>
									<option value="PHARM">Pharmacy</option>
									<option value="NEURO">Neurology</option>
									<option value="OPD">Out-Patient Department</option>
									<option value="ER">Emergency Room</option>
									<option value="OR">Operating Room</option>
									<option value="DR">Delivery Room</option>
									<option value="WARD">Ward</option>
									<option value="PERIN">Perinatal</option>
									<option value="PT">Physical Therapy</option>
								</select>
							</div>	

							<div class="col-md-3 col-form-label text-default mb-1">Type of Procedure:</div>
							<div class="col-md-3">
								<select name ="proctype" id ="proctype" class="form-control">
									<option value="">Type of Procedure</option>
									<option value="SURGI">Surgical</option>
									<option value="NSURG">Non-Surgical</option>
								</select>
							</div>	

							<div class="col-md-3 col-form-label text-default mb-1">Identifier:</div>
							<div class="col-md-3">
								<select name ="ident" id ="ident" class="form-control">
									<option value="">Identifier</option>
									<option value="01">Radiology</option>
									<option value="02">Radiotherapy</option>
									<option value="03">Nuclear Medicine</option>
									<option value="04">Neurology</option>
									<option value="05">Dental</option>
									<option value="06">Laboratory</option>
									<option value="07">Ultrasound</option>
									<option value="08">Dermatology</option>
									<option value="09">Opthalmology</option>
									<option value="10">Procedures</option>
									<option value="11">Therapeutic/Diagnostic Modalities</option>
									<option value="12">Anatomic Pathology</option>
									<option value="13">Physical Therapy</option>
									<option value="14">HIV</option>
									<option value="15">Special Examinations</option>
									<option value="16">CT Scan</option>
									<option value="17">ECG</option>
									<option value="18">Medical Oncology</option>
									<option value="19">ENT</option>
									<option value="20">MRI</option>
									<option value="21">Mammography</option>
									<option value="22">Angiography</option>
									<option value="23">Linear Accelerator</option>
									<option value="24">Dental X-Ray</option>
								</select>
							</div>		

							<div class="col-md-3 col-form-label text-default mb-1">Result Template:</div>
							<div class="col-md-3">
								<select name ="selTemplate" id ="selTemplate" class="form-control">
								</select>
							</div>		

							<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-3">
								<select name ="status" id ="status" class="form-control">
									<option value="">Status</option>
									<option value="A">Active</option>
									<option value="I">Inactive</option>
								</select>
							</div>

							<div class="col-md-3 col-form-label text-default mb-1">Notes:</div>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="note" name="note" placeholder ="Notes" maxlength="255">
							</div>			

							<div class="col-md-3 col-form-label text-default mb-1">Section Laboratory Group:</div>
							<div class="col-md-3">
								<select name ="seclabgrp" id ="seclabgrp" class="form-control">
									<option value="">Section Laboratory Group</option>
									<option value="01">Hematology</option>
									<option value="02">Blood Bank</option>
									<option value="03">Bacteriology</option>
									<option value="04">Clinical Microscopy</option>
									<option value="05">Chemistry</option>
									<option value="06">Immunology/Serology/HIV</option>
									<option value="07">Immunohematology</option>
									<option value="08">Cytology</option>
									<option value="09">Histopathology</option>
									<option value="10">Blood Chemistry</option>
									<option value="11">Urinalysis</option>
									<option value="12">Fecalysis</option>
									<option value="13">Microbiology (Smears/Culture & Sensitivity)</option>
									<option value="14">Surgical Pathology</option>
									<option value="15">Autopsy</option>
									<option value="16">Number of Blood units Transfused</option>
									<option value="17">Clinical Chemistry</option>
								</select>
							</div>	

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</form>

<form name="frmDeleteProcedures" id="frmDeleteProcedures">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">


	<div class="modal fade" id="DeleteProcedures" tabindex="-1" role="dialog">
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
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>	



<script type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/scripts/ref_procedures/ref_procedures_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/ref_procedures/delete.js"></script>
<script src="<?php echo base_url()?>assets/scripts/library.js"></script>

<script type="text/javascript">
	$(document).ready(function()
	{
		ProceduresList();
	});
	function ProceduresList()
	{
		var data = new Object();
		data.id = "ProcedureTable";
		data.link = "<?php echo site_url('Ref_Procedures/ProceduresList');?>";
		data.type = "POST";
		data.coldef =[
		{
			targets: [5,10,11,12,13,14,15,16,17,18,19,20,21],
			visible:false,
			orderable:false,
		},
		{	
			targets: [3,4,7,8,9],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data) 
				{
					case '001' : return 'Urine'; break;
					case '002' : return 'Blood Test Result'; break;
					case '003' : return 'Clinical Microbiological Result'; break;
					case '004' : return 'Gynecology Cytology Result'; break;
					case '005' : return 'Serology Result'; break;
					case '006' : return 'Immunology Result'; break;
					case '007' : return 'Fecalysis Result'; break;
					case '008' : return 'Chemistry Result'; break;
					case '009' : return 'Blood Exam Result'; break;
					case '010' : return 'Bone Marrow Study Result'; break;
					case '011' : return 'Clinical Microbiology Smear Result'; break;
					case '012' : return 'Blood Transfusion Result'; break;
					case '013' : return 'Surgical Pathological Result'; break;
					case '014' : return 'Miscellaneous Result Form'; break;

					case 'ROBOR' : return 'Room & Board'; break;
					case 'DRUME' : return 'DRUGS & Medicine'; break;
					case 'XRAYL' : return 'Xray/Laboratories'; break;
					case 'DOCFEE' : return 'Doctor Fee'; break;
					case 'OTHOS' : return 'Other Hospital'; break;
					case 'OTHDOC' : return 'Other Doctor'; break;
					case 'SURFP' : return 'Surgical Family Planning'; break;
					case 'ORFEE' : return 'Procedure/Operating Room'; break;
					case 'SURFE' : return 'Surgeons Fee'; break;
					case 'ANEFE' : return 'Anesthesiologists Fee'; break;

					case 'LABOR' : return 'Laboratory'; break;
					case 'RADIO' : return 'Radiology'; break;
					case 'PROCE' : return 'Procedure'; break;
					case 'RADTH' : return 'Radio Therapy'; break;
					case 'NUCME' : return 'Nuclear Medicine'; break;
					case 'DENTA' : return 'Dental'; break;
					case 'DERMA' : return 'Dermatology'; break;
					case 'OPTHA' : return 'Opthalmology'; break;
					case 'PHARM' : return 'Pharmacy'; break;
					case 'NEURO' : return 'Neurology'; break;
					case 'OPD' : return 'Out-Patient Department'; break;
					case 'ER' : return 'Emergency Room'; break;
					case 'OR' : return 'Operating Room'; break;
					case 'DR' : return 'Delivery Room'; break;
					case 'WARD' : return 'Ward'; break;
					case 'PERIN' : return 'Perinatal'; break;
					case 'PT' : return 'Physical Therapy'; break;

					case '01' : return 'Radiology'; break;
					case '02' : return 'Radiotherapy'; break;
					case '03' : return 'Nuclear Medicine'; break;
					case '04' : return 'Neurology'; break;
					case '05' : return 'Dental'; break;
					case '06' : return 'Laboratory'; break;
					case '07' : return 'Ultrasound'; break;
					case '08' : return 'Dermatology'; break;
					case '09' : return 'Opthalmology'; break;
					case '10' : return 'Procedures'; break;
					case '11' : return 'Therapeutic/Diagnostic Modalities'; break;
					case '12' : return 'Anatomic Pathology'; break;
					case '13' : return 'Physical Therapy'; break;
					case '14' : return 'HIV'; break;
					case '15' : return 'Special Examinations'; break;
					case '16' : return 'CT Scan'; break;
					case '17' : return 'ECG'; break;
					case '18' : return 'Medical Oncology'; break;
					case '19' : return 'ENT'; break;
					case '20' : return 'MRI'; break;


					case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
					case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;

					default  : return ' ';
				}

			},
		},
		{
			targets: [10],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data) 
				{
					case '01' : return 'Hematology'; break;
					case '02' : return 'Blood Bank'; break;
					case '03' : return 'Bacteriology'; break;
					case '04' : return 'Clinical Microscopy'; break;
					case '05' : return 'Chemistry'; break;
					case '06' : return 'Immunology/Serology'; break;
					case '07' : return 'Immunohematology'; break;
					case '08' : return 'Cytology'; break;
					case '09' : return 'Histopathology'; break;
					case '10' : return 'Blood Chemistry'; break;
					default  : return ' ';
				}

			},
		},
		{
			targets: [11],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data) 
				{
					case '01' : return 'Urinalysis'; break;
					case '02' : return 'Fecalysis'; break;
					case '03' : return 'Others'; break;
					default  : return ' ';
				}

			},
		},
		{
			targets: [12],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data) 
				{
					case '01' : return 'OD/OS'; break;
					case '02' : return 'OR'; break;
					default  : return ' ';
				}

			},
		},
		{
			targets: [13],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data) 
				{
					case '01' : return 'Chest Region'; break;
					case '02' : return 'Upper Extremities'; break;
					case '03' : return 'Lower Extremities'; break;
					case '04' : return 'Abdomen'; break;
					default  : return ' ';
				}

			},
		},
		{
			targets: [14],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data) 
				{
					case '01' : return 'Exercises Used for General Body Conditioning'; break;
					case '02' : return 'Specialized Exercises Used for Specific Conditions'; break;
					default  : return ' ';
				}

			},
		},
		{
			targets: [15],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data) 
				{
					case '01' : return 'Low back pain'; break;
					case '02' : return 'Scoliosis'; break;
					case '03' : return 'Neurologic Conditions'; break;
					case '04' : return 'Obstetrics'; break;
					case '05' : return 'Pulmo-PT'; break;
					case '06' : return 'PVD'; break;
					case '07' : return 'Neck pain/Vertebrobasilar insufficiency/Vertigo'; break;
					case '08' : return 'Bells palsy'; break;
					case '09' : return 'Amputation'; break;
					case '10' : return 'Myofascial pain syndrome'; break;
					default  : return ' ';
				}

			},
		},
		{
			targets: [16],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data) 
				{
					case 'MAJOR' : return 'Major'; break;
					case 'MINOR' : return 'Minor'; break;
					default  : return ' ';
				}

			},
		},
		{
			targets: [17],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data) 
				{
					case 'SURGI' : return 'Surgical'; break;
					case 'NSURG' : return 'Non-Surgical'; break;
					default  : return ' ';
				}

			},
		},
		];
		loadTable(data);
	}





</script>

