<style>

table#SubGroup4Table.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style> 
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp <?php echo $header; ?>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Previous Level" data-toggle="tooltip" ><i class="fa fa-arrow-left"></i> Previous Level</a>
					<button onclick="AddSubGroup4()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Sub Group 4" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Sub Group 4</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="SubGroup4Table" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>SUB GROUP 3</th>
					<th></th>
					<th>SUB GROUP 4</th>
					<th>DESCRIPTION</th>
					<th>STATUS</th>
					<th width="8%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmSubGroup4" id="frmSubGroup4">
	<div class="modal fade" id="ModalAddSubGroup4" name="ModalAddSubGroup4" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="addID" id="addID" value="">
						<input type="hidden" name="key" id="key" value="">
						<input type="hidden" name="sg1key" id="sg1key" value="">
						<input type="hidden" name="sg2key" id="sg2key" value="">
						<input type="hidden" name="sg3key" id="sg3key" value="">
						<input type="hidden" name="mccode" id="mccode" value="">
						<input type="hidden" name="sg1code" id="sg1code" value="">
						<input type="hidden" name="sg2code" id="sg2code" value="">
						<input type="hidden" name="sg3code" id="sg3code" value="">

						<div class="col-md-3 col-form-label text-default mb-1">Sub Group 3:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="sg3desc" name="sg3desc">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Sub Group 4:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onChange="UpdateInfo();" readonly id="sg4code" name="sg4code" placeholder="Sub Group 4" maxlength="12">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="sg4desc" name="sg4desc" placeholder="Description" maxlength="255"></textarea>
						</div>

						<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-9">
							<select name="status" id="status" class="form-control">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteSubGroup4" id="frmDeleteSubGroup4">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteSubGroup4" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
	$(function() {
		SubGroup4List();
	});

	function SubGroup4List() {
		var dms3key = '<?php echo $this->uri->segment(3); ?>';
		var dmsub3 = atob('<?php echo $this->uri->segment(8); ?>');
		var dms3desc = atob('<?php echo $this->uri->segment(9); ?>');
		localStorage.setItem("dms3key", atob(dms3key));
		localStorage.setItem("dmsub3", dmsub3);
		localStorage.setItem("dms3desc", dms3desc);

		code = encodeURIComponent(encodeURIComponent(dms3key));
		console.log(atob(dms3key));
		var data = new Object();
		data.id = "SubGroup4Table";
		data.link = "<?php echo site_url('Ref_PNDFClass/SubGroup4List/'); ?>" + code;
		data.type = "POST";
		data.coldef = [{
				targets: [14],
				render: function(data, type, row) {
					switch (data) {
						case 'A':
							return '<i class="fa fa-check  text-success"></i>&nbsp Active';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
							break;
						default:
							return '<span> </span>';
					}
				},
			},
			{
				targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 11],
				visible: false,
			},
			{
				targets: [10, 12, 13, 14, 15],
				orderable: false,
			},
			{
				targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 14, 15],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddSubGroup4() {
		var dms3desc = localStorage.getItem("dms3desc");
		var dmsub3 = localStorage.getItem("dmsub3");
		var dms3key = localStorage.getItem("dms3key");
		var dms2key = localStorage.getItem("dms2key");
		var dmsub2 = localStorage.getItem("dmsub2");
		var dms1key = localStorage.getItem("dms1key");
		var dmcode = localStorage.getItem("dmcode");
		var dmsub1 = localStorage.getItem("dmsub1");

		$('#ModalAddSubGroup4').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('insert');
		$("#sg3key").val(dms3key);
		$("#sg2key").val(dms2key);
		$("#sg1key").val(dms1key);
		$("#mccode").val(dmcode);
		$("#sg1code").val(dmsub1);
		$("#sg2code").val(dmsub2);
		$("#sg3code").val(dmsub3);
		$("#sg3desc").val(dms3desc);
		$("#sg3desc").prop('readonly', true);
		$("#sg4code").prop('readonly', false);
		$("#sg4code").change(UpdateInfo);
		$('#status option[value="A"]').prop("selected", true);
	}

	$("#SubGroup4Table").on("click", ".ModalEditSubGroup4", function() {
		var data = $(this).data();
		var dms4key = data['dms4key'];
		var obj = getSubGroup4(dms4key);

		$('#ModalAddSubGroup4').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('update');
		$("#key").val(obj['dms4key']);
		$("#sg3key").val(obj['dms3key']);
		$("#sg2key").val(obj['dms2key']);
		$("#sg1key").val(obj['dms1key']);
		$("#mccode").val(obj['dmcode']);
		$("#sg1code").val(obj['dmsub1']);
		$("#sg2code").val(obj['dmsub2']);
		$("#sg3code").val(obj['dmsub3']);
		$("#sg3desc").val(obj['dms3desc']);
		$("#sg4code").val(obj['dmsub4']);
		$("#sg4desc").val(obj['dms4desc']);
		$('#status option[value="' + obj['dms4sta'] + '"]').prop("selected", true);
		$("#sg3desc").prop('readonly', true);
		$("#sg4code").prop('readonly', true);
		$("#sg4code").change(UpdateInfo);
	});

	function getSubGroup4(dms4key) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_PNDFClass/getSubGroup4/" + dms4key,
			data: {
				dms4key: dms4key
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	function UpdateInfo() {
		if ($("#addID").val() == 'insert') {
			var dms3key = atob('<?php echo $this->uri->segment(3); ?>');
			var dmsub4 = $('#sg4code').val();
			$("#key").val(dms3key + dmsub4);
		} else {
			$("#key").val(data['dms4key']);
		}
	}

	$("#SubGroup4Table").on("click", ".ModalDeleteSubGroup4", function() {
		var data = $(this).data();
		var dms4key = atob(data['dms4key']);

		$('#DeleteSubGroup4').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(dms4key);
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_PNDFClass/subgroup4.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_PNDFClass/deletesubgroup4.js"></script>