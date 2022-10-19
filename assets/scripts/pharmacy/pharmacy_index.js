


var d 		= new Date();
	var year 	= d.getFullYear();
	var month 	= d.getMonth() + 1;
	var day 	= d.getDate();
	var hour 	= d.getHours();
	var min 	= d.getMinutes();
	var sec 	= d.getSeconds();


/*PharmacyInformation('RN12566544');*/
	doctors_order();
	doctors_order_supplies();
	
	/* INITIALIZE MODALS */
	modalsInit();
		
	/*================================== MARVIN : START : REPLENISH PROCESS ==================================*/
	
	/* GET DRUGS AND MEDS REPLENISH LIST */
	$("input[type='radio'][name='rep_option']").on("click", function(){
		
		var drugsAndMeds = $(this).val();
		$("#replenish_tbl tbody").empty();
		
		$.post("<?php echo site_url('Pharmacy/replenish'); ?>",
		{
			"drugsAndMeds" : drugsAndMeds
		},
		function(result)
		{
			var html = "";
			if(result.status)
			{
				for(i=0; i<result.msg.length; i++)
				{
					html = "<tr>"
						+'<input type="hidden" name="gendesc[]" value="'+result.msg[i].gendesc+'" />'
						+'<input type="hidden" name="dmdctr[]" value="'+result.msg[i].dmdctr+'" />'
						+'<input type="hidden" name="locacode[]" value="'+result.msg[i].locacode+'" />'
						+'<td><input type="hidden" name="requestfrom[]" value="'+result.msg[i].requestfrom+'" />'+result.msg[i].requestfrom+'</td>'
						+'<td><input type="hidden" name="wardname[]" value="'+result.msg[i].wardname+'" />'+result.msg[i].wardname+'</td>'
						+'<td><input type="hidden" name="dmdcomb[]" value="'+result.msg[i].dmdcomb+'" />'+result.msg[i].gendesc+'</td>'
						+'<td><input type="hidden" name="dtereq[]" value="'+result.msg[i].dtereq+'" />'+result.msg[i].date_req+'</td>'
						+'<td><input type="hidden" name="tmereq[]" value="'+result.msg[i].tmereq+'" />'+result.msg[i].time_req+'</td>'
						+'<td><input type="hidden" name="qtyreq[]" value="'+result.msg[i].qtyreq+'" />'+result.msg[i].qtyreq+'</td>'
						+'<td><input type="hidden" name="totqtyissue[]" value="'+result.msg[i].totqtyissue+'" />'+result.msg[i].totqtyissue+'</td>'
						+'<td>'+result.msg[i].stockbal+'</td>'
						+'<td>'+result.msg[i].qtyissue+'</td>'
						+'<td><input type="text" name="qtyissue[]" class="form-control form-control-md" id="qtyissue_'+i+'" size=1 /></td>'
					+"</tr>";
				}
				
				$("#replenish_tbl tbody").append(html);
			}
			else
			{
				html += "<tr><td align='center' colspan='10' style='color: red;'>- - - "+result.msg+" - - -</td></tr>";
				$("#replenish_tbl tbody").append(html);
				toastr.warning(result.msg, 'Warning!');
			}
		},"json");
	});
	
	/* SUBMIT DRUGS AND MEDS REPLENISH */
	$("#process_replenish").on("submit", function(e){
		
		e.preventDefault();
		
		$.ajax({
			type : "POST",
			url : "<?php echo site_url('Pharmacy/process_replenish'); ?>",
			data : $("#process_replenish").serialize(),
			success : function(result){
				
				obj = JSON.parse(result);
				if(obj.status)
				{
					$("input[type='radio'][name='rep_option'][value='drugsAndMeds']").click();
					toastr.success(obj.msg, 'Success!');
				}
				else
				{
					toastr.warning(obj.msg, 'Warning!');
				}
			}
		});
	});
	
	/*================================== MARVIN : END : REPLENISH PROCESS ==================================*/


/*================================== MARVIN : START : STOCK SUPPLIES PROCESS ==================================*/
/* USE TO RESET MODAL */
window.nonDrugsLib_tbl 	= "";
window.class1Lib_tbl 	= "";
window.class2Lib_tbl 	= "";
window.class2HLib_tbl 	= "";

