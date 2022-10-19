<style>

table#CadTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
	<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto	">
			<div class="h3 text text-success"> 
			<i class="fa fa-th-list"></i>
			&nbsp<?php echo $header;?> Registry

			</div>
		</div>

		<div class="col-md-6 col-md-auto">
		<div class="btn-group pull-right" role="group" aria-label="">
		<a href="<?php echo site_url('CAD/PatientForm');?>" data-toggle="tooltip" title="Register Patient" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i> &nbsp; Patient Register
		
		</a>
		</div>
		</div>	
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="CadTable"  class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th>enccode</th>
					<th>PATIENT ID</th>
					<th>PATIENT NAME</th>
					<th>TYPE</th>
					<th>SEX</th>
					<th>BIRTH DATE</th>
					<th>FINAL DIAGNOSIS</th>
					<th width="80px"></th>
				</tr>
			</thead>
			<tfoot>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			</tfoot>
		</table>
	</div>
	<div class="card-footer">

	</div>
	</div>

<div class="modal fade" id="ModalPatientInfo" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="text text-success"><i class="fa fa-user-circle"></i> Patient Information</h3>
					<div class="box-body box-profile">
						<img id="PatientPicInfo"class="img-fluid bg-success img-thumbnail rounded mx-auto d-block mb-1" width="200px"  alt="Patient Photo">
					<div class="h5 profile-username text-center text-success" id="patname"></div>
					<div class="h6 text-center text-success" id="hpercode"></div>
					<ul class="list-group">
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp SEX:</b> 
							<a class="pull-right text text-success" id ="patsex">N/A</a>
						</li>	
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp CIVIL STATUS:</b>
							<a class="pull-right text text-success" id="civilstat">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp BIRTHDATE:</b>
							<a class="pull-right text text-success" id="patbdate">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp CONSULTATION DATE:</b>
							<a class="pull-right text text-success" id="consultdte">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp DATE OF DIAGNOSIS:</b>
							<a class="pull-right text text-success" id="dtediag">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp FINAL DIAGNOSIS:</b>
							<a class="pull-right text text-success" id="findag">N/A</a>
						</li>
						
					</ul>	
					<div class="card-footer"></div>
					</div>
				</div>
			</div>
		</div>
	</div>


<form name="frmDeleteCad" id="frmDeleteCad">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	

	<div class="modal fade" id="DeleteCad" tabindex="-1" role="dialog">
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


	<form name ="frmCadPDF" id="frmCadPDF" method="post">
	<div class="modal" id="ModalCad" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
	<div class="modal-content card-accent-success">
	<div class="modal-header">
		<input name="code" id ="code" type="hidden">
	<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i> Coronary Artery Disease Registry Form</h2>
	</div>
	<div class="modal-body border-success" id="CadPDF">
	</div>
	<div class="modal-footer bg-secondary"></div>
	</div>
	</div>
	</div>
	</form>



	<script type="text/javascript">
	$(function(){
		CADList();
		$("#PatientPicInfo").prop('src', baseURL+'assets/img/avatars/none.png');
	});

	</script>	
	<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
	<input name="enccode" id ="enccode" type="hidden">
 	<script src="<?php echo base_url()?>assets/scripts/cad/delete.js"></script> 
 	<script src="<?php echo base_url()?>assets/scripts/cad/cad.js"></script> 
	<script src="<?php echo base_url()?>assets/scripts/cad/coronary.js"></script>
	




