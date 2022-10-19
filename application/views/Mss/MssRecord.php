<form id="frmMSSRecord" name="frmMSSRecord">
	<input type="hidden" name="formIden" id="formIden">
	<input type="hidden" name="patenccode" id="patenccode">
	<input type="hidden" name="pathpercode" id="pathpercode">
	<div class="modal" id="MSSRecord" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg " role="dialog">
			<div class="modal-content card-accent-success">
			<div class="modal-body border-success">
				<h3 class="modal-title text-success"><i class="fa fa-list"></i>&nbsp Classification</h3>
				<br>
				<div class="row">
					<div class="col-md-12 mb-2">
						<table class="table table-hover table-sm table table-striped table-bordered table-condensed" id="tblMssRecordList">
							<thead>
							<tr>
								<th width="60px">Datelog</th>
								<th>ENCOUNTER</th>
								<th>DISCHARGED</th>
								<th>CLASSIFICATION</th>
								<th>FINAL DIAGNOSIS</th>
							</tr>
							</thead>
						</table>
					</div>
				</div>	
			</div>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function()
	{

		
	
    });

    $("#showMSSRecord").click(function(){
    	setMSSRecord($("#hpercode").val());

    });
	function MSS(enccode,hpercode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;
		
		data.id = "chargeMSS";
		data.link = baseURL+"Billing/chargesMSS/"+enctr+"/"+hpercode,
		data.type = "POST";
		data.coldef =[
			{
				targets: [0,1,2],
				visible:false,
				orderable:false,
			},
		
		],
		loadTable(data);
	}
	

	function setMSSRecord(hpercode) {
		var table2 = $('#tblMssRecordList').DataTable({
      "pageLength": 5,
      "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
      "pagingType": "full_numbers",
      "processing": true,
      "serverSide": true,
      "destroy": true,
      "order": [[0, "desc"]],
      
      "ajax": {
        url: '<?php echo base_url() . "MSS/MssRecord/"; ?>' + hpercode ,
        type: 'POST'
      },
      "columns": [
        {'data': 'encdate', 'defaultContent': ''},
        {'data': 'toecode', 'defaultContent': ''},
        {'data': 'disdate', 'defaultContent': ''},
        {'data': 'mssdesc', 'defaultContent': ''},
        {'data': 'diagtext', 'defaultContent': ''}

      ]
    });
	
	$('#tblMssRecordList').on('click', 'tr', function () {
		var data = table2.row(this).data();

		if(data == undefined){
			return;
		}

		$("#date").text(data['encdate']);
		$("#enctr").text(data['toecode']);
		$("#msshpercode").text(data['hpercode']);
		$("#enccode").text(data['enccode']);
		$('#MSSRecord').modal('hide');


		});
	}

	
</script>