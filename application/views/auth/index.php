<style>

table#userLists.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="row">
 <div class="col-md-3">
	<div class="card card-accent-success">
			<div class="card-body">
			<h4 class="text-center text-success"><i class="fa fa-cog"></i>Menu</h4>
				<a  href="<?php echo site_url('Auth/settings');?>"  class="btn  btn-block btn-outline-success btn-pill"><i class="fa fa-users fa-2x"></i></br>Menu/Groups</a>
				<a href="<?php echo site_url('Tools');?>" id="btnRoles"  onclick="initRoles();" class="btn  btn-block btn-outline-success btn-pill"><i class="fa fa-key fa-2x"></i></br>Setting/s</a>
			</div>
	</div>
 </div>
 <div class="col-md-9 col-md-6 col-sm-6">
	<div class="card card-accent-success">
		<div class="card-body table-responsive">
			<span class="h4  text-success mb-2"><i class="<?php echo $icon?>"></i> <?php echo $header;?> <small><?php echo $subheader;?></small></span>
			 <a href="<?php echo site_url('Auth/create_user');?>"  id="createUser" data-toggle="tooltip" title="" class="btn btn-outline-success btn-md btn-ladda pull-right mb-1" data-style="zoom-in"><i class="fa fa-plus"></i></a>
				<table id="userLists" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
					<thead>
						<tr>
							<th >Employee ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
				</table>
		  </div>
		</div>
	</div>
	</div>
	<form id="frmDeleteUser" name="frmDeleteUser" method="POST">
		<div class="modal" id="modalDeleteUser" name="modalDeleteUser" tabindex="-1" role="form">
			<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
			<div class="modal-body">
			<h2 class="modal-title text-danger"><i class="fa fa-trash"></i> Delete Record ?</h2>
				<h5> Are you sure do you want to delete this record? </h5>
				<input type="hidden" name="userID" id="userID">
				<input type="hidden" name="formIdenDelete" id="formIdenDelete" value="delete">
			</div>
			<div class="modal-footer">
			<div class="btn-group">
				<button type="submit"  class="btn btn-outline-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i> Delete</button>
				<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i> Cancel</button>
			</div>
			</div>
			</div>
			</div>
		</div>
	</form>
	<script src="<?php echo base_url()?>assets/scripts/auth/index.js"></script>
	