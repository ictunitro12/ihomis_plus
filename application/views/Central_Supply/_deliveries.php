<style>
table#deliver_tbl.dataTable tbody tr:hover {
    background-color: #80DB88;
}
</style>
<div class="clearfix">
    <div class="h4 text-success float-left"><i class="fa fa-cart-arrow-down"></i> Delivery Log</div>
    <button type="button" onclick="addDeliveries();" class="btn btn-outline-success btn-md  float-right mb-1"><i
            class="fa fa-plus"></i>&nbsp Add Delivery</button>
</div>
<table id="deliver_tbl" style="cursor:pointer;"
    class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
    <thead>
        <tr>
            <th style="text-align:center; vertical-align:middle;" width="10%" rowspan="2">No</th>
            <th style="text-align:center; vertical-align:middle;" width="7%" rowspan="2">Date</th>
            <th style="text-align:center; vertical-align:middle;" width="50%" colspan="3">Stock</th>
            <th style="text-align:center; vertical-align:middle;" width="5%" rowspan="2">Qty</th>
            <th style="text-align:center; vertical-align:middle;" width="5%" rowspan="2">Expiry Date</th>
            <th style="text-align:center; vertical-align:middle;" width="20%" rowspan="2">Account</th>
            <th style="text-align:center; vertical-align:middle;" width="5%" rowspan="2">Type</th>
            <th style="text-align:center; vertical-align:middle;" width="5%" rowspan="2"></th>
        </tr>
        <tr>
            <th width="10%">Supplier</th>
            <th width="10%">Type</th>
            <th width="20%">Item</th>
        </tr>
    </thead>
</table>