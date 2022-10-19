	<div class="h6 text-success p-2"><i class="fa fa-th-list"></i> List of Chargeslip/s</div>
	<table id="chargestbl" style="cursor:pointer"  class="table table-sm table-condensed table-bordered scroll"width="100%">
		<thead>
		<div class="row border-bottom p-2"> 
						<div class="col-md-12">
							<div class="h6 form-label text-success">Mode:</div>
							<div class="form-check">
							<input  type="radio"  id="modeofCharge" name="modeofCharge" onchange="modeof(this.value);" value="1">
							<span> :Type of charge</span>
							<label class="form-check-label" for="toc"></label>
					</div>
					<div class="form-check">
						<input  type="radio"  id="modeofCharge" onchange="modeof(this.value);" name="modeofCharge" value="3" >
							<span> :Chargeslip</span>
							<label class="form-check-label" for="pchrgslip"></label>
					</div>
						</div>
					</div>
	</thead>
	</table>