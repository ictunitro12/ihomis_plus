<style>

table#tbl_issuance_issue.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#tbl_issuance_order.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#tbl_return_list.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="row">
	<div class="col-md-3">
		<?php echo ViewPatientInformation();?>
	</div>
	<div class="col-md-9">
		<div class="card card-accent-success">
			<div class="card-body table-responsive">
				<ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="issuance-tab" data-toggle="tab" href="#issuance" role="tab" aria-controls="issuance" aria-expanded="true"><i class="fa fa-check"></i>&nbsp Issuance</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="return-tab" data-toggle="tab" href="#return" role="tab" aria-controls="return"><i class="fa fa-refresh"></i>&nbsp Return</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="issuance" role="tabpanel" aria-labelledby="issuance-tab">
						<!-- issue list -->
						<div class="h3 text text-success"><i class="fa fa-folder-open"></i>&nbsp;Issued List/s</div>
						<form id="form_issuance">
							<table id="tbl_issuance_issue" class="table table-sm table-border table-condensed table-hover" width="100%">
								<thead class="thead-dark">
									<tr>
										<th></th>
										<th>CHARGE SLIP #</th>
										<th>DESCRIPTION</th>
										<th>BALANCE</th>
										<th>QTY ISSUED</th>
										<th>PRICE</th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody></tbody>
							
							</table>
							<hr>
							<button type="submit" class="btn btn-success pull-right">Issue</button>
						</form>
						
							<!-- order list -->
						<div class="h4 text text-success"><i class="fa fa-folder-open"></i>&nbsp;Order List/s</div>
						<table id="tbl_issuance_order" class="table table-sm table-bordered table-striped table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th>Chargeslip</th>
									<th>Description</th>
									<th>Ordered</th>
									<th>Issued</th>
									<th>Date</th>
									<th>Orderedby:</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
						<!-- order list -->
						<button class="btn btn-success pull-right mr-1" id="btn_chargeslip">Charge Slip</button>
						<!-- issue list -->
					</div>
					<div class="tab-pane fade" id="return" role="tabpanel" aria-labelledby="return-tab">
						<br>
						<!-- return list -->
						<div class="h3 text text-success"><i class="fa fa-folder-open"></i>&nbsp;Return List/s</div>
							<form id="form_return">
								<table id="tbl_return_list" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
									<thead class="thead-dark">
										<tr>
											<th></th>
											<th>RETURN</th>
											<th>CHARGE SLIP</th>
											<th>DESCRIPTION</th>
											<th>QTY ISSUED</th>
											<th>DATE ISSUED</th>
											<th>QTY RETURNED</th>
										</tr>
									</thead>
									<tbody></tbody>
									<tfoot class="thead-dark">
										<tr>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
											<th></th>
										</tr>
									</tfoot>
								</table>
								<hr>
								<button type="submit" class="btn btn-success pull-right">Return</button>
							</form>
						<!-- return list -->
					</div>
				</div>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
</div>
<!-- MARVIN : START : CHARGE SLIP MODAL -->
<div class="modal" id="chargeslip_modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Charge Slip Printing</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table id="chargeslip_tbl">
					<thead class="thead-dark">
						<tr>
							<td align="center" colspan="4">HOSPITAL MEMORIAL MEDICAL CENTER</td>
						</tr>
						<tr>
							<td align="center" colspan="4"><b>CHARGE SLIP</b></td>
						</tr>
						<tr>
							<td style="width: 20%;">Cost Center:</td>
							<td id="cost_center" align="center" style="border-bottom: 1px solid; width: 30%;"></td>
							<td style="width: 10%;">No.</td>
							<td id="chargeslip_no" align="center" style="border-bottom: 1px solid; width: 30%;"></td>
						</tr>
						<tr>
							<td style="width: 20%;">Hospital #:</td>
							<td id="hospital_no" align="center" style="border-bottom: 1px solid; width: 30%;"></td>
							<td style="width: 10%;">Date:</td>
							<td id="chargeslip_date" align="center" style="border-bottom: 1px solid; width: 30%;"></td>
						</tr>
						<tr>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td align="right" id="pat_bdate" colspan="4" style="font-size: 12px;"></td>
						</tr>
						<tr>
							<td style="width: 20%;">Patient's Name:</td>
							<td id="patients_name" style="border-bottom: 1px solid;" colspan="3"></td>
						</tr>
						<tr>
							<td style="width: 20%;">Ward:</td>
							<td style="border-bottom: 1px solid;" colspan="3"></td>
						</tr>
						<tr>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td colspan="4">
								<table id="chargeslip_item" width="100%">
									<thead align="center" style="border-top: double; border-bottom: double;">
										<tr>
											<th align="center">ITEM</th>
											<th align="center">QTY</th>
											<th align="center">UNIT COST</th>
											<th align="center">AMOUNT</th>
										</tr>
									</thead>
									<tbody></tbody>
									<tfoot style="border-top: double; border-bottom: double;">
										<tr>
											<td align="center" colspan="3">TOTAL</td>
											<td id="chargeslip_gtotal" align="center"></td>
										</tr>
									</tfoot>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2">Issued by:</td>
							<td colspan="2">Received by:</td>
						</tr>
						<tr>
							<td></td>
							<td align="center" style="border-bottom: 1px solid;">Nurse N. Nurse</td>
							<td></td>
							<td align="center" style="border-bottom: 1px solid;">Doctor D. Doctor</td>
						</tr>
					</thead>
					<tfoot class="thead-dark"></tfoot>
				</table>
			</div>
			<div class="modal-footer bg-secondary"><button id="btn_print" class="btn btn-success float-right"><i class="fa fa-print"></i></button></div>
		</div>
	</div>
