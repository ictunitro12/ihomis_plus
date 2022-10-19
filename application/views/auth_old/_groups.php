  <div class="clearfix">
		<div class="card-title h4 text text-success float-left"> 
		
		<div class="h4 text-success"><i class="fa fa-th-list"></i> Menu/Groups</div>
		</div>
		<button class ="btn btn-success btn-md float-right" onclick="groupAdd()"; id="btnRequestmeds" >
			<i class="fa fa-plus"></i> 
		</button>
		</div>
	<table id="group_tbl"  style="cursor:pointer;"class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
	<thead>
	<tr>
		<th >Name</th>
		<th >Description</th>
		<th >Type</th>
		<th >w/submenu</th>
		<th>Active</th>
		<th width="12px"></th>
	</tr>
	</thead>
	</table>
	<div class="modal" id="subModal"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
	
			  <div class="clearfix">
		<div class="card-title h4 text text-success float-left"> 
			<div class="h4 text-success"><i class="fa fa-th-list"></i> Submenu</div>
		</div>
		<button class ="btn btn-success btn-md float-right" onclick="addSub()"; id="btnaddSubmenu" >
			<i class="fa fa-plus"></i> 
		</button>
		</div>
			<table id="sub_tbl"  style="cursor:pointer;"class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
			<tr>
				<th >Name</th>
				<th >Description</th>
				<th>Active</th>
				<th width="12px"></th>
			</tr>
			</thead>
			</table>
				</div>
					<input type="hidden" name="subIDtemp" id="subIDtemp">
				<div class="modal-footer">
					<button type="submit" name="btnSaveDiag" id="btnSaveDiag"  class="btn btn-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i></button>
					<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
	
	<form id = "frmGroup" name="frmGroup" class="form">
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
							<select name ="typegrp" id="typegrp" required class="form-control">
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
							<select name ="isSub" id="isSub" onchange="subCheck()" required class="form-control">
							<option value="">Select</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
							</select>
						</div>
				
					<div class="col-md-4 col-form-label text-default mb-1">
						Active:
					</div>
					<div class="col-md-8">
						<select name ="isActive" id="isActive" required class="form-control">
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
					<button type="submit" name="btnSaveDiag" id="btnSaveDiag"  class="btn btn-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i></button>
					<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
	</form>
	
	<form id = "frmGroupDel" name="frmGroupDel" class="form">
	<div class="modal" id="groupModalDel"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
			<h2 class="modal-title text-danger" <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="grpIDDel" id="grpIDDel">
					<input type="hidden" name="grpformIdenDel" id="grpformIdenDel" value="delete">
				</div>
				<
				<div class="modal-footer">
					<button type="submit" name="btnSaveDiag" id="btnSaveDiag"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
					<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
	</form>
	
