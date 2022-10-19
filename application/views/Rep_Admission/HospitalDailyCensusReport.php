
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<form id="dateRange" method="post">
	<div class="modal" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
					<div class="modal-body border-success">
					<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>	
					<h3 class="text-success"><i class="fa fa-search" aria-hidden=""></i> Search</h3>	
					<br>			
						<div id="baseDateControl">
							<div class="row">
								<label class="text-success form-label col-md-6">Date</label>
								<label class="text-success form-label col-md-6">Type of Service</label>
								<div class="col-md-6">
									<b class="text text-success"></b>
									<input type="date" class="form-control form-control-mg" min="2000-01-01" max="<?php echo date('Y-m-d'); ?>" name ="datefetch" id="datefetch" autocomplete="off" />
								</div>
								<div class="col-md-6">
									<b class="text text-success"></b>
									<select name="wclcode" id="wclcode" placeholder="" class="form-control form-control-mg" autocomplete="off">
									    <option value="S0001">MEDIDCAL</option>
									    <option value="S0002">SURGICAL</option>
									    <option value="S0003">PEDIATRICS</option>
									    <option value="S0004">GYNECOLOGY</option>
									    <option value="S0005">OBSTETRICS</option>
									 </select>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer bg-secondary">
					<button type="submit" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
					</div>
			</div>
		</div>
	</div>
</form>

<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
						<i class="fa fa-th-list"></i>
								&nbsp  <?php echo $header;?>&nbsp; <small><i><label class="form-label text-success" id="lbldate"> </label></i></small>
					</div>
				</div>
				<div class="col-md-6">
						<div class="btn-group pull-right" role="group" aria-label="">
						    <button type="button" class="btn btn-success pull-right btn-md" data-toggle="modal" data-target="#DateSearch" title="Select Date">
						    		<i class="fa fa-calendar"></i>
							</button>&nbsp;
	               			 <button type="button" id="printHDCRep" class="btn btn-success pull-right btn-md" data-style="zoom-in" title="Print PDF"><i class="fa fa-file-pdf-o"></i>
							</button>
			    		</div>
				</div>
			</div>
		</div>
	<div class="row">
		<div class="col-md-6">
			<div class="card-header">
						<div class="h4 text text-success"> 
									&nbsp  ADMISSION
						</div>
			</div>
			<div class="card-body table-responsive">
				<table id="HDCRAdmissionTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
					<thead class="thead-dark">
						<tr>
						 <th>HEALTH RECORD NO.</th>  
						<th>ROOM</th>
						<th>PATIENT'S NAME</th>
						 <th width="20%">TIME</th>
						</tr>
					</thead>
					<tfoot class="thead-dark">
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th width="50px"></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card-header">
						<div class="h4 text text-success">
									&nbsp  DISCHARGED (Alive)
						</div>
			</div>
			<div class="card-body table-responsive">
				<table id="HDCRDischargedTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
					<thead class="thead-dark">
						<tr>
						 <th>HEALTH RECORD NO.</th>  
						<th>ROOM</th>
						<th>PATIENT'S NAME</th>
						 <th width="20%">TIME</th>
						</tr>
					</thead>
					<tfoot class="thead-dark">
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th width="50px"></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="card-header">
						<div class="h4 text text-success"> 
									&nbsp  TRANSFERS IN FROM OTHER FLOORS
						</div>
			</div>
			<div class="card-body table-responsive">
				<table id="HDCRTransfersInTable" class="table table-sm table-striped table-borderless table-condensed table-hover " style="text-align: center">
					<thead class="thead-dark">
						<tr>
						 <th width="20%">PATIENT'S NAME</th>
						</tr>
					</thead>
					<tfoot class="thead-dark">
						<tr>
							<th width="50px"></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card-header">
						<div class="h4 text text-success"> 
									&nbsp  TRANSFERS OUT TO OTHER FLOORS
						</div>
			</div>
			<div class="card-body table-responsive">
				<table id="HDCRTransfersOutTable" class="table table-sm table-striped table-borderless table-condensed table-hover " style="text-align: center">
					<thead class="thead-dark">
						<tr>
						 <th width="20%">PATIENT'S NAME</th>
						</tr>
					</thead>
					<tfoot class="thead-dark">
						<tr>
							<th width="50px"></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	 </div>
	 		<div class="card-header">
						<div class="h4 text text-success" align="center"> 
									&nbsp  DEATH
						</div>
			</div>
			<div class="card-body table-responsive">
				<table id="HDCRDiedTable" class="table table-sm table-striped table-borderless table-condensed table-hover " style="text-align: center">
					<thead class="thead-dark">
						<tr>
						 <th width="20%">PATIENT'S NAME</th>
						</tr>
					</thead>
					<tfoot class="thead-dark">
						<tr>
							<th width="50px"></th>
						</tr>
					</tfoot>
				</table>
			</div>
</div>

