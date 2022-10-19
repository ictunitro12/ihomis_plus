<div class="card card-accent-success">
	<div class="card-header">
		<div class="form-row">
			<div class="col-md-8">
				<h3 class="text text-success"><i class="<?php echo $icon; ?>"></i> <?php echo $header; ?></h3>
			</div>
			<div class="col-md-4">
				<div class="btn-group float-right" role="group" aria-label="">
					<button id="btnmale" name="btnmale" onclick="btnmaleclick();" data-toggle="tooltip" title="Male" class="btn btn-outline-info btn-md mb-1 btn-ladda" data-style="zoom-in"><i class="fa fa-male"></i>&nbsp;Male</button>&nbsp;
					<button id="btnfemale" name="btnfemale" onclick="btnfemaleclick();" data-toggle="tooltip" title="Female" class="btn btn-outline-danger btn-md mb-1 btn-ladda" data-style="zoom-in"><i class="fa fa-female"></i>&nbsp;Female
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive" id="malenormalval">
		<ul class="nav nav-tabs nav-justified" id="tabmales" role="tablist">
			<li class="nav-item">
				<a class="nav-link text text-success active" id="malebldchem-tab" data-toggle="tab" href="#MaleBloodChem" role="tab" aria-controls="MaleBloodChem" aria-expanded="true"><i class="fa fa-tint"></i>&nbsp; Blood Chemistry </a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="malebldexam-tab" data-toggle="tab" href="#MaleBloodExam" role="tab" aria-controls="MaleBloodExam"><i class="fa fa-tint"></i>&nbsp; Blood Examination</a>
			</li>
		</ul>
		<div class="tab-content" id="tab_content">
			<br>
			<?php $this->load->view('Ref_LabNormalValues/_tabMaleBloodChem.php'); ?>
			<?php $this->load->view('Ref_LabNormalValues/_tabMaleBloodExam.php'); ?>
		</div>
	</div>
	<!-- Female -->
	<div class="card-body table-responsive" id="femalenormalval" hidden>
		<ul class="nav nav-tabs nav-justified" id="tabfemales" role="tablist">
			<li class="nav-item">
				<a class="nav-link text text-success active" id="femalebldchem-tab" data-toggle="tab" href="#FemaleBloodChem" role="tab" aria-controls="FemaleBloodChem" aria-expanded="true"><i class="fa fa-tint"></i>&nbsp; Blood Chemistry </a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="femalebldexam-tab" data-toggle="tab" href="#FemaleBloodExam" role="tab" aria-controls="FemaleBloodExam"><i class="fa fa-tint"></i>&nbsp By Blood Examination</a>
			</li>
		</ul>
		<div class="tab-content" id="tab_content">
			<br>
			<?php $this->load->view('Ref_LabNormalValues/_tabFemaleBloodChem.php'); ?>
			<?php $this->load->view('Ref_LabNormalValues/_tabFemaleBloodExam.php'); ?>
		</div>
	</div>
</div>
<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/plugin/JQuery-Session-Plugin-master/jquery.session.js"></script>
<script type="text/javascript">
	function btnmaleclick() {
		$('#malenormalval').prop('hidden', false);
		$('#femalenormalval').prop('hidden', true);
		document.getElementById("btnmale").disabled = true;
		document.getElementById("btnfemale").disabled = false;
	}
	function btnfemaleclick() {
		$('#malenormalval').prop('hidden', true);
		$('#femalenormalval').prop('hidden', false);
		document.getElementById("btnmale").disabled = false;
		document.getElementById("btnfemale").disabled = true;
	}
</script>