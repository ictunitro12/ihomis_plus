<style>
	table#BedAccomTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>
				</div>
			</div>

			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddBedAccom()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Bed Accommodation
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="BedAccomTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th class="never"></th>
						<th class="align-middle all">Code</th>
						<th class="align-middle all">Description</th>
						<th class="align-middle all">Room Rate</th>
						<th class="align-middle all">Currency</th>
						<th class="align-middle all">Unit of Measure</th>
						<th class="align-middle all">Effectivity Date</th>
						<th class="align-middle all">With Pay?</th>
						<th class="align-middle all">Status</th>
						<th class="never"></th>
						<th class="align-middle all" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="card-footer"></div>
</div>
<form name="frmBedAccom" id="frmBedAccom" role="form">
	<div class="modal fade" id="ModalAddBedAccom" role="form">
		<input type="hidden" name="formIden" id="formIden">
		<input type="hidden" name="intkey" id="intkey" onchange="intrmkey();">
		<div class="modal-dialog modal-dialog-centered " role="dialog" role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp;<?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Code:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onchange="intrmkey();" id="code" name="code" placeholder="Code" maxlength="5" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Description:</div>
						<div class="col-md-8">
							<textarea class="form-control form-control-mb mb-1" autocomplete="off" id="name" name="name" placeholder="Description" maxlength="20" required></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Room Rate:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="rmrate" name="rmrate" placeholder="Room Rate" required>

						</div>
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Currency:</div>
						<div class="col-md-8">
							<select name="currency" id="currency" class="form-control form-control-mb mb-1" required>
								<option value="PESO">Peso</option>
								<option value="YEN">Yen</option>
								<option value="DOLLA">Dollar</option>
								<option value="OTHER">Others</option>
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Unit of Measure:</div>
						<div class="col-md-8">
							<select name="selUnitMeasure" id="selUnitMeasure" class="form-control form-control-mb mb-1" required>
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Effectivity date:</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" onchange="intrmkey();" id="rmasof" name="rmasof" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">With Pay?:</div>
						<div class="col-md-8">
							<select name="wpay" id="wpay" class="form-control form-control-mb mb-1">
							   <option value="">Select</option>
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Classification:</div>
						<div class="col-md-8">
							<select name="classif" id="classif" class="form-control form-control-mb mb-1">
							    <option value="">Select</option>
								<option value="ADPAY">Non-Basic</option>
								<option value="SERVI">Basic</option>
							</select>
							<span class="text-muted">Note: Basic = Charity / Non-Basic = Pay </span>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-8">
							<select name="status" id="status" class="form-control form-control-mb mb-1">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; Submit</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteBedAccom" id="frmDeleteBedAccom" role="form">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	<div class="modal fade" id="DeleteBedAccom" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="desc" name="desc"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Do you want to proceed?</h5>
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp;DELETE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script src="<?php echo base_url() ?>assets/scripts/ref_bedaccom/ref_bedaccom_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_bedaccom/delete.js"></script>
<script type="text/javascript">
	$(function() {
		BedAccomList();
		var rmacccod = encodeURIComponent(encodeURIComponent(rmacccod));
		var rmaccdesc = encodeURIComponent(encodeURIComponent(rmaccdesc));
	});

	function BedAccomList() {
		var data = new Object();
		data.id = "BedAccomTable";
		data.link = "<?php echo site_url('Ref_BedAccom/BedAccomList'); ?>";
		data.link = "<?php echo site_url('Ref_BedAccom/BedAccomList'); ?>";
		data.type = "POST";
		data.coldef = [{
				targets: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
				orderable: false,
			},
			{
				targets: 4,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'PESO':
							return 'Peso';
							break;
						case 'YEN':
							return 'Yen';
							break;
						case 'DOLLA':
							return 'Dollar';
							break;
						case 'OTHER':
							return 'Others';
							break;
						default:
							return '';
					}
				},
			},
			{
				targets: 7,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'Y':
							return 'Yes';
							break;
						case 'N':
							return 'No';
							break;
						default:
							return '';
					}
				},
			},
			{
				targets: 8,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'A':
							return '<i class="fa fa-check text-success">&nbspActive</i>';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger">&nbspInactive</i>';
							break;
						default:
							return '';
					}
				},
			},
			{
				targets: [0, 9],
				visible: false,
				searchable: true,
			},

		];
		loadTable(data);
	}
</script>