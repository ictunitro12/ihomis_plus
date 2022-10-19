<style>

table#PHICTable.dataTable tbody tr:hover {
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
						<button onclick="AddPHIC()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add PHIC" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add PHIC
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="PHICTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
				<thead>
					<tr class="">
						<th width="50px">PHIC Code</th>
						<th>Date</th>
						<th>Date as of</th>
						<th>Benefit Type Code</th>
						<th>Type of Hospital</th>
						<th>Case Type</th>
						<th>Classification of Practitioner</th>
						<th>Amount</th>
						<th>Sector Type</th>
						<th>Minimum RVU</th>
						<th>Maximum RVU</th>
						<th>Status</th>
						<th width="50px">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmPHIC"   id="frmPHIC">
		<div class="modal fade" id="ModalAddPHIC" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<div class="modal-dialog modal-dialog-centered " role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $subheader;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-3 col-form-label text-default mb-1">PHIC Code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="code" name="code" placeholder ="Code" readonly="" maxlength="10">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Date as of:</div>
							<div class="col-md-9">
								<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="dteasof" name="dteasof">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Benefit Type Code:</div>
							<div class="col-md-9">
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
							<div class="col-md-3 col-form-label text-default mb-1">Type of Hospital:</div>
							<div class="col-md-9">
								<select name ="hosptype" id ="hosptype" class="form-control">
									<option value="">Type of Hospital</option>
									<option value="P">Primary</option>
									<option value="S">Secondary</option>
									<option value="T">Tertiary</option>
									<option value="A">All</option>

								</select>
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Case Type:</div>
							<div class="col-md-9">
								<select name ="castype" id ="castype" class="form-control">
									<option value="">Case Type </option>
									<option value="ALL">All</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="ORDIN">Ordinary</option>
									<option value="INTEN">Intensive</option>
									<option value="CATAS">Catastropic</option>

								</select>
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Classification of Practitioner:</div>
							<div class="col-md-9">
								<select name ="classtype" id ="classtype" class="form-control">
									<option value="">Classification of Practitioner </option>
									<option value="GENPR">General Practitioner</option>
									<option value="SPECI">Specialist</option>
									<option value="SURGE">Surgeon</option>
									<option value="ANEST">Anesthesiologist</option>
									<option value="VASEC">Vasectomy</option>
									<option value="TUBLI">Tubal Ligation</option>

								</select>
							</div>				
							<div class="col-md-3 col-form-label text-default mb-1"> Amount:</div>
							<div class="col-md-9">
								<input type="number" class="form-control form-control-mb" autocomplete="off"   id="amt" name="amt" placeholder =" Amount">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Sector Type:</div>
							<div class="col-md-9">
								<select name ="sectype" id ="sectype" class="form-control">
									<option value="">Sector Type</option>
									<option value="P">Private sector including Overseas Filipino workers and their dependents</option>
									<option value="G">Government sector and indigent members and dependents</option>
									<option value="B">Both private and government</option>
									<option value="U">Unknown</option>
								</select>
							</div>
							<div class="col-md-3 col-form-label text-default mb-1"> Minimum RVU:</div>
							<div class="col-md-9">
								<input type="number" class="form-control form-control-mb" autocomplete="off"   id="minrvu" name="minrvu" placeholder =" Minimum RVU">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1"> Maximum RVU:</div>
							<div class="col-md-9">
								<input type="number" class="form-control form-control-mb" autocomplete="off"   id="maxrvu" name="maxrvu" placeholder =" Maximum RVU">
							</div>																	
							<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-9">
								<select name ="status" id ="status" class="form-control">
									<option value="">Status</option>
									<option value="A">Active</option>
									<option value="I">Inactive</option>
								</select>
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
	
	<form name="frmDeletePHIC" id="frmDeletePHIC">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">


		<div class="modal fade" id="DeletePHIC" tabindex="-1" role="dialog">
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
	<script src="<?php echo base_url()?>assets/scripts/ref_phic/ref_phic_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_phic/delete.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/library.js"></script>

	<script type="text/javascript">
		$(function()
		{
			PHICList();
			var hphcode = encodeURIComponent(encodeURIComponent(hphcode));
			var hptdteas = encodeURIComponent(encodeURIComponent(hptdteas));
			var bentycod = encodeURIComponent(encodeURIComponent(bentycod));

		});
		
		function PHICList()
		{
			var data = new Object();
			data.id = "PHICTable";
			data.link = "<?php echo site_url('Ref_PHIC/PHICList');?>";
			data.type = "POST";
			data.coldef=[
			{
				targets: [1],
				visible:false,
				orderable:false,
			},
			{
				targets: [1,2,3,4,5,6,7,8,9,10,11],
				orderable:false,
			},
			{
				targets : 3,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'ROBOR' : return 'Room and board'; break;
						case 'DRUME' : return 'Drugs and medicine'; break;
						case 'XRAYL' : return 'X-ray, laboratory, others'; break;
						case 'DOCFE' : return 'Professional fee'; break;
						case 'OTHOS' : return 'Other hospital'; break;
						case 'OTDOC' : return 'Other doctor'; break;
						case 'SURFP' : return 'Surgical family planning'; break;
						case 'ORFEE' : return 'Procedure/Operating Room'; break;
						case 'SURFE' : return 'Surgeons Fee'; break;
						case 'ANEFE' : return 'Anesthesiologists Fee'; break;
						default  : return ' ';
					}
				},
			},
			{
				targets : 4,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'P' : return 'Primary'; break;
						case 'S' : return 'Secondary'; break;
						case 'T' : return 'Tertiary'; break;
						case 'A' : return 'All'; break;
						default  : return ' ';
					}
				},
			},	
			{
				targets : 5,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'ALL' : return 'All'; break;
						case 'A' : return 'A'; break;
						case 'B' : return 'B'; break;
						case 'C' : return 'C'; break;
						case 'D' : return 'D'; break;
						case 'ORDIN' : return 'Ordinary'; break;
						case 'INTEN' : return 'Intensive'; break;
						case 'CATAS' : return 'Catastropic'; break;
						default  : return ' ';
					}
				},
			},
			{
				targets : 6,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'GENPR' : return 'General Practitioner'; break;
						case 'SPECI' : return 'Specialist'; break;
						case 'SURGE' : return 'Surgeon'; break;
						case 'ANEST' : return 'Anesthesiologist'; break;
						case 'VASEC' : return 'Vasectomy'; break;
						case 'TUBLI' : return 'Tubal Ligation'; break;
						default  : return ' ';
					}
				},
			},		
			{
				targets : 8,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'P' : return 'Private sector including Overseas Filipino workers and their dependents'; break;
						case 'G' : return 'Government sector and indigent members and dependents'; break;
						case 'B' : return 'Both private and government'; break;
						case 'U' : return 'Unknown'; break;
						default  : return ' ';
					}
				},
			},					
			{
				targets : 11,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},

			];
			loadTable(data);
		}



	</script>
	
