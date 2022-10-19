<input type="hidden" name="module" id="module" value="afp">
<!-- <div class="modal" id="modalSnapShot" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog modal-md" role="dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white"><i class="fa fa-camera"></i> Take Snapshot</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="img-fluid img-thumbnail rounded mx-auto d-block mb-1" id="my_camera"></div>
            </div>
            <div class="modal-footer bg-secondary">
                <a onclick="take_snapshot();" class="btn btn-success btn-block btn-ladda btn-square" data-style="slide-right"><i class="fa fa-camera"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modalSnapShotResult" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white">
                    <i class="fa fa-camera"></i>&nbsp
                    Photo Result
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="ImageSnapshot" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
            </div>
            <div class="modal-footer bg-secondary">
                <a onclick="save_snapshot();" class="btn btn-success btn-block btn-inline btn-square btn-ladda " data-style="zoom-out"><i class="fa fa-save"></i></a>
                <a class="btn btn-success  btn-block btn-square" onclick="iniCamera();" data-toggle="modal" data-target="#modalSnapShot"><i class="fa fa-camera"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modalEnlarge" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white">
                    <i class="fa fa-camera"></i>&nbsp
                    Photo
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="ImageEnlarge" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
            </div>
            <div class="modal-footer bg-secondary">

            </div>
        </div>
    </div>
</div>
<p> -->

