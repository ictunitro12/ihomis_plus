<form id="dateRange" method="post">
	<div class="modal" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
				</div>
				<div class="modal-body border-success">
					<div id="baseDateControl">
						<div class="row-md-6">
							<label class="text-success">From</label>
							<input type="date" class="form-control form-control-mg" placeholder="start date" name="from" id="from" autocomplete="off" />
						</div>
						<div class="row-md-6">
							<label class="text-success">to</label>
							<input type="date" class="form-control form-control-mg" placeholder="end date" name="to" id="to" autocomplete="off" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" id="filter" class="btn btn-success btn-block " data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
				</div>
			</div>
		</div>
	</div>
</form>

<div class="col-md-12">
	<div class="card card-accent-success">
		<div class="card-body table-responsive">
			<h4 class="text text-success"><i class="<?php echo $icon; ?>"></i> <?php echo $header; ?> <?php echo $subheader; ?>
				</button></h4>
			<label class="text-success" id="rep_from"></label>
			<label class="text-success" id="rep_to"></label>
			<ul class="nav nav-tabs nav-justified" id="tabAggregates" role="tablist">
				<li class="nav-item">
					<a class="nav-link text text-success active" id="icd-tab" data-toggle="tab" href="#icd" role="tab" aria-controls="icd" aria-expanded="true"><i class="fas fa-stethoscope"></i>&nbsp ICD 10</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text text-success" id="exam-tab" data-toggle="tab" href="#exam" role="tab" aria-controls="exam"><i class="fas fa-diagnoses"></i>&nbsp Exam-std</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text text-success" id="drugs-tab" data-toggle="tab" href="#drugs" role="tab" aria-controls="drugs"><i class="fas fa-pills"></i>&nbsp Drugs and Medicines</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text text-success" id="supplies-tab" data-toggle="tab" href="#supplies" role="tab" aria-controls="supplies"><i class="fas fa-archive"></i>&nbsp Supplies</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text text-success" id="miscellaneous-tab" data-toggle="tab" href="#miscellaneous" role="tab" aria-controls="miscellaneous"><i class="fas fa-coins"></i>&nbsp Miscellaneous</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text text-success" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package"><i class="fas fa-box"></i>&nbsp Package</a>
				</li>
			</ul>
			<div class="tab-content" id="tab_content">
				<br>
				<?php $this->load->view('Ref_PhicRef/Phicref_ICD10.php'); ?>
				<?php $this->load->view('Ref_PhicRef/Phicref_Exam_std.php'); ?>
				<?php $this->load->view('Ref_PhicRef/Phicref_Drugs_Meds.php'); ?>
				<?php $this->load->view('Ref_PhicRef/PhicRef_Supply.php'); ?>
				<?php $this->load->view('Ref_PhicRef/Phicref_Miscellaneous.php'); ?>
				<?php $this->load->view('Ref_PhicRef/Phicref_Package.php'); ?>
			</div>
		</div>
	</div>
</div>
</div>
<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/plugin/JQuery-Session-Plugin-master/jquery.session.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		initTabb();});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/tabbing.js"></script>