/* GET NONDRUGSLIB */
function supplies_stocks(){
	
	/* DESTROY ALL LIB TABLE */
	$("#nonDrugsLib_tbl").DataTable().destroy();
	$("#class1Lib_tbl").DataTable().destroy();
	$("#class2Lib_tbl").DataTable().destroy();
	$("#class2HLib_tbl").DataTable().destroy();
	
	/* NONDRUGSLIB DATATABLE */
	window.nonDrugsLib_tbl = $('#nonDrugsLib_tbl').DataTable({
		"ajax" : baseURL + 'Pharmacy/nonDrugsLib',
		"columns" : [
			{ data : "ptcode" },
			{ data : "ptdesc" },
			{ data : "date_as_of" }
		],
		"searching" : false,
		"lengthChange" : false,
		"paging" : false,
		"info" : false,
		"pageLength" : 100
	});

	$("#nonDrugsLib_tbl").on("click", "tr", function(){
		
		var data = window.nonDrugsLib_tbl.row(this).data();
		
		/* DESTROY ALL LIB TABLE */
		$("#nonDrugsLib_tbl").DataTable().destroy();
		$("#class1Lib_tbl").DataTable().destroy();
		$("#class2Lib_tbl").DataTable().destroy();
		$("#class2HLib_tbl").DataTable().destroy();
		
		/* CLASS1LIB DATATABLE */
		window.class1Lib_tbl = $('#class1Lib_tbl').DataTable({
			"ajax" : baseURL + 'Pharmacy/class1Lib_tbl/'+data.ptcode+'',
			"columns" : [
				{ data : "ptdesc" },
				{ data : "cl1code" },
				{ data : "cl1desc" }
			],
			"searching" : false,
			"lengthChange" : false,
			"paging" : false,
			"info" : false,
			"pageLength" : 100
		});
		
		$('.nav-tabs li:eq(1) a').tab('show');
	});
	
	$("#class1Lib_tbl").on("click", "tr", function(){
		
		var data = window.class1Lib_tbl.row(this).data();
		
		/* DESTROY ALL LIB TABLE */
		$("#nonDrugsLib_tbl").DataTable().destroy();
		$("#class1Lib_tbl").DataTable().destroy();
		$("#class2Lib_tbl").DataTable().destroy();
		$("#class2HLib_tbl").DataTable().destroy();
		
		/* CLASS2LIB DATATABLE */
		window.class2Lib_tbl = $('#class2Lib_tbl').DataTable({
			"ajax" : encodeURI('Pharmacy/class2Lib_tbl/'+data.cl1comb+''),
			"columns" : [
				{ data : "cl1desc" },
				{ data : "cl2code" },
				{ data : "stkno" },
				{ data : "cl2desc" },
				{ data : "uomcode" },
				{ data : "stockbal" },
				{ render: function(data, type, row){
					return (row.pharmaceutical == "Y" ? "Yes" : "No");
				}}
			],
			"searching" : false,
			"lengthChange" : false,
			"paging" : false,
			"info" : false,
			"pageLength" : 100
		});
		
		$('.nav-tabs li:eq(2) a').tab('show');
	});
	
	$("#class2Lib_tbl").on("click", "tr", function(){
		
		var data = window.class2Lib_tbl.row(this).data();
		
		/* DESTROY ALL LIB TABLE */
		$("#nonDrugsLib_tbl").DataTable().destroy();
		$("#class1Lib_tbl").DataTable().destroy();
		$("#class2Lib_tbl").DataTable().destroy();
		$("#class2HLib_tbl").DataTable().destroy();
		
		/* CLASS2HLIB DATATABLE */
		window.class2HLib_tbl = $('#class2HLib_tbl').DataTable({
			"ajax" : encodeURI('Pharmacy/class2HLib_tbl/'+data.cl2comb+''),
			"columns" : [
				{ data : "cl2desc" },
				{ data : "uomcode" },
				{ data : "cl2retprc" },
				{ data : "date_as_of" }
			],
			"searching" : false,
			"lengthChange" : false,
			"paging" : false,
			"info" : false,
			"pageLength" : 100
		});
		
		$('.nav-tabs li:eq(3) a').tab('show');
	});
	
	/* ERROR HANDLER */
	$.fn.dataTable.ext.errMode = function(settings, helpPage, message){
		toastr.warning(settings.json.data, 'Warning!');
	};
}

