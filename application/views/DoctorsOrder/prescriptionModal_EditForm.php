<form id="frmPrescriptionEdit" name="frmPrescriptionEdit" method="post">
    <div class="modal" id="DocOrdPresModal" name="DocOrdPresModal" role="form">
        <div class="modal-dialog modal-dialog modal-lg" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text text-success"><i class="fa fa-prescription"></i> Order/ Prescription</h4>
                    <hr class="bg-success">
                    </hr>
                    <h4 class="text-success"><i class="fa fa-info-circle"></i>
                        &nbsp Details
                    </h4>
                    <div class="row">
                        <div class="col-md-1 mb-1">
                            Ordered:
                        </div>
                        <div class="col-md-5 mb-1">
                            <input type="datetime-local" id="dateOrderPres_edit" name="dateOrderPres_edit" step="any"
                                class="form-control form-control-md" autocomplete="off">
                        </div>
                        <div class="col-md-1 mb-1">
                            Posted:
                        </div>
                        <div class="col-md-5 mb-1">
                            <input type="datetime-local" id="datePostPres_edit" name="datePostPres"  step="any"
                                class="form-control form-control-md" autocomplete="off">
                        </div>
                        <div class="col-md-1 mb-1">
                            Doctor:
                        </div>
                        <div class="col-md-5 mb-1">
                            <select name="selDocPresEdit_doc" id="selDocPresEdit_doc"
                                class="form-control form-control-md"></select>
                        </div>
                        <div class="col-md-1 mb-1">
                            Type:
                        </div>
                        <div class="col-md-5 mb-1">
                            <select name="presType_edit" id="presType_edit" class="form-control">
                                <option value="">Select</option>
                                <option value="ord">Order</option>
                                <option value="presc">Prescription Only</option>
                            </select>
                        </div>
                        <div class="col-md-1 mb-1">
                            Verified:
                        </div>
                        <div class="col-md-5 mb-1">
                            <select name="selEmppresEdit_emp" id="selEmppresEdit_emp"
                                class="form-control form-control-md">
                                <option value="">Select</option>
                            </select>
                        </div>
                        <div class="col-md-1 mb-1">
                            Priority:
                        </div>
                        <div class="col-md-5 mb-1">
                            <select name="ordPrio_edit" id="ordPrio_edit" class="form-control form-control-md">
                                <option value="">Select</option>
                                <option value="STAT">Urgent</option>
                                <option value="ROUTI">Routine</option>
                            </select>
                        </div>

                    </div>
                    <hr class="bg-success">
                    </hr>
                    <h4 class="text-success"><i class="fa fa-info-circle"></i>
                        &nbsp Medication
                    </h4>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <label>Drug name:</label>
                        </div>
                        <div class="col-md-10 mb-1">
                            <input class="form-control" readonly name="selPresEdit_drugs" id="selPresEdit_drugs">
                        </div>
                        <div class="col-md-1 mb-1">
                            <label>Quantity:</label>
                        </div>
                        <div class="col-md-5 mb-1">
                            <input type="number" min="1" id="intakePres_edit" name="intakePres_edit"
                                class="form-control form-control-md" autocomplete="off" placeholder="Number of Intake">
                        </div>
                        <div class="col-md-1 mb-1">
                            <label> Intake:</label>
                        </div>
                        <div class="col-md-5 mb-1">
                            <input type="text" class="form-control form-control-md" name="selIntakeEdit_form"
                                id="selIntakeEdit_form" readonly></input>
                            <input type="hidden" class="form-control form-control-md" name="dmdctr_edit"
                                id="dmdctr_edit" readonly></input>
                        </div>

                        <div class="col-md-1 mb-1">
                            <label> Number:</label>
                        </div>
                        <div class="col-md-5 mb-1">
                            <input type="number" min="1" id="freqPres_edit" name="freqPres_edit"
                                class="form-control form-control-md" autocomplete="off" placeholder="Frequency">
                        </div>
                        <div class="col-md-1 mb-1">
                            <label> Frequency:</label>
                        </div>
                        <div class="col-md-5 mb-1">
                            <select class="form-control form-control-md" name="selFreqPres_edit" id="selFreqPres_edit">
                                <option value="">Frequency</option>
                                <option value="HOU">Hour/s</option>
                                <option value="DAY">Day/s</option>
                                <option value="WEK">Week/s</option>
                                <option value="MON">Months</option>
                                <option value="YER">Years</option>
                            </select>
                        </div>
                        <div class="col-md-1 mb-1">
                            <label> Number:</label>
                        </div>
                        <div class="col-md-5 mb-1">
                            <input type="number" min="1" id="noDaysPres_edit" name="noDaysPres_edit"
                                class="form-control form-control-md" autocomplete="off" placeholder="Days">
                        </div>
                        <div class="col-md-1 mb-1">
                            <label> For:</label>
                        </div>
                        <div class="col-md-5 mb-1">
                            <select class="form-control form-control-md" name="selDays_edit" id="selDays_edit">
                                <option value="">For</option>
                                <option value="DAY">Day/s</option>
                                <option value="WEK">Week/s</option>
                                <option value="MON">Months</option>
                                <option value="YER">Years</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            Time:
                        </div>
                        <div class="col-md-6"> 
                            <input type="time" id="every1Pres_edit" name="every1Pres_edit" step="any"
                                class="form-control form-control-md mb-1">
                        </div>
                        <div class="col-md-6">
                            <input type="time" id="every2Pres_edit" name="every2Pres_edit" step="any"
                                class="form-control form-control-md mb-1">
                        </div>
                        <div class="col-md-6">
                            <input type="time" id="every3Pres_edit" name="every3Pres_edit" step="any"
                                class="form-control form-control-md mb-1">
                        </div>
                        <div class="col-md-6">
                            <input type="time" id="every4Pres_edit" name="every4Pres_edit" step="any"
                                class="form-control form-control-md mb-1">
                        </div>
                        <div class="col-md-10">
                            <input type="checkbox" id="everyDayPres_edit" name="everyDayPres_edit" autocomplete="off"
                                placeholder="Days">
                            <input type="hidden" id="everydayPresEdit_val" name="everydayPresEdit_val" value="N">
                            <label class="col-form-label  text-default mb-2">:Everyday</label>
                        </div>
                        <div class="col-md-12">
                            Day/s:
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" id="everyMonPres_edit" name="everyMonPres_edit"
                                onchange=" daycheckEdit();">
                            <input type="hidden" id="everyMonPresEdit_val" name="everyMonPresEdit_val" value="N">
                            <label class="col-form-label  text-default mb-1">:Monday</label>
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" id="everyTuePres_edit" name="everyTuePres_edit"
                            onchange=" daycheckEdit();">
                            <input type="hidden" id="everyTuePresEdit_val" name="everyTuePresEdit_val" value="N">
                            <label class="col-form-label  text-default mb-1">:Tuesday</label>
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" id="everyWedPres_edit" name="everyWedPres_edit"
                            onchange=" daycheckEdit();">
                            <input type="hidden" id="everyWedPresEdit_val" name="everyWedPresEdit_val" value="N">
                            <label class="col-form-label  text-default mb-1">:Wednesday</label>
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" id="everyThuPres_edit" name="everyThuPres_edit"
                            onchange=" daycheckEdit();">
                            <input type="hidden" id="everyThuPresEdit_val" name="everyThuPresEdit_val" value="N">
                            <label class="col-form-label  text-default mb-1">:Thursday</label>
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" id="everyFriPres_edit" name="everyFriPres_edit"
                            onchange=" daycheckEdit();">
                            <input type="hidden" id="everyFriPresEdit_val" name="everyFriPresEdit_val" value="N">
                            <label class="col-form-label  text-default mb-1">:Friday</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="everySatPres_edit" name="everySatPres_edit"
                            onchange=" daycheckEdit();">
                            <input type="hidden" id="everySatPresEdit_val" name="everySatPresEdit_val" value="N">
                            <label class="col-form-label  text-default mb-1">:Saturday</label>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="everySunPres_edit" name="everySunPres_edit"
                            onchange=" daycheckEdit();">
                            <input type="hidden" id="everySunPresEdit_val" name="everySunPresEdit_val" value="N">
                            <label class="col-form-label  text-default mb-1">:Sunday</label>
                        </div>
                        <div class="col-md-6">
                            Start Date:
                            <input type="datetime-local" id="startPres_Edit" name="startPres_Edit"
                                class="form-control form-control-md">
                        </div>
                        <div class="col-md-6">
                            Remarks:
                            <textarea type="text" id="remarksPres_edit" name="remarksPres_edit"
                                class="form-control form-control-md" autocomplete="off"
                                placeholder="Remarks"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="presDoco_edit" id="presDoco_edit">
                    <input type="hidden" name="presEnccode_edit" id="presEnccode_edit">
                    <input type="hidden" name="presHpercode_edit" id="presHpercode_edit">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-outline-success btn-inline  btn-ladda"
                            data-style="slide-right"><i class="fa fa-send"></i>&nbsp Submit</button>
                        <button class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i>
                            Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $("#frmPrescriptionEdit").on('submit',function(){

$.ajax({
    type:'POST',
    data :new FormData(this),
    processData: false,
    contentType: false,
    url: baseURL+"DoctorsOrder/updateOrderPres",
    success: function(data,response){
        toastr.success(data.message,'Success');
        $("#DocOrdPresModal").modal('hide');
        $("#docOrdpres").DataTable().ajax.reload();
    },
    error: function(data,response){
        toastr.error(data.message,'Error');
        $("#DocOrdPresModal").modal('hide');
        $("#docOrdpres").DataTable().ajax.reload();
    },
});
return false;
})
                            </script>