<style>

table#SubGroup1Table.dataTable tbody tr:hover {
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
					<button onclick="AddSubGroup1()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Sub Group 1" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Sub Group 1</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="SubGroup1Table" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th></th>
					<th></th>
					<th>MAJOR CATEGORY</th>
					<th>SUB GROUP 1</th>
					<th>DESCRIPTION</th>
					<th>STATUS</th>
					<th width="8%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmSubGroup1" id="frmSubGroup1">
	<div class="modal fade" id="ModalAddSubGroup1" name="ModalAddSubGroup1" role="form">
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
						<input type="hidden" name="mccode" id="mccode" value="">

						<div class="col-md-3 col-form-label text-default mb-1">Major category:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="mcdesc" name="mcdesc">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Sub Group 1:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onChange="UpdateInfo();" readonly id="sg1code" name="sg1code" placeholder="Sub Group 1" maxlength="5">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="sg1desc" name="sg1desc" placeholder="Description" maxlength="255"></textarea>
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

<form name="frmDeleteSubGroup1" id="frmDeleteSubGroup1">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteSubGroup1" role="form">
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
		SubGroup1List();
	});

	function SubGroup1List() {
		var dmcode = atob('<?php echo $this->uri->segment(3); ?>');
		var dmdesc = atob('<?php echo $this->uri->segment(4); ?>');
		localStorage.setItem("dmcode", dmcode);
		localStorage.setItem("dmdesc", dmdesc);

		dmcode = encodeURIComponent(encodeURIComponent(dmcode));
		var data = new Object();
		data.id = "SubGroup1Table";
		data.link = "<?php echo site_url('Ref_PNDFClass/SubGroup1List/'); ?>" + dmcode;
		data.type = "POST";
		data.coldef = [{
				targets: [5],
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
				targets: [0, 1],
				visible: false,
			},
			{
				targets: [2, 3, 4, 5, 6],
				orderable: false,
			},
			{
				targets: [0, 1, 5, 6],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddSubGroup1() {
		var dmcode = localStorage.getItem("dmcode");
		var dmdesc = localStorage.getItem("dmdesc");

		$('#ModalAddSubGroup1').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('insert');
		$("#mccode").val(dmcode);
		$("#mcdesc").val(dmdesc);
		$("#mcdesc").prop('readonly', true);
		$("#sg1code").prop('readonly', false);
		$("#sg1code").change(UpdateInfo);
		$('#status option[value="A"]').prop("selected", true);
	}

	$("#SubGroup1Table").on("click", ".ModalEditSubGroup1", function() {
		var data = $(this).data();
		var dms1key = data['dms1key'];
		var obj = getSubGroup1(dms1key);

		$('#ModalAddSubGroup1').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('update');
		$("#key").val(obj['dms1key']);
		$("#mccode").val(obj['dmcode']);
		$("#mcdesc").val(obj['dmdesc']);
		$("#sg1code").val(obj['dmsub1']);
		$("#sg1desc").val(obj['dms1desc']);
		$('#status option[value="' + obj['dms1sta'] + '"]').prop("selected", true);
		$("#mcdesc").prop('readonly', true);
		$("#sg1code").prop('readonly', true);
		$("#sg1code").change(UpdateInfo);
	});

	function UpdateInfo() {
		if ($("#addID").val() == 'insert') {
			var dmcode = $('#dmcode').val();
			var dmsub1 = $('#sg1code').val();
			$("#key").val(dmcode + dmsub1);
		} else {
			$("#key").val(data['dms1key']);
		}
	}

	function getSubGroup1(dms1key) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_PNDFClass/getSubGroup1/" + dms1key,
			data: {
				dms1key: dms1key
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	$("#SubGroup1Table").on("click", ".ModalDeleteSubGroup1", function() {
		var data = $(this).data();
		var dms1key = atob(data['dms1key']);

		$('#DeleteSubGroup1').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(dms1key);
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_PNDFClass/subgroup1.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_PNDFClass/deletesubgroup1.js"></script>