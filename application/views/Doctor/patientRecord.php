<style>

table#vitalSigns.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#history.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#physical.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#systemreview.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#docOrdexam.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#docOrdpres.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<h2 class="text text-success">
<i class="fa fa-stethoscope"></i> Patient Record
</h2>
<div class="row">
<div class="col-md-3">
	<?php echo ViewPatientInformation();?>
</div>
<div class="col-md-9">
<div class="card card-accent-success">
<div class="card-body">
<h3 class="text text-success"> 
<i class="fa fa-folder-open"></i>*
&nbsp Records
</h3>
<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active  text text-success" id="home-tab" data-toggle="tab" href="#vital" role="tab" aria-controls="vital" aria-expanded="true"> <i class="fa fa-heartbeat fa-2x"></i>&nbsp VITAL SIGNS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text text-success" id="prescri-tab" data-toggle="tab" href="#histo" role="tab" aria-controls="histo"><i class="fa fa-history  fa-2x"></i> HEALTH HISTORY</a>
  </li>
 <li class="nav-item">
    <a class="nav-link text text-success" id="phyexam-tab" data-toggle="tab" href="#phyexam" role="tab" aria-controls="phyexam"><i class="fa fa-universal-access fa-2x"></i> PHYSICAL EXAM</a>
  </li>
   <li class="nav-item">
    <a class="nav-link text text-success" id="system-tab" data-toggle="tab" href="#system" role="tab" aria-controls="system"><i class="fa fa-file-o fa-2x"></i> SYSTEM REVIEW</a>
  </li>
</ul>
<div class="tab-content " id="myTabContent">
  <div class="tab-pane fade show active" id="vital" role="tabpanel" aria-labelledby="exam-tab">
<br>
<button class ="btn btn-success btn-sm" data-toggle="modal" data-target="#outpatientVitalRecordModal">
<i class="fa fa-plus"></i>
</button>
<br>
<div class="table-responsive ">
	<table id="vitalSigns" class="table table-sm table-striped table-borderless table-condensed table-hover  " width="100%">							
		<thead class="thead-dark">
			<tr>
				<th></th>
				<th width="140px">DATELOG</th>
				<th>BLOOD PRESSURE</th>
				<th>TEMPERATURE(C)</th>
				<th>PULSERATE(bpm)</th>
				<th>RESPIRATORY</th>
				<th>STATUS</th>
				<th width="100px"></th>
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
				<th width="100px"></th>
			</tr>
		</tfoot>
	</table>
</div>
  </div>
  <div class="tab-pane fade" id="histo" role="tabpanel" aria-labelledby="histo-tab">
<br>
<button class ="btn btn-success 	 btn-sm" data-toggle="modal" data-target="#outpatientHistoryRecordModal"><i class="fa fa-plus"></i></button>

	<table id="history" class="table table-sm table-striped table-borderless table-condensed table-hover " width="100%">					
		<thead class="thead-dark">
			<tr>
				<th width="50px"></th>
				<th width="50px">DATELOG</th>
				<th>HISTORY</th>
				<th>TYPE</th>
				<th width="50px">STATUS</th>									
				<th width="100px"></th>
			</tr>
		</thead>		
		<tfoot class="thead-dark">
			<tr>
				<th width="50px"></th>
				<th></th>
				<th></th>
				<th width="50px"></th>
				<th width="50px"></th>
					<th width="100px"></th>
			</tr>
		</tfoot>
	</table>
</div>



  <div class="tab-pane fade" id="phyexam" role="tabpanel" aria-labelledby="phyexam-tab">
  <br>
  <div class="card card-accent-success">
<h4 class="card-header">
<div class="row">
<div class="col-md-6">
	<div class="text text-success"> 
	<i class="fa fa-universal-access"></i>
&nbsp Physical Exam
	</div>
</div>
<div class="col-md-6">
	<div class="box-tools pull-right">
		<button class ="btn btn-success btn-square btn-sm" data-toggle="modal" data-target="#outpatientPhyExamModal"><i class="fa fa-plus"></i></button>
	</div>
</div>
</div>
</h4>
<div class="card-body">
	<table id="physical" class="table table-sm table-striped table-borderless table-condensed table-hover " width="100%">					
		<thead class="thead-dark">
			<tr>
				<th width="140px">DATELOG</th>
				<th>DESC</th>
				<th>STATUS</th>									
				<th width="50px"></th>
			</tr>
		</thead>		
		<tfoot class="thead-dark">
			<tr>
				<th width="50px"></th>
				<th></th>
				<th></th>
		
				<th width="50px"></th>
			</tr>
		</tfoot>
	</table>
