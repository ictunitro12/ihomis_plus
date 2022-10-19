<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
				<div class="col-md-6">
							<div class="h3 text text-success"> 
							<i class="fa fa-th-list"></i>
							&nbsp <?php echo $header;?>
							</div>
				</div>
		
	<div class="col-md-6">
	    <div class="btn-group pull-right" role="group" aria-label="">
		<button type="button" class="btn btn-success tn-square btn-ladda" data-toggle="modal" data-target="#DateSearch">
		<i class="fa fa-calendar"></i>
		&nbsp Date Range 
		</button> &nbsp
		<a id="printopd" href="<?php echo site_url('Rep_Outpatient/Consultation/');?>" data-toggle="tooltip" title="Print Preview" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-search-plus"></i>
		</a>
		</div>
		</div>	
	</div>
</div>

	<div class="card-body table-responsive">
	<table id="OPDTable" class="table table-sm table-striped table-borderless table-condensed 
		  <thead class="thead-dark">	 
		 <div class="btn-group pull-left" role="group" aria-label="">
		   <div class="form-check form-check-inline">
			<td><tr>Sort By: &nbsp &nbsp </tr></td> 
		   </div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="sortRadio1" value="option1" checked>
				<label class="form-check-label" for="sortRadio1">Date</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="sortRadio2" value="option2">
				<label class="form-check-label" for="sortRadio2">Hospital Number</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="sortRadio3" value="option3">
				<label class="form-check-label" for="sortRadio3">Diagnosis</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
				<label class="form-check-label" for="sortRadio4">Service</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="sortRadio5" value="option5">
				<label class="form-check-label" for="sortRadio5">Sex</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="sortRadio6" value="option6">
				<label class="form-check-label" for="sortRadio6">Address</label>
			</div>
		</div>
		<br><br>
		 <thead class="thead-dark">
			<tr>
				<th>DATE OF CONSULTATION</th>
				<th>HEALTH RECORD NUMBER</th>
				<th>PATIENT'S NAME</th>
				<th>TYPE OF SERVICE</th>	
			</tr>
		 </thead>
		 <tfoot class="thead-dark">
			<tr>
				<th></th>	
				<th></th>
				<th></th>
				<th></th>
			</tr>
		 </tfoot>
		</table>
	</div>
</div>


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

 	<script type="text/javascript">
	$(document).ready(function()
	{		
   $('#DateSearch').modal({backdrop:'static'});
	});
	
	function OPD(data)
	 {
		var table =$("#OPDTable").dataTable({
		 data:data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "opddate"},
			{"data" : "hpatcode"},
			{"data" : "name"},
			{"data" : "tstype"}],
		 });		 
	 }
	 
	$('#dateRange').submit('click',function(){
	$.ajax({
		url:"<?php echo site_url('Rep_Outpatient/OPDConsulSort');?>",
		type:"POST",
		data:new FormData(this),
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
		$("#DateSearch").modal('hide');
		OPD(data);
		var hrefprintpdfopd = $("#printopd").prop('href')+$("#from").val() + "/" + $("#to").val();
		$("#printopd").prop('href',hrefprintpdfopd);
		},
		error: function(response){
		alert("Error:Please try again!");
		}
	});
		return false;
	});	
	</script>		