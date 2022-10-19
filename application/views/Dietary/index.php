<style>

table#DietaryTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#indiTag.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#dietUpper.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#DietaryListTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}


</style>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
	<div class="card card-accent-success">
	<div class="card-header">
	<div class="row">
	
	<div class="col-md-6">
	<div class="h3 text text-success"> 
		<svg style="height:45px; width:45px;fill:#2eb85c;">
		<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-restaurant  "></use>
		</svg>
	<!-- <i class="fa fa-th-list"></i> -->
	&nbsp  <?php echo $header;?>	
	</div>
	</div>
	
	<div class="col-md-6">
	<div class="btn-group pull-right" role="group" aria-label="">
	<!-- <button type="button" id="dietLog" name="dietLog" data-toggle="tooltip" title="Dietary Log" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in">Dietary Log <i class="fa fa-clipboard"></i>
	</button> &nbsp -->

	
	<!-- <button type="button" id="searchPatient" name="searchPatient" data-toggle="tooltip" title="Kardex" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in">Kardex <i class="fa fa-file-text-o"></i>
	</button>&nbsp -->
	<button type="button" id="dietTagAll" name="dietTagAll" data-toggle="tooltip" title="Diet Tag" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in">Diet Tag <i class="fa fa-tags"></i>
	</button>&nbsp
	<button type="button" id="dietaryList" name="dietaryList" data-toggle="tooltip" title="Diet List" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in">Diet List <i class="fa fa-list"></i>
	</button>

	</div>
	</div>	
	</div>
	</div>
	<div class="card-body table-responsive">
	<table id="DietaryTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
	</div>
	
	<thead class="thead-dark">

	<tr>
	
	<th ></th>
	<th ></th>
	<th ></th>
	<th >FIRSTNAME</th>
	<th>MIDDLENAME</th>
	<th>LASTNAME</th>
	<th>WARD/ROOM/BED</th>
	<th>DIET TYPE</th>
	<th>ORDERING DOCTOR</th>
	<th >DATE OF ORDER</th>
	<th >DATE  OF START</th>
	<th >TIME OF START</th>
	<th></th>
	
	
	</tr>
	</thead>

	<tfoot class="thead-dark">
	<tr>
	<th ></th>
	<th></th>
	<th ></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th ></th>
	<th ></th>
	
	
	</tfoot>
	</tr>
	</table>
	


	<!-- DIETARY TAG -->
	<form id="" method="post">
	<div class="modal" id="dietTagMain" tabindex="-1" role="dialog" >
		<div class="modal-dialog modal-dialog-centered modal-mdm " role="dialog"  > 
			<div  class="modal-content card-accent-success" >
				
			<div class="modal-body border-success modal-mdm" >
		<h1 class="modal-title text-success"><i class="fa fa-tag"></i>&nbsp Diet Tags</h1>
				
	<div  id ="tagContent" class="modal-body border-success modal-mdm" style="word-wrap:break-word">
				<div style="text-align:center;margin-bottom:0px;font-size:13px;">
				<label style="font-weight:bold; margin:0;">NUTRITION AND DIETETICS SERVICE</label></div>
				<div style="text-align:center;margin-bottom:0px"><label style="font-size:20px;font-weight: bold;">DIET TAG</label></div>
				
				<table id="indiTag">

				<tr>
				<td>NAME</td>
				<td style="padding-left:10px;" id="dietNameMain"></td>
				</tr>

				<tr>
				<td>SEX/AGE:</td>
				<td style="padding-left:10px;" id="dietAgeMain"></td>
				</tr>

				<tr>
				<td>WARD/ROOM/BED:</td>
				<td style="padding-left:10px;" id="dietWardMain"></td>
				</tr>

				<tr>
				<td>DIET:</td>
				<td style="padding-left:10px;" id="dietTypeMain"></td>
				</tr>
				
				</table>




				<div style="text-align:center;">
				<label style="font-size:11px;font-weight: bold;"><i>Note: PLEASE DO NOT BRING OUT YOUR TRAY TO AVOID LOSSES</i></label><br>
				</div>	
				</div>
			</div>
			<div class="modal-footer bg-secondary modal-mdm" >
			
		
			</div>
			</div>
		</div>
	</div>
    </form>

