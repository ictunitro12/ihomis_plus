<style>
td.details-control {
    background: url('https://www.datatables.net/examples/resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.details td.details-control {
    background: url('https://www.datatables.net/examples/resources/details_close.png') no-repeat center center;
}
</style>
<div class="card card-accent-success">
<div class="card-body">
<div class="text-success h5"><i class="fa fa-pills "></i> Drugs and Medicines</div>
<div class="row p-2">
<div class="col-md-12">
<label class="text-success">Type of Account:</label>
<select name="type" id="type" class="form-control">
</select>
</div>
</div>
<div class="table-responsive">	
<table id="lotnotbl"  style="cursor:pointer;" class="table table-md table-striped table-bordered  table-hover table-warning" width="100%">
	<table id="lotnotbl"  style="cursor:pointer;" class="table table-md table-striped table-bordered  table-hover" width="100%">
		<thead>
			<tr>
				<th width="5%"></th>
				<th width="10%">Lot No</th>
				<th width="50%">Description</th>
				<th  width="10%" style="text-align:center; vertical-align:middle;">Price</th>
				<th width="10%" style="text-align:center; vertical-align:middle;" >Stock</th>
				<th width="1%" style="text-align:center; vertical-align:middle;" ></th>
				<th width="1%" style="text-align:center; vertical-align:middle;" ></th>
				<th width="1%" style="text-align:center; vertical-align:middle;" ></th>
				<th width="50px">Lot No</th>
				<th width="100px">Description(<small>(Generic/Strength/Form/Route)</small>)</th>
				<th  style="text-align:center; vertical-align:middle;">Price</th>
				<th  style="text-align:center; vertical-align:middle;" >Stock</th>
				<th  style="text-align:center; vertical-align:middle;" ></th>
				<th  style="text-align:center; vertical-align:middle;" ></th>
				<th  style="text-align:center; vertical-align:middle;" ></th>
			</tr>
		</thead>
	</table>
</div>
</div>
</div>