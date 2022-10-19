function ProfServ(enccode,hpercode)
{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;
		data.id = "chargesProfServ";
		data.link = baseURL+"Billing/chargesProfServ/"+enctr+"/"+hpercode,
		data.type = "POST";
		data.coldef =[
			{
				targets: [0,1,2,10],
				visible:false,
				orderable:false,
			},
				{	
				targets: [4,8],
				searchable:true,
				render: function (data,type,row) 
				{
					switch(data)
					{
						case 'ADMIT' : return 'Admitting Physician'; break;
						case 'ATTEN' : return 'Attending Physician'; break;
						case 'CONSU' : return 'Consulting Doctor'; break;
						case 'RESID' : return 'Resident Doctor'; break;
						case 'SURGE' : return 'Surgeon'; break;
						case 'ANEST' : return 'Anesthesiologist'; break;
						case 'MIDWF' : return 'Midwife'; break;
						case 'Y' : return 'Yes'; break;
						case 'N' : return 'No'; break;
						default  : return 'N/A';
					}
				},
			},
		],
		loadTable(data);
	}
	
	//Add
	$('#btnProfServ_add').on('click', function (){
		SelProfType();
		selDoctor($("#frmProfserv_form"));
		$('#ModalProfserv_modal').modal('show');
		$('#profServformIden').val('insert');
		$('#profacctno').val($('#account').text());
		$('#servDateFrom').val(getTimeLocale());
		$('#servDateTo').val(getTimeLocale());
		$('#profctr').val(profctr());
		$("[name $='_proftype'] option:selected",this);
		$('#profServEnccode').val($.session.get('enccode'));
		$('#profServHpercode').val($.session.get('hpercode'));
		
	});
	
	$("#chargesProfServ").on('click','.ModalEdit', function (){
		$("#ModalProfserv_modal").modal('show');
		$("#profServformIden").val('update');
		
	    var enccode= URLencode($.session.get('enccode'));
	    var ctr= URLencode($(this).data('profctr'));
	    var licno= URLencode($(this).data('licno'));
		var doctype= URLencode($(this).data('doctype'));
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+"Billing/profServInformation/"+enccode+"/"+licno+"/"+ctr+"/"+doctype,
		Obj.data = "JSON";
		var row =Information(Obj);

		$("#profServEnccode").val(row['enccode']);
		$("#profServHpercode").val(row['hpercode']);
		$("#servDateFrom").val(setTimeLocale(row['pfdtefrom']));
		$("#servDateTo").val(setTimeLocale(row['pfdteto']));
		$("#profServlicno").val(row['licno']);
		$("#profctr").val(row['profctr']);
		$("#profacctno").val(row['acctno']);
		$("#profFee").val(row['pfamt']);

		$("#MedCase option[value=" +row['medcase']+"]").prop('selected', true);
		medCase(row['medcase']);
		typeprov(row['doctype']);
		$("#typeOfProv option[value=" +row['doctype']+"]").prop('selected', true);

		selDoctor($("#frmProfserv_form"));
		var option = new Option(row['name'], row['licno'], true, true);
		$("#DocName_doc").append(option).trigger('change');
		
		//setDoctor(row['licno']);
		//setProfDoctor(row['licno'],$("#frmProfserv_form"));

		$("#noVisit").val(row['numvisit']);
		$("#rate").val(row['profrate']);
		var rateVisit = row['numvisit'] * row['profrate'];
		$("#rateVisit").val(rateVisit.toFixed(2));
		$("#addFee").val(row['pfaddn']);
		$('#addFeeType').val(row['pfaddtyp']).change();
		$("#discAmt").val(row['pfdisc']);
		$('#discType').val(row['pfdisctyp']).change();
		$('#incBill').val(row['profincl']).change();
		$("#profnotes").val(row['pfnotes']);
		$("#pfTotal").val(row['pftotamt']);
		$('#claimType').val(row['ClaimType']).change();

		//var newOption = new Option(row['licno'],row['name'], false, false);
		//$("#frmProfserv_form").append(newOption).trigger("change");
		//$("#addFeeType option[value=" +row['pfaddtyp']+"]").prop('selected', true);
		//$("#discType option[value=" +row['pfdisctyp']+"]").prop('selected', true);
		//$("#incBill option[value=" +row['profincl']+"]").prop('selected', true);
		//$("#claimType option[value=" +row['ClaimType']+"]").prop('selected', true);
	});

	$("#chargesProfServ").on('click','.ModalDelete', function (){
		$("#ModalProfDelete").modal('show');
	    var enccode= $.session.get('enccode');
	    var ctr= $(this).data('profctr');
	    var licno= $(this).data('licno');
		var doctype= $(this).data('doctype');
		$("#profEnccodeDelete").val(enccode);
		$("#proflicnoDelete").val(licno);
		$("#profctrDelete").val(ctr);
		$("#profdoctypeDelete").val(doctype);		
		$("#deleteProf").val('delete');
	});
	
	$('#frmProfDelete').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		dataType : "JSON",
		url  : baseURL+"Billing/saveProfServ",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			toastr.success('Professional Service Successfully Deleted! ' ,'Success');
			$('.modal').modal('hide');
			ProfServ($.session.get('enccode'),$.session.get('hpercode'));
		},
	
		error: function(data,response){
			toastr.error(data.responseJSON.message ,'Error');
		}
		});
		  return false;
	}); 
	
	function typeprov(anes)
	{
		if(anes=='SURGE')
		{
			$('#proceOp').prop("disabled", false); 
			$('#typeAnes').prop("disabled", true);
			setProfType('SF');
			$('#noVisit').val(""); 
			$('#rateVisit').val(""); 
			$('#rate').val(""); 		
			//$('#proffee').val(""); 
			SelProc()		
		}else if(anes=='ANEST'){
			$('#typeAnes').prop("disabled", false); 
			$('#proceOp').prop("disabled", true);
			$("#proceOp").val('').trigger('change');
			$('#noVisit').val(""); 
			$('#proceOp').val(""); 
			setProfType('AF');
			//$('#proffee').val(""); 
			$("#proceOp").select2("val", "");
		}else if(anes=='ATTEN'){
			$('#proceOp').prop("disabled", true); 
			$("#proceOp").val('').trigger('change');
			$('#noVisit').prop("disabled", false); 
			$('#rateVisit').prop("disabled", false); 
			$('#rate').prop("disabled", false); 
			$('#MedCase').prop("disabled", false);
			$('[name $="_proftype"]').prop("disabled", false);
			$('[name $="_proftype"]').val("");
			setProfType('PF');	
		}else if(anes=='ADMIT' || anes=='MIDWF' || anes=='CONSU' || anes=='RESID' ){
			$('#proceOp').prop("disabled", true); 
			$('#typeAnes').prop("disabled", true);
			$('#noVisit').prop("disabled", true); 
			$('#rateVisit').prop("disabled", true);
			$('#rate').prop("disabled", true); 		
			$("#proceOp").val('').trigger('change');
			$('#MedCase').prop("disabled", true);		
			$('#MedCase').val("");		
			setProfType('PF');
			$('#noVisit').val(""); 
			$('#rateVisit').val(""); 
			$('#rate').val(""); 		
			//$('#proffee').val("");
			$('#typeAnes').val("");
			$('#proceOp').val("");
			
		}else{
			$('#typeAnes').prop("disabled", true); 
			$('#proceOp').prop("disabled", true); 
			$("#proceOp").val('').trigger('change');
			$('#noVisit').prop("disabled", true); 
			$('#rateVisit').prop("disabled", true); 
			$('#rate').prop("disabled", true); 
			$('#MedCase').prop("disabled", true); 
			$('#typeAnes').val(""); 
			$('#proceOp').val(""); 
			
			$('#noVisit').val(""); 
			$('#noVisit').val(""); 
			$('#rate').val(""); 
		}	
	}
	
		
	function profctr()
	{
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url= baseURL+'Billing/profctr';
		Obj.data = "JSON";
		var jsonObj =Information(Obj);
		return jsonObj;
	}
	
	function SelProfType()
	{
			$('[name $="_proftype"]').select2({
				allowClear: true,
				placeholder:'Select Fee',
				theme:'coreui',
				ajax:{
				url: baseURL+"Charges/typeProfServ",
				dataType: "json",
				type:"POST",
				delay: 250,
				data: function(params){
				return{
				searchProfServ: params.term
				};
				},
				processResults: function(data){
					var results = [];
					$.each(data, function(index, item){
					results.push({
					id:item.tpcode,
					text:item.tpdesc
					});
					});
					return{
						results: results
					}
				}
				}
			});
			
			$('[name $="_proftype"]').on('change', function() {
				$("[name $='_proftype'] option:selected",this);
				var fee = proffee(this.value);
				$(this).valid();
				if(fee)
				{
					$("#profFee").val(fee['tprate']);
					sumAmount();
				}
			});
	}
	
	
	function SelProc()
	{
			$('[name $="_proc"]').select2({
				allowClear: true,
				placeholder:'Select Procedure',
				theme:'coreui',
				ajax:{
				url: baseURL+"Ref_Procedures/selProcedure",
				dataType: "json",
				type:"POST",
				delay: 250,
				data: function(params){
				return{
				searchProfServ: params.term
				};
				},
				processResults: function(data){
					var results = [];
					$.each(data, function(index, item){
					results.push({
					id:item.proccode,
					text:item.procdesc
					});
					});
					return{
						results: results
					}
				}
				}
			});
			
			$('[name $="_proc"]').on('change', function() {
				$("[name $='_proftype'] option:selected",this);
					$(this).valid();
				//var fee = proffee(this.value);
				
				
			});
	}
	
	function setProfType(tpkey)
	{
		SelProfType ();
		var relSelect = $('[name $="_proftype"]');
		$.ajax({
			type: 'POST',
			url: baseURL+'Charges/settypeProfServ/'+tpkey,
		}).then(function (data) {
		var obj=$.parseJSON(data);
			var option = new Option(obj['tpdesc'], obj['tpcode'], true, true);
			relSelect.append(option).trigger('change');
			relSelect.trigger({
				theme:'coreui',
				type: 'select2:select',
				params: {
					data: data
				}
			});
		});
	}
	
	
	function medCase(medcase)
	{
			var rate = ratefee(medcase);	
			var valRate= $("#rate").val();
			if(rate){
				if(valRate){
					var addup= rate['minrvu'] * $("#noVisit").val();
					$("#rate").val(rate['minrvu']);
					$("#rateVisit").val(addup.toFixed(2));
					$("#profFee").val(addup.toFixed(2));
					sumAmount();
				}else{
					document.getElementById("noVisit").stepUp(1);
					$("#rateVisit").val(rate['minrvu']);
					$("#rate").val(rate['minrvu']);
					$("#profFee").val(rate['minrvu']);
					$("#rateVisitold").val(rate['minrvu']);
					sumAmount();
				}
			}
	}
		
	$('#rateVisit').on('change', function (){
		var rate=	$("#rateVisit").val();
		var add = this.value * rate;
		$("#rateVisit").val(add.toFixed(2));
		$("#profFee").val(add.toFixed(2));
		sumAmount();
	});
	
	$('#rate').on('change', function (){
		var visit=	$("#noVisit").val();
	
		var add = this.value * parseInt(visit);
		
		$("#rateVisit").val(add.toFixed(2));
		$("#profFee").val(add.toFixed(2));
		sumAmount();
	});

	$('#noVisit').on('change', function (){
		var rate=	$("#rate").val();
		var add = this.value * rate;
		$("#rateVisit").val(add.toFixed(2));
		$("#profFee").val(add.toFixed(2));
		sumAmount();
	});	
	
	$('#profFee').on('change', function (){
		
		/* var add = this.value * rate;
		$("#rateVisit").val(add.toFixed(2)); */
		sumAmount();
	});
	
	$('#addFeeType').on('change', function (){
		
		sumAmount();
	});
	$('#addFee').on('change', function (){
		
		sumAmount();
	});
	$('#discAmt').on('change', function (){
		
		sumAmount();
	});
	$('#discType').on('change', function (){
		
		sumAmount();
	});
	
	
	function sumAmount()
	{
		var proffee= $("#profFee").val();
		var addFeeType= $("#addFeeType").val();
		var discType= $("#discType").val();
		
		var addiFee = addfee(addFeeType,proffee);
		var discFee = disc(discType,proffee);
		var total = (parseInt(addiFee) + parseInt(proffee)) -  parseInt(discFee);
		
		$("#pfTotal").val(total.toFixed(2));
	}
	
	function addfee(type,fee)
	{
		var amt;
		var addiFee=$('#addFee').val();
		
		if(type=='P'){
			return amt = ((addiFee / 100) * fee);
		 }else if(type=='A'){
			return amt = parseInt(addiFee);
		 }else{
			return amt = 0;
		 }
	}
	
	function disc(type,fee)
	{
		var amt;
		var discFee=$('#discAmt').val();
		if(type=='P'){
			return amt = ((discFee / 100) * fee);
		 }else if(type=='A'){
			return amt = parseInt(discFee);
		 }else{
			return amt = 0;
		 }
	}
	
	function docinfo(licno)
	{
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url= baseURL+'Billing/docinfo/'+licno;
		Obj.data = "JSON";
		var jsonObj =Information(Obj);
		return jsonObj;
	}
	
	function ratefee(clscod)
	{
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url= baseURL+'Billing/ratefee/'+clscod;
		Obj.data = "JSON";
		var jsonObj =Information(Obj);
		return jsonObj;
	}
	
	
	function proffee(key)
	{
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url= baseURL+'Billing/proffee/'+key;
		Obj.data = "JSON";
		var jsonObj =Information(Obj);
		return jsonObj;
	}
	

