<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br/><small>Source of Referral</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-bed fa-2x"></i><br><small>Family Composition</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="fa fa-user-md fa-2x"></i><br /><small>Social Functioning</small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fa fa-stethoscope fa-2x"></i><br /><small>Problem in the environment</small></a>
		</li>
	</ul>
	<div>
		<div id="step-1">
			<form id="form-step-1" role="form">
				<div class="row">
					<div class="col-md-12">
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Date of Interview:</label>
							<div class="col-md-8">
								<input type="datetime-local"  class="form-control form-control-mb" autocomplete="off" id="dateasof" name="dateasof"  value="">
							</div>
						</div>


						<div class="h5 text-success"> <i class="fa fa-phone"></i>&nbsp Source of Referral</div>
						<hr class="bg-success">
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Source of Referral Name:</label>
							<div class="col-md-8">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="source_refname" name="source_refname"  placeholder ="Source of Referral Name" value="">
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Address:</label>
							<div class="col-md-8">
								<textarea class="form-control" name="source_refaddress" Placeholder="Address" autocomplete="off" id="source_refaddress"></textarea>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Tel No:</label>
							<div class="col-md-8">
								<input type="text"  class="form-control form-control-mb" autocomplete="off" id="source_telno" name="source_telno"  placeholder = 	"Tel No">
							</div>
						</div>
						<hr class="bg-success">
					</div>
				</div>	

				<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#addDemoData" aria-expanded="false" aria-controls="addDemoData">
					<b>I. DEMOGRAPHIC DATA</b>
				</button>

				<div class="collapse" id="addDemoData">
					<div class="card card-body bg-secondary">
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Companion Upon Admission:</label>
							<div class="col-md-4">
								<select  name="ass_CompAdd" id="ass_CompAdd" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="MOTHE">Mother</option> 
									<option value="FATHE">Father</option> 
									<option value="SISTE">Sister</option> 
									<option value="BROTH">Brother</option> 
									<option value="AUNT">Aunt</option> 
									<option value="UNCLE">Uncle</option> 
									<option value="NEPHE">Nephew</option> 
									<option value="NIECE">Niece</option>
									<option value="COUSI">Cousin</option> 
									<option value="SPOUS">Spouse</option> 
									<option value="FRIND">Friend</option> 
									<option value="NEIGH">Neighbors</option> 
									<option value="CAP">Police</option> 
									<option value="WORK">Co-worker</option> 
									<option value="OTH">Other</option> 
								</select>
							</div>	

							<label class="col-md-1 col-form-label text-default mb-1">Temporary Address:</label>
							<div class="col-md-5">
								<input type="text"  class="form-control  form-control-mb mb-1" placeholder = "Temporary Address" id="ass_tempAdd" name="ass_tempAdd">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2">
								<label class="col-form-label text-default">Kind of Living Arrangement</label>
							</div>	
							<div class="col-md-2">
								<input type="checkbox" id="ass_owned" name="ass_owned" value="N" class="living_list">&nbsp;
								<label class="col-form-label text-default">Owned</label>
							</div>	

							<div class="col-md-2">
								<input type="checkbox" id="ass_rent" name="ass_rent" value="N" class="living_list">&nbsp;
								<label class="col-form-label text-default">Rent</label>
							</div>	

							<div class="col-md-2">
								<input type="checkbox" id="ass_shared" name="ass_shared" value="N" class="living_list">&nbsp;
								<label class="col-form-label text-default">Shared</label>
							</div>	

							<div class="col-md-2">
								<input type="checkbox" id="ass_ins" name="ass_ins" value="N" class="living_list">&nbsp;
								<label class="col-form-label text-default">Institute</label>
							</div>	

							<div class="col-md-2">
								<input type="checkbox" id="ass_home" name="ass_home" value="N" class="living_list">&nbsp;
								<label class="col-form-label text-default">Homeless</label>
							</div>		

						</div>	
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Educational Attainment :</label>
							<div class="col-md-4">
								<select  name="ass_educAttain" id="ass_educAttain" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="EG">Elementary Graduate</option> 
									<option value="EU">Elementary Undergraduate</option> 
									<option value="HG">Highschool Graduate</option> 
									<option value="HU">Highschool Undergraduate</option>
									<option value="CG">College Graduate</option>
									<option value="CU">College Undergraduate</option>
									<option value="PG">Post Graduate</option>
									<option value="VO">Vocational</option>
									<option value="NO">None</option>
									<option value="OT">Other</option>
								</select>
							</div>

							<label class="col-md-1 col-form-label text-default mb-1">Employer:</label>
							<div class="col-md-5">
								<input type="text"  class="form-control  form-control-mb mb-1" placeholder = "Employer" id="ass_emp" name="ass_emp">

							</div>
						</div>

						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Occupation:</label>
							<div class="col-md-4">
								<select  name="ass_occu" id="ass_occu" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="OFFIC">Officials of Government and Special-Interest Organizations, Corporate Executives, Managers, Managing</option> 
									<option value="PROFE">Professionals</option> 
									<option value="TECHN"> None/UnTechnicians and Associate Professionalsemployed</option> 
									<option value="CLERK">Clerks</option> 
									<option value="SERVI">Service Workers and Shop and Market Sales Workers</option> 
									<option value="FFWAF"> Farmers, Forestry Workers and Fishermen</option> 
									<option value="TRADE"> Trades and Related Workers</option> 
									<option value="PAMOA">Plant and machine Operators and Assemblers </option>

									<option value="LABOR"> Laborers and Unskilled Workers</option> 
									<option value="SPECI">Special Occupation</option> 
									<option value="STUDE">Student</option> 
									<option value="UNEMP"> Unemployed</option> 
									<option value="RETIR">Retired</option> 
									<option value="OTHER">Others</option>
								</select>
							</div>

							<label class="col-md-1 col-form-label text-default mb-1">Income:</label>
							<div class="col-md-5">
								<input type="number"  class="form-control  form-control-mb mb-1" placeholder = "Income" id="ass_income" name="ass_income">

							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">MSWD Classification :</label>
							<div class="col-md-4">
								<select  name="ass_mswd" id="ass_mswd" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="C">Formally Capable</option> 
									<option value="I">Formally Incapable</option> 
								</select>
							</div>

							<label class="col-md-1 col-form-label text-default mb-1">Per Capital Income:</label>
							<div class="col-md-5">
								<input type="number"  class="form-control  form-control-mb mb-1" placeholder = "Per Capital Income" id="ass_perIncome" name="ass_perIncome">

							</div>
						</div>

						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Philhealth :</label>
							<div class="col-md-4">
								<select  name="ass_PhilDirect" id="ass_PhilDirect" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="Y">Direct</option> 
									<option value="N">Indirect</option> 
								</select>
							</div>	
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Category :</label>

							<div class="col-md-4">
								<select  name="ass_IOE" id="ass_IOE"  class="form-control form-control-mb" disabled="">
									<option value="">Select</option> 
									<option value="I">In-Patient</option> 
									<option value="O">OPD</option> 
									<option value="E">ER</option> 
								</select>
							</div>	

							<div class="col-md-1">
								<input type="checkbox" id="ass_OldPat" name="ass_OldPat" value="N" class="categ">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">OLD patient</label>
							</div>	

							<div class="col-md-1">
								<input type="checkbox" id="ass_NewPat" name="ass_NewPat" value="N" class="categ">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">NEW patient</label>
							</div>	

							<div class="col-md-2">
								<input type="checkbox" id="ass_caseFor" name="ass_caseFor" value="N" class="categ">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Cases forward</label>
							</div>	

							<div class="col-md-2">
								<input type="checkbox" id="ass_closedCase" name="ass_closedCase" value="N" class="categ">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Closed case</label>
							</div>	
						</div>


						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">  Name of Informant :</label>
							<div class="col-md-10">
								<input type="text"  class="form-control  form-control-mb mb-1" placeholder = "Name of Informant" id="ass_infor" name="ass_infor">
							</div>


						</div>

						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Relationship to the Patient:</label>
							<div class="col-md-4">
								<select  name="ass_relToPat" id="ass_relToPat" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="MOTHE">Mother</option> 
									<option value="FATHE">Father</option> 
									<option value="SISTE">Sister</option> 
									<option value="BROTH">Brother</option> 
									<option value="AUNT">Aunt</option> 
									<option value="UNCLE">Uncle</option> 
									<option value="NEPHE">Nephew</option> 
									<option value="NIECE">Niece</option>
									<option value="COUSI">Cousin</option> 
									<option value="SPOUS">Spouse</option> 
									<option value="FHEAD">Head of Family</option> 
									<option value="N">N/A</option> 
								</select>
							</div>

							<label class="col-md-1 col-form-label text-default mb-1">Address of Informant:</label>
							<div class="col-md-5">
								<input type="text"  class="form-control  form-control-mb mb-1" placeholder = "Address of Informant" id="ass_addInfo" name="ass_addInfo">

							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2">
								<label class="col-form-label text-default"><b>Other Sectorial Membership</b></label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="ass_senior" name="ass_senior" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Senior Citizen</label>
							</div>

							<div class="col-md-2">
								<input type="checkbox" id="ass_brgy" name="ass_brgy" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Barangay Official</label>
							</div>

							<div class="col-md-1">
								<input type="checkbox" id="ass_bhw" name="ass_bhw" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">BHW</label>
							</div>

							<div class="col-md-1">
								<input type="checkbox" id="ass_pwd" name="ass_pwd" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">PWD</label>
							</div>

							<div class="col-md-1">
								<input type="checkbox" id="ass_indig" name="ass_indig" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Indigenous</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="ass_oth" name="ass_oth" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default mb-1">Other</label>
							</div>
							<div class="col-md-2">
								<input type="text"  class="form-control  form-control-mb mb-1" disabled placeholder = "Specify" id="ass_oth_spec" name="ass_oth_spec">
							</div>
						</div>


						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Other Source of Income:</label>
							<div class="col-md-4">
								<input type="text"  class="form-control  form-control-mb mb-1" placeholder = "Other Source of Income" id="ass_othIncome" name="ass_othIncome">
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">Household Size:</label>
							<div class="col-md-5">
								<input type="number"  class="form-control  form-control-mb mb-1" placeholder = "Household Size" id="ass_houSize" name="ass_houSize">
							</div>
						</div>
						<div class="form-row">	
							<label class="col-md-2 col-form-label text-default mb-1">Monthly Expenses:</label>
							<div class="col-md-4">
								<input type="number"  class="form-control  form-control-mb mb-1" placeholder = "Monthly Expenses" id="ass_monExp" name="ass_monExp">
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">House/Lot:</label>
							<div class="col-md-5">
								<input type="number"  class="form-control  form-control-mb mb-1" placeholder = "House/Lot" id="ass_hoLot" name="ass_hoLot">
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1"><b>Light Source</b></label>
							<label class="col-md-4 col-form-label text-default mb-1"><b>Water Source</b></label>
							<label class="col-md-4 col-form-label text-default mb-1"><b>Fuel Source</b></label>
						</div>

						<div class="form-row">
							<div class="col-md-4">
								<input type="checkbox" id="ass_elec" name="ass_elec" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Electric</label>
							</div>

							<div class="col-md-4">
								<input type="checkbox" id="ass_arte" name="ass_arte" value="N" class="watsource">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Artesian Well</label>
							</div>

							<div class="col-md-4">
								<input type="checkbox" id="ass_gas" name="ass_gas" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Gas</label>
							</div>

						</div>

						<div class="form-row">
							<div class="col-md-4">
								<input type="checkbox" id="ass_keros" name="ass_keros" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Kerosene</label>
							</div>

							<div class="col-md-2">
								<input type="checkbox" id="ass_watPublic" name="ass_watPublic" disabled=""  value="N" class="artwell">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Public</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="ass_watOwned" name="ass_watOwned" disabled="" value="N" class="artwell">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Owned</label>
							</div>

							<div class="col-md-4">
								<input type="checkbox" id="ass_fire" name="ass_fire" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Firewood</label>
							</div>

						</div>
						<div class="form-row">
							<div class="col-md-4">
								<input type="checkbox" id="ass_candle" name="ass_candle" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Candle</label>
							</div>	

							<div class="col-md-4">
								<input type="checkbox" id="ass_watdis" name="ass_watdis" value="N" class="watsource">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Water District</label>
							</div>

							<div class="col-md-4">
								<input type="checkbox" id="ass_char" name="ass_char" value="N" class="">&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="col-form-label text-default">Charcoal</label>
							</div>
						</div>


						<div class="form-row">
							<label class="col-md-1 col-form-label text-default mb-1">Food:</label>
							<div class="col-md-1">
								<input type="number"  class="income form-control  form-control-mb mb-1" placeholder = "Food" autocomplete="off" id="ass_food" name="ass_food" onkeyup="sum();" value="0" >
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Educational:</label>
							<div class="col-md-2">
								<input type="number"  class="income form-control  form-control-mb mb-1" placeholder = "Educational" autocomplete="off" id="ass_educ" name="ass_educ" onkeyup="sum();" value="0">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Transportation:</label>
							<div class="col-md-2">
								<input type="number"  class="income form-control  form-control-mb mb-1" placeholder = "Transportation
								" autocomplete="off" id="ass_transpo" name="ass_transpo" onkeyup="sum();" value="0">
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">Clothing:</label>
							<div class="col-md-1">
								<input type="number"  class="income form-control  form-control-mb mb-1" placeholder = "Clothing" autocomplete="off" id="ass_cloth" name="ass_cloth" onkeyup="sum();" value="0">
							</div>

						</div>

						<div class="form-row">
							<label class="col-md-1 col-form-label text-default mb-1">Househelp:</label>
							<div class="col-md-1">
								<input type="number"  class="income form-control  form-control-mb mb-1" placeholder = "Househelp" autocomplete="off" id="ass_houHelp" name="ass_houHelp" onkeyup="sum();" value="0">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Medical Expenditure:</label>
							<div class="col-md-2">
								<input type="number"  class="income form-control  form-control-mb mb-1" placeholder = "Medical Expenditure" autocomplete="off" id="ass_medExp" name="ass_medExp" onkeyup="sum();" value="0">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Insurance Premium:</label>
							<div class="col-md-2">
								<input type="number"  class="income form-control  form-control-mb mb-1" placeholder = "Insurance Premium
								" autocomplete="off" id="ass_insPre" name="ass_insPre" onkeyup="sum();" value="0">
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">Other:</label>
							<div class="col-md-1">
								<input type="number"  class="income form-control  form-control-mb mb-1" placeholder = "Other" autocomplete="off" id="ass_other" name="ass_other" onkeyup="sum();" value="0">
							</div>

						</div>
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">Total Monthly Expenditure:</label>
							<div class="col-md-9">
								<input type="text" readonly="" class="income form-control  form-control-mb mb-1" placeholder = "Total Monthly Expenditure" id="ass_totMonExp" name="ass_totMonExp">
							</div>				
						</div>






					</div>
				</div>
				<br>

				<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#addMedData" aria-expanded="false" aria-controls="addMedData">
					<b>II. MEDICAL DATA</b>
				</button>

				<div class="collapse" id="addMedData">
					<div class="card card-body bg-secondary">
						<div class="col-md-12">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Duration of Problem/Symptoms:</label>
								<div class="col-md-9">
									<textarea type="text"  class="form-control  form-control-mb mb-1" placeholder = "Duration of Problem/Symptoms" id="med_DurOfProb" name="med_DurOfProb"></textarea>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Present Treatment Plan:</label>
								<div class="col-md-9">
									<textarea type="text"  class="form-control  form-control-mb mb-1" placeholder = "Present Treatment Plan" id="med_PresTreat" name="med_PresTreat"></textarea>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Previous Treatment/Duration:</label>
								<div class="col-md-9">
									<textarea type="text"  class="form-control  form-control-mb mb-1" placeholder = "Previous Treatment/Duration" id="med_PrevTreat" name="med_PrevTreat"></textarea>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Health Accessibility Problem:</label>
								<div class="col-md-9">
									<textarea type="text"  class="form-control  form-control-mb mb-1" placeholder = "Health Accessibility Problem" id="med_HealthProb" name="med_HealthProb"></textarea>
								</div>
							</div>
						</div>	
					</div>
				</div>


			</div>
		</form>
		<!-- step-2-->

		<?php echo ViewFamilyComposition();?>

		<div id="step-2" class="">
			<input id="formIden" type="hidden" name="formIden">
			<input name="famhpercode" id="famhpercode" type="hidden" >
			<input name="famenccode" id="famenccode" type="hidden" >
			<form id="form-step-2" role="form">
				<div class="row">
					<div class="col-md-12">
						<div class="btn-group pull-right" role="group" aria-label="">
							<a href="javascript:void(0);" class="btn btn-success ModalAddFamily" ><i class="fa fa-plus"></i></a>
						</div>

					</div>

				</div>
				<table id="tblMssfamily" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th>FULLNAME</th>
							<th>AGE</th>
							<th>CIVIL STATUS</th>
							<th>RELATIONSHIP TO THE PATIENT</th>
							<th>EDUCATIONAL ATTAINMENT</th>
							<th>OCCUPATION</th>
							<th>MONTHLY INCOME</th>
							<th width="50px"></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th width="50px"></th>							
						</tr>
					</tfoot>
				</table>
			</form>

		</div>

		<!--step-2-->
		<!--step-3-->
		<div id="step-3" class="">
			<form id="form-step-3" role="form" data-toggle="validator">
				<div class="row">
					<div class="col-md-12">
						<hr class="bg-success">
						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-2 col-form-label text-default mb-1 text-success" align="center"><b>TYPE OF SOCIAL INTERACTION PROBLEM</label></b>
						<label class="col-md-2 col-form-label text-default mb-1 text-success" align="center"><b>SEVERITY INDEX</label></b>
						<label class="col-md-2 col-form-label text-default mb-1 text-success" align="center"><b>DURATION INDEX</label></b>
						<label class="col-md-2 col-form-label text-default mb-1 text-success" align="center"><b>COPING INDEX</label></b>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-2 col-form-label text-default mb-1">1. POWER </label>
						<label class="col-md-2 col-form-label text-default mb-1">1. No Problem </label>
						<label class="col-md-2 col-form-label text-default mb-1">1. More than five years </label>
						<label class="col-md-2 col-form-label text-default mb-1">1. Outstanding </label>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-2 col-form-label text-default mb-1">2. AMBIVALENCE </label>
						<label class="col-md-2 col-form-label text-default mb-1">2. Low </label>
						<label class="col-md-2 col-form-label text-default mb-1">2. One to five years </label>
						<label class="col-md-2 col-form-label text-default mb-1">2. Above Average </label>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-2 col-form-label text-default mb-1">3. RESPONSIBILITY </label>
						<label class="col-md-2 col-form-label text-default mb-1">3. Moderate </label>
						<label class="col-md-2 col-form-label text-default mb-1">3. Six mos. to one year </label>
						<label class="col-md-2 col-form-label text-default mb-1">3. Adequate </label>

						<label class="col-md-4 col-form-label text-default mb-1 text-success"><b>FAMILIAL ROLES</label></b>
						<label class="col-md-2 col-form-label text-default mb-1">4. DEPENDENCY </label>
						<label class="col-md-2 col-form-label text-default mb-1">4. High </label>
						<label class="col-md-2 col-form-label text-default mb-1">4. One to six mos. </label>
						<label class="col-md-2 col-form-label text-default mb-1">4. Somewhat inadequate </label>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-2 col-form-label text-default mb-1">5. LOSS </label>
						<label class="col-md-2 col-form-label text-default mb-1">5. Very High </label>
						<label class="col-md-2 col-form-label text-default mb-1">5. Two weeks to one month </label>
						<label class="col-md-2 col-form-label text-default mb-1">5. Inadequate</label>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-2 col-form-label text-default mb-1">6. ISOLATION </label>
						<label class="col-md-2 col-form-label text-default mb-1">6. Catastrophic </label>
						<label class="col-md-2 col-form-label text-default mb-1">6. Less than two weeks</label>
						<label class="col-md-2 col-form-label text-default mb-1">6. No coping skill </label>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-2 col-form-label text-default mb-1">7. VICTIMIZATION </label>
						<label class="col-md-6 col-form-label text-default mb-1"></label>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-2 col-form-label text-default mb-1">8. MIXED </label>
						<label class="col-md-6 col-form-label text-default mb-1"></label>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-2 col-form-label text-default mb-1">9. OTHERS</label>
						<label class="col-md-6 col-form-label text-default mb-1"></label>
						<hr class="bg-success">
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">SELECT ALL</label>
							<div class="col-md-2">
								<select  name="all_parent_tsi" id="all_parent_tsi" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="all_parent_si" id="all_parent_si" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="all_parent_di" id="all_parent_di" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="all_parent_ci" id="all_parent_ci" class=" form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Parents</label>
							<div class="col-md-2">
								<select  name="soc_parent_tsi" id="soc_parent_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_parent_si" id="soc_parent_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_parent_di" id="soc_parent_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_parent_ci" id="soc_parent_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Spouse</label>
							<div class="col-md-2">
								<select  name="soc_spouse_tsi" id="soc_spouse_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_spouse_si" id="soc_spouse_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_spouse_di" id="soc_spouse_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_spouse_ci" id="soc_spouse_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Child</label>
							<div class="col-md-2">
								<select  name="soc_child_tsi" id="soc_child_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_child_si" id="soc_child_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_child_di" id="soc_child_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_child_ci" id="soc_child_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Sibling</label>
							<div class="col-md-2">
								<select  name="soc_sibling_tsi" id="soc_sibling_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_sibling_si" id="soc_sibling_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_sibling_di" id="soc_sibling_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_sibling_ci" id="soc_sibling_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Family member</label>
							<div class="col-md-2">
								<select  name="soc_fammember_tsi" id="soc_fammember_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_fammember_si" id="soc_fammember_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_fammember_di" id="soc_fammember_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_fammember_ci" id="soc_fammember_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Significant</label>
							<div class="col-md-2">
								<select  name="soc_significant_tsi" id="soc_significant_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_significant_si" id="soc_significant_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_significant_di" id="soc_significant_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_significant_ci" id="soc_significant_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Personal Role</label>
							<div class="col-md-2">
								<select  name="soc_person_tsi" id="soc_person_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_person_si" id="soc_person_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_person_di" id="soc_person_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_person_ci" id="soc_person_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Lover</label>
							<div class="col-md-2">
								<select  name="soc_lover_tsi" id="soc_lover_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_lover_si" id="soc_lover_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_lover_di" id="soc_lover_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_lover_ci" id="soc_lover_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Friend</label>
							<div class="col-md-2">
								<select  name="soc_friend_tsi" id="soc_friend_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_friend_si" id="soc_friend_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_friend_di" id="soc_friend_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_friend_ci" id="soc_friend_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Neighbor</label>
							<div class="col-md-2">
								<select  name="soc_neighbor_tsi" id="soc_neighbor_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_neighbor_si" id="soc_neighbor_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_neighbor_di" id="soc_neighbor_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_neighbor_ci" id="soc_neighbor_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Member</label>
							<div class="col-md-2">
								<select  name="soc_member_tsi" id="soc_member_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_member_si" id="soc_member_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_member_di" id="soc_member_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_member_ci" id="soc_member_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Other (Specify)</label>
							<div class="col-md-2">
								<select  name="soc_other_tsi" id="soc_other_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_other_si" id="soc_other_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_other_di" id="soc_other_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_other_ci" id="soc_other_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">OCCUPATIONAL ROLES</label>
							<div class="col-md-2">
								<select  name="soc_occupational_tsi" id="soc_occupational_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_occupational_si" id="soc_occupational_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_occupational_di" id="soc_occupational_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_occupational_ci" id="soc_occupational_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Worker Paid Economy</label>
							<div class="col-md-2">
								<select  name="soc_paid_tsi" id="soc_paid_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_paid_si" id="soc_paid_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_paid_di" id="soc_paid_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_paid_ci" id="soc_paid_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Worker - Home</label>
							<div class="col-md-2">
								<select  name="soc_home_tsi" id="soc_home_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_home_si" id="soc_home_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_home_di" id="soc_home_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_home_ci" id="soc_home_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Worker - Volunteer</label>
							<div class="col-md-2">
								<select  name="soc_volunteer_tsi" id="soc_volunteer_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_volunteer_si" id="soc_volunteer_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_volunteer_di" id="soc_volunteer_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_volunteer_ci" id="soc_volunteer_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Student</label>
							<div class="col-md-2">
								<select  name="soc_student_tsi" id="soc_student_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_student_si" id="soc_student_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_student_di" id="soc_student_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_student_ci" id="soc_student_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Other (Specify)</label>
							<div class="col-md-2">
								<select  name="soc_other_sp_tsi" id="soc_other_sp_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_other_sp_si" id="soc_other_sp_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_other_sp_di" id="soc_other_sp_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_other_sp_ci" id="soc_other_sp_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">SPECIAL LIFE SITUATION ROLES</label>
							<div class="col-md-2">
								<select  name="soc_sls_role_tsi" id="soc_sls_role_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_sls_role_si" id="soc_sls_role_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_sls_role_di" id="soc_sls_role_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_sls_role_ci" id="soc_sls_role_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Consumer</label>
							<div class="col-md-2">
								<select  name="soc_consumer_tsi" id="soc_consumer_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_consumer_si" id="soc_consumer_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_consumer_di" id="soc_consumer_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_consumer_ci" id="soc_consumer_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>


						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Inpatient/Client</label>
							<div class="col-md-2">
								<select  name="soc_inpatient_tsi" id="soc_inpatient_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_inpatient_si" id="soc_inpatient_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_inpatient_di" id="soc_inpatient_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_inpatient_ci" id="soc_inpatient_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Outpatient/Client</label>
							<div class="col-md-2">
								<select  name="soc_outpatient_tsi" id="soc_outpatient_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_outpatient_si" id="soc_outpatient_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_outpatient_di" id="soc_outpatient_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_outpatient_ci" id="soc_outpatient_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Prisoner</label>
							<div class="col-md-2">
								<select  name="soc_prisoner_tsi" id="soc_prisoner_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_prisoner_si" id="soc_prisoner_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_prisoner_di" id="soc_prisoner_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_prisoner_ci" id="soc_prisoner_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Immigrant-legal</label>
							<div class="col-md-2">
								<select  name="soc_immigrant_leg_tsi" id="soc_immigrant_leg_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_immigrant_leg_si" id="soc_immigrant_leg_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_immigrant_leg_di" id="soc_immigrant_leg_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_immigrant_leg_ci" id="soc_immigrant_leg_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Immigrant-ilegal</label>
							<div class="col-md-2">
								<select  name="soc_immigrant_ileg_tsi" id="soc_immigrant_ileg_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_immigrant_ileg_si" id="soc_immigrant_ileg_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_immigrant_ileg_di" id="soc_immigrant_ileg_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_immigrant_ileg_ci" id="soc_immigrant_ileg_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Immigrant-refugee</label>
							<div class="col-md-2">
								<select  name="soc_immigrant_refugee_tsi" id="soc_immigrant_refugee_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_immigrant_refugee_si" id="soc_immigrant_refugee_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_immigrant_refugee_di" id="soc_immigrant_refugee_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_immigrant_refugee_ci" id="soc_immigrant_refugee_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Other (Specify)</label>
							<div class="col-md-2">
								<select  name="soc_other_sp2_tsi" id="soc_other_sp2_tsi" class="socialinter form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">POWER</option> 
									<option value="02">AMBIVALENCE</option> 
									<option value="03">RESPONSIBILITY</option> 
									<option value="04">DEPENDENCY</option>
									<option value="05">LOSS</option>
									<option value="06">ISOLATION</option>
									<option value="07">VICTIMIZATION</option>
									<option value="08">MIXED</option>
									<option value="09">OTHER</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_other_sp2_si" id="soc_other_sp2_si" class="sevindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_other_sp2_di" id="soc_other_sp2_di" class="durabindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
							<div class="col-md-2">
								<select  name="soc_other_sp2_ci" id="soc_other_sp2_ci" class="copindex form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Outstanding</option> 
									<option value="02">Above Average</option> 
									<option value="03">Adequate</option> 
									<option value="04">Somewhat inadequate</option>
									<option value="05">Inadequate</option>
									<option value="06">No coping skills</option>
								</select>
							</div>
						</div>

					</div>
				</div>	

			</div>
		</form>
		<!--step-3-->
		<!--Step 4-->
		<div id="step-4" class="">
			<form id="form-step-4" role="form" data-toggle="validator">
				<div class="row">
					<div class="col-md-12">
						<hr class="bg-success">
						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-4 col-form-label text-default mb-1 text-success"><b>SEVERITY INDEX</label></b>
						<label class="col-md-4 col-form-label text-default mb-1 text-success"><b>DURATION INDEX</label></b>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-4 col-form-label text-default mb-1">1. No Problem </label>
						<label class="col-md-4 col-form-label text-default mb-1">1. More than five years </label>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-4 col-form-label text-default mb-1">2. Low </label>
						<label class="col-md-4 col-form-label text-default mb-1">2. One to five years </label>

						<label class="col-md-4 col-form-label text-default mb-1 text-success"><b>ECONOMIC/ BASIC NEEDS SYSTEM PROBLEMS</label></b>
						<label class="col-md-4 col-form-label text-default mb-1">3. Moderate </label>
						<label class="col-md-4 col-form-label text-default mb-1">3. Six mos. to one year </label>

						<label class="col-md-4 col-form-label text-default mb-1 text-success"><b> </label></b>
						<label class="col-md-4 col-form-label text-default mb-1">4. High </label>
						<label class="col-md-4 col-form-label text-default mb-1">4. One to six mos. </label>

						<label class="col-md-4 col-form-label text-default mb-1 text-success"></label>
						<label class="col-md-4 col-form-label text-default mb-1">5. Very High </label>
						<label class="col-md-4 col-form-label text-default mb-1">5. Two weeks to one month </label>

						<label class="col-md-4 col-form-label text-default mb-1"></label>
						<label class="col-md-4 col-form-label text-default mb-1">6. Catastrophic </label>
						<label class="col-md-4 col-form-label text-default mb-1">6. Less than two weeks</label>
						<hr class="bg-success">

						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">SELECT ALL</label>
							<div class="col-md-4">
								<select  name="all_prob_si" id="all_prob_si" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="all_prob_di" id="all_prob_di" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<b>	<h4 class="text text-success">FOOD AND NUTRITION </h4></b>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Lack of regular food supply</label>
							<div class="col-md-4">
								<select  name="prob_fan_lackreg_si" id="prob_fan_lackreg_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_fan_lackreg_di" id="prob_fan_lackreg_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Nutrionally inadequate food supply</label>
							<div class="col-md-4">
								<select  name="prob_fan_nutri_si" id="prob_fan_nutri_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_fan_nutri_di" id="prob_fan_nutri_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Documented malnutrition</label>
							<div class="col-md-4">
								<select  name="prob_fan_docu_si" id="prob_fan_docu_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_fan_docu_si" id="prob_fan_docu_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Other(specify)</label>
							<div class="col-md-4">
								<select  name="prob_fan_other_si" id="prob_fan_other_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_fan_other_di" id="prob_fan_other_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<b>	<h4 class="text text-success">SHELTER </h4></b>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Absence of shelter</label>
							<div class="col-md-4">
								<select  name="prob_shelter_absence_si" id="prob_shelter_absence_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_shelter_absence_di" id="prob_shelter_absence_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Substandard of inadequate shelter</label>
							<div class="col-md-4">
								<select  name="prob_shelter_substandard_si" id="prob_shelter_substandard_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_shelter_substandard_di" id="prob_shelter_substandard_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Other(Specify)</label>
							<div class="col-md-4">
								<select  name="prob_shelter_other_si" id="prob_shelter_other_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_shelter_other_di" id="prob_shelter_other_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<b>	<h4 class="text text-success">EMPLOYMENT</h4></b>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Unemployment, employment is not available in the community</label>
							<div class="col-md-4">
								<select  name="prob_employment_unemp_si" id="prob_employment_unemp_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_employment_unemp_di" id="prob_employment_unemp_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Underemployment, adequate employment is not available in the community</label>
							<div class="col-md-4">
								<select  name="prob_employment_under_si" id="prob_employment_under_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_employment_under_di" id="prob_employment_under_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Inappropriate employment, lack of social/legally acceptable employment in the community</label>
							<div class="col-md-4">
								<select  name="prob_employment_inappro_si" id="prob_employment_inappro_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_employment_inappro_di" id="prob_employment_inappro_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Other(Specify)</label>
							<div class="col-md-4">
								<select  name="prob_othersp_si" id="prob_othersp_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_othersp_di" id="prob_othersp_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<b>	<h4 class="text text-success">ECONOMIC RESOURCES </h4></b>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Insufficient community resources for basic sustenance</label>
							<div class="col-md-4">
								<select  name="prob_ecores_insuffcom_si" id="prob_ecores_insuffcom_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_ecores_insuffcom_di" id="prob_ecores_insuffcom_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Insufficient resources in the community to provide for needed service beyond sustenance</label>
							<div class="col-md-4">
								<select  name="prob_ecores_insuffres_si" id="prob_ecores_insuffres_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_ecores_insuffres_di" id="prob_ecores_insuffres_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Other(Specify)</label>
							<div class="col-md-4">
								<select  name="prob_ecores_other_si" id="prob_ecores_other_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_ecores_other_di" id="prob_ecores_other_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<b>	<h4 class="text text-success">TRANSPORTATION</h4></b>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">No personal/public transportation to job/needed service</label>
							<div class="col-md-4">
								<select  name="prob_transpo_si" id="prob_transpo_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_transpo_di" id="prob_transpo_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Other(Specify)</label>
							<div class="col-md-4">
								<select  name="prob_transpo_other_si" id="prob_transpo_other_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_transpo_other_di" id="prob_transpo_other_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">No problem in economic/Basic needed system</label>
							<div class="col-md-4">
								<select  name="prob_basicneed_si" id="prob_basicneed_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_basicneed_di" id="prob_basicneed_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<b>	<h4 class="text text-success">AFFECTIONAL SUPPORT SYSTEM</h4></b>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Absence of affectional support system</label>
							<div class="col-md-4">
								<select  name="prob_affectab_si" id="prob_affectab_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_affectab_di" id="prob_affectab_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Support system inadequate to meet affectional needs </label>
							<div class="col-md-4">
								<select  name="prob_affectsu_si" id="prob_affectsu_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_affectsu_di" id="prob_affectsu_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Excessively involve support system </label>
							<div class="col-md-4">
								<select  name="prob_affectex_si" id="prob_affectex_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_affectex_di" id="prob_affectex_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1">Other(Specify)</label>
							<div class="col-md-4">
								<select  name="prob_affect_other_si" id="prob_affect_other_si" class="probsevere form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">No problem</option> 
									<option value="02">low</option> 
									<option value="03">Moderate</option> 
									<option value="04">High</option>
									<option value="05">Very High </option>
									<option value="06">Catastropic</option>
								</select>
							</div>
							<div class="col-md-4">
								<select  name="prob_affect_other_di" id="prob_affect_other_di" class="probdura form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">More than live year</option> 
									<option value="02">One to five years</option> 
									<option value="03">Six mos. to one year</option> 
									<option value="04">One to six mos</option>
									<option value="05">Two weeks to one month</option>
									<option value="06">Less than two weeks</option>
								</select>
							</div>
						</div>		
						<div class="form-row">
							<div class="col-md-2">	
								<b>	<h4 class="text text-success">ASSESSMENT</h4></b>
							</div>
							<div class="col-md-4">
								<textarea class="form-control" name="prob_assess" Placeholder="Assessment" id="prob_assess"></textarea>
							</div>

							<div class="col-md-2">	
								<b>	<h4 class="text text-success">RECOMMENDED INTERVENTION</h4></b>
							</div>
							<div class="col-md-4">
								<textarea class="form-control" name="prob_recommend" Placeholder="Recommended Intervention" id="prob_recommend"></textarea>
							</div>


						</div>

					</div>
					<!--	/Step 4-->
				</div>
			</form>

			
			<input type="hidden" name = "base_url" id = "base_url" value="<?php echo base_url();?>">

			<script src="<?php echo base_url()?>assets/scripts/socialservice/family_delete.js"></script>
			<script src="<?php echo base_url()?>assets/scripts/socialservice/family.js"></script>
			<script src="<?php echo base_url()?>assets/scripts/socialservice/family_validation.js"></script>