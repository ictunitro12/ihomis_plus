<html>
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
<title>Setup</title>
</head>
<body>
<a class="btn btn-primary" href="<?php echo site_url('Setup/Create');?>">Add</a>

<table id="Setup" class="table table-hover  table-bordered table-condensed table-striped">
              <thead>
                <tr>

                <th width="80px">Set-up Code</th>
				<th>Date as of</th>
                <th>Currency</th>
                <th>Peso Equivalent per Relative Unit Value</th>
                <th>Anesthesiologist Percent Fee</th>
                <th>Room and Board Not Exceeding This Day(s)</th>
                <th>Room and Board Not Exceeding This Day(s) To Be Shared By His Dependents</th>
                <th>Cut-off Time For Billing</th>
                <th>Include Professional Fee</th>
                <th>Include Additional Professional</th>
                <th>Civilian Population</th>
                <th>Retro Payments</th>
                <th>Retro Amount</th>
                <th>Separate Prof. Fee From Hospital</th>
                <th>Itemized Room Charges</th>
                <th>Display Name of Doctor Instead of Services Rendered</th>
                <th>Certified Correct By</th>
                <th>Basis Room Computation</th>
                <th>Aggregate Bill Charges for Manual</th>
                <th>Hosp. No. Editable?</th>
                <th>Display Old</th>
                <th>Basis of Rate of Examinations</th>
                <th>Max. No. of Deliveries for PHIC Computation</th>
                <th>Max. PHIC Claim for Normal</th>
                <th>Max. PHIC Claim for Professional Fee if NSD</th>
                <th>GP Max PF per day (Class A, B and C)</th>
                <th>Specialist's Max PF (Class A, B and C)</th>
                <th>GP Max PR per day (Class D)</th>
                <th>Specialist's Max PF</th>
                <th>Picture Repository</th>
                <th>Sequence</th>
                <th>FTP URL</th>
                <th>FTP Shared Folder</th>
                <th>FTP User ID</th>
                <th>FTP Password</th>
                <th>PHIC Form 2 Authorized Signatory</th>
                <th>PHIC Form 2 Official Designation</th>
				<th width="200px">Action</th>
                </tr>
            </thead> 
</table>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script type="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.2/cjs/popper-base.min.javascript"></script>
<script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };
				$.fn.dataTable.ext.errMode = 'throw';

                var t = $("#Setup").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#Setup input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                    sProcessing: '<i class="fa fa-refresh fa-spin" style="font-size:24px;color:green"></i>'
                    },
                    processing: true,
                    serverSide: true,
					searching:true,
					info:true,
					orderable: true,
					paging: true,
					autoWidth: true,
                    ajax: {"url": "<?php echo base_url();?>index.php/Setup/Setup_list/<?php echo $this->uri->segment(3);?>", "type": "POST"},
                    
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 0);
                       
                    }
                });
            });
        </script>
</body>

</html>

