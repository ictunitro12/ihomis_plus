var orderList = $("#medicineList").DataTable({
	destroy:true,
	fixedColumns: {
		leftColumns: 2
	},
	scrollY:"500px",
	scrollX:true,
	scrollCollapse: true,
	paging :false,
	autowidth:false,	
	columnDefs: [
		{
			visible:false,
			targets:[1,2]
		},
		{
			width:"100%",
			targets:[4]
		},
		{
			className:"color",
			targets:[3]
		},
		{
			targets:["_all"],
			className:"align-middle"
		}
	],
});

function drugMultipleData() {
	var data = new Object();
	data.id = "drugmultiData";
	data.link = baseURL + "Drugs/drugdata";
	data.select = {
		select: true,
		style: 'multi',
		toggleable: false,
		className:'bg-success text-white selected'
	},
	data.type = "POST";
	data.search = true;
	data.destroy = true;
	data.length = true;
	data.paging = true;
	data.info = true;
	data.columns = [
		{ data: "dmdcomb" },
		{ data: "drugs" }];
	 Datatable(data);
}

	$("#btnAddPrescription").on('click',function(){
		$('#presformIden').val("insert");
		$('#dateOrderPres').val(getTimeLocale());
		$('#datePostPres').val(getTimeLocale());
		$('#presEnccode').val(enccode);	 
		$('#presHpercode').val(hpercode);			
		selDoctor($("#frmPrescriptionMulti"));
		SelEmp();	
		$('#modalDrugMulti').modal({backdrop:'static',show:true});		
	});

  $("#btnSearchDrugs").on("click",function(){
	drugMultipleData();
	$("#modalMultipleDrug").modal({backdrop:'static',show:true});
  });

  $("#btnSelectDrugs").on("click",function(){
	var drugTable = $("#drugmultiData").DataTable();
	var rowData=drugTable.rows('.selected').data();
	$.each(rowData, function (i, d) {
		var intake = drugInformation(d['dmdcomb'],d['dmdctr']);	
		orderList.row.add([	
		'<a class="text text-danger text-center"  style ="cursor:pointer;" id="btnremove" ><i class="fa fa-close fa-2x"></i></a>',
		'<input type="text"  value='+d['dmdcomb']+' name="dmdcomb" id="dmdcomb">',
		'<input type="text"   value='+d['dmdctr']+' name="dmdctr" id="dmdctr">',
		'<div>'+d['drugs']+'</div>',
		'<input type="number"  autocomplete ="off" class="form-control form-control-sm col-xs-6" name="intakePres" id="intakePres" min="1" placeholder="Intake">',
		'<input type="text"  autocomplete ="off"  class="form-control form-control-sm" name="selIntake_form" id="selIntake_form" value='+(intake['uomdesc']==null?'n/a':intake['uomcode'])+' readonly>',
		'<input type="number"  autocomplete ="off" class="form-control form-control-sm" min="1" id="freqPres" name="freqPres" placeholder="No of Frequency">',
		'<select name="selFreqPres" autocomplete ="off"   class="form-control form-control-sm"id="selFreqPres"><option value="">Select</option><option value="HOU">Hour/s</option><option value="DAY">Day/s</option><option value="WEK">Week/s</option><option value="MON">Months</option><option value="YER">Years</option></select>',
		'<input type="number"   autocomplete ="off" class="form-control form-control-sm" id="noDaysPres" name="noDaysPres"  placeholder="No of Days" >',
		'<select name="selDays"  class="form-control form-control-sm" id="selDays"><option value="">Select</option><option value="DAY">Hour/s</option><option value="WEK">Day/s</option><option value="YER">Years</option></select>',
		'<input type="checkbox"  id="everyMonPres" name="everyMonPres" onchange="dayCheck();"><label>:Mon</label> <input type="hidden"  id="everydayMon_val" name="everydayMon_val"  value="N" >',
		'<input type="checkbox"   id="everyTuePres" name="everyTuePres" onchange="dayCheck();"><label>:Tue</label> <input type="hidden"  id="everydayTue_val" name="everydayTue_val"  value="N" >',
		'<input type="checkbox"  id="everyWedPres" name="everyWedPres" onchange="dayCheck();"><label>:Wed</label> <input type="hidden"  id="everydayWed_val" name="everydayWed_val"  value="N" >',
		'<input type="checkbox"  id="everyThurPres" name="everyThurPres" onchange="dayCheck();"><label>:Thu</label><input type="hidden"  id="everydayThu_val" name="everydayThu_val"  value="N" >',
		'<input type="checkbox" id="everyFriPres" name="everyFriPres" onchange="dayCheck();"><label>:Fri</label><input type="hidden"  id="everydayFri_val" name="everydayFri_val"  value="N" >',
		'<input type="checkbox"  id="everySatPres" name="everySatPres" onchange="dayCheck();"><label>:Sat</label><input type="hidden"  id="everydaySat_val" name="everydaySat_val"  value="N" >',
		'<input type="checkbox" id="everySunPres" name="everySunPres" onchange="dayCheck();"><label>:Sun</label><input type="hidden"  id="everydaySun_val" name="everydaySun_val"  value="N" >',
		'<input type="time" autocomplete ="off"  class="form-control form-control-sm" id="every1Pres" name="every1Pres">',
		'<input type="time" autocomplete ="off"  class="form-control form-control-sm" id="every2Pres" name="every2Pres">',
		'<input type="time"  autocomplete ="off"  class="form-control form-control-sm" id="every3Pres" name="every3Pres">',
		'<input type="time" autocomplete ="off"   class="form-control form-control-sm" id="every4Pres" name="every4Pres">',
		'<input type="date" autocomplete ="off"  class="form-control form-control-sm" id="startPres" name="startPres" >',
		'<input type="text" autocomplete ="off"  class="form-control form-control-sm" id="remarksPres" name="remarksPres" placeholder="Remarks">',
		'<input type="hidden" class="form-control form-control-sm" readonly value='+i+' name="row[]" id="row[]">']).draw(true);
	});
	$("#modalMultipleDrug").modal('hide');
	drugTable.rows('.selected' ).remove().draw();
  });
  function dayCheck() 
	{

	var row= orderList.rows().count();

		for(var i = 0; i <row; i++)
		{
			var cbMon=  $(orderList.cell(i, 10).node()).find('input[name=everyMonPres]').is(":checked");
			var cbTue=  $(orderList.cell(i, 11).node()).find('input[name=everyTuePres]').is(":checked");
			var cbWed=  $(orderList.cell(i, 12).node()).find('input[name=everyWedPres]').is(":checked");
			var cbThu=  $(orderList.cell(i, 13).node()).find('input[name=everyThurPres]').is(":checked");
			var cbFri=  $(orderList.cell(i, 14).node()).find('input[name=everyFriPres]').is(":checked");
			var cbSat=  $(orderList.cell(i, 15).node()).find('input[name=everySatPres]').is(":checked");
			var cbSun=  $(orderList.cell(i, 16).node()).find('input[name=everySunPres]').is(":checked");
			if(cbMon==true){
				$(orderList.cell(i, 10).node()).find('input[name=everydayMon_val]').val('Y');
			}else{
				$(orderList.cell(i, 10).node()).find('input[name=everydayMon_val]').val('N');
			}

			if(cbTue==true){
				$(orderList.cell(i, 11).node()).find('input[name=everydayTue_val]').val('Y');
			}else{
				$(orderList.cell(i, 11).node()).find('input[name=everydayTue_val]').val('N');
			}

			if(cbWed==true){
				$(orderList.cell(i, 12).node()).find('input[name=everydayWed_val]').val('Y');
			}else{ 
				$(orderList.cell(i, 12).node()).find('input[name=everydayWed_val]').val('N');
			}

			if(cbThu==true){
				$(orderList.cell(i, 13).node()).find('input[name=everydayThu_val]').val('Y');
			}else{ 
				$(orderList.cell(i, 13).node()).find('input[name=everydayThu_val]').val('N');
			}

			if(cbFri==true){
				$(orderList.cell(i, 14).node()).find('input[name=everydayFri_val]').val('Y');
			}else{
				$(orderList.cell(i, 14).node()).find('input[name=everydayFri_val]').val('N');
			}

			if(cbSat==true){
				$(orderList.cell(i, 15).node()).find('input[name=everydaySat_val]').val('Y');
			}else{
				$(orderList.cell(i, 15).node()).find('input[name=everydaySat_val]').val('N');
			}

			if(cbSun==true){
				$(orderList.cell(i, 16).node()).find('input[name=everydaySun_val]').val('Y');
			}else{
				$(orderList.cell(i, 16).node()).find('input[name=everydaySun_val]').val('N');
			}
		}
	}

	
	$("form[name='frmPrescriptionMulti']").validate({
		rules: {
		  dateOrderPres:'required',
		  datePostPres:'required',
		  selDocPres_doc:'required',
		  selEmppres_emp:'required',
		  selPres_drugs:'required',
		  intakePres:'required',
		  selIntake_form:'required',
		  freqPres:'required',
		  noDaysPres:'required',
		  presType:'required',
		  startPres:'required',
		},	
		messages: {
		  startPres:'Start date is required',
		  dateOrderPres:'Order date is required',
		  presType:'Type  is required',
		  datePostPres:'Post date is required',
		  selDocPres_doc:'Doctor is required',
		  selEmppres_emp:'Employee is required',
		  selPres_drugs:'Drugs is required',
		  intakePres:'Intake is required',
		  selIntake_form:'Intake form is required',
		  freqPres:'frequency is required',
		  noDaysPres:'Number is required',
		},
		errorElement: 'span',
		errorPlacement: function errorPlacement(error, element) {
		  error.addClass('invalid-feedback');
			error.insertAfter(element);
		  
		},
	  
		highlight: function highlight(element) {
		  $(element).addClass('is-invalid').removeClass('is-valid');
			if( $(element).hasClass('select2-offscreen'))
			{
				element=$("#s2id_" + element.attr("id") + " ul").parent();
			  $(element).addClass('is-invalid').removeClass('is-valid');
			}
		},
		
		unhighlight: function unhighlight(element) {
		  $(element).addClass('is-valid').removeClass('is-invalid');
		  if( $(element).hasClass('select2-offscreen'))
			{
			   $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
			}
		} 
		});
		  
	
  $("#frmPrescriptionMulti").on('submit',function(){
	if ($('#frmPrescriptionMulti').valid()) 
	{
    var formData = new FormData(this);
	var row = formData.getAll("row[]");
	var orderListArray = [];
		for(var i = 0; i <row.length; i++)
		{
			var orders = {};
			var enccode  =$("#presEnccode").val();
			var hpercode  =$("#presHpercode").val();
			var orderDate  =$("#dateOrderPres").val();
			var postDate  =$("#datePostPres").val();
			var doctor  =$("#selDocPres_doc").val();
			var type  =$("#presType").val();
			var verify  =$("#selEmppres_emp").val();
			var priority  =$("#ordPrio").val();
			var formType  =$("#presformIden").val();
			
			var dmdcomb=$(orderList.cell(i, 1).node()).find('input[name=dmdcomb]').val();
			var dmdctr=$(orderList.cell(i, 2).node()).find('input[name=dmdctr]').val();
			var drugname=$(orderList.cell(i, 3).node()).text();
			var intake=$(orderList.cell(i, 4).node()).find('input[name=intakePres]').val();
		
			var intakeform=$(orderList.cell(i, 5).node()).find('input[name=selIntake_form]').val();
			var nofreq=$(orderList.cell(i, 6).node()).find('input[name=freqPres]').val();
			var frequency=$(orderList.cell(i, 7).node()).find('select[name=selFreqPres]').val();

			var nodays=$(orderList.cell(i,8).node()).find('input[name=noDaysPres]').val();
			var day=$(orderList.cell(i,9).node()).find('select[name=selDays]').val();

			var mon=$(orderList.cell(i, 10).node()).find('input[name=everydayMon_val]').val();
			var tue=$(orderList.cell(i, 11).node()).find('input[name=everydayTue_val]').val();
			var wed=$(orderList.cell(i, 12).node()).find('input[name=everydayWed_val]').val();
			var thu=$(orderList.cell(i, 13).node()).find('input[name=everydayThu_val]').val();
			var fri=$(orderList.cell(i, 14).node()).find('input[name=everydayFri_val]').val();
			var sat=$(orderList.cell(i, 15).node()).find('input[name=everydaySat_val]').val();
			var sun=$(orderList.cell(i, 16).node()).find('input[name=everydaySun_val]').val();

			var time1=$(orderList.cell(i, 17).node()).find('input[name=every1Pres]').val();
			var time2=$(orderList.cell(i, 18).node()).find('input[name=every2Pres]').val();
			var time3=$(orderList.cell(i, 19).node()).find('input[name=every3Pres]').val();
			var time4=$(orderList.cell(i, 20).node()).find('input[name=every4Pres]').val();

			var startdate=$(orderList.cell(i, 21).node()).find('input[name=startPres]').val();
			var remarks=$(orderList.cell(i, 22).node()).find('input[name=remarksPres]').val();

			orders.enccode = enccode;
			orders.hpercode = hpercode;
			orders.formType = formType;
			
			orders.orderDate = orderDate;
			orders.postDate = postDate;
			orders.doctor = doctor;
			orders.type = type;
			orders.verify = verify;
			orders.priority = priority;

			orders.dmdcomb = dmdcomb;
			orders.dmdctr = dmdctr;
			orders.intake = intake;
			orders.intakeform = intakeform;
			orders.nofreq = nofreq;
			orders.freq = frequency;
			orders.nodays = nodays;
			orders.day = day;
			orders.mon = mon;
			orders.tue = tue;
			orders.wed = wed;
			orders.thu = thu;
			orders.fri = fri;
			orders.sat = sat;
			orders.sun = sun;
			orders.time1 = time1;
			orders.time2 = time2;
			orders.time3 = time3;
			orders.time4 = time4;
			orders.startdate = startdate;
			orders.remarks = remarks;
			orderListArray.push(orders);
		}
		var  orderList_JSONString = JSON.stringify(orderListArray);
		$.ajax({
			type:'POST',
			data: {orderLists:orderList_JSONString},
			dataType:'JSON',
			url: baseURL+"DoctorsOrder/savePrescMulti",
			success: function(data,response){
				toastr.success(data.message,'Success');
				$("#modalDrugMulti").modal('hide');
				$("#docOrdpres").DataTable().ajax.reload();
			},
			error: function(data,response){
				toastr.error(data.message,'Error');
				$("#modalDrugMulti").modal('hide');
				$("#docOrdpres").DataTable().ajax.reload();
			},
		});
	
		}else 
		{
			return false; 
		}
	return false;

  });
  
  
  $('#medicineList tbody').on('click','#btnremove', function () {
		orderList
		.row($(this).parents('tr'))
		.remove()
		.draw();
	});	
	
 $("#modalDrugMulti").on('hidden.coreui.modal',function(){
		orderList
		.clear()
		.draw();
 });


 $("#docOrdpres").on('click','tr',function(){
	var selectedData= $(this).hasClass('selected');
	if(selectedData==false){
		$("#btnCancelOrder").prop('disabled',false);
	}else{
		$("#btnCancelOrder").prop('disabled',true);
	}
 });