/*================================== MARVIN : END : STOCK SUPPLIES PROCESS ==================================*/

/*================================== MARVIN : START : DM STOCK PROCESS ==================================*/
window.modalDMStockEditHTML = "";
window.modalTypeOfAccountHTML = "";
window.modalEditTypeOfAccountHTML = "";
var DMStockEdit_HTML = "";

/* GET DM STOCK LIST */
function dm_stock(){
	
	var dmstock_tbl = $("#dmstock_tbl").DataTable({
		
		ajax : "<?php echo site_url('Pharmacy/dm_stock'); ?>",
		columns : [
			{ render : function(data, type, row){
				return (row.dmdrxot == "RXX" ? "With Prescription" : (row.dmdrxot == "OTC" ? "Over The Counter" : row.dmdrxot));
			} },
			{ data : "gendesc" },
			{ data : "hprodid" },
			{ data : "brandname" },
			{ data : "dmdnost" },
			{ data : "strecode" },
			{ data : "formcode" },
			{ data : "rtecode" },
			{ render : function(data, type, row){
				return (row.saltcode == '00000' ? '' : row.saltcode);
			} },
			{ render : function(data, type, row){
				return '?';
			} },
			{ render : function(data, type, row){
				return (row.dmdstat == "A" ? "Active" : "Inactive");
			} },
			{ data : "dmdrem" },
			{ render : function(data, type, row){
				return (row.dmdpndf == "Y" ? "Yes" : "No");
			} }
		],
		ordering : false
	});
	
	/* EDIT DM STOCK */
	$("#dmstock_tbl").on("click", "tr", function(e){
		
		e.preventDefault();
		
		var data = dmstock_tbl.row(this).data();
		
		$.post("<?php echo site_url('Pharmacy/edit_dm_stock'); ?>",
		{
			"data" : data
		},
		function(result)
		{
			/* HIDDEN INPUT */
			$("#dmdcomb").val(result.dmdcomb);
			$("#grpcode").val(result.grpcode);
			$("#dmdlock").val(result.dmdlock);
			$("#dmdupsw").val(result.dmdupsw);
			$("#dmddtmd").val(result.dmddtmd);
			$("#atcode").val(result.atcode);
			$("#dmdnnostp").val(result.dmdnnostp);
			$("#techspec").val(result.techspec);
			$("#dmdclmuom").val(result.dmdclmuom);
			$("#dmdstco").val(result.dmdstco);
			$("#dmdedl").val(result.dmdedl);
			$("#lbscode").val(result.lbscode);
			$("#dmdctr").val(result.dmdctr);
			$("#stockbal").val(result.stockbal);
			$("#baldteasof").val(result.baldteasof);
			$("#begbal").val(result.begbal);
			$("#barcode").val(result.barcode);
			
			/* VISIBLE INPUT */
			$("#dmdrxot").html(result.dmdrxot);
			$("#gendesc").html(result.gendesc);
			$("#hprodid").val(result.hprodid);
			$("#brandname").val(result.brandname);
			$("#dmdnost").val(result.dmdnost);
			$("#strecode").html(result.strecode);
			$("#formcode").html(result.formcode);
			$("#rtecode").html(result.rtecode);
			$("#saltcode").html(result.saltcode);
			$("#packcode").html(result.packcode);
			$("#dmdstat").html(result.dmdstat);
			$("#dmdrem").html(result.dmdrem);
			$("#dmdpndf").html(result.dmdpndf);
			
			/* STORE ORIG MODAL HTML */
			window.modalDMStockEditHTML = $("#ModalPharmacyDMStockEdit").html();
			
			/* PREVENT MODAL CLOSE */
			$("#ModalPharmacyDMStockEdit").modal({backdrop: "static"});
			$('#ModalPharmacyDMStockEdit').modal('show');
			
		},"json");
		
	});
	
}

