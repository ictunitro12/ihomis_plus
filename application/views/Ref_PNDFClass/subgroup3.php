<style>

table#SubGroup3Table.dataTable tbody tr:hover {
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
					<button onclick="AddSubGroup3()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Sub Group 3" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Sub Group 3</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="SubGroup3Table" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>SUB GROUP 2</th>
					<th></th>
					<th>SUB GROUP 3</th>
					<th>DESCRIPTION</th>
					<th>STATUS</th>
					<th width="8%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmSubGroup3" id="frmSubGroup3">
	<div class="modal fade" id="ModalAddSubGroup3" name="ModalAddSubGroup3" role="form">
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
						<input type="hidden" name="mccode" id="mccode" value="">
						<input type="hidden" name="sg1code" id="sg1code" value="">
						<input type="hidden" name="sg2code" id="sg2code" value="">

						<div class="col-md-3 col-form-label text-default mb-1">Sub Group 2:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="sg2desc" name="sg2desc">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Sub Group 3:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onChange="UpdateInfo();" readonly id="sg3code" name="sg3code" placeholder="Sub Group 3" maxlength="10">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="sg3desc" name="sg3desc" placeholder="Description" maxlength="255"></textarea>
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

<form name="frmDeleteSubGroup3" id="frmDeleteSubGroup3">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteSubGroup3" role="form">
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
		SubGroup3List();
	});

	function SubGroup3List() {
		var dms2key = '<?php echo $this->uri->segment(3); ?>';
		var dmsub2 = atob('<?php echo $this->uri->segment(5); ?>');
		var dms2desc = atob('<?php echo $this->uri->segment(6); ?>');
		localStorage.setItem("dms2key", atob(dms2key));
		localStorage.setItem("dmsub2", dmsub2);
		localStorage.setItem("dms2desc", dms2desc);

		code = encodeURIComponent(encodeURIComponent(dms2key));
		var data = new Object();
		data.id = "SubGroup3Table";
		data.link = "<?php echo site_url('Ref_PNDFClass/SubGroup3List/'); ?>" + code;
		data.type = "POST";
		data.coldef = [{
				targets: [11],
				searchable: false,
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
				targets: [0, 1, 2, 3, 4, 5, 6, 8],
				visible: false,
			},
			{
				targets: [7, 9, 10, 11, 12],
				orderable: false,
			},
			{
				targets: [0, 1, 2, 3, 4, 5, 6, 8, 11, 12],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddSubGroup3() {
		var dms2desc = localStorage.getItem("dms2desc");
		var dms2key = localStorage.getItem("dms2key");
		var dmsub2 = localStorage.getItem("dmsub2");
		var dms1key = localStorage.getItem("dms1key");
		var dmcode = localStorage.getItem("dmcode");
		var dmsub1 = localStorage.getItem("dmsub1");

		$('#ModalAddSubGroup3').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('insert');
		$("#sg2key").val(dms2key);
		$("#sg1key").val(dms1key);
		$("#mccode").val(dmcode);
		$("#sg1code").val(dmsub1);
		$("#sg2code").val(dmsub2);
		$("#sg2desc").val(dms2desc);
		$("#sg2desc").prop('readonly', true);
		$("#sg3code").prop('readonly', false);
		$("#sg3code").change(UpdateInfo);
		$('#status option[value="A"]').prop("selected", true);
	}

	$("#SubGroup3Table").on("click", ".ModalEditSubGroup3", function() {
		var data = $(this).data();
		var dms3key = data['dms3key'];
		var obj = getSubGroup3(dms3key);

		console.log(dms3key);
		$('#ModalAddSubGroup3').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('update');
		$("#key").val(obj['dms3key']);
		$("#sg2key").val(obj['dms2key']);
		$("#sg1key").val(obj['dms1key']);
		$("#mccode").val(obj['dmcode']);
		$("#sg1code").val(obj['dmsub1']);
		$("#sg2code").val(obj['dmsub2']);
		$("#sg2desc").val(obj['dms2desc']);
		$("#sg3code").val(obj['dmsub3']);
		$("#sg3desc").val(obj['dms3desc']);
		$('#status option[value="' + obj['dms3sta'] + '"]').prop("selected", true);
		$("#sg2desc").prop('readonly', true);
		$("#sg3code").prop('readonly', true);
		$("#sg3code").change(UpdateInfo);
	});

	function getSubGroup3(dms3key) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_PNDFClass/getSubGroup3/" + dms3key,
			data: {
				dms3key: dms3key
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
			var dms2key = atob('<?php echo $this->uri->segment(3); ?>');
			var dmsub3 = $('#sg3code').val();
			$("#key").val(dms2key + dmsub3);
		} else {
			$("#key").val(data['dms3key']);
		}
	}

	$("#SubGroup3Table").on("click", ".ModalDeleteSubGroup3", function() {
		var data = $(this).data();
		var dms3key = atob(data['dms3key']);

		$('#DeleteSubGroup3').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(dms3key);
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_PNDFClass/subgroup3.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_PNDFClass/deletesubgroup3.js"></script>