<h4 class="modal-title text-success"><i class="fa fa-radiation"></i> Services</h4>
<table id="availStatus" class="table table-sm table-striped table-bordered table-condensed table-hover ">
    <thead>
        <tr>
            <th>Code</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th width="50px"></th>
        </tr>
    </thead>
</table>

<form id="frmChangeStatus" method="post">
    <div class="modal" id="modalChangeStatus" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content card-accent-success" id="content ">
                <div class="modal-body">
                    <h4 class="modal-title text-success" id="title"> <i class="fa fa-success"></i></h4>
                    <div id="message"></div>
                    <input name="proccode" id="proccode" type="hidden">
                    <input name="status" id="status" type="hidden">
                </div>
                <div class="modal-footer">
                    <div class=" btn-group">
                        <button type="submit" name="btnSaveVital" id="btnSaveVital"
                            class="btn btn-outline-success btn-ladda" data-style="slide-right"><i
                                class="fa fa-save"></i> Save</button>
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                                class="fa fa-close"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
</form>