<form method="post">
<div class="modal" id="form_patrec" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
   <div class="modal-content">
   	<div class="modal-header">
	<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
	<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal">
				<i class="fa fa-close"></i> 
				</button>
	</div>
	  <div class="modal-body">
		<embed id="printadmittedpdfmodal" type="application/pdf" frameborder="2" width="100%" height="800px">
      </div>
      <div class="modal-footer bg-secondary">
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
	$(document).ready(function()
	{
	$("#DateSearch").modal({backdrop:'static'}).draggable();
	})
function HDCRAdmitTable(data)
	{
		 var table = $("#HDCRAdmissionTable").dataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "hpatcode"},
			{"data" : "rmname"},
			{"data" : "patient"},
			{"data" : "admtime"}],
		 });

	 }
	 function HDCRDisctTable(data)
	{
		 var table = $("#HDCRDischargedTable").dataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "hpatcode"},
			{"data" : "rmname"},
			{"data" : "patient"},
			{"data" : "distime"}],
		 });

	 }
	  function HDCRTransinfromTable(data)
	{
		 var table = $("#HDCRTransfersInTable").dataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "patient"}],
		 });

	 }
	 function HDCRTransoutfromTable(data)
	{
		 var table = $("#HDCRTransfersOutTable").dataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "patient"}],
		 });

	 }
	 function HDCRDiedfromTable(data)
	{
		 var table = $("#HDCRDiedTable").dataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "patient"}],
		 });

	 }

	$('#dateRange').submit('click',function()
	{
		var dateRangeForm = new FormData(this);
		var selectedDate = dateRangeForm.get('datefetch');
		var selectedwclcode = dateRangeForm.get('wclcode');
		$('#printHDCRep').click('click',function(){
			$('#form_patrec').modal({backdrop:'static'}).draggable;
			var datefetch = encodeURIComponent(encodeURIComponent(btoa(selectedDate)));
			var wlcode = encodeURIComponent(encodeURIComponent(btoa(selectedwclcode)));
			var x = document.getElementById("printadmittedpdfmodal");
			x.src = baseURL+"Rep_Admission_pdf/HDCencusReportpdf/"+datefetch+'/'+wlcode;
			});
		var datefetch_ = new Date(selectedDate).toLocaleDateString('en-us', {
				month: "numeric",
				day: "numeric",
				year: "numeric"
			});
			if(selectedwclcode == 'S0001'){
				selectedwclcode = 'MEDICAL';
			}
			else if(selectedwclcode == 'S0002'){
				selectedwclcode = 'SURGICAL';
			}
			else if(selectedwclcode == 'S0003'){
				selectedwclcode = 'PEDIATRICS';
			}
			else if(selectedwclcode == 'S0004'){
				selectedwclcode = 'GYNECOLOGY';
			}
			else if(selectedwclcode == 'S0005'){
				selectedwclcode = 'OBSTETRICS';
			}
			else{
				selectedwclcode = 'invalid type!';
			}
			document.getElementById('lbldate').innerHTML = ('<small><i>Date : <b>'+datefetch_+'</b> - Type of Service : <b>'+selectedwclcode+'</b> </i></small>');
		$.ajax({
		url:"<?php echo site_url('Rep_Admission/HDCRAdmissionControl');?>",
		type:"POST",
		data: dateRangeForm,
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
			$('#DateSearch').modal('hide');
			HDCRAdmitTable(data);
			/* var hrefprintadmittedpdf = $("#printHDCRep").prop('href') +  encodeURIComponent(encodeURIComponent(btoa($("#datefetch").val())))+'/'+encodeURIComponent(encodeURIComponent(btoa($("#wclcode").val())))+'/';
			// $("#printHDCRep").prop('href',hrefprintadmittedpdf);*/
		},
		error: function(response){
		alert("Error:Please try again!");
		}
		});
		$.ajax({
		url:"<?php echo site_url('Rep_Admission/HDCRDischargedControl');?>",
		type:"POST",
		data:new FormData(this),
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
			$('#DateSearch').modal('hide');
			HDCRDisctTable(data);
			
		},
		error: function(response){
		alert("Error:Please try again!");
		}
		});
		$.ajax({
		url:"<?php echo site_url('Rep_Admission/HDCRTranInControl');?>",
		type:"POST",
		data:new FormData(this),
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
			$('#DateSearch').modal('hide');
			HDCRTransinfromTable(data);
			
		},
		error: function(response){
		alert("Error:Please try again!");
		}
		});
		$.ajax({
		url:"<?php echo site_url('Rep_Admission/HDCRTranOutControl');?>",
		type:"POST",
		data:new FormData(this),
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
			$('#DateSearch').modal('hide');
			HDCRTransoutfromTable(data);
			
		},
		error: function(response){
		alert("Error:Please try again!");
		}
		});
		$.ajax({
		url:"<?php echo site_url('Rep_Admission/HDCRDiedControl');?>",
		type:"POST",
		data:new FormData(this),
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
			$('#DateSearch').modal('hide');
			HDCRDiedfromTable(data);
		},
		error: function(response){
		alert("Error:Please try again!");
		}
		});
		return false;
	});
	
	</script>      