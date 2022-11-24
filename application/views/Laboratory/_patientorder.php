<div class="clearfix">
    <div class="h5 text-success float-left"><i class="fa fa-th-list"></i> List of order/s</div>
    <button onclick="generateslip();" type="button" class="btn btn-outline-success btn-sm float-right mb-2"><i
            class="fa fa-plus"></i> Generate chargeslip</button>
</div>
<div class="border-bottom mb-2 text-success"></div>
<table id="patientOrders" style="cursor:pointer;"
    class="table table-sm table-bordered table-condensed table-hover table-sm" width="100%">
    <thead>
        <tr>
            <th>Order date</th>
            <th>Chargeslip</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Ordering Doctor</th>
            <th>Price</th>
            <th class="never">doco</th>
            <th  class="never">pricedate</th>
            <th class="never">prikey</th>
            <th>Type</th>
            <th></th>
        </tr>
    </thead>
</table>
<script src="<?php echo base_url()?>assets/scripts/laboratory/_generateslip.js"></script>