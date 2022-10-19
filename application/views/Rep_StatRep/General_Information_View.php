<style>
	tr:hover {
		background: #80DB88 !important;
	}

	th {
		background-color: #20962a;
		color: white;
	}
</style>
<div class="row">
    <div class="col-md-7">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> General Information</div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-sm" width="100%">
                    <tbody>
                        <tr>
                            <td width="15%">Name of Hospital</td>
                            <td width="85%" colspan="3"><?php echo FacilityInfo()->hhosname; ?></td>
                        </tr>
                        <tr>
                            <td>Street Address</td>
                            <td colspan="3"><?php echo FacilityInfo()->hhosstr; ?></td>
                        </tr>
                        <tr>
                            <td>Municipality</td>
                            <td colspan="3"><?php echo FacilityInfo()->ctyname; ?></td>
                        </tr>
                        <tr>
                            <td>Province</td>
                            <td colspan="3"><?php echo FacilityInfo()->provname; ?></td>
                        </tr>
                        <tr>
                            <td>Region</td>
                            <td colspan="3"><?php echo FacilityInfo()->regname; ?></td>
                        </tr>
                        <tr>
                            <td width="15%">Contact number</td>
                            <td width="35%"><?php echo FacilityInfo()->telno; ?></td>
                            <td width="15%">Fax number</td>
                            <td width="35%"><?php echo FacilityInfo()->faxno; ?></td>
                        </tr>
                        <tr>
                            <td>Email address</td>
                            <td colspan="3"><?php echo FacilityInfo()->hhosemailadd; ?></td>
                        </tr>
                        <tr>
                            <td>Chief of Hospital</td>
                            <td colspan="3"><span id="coh"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Classification</div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-sm" width="100%">
                    <tbody>
                        <tr align="center">
                            <th colspan="2">Service Capability</th>
                        </tr>
                        <tr>
                            <td width="30%">General</td>
                            <td><span id="servcapgen"></span></td>
                        </tr>
                        <tr>
                            <td >Specialty</td>
                            <td><span id="servcapspe"></span><br><span id="scsspecify"></span></td>
                        </tr>
                        <tr>
                            <td>Trauma Capability</td>
                            <td><span id="trauma"></span></td>
                        </tr>
                        <tr align="center">
                            <th colspan="2">Nature of Ownership</th>
                        </tr>
                        <tr align="center">
                            <td colspan="2"><span id="owner"></span><br><span id="pspecify"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Quality Management</div>
            </div>
            <div class="card-body table-responsive">
				<table id="ISOTable" class="table table-bordered table-sm table-hover" width="100%">
					<thead>
                        <tr>
                            <th colspan="4">ISO Certified (Specify ISO Certifying Body and area(s) of the hospital with Certification)</th>
                        </tr>
						<tr align="center">
							<th class="align-middle text-center">Description</th>
							<th class="align-middle text-center">Certifying body</th>
							<th class="align-middle text-center">Validity period</th>
						</tr>
					</thead>
					<tbody>
                        <tr>
							<td></td>
                            <td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
                <table class="table table-bordered table-sm" width="100%">
                    <tbody>
                        <tr>
                            <th colspan="4">International Accreditation</th>
                        </tr>
                        <tr>
                            <td>&nbsp;<span id="inter_accreno"></span></td>
                            <td><span id="inter_validfr"></span> <span id="inter_validto"></span></td>
                        </tr>

                        <tr>
                            <th colspan="4">PhilHealth Accreditation</th>
                        </tr>
                        <tr>
                            <td>&nbsp;<span id="accno"></span>&nbsp;&nbsp;<span id="phic"></span></td>
                            <td><span id="accdte"></span> <span id="accdteto"></span></td>
                        </tr>

                        <tr>
                            <th colspan="4">PCAHO</th>
                        </tr>
                        <tr>
                            <td>&nbsp;<span id="pcaho_accreno"></span></td>
                            <td><span id="pcaho_validfr"></span> <span id="pcaho_validto"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Bed Capacity / Occupancy</div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-sm" width="100%">
                    <tbody>
                        <tr>
                            <td><b>Authorized Bed Capacity : <span id="bedcap_a"></span> beds</b><br><i>*Authorized bed: Approved number of beds issued by by HFSRB/RO, the licensing offices of DOH.</i></td>
                        </tr>
                        <tr>
                            <td><b>Implementing Beds : <span id="hhosmem"></span> beds</b><br><i>*Implementing beds: Actual beds used based on hospital management decision.</i></td>
                        </tr>
                        <tr>
                            <td><b>Bed Occupancy Rate (BOR) Based on Authorized Beds : <span id="bor1"></span>%</b><br><i>*Bed Occupancy Rate: The percentage of inpatient beds occupied over a given period of time.</i></td>
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
        GenInfo();
        BOR($.session.get('year'));
        QuaMa();
        isocert();
    });
</script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_geninfo/gen_info.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_qm/quality_management.js"></script>