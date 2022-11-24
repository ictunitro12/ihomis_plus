<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with
    (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
<div class="card card-accent-success">
    <div class="card-header">
        <div class="form-row">
            <div class="col-md-6">
                <h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp<?php echo $header; ?></h4>
            </div>
            <div class="col-md-6">
                <button name="memberInfoSavebtn" type="submit" class="btn btn-success btn-ladda  float-right"
                    data-style="zoom-in">
                    <i class="fa fa-save"></i>&nbsp SAVE
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-12">
                <div class="h5 text-success">
                    <i class=" fa fa-user"></i>
                    &nbsp Basic Information
                </div>
                <hr class="bg-success">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memhpercode">Hospital Record Number</label>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-mb" id="memhpercode" name="memhpercode"
                            readonly>&nbsp
                        <div class="input-group-append">
                            <button class="btn btn-success ModalMemberInfo" type="button" id="searchpatient"><i
                                    class="fa fa-search"></i>&nbsp SEARCH</button>&nbsp
                            <button class="btn btn-danger" type="button" id="removehpercode"><i
                                    class="fa fa-user-times"></i>&nbsp REMOVE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memlast">Last Name <i class="fa fa-asterisk text-danger"></i></label>
                    <input type="text" class="form-control form-control-mb" id="memlast" name="memlast"
                        placeholder="Enter Last Name">
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="memfirst">First Name <i class="fa fa-asterisk text-danger"></i></label>
                    <input type="text" class="form-control form-control-mb" id="memfirst" name="memfirst"
                        placeholder="Enter First Name">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memsuffix">Suffix</label>
                    <select name="memsuffix" id="memsuffix" onchange="fullname();" class="form-control form-control-mb">
                        <option value="">N/A</option>
                        <option value="SR.">Sr.</option>
                        <option value="JR">Jr.</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="memmiddle">Middle Name</label>
                    <input type="text" class="form-control form-control-mb" id="memmiddle" name="memmiddle"
                        placeholder="Enter Middle Name">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memsex">Sex <i class="fa fa-asterisk text-danger"></i></label>
                    <select name="memsex" id="memsex" class="form-control form-control-mb">
                        <option value="">Select</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="membdate">Date of Birth <i class="fa fa-asterisk text-danger"></i></label>
                    <input type="date" class="form-control form-control-mb" name="membdate" id="membdate">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memcstat">Civil Status</label>
                    <select name="memcstat" id="memcstat" class="form-control form-control-mb">
                        <option value="">Select</option>
                        <option value="S">Single</option>
                        <option value="M">Married</option>
                        <option value="D">Divorced</option>
                        <option value="X">Separated</option>
                        <option value="W">Widow/Widower</option>
                        <!-- option value="N">N/A</option -->
                    </select>
                </div>
            </div>
            <div class="col-md">

            </div>
        </div>

        <hr class="bg-success">
        <div class="form-row">
            <div class="col-md-12">
                <div class="h5 text-success d-inline"><i class="fa fa-id-card"></i></i>&nbsp Membership Details</div>
                <a href="javascript:void(0);" class="btn btn-success float-right" id="getPINBtn" name="getPINBtn"><i
                        class="fa fa-id-card"></i></i>&nbsp GET PIN</a>
            </div>
        </div>
        <hr class="bg-success">

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="pin">Philhealth Identification Number (PIN) <i
                            class="fa fa-asterisk text-danger"></i></label>
                    <input type="text" class="form-control" id="pin" name="pin"
                        placeholder="Enter Philhealth Identification Number (PIN)">
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="typemem">Type of Membership <i class="fa fa-asterisk text-danger"></i></label>
                    <select class="form-control" id="typemem" name="typemem"></select>
                </div>
            </div>
        </div>
        <hr class="bg-success">

        <div class="form-row">
            <div class="col-md-12">
                <div class="h5 text-success d-inline"><i class="fa fa-id-card"></i></i>&nbsp Employer Details</div>
                <a href="javascript:void(0);" class="btn btn-success float-right" id="getPENBtn" name="getPENBtn"><i
                        class="fa fa-id-card"></i></i>&nbsp GET PEN</a>
            </div>
        </div>
        <hr class="bg-success">

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="pen">Philhealth Employer Number (PEN) <i
                            class="fa fa-asterisk text-danger d-none"></i></label>
                    <input type="text" class="form-control" disabled id="pen" name="pen">
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="employer">Employer Name <i class="fa fa-asterisk text-danger d-none"></i></label>
                    <input type="text" class="form-control" disabled id="employer" name="employer">
                </div>
            </div>
        </div>

        <hr class="bg-success">
        <div class="form-row">
            <div class="col-md-12">
                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Address and Contact Details</div>
            </div>
        </div>
        <hr class="bg-success">

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memstr">Street No. <i class="fa fa-asterisk text-danger"></i></label>
                    <textarea type="text" class="form-control form-control-mb mb-1" id="memstr"
                        placeholder="Street Address" name="memstr"></textarea>
                </div>
            </div>
        </div>

        <!-- <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <div class="form-group">
                        <label for="memReg">Region <i class="fa fa-asterisk text-danger"></i></label>
                        <select  class="form-control" onchange ="Region();" id="memReg" name="memReg"></select>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="memProv">Province <i class="fa fa-asterisk text-danger"></i></label>
                    <select class="form-control" disabled id="memProv" name="memProv"></select>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memCity">City/Municipality <i class="fa fa-asterisk text-danger"></i></label>
                    <select class="form-control" disabled id="memCity" name="memCity"></select>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="memDist">District</label>
                    <select class="form-control" disabled id="memDist" name="memDist"></select>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memBrgy">Barangay</label>
                    <select class="form-control" disabled id="memBrgy" name="memBrgy"></select>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="memZip">ZIP Code <i class="fa fa-asterisk text-danger"></i></label>
                    <input type="text" class="form-control form-control-mb" id="memZip" name="memZip" placeholder="Enter ZIP Code">
                </div>
            </div>
        </div> -->

        <div class="form-row">
            <label class="col-md-2 col-form-label  text-default mb-1">
                <i class="fa fa-asterisk text-danger"></i> City/Municipality:
            </label>
            <div class="col-md-10">
                <select class="form-control form-control-mb" id="memCity" name="memCity">
                </select>
            </div>
            <label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
            <div class="col-md-4">
                <select class="form-control mb-1" disabled id="memBrgy" name="memBrgy"></select>
            </div>

            <div for="selReg" class="col-md-2 col-form-label text-default mb-1">
                Region:
            </div>
            <div class="col-md-4">
                <select class="form-control" id="memReg" name="memReg" readonly>


                </select>
            </div>
        </div>
        <div class="form-row">
            <label class="col-md-2 col-form-label  text-default mb-1">District:</label>
            <div class="col-md-4">
                <select class="form-control form-control-mb" readonly id="memDist" name="memDist">
                    <option value="">Select</option>
                </select>
            </div>

            <div class="col-md-2 col-form-label  text-default mb-1">
                Province:
            </div>
            <div class="col-md-4">
                <select class="form-control form-control-mb" readonly id="memProv" name="memProv">
                    <option value="">Select</option>
                </select>
            </div>

        </div>
        <div class="form-row">
            <label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
            <div class="col-md-4">
                <input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="memZip"
                    name="memZip">
            </div>
            <label class="col-md-2 col-form-label text-default mb-1">Country :</label>
            <div class="col-md-4">
                <select type="text" class="form-control form-control-mb mb-1" readonly id="memCountry"
                    name="memCountry">
                    <option value="PHIL" selected>Philippines</option>
                </select>
            </div>
        </div>

        <!-- <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memCountry">Country</label>
                    <select type="text" class="form-control form-control-mb" readonly id="memCountry" name="memCountry">
                        <option value="PHIL" selected>Philippines</option>
                    </select>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="memContactNo">Contact Number</label>
                    <input type="text" class="form-control form-control-mb" id="memContactNo" name="memContactNo" placeholder="Enter Contact Number">
                </div>
            </div>
        </div> -->

        <div class="form-row">
            <!-- <div class="col-md-6">
                <div class="form-group">
                    <label for="mememail">Email Address</label>
                    <input type="email" class="form-control  form-control-mb" placeholder="Enter Email Address" id="mememail" name="mememail">
                </div>
            </div> -->

            <label class="col-md-2 col-form-label text-default mb-1">Email Address</label>
            <div class="col-md-4">
                <input type="email" class="form-control  form-control-mb" placeholder="Enter Email Address"
                    id="mememail" name="mememail">
            </div>
            <label class="col-md-2 col-form-label text-default mb-1">Mobile Number</label>
            <div class="col-md-4">
                <input type="text" class="form-control form-control-mb" id="memContactNo" name="memContactNo"
                    placeholder="Enter Mobile Number">
            </div>
        </div>

        <div class="form-row">
            <label class="col-md-2 col-form-label text-default mb-1">Landline Number</label>
            <div class="col-md-4">
                <input type="text" class="form-control form-control-mb" id="memContactNoLandLine"
                    name="memContactNoLandLine" placeholder="Enter Landline Number">
            </div>
        </div>

        <hr class="bg-success">
        <div class="h5 text-success"> <i class="fa fa-venus-mars"></i>&nbsp Spouse Information</div>
        <hr class="bg-success">

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memspouselastname">Last Name</label>
                    <input type="text" disabled class="form-control form-control-mb" id="memspouselastname"
                        name="memspouselastname" placeholder="Enter Last Name">
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="memspousefirstname">First Name</label>
                    <input type="text" disabled class="form-control form-control-mb" id="memspousefirstname"
                        name="memspousefirstname" placeholder="Enter First Name">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="memspousesuffix">Suffix</label>
                    <select disabled name="memspousesuffix" id="memspousesuffix" onchange="fullname();"
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
                    </select>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="memspousemiddlename">Middle Name</label>
                    <input disabled type="text" class="form-control form-control-mb" id="memspousemiddlename"
                        name="memspousemiddlename" placeholder="Enter Middle Name">
                </div>
            </div>
        </div>

        <hr class="bg-success">
        <div class="form-row">
            <div class="col-md-12">
                <div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Employer Address</div>
            </div>
        </div>

        <hr class="bg-success">

        <div class="form-row">
            <div class="col-md">
                <div class="form-group">
                    <label for="empStr">Street No.</label>
                    <textarea type="text" class="form-control form-control-mb mb-1" id="empStr"
                        placeholder="Enter Street Address" name="empStr" disabled></textarea>
                </div>
            </div>
        </div>

        <div class="form-row">


            <!--label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
            <div class="col-md-4">
                <input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="memZip" name="memZip">
            </div-->

            <label class="col-md-2 col-form-label text-default mb-1" for="empCity">City/Municipality</label>
            <div class="col-md-4">
                <select class="form-control form-control-mb mb-1" disabled id="empCity" name="empCity"></select>
            </div>

            <label class="col-md-2 col-form-label text-default mb-1" for="empBrgy">Barangay</label>
            <div class="col-md-4">
                <select class="form-control form-control-mb mb-1" disabled id="empBrgy" name="empBrgy"></select>
            </div>

            <!--div class="col-md">    
            </div-->
            <!--div class="col-md">
                
            </div-->
        </div>

        <div class="form-row">
            <label class="col-md-2 col-form-label text-default mb-1" for="empProv">Province</label>
            <div class="col-md-4">
                <select class="form-control form-control-mb mb-1" disabled id="empProv" name="empProv"
                    readonly></select>
            </div>

            <!-- <div class="col-md">
                
            </div> -->
            <label class="col-md-2 col-form-label text-default mb-1" for="empZip">ZIP Code</label>
            <div class="col-md-4">
                <input type="text" class="form-control form-control-mb mb-1" id="empZip" disabled name="empZip"
                    placeholder="Enter ZIP Code" readonly>
            </div>

            <!-- <div class="col-md">
                
            </div> -->
        </div>

        <div class="form-row">
            <label class="col-md-2 col-form-label text-default mb-1" for="empDist">District</label>
            <div class="col-md-4">
                <select class="form-control form-control-mb mb-1" disabled id="empDist" name="empDist"
                    readonly></select>
            </div>
            <!-- <div class="col-md">
                
            </div> -->

            <label class="col-md-2 col-form-label text-default mb-1" for="empReg">Region</label>
            <div class="col-md-4">
                <select class="form-control form-control-mb mb-1" disabled id="empReg" name="empReg" readonly></select>
            </div>
            <!--div class="form-group">
                
            </div-->
            <!-- <div class="col-md">
                
            </div> -->
        </div>



        <div class="form-row">
            <label class="col-md-2 col-form-label text-default mb-1">Contact Number</label>
            <div class="col-md-4">
                <input type="text" class="form-control form-control-mb" id="empcontactno" name="empcontactno"
                    placeholder="Enter Contact Number" disabled>
            </div>
            <label class="col-md-2 col-form-label text-default mb-1">Country</label>
            <div class="col-md-4">
                <select type="text" class="form-control form-control-mb mb-1" readonly id="empcountry" name="empcountry"
                    disabled>
                    <option value="PHIL" selected>Philippines</option>
                </select>
                <!--input type="text" class="form-control form-control-mb" readonly id="empcountry" name="empcountry" placeholder="Enter Country" -->
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="employersModal">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Employers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="employersTable" class="display table table-striped" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>PHILHEALTH EMPLOYER NUMBER</th>
                            <th>EMPLOYER NAME</th>
                            <th>ADDRESS</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>