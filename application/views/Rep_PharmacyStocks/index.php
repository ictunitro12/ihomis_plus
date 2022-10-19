<div class=" w-auto card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp<?php echo $header; ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" class="btn btn-success pull-right btn-md"  data-style="zoom-in" data-toggle="modal" title="PDF" id="PDFbtn">
						<i class="fa fa-file-pdf-o"></i>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body">
		<table id="StocklistTbl" class="table table-sm table-hover  table-bordered table-condensed table-striped">
			<thead>
				<tr class="thead-dark">
					<th width="80px">Lot number</th>
					<th>Brand name</th>
					<th>Description</th>
					<th>Stock balance</th>
					<th>Up price</th>
					<th>sell price</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form method="post">
	<div class="modal" id="stoksModal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
					<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal">
						<i class="fa fa-close"></i>
					</button>
				</div>
				<div class="modal-body">
					<embed id="printstocks" type="application/pdf" frameborder="2" width="100%" height="800px">
				</div>
				<div class="modal-footer bg-secondary">
				</div>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function() {
		getStockList();
	});

	function getStockList() {
		$.ajax({
			url: baseURL + "Rep_Pharmacy_stocks/stocks_list",
			type: "POST",
			data: "JSON",
			dataType: "JSON",
			processData: false,
			contentType: false,
			cache: false,
			async: true,
			success: function(data, response) {
				$('#PDFbtn').on('click', function() {
					$('#stoksModal').modal('show');
					var x = document.getElementById("printstocks");
					x.src = baseURL + "Rep_Pharmacy_stocks/PharmacyStocksPdf";
				});
				var table = $("#StocklistTbl").DataTable({
					data: data,
					destroy: true,
					className: 'table table-sm table-condensed table-bordered',
					rowsGroup: [1, 2],
					buttons: [{
						extend: 'pdf',
						text: 'Save current page',
						exportOptions: {
							modifier: {
								page: 'current'
							}
						}
					}],
					columns: [{
							"data": "lotno",
							render: function(data, type, row) {
								return "<small>" + data + "</small>";
							}
						},
						{
							"data": "brandname",
							render: function(data, type, row) {
								if (data == null || data == '') {
									return '<center><h7>' + 'Generic' + '</h7></center>';
								} else {
									return '<center><h7>' + data + '</h7></center>';
								}
							}
						},
						{
							"data": "description"
						},
						{
							"data": "stockbal"
						},
						{
							"data": "dmduprice"
						},
						{
							"data": "dmselprice"
						}
					],
					columnDefs: [{
							targets: [1, 2],
							className: 'align-middle',
						},
						{
							targets: [0, 1, 3, 4, 5],
							className: 'text-center',
						},
						{
							targets: [4],
							visible: false,
						}
					],

				});
			},
			error: function(response) {
				alert("Error:Please try again!");
			}
		});
		return false;
	}
</script>