<!-- DIETARY MODAL -->

			<!-- END DIETARY MODAL -->
	<!-- END DIETARY TAG -->

<!-- DIETARY LIST -->
<form id="" method="post">
	<div class="modal" id="dietList" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
				
			<div class="modal-body border-success">
		<h1 class="modal-title text-success"><i class="fa fa-list"></i>&nbsp Diet List</h1>
		
				<div class="col-md-12 mb-2">
				<div class="col-md-12 mb-2">
					<select name="selWard" id="selWard" class="form-control form-control-lg" >
					<option >SELECT WARD</option>
					<option value="PEDIATRIC WARD">PEDIATRIC WARD</option>
					<option value="PEDIATRIC ISOLATION"> PEDIATRIC ISOLATION</option>
					<option value="FEMALE MEDICAL">FEMALE MEDICAL</option>
					<option value="MALE MEDICAL">MALE MEDICAL</option>
					<option value="FEMALE SURGICAL">FEMALE SURGICAL</option>
					<option value="0ADULT ISOLATION06">ADULT ISOLATION</option>
					<option value="OBSTETRICS">OBSTETRICS</option>
					<option value="GYNECOLOGY">GYNECOLOGY</option>
					<option value="MALE SURGICAL">MALE SURGICAL</option>
					<option value="MALE PHIC WARD">MALE PHIC WARD</option>
					<option value="FEMALE PHIC WARD">FEMALE PHIC WARD</option>
					</select>
					<br>
					<button type="button" id="displayList" name="displayList" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
				
					
				</div>
				</div>
			</div>
			<div class="modal-footer bg-secondary">
			
		
			</div>
			</div>
		</div>
	</div>
    </form>
	<!-- END DIETARY LIST -->

	
	<!-- KARDEX -->
	<form id="" method="post">
	<div class="modal" id="kardex" tabindex="-1" role="dialog" >
		<div class="modal-dialog modal-dialog-centered modal-xl " role="dialog"  > 
			<div  class="modal-content card-accent-success" >
			<div style="background-color:#2eb85c;height:60px;">
		<button style="padding-right:10px;padding-top:20px;height:15px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<h3 class="modal-title" style="color:white;padding-left:20px;padding-top:15px;"><i class="fa fa-file-text-o"></i> Kardex</h3> 
			</div>
			<div class="modal-body border-success modal-xl" >
			<div class="form-row">	
			<div class="col-md-4">
		<button type="button" id="kard_Edit" name="kard_Edit" data-toggle="tooltip" title="Diet Tag" class="btn btn-info btn-md  btn-ladda" data-style="zoom-in">Edit <i class="fa fa-pencil"></i>
		</button>&nbsp
		<button type="button" id="kard_Save" name="kard_Save" data-toggle="tooltip" title="Diet Tag" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in">Save <i class="fa fa-save"></i>
		</button>&nbsp
		<button type="button" id="kard_Cancel" name="kard_Cancel" data-toggle="tooltip" title="Diet Tag"  class="btn btn-danger btn-md  btn-ladda" data-style="zoom-in">Cancel <i class="fa fa-close"></i>
		</button>
		</div>
		</div><br>
					<div  class="modal-body border-success modal-xl" style="word-wrap:break-word">
		
				<div style="font-weight: bold;text-align:center;font-size:20px;">DIETARY KARDEX</div>
					<br/>

					<div class="form-row">	
							<div class="col-md-2 col-form-label  text-default mb-1">
							Name of Patient:
							</div>
								<div class="col-md-5">
								<input type="text" class="form-control form-control-mb" id="patName_kardex" disabled name="patName_kardex">
								</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
							Ward:
							</div>
								<div class="col-md-4">
								<input type="text" class="form-control form-control-mb"  disabled id="patWard_kardex" name="patWard_kardex">
								</div>
					</div>

					<div class="form-row">	
					<div class="col-md-2 col-form-label  text-default mb-1">
					Diagnosis:
					</div>
					<div class="col-md-3">
					<input type="text" class="form-control form-control-mb" id="patDiag_kardex" disabled name="patDiag_kardex">
					</div>
					<div class="col-md-1 col-form-label  text-default mb-1">
					Height:
					</div>
					<div class="col-md-1">
					<input type="text" class="form-control form-control-mb" id="patWeight_kardex"  disabled name="patWeight_kardex">
					</div>
					<div class="col-md-1 col-form-label  text-default mb-1">
					Weight:
					</div>
					<div class="col-md-1">
					<input type="text" class="form-control form-control-mb" id="patHeight_kardex"  disabled name="patHeight_kardex">
					</div>
					<div class="col-md-1 col-form-label  text-default mb-1">
					Body Frame:
					</div>
					<div class="col-md-2">
					<input type="text" class="form-control form-control-mb"  disabled id="patBF_kardex" name="patBF_kardex">
					</div>
					</div>

					
					<div class="form-row">	
					<div class="col-md-2 col-form-label  text-default mb-1">
					Admission Date:
					</div>
					<div class="col-md-3">
					<input type="text" class="form-control form-control-mb" id="patAdmissionDate_kardex" disabled name="patAdmissionDate_kardex">
					</div>
					<div class="col-md-1 col-form-label  text-default mb-1">
					Age:
					</div>
					<div class="col-md-1">
					<input type="text" class="form-control form-control-mb" id="patAge_kardex"  disabled name="patAge_kardex">
					</div>
					<div class="col-md-1 col-form-label  text-default mb-1">
					Sex:
					</div>
					<div class="col-md-1">
					<input type="text" class="form-control form-control-mb" id="patSex_Kardex"  disabled name="patSex_Kardex">
					</div>
					<div class="col-md-1 col-form-label  text-default mb-1">
					BMI:
					</div>
					<div class="col-md-2">
					<input type="text" class="form-control form-control-mb" disabled id="patBMI_kardex" name="patBMI_kardex">
					</div>
					</div>

					<div class="form-row">	
					<div class="col-md-2 col-form-label  text-default mb-1">
					Attending Physician:
					</div>
					<div class="col-md-10">
					<input type="text" class="form-control form-control-mb" id="patPhysician_kardex" disabled name="patPhysician_kardex">
					</div>
					</div>
								
					<div class="form-row">	
					<div class="col-md-2 col-form-label  text-default mb-1">
					Diet Order:
					</div>
					<div class="col-md-5">
					<input type="text" class="form-control form-control-mb" id="patDietOrder_kardex" disabled name="patDietOrder_kardex">
					</div>
					<div class="col-md-1 col-form-label  text-default mb-1">
					Date Order:
					</div>
					<div class="col-md-4">
					<input type="text" class="form-control form-control-mb"  disabled id="patDateOrder_kardex" name="patDateOrder_kardex">
					</div>
					</div>

					<div class="form-row">	
					<div class="col-md-2 col-form-label  text-default mb-1">
					Dental Condition:
					</div>
					<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" id="patDentalCondition_kardex" disabled name="patDentalCondition_kardex">
					</div>
					<div class="col-md-2 col-form-label  text-default mb-1">
					Food Intolerance:
					</div>
					<div class="col-md-4">
					<input type="text" class="form-control form-control-mb"  disabled id="patFoodIntolerance_kardex" name="patFoodIntolerance_kardex">
					</div>
					</div>
				
					<div class="form-row">	
					<div class="col-md-2 col-form-label  text-default mb-1">
					Food Allergies:
					</div>
					<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" id="patFoodAllergies_kardex" disabled name="patFoodAllergies_kardex">
					</div>
					<div class="col-md-2 col-form-label  text-default mb-1">
					Drug-Nutrient Interaction:
					</div>
					<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" id="patDrugNutrient_kardex" disabled name="patDrugNutrient_kardex">
					</div>
					</div>

					<div class="form-row">	
					<div class="col-md-12 col-form-label  text-default mb-1">
					<hr STYLE=" border: 2px solid green;border-radius: 3px;">
					</div>
					</div>

					<div class="form-row">	
					<div class="col-md-2 col-form-label  text-default mb-1">
					Food likes:
					</div>
					<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" id="patFoodLikes_kardex" disabled name="patFoodLikes_kardex">
					</div>
					<div class="col-md-2 col-form-label  text-default mb-1">
					Food Dislikes:
					</div>
					<div class="col-md-4">
					<input type="text" class="form-control form-control-mb" id="patFoodDislikes_kardex" disabled name="patFoodDislikes_kardex">
					</div>
					</div>

					<div class="form-row">	
					<div class="col-md-4 col-form-label  text-default mb-1">
					Beverage Preference/Others:
					</div>
					</div>

					<div class="form-row">	
					<div class="col-sm-1 col-form-label  text-default mb-1">
					B=
					</div>
					<div class="col-md-3">
					<input type="text" class="form-control form-control-mb" id="patB_kardex" disabled name="patB_kardex">
					</div>

					<div class="col-sm-1 col-form-label  text-default mb-1">
					L=
					</div>
					<div class="col-md-3">
					<input type="text" class="form-control form-control-mb" id="patL_kardex" disabled name="patL_kardex">
					</div>

					<div class="col-sm-1 col-form-label  text-default mb-1">
					S=
					</div>
					<div class="col-md-3">
					<input type="text" class="form-control form-control-mb" id="patS_kardex" disabled name="patS_kardex">
					</div>
					</div>

					<div class="form-row">	
					<div class="col-md-12 col-form-label  text-default mb-1">
					<hr STYLE=" border: 2px solid green;border-radius: 3px;">
					</div>
					</div>
				
					<div class="form-row">
					<div class="col-md-3">
					<div  class="col-md-8 col-form-label  text-default mb-1">
					Special Nourishment:
					<input style="height:150px;width:200px;" type="text" class="form-control form-control-mb" id="patSpecial_kardex" disabled name="patSpecial_kardex">
					</div>
					</div>

					<div class="col-md-3">
					<div  class="col-md-8 col-form-label  text-default mb-1">
					10AM
					<input style="height:150px;width:200px;" type="text" class="form-control form-control-mb" id="pat10am_kardex" disabled name="pat10am_kardex">
					</div>
					</div>

					<div class="col-md-3">
					<div  class="col-md-8 col-form-label  text-default mb-1">
					2PM
					<input style="height:150px;width:200px;" type="text" class="form-control form-control-mb" id="pat2pm_kardex" disabled name="pat2pm_kardex">
					</div>
					</div>

					<div class="col-md-3">
					<div  class="col-md-8 col-form-label  text-default mb-1">
					8PM
					<input style="height:150px;width:200px;" type="text" class="form-control form-control-mb" id="pat8pm_kardex" disabled name="pat8pm_kardex">
					</div>
					</div>
					</div>

				
				
				

			</div>
			</div>
			<div class="modal-footer bg-secondary modal-xl" >
			
		
			</div>
			</div>
		</div>
	</div>
    </form>
	<!-- KARDEX -->

