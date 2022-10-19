

	<div class="tab-pane fade show " id="familyplan" role="tabpanel" aria-labelledby="familyplan-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h5 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp Family Planning Form
				</div>
			</div>
			<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
			<button onclick="AddFamilyPlan()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> </i>
			</button>
			</div>
			</div>		
		</div>	
		<table id="FamilyPlanningTable" class="table table-sm table-condensed table-bordered"width="100%">
			<thead>
				<tr>
					<th>toecode</th>
					<th>hpercode</th>
					<th width="50%">Date of Report</th>
					<th width="30%">Method</th>
					<th	width="15%">Type of Client</th>
					<th></th>

				</tr>
			</thead>
			<tfoot>
				<tr>
					<th></th>
					<th></th>
					<th width="50%"></th>
					<th width="30%"></th>
					<th	width="15%"></th>
					<th></th>
				</tr>
			</tfoot>
		</table>
	</div>

<form name="frmFamilyPlan"   id="frmFamilyPlan">
	<div class="modal fade" id="ModalAddFamilyPlan" tabindex="-1" role="dialog">
		<input type="hidden" name="fam_formIden" id="fam_formIden">
		<input type="hidden" class="form-control form-control-mg" name ="fam_percode" id="fam_percode" value="" autocomplete="off"/>
		<input type="hidden" class="form-control form-control-mg" name ="fam_enccode" id="fam_enccode" value="" autocomplete="off"/>
		<input type="hidden" class="form-control form-control-mg" name ="fam_toecode" id="fam_toecode" value="" autocomplete="off"/>
		<input type="hidden" class="form-control form-control-mg" name ="fam_datereport" id="fam_datereport" autocomplete="off"/>
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white" ><i class="fa fa-plus"></i>&nbsp; Family Planning Form</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
		<div class="row">	
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

			</div>

			<div class="col-md-6">
				<div class="form-row">
					<div class="col-md-3 col-form-label text-default mb-1"><b>Type of Client</b></div>
					<div class="col-md-9">
						<select name ="fam_typeclient" id ="fam_typeclient" class="form-control">
							<option value="">SELECT</option>
							<option value="N">New Acceptor</option>
							<option value="C">Current User</option>
						</select>
					</div>	
				</div>

				<div class="form-row">
					<div class="col-md-3 col-form-label text-default mb-1">Reason for FP:</div>
					<div class="col-md-2">
						<input type="checkbox" id="res_spacing" name="res_spacing" value="N" class="" >&nbsp;
						<label class="col-form-label text-default mb-1">spacing</label>
					</div>	

					<div class="col-md-2">
						<input type="checkbox" id="res_limiting" name="res_limiting" value="N" class="" >&nbsp;
						<label class="col-form-label text-default mb-1">limiting</label>
					</div>	

					<div class="col-md-2">
						<input type="checkbox" id="res_oth" name="res_oth" value="N" class="" >&nbsp;
						<label class="col-form-label text-default mb-1">others</label>
					</div>	

					<div class="col-md-3">
						<input type="text" class="form-control form-control-mg" disabled="" placeholder="Others, specify" name ="res_oth_sp" id="res_oth_sp" autocomplete="off"/>
					</div>
				</div>

				<div class="form-row">		
					<div class="col-md-3 col-form-label text-default mb-1"><b>Current User</b></div>
					<div class="col-md-9">
						<select name ="typecurrent" id ="typecurrent" class="form-control">
							<option value="">SELECT</option>
							<option value="CM">Changing Method</option>
							<option value="CC">Changing Clinic</option>
							<option value="DR">Dropout/ Restart</option>
						</select>
					</div>	
				</div>

				<div class="form-row">
					<div class="col-md-3 col-form-label text-default mb-1">Reason:</div>
					<div class="col-md-3">
						<input type="checkbox" id="res_medical" name="res_medical" value="N" class="" >&nbsp;
						<label class="col-form-label text-default mb-1">medical condition</label>
					</div>	

					<div class="col-md-3">
						<input type="checkbox" id="res_side" name="res_side" value="N" class="" >&nbsp;
						<label class="col-form-label text-default mb-1">side effects</label>
					</div>	

					<div class="col-md-3">
						<input type="text" class="form-control form-control-mg" disabled="" name ="res_side_sp" id="res_side_sp" autocomplete="off"/>
					</div>
				</div>

		<hr class="bg-success">
			</div>

			<div class="col-md-6">
				<div class="form-row">		
					<div class="col-md-12 col-form-label text-default mb-1"><b>Method currently used (for Changing Method):</b></div>
					<div class="col-md-6">
						<select name ="fam_method" id ="fam_method" class="form-control" disabled="">
							<option value="">SELECT WHAT METHOD</option>
							<option value="01">Combined Oral Contraceptives (COC) </option>
							<option value="02">Progestin Only Pill (POP)</option>
							<option value="03">Injectible</option>
							<option value="04">Implant</option>
							<option value="05">Intra-Uterine Device - Interval</option>
							<option value="06">Intra-Uterine Device - Postpartum</option>
							<option value="07">Condom</option>
							<option value="08">Natural Family Planning - Cervical Mucus Method</option>
							<option value="09">Natural Family Planning - Basal Body Temperature</option>
							<option value="10">Natural Family Planning - Symptothermal Method</option>
							<option value="11">Natural Family Planning - Standard Days Method</option>				
							<option value="12">Lactational Amenorrhea Method</option>
							<option value="13">Others, specify</option>
						</select>
					</div>	

					<div class="col-md-6">
							<input type="text" class="form-control form-control-mg" disabled="" name ="fam_method_specify" id="fam_method_specify" autocomplete="off"/>
					</div>	
				</div>
