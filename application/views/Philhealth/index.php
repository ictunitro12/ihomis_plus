<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp <?php echo $header; ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="<?php echo site_url('Philhealth/RegisterMember'); ?>" data-toggle="tooltip" title="Add Member" class="btn btn-success btn-md  btn-ladda mr-1" data-style="zoom-in"><i class="fa fa-user-plus"></i></a>
					<!-- a href="<?php //echo site_url('Philhealth/verifyBenefitEligibility'); ?>" data-toggle="tooltip" title="Verify PBEF" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-check"></i></a-->
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive" style="overflow-x: visible; overflow-y: visible;">
		<table id="MemberTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead class="thead-dark">
				<tr>
					<th>PIN</th>
					<th>NAME</th>
					<th>SEX</th>
					<th>DATE OF BIRTH</th>
					<th>TYPE OF MEMBERSHIP</th>
					<th>HEALTH RECORD NUMBER</th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
	<form id="frmMemberInfo">
		<input type="hidden" id="pmemberlastname" name="pmemberlastname">
		<input type="hidden" id="pmemberfirstname" name="pmemberfirstname">
		<input type="hidden" id="pmembermiddlename" name="pmembermiddlename">
		<input type="hidden" id="pmembersuffix" name="pmembersuffix">
		<input type="hidden" id="pmemberbirthdate" name="pmemberbirthdate">
		<input type="hidden" id="pmemberpin" name="pmemberpin">
		<div class="modal fade" id="ModalMemberInfo" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-body">
						<h3 class="text text-success"><i class="fa fa-user-circle"></i> Member Information</h3>
						<div class="box-body box-profile">
							<div class="h5 profile-username text-center text-success my-3" id="memname"></div>
							<ul class="list-group">
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp SEX:</b>
									<a class="pull-right text text-success" id="memsex">N/A</a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp CIVIL STATUS:</b>
									<a class="pull-right text text-success" id="civilstat">N/A</a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp BIRTH DATE:</b>
									<a class="pull-right text text-success" id="membdate">N/A</a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-address-card"></i>&nbsp TYPE OF MEMBERSHIP:</b>
									<a class="pull-right text text-success" id="typemem">N/A</a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-id-card"></i>&nbsp PHILHEALTH IDENTIFICATION NUMBER:</b>
									<a class="pull-right text text-success" id="pin">N/A</a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-building"></i>&nbsp EMPLOYER NAME:</b>
									<a class="pull-right text text-success" id="employername">N/A</a>
								</li>
								<li class="list-group-item">
									<b class="text text-success"><i class="fa fa-id-badge"></i>&nbsp PHILHEALTH EMPLOYER NUMBER:</b>
									<a class="pull-right text text-success" id="pen">N/A</a>
								</li>
							</ul>
							<div class="card-footer">
								<button type="submit" name="sSubmit" class="btn btn-success btn-lg	btn-block btn-ladda" data-style="slide-right"><i class="fa fa-check"></i> &nbsp VALIDATE MEMBER PIN</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<form name="frmDeleteMember" id="frmDeleteMember">
	<div class="modal fade" id="ModalMemberDelete" tabindex="-1" role="dialog">
		<input type="hidden" id="delphicnum" name="delphicnum">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class="fa fa-user-o"></i>&nbsp <span id="delmemname"></span></h5>
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
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<script type="text/javascript">
	const baseURI = $("#base_url").val();
	$(document).ready(function() {
		Memberlist();
	});
	$("#frmMemberInfo").submit(function() {
			$.ajax({
				url: baseURI + "EClaims/getMemberPIN",
				type: "POST",
				data: new FormData(this),
				dataType: "JSON",
				processData: false,
				contentType: false,
				cache: false,
				async: true,
				success: function(data, response) {
					if (data.status == "success") {
						toastr.success(data.message, 'Success');
					} else {
						toastr.error(data.message, 'Error');
					}

					/* if (data['pin'] == $("#pmemberpin").val()) {
						toastr.success('Member PIN is correct!', 'Success');
					} else {
						toastr.error('Error: ' + data['pin'], 'Error');
					} */
				},
				error: function(data) {
					toastr.error(data.responseJSON.message, 'Error');
				}
			});

			return false;
		});

		function Memberlist() {
			var data = new Object();
			data.id = "MemberTable";
			data.link = "<?php echo site_url('Philhealth/MemberList'); ?>";
			data.type = "POST";
			data.coldef = [{
					targets: [2],
					searchable: false,
					orderable: false,
					render: function(data, type, row) {
						switch (data) {
							case 'M':
								return '<i class="fa fa-male"></i>&nbsp MALE';
								break;
							case 'F':
								return '<i class="fa fa-female"></i>&nbsp FEMALE';
								break;
							default:
								return 'N/A';
						}
					},
				},
				{
					targets: [4],
					searchable: false,
					orderable: false,
					render: function(data, type, row) {
						switch (data) {
							case '01':
								return 'Employed - Private Sector';
								break;
							case '02':
								return 'Employed - Gov\'t Sector';
								break;
							case '03':
								return 'Indigent';
								break;
							case '04':
								return 'Individually Paying - Self Employed';
								break;
							case '05':
								return 'Individually Paying - OFW';
								break;
							case '06':
								return 'Individually Paying - Others';
								break;
							case '07':
								return 'Individually Paying - OWWA';
								break;
							case '08':
								return 'Retiree/Pensioner - SSS';
								break;
							case '09':
								return 'Retiree/Pensioner - GSIS';
								break;
							case '10':
								return 'Retiree/Pensioner - Military';
								break;
							case '11':
								return 'Retiree/Pensioner - Judiciary';
								break;
							case '12':
								return 'Senior Citizen';
								break;
							case '13':
								return 'Lifetime Member';
								break;
							default:
								return 'N/A';
						}
					},
				},
				{
					targets: [3, 4, 6],
					searchable: false,
					orderable: false
				},
				{
					targets: [3],
					render: function(data, type, row) {
						return $.datepicker.formatDate('mm/dd/yy', new Date(data));
					}
				},
				{
					targets: [5],
					searchable: true,
					orderable: true
				}
			];
			loadTable(data);
		}

		$('#MemberTable').on('click', '.ModalMemberInfo', function() {
			$('#ModalMemberInfo').modal('show');
			var phicnum = $(this).data('phicnum');
			$("#pmemberpin").val(phicnum);
			var obj = MemberInfo(phicnum);
			var phicnum2 = obj['phicnum2'];
			$('#pen').val(phicnum2);
			var empname = obj['empname'];
			$('#employer').val(empname);
			var memlast = obj['memlast'];
			$("#pmemberlastname").val(memlast);
			var memfirst = obj['memfirst'];
			$("#pmemberfirstname").val(memfirst);
			var memmid = obj['memmid'];
			$("#pmembermiddlename").val(memmid);
			if (memmid == null || memmid == 'null' || $.trim(memmid) == '') {
				memmid = '';
			} else {
				memmid = ' ' + memmid;
			}
			var memsuffix = obj['memsuffix'];
			$("#pmembersuffix").val(memsuffix);
			if (memsuffix == null || memsuffix == 'null' || $.trim(memsuffix) == '') {
				memsuffix = '';
			} else {
				memsuffix = ' ' + memsuffix;
			}
			var fullname = memfirst + memmid + ' ' + memlast + memsuffix;
			$("#memname").text(fullname);
			var memsex = obj['memsex'];
			$("#memsex").text(sex(memsex));
			var memcivil = obj['memcivil'];
			$("#civilstat").text(civilstatus(memcivil));
			var membdate = obj['membdate'];
			$("#pmemberbirthdate").val(membdate);
			$('#membdate').text($.datepicker.formatDate('mm-dd-yy', new Date(membdate)));
			var typedesc = obj['typedesc'];
			$("#typemem").text(typedesc);
			$("#pin").text(phicnum);
			var phicnum2 = obj['phicnum2'];
			if ($.trim(phicnum2) == '' || phicnum2 == null || phicnum2 == 'null') {} else {
				$("#pen").text(phicnum2);
			}
			var employername = obj['empname'];
			if ($.trim(employername) == '' || employername == null || employername == 'null') {} else {
				$("#employername").text(employername);
			}
		});

		$('#MemberTable').on('click', '.ModalMemberDelete', function() {
			$('#ModalMemberDelete').modal('show');
			var phicnum = $(this).data('phicnum');
			var obj = MemberInfo(phicnum);
			$("#delphicnum").val(phicnum);
			var fullname = obj['memfirst'].concat(" ", obj['memmid'], " ", obj['memlast']);
			$("#delmemname").text(fullname);
		});

		$("#frmDeleteMember").submit(function() {
			$.ajax({
				url: baseURI + "Philhealth/DeleteMember",
				type: "POST",
				data: new FormData(this),
				dataType: "JSON",
				processData: false,
				contentType: false,
				cache: false,
				async: true,
				success: function(data, response) {
					toastr.success('Member successfully deleted!', 'Success');
					$('#ModalMemberDelete').modal('hide');
					Memberlist();
				},
				error: function(data) {
					toastr.error('Error:' + data['responseText'], 'Error');
				}
			});
			return false;
		});
</script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/member_information.js"></script>