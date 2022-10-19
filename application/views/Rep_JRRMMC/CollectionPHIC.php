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
					<div class="h4" align="center">
						<label  id="tos"></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Select Date Range" onclick="daterangeselect();"><i class="fa fa-calendar"></i></button>
						<button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Print Preview" id="printtl"><i class="fa fa-print"></i></button>

					</div>
				</div>
			</div>
		</div>

		<div class="card-body table-responsive">
			<table id="TLTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
				<thead class="thead-dark">
					<tr>
						<th class="align-middle text-center" >Date</th>
						<th class="align-middle text-center" >OR #</th>
						<th class="align-middle text-center" >Bill #</th>
						<th class="align-middle text-center" >Payor</th>
						<th class="align-middle text-center" >Admission <br> Date</th>
						<th class="align-middle text-center" >Ward</th>
						<th class="align-middle text-center" >Consultants<br> Employee <br> Code</th>
						<th class="align-middle text-center" >Attending<br> Physician</th>
						<th class="align-middle text-center" >Hospital Bill</th>
						<th class="align-middle text-center" >Medicine</th>
						<th class="align-middle text-center" >Hospital Bill</th>
						<th class="align-middle text-center" >Professional <br> Bills</th>
						<th class="align-middle text-center" >Total PHIC <br> Payment</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>

	<form id="frmCollectionPHICPDF">
		<div class="modal fade" id="ModalCollectionPHIC" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
				<div class="modal-content card-accent-success">
					<div class="modal-header">
						<!-- <input type="hidden" name="code" id="code"> -->
						<h4 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i>&nbsp;Report of Medical Supplies Charged to Patients </h4>
						<button class="btn btn-danger btn-square float-right" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
					</div>
					<div class="modal-body">
						<iframe id="CollectionPHICPDF" type="application/pdf" width="100%" height="800px"></iframe>
					</div>
					<div class="modal-footer bg-secondary"></div>
				</div>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		$(document).ready(function() {
			$.session.clear('to');
			$("#DateSearch").modal('show');
		});

		function daterangeselect() {
			$("#DateSearch").modal();
		}

		function TL(to) {
			var data = new Object();
			data.id = "TLTable";
			data.link = baseURL + "Rep_JRRMMC/CollectionPHICList/" + to;
			data.type = "POST";
			data.coldef = [{
				targets : [0,1,2,3,4,5,6,7,8,9,10,11,12],
				orderable:false
			}];
			loadTable(data);
		}

		function dr() {
			var to_bS = new Date($.session.get('to')).toLocaleDateString('en-us', {
				month: "long",
				day: "numeric",
				year: "numeric"
			});

			document.getElementById('tos').innerHTML = to_bS;
		}

		$('#printtl').on('click', function(data) {
			$('#ModalCollectionPHIC').modal('show');
			var to = $.session.get('to');
			window.location.href =  baseURL + 'Rep_JRRMMC/CollectionPHIC_pdf/' + to;
			var src = baseURL + 'Rep_JRRMMC/CollectionPHIC_pdf/' + to;
			var x = document.getElementById("CollectionPHICPDF").src = src;

			$("#CollectionPHICPDF").attr("src", src);
		});

		$('#ModalCollectionPHIC').on('hidden.coreui.modal', function() {
			$("#CollectionPHICPDF").removeAttr("src").attr("src", "");
		});

		$('#dateRange').validate({
			submitHandler: function(form) {
				var to = $("#to").val();
				$.session.set('to', to);

				$("#DateSearch").modal('hide');

				TL(to);
				dr();

				return false;

				$(form).submit();
			},

			rules: {
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