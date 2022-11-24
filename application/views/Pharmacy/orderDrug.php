<div class="text-success h5"><i class="fa fa-th-list"></i> Menu</div>
<div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action active" id="transaction-tab" data-toggle="list" href="#transaction"
        role="tab" aria-controls="home"> <i class="fa fa-arrow-right"></i>Transaction/s</a>
    <a class="list-group-item list-group-item-action" id="issue-tab" data-toggle="list" href="#issue" role="tab"
        aria-controls="profile"> <i class="fa fa-arrow-right"></i> Issuance</a>
    <a class="list-group-item list-group-item-action" id="return-tab" data-toggle="list" href="#return" role="tab"
        aria-controls="messages"> <i class="fa fa-arrow-right"></i> Return</a>
    <a class="list-group-item list-group-item-action" id="report-tab" data-toggle="list" href="#return" role="tab"
        aria-controls="messages"> <i class="fa fa-arrow-right"></i> Report/s</a>
</div>

<script>
$(function(e){
    $("#containerTrans").load(baseURL + "Pharmacy/viewtranstable", function() {
        orderTransactions($.session.get("enccode"));
     });
});
$('a[data-toggle="list"]').on('click', function(e) {
    var tab = e.target.id;
    switch (tab) {
        case "transaction-tab":
            $("#containerTrans").load(baseURL + "Pharmacy/viewtranstable", function() {
                orderTransactions($.session.get("enccode"));
            });
            break;
        case "issue-tab":
            $("#containerTrans").load(baseURL + "Pharmacy/viewissuetable", function() {
                doctorOrder($.session.get("enccode"));
            });
            break;
        case "return-tab":
            $("#containerTrans").load(baseURL + "Pharmacy/viewreturntable", function() {
                returnTable($.session.get("enccode"));
            });
            break;
        case "report-tab":
            $("#containerTrans").load(baseURL + "Pharmacy/viewreport");
            break;
        default:
            $("#containerTrans").load(baseURL + "Pharmacy/viewtranstable", function() {
                orderTransactions($.session.get("enccode"));
            });
         break;
    }
});
</script>
