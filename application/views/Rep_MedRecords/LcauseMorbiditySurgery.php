<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<form id="dateRange" method="post">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
					<div class="modal-header">
						<h2 class="modal-title text-success"><span class="fa fa-calendar"></span>&nbsp Retrieval Criteria</h2>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">						
						<div id="baseDateControl">
							<div class = "row">
								<div class="col-md-4">
									<input type="radio" id="monthly" name="filter" value="monthly">
									<label for="monthly"><h5>&nbsp Monthly</h5></label>
								</div>
								<div class="col-md-4">
									<input type="radio" id="quarterly" name="filter" value="quarterly">
									<label for="quarterly" align = "center"><h5>&nbsp Quarterly</h5></label>
								</div>
								<div class="col-md-4">
									<input type="radio" id="annual" name="filter" value="annual">
									<label for="annual"><h5>&nbsp Annual</h5></label>
								</div>
								<div class="col-md-12" id="dRange">
									<input type="month" class="form-control form-control-mg" placeholder="start date" name ="mnth" id="mnth" autocomplete="off"/>
								</div>
							</div>
							<div class = "row" id="quarter">
								<div class="col-md-12">
									<select class = "form-control" id="squarter">
										<option value= "1st"><h3>1st Quarter</h3></option>
										<option value="2nd"><h3>2nd Quarter</h3></option>
										<option value="3rd"><h3>3rd Quarter</h3></option>
										<option value="4th"><h3>4th Quarter</h3></option>
									</select>
								</div>
							</div>
							<br>
							<div class = "row">	
								<div id = "yearly" class="col-md-12">
									<label class="text-success"><h6>YEAR : </h6></label>
									<input type="number" class="form-control form-control-mg" placeholder="yyyy" name ="filter" id="qyear" autocomplete="off"/>	
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
</form>

<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">
 
 <script type="text/javascript">
$(document).ready(function()
	{		
   $('#DateSearch').modal({backdrop:'static'});
	});
	$("#dRange").hide();
	$("#yearly").hide();
	$("#monthly").change(function(){
		if($(this).prop('checked') == true){
			$("#squarter").hide();
			$("#yearly").hide();
		    $("#dRange").show();
		}
	});
	
	$("#squarter").hide();
	$("#quarterly").change(function(){
		if($(this).prop('checked') == true){
			$("#dRange").hide();
			$("#yearly").show();
			$("#squarter").show();	
		} 
	});
	
    $("#year").hide();
	$("#annual").change(function()
		{
			if($(this).prop('checked') == true){
			$("#dRange").hide();
			$("#squarter").hide();
			$("#yearly").show();	
		}
	});
		
	$('#filter').on('click',function(){
		var baseURL = $("#baseURL").val(); 	
		$("DateSearch").modal('hide');
		
		if($("#monthly").prop('checked') == true)
		{
	    window.open(baseURL+"Rep_MedicalRecords/LeadCausesMorbiditySurgery/monthly/"+$("#mnth").val(),'name'); 
		}
		else if($("#quarterly").prop('checked') == true)
		{
		var year = $("#qyear").val();
	    window.open(baseURL+"Rep_MedicalRecords/LeadCausesMorbiditySurgery/quarterly/"+$("#squarter").val()+year); 
		}else if($("#annual").prop('checked') == true){
			var year = $("#qyear").val();
			window.open(baseURL+"Rep_MedicalRecords/LeadCausesMorbiditySurgery/yearly/"+year); 
		}
	});	
	</script>		
