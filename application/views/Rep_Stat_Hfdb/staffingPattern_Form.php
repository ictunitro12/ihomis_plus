<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<form id="frmPersonalAssignment">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-accent-success">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 col-md-auto">
                            <div class="card-title h3 text-success"><i class="fa fa-th-list"></i> Human Resource Compliment</div>
                        </div>
                        <div class="col-md-6 col-md-auto">
                            <div class="btn-group pull-right" role="group" aria-label="">
                                <button type="submit" title="Save" class="btn btn-success"><i class="fa fa-save"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <table id="StaffingPatternTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
                        <input type="hidden" class="" name="staffPat_year" id="staffPat_year" autocomplete="off"/>
                        <input type="hidden" name="AddIden" id="AddIden"/>
                        <thead class="thead-dark" align="center">
                            <tr>
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
                            <tr align="center">
                                <td><input type="number" class="form-control form-control-mg" name="consulPartTimes" id="consulPartTimes" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="consulFullTimes" id="consulFullTimes" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="Ress" id="Ress" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="Ancillarys" id="Ancillarys" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="Dentals" id="Dentals" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="Heads" id="Heads" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="Supervisors" id="Supervisors" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="Staffs" id="Staffs" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="mwAides" id="mwAides" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="Hepos" id="Hepos" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="Admins" id="Admins" autocomplete="off" onkeyup="sumPerssonelStaff();"></td>
                                <td><input type="number" class="form-control form-control-mg" name="totals" id="totals" autocomplete="off" readonly onkeyup="sumPerssonelStaff();"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
<input type="hidden" id="AddIden">
<input type="hidden" id="fhudcode">
<input type="hidden" id="newfhudcode">

<script src="<?php echo base_url() ?>assets/scripts/Hfdb_Stat_Rep/StaffingPattern/personnelStaffAssignment.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        personnelStaff($.session.get('year'));
    });
</script>