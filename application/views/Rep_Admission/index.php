
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<form id="dateRange" method="post">
	<div class="modal" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
					<div class="modal-header">
						<h1 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h1>
					</div>
					<div class="modal-body border-success">						
						<div id="baseDateControl">
							<div class="row-md-6">
								<label class="text-success">From</label>
								<input type="date" class="form-control form-control-mg" placeholder="start date" name ="dateStart" id="dateStart" autocomplete="off" />
							</div>
							<div class="row-md-6">
								<label class="text-success">to</label>
								<input type="date" class="form-control form-control-mg" placeholder="end date" name ="dateEnd" id="dateEnd" autocomplete="off" />
							</div>
						</div>
					</div>
					<div class="modal-footer bg-secondary">
					<button type="submit" name="RepPatientAdm" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
				
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
								&nbsp  <?php echo $header;?>
					</div>
				</div>
				<div class="col-md-6">
						<div class="btn-group pull-right" role="group" aria-label="">
						    <button type="button" class="btn btn-success tn-square btn-ladda" data-toggle="modal" data-target="#DateSearch">
						    		<i class="fa fa-calendar"></i>
								  Date Range
							</button>
	               			 <a class="btn btn-success btn-square btn-ladda" data-style="zoom-in"  href="<?php echo site_url('Rep_Admission/AdmittedPatientRep');?>"><i class="fa fa-file-pdf-o"></i>
	               			 </a>
			    		</div>
				</div>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table id="AdmissionReportTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
				<thead class="thead-dark">
					<tr>
					<th>DATE ADMITTED</th>  
					 <th>HEALTH RECORD #</th>  
					<th>NAME OF PATIENTS</th>
				     <th>WARD</th>
					<th>ROOM NO.</th>
					<th>BED NO.</th>
					 <th width="20%">DIAGNOSIS</th>
					</tr>
				</thead>
				<tfoot class="thead-dark">
					<tr>
					
						<th></th>
						<th> </th>
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
	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#DateSearch").modal();
	RepPatientAdm();
	parseDateValue(rawDate);
	});

	function RepPatientAdm()
	{
	var data = new Object();
	data.id = "AdmissionReportTable";
	data.link = "<?php echo site_url('Rep_Admission/admittedPatientReport');?>";
	data.type = "POST";
	loadTable(data);
	};
	$.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex){
            var dateStart = parseDateValue($("#dateStart").val());
            var dateEnd = parseDateValue($("#dateEnd").val());
            var evalDate= parseDateValue(aData[0]);

            if (evalDate >= dateStart && evalDate <= dateEnd) {
                return true;
            }
            else {
                return false;
            }

        });

    function parseDateValue(rawDate) {
        var dateArray= rawDate.split("/");
        var parsedDate= dateArray[0] + dateArray[1] + dateArray[2]+ dateArray[3] + dateArray[4]+ dateArray[5]+ dateArray[6];
        return parsedDate;
    }


    $(function() {
        var $dTable= $("table.AdmissionReportTable").dataTable( {
            "iDisplayLength": 200,
            "bStateSave": false,
            "oLanguage": {
                "sLengthMenu": 'Show <select><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="200">200</option></select> entries'
            },
            "aaSorting": [[0,'asc']],
            "aoColumns": [
                { "sType": "date" },
                null,
                null
            ]
        });
        $('.datepicker').datepicker(
            {showOn: 'button', buttonImage: 'assets/images/calendar.gif', buttonImageOnly: true}
        );
        $("#dateStart").keyup ( function() { $dTable.fnDraw(); } );
        $("#dateStart").change( function() { $dTable.fnDraw(); } );
        $("#dateEnd").keyup ( function() { $dTable.fnDraw(); } );
        $("#dateEnd").change( function() { $dTable.fnDraw(); } );

    });
</script>