<!-- DIET TAG INDIVIDUAL -->
<form id="" method="post">
	<div class="modal" id="diet_tag" tabindex="-1" role="dialog" >
		<div class="modal-dialog modal-dialog-centered modal-mdm " role="dialog"  > 
			<div  class="modal-content card-accent-success" >
				
			<div class="modal-body border-success modal-mdm" >
		<button id="dietTagprint" type="button" class="btn btn-outline-warning" style="float:right;"><i class="fa fa-print"></i></button>
		<h1 class="modal-title text-success"><i class="fa fa-tag"></i>&nbsp Diet Tag</h1>
				<div  class="modal-body border-success modal-mdm" style="word-wrap:break-word">
				<div style="text-align:center;margin-bottom:0px;font-size:13px;">
				<label style="font-weight:bold; margin:0;">NUTRITION AND DIETETICS SERVICE</label></div>
				<div style="text-align:center;margin-bottom:0px"><label style="font-size:20px;font-weight: bold;">DIET TAG</label></div>
				
				<table id="indiTag">

				<tr>
				<td>NAME</td>
				<td style="padding-left:10px;" id="dietName"></td>
				</tr>

				<tr>
				<td>SEX/AGE:</td>
				<td style="padding-left:10px;" id="dietAge"></td>
				</tr>

				<tr>
				<td>WARD/ROOM/BED:</td>
				<td style="padding-left:10px;" id="dietWard"></td>
				</tr>

				<tr>
				<td>DIET:</td>
				<td style="padding-left:10px;" id="dietType"></td>
				</tr>
				
				</table>




				<div style="text-align:center;">
				<label style="font-size:11px;font-weight: bold;"><i>Note: PLEASE DO NOT BRING OUT YOUR TRAY TO AVOID LOSSES</i></label><br>
				</div>	
				</div>
			</div>
			<div class="modal-footer bg-secondary modal-mdm" >
			
		
			</div>
			</div>
		</div>
	</div>
    </form>
	<!-- DIET TAG INDIVIDUAL LIST -->


	<!-- DIET TAG INDIVIDUAL -->
