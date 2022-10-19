<form id="frmCodeDiagnosis" name="frmCodeDiagnosis" class="form">
	<div class="modal" id="codeDiagnosisModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-stethoscope"></i> Diagnosis</h5>
					<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="alert alert-info mb-3" role="alert">
						<div class="form-row">
							<div class="col">
								<span id="diagnosesText" class="font-weight-bolder"></span>
							</div>
						</div>
					</div>

					<div class="custom-control custom-switch mb-3">
						<input type="checkbox" class="custom-control-input" id="primediag" name="primediag" value="Y">
						<label class="custom-control-label" for="primediag">Primary Diagnosis?</label>
					</div>

					<fieldset class="border p-3 mb-3">
						<legend class="h5 w-auto">ICD-10 Coding</legend>
						<div class="form-row">
							<div class="col-md-4 col-form-label text-default mb-1">
								ICD-10 Code:
							</div>
							<div class="col-md-8">
								<select multiple name="diagICD_diag[]" id="diagICD_diag" class="form-control form-control mb-1">

								</select>
							</div>
							<!--br>
						<div class="col-md-4 col-form-label text-default mb-1">
							Description:
						</div>
						<div class="col-md-8">
							<input type="text" name="diagICD_desc" id ="diagICD_desc" class="form-control form-control mb-1">
						</div-->
						</div>
					</fieldset>

					<!-- ICD 11 Coding -->
					<?php if ($this->config->item('icd11_api_uri')) { ?>
						<fieldset class="border p-3">
							<legend class="h5 w-auto">ICD-11 Coding</legend>

							<div class="form-row mb-2">
								<div class="col-md-4 col-form-label text-default mb-1">
									ICD-11 Code
								</div>
								<div class="col-md-8">
									<!-- input element used for typing the search  -->
									<input type="text" class="form-control form-control-mb" name="icd11_code" id="icd11_code_1" readonly>
								</div>
							</div>

							<div class="form-row mb-2">
								<div class="col-md-4 col-form-label text-default mb-1">
									ICD-11 Title
								</div>
								<div class="col-md-8">
									<!-- input element used for typing the search  -->
									<input type="text" class="form-control form-control-mb" name="icd11_title" id="icd11_title_1" readonly>
									<input type="hidden" class="form-control form-control-mb" name="icd11_linearization_uri" id="icd11_linearization_uri_1" readonly>
									<input type="hidden" class="form-control form-control-mb" name="icd11_foundation_uri" id="icd11_foundation_uri_1" readonly>
									<input type="hidden" class="form-control form-control-mb" name="icd11_selected_text" id="icd11_selected_text_1" readonly>
								</div>
							</div>

							<div class="form-row mb-4">
								<div class="col-md-4 col-form-label text-default mb-1">
									Search ICD-11 Code:
								</div>
								<div class="col-md-8">
									<!-- input element used for typing the search  -->
									<input type="text" class="ctw-input form-control form-control-mb" autocomplete="off" data-ctw-ino="1">
								</div>
							</div>

							<!-- div element used for showing the search results -->
							<div class="ctw-window mb-4" data-ctw-ino="1"></div>

							<div class="manual_postcoordination_div">
								<div class="form-row mb-4 p-2 border manual_extension_2" style="display:none;">
									<div class="col-md-4 col-form-label text-default mb-1">
										Postcoordination ICD-11 Code:
									</div>
									<div class="col-md-8">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_id[]" id="icd11_id_2" readonly="">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_code[]" id="icd11_code_2" readonly="" placeholder="Code">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_title[]" id="icd11_title_2" readonly="" placeholder="Title">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_linearization_uri[]" id="icd11_linearization_uri_2" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_foundation_uri[]" id="icd11_foundation_uri_2" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_selected_text[]" id="icd11_selected_text_2" readonly>
										<input type="text" class="ctw-input form-control form-control-mb mb-1" autocomplete="off" data-ctw-ino="2">
										<!-- <label class="c-switch c-switch-pill c-switch-label c-switch-opposite-primary">
											<input type="radio" class="c-switch-input" id="is_cluster_2" name="is_cluster[]" checked>
											<span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
										</label> -->
										<!-- <div class="custom-control custom-switch mb-1">
											<input type="checkbox" class="custom-control-input" id="is_cluster_2" name="is_cluster[]" value="1" checked>
											<label class="custom-control-label" for="is_cluster_2">Is Cluster?</label>
										</div> -->
										<div class="form-inline">
											<label class="mr-2">Is Cluster?</label>
										
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[0]" id="is_cluster_2_yes" value="1" checked>
												<label class="form-check-label" for="is_cluster_2_yes">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[0]" id="is_cluster_2_no" value="0">
												<label class="form-check-label" for="is_cluster_2_no">No</label>
											</div>
										</div>
										<span class="remove_extension cursor-pointer position-absolute" style="right:0; bottom:0;"><i class="fa fa-trash text-danger p-2" aria-hidden="true"></i></span>
									</div>
									<div class="ctw-window mb-4" data-ctw-ino="2"></div>
								</div>
								<div class="form-row mb-4 p-2 border manual_extension_3" style="display:none;">
									<div class="col-md-4 col-form-label text-default mb-1">
										Postcoordination ICD-11 Code:
									</div>
									<div class="col-md-8">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_id[]" id="icd11_id_3" readonly="">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_code[]" id="icd11_code_3" readonly="" placeholder="Code">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_title[]" id="icd11_title_3" readonly="" placeholder="Title">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_linearization_uri[]" id="icd11_linearization_uri_3" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_foundation_uri[]" id="icd11_foundation_uri_3" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_selected_text[]" id="icd11_selected_text_3" readonly>
										<input type="text" class="ctw-input form-control form-control-mb" autocomplete="off" data-ctw-ino="3">
										<!-- <div class="custom-control custom-switch mb-1">
											<input type="checkbox" class="custom-control-input" id="is_cluster_3" name="is_cluster[]" value="1" checked>
											<label class="custom-control-label" for="is_cluster_3">Is Cluster?</label>
										</div> -->
										<div class="form-inline">
											<label class="mr-2">Is Cluster?</label>
										
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[1]" id="is_cluster_3_yes" value="1" checked>
												<label class="form-check-label" for="is_cluster_3_yes">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[1]" id="is_cluster_3_no" value="0">
												<label class="form-check-label" for="is_cluster_3_no">No</label>
											</div>
										</div>
										<span class="remove_extension cursor-pointer position-absolute" style="right:0; bottom:0;"><i class="fa fa-trash text-danger p-2" aria-hidden="true"></i></span>
									</div>
									<div class="ctw-window mb-4" data-ctw-ino="3"></div>
								</div>
								<div class="form-row mb-4 p-2 border manual_extension_4" style="display:none;">
									<div class="col-md-4 col-form-label text-default mb-1">
										Postcoordination ICD-11 Code:
									</div>
									<div class="col-md-8">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_id[]" id="icd11_id_4" readonly="">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_code[]" id="icd11_code_4" readonly="" placeholder="Code">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_title[]" id="icd11_title_4" readonly="" placeholder="Title">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_linearization_uri[]" id="icd11_linearization_uri_4" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_foundation_uri[]" id="icd11_foundation_uri_4" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_selected_text[]" id="icd11_selected_text_4" readonly>
										<input type="text" class="ctw-input form-control form-control-mb" autocomplete="off" data-ctw-ino="4">
										<!-- <div class="custom-control custom-switch mb-1">
											<input type="checkbox" class="custom-control-input" id="is_cluster_4" name="is_cluster[]" value="1" checked>
											<label class="custom-control-label" for="is_cluster_4">Is Cluster?</label>
										</div> -->
										<div class="form-inline">
											<label class="mr-2">Is Cluster?</label>
										
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[2]" id="is_cluster_4_yes" value="1" checked>
												<label class="form-check-label" for="is_cluster_4_yes">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[2]" id="is_cluster_4_no" value="0">
												<label class="form-check-label" for="is_cluster_4_no">No</label>
											</div>
										</div>
										<span class="remove_extension cursor-pointer position-absolute" style="right:0; bottom:0;"><i class="fa fa-trash text-danger p-2" aria-hidden="true"></i></span>
									</div>
									<div class="ctw-window mb-4" data-ctw-ino="4"></div>
								</div>
								<div class="form-row mb-4 p-2 border manual_extension_5" style="display:none;">
									<div class="col-md-4 col-form-label text-default mb-1">
										Postcoordination ICD-11 Code:
									</div>
									<div class="col-md-8">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_id[]" id="icd11_id_5" readonly="">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_code[]" id="icd11_code_5" readonly="" placeholder="Code">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_title[]" id="icd11_title_5" readonly="" placeholder="Title">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_linearization_uri[]" id="icd11_linearization_uri_5" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_foundation_uri[]" id="icd11_foundation_uri_5" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_selected_text[]" id="icd11_selected_text_5" readonly>
										<input type="text" class="ctw-input form-control form-control-mb" autocomplete="off" data-ctw-ino="5">
										<!-- <div class="custom-control custom-switch mb-1">
											<input type="checkbox" class="custom-control-input" id="is_cluster_5" name="is_cluster[]" value="1" checked>
											<label class="custom-control-label" for="is_cluster_5">Is Cluster?</label>
										</div> -->
										<div class="form-inline">
											<label class="mr-2">Is Cluster?</label>
										
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[3]" id="is_cluster_5_yes" value="1" checked>
												<label class="form-check-label" for="is_cluster_5_yes">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[3]" id="is_cluster_5_no" value="0">
												<label class="form-check-label" for="is_cluster_5_no">No</label>
											</div>
										</div>
										<span class="remove_extension cursor-pointer position-absolute" style="right:0; bottom:0;"><i class="fa fa-trash text-danger p-2" aria-hidden="true"></i></span>
									</div>
									<div class="ctw-window mb-4" data-ctw-ino="5"></div>
								</div>
								<div class="form-row mb-4 p-2 border manual_extension_6" style="display:none;">
									<div class="col-md-4 col-form-label text-default mb-1">
										Postcoordination ICD-11 Code:
									</div>
									<div class="col-md-8">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_id[]" id="icd11_id_6" readonly="">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_code[]" id="icd11_code_6" readonly="" placeholder="Code">
										<input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_title[]" id="icd11_title_6" readonly="" placeholder="Title">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_linearization_uri[]" id="icd11_linearization_uri_6" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_foundation_uri[]" id="icd11_foundation_uri_6" readonly="">
										<input type="hidden" class="form-control form-control-mb" name="icd11_extension_selected_text[]" id="icd11_selected_text_6" readonly>
										<input type="text" class="ctw-input form-control form-control-mb" autocomplete="off" data-ctw-ino="6">
										<!-- <div class="custom-control custom-switch mb-1">
											<input type="checkbox" class="custom-control-input" id="is_cluster_6" name="is_cluster[]" value="1" checked>
											<label class="custom-control-label" for="is_cluster_6">Is Cluster?</label>
										</div> -->
										<div class="form-inline">
											<label class="mr-2">Is Cluster?</label>
										
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[4]" id="is_cluster_6_yes" value="1" checked>
												<label class="form-check-label" for="is_cluster_6_yes">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_cluster[4]" id="is_cluster_6_no" value="0">
												<label class="form-check-label" for="is_cluster_6_no">No</label>
											</div>
										</div>
										<span class="remove_extension cursor-pointer position-absolute" style="right:0; bottom:0;"><i class="fa fa-trash text-danger p-2" aria-hidden="true"></i></span>
									</div>
									<div class="ctw-window mb-4" data-ctw-ino="6"></div>
								</div>
							</div>

							<div class="form-row mb-4">
								<div class="col-md-4 col-form-label text-default mb-1">
									<button class="btn btn-outline-success btn-sm manual_postcoordination" data-original-title="Add Manual Postcoordination" data-toggle="tooltip"><i class="fa fa-plus"></i> Add Manual Postcoordination</button>
								</div>
							</div>
						</fieldset>
					<?php } ?>
					<input type="hidden" name="diagEnccode" id="diagEnccode">
					<input type="hidden" name="diagencDate" id="diagencDate">
				</div>
				<div class="modal-footer bg-secondary">
					<div class="btn-group float-right">
						<button type="submit" name="btnSaveDiag" id="btnSaveDiag" class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
						<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>