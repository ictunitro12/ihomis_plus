<style>

table#deliver_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
	<div class="clearfix">
	  <div class="h4 text-success float-left"><i class="fa fa-cart-arrow-down"></i>Purchase Request/s</div>
	  <button type="button" onclick="addDeliveries();" class="btn btn-outline-success btn-md  float-right mb-1"><i class="fa fa-plus"></i></button>
	</div>
	<table id="deliver_tbl"  style="cursor:pointer;"class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
		<thead>
			<tr>
				<th style="text-align:center; vertical-align:middle;" width="10%">No</th>
				<th style="text-align:center; vertical-align:middle;" width="7%">Date</th>
				<th style="text-align:center; vertical-align:middle;" width="50%">Item</th>
				<th style="text-align:center; vertical-align:middle;" width="5%">Item form</th>
				<th style="text-align:center; vertical-align:middle;" width="5%">Quantity</th>
				<th style="text-align:center; vertical-align:middle;" width="20%">Status</th>
				<th style="text-align:center; vertical-align:middle;" width="5%">Transaction Type</th>
				<th style="text-align:center; vertical-align:middle;" width="5%"></th>
			</tr>
		</thead>
	</table>
	<script src="<?php echo base_url()?>assets/scripts/pharmacy/purchase.js"></script>