<div class="row">
	<div class="col-md-2">
	<div class="card card-accent-success">
			<div class="card-body">
				<?php $this->load->view('Tools/_menuTools.php');?>
			</div>
			</div>
	</div>
	<div class="col-md-10">
		<div id="loadView"></div>
	</div>
</div>
<form name="formlogo" id="formlogo"  enctype="multipart/form-data">
<div class="modal" id="modalLogo" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="h4 text-success"><i class="fa fa-image"></i>&nbsp Hospital Logo</div>
				
					<div class="d-flex justify-content-center">
						<img id="hospitallogo" class="img-fluid img-thumbnail rounded mx-auto d-block mb-1" alt="...">
					</div>
					<div class="row">
					<div class="col-md-12">
						<input class="form-control form-control-md" type="file" name="logo_pic" id="logo_pic">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="btn-group">
					<button class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> Save</button>
					<button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</form>

<script type="text/javascript">
	$(function(){initAudit();});
	$("#btnAudit").click(function(){initAudit();});
	$("#btnBedCounts").click(function(){initBed();});
	$("#btnFixHpercode").click(function(){initFix();});
	$("#btnDeleteData").click(function(){initDelete();});
	$("#btnNurse").click(function(){initNurse();});
	$("#btnInventory").click(function(){initInventory();});
	$("#btnLicno").click(function(){initLicno();});
	$("#btnEngas").click(function(){initEngas();});
	$("#btnMigrate").click(function(){initMigrate();});
	$("#btnPipeline").click(function(){initPipeLine();});
	$("#btnBackup").click(function(){initBack();});

	$("#btnLogo").click(function(){
		$("#modalLogo").modal('show');
		$("#hospitallogo").attr("src",baseURL+"assets/img/hospital_logo.png");
	});

	$('#formlogo').submit('click',function(){
	$.ajax({
	type : "POST",
	url  : baseURL+"Tools/do_upload",
	data :new FormData(this),
	processData:false,
	contentType:false,
	cache:false,
	async:false,
	success: function(data,response){
		$("#modalLogo").modal('hide');
		$("#hospitallogo").attr("src",'');
		toastr.success('Upload success','Success');
		$("#hospitallogo").attr("src",baseURL+"assets/img/hospital_logo.png");
	},

	});
	return false;
});
		
	function initNurse()
	{
		$("#loadView").load(baseURL+"Nurse/nurseTable",function(){
			$("#btnAudit").removeClass('active'); 
			$("#btnBedCounts").removeClass('active');
			$("#btnFixHpercode").removeClass('active');
			$("#btnDeleteData").removeClass('active');
			$("#btnNurse").addClass('active',true);
			$("#btnInventory").removeClass('active');
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").removeClass('active');
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").removeClass('active');
			$("#btnBackup").removeClass('active');
		});
	}

	function initInventory()
	{
		$("#loadView").load(baseURL+"Tools/inventory_view",function(){
			$("#btnAudit").removeClass('active'); 
			$("#btnBedCounts").removeClass('active');
			$("#btnFixHpercode").removeClass('active');
			$("#btnDeleteData").removeClass('active');
			$("#btnNurse").removeClass('active');
			$("#btnInventory").addClass('active',true);
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").removeClass('active');
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").removeClass('active');
			$("#btnBackup").removeClass('active');
		});
	}
	
	
	function initFix()
	{
		$("#loadView").load(baseURL+"Tools/view_paterr",function(){
			$("#btnAudit").removeClass('active'); 
			$("#btnBedCounts").removeClass('active');
			$("#btnFixHpercode").addClass('active');
			$("#btnDeleteData").removeClass('active');
			$("#btnNurse").removeClass('active');
			$("#btnInventory").removeClass('active',true);
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").removeClass('active');
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").removeClass('active');
			$("#btnBackup").removeClass('active');
			errorpatList();
		});
	}
	
	
	function initAudit()
	{
		$("#loadView").load(baseURL+"Tools/audit_view",function(){
			$("#btnAudit").addClass('active',true); 
			$("#btnBedCounts").removeClass('active');
			$("#btnFixHpercode").removeClass('active');
			$("#btnDeleteData").removeClass('active');
			$("#btnNurse").removeClass('active');
			$("#btnInventory").removeClass('active',true);
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").removeClass('active');
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").removeClass('active');
			$("#btnBackup").removeClass('active');
			auditLog();	
		});		
	}	
	
	function initBed()
	{	
		$("#loadView").load(baseURL+"Tools/bed_view",function(){	
			$("#btnAudit").removeClass('active'); 
			$("#btnBedCounts").addClass('active',true);
			$("#btnFixHpercode").removeClass('active');
			$("#btnDeleteData").removeClass('active');
			$("#btnNurse").removeClass('active');
			$("#btnInventory").removeClass('active',true);
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").removeClass('active');
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").removeClass('active');
			$("#btnBackup").removeClass('active');
		});
	}
	
	function initDelete()
	{
		$("#loadView").load(baseURL+"Tools/delete_view",function(){
			$("#btnAudit").removeClass('active'); 
			$("#btnBedCounts").removeClass('active');
			$("#btnFixHpercode").removeClass('active');
			$("#btnDeleteData").addClass('active',true);
			$("#btnNurse").removeClass('active');
			$("#btnInventory").removeClass('active',true);
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").removeClass('active');
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").removeClass('active');
			$("#btnBackup").removeClass('active');
		});
	}

	function initLicno()
	{
		$("#loadView").load(baseURL+"Tools/doctor_view",function(){
			$("#btnAudit").removeClass('active'); 
			$("#btnBedCounts").removeClass('active');
			$("#btnFixHpercode").removeClass('active');
			$("#btnDeleteData").removeClass('active');
			$("#btnNurse").removeClass('active');
			$("#btnInventory").removeClass('active',true);
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").addClass('active',true);
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").removeClass('active');
			$("#btnBackup").removeClass('active');
		});
	}
	
	function initEngas()
	{
		$("#loadView").load(baseURL+"Tools/engas_view",function(){
				$("#btnAudit").removeClass('active'); 
				$("#btnBedCounts").removeClass('active');
				$("#btnFixHpercode").removeClass('active');
				$("#btnDeleteData").removeClass('active');
				$("#btnNurse").removeClass('active');
				$("#btnInventory").removeClass('active',true);
				$("#btnMigrate").removeClass('active');
				$("#btnLicno").removeClass('active');
				$("#btnEngas").addClass('active',true);
				$("#btnPipeline").removeClass('active');
				$("#btnBackup").removeClass('active');
				en_Auth();
			
		
		});
	}
	
	function initPipeLine()
	{
		$("#loadView").load(baseURL+"Tools/pipeline_view",function(){
			$("#btnAudit").removeClass('active'); 
			$("#btnBedCounts").removeClass('active');
			$("#btnFixHpercode").removeClass('active');
			$("#btnDeleteData").removeClass('active');
			$("#btnNurse").removeClass('active');
			$("#btnInventory").removeClass('active',true);
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").removeClass('active');
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").addClass('active',true);
			$("#btnBackup").removeClass('active');
		});
	}
	
	function initBack()
	{	$("#loadView").load(baseURL+"Tools/backup_view",function(){
			$("#btnAudit").removeClass('active'); 
			$("#btnBedCounts").removeClass('active');
			$("#btnFixHpercode").removeClass('active');
			$("#btnDeleteData").removeClass('active');
			$("#btnNurse").removeClass('active');
			$("#btnInventory").removeClass('active',true);
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").removeClass('active');
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").removeClass('active');
			$("#btnBackup").addClass('active',true);
		});
	}

	function initMigrate()
	{
		$("#loadView").load(baseURL+"Tools/view_migration",function(){
			$("#btnAudit").removeClass('active'); 
			$("#btnBedCounts").removeClass('active');
			$("#btnFixHpercode").removeClass('active');
			$("#btnDeleteData").removeClass('active');
			$("#btnNurse").addClass('active',true);
			$("#btnInventory").removeClass('active');
			$("#btnMigrate").removeClass('active');
			$("#btnLicno").removeClass('active');
			$("#btnEngas").removeClass('active');
			$("#btnPipeline").removeClass('active');
			$("#btnBackup").removeClass('active');
		});
	}

	
	function auditLog()
	{
		var data = new Object();
		data.id = "audit_tbl";
		data.link = baseURL+"Tools/auditTrail";
		data.type = "POST";
		data.rowsGroup=[0,1,2,3,4];
		data.paging =true;
		data.searching = true;
		data.info = true;
		data.columns=[
			{ data : "user_id"},
			{ data : "employee"},
			{ data : "event"},
			{ data : "table_name"},
			{ data : "ip_address"},
			{ data : "created_at"}];
			Datatable(data);
	}
	
	function loginLog()
	{
		var data = new Object();
		data.id = "loginatt_tbl";
		data.link = baseURL+"Auth/login_attempts";
		data.type = "POST";
		data.paging =true;
		data.searching = true;
		data.info = true;
		data.columns=[
			{ data : "ID"},
			{ data : "ip_address"},
			{ data : "login"},
			{ data : "time"},
			{ data : null,
				render: function(data, type, row){
					return "<button class='btn btn-outline-danger btn-block btn-sm' data-id= '"+row.login+"' id='btnRemove'>Remove</button>";
				}
			}
		];
		Datatable(data);
		$("#loginatt_tbl").on('click','#btnRemove',function(){
			var ID  = $(this).data('id');
			$.post(baseURL+'Auth/removeLoginAttempt',{id:ID},function(data){
			toastr.success('Record deleted!','Success');
			$("#loginatt_tbl").DataTable().ajax.reload();
		});


		});
	}
	
	
	function errorpatList()
	{
		$("#err_tbl").DataTable({
		"ajax": baseURL+"Tools/errorPatients",
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 "destroy":true,
		 "rowsGroup":[0,3,4],
		 "columns":[
		 {data : "hpercode"},
		 {data : "name"},
		 {data : "bdate"},
		 {data : "patstat"},
		 { 
			data: "hpercode",
			render: function(data, type, row){
				return "<button class='btn btn-outline-danger btn-square  btn-block btn-sm' id='btnFix' href='#'>Fix</button>";
				}
		 }
		 
		 
		 
		 ]
		});
	}
	
	function en_Auth()
	{
		$("#en_auth").DataTable({
		"ajax": baseURL+"Tools/en_auth",
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 "destroy":true,
		 "rowsGroup":[0,3,4],
		 "columns" : [
		 {data : "AUTHORIZATION_UID"},
		 {data : "CODE"},
		 {data : "DESCRIPTION"}]
		});
	}
	
	function en_funclust()
	{
		$("#en_funclust").DataTable({
		"ajax": baseURL+"ENGAS/en_fundcluster",
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 "destroy":true,
		 "rowsGroup":[0,3,4],
		 "columns" : [
		 {data : "AUTHORIZATION_UID"},
		 {data : "CODE"},
		 {data : "DESCRIPTION"}]
		});
	}
	
</script>