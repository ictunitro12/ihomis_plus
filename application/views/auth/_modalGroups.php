	<form id ="frmGroup" name="frmGroup" class="form">
	<div class="modal" id="groupModal"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
				<h2 class=" h4 modal-title text-success"><i class="fa fa-users"></i> Menu/Group</h2>
				<br>
				<div class="form-row">
					<div class="col-md-4 col-form-label text-default mb-1">
						Display:
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control form-control mb-1" autocomplete="off" id="nameggrp" name="nameggrp" placeholder="Display name">
					</div>
					<div class="col-md-4 col-form-label text-default mb-1">
						Link:
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control form-control mb-1" autocomplete="off" id="link" name="link" placeholder="Controller/Function">
						<small class="text text-success">Format:Controller/function</small>
					</div>
					<div class="col-md-4 col-form-label text-default mb-1">
						Icon:
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control form-control mb-1" autocomplete="off" id="icon" name="icon" placeholder="Icon">
						<small class="text text-success">Format:cil-medical-cross</small>
					</div>
					<div class="col-md-4 col-form-label text-default mb-1">
						Description:
					</div>
					<div class="col-md-8">
						<textarea type="text" class="form-control form-control mb-1" autocomplete="off" id="descgrp" name="descgrp" placeholder="Description"></textarea>
					</div>
				
						<div class="col-md-4 col-form-label text-default mb-1" id ="typelabel">
							Type:
						</div>
						<div class="col-md-8" id="typeform">
							<select name ="typegrp" id="typegrp"  class="form-control">
							<option value="">Select</option>
							<option value="trans">Transaction</option>
							<option value="lib">Reference</option>
							<option value="rep">Reports</option>
							<option value="admin">Administration</option>
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1" id="submenulabel">
							w/Submenu:
						</div>
						<div class="col-md-8" id="issubform">
							<select name ="isSub" id="isSub" onchange="subCheck()"  class="form-control">
							<option value="">Select</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
							</select>
						</div>
				
					<div class="col-md-4 col-form-label text-default mb-1">
						Active:
					</div>
					<div class="col-md-8">
						<select name ="isActive" id="isActive"  class="form-control">
						<option value="">Select</option>
						<option value="A">Active</option>
						<option value="I">Inactive</option>
						</select>
					</div>
					
				<input type="hidden" name="grpformIden" id="grpformIden">
				<input type="hidden" name="subID" id="subID">
				<input type="hidden" name="grpID" id="grpID">
				</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit"  class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>  Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
	
	<form id = "frmMainDelete" name="frmMainDelete" class="form">
	<div class="modal" id="groupModalDel"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
			<h2 class="modal-title text-danger" <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
					<input type="hidden" name="grpIDDel" id="grpIDDel">
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" name="btnDelete" id="btnDelete"  class="btn btn-outline-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
<form id = "frmMenuUpload" name="frmMenuUpload" class="form">
<div class="modal" id="modalUpload"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
		<div class="modal-body">
		<div class="clearfix">
			<div class="card-title h4 text text-success float-left"> 
				<div class="h4 text-success"><i class="fa fa-th-list"></i>Upload Menu</div>
			</div>
		</div>
			<div class="col-md-12">
				<input type="file" class="form-control form-control-plaintext" onchange ="validate(this.value);" name="menuFile" id="menuFile"   align="center"/>
				<span class="text-muted" id="status">*Upload only csv format.</span>
				<div class="progress">
				  <div class="progress-bar" id="progress" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span id="text"></span></div>
				</div>
			</div>
		</div>
	<div class="modal-footer">
		<div class="btn-group">
			<button type="submit" name="btnUpload" id="btnUpload"  class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-upload"></i> Upload</button>
			<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i> Cancel</button>
		</div>
	</div>
			</div>
		</div>
	</div>
</form>
	

	

	<script src="<?php echo base_url()?>assets/scripts/auth/_modalGroups.js"></script>