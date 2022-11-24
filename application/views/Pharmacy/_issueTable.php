<div class="clearfix">
<div class="text-success h4 float-left"><i class="fa fa-th-list"></i> Issuance</div>   
<div class="btn-group float-right">
     <button type="button" name="generateChargeslip" onclick='generatechargeslip();' id="generateChargeslip" disabled
    class="btn btn-md btn-outline-success mb-2 float-right"><i class="fa fa-list"></i> Create
    Chargeslip</button>
    <button type="button" name="cancelOrder" onclick='cancelOrder();'  id="cancelOrder" disabled
    class="btn btn-md btn-outline-danger mb-2 float-right"><i class="fa fa-close"></i> Cancel Order</button>
    <button type="button" class="btn btn-md btn-outline-success mb-2 float-right" id="btnAddPrescription"><i class="fa fa-plus"></i> Add request</button>
    </div>
</div>
<table id="drugMedsIssue" style="cursor:pointer"
class="table table-sm  table-bordered table-condensed table-hover" width="100%">

<thead>
    <tr>
        <th class="text-center" colspan="2">Date</th>
        <th class="align-middle text-center" rowspan="2">Chargeslip</th>
        <th class="align-middle text-center" rowspan="2">Lot number</th>
        <th class="align-middle text-center" rowspan="2">Description</th>
        <th class="align-middle text-center" rowspan="2">Status</th>
        <th class="align-middle text-center" rowspan="2">Balance</th>
        <th class="align-middle text-center" rowspan="2">Issue</th>
        <th class="align-middle text-center" rowspan="2">Unit Price</th>
        <th class="align-middle text-center" rowspan="2">Amount</th>
        <th class="never" rowspan="2">dmdcomb</th>
        <th class="never" rowspan="2">dmdctr</th>
        <th class="never" rowspan="2">account</th>
        <th class="never" rowspan="2">pricedate</th>
        <th class="never" rowspan="2">docoint</th>
        <th class="never" rowspan="2">enccode</th>
        <th class="never" rowspan="2">hpercode</th>
        <th class="never" rowspan="2">unitcode</th>
    </tr>
    <tr>
        <th class="align-middle text-center">Ordered</th>
        <th class="align-middle text-center trwidth">Issued</th>
    </tr>
</thead>
<tfoot>
    <tr>
        <th class="h3 text-right text-success" colspan="9">Total Amount</th>
        <th class="h3 text-right  text-success" id="TotalAmount">0.00</th>
    </tr>
</tfoot>
</table>