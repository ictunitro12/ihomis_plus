<div class="modal" id="addAttachment" name="addAttachmentModal" tabindex="-1" role="dialog">
	<form name="attachForm" id="attachForm" method="post" enctype="multipart/form-data">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-search"></i> Add Claim Attachments</h2>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-4 col-form-label  text-default mb-1">
							Claim Number:
						</div>
						<div class="col-8 mb-1">
							<input type="text" name="claimNumber" id="claimNumber" class="form-control" readonly />
						</div>
					</div>
					<div class="row" style="display:none;">
						<div class="col-4 col-form-label  text-default mb-1">
							Code:
						</div>
						<div class="col-8 mb-1">
							<input type="text" name="enccode" id="enccode" class="form-control" readonly />
						</div>
					</div>
					<div class="row">
						<div class="col-4 col-form-label  text-default mb-1">
							Patient Name:
						</div>
						<div class="col-8 mb-1">
							<input type="text" name="patientName" id="patientName" class="form-control" readonly />
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-1">
							<button type="button" class="btn btn-success mb-2 fileinput-button">Add File</button>
							<div class="row">
								<div class="col-3 d-flex align-items-center">
									<p><strong>DOC TYPE</strong></p>
								</div>
								<div class="col-4 d-flex align-items-center">
									<p class=""><strong>FILE NAME</strong>
									</p>
								</div>
								<div class="col-1 d-flex align-items-center">
									<p class=""><strong>LOCAL</strong>
									</p>
								</div>
								<div class="col-1 d-flex align-items-center">
									<p class=""><strong>CLOUD</strong>
									</p>
								</div>
								<div class="col-auto">
								</div>
							</div>
							<div class="table table-striped files" id="previews">
								<div id="template" class="row mb-1">
									<div class="col-3 d-flex align-items-center">
										<div data-dz-claimdocument>
										<select class="form-control claimDocument">
											<?php
											foreach ($claimDocuments as $claimDocument) {
												echo '<option value="' . $claimDocument->pClaimDocCode . '">' . $claimDocument->pClaimDocCode . ' - ' . $claimDocument->pClaimDocDesc . '</option>';
											}
											?>
										</select>
										</div>
									</div>
									<div class="col-4 d-flex align-items-center">
										<p class="mb-0">
											<span class="" data-dz-name></span>
										</p>
										<strong class="error text-danger" data-dz-errormessage></strong>
									</div>
									<div class="col-1 d-flex align-items-center">
										<p class="mb-0">
											<span class="" data-dz-local></span>
										</p>
										<strong class="error text-danger" data-dz-errormessage></strong>
									</div>
									<div class="col-1 d-flex align-items-center">
										<p class="mb-0">
											<span class="" data-dz-cloud></span>
										</p>
										<strong class="error text-danger" data-dz-errormessage></strong>
									</div>
									<div class="col-auto d-flex align-items-center" data-dz-actions>
										
<!-- 											<button data-dz-reupload class="btn btn-success mr-2 reupload">
												<i class="fa fa-refresh"></i>
											</button> -->
											<button data-dz-remove class="btn btn-danger mr-2 delete" data-toggle="tooltip" data-placement="top" title="Delete attachment">
												<i class="fa fa-trash"></i>
											</button>
										
									</div>
								</div>
							</div>
							<!-- <table id="attachmentTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
								<thead class="thead-dark">
									<tr>
										<th>DOC TYPE</th>
										<th>FILE NAME</th>
										<th></th>
									</tr>
								</thead>
								<tbody id="preview">
									<tr id="template">
										<td></td>
										<td><span class="lead" data-dz-name></span></td>
										<td>
											<button data-dz-remove class="btn btn-danger delete">
                          						<i class="fas fa-trash"></i>
                          						<span>Delete</span>
                        					</button>
										</td>
									</tr>
								</tbody>
							</table> -->
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>
					<p class="text-danger">*1.5MB Maximum size per file</p>
					<button type="button" class="btn btn-danger btn-lg btn-ladda mr-2 cancel-eclaim-upload"> Cancel</button>
					<button type="button" class="btn btn-primary btn-lg btn-ladda mr-2 save-only-attachment"> Save</button>
					<button type="button" class="btn btn-success btn-lg ladda-button start-upload" data-style="zoom-in"><i class="fa fa-send"></i> Upload</button>
				</div>
			</div>
		</div>
	</form>
</div>