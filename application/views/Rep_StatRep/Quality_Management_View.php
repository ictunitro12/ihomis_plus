<div class="row">
    <div class="col-md-6">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="card-title h3 text-success"><i class="fa fa-info-circle"></i> Quality Management</div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-md" width="100%">
                    <tbody>
                        <thead class="thead-dark">
                            <tr>
                                <th style="font-weight:bold" colspan="4">ISO Certified (Specify ISO Certifying Body and area(s) of the hospital with Certification)</th>
                            </tr>
                            <tr>
                                <td width="50%"><label id="iso_accreno"></label></td>
                                <td width="50%">Validity Period&nbsp;&nbsp; : &nbsp;&nbsp;<label id="iso_validfr"></label> <label id="iso_validto"></label></td>
                            </tr>

                            <tr>
                                <th style="font-weight:bold" colspan="4">International Accreditation</th>
                            </tr>
                            <tr>
                                <td><label id="inter_accreno"></label></td>
                                <td>Validity Period&nbsp;&nbsp; : &nbsp;&nbsp;<label id="inter_validfr"></label> <label id="inter_validto"></label></td>
                            </tr>

                            <tr>
                                <th style="font-weight:bold" colspan="4">PhilHealth Accreditation <span id="phic"></span></th>
                            </tr>
                            <tr>
                                <td><label id="accno"></label></td>
                                <td>Validity Period&nbsp;&nbsp; : &nbsp;&nbsp;<label id="accdte"></label> <label id="accdteto"></label></td>
                            </tr>

                            <tr>
                                <th style="font-weight:bold" colspan="4">PCAHO</th>
                            </tr>
                            <tr>
                                <td><label id="pcaho_accreno"></label></td>
                                <td>Validity Period&nbsp;&nbsp; : &nbsp;&nbsp;<label id="pcaho_validfr"></label> <label id="pcaho_validto"></label></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="card-title h3 text-success"><i class="fa fa-info-circle"></i> Bed Capacity / Occupancy</div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-md" width="100%">
                    <tbody>
                        <tr>
                            <td>Authorized Bed Capacity: <label id="bedcap_a" style="font-weight:bold"></label> <b>beds</b><br><i>*Authorized bed: Approved number of beds issued by by HFSRB/RO, the licensing offices of DOH.</i></td>
                        </tr>
                        <tr>
                            <td>Implementing Beds: <label id="hhosmem" style="font-weight:bold"></label> <b>beds</b><br><i>*Implementing beds: Actual beds used based on hospital management decision.</i></td>
                        </tr>
                        <tr>
                            <td>Bed Occupancy Rate (BOR) Based on Authorized Beds: <label id="bor1" style="font-weight:bold"></label><b>%</b><br><i>*Bed Occupancy Rate: The percentage of inpatient beds occupied over a given period of time.</i></td>
                        </tr>
                        <input type="hidden" id="bedcapbor">
                        <input type="hidden" id="totalbor">
                        <input type="hidden" id="bor">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        BOR($.session.get('year'));
        QuaMa();
    });
</script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_qm/quality_management.js"></script>