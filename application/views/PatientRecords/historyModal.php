<form id="frmDeleteHistory" name="frmDeleteHistory" method="post">
	<div class="modal" id="deleteHistoModal" name="deleteVitalModal" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"><i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="delhistoenccode" id="delhistoenccode">
			<input type="hidden" name="delhistodatelog" id="delhistodatelog">
			<input type="hidden" name="histoformIdenDelete" id="histoformIdenDelete" value="delete">
		</div>
		<div class="modal-footer ">
		<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
		<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
	</div>
</form>

<!--form id="frmHistory" name="frmHistory" class="form">
<div class="modal" id="histoModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-body">
		<h4 class="modal-title text-success">	<i class="fa fa-history"></i> History</h4>
		<hr>
		<div class="form-row">
			<div class="col-md-4 col-form-label text-default mb-1">
			General Data:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"  readonly id="hisGen" name="hisGen" placeholder ="General Data"></textarea>
			</div>				
			<div class="col-md-4 col-form-label text-default mb-1">
			Past History :
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"  readonly id="hisPast" name="hisPast" placeholder ="Past History"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Clinical History :
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"  readonly id="hisClin" name="hisClin" placeholder ="Clinical History"></textarea>
			</div>			
			<div class="col-md-4 col-form-label text-default mb-1">
			Occupation:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off" readonly  id="hisOccup" name="hisOccup" placeholder ="Occupation"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Complaint:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off" readonly  id="hisComp" name="hisComp" placeholder ="Complaint"></textarea>
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Family History:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off" readonly  id="hisFam" name="hisFam" placeholder ="Family History"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Drug Therapy:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"  readonly  id="hisDrug" name="hisDrug" placeholder ="Drug Therapy"></textarea>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Alcohol:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off" readonly  id="hisAlc" name="hisAlc" placeholder ="Alcohol Intake"></textarea>
			</div>			
			<div class="col-md-4 col-form-label text-default mb-1">
			Tobacco:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off" readonly  id="hisTob" name="hisTob" placeholder ="Tobacco Intake"></textarea>
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Drug Allergies:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off" readonly  id="hisDrgAll" name="hisDrgAll" placeholder ="Drug Allergies"></textarea>
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Other Allergies:
			</div>
			<div class="col-md-8">
				<textarea type="text" class="form-control form-control mb-1" autocomplete="off"  readonly  id="hisOthAll" name="hisOthAll" placeholder ="Other Allergies"></textarea>
						
		</div>
	</div>
		<input type="hidden" name="hisEnccode" id="hisEnccode">
		<input type="hidden" name="hisHpercode" id="hisHpercode">
		<input type="hidden" name="hisformIden" id="hisformIden">
	
	</div>
	<div class="modal-footer ">
	<button type="submit" name="btnSaveHis" id="btnSaveHis"  class="btn btn-success btn-inline  btn-ladda " data-style="slide-right"><i class="fa fa-save"></i>
	</button>
	<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
	</div>
	</div>
</div>
</div>
</form -->