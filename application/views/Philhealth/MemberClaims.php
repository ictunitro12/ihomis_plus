<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<div class="row">
    <div class="col-lg-3">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <div class="h3 text text-success">
                            <i class="fa fa-user"></i>
                            &nbsp Member Information
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive" style="overflow-x: visible; overflow-y: visible;">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <b class="text text-success"><i class="fa fa-user"></i>&nbsp NAME:</b>
                        <span class="text text-success pull-right text" id="meminfo_name"></span>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp SEX:</b>
                        <span class="text text-success pull-right text" id="meminfo_sex">N/A</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <b class="text text-success"><i class="fa fa-calendar-o"></i>&nbsp BIRTH DATE:</b>
                        <span class="text text-success pull-right text" id="meminfo_bdate"></span>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <b class="text text-success"><i class="fa fa-venus-double"></i>&nbsp CIVIL STATUS:</b>
                        <span class="text text-success pull-right text" id="meminfo_civilstatus">N/A</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <b class="text text-success"><i class="fa fa-address-card"></i>&nbsp TYPE OF MEMBERSHIP:</b>
                        <span class="text text-success pull-right text" id="meminfo_typemem"></span>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp PIN:</b>
                        <span class="text text-success pull-right text" id="meminfo_pin">N/A</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <b class="text text-success"><i class="fa fa-handshake-o"></i>&nbsp EMPLOYER NAME:</b>
                        <span class="text text-success pull-right text" id="meminfo_employername">N/A</span>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp PEN:</b>
                        <span class="text text-success pull-right text" id="meminfo_pen">N/A</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <div class="h3 text text-success">
                            <i class="fa fa-th-list"></i>
                            &nbsp Member Claims
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-group pull-right" role="group" aria-label="">
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Add Claim" class="btn btn-success btn-md  btn-ladda ModalClaimAdd" data-style="zoom-in"><i class="fa fa-user-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive" style="overflow-x: visible; overflow-y: visible;">
                <table id="ClaimsTable" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
                    <thead class="thead-dark">
                        <tr>
                            <th class="never"></th>
                            <th class="never"></th>
                            <th class="never"></th>
                            <th class="never"></th>
                            <th class="align-middle all">ADMISSION DATE</th>
                            <th class="align-middle all">DISCHARGED DATE</th>
                            <th class="align-middle all">PATIENT NAME</th>
                            <th class="align-middle all">RELATION TO MEMBER</th>
                            <th class="align-middle all">PATIENT PIN</th>
                            <th class="align-middle all">CLAIM TYPE</th>
                            <th class="align-middle all">NO BALANCE BILLING</th>
                            <th class="align-middle all">CEWS TRACKING NUMBER</th>
                            <th class="align-middle all"></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<?php echo ViewSearchPatient(); ?>

<form id="frmAddClaim" method="post">
    <input id="formIden" type="hidden" name="formIden">
    <div class="modal" id="AddClaimModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
            <div class="modal-content card-accent-success">
                <div class="modal-body border-success">
                    <h1 class="modal-title text-success"><i class="fa fa-search-plus"></i> <span id="addclaimheader">New
                            Claim</span></h1>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <b class="text text-success"><i class="fa fa-user"></i>&nbsp PATIENT NAME:</b>
                            <a class="pull-right text text-success" id="claimpatientname">N/A</a>
                        </li>
                        <li class="list-group-item">
                            <b class="text text-success"><i class="fa fa-id-badge"></i>&nbsp HEALTH RECORD NUMBER:</b>
                            <a class="pull-right text text-success" id="claimpatienthpercode">N/A</a>
                        </li>
                        <li class="list-group-item">
                            <b class="text text-success"><i class="fa fa-sign-in"></i>&nbsp ENCOUNTER:</b>
                            <a class="pull-right text text-success" id="claimpatienttoecode">N/A</a>
                        </li>
                    </ul>
                    <hr>
                    <div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp
                        <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i>
                        are required!
                    </div>
                    <input type="hidden" name="patientenccode" id="patientenccode">
                    <input type="hidden" name="patienthpercode" id="patienthpercode">
                    <input type="hidden" name="memberhpercode" id="memberhpercode">
                    <input type="hidden" name="memberphicnum" id="memberphicnum">
                    <input type="hidden" name="prdteadm" id="prdteadm">
                    <input type="hidden" name="prdtedis" id="prdtedis">
                    <div class="form-group">
                        <label for="paccreno">Claim Type <i class="fa fa-asterisk text-danger"></i></label>
                        <select name="paccreno" id="paccreno" class="form-control form-control-mb">
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="admdate">Admission Date</label>
                                <input type="date" readonly class="form-control" id="admdate" name="admdate" placeholder="Admission Date">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="admtime">Admission Time</label>
                                <input type="time" readonly class="form-control" id="admtime" name="admtime" placeholder="Admission Time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="disdate">Discharged Date</label>
                                <input type="date" readonly class="form-control" id="disdate" name="disdate" placeholder="Admission Date">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="distime">Discharged Time</label>
                                <input type="time" readonly class="form-control" id="distime" name="distime" placeholder="Admission Date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="reltomem">Relation to Member <i class="fa fa-asterisk text-danger"></i></label>
                        <select name="reltomem" id="reltomem" class="form-control form-control-mb">
                            <option value="">Select Relation to Member</option>
                            <option value="1">Spouse</option>
                            <option value="2">Child below 21 years old</option>
                            <option value="3">Child below 21 years old with disablility</option>
                            <option value="4">Parent</option>
                            <option value="6">Self</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ppatientpin">Dependent PIN</label>
                        <input type="text" class="form-control" id="ppatientpin" name="ppatientpin" placeholder="Dependent (PIN)">
                    </div>
                    <div class="form-group">
                        <label for="nbbclaim">No Balance Billing?</label>
                        <select name="nbbclaim" id="nbbclaim" class="form-control form-control-mb">
                            <option value="">Select If No Balance Billing</option>
                            <option value="Y">Yes</option>
                            <option value="N">No</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="submit" name="sSubmit" class="btn btn-success btn-lg	btn-block btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> &nbsp SAVE</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form name="frmDeleteClaim" id="frmDeleteClaim">
    <input type="hidden" id="delclaimenccode" name="delclaimenccode">
    <div class="modal fade" id="ModalClaimDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white"><i class="fa fa-user-o"></i>&nbsp <span id="delpatname"></span>
                    </h5>
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

