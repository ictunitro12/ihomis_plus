<div class="h4 text-success"><i class="fa fa-area-chart"></i> Reports</div>
<div class="form-row">
	<div class="col-md-12">
		<a href="javascript:void(0);" id="btnRepStocks" class="btn btn-block btn-outline-success   m-2"><i class="fa fa-file-pdf-o fa-2x"></i></br>Stocks</a>
	</div>
	<div class="col-md-6">
		<a href="javascript:void(0);" id="btnRepDrugs" class="btn btn-block btn-outline-success   m-2" data-toggle="collapse" data-target="#drugs_range" aria-expanded="false" aria-controls="drugs_range"><i class="fa fa-file-pdf-o fa-2x"></i></br>SUMMARY OF ISSUED DRUGS AND MEDICINES</a>
	</div>
	<div class="col-md-6">
		<a href="javascript:void(0);" id="btnRepNonDrugs" class="btn  btn-block btn-outline-success   m-2" data-toggle="collapse" data-target="#nonDrugs_range" aria-expanded="false" aria-controls="nonDrugs_range"><i class="fa fa-file-pdf-o fa-2x"></i></br>SUMMARY OF ISSUED NON-DRUGS</a>
	</div>
<?php $this->load->view('pharmacy/_reportsModal.php'); ?>
<script src="<?php echo base_url() ?>assets/scripts/pharmacy/reports_.js"></script>