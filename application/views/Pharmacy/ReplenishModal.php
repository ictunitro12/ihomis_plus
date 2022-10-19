<style>

table#drugsAndMedicine_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#medSupplies_tbl_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<form name="replenish" id="replenish" method="post">
<div class="modal fade" id="replenishModal"  role="dialog">
	<div class="modal-dialog modal-dialog modal-xl" role="dialog">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white">	<i class="fa fa-bar-chart"></i>
&nbsp REPLENISH</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
	<div class="col-md-12">
<!-- 	<div class="h3 text text-success"><i class="fa fa-user"></i>&nbsp<?php echo $header;?> </div> -->
	<ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
	  <li class="nav-item">
		<a class="nav-link text text-success active" id="drugsAndMedicine-tab" data-toggle="tab" href="#drugsAndMedicine" role="tab" aria-controls="drugsAndMedicine" aria-expanded="true"><i class="fa fa-bed fa-2x"></i>&nbsp DRUGS & MEDICINES</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link text text-primary" id="medSupplies-tab" data-toggle="tab" href="#medSupplies" role="tab" aria-controls="medSupplies"><i class="fa fa-stethoscope  fa-2x"></i>&nbspMEDICAL SUPPLIES</a>
	  </li>
	</ul>
	
	
		<div class="tab-content" id="myTabContent">
	  	<div class="tab-pane fade show active" id="drugsAndMedicine" role="tabpanel" aria-labelledby="drugsAndMedicine-tab">
		<br>
			 <table id="drugsAndMedicine_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
				<thead class="thead-dark">
					<tr>
						<th>REQUEST FROM</th>
						<th>WARD NAME</th>
						<th>ITEM DESCRIPTION</th>
						<th>DATE REQUESTED</th>
						<th>TIME REQUESTED</th>
						<th>QTY OF ITEMS</th>
						<th>TOTAL QTY OF ITEMS</th>
						<th>QTY OF AVAILABLE</th>
						<th>LATEST QTY OF ITEM ISSUED</th>
						<th>QTY ISSUE</th>
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
					</tr>
				</tfoot>
			</table>
	  </div>
	  <div class="tab-pane fade" id="medSupplies" role="tabpanel" aria-labelledby="medSupplies-tab">
		<br>
			<table id="medSupplies_tbl_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
				<thead class="thead-dark">
					<tr>
						<th>REQUEST FROM</th>
						<th>WARD NAME</th>
						<th>ITEM DESCRIPTION</th>
						<th>DATE REQUESTED</th>
						<th>TIME REQUESTED</th>
						<th>QTY OF ITEMS</th>
						<th>TOTAL QTY OF ITEM ISSUED</th>
						<th>LATEST QTY OF ITEM ISSUED</th>
						<th>QTY OF AVAILABLE</th>
						<th>QTY ISSUE</th>
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
				</tr>
				</tfoot>
			</table>
	  </div>
	</div>
	</div>
	</div>
	<div class="modal-footer bg-secondary">
	<button type="submit" class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-send"></i>&nbsp SEND</button>
	 <button class="btn btn-danger  btn-square btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CLOSE</button>
	</div>
	
	</div>
	</div>
		<!-- <input type="hidden" name="supEnccode" id="supEnccode" value='<?php echo $this->uri->segment(3)."/".$this->uri->segment(4)."/".$this->uri->segment(5);?>'>
	<input type="hidden" name="supHpercode" id="supHpercode" value='<?php echo $this->uri->segment(6);?>'>
	<input type="hidden" name="supformIden" id="supformIden" value='insert'> -->
</div>
</form>