
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<form id="dateRange" method="post">
	<div class="modal" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
			<div class="modal-content card-accent-success">
					<div class="modal-header">
						<h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
						<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>	
					</div>
					<div class="modal-body border-success">						
						<div id="baseDateControl">
							<div class="row-md-6">
								<input type="date" class="form-control form-control-mg" min="2000-01-01" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" name ="datefetch" id="datefetch" autocomplete="off" />
							</div>
						</div>
					</div>
					<div class="modal-footer">
					<button type="submit" name="RepPatientAdm" class="btn btn-success btn-block btn-ladda" data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
				
					</div>
			</div>
		</div>
	</div>
</form>


	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
						<i class="fa fa-th-list"></i>
								&nbsp;  <?php echo $header;?>&nbsp; <small><i><label class="form-label text-success" id="lbldate"> </label></i></small>
					</div>
				</div>
				<div class="col-md-6">
						<div class="btn-group pull-right" role="group" aria-label="">
						    <button id="buttondate" class="btn btn-success btn-ladda" data-style="zoom-in" title="Select Date">
						    		<i class="fa fa-calendar"></i>
							</button>&nbsp;
	               			 <button id="printadmittedpdf" class="btn btn-success btn-ladda" data-style="zoom-in" title="Print"><i class="fa fa-file-pdf-o"></i> 
	               			 </button>
			    		</div>
				</div>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table id="AdmissionReportTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
				<thead class="thead-dark">
					<tr>
					<th></th>
					 <th>SERVICE</th>  
					<th>REMAINING FROM YESTERDAY'S MIDNIGHT REPORT</th>
					<th>ADMISSIONS</th>
					<th>TRANSFERS</th>
					<th>DISCHARGES</th>
					 <th>TRANSFERS OUT</th>
					 <th>DEATHS</th>
					 <th width="20%">REMAINING AT 12:00 MIDNIGHT</th>
					</tr>
				</thead>
				<tfoot class="thead-dark">
					<tr>
						<th></th>
						<th>TOTAL :</th>
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

<form method="post">
<div class="modal" id="form_patrec" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
   <div class="modal-content">
   	<div class="modal-header">
	<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
	<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal">
				<i class="fa fa-close"></i> 
				</button>
	</div>
	  <div class="modal-body">
		<embed id="printadmittedpdfmodal" type="application/pdf" frameborder="2" width="100%" height="800px">
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
	$("#DateSearch").modal({backdrop:'static'}).draggable();
	})
function RepAdmit(data)
	{
		 var table = $("#AdmissionReportTable").dataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "tscode"},
			{"data" : "tsdesc"},
			{"data" : "cc_remprev"},
			{"data" : "cc_adm"},
			{"data" : "cc_transin"},
			{"data" : "cc_dis"},
			{"data" : "cc_transout"},
			{"data" : "cc_death"},
			{"data" : "cc_remprev"}],
			columnDefs: 
					[
				    {
					targets : [0],
					visible : false,
					},
					],
			"footerCallback": function( tfoot, data, start, end, display ) {
    var api = this.api();
    $( api.column( 2 ).footer() ).html(
        api.column( 2 ).data().reduce( function ( a,b ) {
            return (parseInt(a)+parseInt(b));
        },)
    );
    $( api.column( 3 ).footer() ).html(
        api.column( 3 ).data().reduce( function ( a,b ) {
            return (parseInt(a)+parseInt(b));
        },)
    );
    $( api.column( 4 ).footer() ).html(
        api.column( 4 ).data().reduce( function ( a,b ) {
            return (parseInt(a)+parseInt(b));
        },)
    );
    $( api.column( 5 ).footer() ).html(
        api.column( 5 ).data().reduce( function ( a,b ) {
            return (parseInt(a)+parseInt(b));
        },)
    );
    $( api.column( 6 ).footer() ).html(
        api.column( 6 ).data().reduce( function ( a,b ) {
            return (parseInt(a)+parseInt(b));
        },)
    );
    $( api.column( 7 ).footer() ).html(
        api.column( 7 ).data().reduce( function ( a,b ) {
            return (parseInt(a)+parseInt(b));
        },)
    );
    $( api.column( 8 ).footer() ).html(
        api.column( 8 ).data().reduce( function ( a,b ) {
            return (parseInt(a)+parseInt(b));
        },)
    );
  },

		 });

	 }
	 $('#buttondate').click('click',function(){
		$("#DateSearch").modal({backdrop:'static'}).draggable();
	 });
	$('#dateRange').submit('click',function()
	{
		var datefetch = $('#datefetch').val();
		/* var dateRangeForm = new FormData(this);
		var selectedDate = dateRangeForm.get('datefetch'); */
		var datefetch__ = new Date(datefetch).toLocaleDateString('en-us', {
				month: "numeric",
				day: "numeric",
				year: "numeric"
			});
			document.getElementById('lbldate').innerHTML = ('<small><i>Date Selected : '+datefetch__+'</i></small>');
		$.ajax({
		url: baseURL + "Rep_Admission/ConsolCensRep/" + datefetch,
		type:"POST",
		data: "JSON",
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
			$('#DateSearch').modal('hide');
			RepAdmit(data);
			$('#printadmittedpdf').click('click',function(){
			$('#form_patrec').modal('show');
			var datefetchs = encodeURIComponent(encodeURIComponent(btoa(datefetch)));
			/*var x = document.getElementById("printadmittedpdfmodal").src = baseURL+"Rep_Admission_pdf/ConsolCensReps/"+datefetch;*/
			var x = document.getElementById("printadmittedpdfmodal");
			x.src = baseURL+"Rep_Admission_pdf/ConsolCensReps/"+datefetchs;
			});
		},
		error: function(response){
		alert("Error:Please try again!");
		}
		});
		return false;
	});
	</script>      