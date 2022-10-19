function orderPrescription(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "docOrdpres";
		data.link =  baseURL+"DoctorsOrder/Prescription/"+enctr;
		data.type = "POST";
		data.coldef =[
				{
				targets: [0,1,2,4],
				visible:false,
				orderable:false,
				},
				{
					targets : [7],
					searchable:false,
						render: function ( data, type, row ) 
						{
							switch(data) 
							{
								case 'STAT' : return '<div class="text-danger">URGENT</span>'; break;
								case 'ROUTI' : return '<div class="text-warning">ROUTINE</span>'; break;
								case 'UNKNO' : return '<div class="text-primary">UNKNOWN</span>'; break;
								default  : return '<div class="text-default"></span>';
							}
						},
					},
					
					{
					targets : [8],
					searchable:false,
						render: function ( data, type, row ) 
						{
							switch(data) 
							{
								case 'R' : return '<div class="p-1 bg-info">Prescription</span>'; break;
								default  : return '<div class="p-1 bg-secondary">Order</span>';
								
							}
						},
					},

					];
		loadTable(data);
	}

   
	$('#frmPrescription').validate({
	submitHandler: function (form) {
	var  POSTURL = baseURL+"DoctorsOrder/savePresc";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#presformIden').val()=='insert'){
					orderPrescription(enccode);
					toastr.success('Order Successfully Saved! ' ,'Success');
					$('#DocOrdPresModal').modal('hide');
				}else if($('#presformIden').val()=='update'){
					orderPrescription(enccode);
					toastr.success('Order Successfully Updated! ' ,'Success');
					$('#DocOrdPresModal').modal('hide');
				}
			},
			error: function(data,xhr,text){
				toastr.error(data,'data');
			}
			});
		return false;
	 $(form).submit();
   },
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
	
		
	$('#docOrdpres').on('click','#btnEditProc_edit',function(){
	var key=encodeURIComponent(encodeURIComponent(atob($(this).data('docointkey'))));
	var itemcode=encodeURIComponent(encodeURIComponent($(this).data('dmdcomb')));

			$.ajax({
			type: "POST",
			url: baseURL+"DoctorsOrder/prescInfo/"+key+"/"+itemcode,
			data: "JSON",
			async:false,
				success: function(data)
				{
					var obj = $.parseJSON(data);
					$('#dateOrderPres').val(setTimeLocale(obj['dodate']));
					$('#datePostPres').val(setTimeLocale(obj['dodtepost']));
					$('#presDoco').val(obj['docointkey']);
				    setDrugs(obj['dmdcomb']);
					selectDrugs();
					setDoctor(obj['licno']);
					selDoctor($("#frmPrescription"));
					setVerified(obj['verby']);
					$("#presEnccode").val(obj['enccode']);
					$("#presHpercode").val(obj['hpercode']);
					$('#presformIden').val('update');
					$('#intakePres').val(obj['qtyintake']);
					$('#freqPres').val(obj['reppatrn1']);
					$('#noDaysPres').val(obj['repdayno1']);				
					$("#selFreqPres option[value=" +obj['reppatru1']+"]").prop('selected', true);
					$("#selDays option[value=" +obj['reppatru2']+"]").prop('selected', true);
					$("#priority option[value=" +obj['dopriority']+"]").prop('selected', true);
					
					if(obj['estatus']=='U')
					{
						$("#presType option[value='ord']").prop('selected', true);
					}else{
						$("#presType option[value='presc']").prop('selected', true);
					}
						setEmp(obj['verby']);
					$('#everyMonPres_val').val(obj['everymon']);	
					$('#everyTuePres_val').val(obj['everytue']);	
					$('#everyWedPres_val').val(obj['everywed']);	
					$('#everyThuPres_val').val(obj['everythu']);	
					$('#everyFriPres_val').val(obj['everyfri']);	
					$('#everySatPres_val').val(obj['everysat']);	
					$('#everySunPres_val').val(obj['everysun']);

					if(obj['every2'] !='0000-00-00 00:00:00')
					{
						$('#every2Pres').val(setTimeLocale(obj['every2']));	
					}

					if(obj['every3'] !='0000-00-00 00:00:00')
					{
						$('#every3Pres').val(setTimeLocale(obj['every3']));	
					}

					if(obj['every4'] !='0000-00-00 00:00:00')
					{
						$('#every4Pres').val(setTimeLocale(obj['every4']));	
					}
					$('#every1Pres').val(setTimeLocale(obj['every1']));	
					setDays();
					$('#startPres').val(setTimeLocale(obj['startdate']));
					$('#remarksPres').val(obj['remarks']);
			
				},
				error: function(data)
				{
					alert("Error: Fetching Information!");
				}
			});	
			$('#DocOrdPresModal').modal('show');
	});
	
	
	$('#docOrdpres').on('click','#btnDeletePres_delete',function(){
		$('#deletePresModal').modal('show');
		var key=encodeURIComponent(encodeURIComponent(atob($(this).data('docointkey'))));
		$('#delPresDoco').val(key);
		$('#delpresformIden').val('delete');
		
	});
	
		$('#frmDeletePres').on('submit', function(e){
		$.ajax({
			type : "POST",
			url  : baseURL+"DoctorsOrder/deletePres",
			data :new FormData(this),
			processData: false,
			contentType: false,
				success: function(data,response){
					toastr.success('Order Successfully Deleted!' ,'Success');
					orderPrescription(enccode);
				    $('#deletePresModal').modal('hide');
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
   });
   
	
	
	$("#btnAddPrescription").on('click',function(){
		$('#presformIden').val("insert");
		$('#dateOrderPres').val(getTimeLocale());
		$('#datePostPres').val(getTimeLocale());
		$('#presEnccode').val(enccode);	 
		$('#presHpercode').val(hpercode);	
		selectDrugs();		
		selDoctor($("#frmPrescriptionMulti"));
		SelEmp();	
		$('#modalDrugMulti').modal({backdrop:'static',show:true});		
		
	});

	
	function selectDrugs() {
		$('#selPres_drugs').select2({
			placeholder: 'DRUGS AND MEDICINE',
			allowClear: true,
			theme: 'coreui',
			ajax: {
				url: baseURL + "/Drugs/searchDrugs",
				dataType: "json",
				type: "POST",
				delay: 250,
				data: function (params) {
					return {
						searchDrugs: params.term
					};
				},
				processResults: function (data) {
					var results = [];
					$.each(data, function (index, item) {
						results.push({
							id: item.dmdcomb,
							text: item.drugs
						});
					});
					return {
						results: results
					}
				}
			}
		});
			$('#selPres_drugs').on('change', function () {
			$("#selPres_drugs option:selected", this);
			$("#dmdcomb").val(this.value);
			drugInformation(this.value);
		});
	}

	function deletePrescription()
	{
		
	}
	
	
	function checkDay() 
	{
		var monStat=$("input[name = everyMonPres]").is(":checked");
		var tueStat=$("input[name = everyTuePres]").is(":checked");
		var wedStat=$("input[name = everyWedPres]").is(":checked");
		var thuStat=$("input[name = everyThuPres]").is(":checked");
		var friStat=$("input[name = everyFriPres]").is(":checked");
		var satStat=$("input[name = everySatPres]").is(":checked");
		var sunStat=$("input[name = everySunPres]").is(":checked");
	
		if(monStat==true & tueStat==true & wedStat==true & thuStat==true & friStat==true & satStat==true & sunStat==true)
		{
			$("#everyDayPres").prop("checked", true).change();
		}
		else{
			$("#everyDayPres").prop("checked", false).change();
		}
		
	}
	
	
	 function setDays()
	 {
		var mon  = $("#everyMonPres_val").val(); 
		 var tue  = $("#everyTuePres_val").val();
		 var wed  = $("#everyWedPres_val").val();
		 var thu  = $("#everyThuPres_val").val();
		 var fri  = $("#everyFriPres_val").val();
		 var sat  = $("#everySatPres_val").val();
		 var sun  = $("#everySunPres_val").val();
		 
		if(mon == "Y" && tue == "Y" && wed == "Y" && thu == "Y" && fri == "Y" && sat == "Y" && sun == "Y")
		{ 
			$("#everyMonPres").prop("checked", true);
			$("#everyTuePres").prop("checked", true);
			$("#everyWedPres").prop("checked", true);
			$("#everyThuPres").prop("checked", true);
			$("#everyFriPres").prop("checked", true);
			$("#everySatPres").prop("checked", true);
			$("#everySunPres").prop("checked", true);
			$("#everyDayPres").prop("checked", true);
			
		}else if((mon == "N" && tue == "Y" && wed == "Y" && thu == "Y" && fri == "Y" && sat == "Y" && sun == "Y")){
			$("#everyMonPres").prop("checked", false);
			$("#everyTuePres").prop("checked", true);
			$("#everyWedPres").prop("checked", true);
			$("#everyThuPres").prop("checked", true);
			$("#everyFriPres").prop("checked", true);
			$("#everySatPres").prop("checked", true);
			$("#everySunPres").prop("checked", true);
		}else if((mon == "Y" && tue == "N" && wed == "Y" && thu == "Y" && fri == "Y" && sat == "Y" && sun == "Y")){
			$("#everyMonPres").prop("checked", true);
			$("#everyTuePres").prop("checked", false);
			$("#everyWedPres").prop("checked", true);
			$("#everyThuPres").prop("checked", true);
			$("#everyFriPres").prop("checked", true);
			$("#everySatPres").prop("checked", true);
			$("#everySunPres").prop("checked", true);
		}else if((mon == "Y" && tue == "Y" && wed == "N" && thu == "Y" && fri == "Y" && sat == "Y" && sun == "Y")){
			$("#everyMonPres").prop("checked", true);
			$("#everyTuePres").prop("checked", true);
			$("#everyWedPres").prop("checked", false);
			$("#everyThuPres").prop("checked", true);
			$("#everyFriPres").prop("checked", true);
			$("#everySatPres").prop("checked", true);
			$("#everySunPres").prop("checked", true);
		}else if((mon == "Y" && tue == "Y" && wed == "Y" && thu == "N" && fri == "Y" && sat == "Y" && sun == "Y")){
			$("#everyMonPres").prop("checked", true);
			$("#everyTuePres").prop("checked", true);
			$("#everyWedPres").prop("checked", true);
			$("#everyThuPres").prop("checked", false);
			$("#everyFriPres").prop("checked", true);
			$("#everySatPres").prop("checked", true);
			$("#everySunPres").prop("checked", true);
		}else if((mon == "Y" && tue == "Y" && wed == "Y" && thu == "Y" && fri == "N" && sat == "Y" && sun == "Y")){
			$("#everyMonPres").prop("checked", true);
			$("#everyTuePres").prop("checked", true);
			$("#everyWedPres").prop("checked", true);
			$("#everyThuPres").prop("checked", true);
			$("#everyFriPres").prop("checked", false);
			$("#everySatPres").prop("checked", true);
			$("#everySunPres").prop("checked", true);
		}else if((mon == "Y" && tue == "Y" && wed == "Y" && thu == "Y" && fri == "Y" && sat == "N" && sun == "Y")){
			$("#everyMonPres").prop("checked", true);
			$("#everyTuePres").prop("checked", true);
			$("#everyWedPres").prop("checked", true);
			$("#everyThuPres").prop("checked", true);
			$("#everyFriPres").prop("checked", true);
			$("#everySatPres").prop("checked", false);
			$("#everySunPres").prop("checked", true);
		}else if((mon == "Y" && tue == "Y" && wed == "Y" && thu == "Y" && fri == "Y" && sat == "Y" && sun == "N")){
			$("#everyMonPres").prop("checked", true);
			$("#everyTuePres").prop("checked", true);
			$("#everyWedPres").prop("checked", true);
			$("#everyThuPres").prop("checked", true);
			$("#everyFriPres").prop("checked", true);
			$("#everySatPres").prop("checked", true);
			$("#everySunPres").prop("checked", false);
		}else if((mon == "N" && tue == "N" && wed == "N" && thu == "N" && fri == "N" && sat == "N" && sun == "N")){
			$("#everyMonPres").prop("checked", false);
			$("#everyTuePres").prop("checked", false);
			$("#everyWedPres").prop("checked", false);
			$("#everyThuPres").prop("checked", false);
			$("#everyFriPres").prop("checked", false);
			$("#everySatPres").prop("checked", false);
			$("#everySunPres").prop("checked", false);
		}else{
			
			
			
		}
			
	 }
	 
	$("#everyDayPres").on('click',function() {
    if($(this).is(":checked"))
	{
		$("#everyMonPres").prop("checked", true).change();
		$("#everyTuePres").prop("checked", true).change();
		$("#everyWedPres").prop("checked", true).change();
		$("#everyThuPres").prop("checked", true).change();
		$("#everyFriPres").prop("checked", true).change();
		$("#everySatPres").prop("checked", true).change();
		$("#everySunPres").prop("checked", true).change();
		
	}else
	{	
		$("#everyMonPres").prop("checked", false).change();
		$("#everyTuePres").prop("checked", false).change();
		$("#everyWedPres").prop("checked", false).change();
		$("#everyThuPres").prop("checked", false).change();
		$("#everyFriPres").prop("checked", false).change();
		$("#everySatPres").prop("checked", false).change();
		$("#everySunPres").prop("checked", false).change();
	}
});

	
	function drugInformation(dmdcode,dmdctr)
	{
		var Obj = new Object();
			Obj.type = "POST";
			Obj.url = baseURL+'Drugs/drugInformation/'+dmdcode+'/'+dmdctr;
			Obj.data = "JSON";
		var rowData =Information(Obj);
		return rowData;
	}

	function setDrugs(dmdcomb)
	 {
	
		var selDrugs = $('[name $="_drugs"]');
		$.ajax({
			type: 'POST',
			url: baseURL+'Drugs/setDrugs/'+dmdcomb,
		}).then(function (data) {
		var obj=$.parseJSON(data);
			var option = new Option(obj['drugs'], obj['dmdcomb'], true, true);
			selDrugs.append(option).trigger('change');
			selDrugs.trigger({
				theme:'coreui',
				type: 'select2:select',
				params: {
					data: data
				}
			});
		});
	}
	
	//09-16-2021
	function setEmp(employeeid) {
	SelEmp();
	var relSelect = $('#selEmppres_emp');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Ref_Personnel/setEmployees/' + employeeid,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['fullname'], obj['employeeid'], true, true);
		relSelect.append(option).trigger('change');
		relSelect.trigger({
			theme: 'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
	}
	 
	
  $('input[type="checkbox"]').on('change',function(){
    var t=$(this);
	console.log(t);
    var isset = t.prop('checked') ? 'Y' : 'N';
	
    $('input[name="'+t.attr('name')+'_val"]').val(isset);
  });
  
  $("#btnRxDrug").on("click",function(){
	$("#modalPresRX").modal({backdrop:'static',show:true});
	 var src =baseURL+'DoctorsOrder/rxDrugpdf/'+URLencode(enccode)+'/'+hpercode;
	var x = document.getElementById("rxDrug_pdf").src = src;
	$("#rxDrug_pdf").attr("src", src);
  });

  var orderList = $("#medicineList").DataTable({
	destroy:true,
	fixedColumns: {
		leftColumns: 2
	},
	scrollY:"500px",
	scrollX:true,
	scrollCollapse: true,
	paging :false,
	columnDefs: [
		{
			visible:false,
			targets:[1,2]
		},
		{
			targets:["_all"],
		
			className:"align-middle"
		},
		
		
		
		
	],
});

  function drugMultipleData() {
	var data = new Object();
	data.id = "drugmultiData";
	data.link = baseURL + "Drugs/drugdata";
	data.select = {
		select: true,
		style: 'multi',
		className:'bg-success text-white selected'
	},
	data.type = "POST";
	data.search = true;
	data.destroy = true;
	data.paging = true;
	data.info = true;
	data.columns = [
		{ data: "dmdcomb" },
		{ data: "drugs" }];
	return Datatable(data);
}

  $("#btnSearchDrugs").on("click",function(){
	drugMultipleData();
	$("#modalMultipleDrug").modal({backdrop:'static',show:true});

  });
  $("#medicineList").on('hidden-coreui-modal',function(){
	$(this).DataTable().destroy();
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
		d['drugs'],
		'<input type="text" name="intakePres" id="intakePres" placeholder="No of Intake">',
		'<input type="text" name="selIntake_form" id="selIntake_form" value='+(intake['uomdesc']==null?'n/a':intake['uomdesc'])+' readonly>',
		'<input type="text" min="1" id="freqPres" name="freqPres" placeholder="No of Frequency">',
		'<select name="selFreqPres" id="selFreqPres">'+
		'<option value="HOU">Hour/s</option>'+
		'<option value="DAY">Day/s</option>'+
		'<option value="WEK">Week/s</option>'+
		'<option value="MON">Months</option>'+
		'<option value="YER">Years</option>'+
		'</select>',
		'<input type="number" id="noDaysPres" name="noDaysPres" placeholder="No of Days" >',
		'<select name="selFreqPres" id="selFreqPres">'+
		'<option value="DAY">Hour/s</option>'+
		'<option value="WEK">Day/s</option>'+
		'<option value="YER">Years</option>'+
		'</select>',
		'<input type="checkbox"  id="everyMonPres" name="everyMonPres" onchange="dayCheck();"><label>:Mon</label> <input type="hidden"  id="everydayMon_val" name="everydayMon_val"  value="N" >',
		'<input type="checkbox"  id="everyTuePres" name="everyTuePres" onchange="dayCheck();"><label>:Tue</label> <input type="hidden"  id="everydayTue_val" name="everydayTue_val"  value="N" >',
		'<input type="checkbox"  id="everyWedPres" name="everyWedPres" onchange="dayCheck();"><label>:Wed</label> <input type="hidden"  id="everydayWed_val" name="everydayWed_val"  value="N" >',
		'<input type="checkbox"  id="everyThurPres" name="everyThurPres" onchange="dayCheck();"><label>:Thu</label><input type="hidden"  id="everydayFri_val" name="everydayThu_val"  value="N" >',
		'<input type="checkbox"  id="everyFriPres" name="everyFriPres" onchange="dayCheck();"><label>:Fri</label><input type="hidden"  id="everydayFri_val" name="everydayFri_val"  value="N" >',
		'<input type="checkbox"  id="everySatPres" name="everySatPres" onchange="dayCheck();"><label>:Sat</label><input type="hidden"  id="everySatPres_val" name="everySatPres_val"  value="N" >',
		'<input type="checkbox"  id="everySunPres" name="everySunPres" onchange="dayCheck();"><label>:Sun</label><input type="hidden"  id="everydaySun_val" name="everydaySun_val"  value="N" >',
		'<input type="time" id="every1Pres" name="every1Pres[]">',
		'<input type="time" id="every2Pres" name="every2Pres[]">',
		'<input type="time" id="every3Pres" name="every3Pres[]">',
		'<input type="time" id="every4Pres" name="every4Pres[]">',
		'<input type="datetime-local" id="startPres" name="startPres[]" >',
		'<input type="text" id="remarksPres" name="remarksPres[]" placeholder="Remarks">',
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
			var cbMon=  $(orderList.cell(i, 10).node()).find('input[type=checkbox]').is(":checked");
			var cbTue=  $(orderList.cell(i, 11).node()).find('input[type=checkbox]').is(":checked");
			var cbWed=  $(orderList.cell(i, 12).node()).find('input[type=checkbox]').is(":checked");
			var cbThu=  $(orderList.cell(i, 13).node()).find('input[type=checkbox]').is(":checked");
			var cbFri=  $(orderList.cell(i, 14).node()).find('input[type=checkbox]').is(":checked");
			var cbSat=  $(orderList.cell(i, 15).node()).find('input[type=checkbox]').is(":checked");
			var cbSun=  $(orderList.cell(i, 16).node()).find('input[type=checkbox]').is(":checked");

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
				$(orderList.cell(i, 13).node()).find('input[name=everydayFri_val]').val('Y');
			}else{
				$(orderList.cell(i, 13).node()).find('input[name=everydayFri_val]').val('Y');
			}

			if(cbSat==true){
				$(orderList.cell(i, 13).node()).find('input[name=everydaySat_val]').val('Y');
			}else{
				$(orderList.cell(i, 13).node()).find('input[name=everydaySat_val]').val('Y');
			}

			if(cbSun==true){
				$(orderList.cell(i, 13).node()).find('input[name=everydaySun_val]').val('Y');
			}else{
				$(orderList.cell(i, 13).node()).find('input[name=everydaySun_val]').val('Y');
			}
		}
	}
	
  $("#frmPrescriptionMulti").on('submit',function(){
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
			var verify  =$("#presType").val();
			var priority  =$("#priority").val();
			var formType  =$("#presformIden").val();
			
			var dmdcomb=$(orderList.cell(i, 1).node()).find('input').val();
			var dmdctr=$(orderList.cell(i, 2).node()).find('input').val();
			var drugname=$(orderList.cell(i, 3).node()).text();
			var intake=$(orderList.cell(i, 4).node()).find('input').val();
			var intakeform=$(orderList.cell(i, 5).node()).find('input').val();
			var nofreq=$(orderList.cell(i, 6).node()).find('input').val();
			var freq=$(orderList.cell(i, 7).node()).find('input').val();
			var nodays=$(orderList.cell(i, 9).node()).find('input').val();
			var mon=$(orderList.cell(i, 10).node()).find('input[id=everydayMon_val]').val();
			var tue=$(orderList.cell(i, 11).node()).find('input[id=everydayTue_val]').val();
			var wed=$(orderList.cell(i, 12).node()).find('input[id=everydayWed_val]').val();
			var thu=$(orderList.cell(i, 13).node()).find('input[id=everydayThu_val]').val();
			var fri=$(orderList.cell(i, 14).node()).find('input[id=everydayFri_val]').val();
			var sat=$(orderList.cell(i, 15).node()).find('input[id=everydaySat_val]').val();
			var sun=$(orderList.cell(i, 16).node()).find('input[id=everydaySun_val]').val();
			var time1=$(orderList.cell(i, 17).node()).find('input[id=every1Pres]').val();
			var time2=$(orderList.cell(i, 18).node()).find('input[id=every2Pres]').val();
			var time3=$(orderList.cell(i, 19).node()).find('input[id=every3Pres]').val();
			var time4=$(orderList.cell(i, 20).node()).find('input[id=every4Pres]').val();
			var startdate=$(orderList.cell(i, 20).node()).find('input[id=startPres]').val();
			var remarks=$(orderList.cell(i, 20).node()).find('input[id=startPres]').val();

			
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
			orders.freq = freq;
			orders.nodays = nodays;
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
			},
			error: function(data,response){
				toastr.error(data.responseJSON.message,'Error');
			},
	});
return false;
  });
  
  
  $('#medicineList tbody').on('click','#btnremove', function () {
		orderList.row($(this).parents('tr')).remove().draw();
	});	
	