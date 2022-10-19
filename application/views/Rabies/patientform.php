<input type="hidden" name="module" id="module" value="rabies">
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
                <h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp;Rabies (ICD 10 Code: A82)</h4>
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
            <input type="hidden" class="form-control form-control-mb mb-1" id="outcomec" name="outcomec">
            <input type="hidden" readonly="" class=" form-control form-control-mb mb-1" autocomplete="off" id="info_lname" name="info_lname" placeholder="Last name">
            <input type="hidden" readonly="" class="form-control form-control-mb mb-1" autocomplete="off" id="info_mname" name="info_mname" placeholder="Middle name">
            <input type="hidden" readonly="" class="form-control form-control-mb mb-1" autocomplete="off" id="info_fname" name="info_fname" placeholder="First name">

            <div class="col-md-6" class="actions">
                <a href="<?php echo site_url('Rabies'); ?>" data-toggle="tooltip" title="Close" class="btn btn-danger btn-ladda ladda-button float-right" data-style="zoom-in"><i class="fa fa-close"></i></a>
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
                        <!--end of address-->

                        <!--start of rabies-->
                        <!-- <div class="row">
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Address: </label>
                                    <div class="col-md-10">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="druaddress" name="druaddress" readonly></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr> -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label class="col-md-2 col-form-label text-default mb-1">Patient admitted?</label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control form-control-mb mb-1" id="padmitted" name="padmitted" disabled>
                                    </div>
                                    <label class="col-md-3 col-form-label text-right mb-1">Date admitted/seen/consult:</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dasc" name="dasc" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">

                                    <label class="col-md-3 col-form-label text-default mb-1">Date onset of illness:</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dooi" name="dooi">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Date of report:</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dor" name="dor">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Name of reporter:</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="noreporter" name="noreporter" maxlength="100"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Contact number:</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="reportercno" name="reportercno" maxlength="20"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Date of investigation:</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="doi" name="doi">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Name of investigator:</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="noinvestigator" name="noinvestigator" maxlength="100"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Contact number:</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="investigatorcno" name="investigatorcno" maxlength="20"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-success">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; Exposure History</div>
                                <hr class="bg-success">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Type of exposure:</label>
                                    <div class="col-md-4">
                                        <select class="form-control form-control-mb mb-1" id="toexposure" name="toexposure">
                                            <option value="">Select</option>
                                            <option value="0">Bite</option>
                                            <option value="1">Scratch</option>
                                            <option value="2">Saliva</option>
                                            <option value="3">Consumed meat</option>
                                            <option value="4">Unknown</option>
                                            <option value="5">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row" id="toeas" hidden>
                                    <label class="col-md-3 col-form-label text-default mb-1"></label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="coeas" name="coeas" disabled placeholder="Affected site"></textarea>

                                    </div>
                                </div>
                                <div class="form-row" id="toeos" hidden>
                                    <label class="col-md-3 col-form-label text-center mb-1"></label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="toexposureother" name="toexposureother" disabled placeholder="Specify" maxlength="255"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Date of exposure:</label>
                                    <div class="col-md-5">
                                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="doe" name="doe">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Place of exposure:</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="poexposure" name="poexposure" maxlength="255"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Category of exposure:</label>
                                    <div class="col-md-9">
                                        <select class="form-control form-control-mb mb-1" id="coexposure" name="coexposure">
                                            <option value="">Select</option>
                                            <option value="FEED">Feeding/touching an animal</option>
                                            <option value="LICKSKIN">Licking of intact skin(with reliable history and thorough physical examination)</option>
                                            <option value="EXPOSEEAT">Exposure to patient with signs and symptoms of rabies by sharing of eating or drinking untensils</option>
                                            <option value="CASUAL">Casual contact (talking to, visiting and feeding suspected rabies cases) and routine delivery of health care to patient with signs and symptoms of rabies</option>
                                            <option value="NIBB">Nibbling of uncovered skin with or without bruising/hematoma</option>
                                            <option value="MINORWTBLEED">Minor scratches/abrasions without bleeding</option>
                                            <option value="MINORWBLEED">Minor scratches/abrasions which are induced to bleed</option>
                                            <option value="ALLCATMANAGED">All Category II exposures on the head and neck area are considered Category III and should be managed as such</option>
                                            <option value="TRANSDERM">Transdermal bites(puncture wounds,lacerations,avulsions) or scratches/abrasions with spontaneous bleeding</option>
                                            <option value="LICKMUCOUS">Licks on broken skin or mucous membrane</option>
                                            <option value="EXPOSEBITE">Exposure to a rabies patient through bites,contamination of mucous membranes(eyes,oral/nasal mucosa,genital/anal mucous membranes) or open skin lesions with body fluids through splattering and mouth-to-mouth resuscitation</option>
                                            <option value="UNPROTECT">Unprotected handling of infected carcass or ingestion of raw infected meat</option>
                                            <option value="ALLCATHEADNECK">All Category II exposures on head and neck area</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Type of animal:</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="toanimal" name="toanimal">
                                            <option value="">Select</option>
                                            <option value="D">Dog</option>
                                            <option value="C">Cat</option>
                                            <option value="B">Bat</option>
                                            <option value="O">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="toanimalother" name="toanimalother" disabled placeholder="Specify" maxlength="100" hidden></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Lab. diagnosis done?</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="lddone" name="lddone">
                                            <option value="">Select</option>
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                            <option value="U">Unknown</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="lddonespecify" name="lddonespecify" disabled placeholder="Result" maxlength="100" hidden></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-md-3 col-form-label text-default mb-1">Animal status:</label>
                                    <div class="col-md-3">
                                        <select class="form-control form-control-mb mb-1" id="animalstat" name="animalstat">
                                            <option value="">Select</option>
                                            <option value="D">Domestic</option>
                                            <option value="S">Stray</option>
                                            <option value="W">Wild</option>
                                            <option value="O">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control form-control-mb mb-1" id="animalstatother" name="animalstatother" disabled placeholder="Specify" maxlength="255" hidden></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-success">

        <div class="row">
            <div class="col-md-12">
                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; Vaccination History</div>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-row">
                    <label class="col-md-4 col-form-label text-default mb-1">Animal vaccination history</label>
                    <label class="col-md-6 col-form-label text-default mb-1">Patient history</label>
                </div>
                <div class="form-row">
                    <div class="col-md-3">
                        <select class="form-control form-control-mb mb-1" id="avhistory" name="avhistory">
                            <option value="">Select</option>
                            <option value="V">Vaccinated</option>
                            <option value="U">Unvaccinated</option>
                            <option value="N">Unknown</option>
                        </select>
                    </div>
                    <label class="col-md-1 col-form-label text-default mb-1"></label>
                    <label class="col-md-4 col-form-label text-default mb-1">Wound cleaned?</label>
                    <div class="col-md-3">
                        <select class="form-control form-control-mb mb-1" id="woundclean" name="woundclean">
                            <option value="">Select</option>
                            <option value="Y">Yes</option>
                            <option value="N">No</option>
                            <option value="U">Unknown</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-md-4 col-form-label text-default mb-1"></label>
                    <label class="col-md-4 col-form-label text-default mb-1">Patient given RIG?</label>
                    <div class="col-md-3">
                        <select class="form-control form-control-mb mb-1" id="pgrig" name="pgrig">
                            <option value="">Select</option>
                            <option value="Y">Yes</option>
                            <option value="N">No</option>
                            <option value="U">Unknown</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-md-4 col-form-label text-default mb-1"></label>
                    <label class="col-md-4 col-form-label text-default mb-1">Patient given rabies vaccine?</label>
                    <div class="col-md-3">
                        <select class="form-control form-control-mb mb-1" id="pgrv" name="pgrv">
                            <option value="">Select</option>
                            <option value="Y">Yes</option>
                            <option value="N">No</option>
                            <option value="U">Unknown</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-row">
                    <label class="col-md-3 col-form-label text-default mb-1">Date vaccine started:</label>
                    <div class="col-md-5">
                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dvs" name="dvs">
                    </div>

                </div>
                <div class="form-row">
                    <label class="col-md-3 col-form-label text-default mb-1">Brand name of vaccine:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-mb mb-1" id="bnovaccine" name="bnovaccine" maxlength="150">
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-md-3 col-form-label text-default mb-1">Route of administration:</label>
                    <div class="col-md-3">
                        <select class="form-control form-control-mb mb-1" id="roa" name="roa">
                            <option value="">Select</option>
                            <option value="IM">IM</option>
                            <option value="IN">Intradermal</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-md-3 col-form-label text-default mb-1">Post exposure completed?</label>
                    <div class="col-md-3">
                        <select class="form-control form-control-mb mb-1" id="pecompleted" name="pecompleted">
                            <option value="">Select</option>
                            <option value="Y">Yes</option>
                            <option value="N">No</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-success">

        <div class="row">
            <div class="col-md-12">
                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; Classification and Outcome</div>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-row">
                    <label class="col-md-5 col-form-label text-default mb-1">Final classification:</label>
                    <label class="col-md-3 col-form-label text-default mb-1">Outcome:</label>

                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <select class="form-control form-control-mb mb-1" id="fclassification" name="fclassification">
                            <option value="">Select</option>
                            <option value="SC">Suspect Case</option>
                            <option value="PC">Probable Case</option>
                            <option value="CC">Confirmed Case</option>
                        </select>
                    </div>
                    <label class="col-md-1 col-form-label text-default mb-1"></label>
                    <div class="col-md-4">
                        <input type="text" class="form-control form-control-mb mb-1" id="outcome" name="outcome" readonly>
                    </div>
                </div>
                <div class="form-row" id="dd" hidden>
                    <label class="col-md-5 col-form-label text-default mb-1"></label>
                    <div class="col-md-4">
                        <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="ddied" name="ddied" readonly>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-success">
    </div>
</div>