/* SUBMIT DM STOCK */
$("#process_dmstock").on("submit", function(e){
	
	e.preventDefault();
	
	$.ajax({
		type : "POST",
		url : "<?php echo site_url('Pharmacy/process_dm_stock'); ?>",
		data : $("#process_dmstock").serialize(),
		success : function(result){
			
			obj = JSON.parse(result);
			if(obj.status)
			{
				toastr.success(obj.msg, 'Success!');
				
				window.modalDMStockEditHTML = "";
				$('#ModalPharmacyDMStockEdit').modal('hide');
				
				$("#dmstock_tbl").DataTable().ajax.reload();
			}
			else
			{
				toastr.warning(obj.msg, 'Warning!');
			}
		}
	});
});

/* OPEN TYPE OF ACCOUNT MODAL */
$("#btn_type_of_account").on("click", function(){
	
	window.modalTypeOfAccountHTML = $("#ModalPharmacyTypeOfAccount").html();
	
	$("#ModalPharmacyTypeOfAccount").modal({backdrop:"static"});
	$("#ModalPharmacyTypeOfAccount").modal("show");
});

/* GET TYPE OF ACCOUNT */
$("#typeOfAccount").on("change", function(e){
		
	e.preventDefault();
	window.typeOfAccount_tbl = "";
	
	$("#typeOfAccount_tbl").DataTable().destroy();
	
	window.typeOfAccount_tbl = $("#typeOfAccount_tbl").DataTable({
		
		ajax : "<?php echo site_url('Pharmacy/type_of_account/'); ?>" + $(this).val(),
		columns : [
			{ data : "item_description"},
			{ data : "barcode"},
			{ data : "begbal"},
			{ data : "date_as_of"},
			{ data : "reorder_level"},
			{ data : "stockbal"},
		],
		ordering : false,
		saerching : false,
		lengthChange : false,
		pageLength : 10
	});
});

/* EDIT TYPE OF ACCOUNT */
$("#typeOfAccount_tbl").on("click", "tr", function(){
	
	var data = window.typeOfAccount_tbl.row(this).data();
	
	$.post("<?php echo site_url('Pharmacy/edit_type_of_account'); ?>",
	{
		"data" : data
	},
	function(result)
	{
		/* HIDDEN INPUT */
		$("#hidden_dmdctr").val(result.dmdctr);
		$("#hidden_dmhdrsub").val(result.dmhdrsub);
		$("#hidden_old_dmdcomb").val(result.dmdcomb);
		$("#hidden_old_dmdctr").val(result.dmdctr);
		$("#hidden_old_dmhdrsub").val(result.dmhdrsub);
		
		/* VISIBLE INPUT */
		$("#dmdcomb_typeOfAccount").html(result.gendesc);
		$("#barcode_typeOfAccount").val(result.barcode);
		$("#begbal_typeOfAccount").val(result.begbal);
		$("#baldteasof_typeOfAccount").val(result.baldteasof);
		$("#reorder_level_typeOfAccount").val(result.reorder_level);
		$("#stockbal_typeOfAccount").val(result.stockbal);
	},"json");
	
	/* CLOSE TYPE OF ACCOUNT MODAL */
	window.modalTypeOfAccountHTML = "";
	$("#ModalPharmacyTypeOfAccount").modal("hide");
	
	/* OPEN EDIT TYPE OF ACCOUNT MODAL */
	window.modalEditTypeOfAccountHTML = $("#ModalPharmacyEditTypeOfAccount").html();
	$("#ModalPharmacyEditTypeOfAccount").modal({"backdrop" : "static"});
	$("#ModalPharmacyEditTypeOfAccount").modal("show");
});

