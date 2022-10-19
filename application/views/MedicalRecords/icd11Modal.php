<div class="modal fade" id="icd11Modal" tabindex="-1" role="form">
	<div class="modal-dialog modal-dialog modal-lg" role="form">
		<div class="modal-content">
			<form name="icd11Form" id="icd11Form">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white">ICD-11 for Mortality and Morbidity Statistics</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="form-row mb-4">
						<div class="col-md-4 col-form-label text-default mb-1">
							Encounter Code
						</div>
						<div class="col-md-8">
							<!-- input element used for typing the search  -->
							<input type="text" class="form-control form-control-mb" name="enccode" id="enccode" readonly>
							<input type="hidden" class="form-control form-control-mb" name="encdate" id="encdate" readonly>
						</div>
					</div>

					<div class="form-row mb-4">
						<div class="col-md-4 col-form-label text-default mb-1">
							ICD11 Code
						</div>
						<div class="col-md-8">
							<!-- input element used for typing the search  -->
							<input type="text" class="form-control form-control-mb" name="icd11_code" id="icd11_code" readonly>
						</div>
					</div>

					<div class="form-row mb-4">
						<div class="col-md-4 col-form-label text-default mb-1">
							ICD11 Title
						</div>
						<div class="col-md-8">
							<!-- input element used for typing the search  -->
							<input type="text" class="form-control form-control-mb" name="icd11_title" id="icd11_title" readonly>
							<input type="hidden" class="form-control form-control-mb" name="icd11_linearization_uri" id="icd11_linearization_uri" readonly>
							<input type="hidden" class="form-control form-control-mb" name="icd11_foundation_uri" id="icd11_foundation_uri" readonly>
							<input type="hidden" class="form-control form-control-mb" name="icd11_selected_text" id="icd11_selected_text" readonly>
						</div>
					</div>

					<div class="form-row mb-4">
						<div class="col-md-4 col-form-label text-default mb-1">
							Search ICD11 Code:
						</div>
						<div class="col-md-8">
							<!-- input element used for typing the search  -->
							<input type="text" class="ctw-input form-control form-control-mb" autocomplete="off" data-ctw-ino="1">
						</div>
					</div>

					<!-- div element used for showing the search results -->
					<div class="ctw-window" data-ctw-ino="1"></div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit" class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
					<button type="button" class="btn btn-danger btn-square btn-ladda close-icd-modal" data-style="zoom-in"><i class="fa fa-close"></i>CLOSE</button>
				</div>
			</form>
		</div>
	</div>
</div>