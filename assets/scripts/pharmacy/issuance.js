/* REMOVE MEDICINES DATATABLE AND RESET HTML MODAL */
function getEncounterIssuance(data){
	
	window.id_counter = 0;

	var html = "";
			
	$("#issuance_tbl tbody").empty();
	
	$("#hpercode").val(data.encounter[0].hpatcode);
	$("#henctr").val(data.encounter[0].toecode + " - " + data.encounter[0].admdate);
	$("#lastname").val(data.encounter[0].patlast);
	$("#firstname").val(data.encounter[0].patfirst);
	$("#middlename").val(data.encounter[0].patmiddle);
	$("#patbdate").val(data.encounter[0].patbdate);
	
	for(i=0; i<data.issuance.length; i++)
	{
		var checkbox 		= "";
		var itemdesc		= "";
		var chargeslip 		= "";
		var qty_ord			= "";
		var qty 			= "";
		var price			= "";
		var total_amount 	= "";
		var orderby 		= "";
		
		/* FOR CHECKBOX */
		!data.issuance[i].pcchrgcod ? checkbox = "<input type='checkbox' name='issue["+window.id_counter+"]' />" : checkbox = "";
		
		/* FOR ITEMDESC */
		!data.issuance[i].pcchrgcod ? itemdesc = "<td id='td_gendesc_"+window.id_counter+"'><input type='hidden' name='dmdcomb[]' value='"+data.issuance[i].dmdcomb+"' />"+data.issuance[i].item_description+"</td>" : itemdesc = "<td>"+data.issuance[i].item_description+"</td>";
		
		/* FOR CHARGESLIP */
		!data.issuance[i].pcchrgcod ? chargeslip = "<td><input type='text' class='form-control form-control-md' name='pcchrgcod[]' size='10' /></td>" : chargeslip = "<td>"+data.issuance[i].pcchrgcod+"</td>";
		
		/* FOR QTY_ORD */
		!data.issuance[i].pcchrgcod ? qty_ord = "<td>"+data.issuance[i].pchrgqty+"</td><input type='hidden' id='td_pchrgqty_"+window.id_counter+"' name='pchrgqty[]' value='"+data.issuance[i].pchrgqty+"' size='5' />" : qty_ord = "<td>"+data.issuance[i].pchrgqty+"</td>";
		
		/* FOR QTY */
		!data.issuance[i].pcchrgcod ? qty = "<td><input type='text' class='form-control form-control-md qty_"+window.id_counter+"' id='"+window.id_counter+"' onkeyup='qtyCompute(id)' name='qty[]' size='5' /></td>" : qty = "<td>"+data.issuance[i].qtyissued+"</td>";
		
		/* FOR PRICE */
		!data.issuance[i].pcchrgcod ? price = "<td><input type='text' class='form-control form-control-md pchrgup_"+window.id_counter+"' id='"+window.id_counter+"' onkeyup='pchrgupCompute(id)' name='pchrgup[]' value='"+data.issuance[i].pchrgup+"' size='5' /></td>" : price = "<td>"+data.issuance[i].pchrgup+"</td>";
		
		/* FOR TOTAL AMOUNT */
		!data.issuance[i].pcchrgcod ? total_amount = "<td id='td_pcchrgamt_"+window.id_counter+"'></td><input type='hidden' name='pcchrgamt[]' class='pcchrgamt' id='pcchrgamt_"+window.id_counter+"' value='' />" : total_amount = "<td>"+data.issuance[i].pcchrgamt+"</td>";
		
		/*FOR ORDERBY */
		data.issuance[i].orderby ? orderby = data.issuance[i].orderby[0].fullname : orderby = "";
		
		var docointkey 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='docointkey[]' value='"+data.issuance[i].docointkey+"' />" : "";
		var hpercode 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='hpercode[]' value='"+data.issuance[i].hpercode+"' />" : "";
		var dmdctr 		= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='dmdctr[]' value='"+data.issuance[i].dmdctr+"' />" : "";
		var dmdprdte 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='dmdprdte[]' value='"+data.issuance[i].dmdprdte+"' />" : "";
		var dmhdrsub 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='dmhdrsub[]' value='"+data.issuance[i].orderfrom+"' />" : "";
		var issuedby 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='issuedby[]' value='RN-02' />" : "";
		var rxooccid 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='rxooccid[]' value='1' />" : "";
		var rxoref 		= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='rxoref[]' value='1' />" : "";
		var rxostatus 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='rxostatus[]' value='A' />" : "";
		var rxolock 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='rxolock[]' value='N' />" : "";
		var rxoupsw 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='rxoupsw[]' value='N' />" : "";
		var rxoconfd 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='rxoconfd[]' value='N' />" : "";
		var ordcon 		= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='ordcon[]' value='NEWOR' />" : "";
		var orderupd 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='orderupd[]' value='ACTIV' />" : "";
		var entryby 	= !data.issuance[i].pcchrgcod ? "<input type='hidden' name='entryby[]' value='RN-02' />" : "";

		html += "<tr>"+docointkey+"<input type='hidden' name='enccode[]' id='enccode' value='"+data.issuance[0].enccode+"' /> '"+hpercode+"'"+dmdctr+"'"+dmdprdte+"'"+dmhdrsub+"'"+issuedby+"'"+rxooccid+"'"+rxoref+"'"+rxostatus+"'"+rxolock+"'"+rxoupsw+"'"+rxoconfd+"'"+ordcon+"'"+orderupd+"'"+entryby+"'<td align='center'>"+checkbox+"</td>'"+chargeslip+"'"+itemdesc+"'"+qty_ord+"'"+qty+"'"+price+"'"+total_amount+"'<td>"+data.issuance[i].dodate+"</td>'<td>"+orderby+"</td>'</tr>";
		
		/* INCREMENT */
		!data.issuance[i].pcchrgcod ? window.id_counter++ : "";
	}
	
	$("#issuance_tbl tbody").append(html);
	
	/* STORE ORIG SUMMARY HTML */
	window.summary = $("#issuance_foot").html();
	$("#issuance_foot").show();
}

