<div class="h4 text-success"><i class="fa fa-area-chart"></i> Reports</div>
<ul class="list-group">
	<li class="list-group-item">	<a href="javascript:void(0);" id="btnRepStocks"  class="text-center text-success" ><i class="fa fa-file-pdf-o fa-2x"></i></br>Stocks</a></li>
	<li class="list-group-item">	<a href="javascript:void(0);" id="btnRepDrugs"   class="text-center text-success" data-toggle="collapse" data-target="#drugs_range" aria-expanded="false" aria-controls="drugs_range"><i class="fa fa-file-pdf-o fa-2x"></i></br>SUMMARY OF ISSUED DRUGS AND MEDICINES</a></li>

	<li class="list-group-item">	<a href="javascript:void(0);" id="btnRepNonDrugs" class="text-center text-success"  data-toggle="collapse" data-target="#nonDrugs_range" aria-expanded="false" aria-controls="nonDrugs_range"><i class="fa fa-file-pdf-o fa-2x"></i></br>SUMMARY OF ISSUED NON-DRUGS</a></li>
	
	<li class="list-group-item">	<a href="javascript:void(0);" id="btnStockCard"  class="text-center text-success" ><i class="fa fa-file-pdf-o fa-2x"></i></br>STOCKCARD</a></li>
</ul>
<?php $this->load->view('pharmacy/_reportsModal.php'); ?>
<script src="<?php echo base_url() ?>assets/scripts/pharmacy/reports_.js"></script>