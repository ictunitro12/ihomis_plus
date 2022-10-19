<style>

table#SubGroup2Table.dataTable tbody tr:hover {
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
					<button onclick="AddSubGroup2()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Sub Group 2" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Sub Group 2</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="SubGroup2Table" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>SUB GROUP 1</th>
					<th></th>
					<th>SUB GROUP 2</th>
					<th>DESCRIPTION</th>
					<th>STATUS</th>
					<th width="8%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmSubGroup2" id="frmSubGroup2">
	<div class="modal fade" id="ModalAddSubGroup2" name="ModalAddSubGroup2" role="form">
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
						<input type="hidden" name="mccode" id="mccode" value="">
						<input type="hidden" name="sg1code" id="sg1code" value="">

						<div class="col-md-3 col-form-label text-default mb-1">Sub Group 1:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="sg1desc" name="sg1desc">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Sub Group 2:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onChange="UpdateInfo();" readonly id="sg2code" name="sg2code" placeholder="Sub Group 2" maxlength="8">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="sg2desc" name="sg2desc" placeholder="Description" maxlength="255"></textarea>
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
				<div class="modal-footer">
					<div class="btn-group float-right">
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteSubGroup2" id="frmDeleteSubGroup2">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteSubGroup2" role="form">
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
				<div class="modal-footer">
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
		SubGroup2List();
	});

	function SubGroup2List() {
		var dms1key = '<?php echo $this->uri->segment(3); ?>';
		var dmsub1 = atob('<?php echo $this->uri->segment(4); ?>');
		var dms1desc = atob('<?php echo $this->uri->segment(5); ?>');
		localStorage.setItem("dms1key", atob(dms1key));
		localStorage.setItem("dmsub1", dmsub1);
		localStorage.setItem("dms1desc", dms1desc);

		code = encodeURIComponent(encodeURIComponent(dms1key));
		var data = new Object();
		data.id = "SubGroup2Table";
		data.link = "<?php echo site_url('Ref_PNDFClass/SubGroup2List/'); ?>" + code;
		data.type = "POST";
		data.coldef = [{
				targets: [8],
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
				targets: [0, 1, 2, 3, 5],
				visible: false,
			},
			{
				targets: [4, 6, 7, 8, 9],
				orderable: false,
			},
			{
				targets: [0, 1, 2, 3, 5, 8, 9],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddSubGroup2() {
		var dms1key = localStorage.getItem("dms1key");
		var dmcode = localStorage.getItem("dmcode");
		var dmsub1 = localStorage.getItem("dmsub1");
		var dms1desc = localStorage.getItem("dms1desc");

		$('#ModalAddSubGroup2').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('insert');
		$("#sg1key").val(dms1key);
		$("#mccode").val(dmcode);
		$("#sg1code").val(dmsub1);
		$("#sg1desc").val(dms1desc);
		$("#sg1desc").prop('readonly', true);
		$("#sg2code").prop('readonly', false);
		$("#sg2code").change(UpdateInfo);
		$('#status option[value="A"]').prop("selected", true);
	}

	$("#SubGroup2Table").on("click", ".ModalEditSubGroup2", function() {
		var data = $(this).data();
		var dms2key = data['dms2key'];
		var obj = getSubGroup2(dms2key);

		$('#ModalAddSubGroup2').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('update');
		$("#key").val(obj['dms2key']);
		$("#sg1key").val(obj['dms1key']);
		$("#mccode").val(obj['dmcode']);
		$("#sg1code").val(obj['dmsub1']);
		$("#sg1desc").val(obj['dms1desc']);
		$("#sg2code").val(obj['dmsub2']);
		$("#sg2desc").val(obj['dms2desc']);
		$('#status option[value="' + obj['dms2sta'] + '"]').prop("selected", true);
		$("#sg1desc").prop('readonly', true);
		$("#sg2code").prop('readonly', true);
		$("#sg2code").change(UpdateInfo);
	});

	function UpdateInfo() {
		if ($("#addID").val() == 'insert') {
			var dms1key = localStorage.getItem("dms1key");
			var dmsub2 = $('#sg2code').val();
			$("#key").val(dms1key + dmsub2);
		} else {
			$("#key").val(data['dms2key']);
		}
	}

	function getSubGroup2(dms2key) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_PNDFClass/getSubGroup2/" + dms2key,
			data: {
				dms2key: dms2key
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	$("#SubGroup2Table").on("click", ".ModalDeleteSubGroup2", function() {
		var data = $(this).data();
		var dms2key = atob(data['dms2key']);

		$('#DeleteSubGroup2').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(dms2key);
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_PNDFClass/subgroup2.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_PNDFClass/deletesubgroup2.js"></script>