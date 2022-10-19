<style>
th,td {
    white-space: nowrap;
}
</style>
	<div class="clearfix">
	  <div class="h4 text-success float-left"><i class="fa fa-cart-arrow-down"></i> Purchase Request/s</div>
	  <button onclick="addRequest();" type="button" id="btnReqAdd" class="btn btn-outline-success float-right mb-1"><i class="fa fa-plus"></i></button>
	</div>
	<table id="request_tbl"  style="cursor:pointer;" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
		<thead>
			<tr>
				<th>Date</th>
				<th>Request Code</th>
				<th>Name</th>
				<th>Location</th>
				<th></th>
			</tr>
		</thead>
	</table>
<script src="<?php echo base_url()?>assets/scripts/transaction/transaction.js"></script>
<script src="<?php echo base_url()?>assets/scripts/transaction/request.js"></script>