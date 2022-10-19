<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

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
								<input type="date" class="form-control form-control-mg" placeholder="start date" name="from" id="from" autocomplete="off" />
							</div>
							<br>
							<div class="row-md-6">
								<label class="text-success">To</label>
								<input type="date" class="form-control form-control-mg" placeholder="end date" name="to" id="to" autocomplete="off" />
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
				<div class="col-md-5">
					<div class="h4 text text-success">
						<i class="fa fa-list" aria-hidden="true"></i>
						&nbsp <?php echo $header; ?>
					</div>
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-4">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Select Date Range" onclick="daterangeselect();"><i class="fa fa-calendar"></i></button>
						<button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Print Preview" id="printtl"><i class="fa fa-print"></i></button>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="h4" align="center">
						From :&nbsp;
						<label id="froms"></label>&nbsp;&nbsp;&nbsp;To :&nbsp;
						<label  id="tos"></label>
					</div>
				</div>
			</div>
		</div>

		<div class="card-body table-responsive">
			<table id="TLTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
				<thead class="thead-dark">
					<tr>
						<th class="align-middle text-center" rowspan="2">Transferred From</th>
						<th class="align-middle text-center" rowspan="2">Item Code</th>
						<th class="align-middle text-center" rowspan="2">Description</th>
						<th class="align-middle text-center" rowspan="2">Qty</th>
						<th class="align-middle text-center" rowspan="2">Unit Price</th>
						<th class="align-middle text-center" rowspan="2">Total Price</th>
						<th class="align-middle text-center" colspan="2">Transferred to:</th>
						<th class="align-middle text-center" rowspan="2">Date Suppliesd<br> to Patient</th>
						<th class="align-middle text-center" rowspan="2">Bill No.</th>
						<th class="align-middle text-center" rowspan="2">Patient Name</th>
					</tr>
					<tr>
						<th class="align-middle text-center">Code</th>
						<th class="align-middle text-center">Department</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>

	<form id="frmDrugsMedsSuppliesPDF">
		<div class="modal fade" id="ModalDrugsMedsSupplies" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
				<div class="modal-content card-accent-success">
					<div class="modal-header">
						<!-- <input type="hidden" name="code" id="code"> -->
						<h4 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i>&nbsp;Report of Medical Supplies Charged to Patients </h4>
						<button class="btn btn-danger btn-square float-right" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
					</div>
					<div class="modal-body">
						<iframe id="DrugsMedsSuppliesPDF" type="application/pdf" width="100%" height="800px"></iframe>
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
			TL();
			$("#DateSearch").modal('show');
		});

		function daterangeselect() {
			$("#DateSearch").modal();
		}

		function TL(from, to) {
			var data = new Object();
			data.id = "TLTable";
			data.link = baseURL + "Rep_JRRMMC/DrugsMedsSuppliesList/" + from + "/" + to;
			data.type = "POST";
			data.coldef = [{
				targets : [0,1,2,3,4,5,6,7,8,9,10],
				orderable:false
			}];
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

			document.getElementById('tos').innerHTML = to_bS;
			document.getElementById('froms').innerHTML = from_bS;
		}

		$('#printtl').on('click', function(data) {
			$('#ModalDrugsMedsSupplies').modal('show');

			var from = $.session.get('from');
			var to = $.session.get('to');
			var src = baseURL + 'Rep_JRRMMC/DrugsMedsSupplies_pdf/' + from + "/" + to;
			var x = document.getElementById("DrugsMedsSuppliesPDF").src = src;

			$("#DrugsMedsSuppliesPDF").attr("src", src);
		});

		$('#ModalDrugsMedsSupplies').on('hidden.coreui.modal', function() {
			$("#DrugsMedsSuppliesPDF").removeAttr("src").attr("src", "");
		});

		$('#dateRange').validate({
			submitHandler: function(form) {
				var from = $("#from").val();
				var to = $("#to").val();

				$.session.set('from', from);
				$.session.set('to', to);

				$("#DateSearch").modal('hide');

				TL(from, to);
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