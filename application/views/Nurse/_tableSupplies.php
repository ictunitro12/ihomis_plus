<style>

table#suppliesList.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div id = "tableSupplies" >
    <div class="h4 text text-success"><i class="fa fa-users" ></i>Non-Drugs/ Supplies</div>
	<button id="addReqSup" data-toggle="tooltip" title="" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> </i></button>
		<div class="table-responsive">
		<table id="suppliesList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th></th>
					<th>Tag request</th>
					<th>Item</th>
					<th>Stock Balance</th>
					<th>Reorder Level</th>
					<th>Quantity</th>
					<th>Priority</th>
					<th width="20px"></th>
				</tr>
			</thead>
		</table>
		</div>
</div>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/supplies_stock.js"></script>