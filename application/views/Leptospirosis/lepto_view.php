<style>

table#LeptoTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto">
			<div class="h4 text text-success"> 
			<i class="fa fa-file-text-o"></i>
			&nbsp<?php echo $header;?>
			</div>
		</div>

		<div class="col-md-6 col-md-auto">
		<div class="btn-group pull-right" role="group" aria-label="">
		<a href="<?php echo site_url('Lepto/PatientForm');?>" data-toggle="tooltip" title="Register Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i>
		</a>
		 <!-- &nbsp;<button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Select Date Range" onclick="daterangeselect();"><i class="fa fa-calendar"></i></button> -->
		 &nbsp;<button id="btnCSS" class="btn btn-success btn-ladda" data-style="zoom-in" data-from="" data-to=""><i class="fa fa-print "></i></button>
		</div>
		</div>	
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="LeptoTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width = "100%">
			<thead class="thead-dark">
				<tr>
					<th></th>
					<th width = "15%" class = "align-middle">Hospital Record Number</th>
					<th width = "29%" class = "align-middle">Patient Name (<small>Firstname,Middlename,Lastname Suffix</small>)</th>
					<th width = "15%" class = "align-middle">Date of Consultation (<small>mm/dd/yyyy</small>)</th>
					<th width = "12%" class = "align-middle">Type of Encounter</th>
					<th width = "29%" class = "align-middle">Provider (<small>Firstname,Middlename,Lastname Suffix</small>)</th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
	<div class="card-footer">
	</div>
</div>

<div class="modal fade" id="ModalPatientInfo" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="text text-success"><i class="fa fa-user-circle"></i> Patient Information</h3>
					<div class="box-body box-profile">
						<img id="PatientPicInfo"class="img-fluid bg-success img-thumbnail rounded mx-auto d-block mb-1" width="200px"  alt="Patient Photo">
					<div class="h5 profile-username text-center text-success" id="patname"></div>
					<div class="h6 text-center text-success" id="hpercode"></div>
					<ul class="list-group">
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp SEX:</b> 
							<a class="pull-right text text-success" id ="patsex">N/A</a>
						</li>	
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp CIVIL STATUS:</b>
							<a class="pull-right text text-success" id="civilstat">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp BIRTHDATE:</b>
							<a class="pull-right text text-success" id="patbdate">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp CONSULTATION DATE:</b>
							<a class="pull-right text text-success" id="consultdte">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp DATE OF DIAGNOSIS:</b>
							<a class="pull-right text text-success" id="dtediag">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp FINAL DIAGNOSIS:</b>
							<a class="pull-right text text-success" id="findag">N/A</a>
						</li>
					</ul>	
					<div class="card-footer"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<form name="frmDeleteLepto" id="frmDeleteLepto">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">

	<div class="modal fade" id="DeleteLepto" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<div class="col-md-1">
						<h1 class="text-secondary"><i class="fa fa-exclamation-triangle"></i></h1>
					</div>
					<div class="col-md-8">
							<h6 class="text-secondary" >Data can't be retrieve after deleted.</h6>
					</div>
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

<form id="dateRange" method="post">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
			<div class="modal-content card-accent-success">
					<div class="modal-header">
						<h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</div>
					<div class="modal-body">						
						<div id="baseDateControl">
							<div class="row-md-6">
								<label class="text-success">From</label>
								<input type="date" class="form-control form-control-mg" placeholder="start date" name ="from" id="from" autocomplete="off" />
							</div>
							<br>
							<div class="row-md-6">
								<label class="text-success">To</label>
								<input type="date" class="form-control form-control-mg" placeholder="end date" name ="to" id="to" autocomplete="off" />
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success btn-block" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></button>
					</div>
			</div>
		</div>
	</div>
</form>

<form id = "frmLeptoPDF">
		<div class="modal fade" id="ModalLepto" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-xl" role="dialog">
			 <div class="modal-content">
				<div class="modal-body">
				   <h3 class="modal-title text-success"><i class="fa fa-heartbeat"></i> Leptospirosis</h3>
				   <iframe id="LeptoPDF" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			 </div>
		  </div>
	   </div>