</div>
<div class="card-footer"></div>
</div>
  
  
  </div>
  <div class="tab-pane fade" id="system" role="tabpanel" aria-labelledby="system-tab">
  <br>
  
<div class="card card-accent-success">
<h5 class="card-header">
<div class="text text-success"> 
<i class="fa fa-file-o"></i>
&nbsp System Review
</div>
</h5>
<div class="card-body">
	<table id="systemreview" class="table table-sm table-striped table-borderless table-condensed table-hover " width="100%">					
		<thead class="thead-dark">
			<tr>
				<th width="140px">DATELOG</th>
				<th>HISTORY</th>
				<th>TYPE</th>
				<th>STATUS</th>									
				<th width="80px"></th>
			</tr>
		</thead>		
		<tfoot class="thead-dark">
			<tr>
				<th width="50px"></th>
				<th></th>
				<th></th>
				<th></th>
				<th width="50px"></th>
			</tr>
		</tfoot>
	</table>
</div>
<div class="card-footer"></div>
</div>
 </div>
</div>

	
</div>
<div class="card-footer"></div>
</div>




<div class="card card-accent-success">
<h4 class="card-header">
<div class="row">

<div class="col-md-6">

<div class="text text-success"> 
<i class="fa fa-user-md"></i>
&nbsp Doctor's order
</div>

</div>
<div class="col-md-6">
</div>
</div>
</h4>
<div class="card-body">
<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link text text-success active" id="exam-tab" data-toggle="tab" href="#exam" role="tab" aria-controls="exam" aria-expanded="true">EXAMINATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text text-success" id="prescri-tab" data-toggle="tab" href="#prescri" role="tab" aria-controls="prescri">PRESCRIPTION</a>
  </li>
 <li class="nav-item">
    <a class="nav-link text text-success" id="supplies-tab" data-toggle="tab" href="#supplies" role="tab" aria-controls="supplies">SUPPLIES</a>
  </li>
   <li class="nav-item">
    <a class="nav-link text text-success" id="diet-tab" data-toggle="tab" href="#diet" role="tab" aria-controls="diet">DIET</a>
  </li>
    <li class="nav-item">
    <a class="nav-link text text-success" id="disch-tab" data-toggle="tab" href="#disch" role="tab" aria-controls="disch">DISCHARGE</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="exam" role="tabpanel" aria-labelledby="exam-tab">
<br>
  <div class="card card-accent-success">
 <h5 class="card-header">
<div class="row">
<div class="col-md-6">
	<div class="text text-success"> 
		<i class="fa fa-wheelchair"></i>
		&nbsp Examination
	</div>
</div>
<div class="col-md-6">
	<div class="box-tools pull-right">
		<button class ="btn btn-success btn-square btn-sm" data-toggle="modal" data-target="#ModalAccounts"><i class="fa fa-plus"></i></button>
	</div>
</div>
</div>
</h5>
  <div class="card-body">
  <table id="docOrdexam" class="table table-sm table-striped table-borderless table-condensed table-hover ">

		<thead class="thead-dark">
			<tr>
				<th width="140px">EXAMINATION</th>
				<th>CHARGESLIP</th>
				<th>PRIORITY</th>
				<th>REASON</th>
				<th>REMARKS</th>
				<th>READING FEE</th>
				<th>READING FEE</th>
				<th>READING FEE</th>
				<th width="50px"></th>
			</tr>
		</thead>
		<tfoot class="thead-dark">
			<tr>
				<th width="50px"></th>
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
  </div>
  <div class="tab-pane fade" id="prescri" role="tabpanel" aria-labelledby="prescri-tab">
 
<br>
  <div class="card card-accent-success">
 <h5 class="card-header">
<div class="row">
<div class="col-md-6">
	<div class="text text-success"> 
		<i class="fa fa-edit"></i>
		&nbsp Prescription
	</div>
</div>
<div class="col-md-6">
	<div class="box-tools pull-right">
		<button class ="btn btn-success btn-square btn-sm" data-toggle="modal" data-target="#ModalAccounts"><i class="fa fa-plus"></i></button>
	</div>
