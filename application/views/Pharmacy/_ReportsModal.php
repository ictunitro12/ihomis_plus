<!-- Created by JDV5/13/2022 -->

<div class="col-md-6">
	<div class="collapse" id="drugs_range">
		<input type="hidden" id="rep2input" name="rep2input" value="" />
		<form id="dateRangeDrugs" method="post">
			<div class="row-md-6">
				<label class="text-success">From</label>
				<input type="date" class="form-control form-control-md" min="2000-01-01" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" name="fromDrugs" id="fromDrugs" autocomplete="off" />
			</div>
			<br>
			<div class="row-md-6">
				<label class="text-success">To</label>
				<input type="date" class="form-control form-control-md mb-2" min="2000-01-01" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" name="toDrugs" id="toDrugs" autocomplete="off" />
			</div>
			<button type="submit" class="btn btn-outline-success btn-block rounded-pill" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></button>
		</form>
	</div>
</div>
<div class="col-md-6">
	<div class="collapse" id="nonDrugs_range">
		<input type="hidden" id="rep1input" name="rep1input" value="" />
		<form id="dateRangeNDrugs" method="post">
			<div class="row-md-6">
				<label class="text-success">From</label>
				<input type="date" class="form-control form-control-md" min="2000-01-01" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" name="from" id="from" autocomplete="off" />
			</div>
			<br>
			<div class="row-md-6">
				<label class="text-success">To</label>
				<input type="date" class="form-control form-control-md mb-2" min="2000-01-01" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" name="to" id="to" autocomplete="off" />
			</div>
			<button type="submit" class="btn btn-outline-success btn-block rounded-pill" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></button>
		</form>
	</div>
</div>
</div>
<form method="post">
	<div class="modal" id="Repmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
					<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal">
						<i class="fa fa-close"></i>
					</button>
				</div>
				<div class="modal-body">
					<embed id="pdfReport" type="application/pdf" frameborder="2" width="100%" height="800px">
				</div>
				<div class="modal-footer bg-secondary">
				</div>
			</div>
		</div>
	</div>
</form>