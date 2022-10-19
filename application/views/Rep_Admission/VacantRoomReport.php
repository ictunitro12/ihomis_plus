
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
						<i class="fa fa-th-list"></i>
								&nbsp  <?php echo $header;?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="btn-group pull-right" role="group" aria-label="">
	               		<button type="button" id="printvacantpdf" title="Print PDF"  class="btn btn-success pull-right btn-md" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i></button>
			    	</div>
				</div>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table id="VacantTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
				<thead class="thead-dark">
					<tr> 
					<th>BED</th>
					<th>WARD</th>
					<th width="20%">ROOM</th>
					</tr>
				</thead>
				<tfoot class="thead-dark">
					<tr>
						<th></th>
						<th></th>
						<th width="50px"></th>
					</tr>
				</tfoot>
			</table>
		</div>
</div>

<form method="post">
<div class="modal" id="formvacant" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
   <div class="modal-content">
   	<div class="modal-header">
	<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
	<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal">
				<i class="fa fa-close"></i> 
				</button>
	</div>
	  <div class="modal-body">
		<embed id="printvacantmodal" type="application/pdf" frameborder="2" width="100%" height="800px">
      </div>
      <div class="modal-footer bg-secondary">
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
	$(document).ready(function()
	{
 	vacantreport();
	});
	$('#printvacantpdf').click('click',function(){
			$('#formvacant').modal({backdrop:'static'}).draggable;
			var x = document.getElementById("printvacantmodal");
			x.src = baseURL+"Rep_Admission_pdf/VacanroomReppdf";
			});
	function vacantreport()
	{
	var data = new Object();
	data.id = "VacantTable";
	data.link = "<?php echo site_url('Rep_Admission/VacantRmReps');?>";
	data.type = "POST";
	loadTable(data);
	}

</script>    