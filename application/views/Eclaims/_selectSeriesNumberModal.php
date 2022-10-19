<div class="modal fade" id="lhio_series_number" name="lhio_series_number" tabindex="-1" role="dialog">
	<form name="lhio_series_number_form" id="lhio_series_number_form" method="post">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h2 class="modal-title text-success">Select LHIO Series Number</h2>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-4 col-form-label  text-default mb-1">
							LHIO Series Number: <i class="fa fa-asterisk text-danger"></i>
						</div>
						<div class="col-8 mb-1">
							<select class="form-control" name="lhio_series" id="lhio_series" multiple required>
								<option>a</option>
								<option>b</option>
								<option>c</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="button" class="btn btn-danger btn-lg btn-ladda mr-2" data-dismiss="modal" data-style="zoom-in"> Cancel</button>
					<button type="submit" class="btn btn-success btn-lg btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> Submit</button>
				</div>
			</div>
		</div>
	</form>
</div>

<script>
	$(document).ready(function() {
		$("#lhio_series").select2({
			placeholder: 'Select one or multiple lhio series'
		});
	});
</script>