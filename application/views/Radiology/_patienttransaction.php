
<form id="frmResult" method="post">
<div class="modal" id="modalResult" tabindex="-1" role="form">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content card-accent-success">
        <div class="modal-header">
            <div class="modal-title h4 text-success"><i class="fa fa-user"></i> Patient Transaction </div>
        </div>
            <div class="modal-body">
            <?php echo ViewPatientInformation2();?>
            <div class="clearfix mb-1">
                <div class="h5 text-success float-left"><i class="fa fa-th-list"></i> List of orders </div>
                <button  type="button" id = "btnGenerateSlip"  onclick="generatechargeslip();" class="btn btn-outline-success float-right mb-1"><i class="fa fa-th-list"></i> Generate chargeslip </button>
            </div>
            <table id="pat_tbl"  style="cursor:pointer;" class="table table-sm table-bordered table-condensed table-hover" width="100%">
            <thead>
                            <tr>
                                <th></th>
                                <th>Order date</th>
                                <th>Chargeslip</th>
                                <th>Procedure</th>
                                <th>Amount</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>w/Film?</th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total amount:</th>
                                <th id="TotalAmount"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                        
        </table>
            </div>
        <input  type="hidden" name="enccodeChrg" id="enccodeChrg">
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
    </div>
</div>
</div>
</form>