function clearDataTables(){
	
	$("#issuance_meds_tbl").DataTable().destroy();
	$("#tbl_encounter").DataTable().destroy();
	$("#modalSuppliesMedicines").html(window.modalHTML);
}

/* RESET ISSUANCE HTML MODAL */
function clearIssuanceModal(){
	
	/* RESET SUMMARY */
	$("#issuance_foot").html(window.summary);
	$("#issuance_foot").hide();
	
	/* RESET APPENDED INPUT ID */
	window.id_counter = 0;
	
	$("#hpercode").val("");
	$("#henctr").val("");
	$("#lastname").val("");
	$("#firstname").val("");
	$("#middlename").val("");
	$("#select_items").val("");
	$("input[type='radio'][name='radio_items']").prop("checked", false);
	$("#issuance_tbl tbody").empty();
	
	location.reload();
}

/* QTY KEYUP TOTAL COMPUTATION */
function qtyCompute(id){
	
	var qty = $(".qty_"+id).val();
	var price = $(".pchrgup_"+id).val();
	var times = "*";
	var total = eval(qty + times + price);
	$("#pcchrgamt_"+id).val(total);
	$("#td_pcchrgamt_"+id).html(total);
	
	var tot = 0;
	var count = 0;
	$(".pcchrgamt").each(function(){
		
		tot += Number($(this).val());
		count++;
	});
	$("#total_items").html(count);
	$("#total_price_items").html(tot);
	$("#grand_total").html(tot);
}

/* PRICE KEYUP TOTAL COMPUTATION */
function pchrgupCompute(id){
	
	var qty = $(".qty_"+id).val();
	var price = $(".pchrgup_"+id).val();
	var times = "*";
	var total = eval(qty + times + price);
	$("#pcchrgamt_"+id).val(total);
	$("#td_pcchrgamt_"+id).html(total);
	
	var tot = 0;
	var count = 0;
	$(".pcchrgamt").each(function(){
		
		tot += Number($(this).val());
		count++;
	});
	$("#total_items").html(count);
	$("#total_price_items").html(tot);
	$("#grand_total").html(tot);
}
