<form id="frmwardIssue" name="frmwardIssue">
	<div class="modal" id="ModalPharmacyReplenish" role="form">
	<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
			<div class="modal-header" style="cursor: move;">
				<h5 id="rep_modal_title" class="modal-title text-success" >Replenish Drugs and Medicines</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearReplenishModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<label for="dateIssue" class="form-label">Date Issue:</label>
					<div class="input-group mb-3">
					  <input type="datetime-local" name="dateIssue" id="dateIssue"  class="form-control"  aria-label="dateIssue" aria-describedby="dateIssue">
					</div>
					<label for="medicineItem" class="form-medicineItem">Drugs & Medicine:</label>
					<div class="input-group mb-3">
					  <input type="text" name="medicineItem" readonly id="medicineItem"  class="form-control" placeholder="Drugs and Medicine" aria-label="medicineItem" aria-describedby="medicineItem">
						<a class="btn" id="btnLot"><i class="fa fa-search"></i></a>
					</div>
					<label for="lotno" class="form-label">Lot no:</label>
					<div class="input-group mb-3">
					  <input type="text"  name="lotno" id="lotno" readonly placeholder="Lot no"  class="form-control"  aria-label="lotno" aria-describedby="lotno">
					</div>
					<label for="qtyreq" class="form-label">Quantity Request:</label>
					<div class="input-group mb-3">
						<input type="number" class="form-control" readonly name="qtyreq" id="qtyreq" placeholder="Quantity"/>
					</div>
					<label for="qtyissue" class="form-label">Quantity Issue:</label>
					<div class="input-group mb-3">
						<input type="number" class="form-control" readonly name="qtyissue" id="qtyissue" placeholder="Quantity"/>
					</div>
					<input type="hidden" id="datereq" name="datereq">
					<input type="hidden" id="dmdcomb" name="dmdcomb">
					<input type="hidden" id="dmdctr" name="dmdctr">
					<input type="hidden" id="dmhdrsub" name="dmhdrsub">
					<input type="hidden" id="pricedate" name="pricedate">
					<input type="hidden" id="wardcode" name="wardcode">
					<input type="hidden" id="stockloc" name="stockloc" >
					<input type="hidden" id="stock" name="stock" >
				 </div>
				 </div>
				 </div>
			<div class="modal-footer">
				<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-success float-right"><i class="fa fa-save"></i> Save</button>
						<button class="btn btn-outline-danger btn-md btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i> Close</button>
					</div>
			</div>
		</div>
	</div>
</div>
</form>

    <div class="modal" name="drugIssueModal" id="drugIssueModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" tab-index="-1" role="form">
		<div class="modal-content">
		<div class="modal-header">
		<div class="modal-title">
			<div class="text text-success h4"><i class="fa fa-pills"></i> Issue Drug</div>
		</div>
		</div>
			<div class="modal-body">
				<table id="lotnotbl"  style="cursor:pointer;"class="table table-md table-striped table-bordered  table-hover" width="100%">
					<thead>
						<tr>
							<th width="50px" >Lot No</th>
							<th width="100px">Description(<small>(Generic/Strength/Form/Route)</small>)</th>
							<th  style="text-align:center; vertical-align:middle;" >Price</th>
							<th  style="text-align:center; vertical-align:middle;">Available</th>
							<th  style="text-align:center; vertical-align:middle;">dmdcomb</th>
							<th  style="text-align:center; vertical-align:middle;">dmdctr</th>
							<th  style="text-align:center; vertical-align:middle;">dmhdrsub</th>
							<th  style="text-align:center; vertical-align:middle;">dmdprdte</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"  data-style="zoom-in"><i class="fa fa-close"></i> Close</button>
			</div>
		</div>
	</div>
	</div>