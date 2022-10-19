<form id="frmFilm" method="post">
	<div class="modal" id="modalFilm" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
						<div class="float-left">
								<div class="h4 modal-title text-success">Film Entry/s</div>
						</div>
						<button type="button" class="btn btn-outline-success float-right mb-2" onclick="addFilmEntry();"><i class="fa fa-plus"></i> Add new</button>
					</div>
							<table id="filmList" class="table table-sm table-striped table-bordered table-condensed table-hover">
								<thead>
									<tr>
										<th></th>
										<th>Datelog<small>(mm/dd/yyyy)</small></th>
										<th>Film Type</th>
										<th>Type No</th>
										<th>Spoil</th>
										<th width="50px"></th>
									</tr>
								</thead>
							</table>
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
					</div>
				</div>
		</div>
	</div>
	</div>
</form>

<script src="<?php echo base_url()?>assets/scripts/radiology/_films.js"></script>