</form>

	<!-- <form name ="frmDenguePDF" id="frmDenguePDF" method="post">
	<div class="modal" id="ModalDengue" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
	<div class="modal-content card-accent-success">
	<div class="modal-header">
	<input name="code" id ="code" type="hidden">
	<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i>&nbsp; Dengue</h2>
	</div>
	<div class="modal-body border-success" id="DenguePDF">
	
     	embed src="" frameborder="2" width="100%" height="800px" id="StrokePDF" 
	
	</div>
	<div class="modal-footer bg-secondary"></div>
	</div>
	</div>
	</div>
	</form> -->

<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
<input name="encountercode" id ="encountercode" type="hidden">
<input name="hpercode" id ="hpercode" type="hidden">
<script src="<?php echo base_url()?>assets/scripts/leptospirosis/delete.js"></script>
<script src="<?php echo base_url()?>assets/scripts/leptospirosis/lepto.js"></script>
<script type="text/javascript">
$(document).ready(function()
	{
	PatientLogList();
	/* PatientLogList($.session.get('from'),$.session.get('to')); */
	$("#PatientPicInfo").prop('src', baseURL+'assets/img/avatars/none.png');
	/* if($.session.get('from') == undefined && $.session.get('to') == undefined)
	 {
		 $("#DateSearch").modal('show');
	 }
	 else
	 {
		 $("#DateSearch").modal('hide');
	 } */
	return false;
	});
	
	/* function daterangeselect()
	{
		$("#DateSearch").modal();
	}

	$('#filter').on('click',function()
	{
	var from = $("#from").val();
	var to = $("#to").val();
	$.session.set('from',from);
	$.session.set('to',to);
	$("#DateSearch").modal('hide');
	PatientLogList(from,to);
	return false;
    }); */

	function PatientLogList(from,to)
	{
	var data = new Object();
	data.id = "LeptoTable";
	data.link = baseURL+"Lepto/Lepto_DataLoad";
	/* data.link = baseURL+"Lepto/Lepto_DataLoad/"+from+"/"+to; */
	data.type = "POST";
	data.coldef =[
    {
    targets: [0],
    visible:false,
    searchable:true,
    },
	{
    targets: [1,2,3,4,5,6],
    orderable :false,
    }
    ];
	loadTable(data);
	}
	
	$("#LeptoTable").on("click",".ModalDeleteLepto",function(){
		var data = $(this).data();
		console.log(data);
		$('#DeleteLepto').modal('show');
		$("#formIdentification").val('delete');
		$("#deletecode").val(data['enccode']);
	});

	/*$('#LeptoTable').on('click','.ModalPatientInfo',function(){
		$('#ModalPatientInfo').modal('show');
		var hpercode=$(this).data('enccode');
		var obj=DenguePatientInfo(hpercode);
		console.log(obj);
		$("#patname").text(obj['patlast'].concat(" ",obj['patmiddle']," ",obj['patlast']));
		$("#patsex").text((obj['patsex']));
		$("#patbdate").text(obj['patbdate']);;
		$("#civilstat").text(obj['stat_code']);
		$("#consultdte").text(obj['consult_date']);
		$("#dtediag").text(obj['date_of_diagnosis']);
		$("#findag").text(obj['final_diagnosis']);
	});*/
	
	$('#btnCSS').on('click', function (data){
		$('#ModalLepto').modal('show');
		/* var from = $.session.get('from');
		var to = $.session.get('to'); */
		var src = baseURL+'Lepto/LeptoForm';
		/* var src = baseURL+'Lepto/LeptoForm/'+ from + "/" + to; */
		var x = document.getElementById("LeptoPDF").src = src;
		$("#LeptoPDF").attr("src", src);
	});
	
	$('#ModalLepto').on('hidden.coreui.modal', function (){$("#LeptoPDF").removeAttr("src").attr("src", "");});

	
</script>