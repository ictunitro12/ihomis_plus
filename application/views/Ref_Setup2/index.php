<style>

table#Setup2Table.dataTable tbody tr:hover {
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
						<button onclick="AddSetup2()" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> Add Setup </i>
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="Setup2Table"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
				<thead>
					<tr class="thead-dark">
						<th>SET-UP CODE</th>
						<th>DATE AS OF</th>
						<th>CURRENCY</th>
						<th>PESO EQUIVALENT per RELATIVE VALUE UNIT</th>
						<th>ANESTHESIOLOGIST</th>
						<th>ROOM AND BOARD NOT EXCEEDING THIS DAY(S)</th>
						<th>ROOM AND BOARD NOT EXCEEDING THIS DAY(S) TO BE SHARED BY HIS DEPENDENTS</th>
						<th>CUT-OFF TIME FOR BILLING</th>
						<th>INCLUDE PROFESSIONAL FEE</th>
						<th>INCLUDE ADDTL PROFESSIONAL</th>
						<th>CIVILIAN POPULATION</th>
						<th>RETRO PAYMENTS</th>
						<th>RETRO AMOUNT</th>
						<th>SEPARATE PROF. FEE FROM HOSPITAL</th>
						<th>ITEMIZED ROOM CHARGES</th>
						<th>DISPLAY NAME OF DOCTOR INSTEAD OF SERVICES RENDERED</th>
						<th>CERTIFIED CORRECT BY</th>
						<th>BASIS OF ROOM COMPUTATION</th>
						<th>AGGREGATE BILL CHARGES FOR MANUAL</th>
						<th>HOSP. NO. EDITABLE?</th>
						<th>DISPLAY OLD</th>
						<th>BASIS OF RATE OF EXAMINATIONS</th>
						<th>MAX. NO. OF DELIVERIES FOR PHIC COMPUTATION</th>
						<th>MAX. PHIC CLAIM FOR NORMAL</th>
						<th>MAX. PHIC CLAIM FOR PROFESSIONAL FEE IF NSD</th>
						<th>GP MAX PF PER DAY (Class A,B and C)</th>
						<th>SPECIALIST'S MAX PF >(Class A,B and C)</th>
						<th>GP MAX PF PER DAY (Class D)</th>
						<th>SPECIALIST'S MAX PF</th>
						<th>PICTURE REPOSITORY</th>
						<th>SEQUENCE</th>
						<th>FTP URL</th>
						<th>FTP SHARED FOLDER</th>
						<th>FTP User ID</th>
						<th>FTP PASSWORD</th>
						<th>PHIC FORM 2 AUTHORIZED SIGNATORY</th>
						<th>PHIC FORM 2 OFFICIAL DESIGNATION</th>
						<th>STATUS</th>
						<th width="50px">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmAddSetup2"   id="frmAddSetup2">
		<div class="modal fade" id="ModalAddSetup2" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<div class="modal-dialog modal-dialog-centered  modal-xl" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">SET-UP CODE:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="code" id="code" autocomplete="off"/>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">HOSPITAL NUMBER EDITABLE?:</label>
							<div class="col-md-3">
								<select  name="hospnoedit" id="hospnoedit" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">DATE AS OF:</label>
							<div class="col-md-3">
								<input type="datetime-local" class="form-control form-control-mg"  name ="dateasof" id="dateasof" class="datepicker" autocomplete="off"/>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">DISPLAY OLD HOSPITAL NUMBER:</label>
							<div class="col-md-3">
								<select  name="dispoldhosp" id="dispoldhosp" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">CURRENCY:</label>
							<div class="col-md-3">
								<select  name="currency" id="currency" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="PESO">Peso</option> 
									<option value="YEN">Yen</option> 
									<option value="DOLLA">Dollar</option> 
									<option value="OTHE">Others</option> 
								</select>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">BASIS OF RATE OF EXAMINATIONS:</label>
							<div class="col-md-3">
								<select  name="basisrateexam" id="basisrateexam" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="ALL">One Rate for all Accomodations</option> 
									<option value="RMACC">Depends on Room Accom.</option> 
									<option value="CLASS">Depends on Classif. of Accom.</option> 
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">PESO EQUIVALENT per RELATIVE UNIT:</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="pesounit" id="pesounit" autocomplete="off"/>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">MAX NO. OF DELIVERIES FOR PHIC COMPUTATION:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="maxdelphicomp" id="maxdelphicomp" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">ANESTHESIOLOGIST PERCENT FEE:</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="anesthesia" id="anesthesia" autocomplete="off"/>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">  MAX. PHIC CLAIM FOR NORMAL SPONTANEOUS DELIVERY (NSD):</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="maxdelphiclaimnsd" id="maxdelphiclaimnsd" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">ROOM AND BOARD NOT EXCEEDING THIS DAY(S):</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="roomnotexceed" id="roomnotexceed" autocomplete="off"/>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">  MAX. PHIC CLAIM FOR PROFESSIONAL FEE IF NSD:</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="maxdelphiclaimprof" id="maxdelphiclaimprof" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">ROOM AND BOARD NOT EXCEEDING THIS DAY(S) TO BE SHARED BY HIS DEPENDENTS:</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="roomnotexceeddependents" id="roomnotexceeddependents" autocomplete="off"/>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">  GP MAX PF PER DAY (Class A,B and C):</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="gpmaxpf" id="gpmaxpf" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">CUT-OFF TIME FOR BILLING COMPUTATION:</label>
							<div class="col-md-3">
								<input type="datetime-local" class="form-control form-control-mg" name ="cutoffbillcomp" id="cutoffbillcomp" autocomplete="off"/>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">SPECIALIST MAX PF PER DAY (Class A,B and C):</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="specmaxpf" id="specmaxpf" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">INCLUDE PROFESSIONAL FEE IN BILLING COMPUTATION:</label>
							<div class="col-md-3">
								<select  name="incprofbill" id="incprofbill" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
									<option value="X">Not Applicable</option> 
								</select>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">GP MAX PF PER DAY (Class D):</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="gpclassd" id="gpclassd" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">INCLUDE ADDT'L PROFESSIONAL FEE IN BILLING COMPUTATION:</label>
							<div class="col-md-3">
								<select  name="incaddprofbill" id="incaddprofbill" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
									<option value="X">Not Applicable</option> 
								</select>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">SPECIALIST MAX PF PER DAY (Class D):</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="specclassd" id="specclassd" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">CIVILIAN POPULATION:</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="civilpop" id="civilpop" autocomplete="off"/>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">PICTURE REPOSITORY:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="picrep" id="picrep" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">RETRO PAYMENTS:</label>
							<div class="col-md-3">
								<select  name="retpay" id="retpay" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">SEQUENCE:</label>
							<div class="col-md-3">
								<select  name="sequence" id="sequence" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="S">Sequence</option> 
									<option value="P">Percentage</option> 
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">RETRO AMOUNT:</label>
							<div class="col-md-3">
								<input type="number" class="form-control form-control-mg" name ="retamt" id="retamt" autocomplete="off"/>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">FTP URL:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="ftpurl" id="ftpurl" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">SEPARATE PROF. FEE FROM HOSPITAL CHARGES:</label>
							<div class="col-md-3">
								<select  name="sepprof" id="sepprof" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">FTP SHARED FOLDER:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="ftpshared" id="ftpshared" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">ITEMIZED ROOM CHARGES:</label>
							<div class="col-md-3">
								<select  name="itemcharge" id="itemcharge" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">FTP USER ID:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="ftpuser" id="ftpuser" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">DISPLAY NAME OF DOCTOR INSTEAD OF SERVICE RENDERED:</label>
							<div class="col-md-3">
								<select  name="dispnamedoc" id="dispnamedoc" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">FTP PASSWORD:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="ftppass" id="ftppass" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">CERTIFIED CORRECT BY:</label>
							<div class="col-md-3">
								<select  name="certcorby" id="certcorby" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">PHIC FORM 2 AUTHORIZED SIGNATORY:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="phicsignatory" id="phicsignatory" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">BASIS OF ROOM COMPUTATION:</label>
							<div class="col-md-3">
								<select  name="basisroomcomp" id="basisroomcomp" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="CUTOF">By Cutoff</option> 
									<option value="BHOUR">By Hour</option> 
									<option value="BDATE">By Date</option> 
								</select>
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">PHIC FORM 2 OFFICIAL DESIGNATION:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mg" name ="phicdesignation" id="phicdesignation" autocomplete="off"/>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">AGGREGATE BILL CHARGES FOR MANUAL BILLING:</label>
							<div class="col-md-3">
								<select  name="aggbill" id="aggbill" class="form-control form-control-mb" value="">
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer bg-secondary">
						<button  class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; Save</button>
					</div>
					
				</div>
			</div>
		</div>
	</form>
	
	<form name="frmDeleteSetup2" id="frmDeleteSetup2">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		

		<div class="modal fade" id="DeleteSetup2" tabindex="-1" role="dialog">
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
		$(function()
		{
			Setup2List();
		});
		
		function Setup2List()
		{
			var data = new Object();
			data.id = "Setup2Table";
			data.link = "<?php echo site_url('Ref_Setup2/Setup2List');?>";
			data.type = "POST";
			data.coldef=[
			{
				targets : [8,9,11,13,14,15,16,18,19,20],
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'Y' : return 'Yes'; break;
						case 'N' : return 'No'; break;
						default  : return '';
					}
				},
			},
			{
				targets : [17],
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'CUTOF' : return 'By Cutoff'; break;
						case 'BDATE' : return 'By Dates'; break;
						case 'BHOUR' : return 'By Hour'; break;
						default  : return '';
					}
				},
			},
			{
				targets : [21],
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'ALL' : return 'One Rate for all Accomodations'; break;
						case 'RMACC' : return 'Depends on Room Accom.'; break;
						case 'CLASS' : return 'Depends on Classif. of Accom.'; break;
						default  : return '';
					}
				},
			},
			{
				targets : [30],
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'S' : return 'Sequence'; break;
						case 'P' : return 'Percentage'; break;
						default  : return '';
					}
				},
			},
			{
				targets : [37],
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
						default  : return '';
					}
				},
			},

			];
			loadTable(data);
		}
		
		

	</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_setup2/validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_setup2/delete.js"></script>
