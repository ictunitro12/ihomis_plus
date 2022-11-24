<style>

table#ProcDetailsTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style> 
	<div class="card card-accent-success">

		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto	">
					<div class="h3 text text-success"> 
						<i class="fa fa-th-list"></i>
						&nbsp<?php echo $header;?>

					</div>
				</div>
				
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button onclick="AddProcDetails()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Procedure Details" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Procedure Details
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body">
			<table id="ProcDetailsTable" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
				<thead>
					<tr>
						<th class="never">Prikey</th>
						<th>Date</th>
						<th class="never">Procedure</th>
						<th>Rate</th>
						<th class="">Type</th>
						<th class="never">Currency</th>
						<th class="never">bccode</th>
						<th>Unit of Measure</th>
						<th>Date as of</th>
						<th class="never">Interpretation Fee</th>
						<th class="never">Relative Unit Value</th>
						<th>Status</th>
						<th>rmaccikey</th>
						<th  class="all" width="10%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmProcDetails"   id="frmProcDetails">
		<div class="modal fade" id="ModalAddProcDetails"  role="form">
			<input type="hidden" name="formIden" id="formIden">
			<input type="hidden" name="primekey" id="primekey" onchange="intkey();" value="">
			<div class="modal-dialog modal-dialog-centered " role="form">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i>&nbsp <?php echo $header;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-3 col-form-label text-default mb-1">Procedure:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="codedesc" name="codedesc" placeholder ="Procedure" readonly="">
								<input type="hidden" class="form-control form-control-mb" autocomplete="off" readonly=""  id="code" name="code" placeholder ="Procedure " maxlength="10">
							</div>	

							<div class="col-md-3 col-form-label text-default mb-1">Rate:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="rate" name="rate" placeholder ="Rate" maxlength="12">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Currency:</div>
							<div class="col-md-9">
								<select name ="currency" id ="currency" class="form-control">
									<option value="">Currency</option>
									<option value="PESO">Peso</option>
									<option value="YEN">Yen</option>
									<option value="DOLLA">Dollar</option>
									<option value="OTHER">Others</option>
								</select>
							</div>		
							<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-9">
								<select name ="status" id ="status" class="form-control">
									<option value="">Status</option>
									<option value="A">Active</option>
									<option value="I">Inactive</option>
								</select>
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Accomodation:</div>
							<div class="col-md-9">
								<select name ="selSupat" id ="selSupat" onchange ="intkey();" class="form-control">
								<option value="">Select</option>
								</select>
								<code class="text-primary">Base on room accomodation</code>
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Room Class:</div>
							<div class="col-md-9">
								<select name ="selSupatClass" id ="selSupatClass" onchange ="intkey();" class="form-control">
								<option value="">Select</option>
								</select>
								<code class="text-primary">Non Basic = Pay / Basic =Charity</code>
							</div>
								
							<div class="col-md-3 col-form-label text-default mb-1">Unit of Measure:</div>
							<div class="col-md-9">
								<select name ="selUnitMeasure" id ="selUnitMeasure" class="form-control">
								</select>
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Date as of:</div>
							<div class="col-md-9">
								<input type="datetime-local" class="form-control form-control-mb" step ="any" onchange ="intkey();" autocomplete="off" name ="dteasof" id ="dteasof">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Interpretation Fee:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="interfee" name="interfee" placeholder ="Interpretation Fee" maxlength="12">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Relative Unit Value:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="ruv" name="ruv" placeholder ="Relative Unit Value" maxlength="8">
							</div>
							<input type="hidden" name="supat" id="supat">
						</div>
					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</form>
	
	<form name="frmDeleteProcDetails" id="frmDeleteProcDetails">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		<div class="modal fade" id="DeleteProcDetails" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>	

	<script type="text/javascript">
		$(function()
		{
			ProcDetailsList();
			var proccode = atob('<?php echo $this->uri->segment(3);?>');
			var procdesc = atob('<?php echo $this->uri->segment(4);?>');
			var code = encodeURIComponent(encodeURIComponent(proccode));
			$("#code").val(code);
			$("#codedesc").val(procdesc);
		});
		function selectClass() {
			$('#selSupatClass').select2({
				placeholder: "Select room classification",
				allowClear: true,
				theme: "coreui",
				ajax: {
				url: baseURL + "Ref_Procedures/selectClassif",
				dataType: "json",
				type: "POST",
				delay: 250,
				data: function (params) {
					return {
					search: params.term,
					};
				},
				processResults: function (data) {
					var results = [];
					$.each(data, function (index, item) {
					results.push({
						id: item.rmaccikey,
						text: item.classif
					});
					});
					return {
					results: results,
					};
				},
				},
			});
			$('#selSupatClass').on("change", function () {
				var data = $("#selSupatClass option:selected", this);
				
			});
			}

			function setClass(id) {
					selectClass();
				var relSelect = $("#selSupatClass");
				$.ajax({
					type: "POST",
					data:{data:id},
					url: baseURL + "Ref_Procedures/setClassif",
				}).then(function (data) {
					var obj = $.parseJSON(data);
					var option = new Option(obj["classif"], obj["rmaccikey"], true, true);
					relSelect.append(option).trigger("change");
					relSelect.trigger({
					theme: "coreui",
					type: "select2:select",
					params: {
						data: data,
					},
					});
				});
				}

		function ProcDetailsList()
		{
			var proccode = atob('<?php echo $this->uri->segment(3);?>');
			var code = encodeURIComponent(encodeURIComponent(proccode));
			var data = new Object();
			data.id = "ProcDetailsTable";
			data.link = "<?php echo site_url('Ref_Procedures/ProcDetailsList/');?>" + code;
			data.type = "POST";
			data.coldef=[
			{
				targets: [0,2,5,7,9],
				visible:true,
				searchable:true,
			},
			{
				targets : 11,
				searchable:true,
				render: function (data) 
				{
					switch(data) 
					{
						case 'A' : return '<span class="p-2 bg-success text-white"><i class="fa fa-check"></i>&nbsp Active</span>'; break;
						case 'I' : return '<span class="p-2 bg-danger text-white"><i class="fa fa-remove"></i>&nbsp Inactive</span>'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			}
			];
			loadTable(data);
		}


		function intkey()
		{
			var date = new Date();
			var month = ('0' + (date.getMonth() + 1)).slice(-2);
			var day = ('0' + date.getDate()).slice(-2);
			var year = ('0' + (date.getYear())).slice(-2);
			var time= ('0' + (date.getTime())).slice(-2);
			var dao= month +day +year + time;
			
			var rmacc;
			$.get(baseURL+"Ref_Procedures/getSetupExam",function(data){
				var obj=$.parseJSON(data);
				if(obj['data']=="RMACC"){
					 rmacc=$("#selSupat").val();
					$('#primekey').val($('#code').val()+dao+rmacc);
				}else if(obj['data']=="CLASS"){
					 rmacc=$("#selSupatClass").val();
					$('#primekey').val($('#code').val()+dao+rmacc);
				}else{
					var rmacc=$("#selSupat").val();
					$('#primekey').val($('#code').val()+dao);  
				}

			});
			
		} 

		$("#ProcDetailsTable").on("click",".ModalDeleteProcDetails",function(){
			var data = $(this).data();
			$('#DeleteProcDetails').modal({ backdrop: 'static'}).draggable({});	;
			$("#formIdentification").val('delete');
			$("#deletecode").val(data['prikey']);

		});

		$("#ProcDetailsTable").on("click",".ModalEditProcDetails",function(){
			var adata = $(this).data();
			$('#ModalAddProcDetails').modal({ backdrop: 'static'}).draggable({});
			$("#formIden").val('update');
			var uomcode = $(this).data('bccode');
			var uom = btoa(adata['bccode']);
			SelUnitMeasure();
			setUnitMeasure(uom);

			var proccode = atob('<?php echo $this->uri->segment(3);?>');    

			$("#code").prop('readonly', true);
			$("#code").val(proccode);
			$("#primekey").val(adata['prikey']);
			$("#rate").val(adata['procrate']);
			$("#currency").val(adata['curcode']);
			$("#status").val(adata['procstat']);
			var dates = adata['procndte'];
			var dateasof = ((dates == "1970-01-01 00:00:00") || (dates == null)|| (dates=="0000-00-00 00:00:00")) ? "0000-00-00 00:00:00" : setTimeLocale(dates);
			$("#dteasof").val(dateasof);
		
			$("#ruv").val(adata['rvu']);
			console.log(adata);
			$.get(baseURL+"Ref_Procedures/getSetupExam",function(data){
				var obj=$.parseJSON(data);
				if(obj['data']=="RMACC"){
					selectExamAccom();
					$("#selSupatClass").prop('disabled',true);
					$("#supat").val('RMACC');
				}else if(obj['data']=="CLASS"){
					setClass(adata['rmaccikey']);
					$("#selSupat").prop('disabled',true);
					$("#supat").val('CLASS');
				}else{
					$("#supat").val('ONE');
					$("#selSupat").prop('disabled',true);
					$("#selSupatClass").prop('disabled',true);
				}

			});
		});

		function AddProcDetails(){
			$('#ModalAddProcDetails').modal({ backdrop: 'static'}).draggable({});
			$("#formIden").val('insert'); 
			var proccode = atob('<?php echo $this->uri->segment(3);?>');
			SelUnitMeasure();
			intkey();
			$('#dteasof').val(getTimeLocale());
			$('#code').val(proccode);
			$("#code").prop('readonly', true);
			$.get(baseURL+"Ref_Procedures/getSetupExam",function(data){
				var obj=$.parseJSON(data);
				if(obj['data']=="RMACC"){
					selectExamAccom();
					$("#selSupatClass").prop('disabled',true);
					$("#supat").val('RMACC');
				}else if(obj['data']=="CLASS"){
					selectClass();
					$("#selSupat").prop('disabled',true);
					$("#supat").val('CLASS');
				}else{
					$("#supat").val('ONE');
					$("#selSupat").prop('disabled',true);
					$("#selSupatClass").prop('disabled',true);
				}

			});
		}   

		function Back(){
			window.location.href =baseURL+"Ref_Procedures";
		}
	</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_procedures/ref_proDetails_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_procedures/delete_proDetails.js"></script>

