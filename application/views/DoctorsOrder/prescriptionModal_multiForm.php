<style>
th,
td {
    white-space: nowrap;
}
.color {
    background-color: rgba(255, 255, 255, 1) !important;
}
table.display {
    margin: 0 auto;
    width: 100%;
    clear: both;
    // add this 
    word-wrap: break-word; // add this 

    .display th {
        background-color: lightblue;
    }
}
 #modalDrugMulti .modal-dialog {
  padding: 0 !important; 
}

 #modalDrugMulti .modal-dialog{
  width: 80%;
  max-width: none;
  height: 80%;

}
 #modalDrugMulti .modal-dialog {
  height:auto;
  border: 0;
  border-radius: 0;
}
 #modalDrugMulti  .modal-dialog{
  overflow-y: auto;
}
</style>

<form name="frmPrescriptionMulti" id="frmPrescriptionMulti" method="post">
    <div class="modal" id="modalDrugMulti" name="modalDrugMulti" role="form" >
        <div class="modal-dialog modal-dialog-centered modal-xl" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text text-success"><i class="fa fa-prescription"></i> Drugs & Medicines</h4>
                    <hr class="bg-success">
                    </hr>
                    <h5 class="text-success"><i class="fa fa-info-circle"></i>
                        &nbsp Order Details
                    </h5>
                    <div class="row">
                        <div class="col-md-1 mb-1">
                            Ordered:
                        </div>
                        <div class="col-md-5 mb-1">
                            <input type="datetime-local" id="dateOrderPres" name="dateOrderPres" stepup="any"
                                class="form-control form-control-md" autocomplete="off">
                        </div>
                        <div class="col-md-1 mb-1">
                            Posted:
                        </div>
                        <div class="col-md-5 mb-1">
                            <input type="datetime-local" id="datePostPres" name="datePostPres" stepup="any"
                                class="form-control form-control-md" autocomplete="off">
                        </div>
                        <div class="col-md-1 mb-1">
                            Doctor:
                        </div>
                        <div class="col-md-5 mb-1">
                            <select name="selDocPres_doc" id="selDocPres_doc"
                                class="form-control form-control-md"></select>
                        </div>
                        <div class="col-md-1 mb-1">
                            Type:
                        </div>
                        <div class="col-md-5 mb-1">
                            <select name="presType" id="presType" class="form-control">
                                <option value="">Select</option>
                                <option value="ord">Order</option>
                                <option value="presc">Prescription Only</option>
                            </select>
                        </div>
                        <div class="col-md-1 mb-1">
                            Verified:
                        </div>
                        <div class="col-md-5 mb-1">
                            <select name="selEmppres_emp" id="selEmppres_emp" class="form-control form-control-md">
                                <option value="">Select</option>
                            </select>
                        </div>
                        <div class="col-md-1 mb-1">
                            Priority:
                        </div>
                        <div class="col-md-5 mb-1">
                            <select name="ordPrio" id="ordPrio" class="form-control form-control-md">
                                <option value="">Select</option>
                                <option value="STAT">Urgent</option>
                                <option value="ROUTI">Routine</option>
                            </select>
                        </div>

                    </div>
                    <hr class="bg-success">
                    </hr>
                    <div class="clearfix mb-1">
                        <h4 class="text-success float-left"><i class="fa fa-info-circle"></i>
                            &nbsp Orderlist/s
                        </h4>
                        <div class="btn-group float-right">
                            <button type="button" id="btnRemoveall" class="btn btn-outline-success" hidd><i
                                    class="fa fa-close"></i> &nbsp Remove all</button>
                            <button type="button" id="btnSearchDrugs" class="btn btn-outline-success"><i
                                    class="fa fa-search"></i> &nbsp Search Drugs</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="medicineList"
                                class="table table-bordered table-hovered table-sm table-condensed table-sm"
                                width="100%">
                                <thead class="thead-white">
                                    <tr>
                                        <th class="align-middle text-center never" rowspan='2'></th>
                                        <th lass="align-middle text-center never" rowspan='2'></th>
                                        <th class="align-middle text-center never" rowspan='2'></th>
                                        <th class="align-middle text-center color " rowspan='2'>Drugs/Medicines</th>
                                        <th class="align-middle  text-center never" colspan='2'>Intake</th>
                                        <th class="text-center" colspan='2'>Frequency</th>
                                        <th class="align-middle  text-center" colspan='2'>Days</th>
                                        <th class="align-middle  text-center" colspan='7'>Specified Day/s</th>
                                        <th class="text-center" colspan='4'>Time</th>
                                        <th class="align-middle  text-center" rowspan='2'>Start</th>
                                        <th class="align-middle  text-center" rowspan='2'>Remarks</th>
                                        <th class="align-middle  text-center" rowspan='2'></th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">No. of intake</th>
                                        <th class="text-center">Intake</th>
                                        <th class="text-center">No. of Frequency.</th>
                                        <th class="text-center">Frequency</th>
                                        <th class="text-center">No. of Days</th>
                                        <th class="text-center">&nbsp Day/s &nbsp</th>
                                        <th class="text-center">Mon</th>
                                        <th class="text-center">Tue</th>
                                        <th class="text-center">Wed</th>
                                        <th class="text-center">Thu</th>
                                        <th class="text-center">Fri</th>
                                        <th class="text-center">Sat</th>
                                        <th class="text-center">Sun</th>
                                        <th class="text-center">Time 1</th>
                                        <th class="text-center">Time 2</th>
                                        <th class="text-center">Time 3</th>
                                        <th class="text-center">Time 4</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="presDoco" id="presDoco">
                    <input type="hidden" name="presEnccode" id="presEnccode">
                    <input type="hidden" name="presHpercode" id="presHpercode">
                    <input type="hidden" name="presformIden" id="presformIden">
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
<div class="modal" id="modalMultipleDrug" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-success"><i class="fa fa-prescription"></i> Drugs & Medicines </h4>
                <table id="drugmultiData" style="cursor:pointer;" ;
                    class="table table-sm table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Drugs & Medicine</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-success" id="btnSelectDrugs"><i
                            class="fa fa-check"></i>
                        Select</button>
                    <button class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i>
                        Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
