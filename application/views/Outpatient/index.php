<style>

table#OPDTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<div class="card  card-accent-success shadow-lg ">
	<div class="card-header">
		<div  name="OPD_buttons" class="row">
			<div class="col-md-6">
				<span class="h4  text-success"><i class="<?php echo $icon?>"></i> <?php echo $header;?> <small><?php echo $subheader;?></small></span>
				<cite id="txtDateRange" class="text-success p-1 mb-2 p-1 h6"></cite>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="
					<?php echo site_url('Patient/PatientRegister');?>" name="btnRegister"  data-toggle="tooltip"  title="Register Patient" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in">
					<i class="fa fa-user-plus"></i> Register
				</a>
				<a href="
				<?php echo site_url('OutPatient/Add');?>" name="btnfromLog" data-toggle="tooltip" data-placement="top" title="Log Patient" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">
				<i class="fa fa-stethoscope"></i> Log Patient
			</a>
			<button data-toggle="collapse" data-target="#dateFilter" id ="filterOPD" title="Filter Date"  class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in">
				<i class="fa fa-calendar"></i> Filter Date
			</button>
		</div>
	</div>
</div>
<div class="collapse float-right" id="dateFilter">
	<form name="frmFilter" id="frmFilter">
		<div class="h5 text-success"> <i class="fa fa-filter"></i> Filter date:</div>
		<div class="shadow-lg p-3 mb-1"   style="width: 40rem;">
			<div class="form-label text-success">Select dates of consultations:</div>
			<div class="input-group mb-1">
				<input type="datetime-local" required class="form-control form-control-md" id="opdFROM"  name="opdFROM">
				<span class="input-group-text">-</span>
				<input type="datetime-local" required class="form-control form-control-md" id="opdTO" name="opdTO">
				<button class="btn btn-outline-success" id="btnFilter" type="submit"><i class="fa fa-search"></i></button>
			</div>
		</div>
	</form>
</div>
</div>
<div class="card-body">
	<div id="container"></div>
</div>
</div>

<form id="formOPDSignatories" class="form" id="formOPDSignatories">
	<div class="modal" id="ModalOPDSignatures" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="modal-title text-success"><i class="fa fa-pencil-square-o"></i>&nbsp; OPD Profile Signatories</h3>
					<br>
					<div class="box-body box-profile">
						<div class="h5 profile-username text-center text-success" id="sign_names" hidden></div>
						<div class="h6 text-center text-success" id="sign_hpercode" hidden></div>
						<table class="table table-sm table-condensed table-bordered">
							<tr>
								<td><label class="text text-success col-form-label"><i class="fa fa-address-book"></i>&nbsp; Doctor's Name :</label>
								<select name="sel_doc" id="sel_doc" class="form-control form-control-md" ></select>
								</td>
							</tr>
						</table>
						<div class="btn-group float-right ">
							<button type="submit" id="sign_pdf" class="btn btn-outline-success btn-ladda" data-style="zoom-in">Next &nbsp;<i class="fa fa-arrow-right"></i></button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="formAddCert">
	<div class="modal" id="Consentinput" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close text-danger" id="closereload" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title text-success"><i class="fa fa-pencil-square-o"></i>&nbsp; Consent Signatories</h3>
					<br>
					<div class="box-body box-profile">
						<div class="h5 profile-username text-center text-success" id="patnamess" hidden></div>
						<div class="h6 text-center text-success" id="hpercodess" hidden></div>
						<table class="table table-sm table-condensed table-bordered">
							<tr>
								<td><label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Name of Patient/ Representative :</label><br>
									<h6><input type="checkbox" name="patrepsame" id="patrepsame" />&nbsp; <small>Check if Representative Only</small></h6>
									<input type="text" class="form-control form-control-md mb-1" name="patrep" id="patrep" placeholder="Representative" autocomplete="off" disabled="true" style="text-transform:uppercase" />
								</td>
							</tr>
							<tr>
								<td>
									<label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Representative of Health Facility :</label>
									<select name="selEmployees" id="selEmployees" class="form-control form-control-md"></select>
								</td>
							</tr>
							<tr>
								<td><label class="text text-success col-form-label"><i class="fa fa-mobile"></i>&nbsp; Contact No. :</label>
									<input type="number" class="form-control form-control-md mb-1" name="patnumber" id="patnumber" maxlength="12" autocomplete="off" placeholder="0000 0000 0000" />
								</td>
							</tr>
						</table>
						<div class="btn-group float-right ">
							<button type="submit" id="pdfinsert" class="btn btn-outline-success btn-ladda" data-style="zoom-in">Next &nbsp;<i class="fa fa-arrow-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmConsent">
	<div class="modal fade" id="ModalConsent" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Consent Form</h3>
					<input type="hidden" id="enccodeConsent">
					<iframe id="Consent_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div>
</form>
<script src="<?php echo base_url()?>assets/scripts/outpatient/index.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/referral/referral.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/referral/referralto.js"></script>