</div>
</div>
</h5>
  <div class="card-body">
  <table id="docOrdpres" class="table table-sm table-striped table-borderless table-condensed table-hover ">

		<thead class="thead-dark">
			<tr>
				<th width="140px">EXAMINATION</th>
				<th>CHARGESLIP</th>
				<th>PRIORITY</th>
				<th>REASON</th>
				<th>REMARKS</th>
				<th>READING FEE</th>
				<th>READING FEE</th>
				<th>READING FEE</th>
				<th width="50px"></th>
			</tr>
		</thead>
		<tfoot class="thead-dark">
			<tr>
				<th width="50px"></th>
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
  </div>
  <div class="tab-pane fade" id="supplies" role="tabpanel" aria-labelledby="supplies-tab">...</div>
  <div class="tab-pane fade" id="diet" role="tabpanel" aria-labelledby="diet-tab">...</div>
  <div class="tab-pane fade" id="disch" role="tabpanel" aria-labelledby="disch-tab">...</div>
</div>

	
</div>
<div class="card-footer"></div>
</div>
<?php echo ViewOutPatientModal();?>
</div>
</div>

<input type="hidden" name = "base_url" id = "base_url" value="<?php echo base_url();?>">
<input type="hidden" name="lEnccode" id="lEnccode" value='<?php echo $this->uri->segment(3)."/".$this->uri->segment(4)."/".$this->uri->segment(5);?>'>
<input type="hidden" name = "lhpercode" id = "lhpercode" value="<?php echo $this->uri->segment(6);?>">
<script type="text/javascript">
	$(document).ready(function()
	{
	var hpercode = $('#lhpercode').val();
	var enccode = $('#lEnccode').val();
	initPatientRecord(hpercode);
	VitalSigns(enccode);
	History(enccode);
	Physical(enccode);
	sysReview(enccode);
    });
	
	$('#outpatientVitalRecordModal').on('hidden.coreui.modal', function(){
	
		$("#frmVitalSign").find("input,textarea,select")
       .val('')
       .end();
	   $("#frmVitalSign").find("input,textarea,select").removeClass('is-valid');
	   $("#frmVitalSign").find("input,textarea,select").removeClass('is-invalid');
	    $('#vsformIden').val("insert");
	});
	
	$(this).on('hidden.coreui.modal', function(){
		
		$("#frmHistory").find("input,textarea,select")
       .val('')
       .end();
	   $('#frmHistory').find('input').prop('readonly',false);
	   $("#frmHistory").find("input").removeClass('is-valid');
	   $("#frmHistory").find("input").removeClass('is-invalid');
	   $('#hisformIden').val("insert");
	});
	
	
	$('#vitalSigns').on('click','.ModalEditVitalSign',function(){
		
	$('#outpatientVitalRecordModal').modal('show');
		var enccode=$(this).data('enccode');
		$.ajax({
		type: "POST",
		url: "<?php echo base_url();?>Outpatient/vitalSignInfo/"+enccode,
		data: "JSON",
		async:false,
		success: function(data)
		{
			obj = $.parseJSON(data);
			$('#vsformIden').val('update');
			$('#vsEnccode').val(obj['vital']['enccode']);
			$('#vsHpercode').val(obj['vital']['hpercode']);
			$('#vsBp').val(obj['vital']['vsbp']);
			$('#vsTemp').val(obj['vital']['vstemp']);
			$('#vsPulse').val(obj['vital']['vspulse']);
			$('#vsRr').val(obj['vital']['vsresp']);
			$('#vsOral').val(obj['vital']['intoral']);
			$('#vsNC').val(obj['vital']['intng']);
			$('#vsBlood').val(obj['vital']['intblood']);
			$('#vsIntake').val(obj['vital']['intiv']);
			$('#vsMiscel').val(obj['vital']['intmisc']);
			$('#vsHeight').val(obj['height']['othrmeas']);
			$('#vsWeight').val(obj['weight']['othrmeas']);
			$("#vsHeightMeasure option[value='" + obj['height']['othrunit']+"']").attr("selected","selected");
			$("#vsWeightMeasure option[value='" + obj['weight']['othrunit']+"']").attr("selected","selected");
		},
		error: function(data)
		{
			alert("Error: Fetching Patient Vital Sign!");
		}
		});
	});
	
	
	$('#history').on('click','.ModalEditHistory',function(){
		
	$('#outpatientHistoryRecordModal').modal('show');
		var enccode=$(this).data('enccode');
		var histype=$(this).data('histype');
	
		$.ajax({
		type: "POST",
		url: "<?php echo base_url();?>Outpatient/historyInfo/"+enccode,
		data: "JSON",
		async:false,
		success: function(data)
		{
		obj = $.parseJSON(data);
		$('#hisformIden').val('update');
		$('#hisEnccode').val(enccode);
		$('#frmHistory').find('input').prop('readonly',true);
		$('#hisGen').val(obj['geninfo']['history']);
		$('#hisPast').val(obj['pahis']['history']);
		$('#hisOccup').val(obj['occup']['history']);
		$('#hisComp').val(obj['comp']['history']);
		$('#hisFam').val(obj['fahis']['history']);
		$('#hisDrug').val(obj['drugthe']['history']);
		$('#hisAlc').val(obj['alcohol']['history']);
		$('#hisTob').val(obj['tobacco']['history']);
		$('#hisDrgAll').val(obj['drugall']['history']);
		$('#hisOthAll').val(obj['othrall']['history']);
		 	switch(histype) 
			{
				case 'GDPPR' : 
				$('#hisGen').prop('readonly',false); 
				break;
				case 'PAHIS' : 
				$('#hisPast').prop('readonly',false); 
				break;
				case 'OCENV' : 
				$('#hisOccup').prop('readonly',false);
				break;
				case 'COMPL' : 
				$('#hisComp').prop('readonly',false);
				break;
				case 'FAHIS' : 
				$('#hisFam').prop('readonly',false);
				break;
				case 'DRTHE' : 
				$('#hisDrug').prop('readonly',false);  
				break;
				case 'ALCOH' : 
				$('#hisAlc').prop('readonly',false); 
				break;
				case 'TOBAC' : 
				$('#hisTob').prop('readonly',false);
				break;
				case 'DRUGA' : 
				$('#hisDrgAll').prop('readonly',false); 
				break;
				case 'OTHAL' : 
				$('#hisOthAll').prop('readonly',false); 
				break;  				
				default  : return '<div class="text-default"></span>';
			}
		
		
		},
		error: function(data)
		{
			alert("Error: Fetching Patient Vital Sign!");
		}
		});
	});
 function VitalSigns(enccode)
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
	var t = $("#vitalSigns").dataTable({
			
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
	ajax:
	{
	"url": "<?php echo base_url();?>Outpatient/OutpatientVitalSigns/"+enccode,
	"type": "POST",
	}, 
	columnDefs: 
	[
	{
	targets: 0,
	visible:false,
	},
	{	
	targets : 6,
	searchable:false,
		render: function ( data, type, row ) 
		{
			switch(data) 
			{
				case 'A' : return '<div class="text-success">Active</span>'; break;
				case 'I' : return '<div class="text-primary">Inactive</span>'; break;
				default  : return '<div class="text-default"></span>';
			}
		},
	},
	
	],	
	order: [[0, 'asc']],		
	rowCallback: function(row, data, iDisplayIndex) 
	{
	var info = this.fnPagingInfo();
	var page = info.iPage;
	var length = info.iLength;
	var index = page * length + (iDisplayIndex + 0)
	}
	});
	
	
	}	
	function History(enccode)
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
	var t = $("#history").dataTable({
			
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
	ajax:
	{
	"url": "<?php echo base_url();?>Outpatient/OutpatientHistory/"+enccode,
	"type": "POST"
	}, 
	columnDefs: 
	[
	{
	targets: 0,
	visible:false,
	},
	{	
	targets : 4,
	searchable:false,
		render: function ( data, type, row ) 
		{
			switch(data) 
			{
				case 'A' : return '<div class="text-success">Active</span>'; break;
				case 'I' : return '<div class="text-primary">Inactive</span>'; break;
				default  : return '<div class="text-default"></span>';
			}
		},
	},
	{	
	targets : 3,
	searchable:false,
		render: function ( data, type, row ) 
		{
			switch(data) 
			{
				case 'GDPPR' : return '<div class="text-info">GENERAL DATA</span>'; break;
				case 'PAHIS' : return '<div class="text-info">PATIENT HISTORY</span>'; break;
				case 'OCENV' : return '<div class="text-info">OCCUPATION</span>'; break;
				case 'COMPL' : return '<div class="text-info">COMPLAINT</span>'; break;
				case 'FAHIS' : return '<div class="text-warning">FAMILY HISTORY</span>'; break;
				case 'DRTHE' : return '<div class="text-warning">DRUG THERAPY</span>'; break;
				case 'ALCOH' : return '<div class="text-danger">ALCOHOL</span>'; break;
				case 'TOBAC' : return '<div class="text-danger">TOBACCO</span>'; break;
				case 'DRUGA' : return '<div class="text-primary">DRUG ALLERGIES</span>'; break;
				case 'OTHAL' : return '<div class="text-primary">OTHER ALLERGIES</span>'; break;
				default  : return '<div class="text-default"></span>';
			}
		},
	},
	
	],	
	order: [[0, 'asc']],		
	rowCallback: function(row, data, iDisplayIndex) 
	{
	var info = this.fnPagingInfo();
	var page = info.iPage;
	var length = info.iLength;
	var index = page * length + (iDisplayIndex + 0)
	}
	});
	
	
	}
	
	function sysReview(hpercode)
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
	var t = $("#systemreview").dataTable({
			
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
	ajax:
	{
	"url": "<?php echo base_url();?>Outpatient/OutpatientSystemReview/"+hpercode,
	"type": "POST"
	}, 
	columnDefs: 
	[{	
	targets : 3,
	searchable:false,
		render: function ( data, type, row ) 
		{
			switch(data) 
			{
				case 'A' : return '<div class="text-success">Active</span>'; break;
				case 'I' : return '<div class="text-primary">Inactive</span>'; break;
				default  : return '<div class="text-default"></span>';
			}
		},
	},
	{	
	targets : 2,
	searchable:false,
		render: function ( data, type, row ) 
		{
			switch(data) 
			{
				case 'COMPL' : return '<div class="text-info">COMPLAINT</span>'; break;
				case 'PAHIS' : return '<div class="text-primary">PAST HISTORY</span>'; break;
				case 'FAHIS' : return '<div class="text-primary">FAMILY HISTORY</span>'; break;
				default  : return '<div class="text-default"></span>';
			}
		},
	},
	
	],	
	order: [[0, 'asc']],		
	rowCallback: function(row, data, iDisplayIndex) 
	{
	var info = this.fnPagingInfo();
	var page = info.iPage;
	var length = info.iLength;
	var index = page * length + (iDisplayIndex + 0)
	}
	});
	
	
	}
	
	function Physical(hpercode)
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
	var t = $("#physical").dataTable({
			
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
	ajax:
	{
	"url": "<?php echo base_url();?>Outpatient/OutpatientPhysicalExam/"+hpercode,
	"type": "POST"
	}, 
	columnDefs: 
	[
	{	
	targets : 2,
	searchable:false,
		render: function ( data, type, row ) 
		{
			switch(data) 
			{
				case 'COMPL' : return '<div class="text-info">COMPLAINT</span>'; break;
				case 'PAHIS' : return '<div class="text-primary">PAST HISTORY</span>'; break;
				case 'FAHIS' : return '<div class="text-primary">FAMILY HISTORY</span>'; break;
				default  : return '<div class="text-default"></span>';
			}
		},
	},
	
	],	
	order: [[0, 'asc']],		
	rowCallback: function(row, data, iDisplayIndex) 
	{
	var info = this.fnPagingInfo();
	var page = info.iPage;
	var length = info.iLength;
	var index = page * length + (iDisplayIndex + 0)
	}
	});
	
	
	}
	
	
	function docOrdexam(enccode)
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
	var t = $("#docOrdexam").dataTable({
			
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
	ajax:
	{
	"url": "<?php echo base_url();?>Outpatient/OutpatientPhysicalExam/"+hpercode,
	"type": "POST"
	}, 
	columnDefs: 
	[{	
	targets : 3,
	searchable:false,
		render: function ( data, type, row ) 
		{
			switch(data) 
			{
				case 'A' : return '<div class="text-success">Active</span>'; break;
				case 'I' : return '<div class="text-primary">Inactive</span>'; break;
				default  : return '<div class="text-default"></span>';
			}
		},
	},
	{	
	targets : 2,
	searchable:false,
		render: function ( data, type, row ) 
		{
			switch(data) 
			{
				case 'COMPL' : return '<div class="text-info">COMPLAINT</span>'; break;
				case 'PAHIS' : return '<div class="text-primary">PAST HISTORY</span>'; break;
				case 'FAHIS' : return '<div class="text-primary">FAMILY HISTORY</span>'; break;
				default  : return '<div class="text-default"></span>';
			}
		},
	},
	
	],	
	order: [[0, 'asc']],		
	rowCallback: function(row, data, iDisplayIndex) 
	{
	var info = this.fnPagingInfo();
	var page = info.iPage;
	var length = info.iLength;
	var index = page * length + (iDisplayIndex + 0)
	}
	});
	
	
	}
</script>
<script src="<?php echo base_url()?>assets/scripts/outpatient/outpatient.js"></script>
<script src="<?php echo base_url()?>assets/scripts/outpatient/outpatient_validations.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>


