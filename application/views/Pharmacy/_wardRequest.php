<style>

table#wardRequest_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<div class="h4 text-success"><i class="fa fa-thumbs-up"></i> Ward Requests</div>
	<table id="wardRequest_tbl" style="cursor:pointer;"class="table table-sm  table-bordered table-condensed table-hover" width="100%">
		<thead>
			<tr>
				<th style="text-align:center; vertical-align:middle;" >Ward</th>
				<th style="text-align:center; vertical-align:middle;" >Item Description</th>
				<th style="text-align:center">Datetime</th>
				<th style="text-align:center">Request</th>
				<th style="text-align:center">Issue</th>
				<th style="text-align:center">Status</th>
				<th style="text-align:center">Received</th>
				<th style="text-align:center"></th>
				
			</tr>
		</thead>
	</table>
	
<script src="<?php echo base_url()?>assets/scripts/transaction/request.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/ward_issuance.js"></script>