<?php include_once('issuance_modals.php'); ?>
<?php include_once('return_modals.php'); ?>
<?php include_once('replenish_modal.php'); ?>
<?php include_once('supplies_stock_modal.php'); ?>
<?php include_once('encounter_modal.php'); ?>
<?php include_once('stock_modals.php'); ?>
<?php include_once('dmstock_modal.php'); ?>
<?php include_once('deliveries_modal.php'); ?>
<style>

table#drugsAndMeds_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#supplies_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="row">
	<!-- temporary disable
	<div class="col-md-3">
		<?php //echo ViewPharmacyInformation();?>
	</div> -->
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-body table-responsive">
				<div class="h3 text text-success"><i class="fa fa-user"></i>&nbsp<?php echo $header;?></div>
				<ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="drugsAndMeds-tab" data-toggle="tab" href="#drugsAndMeds" role="tab" aria-controls="drugsAndMeds" aria-expanded="true"><i class="fa fa-bed fa-2x"></i>&nbsp DRUGS & MEDICINES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-primary" id="supplies-tab" data-toggle="tab" href="#supplies" role="tab" aria-controls="supplies"><i class="fa fa-stethoscope  fa-2x"></i>&nbsp SUPPLIES</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="drugsAndMeds" role="tabpanel" aria-labelledby="drugsAndMeds-tab">
						<!-- MARVIN : START : INCLUDE DRUGS AND MEDICINE BUTTONS -->
						<br>
						<div>
							<div class="btn-group pull-left" role="group" aria-label="">
								<button class="btn btn-success btn-md ModalPharmacyIssuance">Issuance</button>
								<button class="btn btn-success btn-md ModalPharmacyReturn">Return</button>
								<button class="btn btn-success btn-md ModalPharmacyReplenish">Replenish</button>
								<button class="btn btn-success btn-md ModalPharmacySuppliesStock">Supplies Stock</button>
								<button class="btn btn-success btn-md ModalPharmacyDMStock">DM Stock</button>
								<button class="btn btn-success btn-md ModalPharmacyDeliveries">Deliveries</button>
							</div>
						</div>
						<br>
						<br>
						<!-- MARVIN : END : INCLUDE DRUGS AND MEDICINE BUTTONS -->
						<br>
						<table id="drugsAndMeds_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
							<thead class="thead-dark">
								<tr>
									<th>PATIENT NAME</th>
									<th>DATE OF ORDER</th>
									<th>ITEM DESCRIPTION</th>
									<th>CHARGE SLIP</th>
									<th>QTY</th>
									<th>UNITPRICE</th>
									<th>AMOUNT</th>
									<th>UNIT</th>
									<th>QTY ISSUED</th>
									<th>BALANCE</th>
									<th>STATUS OF ORDER</th>
								</tr>
							</thead>
							<tfoot class="thead-dark"></tfoot>
						</table>
					</div>
					<div class="tab-pane fade" id="supplies" role="tabpanel" aria-labelledby="supplies-tab">
						<br>
						<table id="supplies_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
							<thead class="thead-dark">
								<tr>
									<th></th>
									<th width="140px">HEALTH RECORD NO</th>
									<th>PATIENT NAME</th>
									<th>SEX</th>
									<th>ENCOUNTER</th>
									<th>DATE</th>
									<th width="50px"></th>
								</tr>
							</thead>
							<tfoot class="thead-dark">
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th width="50px"></th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
</div>

<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
<!-- MARVIN : START : CALL PHARMACY SCRIPT -->
<script src="<?php echo base_url()?>assets/scripts/pharmacy/pharmacy.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/issuance.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/return.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/replenish.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/supplies_stock.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/dmstock.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/deliveries.js"></script>
<!-- MARVIN : END : CALL PHARMACY SCRIPT -->
<script type="text/javascript">

