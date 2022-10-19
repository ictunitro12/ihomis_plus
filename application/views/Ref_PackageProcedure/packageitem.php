<style>
table#ProcedurePackageItemsTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
	<input type="hidden" value="<?php echo $package->packcode;?>" id="packagecode" name="packagecode"/>
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto	">
					<div class="h3 text text-success"> 
						<button onclick="BackProcedurePackage()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Go Back" data-toggle="tooltip"><i class="fa fa-arrow-left"> </i>Go Back
						</button>
						&nbsp;<i class="fa fa-th-list"></i>
						&nbsp<?php echo $header;?>
						&nbsp <small><?php echo $subheader;?></small>
					</div>
				</div>
				
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button onclick="AddProcedurePackage()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Items" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Items
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="ProcedurePackageItemsTable" class="table table-sm table-striped  table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr class="">
						<th>Type</th>
						<th>Description</th>
						<th>Quantity</th>
						<th>Action</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>

	<form id="frmPackProcCharge" name ="frmPackProcCharge">
		<div class="modal fade" id="newPackProcItemModal" tabindex="-1" role="form">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog" >
				<div class="modal-content card-accent-success">
					<div class="modal-header">
						<h4 class="text-success float-left"><i class="fa fa-exchange "></i> Add Package Item/s</h4>
						<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label for="chrgtype" class="col-sm-2 col-form-label">Type of Charge</label>
							<div class="col-sm-10">
								<select class="form-control form-control-sm" id="chrgtype"></select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-9 float-left">
								<h5 class="clearfix text text-success"><i class="fa fa-th-list"></i> Item List</h5>
							</div>
							<div class="col-md-3">
								<button type="button" id="btnCharges_add" title="" class="btn btn-outline-success btn-md mb-2 float-right" data-style="zoom-in"><i class="fa fa-plus" aria-hidden="true"></i> Add Charge/s</button>
							</div>
						</div>
						<table id="chargePackProclist" style="cursor:pointer" class="table" width="100%">
								<thead>
									<tr>
										<th width="5%" ></th>
										<th width="5%"></th>
										<th width="35%">Description</th>
										<th width="20%">Unit Price</th>
										<th width="15%">Qty</th>
										<th width="20%">Amount</th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th width="5%"></th>
										<th width="5%"></th>
										<th width="35%"align="float-right" class ="h4 text text-success" > Grand Total :</th>
										<th width="20%"></th>
										<th width="15%" > </th>
										<th width="20%"align="left" class ="h4 text text-success Gtotal" id="GTotal"></th>
										<th></th>
										<th ></th>
										<th ></th>
										<th></th>
										<th ></th>
										<th></th>
									</tr>
								</tfoot>
							</table>

					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button id="saveProcCharges" class="btn btn-outline-success btn-md" type="submit"><i class="fa fa-save"></i> Save</button>
							<button  class="btn btn-outline-danger btn-md" data-dismiss="modal" id="closeProcCharges"><i class="fa fa-close"></i> Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<div class="modal" id="modalProcChargeType" name="modalProcChargeType" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered dialog modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
				<div class="h5 card-title text text-success"><i class="fa fa-th-list"></i> Items</div>
						<table id="chargesProcPackage" style ="cursor:pointer;"class="table table-sm table-hover table-bordered table-condensed" width="100%">
							<thead>
								<tr>
								<th>Code</th>
								<th>Item</th>
								<th>Description</th>
								<th>Unit</th>
								<th>Amount</th>
								<th>Lotno</th>
								<th>Stocks</th>
								<th>Expiry</th>
								<th></th>
								</tr>
							</thead>
						</table>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button id="selectProcCharge" class="btn btn-outline-success btn-md"><i class="fa fa-check"></i> Select</button>
						<button  class="btn btn-outline-danger btn-md" data-dismiss="modal" id="closeSelectProcCharges"><i class="fa fa-close"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form name="frmDeleteProcPackageItem" id="frmDeleteProcPackageItem">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletechrgcode" id="deletechrgcode">
		<input type="hidden" name="deleteitemcode" id="deleteitemcode">
		<input type="hidden" name="deletepackcode" id="deletepackcode">
		<div class="modal fade" id="DeleteProcPackageItemModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<h3 class="text-white"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Package Item</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
                        <h5 id="deletepackagedesc"></h5>
					</div>
					<div class="modal-footer bg-secondary">
						<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form name="frmPackageProcedureItem"   id="frmPackageProcedureItem">
		<div class="modal fade" id="ModalAddPackageProcedureItem" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
            <input type="hidden" name="oldpackcode" id="oldpackcode">
			<input type="hidden" name="olditemcode" id="olditemcode">
			<input type="hidden" name="oldchargecode" id="oldchargecode">
			<div class="modal-dialog modal-dialog-centered " role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $header;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-4 col-form-label text-default mb-1">Type of Charge:</div>
							<div class="col-md-8">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="itemChargeTypeDesc" name="itemChargeTypeDesc" placeholder ="Package Item" readonly>
							<select class="form-control form-control-mb" id="itemChargeType" name="itemChargeType">
    						</select>
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Item:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="packageItem" name="packageItem" placeholder ="Package Item" readonly>
							</div>	
							<div class="col-md-4 col-form-label text-default mb-1">Quanity:</div>
							<div class="col-md-8">
								<input type="number" class="form-control form-control-mb" autocomplete="off"   min = "1"  pattern="[0-9]" id="packageQty" name="packageQty" placeholder ="Quantity">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</form>
	<script src="<?php echo base_url()?>assets/scripts/ref_package_procedure/packageitem.js"></script>
