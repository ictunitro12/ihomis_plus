<html>
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
<title>Hospital</title>
</head>
<body>

<table id="Hospital" class="table table-hover  table-bordered table-condensed table-striped">
              <thead>
                <tr>

                <th width="80px">FHUD Code</th>
				<th>PAN</th>
                <th>Validity Date</th>
                <th>Hospital Name</th>
                <th>Abbreviation</th>
                <th>Type of Hospital</th>
                <th>Required Bed Capacity</th>
                <th>PHIC Accredited Beds</th>
                <th>No. and Street</th>
                <th>City/Municipality</th>
                <th>Province</th>
                <th>Zip Code</th>
                <th>Barangay</th>
                <th>Country Code</th>
                <th>Company</th>
                <th>User ID</th>
                <th>Password</th>
                <th>User ID</th>
                <th>Password</th>
                <th>Hospital Code</th>
                <th>Web Service Password</th>
                <th>New FHUD Code</th>
                <th>User ID</th>
                <th>Password</th>
                <th>Hospital Email</th>
                <th>Hospital Contact No.</th>
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

                var t = $("#Hospital").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#Hospital input')
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
                    ajax: {"url": "<?php echo base_url();?>index.php/Hospital/Hospital_list/<?php echo $this->uri->segment(3);?>", "type": "POST"},
                    
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