$(document).ready(function(){
	
	var d 		= new Date();
	var year 	= d.getFullYear();
	var month 	= d.getMonth() + 1;
	var day 	= d.getDate();
	var hour 	= d.getHours();
	var min 	= d.getMinutes();
	var sec 	= d.getSeconds();
	
	/*PharmacyInformation('RN12566544');*/
	doctors_order();
	
	/* INITIALIZE MODALS */
	modalsInit();
	
	/*================================== MARVIN : START : ISSUANCE PROCESS ==================================*/
	
	/* USE TO RESET MODAL */
	window.modalHTML 	= "";
	
	/* USE TO RESET APPENDED INPUT ID */
	window.id_counter 	= 0;
	
	/* HIDE SUMMARY */
	window.summary		= "";
	$("#issuance_foot").hide();
	
	/* GET ISSUANCE LIST */
	$("#btn_retrieve").on('click', function(){

		var hpercode 	= $("#hpercode").val();
		var lastname 	= $("#lastname").val();
		var firstname 	= $("#firstname").val();
		var middlename 	= $("#middlename").val();
		
		$.post("<?php echo site_url('Pharmacy/issuance'); ?>",
		{
			"hpercode" 		: hpercode,
			"lastname" 		: lastname,
			"firstname" 	: firstname,
			"middlename" 	: middlename
		},
		function(data)
		{
			/* GET ENCOUNTER */
			$("#btn_encouter").on('click',function(){
		
				$("#modalEncounter").modal({backdrop: "static"});
				$("#modalEncounter").modal('show');
				
				$("#td_hpercode").html(data.encounter[0].hpatcode);
				$("#td_name").html(data.encounter[0].patlast + ", " + data.encounter[0].patfirst + " " + data.encounter[0].patmiddle);
				$("#td_bday").html(data.encounter[0].patbdate);
				
				var encounter = $('#tbl_encounter').DataTable({
					"data" : data.encounter,
					"columns" : [
						{ data : "admdate" },
						{ data : "toecode" },
						{ data : "disdate" },
						{ data : "diag" }
					],
					"order" : [[0, "desc"]],
					"columnDefs" : [{
						targets : [0,1,2,3],
						orderable : false
					}]
				});
				
				$("#tbl_encounter").on("click", "tr", function(){
					
					var enc_data = encounter.row(this).data();
					
					$.post("<?php echo site_url('Pharmacy/issuance'); ?>",
					{
						"hpercode" : enc_data.hpatcode,
						"enccode" : enc_data.enccode
					},
					function(data)
					{
						getEncounterIssuance(data);
					},"json");
				});
			});
			
			/* GET EXISTING ISSUANCE DATA */
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
				
				html += "<tr>
					+"+docointkey+";
					+'<input type='hidden' name='enccode[]' id='enccode' value='"+data.issuance[0].enccode+"' /> ';
					+'"+hpercode+"';
					+'"+dmdctr+"';
					+'"+dmdprdte+"';
					+'"+dmhdrsub+"';
					+'"+issuedby+"';
					+'"+rxooccid+"';
					+'"+rxoref+"';
					+'"+rxostatus+"';
					+'"+rxolock+"';
					+'"+rxoupsw+"';
					+'"+rxoconfd+"';
					+'"+ordcon+"';
					+'"+orderupd+"';
					+'"+entryby+"';
					+'<td align='center'>"+checkbox+"</td>';
					+'"+chargeslip+"';
					+'"+itemdesc+"';
					+'"+qty_ord+"';
					+'"+qty+"';
					+'"+price+"';
					+'"+total_amount+"';
					+'<td>"+data.issuance[i].dodate+"</td>';
					+'<td>"+orderby+"</td>';
				+'</tr>";
				
				/* INCREMENT */
				!data.issuance[i].pcchrgcod ? window.id_counter++ : "";
			}
			
			$("#issuance_tbl tbody").append(html);
			
			/* STORE ORIG SUMMARY HTML */
			window.summary = $("#issuance_foot").html();
			$("#issuance_foot").show();
			
		},"json");
	});
	
	/* GET SUPPLIES/MEDICINES */
	$("input[type='radio'][name='radio_items']").on('change', function(){
		
		/* GET MEDICINES */
		if($(this).val() == "medicines")
		{
			$("#select_items").removeAttr("disabled");
			
			$("#select_items").on('change', function(){
				
				/* STORE ORIG MODAL HTML */
				window.modalHTML = $("#modalSuppliesMedicines").html();
				
				/* PREVENT MODAL CLOSE */
				$("#modalSuppliesMedicines").modal({backdrop: "static"});
				$('#modalSuppliesMedicines').modal('show');
				
				var items = $(this).val();
				
				/* DISPLAY MEDICINES DATATABLE */
				var supmeds_table = $('#issuance_meds_tbl').DataTable({
					"ajax" : "<?php echo site_url('Pharmacy/medicines/"+items+"'); ?>",
					"columns" : [
						{ data : "GENDESC" },
						{ data : "dmselprice" },
						{ data : "reorder_level" },
						{ data : "stockbal" },
					]
				});
				
				var html = "";

				/* APPEND ITEM IN ISSUANCE TABLE */
				$('#issuance_meds_tbl tbody').on('click', 'tr', function(){
					
					var data = supmeds_table.row(this).data();
					
					html += "<tr>
						+'<input type='hidden' name='enccode[]' value='"+$("#enccode").val()+"' />';
						+'<input type='hidden' name='hpercode[]' value='"+$("#hpercode").val()+"' />';
						+'<input type='hidden' name='dmdctr[]' value='"+data.dmdctr+"' />';
						+'<input type='hidden' name='dmdprdte[]' value='"+data.dmdprdte+"' />';
						+'<input type='hidden' name='dmhdrsub[]' value='"+data.dmhdrsub+"' />';
						+'<input type='hidden' name='issuedby[]' value='RN-02' />';
						+'<input type='hidden' name='rxooccid[]' value='1' />';
						+'<input type='hidden' name='rxoref[]' value='1' />';
						+'<input type='hidden' name='rxostatus[]' value='A' />';
						+'<input type='hidden' name='rxolock[]' value='N' />';
						+'<input type='hidden' name='rxoupsw[]' value='N' />';
						+'<input type='hidden' name='rxoconfd[]' value='N' />';
						+'<input type='hidden' name='ordcon[]' value='NEWOR' />';
						+'<input type='hidden' name='orderupd[]' value='ACTIV' />';
						+'<td align='center'><input type='checkbox' name='issue["+window.id_counter+"]' /></td>';
						+'<td><input type='text' class='form-control form-control-md' name='pcchrgcod[]' size='10' /></td>';
						+'<td id='td_gendesc_"+window.id_counter+"'><input type='hidden' name='dmdcomb[]' value='"+data.dmdcomb+"' />"+data.GENDESC+"</td>';
						+'<td><input type='text' class='form-control form-control-md' id='td_pchrgqty_"+window.id_counter+"' name='pchrgqty[]' size='5' /></td>';
						+'<td><input type='text' class='form-control form-control-md qty_"+window.id_counter+"' id='"+window.id_counter+"' onkeyup='qtyCompute(id)' name='qty[]' size='5' /></td>';
						+'<td><input type='text' class='form-control form-control-md pchrgup_"+window.id_counter+"' id='"+window.id_counter+"' onkeyup='pchrgupCompute(id)' name='pchrgup[]' value='"+data.dmselprice+"' size='5' /></td>';
						+'<td id='td_pcchrgamt_"+window.id_counter+"'></td><input type='hidden' name='pcchrgamt[]' class='pcchrgamt' id='pcchrgamt_"+window.id_counter+"' value='' />';
						+'<td>"+month+"/"+day+"/"+year+" "+hour+":"+min+":"+sec+"</td>';
						+'<td><input type='hidden' name='entryby[]' value='RN-02' /></td>';
					+'</tr>";
					
					$("#issuance_tbl tbody").append(html);
					window.id_counter++;
					
					/* STORE ORIG SUMMARY HTML */
					window.summary = $("#issuance_foot").html();
					$("#issuance_foot").show();
				});
				
			});
		}
		/* GET SUPPLIES */
		else
		{
			$("#select_items").prop("disabled", true);
		}
	});
	
	/* GENERATE CHARGE SLIP */
	$("#btn_chargeslip").on("click", function(){
		
		var pcchrgcod 	= $("input[type='text'][name='pcchrgcod[]']").val();
		var pchrgqty 	= $("input[type='text'][name='pchrgqty[]']").val();
		var qty 		= $("input[type='text'][name='qty[]']").val();
		
		if(pcchrgcod == "" && pchrgqty != "" && qty != "")
		{
			$.post("<?php echo site_url('Pharmacy/charge_slip'); ?>",
			{
				
			},
			function(data)
			{
				/* PREVENT MODAL CLOSE */
				$("#chargeSlip").modal({backdrop: "static"});
				$('#chargeSlip').modal('show');
				
				/* CHARGE SLIP DATA */
				$("#cost_center").html("Pharmacy");
				$("#chargeslip_no").html(data.pcchrgcod);
				$("#hospital_no").html($("#hpercode").val());
				$("#chargeslip_date").html("08/28/2020");
				$("#pat_bdate").html("DOB: " + $("#patbdate").val());
				$("#patients_name").html($("#lastname").val() + ", " + $("#firstname").val() + " " + $("#middlename").val());
				
				var i_qty 			= "";
				var i_unit 			= "";
				var times 			= "*";
				var i_total 		= "";
				var i_grand_total 	= 0;
				
				for(i=0; i<window.id_counter; i++)
				{
					i_qty = $("#td_pchrgqty_"+i+"").val();
					i_unit = $(".pchrgup_"+i+"").val();
					i_total = eval(i_qty + times + i_unit);
					i_grand_total += Number(i_total);
					
					$("#charge_item_tr").after("<tr>
					+'<td align='center'>"+$("#td_gendesc_"+i+"").text()+"</td>';
					+'<td align='center'>"+$("#td_pchrgqty_"+i+"").val()+"</td>';
					+'<td align='center'>"+$(".pchrgup_"+i+"").val()+"</td>';
					+'<td align='center'>"+i_total+"</td>';
					+'</tr>");
				}
				
				$("#charge_total").html(i_grand_total);
				
				$("input[type='text'][name='pcchrgcod[]']").val(data.pcchrgcod);
			},"JSON");			
		}
		else
		{
			alert("Qty Ordered, Qty Issued and Price must not be empty!");
		}
	});
	
	/* SUBMIT ISSUANCE FORM */
	$("#process_issuance").on("submit", function(e){
		
		/* CHARGE SLIP */
		if($("input[type='text'][name='pcchrgcod[]']").val() == "")
		{
			e.preventDefault();
			alert("Charge Slip # is required!");
		}
		else
		{
			e.preventDefault();
			
			$.ajax({
				type : "POST",
				url : "<?php echo site_url('Pharmacy/process_issuance'); ?>",
				data : $("#process_issuance").serialize(),
				success : function(result){
					
					var obj = JSON.parse(result);
					
					if(obj.status)
					{
						alert(obj.msg);
						
						/* RESET INPUT ID */
						window.id_counter = 0;
						
						/* REMOVE MEDICINE DATABLE */
						$("#issuance_meds_tbl").DataTable().destroy();
						
						/* RESET MEDICINE MODAL */
						$("#modalSuppliesMedicines").html(window.modalHTML);
						
						/* RESET SUMMARY */
						$("#issuance_foot").html(window.summary);
						$("#issuance_foot").hide();
						
						$("#total_items").html("");
						$("#total_price_items").html("");
						$("#grand_total").html("");
						
						/* GET UPDATE ISSUANCE LIST */
						$("#btn_retrieve").click();
					}
					else
					{
						alert(obj.msg);
					}
				}
			});			
		}
	});
	
	/* PRINT */
	$("#btn_print").click(function(){
		
		printData();
	});
	
	function printData()
	{
	   var divToPrint=document.getElementById("chargeslip_tbl");
	   newWin = window.open("");
	   newWin.document.write(divToPrint.outerHTML);
	   newWin.print();
	   newWin.close();
	}
	
	$("#btn_clear").on('click', function(){
		
		clearIssuanceModal();
		clearReturnModal();
	});
	/*================================== MARVIN : END : ISSUANCE PROCESS ==================================*/
	
	/*================================== MARVIN : START : RETURN PROCESS ==================================*/
	
	/* USE TO RESET MODAL */
	window.modalReturnHTML 	= "";
	window.ret_id_counter	= 0;
	
	/* GET RETURN LIST */
	$("#btn_ret_retrieve").on('click', function(){

		var ret_hpercode 	= $("#ret_hpercode").val();
		var ret_lastname 	= $("#ret_lastname").val();
		var ret_firstname 	= $("#ret_firstname").val();
		var ret_middlename 	= $("#ret_middlename").val();
		
		$.post("<?php echo site_url('Pharmacy/return_supmed'); ?>",
		{
			"ret_hpercode" 		: ret_hpercode,
			"ret_lastname" 		: ret_lastname,
			"ret_firstname" 	: ret_firstname,
			"ret_middlename" 	: ret_middlename
		},
		function(result)
		{
			if(result.status)
			{
				/* GET ENCOUNTER */
				$("#btn_ret_encouter").on('click',function(){
			
					$("#modalEncounter").modal({backdrop: "static"});
					$("#modalEncounter").modal('show');
					
					$("#td_hpercode").html(result.msg.encounter[0].hpatcode);
					$("#td_name").html(result.msg.encounter[0].patlast + ", " + result.msg.encounter[0].patfirst + " " + result.msg.encounter[0].patmiddle);
					$("#td_bday").html(result.msg.encounter[0].patbdate);
					
					$('#tbl_encounter').DataTable({
						"data" : result.msg.encounter,
						"columns" : [
							{ data : "admdate" },
							{ data : "toecode" },
							{ data : "disdate" },
							{ data : "diag" }
						],
						"order" : [[0, "desc"]],
						"columnDefs" : [{
							targets : [0,1,2,3],
							orderable : false
						}]
					});
				});
				
				$("#return_tbl tbody").empty();
				
				$("#ret_hpercode").val(result.msg.encounter[0].hpatcode);
				$("#ret_henctr").val(result.msg.encounter[0].toecode + " - " + result.msg.encounter[0].admdate);
				$("#ret_lastname").val(result.msg.encounter[0].patlast);
				$("#ret_firstname").val(result.msg.encounter[0].patfirst);
				$("#ret_middlename").val(result.msg.encounter[0].patmiddle);
				
				var html 			= "";
				var return_hide 	= "";
				var qty_ret_read 	= "";
				
				for(i=0; i<result.msg.return.length; i++)
				{
					return_hide = result.msg.return[i].qty_ret != 0.00 ? 'hidden' : '';
					qty_ret_read = result.msg.return[i].qty_ret != 0.00 ? 'readonly' : '';
					
					/* FOR CHECKBOX */
					var docointkey 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='docointkey[]' value='"+result.msg.return[i].docointkey+"' />" : "";
					var enccode 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='enccode[]' value='"+result.msg.return[i].enccode+"' />" : "";
					var hpercode 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='hpercode[]' value='"+result.msg.return[i].hpercode+"' />" : "";
					var uomcode 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='uomcode[]' value='"+result.msg.return[i].uomcode+"' />" : "";
					var status 		= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='status[]' value='"+result.msg.return[i].status+"' />" : "";
					var rxolock 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='rxolock[]' value='"+result.msg.return[i].rxolock+"' />" : "";
					var updsw 		= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='updsw[]' value='"+result.msg.return[i].updsw+"' />" : "";
					var confdl 		= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='confdl[]' value='"+result.msg.return[i].confdl+"' />" : "";
					var entryby 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='entryby[]' value='"+result.msg.return[i].entryby+"' />" : "";
					var locacode 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='locacode[]' value='"+result.msg.return[i].locacode+"' />" : "";
					var dmdctr 		= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='dmdctr[]' value='"+result.msg.return[i].dmdctr+"' />" : "";
					var dmdprdte 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='dmdprdte[]' value='"+result.msg.return[i].dmdprdte+"' />" : "";
					var chrgcode 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='chrgcode[]' value='"+result.msg.return[i].chrgcode+"' />" : "";
					var issuedfrom 	= result.msg.return[i].qty_ret == 0.00 ? "<input type='hidden' name='issuedfrom[]' value='"+result.msg.return[i].issuedfrom+"' />" : "";
					
					html += "<tr>
						+'"+docointkey+"';
						+'"+enccode+"';
						+'"+hpercode+"';
						+'"+uomcode+"';
						+'"+status+"';
						+'"+rxolock+"';
						+'"+updsw+"';
						+'"+confdl+"';
						+'"+entryby+"';
						+'"+locacode+"';
						+'"+dmdctr+"';
						+'"+dmdprdte+"';
						+'"+chrgcode+"';
						+'"+issuedfrom+"';
						+'<td align='center'><input type='checkbox' name='returned["+window.ret_id_counter+"]' "+return_hide+" /></td>';
						+'<td><input type='hidden' name='pcchrgcod[]' value='"+result.msg.return[i].pcchrgcod+"' />"+result.msg.return[i].pcchrgcod+"</td>';
						+'<td><input type='hidden' name='dmdcomb[]' value='"+result.msg.return[i].dmdcomb+"' />"+result.msg.return[i].item_description+"</td>';
						+'<td><input type='hidden' name='qty[]' value='"+result.msg.return[i].qty+"' />"+result.msg.return[i].qty+"</td>';
						+'<td><input type='hidden' name='issuedte[]' value='"+result.msg.return[i].full_issuedte+"' />"+result.msg.return[i].issuedte+"</td>';
						+'<td><input type='text' size='1' id='qty_ret_"+i+"' class='form-control form-control-md' name='qty_ret[]' value='"+result.msg.return[i].qty_ret+"' "+qty_ret_read+" /></td>';
					+'</tr>";

					/* INCREMENT */
					!result.msg.return[i].qty_ret == 0.00 ? window.ret_id_counter++ : "";
				}
				
				$("#return_tbl tbody").append(html);
			}
			else
			{
				alert(result.msg);
			}
		},"json");
	});
	
	/* GET SUPPLIES/MEDICINES */
	$("input[type='radio'][name='radio_ret_items']").on('change', function(){
		
		/* GET MEDICINES */
		if($(this).val() == "ret_medicines")
		{
			$("#select_ret_items").removeAttr("disabled");
			
			$("#select_ret_items").on('change', function(){
				
				/* STORE ORIG MODAL HTML */
				window.modalHTML = $("#modalSuppliesMedicines").html();
				
				/* PREVENT MODAL CLOSE */
				$("#modalSuppliesMedicines").modal({backdrop: "static"});
				$('#modalSuppliesMedicines').modal('show');
				
				var items = $(this).val();
				
				/* DISPLAY MEDICINES DATATABLE */
				$('#issuance_meds_tbl').DataTable({
					"ajax" : "<?php echo site_url('Pharmacy/medicines/"+items+"'); ?>",
					"columns" : [
						{ data : "GENDESC" },
						{ data : "dmselprice" },
						{ data : "reorder_level" },
						{ data : "stockbal" },
					]
				});
			});
		}
		/* GET SUPPLIES */
		else
		{
			$("#select_items").prop("disabled", true);
		}
	});
	
	/* SUBMIT RETURN FORM */
	$("#process_return").on("submit", function(e){
		
		e.preventDefault();
		
		var flag = "";
		
		for(i=0; i<window.ret_id_counter; i++)
		{
			if($("input[type='checkbox'][name='returned["+i+"]']").is(":checked"))
			{
				if($("#qty_ret_"+i+"").val() != 0.00)
				{
					flag = true;
				}
				else
				{
					flag = false;
				}
			}
		}
		
		if(flag)
		{
			$.ajax({
				type : "POST",
				url : "<?php echo site_url('Pharmacy/process_return'); ?>",
				data : $("#process_return").serialize(),
				success : function(result){
					
					window.ret_id_counter = 0;
					alert("Successfully returned");
					$("#btn_ret_retrieve").click();
				}
			});
		}
		else
		{
			alert("Qty Returned must not be 0");
		}
	});
	
	$("#btn_ret_clear").on('click', function(){
		
		clearReturnModal();
	});
	/*================================== MARVIN : END : RETURN PROCESS ==================================*/
	
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
					html += "<tr>
						+'<input type='hidden' name='gendesc[]' value='"+result.msg[i].gendesc+"' />';
						+'<input type='hidden' name='dmdctr[]' value='"+result.msg[i].dmdctr+"' />';
						+'<input type='hidden' name='locacode[]' value='"+result.msg[i].locacode+"' />';
						+'<td><input type='hidden' name='requestfrom[]' value='"+result.msg[i].requestfrom+"' />"+result.msg[i].requestfrom+"</td>';
						+'<td><input type='hidden' name='wardname[]' value='"+result.msg[i].wardname+"' />"+result.msg[i].wardname+"</td>';
						+'<td><input type='hidden' name='dmdcomb[]' value='"+result.msg[i].dmdcomb+"' />"+result.msg[i].gendesc+"</td>';
						+'<td><input type='hidden' name='dtereq[]' value='"+result.msg[i].dtereq+"' />"+result.msg[i].date_req+"</td>';
						+'<td><input type='hidden' name='tmereq[]' value='"+result.msg[i].tmereq+"' />"+result.msg[i].time_req+"</td>';
						+'<td><input type='hidden' name='qtyreq[]' value='"+result.msg[i].qtyreq+"' />"+result.msg[i].qtyreq+"</td>';
						+'<td><input type='hidden' name='totqtyissue[]' value='"+result.msg[i].totqtyissue+"' />"+result.msg[i].totqtyissue+"</td>';
						+'<td>"+result.msg[i].stockbal+"</td>';
						+'<td>"+result.msg[i].qtyissue+"</td>';
						+'<td><input type='text' name='qtyissue[]' class='form-control form-control-md' id='qtyissue_"+i+"' size='1' /></td>';
					+'</tr>";
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
});
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

/* SUBMIT DELIVERIES */
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
/*================================== ROMEL : END : DELIVERIES ==================================*/

</script>