<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
<div class="card card-accent-success">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp;Accute Flaccid Paralysis</h4>
            </div>
            <input type="hidden" class="form-control form-control-mb mb-1" id="encountercode" name="encountercode">
            <input type="hidden" class="form-control form-control-mb mb-1" id="formIden" name="formIden">
            <input type="hidden" class="form-control form-control-mb mb-1" id="newfhud" name="newfhud">
            <input type="hidden" class="form-control form-control-mb mb-1" id="toecode" name="toecode">
            <input type="hidden" class="form-control form-control-mb mb-1" id="rcode" name="rcode">
            <input type="hidden" class="form-control form-control-mb mb-1" id="pcode" name="pcode">
            <input type="hidden" class="form-control form-control-mb mb-1" id="ccode" name="ccode">
            <input type="hidden" class="form-control form-control-mb mb-1" id="bcode" name="bcode">
            <input type="hidden" class="form-control form-control-mb mb-1" id="patsuffix" name="patsuffix">
            <input type="hidden" readonly="" class=" form-control form-control-mb mb-1" autocomplete="off" id="info_lname" name="info_lname" placeholder="Last name">
            <input type="hidden" readonly="" class="form-control form-control-mb mb-1" autocomplete="off" id="info_mname" name="info_mname" placeholder="Middle name">
            <input type="hidden" readonly="" class="form-control form-control-mb mb-1" autocomplete="off" id="info_fname" name="info_fname" placeholder="First name">
            <input type="hidden" class="form-control form-control-mb mb-1" id="workdiag" name="workdiag">

            <div class="col-md-6" class="actions">
                <a href="<?php echo site_url('AFP'); ?>" data-toggle="tooltip" title="Close" class="btn btn-danger btn-ladda ladda-button float-right" data-style="zoom-in"><i class="fa fa-close"></i></a>
                <button name="submit" type="submit" id="submit" class="btn btn-success btn-ladda  float-right" data-style="zoom-in" data-toggle="tooltip" title="Save">
                    <i class="fa fa-save"></i>
                </button>
                <button type="button" id="search" class="btn btn-success btn-ladda  float-right" data-toggle="tooltip" title="Search"> <i class="fa fa-search"></i> </button>

            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="h5 text-success">
                    <i class=" fa fa-user"></i>
                    &nbsp General Data
                </div>

                <hr class="bg-success">
                <div class="row">
                    <div class="col-md-2">
                        <img id="PatientImage" name="PatientImage" class="img-fluid img-thumbnail rounded mx-auto d-block mb-1 bg-success" alt="">
                        <!-- <small class="text text-danger"><b>Note:</b>&nbsp <i>Click button to take patient photo</i></small>
                        <input type="hidden" class="form-control form-control-mb" id="info_pic" name="info_pic" readonly>
                        <div class="button-group">
                            <a class="btn btn-success btn-md btn-block btn-square btn-ladda" data-style="zoom-in" onclick="iniCamera();" data-toggle="modal" data-target="#modalSnapShot"> <i class="fa fa-camera fa-xs"></i></a>
                        </div> -->
                    </div>
                    <div class="col-md-10">
                        <div class="form-row">
                            <div class="col-md-1 col-form-label text-default mb-1">
                                Fullname:
                            </div>
                            <div class="col-md-11">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_fullname" name="info_fullname" placeholder="Firstname Middlename Lastname, Suffix">
                            </div>
                            <div class="col-md-1 col-form-label text-default">
                                Health record #:
                            </div>
                            <div class="col-md-3">
                                <input type="text" class=" form-control form-control-mb" readonly autocomplete="off" id="percode" name="percode" placeholder="Health record #">
                            </div>
                            <div class="col-md-1 col-form-label text-default mb-1">
                                Senior citizen #:
                            </div>
                            <div class="col-md-3">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="senior" name="senior" placeholder="Senior citizen #">
                            </div>
                            <div class="col-md-1 col-form-label text-default mb-1">
                                MSS #:
                            </div>
                            <div class="col-md-3">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="mss" name="mss" placeholder="MSS #">
                            </div>
                            <div class="col-md-1 col-form-label text-default mb-1">
                                Sex:
                            </div>
                            <div class="col-md-2">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_sex" name="info_sex" placeholder="Sex">
                            </div>
                            <div class="col-md-1 col-form-label text-default mb-1">
                                Civil status:
                            </div>
                            <div class="col-md-2">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_cs" name="info_cs" placeholder="Civil status">
                            </div>
                            <div class="col-md-1 col-form-label text-default mb-1">
                                Religion:
                            </div>
                            <div class="col-md-2">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="selRel" name="selRel" placeholder="Religion">
                            </div>
                            <div class="col-md-1 col-form-label text-default mb-1">
                                Nationality:
                            </div>
                            <div class="col-md-2">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_nat" name="info_nat" placeholder="Nationality">
                            </div>
                            <div class="col-md-1 col-form-label  text-default mb-1">
                                Date of birth:
                            </div>
                            <div class="col-md-3">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_dob" name="info_dob" placeholder="Date of birth">
                            </div>
                            <div class="col-md-1 col-form-label text-default mb-1">
                                Place of birth:
                            </div>
                            <div class="col-md-7">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_bplace" name="info_bplace" placeholder="Place of birth">
                            </div>

                            <div class="col-md-1 col-form-label text-default mb-1">
                                Employment:
                            </div>
                            <div class="col-md-3">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="selEmp" name="selEmp" placeholder="Employment">
                            </div>
                            <div class="col-md-1 col-form-label text-default mb-1">
                                Occupation:
                            </div>
                            <div class="col-md-7">
                                <input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="occupation" name="occupation" placeholder="Occupation">
                            </div>
                            <div class=" col-md-1 col-form-label  text-default mb-1">
                                Age:
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-mb mb-1" readonly autocomplete="off" id="info_age" name="info_age" placeholder="Age">
                            </div>
                            <label class="col-md-1 col-form-label text-default mb-1">
                                Email address:
                            </label>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-mb mb-1" readonly id="info_email" name="info_email" placeholder="Email address">
                            </div>
                            <label class="col-md-1 col-form-label text-default mb-1">
                                Contact #:
                            </label>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-control-mb mb-1" readonly id="info_telno" name="info_telno" placeholder="Contact #">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="bg-success">

                <div class="row">
                    <div class="col-md-12">
                        <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
                        <hr class="bg-success">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="h6 text-success">Permanent Address</div>

                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">House/Lot # Street/Purok/Sitio:</label>
                                    <div class="col-md-10">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="info_street" name="info_street" readonly placeholder="House/Lot # Street/Purok/Sitio"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">City/Municipality:</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control-mb mb-1" readonly id="city" name="city" placeholder="City/Municipality">
                                    </div>
                                    <label class="col-md-2 col-form-label text-default mb-1">Barangay:</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control-mb mb-1" readonly id="barangay" name="barangay" placeholder="Barangay">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Province:</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control-mb mb-1" readonly id="province" name="province" placeholder="Province">
                                    </div>
                                    <label class="col-md-2 col-form-label  text-default mb-1">Region :</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control-mb mb-1" readonly id="region" name="region" placeholder="Region">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="h6 text-success">Current Address</div>
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">House/Lot # Street/Purok/Sitio:</label>
                                    <div class="col-md-10">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="info_street2" name="info_street2"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">City/Municipality:</label>
                                    <div class="col-md-4">
                                        <select class="form-control form-control-mb mb-1" id="selCityInj" name="selCityInj">
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label text-default mb-1">Barangay:</label>
                                    <div class="col-md-4">
                                        <select class="form-control form-control-mb mb-1" id="selBrgyInj" name="selBrgyInj">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Province:</label>
                                    <div class="col-md-4">
                                        <select class="form-control form-control-mb mb-1" id="selProvInj" name="selProvInj">
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label  text-default mb-1">Region :</label>
                                    <div class="col-md-4">
                                        <select class="form-control form-control-mb mb-1" id="selRegInj" name="selRegInj">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-success">
                            <!-- <div class="col-md-6">
                                <div class="h6 text-success">&nbsp;</div>
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Name of DRU: </label>
                                    <div class="col-md-10">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="nodru" name="nodru" readonly></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Type: </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control form-control-mb mb-1" id="drutype" name="drutype" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Address: </label>
                                    <div class="col-md-10">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="druaddress" name="druaddress" readonly></textarea>
                                    </div>
                                </div>
                            </div> -->

                            
                        
                        
                        <!--end of address-->

                        <!--start of afp-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Patient admitted?</label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control form-control-mb mb-1" id="padmitted" name="padmitted" disabled>
                                    </div>
                                    <label class="col-md-3 col-form-label text-right mb-1">Date admitted/ seen/ consult:</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dasc" name="dasc" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Name of Parent / Caregiver:</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="noparent" name="noparent" maxlength="255"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Contact number:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control form-control-mb mb-1" id="parentcno" name="parentcno" maxlength="50">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Indigenous group:</label>
                                    <div class="col-md-4">
                                        <select class="form-control form-control-mb mb-1" id="selIndig" name="selIndig"></select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Date of report:</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dor" name="dor">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Date of investigation:</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="doi" name="doi">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Name of investigator:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control form-control-mb mb-1" id="noinvestigator" name="noinvestigator" maxlength="50">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Contact number:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control form-control-mb mb-1" id="investigatorcno" name="investigatorcno" maxlength="50">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-success">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; Clinical Data</div>
                                <hr class="bg-success">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="row">
                                    <label class="col-md-12 col-form-label text-center mb-1">Prodrome</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 col-form-label text-default mb-1">Fever:</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="fever" name="fever">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 col-form-label text-default mb-1">Cough:</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="cough" name="cough">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 col-form-label text-default mb-1">Diarrhea / Vomiting:</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="diarrhea_vomit" name="diarrhea_vomit">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 col-form-label text-default mb-1">Muscle pain:</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="muscle_pain" name="muscle_pain">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 col-form-label text-default mb-1">Meningeal signs:</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="meningeal_signs" name="meningeal_signs">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <label class="col-md-12 col-form-label text-center mb-1">Paralysis</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Date onset:</label>
                                    <div class="col-md-9">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="donset" name="donset">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 col-form-label text-default mb-1">Present at birth?</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="pabirth" name="pabirth">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 col-form-label text-default mb-1">Asymmetric?</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="asymmetric" name="asymmetric">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12 col-form-label text-center mb-1">Progression</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 col-form-label text-default mb-1">Paralysis fully developed within 3 to 14 days from onset of illness?</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="threetofourteenoi" name="threetofourteenoi">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 col-form-label text-default mb-1">Direction of paralysis?</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="doparalysis" name="doparalysis">
                                            <option value="">Select</option>
                                            <option value="ASC">Ascending</option>
                                            <option value="DESC">Descending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-row">
                                    <label class="col-md-12 col-form-label text-center mb-1">Site of Flaccid Paralysis<br>&nbsp;</label>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-1 col-form-label text-default mb-1"></label>
                                    <label class="col-md-6 col-form-label text-default mb-1">Right arm:</label>
                                    <div class="col-md-5">
                                        <select class="form-control form-control-mb mb-1" id="rarm" name="rarm">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-1 col-form-label text-default mb-1"></label>
                                    <label class="col-md-6 col-form-label text-default mb-1">Left arm:</label>
                                    <div class="col-md-5">
                                        <select class="form-control form-control-mb mb-1" id="larm" name="larm">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-1 col-form-label text-default mb-1"></label>
                                    <label class="col-md-6 col-form-label text-default mb-1">Right leg:</label>
                                    <div class="col-md-5">
                                        <select class="form-control form-control-mb mb-1" id="rleg" name="rleg">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-1 col-form-label text-default mb-1"></label>
                                    <label class="col-md-6 col-form-label text-default mb-1">Left leg:</label>
                                    <div class="col-md-5">
                                        <select class="form-control form-control-mb mb-1" id="lleg" name="lleg">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-1 col-form-label text-default mb-1"></label>
                                    <label class="col-md-6 col-form-label text-default mb-1">Breathing muscles:</label>
                                    <div class="col-md-5">
                                        <select class="form-control form-control-mb mb-1" id="bmuscles" name="bmuscles">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-1 col-form-label text-default mb-1"></label>
                                    <label class="col-md-6 col-form-label text-default mb-1">Neck muscles:</label>
                                    <div class="col-md-5">
                                        <select class="form-control form-control-mb mb-1" id="nmuscles" name="nmuscles">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-1 col-form-label text-default mb-1"></label>
                                    <label class="col-md-6 col-form-label text-default mb-1">Facial muscles:</label>
                                    <div class="col-md-5">
                                        <select class="form-control form-control-mb mb-1" id="fmuscles" name="fmuscles">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="form-row">
                                    <label class="col-md-12 col-form-label text-center mb-1">Sensory Status<br>&nbsp;</label>
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="rarmss" name="rarmss" disabled maxlength="50">
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="larmss" name="larmss" disabled maxlength="50">
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="rlegss" name="rlegss" disabled maxlength="50">
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="llegss" name="llegss" disabled maxlength="50">
                                </div>

                            </div>

                            <div class="col-md-1">
                                <div class="form-row">
                                    <label class="col-md-12 col-form-label text-center mb-1">Deep Tendon Reflexes</label>
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="rarmdtr" name="rarmdtr" disabled maxlength="50">
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="larmdtr" name="larmdtr" disabled maxlength="50">
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="rlegdtr" name="rlegdtr" disabled maxlength="50">
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="llegdtr" name="llegdtr" disabled maxlength="50">
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="form-row">
                                    <label class="col-md-12 col-form-label text-center mb-1">Motor Status<br>&nbsp;</label>
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="rarmms" name="rarmms" disabled maxlength="50">
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="larmms" name="larmms" disabled maxlength="50">
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="rlegms" name="rlegms" disabled maxlength="50">
                                </div>
                                <div class="form-row">
                                    <input type="text" class="form-control form-control-mb mb-1" id="llegms" name="llegms" disabled maxlength="50">
                                </div>
                            </div>
                        </div>
                        <hr class="bg-success">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; Epidemiologic Data</div>
                                <hr class="bg-success">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-4 col-form-label text-default mb-1">History of neurologic disorder?</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="hondisorder" name="hondisorder">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="hondisorderspecify" name="hondisorderspecify" disabled placeholder="If Yes, specify disorder" maxlength="255"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12 col-form-label text-default mb-1">Did the patient travel (&gt10 km from house) one month prior to illness?</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="omptillness" name="omptillness">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="omptillnessplace" name="omptillnessplace" disabled placeholder="If Yes, specify place" maxlength="255"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Date traveled:</label>
                                    <label class="col-md-1 col-form-label text-default mb-1">From</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dtfrom" name="dtfrom" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label text-center mb-1"></label>
                                    <label class="col-md-1 col-form-label text-default mb-1">To</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dtto" name="dtto" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-7 col-form-label text-default mb-1">Other AFP cases in patient&apos;s community within 60 days of patient&apos;s paralysis?</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="sixtydaysparalysis" name="sixtydaysparalysis">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12 col-form-label text-default mb-1">Does the patient had any history of injection, trauma and/ or anumal bite?</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="itanimalbite" name="itanimalbite">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="itanimalbitespecify" name="itanimalbitespecify" disabled placeholder="If Yes, specify type" maxlength="255"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12 col-form-label text-default mb-1">Is there an Environmental Sample tested positive for WPV/ VDPV/ Sabin-like 2 in the area?</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="esample" name="esample">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="esampledate" name="esampledate" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-success">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; Immunization History</div>
                                <hr class="bg-success">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-4 col-form-label text-center mb-1">Total OPV/ IPV doses received:</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control-mb mb-1" id="opvipvreceived" name="opvipvreceived" maxlength="1">
                                    </div>

                                    <label class="col-md-4 col-form-label text-center mb-1">Date last dose of OPV/ IPV:</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="lastdoseopvipv" name="lastdoseopvipv">
                                    </div>

                                    <label class="col-md-3 col-form-label text-center mb-1">Is this a "Hot case"?</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="hotcase" name="hotcase">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-success">

                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; Laboratory Data</div>
                                <hr class="bg-success">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="table-dark">
                                                <tr align="center">
                                                    <td width="6%">Stool sample #</td>
                                                    <td width="12%">Collected?</td>
                                                    <td width="6%">If YES, date taken</td>
                                                    <td width="6%">Date sent to RITM</td>
                                                    <td width="6%">Date received RITM</td>
                                                    <td width="22%" colspan="2">Result</td>
                                                    <td width="14%">Amount of Stool<br><small>(To be filled out by RITM)</small></td>
                                                    <td width="28%">Specimen Condition<br><small>(To be filled out by RITM)</small></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td align="center">1</td>
                                                    <td><select class="form-control form-control-sm sm-1" id="toexposure" name="toexposure">
                                                            <option value="">Select</option>
                                                            <option value="Y">Yes</option>
                                                            <option value="N">No</option>
                                                        </select></td>
                                                    <td><input type="datetime-local" class="form-control form-control-sm" autocomplete="off" id="vidov" name="vidov"></td>
                                                    <td><input type="datetime-local" class="form-control form-control-sm" autocomplete="off" id="vidov" name="vidov"></td>
                                                    <td><input type="datetime-local" class="form-control form-control-sm" autocomplete="off" id="vidov" name="vidov"></td>
                                                    <td><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">WPV</label><br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">Sabin-like</label><br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">VDPV</label><br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">NEG</label><br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">NPEV</label>
                                                    </td>
                                                    <td>If WPV, Sabin-like<br>or VDPV, specify:<br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">Type 1</label><br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">Type 2</label><br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">Type 3</label>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm sm-1" id="aostool" name="aostool"></td>
                                                    <td>No. of Ice packs: <input type="text" class="form-control form-control-sm sm-1" id="noipacks" name="noipacks"><br>Qty of Ice packs:<br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">Frozen</label><br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">Thawed but cold</label><br><input type="checkbox" id="viae" name="viae" value="viae" class="">
                                                        <label class="col-form-label text-default" for="viae">Warm</label><br><br>Type of Container: <input type="text" class="form-control form-control-sm sm-1" id="tocontainer" name="tocontainer">Name of Courier: <input type="text" class="form-control form-control-sm sm-1" id="nocontainer" name="nocontainer">Received by: <input type="text" class="form-control form-control-sm sm-1" id="receivedby" name="receivedby">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-success"> -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; 60-Day Follow-up</div>
                                <hr class="bg-success">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Expected date of follow-up:</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="edofollowup" name="edofollowup">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Follow-up done:</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="fudone" name="fudone">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="fudonedate" name="fudonedate" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-default mb-1">P.E. done?</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="pedone" name="pedone">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="pendonereason" name="pendonereason" disabled placeholder="If No, reason for no P.E." maxlength="50"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-default mb-1">
                                        <medium>Residual paralysis, 60 days?</medium>
                                    </label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="rpsixtydays" name="rpsixtydays">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control form-control-mb mb-1" id="rpsixtydaysspecify" name="rpsixtydaysspecify" disabled>
                                            <option value="">Select</option>
                                            <option value="FF">Flaccid/Floppy</option>
                                            <option value="S">Spastic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Presence of Atrophy?</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="poatrophy" name="poatrophy">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-1 col-form-label text-right mb-1">Site:</label>
                                    <label class="col-md-2 col-form-label text-right mb-1">Right arm</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="srarm" name="srarm" disabled>
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label text-right mb-1">Left arm</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="slarm" name="slarm" disabled>
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-right mb-1">Right leg</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="srleg" name="srleg" disabled>
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label text-right mb-1">Left leg</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="slleg" name="slleg" disabled>
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="checkbox" id="pdied" name="pdied" value="pdied" class="">
                                        <label class="col-form-label text-default" for="pdied">&nbsp;&nbsp;Patient Died</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="datedied" name="datedied" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="checkbox" id="ltfollowup" name="ltfollowup" value="ltfollowup" class="">
                                        <label class="col-form-label text-default" for="ltfollowup">&nbsp;&nbsp;Lost to Follow-up</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="checkbox" id="others" name="others" value="others" class="">
                                        <label class="col-form-label text-default" for="others">&nbsp;&nbsp;Others</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control form-control-mb mb-1" id="othersspecify" name="othersspecify" disabled placeholder="Specify">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Note other observations:</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="noobservations" name="noobservations" maxlength="255"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-success">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; Classification</div>
                                <hr class="bg-success">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Final Classification</label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-mb mb-1" id="finalclass" name="finalclass">
                                            <option value="">Select</option>
                                            <option value="CONFIRMED">Confirmed wild polio</option>
                                            <option value="VDPV">Vaccine-derived paralytic polio (VDPV)</option>
                                            <option value="VAPP">Vaccine-associated paralytic polio (VAPP)</option>
                                            <option value="POLIO">Polio compatible</option>
                                            <option value="DISCARD">Discarded as Non-Polio</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-right mb-1">VAPP:</label>
                                    <div class="col-md-4">
                                        <select class="form-control form-control-mb mb-1" id="vapp" name="vapp" disabled>
                                            <option value="">Select</option>
                                            <option value="RECIPIENT">Recipient VAPP</option>
                                            <option value="CONTACT">Contact VAPP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-right mb-1">Date classified:</label>
                                    <div class="col-md-4">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dclassified" name="dclassified" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Classification Criteria</label>
                                    <div class="col-md-4">
                                        <select class="form-control form-control-mb mb-1" id="ccriteria" name="ccriteria">
                                            <option value="">Select</option>
                                            <option value="LAB">Laboratory</option>
                                            <option value="LOST-FF">Lost of Follow-up</option>
                                            <option value="DEATH">Death</option>
                                            <option value="W-RESIDUAL">With residual paralysis</option>
                                            <option value="W-OUT-RESIDUAL">Without residual paralysis</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Final Diagnosis</label>
                                    <div class="col-md-10">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="findiag" name="findiag" readonly></textarea>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <label class="col-md-4 col-form-label text-default mb-1">Was this case considered as NOT AFP?</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="nafp" name="nafp">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-success">
    </div>
</div>