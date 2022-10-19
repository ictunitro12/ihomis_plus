<input name="module" id ="module" type="hidden" value="malariapat">
<div class="modal" id="modalSnapShot" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white"><i class="fa fa-camera"></i> Take Snapshot</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
			</div>
			<div  class="modal-body">
				<div  class="img-fluid img-thumbnail rounded mx-auto d-block mb-1"id="my_camera"></div>
			</div>
			<div class="modal-footer bg-secondary">
				<a  onclick ="take_snapshot();"class="btn btn-success btn-block btn-ladda btn-square" data-style="slide-right"><i class="fa fa-camera"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modalSnapShotResult" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white">
					<i class="fa fa-camera"></i>&nbsp 
					Photo Result
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div   class="modal-body">
				<div id="ImageSnapshot" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
			</div>
			<div class="modal-footer bg-secondary"> 
				<a  onclick ="save_snapshot();"class="btn btn-success btn-block btn-inline btn-square btn-ladda " data-style="zoom-out"><i class="fa fa-save"></i></a>
				<a class="btn btn-success  btn-block btn-square" onclick="iniCamera();"  data-toggle="modal" data-target="#modalSnapShot" ><i class="fa fa-camera"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modalEnlarge" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white">
					<i class="fa fa-camera"></i>&nbsp 
					Photo 
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div   class="modal-body">
				<div id="ImageEnlarge" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
			</div>
			<div class="modal-footer bg-secondary"> 
	
			</div>
		</div>
	</div>
</div>
<p>

<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
			<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Malaria patoratory Registry</h4></div>
				<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" readonly >
				<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden" readonly >
				<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="hospcode" name="hospcode" placeholder ="Name">
				<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="admit" name="admit" placeholder ="Admitted">
				<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="sample" name="sample" placeholder ="Admitted">


				<input type="hidden" class="form-control form-control-mb" name="info_seen" id="info_seen">
				<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="typecode" name="typecode" placeholder ="Type of encounter">
				<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="out" name="out" placeholder ="Outcome">
				<div class="col-md-6">
				<button name="submit" type="submit"  class="btn btn-success btn-ladda  float-right" data-style="zoom-in">
				<i class="fa fa-save"></i> 
				</button>

				<button type="button" id="hey" class="btn btn-success btn-ladda  float-right" onclick="location.reload();">	<i class="fa fa-search"></i> </button>
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

	<hr class="bg-success" >
	<div class="row">
	<div class="col-md-2">
	<img id="PatientImage" name="PatientImage" class="img-fluid img-thumbnail rounded mx-auto d-block mb-1 bg-success" alt="">

	<small class="text text-danger"><b>Note:</b>&nbsp <i>Click button to take patient photo</i></small>
	<input type="hidden" class="form-control form-control-mb" id="info_pic" name="info_pic" readonly >
	<div class="button-group">
	<a class="btn btn-success btn-md btn-block btn-square btn-ladda" data-style="zoom-in" onclick="iniCamera();"   data-toggle="modal" data-target="#modalSnapShot" > <i class="fa fa-camera fa-xs"></i></a>
	</div>
	</div>
	<div class="col-md-10">
		<div class="form-row">
			<div class="col-md-2 col-form-label text-default mb-1">
				<i class="fa fa-asterisk text-danger"></i>Fullname:
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb" readonly autocomplete="off"   id="info_fullname" name="info_fullname" placeholder ="Fullname">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">
				<i class="fa fa-asterisk text-danger"></i>Lastname:
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb" readonly autocomplete="off"   id="info_lname" name="info_lname" placeholder ="Last name">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">
			<i class="fa fa-asterisk text-danger"></i>Firstname:
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb" readonly autocomplete="off" id="info_fname" name="info_fname"  placeholder ="First name">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">
				<i class="fa fa-asterisk text-danger"></i>Middlename:
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb" readonly  autocomplete="off" id="info_mname" name="info_mname"  placeholder ="Middle name"  >
			</div>

			<div class="col-md-2 col-form-label text-default mb-1">
				<i class="fa fa-asterisk text-danger"></i>Sex:
			</div>
			<div class="col-md-4">
				<select name ="info_sex" id="info_sex" class="form-control form-control-mb" readonly>
					<option value="">Please Select</option>
					<option value="M">Male</option>
					<option value="F">Female</option>
				</select>
			</div>

			<div class="col-md-2 col-form-label  text-default mb-1">
				<i class="fa fa-asterisk text-danger"></i>Birth Date:
			</div>
			<div class="col-md-4">
				<input type="datetime-local" class="form-control form-control-mb" name="info_dob" id="info_dob" readonly>
			</div>

			<div class=" col-md-2 col-form-label  text-default mb-1">
				<i class="fa fa-asterisk text-danger"></i>Age:
			</div>
			<div class="col-md-4">
				<input type="text" readonly class="form-control form-control-mb" autocomplete="off" readonly  id="info_age" name="info_age"  placeholder ="Age"  >
				<input type="hidden"  class="form-control form-control-mb" id="info_year" name="info_year"  value="" readonly>
				<input type="hidden" class="form-control form-control-mb" id="info_month" name="info_month"  value=""readonly >
				<input type="hidden" class="form-control form-control-mb" id="info_day" name="info_day"  value="" readonly>
			</div>

			<div class=" col-md-2 col-form-label  text-default mb-1">
				<i class="fa fa-asterisk text-danger"></i>Patient ID:
			</div>
			<div class="col-md-4">
				<input type="text" readonly class="form-control form-control-mb" autocomplete="off" readonly  id="percode" name="percode"  placeholder ="Patient ID"  >
			</div>
			<div class=" col-md-2 col-form-label  text-default mb-1">
				<i class="fa fa-asterisk text-danger"></i>Indigenous People:
			</div>
			<div class="col-md-4">
				<select name ="info_indig" id="info_indig" class="form-control form-control-mb" readonly>
					<option value="">Please Select</option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<div class=" col-md-2 col-form-label  text-default mb-1">
				<i class="fa fa-asterisk text-danger"></i>Occupation
			</div>
			<div class="col-md-4">
				<input type="text" readonly class="form-control form-control-mb" autocomplete="off" readonly  id="info_occupation" name="info_occupation"  placeholder ="Occupation"  >
			</div>
			
	</div>
	</div>
	</div>


	
