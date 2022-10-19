<form id="frmSaveInjury" name ="frmSaveInjury" method="POST">
	<input id="formIdentif" type="hidden" name="formIdentif">
	<input id="saveenccode" type="hidden" name="saveenccode">
	<input id="savehpercode" type="hidden" name="savehpercode">

	<div class="modal fade" id="InjurySummary" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-user"></i> Do you want to save?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<input id="typ_dateasof" type="hidden" name="typ_dateasof">
					<input id="typ_newfhud" type="hidden" name="typ_newfhud">
					<input id="typ_info_natregno" type="hidden" name="typ_info_natregno">
					<input type="hidden" name="typ_info_hospcaseno" id="typ_info_hospcaseno">
					<input type="hidden" name="typ_info_typepat" id="typ_info_typepat">

					<input type="hidden" name="typ_info_lname" id="typ_info_lname">
					<input type="hidden" name="typ_info_fname" id="typ_info_fname">
					<input type="hidden" name="typ_info_mname" id="typ_info_mname">					
					<input type="hidden" name="typ_info_sex" id="typ_info_sex">
					<input type="hidden" name="typ_info_dob" id="typ_info_dob">

					<input type="hidden" name="typ_info_year" id="typ_info_year">
					<input type="hidden" name="typ_info_month" id="typ_info_month">
					<input type="hidden" name="typ_info_day" id="typ_info_day">

					<input id="typ_selCity" type="hidden" name="typ_selCity">
					<input id="typ_selProv" type="hidden" name="typ_selProv">
					<input id="typ_selReg" type="hidden" name="typ_selReg">

					<input id="typ_selCityTemp" type="hidden" name="typ_selCityTemp">
					<input id="typ_selProvTemp" type="hidden" name="typ_selProvTemp">
					<input id="typ_selRegTemp" type="hidden" name="typ_selRegTemp">

					<input type="hidden" name="typ_incident_date" id="typ_incident_date">
					<input type="hidden" name="typ_consult_date" id="typ_consult_date">

					<input type="hidden" name="typ_incident_refer" id="typ_incident_refer">
					<input type="hidden" name="typ_selFac" id="typ_selFac">

					<input id="typ_selCityInj" type="hidden" name="typ_selCityInj">
					<input id="typ_selProvInj" type="hidden" name="typ_selProvInj">
					<input id="typ_selRegInj" type="hidden" name="typ_selRegInj">

					<input type="hidden" name="typ_incident_placeoccur" id="typ_incident_placeoccur">
					<input type="hidden" name="typ_incident_otherspec" id="typ_incident_otherspec">

				
					
					<input id="typ_injintent" type="hidden" name="typ_injintent">
					<input id="typ_injaid" type="hidden" name="typ_injaid">
				
					<input type="hidden" name="typ_aid_what" id="typ_aid_what">
					<input type="hidden" name="typ_aid_whom" id="typ_aid_whom">
					<input type="hidden" name="typ_multinj" id="typ_multinj">

					<input type="hidden" name="typ_multi_1" id="typ_multi_1">
					<input type="hidden" name="typ_multi_2" id="typ_multi_2">
					<input type="hidden" name="typ_multi_site" id="typ_multi_site">
					<input type="hidden" name="typ_multi_4" id="typ_multi_4">
					<input type="hidden" name="typ_multi_5" id="typ_multi_5">
					<input type="hidden" name="typ_multi_6" id="typ_multi_6">
					<input type="hidden" name="typ_multi_7" id="typ_multi_7">
					<input type="hidden" name="typ_multi_8" id="typ_multi_8">
					<input type="hidden" name="typ_multi_9" id="typ_multi_9">
					<input type="hidden" name="typ_multi_10" id="typ_multi_10">

					<input type="hidden" name="typ_multi_abra" id="typ_multi_abra">
					<input type="hidden" name="typ_multi_avul" id="typ_multi_avul">
					<input type="hidden" name="typ_multi_burn" id="typ_multi_burn">
					<input type="hidden" name="typ_multi_burn1" id="typ_multi_burn1">
					<input type="hidden" name="typ_multi_burn2" id="typ_multi_burn2">
					<input type="hidden" name="typ_multi_burn3" id="typ_multi_burn3">
					<input type="hidden" name="typ_multi_burn4" id="typ_multi_burn4">

					<input type="hidden" name="typ_multi_conc" id="typ_multi_conc">
					<input type="hidden" name="typ_multi_contu" id="typ_multi_contu">

					<input type="hidden" name="typ_multi_close" id="typ_multi_close">
					<input type="hidden" name="typ_multi_open" id="typ_multi_open">

					<input type="hidden" name="typ_multi_lace" id="typ_multi_lace">
					<input type="hidden" name="typ_multi_ampu" id="typ_multi_ampu">
					<input type="hidden" name="typ_multi_other" id="typ_multi_other">

					<input type="hidden" name="typ_ext_bite" id="typ_ext_bite">
					<input type="hidden" name="typ_ext_1" id="typ_ext_1">
					<input type="hidden" name="typ_ext_gun" id="typ_ext_gun">
					<input type="hidden" name="typ_ext_2" id="typ_ext_2">

					<input type="hidden" name="typ_ext_burn" id="typ_ext_burn">
					<input type="hidden" name="typ_ext_burn1" id="typ_ext_burn1">
					<input type="hidden" name="typ_ext_3" id="typ_ext_3">

					<input type="hidden" name="typ_ext_chem" id="typ_ext_chem">
					<input type="hidden" name="typ_ext_4" id="typ_ext_4">

					<input type="hidden" name="typ_ext_hang" id="typ_ext_hang">

					<input type="hidden" name="typ_ext_contact" id="typ_ext_contact">
					<input type="hidden" name="typ_ext_5" id="typ_ext_5">

					<input type="hidden" name="typ_ext_mau" id="typ_ext_mau">

					<input type="hidden" name="typ_ext_drown" id="typ_ext_drown">
					<input type="hidden" name="typ_ext_drown1" id="typ_ext_drown1">
					<input type="hidden" name="typ_ext_6" id="typ_ext_6">

					<input type="hidden" name="typ_ext_trans" id="typ_ext_trans">

					<input type="hidden" name="ext_expose" id="ext_expose">
					<input type="hidden" name="ext_expose1" id="ext_expose1">
					<input type="hidden" name="typ_ext_7" id="typ_ext_7">

					<input type="hidden" name="typ_ext_fall" id="typ_ext_fall">
					<input type="hidden" name="typ_ext_fall1" id="typ_ext_fall1">
					<input type="hidden" name="typ_ext_8" id="typ_ext_8">

					<input type="hidden" name="typ_ext_cracker" id="typ_ext_cracker">
					<input type="hidden" name="typ_selFire" id="typ_selFire">
					<input type="hidden" name="typ_ext_9" id="typ_ext_9">

					<input type="hidden" name="typ_ext_sex" id="typ_ext_sex">

					<input type="hidden" name="typ_ext_other" id="typ_ext_other">
					<input type="hidden" name="typ_ext_10" id="typ_ext_10">

					<input type="hidden" name="ext_transpo" id="ext_transpo">
					<input type="hidden" name="ext_transpo1" id="ext_transpo1">

					<input type="hidden" name="typ_veh_pat" id="typ_veh_pat">
					<input type="hidden" name="typ_veh_pat1" id="typ_veh_pat1">

					<input type="hidden" name="typ_veh_col" id="typ_veh_col">
					<input type="hidden" name="typ_veh_col1" id="typ_veh_col1">

					<input type="hidden" name="typ_veh_position" id="typ_veh_position">
					<input type="hidden" name="typ_veh_position1" id="typ_veh_position1">

					<input type="hidden" name="typ_veh_placeoccur" id="typ_veh_placeoccur">
					<input type="hidden" name="typ_veh_placework" id="typ_veh_placework">
					<input type="hidden" name="typ_veh_placeoccur1" id="typ_veh_placeoccur1">

					<input type="hidden" name="typ_veh_act" id="typ_veh_act">
					<input type="hidden" name="typ_veh_act1" id="typ_veh_act1">

					<input type="hidden" name="typ_oth_alcohol" id="typ_oth_alcohol">
					<input type="hidden" name="typ_oth_smoking" id="typ_oth_smoking">
					<input type="hidden" name="typ_oth_drugs" id="typ_oth_drugs">
					<input type="hidden" name="typ_oth_mobile" id="typ_oth_mobile">
					<input type="hidden" name="typ_oth_sleepy" id="typ_oth_sleepy">
					<input type="hidden" name="typ_oth_others" id="typ_oth_others">
					<input type="hidden" name="typ_oth_others_spec" id="typ_oth_others_spec">

					<input type="hidden" name="typ_safety_none" id="typ_safety_none">
					<input type="hidden" name="typ_safety_airbag" id="typ_safety_airbag">
					<input type="hidden" name="typ_safety_helmet" id="typ_safety_helmet">
					<input type="hidden" name="typ_safety_child" id="typ_safety_child">
					<input type="hidden" name="typ_safety_seatbelt" id="typ_safety_seatbelt">

					<input type="hidden" name="typ_safety_life" id="typ_safety_life">
					<input type="hidden" name="typ_safety_others" id="typ_safety_others">
					<input type="hidden" name="typ_safety_others_spec" id="typ_safety_others_spec">
					<input type="hidden" name="typ_safety_unk" id="typ_safety_unk">

					<input type="hidden" name="typ_pat_trans" id="typ_pat_trans">
					<input type="hidden" name="typ_pat_refer" id="typ_pat_refer">

					<input type="hidden" name="typ_selFac" id="typ_selFac">
					<input type="hidden" name="typ_pat_physician" id="typ_pat_physician">

					<input type="hidden" name="typ_pat_status" id="typ_pat_status">
					<input type="hidden" name="typ_pat_mode" id="typ_pat_mode">
					<input type="hidden" name="typ_pat_mode1" id="typ_pat_mode1">

					<input type="hidden" name="typ_pat_initial" id="typ_pat_initial">
					<input type="hidden" name="typ_hospital_diag" id="typ_hospital_diag">
					<input type="hidden" name="typ_hospital_ext_diag" id="typ_hospital_ext_diag">

					<input type="hidden" name="typ_pat_disp" id="typ_pat_disp">
					<input type="hidden" name="typ_selFac2" id="typ_selFac2">
					<input type="hidden" name="typ_pat_disp_oth" id="typ_pat_disp_oth">

					<input type="hidden" name="typ_pat_outcome" id="typ_pat_outcome">

					<input type="hidden" name="typ_pat_findiag" id="typ_pat_findiag">
					<input type="hidden" name="typ_pat_disp2" id="typ_pat_disp2">
					<input type="hidden" name="typ_selFac3" id="typ_selFac3">
					<input type="hidden" name="typ_inpat_oth" id="typ_inpat_oth">
					<input type="hidden" name="typ_pat_outcome2" id="typ_pat_outcome2">
					
					<input type="hidden" name="typ_internal_diag" id="typ_internal_diag">
					<input type="hidden" name="typ_external_diag" id="typ_external_diag">
					<input type="hidden" name="typ_pat_comment" id="typ_pat_comment">


				</div>

				<div class="modal-footer bg-secondary">
					<button type="submit" name="btnSave" id="btnSave"  class="btn btn-success  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>

				</div>
			</div>
		</div>
	</div>
</form>


