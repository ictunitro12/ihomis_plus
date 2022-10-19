
<style>

table#chargesAdjust.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#chargesAdj.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#packageTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<form id = "frmAdj_form" name="frmAdj_form" class="form">
<div class="modal" id="ModalAdjustment" name ="ModalAdjustment" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-xl"  role="dialog" id="modalSize">
	<div class="modal-content">
	<div class="modal-body">
	<h4 class="modal-title text-success"><i class="fa fa-refresh" id="modalAdjIcon"></i> <span id="modalAdjTitle">Add Adjustment</span></h4>
	<br>
	<div class="row">
	<div class="col-md-6" id="selectCostCenter">
	<div class="h5 card-title text text-success"><i class="fa fa-th-list"></i> Details</div>
		<div class="form-row">
			<div class="col-md-4 col-form-label text-default mb-1">
				Log:
			</div>
			<div class="col-md-8">
				<input type="datetime-local" class="form-control form-control-mb"  id="adjDateLog" name="adjDateLog" placeholder ="">
			</div>
			 <div class="col-md-4 col-form-label text-default mb-1">
				Cost Center:
			</div>
			<div class="col-md-8">
				<select  name="adjCostcntr" id="adjCostcntr"  onclick="adjustmentSel(this.value)" class="form-control form-control-md" placeholder="Cost Center">
					<option value="">Cost Centers</option>
					<option value="LABOR">Laboratory</option>
					<option value="RADIO">Radiology</option>
					<option value="PROCE">Procedure</option>
					<option value="PCKPR">Packages</option>
					<option value="RADTH">Radio Theraphy</option>
					<option value="NUCME">Nuclear Medicine</option>
					<option value="DENTA">Dental</option>
					<option value="DERMA">Dermatology</option>
					<option value="OPTHA">Opthalmology</option>
					<option value="PHARM">Pharmacy</option>
					<option value="NEURO">Neurology</option>
					<option value="OPD">Out-Patient Department</option>
					<option value="ER">Emergency Room</option>
					<option value="OR">Operating Room</option>
					<option value="DR">Delivery Room</option>
					<option value="WARD">Ward</option>
					<option value="PERIN">Perinatal</option>
					<option value="CSSR">Central Supply Room</option>
					<option value="PT">Physical Therapy</option>
					<option value="MISCE">Miscellanous</option>
				</select>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
				Item/Procedure:
			</div>
			<div class="col-md-8">
				<input type="hidden" class="form-control form-control-mb" autocomplete="off"  id="adjItemcode" name="adjItemcode">
				<textarea class="form-control form-control-mb mb-1" autocomplete="off" readonly placeholder="Item/Procedure"  id="adjItemdesc" name="adjItemdesc"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
				Unit of Measurement:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb"  autocomplete="off" readonly  id="adjOum" name="adjOum" placeholder="0">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
				Quantity:
			</div>
			<div class="col-md-8">
				<input type="number" class="form-control form-control-mb"  min="0"  autocomplete="off"   id="adjQty" name="adjQty" placeholder="0">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
				Price:
			</div>
			<div class="col-md-8">
				<input type="number" class="form-control form-control-mb"  min="0"  autocomplete="off" id="adjPrice" name="adjPrice" placeholder="0">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
				Amount:
			</div>
			<div class="col-md-8">
				<input type="number" class="form-control form-control-mb"   min="0"  autocomplete="off"  readonly id="adjAmount" name="adjAmount" placeholder="0">
			</div>
	
			<div class="col-md-4 col-form-label text-default mb-1">
				Reference #:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off" readonly id="adjRef" name="adjRef" placeholder ="Reference No">
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
				Subtract/Add:
			</div>
			<div class="col-md-8">
				<select class="form-control form-control-mb" autocomplete="off"  id="adjType" name="adjType">
					<option value="">Select</option>
					<option value="S">Subtract</option>
					<option value="A">Add</option>
				</select>
			</div>
		<input type="hidden" name="adjtypeOfCharge" id="adjtypeOfCharge" >	
		<input type="hidden" name="adjformIden" id="adjformIden" >
		<input type="hidden" name="adjHpercode" id="adjHpercode">
		<input type="hidden" name="adjEnccode" id="adjEnccode">
		<input type="hidden" name="acctNo" id="acctNo">
		</div>
	
	</div>
	
	<div class="col-md-6" id="selectTypeofCharge">
	<div class="h5 card-title text text-success"><i class="fa fa-th-list"></i> Items</div>
                  <select name="typechrge_adj" id="typechrge_adj"  class="form-control form-control-sm"  aria-label="Type of Charge"></select>
                  <hr>
                  <table id="chargesAdjust" style="" class="table table-sm table-hover table-bordered table-condensed" width="100%">
                     <thead>
                        <tr>
                           <th>Code</th>
                           <th>Item</th>
                           <th>Description</th>
                           <th>Unit</th>
                           <th>Amount</th>
                           <th>Lot #</th>
						   <th>Charge Slip #</th>
						   <th>Counter</th>
                        </tr>
                     </thead>
                  </table>
	</div>
	</div>
	</div>
	<div class="modal-footer">
				<div class="btn-group float-right">
					<button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-save"></i> Save</button>
					<button  class="btn btn-outline-danger btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
			    </div>
			</div>
	</div>
	</div>
	</div>
