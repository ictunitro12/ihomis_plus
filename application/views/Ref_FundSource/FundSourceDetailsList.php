<style>
	table#FundsourceDetailsTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<div class="card card-accent-success">

	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp<?php echo $header; ?>
					&nbsp <small><?php echo $subheader; ?></small>
				</div>
			</div>

			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
				<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Previous Level" data-toggle="tooltip"><i class="fa fa-arrow-left"></i> Previous Level</a>
					<button onclick="AddFundsourcedetails()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Fund Source Details" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Fund Source Details
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="FundsourceDetailsTable" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
			<thead>
				<tr class="">
					<th class="never"></th>
					<th>Fund Source</th>
					<th>Amout</th>
					<th>Date as of</th>
					<th>Remaining Fund Amount</th>
					<th>Date</th>
					<th>Status</th>
					<th width="3%"></th>
				</tr>
			</thead>
		</table>
	</div>
</div>


<form name="frmFundsourcedetails" id="frmFundsourcedetails">
	<div class="modal fade" id="ModalAddFundsourcedetails" tabindex="-1" role="dialog">
		<input type="hidden" name="formIden" id="formIden">
		<input type="hidden" name="fundcode" id="fundcode">
		<div class="modal-dialog modal-dialog-centered " role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp <?php echo $header; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="fundstat" id="fundstat">
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Fund Source:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb" autocomplete="off" readonly="" id="funddesc" name="funddesc" placeholder="Fund Source Name" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Amount:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb" autocomplete="off" id="fundamt" name="fundamt" placeholder="Amount" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Date as of:</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="funddte" name="funddte">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Remaining Fund Amount:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb" autocomplete="off" id="remfundamt" name="remfundamt" placeholder="Remaining Fund Amount">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-8">
							<select name="fundstatus" id="fundstatus" class="form-control">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</form>

<form name="frmDeleteFundsourcedetails" id="frmDeleteFundsourcedetails">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	<input type="hidden" name="deletefunddte" id="deletefunddte">


	<div class="modal fade" id="DeleteFundsourcedetails" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span id="descrip" name="descrip" class="text-white"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Do you want to proceed?</h5>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<input type="hidden" name="fundcode" id="fundcode">
<script type="text/javascript">
	$(function() {
		FundsourcedetailsList();
	});

	function FundsourcedetailsList() {
		var fundcode = atob('<?php echo $this->uri->segment(3); ?>');
		var funddesc = atob('<?php echo $this->uri->segment(4); ?>');
		var data = new Object();
		data.id = "FundsourceDetailsTable";
		data.link = "<?php echo site_url('Ref_FundSource/FundsourceDetailsList/'); ?>" + fundcode;
		data.type = "POST";
		data.coldef = [{
				targets: [0, 5],
				visible: false,
			},

			{
				targets: 6,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'A':
							return '<i class="fa fa-check  text-success"></i>&nbsp Active';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
							break;
						default:
							return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},
		];
		loadTable(data);
	}

	$("#FundsourceDetailsTable").on("click", ".ModalDeleteFundsourcedetails", function() {
		var data = $(this).data();
		$('#DeleteFundsourcedetails').modal({
			backdrop: 'static'
		}).draggable();
		var funddesc = data['funddesc'];
		$("#formIdentification").val('delete');
		$("#deletecode").val(data['fundcode']);
		$("#deletefunddte").val(data['funddte']);
		$("#descrip").text(funddesc);
	});

	$("#FundsourceDetailsTable").on("click", ".ModalEditFundsourcedetails", function() {
		var data = $(this).data();
		$('#ModalAddFundsourcedetails').modal({
			backdrop: 'static'
		}).draggable();
		$("#formIden").val('update');
		var fundcode = atob('<?php echo $this->uri->segment(3); ?>');
		var funddesc = atob('<?php echo $this->uri->segment(4); ?>');
		$("#fundcode").val(fundcode);
		$("#funddesc").val(funddesc);
		var datefund = data['funddte'];
		var obj = getFundsourceDetails(fundcode, datefund);
		$("#fundamt").val(obj['fundamt']);
		$("#remfundamt").val(obj['remfundamt']);
		$("#fundstatus").val(obj['fundstat']);
		var dates = obj['funddte'];
		var finaldates = ((dates == "1970-01-01 00:00:00") || (dates == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dates);
		$("#funddte").val(finaldates);


		/*
					$('#fundamt').val(obj['fundamt']);
					$('#remfundamt').val(obj['remfundamt']);
					$('#fundstatus').val(obj['fundstat']);


					var dates = obj['datemod'];
					var finaldates = ((dates == "1970-01-01 00:00:00") || (dates == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dates);
					$("#funddte").val(finaldates);*/

	});

	function AddFundsourcedetails() {
		$('#ModalAddFundsourcedetails').modal({
			backdrop: 'static'
		}).draggable();
		$("#formIden").val('insert');
		$("#funddte").val(getTimeLocale());

		var fundcode = atob('<?php echo $this->uri->segment(3); ?>');
		var funddesc = atob('<?php echo $this->uri->segment(4); ?>');
		$("#fundcode").val(fundcode);
		$("#funddesc").val(funddesc);

	}

	function getFundsourceDetails(fundcode, funddte) {
		var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
		var funddte = encodeURIComponent(encodeURIComponent(funddte));
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_Fundsource/getFundsourceDetails/" + fundcode + "/" + funddte,
			data: "JSON",
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_fundsourcedetails/ref_fundsourdetails_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_fundsourcedetails/delete.js"></script>