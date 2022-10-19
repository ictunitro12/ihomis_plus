	//Add 	
$("#btnCharge_add").on("click",function(){
		$('div[id$=_acct]').load(baseURL+"Billing/viewwlkin",function(){
					$.get(baseURL+"Radiology/genChargeSlipw/"+null, function (data) {$("#chrgslip").val($.trim(data));});
					$("#costcntr option[value="+'RADIO'+"]").prop('selected', true);
					$("#costcntr").attr("readonly", true);
					$("#formType").val('insert');
					$("#paid_amt").prop('readonly',true);

					SelDiscType();
						$('#chargesList').DataTable().clear().destroy();
						var chargesPat=  $('#chargesList').DataTable({
						"searching":false,
						"retrieve": true,
						"info":false,
						"ordering":false,
						"destroy":true,
						"deferLoading":350,
						"columnDefs":[
						{
							width:'2%',
							className:"align-middle text-center",
							targets:[0]
						},
						{
							visible:true,
							targets:[0,1,2,3,4,5]
						},
						{
							
							visible:false,
							targets:[6,7,8,9,10]
						},
						{
							width:'30%',
							className:"align-middle",
							targets:[1,2]
						},
						{
							className:"text-center",
							targets:[4]
						},
						],
						rowCallback: function (row,data,index) {
							var price = $('#price',row).val();
							var qty = $('#qty', row).val();
							var total = price * qty;
							$('#amnt',row).val(total.toFixed(2));
							$('#row',row).val(index);
						},
						footerCallback: function (row,data,start,end,display) {
							var api = this.api(), data;	 
							CalculateTableSummary(this);
							return ;		
						}
					});
					});
					
		$('#ModalNewCharge_modal').modal({backdrop:'static'});
		});


	$('#chargesTable').on('click','tbody>tr', function(){
		$(this).toggleClass("table-success selected");
	  
		$('#selectCharge').click( function () {
			var rowData=$('#chargesTable').DataTable().rows('.selected').data();
				
			$.each(rowData, function (i, d) {
				var  table =$('#chargesList').DataTable();
		var rw= table.row().count();
/* 		
			var indexes = table
					  .rows()
					  .indexes()
					  .filter( function ( value, index ) {
						var dataa=$(chargesPat.cell(index, 8).node()).find('input').val();
							return d['itemcode']===dataa? true:false;
						});
					 */
						
							$('#chargesList').DataTable().row.add([
							'<a class="text-danger align-middle" id="btnremove" ><i class="fa fa-remove fa-2x"></i></a>',
							'<input type="hidden" class="form-control form-control-lg" readonly  value='+i+' name="row[]" id="row">',
							 d['descs'],
							'<input type="number" class="form-control form-control-lg" readonly value='+d['amnt']+'  name="price[]" id="price">',
							'<input type="number" class="form-control form-control-lg " min="1" max="999" value=1 name="qty[]" id="qty">',
							'<input type="number" class="form-control form-control-lg" readonly value='+d['amnt']+' name ="amnt[]" id="amnt">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['uom']+' name ="oum[]" id="oum">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['chrgcode']+' name ="chrgcode[]" id="chrgcode">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['itemcode']+' name ="itemcode[]" id="itemcode">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['lot']+' name ="lotno[]" id="lotno">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['ctr']+' name ="ctr[]" id="ctr">',
							'<input type="hidden" class="form-control form-control-lg" readonly  value ='+$("#costcntr").val()+'   name ="center[]" id="center">']).draw(true);	
				});
			
			$('#Modal_typeCharge').modal('hide');
			$('#chargesTable').DataTable().rows('.selected' ).remove().draw();
		});
	});	
	
	$("#walkinTbl").on('click','#btnEditWalkin',function(){
		var orno = atob($(this).data('code'));
			$('div[id$=_acct]').load(baseURL+"Billing/viewwlkin",function(){
			$("#costcntr").prop('readonly',true);
			$("#paid_amt").prop('readonly',true);
			$("#costcntr option[value=" +'RADIO'+ "]").prop('selected', true);
		$.get(baseURL+"Radiology/walkinLaborInfo/"+orno, function (data){
			var jsonInfo = $.parseJSON(data);
			var disc = discountInfo(jsonInfo['disccode']);
			$("#amountDisc").val(disc['disamt']);
			$("#discAmount").val(jsonInfo['tot_payable']);
			var newOption = new Option(disc['discdesc'], disc['discikey'], false, false);
			$("#typeDisc_disc").append(newOption).trigger('change');
			SelDiscType();
			$("#mode option[value=" +jsonInfo['modepay']+"]").prop('selected', true);
			$("#codeType option[value=" +jsonInfo['disctype']+"]").prop('selected', true);
			$("#fname").val(jsonInfo['firstname']);
			$("#mname").val(jsonInfo['middlename']);
			$("#lname").val(jsonInfo['lastname']);
			$("#chrgslip").val(jsonInfo['pcchrgcod']);
			$("#orno").val(jsonInfo['orno']);
			$("#paid_amt").val(jsonInfo['amt_paid']);
			$("#ordate").val(setTimeLocale(jsonInfo['ordate']));
			$("#chrgdate").val(setTimeLocale(jsonInfo['ordate']));
			$("#formType").val('update');
		});
	 });
		
		$.get(baseURL+"Radiology/walkinList/"+orno, function (data){
			var jsonObj = $.parseJSON(data);
			$('#chargesList').DataTable().clear().destroy();
			var chargesPatwalk=  $('#chargesList').DataTable({
						"searching":false,
						"retrieve": true,
						"info":false,
						"ordering":false,
						"destroy":true,
						"rowsGroup":[],
						"deferLoading":350,
						"columnDefs":[
						{
							width:'2%',
							className:"align-middle text-center",
							targets:[0]
						},
						{
							
							visible:true,
							targets:[0,1,2,3,4,5]
						},
						{
							visible:false,
							targets:[6,7,8,9,10]
						},
						{
							width:'30%',
							className:"align-middle",
							targets:["_all"]
						},
						{
							className:"text-center",
							targets:[4]
						},
						],
						rowCallback: function (row,data,index) {
							var price = $('#price',row).val();
							var qty = $('#qty', row).val();
							var total = price * qty;
							$('#amnt',row).val(total.toFixed(2));
							$('#row',row).val(index);
						},
						footerCallback: function (row,data,start,end,display) {
							var api = this.api(), data;	 
							CalculateTableSummary(this);
							return ;		
						}
					});
			$('#chargesList tbody').on('click','#btnremove',function(){
						var rowIndex=chargesPatwalk.row($(this).parents('tr')).index();

							var orno =  $("#orno").val();
							var paid_amt =  $("#totalAll").val();
							var descs = chargesPatwalk.row(rowIndex, 2);
							var chrgcod = $(chargesPatwalk.cell(rowIndex, 7).node()).find('input').val();
							var proccode = $(chargesPatwalk.cell(rowIndex, 8).node()).find('input').val();
							
						var chargeDtl =
								'&slipno='+chrgcod+
								'&proccode='+proccode+
								'&paid_amt='+paid_amt+
								'&orno='+orno;
								console.log(chargeDtl);
						$.ajax({
						type:'POST',
						url: baseURL+"Radiology/removeitem",
						type:'POST',
						data:chargeDtl,
						dataType:'JSON',
						success: function(data,response){
							toastr.info(descs+'removed!','Alert');
						},
						error: function(data,response){
							console.log(data);
						},
						});

						chargesPatwalk
						.row($(this).parents('tr'))
						.remove()
						.draw();

						});
					$.each(jsonObj, function (i, d) {
						console.log(jsonObj);
							chargesPatwalk.row.add([
							'<a class="text-danger align-middle" id="btnremove" ><i class="fa fa-remove fa-2x"></i></a>',
							'<input type="hidden" class="form-control form-control-lg" readonly  value='+i+' name="row[]" id="row">',
							 d['chargedesc'],
							'<input type="number" class="form-control form-control-lg" readonly value='+d['chargeup']+'  name="price[]" id="price">',
							'<input type="number" class="form-control form-control-lg " min="1" max="999" value='+d['chargeqty']+' name="qty[]" id="qty">',
							'<input type="number" class="form-control form-control-lg" readonly value='+d['chargeamount']+' name ="amnt[]" id="amnt">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['uom']+' name ="oum[]" id="oum">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['chargcode']+' name ="chrgcode[]" id="chrgcode">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['itemcode']+' name ="itemcode[]" id="itemcode">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['lot']+' name ="lotno[]" id="lotno">',
							'<input type="text" class="form-control form-control-lg" readonly value='+d['ctr']+' name ="ctr[]" id="ctr">',
							'<input type="hidden" class="form-control form-control-lg" readonly  value ='+$("#costcntr").val()+'   name ="center[]" id="center">']).draw(true);	
					});
				$('#ModalNewCharge_modal').modal({backdrop:'static'});	
		});
	});
	
	$('#walkinTbl').on('click','#btnDeleteWalkin',function(){
		var orno = atob($(this).data('code'));
		$("#delorno").val(orno);
		$("#modalDeleteWalkin").modal('show');
	});
	
	$('#frmDeleteWalkin').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		url  : baseURL+"Radiology/deleteWalkPharma",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			$("#walkinTbl").DataTable().ajax.reload();
			toastr.success('Successfully Deleted! ' ,'Success');
			$('#modalDeleteWalkin').modal('hide');
		},
		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
		});
		  return false;
	}); 

	$('#frmNewCharge_form').on('submit',function(){
		
	if ($('#frmNewCharge_form').valid()){ 
		var formData = new FormData(this);
		var row = formData.getAll("row[]");
	
	if(row.length > 0 ){
		var formType=$("#formType").val();
		var	fname=$("#fname").val();
		var	mname=$("#mname").val();
		var	lname=$("#lname").val();
		//chargeslip
		var	chrgslip=$("#chrgslip").val();
		var chrgdate=$("#chrgdate").val();
		var src=$("#costcntr").val();
		//payment
		var	modepay=$("#mode").val();
		var orno=$("#orno").val();
		var ordate=$("#ordate").val();
		var paid_amt=$("#paid_amt").val();
		var	alltotal=$("#totalAll").val();
		//discount
		var	discCode=$("#typeDisc_disc").val();	
		var	discType =$("#codeType").val();	
		var	amountDisc =$("#amountDisc").val();	
		var	discAmount=$("#discAmount").val();
	
		var header ='&slipno='+chrgslip+
					'&orno='+orno+
					'&ordate='+ordate+
					'&chrgdate='+chrgdate+
					'&lastname='+lname+
					'&middlename='+mname+
					'&firstname='+fname+
					'&modepay='+modepay+
					'&formType='+formType+
					'&discCode='+discCode+
					'&discType='+discType+
					'&discAmount='+discAmount+
					'&paid_amt='+paid_amt+
					'&src='+src;

		$.ajax({
				type:'POST',
				data:header,
				dataType:'JSON',
				url: baseURL+"Radiology/saveWalkin",
				success: function(data,response){
					$('#ModalNewCharge_modal').modal('hide');
					toastr.success('Charges saved!','Alert');
					$("#walkinTbl").DataTable().ajax.reload();
				},
				error: function(data,response){
					console.log(data);
				},
			});
	  for(var i = 0; i <row.length; i++)
	  {
		var chargeTable =$("#chargesList").DataTable();
		var unit_price = $(chargeTable.cell(row[i], 3).node()).find('input').val();
		var qty = $(chargeTable.cell(row[i], 4).node()).find('input').val();
		var amount = $(chargeTable.cell(row[i], 5).node()).find('input').val();
		var uom = $(chargeTable.cell(row[i], 6).node()).find('input').val();
		var chrgcod = $(chargeTable.cell(row[i], 7).node()).find('input').val();
		var itemcode = $(chargeTable.cell(row[i], 8).node()).find('input').val();
		var lot = $(chargeTable.cell(row[i], 9).node()).find('input').val();
		var	ctr = $(chargeTable.cell(row[i], 10).node()).find('input').val();
		var intkey=chrgslip.concat(itemcode,row[i]); 
			var chargeDtl = 'intkey='+intkey+
					'&orno='+orno+
					'&formType='+formType+
					'&proccode='+itemcode+
					'&chrgcod='+chrgcod+
					'&qty='+qty+
					'&uom='+uom+
					'&price='+unit_price+
					'&tot_amount='+amount+
					'&row='+i;
			$.ajax({
				type:'POST',
				url: baseURL+"Radiology/saveWalkinDtl",
				type:'POST',
				data:chargeDtl,
				dataType:'JSON',
				success: function(data,response){
				
				},
				error: function(data,response){
					console.log(data);
				},
			});
		}
		
	}else{
		toastr.error('Please add item!','Warning!');
	}
		return false;
	}
	});

	$("#frmNewCharge_form").validate({
		 rules:{
			fname:'required',
			lname:'required',
			orno:'required', 
			ordate:'required',
			chrgdate:'required',
			orno:{
					required :true,
					remote:{	
					  depends: function () 
					  {
						 return $('#formType').val()=='insert';
					  },
					  param:{
						url: baseURL+"Radiology/checkOrno",	
						type:'POST'
					  }
					},
				},
			},	
		 messages:{
			fname:'First name  is required!',
			lname:'Last name  is required!',
			orno: 
			 {	
				required:'O.R number is required',
				remote: "O.R number is exists!"
			},
	
			ordate:'O.R Date  is required!',
			chrgdate:'Charge Date  is required!',
			},
		errorElement: 'span',
		errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');
		error.insertAfter(element); 
	  },
	  highlight: function highlight(element) {
		$(element).addClass('is-invalid').removeClass('is-valid');
		  if( $(element).hasClass('select2') && $(element).next('.select2-container').length)
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
			$("#paid_amt").blur(function() {
				this.value = parseFloat(this.value).toFixed(2);
			});
	$('#chargesList').on('click','#btnremove',function(){
		var rowIndex=$('#chargesList').DataTable().row($(this).parents('tr')).index();					
		$('#chargesList').DataTable()
		.row($(this).parents('tr'))
		.remove()
		.draw();
	});


	$('#chargesList').on('change', '#qty', function () {
		var price = $("#price",$(this).parents('tr')).val();
		var qty = $("#qty",$(this).parents('tr')).val();
		var total =  price * qty;
		$("#amnt",$(this).parents('tr')).val(total.toFixed(2));
		$('#chargesList').DataTable().columns(5).each(function (index){
				var column =  $('#chargesList').DataTable().column(index);
				sum = column.nodes().reduce( function (a, b) {
					var a1 = parseInt(a);
					var b1= parseInt($('input', b).val())
				return  a1+b1 ;
				},0);
				
				if($(column.footer()).hasClass("Gtotal"))
				{
					var ada = $(column.footer()).text(sum.toFixed(2));
					discount(sum);
					$("#totalAll").val(sum.toFixed(2));
					$("#paid_amt").val(sum.toFixed(2));
				}
			});
		$("#GTotal").text(formatNumber(sum.toFixed(2)));
	});
	
	$('#frmDeleteWalkin').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		url  : baseURL+"Radiology/deleteWalkPharma",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			$("#walkinTbl").DataTable().ajax.reload();
			toastr.success('Successfully Deleted! ' ,'Success');
			$('#modalDeleteWalkin').modal('hide');
		},
		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
		});
		  return false;
	 });  
