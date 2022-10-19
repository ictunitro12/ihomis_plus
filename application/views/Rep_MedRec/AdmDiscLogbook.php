<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
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
		<a id="printopd" href="<?php echo site_url('Rep_MedRec/AdmDischLog/');?>" data-toggle="tooltip" title="Print Preview" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-search-plus"></i>
		</a>
			</div>
		</div>	
	</div>
</div>

	<div class="card-body table-responsive">
	<table id="Admtbl" class="table table-sm table-striped table-borderless table-condensed ">
		<thead class="thead-dark">	
			<thead class="thead-dark" align="center">
				<tr>
				<th>HOSPITAL NUMBER</th>
				<th>CASE NO.</th>
				<th>DATE OF ADMISSION</th>
				<th>TIME OF ADMISSION</th>
				<th>NAME OF PATIENT</th>
				<th>DATE OF BIRTH</th>	
				<th>SEX</th>
				<th>RESIDENTIAL ADDRESS</th>
				<th>MEMBERSHIP</th>
				<th>ADMITTING DIAGNOSIS</th>
				<th>FINAL DIAGNOSIS</th>
				<th>ADMITTING PHYSICIAN</th>
				<th>DISPOSITION</th>
				<th>LENGTH OF STAY</th>
				<th>DATE AND TIME OF DISCHARGE</th>
			</tr>
			</thead>
			<tfoot class="thead-dark">
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			</tfoot>
		</table>



<form id="dateRange" method="post">
	<div class="modal" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
					<div class="modal-header">
						<h1 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h1>
					</div>
					<div class="modal-body border-success">						
						<div id="baseDateControl">
							<div class="row-md-6">
								<label class="text-success">From</label>
								<input type="date" class="form-control form-control-mg" placeholder="start date" name ="from" id="from" autocomplete="off" />
							</div>
							<div class="row-md-6">
								<label class="text-success">To</label>
								<input type="date" class="form-control form-control-mg" placeholder="end date" name ="to" id="to" autocomplete="off" />
							</div>
						</div>
					</div>
					<div class="modal-footer bg-secondary">
						<button type="submit" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="slide-right" id="filter"><i class="fa fa-search"></i> &nbsp SEARCH</button>
					</div>
			</div>
		</div>
	</div>
</form>

	<script src="<?php echo base_url()?>assets/scripts/Rep_MedRecReport/admdisclog.js"></script>
	<script type="text/javascript">
	$(document).ready(function()
	{		
    $('#DateSearch').modal({backdrop:"static"});
	});

	</script>