<div class="modal" id="pbefModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content card-accent-success">
            <div class="modal-header">
                <h1 class="modal-title text-success">PBEF</h1>
            </div>
            <div class="modal-body border-success pbfebBody" style="height: 70vh; overflow:hidden;">

            </div>
            <div class="modal-footer bg-secondary">
                <button type="button " name="close" class="btn btn-success btn-lg btn-block btn-ladda close-pbef-modal" data-style="slide-right">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal" id="initialOrFinalModal" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content card-accent-success">
			<form id="initialOrFinalForm" method="post">
				<div class="modal-header">
					<h2 class="modal-title text-success">PBEF Status</h2>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-3 col-form-label  text-default mb-1">
							Initial or Final? <i class="fa fa-asterisk text-danger"></i>
						</div>
						<div class="col-9 mb-1">
							<select name="isfinal" id="isfinal" class="form-control form-control-mb" required>
								<option value=""></option>
								<option value="0">Initial</option>
								<option value="1">Final</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit" class="btn btn-success btn-lg btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> Select</button>
				</div>
			</form>
		</div>
	</div>
</div> -->

<div class="modal" id="initialOrFinalModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content card-accent-success">
            <form id="initialOrFinalForm" method="post">
                <div class="modal-header">
                    <h2 class="modal-title text-success">PBEF Status</h2>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="isfinal">Initial or Final? <i class="fa fa-asterisk text-danger"></i></label>
                                <select name="isfinal" id="isfinal" class="form-control form-control-mb" required>
                                    <option value=""></option>
                                    <option value="0">Initial</option>
                                    <option value="1">Final</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>Accreditation Number: </span>
                            <span id="verify_accreno" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <hr class="bg-success">
                    <div class="h5 text-success"> <i class="fa fa-user"></i>&nbsp; Member Information</div>
                    <hr class="bg-success">

                    <div class="form-row">
                        <div class="col-md">
                            <span>Philhealth Identification No.: </span>
                            <span id="verify_pin" class="text text-success font-weight-bold"></span>
                        </div>
                        <div class="col-md">
                            <span>Type of Memebership: </span>
                            <span id="verify_typemem" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>Name of Member: </span>
                            <span id="verfiy_membername" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>Gender: </span>
                            <span id="verify_membergender" class="text text-success font-weight-bold"></span>
                        </div>
                        <div class="col-md">
                            <span>Date of Birth: </span>
                            <span id="verify_memberdob" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>Address: </span>
                            <span id="verify_memberaddress" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>Employer's PIN (PEN): </span>
                            <span id="verify_pen" class="text text-success font-weight-bold"></span>
                        </div>
                        <div class="col-md">
                            <span>Employer's Name: </span>
                            <span id="verify_employername" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <hr class="bg-success">
                    <div class="h5 text-success"> <i class="fa fa-user"></i>&nbsp Patient Information</div>
                    <hr class="bg-success">

                    <div class="form-row">
                        <div class="col-md">
                            <span>Patient's Relation to Member: </span>
                            <span id="verify_reltomem" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>Name of Patient: </span>
                            <span id="verfiy_patientname" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>Gender: </span>
                            <span id="verfiy_patientgender" class="text text-success font-weight-bold"></span>
                        </div>
                        <div class="col-md">
                            <span>Date of Birth: </span>
                            <span id="verfiy_patientdob" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>Address: </span>
                            <span id="verfiy_patientaddress" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>Admission Date: </span>
                            <span id="verfiy_admdate" class="text text-success font-weight-bold"></span>
                        </div>
                        <div class="col-md">
                            <span>Discharged Date: </span>
                            <span id="verfiy_disdate" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md">
                            <span>RVS: </span>
                            <span id="verfiy_rvs" class="text text-success font-weight-bold"></span>
                        </div>
                        <div class="col-md">
                            <span>Total Hospital Bill: </span>
                            <span id="verfiy_bill" class="text text-success font-weight-bold"></span>
                        </div>
                        <div class="col-md">
                            <span>PHIC Reimbursement: </span>
                            <span id="verfiy_phic" class="text text-success font-weight-bold"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="submit" class="btn btn-success btn-lg btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> VERIFY</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CF1 Modal -->
