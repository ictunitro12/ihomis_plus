<div class="row">
	<div class="col-md-6">
		<?php echo ViewSearchPatient();?>
	</div>
	<div class="col-md-6">
		<form id="frmPatEncList" method="post">
			  <div class="modal" id="PatEncList" tabindex="-1" role="dialog">
			    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			      <div class="modal-content">
			        <div class="modal-body">
			          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Admission History</h1>
			          <table id="TblPatEncList" class="table table-hover table-sm table table-striped table-borderless table-condensed">
			            <thead class="thead-dark">
			              <tr>
			                <th>Health Record:</th>
			                <th>Date/Time</th>
			                <th>Type of Encounter</th>
			                <th>Discharge Date</th>
			                <th>Final Diagnosis</th>
			              </tr>
			            </thead>
			          </table>
			        </div>
			        <div class="modal-footer bg-secondary">
			          <a href="<?php echo site_url('Patient/PatientRegister'); ?>" class="btn btn-success btn-square btn-ladda btn-lg" data-style="zoom-in"><i class="fa fa-plus"></i></a>
			          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
			        </div>
			      </div>
			    </div>
			  </div>
		</form>

		<form name ="frmMedicoLegalAll" id="frmMedicoLegalAll" method="post">
			<div class="modal" id="MedicoLegalAll" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
					<div class="modal-content card-accent-success">
						<div class="modal-header">
						<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i>MEDICO LEGAL CERTIFICATE </h2>
						</div>
					<div class="modal-body border-success">
					<embed src="<?php echo site_url('Rep_MedRec/DischargedForm');?>" frameborder="2" width="100%" height="800px">
					</div>
					<div class="modal-footer bg-secondary">
						
					</div>
					</div>
				</div>
			</div>
		</form>
		<form id="frmFollowRep" method="post">
			  <div class="modal" id="FollowRep" tabindex="-1" role="dialog">
			    <div class="modal-dialog modal-dialog-centered modal-sm" role="dialog">
			      <div class="modal-content">
			        <div class="modal-body">

 					<h6 class="modal-title text" align="center"> Include the following in the report</h6>
 					<br>
 					<div class="col-md-6" align="center">
 						<input type="checkbox" name="Citizenship" id="Citizenship"> <label>&nbsp; Citizenship</label>
 					</div>
 					<div class="col-md-6" align="center">
 						<input type="checkbox" name="Occupation" id="Occupation"> <label>&nbsp; Occupation</label>
 					</div>

					<div class="col-md-12" align="center">
							<a href="javascript:void(0)"  id="formlink" data-toggle="tooltip" data-placement="top"  class="btn btn-success btn-md  btn-ladda" data-style="zoom-in">OK</a>

					</button>
 					</div>
 					</div>
			      </div>
			    </div>
			  </div>
		</form>

		<form name ="frmmedcertopd_form" id="frmmedcertopd_form" method="post">
				<div class="modal" id="ModalMedCertOpd" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
				<div class="modal-content card-accent-success">
				<div class="modal-header">
				<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i> FORM</h2>
				</div>
				<div class="modal-body border-success">
				<embed id="medcertopd" type="application/pdf" frameborder="2" width="100%" height="800px">
				</div>
				<div class="modal-footer bg-secondary"></div>
				</div>
				</div>
				</div>
		</form>


		<form id="frmRequest" method="post">
			<input  type="hidden" name="formIden" id="formIden">
			<input  type="hidden" name="enccode" id="enccode">
			<input  type="hidden" name="hpercode" id="hpercode">
			  <div class="modal" id="Request" tabindex="-1" role="dialog">
			    <div class="modal-dialog modal-dialog-centered modal-m" role="dialog">
			      <div class="modal-content">
			        <div class="modal-body">

 					<div class="form-row">
							<label class="col-md-6 col-form-label text-default mb-1">CERTIFICATE NUMBER:</label>
							<div class="col-md-6">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="certno" name="certno"  placeholder = "CERTIFICATE NUMBER" value="202000000003">
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-6 col-form-label text-default mb-1">REQUESTING PERSON:</label>
							<div class="col-md-6">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="reqperson" name="reqperson"  placeholder = "REQUESTING PERSON:">
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-6 col-form-label text-default mb-1">PURPOSE:</label>
							<div class="col-md-6">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="purpose" name="purpose"  placeholder = "PURPOSE">
							</div>
 						</div>
			 		 </div>
			 		 <div class="modal-footer bg-secondary">
						<button type="submit"  class="btn btn-success btn-md btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> SAVE</button>
					</div>
 					</div>
			      </div>
			    </div>
		</form>





	</div>
</div>
	<input name="hpercode" id ="hpercode" type="hidden">
	<input name="enccode" id ="enccode" type="hidden">
	<script type="text/javascript">
	$(document).ready(function()
	{	
		uppercase();
		$("#PatSearch").modal({backdrop: "static"});
		$("#PatientImage").prop('src','assets/img/avatars/none.png');
	});

		
	</script>
	<script src="<?php echo base_url()?>assets/scripts/Rep_MedRecReport/medcertOPD.js"></script>