<br>
<br>
<br>
<br>
		<hr class="bg-success">
			</div>

			<div class="col-md-6">
				<div class="form-row">
					 <button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#addDemoData" aria-expanded="false" aria-controls="addDemoData">
					<b>I. MEDICAL HISTORY</b>
				</button>
				</div>


				<div class="collapse" id="addDemoData">
				<div class="card card-body bg-secondary">
				   	<div class="form-row">
						<label class="col-form-label col-md-7 text-default mb-1">Does the client have any of the following?</label>
						<label class="col-form-label col-md-2 text-default mb-1"><i><b>(Select All)</b></i></label>
						
						<div class="col-md-3">
							<select name ="all_med" id ="all_med" class="form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Severe Headaches/migraine </label>
						<div class="col-md-3">
							<select name ="med_severe" id ="med_severe" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">History of Stroke/ Heart Attack / Hypertension</label>
						<div class="col-md-3">
							<select name ="med_stroke" id ="med_stroke" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
					</div>

					<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Non-traumatic hematoma / frequent bruising or gum bleeding</label>
						<div class="col-md-3">
							<select name ="med_nontrauma" id ="med_nontrauma" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Current or history of breast cancer/ breast mass</label>
						<div class="col-md-3">
							<select name ="med_breast" id ="med_breast" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>
				   	
				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Severe chest pain</label>
						<div class="col-md-3">
							<select name ="med_chest" id ="med_chest" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Cough for more than 14 days</label>
						<div class="col-md-3">
							<select name ="med_cough" id ="med_cough" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>
				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Jaundice</label>
						<div class="col-md-3">
							<select name ="med_jaundice" id ="med_jaundice" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>
				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Unexplained vaginal bleeding</label>
						<div class="col-md-3">
							<select name ="med_bleeding" id ="med_bleeding" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>
				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Abnormal vaginal discharge</label>
						<div class="col-md-3">
							<select name ="med_discharge" id ="med_discharge" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>
				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Intake of phenobarbital (anti-seizure) or rifampicin (anti-TB)</label>
						<div class="col-md-3">
							<select name ="med_intake" id ="med_intake" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>
				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Is the client a SMOKER?</label>
						<div class="col-md-3">
							<select name ="med_smoker" id ="med_smoker" class="med form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>
				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">With Disability?</label>
						<div class="col-md-3">
							<select name ="med_disability" id ="med_disability" class="med form-control">
								<option value="">SELECT</option>
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
				   	</div>

				   	 <div class="form-row">
						<label class="col-form-label col-md-4 text-default mb-1">if YES, please specify</label>
						<div class="col-md-6">
							<input type="text" class="form-control form-control-mg" disabled="" name ="med_disability_yes" id="med_disability_yes" autocomplete="off"/>
						</div>
				   	</div>


				 </div>  	
				 </div>  <!--end ng collapse-->	

			</div><!--end ng colmd-6-->


			<div class="col-md-6">
				<div class="form-row">
					 <button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#addObstetricData" aria-expanded="false" aria-controls="addObstetricData">
					<b>II. OBSTETRICAL HISTORY</b>
				</button>
				</div>


				<div class="collapse" id="addObstetricData">
				<div class="card card-body bg-secondary">
				   	<div class="form-row">
						<label class="col-form-label col-md-4 text-default mb-1">Number of pregnancies:</label>
						<label class="col-form-label col-md-1 text-default mb-1" align="right">G:</label>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-mg" name ="obs_g" id="obs_g" autocomplete="off"/>
						</div>
						<label class="col-form-label col-md-1 text-default mb-1" align="right">P:</label>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-mg" name ="obs_p" id="obs_p" autocomplete="off"/>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-3 text-default mb-1">Full term</label>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-mg" name ="obs_full" id="obs_full" autocomplete="off"/>
						</div>

						<label class="col-form-label col-md-3 text-default mb-1">Premature</label>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-mg" name ="obs_premature" id="obs_premature" autocomplete="off"/>
						</div>
					</div>

					<div class="form-row">
						<label class="col-form-label col-md-3 text-default mb-1">Abortion</label>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-mg" name ="obs_abortion" id="obs_abortion" autocomplete="off"/>
						</div>

						<label class="col-form-label col-md-3 text-default mb-1">Living Children</label>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-mg" name ="obs_livechild" id="obs_livechild" autocomplete="off"/>
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
								<option value="V">Vaginal</option>
								<option value="C">Caesarean Section</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<label class="col-form-label col-md-3 text-default mb-1">Last Mentrual Period:</label>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mg" name ="obs_lastmenstrual" id="obs_lastmenstrual" autocomplete="off"/>
						</div>
					</div>
					<div class="form-row">
						<label class="col-form-label col-md-3 text-default mb-1">Previous Mentrual Period:</label>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mg" name ="obs_prevmenstrual" id="monthincome" autocomplete="off"/>
						</div>
					</div>

					<div class="form-row">
						<label class="col-form-label col-md-3 text-default mb-1">Menstrual Flow:</label>
						<div class="col-md-9">
							<select name ="obs_menstrualflow" id ="obs_menstrualflow" class="form-control">
								<option value="">SELECT</option>
								<option value="01">scanty (1-2 pads per day)</option>
								<option value="02">moderate (3-5 pads per day)</option>
								<option value="03">heavy (>5 pads per day)</option>
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
				 </div>  <!--end ng collapse-->	

			</div><!--end ng colmd-6-->
