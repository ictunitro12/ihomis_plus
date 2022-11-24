<div class="modal" name="drugAccountModal" id="drugAccountModal" role="form">
    <div class="modal-dialog modal-dialog-centered modal-md" tab-index="-1" role="form">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text text-success h4 float-left"><i class="fa fa-th-list"></i> Drugs & medicine accounts
                </div>
                <button type="button" id="closeSearch" class="close text-danger  float-right"
                    data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table id="drugAccount" style="cursor:pointer"
                    class="table table-sm  table-bordered table-condensed table-hover" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center all">Code</th>
                            <th class="text-center all">Account</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/_accountTable.js"></script>