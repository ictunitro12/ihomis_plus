<style>

table#ChargeTable.dataTable tbody tr:hover {
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
						<button onclick="AddCharge()" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> </i> Add Charge
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="ChargeTable"  class="table table-sm table-striped  table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr >
						
						<th rowspan="2">Code</th>
						<th rowspan="2">Description</th>
						<th rowspan="2">Benefit Type Code</th>
						<th rowspan="2">Charge Table</th>
						<th rowspan="2">Cost Center</th>
						<th colspan="2">Engas</th>
						<th rowspan="2">Charge Sequence </th>
						<th rowspan="2">%</th>
						<th rowspan="2">Status</th>
						<th rowspan="2" class="never">countcode</th>
						<th rowspan="2">Actions</th>
					
					</tr>
					<tr >
						<th>Account</th>
						<th >Description</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmCharge"   id="frmCharge" role="form">
		<div class="modal fade" id="ModalAddCharge" >
			<input type="hidden" name="formIden" id="formIden">
			<div class="modal-dialog modal-dialog-centered " role="form">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $subheader;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"  id="code" name="code" placeholder ="Code" readonly="" maxlength="5" required>
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Description:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="name" name="name" placeholder ="Description" maxlength="100" required>
							</div>
							<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Benefit Type:</div>
							<div class="col-md-9">
								<select name ="benefit" id ="benefit" class="form-control" required>
									<option value="">Benefit Type</option>
									<option value="ROBOR">Room and board</option>
									<option value="DRUME">Drugs and medicines</option>
									<option value="XRAYL">Xray, laboratory, others</option>
									<option value="DOCFE">Doctor's fee</option>
									<option value="OTHOS">Other hospital</option>
									<option value="OTDOC">Other doctor</option>
									<option value="SURFP">Surgical family planning</option>
									<option value="ORFEE">Procedure/Operating Room</option>
									<option value="SURFE">Surgeon's Fee</option>
									<option value="ANEFE">Anesthesiologist's Fee</option>
								</select>
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Charge Table:</div>
							<div class="col-md-9">
								<select name ="table" id ="table" class="form-control">
									<option value="">Charge Table</option>
									<option value="DRUGS">Drugs and Medicines Reference</option>
									<option value="EXAMI">Examination</option>
									<option value="NONDR">Non-Drugs Reference</option>
									<option value="MISCE">Miscellaneous</option>
								</select>
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Cost Center:</div>
							<div class="col-md-9">
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
									<option value="OPD">Out-Patient Dept.</option>
									<option value="ER">Emergency Room</option>
									<option value="OR">Operating Room</option>
									<option value="DR">Delivery Room</option>
									<option value="WARD">Ward</option>
									<option value="PERIN">Perinatal</option>
									<option value="CSSR">Central Supply Room</option>
								</select>
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Account Code:</div>
							<div class="col-md-9">
									<div class="input-group mb-3">
									<input type="text" class="form-control" readonly placeholder="Account code" name ="chrtDesc" id="chrtDesc" >
									<input type="hidden" class="form-control" name="acctCode"  id="acctCode"  placeholder="Account code" >
									<button type="button" id="searchAccount" class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
									</div>
							</div>
					
							<div class="col-md-3 col-form-label text-default mb-1">Charge Sequence:</div>
							<div class="col-md-9">
								<input type="number" class="form-control form-control-mb" autocomplete="off"   id="seq" name="seq" placeholder ="Charge Sequence">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">%:</div>
							<div class="col-md-9">
								<input type="number" class="form-control form-control-mb" autocomplete="off"   id="percent" name="percent" placeholder ="Percent">
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
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>&nbsp;
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</form>
	
	<form name="frmDeleteCharge" id="frmDeleteCharge" role="form">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		

		<div class="modal fade" id="DeleteCharge"  role="form">
			<div class="modal-dialog modal-dialog-centered modal-md" role="form">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<span id="desc" name="desc" class="text-white"></span>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Do you want to proceed?</h5>
					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>&nbsp;
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>	

		<div class="modal fade" id="modalChartAccount"  role="form">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
				<div class="modal-content">
					<div class="modal-header">
					<div class="modal-title">
						<h5 class="modal-title text-success" ><i class="fa fa-plus"></i> Chart of account	</h5>
						</div>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div id="container"></div>
					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	<script type="text/javascript">
		$(function()
		{
			ChargeList();
			var chrgcode = encodeURIComponent(encodeURIComponent(chrgcode));
			var chrgdesc = encodeURIComponent(encodeURIComponent(chrgdesc));

		});

		function en_major()
		{
			var chartTable = $("#en_major").DataTable({
				"ajax": baseURL+"ENGAS/en_major",
				"aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
				"destroy":true,
				"select":{
				select: true,
				style: 'single',
				selector: 'td:not(:nth-child(4))',
				className:'bg-success text-white selected'},
				"rowsGroup":[0,1],
				"serverside":true, 
				"processing":true,
				"columns" : [
				{data : "ACCTCODE"},
				 {data : "ACCTDESC"},
				{data : "CODE"},
				{data : "DESCRIPTION"}]
			});

			chartTable.on('click','tbody>tr',function(){
				$(this).toggleClass("bg-success text-white selected");
				var data = 	$("#en_major").DataTable().row('.selected').data();
				$("#chrtDesc").val(data.DESCRIPTION);
				$("#acctCode").val(data.CODE);
				$("#modalChartAccount").modal('hide');
			});
		}

	$("#searchAccount").on('click',function(){
		$("#modalChartAccount").modal('show');
		$("#container").load(baseURL+"ENGAS/major_view",function(){
			en_major();
		});
	});
		
		function ChargeList()
		{
			var data = new Object();
			data.id = "ChargeTable";
			data.link =baseURL+"/Ref_Charge/ChargeList";
			data.type = "POST";
			data.destroy = true;
			data.coldef=[{
			
    targets : 2,
    searchable:false,
    render: function (data) 
    {
        switch(data) 
        {
            case 'ROBOR' : return 'Room and board'; break;
            case 'DRUME' : return 'Drugs and medicines'; break;
            case 'XRAYL' : return 'Xray, laboratory, others'; break;
            case 'DOCFE' : return 'Doctors fee'; break;
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
    targets : 3,
    searchable:false,
    render: function (data) 
    {
        switch(data) 
        {
            case 'DRUGS' : return 'Drugs and Medicines Reference'; break;
            case 'EXAMI' : return 'Examination'; break;
            case 'NONDR' : return 'Non-Drugs Reference'; break;
            case 'MISCE' : return 'Miscellaneous'; break;
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
            case 'OPD' : return 'Out-Patient Dept.'; break;
            case 'ER' : return 'Emergency Room'; break;
            case 'OR' : return 'Operating Room.'; break;
            case 'DR' : return 'Delivery Room'; break;
            case 'WARD' : return 'Ward'; break;
            case 'PERIN' : return 'Perinatal'; break;
			case 'CSSR' : return 'Central Supply Room'; break;
            default  : return ' ';
        }
    },
},		
{
    targets : 9,
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
	
	<script src="<?php echo base_url()?>assets/scripts/ref_charge/ref_charge_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_charge/delete.js"></script>