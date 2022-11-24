<div class="card card-accent-success">
    <div class="card-header">
        <div class="clearfix">
            <div class="card-title text-success h4 float-left"><i class="fa fa-th-list"></i> &nbsp Stock & Inventory
            </div>
            <button id="btnAddDelivery" class="btn btn-outline-success float-right"><i class="fa fa-plus"></i> &nbsp Add delivery</button>
        </div>
    </div>
    <div class="card-body">
        <table id="stocklist" class="table table-sm table-hover table-condensed">
            <thead>
                <tr>
                    <th>Deliverydate</th>
                    <th>Deliveryno</th>
                    <th>Supplier</th>
                    <th>Description</th>
                    <th>Serial/Lotno</th>
                    <th>Quantity</th>
                    <th>Account</th>
                    <th>Type</th>
                    <th>Remarks</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
    $("#btnAddDelivery").on('click',function(event){
        $("#mmodalDeliver").modal({backdrop:false});
});
</script>

