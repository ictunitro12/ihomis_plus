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
					<button type="button" class="btn btn-success tn-square btn-ladda" data-toggle="modal" data-target="#DateSearch">
					<i class="fa fa-calendar"></i>
					&nbsp Date Range 
					</button> &nbsp
					<button id="btnCSS" class="btn btn-success btn-ladda" data-style="zoom-in" data-from="" data-to=""><i class="fa fa-file-pdf-o"></i></button>
			</div>
		</div>	
		</div>
	</div>

	<div class="card-body table-responsive">
	<div class="row">
		<div class="col-md-12">
			<div class="h4 text text-success" align = "center">
				<tr>
					<td></i>Summary of Issued Drugs and Medicine</td>
				</tr>
			</div>

			<div class="form-row h6 text text-success">
					<div class="col-md-3"></div>
					<label class="col-md-1 col-form-label text-default mb-1" align = "right">Date From:</label>
					<div class="col-md-2">
						<input type="date" class="form-control form-control-mb mb-1" id="date_from" name="date_from" placeholder = "" value="" readonly>
					</div>
					<label class="col-md-1 col-form-label text-default mb-1" align = "right">Date To :</label>
					<div class="col-md-2">
						<input type="date" class="form-control form-control-mb mb-1" id="date_to" name="date_to" placeholder = "" value=""readonly>
					</div>
					<div class="col-md-3"></div>
			</div>
		</div>
	</div>
	
	<table id="Pharm_drugs_table" class="table table-sm table-striped table-bordered table-condensed table-hover">
		<thead class="thead-dark">	
			<tr>
                <th>PATIENT`S NAME</th>
				<th>DATE AND TIME REQUESTED</th>
				<th>QUANTITY REQUESTED</th>
				<th>STRENGTH</th>
				<th>ITEM DESCRIPTION</th>	
				<th>DATE AND TIME ISSUED</th>	
				<th>QUANTITY ISSUED</th>
				<th>UNIT PRICE</th>
				<th>TOTAL AMOUNT</th>
			</tr>
		</thead>
		</table>
	</div>
</div>

	<form id = "frmCSS">
		<div class="modal fade" id="ModalCSS" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-xl" role="dialog">
			 <div class="modal-content">
				<div class="modal-body">
				   <h3 class="modal-title text-success"><i class="fa fa-heartbeat"></i> Pharmacy</h3>
					<input type="hidden" id="enccodeCSS">
				   <iframe id="CSS_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
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
<input type = "hidden" name = "fromdate"  id="fromdate"/>
<input type = "hidden" name = "todate"  id="todate"/>

    <script type="text/javascript">
	$(document).ready(function()
	{		
	$.session.remove('from');
	$.session.remove('to');
	$('#DateSearch').modal("show");
	$("#date_from").val($.session.get('from'));
	$("#date_to").val($.session.get('to'));
	});
	
	function Pharm_drugs(data)
	 {
		var table =$("#Pharm_drugs_table").dataTable({
		 data:data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
            {"data" : "name"},
			{"data" : "dodate"},
			{"data" : "pchrgqty"},
			{"data" : "strength"},
			{"data" : "grpcode"},
			{"data" : "issuedte"},
			{"data" : "qty"},
			{"data" : "pchrgup"},
			{"data" : "pcchrgamt"}
			],
		 });		 
	 }

	$('#dateRange').submit('click',function(){
	var formData = new FormData(this);
	$.ajax({
		url:"<?php echo site_url('Rep_Pharmacy/SummaryDrugs_Meds'); ?>",
		type:"POST",
		data:formData,
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
		var from = $("#from").val();
		$.session.set('from',from);
		var to = $("#to").val();
		$.session.set('to',to);
		$('#DateSearch').modal("hide");
		$("#date_from").val($.session.get('from'));
		$("#date_to").val($.session.get('to'));
		Pharm_drugs(data);
		$("#fromdate").val(formData.get('from'));
		$("#todate").val(formData.get('to'));
		},
		error: function(response){
		alert("Error:Please try again!");
		}
	});
		return false; 
	});	
    
	$('#btnCSS').on('click', function (data){
		$('#ModalCSS').modal('show');
		var src = baseURL+'Rep_Pharmacy/IssuedDrugsandMeds/'+ $("#fromdate").val() + "/" + $("#todate").val();
		var x = document.getElementById("CSS_pdf").src = src;
		$("#CSS_pdf").attr("src", src);
	});
	Pharm_drugs(data);
	$('#ModalCSS').on('hidden.coreui.modal', function (){$("#CSS_pdf").removeAttr("src").attr("src", "");});
	</script>		