<br>
<br>
<br>
			<div class="col-md-6">
				<div class="form-row">
					 <button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#addRiskData" aria-expanded="false" aria-controls="addRiskData">
					<b>III. RISKS FOR SEXUALLY TRANSMITTED INFECTIONS</b>
				</button>
				</div>


				<div class="collapse" id="addRiskData">
				<div class="card card-body bg-secondary">
				   	<div class="form-row">
						<label class="col-form-label col-md-7 text-default mb-1">Does the client have any of the following?</label>
						<label class="col-form-label col-md-2 text-default mb-1"><i><b>(Select All)</b></i></label>
						
						<div class="col-md-3">
							<select name ="all_risk" id ="all_risk" class="form-control">
								<option value="">SELECT</option>
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Abnormal discharge from the genital area </label>
						<div class="col-md-3">
							<select name ="risk_abnormal" id ="risk_abnormal" class="risk form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	 <div class="form-row">
						<label class="col-form-label col-md-4 text-default mb-1">if YES, please indicate it from</label>
						<div class="col-md-6">
							<select name ="risk_abnormal_yes" disabled="" id ="risk_abnormal_yes" class="form-control">
							<option value="">SELECT</option>
							<option value="V">Vagina</option>
							<option value="P">Penis</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Sores or ulcers in genital area</label>
						<div class="col-md-3">
							<select name ="risk_sores" id ="risk_sores"  class="risk form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   		<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Pain or burning sensation in the genital area</label>
						<div class="col-md-3">
							<select name ="risk_pain" id ="risk_pain"  class="risk form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   		<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">History of treatment or sexually transmitted infections</label>
						<div class="col-md-3">
							<select name ="risk_treatment" id ="risk_treatment"  class="risk form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   		<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">HIV / AIDS / Pelvic inflammatory disease</label>
						<div class="col-md-3">
							<select name ="risk_hiv" id ="risk_hiv"  class="risk form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	
				 </div>  	
				 </div>  <!--end ng collapse-->	

			</div><!--end ng colmd-6-->

			<br>
