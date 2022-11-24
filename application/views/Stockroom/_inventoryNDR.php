<div class="clearfix mb-1">
    <div class="h4 text-success float-left"><i class="fa fa-cart-arrow-down"></i> Physical count</div>
    <button class="btn btn-outline-success float-right" id="btnCreateAcc"><i class="fa fa-plus"></i>&nbsp Add Account</button>
</div>
<table id="medAcctTbl" style="cursor:pointer;" class="table table-sm table-striped table-bordered  table-hover"
    width="100%">
    <thead>
        <tr>
            <th  class="align-middle" rowspan="2">Code</th>
            <th class="align-middle" rowspan="2">Item name</th>
            <th  class="align-middle" rowspan="2">Description </th>
            <th  class="align-middle" rowspan="2">Account</th>

            <th  class="align-middle text-center" colspan="2">Stock</th>
            <th  class="align-middle" rowspan="2">Reorder level</th>
            <th rowspan="2"></th>
        </tr>
        <tr>
            <th>Stock</th>
            <th>Begin</th>
        </tr>
    </thead>
</table>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/_accountTable.js"></script>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/_itemList.js"></script>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/supplies_stock.js"></script>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/_adjustments.js"></script>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/saveItemAccount.js"></script>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/_deleteItemAccount.js"></script>