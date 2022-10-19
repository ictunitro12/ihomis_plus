<style>

table#CaserateTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<nav class="navbar navbar-light bg-white">
  <div class="btn-group" role="group" aria-label="Basic example">
    <a href="<?php echo site_url('Patient/PatientRegister');?>" data-toggle="tooltip" title="Register Patient" class="btn btn-outline-success btn-md btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>
	</a>
  </div>
</nav>
<div class="c-body">
	<main class="c-main">
		<div class="container-fluid">
			<div class="c-fade-in">
						<div class="card card-accent-success">
							<h3 class="card-header">
					<div class="text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp Case Rates
						</div>
						</h3>
							<div class="card-body table-responsive">
								<table id="CaserateTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover ">
									<thead>
										<tr class="thead-dark">
											<th width="50px">Code</th>
											<th>Description</th>
											<th>Type</th>
											<th>CaseRate</th>
											<th>PF Share</th>
											<th>Hospital Share</th>
											<th>With Laterality</th>
											<th>Allowed Referral</th>
											<th>Group Code</th>
											<th>Group Desc</th>
											<th>Status</th>
											<th width="50px"></th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="card-footer">
							
							</div>
						</div>
					<div class="modal" id="ModalInformation" tabindex="-1" role="dialog">
					  <div class="modal-dialog modal-dialog modal-md" role="dialog">
					   <div class="modal-content">
						  <div class="modal-header bg-success">
							<h5 class="modal-title text-white" ><i class="fa fa-user-o"></i>&nbsp <span id="patname"></span></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
						  <table class="table table-sm table-striped">
						<tr>
						 <td class="bg-success"><b>Case Number:</b></td>
						 <td id="casenum"></td>
						</tr>
						<tr>
						 <td class="bg-success"><b>Account Number:</b></td>
						 <td id="accountno"></td>
						 </tr>
						 <tr>
						 <td class="bg-success"><b>Hospitalno:</b></td>
						 <td id="hpercode"></td>
						 </tr>
						 <tr>
						 <td class="bg-success"><b>Age:</b></td>
						 <td id="patage"></td>
						 </tr>
						  <tr>
						 <td class="bg-success"><b>Ward/Room/Bed:</b></td>
						 <td id="patwrb"></td>
						 </tr>
						 <tr>
						 <td class="bg-success" ><b>Diagnosis:</b></td>
						 <td id="patdiag"></td>
						 </tr>
						 </table>
						  </div>
						  <div class="modal-footer bg-secondary">
						 <button class="btn btn-success btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-file-o"></i>&nbsp Clinical Cover Sheet</button>
						 <button class="btn btn-success  btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-file-o"></i>&nbsp Consent</button>
						  </div>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</main>
	</div>
	
<script type="text/javascript">
	$(document).ready(function()
	{
		InpatientLog();
    });
	
	function filterColumn ( i ) {
    $('#AdmissionTable').DataTable().column( i ).search(
        $('#col'+i+'_filter').val(),
        $('#col'+i+'_regex').prop('checked'),
        $('#col'+i+'_smart').prop('checked')
    ).draw();
	}
	function InpatientLog()
	{
  
		$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
		{
		return 
		{
		"iStart": oSettings._iDisplayStart,
		"iEnd": oSettings.fnDisplayEnd(),
		"iLength": oSettings._iDisplayLength,
		"iTotal": oSettings.fnRecordsTotal(),
		"iFilteredTotal": oSettings.fnRecordsDisplay(),
		"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
		"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
		};
		};
	var t = $("#CaserateTable").dataTable({	
	oLanguage: {
	sProcessing:'<i class="spinner-border text-success"></i>'
	},
	 aLengthMenu: [[15,20, 50, 75, -1], [15,20, 50, 75, "All"]],
    ipageLength: 15,
	stateSave: true,
	processing: true,
	serverSide: true,
	searching:true,
	info:true,
	orderable: true,
	paging: true,
	autoWidth: true,
	destroy: true,
	ajax: {"url": "<?php echo base_url();?>Ref_Caserate/AllCaseRateList", "type": "POST"}, 
	columnDefs: [
	{
	targets :10,
	searchable:false,
	render: function ( data, type, row ) 
	{
	switch(data) 
	{
	case 'A' : return '<span class="badge bg-success text-light">Active</span>'; break;
	case '' : return '<span class="badge  bg-danger text-light">Inactive</span>'; break;
	default  : return '<span class="badge  bg-danger text-light ">Inactive</span>';
	}
	},
	},
	{
	targets :2,
	searchable:false,
	render: function ( data, type, row ) 
	{
	switch(data) 
	{
	case 'P' : return 'Procedure'; break;
	case 'M' : return 'Medical'; break;
	default  : return '<span class="badge  bg-default">Unknown</span>';
	}
	},
	},
{
	targets :6,
	searchable:false,
	render: function ( data, type, row ) 
	{
	switch(data) 
	{
	case 'Y' : return 'Yes'; break;
	case 'N' : return 'No'; break;
	default  : return 'NULL';
	}
	},
	},		
	],	
	order: [[0, 'asc']],		
	rowCallback: function(row, data, iDisplayIndex) {
	var info = this.fnPagingInfo();
	var page = info.iPage;
	var length = info.iLength;
	var index = page * length + (iDisplayIndex + 1)}
	});
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    });
	
	}
</script>