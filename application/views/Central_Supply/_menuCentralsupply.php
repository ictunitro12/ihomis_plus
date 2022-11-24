<div class="card card-accent-success">
    <div class="card-body">
        <div class="text-success h4"><i class="fa fa-syringe"></i> &nbsp Central Supply</div>
        <hr>
        </hr>
        <div class="text-success h6"><i class="fa fa-th-list"></i>&nbsp Transaction/s</div>
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="order-tab" data-toggle="list" href="#order"
                role="tab" aria-controls="order"> <i class="fa fa-arrow-right"></i> Order/ Request</a>
            <a class="list-group-item list-group-item-action" id="patient-tab" data-toggle="list" href="#patient"
                role="tab" aria-controls="patient"> <i class="fa fa-arrow-right"></i> Patient</a>
            <a class="list-group-item list-group-item-action" id="cash-tab" data-toggle="list" href="#cash" role="tab"
                aria-controls="cash"> <i class="fa fa-arrow-right"></i> Cash transactions</a>
            <a class="list-group-item list-group-item-action" id="ward-tab" data-toggle="list" href="#ward" role="tab"
                aria-controls="ward"> <i class="fa fa-arrow-right"></i> Ward request</a>
            <hr>
            </hr>
            <div class="text-success h6"><i class="fa fa-th-list"></i>&nbsp Stock & Inventory/s</div>
            <a class="list-group-item list-group-item-action" id="inventory-tab" data-toggle="list" href="#inventory"
                role="tab" aria-controls="order"> <i class="fa fa-arrow-right"></i> Inventory</a>
            <a class="list-group-item list-group-item-action" id="physical-tab" data-toggle="list" href="#physical"
                role="tab" aria-controls="order"> <i class="fa fa-arrow-right"></i> Physical Count</a>
            <a class="list-group-item list-group-item-action" id="delivery-tab" data-toggle="list" href="#delivery"
                role="tab" aria-controls="patient"> <i class="fa fa-arrow-right"></i> Delivery</a>
            <hr>
            </hr>
            <div class="text-success h6"><i class="fa fa-th-list"></i>&nbsp Report/s</div>
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action" id="stockcard-tab" data-toggle="list"
                    href="#stockcard" role="tab" aria-controls="home"> <i class="fa fa-arrow-right"></i>Stockcard </a>
                <a class="list-group-item list-group-item-action" id="stocklist-tab" data-toggle="list"
                    href="#stocklist" role="tab" aria-controls="profile"> <i class="fa fa-arrow-right"></i> Stocklist
                </a>
            </div>
        </div>
    </div>
</div>
<script>
$(function() {
    $("#container").load(baseURL + "Central_supply/viewdocord", function() {
        doctors_order();
    });

    $('a[data-toggle="list"]').on('click', function(e) {
        var tab = e.target.id;
        switch (tab) {
            case "order-tab":
                $("#container").load(baseURL + "Central_supply/viewdocord", function() {
                    doctors_order();
                });
                break;
            case "patient-tab":
                window.location.href = baseURL + "Central_supply/Transactions";
                break;
            case "cash-tab":
                $("#container").load(baseURL + "Central_supply/viewwalkin", function() {
                    initWalkin();
                });
                break;
            case "ward-tab":
                $("#container").load(baseURL + "Central_supply/viewward", function() {
                    initWard();
                });
                break;
            case "inventory-tab":
                $("#container").load(baseURL + "Central_supply/viewstk", function() {
                    initStk();
                });
                break;
            case "physical-tab":
                $("#container").load(baseURL + "Stockroom/inventoryNDR_view", function() {
                    accountItem();
                });
                break;
            case "delivery-tab":
                $("#container").load(baseURL + "Central_supply/viewdeliv", function() {
                    initDelivery();
                });
                break;
            case "stockcard-tab":
                $("#container").load(baseURL + "Central_supply/viewstockCard", function() {
                    chargeDrug();
                });
                break;
            default:
                $("#container").load(baseURL + "Central_supply/viewdocord", function() {
                    initDoctor();
                });
                break;
        }
    });
});
</script>