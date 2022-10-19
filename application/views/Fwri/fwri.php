<style>

table#FWRITable.dataTable tbody tr:hover {
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
						&nbsp<?php echo $header;?>

					</div>
				</div>

				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<a href="<?php echo site_url('FWRI/PatientForm');?>" data-toggle="tooltip" title="Register Patient" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i> &nbsp; Patient Register
							
						</a>
					</div>
				</div>	
			</div>
		</div>
		<div class="card-body table-responsive">
			<table id="FWRITable"  class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th>enccode</th>
						<th>firecracker_code</th>
						<th>reffered_from</th>
						<th>transferred_to</th>					
						<th>PATIENT ID</th>
						<th>PATIENT NAME</th>
						<th>TYPE OF INVOLVEMENT</th>
						<th>SEX</th>
						<th>BIRTHDATE</th>
						<th width="80px"></th>
					</tr>
				</thead>
				<tfoot >
					<tr>
						<th></th>
						<th></th>
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
								<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp BIRTHDATE:</b>
								<a class="pull-right text text-success" id="bdate">N/A</a>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp DATE OF INJURY:</b>
								<a class="pull-right text text-success" id="dteinjury">N/A</a>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp PLACE OCCURENCE:</b>
								<a class="pull-right text text-success" id="place_occur">N/A</a>
								<a class="pull-right text text-success" id="place_occur_other">N/A</a>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp TYPE OF INVOLVEMENT:</b>
								<a class="pull-right text text-success" id="type_involve">N/A</a>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp NATURE OF INJURY:</b>
								<a class="pull-right text text-success" id="natinjury">N/A</a>
							</li>
						</ul>	
						<div class="card-footer"></div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<form name="frmDeleteFWRI" id="frmDeleteFWRI">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		

		<div class="modal fade" id="DeleteFWRI" tabindex="-1" role="dialog">
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


	<form name ="frmFWRIPDF" id="frmFWRIPDF" method="post">
		<div class="modal" id="ModalFWRI" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
				<div class="modal-content card-accent-success">
					<div class="modal-header">
						<input name="code" id ="code" type="hidden">
						<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i>Fireworks Injury Surveillance Form</h2>
					</div>
					<div class="modal-body border-success" id="FWRIPDF">
						
						<!--embed src="" frameborder="2" width="100%" height="800px" id="chronicPDF" -->
						
					</div>
					<div class="modal-footer bg-secondary"></div>
				</div>
			</div>
		</div>
	</form>
	
	<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
	<input name="enccode" id ="enccode" type="hidden">
	<script src="<?php echo base_url()?>assets/scripts/fwri/fwri.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/fwri/delete.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/fwri/fire.js"></script>



	<script type="text/javascript">
		$(function(){
			PatientLogList();
		});



	</script>

