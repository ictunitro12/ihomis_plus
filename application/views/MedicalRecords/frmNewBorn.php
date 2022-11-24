
<!--------FORM UPDATE NEWBORN-------->

<form id="frmNewBorn" name="frmNewBorn">
	<div class="modal fade" id="patientNewBornModal" role="form">
		<div class="modal-dialog modal-dialog modal-lg" role="dialog">
			<div class="modal-content">	
				<div class="modal-body">
					<h5 class="modal-title text-success"><i class="fas fa-baby"></i>&nbsp New Born</h5>
					<div class="form-row">	
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>First Name:
						</div>	
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="patfname" name="patfname" placeholder ="First Name" required>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Middle Name:
						</div>	
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"  id="patmname" name="patmname" placeholder ="Middle Name" required="">
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Last Name:
						</div>	
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="patlname" name="patlname" placeholder ="Last Name" required>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Sex:
						</div>
						<div class="col-md-4">
							<select name="babysex" id="babysex" class="form-control form-control-md" required>
								<option value="">Select</option>
								<option value="M">Male</option>
								<option value="F">Female</option>
							</select>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Date of Birth:
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="patdob" name="patdob" required>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							Distinguishing Marks:
						</div>	
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="marks" name="marks" placeholder ="Distinguishing Marks">
						</div>
						<br><br><br>
						<div class="col-md-12">
							<h5 class="modal-title text-success"><i class="fa fa-stethoscope"></i>&nbsp Physical Examination</h5>
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Date:
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="dateexam" name="dateexam">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Hour After Birth:
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hour_birth" name="hour_birth" placeholder="Hour After Birth">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Apagar Score at Birth
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="apagar_birth" name="apagar_birth" placeholder ="Apagar Score at Birth">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Mesurement
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyexam_measure" name="phyexam_measure" placeholder ="Mesurement">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Apagar Score Min. After
						</div>

						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="apagar_minafter" name="apagar_minafter" placeholder ="Apagar Score Min. After">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Head
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyexam_head" name="phyexam_head" placeholder ="Head">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Apagar Score 10 Min. After
						</div>
						
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="apagar_ten_minafter" name="apagar_ten_minafter" placeholder ="Apagar Score 10 Min. After">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Circumference
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyexam_circum" name="phyexam_circum" placeholder ="Circumference">
						</div>


						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i> General Condition
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_cond" name="gen_cond" placeholder ="General Condition" required> 
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Chest
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyexam_chest" name="phyexam_chest" placeholder ="Chest">
						</div>


						<div class="col-md-2 col-form-label text-default mb-1">
							Abdomen
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyexam_abdomen" name="phyexam_abdomen" placeholder ="Abdomen">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Birth Weight
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyexam_weight" name="phyexam_weight" placeholder ="Weight at Birth (grams)" required="">
						</div>


						<div class="col-md-2 col-form-label text-default mb-1">
							Birth Length
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyexam_length" name="phyexam_length" placeholder ="Birth Length">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Pathologic
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyexam_patho" name="phyexam_patho" placeholder ="Pathologic">
						</div>

						<br><br><br>
						<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#OtherData" aria-expanded="false" aria-controls="OtherData">
							<b>GENERAL MUSCULAR TONUS</b>
						</button>

						<div class="collapse" id="OtherData">
							<div class="card card-body bg-secondary">
								<div class="form-row">									
									<div class="col-md-4">
										<b>GENERAL MUSCULAR TONUS</b>
									</div>
									<div class="col-md-8">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_muscu" name="gen_muscu" placeholder ="General Muscular Tonus">
									</div>

									<div class="col-md-6">
										<b>SKIN</b>
									</div>

									<div class="col-md-6">
										<b>HEAD</b>
									</div>
									
									<div class="col-md-2">
										Color:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="skin_color" name="skin_color" placeholder ="Skin">
									</div>


									<div class="col-md-2">
										Molding:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="head_mold" name="head_mold" placeholder ="Molding">
									</div>

									<div class="col-md-2">
										Turgon:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="skin_turgon" name="skin_turgon" placeholder ="Turgon">
									</div>

									<div class="col-md-2">
										Scalp:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="head_scalp" name="head_scalp" placeholder ="Scalp">
									</div>

									<div class="col-md-2">
										Rash:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="skin_rash" name="skin_rash" placeholder ="Rash">
									</div>

									<div class="col-md-2">
										Fontanells:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="head_fontanellss" name="head_fontanellss" placeholder ="Fontanells">
									</div>

									<div class="col-md-2">
										Desquamentation:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="skin_desqua" name="skin_desqua" placeholder ="Desquamentation">
									</div>									

									<div class="col-md-2">
										Suture:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="head_suture" name="head_suture" placeholder ="Suture">
									</div>


									<br><br><br>
									<div class="col-md-2">
										<b>NECK</b>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_neck" name="gen_neck" placeholder ="NECK">
									</div>


									<div class="col-md-2">
										<b>FACE</b>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_face" name="gen_face" placeholder ="FACE">
									</div>

									<div class="col-md-2">
										Sternoclaidomastoid
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="neck_sternoclai" name="neck_sternoclai" placeholder ="Sternoclaidomastoid">
									</div>

									<div class="col-md-2">
										<b>EARS</b>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_ears" name="gen_ears" placeholder ="Ears">
									</div>

									<div class="col-md-2">
										Fistula:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="neck_fistulla" name="neck_fistulla" placeholder ="Fistula">
									</div>

									<div class="col-md-2">
										<b>NOSE</b>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_nose" name="gen_nose" placeholder ="Nose">
									</div>

									<div class="col-md-2">
										Other Findings
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="neck_oth" name="neck_oth" placeholder ="Nose">
									</div>
									<div class="col-md-6">
										
									</div>



									<br><br><br>
									<div class="col-md-6">
										<b>EYES</b>
									</div>

									<div class="col-md-6">
										<b>MOUTH</b>
									</div>
									<div class="col-md-2">
										Conjuctives:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="eyes_conj" name="eyes_conj" placeholder ="Conjuctives">
									</div>

									<div class="col-md-2">
										Lip:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="mouth_lip" name="mouth_lip" placeholder ="Lip">
									</div>	

									<div class="col-md-2">
										Scelra:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="eyes_scelra" name="eyes_scelra" placeholder ="Scelra">
									</div>

									<div class="col-md-2">
										Tongue:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="mouth_tongue" name="mouth_tongue" placeholder ="Tongue">
									</div>

									<div class="col-md-2">
										Pupils:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="eyes_pupils" name="eyes_pupils" placeholder ="Pupils">
									</div>


									<div class="col-md-2">
										Palate:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="mouth_palate" name="mouth_palate" placeholder ="Palate">
									</div>


									<div class="col-md-2">
										Discharge:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="eyes_disc" name="eyes_disc" placeholder ="Discharge">
									</div>

									<div class="col-md-6">
									</div>									

									<br><br><br>
									<div class="col-md-12">
										<b>CHEST</b>
									</div>

									<div class="col-md-2">
										Shape:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="chest_shape" name="chest_shape" placeholder ="Shape">
									</div>

									<div class="col-md-2">
										Respiration:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="chest_respi" name="chest_respi" placeholder ="Respiration">
									</div>

									<div class="col-md-2">
										Clavicles:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="chest_clavi" name="chest_clavi" placeholder ="Clavicles">
									</div>

									<div class="col-md-2">
										Breast:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="chest_breast" name="chest_breast" placeholder ="Breast">
									</div>

									<div class="col-md-2">
										Heart:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="chest_heart" name="chest_heart" placeholder ="Heart">
									</div>

									<div class="col-md-2">
										Lungs:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="chest_lungs" name="chest_lungs" placeholder ="Lungs">
									</div>
									<div class="col-md-2">
										<b>IMPRESSION</b>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_impress" name="gen_impress" placeholder ="Impression">
									</div>

									<br><br><br>

									<div class="col-md-2">
										Abdomen:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_abdomen" name="gen_abdomen" placeholder ="Abdomen">
									</div>

									<div class="col-md-2">
										Spleen:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_spleen" name="gen_spleen" placeholder ="Spleen">
									</div>

									<div class="col-md-2">
										Kidneys:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_kidney" name="gen_kidney" placeholder ="Kidneys">
									</div>

									<div class="col-md-2">
										Liver:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_liver" name="gen_liver" placeholder ="Liver">
									</div>

									<div class="col-md-2">
										Umbilical Cord:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_umbicord" name="gen_umbicord" placeholder ="Umbilical Cord">
									</div>

									<div class="col-md-12">									
									</div>
									<br>
									<div class="col-md-2">
										Inguinal Hernia:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_ingui" name="gen_ingui" placeholder ="Inguinal Hernia">
									</div>

									<div class="col-md-2">
										Diactatis Recti:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_diact" name="gen_diact" placeholder =" Diactatis Recti">
									</div>

									<div class="col-md-2">
										Other Findings:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_othfind" name="gen_othfind" placeholder ="Other Findings">
									</div>
									<div class="col-md-12">									
									</div>
									<br>

									<div class="col-md-2">
										Genitals:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_genitals" name="gen_genitals" placeholder ="Genitals">
									</div>

									<div class="col-md-2">
										Abnormalities:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_abno" name="gen_abno" placeholder ="Abnormalities">
									</div>

									<div class="col-md-2">
										Male Testes:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_testes" name="gen_testes" placeholder ="Male Testes">
									</div>

									<div class="col-md-1">
										Tr:
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_tr" name="gen_tr" placeholder ="Tr">
									</div>

									<div class="col-md-1">
										L:
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_l" name="gen_l" placeholder ="L">
									</div>
									<br><br>
									<div class="col-md-2">
										Vaginal Bleeding:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_vagina" name="gen_vagina" placeholder ="Vaginal Bleeding">
									</div>

									<div class="col-md-2">
										Abnormalities:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_abno2" name="gen_abno2" placeholder ="Abnormalities">
									</div>

									<div class="col-md-2">
										Extremities:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_extreme" name="gen_extreme" placeholder ="Extremities">
									</div>

									<div class="col-md-2">
										Clubfoot:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_clubfoot" name="gen_clubfoot" placeholder ="Clubfoot">
									</div>

									<div class="col-md-2">
										Hip Dislocation:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_hipdisc" name="gen_hipdisc" placeholder ="Hip Dislocation">
									</div>

									<div class="col-md-2">
										Femoral Pulse:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_femo" name="gen_femo" placeholder ="Femoral Pulse">
									</div>

									<div class="col-md-2">
										Spine:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_spine" name="gen_spine" placeholder ="Spine">
									</div>

									<div class="col-md-2">
										Anus:
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" autocomplete="off"   id="gen_anus" name="gen_anus" placeholder ="Anus">
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="form-row">
						<div class="col-md-3">
							<i class="fa fa-asterisk text-danger"></i>ASSISTANT RESIDENT:
						</div>
						<div class="col-md-9">
							<select name="sel_emp" id="sel_emp" class="form-control form-control-md" required="">
								<option value="">SELECT</option>
							</select>
						</div>

						<div class="col-md-3">
							<i class="fa fa-asterisk text-danger"></i>RESIDENT:
						</div>
						<div class="col-md-9">
							<select name="sel2_emp" id="sel2_emp" class="form-control form-control-md" required="">
								<option value="">SELECT</option>
							</select>
						</div>

						<input type="hidden" id="newbornIden" name="newbornIden"/>

						<input type="hidden" id="moth_enccode" name="moth_enccode"/>
						<input type="hidden" id="moth_hpercode" name="moth_hpercode" />
						<input type="hidden" id="baby_hpatkey" name="baby_hpatkey" />
						<input type="hidden" id="baby_hpercode" name="baby_hpercode" />
						<input type="hidden" id="baby_ctr" name="baby_ctr" />

						<input type="hidden" id="moth_lname" name="moth_lname"/>
						<input type="hidden" id="moth_fname" name="moth_fname" />
						<input type="hidden" id="moth_mname" name="moth_mname" />
						<input type="hidden" id="fat_lname" name="fat_lname"/>
						<input type="hidden" id="fat_fname" name="fat_fname" />
						<input type="hidden" id="fat_mname" name="fat_mname" />

						<input type="hidden" id="baby_str" name="baby_str" />
						<input type="hidden" id="baby_brgy" name="baby_brgy" />
						<input type="hidden" id="baby_city" name="baby_city" />
						<input type="hidden" id="baby_prov" name="baby_prov" />
						<input type="hidden" id="baby_zip" name="baby_zip" />
						<input type="hidden" id="baby_cntry" name="baby_cntry" />

						<input type="hidden" id="updatetime" name="updatetime" />
						<input type="hidden" id="addrdate" name="addrdate" />
					</div>
				</div>	

				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" name="editNewborn" id="editNewborn"  class="btn btn-outline-success" data-style="slide-right"><i class="fa fa-save"></i>&nbsp Save</button>
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>