<form id="" method="post">
	<div class="modal" id="diet_list" tabindex="-1" role="dialog" >
		<div class="modal-dialog modal-dialog-centered modal-xl " role="dialog"  > 
			<div  class="modal-content card-accent-success" >
				
			<div class="modal-body border-success modal-xl" >
			<button type="button" class="btn btn-danger" id="dietListClose" data-dismiss="modal" style="float:right;font-weight:bold;">x</button>
		<h1 class="modal-title text-success"><i class="fa fa-tag"></i>&nbsp Diet List </h1>
		
				<div  class="modal-body border-success modal-mdm" style="word-wrap:break-word">
				<div style="text-align:center;margin-bottom:0px;font-size:13px;">
				<label style="font-weight:bold; margin:0;">NUTRITION AND DIETETICS SERVICE</label></div>
				<div style="text-align:center;margin-bottom:0px"><label style="font-size:20px;font-weight: bold;">DIET LIST</label></div>
				
				<table id="dietUpper" style="width:100%;">

				<tr>
				<td>WARD:</td>
				<td id="wardName"><u></u></td>
				<td style="padding-left:10px;" id="dietWard">Date:</td>
				<td  id="wardDate"><u></u></td>
				</tr>

				<tr>
				<td></td>
				<td style="padding-left:10px;" id="dietDate"></td>
				</tr>
				</table>
				<div class="card-body table-responsive">

								<table id="DietaryListTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
				
					
					<thead class="thead-dark">

					<tr>
					
					<th >Rm No.</th>
					<th>Name of Patient</th>
					<th>Age</th>
					<th>Height<br>(m)</th>
					<th>Weight<br>(kg)</th>
					<th>BMI</th>
					<th >Diagnosis</th>
					<th >Diet Rx</th>
					<th >Remarks*</th>
				
					
					
					</tr>
					</thead>

					<tfoot >
					<tr>
					<th id="roomNum"></th>
					<th id="patName"></th>
					<th id="patAge"></th>
					<th id="patHeight"></th>
					<th id="patWeight"></th>
					<th id="patBMI"></th>
					<th id="patDiagnosis"></th>
					<th id="patDiet"></th>
					<th id="patRemarks"></th>
					
					
					
					</tfoot>
					</tr>
					</table>
	

				</div>


				<div style="text-align:right;">
				<label style="font-size:11px;font-weight: bold;">Prepared By:____________________________</label><br>
				</div>	
				</div>
			</div>
			<div class="modal-footer bg-secondary modal-mdm" >
			
		
			</div>
			</div>
		</div>
	</div>
    </form>
	<!-- DIET TAG INDIVIDUAL LIST -->




	<!-- DIET TAG PDF -->
	<form id="" method="post">
	<div class="modal" id="diettag_print" tabindex="-1" role="dialog" >
		<div class="modal-dialog modal-dialog-centered modal-mdm " role="dialog"  > 
			<div  class="modal-content card-accent-success" >
				
			<div class="modal-body border-success modal-mdm" >
			<button type="button" class="btn btn-danger" id="dietListClose" style="float:right;font-weight:bold;">x</button>
		<h1 class="modal-title text-success"></i>&nbsp Diet Tag </h1>
		
				
			<div class="modal-footer bg-secondary modal-mdm" >
			
		
			</div>
			</div>
		</div>
	</div>
    </form>
	<!-- DIET TAG PDF -->




	<script type="text/javascript">
		var table = '';
		var drop_selected='';
		
		
	$(function() {

		loadData();
	
		});


	function loadData() {
		table = $("#DietaryTable").DataTable({
	oLanguage: {
	sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'
	},
	pageLength: 20,
	aLengthMenu: [[10, 15, 20, 50, 75, -1], [10, 15, 20, 50, 75, "All"]],
	processing: true,
	serverSide: true,
	searching: true,
	responsive: true,
	info: true,
	orderable: true,
	paging: true,
	autoWidth: true,
	destroy: true,
	ajax: {
	  "url": "<?php echo site_url('Dietary/DietPatientList'); ?>",
	  "type": "POST"},
	  columnDefs: [{
		targets: [0,1,2],
        visible: false,
	  }]
  });
			
  
  $('#DietaryTable').on('click' ,'.view2', function () {
	  
	  var data = table.row($(this).parents('tr')).data();
			console.log(data);
			var fullname = data[3] + " " +data[4] + " "+ data[5];
			var age = data[2]+"/"+" "+parseFloat(data[1])+" years old";
			var ward_room_bed = data[6];
			var diet = data[7];
			
	
			var dataObj = {
					fullname: fullname,
					age: age,
					ward_room_bed: ward_room_bed,
					diet: diet,
					

				};
			var param = btoa( JSON.stringify( dataObj ) );
			window.open('<?= base_url('Dietary/DietTagGen/'); ?>'+param);
		});

	$('#dietTagAll').click(function () {
	  
	  	var count = table.rows()[0].length;
	  	var dataALL = table.data();

	

		var dataObjarray = [];
		var site_url = "<?= base_url('Dietary/DietTagGenAll/') ?>";

		for(i=0; i<dataALL.length; i++)
		{
			var array2 = {};		
			array2['fullname'] = dataALL[i][3]+" "+" "+dataALL[i][4]+" "+dataALL[i][5];
			array2['age'] = dataALL[i][2]+"/"+" "+parseFloat(dataALL[i][1])+" years old";
			array2['ward_room_bed'] = dataALL[i][6];
			array2['diet'] = dataALL[i][7];

			dataObjarray.push(array2);
		}
			param2 = btoa(JSON.stringify(dataObjarray));
			console.log(dataObjarray);
			window.open(site_url + param2);
		
	  
		});
	}
	
		
		 


			
			$('#dietaryList').click(function() {
				
			$('#dietList').modal('show');
				});


				

			$('#displayList').click(function() {

				var e = document.getElementById("selWard");
				var strUser = e.options[e.selectedIndex].value;

				

				var today = new Date();
				var date = (today.getMonth()+1)+'-'+today.getDate()+'-'+today.getFullYear();


				
			$.post('Dietary/DietShowList',
			{
				arg_wardcode: strUser
			},
			function (wardcode) {
				$('#wardName').text('');
				$('#wardDate').text('');
				$('#roomNum').text('');
				$('#patName').text('');
				$('#patAge').text('');
				$('#patRemarks').text('');
				$('#patDiet').text('');

				$('#dietList').modal('hide');
				$('#diet_list').modal('show');
				
				$('#wardName').text(strUser);
				$('#wardDate').text(date);



				$('#roomNum').text(wardcode[0].bdname);
				$('#patName').text(wardcode[0].patfirst + " " +wardcode[0].patmiddle + " "+ wardcode[0].patlast);
				$('#patAge').text(parseFloat(wardcode[0].patage)+" years old");
				$('#patRemarks').text(wardcode[0].remarks);
				$('#patDiet').text(wardcode[0].dietdesc);
			

			},"json"
			);
			});
		


			$('#DietaryTable').on("click", ".view", function() {
			$('#kardex').modal('show');
			uppercase();
			var data2 = table.row($(this).parents('tr')).data();
			var hidden_enccode = data2[0];
				console.log(data2);
			
		
			$.post('Dietary/DietKardex',
			{
				hidden: hidden_enccode
			},
			function (data) {
				console.log(data);

			$('#patName_kardex').val(data[0].patfirst +" "+data[0].patmiddle+" "+data[0].patlast);
			$('#patWard_kardex').val(data[0].wardname);
			$('#patSex_Kardex').val(data[0].patsex);
			$('#patDietOrder_kardex').val(data[0].dietcode);
			$('#patDateOrder_kardex').val(data[0].dodate);
			$('#patHeight_kardex').val(data[0].HEIGHT);
			$('#patWeight_kardex').val(data[0].WEIGHT);
			$('#patBMI_kardex').val(data[0].BMI);
			$('#patDentalCondition_kardex').val(data[0].DentCond);
			$('#patAdmissionDate_kardex').val(data[0].admdate);
			$('#patFoodIntolerance_kardex').val(data[0].FIntolerance);
			$('#patFoodAllergies_kardex').val(data[0].Fallergy);
			$('#patDrugNutrient_kardex').val(data[0].DNinteract);
			$('#patB_kardex').val(data[0].BevPrefBF);
			$('#patL_kardex').val(data[0].BevPrefL);
			$('#patS_kardex').val(data[0].BevPrevSup);
			$('#patSpecial_kardex').val(data[0].SpecNourish);
			$('#pat10am_kardex').val(data[0].SpecNourishBFCutoff);
			$('#pat2pm_kardex').val(data[0].SpecNourishLCutoff);
			$('#pat8pm_kardex').val(data[0].SpecNourishSupCutoff);
			$('#patFoodLikes_kardex').val(data[0].Flikes);
			$('#patFoodDislikes_kardex').val(data[0].FDlikes);
			$('#patPhysician_kardex').val(data2[0][8]);
			$('#patAge_kardex').val(parseFloat(data[0].patage)+" y/o");

			},"json"
			);

			$('#kard_Cancel').click(function() {

				$('#patDentalCondition_kardex').attr('disabled','disabled');
				$('#patFoodIntolerance_kardex').attr('disabled','disabled');
				$('#patFoodAllergies_kardex').attr('disabled','disabled');
				$('#patDrugNutrient_kardex').attr('disabled','disabled');
				$('#patFoodLikes_kardex').attr('disabled','disabled');
				$('#patFoodDislikes_kardex').attr('disabled','disabled');
				$('#patB_kardex').attr('disabled','disabled');
				$('#patL_kardex').attr('disabled','disabled');
				$('#patS_kardex').attr('disabled','disabled');
				$('#patSpecial_kardex').attr('disabled','disabled');
				$('#pat10am_kardex').attr('disabled','disabled');
				$('#pat2pm_kardex').attr('disabled','disabled');
				$('#pat8pm_kardex').attr('disabled','disabled');

				$('#kardex').modal('hide');

				});


			$('#kard_Edit').click(function() {
				$('#patDentalCondition_kardex').removeAttr('disabled');
				$('#patFoodIntolerance_kardex').removeAttr('disabled');
				$('#patFoodAllergies_kardex').removeAttr('disabled');
				$('#patDrugNutrient_kardex').removeAttr('disabled');
				$('#patFoodLikes_kardex').removeAttr('disabled');
				$('#patFoodDislikes_kardex').removeAttr('disabled');
				$('#patB_kardex').removeAttr('disabled');
				$('#patL_kardex').removeAttr('disabled');
				$('#patS_kardex').removeAttr('disabled');
				$('#patSpecial_kardex').removeAttr('disabled');
				$('#pat10am_kardex').removeAttr('disabled');
				$('#pat2pm_kardex').removeAttr('disabled');
				$('#pat8pm_kardex').removeAttr('disabled');

				document.getElementById('kard_Cancel').style.visibility = 'visible';
			
			});

			$('#kard_Save').click(function() {
		
			var dental_condition = document.getElementById("patDentalCondition_kardex").value;
			var food_intolerance = document.getElementById("patFoodIntolerance_kardex").value;
			var food_allergies = document.getElementById("patFoodAllergies_kardex").value;
			var drug_nutrient = document.getElementById("patDrugNutrient_kardex").value;
			var f_likes = document.getElementById("patFoodLikes_kardex").value;
			var fd_likes = document.getElementById("patFoodDislikes_kardex").value;
			var b_kardex = document.getElementById("patB_kardex").value;
			var l_kardex = document.getElementById("patL_kardex").value;
			var s_kardex = document.getElementById("patS_kardex").value;
			var special_kardex = document.getElementById("patSpecial_kardex").value;
			var bf_kardex = document.getElementById("pat10am_kardex").value;
			var lunch_kardex = document.getElementById("pat2pm_kardex").value;
			var dinner_kardex = document.getElementById("pat8pm_kardex").value;
			$.post('Dietary/KardexEdit',
			{
				dental_condition: dental_condition,
				food_intolerance: food_intolerance,
				food_allergies: food_allergies,
				drug_nutrient: drug_nutrient,
				k_hpercode: hidden_enccode,
				f_likes: f_likes,
				fd_likes: fd_likes,
				b_kardex: b_kardex,
				l_kardex: l_kardex,
				s_kardex: s_kardex,
				special_kardex: special_kardex,
				bf_kardex: bf_kardex,
				lunch_kardex: lunch_kardex,
				dinner_kardex: dinner_kardex

			},
			function (newdata) {
				console.log(newdata);

				$('#patDentalCondition_kardex').attr('disabled','disabled');
				$('#patFoodIntolerance_kardex').attr('disabled','disabled');
				$('#patFoodAllergies_kardex').attr('disabled','disabled');
				$('#patDrugNutrient_kardex').attr('disabled','disabled');
				$('#patFoodLikes_kardex').attr('disabled','disabled');
				$('#patFoodDislikes_kardex').attr('disabled','disabled');
				$('#patB_kardex').attr('disabled','disabled');
				$('#patL_kardex').attr('disabled','disabled');
				$('#patS_kardex').attr('disabled','disabled');
				$('#patSpecial_kardex').attr('disabled','disabled');
				$('#pat10am_kardex').attr('disabled','disabled');
				$('#pat2pm_kardex').attr('disabled','disabled');
				$('#pat8pm_kardex').attr('disabled','disabled');

				document.getElementById('kard_Cancel').style.visibility = 'hidden';
				toastr.success('Updated Successfully','Success');
				
				
			});
		});
			});
		
		
</script>

