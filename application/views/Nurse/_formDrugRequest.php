<form id="frmdrugReq" name="frmdrugReq" class="form">
    <div class="modal fade" id="requestmodal_drug" role="form">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <div class=" h4 modal-title text-success"><i class="fa fa-reply"></i>&nbsp Request</div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Date request:
                        </div>
                        <div class="col-md-8">
                            <input type="datetime-local" class="form-control form-control mb-1" step="any"
                                autocomplete="off" id="dterequestMed" name="dterequestMed">
                        </div>

                        <div class="col-md-12">
                            <div class="clearfix">
                                <div class=" h4 text-success float-left"><i class="fa fa-th-list"></i>&nbsp
                                    Item list/s</div>
                                <button type="button" class="btn btn-outline-success btn-sm float-right"
                                    id="btnMultipledrug"><i class="fa fa-search"></i>&nbsp Search Drug/s</button>
                            </div>
                            <table id="requestList_drug"
                                class="table table-sm table-striped table-bordered  table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th class="all">Remove</th>
                                        <th class="all">Drugname</th>
                                        <th class="never">dmdcomb</th>
                                        <th class="never">dmdctr</th>
                                        <th class="never">formcode</th>
                                        <th class="all">Quantity</th>
                                        <th class="all">Priority</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <input type="hidden" name="locacodeMed" id="locacodeMed">
                        <input type="hidden" name="formIdenreqMed" id="formIdenreqMed">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-outline-success btn-inline  btn-ladda"
                            data-style="slide-right"><i class="fa fa-send"></i> Send</button>
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                                class="fa fa-close"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="frmdrugReq_edit" name="frmdrugReq_edit" class="form">
    <div class="modal" id="requestmodal_edit" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <div class=" h4 modal-title text-success"><i class="fa fa-edit"></i>&nbsp Edit Request</div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-1">
                            <label class="text-success  h5" id="itemdesc"></label>
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Date request:</label>
                        </div>
                        <div class="col-md-6 mb-1">
                            <input name="datereqedit" id="datereqedit" class="form-control" type="datetime-local"
                                placeholder="Quantity">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Quantity:</label>
                        </div>
                        <div class="col-md-6 mb-1">
                            <input name="qtyreqedit" id="qtyreqedit" class="form-control" type="number"
                                placeholder="Quantity">
                        </div>
                        <input name="dmdcomb" id="dmdcomb_edit" class="form-control" type="hidden">
                        <input name="dmdctr" id="dmdctr_edit" class="form-control" type="hidden">
                        <input name="locacode" id="locacode_edit" class="form-control" type="hidden">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-outline-success btn-inline  btn-ladda"
                            data-style="slide-right"><i class="fa fa-save"></i> Save</button>
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                                class="fa fa-close"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url()?>assets/scripts/nurse/saveDrugRequest.js"></script>