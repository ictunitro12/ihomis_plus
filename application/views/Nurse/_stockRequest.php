<div class="clearfix mb-1">
    <div class="text-success h4 float-left"><i class="fa fa-paper-plane"></i>&nbsp Request/s</div>
    <button class="btn btn-outline-success float-right" id="btnAdd_request"><i class="fa fa-plus"></i>Add
        request</button>
</div>
<table id="requestMed" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
    <thead>
        <tr>
            <th class="all">Date</th>
            <th class="all">Item</th>
            <th class="all">Request</th>
            <th class="all">Issued</th>
            <th class="all">Received</th>
            <th class="all">Ward</th>
            <th class="all">Pharmacy</th>
            <th class="all">Priority</th>
        </tr>
    </thead>
</table>



<form id="frmdrugReq" name="frmdrugReq" class="form">
    <div class="modal fade" id="drugRequestModal" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <div class=" h4 modal-title text-success"><i class="fa fa-reply"></i>&nbsp Request</div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Date request:
                        </div>
                        <div class="col-md-8">
                            <input type="datetime-local" class="form-control form-control mb-1" stepup="any"
                                autocomplete="off" id="dterequestMed" name="dterequestMed">
                        </div>
                       
                        <div class="col-md-12">
                        <div class="clearfix">
                            <div class=" h4 text-success float-left"><i class="fa fa-th-list"></i>&nbsp
                                Item list/s</div>
                                <button type="button" class="btn btn-outline-success btn-sm float-right" id="btnMultipledrug"><i class="fa fa-search"></i>&nbsp Search Drug/s</button>
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
<?php $this->load->view('Pharmacy/_modalDrugList.php');?>
<script src="<?php echo base_url()?>assets/scripts/nurse/_request.js"></script>
<script src="<?php echo base_url()?>assets/scripts/nurse/_drugListMultiple.js"></script>