/* SUBMIT EDIT TYPE OF ACCOUNT */
$("#process_type_of_account").on("submit", function(e){
	
	e.preventDefault();
	
	$.ajax({
		type : "POST",
		url : "<?php echo site_url('Pharmacy/process_type_of_account'); ?>",
		data : $("#process_type_of_account").serialize(),
		success : function(result){
			
			obj = JSON.parse(result);
			if(obj.status)
			{
				toastr.success(obj.msg, 'Success!');
				
				/* RESET EDIT TYPE OF ACCOUNT MODAL */
				window.modalEditTypeOfAccountHTML = "";
				
				/* CLOSE EDIT TYPE OF ACCOUNT MODAL */
				$("#ModalPharmacyEditTypeOfAccount").modal("hide");
				
				/* OPEN TYPE OF ACCOUNT MODAL */
				window.modalTypeOfAccountHTML = $("#ModalPharmacyTypeOfAccount").html();;
				$("#ModalPharmacyTypeOfAccount").modal({backdrop:"static"});
				$("#ModalPharmacyTypeOfAccount").modal("show");
				
				/* REFRESH DATATABLE */
				$("#typeOfAccount_tbl").DataTable().ajax.reload();
			}
			else
			{
				toastr.warning(obj.msg, 'Warning!');
			}
		}
	});
});

function clearDMStockModalEdit(){
	
	window.modalDMStockEditHTML = "";
}

function clearEditTypeOfAccount(){
	
	/* RESET EDIT TYPE OF ACCOUNT MODAL */
	window.modalEditTypeOfAccountHTML = "";
	
	/* OPEN TYPE OF ACCOUNT MODAL */
	window.modalTypeOfAccountHTML = $("#ModalPharmacyTypeOfAccount").html();;
	$("#ModalPharmacyTypeOfAccount").modal({backdrop:"static"});
	$("#ModalPharmacyTypeOfAccount").modal("show");
	
	/* REFRESH DATATABLE */
	$("#typeOfAccount_tbl").DataTable().ajax.reload();
}
/*================================== MARVIN : END : DM STOCK PROCESS ==================================*/

/*================================== ROMEL : START : DELIVERIES ==================================*/

window.modalDeliverisEditHTML= "";
window.modalDeliverisAddHTML= "";

function deliveries(){
	
	window.deliveries_tbl = "";

	/* CHECKBOX ID COUNTER */
	var checkbox_id = 0;
	
	/* GET DELIVERIES LIST */
	window.deliveries_tbl = $("#deliveries_tbl").DataTable({
		
		ajax : "<?php echo site_url('Pharmacy/deliveries'); ?>",
		columns : [
		/* CHECKBOX FOR DELETION */
			{ render : function(type, data, row){
				return '<input type="checkbox" name="deliveries[]" class="deliveries" id="deliveries_'+checkbox_id+++'" />';
			}},
			{ data : "delno" },
			{ data : "deldteas" },
			{ render : function(type, data, row){
				return (row.wardcode == '001' ? 'Associated Drugs Inc.' : (row.wardcode == '002' ? 'Pharma Trans' : ''));
			}},
			{ render : function(type, data, row){
				return (row.itemtype == 'DM' ? 'Drugs and Medicine' : (row.itemtype == 'MS' ? 'Medical Supplies' : 'Supplies and Equipments'));
			}},
			{ data : "c_description" },
			{ data : "delqty" },
			{ data : "expiredte" },
			{ render : function(type, data, row){
				return (row.itemcode == 'DRUMC' ? 'Drugs and Medicines (Consignment)' : (row.itemcode == 'DRUME' ? 'Drugs and Medicines' : (row.itemcode == 'DRUMX' ? 'NonDrugs / Supplies (Consignment)' : '')));
			}},
			{ render : function(type, data, row){
				return (row.suplind == 'P' ? 'Procured' : (row.suplind == 'D' ? 'Donation' : (row.suplind == 'R' ? 'Received' : '')));
			}}
		],
		ordering : false
	});
}

