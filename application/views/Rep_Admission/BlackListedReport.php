
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
	               			 <button type="button" id="printblcklistpdf" class="btn btn-success pull-right btn-md" data-style="zoom-in" title="Print PDF"><i class="fa fa-file-pdf-o"></i></button>
			    	</div>
				</div>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table id="BlacklestTatble" class="table table-sm table-striped table-borderless table-condensed table-hover ">
				<thead class="thead-dark">
					<tr> 
					<th>FIRST NAME</th>
					<th>MIDDLE NAME</th>
					<th>LAST NAME</th>
					<th>DATE OF ADMISSION</th>
					<th>DATE OF DISCHARGED</th>
					<th width="20%">BALANCE</th>
					</tr>
				</thead>
				<tfoot class="thead-dark">
					<tr>
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

<form method="post">
<div class="modal" id="formblcklist" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
   <div class="modal-content">
   	<div class="modal-header">
	<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
	<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal">
				<i class="fa fa-close"></i> 
				</button>
	</div>
	  <div class="modal-body">
		<embed id="printblackmodal" type="application/pdf" frameborder="2" width="100%" height="800px">
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
 	Blcklistreprt();
	});
	$('#printblcklistpdf').click('click',function(){
			$('#formblcklist').modal({backdrop:'static'}).draggable();
			var x = document.getElementById("printblackmodal");
			x.src = baseURL+"Rep_Admission_pdf/blklistedPdf";
			});
	function Blcklistreprt()
	{
	var data = new Object();
	data.id = "BlacklestTatble";
	data.link = "<?php echo site_url('Rep_Admission/Blacklstedrep');?>";
	data.type = "POST";
	loadTable(data);
	}

</script>    