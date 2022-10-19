<html>
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
<title>TypeofAccountPrice</title>
</head>
<body>
<a class="btn btn-primary" href="<?php echo site_url('DrugsandMedicines/Createtoaprice');?>">Add</a>

<table id="TypeofAccountPrice" class="table table-hover  table-bordered table-condensed table-striped">
              <thead>
                <tr>
                <th></th>
                <th width="80px">Unit</th>
				<th>Unit Price</th>
                <th>Selling Price</th>
                <th>Date as of</th>
                <th>Remarks</th>
                <th width="200px">Action</th>
                </tr>
            </thead> 
</table>
	
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

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

                var t = $("#TypeofAccountPrice").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#TypeofAccountPrice input')
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
                    ajax: {"url": "<?php echo base_url();?>index.php/DrugsandMedicines/TypeofAccountPrice_list/<?php echo $this->uri->segment(3);?>", "type": "POST"},
                    "columnDefs": [ {
                    "targets": 0,
                    "visible": false
                    } ],
                 	
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

