<style>

table#nonDrugsLib_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#class1Lib_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#class2Lib_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#class2HLib_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="ModalPharmacySuppliesStock" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Non Drugs</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearSuppliesStockModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row">
				<div class="col-md-12"></div>
			</div>
			<div class="modal-body">
				<ul class="nav nav-tabs nav-justified" id="supplies_stock_tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="nonDrugsLib-tab" data-toggle="tab" href="#nonDrugsLib" role="tab" aria-controls="nonDrugsLib" aria-expanded="true">NON-DRUGS LIBRARY</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="class1Lib-tab" data-toggle="tab" href="#class1Lib" role="tab" aria-controls="class1Lib">CLASS 1 LIBRARY</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="class2Lib-tab" data-toggle="tab" href="#class2Lib" role="tab" aria-controls="class2Lib">CLASS 2 LIBRARY</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="class2HLib-tab" data-toggle="tab" href="#class2HLib" role="tab" aria-controls="class2HLib">CLASS 2 H LIBRARY</a>
					</li>
				</ul>
				<div class="tab-content">
				
					<!-- NON DRUGS LIBRARY -->
					<div class="tab-pane fade show active" id="nonDrugsLib" role="tabpanel" aria-labelledby="nonDrugsLib-tab">
						<table id="nonDrugsLib_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover">
							<thead class="thead-dark">
								<tr>
									<th>MAJOR CATEGORY CODE</th>
									<th>DESCRIPTION</th>
									<th>DATE AS OF</th>
								</tr>
							</thead>
								<tbody></tbody>
							<tfoot>
							</tfoot>
						</table>
					</div>
					
					<!-- CLASS 1 LIBRARY -->
					<div class="tab-pane fade" id="class1Lib" role="tabpanel" aria-labelledby="class1Lib-tab">
						<table id="class1Lib_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="width: 100%;">
							<thead class="thead-dark">
								<tr>
									<th>MAJOR CATEGORY CODE</th>
									<th>SUB-1 CATEGORY CODE</th>
									<th>DESCRIPTION</th>
								</tr>
							</thead>
								<tbody></tbody>
							<tfoot>
							</tfoot>
						</table>
					</div>
					
					<!-- CLASS 2 LIBRARY -->
					<div class="tab-pane fade" id="class2Lib" role="tabpanel" aria-labelledby="class2Lib-tab">
						<table id="class2Lib_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="width: 100%;">
							<thead class="thead-dark">
								<tr>
									<th>SUB-1 CATEGORY</th>
									<th>SUB-2 CATEGORY CODE</th>
									<th>STOCK NO.</th>
									<th>DESCRIPTION</th>
									<th>UNIT OF MEASUREMENT CODE</th>
									<th>STOCK BALANCE</th>
									<th>PHARMACEUTICAL?</th>
								</tr>
							</thead>
								<tbody></tbody>
							<tfoot>
							</tfoot>
						</table>
					</div>
					
					<!-- CLASS 2 H LIBRARY -->
					<div class="tab-pane fade" id="class2HLib" role="tabpanel" aria-labelledby="class2HLib-tab">
						<table id="class2HLib_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="width: 100%;">
							<thead class="thead-dark">
								<tr>
									<th>DESCRIPTION</th>
									<th>UNIT OF MEASUREMENT</th>
									<th>SELLING PRICE</th>
									<th>DATE AS OF</th>
								</tr>
							</thead>
								<tbody></tbody>
							<tfoot>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
			<div class="modal-footer bg-secondary"></div>
		</div>
	</div>
</div>
<!-- MARVIN : END : RETURN MODAL -->