function Webpais(hpercode)
	{
		var data = new Object();
		data.id = "chargeweb";
		data.link = baseURL+"Billing/chargesWebpaisList/"+hpercode,
		data.type = "POST";
		data.coldef =[
			{
				targets: [0],
				visible:false,
				orderable:false,
			}
			
		],
		loadTable(data);
	}
	
	$('#btnWebpais').on('click', function (){
		$('#ModalWebpais_modal').modal('show');
		$('#webformIden').val('insert');
		$('#webEnccode').val($.session.get('enccode'));
		$('#webHpercode').val($.session.get('hpercode'));
		$('#unqCode').prop('false',true);
		selFundSource();
	});
	
	//Edit
	$('#chargeweb').on('click','#btnWeb_Edit',function(){
		$('#ModalWebpais_modal').modal('show');
		$('#webformIden').val('update');
		var enccode=URLencode($(this).data('hpercode'));
		var code=$(this).data('unique_code');
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+"Billing/webpaisInformation/"+enccode+"/"+code,
		Obj.data = "JSON";
		var row =Information(Obj);
	
		$('#webEnccode').val($.session.get('enccode'));
		$('#webHpercode').val($.session.get('hpercode'));
		$('#indDate').val(setTimeLocale(row['indrsdate']));
		$('#expDate').val(setTimeLocale(row['date_expiry']));
		$('#unqCode').val(row['unique_code']);
		$('#unqCode').prop('readonly',true);
		setFund(row['fundcode']);
		fundDetails(row['fundcode']);
		webList(row['hpercode'],row['unique_code']);
	});
	
	var webpaisList = $('#webpaisList').DataTable({
		"searching":false,
		"paging":false,
		"info":false,
		"destroy":true,
  		footerCallback: function ( row, data, start, end, display ) {
			var api = this.api(), data;	 
			totalwebpais(this);
			return;
		}
	});
	
	function webList(hpercode,code)
	{
			var Obj = new Object();
			Obj.type = "POST";
			Obj.url = baseURL+"Billing/webpaisDetails/"+hpercode+"/"+code,
			Obj.data = "JSON";
			var jsonObj =Information(Obj);
	  $.each(jsonObj, function (i, d) {

        var row = '<tr>';
	
		webpaisList.row.add([
		'<a class="text text-danger text-center" id="btnremove" ><i class="fa fa-trash fa-remove fa-2x"></i></a>',
		'<select class="form-control form-control-sm"  name="chrgcode[]_chargew" id="chrgcode[]" ><option value='+d['chrgcode']+'>'+d['chrgdesc']+'</option></select>',
		'<input type="number" class="form-control form-control-sm" name ="weBamnt[]" id="weBamnt" value='+ d['usedamount'] +' placeholder="0.00">']).draw(false).node();
    });
	}
	
	
	
	$('#btnWeb').on('click', function (){
		webpaisList.row.add([
		'<a class="text text-danger text-center" id="btnremove" ><i class="fa fa-trash fa-remove fa-2x"></i></a>',
		'<select class="form-control form-control-sm"  name="chrgcode[]_chargew" id="chrgcode[]"></select>',
		'<input type="text" class="form-control form-control-sm" name ="weBamnt[]" id="weBamnt"  placeholder="0.00">']).draw(false).node();
		typeCharge_web();
	});
	
		
	$('#webpaisList tbody').on('change', '#weBamnt', function () {

		 webpaisList.columns(2).each(function (index){
				var column = webpaisList.column(index);
				sum = column.nodes().reduce( function (a, b) {
					var a1 = parseInt(a);
					var b1= parseInt($('input', b).val())
				return  a1+b1 ;
				},0);
				
				if($(column.footer()).hasClass("Gtotal"))
				{
					var ada = $(column.footer()).text(sum.toFixed(2));
				}
			});
			
	var webAmount=	Number.parseFloat(sum).toFixed(2);
	$("#webpaisTotal").val(webAmount);
	});
	
	
	
	function totalwebpais(table) {
		try {

			var intVal = function (i) {
				return typeof i === 'string' ?
				i.replace(/[\$,]/g, '') * 1 :
				typeof i === 'number' ?
				i : 0;
			};

			var api = table.api();
				api.columns(2).each(function (index){
				var column = api.column(index);
				sum = column.nodes().reduce( function (a, b) {
					var a1 = intVal(a);
					var b1= intVal($('input', b).val())
				return  a1+b1 ;
				},0);
				
				if($(column.footer()).hasClass("Gtotal"))
				{
					var ada = $(column.footer()).text(sum.toFixed(2));
						$("#webpaisTotal").val(sum.toFixed(2));
				}
			});
		} catch (e) {
			console.log(e)
		}
	}

	
	$('#webpaisList tbody').on('click','#btnremove', function () {
		webpaisList
        .row($(this).parents('tr'))
        .remove()
        .draw();
	});
	
	
	function typeCharge_web()
	{
			$('[name $="_chargew"]').select2({
			allowClear: true,
			placeholder:'Select Charge',
			theme:'coreui',
			ajax:{
			url: baseURL+"Charges/chargeSel",
			dataType: "json",
			type:"POST",
			delay: 250,
			data: function(params){
			return{
			searchCharges: params.term
			};
			},
			processResults: function(data){
			var results = [];
				$.each(data, function(index, item){
				results.push({
					id:item.chrgcode,
					text:item.chrgdesc,
				});
			});
			return{
				results: results
			}
			}
			}
			});
				$('[name $="_chargew"]').on('change', function() {
				var data =  $("[name $='_chargew'] option:selected",this);
			});
			
	}
	
  function setTypechrg_web(code)
	{
		var obj;
		var relSelect = $('[name $="_chargew"]');
		$.ajax({
			type: 'POST',
			url: baseURL+'Charges/setCharge/'+code,
		}).then(function (data) {
		var obj=$.parseJSON(data);
		});
		return  obj;
	}
	
	function selFundSource()
	{
			$('[name $="_fund"]').select2({
			allowClear: true,
			placeholder:'Select Fund Source',
			theme:'coreui',
			ajax:{
			url: baseURL+"Billing/fundSource/",
			dataType: "json",
			type:"POST",
			delay: 250,
			data: function(params){
			return{
			searchCharges: params.term
			};
			},
			processResults: function(data){
			var results = [];
				$.each(data, function(index, item){
				results.push({
					id:item.fundcode,
					text:item.funddesc,
				});
			});
			return{
				results: results
			}
			}
			}
			});
			$('[name $="_fund"]').on('change', function() {
			var data =  $("[name $='_fund'] option:selected",this);
			fundDetails(this.value);
			});
	}
	
	
	function fundDetails(fundcode)
	{
		var Obj = new Object();
			Obj.type = "POST";
			Obj.url = baseURL+"Billing/fundDetails/"+fundcode,
			Obj.data = "JSON";
			var row =Information(Obj);
		$("#fundAmount").val(formatNumber(row['amnt']));
		$("#fundBalance").val(formatNumber(row['balance']));
		$("#btnWeb").removeAttr('disabled',true);
	}
	
     $('#ModalWebpais_modal').on('hidden.coreui.modal', function () {
		$('#GTotal').text('GrandTotal:'+' '+'0.00');
		webpaisList.clear();
	});
	
	$('#ModalWebpais_modal').on('hidden.coreui.modal', function () {
		$("#webpaisList").DataTable().destroy();
		$("#webpaisList").DataTable().clear();
		$('[name $="_fund"]').empty();
	});
	
	
	
	function setFund(code)
	{
		selFundSource();
		var relSelect =$('[name $="_fund"]');
		$.ajax({
			type: 'POST',
			url: baseURL+'Billing/setFund/'+code,
		}).then(function (data) {
		var obj=$.parseJSON(data);
			var option = new Option(obj['funddesc'], obj['fundcode'],true, true);
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
	
		//Delete
	$('#chargeweb').on('click','#btnWeb_Delete',function(){
	$('#ModalWebDelete').modal('show');
		$('#deleteWeb').val('delete');
		var code=$(this).data('unique_code');
		$('#unqCodeDel').val(code);
	});
		
	$('#frmWebDelete').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		url  : baseURL+"Billing/saveWebpais",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			Webpais($.session.get('hpercode'));	
			toastr.success('Webpais Successfully Saved! ' ,'Success');
			$('#ModalWebDelete').modal('hide');
		},
	
		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
		});
		  return false;
	}); 
	
	$('#frmWebpais_form').validate({
	submitHandler: function (form){
	 var table= chargesPat.$('input');
	var  POSTURL = baseURL+"Billing/saveWebpais";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form,table).serialize(),
			success: function(data){
				if($('#webformIden').val()=='insert'){
					Webpais($.session.get('hpercode'));	
					toastr.success('Webpais Successfully Saved! ' ,'Success');
					$('#ModalWebpais_modal').modal('hide');
				}else if($('#webformIden').val()=='update'){
					Webpais($.session.get('hpercode'));	
					toastr.success('Webpais Successfully Updated! ' ,'Success');
					$('#ModalWebpais_modal').modal('hide');
				}else{
					toastr.success('No Post! ' ,'Success');
				}
			},
			error: function(data,response,xhr){
	
				toastr.error('Data may exist' ,'Warning');
			}
			});
		return false;
	 $(form).submit();
   },
  rules:{

    indDate:'required',
    expDate:'required',
    unqCode:'required',
    fundsrc_fund:'required'
  },	
  messages:{
  
    indDate: 'Indorsement date is required!',
    expDate: 'Expiry date is required!',
    unqCode: 'Unique code is required!',
    fundsrc_fund: 'Fund source is required!',
  },
  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
	{
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-hidden-accessible'))
	{
	 element=$(".select" + element.attr("id") + "ul").parent();

	 error.insertAfter(element);
	}
	else 
	{
      error.insertAfter(element);
    }
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

