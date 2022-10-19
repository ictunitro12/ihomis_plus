<style>

table#RabiesTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<div class="card card-accent-success">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                <div class="h4 text text-success">
                    <i class="fa fa-file-text-o"></i>
                    &nbsp<?php echo $header; ?>&nbsp;&nbsp;<small><?php echo $subheader; ?></small>
                </div>
            </div>
            <!-- <div class="col-md-4">
				<div class="h4" align="center">
					From :&nbsp;
					<label id="froms"></label>&nbsp;&nbsp;&nbsp;To :&nbsp;
					<label  id="tos"></label>
				</div>
			</div> -->
            <div class="col-md-4">
                <div class="btn-group pull-right" role="group" aria-label="">
                    <a href="<?php echo site_url('Rabies/PatientForm'); ?>" data-toggle="tooltip" title="Add Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i></a>
                   <!--  &nbsp;<button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Select Date Range" onclick="daterangeselect();"><i class="fa fa-calendar"></i></button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive">
        <table id="RabiesTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th class="align-middle" width="15%">Health Record Number</th>
                    <th class="align-middle" width="29%">Patient Name (<small>Firstname,Middlename,Lastname Suffix</small>)</th>
                    <th class="align-middle" width="15%">Date of Consultation (<small>mm/dd/yyyy</small>)</th>
                    <th class="align-middle" width="12%">Type of Encounter</th>
                    <th class="align-middle" width="29%">Provider (<small>Firstname,Middlename,Lastname Suffix</small>)</th>
                    <th class="align-middle">Actions</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="card-footer"></div>
</div>

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
                        <div class="row-md-6">
                            <label class="text-success">From</label>
                            <input type="date" class="form-control form-control-mb mb-1" placeholder="start date" name="from" id="from" autocomplete="off" />
                        </div>
                        <br>
                        <div class="row-md-6">
                            <label class="text-success">To</label>
                            <input type="date" class="form-control form-control-mb mb-1" placeholder="end date" name="to" id="to" autocomplete="off" />
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

<form name="frmDeleteRabies" id="frmDeleteRabies">
    <input type="hidden" name="formIdentification" id="formIdentification">
    <input type="hidden" name="deletecode" id="deletecode">
    <div class="modal fade" id="DeleteRabies" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Do you want to proceed?</h4>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="frmRabiesPDF" name="frmRabiesPDF" method="post">
    <div class="modal" id="ModalRabies" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
            <div class="modal-content card-accent-success">
                <div class="modal-header">
                    <input type="hidden" name="code" id="code">
                    <h4 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Rabies</h4>
                    <button class="btn btn-danger btn-square float-right" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
                </div>
                <div class="modal-body" id="RabiesPDF"></div>
                <div class="modal-footer bg-secondary"></div>
            </div>
        </div>
    </div>
</form>

<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<input type="hidden" name="enccode" id="enccode">

<script type="text/javascript">
    $(document).ready(function() {
        /* $.session.clear('from');
		$.session.clear('to');
         */
        PatientLogList();
      /*   $("#DateSearch").modal('show'); */
    });

    function daterangeselect() {
        $("#DateSearch").modal();
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

		document.getElementById('tos').innerHTML = to_bS;
		document.getElementById('froms').innerHTML = from_bS;
	}

    $('#dateRange').validate({
		submitHandler: function(form) {
			var from = $("#from").val();
			var to = $("#to").val();

			$.session.set('from', from);
			$.session.set('to', to);

			$("#DateSearch").modal('hide');

			PatientLogList(from, to);
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
<script src="<?php echo base_url() ?>assets/scripts/rabies/rabies.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/rabies/delete.js"></script>