<form id="addIncomingReferralForm">
    <input type="hidden" id="action" name="action" value="update">
    <input type="hidden" id="referFromModule" name="referFromModule" value="referral">
    <input type="hidden" id="referralLogid" name="referralLogid" value="<?php echo $referralLogId; ?>">
    <div class="card card-accent-success with-border">
        <div class="card-header">
            <div class="row">
                <div class="col-md">
                    <h4 class="card-title text-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;
                        Edit Incoming Referral</h4>
                </div>
                <div class="col-md">
                    <button class="btn btn-success float-md-right" type="submit" id="updateReferralFrom"><i
                            class="fa fa-pencil-square" aria-hidden="true"></i> Update</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>&nbsp;
                <b>Information:</b> <small>All fields mark with asterisk </small><b class="text-danger">(</b><i
                    class="fa fa-asterisk text-danger" aria-hidden="true"></i><b class="text-danger">)</b> <small> are
                    required!</small> </div>
            <div class="card card-accent-success with-border">
                <div class="card-header">
                    <h5 class="card-title text-success"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Patient
                        Information</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientLastName" class="control-label">Last Name <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <input class="form-control form-control-sm" type="text" placeholder="Last Name"
                                    aria-label="Last Name" id="patientLastName" name="patientLastName">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientFirstName" class="control-label">First Name <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <input class="form-control form-control-sm" type="text" placeholder="First Name"
                                    aria-label="First Name" id="patientFirstName" name="patientFirstName">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientMiddlename" class="control-label">Middle Name</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Middle Name"
                                    aria-label="Middle Name" id="patientMiddlename" name="patientMiddlename">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientSuffix" class="control-label">Suffix</label>
                                <select class="form-control form-control-sm" placeholder="Suffix" aria-label="Suffix"
                                    id="patientSuffix" name="patientSuffix">
                                    <option value="">N/A</option>
                                    <option value="SR.">Sr.</option>
                                    <option value="JR">Jr.</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientSex" class="control-label">Sex <i class="fa fa-asterisk text-danger"
                                        aria-hidden="true"></i></label>
                                <select class="form-control form-control-sm" placeholder="Sex" aria-label="Sex"
                                    id="patientSex" name="patientSex">
                                    <option value="">Select</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientBirthDate" class="control-label">Date Of Birth <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <input type="date" class="form-control form-control-sm" name="patientBirthDate"
                                    id="patientBirthDate">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientReligion" class="control-label">Civil Status</label>
                                <select class="form-control form-control-sm" placeholder="Civil Status" aria-label="Sex"
                                    id="patientcivilstatus" name="patientcivilstatus">
                                    <option value="">Civil Status</option>
                                    <option value="S">Single</option>
                                    <option value="M">Married</option>
                                    <option value="D">Divorced</option>
                                    <option value="X">Separated</option>
                                    <option value="W">Widow/Widower</option>
                                    <option value="N">Not Applicable</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientcivilstatus" class="control-label">Religion</label></label>
                                <select class="form-control form-control-sm" placeholder="Religion"
                                    aria-label="Religion" id="patientReligion" name="patientReligion">
                                    <option value="">Select Religion</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-accent-success with-border">
                <div class="card-header">
                    <h5 class="card-title text-success"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;
                        Patient Contact Information</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientStreetAddress" class="control-label">Street <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <input class="form-control form-control-sm" type="text" placeholder="Street Address"
                                    aria-label="Street Address" id="patientStreetAddress" name="patientStreetAddress">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientMundCode" class="control-label">City/Municipality <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <select class="form-control form-control-sm" id="patientMundCode" name="patientMundCode"
                                    placeholder="City/Municipality" aria-label="City/Municipality">
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientDistCode" class="control-label">District</label>
                                <select class="form-control form-control-sm" id="patientDistCode" name="patientDistCode"
                                    placeholder="District" aria-label="District" disabled></select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientBrgyCode" class="control-label">Barangay <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <select class="form-control form-control-sm" id="patientBrgyCode" name="patientBrgyCode"
                                    placeholder="Barangay" aria-label="Barangay" disabled></select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientProvCode" class="control-label">Province</label>
                                <input type="hidden" id="patientProvCodeVal" name="patientProvCodeVal">
                                <select class="form-control form-control-sm" id="patientProvCode" name="patientProvCode"
                                    placeholder="Province" aria-label="Province" disabled>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientRegCode" class="control-label">Region</label>
                                <input type="hidden" id="patientRegCodeVal" name="patientRegCodeVal">
                                <select class="form-control form-control-sm" id="patientRegCode" name="patientRegCode"
                                    placeholder="Region" aria-label="Region" disabled></select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientZipCode" class="control-label">ZIP Code</label>
                                <input class="form-control form-control-sm" type="text" placeholder="ZIP Code"
                                    aria-label="ZIP Code" id="patientZipCode" name="patientZipCode">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientContactNumber" class="control-label">Contact Number</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Contact Number"
                                    aria-label="Contact Number" id="patientContactNumber" name="patientContactNumber">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-accent-success with-border">
                <div class="card-header">
                    <h5 class="card-title text-success"><i class="fa fa-ambulance" aria-hidden="true"></i>&nbsp;
                        Referral Information</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="LogID" class="control-label">Transaction Code <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <div class="input-group">
                                    <input class="form-control form-control-sm" type="text"
                                        placeholder="Referral Transaction Code" aria-label="Referral Transaction Code"
                                        id="LogID" name="LogID">
                                    <div class="input-group-append" id="generateLogID">
                                        <span class="input-group-text text-success"><i class="fa fa-refresh"
                                                aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="fhudFrom" class="control-label">Referring Facility <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <select class="form-control form-control-sm" id="fhudFrom" name="fhudFrom"
                                    placeholder="Name of Referring Facility" aria-label="Name of Referring Facility">
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="patientpan" class="control-label">Philhealth Accreditation Number</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Philhealth Accreditation Number"
                                    aria-label="Philhealth Accreditation Number" id="patientpan" name="patientpan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="referringContactNumber" class="control-label">Contact Number</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Referring Facility Contact Number"
                                    aria-label="Referring Facility Contact Number" id="referringContactNumber"
                                    name="referringContactNumber">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="referralContactPerson" class="control-label">Contact Person</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Contact Person"
                                    aria-label="Contact Person" id="referralContactPerson" name="referralContactPerson">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="referralContactPersonDesignation" class="control-label">Designation</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Contact Person Designation" aria-label="Contact Person Designation"
                                    id="referralContactPersonDesignation" name="referralContactPersonDesignation">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="referralDateTime" class="control-label">Referral Date and Time <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <input type="datetime-local" name="referralDateTime" id="referralDateTime"
                                    class="form-control form-control-sm" step=1>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="referralCategory" class="control-label">Category <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <select class="form-control form-control-sm" placeholder="Referral Category"
                                    aria-label="Referral Category" id="referralCategory" name="referralCategory">
                                    <option value="">Select</option>
                                    <option value="ER">Emergency</option>
                                    <option value="OP">Out-Patient</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="datetimecalled" class="control-label">Date and Time Called</label>
                                <input type="datetime-local" name="datetimecalled" id="datetimecalled"
                                    class="form-control form-control-sm" step=1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="response" class="control-label">Response</label>
                                <textarea class="form-control form-control-sm" id="response" rows="2" name="response"
                                    placeholder="Reponse on call" aria-label="Reponse on call"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="typeOfReferral" class="control-label">Type of Referral <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <select class="form-control form-control-sm" placeholder="Type of Referral"
                                    aria-label="Type of Referral" id="typeOfReferral" name="typeOfReferral">
                                    <option value="">Select</option>
                                    <option value="CONSU">CONSULTATION</option>
                                    <option value="DIAGT">DIAGNOSTIC TEST</option>
                                    <option value="TRANS">TRANSFER</option>
                                    <option value="OTHER">OTHERS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="typeofreferralothers" class="control-label">Others</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Other Referral Type Specify" aria-label="Other Referral Type Specify"
                                    id="typeofreferralothers" name="typeofreferralothers">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="referralReason" class="control-label">Reason for Referral <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <select class="form-control form-control-sm" placeholder="Reason for Referral"
                                    aria-label="Reason for Referral" id="referralReason" name="referralReason">
                                    <option value="">Select</option>
                                    <option value="NOROM">No room available</option>
                                    <option value="SEASO">Seek advise/second opinion</option>
                                    <option value="SESPE">Seek specialized evaluation</option>
                                    <option value="SEFTA">Seek futher treatment appropriate to the case</option>
                                    <option value="NOEQP">No equipment available</option>
                                    <option value="NOPRO">No procedure available</option>
                                    <option value="NOLAB">No laboratory available</option>
                                    <option value="NODOC">No available doctor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="otherReasons" class="control-label">Others</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Other Reason for Referral" aria-label="Other Reason for Referral"
                                    id="otherReasons" name="otherReasons">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="remarks" class="control-label">Remarks</label>
                                <textarea class="form-control form-control-sm" id="remarks" rows="2" name="remarks"
                                    placeholder="Remarks" aria-label="Remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-accent-success with-border">
                <div class="card-header">
                    <h5 class="card-title text-success"><i class="fa fa-stethoscope" aria-hidden="true"></i>&nbsp; Vital
                        Sign</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="bp" class="control-label">Blood Pressure</label>
                                <input type="text" class="form-control form-control-sm" id="bp" name="bp"
                                    placeholder="Blood Pressure" aria-label="Blood Pressure" />
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="temp" class="control-label">Temperature</label>
                                <input type="number" class="form-control form-control-sm" id="temp" name="temp"
                                    step="any" placeholder="Temperature" aria-label="Temperature" />
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="hr" class="control-label">Heart Rate</label>
                                <input type="text" class="form-control form-control-sm" id="hr" name="hr"
                                    placeholder="Heart Rate" aria-label="Heart Rate" />
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="rr" class="control-label">Respiratory Rate</label>
                                <input type="text" class="form-control form-control-sm" id="rr" name="rr"
                                    placeholder="Respiratory Rate" aria-label="Respiratory Rate" />
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="o2sats" class="control-label">Oxygen Saturation</label>
                                <input type="number" class="form-control form-control-sm" id="o2sats" name="o2sats"
                                    step="any" placeholder="Oxygen Saturation" aria-label="Oxygen Saturation" />
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="weight" class="control-label">Weight</label>
                                <input type="number" class="form-control form-control-sm" id="weight" name="weight"
                                    step="any" placeholder="Weight" aria-label="Weight" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-accent-success with-border">
                <div class="card-header">
                    <h5 class="card-title text-success"><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp;
                        Complaint/History/Findings</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="chiefComplaint" class="control-label">Chief Complaint <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <textarea class="form-control form-control-sm" id="chiefComplaint" rows="2"
                                    name="chiefComplaint" placeholder="Chief Complaint"
                                    aria-label="Chief Complaint"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="physicalExamination" class="control-label">Physical Examination</label>
                                <textarea class="form-control form-control-sm" id="physicalExamination" rows="2"
                                    name="physicalExamination" placeholder="Physical Examination"
                                    aria-label="Physical Examination"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="clinicalHistory" class="control-label">Clinical History</label>
                                <textarea class="form-control form-control-sm" id="clinicalHistory" rows="2"
                                    name="clinicalHistory" placeholder="Clinical History"
                                    aria-label="Clinical History"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="clinicalDiagnosis" class="control-label">Clinical Diagnosis</label>
                                <textarea class="form-control form-control-sm" id="clinicalDiagnosis" rows="2"
                                    name="clinicalDiagnosis" placeholder="Clinical Diagnosis"
                                    aria-label="Clinical Diagnosis"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="findings" class="control-label">Findings</label>
                                <textarea class="form-control form-control-sm" id="findings" rows="2" name="findings"
                                    placeholder="Findings" aria-label="Findings"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-accent-success with-border">
                <div class="card-header">
                    <h5 class="card-title text-success"><i class="fa fa-user-md" aria-hidden="true"></i>&nbsp; Referring
                        Provider</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providerlast_refer" class="control-label">Last Name <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <input class="form-control form-control-sm" type="text" placeholder="Last Name"
                                    aria-label="Last Name" id="providerlast_refer" name="providerlast_refer">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providerfirst_refer" class="control-label">First Name <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <input class="form-control form-control-sm" type="text" placeholder="First Name"
                                    aria-label="First Name" id="providerfirst_refer" name="providerfirst_refer">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providermiddle_refer" class="control-label">Middle Name</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Middle Name"
                                    aria-label="Middle Name" id="providermiddle_refer" name="providermiddle_refer">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providersuffix_refer" class="control-label">Suffix</label>
                                <select class="form-control form-control-sm" placeholder="Suffix" aria-label="Suffix"
                                    id="providersuffix_refer" name="providersuffix_refer">
                                    <option value="">N/A</option>
                                    <option value="SR.">Sr.</option>
                                    <option value="JR">Jr.</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providercontact_refer" class="control-label">Contact Number</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Referring Provider Contact Number"
                                    aria-label="Referring Provider Contact Number" id="providercontact_refer"
                                    name="providercontact_refer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-accent-success with-border">
                <div class="card-header">
                    <h5 class="card-title text-success"><i class="fa fa-user-md" aria-hidden="true"></i>&nbsp;
                        Consulting Provider</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providerlast_consu" class="control-label">Last Name</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Last Name"
                                    aria-label="Last Name" id="providerlast_consu" name="providerlast_consu">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providerfirst_consu" class="control-label">First Name</label>
                                <input class="form-control form-control-sm" type="text" placeholder="First Name"
                                    aria-label="First Name" id="providerfirst_consu" name="providerfirst_consu">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providermiddle_consu" class="control-label">Middle Name</label>
                                <input class="form-control form-control-sm" type="text" placeholder="Middle Name"
                                    aria-label="Middle Name" id="providermiddle_consu" name="providermiddle_consu">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providersuffix_consu" class="control-label">Suffix</label>
                                <select class="form-control form-control-sm" placeholder="Suffix" aria-label="Suffix"
                                    id="providersuffix_consu" name="providersuffix_consu">
                                    <option value="">N/A</option>
                                    <option value="SR.">Sr.</option>
                                    <option value="JR">Jr.</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="providercontact_consu" class="control-label">Contact Number</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="Consulting Provider Contact Number"
                                    aria-label="Consulting Provider Contact Number" id="providercontact_consu"
                                    name="providercontact_consu">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-accent-success with-border">
                <div class="card-header">
                    <h5 class="card-title text-success"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;
                        Received</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="receivedby" class="control-label">Receiving Personnel <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <select class="form-control form-control-sm" id="receivedby" name="receivedby"
                                    placeholder="Receiving Personnel" aria-label="Receiving Personnel">
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="receiveddate" class="control-label">Recevied Date <i
                                        class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                <input type="datetime-local" name="receiveddate" id="receiveddate"
                                    class="form-control form-control-sm" step=1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url()?>assets/scripts/referral/editreferralfrom.js"></script>