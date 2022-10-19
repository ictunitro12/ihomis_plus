<form id="frmDeleteSup" name="frmDeleteSup" method="post">
	<div class="modal" id="deleteSupModal" name="deleteSupModal" tabindex="-1" role="form">
		<input type="hidden" name="delsupDoco" id="delsupDoco">
		<input type="hidden" name="delsupformIden" id="delsupformIden">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>				
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">						
						<button type="submit"  class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>					
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


<form name="frmSupOrder" id="frmSupOrder" method="post">
<div class="modal" id="DocOrdSuppModal"  role="dialog">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="dialog">
	<div class="modal-content card-accent-success">
	<div class="modal-body">
	<h4 class="modal-title text-success">	<i class="fa fa-bar-chart"></i>
&nbsp Supplies</h4>
<hr class="border-success"> 
	<h5 class="text-success"><i class="fa fa-list"></i> Details</h5>
	<div class="form-row">	
			<div class="col-md-1 col-form-label  text-default mb-1">
				Ordered:
			</div>
			<div class="col-md-5 ">
				<input type="datetime-local" id="dateSupOrd" name="dateSupOrd"   class="form-control form-control-md" autocomplete="off"  >
			</div>	
			
			<div class="col-md-1 col-form-label  text-default mb-1">
			   Posted:
			</div>
			<div class="col-md-5">
				<input type="datetime-local"  id="dateSupPost" name="dateSupPost" class="form-control form-control-md" autocomplete="off"  >
			</div>	
			<div class="col-md-1 col-form-label  text-default mb-1">
				Doctor:
			</div>
			<div class="col-md-5">
				<select name="selSup_doc" id="selSup_doc"  class="form-control form-control-md">
				<option value="">Select</option>
				</select>
			</div>	
	
			<div class="col-md-1 col-form-label  text-default mb-1">
				Entered:
			</div>
			
			<div class="col-md-5">
			<input type="text" id="enteredBySup" name="enteredBySup"  value="<?php echo  $this->ion_auth->user()->row()->username;?>" class="form-control form-control-md" autocomplete="off" placeholder="Enter by" readonly >
			</div>	
		
		<div class="col-md-1 col-form-label  text-default mb-1">
				Category:
			</div>
		<div class="col-md-5">
		
				<select name="selsup_supMajor" id="selsup_supMajor" class="form-control form-control-md">
				
				</select>
				
		</div>
		<div class="col-md-1 col-form-label  text-default mb-1">
				Verified:
		</div>
		<div class="col-md-5">
			<select name="selEmpsup_emp" id="selEmpsup_emp"  class="form-control form-control-md">
					<option value="">SELECT</option>
	       </select>
		</div>
		<div class="col-md-1 col-form-label  text-default mb-1">
				Subcategory:
			</div>
		<div class="col-md-5">
		<select name="selsup_supSub" id="selsup_supSub"  class="form-control form-control-md"></select>
				
		</div>		
	</div>
	<hr class="bg-green">
	<h5 class="text-success"><i class="fa fa-list"></i> List of Supplies</h5>
	
	<table id="supplyList" class="table table-sm  table-bordered table-condensed table-hover "  width="100%"> 
		<thead >
			<tr>
			    <th width ="20px"></th>
				<th width ="100px">Description</th>
				<th width ="30px">Priority</th>
				<th width ="30px">Qty</th>
				<th width ="30px">Remarks</th>
			</tr>
		</thead>
		
	</table>
	<input type="hidden" name="supDoco" id="supDoco">
	<input type="hidden" name="supEnccode" id="supEnccode">
	<input type="hidden" name="supHpercode" id="supHpercode" >
	<input type="hidden" name="supformIden" id="supformIden">
	</div>
	<div class="modal-footer">
	<div class="btn-group">
	 <button type="submit" class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-send"></i>&nbsp Submit</button>
	 <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
	</div>
	</div>
	
	</div>
	</div>
	
</div>
</form>
