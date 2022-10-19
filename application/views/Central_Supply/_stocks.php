<style>

table#stock_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<div class="clearfix">
		<div class="h4 text-success float-left"><i class="fa fa-pie-chart"></i>&nbsp Medical Supplies</div>
		<div class="btn-group float-right mb-1">
	  		  <button type="button" id="btnSearchDrug" class="btn btn-outline-success btn-md"><i class="fa fa-plus"></i> Add Account</button>
			 <button type="button" id="btnAccount" class="btn btn-outline-success btn-md"><i class="fa fa-calculator"></i> &nbsp Select Account</button>
		</div>
	</div>
	<table id="stock_tbl"  style="cursor:pointer;"class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
	<thead>
	<tr>
		<th rowspan="2">Code</th>
		<th rowspan="2">Name</th>
		<th rowspan="2">Description</small>)</th>
		<th rowspan="2">Pharmaceutical</th>
		<th  style="text-align:center; vertical-align:middle;" colspan="3">Stock</th>
		<th rowspan="2"></th>
	</tr>
	<tr>
		<th>Stock</th>
		<th>Begin</th>
		<th>Reorder</th>
	</tr>
	</thead>
	</table>

	

	<div class="modal" id="modalItemAccount" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="h4 text-success"><i class="fa fa-pills"></i> Item Details</div>
				<div class="box-body box-profile mb-2">
					<div class="h5 profile-username text-center text-success" id="drugname"></div>
					<div class="h6 text-center text-success" id="hpercode"></div>
					<ul class="list-group">
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-pills"></i>&nbsp Code:</b>
							<a class="pull-right text text-success" id="code">N/A</a>
							<input type="hidden"  id="cl1comb">
							<input type="hidden"  id="cl2comb">
							<input type="hidden"  id="cl2code">
							<input type="hidden"  id="formcode">
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-address-book"></i>&nbsp Name:</b>
							<a class="pull-right text text-success" id="itemname">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp Beginning:</b>
							<a class="pull-right text text-success" id="begin">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-bar-chart"></i>&nbsp Stock balance:</b>
							<a class="pull-right text text-success" id="stock">N/A</a>
						</li>
					</ul>
				</div>
				<div class="clearfix">
					<h5 class="text-success float-left"><i class="fa fa-list"></i>&nbsp List/s</h4>
					<button type="button" id ="btnAddDrug" class="btn btn-outline-success mb-2 float-right"><i class="fa fa-plus"></i> Add</button>
				</div>
				<table id="drugaccTbl" class="table table-sm table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th>Date asof</th>
							<th>Itemcode</th>
							<th>Unit Price</th>
							<th>Selling</th>
							<th>Stock </th>
							<th>Beginning</th>
							<th>Expiration</th>
							<th>Remarks</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
			</div>
		</div>
	</div>
</div>

<form name="frmItemAccount"id="frmItemAccount">
<div class="modal" id="modalItemAcc" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="h4 text-success"><i class="fa fa-syringe"></i> Supplies </div>
				<div class="row">
			
					<div class="col-md-3 mb-1">
						<label>Beginning:</label>
					</div>
					<div class="col-md-9 mb-1">
						<input type="number" name="itembegin" id="itembegin" class="form-control" disabled placeholder ="Beginning Balance">
					</div>
					<div class="col-md-3 mb-1">
						<label>Available Stock:</label>
					</div>
					<div class="col-md-9 mb-1">
						<input type="number" name="itemstock" id="itemstock" class="form-control" disabled placeholder ="Stock Balance">
					</div>
					<div class="col-md-3 mb-1">
						<label>Unit price:</label>
					</div>
					<div class="col-md-9 mb-1">
						<input type="number" name="itemuprice" id="itemuprice" class="form-control" placeholder ="Unit Price">
					</div>
					<div class="col-md-3 mb-1">
						<label>Selling price:</label>
					</div>
					<div class="col-md-9 mb-1">
						<input type="number" name="itemsell" id="itemsell" class="form-control" placeholder ="Selling Price">
					</div>
					<div class="col-md-12 mb-1">
						<hr class="text-muted"></hr>
					</div>
					<div class="col-md-3 mb-1">
						<label>Itemcode:</label>
					</div>
					<div class="col-md-9 mb-1">
						<input type="text" name="itemcode" id="itemcode" class="form-control" placeholder ="Itemcode/Serial">
					</div>
					<div class="col-md-3 mb-1">
						<label>Expiry date:</label>
					</div>
					<div class="col-md-9 mb-1">
						<input type="date" name="expiry" id="expiry" class="form-control" >
					</div>
					<div class="col-md-12">
						<label>Remarks:</label>
						<textarea type="text" name="remarks" id="remarks" placeholder='Remarks' class="form-control"></textarea>
					</div>
				</div>
				<input type="hidden" name="cl2comb" id="itemcl2comb">
				<input type="hidden" name="itemacct" id="itemacct">
				<input type="hidden" name="itemucode" id="itemucode">
				<input type="hidden" name="cl2dteas" id="cl2dteas">
				<input type="hidden" name="formiden" id="formiden">
			</div>
			<div class="modal-footer">
				<div class="btn-group">
					<button type="submit"  class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> Save</button>
					<button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>
</form>


<form name="frmNewPrice" id="frmNewPrice">
        <div class="modal reset" id="modalNewPrice"  name="modalNewPrice" role="dialog" style="overflow: auto;">
            <div class="modal-dialog modal-dialog-centered modal-md" role="dialog" style="overflow: auto;">
                <div class="modal-content">
                    <div class="modal-header card-accent-success">
                        <h5 class="modal-title text-success" id="drugName"><i class="fa fa-calculator"></i>&nbsp New
                            price</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3 mb-1">
                                Enter new price:
                            </div>
                            <div class="col-md-9">
							<input type="hidden" name="cl2comb" id="newitemcl2comb">
							<input type="hidden" name="itembegin" id="newitembegin">
							<input type="hidden" name="itemstock" id="newitemstock">
							<input type="hidden" name="itemsell" id="newitemsell">
							<input type="hidden" name="itemcode" id="newitemcode">
							<input type="hidden" name="itemacct" id="newitemacct">
							<input type="hidden" name="itemucode" id="newitemucode">
							<input type="hidden" name="itemuprice" id="newitemuprice">
							<input type="hidden" name="expiry" id="newexpiry">
							<input type="hidden" name="cl2dteas" id="newcl2dteas">
                                <span class="small text-primary" id="oldprice"></span>
                                <input type="number" class="form-control form-control-lg mb-1" autocomplete="off"
                                    id="newprice" name="newprice" placeholder="Enter Price">
                            </div>
                            <div class="col-md-3">
                                Remarks:
                            </div>
                            <div class="col-md-9">
                                <textarea type="number" class="form-control form-control-lg mb-1" autocomplete="off"
                                    id="newremarks" name="newremarks" placeholder="Remarks"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer ">
                        <div class="btn-group float-right">
                            <button  type ="submit" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i
                                    class="fa fa-save"></i> Save</button>
                            <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/supplies_stock.js" ></script>