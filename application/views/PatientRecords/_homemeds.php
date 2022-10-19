<form id="frmHomeMeds" name ="frmHomeMeds">
   <div class="modal" id="modalHomeMeds" name="modaloutCharge" role="form">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
         <div class="modal-content card-accent-success" >
            <div class="modal-body " >
               <div class="clearfix">
				   <h4 class="text-success float-left"><i class="fa fa-exchange "></i> Home Medication/s</h4>
				   <a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
               </div>
			   <div class="hr clearfix card card-accent-success"></div>
                <div class="clearfix">
					<div class="row">
					 <div class="col-md-9 float-left">
						<h5 class="clearfix text text-success"><i class="fa fa-th-list"></i> Item List</h5>
					 </div>
					<div class="col-md-3">
					<button type="button" id="btnMeds_add" title="" class="btn btn-outline-success btn-md mb-2 float-right" data-style="zoom-in"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
						<!--i type="button" id="btnOcharge_add"  class="fa fa-plus fa-2x text-success"></i -->
					</div>
				  </div>
				  </div>
				  	<hr class="card card-accent-success">
				      <div class="row">
					   <div class="col-md-12">
                     <div class="text-success  ">
						<table id="homeMedslist" style="cursor:pointer" class="table" width="100%">
							<thead>
								<tr>
                                    <th></th>
                                    <th></th>
									<th width="50%">Drug and Medicine</th>
									<th width="50%">Instructions</th>
                                    <th></th>
                                    <th></th>
								</tr>
							</thead>
						</table>						
                     </div>
                     </div>
                     </div>
				<div class="hr clearfix card card-accent-success"></div>
					 <div class="clearfix">
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

<div class="modal" id="modalDrugsItem" name="modalDrugsItem" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered dialog modal-lg" role="dialog">
      <div class="modal-content">
         <div class="modal-body">
		 <div class="h5 card-title text text-success"><i class="fa fa-th-list"></i> Items</div>
                <!--select name="chrgtype" id="chrgtype"  class="form-control form-control-sm  mb-2"  aria-label="Type of Charge"></select -->
                <div class="w-100 p-2"></div>
				<!-- br></br -->	
                  <table id="selectDrugsItemTable" style ="cursor:pointer;"class="table table-sm table-hover table-bordered table-condensed" width="100%">
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
				<button id="selectDrugsItems" class="btn btn-outline-success btn-md"><i class="fa fa-save"></i> Select</button>
				<button  class="btn btn-outline-danger btn-md" data-dismiss="modal" id="closeDrugsItems"><i class="fa fa-close"></i> Close</button>
			</div>
		</div>
      </div>
   </div>
</div>

<form id="frmDeleteHomeMeds" name="frmDeleteDiag" method="post">
	<div class="modal fade" id="ModalHomeMedsDelete" name="ModalOutChargesDelete" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<h5 id="deleteHomeMedsDesc"></h5>
			<input type="hidden" name="medItemCtr" id="medItemCtr">
			<input type="hidden" name="medItemCode" id="medItemCode">
			<input type="hidden" name="medItemEnccode" id="medItemEnccode">
			<input type="hidden" name="medItemDesc" id="medItemDesc">
		</div>
		<div class="modal-footer ">
		<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
		<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
	</div>
</form>

<form id="frmEditHomeMeds" name="frmEditHomeMeds">
	<input type="hidden" name="editHomeMedsEnccode" id="editHomeMedsEnccode">
	<input type="hidden" name="editHomeMedsCtr" id="editHomeMedsCtr">
	<input type="hidden" name="editHomeMedsItemCode" id="editHomeMedsItemCode">

	<div class="modal fade" id="modalEditHomeMeds" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<h2 class="modal-title text-success"><i class="fa fa-medkit" aria-hidden="true"></i> Edit Home Medication</h2>
					<br>
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">Item Description:</div>
						<div class="col-md-8 col-form-label text-default mb-1" id="editHomeMedsDesc"></div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Instructions:
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb" id="editHomeMedsInstruction" name="editHomeMedsInstruction">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" name="btnEditHomeMedsSave" id="btnEditHomeMedsSave" class="btn btn-outline-success btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>