/* EDIT DELIVERIES */
$("#deliveries_tbl").on("click", "tr", function(e){
	
	/* FOR DELETE CHECKBOX EVENT */
	if($(e.target).is(".deliveries"))
	{
		var data = window.deliveries_tbl.row(this).data();
		var html = "";
		
		if($("#"+e.target.id+"").is(":checked"))
		{
			html += "<input type='hidden' class='input_"+e.target.id+"' name='dmdcomb[]' value='"+data.dmdcomb+"' />";
			html += "<input type='hidden' class='input_"+e.target.id+"' name='dmdctr[]' value='"+data.dmdctr+"' />";
			html += "<input type='hidden' class='input_"+e.target.id+"' name='intkey[]' value='"+data.intkey+"' />";
			
			$("#deliveries_tbl tbody").append(html);
		}
		else
		{
			$(".input_"+e.target.id+"").remove();
		}
	}
	/* FOR EDIT EVENT */
	else
	{
		var data = window.deliveries_tbl.row(this).data();
		
		$.post("<?php echo site_url('Pharmacy/edit_deliveries'); ?>",
		{
			"data" : data
		},
		function(result)
		{
			/* VISIBLE INPUT */
			$('#delno_edit').val(result.delno);
			$('#deldteas_edit').val(result.deldteas);
			$('#wardcode_edit').html(result.wardcode);
			$('#itemtype_edit').html(result.itemtype);
			$('#delivery_dmdcomb_edit').val(result.c_description);
			$('#delqty_edit').val(result.delqty);
			$('#expiredte_edit').val(result.expiredte);
			$('#itemcode_edit').html(result.itemcode);
			$('#suplind_edit').html(result.suplind);
			
			/* HIDDEN INPUT */
			$("#dmdcomb_delivery_edit").val(result.dmdcomb);
			$("#dmdctr_delivery_edit").val(result.dmdctr);
			$("#intkey_delivery_edit").val(result.intkey);
			
			/* STORE ORIG MODAL HTML */
			window.modalDeliverisEditHTML = $("#ModalPharmacyDeliveriesEdit").html();
			
			/* PREVENT MODAL CLOSE */
			$("#ModalPharmacyDeliveriesEdit").modal({"backdrop" : "static"});
			$('#ModalPharmacyDeliveriesEdit').modal('show');
		},"json");	
	}
});

/* GET ITEMTYPE */
$("#itemtype_add").on("change",function(){
	
	var itemtype = $(this).val();
	
	$.post("<?php echo site_url('Pharmacy/add_deliveries'); ?>",
	{
		"itemtype" : itemtype
	},
	function(result)
	{
		console.log(itemtype)
	},"json");
});

/* SUBMIT EDIT DELIVERIES */
$("#process_edit_deliveries").on("submit", function(e){
	
	e.preventDefault();
	
	$.ajax({
		
		type : "POST",
		url : "<?php echo site_url('Pharmacy/process_edit_deliveries'); ?>",
		data : $("#process_edit_deliveries").serialize(),
		success : function(result){
			
			var obj = JSON.parse(result);
			
			if(obj.status)
			{
				toastr.success(obj.msg, 'Success!');
				
				/*RESET EDIT DELIVERY MODAL HTML */
				window.modalDeliverisEditHTML = "";
				
				/* CLOSE EDIT DELIVERY MODAL */
				$('#ModalPharmacyDeliveriesEdit').modal('hide');
				
				/* REFRESH DATATABLE */
				$("#deliveries_tbl").DataTable().ajax.reload();
			}
			else
			{
				toastr.success(obj.msg, 'Warning!');
			}
		}
	});
});

/* ADD DELIVERIES */
$("#btn_delivery_add").on("click", function(){

	$.post("<?php echo site_url('Pharmacy/add_deliveries'); ?>",
	{
		"data" : "JSON"
	},
	function(result)
	{
		/* VISIBLE INPUT */
		$('#delno_add').val();
		$('#deldteas_add').val();
		$('#wardcode_add').html(result.wardcode);
		$('#itemtype_add').html(result.itemtype);
		$('#delivery_dmdcomb_add').html(result.dmdcomb);
		$('#delqty_add').val();
		$('#expiredte_add').val();
		$('#itemcode_add').html(result.itemcode);
		$('#suplind_add').html(result.suplind);
	
		/* STORE ORIG MODAL HTML */
		window.modalDeliverisAddHTML = $("#ModalPharmacyDeliveriesAdd").html();
		/* PREVENT MODAL CLOSE */
		$("#ModalPharmacyDeliveriesAdd").modal({"backdrop" : "static"});
		$('#ModalPharmacyDeliveriesAdd').modal('show');
	},"json");
});



