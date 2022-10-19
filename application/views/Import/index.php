<div class="col-md-12" id="sublist">
	<div class="w-auto card card-accent-success">
	
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto">
			<span class="h4  text-success"><i class="<?php echo $icon?>"></i> <?php echo $header;?> <small><?php echo $subheader;?></small></span>
		</div>
		<div class="col-md-6 col-md-auto">
			<div class="btn-group pull-right" role="group" aria-label="">
			<button class ="btn btn-outline-success btn-md float-right"  id="btnUpload"><i class="fa fa-upload"></i> Upload ComLogik</button>
			<button class ="btn btn-outline-success btn-md float-right"  id="btnUpload"><i class="fa fa-upload"></i> Upload BizBox</button>
			</div>
				
		</div>	
		</div>
		
	</div>
		<div class="card-body table-responsive">
			
				<table id="csvTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
					<thead class="thead-dark">
						<tr>
						<td>PATIENTNO</td>
						<td>LASTNAME</td>
						<td>FIRSTNAME</td>
						<td>MIDDLENAME</td>
						<td>CIVILSTATUS</td>
						<td>SEX</td>
						<td>DBIRTH</td>
						<td>BPLACE</td>
						<td>PROVINCE</td>
						<td>ADDRESS</td>
						<td>BARANGAY</td>
						<td>MUNICIPALITY</td>
						<td>ZIPCODE</td>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	</div>


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
				<input type="file" class="form-control form-control-plaintext" name="menuFile" id="menuFile"   align="center"/>
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

	<script>
		$(function(){
			$('#csvTable').DataTable();
			$("#btnUpload").on('click',function(){
				$("#modalUpload").modal('show');

			});
		});
	</script>
	<script src="<?php echo base_url()?>assets/scripts/menu/index.js"></script>