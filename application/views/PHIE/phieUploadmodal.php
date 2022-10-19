<style>
	#mySubmitBar {
		width: 0%;
		height: 20px;
		text-align: center;
		line-height: 30px;
		color: white;
	}
	#mySubmitBars {
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

<!-- PatientData modal -->
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
									<h6>Uploading 
										<i class="fa fa-sm fa-cloud-upload blink"></i> 
										<i class="fa fa-md fa-cloud-upload blink-one"></i> 
										<i class="fa fa-lg fa-cloud-upload blink-two"></i>
									</h6>
								</b></label> &nbsp;
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->
<!-- PatientData modal -->
<form id="ProgressBarEncounter">
	<div class="modal fade" id="ModalProgressEncounter" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div>
						<div id="mySubmitBars" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuemin="0" aria-valuemax="100">0% success</div>
						<div align="center">
							<label class="text-success"><b>
									<br>
									<h6>Encounter Data uploading 
										<i class="fa fa-sm fa-cloud-upload blink"></i> 
										<i class="fa fa-md fa-cloud-upload blink-one"></i> 
										<i class="fa fa-lg fa-cloud-upload blink-two"></i>
									</h6>
								</b></label> &nbsp;
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->
