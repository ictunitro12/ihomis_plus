<style>
	#progress_bar {
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
<form id="Progbar_getEncounter">
	<div class="modal fade" id="ModalGet_Encounter" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div>
						<div id="progress_bar" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuemin="0" aria-valuemax="100">0% success</div>
						<div align="center">
							<label class="text-success"><b>
									<br>
									<h6>Getting encounter data from PHIE &nbsp; 
										<i class="fa fa-sm fa-cloud-download blink"></i> 
										<i class="fa fa-md fa-cloud-download blink-one"></i> 
										<i class="fa fa-lg fa-cloud-download blink-two"></i>
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
