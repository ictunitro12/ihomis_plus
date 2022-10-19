<form id="frmReturn" name="frmReturn" method="post">
    <div class="modal" id="returnDrugModal" name="returnDrugModal" tabindex="-1" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="modal-title text-danger"> <i class="fa fa-trash"></i>&nbsp Return Item/s ?</h2>
                    <h5>Do you want to return selected item/s? </h5>
                    <ul class="list-group" id="listReturn"></ul>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Reason:</label>
                            <textarea class="form-control form-contrl-md" class="reasonCancel" id="reasonCancel"
                                placeholder="Reason of cancellation"></textarea>
                            <input type="hidden" name="hpercodeCancel" id="hpercodeCancel">
                            <input type="hidden" name="enccodeCancel" id="enccodeCancel">

                        </div>
                    </div>
                </div>
                <div class="modal-footer ">
                    <div class=" btn-group">
                        <button type="submit" class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><iclass="fa fa-close"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/returnItems.js"></script>
<script>
    $("#returnDrugModal").on('hidden.coreui.modal',function(){
      $('#listDoco li').remove();
 });
</script>