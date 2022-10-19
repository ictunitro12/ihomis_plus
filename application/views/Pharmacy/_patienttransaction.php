
<div class="card card-accent-success">
<div class="card-body">
<div class="text-success h5"><i class="fa fa-th-list "></i> Charges</div>
<div class="table-responsive">	
<table id="chargeslipTable"  style="cursor:pointer;" class="table table-md table-striped table-bordered  table-hover table-warning" width="100%">
		<thead>
			<tr>
				<th width="10%">Chargeslip/s</th>	
			</tr>
		</thead>
	</table>
</div>
</div>
</div>

<?php 	$this->load->view('Pharmacy/_generateChargeslipModal.php');?>