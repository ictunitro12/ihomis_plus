<style>

table#CountryTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto	">
					<div class="h3 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp<?php echo $header;?>
					&nbsp <small><?php echo $subheader;?></small>
					</div>
				</div>
				
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
				<button onclick="AddCountry()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> </i>
					</button>
				</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
		<table id="CountryTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="thead-dark">
					<th width="50px">Code</th>
					<th>Country</th>
					<th>Nationality</th>
					<th>Status</th>
					<th width="50px"></th>
				</tr>
			</thead>
		</table>
		</div>
	</div>
	
	
	<form name="frmCountry"   id="frmCountry">
	<div class="modal fade" id="ModalAddCountry" tabindex="-1" role="dialog">
		<input type="hidden" name="formIden" id="formIden">
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
			<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
				<div class="col-md-9">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="code" name="code" placeholder ="Code">
				</div>	
			<div class="col-md-3 col-form-label text-default mb-1">Country:</div>
				<div class="col-md-9">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="name" name="name" placeholder ="Country Name">
				</div>
			<div class="col-md-3 col-form-label text-default mb-1">Nationality:</div>
				<div class="col-md-9">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="nat" name="nat" placeholder ="Abbreviation">
				</div>
			<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
				<div class="col-md-9">
					<select name ="status" id ="status" class="form-control">
						<option value="A">Active</option>
						<option value="I">Inactive</option>
					</select>
				</div>				
		</div>
	</div>
	<div class="modal-footer bg-secondary">
		<button  class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
		<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
	</div>
	
	</div>
	</div>
	</div>
	</form>
	
<form name="frmDeleteCountry" id="frmDeleteCountry">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	

	<div class="modal fade" id="DeleteCountry" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer bg-secondary">
					<button  type ="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
				</div>
			</div>
		</div>
	</div>
</form>	


	<script type="text/javascript">
		$(function()
		{
			CountryList();
		});
		
	
	</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_country/cntry.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_country/country_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_country/delete.js"></script>
