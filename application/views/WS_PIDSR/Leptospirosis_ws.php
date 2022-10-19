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
<form id="formAddTokens">
	<div class="modal" id="Tokensmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<h3 class="modal-title text-success"><i class="fa fa-lock"></i>&nbsp; API Credential</h3>
					<br>
					<div class="box-body box-profile">
						<ul class="list-group">
							<li class="list-group-item">
								<label class="text text-success col-form-label"><i class="fa fa-key"></i>&nbsp; Access Token :</label><br>
								<a><input type="text" class="form-control form-control-sm mb-1" name="tokens" id="tokens" autocomplete="off" /></a>
							</li>
						</ul>
						<br>
						<div class="btn-group float-right ">
							<button type="submit" class="btn btn-outline-success btn-ladda mr-auto" data-style="zoom-in"><i class="fa fa-check"></i> &nbsp; OK</button>
							<button type="button" id="cancel" class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" title="Close"><i class="fa fa-close"></i>&nbsp; Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<div class="h3 text text-success">
					<i class="fa fa-cloud-upload"></i>
					&nbsp;<?php echo $header; ?>&nbsp;<small><?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" id="uploaddata" title="Send Data"><i class="fa fa-paper-plane"></i>&nbsp; Send</button>
					<button type="button" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" id="accesstokens" title="Enter Access Token"><i class="fa fa-key"></i>&nbsp; Token</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<form name="leptospirosis_form" id="leptospirosis_form" method="post">
			<input type="hidden" class="form-control form-control-sm mb-1" name="ttokens" id="ttokens" autocomplete="off" />
			<input type="hidden" class="form-control form-control-sm mb-1" name="pidsrmodule" id="pidsrmodule" value="leptospirosis" autocomplete="off" />
			<table id="ws_LeptospirosisTbl" class="table table-responsive-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr align="center">
						<th><input type="checkbox" id="checkAll_patient" title="Check all">&nbsp;Check All</th>
						<th>PATIENT NAME</th>
						<th>BIRTHDATE</th>
						<th>SEX</th>
						<th>TYPE OF ENCOUNTER</th>
						<th>CONSULT DATE</th>
						<th>DATE ONSET</th>
						<th>DATE UPLOADED</th>
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
			<div class="modal-content">
				<div class="modal-body">
					<div id="mySubmitProgress">
						<div id="mySubmitBar" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuemin="0" aria-valuemax="100">0% success</div>
						<div align="center">
							<label class="text-success"><b>
									<br>
									<h6>Sending Leptospirosis Data &nbsp;&nbsp;
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
<script src="<?php echo base_url() ?>assets/scripts/ws_pidsr/leptospirosis.js"></script>