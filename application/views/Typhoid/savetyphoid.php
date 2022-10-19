<form id="frmSaveTyphoid" name ="frmSaveTyphoid" method="POST">
	<input id="formIdentif" type="hidden" name="formIdentif">
	<input id="saveenccode" type="hidden" name="saveenccode">
	<input id="savehpercode" type="hidden" name="savehpercode">

	<div class="modal fade" id="TyphoidSummary" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-user"></i> Do you want to save?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<input id="typ_hospcode" type="hidden" name="typ_hospcode">
					<input id="typ_typecode" type="hidden" name="typ_typecode">
					<input id="typ_info_street_temp" type="hidden" name="typ_info_street_temp">
					<input id="typ_selBrgyTemp" type="hidden" name="typ_selBrgyTemp">
					<input id="typ_selCityTemp" type="hidden" name="typ_selCityTemp">
					<input id="typ_selProvTemp" type="hidden" name="typ_selProvTemp">
					<input id="typ_selRegTemp" type="hidden" name="typ_selRegTemp">

					<input id="typ_sample" type="hidden" name="typ_sample">
					<input id="typ_admit" type="hidden" name="typ_admit">

					<!--first page-->
					<input type="hidden" name="typ_selIndig" id="typ_selIndig">
					<input type="hidden" name="typ_consult" id="typ_consult">
					<input type="hidden" name="typ_seen" id="typ_seen">
					<input type="hidden" name="typ_FIRST" id="typ_FIRST">
					<input type="hidden" name="typ_place_consult" id="typ_place_consult">
					<input type="hidden" name="typ_onset_ill" id="typ_onset_ill">

					<!--2nd page-->
					<input type="hidden" name="typ_specimen_collect" id="typ_specimen_collect">
					<input type="hidden" name="typ_widal" id="typ_widal">
					<input type="hidden" name="typ_typhoidot" id="typ_typhoidot">
					<input type="hidden" name="typ_tube" id="typ_tube">
					<input type="hidden" name="typ_stool" id="typ_stool">
					<input type="hidden" name="typ_case_classif" id="typ_case_classif">
					<input type="hidden" name="typ_out" id="typ_out">


				</div>

				<div class="modal-footer bg-secondary">
					<button type="submit" name="btnSave" id="btnSave"  class="btn btn-success  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>

				</div>
			</div>
		</div>
	</div>
</form>