</form>

<form id="frmAdjustDelete" name="frmAdjustDelete" method="post">
	<div class="modal" id="ModalAdjustDelete" name="ModalAdjustDelete" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" >
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5>Are you sure do you want to delete this record?</h5>
			<h4 id="deleteAdjItem" class="text-primary"></h4>
			<input type="hidden" name="adjEnccodeDelete" id="adjEnccodeDelete">
			<input type="hidden" name="adjRefnoDelete" id="adjRefnoDelete">
			<input type="hidden" name="adjchargcodeDelete" id="adjchargcodeDelete">
			<input type="hidden" name="adjitemcodeDelete" id="adjitemcodeDelete">
			<input type="hidden" name="adjchrgDelete" id="adjchrgDelete">
			<input type="hidden" name="deleteAdj" id="deleteAdj" value="delete">
		</div>
		<div class="modal-footer ">
			<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
			<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
		</div>
</form>

	<div class="tab-pane fade" id="adj" role="tabpanel" aria-labelledby="adj-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h4 text text-success"> 
				<i class="fa fa-th-list"></i>
					&nbsp Adjustment/s
			</div>
		</div>
		<div class="col-md-6 mb-2">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type ="button" id = "btnAdjust" title=""  class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i>
					Add Adjustment/s</button>
			   </div>
			 </div>		
		</div>	
		<table id="chargesAdj" style="cursor:pointer"  class="table table-sm table-condensed table-bordered "width="100%">
					<thead>
						<tr>
							<th>Enccode</th>
							<th>Hpercode</th>
							<th>Code</th>
							<th>Item</th>
							<th>Item</th>
							<th>Unit of Measure</th>
							<th>Quantity</th>
							<th>Unit Price</th>
							<th>Amount</th>
							<th width="50px">Type</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
		</table>
	</div>
	

<div class="modal" id="modalAdjustPDF" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			 <div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-file-pdf-o"></i> Discount</h4>
					<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
				   <iframe id="AdjustPDF" type="application/pdf" frameborder="2" width="100%" height="650px"></iframe>
				</div>
			 </div>
		  </div>
	   </div>
	   
	<div class="modal" id="modalCostCenter" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			 <div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-pointer"></i> Cost Center</h4>
					<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
				 
					<div class="col-md-12">
				 <select  name="adjCostcntr" id="adjCost"  onchange="adjustmentSel(this.value)" class="form-control form-control-md" placeholder="Cost Center">
					<option value="">Cost Centers</option>
					<option value="LABOR">Laboratory</option>
					<option value="RADIO">Radiology</option>
					<option value="PROCE">Procedure</option>
					<option value="PCKPR">Packages</option>
					<option value="RADTH">Radio Theraphy</option>
					<option value="NUCME">Nuclear Medicine</option>
					<option value="DENTA">Dental</option>
					<option value="DERMA">Dermatology</option>
					<option value="OPTHA">Opthalmology</option>
					<option value="PHARM">Pharmacy</option>
					<option value="NEURO">Neurology</option>
					<option value="OPD">Out-Patient Department</option>
					<option value="ER">Emergency Room</option>
					<option value="OR">Operating Room</option>
					<option value="DR">Delivery Room</option>
					<option value="WARD">Ward</option>
					<option value="PERIN">Perinatal</option>
					<option value="CSSR">Central Supply Room</option>
					<option value="PT">Physical Therapy</option>
					<option value="MISCE">Miscellanous</option>
				</select>
			</div>
			 </div>
			 		  <div class="modal-footer bg-secondary"></div>
		  </div>

	   </div>
	   </div>
	<script src="<?php echo base_url()?>assets/scripts/billing/adjustment.js"></script>