</div>
<!-- MARVIN : END : CHARGE SLIP MODAL -->
<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/pharmacy.js"></script>
<script type="text/javascript">

function printData()
{
   var divToPrint=document.getElementById("chargeslip_tbl");
   newWin = window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$(document).ready(function(){
	
	var d 		= new Date();
	var year 	= d.getFullYear();
	var month 	= d.getMonth() + 1;
	var day 	= d.getDate();
	var hour 	= d.getHours();
	var min 	= d.getMinutes();
	var sec 	= d.getSeconds();
	
	PatientData("<?php echo $hpercode; ?>");
	
	var base_url = "<?php echo base_url(); ?>";
	var patientinfo = <?php echo $patientinfo; ?>;
	var enccode = encodeURIComponent(btoa(JSON.stringify(patientinfo.enccode)));
	
	/*============================================= ISSUANCE =============================================*/
	/* order list */
	$("#tbl_issuance_order").DataTable({
		
		ajax : base_url + 'Pharmacy/issuance/' + enccode,
		columns : [
			{ data : "pcchrgcod" },
			{ data : "item_description" },
			{ data : "pchrgqty" },
			{ data : "qtyissued" },
			{ data : "dodate" },
			{ render : function(data, type, row){
				return (row.orderby ? row.orderby[0].fullname : "");
			}},
		],
		ordering : false,
		searching : false,
		lengthChange : false
	});
	/* order list */
	
	/* issue list */
	var html = "";
	
	$("#tbl_issuance_issue tbody").empty();
	
	$.ajax({
		
		url : base_url + 'Pharmacy/issuance/' + enccode,
		dataType : "json",
		success : function(result){

			var c = 0;
			for(i=0; i<result.data.length; i++)
			{
				var quantity_balance = parseFloat(result.data[i].qtybal);
				if(quantity_balance != 0)
				{
					html += "<tr>
						+'<input type='hidden' name='docointkey[]' value='"+result.data[i].docointkey+"' />';
						+'<input type='hidden' name='enccode[]' value='"+result.data[i].enccode+"' />';
						+'<input type='hidden' name='hpercode[]' value='"+result.data[i].hpercode+"' />';
						+'<input type='hidden' name='dmdcomb[]' value='"+result.data[i].dmdcomb+"' />';
						+'<input type='hidden' name='issuedte[]' value='"+ year + '-' + month + '-' + day + ' ' + hour + ':' + min + ':' + sec +"' />';
						+'<input type='hidden' name='issuetme[]' value='"+ year + '-' + month + '-' + day + ' ' + hour + ':' + min + ':' + sec +"' />';
						+'<input type='hidden' name='issuedby[]' value='RN-02' />;
						+'<input type='hidden' name='status[]' value='A' />;
						+'<input type='hidden' name='rxolock[]' value='N' />;
						+'<input type='hidden' name='updsw[]' value='N' />;
						+'<input type='hidden' name='confdl[]' value='N' />;
						+'<input type='hidden' name='entryby[]' value='RN-02' />;
						+'<input type='hidden' name='locacode[]' value='PHARM' />;
						+'<input type='hidden' name='dmdctr[]' value='"+result.data[i].dmdctr+"' />;
						+'<input type='hidden' name='dmdprdte[]' value='"+result.data[i].dmdprdte+"' />;
						+'<input type='hidden' name='issuedfrom[]' value='"+result.data[i].orderfrom+"' />;
						+'<input type='hidden' name='rxooccid[]' value='"+result.data[i].rxooccid+"' />;
						+'<input type='hidden' name='rxoref[]' value='"+result.data[i].rxoref+"' />;
						+'<input type='hidden' name='rxostatus[]' value='"+result.data[i].rxostatus+"' />;
						+'<input type='hidden' name='rxoupsw[]' value='"+result.data[i].rxoupsw+"' />;
						+'<input type='hidden' name='rxoconfd[]' value='"+result.data[i].rxoconfd+"' />;
						+'<input type='hidden' name='dodate[]' value='"+result.data[i].dodate+"' />;
						+'<input type='hidden' name='dotime[]' value='"+result.data[i].dotime+"' />;
						+'<input type='hidden' name='ordcon[]' value='"+result.data[i].ordcon+"' />;
						+'<input type='hidden' name='orderupd[]' value='"+result.data[i].orderupd+"' />;
						+'<input type='hidden' name='dodtepost[]' value='"+result.data[i].dodtepost+"' />;
						+'<input type='hidden' name='dotmepost[]' value='"+result.data[i].dotmepost+"' />;
						+'<input type='hidden' name='pchrgqty[]' value='"+result.data[i].pchrgqty+"' />;
						+'<input type='hidden' name='qtyissued[]' value='"+result.data[i].qtyissued+"' />;
						+'<td>"+(result.data[i].returned_status == 0 ? "<input type='checkbox' name='issue[]' class='issue' id='"+c+"' />" : "<span class='badge btn-danger'>Returned</span>")+"</td>';
						+'<td><input type='text' name='pcchrgcod[]' class='form-control' id='pcchrgcod_"+c+"' readonly='true' /></td>';
						+'<td id='td_item_description_"+c+"'>"+result.data[i].item_description+"</td>';
						+'<td><input type='text' name='qtybal[]' class='form-control' id='qtybal_"+c+"' value='"+result.data[i].qtybal+"' size='5' readonly='true' /></td>';
						+'<td>"+(result.data[i].returned_status == 0 ? "<input type='text' name='qty[]' class='form-control' id='qty_"+c+"' size='5' />" : "<input type='text' name='qty[]' class='form-control' id='qty_"+c+"' size='5' disabled />")+"</td>';
						+'<td><input type='text' name='pchrgup[]' class='form-control' id='pchrgup_"+c+"' value='"+result.data[i].pchrgup+"' size='5' readonly='true' /></td>';
						+'<td><input type='text' name='pcchrgamt[]' class='form-control' id='pcchrgamt_"+c+"' size='5' readonly='true' /></td>';
					+'</tr>";
					
					c++;
				}
				
				$("#tbl_issuance_issue tbody").html(html);
			}
		}
	});
	/* issue list */
	
	/* generate chargeslip */
	$("#btn_chargeslip").on("click",function(){
		
		var html = "";
		var gtotal = 0;
		
		$("input[type='checkbox'][name='issue[]']").each(function(){
			
			if($(this).is(":checked"))
			{
				var counter = $(this).attr("id");
				
				if($("#qty_" + counter).val() != "")
				{
					if(parseFloat($("#qtybal_" + counter).val()) >= parseFloat($("#qty_" + counter).val()))
					{
						$.ajax({
							
							url : base_url + "Pharmacy/charge_slip",
							dataType : "json",
							success : function(result){
								
								/* chargeslip values */
								$("#cost_center").html("Pharmacy");
								$("#chargeslip_no").html(result.pcchrgcod);
								$("#hospital_no").html(patientinfo.hpercode);
								$("#chargeslip_date").html(month + "/" + day + "/" + year);
								$("#pat_bdate").html("DOB: " + "patient_bdate");
								$("#patients_name").html(patientinfo.patlast + ", " + patientinfo.patfirst + " " + patientinfo.patmiddle);
								
								/* computation */
								var qty = $("#qty_" + counter).val();
								var cost = $("#pchrgup_" + counter).val();
								var times = "*";
								var rs = eval(qty + times + cost);
								var total = rs.toFixed(2);
								
								/* chargeslip print */					
								html += "<tr>
									+'<td align='center'>"+$("#td_item_description_" + counter).text()+"</td>';
									+'<td align='center'>"+$("#qty_" + counter).val()+"</td>';
									+'<td align='center'>"+$("#pchrgup_" + counter).val()+"</td>';
									+'<td align='center' class='amount'>"+total+"</td>';
								+'</tr>";
								
								/* grand total */
								gtotal += Number(total);
								var grand_total = gtotal.toFixed(2);
								$("#chargeslip_gtotal").text(grand_total);
								
								/* load html */
								$("#chargeslip_item tbody").html(html);
								
								/* chargeslip modal */
								$("#chargeslip_modal").modal({"backdrop":"static"});
								$("#chargeslip_modal").modal("show");
								
								/* generated chargeslip */
								$("#pcchrgcod_" + counter).val(result.pcchrgcod);
								
								$("#pcchrgamt_" + counter).val(total);
							}
						});
					}
					else
					{
						toastr.warning("<b>QTY ISSUED for "+$("#td_item_description_" + counter).html()+"</b> must not more than the <b>QTY ORDERED</b>!", "Warning!");
					}
				}
				else
				{
					toastr.warning("<b>QTY ISSUED for "+$("#td_item_description_" + counter).html()+"</b> must not be empty!", "Warning!");
				}
			}
		});
	});
	/* generate chargeslip */
	
	/* submit issuance */
	$("#form_issuance").on("submit", function(e){
		
		e.preventDefault();
		
		$("input[type='checkbox'][name='issue[]']").each(function(){
			
			if($(this).is(":checked"))
			{
				$(this).attr("name", "issue[" + $(this).attr("id") + "]");
			}
		});
		
		$.ajax({
			type : "POST",
			url : base_url + "Pharmacy/process_issuance",
			data : $("#form_issuance").serialize(),
			dataType : "json",
			success : function(result){
				
				toastr.warning(result.msg, "Data Successfully issued!");
				setTimeout(function(){
					location.reload();
				}, 1000);
			}
		});
	});
	/* submit issuance */
	/*============================================= ISSUANCE =============================================*/
	
	/* print chargeslip */
	$("#btn_print").on("click",function(){
		
		printData();
	});
	/* print chargeslip */
	
	/*============================================= RETURN ===============================================*/
	/* return list */
	var id_count = 0;
	$("#tbl_return_list").DataTable({
		
		ajax : base_url + 'Pharmacy/return_supmed/' + enccode,
		columns : [
			{ render : function(data, type, row){
				return "<input type='hidden' name='docointkey[]' value='"+row.docointkey+"' />\n\
						<input type='hidden' name='enccode[]' value='"+row.enccode+"' />\n\
						<input type='hidden' name='hpercode[]' value='"+row.hpercode+"' />\n\
						<input type='hidden' name='returndate[]' value='"+year+"-"+month+"-"+day+" "+hour+":"+min+":"+sec+"' />\n\
						<input type='hidden' name='returntime[]' value='"+year+"-"+month+"-"+day+" "+hour+":"+min+":"+sec+"' />\n\
						<input type='hidden' name='uomcode[]' value='"+row.uomcode+"' />\n\
						<input type='hidden' name='returnby[]' value='"+row.entryby+"' />\n\
						<input type='hidden' name='status[]' value='A' />\n\
						<input type='hidden' name='rxolock[]' value='N' />\n\
						<input type='hidden' name='updsw[]' value='N' />\n\
						<input type='hidden' name='confdl[]' value='N' />\n\
						<input type='hidden' name='entryby[]' value='"+row.entryby+"' />\n\
						<input type='hidden' name='locacode[]' value='"+row.locacode+"' />\n\
						<input type='hidden' name='dmdctr[]' value='"+row.dmdctr+"' />\n\
						<input type='hidden' name='dmdprdte[]' value='"+row.dmdprdte+"' />\n\
						<input type='hidden' name='returnfrom[]' value='"+row.issuedfrom+"' />\n\
						<input type='hidden' name='chrgcode[]' value='"+row.chrgcode+"' />";
			} },
			{ render : function(data, type, row){
				return (row.qty_ret == 0) ? "<input type='checkbox' name='return[]' id='"+id_count+++"' />" : "<span class='badge btn-danger'>Returned</span>";
			} },
			{ render : function(data, type, row){
				return "<input type='hidden' name='pcchrgcod[]' value='"+row.pcchrgcod+"' />"+row.pcchrgcod+"";
			} },
			{ render : function(data, type, row){
				return "<input type='hidden' name='dmdcomb[]' value='"+row.dmdcomb+"' />"+row.item_description+"";
			} },
			{ render : function(data, type, row){
				return "<input type='hidden' name='qty[]' value='"+row.issued+"' />"+row.issued+"";
			} },
			{ render : function(data, type, row){
				return "<input type='hidden' name='issuedte[]' value='"+row.full_issuedte+"' />"+row.issuedte+"";
			} },
			{ render : function(data, type, row){
				return (row.qty_ret == 0) ? "<input type='text' name='qty_ret[]' class='form-control' size='5' />" : "<input type='text' name='qty_ret[]' class='form-control' size='5' disabled />";
			} }
		],
		ordering : false,
		searching : false,
		lengthChange : false,
		paging : false,
		info : false,
		pageLength : 100
	});
	/* return list */
	
	/*submit return*/
	$("#form_return").on("submit", function(e){
		
		e.preventDefault();
		
		$("input[type='checkbox'][name='return[]']").each(function(){
			
			if($(this).is(":checked"))
			{
				$(this).attr("name", "return[" + $(this).attr("id") + "]");
			}
		});
		
		$.ajax({
			type : "POST",
			url : base_url + "Pharmacy/process_return",
			data : $("#form_return").serialize(),
			dataType : "json",
			success : function(result){
				
				toastr.warning(result.msg, "Data Successfully return!");
				setTimeout(function(){
					location.reload();
				}, 1000);
			}
		});
	});
	/*submit return*/
});
</script>