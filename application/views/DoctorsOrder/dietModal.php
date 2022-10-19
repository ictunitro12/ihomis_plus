<form name="frmDietOrder" id="frmDietOrder" method="post">
<div class="modal fade" id="DocOrdDietModal"  role="form">
	<div class="modal-dialog modal-dialog-centered modal-md" role="form">
	<div class="modal-content">
	<div class="modal-body">
	<div class="text text-success h4"><i class="fa fa-utensils"></i> Dietary</div>
	<div class="form-row">	
			<div class="col-md-2 col-form-label  text-default mb-1">
				Order:
			</div>
			<div class="col-md-10 ">
				<input type="datetime-local" id="dateDietOrd" name="dateDietOrd" class="form-control form-control-md" autocomplete="off"  >
			</div>	
			
			<div class="col-md-2 col-form-label  text-default mb-1">
			   Posted:
			</div>
			<div class="col-md-10">
				<input type="datetime-local"  id="dateDietPost" name="dateDietPost"  class="form-control form-control-md" autocomplete="off"  >
			</div>
				
		<div class="col-md-2 col-form-label  text-default mb-1">
			 Type:
		</div>
		<div class="col-md-10">
			<select name="dietType_sel" id="dietType_sel"  class="form-control form-control-md">
					<option value="">Select</option>
	       </select>
		</div>
		<div class="col-md-2 col-form-label  text-default mb-1">
				Verified:
		</div>
		<div class="col-md-10">
			<select name="selEmpdiet_emp" id="selEmpdiet_emp"  class="form-control form-control-md">
					<option value="">Select</option>
	       </select>
		</div>
		<div class="col-md-2 col-form-label  text-default mb-1">
				Ordered:
			</div>
			<div class="col-md-10">
				<select name="selDiet_doc" id="selDiet_doc"  class="form-control form-control-md">
				<option value="">Select</option>
				</select>
			</div>
			<div class="col-md-12">
			<input type="hidden" id="enteredBydiet" name="enteredBydiet" value="<?php echo  $this->ion_auth->user()->row()->username;?>" class="form-control form-control-md" autocomplete="off" placeholder="Enter by" readonly >
			</div>
	</div>

	</div>
	<div class="modal-footer">
	<div class=" btn-group">
		<button type="submit" class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
		<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
	 </div>
	</div>
	
	</div>
	</div>
	<input type="hidden" name="dietEnccode" id="dietEnccode">
	<input type="hidden" name="dietHpercode" id="dietHpercode">
	<input type="hidden" name="dietformIden" id="dietformIden">
</div>
</form>
