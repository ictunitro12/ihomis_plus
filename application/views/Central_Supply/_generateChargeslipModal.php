<form name ="frmGenerate" id ="frmGenerate">       
    <div class="modal" name="suppOrderModal" id="suppOrderModal" role="form">
            <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                    <div class="clearfix">
                    <div class="h4 text-success float-left"> Chargeslip #:</div><div id="chargeslip" class="text-success h4 float-right"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="h3 text-success"><i class="fa fa-list"></i> List of drugs</div>
                    <ul  class="list-group list-group-numbered" id="listOrder"></ul>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button type="submit" name="save" class="btn btn-md btn-outline-success mb-2"><i class="fa fa-save"></i>&nbsp Save</button>
                    <button type="button" data-dismiss="modal" class="btn btn-md btn-outline-danger mb-2"><i class="fa fa-close"></i>&nbsp Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/_generateslip.js"></script>