$('#frmProfserv_form').validate({
submitHandler: function (form){
var  POSTURL = baseURL+"Billing/saveProfServ";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#profServformIden').val()=='insert'){
					toastr.success('Professional Service Successfully Saved! ' ,'Success');
					$('.modal').modal('hide');
					ProfServ($.session.get('enccode'),$.session.get('hpercode'));
				}else if($('#profServformIden').val()=='update'){
					toastr.success('Professional Service Successfully Updated! ' ,'Success');
					$('.modal').modal('hide');
					ProfServ($.session.get('enccode'),$.session.get('hpercode'));
				}else{
					toastr.success('Professional Service Updated! ' ,'Success');
				}
			},
			error: function(data,response){
			console.log(data);
			}
			});
		return false;
	 $(form).submit();
   },
  rules:{
    DocName_doc:'required',
    typeOfProv:'required',
    MedCase:'required',
    noVisit:'required',
    servDateFrom:'required',
    servDateTo:'required',
    profFee:'required',
    typeProvServ_proftype:'required',
    incBill:'required',
    claimType:'required',
  },	
  messages:{
    DocName_doc: 'Doctor is required!',
    typeOfProv: 'Type of Provider is required!',
    MedCase: 'Medical case is required!',
    noVisit: 'Number of visit is required!',
    servDateFrom: 'Service date from is required!',
    servDateTo: 'Service date to is required!',
    profFee: 'Professional Fee is required!',
	typeProvServ_proftype: 'Fee is required!',
	incBill: 'Include is required!',
	claimType: 'Claim type is required!',
  },
  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
	{
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-hidden-accessible'))
	{
	 element=$(".select2" + element.attr("id") + "ul").parent();

	 error.insertAfter(element);
	}
	else 
	{
      error.insertAfter(element);
    }
  },

  highlight: function highlight(element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
	  if( $(element).hasClass('select2-hidden-accessible'))
	  {
		$(element).addClass('is-invalid').removeClass('is-valid');
      }
  },
  
  unhighlight: function unhighlight(element) {
	 
    $(element).addClass('is-valid').removeClass('is-invalid');
	if( $(element).hasClass('select2-offscreen'))
	  {
		  $(element).addClass('is-valid').removeClass('is-invalid');
      }

  } 
});

$("#DocName_doc").change(function(){
	var licno = $(this).val();
	$.ajax({
		type: 'POST',
		dataType: 'JSON',
		url: baseURL+'Billing/docinfo/'+licno,
	}).then(function(data){
		$("#profServAccno").val(data.accno);
	});
});