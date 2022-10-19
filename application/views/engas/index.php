<div class="row">
	<div class="col-md-9">
		<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h4 text text-success">
					<i class="fas fa-database"></i>
					&nbsp;<?php echo $header; ?><small>&nbsp;&nbsp;<?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
		
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<div id="loadView"></div>
	</div>
	<div class="card-footer">
	</div>
</div>

	</div>
	<div class="col-md-3">
		<div class="card card-accent-success">
				<div class="card-body">
					<h4 class="text-center text-success"><img src = "<?php echo base_url();?>/assets/img/coa.png"  class="img-fluid rounded" width="30px"; height="30px";></img> <?php echo $header;?></h4>
					<hr></hr>
						<a  href ="javascript:void(0);" id="btnTrans"  class="btn  btn-block btn-outline-success"><i class="fa fa-money fa-2x"></i></br>Transaction/s</a>
						<a  href ="javascript:void(0);" id="btnJEV"  class="btn  btn-block btn-outline-success"><i class="fa fa-users fa-2x"></i></br>Patient Transactions</a>
						<a  href ="javascript:void(0);" id="btnJBR"  class="btn  btn-block btn-outline-success"><i class="fa fa-bar-chart fa-2x"></i></br>Journal Bill Rendered</a>
						<a  href ="javascript:void(0);" id="btnCashRec"  class="btn  btn-block btn-outline-success"><i class="fa fa-sync fa-2x"></i></br>Cash Receipt Record </a>
						<a  href ="javascript:void(0);" id="btnSubsiLedger"  class="btn  btn-block btn-outline-success"><i class="fa fa-file-o fa-2x"></i></br>Subsidiary Ledger</a>
						<a  href ="javascript:void(0);" id="btnSupLedger"  class="btn  btn-block btn-outline-success"><i class="fa fa-medkit fa-2x"></i></br>Supplies Ledger</a>
						<a  href ="javascript:void(0);" id="btnRepSup"  class="btn  btn-block btn-outline-success"><i class="fa fa-list fa-2x"></i></br>Reports Supplies</a>
						<a  href ="javascript:void(0);" id="btnPCI"  class="btn  btn-block btn-outline-success"><i class="fa fa-database fa-2x"></i></br>Physical Count Inventory</a>
						<a  href ="javascript:void(0);" id="btnChart"  class="btn  btn-block btn-outline-success"><i class="fa fa-cog fa-2x"></i></br>Chart of Account</a>
				</div>
			</div>
	</div>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.12.1/api/sum().js"></script>
	<input name="module" id ="module" type="hidden" value="<?php echo $module;?>">
	<script type="text/javascript">
	$(function(){initTrans();});
	$("#btnTrans").click(function(){initTrans();});
	$("#btnJEV").click(function(){initJev();});
	$("#btnChart").click(function(){initChart();});
	$("#btnJBR").click(function(){initJBR();});
	$("#btnCashRec").click(function(){initCashrec();});

	function initTrans()
	{
		$("#loadView").load(baseURL+"ENGAS/trans_view",function(){
			$("#btnTrans").addClass('active'); 
			$("#btnJEV").removeClass('active'); 
			$("#btnJBR").removeClass('active'); 
			$("#btnCashRec").removeClass('active');
			$("#btnSubsiLedger").removeClass('active');
			$("#btnSupLedger").removeClass('active');
			$("#btnRepSup").removeClass('active');
			$("#btnPCI").removeClass('active');
			$("#btnChart").removeClass('active');
			transaction();
		});
	}
	
		
	function initChart()
	{
		$("#loadView").load(baseURL+"ENGAS/major_view",function(){
			$("#btnTrans").removeClass('active'); 
			$("#btnJEV").removeClass('active'); 
			$("#btnJBR").removeClass('active'); 
			$("#btnCashRec").removeClass('active');
			$("#btnSubsiLedger").removeClass('active');
			$("#btnSupLedger").removeClass('active');
			$("#btnRepSup").removeClass('active');
			$("#btnPCI").removeClass('active');
			$("#btnChart").addClass('active');
			en_major()
		});
	}

	function initJBR()
	{
		$("#loadView").load(baseURL+"ENGAS/jbr_view",function(){
			$("#btnTrans").removeClass('active'); 
			$("#btnJEV").removeClass('active'); 
			$("#btnJBR").addClass('active'); 
			$("#btnCashRec").removeClass('active');
			$("#btnSubsiLedger").removeClass('active');
			$("#btnSupLedger").removeClass('active');
			$("#btnRepSup").removeClass('active');
			$("#btnPCI").removeClass('active');
			$("#btnChart").removeClass('active');
			jbrData();
		});
	}

	
	function initCashrec()
	{
		$("#loadView").load(baseURL+"ENGAS/cashrec_view",function(){
			$("#btnTrans").removeClass('active'); 
			$("#btnJEV").removeClass('active'); 
			$("#btnJBR").removeClass('active'); 
			$("#btnCashRec").addClass('active');
			$("#btnSubsiLedger").removeClass('active');
			$("#btnSupLedger").removeClass('active');
			$("#btnRepSup").removeClass('active');
			$("#btnPCI").removeClass('active');
			$("#btnChart").removeClass('active');
			receiptData();
		});
	}

	function initJev()
	{
		$("#loadView").load(baseURL+"ENGAS/jev_view",function(){
			$("#btnTrans").removeClass('active'); 
			$("#btnJEV").addClass('active'); 
			$("#btnJBR").removeClass('active'); 
			$("#btnCashRec").removeClass('active');
			$("#btnSubsiLedger").removeClass('active');
			$("#btnSupLedger").removeClass('active');
			$("#btnRepSup").removeClass('active');
			$("#btnPCI").removeClass('active');
			$("#btnChart").removeClass('active');
			jev();
		});
	}
	
	function en_major()
	{
		$("#en_major").DataTable({
		"ajax": baseURL+"ENGAS/en_major",
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 "rowsGroup":[0,1],
		 "destroy":true,
		 "columns" : [
		 {data : "ACCTCODE"},
		 {data : "ACCTDESC"},
		 {data : "CODE"},
		 {data : "DESCRIPTION"}
		
		]
		});
	}

	function receiptData()
	{
		$("#receiptTbl").DataTable({
		"ajax": baseURL+"ENGAS/cashrec",
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 "rowsGroup":[0,1,2,3,4,5],
		 "destroy":true,
		 "columns" : [
		 {data : "orno"},
		 {data : "acctno"},
		 {data : "patname"},
		 {data : "chrgdesc"},
		 {data : "amt"},
		 {data : "bal"} ],
		"columnsDef":[
			{
				"targets":['0,1,2'],
				"className":"dt-center"
			}
		]
		});
	}


	function jev()
	{
		$("#en_jev").DataTable({
		"ajax": baseURL+"ENGAS/patientAccount",
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 "rowsGroup":[2],
		 "destroy":true,
		 "columns" : [
			{
			data: "jev_no",
			render: function(data, type, row){
				if(data== null ){
					return "NO JEV"
				}else{
					return data;
				}
			}	
		 },
		 {data : "paacctno"},
		 {data : "patientname"},
		 
		 {
			data: "enccode",
			render: function(data, type, row){
				return "<button type='button' class='btn btn-outline-success btn-block' id='btntrans' data-acctno ='"+row.paacctno+"' data-jevno ='"+row.jev_no+"' data-id ='"+data+"'><i class='fa fa-pencil'></i>&nbsp Transactions</button>";
			}	
		 }
			]
		});
		$("#en_jev").on('click','#btntrans',function(){
		$("#modalPatientTransaction").modal('show');
			var id= $(this).data('id');
			var acctno= $(this).data('acctno');
			var jev_no= $(this).data('jev_no');
			$.get(baseURL+'ENGAS/generatejev',  
              function (data, textStatus, jqXHR) {  
                $("#jevno").val(data);
        	 });	
			getParticular(acctno);
			supportingDocuments(acctno);
			$("#jevdate").val(getTimeLocale());
			$("#acctno").val(acctno);
			patientTrans(id);
		});
	}

	function patientTrans(enccode)
	{
		var jev_table=$("#tbl_jev").DataTable({
		 "ajax": {
			"url":baseURL+"ENGAS/PatientTransctions",	
			"type":"POST",
			 "data":{enccode:enccode}},
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 
		 "info":false,
		 "paging":false,
		 "searching":false,
		 "destroy":true,
		 "columns" : [
			{
				data:null,
				render: function(data, type, row){
					return '';
			}	
			},
			{data : "acctdesc",
				render: function(data, type, row){
				return data;
			}
			},
			{data : "acctcode"},
			{data : "uacscode"},
			{data : "debit"},
			{data : "credit"},
			{data : "location"}
		],
		"columnDefs":[
			{	
			targets:[4,5],
			className:"text-center"
			}
		
		],

		"drawCallback": function ( settings ) {
					var api = this.api();
					var rows = api.rows( {page:'_all'} ).nodes();
					var last=null;
		var total =	api.column( 5, {page:'_all'} ).data().sum();
					$(rows).eq(0).before(
							'<tr class="group text-left table-success">'+
							'<td></td>'+
							'<td ><b>Cash Collecting Officer </b></td>'+
							'<td>10101010</td>'+
							'<td></td>'+
							'<td class="text-center">'+total+'</td>'+
							'<td></td>'+
							'<td></td>'+
							'</tr>'
					);
			},
			"footerCallback" : function ( row, data, start, end, display ) {
           
				var api = this.api(), data;
 

				var intVal = function ( i ) {
					return typeof i === 'string' ?
						i.replace(/[\$,]/g, '')*1 :
						typeof i === 'number' ?
							i : 0;
				};

				var totalDebit = api
					.column( 4, { page: '_all'} )
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );
					
				var totalCredit = api
					.column( 5, { page: '_all'} )
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );
				
				$( api.column(4).footer() ).html(
					'<div class=" h4 text-center text-success">'+formatNumber(totalCredit.toFixed(2))+'</div>'
				);
			
				$( api.column(5).footer() ).html(
					'<div class=" h4 text-center text-success">'+formatNumber(totalCredit.toFixed(2))+'</div>'
				);

				}
		});

		
	}

	function supportingDocuments(acctno)
	{
		$("#jev_doc").DataTable({
		 "ajax": {
			"url":baseURL+"ENGAS/jevsupDoc",
			"type":"POST",
			"data":{acctno:acctno}
			},
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 "destroy":true,
		 "paging":false,
		 "searching":false,
		 "columns" : [
		 {data : "date"},
		 {data : "description"},
		 {data : "refno"},
		 {
			data: "enccode",
			render: function(data, type, row){
				return "<button type='button' class='btn btn-outline-danger btn-sm btn-block btn-sm' id='btntrans' data-jevno ='"+row.jev_no+"' data-id ='"+data+"'><i class='fa fa-close'></i></button>";
			}	
		 }
		
		 ]
		});
	}
	

	function jbrData()
	{
		$("#jbrtbl").DataTable({
		"ajax": baseURL+"ENGAS/JBR",
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 "destroy":true,
		 "columns" : [
		 {data : "hpercode"},
		 {data : "soanum"},
		 {data : "patname"},
		 {data : "cc_typ"},
		 {data : "enter"},
		 {data : "disch"},
		 {data : "cc_finaldiag"},
		 {data : "cc_icd"},
		 {data : "case1"},
		 {data : "TSDESC"},
		 {data : "cc_pf"},
		{
			render: function(data, type, row){
				return parseInt(row.cc_ttlhpf) + parseInt(row.cc_ttlhpf);
			}	
		},
		 {data : "cc_ttlhf"},
		 {data : "cc_ttlhpf"},
		 {data : "cc_ttlPhicpckg"},
		 {data : "cc_ttlPHICpf"},
		 {data : "cc_ttlPHIChf"}
		
		
		 ]
		});
	}
	
	function transaction()
	{
		$("#en_trans").DataTable({
		"ajax": baseURL+"ENGAS/translist",
		 "aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
		 "destroy":true,
		 "columns" : [
		 {data : "trans_date"},
		 {data : "trans_code"},
		 {data : "description"},
		 {
			data: "trans_id",
			render: function(data, type, row){
				return "<div class='btn-group' role='group'><button id='btnGroupDrop1'  type='button' class='btn btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>"
				+"<i class='fa fa-refresh'></i>"
				+"</button>"
				+"<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>"
				+"<a class='dropdown-item' id='btntrans_Edit' data-id ='"+data+"' href='#'><i class='fa fa-pencil'></i>&nbsp Edit</a>"
				+"<a class='dropdown-item' id='btntrans_Delete' data-id ='"+data+"' href='#'><i class='fa fa-trash'></i>&nbsp Return</a></div>"
				+"</div>";
			}	
		 }
		 ]
		});
	}
	</script>



