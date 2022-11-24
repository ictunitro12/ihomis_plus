<link rel="stylesheet" type="text/Legit" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/Legit/dataTables.responsive.Legit">
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp; MASTERLIST OF FACILITY-BASED DELIVERIES  
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					&nbsp;<button class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Select Date Range" onclick="daterangeselect();"><i class="fa fa-calendar"></i> Search Date</button> 
					<button id="btnPrint" class="btn btn-outline-success btn-ladda" data-style="zoom-in"> <i class="fa fa-print"></i> Print Form</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<div class="row">
			<div class="col-md-12">
				<div class="h4 text text-success" align="center">
					<tr>
						<td>Report Duration</td>
					</tr>
				</div>
				<div class="col-md-12">
					<div class="h5 text-success" align="center">
						From :&nbsp;
						<label id="froms"></label>&nbsp;&nbsp;&nbsp;To :&nbsp;
						<label id="tos"></label>
					</div>
				</div>
			</div>
		</div>

		<input type="hidden" name="fromdate" id="fromdate" />
		<input type="hidden" name="todate" id="todate" />
		<div class="h4 text text-success">
			<tr>
				<td>LEGITIMATE</td>
			</tr>
		</div>
		<table id="LegitTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th width="3%">#</th>
					<th width="18%">NAME OF CHILD</th>
					<th width="4%">SEX</th>
					<th width="6%">DATE</th>
					<th width="5%">TIME</th>
					<th width="6%">BIRTH ORDER</th>
					<th width="10%">TYPE OF BIRTH 1-SINGLE/2-TWINS 3-TRIPLETS</th>
					<th width="5%">WEIGHT</th>
					<th width="13%">MOTHER'S NAME</th>
					<th width="3%">AGE</th>
					<th width="16%">ADDRESS</th>
					<th width="8%">ATTENDANT</th>
					<th width="2%" class="never">REG. NO</th>
				</tr>
			</thead>
		</table>

		<div class="h4 text text-success">
			<tr>
				<td>ILLEGITIMATE</td>
			</tr>
		</div>
		<table id="IllegitTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th width="3%">#</th>
					<th width="18%">NAME OF CHILD</th>
					<th width="4%">SEX</th>
					<th width="6%">DATE</th>
					<th width="5%">TIME</th>
					<th width="6%">BIRTH ORDER</th>
					<th width="10%">TYPE OF BIRTH 1-SINGLE/2-TWINS 3-TRIPLETS</th>
					<th width="5%">WEIGHT</th>
					<th width="13%">MOTHER'S NAME</th>
					<th width="3%">AGE</th>
					<th width="16%">ADDRESS</th>
					<th width="8%">ATTENDANT</th>
					<th width="2%" class="never">REG. NO</th>
				</tr>
			</thead>
		</table>

		<div class="h4 text text-success">
			<tr>
				<td>R.A. NO. 9255</td>
			</tr>
		</div>
		<table id="AcknowledgeTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th width="3%">#</th>
					<th width="18%">NAME OF CHILD</th>
					<th width="4%">SEX</th>
					<th width="6%">DATE</th>
					<th width="5%">TIME</th>
					<th width="6%">BIRTH ORDER</th>
					<th width="10%">TYPE OF BIRTH 1-SINGLE/2-TWINS 3-TRIPLETS</th>
					<th width="5%">WEIGHT</th>
					<th width="13%">MOTHER'S NAME</th>
					<th width="3%">AGE</th>
					<th width="16%">ADDRESS</th>
					<th width="8%">ATTENDANT</th>
					<th width="2%" class="never">REG. NO</th>
				</tr>
			</thead>
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
								<input type="date" class="form-control form-control-mg" placeholder="start date" name="from" id="from" autocomplete="off" min="1970-01-01" max="<?php echo date("Y-m-d"); ?>" />
							</div>
							<br>
							<div class="row-md-6">
								<label class="text-success">To</label>
								<input type="date" class="form-control form-control-mg" placeholder="end date" name="to" id="to" autocomplete="off" min="1970-01-01" max="<?php echo date("Y-m-d"); ?>" />
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

	<form id="frmLegit">
		<div class="modal fade" id="ModalLegit" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-xl" role="dialog">				
				<div class="modal-content">
					<div class="modal-header">						
						<h3 class="modal-title text-success"><i class=" fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp; Form</h3>
						<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="fromLegit">
						<input type="hidden" id="toLegit">
						<iframe id="Legit_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
					</div>
				</div>
			</div>
		</div>
	</form>

	<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">
	<script type="text/javascript">
		$(document).ready(function() {
			document.getElementById("btnPrint").disabled = true;
			$.session.clear('from');
			$.session.clear('to');
			$('#DateSearch').modal({ backdrop: 'static'}).draggable({});	
		});

		function LegitList(from, to)
		{
			var data = new Object();
			data.id = "LegitTable";
			data.link = baseURL+"Reports_Fabella/LegitList/"+from+"/"+to; 
			data.type = "POST";
			data.coldef =[
			{
				targets: [12],
				visible:false,
				searchable:false,
			}
			];
			loadTable(data);
		}

		function IllegitList(from, to)
		{
			var data = new Object();
			data.id = "IllegitTable";
			data.link = baseURL+"Reports_Fabella/IllegitList/"+from+"/"+to; 
			data.type = "POST";
			data.coldef =[
			{
				targets: [12],
				visible:false,
				searchable:false,
			}
			];
			loadTable(data);
		}

		function AcknowledgeList(from, to)
		{
			var data = new Object();
			data.id = "AcknowledgeTable";
			data.link = baseURL+"Reports_Fabella/AcknowledgeList/"+from+"/"+to; 
			data.type = "POST";
			data.coldef =[
			{
				targets: [12],
				visible:false,
				searchable:false,
			}
			];
			loadTable(data);
		}

		function daterangeselect()
		{
			$('#DateSearch').modal({ backdrop: 'static'}).draggable({});	

		}


		$('#filter').on('click',function()
		{
			if ($("#from").val() == "" || $("#to").val() == "") {
				toastr.warning("Warning: Please Select Valid Date Range!");
				$("#DateSearch").modal({backdrop: 'static'}).draggable({});
			} else if ($("#from").val() > $("#to").val()) {
				toastr.warning("Warning: Please Select Valid Date Range!");
				$("#DateSearch").modal({backdrop: 'static'}).draggable({});

			} 
			var from = $("#from").val();
			var to = $("#to").val();
			$.session.set('from',from);
			$.session.set('to',to);
			$("#DateSearch").modal('hide');
			dr();
			LegitList(from,to);
			IllegitList(from,to);
			AcknowledgeList(from,to);
			document.getElementById("btnPrint").disabled = false;
			return false;
		});


		function dr() {
			var from_bS = new Date($.session.get('from')).toLocaleDateString('en-us', {
				month: "long",
				day: "numeric",
				year: "numeric"
			});
			var to_bS = new Date($.session.get('to')).toLocaleDateString('en-us', {
				month: "long",
				day: "numeric",
				year: "numeric"
			});

			document.getElementById('tos').innerHTML = to_bS;
			document.getElementById('froms').innerHTML = from_bS;
		}

		$('#btnPrint').on('click', function(data) {
			$('#ModalLegit').modal({backdrop: 'static'}).draggable({});
			var from = $.session.get('from');
			var to = $.session.get('to');
			var src = baseURL + 'Reports_Fabella/MasterListDeliveries/' + from + "/" + to;
			var x = document.getElementById("Legit_pdf").src = src;
			$("#Legit_pdf").attr("src", src);
		});

		$('#ModalLegit').on('hidden.coreui.modal', function() {
			$("#Legit_pdf").removeAttr("src").attr("src", "");
		});
	</script>