<?php $this->load->view('Philhealth/_claim_form_1_modal.php'); ?>
<?php $this->load->view('Philhealth/_claim_signature_form_modal.php'); ?>

<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<input name="phicnum" id="phicnum" type="hidden" value="<?php echo $this->uri->segment(3); ?>">

<script type="text/javascript">
    const baseURI = $('#base_url').val();
    const phicnum = $("#phicnum").val();

    $(document).ready(function() {

        if (!phicnum) {
            toastr.error("Cannot find record", "Error");

            window.setTimeout(function() {
                history.go(-1);
            }, 3000);

            return false;
        }

        initMemberInfo(phicnum);
        Claimlist(phicnum);

        let enccode = "";

        $("#initialOrFinalForm").submit(function(e) {
            e.preventDefault();

            const isfinal = $('#isfinal').val();

            if (isfinal === "" && enccode === "") {
                return false;
            }

            $.ajax({
                url: baseURI + "Philhealth/handleClaimPBEFData",
                type: "POST",
                data: jQuery.param({
                    enccode: enccode,
                    isfinal: isfinal
                }),
                dataType: "JSON",
                success: function(data, response) {
                    if (data.status == 'success') {
                        $("#initialOrFinalModal").modal('hide');
                        $("#pbefModal").modal('show');
                        $('.pbfebBody').html(
                            '<object id="pdfframe" type="application/pdf" data="data:application/pdf;base64,' +
                            data.data.pdf_base64 +
                            '" width="100%" style="height:100%; overflow:hidden;"></object>'
                        );
                        Claimlist(phicnum);
                    } else {
                        toastr.error(data.code + ':' + data.message, "Error");
                    }
                },
                error: function(response) {
                    $("#initialOrFinalModal").modal('hide');
                    toastr.error("Error processing request!", "Error");
                },
            });
        });

        $(".close-pbef-modal").click(function() {
            $("#pbefModal").modal('hide');
        });

        /*$('#ClaimsTable').on('draw.dt', function() {

        });*/
        $('#ClaimsTable').on('click', ".verifyPbef", function(e) {
            e.preventDefault();
            enccode = $(this).attr('data-enccode');
            setVerifyInformation(enccode);
            $("#initialOrFinalModal").modal('show');
        });
    });

    function initMemberInfo(phicnum) {
        var memberInfo = MemberInfo(phicnum);
        $("#memberhpercode").val(memberInfo['hpercode']);
        $("#meminfo_name").text(memberInfo['memname']);
        var meminfo_sex = sex(memberInfo['memsex']);
        $("#meminfo_sex").text(meminfo_sex);
        $('#meminfo_bdate').text($.datepicker.formatDate('mm-dd-yy', new Date(memberInfo['membdate'])));
        var meminfo_civilstatus = civilstatus(memberInfo['memcivil']);
        $("#meminfo_civilstatus").text(meminfo_civilstatus);
        $("#meminfo_typemem").text(memberInfo['typedesc']);
        $("#meminfo_pin").text(memberInfo['phicnum']);
        $("#meminfo_employername").text(memberInfo['empname']);
        $("#meminfo_pen").text(memberInfo['phicnum2']);
    }

    function Claimlist(phicnum) {
        var data = new Object();
        data.id = "ClaimsTable";
        data.link = baseURI + "Philhealth/MemberClaims/" + phicnum;
        data.type = "POST";
        data.coldef = [{
                targets: [0, 1, 2, 3],
                visible: false
            },
            {
                targets: [4, 5],
                searchable: false,
                orderable: false,
                render: function(data, type, row) {
                    if (data != '0000-00-00 00:00:00' && data != null) {
                        return $.datepicker.formatDate('mm/dd/yy', new Date(data));
                    } else {
                        return '';
                    }
                }
            },
            {
                targets: [7],
                searchable: true,
                orderable: true,
                render: function(data, type, row) {
                    switch (data) {
                        case '1':
                            return 'Spouse';
                            break;
                        case '2':
                            return 'Child';
                            break;
                        case '3':
                            return 'Child';
                            break;
                        case '4':
                            return 'Parent';
                            break;
                        case '6':
                            return 'Self';
                            break;
                        default:
                            return 'N/A';
                    }
                }
            },
            {
                targets: [9],
                searchable: true,
                orderable: true,
                render: function(data, type, row) {
                    switch (data) {
                        case 'HOSP':
                            return 'Hospital';
                            break;
                        case 'ABTC':
                            return 'Animal Bite Center';
                            break;
                        case 'MCCP':
                            return 'Maternal Care';
                            break;
                        case 'DOTS':
                            return 'TB-DOTS';
                            break;
                        case 'PCBP':
                            return 'Primary Care';
                            break;
                        default:
                            return '';
                    }
                }
            },
            {
                targets: [10],
                searchable: false,
                orderable: false,
                render: function(data, type, row) {
                    switch (data) {
                        case 'Y':
                            return 'YES';
                            break;
                        default:
                            return 'NO';
                    }
                }
            },
            {
                targets: [11],
                searchable: false,
                orderable: false
            }
        ];
        loadTable(data);
    }

    $(".ModalClaimAdd").click(function() {
        $('#PatSearch').modal('show');
        $("#PatSearchList .modal-footer > a").hide();
    });

    $("#frmPatSearch").submit(function() {
        $.ajax({
            url: baseURI + "Patient/PatientAdvanceSearch",
            type: "POST",
            data: new FormData(this),
            dataType: "JSON",
            processData: false,
            contentType: false,
            cache: false,
            async: true,
            success: function(data, response) {
                $("#PatSearchList").modal('show');
                $("#PatSearch").modal('hide');
                PatSearchList(data);
            },
            error: function(response) {
                toastr.error('Error:Please try again!', 'Error');
            }
        });
        return false;
    });

    function PatSearchList(data) {
        $('#TblPatSearchList').off();
        var table = $("#TblPatSearchList").DataTable({
            data: data,
            destroy: true,
            className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
            columns: [{
                    "data": "hpercode"
                },
                {
                    "data": "fullname"
                },
                {
                    "data": "dob"
                },
                {
                    "data": "patsex"
                }
            ],
        });

        $('#TblPatSearchList').on('dblclick', 'tr', function() {
            var data = table.row(this).data();
            if (data == undefined) {
                return;
            }
            var hpercode = data['hpercode'];
            var fullname = data['fullname'];
            /*var patfirst = data['patfirst'];
            var patmiddle = data['patmiddle'];
            /*var patientname = patlast + " " + patfirst + " " + patmiddle;*/
            var patsex = data['patsex'];
            $.ajax({
                type: "POST",
                /*url: baseURI + "MedicalRecords/PatientHistory/" + hpercode,*/
                url: baseURI + "MedicalRecords/visitHistory/" + hpercode,
                dataType: "JSON",
                async: false,
                success: function(data) {
                    $("#PatHistoryList .modal-footer > a").hide();
                    $("#searchpatienthpercode").text(hpercode);
                    $("#searchpatientname").text(fullname);
                    $("#PatHistoryList").modal('show');
                    $('#PatSearchList').modal('hide');
                    PatVisitList(data['data'], fullname);
                },
                error: function(data) {
                    toastr.error('Error: Fetching Patient Visits!', 'Error');
                }
            });
        });
    }

    function PatVisitList(data, patientname) {
        $('#visitLogList').off();
        var table = $("#visitLogList").DataTable({
            data: data,
            destroy: true,
            className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
            columns: [{
                    "data": "admdate"
                },
                {
                    "data": "admtime"
                },
                {
                    "data": "disdate"
                },
                {
                    "data": "distime"
                },
                {
                    "data": "toecode"
                }
            ],
        });

        $('#visitLogList').on('dblclick', 'tr', function() {
            var data = table.row(this).data();
            if (data == undefined) {
                return;
            }
            var enccode = data['enccode'];
            var existclaim = existmemberclaim(enccode);
            if (!existclaim) {
                toastr.error('Claim already exist!', 'Error');
                return;
            }
            var toecode = data['toecode'];
            var patientloginfo = PatientLogInfo(enccode, toecode);
            if (patientloginfo == undefined) {
                return
            }
            var toecode = patientloginfo['toecode'];
            $("#formIden").val('insert');
            $("#addclaimheader").text("Add Claim");
            $("#claimpatientname").text(patientname);
            $("#claimpatienthpercode").text(data['hpercode']);
            $("#claimpatientadmdate").text(data['admdate']);
            $("#claimpatientdisdate").text(data['disdate']);
            $("#patienthpercode").val(data['hpercode']);
            $("#patientenccode").val(enccode);
            if (toecode == 'ADM') {
                $("#claimpatienttoecode").text('ADMISSION');
                $("#prdteadm").val(patientloginfo['admdate']);
                $("#prdtedis").val(patientloginfo['disdate']);
                $('#admdate').val($.datepicker.formatDate('yy-mm-dd', new Date(patientloginfo['admdate'])));
                $("#admtime").val(formatAMPM(new Date(patientloginfo['admdate'])));
                if (patientloginfo['disdate'] != null) {
                    $('#disdate').val($.datepicker.formatDate('yy-mm-dd', new Date(patientloginfo['disdate'])));
                    $("#distime").val(formatAMPM(new Date(patientloginfo['disdate'])));
                }
            }

            if (toecode == 'ER' || toecode == 'ERADM') {
                $("#claimpatienttoecode").text('EMERGENCY ROOM');
                $("#prdteadm").val(patientloginfo['erdate']);
                $("#prdtedis").val(patientloginfo['erdtedis']);
                $('#admdate').val($.datepicker.formatDate('yy-mm-dd', new Date(patientloginfo['erdate'])));
                $("#admtime").val(formatAMPM(new Date(patientloginfo['erdate'])));

                if (patientloginfo['erdtedis'] != null) {
                    $('#disdate').val($.datepicker.formatDate('yy-mm-dd', new Date(patientloginfo['erdtedis'])));
                    $("#distime").val(formatAMPM(new Date(patientloginfo['erdtedis'])));
                }
            }

            if (toecode == 'OPD' || toecode == 'OPDAD') {
                $("#claimpatienttoecode").text('OUT-PATIENT DEPARTMENT');
                $("#prdteadm").val(patientloginfo['opddate']);
                $("#prdtedis").val(patientloginfo['opddtedis']);
                $('#admdate').val($.datepicker.formatDate('yy-mm-dd', new Date(patientloginfo['opddate'])));
                $("#admtime").val(formatAMPM(new Date(patientloginfo['opddate'])));

                if (patientloginfo['opddtedis'] != null) {
                    $('#disdate').val($.datepicker.formatDate('yy-mm-dd', new Date(patientloginfo['opddtedis'])));
                    $("#distime").val(formatAMPM(new Date(patientloginfo['opddtedis'])));
                }
            }
            $("#memberphicnum").val($("#phicnum").val());
            $("#paccreno").empty().append("<option value=''>Select Claim Type</option>");
            $.get(baseURL + "Philhealth/PHICAccreditations", function(data) {
                for (i in data) {
                    $("#paccreno").append("<option value='" + data[i].paccreno + "'>" + data[i].claimtype +
                        "</option>");
                }
            }, "json");
            $("#AddClaimModal").modal('show');
            $("#PatHistoryList").modal('hide');
        });
    }

    function existmemberclaim(enccode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/existMemberClaim",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    function PatientLogInfo(enccode, toecode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/PatientLogInfo",
            data: {
                enccode: enccode,
                toecode: toecode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    $('#ClaimsTable').on('click', '.ModalClaimEdit', function() {
        $("#AddClaimModal").modal('show');
        $("#formIden").val('update');
        $("#addclaimheader").text("Edit Claim");
        var enccode = $(this).data('enccode');
        var memberclaiminfo = MemberClaimInfo(enccode);
        $("#patientenccode").val(enccode);
        var patientname = memberclaiminfo['patientname'];
        $("#claimpatientname").text(patientname);
        var reltomem = memberclaiminfo['reltomem'];
        $("#reltomem").val(reltomem);
        var pPatientPIN = memberclaiminfo['pPatientPIN'];
        $("#ppatientpin").val(pPatientPIN);
        var hpercode = memberclaiminfo['hpercode'];
        $("#patienthpercode").val(hpercode);
        if (memberclaiminfo['toecode'] == 'ADM') {
            $("#claimpatienttoecode").text('ADMISSION');
        }

        if (memberclaiminfo['toecode'] == 'ERADM' || memberclaiminfo['toecode'] == 'ER') {
            $("#claimpatienttoecode").text('EMERGENCY ROOM');
        }

        if (memberclaiminfo['toecode'] == 'OPD' || memberclaiminfo['toecode'] == 'OPDAD') {
            $("#claimpatienttoecode").text('OUT-PATIENT DEPARTMENT');
        }
        $("#claimpatienthpercode").text(hpercode);
        var hpercode1 = memberclaiminfo['hpercode1'];
        $("#memberhpercode").val(hpercode1);
        var phicnum = $("#phicnum").val();
        $("#memberphicnum").val(phicnum);

        var admdate = null;
        var admtime = null;
        var disdate = null;
        var distime = null;

        if (memberclaiminfo['pfacility'] == 'ABTC' || memberclaiminfo['pfacility'] == 'DOTS') {
            admdate = memberclaiminfo['padmissiondatetime'];
            admtime = memberclaiminfo['padmissiondatetime'];
            disdate = memberclaiminfo['pdischargedatetime'];
            distime = memberclaiminfo['pdischargedatetime'];
        } else {
            admdate = memberclaiminfo['admdate'];
            admtime = memberclaiminfo['admtime'];
            disdate = memberclaiminfo['disdate'];
            distime = memberclaiminfo['distime'];
        }

        $("#prdteadm").val(admdate);
        $('#admdate').val($.datepicker.formatDate('yy-mm-dd', new Date(admdate)));
        $("#admtime").val(formatAMPM(new Date(admtime)));
        if (disdate != null) {
            $("#prdteadis").val(disdate);
            $('#disdate').val($.datepicker.formatDate('yy-mm-dd', new Date(disdate)));
            $("#distime").val(formatAMPM(new Date(distime)));
        }
        var nbbclaim = memberclaiminfo['nbb'];
        $("#nbbclaim").val(nbbclaim);
        var accreno = memberclaiminfo['accreno'];
        $("#paccreno").empty().append("<option value=''>Select Claim Type</option>");

        $.get(baseURI + "Philhealth/PHICAccreditations", function(data) {
            for (i in data) {
                if (accreno == data[i].paccreno) {
                    $("#paccreno").append("<option value='" + data[i].paccreno + "' selected>" + data[i]
                        .claimtype + "</option>");
                } else {
                    $("#paccreno").append("<option value='" + data[i].paccreno + "'>" + data[i].claimtype +
                        "</option>");
                }

            }
        }, "json");

        if (memberclaiminfo['pfacility'] == 'DOTS' || memberclaiminfo['pfacility'] == 'ABTC') {
            $('#disdate').prop("readonly", false);
            $("#distime").prop("readonly", false);
        } else {
            $('#disdate').prop("readonly", true);
            $("#distime").prop("readonly", true);
        }
    });

    $("#paccreno").change(function() {
        var accreno = $(this).val();
        if (accreno == '') {
            return;
        }
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/PHICAccreditation",
            data: {
                accreno: accreno
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
                if (obj['pfacility'] == 'DOTS' || obj['pfacility'] == 'ABTC') {
                    $('#disdate').prop("readonly", false);
                    $("#distime").prop("readonly", false);
                } else {
                    $('#disdate').prop("readonly", true);
                    $("#distime").prop("readonly", true);
                    setEncounterDateTime();
                }
            },
            error: function(data, status) {

            }
        });
    });

    function setEncounterDateTime() {
        var enccode = $("#patientenccode").val();
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/getEncounterDatetime",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
                var admdate = obj['admdate'];
                $("#prdteadm").val(admdate);
                $('#admdate').val($.datepicker.formatDate('yy-mm-dd', new Date(admdate)));
                $("#admtime").val(formatAMPM(new Date(admdate)));
                var disdate = obj['disdate'];
                if (disdate != null) {
                    $("#prdteadis").val(disdate);
                    $('#disdate').val($.datepicker.formatDate('yy-mm-dd', new Date(disdate)));
                    $("#distime").val(formatAMPM(new Date(disdate)));
                }
            },
            error: function(data, status) {

            }
        });
    }

    function MemberClaimInfo(enccode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/MemberClaimInfo",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    $('#ClaimsTable').on('click', '.ModalClaimDelete', function() {
        $('#ModalClaimDelete').modal('show');
        var enccode = $(this).data('enccode');
        $("#delclaimenccode").val(enccode);
        var obj = MemberClaimInfo(enccode);
        var fullname = obj['patientname'];
        $("#delpatname").text(fullname);
    });

    $("#frmDeleteClaim").submit(function() {
        $.ajax({
            url: baseURI + "Philhealth/DeleteClaim",
            type: "POST",
            data: new FormData(this),
            dataType: "JSON",
            processData: false,
            contentType: false,
            cache: false,
            async: true,
            success: function(data, response) {
                toastr.success('Claim successfully deleted!', 'Success');
                $('#ModalClaimDelete').modal('hide');
                var phicnum = $("#phicnum").val();
                Claimlist(phicnum);
            },
            error: function(data) {
                toastr.error('Error:' + data['responseText'], 'Error');
            }
        });
        return false;
    });

    $('#ClaimsTable').on('click', '.ModalClaimCF2', function() {
        var enccode = $(this).data('enccode');
        var accreno = $(this).data('accreno');
        if (accreno == '' || accreno == null || accreno == undefined || accreno == 'null') {
            toastr.error('Error: No Claim Type set!', 'Error');
            return;
        }
        enccode = encodeURIComponent(encodeURIComponent(enccode));
        window.location.href = baseURI + "Philhealth/ClaimForm2/" + enccode;
    });

    function formatAMPM(date) {
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var seconds = '00';
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12;
        hours = hours >= 10 ? hours : '0' + hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        var strTime = hours + ':' + minutes + ':' + seconds;
        return strTime;
    }

    $('#ClaimsTable').on('click', '.ModalClaimCF3', function() {
        let enccode = $(this).data('enccode');
        let accreno = $(this).data('accreno');

        if (accreno == '' || accreno == null || accreno == undefined || accreno == 'null') {
            toastr.error('Error: No Claim Type set!', 'Error');
            return;
        }

        let enccodeURI = encodeURIComponent(encodeURIComponent(enccode));
        let accrenoURI = encodeURIComponent(encodeURIComponent(accreno));

        window.location.href = baseURI + "Philhealth/claimForm3View?enccode=" + enccodeURI + '&accreno=' +
            accrenoURI;
    });

    $('#ClaimsTable').on('click', '.ModalClaimCF4', function() {
        let enccode = $(this).data('enccode');
        let accreno = $(this).data('accreno');

        if (accreno == '' || accreno == null || accreno == undefined || accreno == 'null') {
            toastr.error('Error: No Claim Type set!', 'Error');
            return;
        }

        let enccodeURI = encodeURIComponent(encodeURIComponent(enccode));
        let accrenoURI = encodeURIComponent(encodeURIComponent(accreno));

        window.location.href = baseURI + "Philhealth/claimForm4View?enccode=" + enccodeURI + '&accreno=' +
            accrenoURI;
    });

    function setVerifyInformation(enccode) {
        var pbefdata = null;
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: baseURI + "Philhealth/getPBEFData",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                pbefdata = data.data;

                if (pbefdata.pfacility == 'HOSP') {
                    $("#verify_accreno").text('HOSPITAL - ' + pbefdata.accreno);
                }

                if (pbefdata.pfacility == 'DOTS') {
                    $("#verify_accreno").text('DOTS - ' + pbefdata.accreno);
                }

                if (pbefdata.pfacility == 'ABTC') {
                    $("#verify_accreno").text('ANIMAL BITE CENTER - ' + pbefdata.accreno);
                }

                if (pbefdata.pfacility == 'CISU') {
                    $("#verify_accreno").text('COMMUNITY ISOLATION UNIT - ' + pbefdata.accreno);
                }

                if (pbefdata.pfacility == 'LABS') {
                    $("#verify_accreno").text('LABORATORY - ' + pbefdata.accreno);
                }

                if (pbefdata.pfacility == 'MCPP') {
                    $("#verify_accreno").text('MATERNAL CARE PACKAGE PROVIDER - ' + pbefdata.accreno);
                }

                $("#verify_pin").text(pbefdata.phicnum);
                $("#verify_typemem").text(pbefdata.typedesc);

                var memberlastname = pbefdata.memlast;
                var memberfirstname = pbefdata.memfirst;
                var membermiddlename = pbefdata.memmid;
                var membersuffix = pbefdata.memsuffix;
                var membername = memberlastname + ', ' + memberfirstname;

                if (membersuffix != null && membermiddlename != "NOTAP" && membersuffix != "") {
                    membername = membername + ' ' + membersuffix;
                }

                if (membermiddlename != null && membermiddlename != "N/A" && membermiddlename != "") {
                    membername = membername + ', ' + membermiddlename;
                }

                $("#verfiy_membername").text(membername);
                $("#verify_membergender").text((pbefdata.memsex == 'M' ? 'MALE' : 'FEMALE'));
                var membdate = new Date(pbefdata.membdate);
                membdate = ((membdate.getMonth() > 8) ? (membdate.getMonth() + 1) : ('0' + (membdate
                    .getMonth() + 1))) + '/' + ((membdate.getDate() > 9) ? membdate.getDate() : ('0' +
                    membdate
                    .getDate())) + '/' + membdate.getFullYear();
                $("#verify_memberdob").text(membdate);

                var memaddress = "";
                if (pbefdata.memstr != "" && pbefdata.memstr != null) {
                    memaddress = memaddress + pbefdata.memstr;
                }

                if (pbefdata.membyname != "" && pbefdata.membyname != null) {
                    memaddress = memaddress + ', ' + pbefdata.membyname;
                }

                if (pbefdata.memctyname != "" && pbefdata.memctyname != null) {
                    memaddress = memaddress + ', ' + pbefdata.memctyname;
                }

                if (pbefdata.memprovname != "" && pbefdata.memprovname != null) {
                    memaddress = memaddress + ', ' + pbefdata.memprovname;
                }

                $("#verify_memberaddress").text(memaddress);
                $("#verify_pen").text((pbefdata.phicnum2 != null ? pbefdata.phicnum2 : ""));
                $("#verify_employername").text((pbefdata.empname != null ? pbefdata.empname : ""));

                if (pbefdata.preltomem == 'M') {
                    $("#verify_reltomem").text('SELF');
                }

                if (pbefdata.preltomem == 'S') {
                    $("#verify_reltomem").text('SPOUSE');
                }

                if (pbefdata.preltomem == 'P') {
                    $("#verify_reltomem").text('PARENT');
                }

                if (pbefdata.preltomem == 'C') {
                    $("#verify_reltomem").text('CHILD');
                }

                var patientlastname = pbefdata.patlast;
                var patientfirstname = pbefdata.patfirst;
                var patientmiddlename = pbefdata.patmiddle;
                var patientsuffix = pbefdata.memsuffix;
                var patientname = patientlastname + ', ' + patientfirstname;

                if (patientsuffix != null && patientsuffix != "NOTAP" && patientsuffix != "") {
                    patientname = patientname + ' ' + patientsuffix;
                }

                if (patientmiddlename != null && patientmiddlename != "N/A" && patientmiddlename != "") {
                    patientname = patientname + ', ' + patientmiddlename;
                }
                $("#verfiy_patientname").text(patientname);

                $("#verfiy_patientgender").text((pbefdata.patsex == 'M' ? 'MALE' : 'FEMALE'));
                var patbdate = new Date(pbefdata.patbdate);
                patbdate = ((patbdate.getMonth() > 8) ? (patbdate.getMonth() + 1) : ('0' + (patbdate
                    .getMonth() + 1))) + '/' + ((patbdate.getDate() > 9) ? patbdate.getDate() : ('0' +
                    patbdate
                    .getDate())) + '/' + patbdate.getFullYear();
                $("#verfiy_patientdob").text(patbdate);

                var pataddress = "";
                if (pbefdata.patstr != "" && pbefdata.patstr != null) {
                    pataddress = pataddress + pbefdata.patstr;
                }

                if (pbefdata.patbyname != "" && pbefdata.patbyname != null) {
                    pataddress = pataddress + ', ' + pbefdata.patbyname;
                }

                if (pbefdata.patctyname != "" && pbefdata.patctyname != null) {
                    pataddress = pataddress + ', ' + pbefdata.patctyname;
                }

                if (pbefdata.patprovname != "" && pbefdata.patprovname != null) {
                    pataddress = pataddress + ', ' + pbefdata.patprovname;
                }
                $("#verfiy_patientaddress").text(pataddress);

                var admdate = new Date(pbefdata.admdate);
                admdate = ((admdate.getMonth() > 8) ? (admdate.getMonth() + 1) : ('0' + (admdate.getMonth() +
                        1))) + '/' + ((admdate.getDate() > 9) ? admdate.getDate() : ('0' + admdate.getDate())) +
                    '/' + admdate.getFullYear();
                $("#verfiy_admdate").text(admdate);

                if (pbefdata.disdate) {
                    var disdate = new Date(pbefdata.disdate);
                    disdate = ((disdate.getMonth() > 8) ? (disdate.getMonth() + 1) : ('0' + (disdate
                            .getMonth() +
                            1))) + '/' + ((disdate.getDate() > 9) ? disdate.getDate() : ('0' + disdate
                            .getDate())) +
                        '/' + disdate.getFullYear();
                    $("#verfiy_disdate").text(disdate);
                }

                if (pbefdata.fcasetype == "P") {
                    $("#verfiy_rvs").text(pbefdata.firstcase);
                } else {
                    if (pbefdata.scasetype == "P") {
                        $("#verfiy_rvs").text(pbefdata.secondcase);
                    }
                }

                if (!pbefdata.amt1) pbefdata.amt1 = 0;
                if (!pbefdata.amt2) pbefdata.amt2 = 0;
                var phic = pbefdata.amt1 + pbefdata.amt2;
                if (phic) {
                    $("#verfiy_phic").text(numFormatter.format(phic));
                }
            },
            error: function(data) {
                toastr.error('Error retrieving PBEF data!', 'Error');
            }
        });
    }

    /*$('#ClaimsTable').on('click', '.ModalClaimCSF', function() {
    	let enccode = $(this).data('enccode');
    	let accreno = $(this).data('accreno');

    	if (accreno == '' || accreno == null || accreno == undefined || accreno == 'null') {
    		toastr.error('Error: No Claim Type set!', 'Error');
    		return;
    	}

    	let enccodeURI = encodeURIComponent(encodeURIComponent(enccode));
    	let accrenoURI = encodeURIComponent(encodeURIComponent(accreno));

    	window.location.href = baseURI + "Philhealth/claimSignatureFormView?enccode=" + enccodeURI + '&accreno=' + accrenoURI;
    });*/
</script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/claim_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/member_information.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/claim_form_one.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/claim_signature_form.js"></script>