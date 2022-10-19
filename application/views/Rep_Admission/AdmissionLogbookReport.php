
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
								<label class="text-success">From</label>
								<input type="date" class="form-control form-control-mg" min="2000-01-01" max="<?php echo date('Y-m-d'); ?>" name ="from" id="from" autocomplete="off" />
							</div>
							<div class="row-md-6">
								<label class="text-success">to</label>
								<input type="date" class="form-control form-control-mg" min="2000-01-01" max="<?php echo date('Y-m-d'); ?>" name ="to" id="to" autocomplete="off" />
							</div>
						</div>
					</div>
					<div class="modal-footer">
					<button type="submit" name="RepPatientAdm" class="btn btn-success btn-block " data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
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
								&nbsp  <?php echo $header;?>&nbsp; <small><i><label class="form-label text-success" id="lbldate"> </label></i></small>
					</div>
				</div>
				<div class="col-md-6">
						<div class="btn-group pull-right" role="group" aria-label="">
						    <button type="button" class="btn btn-success pull-right btn-md" data-toggle="modal" data-target="#DateSearch" title="Select Date">
						    		<i class="fa fa-calendar"></i>
							</button>&nbsp;
	               			 <button type="button" id="printAdlogBkRep" class="btn btn-success pull-right btn-md" data-style="zoom-in" title="Print PDF"><i class="fa fa-file-pdf-o"></i>
	               			 </button>
			    		</div>
				</div>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table id="AdmissionLogbookRepTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
				<thead class="thead-dark">
					<tr>
					<th width="10%">HEALTH RECORD #</th>  
					 <th width="10%">DATE AND TIME OF ADMISSION</th>
					<th width="10%">PATIEN'S NAME</th>
					<th width="8%">DATE OF BIRTH</th>
					<th width="5%">SEX</th>
				     <th width="10%">ADDRESS</th>
					<th width="10%">MEMBERSHIP</th>
					<th width="10%">ADMITTING DIAGNOSIS</th>
					<th width="10%">ADMITTING PHYSICIAN</th>  
					 <th width="10%">DATE AND TIME OF DISCHARGED</th>  
				     <th>DISPOSITION</th>
					 <th width="15%">FINAL DIAGNOSIS</th>
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
		 var table = $("#AdmissionLogbookRepTable").dataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "hpercode"},
			{"data" : "admdate"},
			{"data" : "patname"},
			{"data" : "patbdate"},
			{"data" : "patsex"},
			{"data" : "cc_city"},
			{"data" : "cc_phmem"},
			{"data" : "cc_admitdiag"},
			{"data" : "physician"},
			{"data" : "disdate"},
			{"data" : "dispcode"},
			{"data" : "cc_finaldiag"}],
			columnDefs: 
					[
				    {
					targets : [4],
					searchable:true,
					render: function ( data, type, row ) 
					{
					switch(data) 
					{
					case 'M' : return '<i class="fa fa-male"></i>&nbsp MALE'; break;
					case 'F' : return '<i class="fa fa-female"></i>&nbsp FEMALE'; break;
					default  : return '<span class="label label-default">Unknown</span>';
					}
					},
					},
					],

		 });	 
	 }

	function getAdmlogbkList(from,to)
	{
		$.ajax({
		url: baseURL + "Rep_Admission/AdmissionlogbkReps/"+from+'/'+to,
		type:"POST",
		data: "JSON",
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
			$('#DateSearch').modal('hide');
			$('#printAdlogBkRep').click('click',function(){
			$('#form_patrec').modal({backdrop:'static'}).draggable();
			var x = document.getElementById("printadmittedpdfmodal").src = baseURL+"Rep_Admission_pdf/AdmissionLogbkreppdf/"+from+"/"+to;
			});
			var table = $("#AdmissionLogbookRepTable").dataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "hpercode"},
			{"data" : "admdate"},
			{"data" : "patname"},
			{"data" : "patbdate"},
			{"data" : "patsex"},
			{"data" : "cc_city"},
			{"data" : "cc_phmem"},
			{"data" : "cc_admitdiag"},
			{"data" : "physician"},
			{"data" : "disdate"},
			{"data" : "dispcode"},
			{"data" : "cc_finaldiag"}],
			columnDefs: 
					[
				    {
					targets : [4],
					searchable:true,
					render: function ( data, type, row ) 
					{
					switch(data) 
					{
					case 'M' : return '<i class="fa fa-male"></i>&nbsp MALE'; break;
					case 'F' : return '<i class="fa fa-female"></i>&nbsp FEMALE'; break;
					default  : return '<span class="label label-default">Unknown</span>';
					}
					},
					},
					],

		 });	 

		},
		error: function(response){
		alert("Error:Please try again!");
		}
		});
		return false;
	}

	
	$('#dateRange').validate({
		submitHandler: function(form) {
			var from = $("#from").val();
			var to = $("#to").val();
			if(from > to){
				toastr.error("'From' is greater than 'To'",'<i class="fa fa-exclamation-triangle"></i> Error.');
			}
			else{
			$.session.set('from', from);
			$.session.set('to', to);
			getAdmlogbkList(from,to);
			$("#DateSearch").modal('hide');
			var from_ = new Date($.session.get('from')).toLocaleDateString('en-us', {
				month: "numeric",
				day: "numeric",
				year: "numeric"
			});
			var to_ = new Date($.session.get('to')).toLocaleDateString('en-us', {
				month: "numeric",
				day: "numeric",
				year: "numeric"
			});
			document.getElementById('lbldate').innerHTML = ('<small><i>Date Selected From :'+from_+' - To : '+to_+'</i></small>');
			}
			return false;
			$(form).submit();
		},

		rules: {
			from: 'required',
			to: 'required',
		},

		errorElement: 'span',
		errorPlacement: function errorPlacement(error, element) {
			error.addClass('invalid-feedback');

			if (element.prop('type') === 'checkbox') {
				error.insertAfter(element.parent('label'));
			} else if (element.hasClass('select2-hidden-accessible')) {
				element = $("#selReg" + element.attr("id") + "ul").parent();

				error.insertAfter(element);
			} else {
				error.insertAfter(element);
			}
		},

		highlight: function highlight(element) {
			$(element).addClass('is-invalid').removeClass('is-valid');
			if ($(element).hasClass('select2-offscreen')) {
				element = $("#s2id_" + element.attr("id") + " ul").parent();
				$(element).addClass('is-invalid').removeClass('is-valid');
			}
		},

		unhighlight: function unhighlight(element) {
			$(element).addClass('is-valid').removeClass('is-invalid');
			if ($(element).hasClass('select2-offscreen')) {
				$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
			}
		}
	});
	</script>