<br>
<br>
			<div class="col-md-6">
				<div class="form-row">
					 <button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#addVAWData" aria-expanded="false" aria-controls="addVAWData">
					<b>IV. RISK FOR VIOLENCE AGAINST WOMEN (VAW)</b>
				</button>
				</div>


				<div class="collapse" id="addVAWData">
				<div class="card card-body bg-secondary">
				   <div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Unpleasant relationship with partner</label>
						<div class="col-md-3">
							<select name ="vaw_unplea" id ="vaw_unplea" class="form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">Partner does not approve of the visit to FP clinic</label>
						<div class="col-md-3">
							<select name ="vaw_partner" id ="vaw_partner" class="form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">History of Domestic Violence or VAW</label>
						<div class="col-md-3">
							<select name ="vaw_domestic" id ="vaw_domestic" class="form-control">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   		<div class="form-row">
						<label class="col-form-label col-md-3 text-default mb-1">Referred to:</label>
						<div class="col-md-3">
							<select name ="vaw_reffered" id ="vaw_reffered" class="form-control">
							<option value="">SELECT</option>
							<option value="1">DSWD</option>
							<option value="2">WCPU</option>
							<option value="3">NGOs</option>
							<option value="4">Others, specify</option>
						</select>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-control-mg" disabled="" placeholder="Others, specify" name ="vaw_reffered_sp" id="vaw_reffered_sp" autocomplete="off"/>
						</div>
				   	</div>
				 </div>  	
				 </div>  <!--end ng collapse-->	

			</div><!--end ng colmd-6-->

					<br>