<hr class="bg-success">
	<div class="row">
	<div class="col-md-12">
	<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
	<hr class="bg-success">
</div>

	<div class="col-md-12">
		<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i> <i class="fa fa-map"></i>&nbsp;Permanent Address</div>
		<hr class="bg-success">
		<div class="form-row">
			<label class="col-md-2 col-form-label  text-default mb-1">No. Street:</label>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb mb-1" id="info_street" readonly="" placeholder="Street Address" name="info_street">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
			<div class="col-md-4">
				<select class="form-control form-control-mb"  id="selCity" name="selCity" readonly="">
				</select>
			</div>
		</div>	

		<div class="form-row">
			<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
			<div class="col-md-4">
				<select  class="form-control form-control-mb"  id="selBrgy" name="selBrgy" readonly=""> </select>
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
				<div class="col-md-4">
				<select class="form-control form-control-mb"   id="selProv" name="selProv" readonly="">
				<option value="">Please Select</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
			<div class="col-md-4">
				<select  class="form-control" id="selReg" name="selReg" readonly=""></select>
			</div>
			
			<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb mb-1" readonly="" placeholder="Zip Code" id="info_zip" name="info_zip">
			</div>
		</div>
	</div>	
</div>	
<hr class="bg-success">

	<div class="row">
	<div class="col-md-12">
	<div class="h5 text-success"><i class="fa fa-user-md"></i>&nbsp MALARIA PATIENT DATA</div>
