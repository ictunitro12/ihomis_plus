<form id="benefit_eligibility_form">
    <div class="card card-accent-success">
        <div class="card-header">
            <div class="form-row">
                <div class="card-title h4 text-success">
                    <i class=" fa fa-user"></i>
                    &nbsp Claim Eligibility Information
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="col-md">
                    <button class="btn btn-block btn-success mb-2 search_patient" type="button" id="searchpatient"><i
                            class="fa fa-search"></i> Search</button>
                    <button class="btn btn-block btn-danger mb-2" type="button" id="reset_form"><i
                            class="fa fa-user-times"></i>&nbsp;&nbsp;Clear</button>
                </div>
                <div class="col-md text-md-right">
                    <button type="button" name="memberPIN" id="memberPIN"
                        class="btn btn-block btn-primary btn-ladda mb-2" data-style="zoom-in">
                        <i class="fa fa-hand-o-down" aria-hidden="true"></i> Get PIN
                    </button>
                    <button id="memberInfoSavebtn" name="memberInfoSavebtn" type="submit"
                        class="btn btn-success btn-block btn-ladda mb-2" data-style="zoom-in">
                        <i class="fa fa-check"></i> Verify
                    </button>
                </div>
            </div>
            <hr class="bg-success">
            <!--div class="form-row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="memhpercode">Hospital Record Number</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-mb" id="memhpercode" name="memhpercode" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-success search_patient" type="button" id="searchpatient"><i class="fa fa-search"></i></button>
                                <button class="btn btn-danger" type="button" id="reset_form"><i class="fa fa-user-times"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div -->

            <div class="form-row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="isfinal">Accreditation Number <i class="fa fa-asterisk text-danger"></i></label>
                        <select class="form-control form-control-mb" name="accreno" id="accreno" required>
                            <option></option>
                            <?php
                            foreach ($accreditations as $accreditation) {
                                echo '<option value="' . $accreditation->paccreno . '">' . $accreditation->paccreno . ' - ' . $accreditation->pfacilityname . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

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
                    <div class="form-group">
                        <label for="memlast">Philhealth No. <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="text" class="form-control form-control-mb" id="philhealth_no" name="philhealth_no"
                            placeholder="Enter Philhealth No.">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="member_lastname">Last Name <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="text" class="form-control form-control-mb" id="member_lastname"
                            name="member_lastname" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="member_firstname">First Name <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="text" class="form-control form-control-mb" id="member_firstname"
                            name="member_firstname" placeholder="Enter First Name" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="member_middlename">Middle Name</label>
                        <input type="text" class="form-control form-control-mb" id="member_middlename"
                            name="member_middlename" placeholder="Enter Middle Name">
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="member_suffix">Suffix</label>
                        <select name="member_suffix" id="member_suffix" onchange="fullname();"
                            class="form-control form-control-mb">
                            <option value="">N/A</option>
                            <option value="SR.">Sr.</option>
                            <option value="JR">Jr.</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="member_gender">Gender <i class="fa fa-asterisk text-danger"></i></label>
                        <select name="member_gender" id="member_gender" class="form-control form-control-mb" required>
                            <option value="" readonly></option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="member_birthdate">Date of Birth <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="date" class="form-control form-control-mb" name="member_birthdate"
                            id="member_birthdate" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="member_address">Address</label>
                        <textarea type="text" class="form-control form-control-mb mb-1" id="member_address"
                            placeholder="Address" name="member_address"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="member_zip">ZIP Code</label>
                        <input type="text" class="form-control form-control-mb" id="member_zip" name="member_zip"
                            placeholder="Enter ZIP Code">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="membership_type">Type of Memebership</label>
                        <select name="membership_type" id="membership_type" class="form-control form-control-mb">
                            <option value=""></option>
                            <?php
                            foreach ($membership_types as $type) {
                                echo "<option value='{$type->typemem}' data-phictypemem='{$type->phictypemem}'>{$type->typedesc}</option>";
                            }
                            ?>
                        </select>
                        <input type="hidden" class="form-control form-control-mb" id="phictypemem" name="phictypemem">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="employers_pen">PhilHealth Employer's Number (PEN)</label>
                        <input type="text" class="form-control form-control-mb" id="employers_pen" name="employers_pen"
                            placeholder="Enter Employer's Number (PEN)">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="employer_name">Employer's Name</label>
                        <input type="text" class="form-control form-control-mb" id="employer_name" name="employer_name"
                            placeholder="Enter Employer's Name">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="patient_relation">Patient's Relation to Member <i
                                class="fa fa-asterisk text-danger"></i></label>
                        <select name="patient_relation" id="patient_relation" class="form-control form-control-mb"
                            required>
                            <option></option>
                            <?php
                            foreach ($member_relations as $relation) {
                                echo "<option value='{$relation->reltomem}' data-preltomem='{$relation->pReltomem}'>{$relation->relDesc}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <hr class="bg-success">
            <div class="h5 text-success"> <i class="fa fa-user"></i>&nbsp Patient Information</div>
            <hr class="bg-success">

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="patient_lastname">Last Name <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="text" class="form-control form-control-mb" id="patient_lastname"
                            name="patient_lastname" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="patient_firstname">First Name <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="text" class="form-control form-control-mb" id="patient_firstname"
                            name="patient_firstname" placeholder="Enter First Name" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="patient_middlename">Middle Name <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="text" class="form-control form-control-mb" id="patient_middlename"
                            name="patient_middlename" placeholder="Enter Middle Name" required>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="patient_suffix">Suffix</label>
                        <select name="patient_suffix" id="patient_suffix" onchange="fullname();"
                            class="form-control form-control-mb">
                            <option value="">N/A</option>
                            <option value="SR.">Sr.</option>
                            <option value="JR">Jr.</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="patient_gender">Gender <i class="fa fa-asterisk text-danger"></i></label>
                        <select name="patient_gender" id="patient_gender" class="form-control form-control-mb" required>
                            <option value="" readonly></option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="form-group">
                        <label for="patient_birthdate">Date of Birth <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="date" class="form-control form-control-mb" name="patient_birthdate"
                            id="patient_birthdate" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="patient_address">Address</label>
                        <textarea type="text" class="form-control form-control-mb mb-1" id="patient_address"
                            placeholder="Address" name="patient_address"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="patient_zip">ZIP Code</label>
                        <input type="text" class="form-control form-control-mb" id="patient_zip" name="patient_zip"
                            placeholder="Enter ZIP Code">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="admission_date">Admission Date <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="date" class="form-control form-control-mb" name="admission_date"
                            id="admission_date" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="discharge_date">Discharged Date</label>
                        <input type="date" data-format="Y-m-d" class="form-control form-control-mb"
                            name="discharge_date" id="discharge_date">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="rvs">RVS</label>
                        <input type="text" class="form-control form-control-mb" id="rvs" placeholder="Enter RVS"
                            name="rvs">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="total_hospital_bill">Total Hospital Bill</label>
                        <input type="text" class="form-control form-control-mb" id="total_hospital_bill"
                            name="total_hospital_bill" placeholder="Enter Total Hospital Bill">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg">
                    <div class="form-group">
                        <label for="phic_reimbursement">PHIC Reimbursement</label>
                        <input type="text" class="form-control form-control-mb" id="phic_reimbursement"
                            placeholder="Enter PHIC Reimbursement" name="phic_reimbursement">
                    </div>
                </div>
            </div>
            <!-- <input type="hidden" class="form-control form-control-mb" id="accreno" name="accreno"> -->
        </div>
    </div>
</form>