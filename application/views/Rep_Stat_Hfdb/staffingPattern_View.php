<!-- //-------------Personnel/Staff Assignment----------------// -->
<div class="row">
    <div class="col-md-12">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class=" card-title h3 text-success"><i class="fa fa-th-list"></i> Human Resource Compliment<small>(Year : <label id="staffPatRepyear" readonly></label>)</small></div>
            </div>
            <div class="card-body table-responsive">
                <ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text text-success active" id="personnelStaffPat-tab" data-toggle="tab" href="#personnelStaffPat" role="tab" aria-controls="personnelStaffPat" aria-expanded="true"></i> Personnel/Staff Assignment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="adminService-tab" data-toggle="tab" href="#adminService" role="tab" aria-controls="adminService" aria-expanded="true"></i> Administrative Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="manpowerDevelopment-tab" data-toggle="tab" href="#manpowerDevelopment" role="tab" aria-controls="manpowerDevelopment" aria-expanded="true"></i> Manpower Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="committee-tab" data-toggle="tab" href="#committee" role="tab" aria-controls="committee" aria-expanded="true"></i> Committees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="progImple-tab" data-toggle="tab" href="#progImple" role="tab" aria-controls="progImple" aria-expanded="true"></i> Programs Implemented</a>
                    </li>
                </ul>
                <div class="tab-content" id="tabChargescontent">
                    <div class="tab-pane fade show active" id="personnelStaffPat" role="tabpanel" aria-labelledby="personnelStaffPat-tab">
                        <div class="card-body table-responsive">
                            <div class="btn-group pull-right" role="group" aria-label="">
                                <a href="<?php echo site_url('Rep_Hfdb/Committee_Form');?>"  id="managePersonnelStaff_button" data-toggle="tooltip" title="Manage" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-cog"></i></a>
                            </div>
                            <table id="personnelStaffPat_Table" class="table table-sm table-striped table-bordered table-condensed table-hover" cellpadding="1">
                                <thead class="thead-dark" align="center">
                                    <tr style="font-weight:bold">
                                        <th width="100%" colspan="12">Number of Personnel (Authorized)</th>
                                    </tr>
                                    <tr>
                                        <th width="40%" colspan="5">Medical</th>
                                        <th width="40%" colspan="5">Nursing</th>
                                        <th width="10%" rowspan="3">Admin</th>
                                        <th width="10%" rowspan="3">Total</th>
                                    </tr>
                                    <tr>
                                        <th width="16%" colspan="2">Consultants</th>
                                        <th width="8%" rowspan="2">Res</th>
                                        <th width="8%" rowspan="2">Ancillary</th>
                                        <th width="8%" rowspan="2">Dental</th>
                                        <th width="8%" rowspan="2">Head</th>
                                        <th width="8%" rowspan="2">Supervisor</th>
                                        <th width="8%" rowspan="2">Staff</th>
                                        <th width="8%" rowspan="2">MW/Aide</th>
                                        <th width="8%" rowspan="2">HEPO</th>
                                    </tr>
                                    <tr>
                                        <th width="8%">Part Time</th>
                                        <th width="8%">Full Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr align = "center">
                                        <td><label id="consulPartTime"></label></td>
                                        <td><label id="consulFullTime"></label></td>
                                        <td><label id="Res"></label></td>
                                        <td><label id="Ancillary"></label></td>
                                        <td><label id="Dental"></label></td>
                                        <td><label id="Head"></label></td>
                                        <td><label id="Supervisor"></label></td>
                                        <td><label id="Staff"></label></td>
                                        <td><label id="mwAide"></label></td>
                                        <td><label id="Hepo"></label></td>
                                        <td><label id="Admin"></label></td>
                                        <td><label id="total"></label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="adminService" role="tabpanel" aria-labelledby="adminService-tab">
                        <br>
                        <table id="adminService_Table" class="table table-sm table-striped table-bordered table-condensed table-hover" cellpadding="1">
                            <thead class="thead-dark" align="center">
                                <tr style="font-weight:bold">
                                    <th width="40%">Profession/Position/Designation</th>
                                    <th width="20%">Authorized</th>
                                    <th width="20%">Actual/Implementing</th>
                                    <th width="20%">Full Time Equivalent</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="tab-pane fade show" id="manpowerDevelopment" role="tabpanel" aria-labelledby="manpowerDevelopment-tab">
                        <br>
                        <table id="manpowerDevelopment_Table" class="table table-sm table-striped table-bordered table-condensed table-hover" cellpadding="1">
                            <thead class="thead-dark" align="center">
                                <tr style="font-weight:bold">
                                    <th width="40%">Title of Training Programs</th>
                                    <th width="30%">Conducted By<br>(Agency/Institution)</th>
                                    <th width="30%">Inclusive Dates</th>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <table id="manpowerDevelopment_Table" class="table table-sm table-striped table-bordered table-condensed table-hover" cellpadding="1">
                            <thead class="thead-dark" align="center">
                                <tr style="font-weight:bold">
                                    <th width="40%">Title of Research</th>
                                    <th width="30%">Conducted By(Whom/Agency/Institution)</th>
                                    <th width="30%">Inclusive Dates</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="tab-pane fade show" id="committee" role="tabpanel" aria-labelledby="committee-tab">
                        <br>
                        <table id="committee_Table" class="table table-sm table-striped table-bordered table-condensed table-hover" cellpadding="1">
                            <thead class="thead-dark" align="center">
                                <tr>
                                    <th width="40%" rowspan="2"></th>
                                    <th width="20%" colspan="2">EXISTING</th>
                                    <th width="20%" colspan="2">FUNCTIONAL</th>
                                    <th width="20%" rowspan="2">REMARKS</th>
                                </tr>
                                <tr>
                                    <th width="10%">YES</th>
                                    <th width="10%">NO</th>
                                    <th width="10%">YES</th>
                                    <th width="10%">NO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="40%" align="left">9.1 Technical</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.1 Medical Audit</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.2 Clinical Conference</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.3 Infection Control Committee</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.4 Pharmaceutical/Therapeutic</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.5 Tissue Committee</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.6 Journal Committee (Nursing)</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.7 Medical Records Committee</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.8 Utilization Review</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.9 Accreditation Committee</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.10 Tumor Board</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.1.11 Waste Management Credential Committee</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">9.2 Administrative</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.2.1 Bidding and Awards Committee</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.2.2 Records Management Committee</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.2.3 Finance Committee</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.2.4 Medical Library Committee</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                                <tr>
                                    <td width="40%" align="left">9.3 Others</td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="10%"></td>
                                    <td width="20%"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade show" id="progImple" role="tabpanel" aria-labelledby="progImple-tab">
                        <br>
                        <table id="progImple_Table" class="table table-sm table-striped table-bordered table-condensed table-hover" cellpadding="1">
                            <thead class="thead-dark" align="center">
                                <tr style="font-weight:bold">
                                    <th width="30%">Programs</th>
                                    <th width="40%">Accomplishment</th>
                                    <th width="30%">Issues & Concerns</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        document.getElementById('staffPatRepyear').innerHTML = $.session.get('year');
    });
</script>
<script src="<?php echo base_url()?>assets/scripts/Hfdb_Stat_Rep/StaffingPattern/personnelStaffAssignment.js"></script>