<hr class="bg-success">
</div>


	<div class="col-md-6">
		<div class="form-row">
			<label class="col-md-3 col-form-label  text-default mb-1">History of Travel?:</label>
			<div class="col-md-9">
				<select name ="travel" id ="travel" class="form-control">
						<option value="">Please Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
			</div>	

			<label class="col-md-3 col-form-label  text-default mb-1">Period of Travel:</label>
			<div class="col-md-9">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="periodtravel" name="periodtravel" disabled="">
			</div>	

			<label class="col-md-3 col-form-label  text-default mb-1">Place of Travel</label>
			<div class="col-md-9">
					<input type="text" placeholder="Place of Travel" class="form-control form-control-mb" autocomplete="off"   id="placetravel" name="placetravel" disabled="">
			</div>


			<label class="col-md-3 col-form-label  text-default mb-1">Previous History of Malaria Infection:</label>
			<div class="col-md-9">
					<select name ="malariainfect" id ="malariainfect" class="form-control">
						<option value="">Please Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
			</div>	

			<label class="col-md-3 col-form-label  text-default mb-1">Diagnosis:</label>
			<div class="col-md-9">
				<input type="text" placeholder="Diagnosis" class="form-control form-control-mb" autocomplete="off"   id="diagnos" name="diagnos" disabled="" >
			</div>

			<label class="col-md-3 col-form-label  text-default mb-1">Treatment Outcome:</label>
			<div class="col-md-9">
				<input type="text" placeholder="Treatment Outcome" class="form-control form-control-mb" autocomplete="off"   id="treatout" name="treatout" disabled="">
			</div>	

			<label class="col-md-3 col-form-label  text-default mb-1">Type of Detention:</label>
			<div class="col-md-9">
					<select name ="malariainfect" id ="malariainfect" class="form-control">
						<option value="">Please Select</option>
						<option value="P">PCD</option>
						<option value="A">ACD</option>
					</select>
			</div>	

			<label class="col-md-3 col-form-label  text-default mb-1">Date Conducted the Lab Exam:</label>
			<div class="col-md-9">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="conductlab" name="conductlab" >
			</div>

			<label class="col-md-3 col-form-label  text-default mb-1">Date of Result Released:</label>
			<div class="col-md-9">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="res_released" name="res_released">
			</div>	
			<label class="col-md-12 col-form-label  text-default mb-1"><b> Examination Result</b>:</label>

			<div class="col-md-2">				
				<label class="col-form-label text-default"><b>Species</b> </label>
			</div>	
			<div class="col-md-1">
				<input type="checkbox" id="pf" name="pf" value="N" class="">&nbsp;
				<label class="col-form-label text-default">Pf </label>
			</div>	
			<div class="col-md-1">
				<input type="checkbox" id="pv" name="pv" value="N" class="">&nbsp;
				<label class="col-form-label text-default">Pv </label>
			</div>	
			<div class="col-md-1">
				<input type="checkbox" id="pm" name="pm" value="N" class="">&nbsp;
				<label class="col-form-label text-default">Pm </label>
			</div>	
			<div class="col-md-1">
				<input type="checkbox" id="po" name="po" value="N" class="">&nbsp;
				<label class="col-form-label text-default">Po </label>
			</div>
			<div class="col-md-1">
				<input type="checkbox" id="pk" name="pk" value="N" class="">&nbsp;
				<label class="col-form-label text-default">Pk </label>
			</div>	
			<div class="col-md-2">
				<input type="checkbox" id="nmp" name="nmp" value="N" class="">&nbsp;
				<label class="col-form-label text-default">NMPS/Neg </label>
			</div>	
			<div class="col-md-1">
				<input type="checkbox" id="pan" name="pan" value="N" class="">&nbsp;
				<label class="col-form-label text-default">Pan </label>
			</div>
			<div class="col-md-2">
				<input type="checkbox" id="nonpan" name="nonpan" value="N" class="">&nbsp;
				<label class="col-form-label text-default">Non-Pf Pan </label>
			</div>

				<label class="col-form-label col-md-12 text-default"><b>Parasite Count** per ul</b> </label>

			<label class="col-md-2 col-form-label  text-default mb-1">Day 0 (Initial Result):</label>
			<div class="col-md-4">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="day0" name="day0">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Day 3:</label>
			<div class="col-md-4">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="day3" name="day3">
			</div>
			<label class="col-md-2 col-form-label  text-default mb-1">Day 7:</label>
			<div class="col-md-4">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="day7" name="day7">
			</div>	

				<label class="col-md-2 col-form-label  text-default mb-1">Day 14:</label>
			<div class="col-md-4">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="day14" name="day14">
			</div>
			<label class="col-md-2 col-form-label  text-default mb-1">Day 21:</label>
			<div class="col-md-4">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="day21" name="day21">
			</div>		

			<label class="col-md-2 col-form-label  text-default mb-1">Day 28:</label>
			<div class="col-md-4">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="day28" name="day28">
			</div>			
		</div>	


	</div>	

	<div class="col-md-6">
		<div class="form-row">
			<label class="col-md-4 col-form-label  text-default mb-1"> <b>Severity:</b></label>
			<div class="col-md-8">
				<select name ="severity" id ="severity" class="form-control">
						<option value="">Please Select</option>
						<option value="U">Uncomplicated</option>
						<option value="S">Severe</option>
					</select>
			</div>	

			<label class="col-md-4 col-form-label  text-default mb-1"> <b>Place of Treatment:</b></label>
			<div class="col-md-8">
				<select name ="treatment" id ="treatment" class="form-control">
						<option value="">Please Select</option>
						<option value="O">Out-Patient</option>
						<option value="I">In-Patient</option>
					</select>
			</div>	

			<label class="col-md-4 col-form-label  text-default mb-1">Date Started:</label>
			<div class="col-md-8">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="datestart" name="datestart">
			</div>		
		
			</div>
		
		<div class="form-row">
			<div class="h5 text-success col-md-12"><i class="fa fa-user-md"></i><b>&nbsp Number of Anti-Malarial Drugs Given</b></div>				
		</div>

		<div class="form-row">
			<label class="col-md-2 col-form-label  text-default mb-1">Arthemeter-Lumegfantrine :</label>
			<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="num_1" name="num_1">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Chloroquine:</label>
			<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="num_2" name="num_2">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Primaquine (15mg/lab):</label>
			<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="num_3" name="num_3">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Quinine Injectable:</label>
			<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="num_4" name="num_4">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Quinine Tablet:</label>
			<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="num_5" name="num_5">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Tetracycline Clindamycin Doxycycline:</label>
			<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="num_6" name="num_6">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Artesunate Suppository:</label>
			<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="num_7" name="num_7">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Others, Specify:</label>
			<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="num_oth" name="num_oth">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Treatment Course:</label>
			<div class="col-md-4">
					<select name ="treatcourse" id ="treatcourse" class="form-control">
						<option value="">Please Select</option>
						<option value="01">Completed</option>
						<option value="02">Not Completed</option>
						<option value="03">Not Compliant</option>
					</select>
			</div>
			<label class="col-md-2 col-form-label  text-default mb-1">Date Completed:</label>

			<div class="col-md-4">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="treatcoursedate" name="treatcoursedate" disabled="">
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Treatment Outcome:</label>
			<div class="col-md-10">
					<select name ="treatoutcome" id ="treatoutcome" class="form-control">
						<option value="">Please Select</option>
						<option value="01">Cured</option>
						<option value="02">Failed</option>
						<option value="03">No Lab Follow-up</option>
						<option value="04">Died</option>
					</select>
			</div>

			<label class="col-md-2 col-form-label  text-default mb-1">Remarks:</label>
			<div class="col-md-10">
					<textarea type="text" class="form-control form-control-mb" autocomplete="off"   id="remarks" name="remarks"></textarea>
			</div>
		</div>						
		</div>
		
		</div>
		</div>	

		
	</div>	
</div>	
<!--end of address-->
<hr class="bg-success">
