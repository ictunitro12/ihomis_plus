<style>

tr td.trwidth  {
 width: 50%;
}
tr td:nth-child(6) {
 width: 5%;
}
tr td:nth-child(7) {
 width: 5%;
}

</style>

<div class="row">
<div class="col-md-2">
<div class="text-success h5"><i class="fa fa-th-list"></i> Menu</div>
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="transaction-tab" data-toggle="list" href="#transaction" role="tab" aria-controls="home"> <i class="fa fa-th-list"></i> Transaction Log</a>
      <a class="list-group-item list-group-item-action" id="issue-tab" data-toggle="list" href="#issue" role="tab" aria-controls="profile"> <i class="fa fa-check"></i> Issuance</a>
      <a class="list-group-item list-group-item-action" id="return-tab" data-toggle="list" href="#return" role="tab" aria-controls="messages"> <i class="fa fa-close"></i> Return</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Cancelled</a>
    </div>
</div>
<div class="col-md-10">
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active " id="transaction" role="tabpanel" aria-labelledby="exam-tab">
        <div class="text-success h5"><i class="fa fa-th-list"></i> Transaction Log</div>
        <table id="drugsAndMeds_tbl" style="cursor:pointer"
            class="table table-sm  table-bordered table-hover compact" style="width=100%">
            <thead>
                <tr>
                    <th rowspan="2">Date</th>
                    <th rowspan="2">Lot</th>
                    <th rowspan="2">Chargeslip</th>
                    <th rowspan="2">Description</th>
                    <th class="text-center" colspan="3">Quantity</th>
                    <th rowspan="2" >Ordering Doctor</th>
                    <th rowspan="2">Order</th>
                    <th rowspan="2">Status</th>
                    <th rowspan="2">Priority</th>
                </tr>
                <tr>
                    <th>Issued</th>
                    <th>Returned</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tfoot>
                
            </tfoot>
        </table>
    </div>
    <div class="tab-pane fade" id="issue" role="tabpanel" aria-labelledby="issue-tab">
        <div class="clearfix">
            <div class="text-success h5 float-left"><i class="fa fa-th-list"></i> Issuance</div>   
            <div class="btn-group float-right">
                 <button type="button" name="generateChargeslip" onclick='generatechargeslip();' id="generateChargeslip" disabled
                class="btn btn-md btn-outline-success mb-2 float-right"><i class="fa fa-list"></i> Create
                Chargeslip</button>
                <button type="button" name="cancelOrder" onclick='cancelOrder();'  id="cancelOrder" disabled
                class="btn btn-md btn-outline-danger mb-2 float-right"><i class="fa fa-close"></i> Cancel Order</button>
                </div>
        </div>
        <table id="drugMedsIssue" style="cursor:pointer"
            class="table table-sm  table-bordered table-condensed table-hover responsive" width="100%">

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
                    <th class="align-middle text-center" rowspan="2">cl2comb</th>
                    <th class="align-middle text-center" rowspan="2">account</th>
                    <th class="align-middle text-center" rowspan="2">pricedate</th>
                    <th class="align-middle text-center" rowspan="2">docoint</th>
                    <th class="align-middle text-center" rowspan="2">enccode</th>
                    <th class="align-middle text-center" rowspan="2">hpercode</th>
                    <th class="align-middle text-center" rowspan="2">hpercode</th>

              
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
    </div>
    <div class="tab-pane fade" id="return" role="tabpanel" aria-labelledby="return-tab">
    <div class="clearfix">
        <div class="text-success h5 float-left"><i class="fa fa-th-list"></i> Return</div>
            <button type="button" name="returnItem" onclick='returnItem();' id="returnItem" disabled
                class="btn btn-md btn-outline-success mb-2 float-right"><i class="fa fa-list"></i> Return item</button>
        </div>
        <table id="drugMedsReturn" style="cursor:pointer"
            class="table table-sm  table-bordered table-condensed table-hover compact" width="100%">
            <thead>
                <tr>
                    <th class="text-center" colspan="2">Date</th>
                    <th class="align-middle text-center" rowspan="2">Lot number</th>
                    <th class="align-middle text-center" rowspan="2">Description</th>
                    <th class="align-middle text-center" rowspan="2">Status</th>
                    <th class="align-middle text-center" rowspan="2">Issued</th>
                    <th class="align-middle text-center" rowspan="2">Return</th>
                    <th class="align-middle text-center" rowspan="2">Reason of return</th>
                    <th class="align-middle text-center" rowspan="2">dmdcomb</th>
                    <th class="align-middle text-center" rowspan="2">dmdctr</th>
                    <th class="align-middle text-center" rowspan="2">dmdsub</th>
                    <th class="align-middle text-center" rowspan="2">pricedate</th>
                    <th class="align-middle text-center" rowspan="2">docoint</th>
                    <th class="align-middle text-center" rowspan="2">enccode</th>
                    <th class="align-middle text-center" rowspan="2">hpercode</th>
                    <th class="align-middle text-center" rowspan="2">unitcode</th>
                </tr>
                <tr>
                    <th class="align-middle text-center">Issued</th>
                    <th class="align-middle text-center">Return</th>
                </tr>
            </thead>
          
        </table>

    </div>
</div>
</div>
</div>
<script>
    	$('a[data-toggle="list"]').on('click', function (e){
		var tab = e.target.id;  
		switch(tab) 
		{
			case "transaction-tab":
				$("#drugsAndMeds_tbl").DataTable().ajax.reload();
			break;
			case "issue-tab":
                $("#drugMedsIssue").DataTable().ajax.reload();
			break;
			case "return-tab":
				$("#drugMedsReturn").DataTable().ajax.reload();
			break;
			default:
              $("#drugsAndMeds_tbl").DataTable().ajax.reload();
			break;
		}
	});
    </script>