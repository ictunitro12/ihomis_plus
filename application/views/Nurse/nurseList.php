<style>

table#nurseTbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#nurseWard.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<div class="row">
		<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="row">
				<div class="col-md-6 col-md-auto	">
					<div class="h4 text text-success"> 
					<i class="fa fa-user-md"></i>
					&nbsp<?php echo $header;?>
					&nbsp <small><?php echo $subheader;?></small>
					</div>
				</div>
				</div>
			</div>
			<div class="card-body">
				<button id="test"></button>
					<table id="nurseTbl" class="table table-sm table-striped table-bordered table-condensed table-hover " width="100%">
						<thead>
							<tr>
								<th>Employee ID</th>
								<th >NurseName</th>
								<th >Active</th>
								<th ></th>
							</tr>
						</thead>
				</table>
			</div>
		</div>
		</div>
	</div>
			
	<div class="modal" id="modalWard"  role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="clearfix"> 
				<h4 class="text text-success float-left"><i class="fa fa-user-circle"></i> Ward List</h4>
				<button class ="btn btn-outline-success btn-sm float-right" id="btnAddWard" ><i class="fa fa-plus"></i> </button>
				</div>
				<table id="nurseWard" class="table table-sm table-striped table-bordered table-condensed table-hover " width="100%">
				<thead>
					<tr>
						<th></th>
						<th>Ward ID</th>
						<th>Ward name</th>
						<th>Active</th>
						<th></th>
					</tr>
				</thead>
			</table>
			<input type="hidden" name="userIDN" id="userIDN"> 
				
			</div>
		</div>
	</div>
</div>

<form id="frmWard" name ="frmWard" method="POST">
<div class="modal" id="modalAddward"  role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h5 class="text text-success"><i class="fa fa-user-circle"></i>Add Ward</h5>
				<select  class="form-control form-control-md" name="selWards_ward[]" id="selWards">
				</select>
				<input type="hidden" name="userIDRN" id="userIDRN"> 
			</div>
			<div class="modal-footer">
			<button class="btn btn-outline-success btn-block  btn-md"><i class="fa fa-save"></i></button>
			</div>
		</div>
	</div>
</div>
</form>

<form id="frmRemoveWard" name="frmRemoveWard" method="POST">
	<div class="modal" id="wardRemoveModal" name="wardRemoveModal" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger" <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="userID" id="userID">
			<input type="hidden" name="wardCode" id="wardCode">
		</div>
		<div class="modal-footer ">
		<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
		<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
	</div>
</form>
<script src="<?php echo base_url()?>assets/scripts/nurse/nurse.js"></script>
	<script type="text/javascript">
		$(function()
		{
			NurseList();
		});
</script>