/* SUBMIT ADD DELIVERIES */
$("#process_add_deliveries").on("submit", function(e){
	
	e.preventDefault();
	
	$.ajax({
		
		type : "POST",
		url : "<?php echo site_url('Pharmacy/process_add_deliveries'); ?>",
		data : $("#process_add_deliveries").serialize(),
		success : function(result){
			
			var obj = JSON.parse(result);
			
			if(obj.status)
			{
				toastr.success(obj.msg, 'Success!');
				
				/*RESET ADD DELIVERY MODAL HTML */
				window.modalDeliverisAddHTML = "";
				
				/* CLOSE ADD DELIVERY MODAL */
				$('#ModalPharmacyDeliveriesAdd').modal('hide');
				
				/* REFRESH DATATABLE */
				$("#deliveries_tbl").DataTable().ajax.reload();
			}
			else
			{
				toastr.success(obj.msg, 'Warning!');
			}
		}
	});
});

/* SUBMIT DELETE DELIVERIES */
$("#process_deliveries").on("submit", function(e){
	
	e.preventDefault();
	
	$.ajax({
		
		type : "POST",
		url : "<?php echo site_url('Pharmacy/process_delete_deliveries'); ?>",
		data : $("#process_deliveries").serialize(),
		success : function(result){
			
			var obj = JSON.parse(result);
			
			if(obj.status)
			{
				toastr.success(obj.msg, 'Success!');
				$("#deliveries_tbl").DataTable().ajax.reload();
			}
			else
			{
				toastr.success(obj.msg, 'Warning!');
			}
		}
	});
})

function clearEditDeliveriesModal(){
	
	/*RESET EDIT DELIVERY MODAL HTML */
	window.modalDeliverisEditHTML = "";
	
	/* REFRESH DATATABLE */
	$("#deliveries_tbl").DataTable().ajax.reload();
}

function clearAddDeliveriesModal(){

	/*RESET ADD DELIVERY MODAL HTML */
	window.modalDeliverisAddHTML = "";

	/* REFRESH DATATABLE */
	$("#deliveries_tbl").DataTable().ajax.reload();
}
/*================================== ROMEL : END : DELIVERIES ==================================*/

/*================================== ROMEL : START : ADJUSTMENT ==================================*/

window.modalAdjustmentEditHTML= "";
window.modalAdjustmentAddHTML= "";

