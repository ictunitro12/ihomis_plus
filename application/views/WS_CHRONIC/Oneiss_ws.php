<style>
	#mySubmitBar {
		width: 0%;
		height: 20px;
		text-align: center;
		line-height: 30px;
		color: white;
	}

	.blink {
		animation: blinker 0.8s linear infinite;
	}

	@keyframes blinker {
		100% {
			opacity: 0;
		}
	}

	.blink-one {
		animation: blinker-one 0.9s linear infinite;
	}

	@keyframes blinker-one {
		50% {
			opacity: 0;
		}
	}

	.blink-two {
		animation: blinker-two 1s linear infinite;
	}

	@keyframes blinker-two {
		0% {
			opacity: 0;
		}
	}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-9">
				<div class="h3 text text-success">
					<i class="fa fa-cloud-upload"></i>
					&nbsp;<?php echo $header; ?>&nbsp;<small><?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-3">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" id="uploaddata" title="Send Data"><i class="fa fa-paper-plane"></i>&nbsp; Send</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<form name="oneiss_form" id="oneiss_form" method="post">
			<table id="ws_OneissTbl" class="table table-responsive-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr align="center">
						<th><input type="checkbox" id="checkAll_patient" title="Check all">&nbsp;Check All</th>
						<th>PATIENT NAME</th>
						<th>SEX</th>
						<th>BIRTHDATE</th>
						<th>TYPE OF PATIENT</th>
						<th>REPORTED DATE</th>
						<th>REPORTED TIME</th>
						<th>SUBMITTED DATE/TIME</th>
					</tr>
				</thead>
			</table>
		</form>
	</div>
</div>
<!-- sending modal -->
<form id="ProgressBar2">
	<div class="modal fade" id="ModalProgressBar2" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content" style="border-radius:16px!important">
				<div class="modal-body">
					<div id="mySubmitProgress">
						<div id="mySubmitBar" style="border-radius:16px!important" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuemin="0" aria-valuemax="100">0% success</div>
						<div align="center">
							<label class="text-success"><b>
									<br>
									<h6>Sending ONEISS Data &nbsp;&nbsp;
										<i class="fa fa-sm fa-paper-plane blink"></i>&nbsp;
										<i class="fa fa-md fa-paper-plane blink-one"></i>&nbsp;
										<i class="fa fa-lg fa-paper-plane blink-two"></i>
									</h6>
								</b></label> &nbsp;
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/scripts/ws_chronic/oneiss.js"></script>