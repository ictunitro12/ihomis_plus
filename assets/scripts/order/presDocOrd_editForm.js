
function orderPrescription(enccode){	
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "docOrdpres";
		data.link =  baseURL+"DoctorsOrder/Prescription/"+enctr;
		data.type = "POST";
		data.rowsGroup=['4'];
		data.select = {
			style: 'multi',
			toggleable: false,
			 selector: 'td:not(:nth-child(7))',
			className:'bg-success text-white selected'
		};
		data.rowCallback  =function ( row, data, start, end, display ) {
				if(data[10]=='CANOR')
				{
					$('td', row).prop('disabled',true);  
				}
			};
		data.coldef =[
			{
				targets: ["_all"],
				className:"align-middle"
				},
				{
				targets: [0,1,2,4,5],
				visible:false,
				orderable:false,
				},
				{
					targets : [8],
					searchable:false,
						render: function ( data, type, row ) 
						{
							switch(data) 
							{
								case 'STAT' : return '<div class="p-1 bg-danger text-white">URGENT!</span>'; break;
								case 'ROUTI' : return '<div class="p-1 bg-warning text-white">ROUTINE</span>'; break;
								case 'UNKNO' : return '<div class="p-1 bg-danger text-white">UNKNOWN</span>'; break;
								default  : return '<div class="text-default"></span>';
							}
						}
					},
					
					{
					targets : [9],
					searchable:false,
						render: function ( data, type, row ) 	
						{
							switch(data) 
							{
								case 'R' : return '<div class="p-1 bg-info text-white">Prescription</span>'; break;
								default  : return '<div class="p-1 bg-info text-white">Order</span>';
								
							}
						},
					},
					{
						targets : [10],
						searchable:false,
							render: function ( data, type, row ) 	
							{
								switch(data) 
								{
									case 'NEWOR' : return '<div class="p-1 bg-success text-white">New</span>'; break;
									case 'CANOR' : return '<div class="p-1 bg-danger text-white">Cancelled!</span>'; break;
									default  : return '<div class="p-1 bg-secondary"></span>';
									
								}
							},
						},

					];
		loadTable(data);
	}

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
			
					$("#dateOrderPres_edit").val(setTimeLocale(obj['dodate']));
					$("#datePostPres_edit").val(setTimeLocale(obj['dodtepost']));
					$("#presDoco_edit").val(obj['docointkey']);
				    setDrugs(obj['dmdcomb'],obj['dmdctr']);
					setDoctor(obj['licno']);
					selDoctor($("#frmPrescription"));
					setVerified(obj['verby']);
					$("#presEnccode_edit").val(obj['enccode']);
					$("#presHpercode_edit").val(obj['hpercode']);
					$("#intakePres_edit").val(obj['qtyintake']);
					$("#selIntakeEdit_form").val(obj['uomintake']);
					$("#freqPres_edit").val(obj['reppatrn1']);				
					$("#ordPrio_edit option[value=" +obj['dopriority']+"]").prop('selected', true);
					$("#selFreqPres_edit option[value=" +obj['reppatru1']+"]").prop('selected', true);
					$("#selDays_edit option[value=" +obj['reppatru2']+"]").prop('selected', true);
					$("#noDaysPres_edit").val(obj['repdayno1']);			
				
					if(obj['estatus']=='U')
					{
						$("#presType_edit option[value='ord']").prop('selected', true);
					}else{
						$("#presType_edit option[value='presc']").prop('selected', true);
					}
						//(obj['verby']);
					$('#everyMonPresEdit_val').val(obj['everymon']);	
					$('#everyTuePresEdit_val').val(obj['everytue']);	
					$('#everyWedPresEdit_val').val(obj['everywed']);	
					$('#everyThuPresEdit_val').val(obj['everythu']);	
					$('#everyFriPresEdit_val').val(obj['everyfri']);	
					$('#everySatPresEdit_val').val(obj['everysat']);	
					$('#everySunPresEdit_val').val(obj['everysun']);

					if(obj['every1'] !='00:00')
					{
						$('#every1Pres_edit').val(timeonly(obj['every1']));	
					}

					if(obj['every2'] !='00:00')
					{
					
						$('#every2Pres_edit').val(timeonly(obj['every2']));	
					}

					if(obj['every3'] !='00:00')
					{
						$('#every3Pres_edit').val(timeonly(obj['every3']));	
					}

					if(obj['every4'] !='00:00')
					{
						$('#every4Pres_edit').val(timeonly(obj['every4']));	
					}

					if(obj['everymon'] == "Y" ){
						$("#everyMonPresEdit_val").val(obj['everymon']);
						$("#everyMonPres_edit").prop("checked", true);
					}else{
						$("#everyMonPresEdit_val").val(obj['everymon']);
						$("#everyMonPres_edit").prop("checked", false);
					}

						
					if(obj['everytue'] == "Y" ){
						$("#everyTuePresEdit_val").val(obj['everytue']);
						$("#everyTuePres_edit").prop("checked", true);
					}else{
						$("#everyTuePresEdit_val").val(obj['everytue']);
						$("#everyTuePres_edit").prop("checked", false);
					}

					if(obj['everywed'] == "Y" ){
						$("#everyWedPresEdit_val").val(obj['everywed']);
						$("#everyWedPres_edit").prop("checked", true);
					}else{
						$("#everyWedPresEdit_val").val(obj['everywed']);
						$("#everyWedPres_edit").prop("checked", false);
					}

					if(obj['everythu'] == "Y" ){
						$("#everyThuPresEdit_val").val(obj['everythu']);
						$("#everyThuPres_edit").prop("checked", true);
					}else{
						$("#everyThuPresEdit_val").val(obj['everythu']);
						$("#everyThuPres_edit").prop("checked", false);
					}
					
					if(obj['everyfri'] == "Y" ){
						$("#everyFriPresEdit_val").val(obj['everyfri']);
						$("#everyFriPres_edit").prop("checked", true);
					}else{
						$("#everyFriPresEdit_val").val(obj['everyfri']);
						$("#everyFriPres_edit").prop("checked", false);
					}

					if(obj['everysat'] == "Y" ){
						$("#everySatPresEdit_val").val(obj['everysat']);
						$("#everySatPres_edit").prop("checked", true);
					}else{
						$("#everySatPresEdit_val").val(obj['everysat']);
						$("#everySatPres_edit").prop("checked", false);
					}

					if(obj['everysun'] == "Y" ){
						$("#everySunPresEdit_val").val(obj['everysun']);
						$("#everySunPres_edit").prop("checked", true);
					}else{
						$("#everySunPresEdit_val").val(obj['everysun']);
						$("#everySunPres_edit").prop("checked", false);
					}
					everyDay();
					$('#startPres_Edit').val(setTimeLocale(obj['startdate']));
					$('#remarksPres_edit').val(obj['remarks']);
			
				},
				error: function(data)
				{
					alert("Error: Fetching Information!");
				}
			});	
			$('#DocOrdPresModal').modal('show');
	});
	
	 function everyDay()
	 {
		 var mon  = $("#everyMonPresEdit_val").val(); 
		 var tue  = $("#everyTuePresEdit_val").val();
		 var wed  = $("#everyWedPresEdit_val").val();
		 var thu  = $("#everyThuPresEdit_val").val();
		 var fri  = $("#everyFriPresEdit_val").val();
		 var sat  = $("#everySatPresEdit_val").val();
		 var sun  = $("#everySunPresEdit_val").val();
		 if(mon == "Y" && tue == "Y" && wed == "Y" && thu == "Y" && fri == "Y" && sat == "Y" && sun == "Y")
		{ 
			$("#everydayPresEdit_val").val('Y');
			$("#everyDayPres_edit").prop("checked", true);
		}else{
			$("#everydayPresEdit_val").val('Y');
			$("#everyDayPres_edit").prop("checked", false);
			
		}
	}

	function checkDay() 
	{
		var $monStat=$("#everyMonPres_edit").is(":checked");
		var $tueStat=$("#everyTuePres_edit").is(":checked");
		var $wedStat=$("#everyWedPres_edit").is(":checked");
		var $thuStat=$("#everyThuPres_edit").is(":checked");
		var $friStat=$("#everyFriPres_edit").is(":checked");
		var $satStat=$("#everySatPres_edit").is(":checked");
		var $sunStat=$("#everySunPres_edit").is(":checked");
		if($monStat==true && $tueStat==true && $wedStat==true && $thuStat==true && $friStat==true && $satStat==true && $sunStat==true)
		{
			$("#everyDayPres_edit").prop("checked", true).change();
			$("#everydayPresEdit_val").val('Y');
		}
		else{
			$("#everyDayPres_edit").prop("checked", false).change();
			$("#everydayPresEdit_val").val('N');
		}
		
	}

	function daycheckEdit() 
	{
	
		var $monStat=$("#everyMonPres_edit").is(":checked");
		var $tueStat=$("#everyTuePres_edit").is(":checked");
		var $wedStat=$("#everyWedPres_edit").is(":checked");
		var $thuStat=$("#everyThuPres_edit").is(":checked");
		var $friStat=$("#everyFriPres_edit").is(":checked");
		var $satStat=$("#everySatPres_edit").is(":checked");
		var $sunStat=$("#everySunPres_edit").is(":checked");

		if( $monStat == true ){
			$("#everyMonPresEdit_val").val('Y');
		}else{
			$("#everyMonPresEdit_val").val('N');
		}

		if( $tueStat == true ){
			$("#everyTuePresEdit_val").val('Y');
		}else{
			$("#everyTuePresEdit_val").val('N');
		}
		if( $wedStat == true ){
			$("#everyWedPresEdit_val").val('Y');
		}else{
			$("#everyWedPresEdit_val").val('N');
		}
		if( $thuStat == true ){
			$("#everyThuPresEdit_val").val('Y');
		}else{
			$("#everyThuPresEdit_val").val('N');
		}
		if( $friStat == true ){
			$("#everyFriPresEdit_val").val('Y');
		}else{
			$("#everyFriPresEdit_val").val('N');
		}
		if( $satStat == true ){
			$("#everySatPresEdit_val").val('Y');
		}else{
			$("#everySatPresEdit_val").val('N');
		}
		if( $sunStat == true ){
			$("#everySunPresEdit_val").val('Y');
		}else{
			$("#everySunPresEdit_val").val('N');
		}

		if($monStat==true && $tueStat==true && $wedStat==true && $thuStat==true && $friStat==true && $satStat==true && $sunStat==true)
		{
			$("#everyDayPres_edit").prop("checked", true).change();
			$("#everydayPresEdit_val").val('Y');
		}
		else{
			$("#everyDayPres_edit").prop("checked", false).change();
			$("#everydayPresEdit_val").val('N');
		}
		
	
		
	}

	$("#everyDayPres_edit").on('click',function() {
    if($(this).is(":checked"))
	{
		$("#everyMonPres_edit").prop("checked", true);
			$("#everyTuePres_edit").prop("checked", true);
			$("#everyWedPres_edit").prop("checked", true);
			$("#everyThuPres_edit").prop("checked", true);
			$("#everyFriPres_edit").prop("checked", true);
			$("#everySatPres_edit").prop("checked", true);
			$("#everySunPres_edit").prop("checked", true);
		
	}else
	{	
		$("#everyMonPres_edit").prop("checked", false);
			$("#everyTuePres_edit").prop("checked", false);
			$("#everyWedPres_edit").prop("checked", false);
			$("#everyThuPres_edit").prop("checked", false);
			$("#everyFriPres_edit").prop("checked", false);
			$("#everySatPres_edit").prop("checked", false);
			$("#everySunPres_edit").prop("checked", false);
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

	function setDrugs(dmdcomb,dmdctr)
	 {
		$.ajax({
			type: 'POST',
			url: baseURL+'Drugs/drugInformation/'+dmdcomb+'/'+dmdctr,
		}).then(function (data) {
		var obj=$.parseJSON(data);
			$("#selPresEdit_drugs").val(obj['drugs']);
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
    var isset = t.prop('checked') ? 'Y' : 'N';
    $('input[name="'+t.attr('name')+'_val"]').val(isset);
  });


   function timeonly(date)
   {
	var today = new Date(date);
	var cHour = today.getHours();
	var cMin = today.getMinutes();
	var cSec = today.getSeconds();
	return cHour+ ":" + cMin ;
   }


   

   