<br>
<br>
			<div class="col-md-6">
				<div class="form-row">
					 <button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#addPhysicalData" aria-expanded="false" aria-controls="addPhysicalData">
					<b>V. PHYSICAL EDUCATION</b>
				</button>
				</div>


				<div class="collapse" id="addPhysicalData">
				<div class="card card-body bg-secondary">
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

				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Skin</label>
						<div class="col-md-6">
							<select name ="physical_skin" id ="physical_skin" class="form-control">
							<option value="">SELECT</option>
							<option value="01">Normal</option>
							<option value="02">Pale</option>
							<option value="03">Yellowish</option>
							<option value="04">Hematoma</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Extremeties</label>
						<div class="col-md-6">
							<select name ="physical_extreme" id ="physical_extreme" class="form-control">
							<option value="">SELECT</option>
							<option value="01">Normal</option>
							<option value="02">Edema</option>
							<option value="03">Varicosities</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Conjunctiva</label>
						<div class="col-md-6">
							<select name ="physical_conjunc" id ="physical_conjunc" class="form-control">
							<option value="">SELECT</option>
							<option value="01">Normal</option>
							<option value="02">Pale</option>
							<option value="03">Yellowish</option>
							<option value="04">Hematoma</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Neck</label>
						<div class="col-md-6">
							<select name ="physical_neck" id ="physical_neck" class="form-control">
							<option value="">SELECT</option>
							<option value="01">Normal</option>
							<option value="02">Neck mass</option>
							<option value="03">Enlarged lymph nodes</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Breast</label>
						<div class="col-md-6">
							<select name ="physical_breast" id ="physical_breast" class="form-control">
							<option value="">SELECT</option>
							<option value="01">Normal</option>
							<option value="02">Mass</option>
							<option value="03">Nipple discharge</option>
						</select>
						</div>
				   	</div>

			   		<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Abdomen</label>
						<div class="col-md-6">
							<select name ="physical_abdomen" id ="physical_abdomen" class="form-control">
							<option value="">SELECT</option>
							<option value="01">Normal</option>
							<option value="02">Abdominal mass</option>
							<option value="03">Varicosities</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Pelvic Examination: <i>For IUD Acceptors</i></label>
						<div class="col-md-6">
							<select name ="physical_pelvic" id ="physical_pelvic" class="form-control">
							<option value="">SELECT</option>
							<option value="01">Normal</option>
							<option value="02">Mass</option>
							<option value="03">Abdominal discharge</option>
							<option value="04">Cervical Abnormalities</option>
							<option value="05">Cervical Consistency</option>
							<option value="06">Cervical Tenderness</option>
							<option value="07">Adnexal mass/ tenderness</option>
							<option value="08">Uterine position</option>
							<option value="09">Uterine depth</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Cervical Abnormalities</label>
						<div class="col-md-6">
							<select name ="physical_cervical" disabled="" id ="physical_cervical" class="form-control">
							<option value="">SELECT</option>
							<option value="01">warts</option>
							<option value="02">polyp or cyst</option>
							<option value="03">inflammation or erosion</option>
							<option value="04">bloody discharge</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Cervical Consistency</label>
						<div class="col-md-6">
							<select name ="physical_cervicalconsis" disabled="" id ="physical_cervicalconsis" class="form-control">
							<option value="">SELECT</option>
							<option value="F">Firm</option>
							<option value="S">Soft</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Uterine position</label>
						<div class="col-md-6">
							<select name ="uterine_pos" disabled="" id ="uterine_pos" class="form-control">
							<option value="">SELECT</option>
							<option value="01">mid</option>
							<option value="02">anteflexed</option>
							<option value="03">retroflexed</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-6 text-default mb-1">Uterine depth</label>
						<div class="col-md-6">
							<input type="text" class="form-control form-control-mg" disabled="" name ="uterine_depth" id="uterine_depth" autocomplete="off"/>
							<small class="text-muted">cm</small>
						</div>
				   	</div>

				 </div>  	
				 </div>  <!--end ng collapse-->	

				 
			</div><!--end ng colmd-6-->

				<div class="col-md-6">
				<div class="form-row">
					 <button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#addPregnantData" aria-expanded="false" aria-controls="addPregnantData">
					<b>HOW TO BE REASONABLY SURE A CLIENT IS NOT PREGNANT</b>
				</button>
				</div>


				<div class="collapse" id="addPregnantData">
				<div class="card card-body bg-secondary">
					<div class="form-row">
						<label class="col-form-label col-md-7 text-default mb-1"></label>
						<label class="col-form-label col-md-2 text-default mb-1"><i><b>(Select All)</b></i></label>
						
						<div class="col-md-3">
							<select name ="all_preg" id ="all_preg" class="form-control">
								<option value="">SELECT</option>
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">1. Did you have a baby less than six (6) months ago, are you fully or nearly-fully breastfeedingm and have you had no menstrual period since then?
 						</label>
						<div class="col-md-3">
							<select name ="preggy1" id ="preggy1" class="preg form-control" onchange="Pregnant();">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">2. Have you abstained from sexual intercourse since your last menstrual period or delivery? 
 						</label>
						<div class="col-md-3">
							<select name ="preggy2" id ="preggy2" class="preg form-control" onchange="Pregnant();">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">3. Have you had a baby in the last four (4) weeks?
 						</label>
						<div class="col-md-3">
							<select name ="preggy3" id ="preggy3" class="preg form-control" onchange="Pregnant();">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1"> 4. Did your last menstrual period start within the past seven (7) days?
 						</label>
						<div class="col-md-3">
							<select name ="preggy4" id ="preggy4" class="preg form-control" onchange="Pregnant();">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">5. Have you had a miscarriage or abortion in the past seven (7) days?
 						</label>
						<div class="col-md-3">
							<select name ="preggy5" id ="preggy5" class="preg form-control" onchange="Pregnant();">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<label class="col-form-label col-md-9 text-default mb-1">6. Have you been using a reliable contraceptive method consistently and correctly?
 						</label>
						<div class="col-md-3">
							<select name ="preggy6" id ="preggy6" class="preg form-control" onchange="Pregnant();">
							<option value="">SELECT</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
						</div>
				   	</div>

				   	<div class="form-row">
						<div class="col-md-5">
							<input type="hidden" class="form-control form-control-mg"  name ="finalpreggy" id="finalpreggy" autocomplete="off"/>
						</select>
						</div>
				   	</div>



				 </div>  	
				 </div>  <!--end ng collapse-->	
				</div><!--end ng column 6--> 

		
		</div><!--end ng row &#x2713;-->
	</div>
	<div class="modal-footer bg-secondary">
		<button  class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
		<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
	</div>
	
	</div>
	</div>
	</div>
	</form>

	<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
	<script src="<?php echo base_url()?>assets/scripts/familyplanning/familyplanning.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/familyplanning/familyplanning_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/familyplanning/family.js"></script>
