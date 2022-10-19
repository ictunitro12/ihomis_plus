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
			</div>W
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
<div class="alert alert-info" role="alert">
<i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) 
<i class="fa fa-asterisk text-danger"></i> are required!</div>
<div class="col-md-12">
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
			<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp <?php echo $header;?></h4></div>
			<div class="col-md-6">
				<button name="patInfoSavebtn" type="submit"  class="btn btn-success btn-ladda  float-right" data-style="zoom-in">
				<i class="fa fa-save"></i> 
				</button>
			</div> 
		</div> 
	</div> 
	<div class="card-body">
	<div class="row">
	<div class="col-md-12">
	<div class="h5 text-success">
	<i class=" fa fa-user"></i>	
	&nbsp Basic Information
	</div>
	<hr class="bg-success" >
	<div class="row">
	<div class="col-md-2">
	<img id="ImageSave" name="ImageSave" class="img-fluid img-thumbnail rounded mx-auto d-block mb-1 bg-success" alt="...">
	<input type="hidden" class="form-control form-control-mb" id="info_pic" name="info_pic" readonly >
	<div class="button-group">
	<a class="btn btn-success btn-md btn-block btn-square btn-ladda" data-style="zoom-in" onclick="iniCamera();"   data-toggle="modal" data-target="#modalSnapShot" > <i class="fa fa-camera fa-xs"></i></a>
	</div>
	</div>
	<div class="col-md-10">
	<div class="form-row">	
	<div class="col-md-2 col-form-label  text-default mb-1">
	Employeed ID #:
	</div>
	<div class="col-md-4">
	<input type="text" class="form-control form-control-mb" id="empid" name="empid" placeholder="Employee ID"  >
	</div>
	<div class="col-md-1 col-form-label text-default mb-1">
		Prefix:
	</div>
	<div class="col-md-5">
	<select  name="empprefix" id="empprefix"  onchange ="empfullname();"  class="form-control form-control-mb" >
			<option value="">Select</option> 
			<option value="NOTAP">N/A</option> 
			<option value="MR">Mr.</option> 
			<option value="MS">Miss.</option> 
			<option value="MRS">Mrs.</option> 
			<option value="DR">Doctor</option> 
			<option value="ENGR">Engineer</option> 
			<option value="ATTY">Attorney</option>
	</select>
	</div>
	</div>
	<div class="form-row">
	<div class="col-md-2 col-form-label text-default mb-1">
	Fullname:
	</div>
	<div class="col-md-10">
		<input type="text" class="form-control form-control-mb"  readonly autocomplete="off" id="info_fullname" name="info_fullname" placeholder ="Last name,First name,Middle name">
	</div>
	<div class="col-md-2 col-form-label text-default mb-1">
		<i class="fa fa-asterisk text-danger"></i>Lastname:
	</div>
	<div class="col-md-10">
		<input type="text" class="form-control form-control-mb" autocomplete="off" onchange ="empfullname();"  id="emplname" name="emplname" placeholder ="Last name">
	</div>
	<div class="col-md-2 col-form-label text-default mb-1">
	<i class="fa fa-asterisk text-danger"></i>Firstname:
	</div>
	<div class="col-md-10">
		<input type="text" class="form-control form-control-mb" onchange ="fullname();" autocomplete="off" id="empfname" name="empfname"  placeholder ="First name">
	</div>
	<div class="col-md-2 col-form-label text-default mb-1">
		Suffix:
	</div>
	<div class="col-md-10">
		<select  name="empsuffix" id="empsuffix"  onchange ="empfullname();"  class="form-control form-control-mb" >
				<option value="">N/A</option> 
				<option value="SR.">Sr.</option> 
				<option value="JR">Jr.</option> 
				<option value="I">I</option> 
				<option value="II">II</option> 
				<option value="III">III</option> 
				<option value="IV">IV</option> 
				<option value="IV">IV</option> 
				<option value="V">V</option> 
		</select>
	</div>
	
	<div class="col-md-2 col-form-label text-default mb-1">
		<i class="fa fa-asterisk text-danger"></i>Middlename:
	</div>
	<div class="col-md-10">
		<input type="text" class="form-control form-control-mb" onchange ="fullname();" autocomplete="off" id="empmname" name="empmname"  placeholder ="Middle name"  >
	</div>
	<div class="col-md-2 col-form-label  text-default mb-1">
		<i class="fa fa-asterisk text-danger"></i>Date of Birth:
	</div>
	<div class="col-md-4">
		<input type="date" class="form-control form-control-mb"  onchange="AgeComputation(this.value);" name="empbdate" id="empbdate">
	</div>
	<div class="col-md-1 col-form-label text-default mb-1">
		<i class="fa fa-asterisk text-danger"></i>Sex:
	</div>
	<div class="col-md-5">
		<select name ="empsex" id="empsex" class="form-control form-control-mb" >
			<option value="">Select</option>
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select>
	</div>
	<div class="col-md-2 col-form-label text-default mb-1">
	<i class="fa fa-asterisk text-danger"></i>	Civil Status :
	</div>
	<div class="col-md-4">
		<select  name="empcstat" id="empcstat" onchange="CivilStatus(this.value)"; class="form-control form-control-mb" >
			<option value="">Select</option> 
			<option value="C">Child</option> 
			<option value="S">Single</option> 
			<option value="M">Married</option> 
			<option value="D">Divorced</option> 
			<option value="X">Separated</option> 
			<option value="W">Widow/Widower</option> 
			<option value="N">N/A</option> 
		</select>
	</div>
	<label class="col-md-1 col-form-label text-default mb-1">
		Tin ID :
	</label>
	<div class="col-md-5">
		<input type="text" class="form-control form-control-mb mb-1" id="emptin" name="emptin" placeholder = "Tin No">
	</div>
	<label class="col-md-2 col-form-label text-default mb-1">
		Complete Address:
	</label>
	<div class="col-md-10">
		<textarea class="form-control form-control-mb" placeholder="Street/UnitNo Barangay,City,ZipCode"></textarea>
	</div>
	</div>
	</div>
	</div>
	<br>
	<div class="row">
	<label class="col-md-2 col-form-label text-default mb-1">
		Department:
	</label>
	<div class="col-md-10">
	<select  name="selDept" id="selDept" class="form-control form-control-mb" ></select>
	</div>
	<label class="col-md-2 col-form-label text-default mb-1">
		Position:
	</label>
	<div class="col-md-10">
		<input type="text" class="form-control form-control-mb"   autocomplete="off" id="empposition" name="empposition" placeholder ="Position/Designation">
	</div>
	</div>
	</div>
	</div>
</div>
</div>
</div>