<div class="row">
    <div class="col-md-4">
        <?php $this->load->view('Philhealth/_verify_eligibility_form.php'); ?>
    </div>

    <div class="col-md-8">
        <?php $this->load->view('Philhealth/_philhealth_benefit_eligibility_form'); ?>
    </div>
</div>

<input type="hidden" name = "base_url" id = "base_url" value="<?php echo base_url();?>">

<?php echo ViewSearchPatient(); ?>

<form id="frmMemberSearchList">
<div class="modal" id="MemberSearchList" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg">
   <div class="modal-content">
	<div class="modal-body">
	<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
	  <h3 class="modal-title text-success"><i class="fa fa-th-list"></i>&nbsp Member List</h3>
		<table id="TblMemberSearchList" class="table table-hover table-sm  table-bordered table-condensed"  style="cursor:pointer" width="100%">
			<thead>
				<tr>
					<th>PIN:</th>
					<th>Name of Member</th>
					<th>Date of Birth</th>
					<th>Sex</th>
                    <th></th>
				</tr>
			</thead>
		</table>
	<div class="btn-group float-right">
	  <!--a href="<?php //echo site_url('Patient/PatientRegister');?>" class="btn btn-outline-success  btn-ladda btn-md " data-style="zoom-in"><i class="fa fa-plus"></i> Register</a -->
	  <a href="javascript:void(0);" class="btn btn-outline-danger  btn-ladda btn-md"  data-style="zoom-in" id="cancelTblMemberSearchListBtn"><i class="fa fa-close"></i>Cancel</a>
     </div>
    </div>
  </div>
</div>
</div>
</form>

<form id="frmClaimHistoryList">
<div class="modal" id="ClaimHistoryList" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
   <div class="modal-content">
	<div class="modal-body">
	  <h3 class="modal-title text-success"><i class="fa fa-th-list"></i> Claims Log</h3>
		<table id="claimLogList"  style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead >
				<tr>
                    <th>Patient Name</th>
					<th>Entry Date</th>
					<th>Entry Time</th>
					<th>Discharged Date</th>
					<th>Discharged Time</th>
                    <th>Type of Encounter</th>
                    <th>Claim Type</th>
                    <th></th>
					<th>Encounter</th>
				</tr>
			</thead>
		</table>
      </div>
		<div class="modal-footer">
			<button type="button" class="btn btn-outline-danger btn-ladda btn-md" id="CancelClaimHistoryListBtn"><i class="fa fa-close"></i> Cancel</button>
		</div>
    </div>
  </div>
</div>
</form>

<!-- start processing modal -->
<?php $this->load->view('EClaims/_processingModal.php'); ?>
<!-- end processing modal -->

<script src="<?php echo base_url() ?>assets/scripts/philhealth/verify_benefit_eligibility.js"></script>