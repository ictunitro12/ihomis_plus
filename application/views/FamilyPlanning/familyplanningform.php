<input name="module" id="module" type="hidden" value="familyplanning">

<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br/><small>Family Planning Form</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-bed fa-2x"></i><br><small>Assessment</small></a>
		</li>
	</ul>

	<div>
		<div id="step-1">
			<form id="form-step-1">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-6">
								<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp; Family Planning Form</h4>

								<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" readonly>
								<input type="hidden" class="form-control form-control-mb" id="hpercodee" name="hpercodee" readonly>
								<input type="hidden" class="form-control form-control-mb" id="typecl" name="typecl" readonly>
								<input type="hidden" class="form-control form-control-mb" id="formIden_famplan" name="formIden_famplan" readonly>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success">
									<i class=" fa fa-user"></i>
									&nbsp General Data
								</div>

								<hr class="bg-success">
								<div class="col-md-12">
									<div class="form-row">
										<div class="col-md-3 col-form-label text-default mb-1"> NHTS?:</div>
										<div class="col-md-3">
											<select name ="nhtss" id ="nhtss" class="form-control">
												<option value="">SELECT</option>
												<option value="Y">Yes</option>
												<option value="N">No</option>
											</select>
										</div>	

										<div class="col-md-3 col-form-label text-default mb-1"> Pantawid Pamilya Pilipino Program (4Ps):</div>
										<div class="col-md-3">
											<select name ="forpis" id ="forpis" class="form-control">
												<option value="">SELECT</option>
												<option value="Y">Yes</option>
												<option value="N">No</option>
											</select>
										</div>	

										<div class="col-md-3 col-form-label text-default mb-1">No. of Living Children:</div>
										<div class="col-md-3">
											<input type="number" class="form-control form-control-mg" placeholder="No. of Living Children" name ="livechild" id="livechild" autocomplete="off"/>
										</div>

										<div class="col-md-3 col-form-label text-default mb-1"> Plan to have more children?:</div>
										<div class="col-md-3">
											<select name ="fam_morechild" id ="fam_morechild" class="form-control">
												<option value="">SELECT</option>
												<option value="Y">Yes</option>
												<option value="N">No</option>
											</select>
										</div>	

										<div class="col-md-3 col-form-label text-default mb-1">Average Montly Income:</div>
										<div class="col-md-3">
											<input type="text" class="form-control form-control-mg" placeholder="Average Montly Income"  name ="monthincome" id="monthincome" autocomplete="off"/>
										</div>	

									</div>
									<hr class="bg-success">
									<div class="form-row">
										<div class="col-md-3 col-form-label text-default mb-1"><b>Type of Client</b></div>
										<div class="col-md-3">
											<select name ="_selFamilyType" id ="_selFamilyType" class="form-control">
											</select>
										</div>	

										<div class="col-md-2 col-form-label text-default mb-1">Reason for FP:</div>
										<div class="col-md-2">
											<select name ="reasonfp" id ="reasonfp" class="form-control"  disabled="">
												<option value="">SELECT</option>
												<option value="1">Spacing</option>
												<option value="2">Limiting</option>
												<option value="3">Other</option>
											</select>
										</div>	
										<div class="col-md-2">
											<input type="text" class="form-control form-control-mg" disabled="" placeholder="Others, specify" name ="reasonfp_sp" id="reasonfp_sp" autocomplete="off"/>
										</div>

										<div class="col-md-6">
										</div>	
										<div class="col-md-2 col-form-label text-default mb-1">Reason:</div>
										<div class="col-md-2">
											<select name ="res_changing" id ="res_changing" class="form-control" disabled="">
												<option value="">SELECT</option>
												<option value="4">Medical Condition</option>
												<option value="5">Side Effects</option>
											</select>
										</div>	
										<div class="col-md-2">
											<input type="text" class="form-control form-control-mg" disabled="" placeholder="Side effect specify" name ="res_sideeffects_sp" id="res_sideeffects_sp" autocomplete="off"/>
										</div>	

										<div class="col-md-3 col-form-label text-default mb-1"><b>Method currently used (for Changing Method):</b></div>
										<div class="col-md-3">
											<select name ="_selFamilyMethod" id ="_selFamilyMethod" class="form-control" >
											</select>
										</div>	
										<div class="col-md-3">
											<input type="text" class="form-control form-control-mg" disabled="" name ="fam_method_specify" id="fam_method_specify" autocomplete="off" placeholder="Specify" />
										</div>	
									</div>
								</div>
							</div>
							<!--body-->
						</div>
					</div>
				</div>
				
				<div class="form-row">
				<div class="col-md-6">
					<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#medhisto" aria-expanded="false" aria-controls="medhisto">
						<b>MEDICAL HISTORY</b>
					</button>
					<div class="collapse" id="medhisto">
						<div class="card card-accent-success">
							<div class="card-body">
								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-6">Does the client have any of the following?</label>
									<label class="col-form-label col-md-3 text-default mb-4"><i><b>(Select All)</b></i></label>

									<div class="col-md-3">
										<select name ="all_med" id ="all_med" class="form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-1">Severe Headaches/migraine </label>
									<div class="col-md-6">
										<select name ="med_severe" id ="med_severe" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-6 text-default mb-1">History of Stroke/ Heart Attack / Hypertension</label>
									<div class="col-md-6">
										<select name ="med_stroke" id ="med_stroke" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-1">Non-traumatic hematoma / frequent bruising or gum bleeding</label>
									<div class="col-md-6">
										<select name ="med_nontrauma" id ="med_nontrauma" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-6 text-default mb-1">Current or history of breast cancer/ breast mass</label>
									<div class="col-md-6">
										<select name ="med_breast" id ="med_breast" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-1">Severe chest pain</label>
									<div class="col-md-6">
										<select name ="med_chest" id ="med_chest" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-6 text-default mb-1">Cough for more than 14 days</label>
									<div class="col-md-6">
										<select name ="med_cough" id ="med_cough" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-1">Jaundice</label>
									<div class="col-md-6">
										<select name ="med_jaundice" id ="med_jaundice" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-6 text-default mb-1">Unexplained vaginal bleeding</label>
									<div class="col-md-6">
										<select name ="med_bleeding" id ="med_bleeding" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-1">Abnormal vaginal discharge</label>
									<div class="col-md-6">
										<select name ="med_discharge" id ="med_discharge" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-6 text-default mb-1">Intake of phenobarbital (anti-seizure) or rifampicin (anti-TB)</label>
									<div class="col-md-6">
										<select name ="med_intake" id ="med_intake" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-1">Is the client a SMOKER?</label>
									<div class="col-md-6">
										<select name ="med_smoker" id ="med_smoker" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-1">With Disability?</label>
									<div class="col-md-6">
										<select name ="med_disability" id ="med_disability" class="med form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-1">if YES, please specify</label>
									<div class="col-md-6">
										<input type="text" class="form-control form-control-mg" disabled="" name ="med_disability_yes" id="med_disability_yes" autocomplete="off" placeholder="Specify" />
									</div>
								</div>

							</div>
						</div>
					</div>

					<br>
					<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#obshisto" aria-expanded="false" aria-controls="obshisto">
						<b>OBSTETRICAL HISTORY</b>
					</button>
					<div class="collapse" id="obshisto">
						<div class="card card-accent-success">
							<div class="card-body">
								<div class="form-row">
									<label class="col-form-label col-md-2 text-default mb-1">Number of pregnancies:</label>
									<label class="col-form-label col-md-1 text-default mb-1" align="right">G:</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mg" name ="obs_g" id="obs_g" autocomplete="off" placeholder="G" />
									</div>
									<label class="col-form-label col-md-1 text-default mb-1" >P:</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mg" name ="obs_p" id="obs_p" autocomplete="off" placeholder="P" />
									</div>
								</div>
								<div class="form-row">
									<label class="col-form-label col-md-3 text-default mb-1">Full term</label>
									<div class="col-md-9">
										<input type="text" class="form-control form-control-mg" name ="obs_full" id="obs_full" autocomplete="off"  placeholder="Full term"/>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Premature</label>
									<div class="col-md-9">
										<input type="text" class="form-control form-control-mg" name ="obs_premature" id="obs_premature" autocomplete="off" placeholder="Premature" />
									</div>
								</div>

								<div class="form-row">
									<label class="col-form-label col-md-3 text-default mb-1">Abortion</label>
									<div class="col-md-9">
										<input type="text" class="form-control form-control-mg" name ="obs_abortion" id="obs_abortion" autocomplete="off" placeholder="Abortion"/>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Living Children</label>
									<div class="col-md-9">
										<input type="text" class="form-control form-control-mg" name ="obs_livechild" id="obs_livechild" autocomplete="off" placeholder="Living Children"/>
									</div>
								</div>

								<div class="form-row">
									<label class="col-form-label col-md-3 text-default mb-1">Date of Last Delivery:</label>
									<div class="col-md-9">
										<input type="datetime-local" class="form-control form-control-mg" name ="datedelivery" id="datedelivery" autocomplete="off"/>
									</div>
								</div>
								<div class="form-row">
									<label class="col-form-label col-md-3 text-default mb-1">Type of Delivery:</label>
									<div class="col-md-9">
										<select name ="obs_typedel" id ="obs_typedel" class="form-control">
											<option value="">SELECT</option>
											<option value="13">Vaginal</option>
											<option value="14">Caesarean Section</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<label class="col-form-label col-md-3 text-default mb-1">Last Mentrual Period:</label>
									<div class="col-md-9">
										<input type="datetime-local" class="form-control form-control-mg" name ="obs_lastmenstrual" id="obs_lastmenstrual" autocomplete="off"/>
									</div>
								</div>
								<div class="form-row">
									<label class="col-form-label col-md-3 text-default mb-1">Previous Mentrual Period:</label>
									<div class="col-md-9">
										<input type="datetime-local" class="form-control form-control-mg" name ="obs_prevmenstrual" id="obs_prevmenstrual" autocomplete="off"/>
									</div>
								</div>

								<div class="form-row">
									<label class="col-form-label col-md-3 text-default mb-1">Menstrual Flow:</label>
									<div class="col-md-9">
										<select name ="obs_menstrualflow" id ="obs_menstrualflow" class="form-control">
											<option value="">SELECT</option>
											<option value="10">scanty (1-2 pads per day)</option>
											<option value="11">moderate (3-5 pads per day)</option>
											<option value="12">heavy (>5 pads per day)</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="obs_dysme" name="obs_dysme" value="N" class="" >&nbsp;
										<label class="col-form-label text-default mb-1">Dysmenorrhea</label>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="obs_hyda" name="obs_hyda" value="N" class="" >&nbsp;
										<label class="col-form-label text-default mb-1">hydatidiform mole (within the last 12 months)</label>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="obs_ecto" name="obs_ecto" value="N" class="" >&nbsp;
										<label class="col-form-label text-default mb-1">History of ectopic pregnancy</label>
									</div>
								</div>

							</div>
						</div>
					</div>
					<br>
					<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#sexualinfect" aria-expanded="false" aria-controls="sexualinfect">
						<b>RISK FOR SEXUALLY TRANSMITTER INFECTIONS</b>
					</button>
					<div class="collapse" id="sexualinfect">					
						<div class="card card-accent-success">
							<div class="card-body">
								<div class="form-row">
									<label class="col-form-label col-md-6 text-default mb-6">Does the client have any of the following?</label>
									<label class="col-form-label col-md-2 text-default mb-4"><i><b>(Select All)</b></i></label>

									<div class="col-md-4">
										<select name ="all_risk" id ="all_risk" class="form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<div class="col-md-6"></div>

									<label class="col-form-label col-md-8 text-default mb-1">Abnormal discharge from the genital area </label>
									<div class="col-md-4">
										<select name ="risk_abnormal" id ="risk_abnormal" class="risk form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">if YES, please indicate it from</label>
									<div class="col-md-4">
										<select name ="risk_abnormal_yes" disabled="" id ="risk_abnormal_yes" class="form-control">
											<option value="">SELECT</option>
											<option value="15">Vagina</option>
											<option value="16">Penis</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">Sores or ulcers in genital area</label>
									<div class="col-md-4">
										<select name ="risk_sores" id ="risk_sores"  class="risk form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">Pain or burning sensation in the genital area</label>
									<div class="col-md-4">
										<select name ="risk_pain" id ="risk_pain"  class="risk form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">History of treatment or sexually transmitted infections</label>
									<div class="col-md-4">
										<select name ="risk_treatment" id ="risk_treatment"  class="risk form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">HIV / AIDS / Pelvic inflammatory disease</label>
									<div class="col-md-4">
										<select name ="risk_hiv" id ="risk_hiv"  class="risk form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">		
					<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#vaw" aria-expanded="false" aria-controls="vaw">
						<b>RISK VIOLENCE AGAINST WOMEN (VAW)</b>
					</button>
					<div class="collapse" id="vaw">	
						<div class="card card-accent-success">
							<div class="card-body">
								<div class="form-row">
									<label class="col-form-label col-md-8 8text-default mb-1">Unpleasant relationship with partner</label>
									<div class="col-md-4">
										<select name ="vaw_unplea" id ="vaw_unplea" class="vaw form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">Partner does not approve of the visit to FP clinic</label>
									<div class="col-md-4">
										<select name ="vaw_partner" id ="vaw_partner" class="vaw form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div> 

									<label class="col-form-label col-md-8 text-default mb-1">History of Domestic Violence or VAW</label>
									<div class="col-md-4">
										<select name ="vaw_domestic" id ="vaw_domestic" class="vaw form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-4 text-default mb-1">Referred to:</label>
									<div class="col-md-4">
										<select name ="vaw_reffered" id ="vaw_reffered" class="form-control">
											<option value="">SELECT</option>
											<option value="6">DSWD</option>
											<option value="7">WCPU</option>
											<option value="8">NGOs</option>
											<option value="9">Others, specify</option>
										</select>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mg" disabled="" placeholder="Others, specify" name ="vaw_reffered_sp" id="vaw_reffered_sp" autocomplete="off"/>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<br>
					<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#pe" aria-expanded="false" aria-controls="pe">
						<b>PHYSICAL EDUCATION</b>
					</button>
					<div class="collapse" id="pe">
						<div class="card card-accent-success">
							<div class="card-body">
								<div class="form-row">
									<label class="col-md-3 col-form-label text-default">Weight</label>
									<div class="col-md-3">
										<input type="number" class="form-control form-control-mb" autocomplete="off" id="hwWeight" name="hwWeight" placeholder ="Weight">
										<small class="text-muted">Kilogram</small>
									</div>

									<label class="col-md-3 col-form-label text-default">Height</label>
									<div class="col-md-3">
										<input type="number" class="form-control form-control-mb" autocomplete="off" id="hwHeight" name="hwHeight" placeholder ="Height">
										<small class="text-muted">Centimer</small>
									</div>
								</div>

								<div class="form-row">
									<label class="col-md-3 col-form-label text-default">Blood Pressure</label>
									<div class="col-md-3">
										<input type="number" class="form-control form-control-mb" autocomplete="off" id="BP" name="BP" placeholder ="mmHg">
										<small class="text-muted">mmHg</small>
									</div>

									<label class="col-md-3 col-form-label text-default">Pulse Rate</label>
									<div class="col-md-3">
										<input type="number" class="form-control form-control-mb" autocomplete="off" id="PR" name="PR" placeholder ="/min">
										<small class="text-muted">/min</small>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Skin</label>
									<div class="col-md-3">
										<select name ="physical_skin" id ="physical_skin" class="physical form-control">
											<option value="">SELECT</option>
											<option value="17">Normal</option>
											<option value="18">Pale</option>
											<option value="19">Yellowish</option>
											<option value="20">Hematoma</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Extremeties</label>
									<div class="col-md-3">
										<select name ="physical_extreme" id ="physical_extreme" class="physical form-control">
											<option value="">SELECT</option>
											<option value="33">Normal</option>
											<option value="34">Edema</option>
											<option value="35">Varicosities</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Conjunctiva</label>
									<div class="col-md-3">
										<select name ="physical_conjunc" id ="physical_conjunc" class="physical form-control">
											<option value="">SELECT</option>
											<option value="21">Normal</option>
											<option value="22">Pale</option>
											<option value="23">Yellowish</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Neck</label>
									<div class="col-md-3">
										<select name ="physical_neck" id ="physical_neck" class="physical form-control">
											<option value="">SELECT</option>
											<option value="24">Normal</option>
											<option value="25">Neck mass</option>
											<option value="26">Enlarged lymph nodes</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Breast</label>
									<div class="col-md-3">
										<select name ="physical_breast" id ="physical_breast" class="physical form-control">
											<option value="">SELECT</option>
											<option value="27">Normal</option>
											<option value="28">Mass</option>
											<option value="29">Nipple discharge</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Abdomen</label>
									<div class="col-md-3">
										<select name ="physical_abdomen" id ="physical_abdomen" class="physical form-control">
											<option value="">SELECT</option>
											<option value="30">Normal</option>
											<option value="31">Abdominal mass</option>
											<option value="32">Varicosities</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Pelvic Examination: <i>For IUD Acceptors</i></label>
									<div class="col-md-3">
										<select name ="physical_pelvic" id ="physical_pelvic" class="physical form-control">
											<option value="">SELECT</option>
											<option value="36">Normal</option>
											<option value="37">Mass</option>
											<option value="38">Abdominal discharge</option>
											<option value="39">Cervical Abnormalities</option>
											<option value="40">Cervical Consistency</option>
											<option value="41">Cervical Tenderness</option>
											<option value="42">Adnexal mass/ tenderness</option>
											<option value="43">Uterine position</option>
											<option value="44">Uterine depth</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Cervical Abnormalities</label>
									<div class="col-md-3">
										<select name ="physical_cervical" disabled="" id ="physical_cervical" class="form-control">
											<option value="">SELECT</option>
											<option value="45">warts</option>
											<option value="46">polyp or cyst</option>
											<option value="47">inflammation or erosion</option>
											<option value="48">bloody discharge</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Cervical Consistency</label>
									<div class="col-md-3">
										<select name ="physical_cervicalconsis" disabled="" id ="physical_cervicalconsis" class="form-control">
											<option value="">SELECT</option>
											<option value="49">Firm</option>
											<option value="50">Soft</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Uterine position</label>
									<div class="col-md-3">
										<select name ="uterine_pos" disabled="" id ="uterine_pos" class="form-control">
											<option value="">SELECT</option>
											<option value="51">mid</option>
											<option value="52">anteflexed</option>
											<option value="53">retroflexed</option>
										</select>
									</div>

									<label class="col-form-label col-md-3 text-default mb-1">Uterine depth</label>
									<div class="col-md-3">
										<input type="text" class="form-control form-control-mg" disabled="" name ="u_depth" id="u_depth" autocomplete="off" placeholder="Uterine depth" />
										<small class="text-muted">cm</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#pregnant" aria-expanded="false" aria-controls="pregnant">
						<b> HOW TO BE REASONABLY SURE A CLIENT IS NOT PREGNANT?</b>
					</button>
					<div class="collapse" id="pregnant">
						<div class="card card-accent-success">
							<div class="card-body">
								<div class="form-row">
									<label class="col-form-label col-md-4 text-default mb-1"></label>
									<label class="col-form-label col-md-4 text-default mb-1"><i><b>(Select All)</b></i></label>

									<div class="col-md-4">
										<select name ="all_preg" id ="all_preg" class="form-control">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">1. Did you have a baby less than six (6) months ago, are you fully or nearly-fully breastfeedingm and have you had no menstrual period since then?
									</label>
									<div class="col-md-4">
										<select name ="preggy1" id ="preggy1" class="preg form-control" onchange="Pregnant();">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">2. Have you abstained from sexual intercourse since your last menstrual period or delivery? 
									</label>
									<div class="col-md-4">
										<select name ="preggy2" id ="preggy2" class="preg form-control" onchange="Pregnant();">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">3. Have you had a baby in the last four (4) weeks?
									</label>
									<div class="col-md-4">
										<select name ="preggy3" id ="preggy3" class="preg form-control" onchange="Pregnant();">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1"> 4. Did your last menstrual period start within the past seven (7) days?
									</label>
									<div class="col-md-4">
										<select name ="preggy4" id ="preggy4" class="preg form-control" onchange="Pregnant();">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">5. Have you had a miscarriage or abortion in the past seven (7) days?
									</label>
									<div class="col-md-4">
										<select name ="preggy5" id ="preggy5" class="preg form-control" onchange="Pregnant();">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>

									<label class="col-form-label col-md-8 text-default mb-1">6. Have you been using a reliable contraceptive method consistently and correctly?
									</label>
									<div class="col-md-4">
										<select name ="preggy6" id ="preggy6" class="preg form-control" onchange="Pregnant();">
											<option value="">SELECT</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-8">
										<input type="hidden" class="form-control form-control-mg"  name ="finalpreggy" id="finalpreggy" autocomplete="off"/>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>

			</div>
		</form>
	</div>
	<div id="step-2">
		<form id="form-step-2">
			<div class="card card-accent-success">
				<div class="card-header">
					<div class="row">
						<div class="col-md-12">
							<div class="h5 text-success"> <i class="fa fa-phone"></i>&nbsp ASSESSMENT</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="form-row">	
						<div class="col-md-4 col-form-label text-default mb-1"> <i class="fa fa-asterisk text-danger "></i>&nbsp; Date of Visit:</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control form-control-mb" id="datereport" name="datereport">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1"> <i class="fa fa-asterisk text-danger "></i>&nbsp; Type of Client:</div>
						<div class="col-md-8">
							<select name ="client_selFamilyType" id="client_selFamilyType" class="form-control">
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1"> <i class="fa fa-asterisk text-danger "></i>&nbsp; Method:</div>
						<div class="col-md-4">
							<select name ="assess_selFamilyMethod" id ="assess_selFamilyMethod" class="form-control">
							</select>
						</div>	
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mg" name ="assess_method_specify" id="assess_method_specify" placeholder="Specify" autocomplete="off" disabled=""/>
						</div>	
						<div class="col-md-4 col-form-label text-default mb-1"> Administered By:</div>
						<div class="col-md-8">
							<select name ="selEmployees" id ="selEmployees" class="form-control">
							</select>
						</div>	
						<div class="col-md-4 col-form-label text-default mb-1"> Schedule Next visit:</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control form-control-mb" id="nextvisit" name="nextvisit" > 
							<small class="text-muted"><b>Recommended date for next visit for this method</b></small>
						</div>	
						<div class="col-md-4 col-form-label text-default mb-1"> Source:</div>
						<div class="col-md-8">
							<select name ="source" id ="source" class="form-control">
								<option value="">SELECT</option>
								<option value="01">Private</option>
								<option value="02">Public</option>
							</select>
						</div>	
						<div class="col-md-4 col-form-label text-default mb-1"> Given Deworming:</div>
						<div class="col-md-8">
							<select name ="givedeworm" id ="givedeworm" class="form-control">
								<option value="">SELECT</option>
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>					
						<div class="col-md-4 col-form-label text-default mb-1">&nbsp; Date Given Deworming:</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control form-control-mb" name="datedeworm" id="datedeworm" disabled="">
						</div>	
						<div class="col-md-4 col-form-label text-default mb-1"> Deworming Dose:</div>
						<div class="col-md-8">
							<select name ="wormdose" id ="wormdose" class="form-control" disabled="">
								<option value="">SELECT DEWORMING DOSE</option>
								<option value="01">1</option>
								<option value="02">2</option>
							</select>
						</div>		
						<div class="col-md-4 col-form-label text-default mb-1"> Remarks:</div>
						<div class="col-md-8">
							<textarea class="form-control form-control-mb" autocomplete="off" id="remarks" name="remarks"  placeholder="Remarks" ></textarea>
						</div>				
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
