<html>
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
<title>Employee</title>
</head>
<body>
<a class="btn btn-primary" href="<?php echo site_url('Employee/Create');?>">Add</a>

<table id="Employee" class="table table-hover  table-bordered table-condensed table-striped">
              <thead>
                <tr>
                <th width="80px">Employee ID</th>
				<th width="200px">Last Name</th>
                <th width="200px">First Name</th>
                <th width="200px">Middle Name</th>
                <th width="200px">Maiden Name</th>
                <th width="200px">Status</th>
                <th width="200px">Prefix</th>
                <th width="200px">Suffix</th>
                <th width="200px">Department</th>
                <th width="200px">Position Title</th>
                <th width="200px">Address</th>
                <th width="200px">Contact No.</th>
                <th width="200px">Tax ID No.</th>
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

                var t = $("#Employee").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#Employee input')
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
                    ajax: {"url": "<?php echo base_url();?>index.php/Employee/Employee_list", "type": "POST"},
                 	columnDefs: 
					[
				    {
					targets : [5],
					searchable:true,
					render: function ( data, type, row ) 
					{
					switch(data) 
					{
					case 'A' : return '<span class="label label-success">Active</span>'; break;
					case 'I' : return '<span class="label label-danger">Inactive</span>'; break;
					default  : return '<span class="label label-default">Unknown</span>';
					}
					},
					},
					],
					
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

