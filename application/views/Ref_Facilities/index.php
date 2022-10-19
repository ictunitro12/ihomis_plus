<style>

table#Form.dataTable tbody tr:hover {
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
					&nbsp Forms
						</div>
						</h3>
							<div class="card-body table-responsive">
								<table id="Form" class="table table-sm table-striped  table-bordered table-condensedtable-hover ">
									<thead>
										<tr class="thead-dark">
											<th width="50px">Code</th>
											<th>Description</th>
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
	var t = $("#Form").dataTable({	
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
	ajax: {"url": "<?php echo base_url();?>Ref_UnitsofMeasure/UnitsofMeasurementList", "type": "POST"}, 
	columnDefs: [

	{
	targets :2,
	searchable:false,
	render: function ( data, type, row ) 
	{
	switch(data) 
	{
	case 'A' : return '<span class="badge  bg-success text-light">Active</span>'; break;
	case 'I' : return '<span class="badge  bg-danger text-light">">Inactive</span>'; break;
	default  : return '<span class="badge  bg-default text-light">">Unknown</span>';
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