function adjustment(){
	
	window.adjustment_tbl = "";

	/* CHECKBOX ID COUNTER */
	var checkbox_id = 0;
	
	/* GET DELIVERIES LIST */
	window.adjustment_tbl = $("#adjustment_tbl").DataTable({
		
		ajax : "<?php echo site_url('Pharmacy/adjustment'); ?>",
		columns : [
			{ data : "refno" },
			{ data : "trandate" },
			{ render : function(type, data, row){
				return (row.itemtype == 'DM' ? 'Drugs and Medicine' : (row.itemtype == 'MS' ? 'Medical Supplies' : 'Supplies and Equipments'));
			}},
			{ data : "c_description" },
			{ data : "stockqty" },
			{ data : "uom" },
			{ data : "qty"},
			{ render : function(type, data, row){
				return (row.plusminus == '+' ? 'PLUS' : (row.plusminus == '-' ? 'MINUS' : ''));
			}},
			{ render : function(type, data, row){
				return (row.itemcode == 'DRUMC' ? 'Drugs and Medicines (Consignment)' : (row.itemcode == 'DRUME' ? 'Drugs and Medicines' : (row.itemcode == 'DRUMX' ? 'NonDrugs / Supplies (Consignment)' : '')));
			}},
			{ data : "adjremarks" }
		],
		ordering : false
	});
}

	/* EDIT ADJUSTMENT */
	$("#adjustment_tbl").on("click", "tr", function(e){
		
		e.preventDefault();
		
		var data = window.adjustment_tbl.row(this).data();

		
		$.post("<?php echo site_url('Pharmacy/edit_adjustment'); ?>",
		{
			"data" : data
		},
		function(result)
		{
			console.log(result);
			/* HIDDEN INPUT */
			$("#altcode_adjustment_edit").val(result.altcode);
			$("#dmdctr_adjustment_edit").val(result.dmdctr);
			$("#intkey_adjustment_edit").val(result.intkey);
			$("#dmdcomb_edit").val(result.dmdcomb);
			
			/* VISIBLE INPUT */
			$("#refno_edit").val(result.refno);
			$("#trandate_edit").val(result.trandate);
			$("#itemtype_adjustment_edit").html(result.itemtype);
			$("#adjustment_dmdcomb_edit").val(result.c_description);
			$("#stockqty_edit").val(result.stockqty);
			$("#uom_edit").val(result.uom);
			$("#qty_edit").val(result.qty);
			$("#plusminus_edit").html(result.plusminus);
			$("#itemcode_adjustment_edit").html(result.itemcode);
			$("#adjremarks_edit").val(result.adjremarks);
			
			/* STORE ORIG MODAL HTML */
			window.modalAdjustmentEditHTML = $("#ModalPharmacyAdjustmentEdit").html();
			
			/* PREVENT MODAL CLOSE */
			$("#ModalPharmacyAdjustmentEdit").modal({backdrop: "static"});
			$('#ModalPharmacyAdjustmentEdit').modal('show');
			
		},"json");
		
	});

	/* SUBMIT EDIT ADJUSTMENT */
	$("#process_edit_adjustment").on("submit", function(e){
		
		e.preventDefault();
		
		$.ajax({
			
			type : "POST",
			url : "<?php echo site_url('Pharmacy/process_edit_adjustment'); ?>",
			data : $("#process_edit_adjustment").serialize(),
			success : function(result){
				
				var obj = JSON.parse(result);
				
				if(obj.status)
				{
					toastr.success(obj.msg, 'Success!');
					
					/*RESET EDIT ADJUSTMENT MODAL HTML */
					window.modalAdjustmentEditHTML = "";
					
					/* CLOSE EDIT ADJUSTMENT MODAL */
					$('#ModalPharmacyAdjustmentEdit').modal('hide');
					
					/* REFRESH DATATABLE */
					$("#adjustment_tbl").DataTable().ajax.reload();
				}
				else
				{
					toastr.success(obj.msg, 'Warning!');
				}
			}
		});
	});
	
	/* ADD ADJUSTMENT */
	$("#btn_adjustment_add").on("click", function(){

		$.post("<?php echo site_url('Pharmacy/add_adjustment'); ?>",
		{
			"data" : "JSON"
		},
		function(result)
		{
			/* VISIBLE INPUT */
			$("#refno_add").val(result.refno);
			$("#trandate_add").val(result.trandate);
			$("#itemtype_adjustment_add").html(result.itemtype);
			$("#adjustment_dmdcomb_add").val(result.c_description);
			$("#stockqty_add").val(result.stockqty);
			$("#uom_add").val(result.uom);
			$("#qty_add").val(result.qty);
			$("#plusminus_add").html(result.plusminus);
			$("#itemcode_adjustment_add").html(result.itemcode);
			$("#adjremarks_add").val(result.adjremarks);
		
			/* STORE ORIG MODAL HTML */
			window.modalAdjustmentAddHTML = $("#ModalPharmacyAdjustmentAdd").html();
			/* PREVENT MODAL CLOSE */
			$("#ModalPharmacyAdjustmentAdd").modal({"backdrop" : "static"});
			$('#ModalPharmacyAdjustmentAdd').modal('show');
		},"json");
	});


function clearEditAdjustmentModal(){
	
	/*RESET EDIT ADJUSTMENT MODAL HTML */
	window.modalAdjustmentEditHTML = "";
	
	/* REFRESH DATATABLE */
	$("#adjustment_tbl").DataTable().ajax.reload();
}

function clearAddAdjustmentModal(){

	/*RESET ADD ADJUSTMENT MODAL HTML */
	window.modalAdjustmentAddHTML = "";

	/* REFRESH DATATABLE */
	$("#adjustment_tbl").DataTable().ajax.reload();
}

/*================================== ROMEL : END : ADJUSTMENT ==================================*/