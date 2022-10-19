<form id="dateRange" method="post">
    <div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
            <div class="modal-content card-accent-success">
                <div class="modal-header">
                    <h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                    <div id="baseDateControl">
                        <div class="form-row">
                            <div class="col-md-4">
                                <input type="radio" id="A" name="filters" value="A">
                                <label for="A">
                                    <h7>Admitted</h7>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" id="D" name="filters" value="D">
                                <label for="D">
                                    <h7>Discharged</h7>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" id="S" name="filters" value="S" checked>
                                <label for="S">
                                    <h7>Submitted</h7>
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <label class="text-success col-md-2 col-form-label">From</label>
                            <input type="date" class="form-control form-control-md mb-1 col-md-10" name="from" id="from" autocomplete="off" />
                        </div>
                        <div class="form-row">
                            <label class="text-success col-md-2 col-form-label">To</label>
                            <input type="date" class="form-control form-control-md col-md-10" name="to" id="to" autocomplete="off" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</form>
<input type="hidden" name="fromdate" id="fromdate" />
<input type="hidden" name="todate" id="todate" />


<div class="card card-accent-success">
    <div class="card-header">
        <div class="row">
            <div class="col-md-3">
                <div class="h4 text text-success">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    &nbsp <?php echo $header; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h6" align="center">
                    <label id="filterss"></label>&nbsp;from
                    <label id="froms"></label>&nbsp;to
                    <label id="tos"></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="btn-group pull-right" role="group" aria-label="">
                    <button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Select Date Range" onclick="daterangeselect();"><i class="fa fa-calendar"></i></button>
                    <button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Print Preview" id="printtl"><i class="fa fa-print"></i></button>

                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="ILTable" class="table table-sm table-bordered table-hover" width="100%">
                <thead>
                    <tr>
                        <th class="align-middle text-center">Date Received</th>
                        <th class="align-middle text-center"></th>
                        <th class="align-middle text-center">Claim Series No.</th>
                        <th class="align-middle text-center">PIN</th>
                        <th class="align-middle text-center">Patient Name</th>
                        <th class="align-middle text-center">Admission Date</th>
                        <th class="align-middle text-center">Discharge Date</th>
                        <th class="align-middle text-center">Total Claim Amount</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<form id="frmInProcessListPDF">
    <div class="modal fade" id="ModalInProcessList" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
            <div class="modal-content card-accent-success">
                <div class="modal-header">
                    <h4 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> In Process</h4>
                    <button class="btn btn-danger btn-square float-right" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
                </div>
                <div class="modal-body">
                    <iframe id="InProcessListPDF" type="application/pdf" width="100%" height="800px"></iframe>
                </div>
                <div class="modal-footer bg-secondary"></div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    $(document).ready(function() {
        $.session.clear('from');
        $.session.clear('to');
        $.session.clear('filters');

        IL();
        $("#DateSearch").modal('show');
        $("#S").prop('checked', true);
    });

    function daterangeselect() {
        $("#DateSearch").modal();
    }

    function IL(from, to, filters) {
        var data = new Object();
        data.id = "ILTable";
        data.link = baseURL + "Rep_eClaims/InProcessLists/" + from + "/" + to + "/" + filters;
        data.type = "POST";
        data.coldef = [{
                targets: [0, 1, 2, 3, 4, 5, 6, 7],
                orderable: false,
            },
            {
                targets: [1],
                visible: false,
            },
            {
                targets: [7],
                className: "text-right",
            },
            {
                targets: [0, 2, 3, 5, 6],
                className: "text-center",
            }
        ];
        loadTable(data);
    }

    function dr() {
        var from_bS = new Date($.session.get('from')).toLocaleDateString('en-us', {
            month: "long",
            day: "numeric",
            year: "numeric"
        });

        var to_bS = new Date($.session.get('to')).toLocaleDateString('en-us', {
            month: "long",
            day: "numeric",
            year: "numeric"
        });

        var filter_bS = $.session.get('filters');
        if (filter_bS == 'A') {
            filter_bS = 'Admission Date';
        } else if (filter_bS == 'D') {
            filter_bS = 'Discharged Date';
        } else {
            filter_bS = 'Date Received';
        }

        document.getElementById('tos').innerHTML = to_bS;
        document.getElementById('froms').innerHTML = from_bS;
        document.getElementById('filterss').innerHTML = filter_bS;
    }

    $('#printtl').on('click', function(data) {
        $('#ModalInProcessList').modal('show');

        var from = $.session.get('from');
        var to = $.session.get('to');
        var filters = $.session.get('filters');
        var src = baseURL + 'Rep_eClaims/InProcessList_pdf/' + from + "/" + to + "/" + filters;
        var x = document.getElementById("InProcessListPDF").src = src;

        $("#InProcessListPDF").attr("src", src);
    });

    $('#ModalInProcessList').on('hidden.coreui.modal', function() {
        $("#InProcessListPDF").removeAttr("src").attr("src", "");
    });

    $('#dateRange').validate({
        submitHandler: function(form) {
            if ($("#A").prop('checked') == true) {
                $.session.set('filters', 'A');
            } else if ($("#D").prop('checked') == true) {
                $.session.set('filters', 'D');
            } else if ($("#S").prop('checked') == true) {
                $.session.set('filters', 'S');
            }

            var from = $("#from").val();
            var to = $("#to").val();
            var filters = $.session.get('filters');

            $.session.set('from', from);
            $.session.set('to', to);

            $("#DateSearch").modal('hide');

            IL(from, to, filters);
            dr();

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