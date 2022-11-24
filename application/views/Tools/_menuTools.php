<div class="text-success h4"><i class="fa fa-th-list"></i> &nbsp Administration</div>
<hr>
</hr>
<div class="text-success h6"><i class="fa fa-desktop"></i>&nbsp Monitoring/s</div>
<div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action active" id="audit-tab" data-toggle="list" href="#audit" role="tab"
        aria-controls="audit"> <i class="fa fa-arrow-right"></i> Audit Trail</a>
    <a class="list-group-item list-group-item-action " id="attempt-tab" data-toggle="list" href="#attempt" role="tab"
        aria-controls="attempt"> <i class="fa fa-arrow-right"></i> Login Attempt/s</a>
 <hr></hr>
<div class="text-success h6"><i class="fa fa-th-list"></i>&nbsp Tools</div>
    <a class="list-group-item list-group-item-action" id="deletedata-tab" data-toggle="list" href="#deletedata" role="tab"
        aria-controls="deletedata"> <i class="fa fa-arrow-right"></i> Delete data</a>
    <a class="list-group-item list-group-item-action" id="editlic-tab" data-toggle="list" href="#physical" role="tab"
        aria-controls="deletedata"> <i class="fa fa-arrow-right"></i> Edit license</a>
    <a class="list-group-item list-group-item-action" id="migrate-tab" data-toggle="list" href="#delivery" role="tab"
        aria-controls="patient"> <i class="fa fa-arrow-right"></i> Migrations</a>
    <a class="list-group-item list-group-item-action" id="backup-tab" data-toggle="list" href="#delivery" role="tab"
        aria-controls="patient"> <i class="fa fa-arrow-right"></i> Auto backup</a>
    <a class="list-group-item list-group-item-action" id="backup-tab" data-toggle="list" href="#delivery" role="tab"
        aria-controls="patient"> <i class="fa fa-arrow-right"></i> Inventory</a>
    <a class="list-group-item list-group-item-action" id="logo-tab" data-toggle="list" href="#delivery" role="tab"
        aria-controls="patient"> <i class="fa fa-arrow-right"></i> Logo</a>
        
<hr></hr>
<div class="text-success h6"><i class="fa fa-th-list"></i>&nbsp Report/s</div>
    <a class="list-group-item list-group-item-action" id="deletedata-tab" data-toggle="list" href="#deletedata" role="tab"
        aria-controls="order"> <i class="fa fa-arrow-right"></i> Audit Log</a>
    <a class="list-group-item list-group-item-action" id="physical-tab" data-toggle="list" href="#physical" role="tab"
        aria-controls="order"> <i class="fa fa-arrow-right"></i></a>
    <a class="list-group-item list-group-item-action" id="delivery-tab" data-toggle="list" href="#delivery" role="tab"
        aria-controls="patient"> <i class="fa fa-arrow-right"></i> Delivery</a>
</div>
<script>
$(function() {
    $('a[data-toggle="list"]').on('click', function(e) {
        var tab = e.target.id;
  
        switch (tab) {
            case "audit-tab":
                $("#loadView").load(baseURL+"Tools/audit_view",function(){
			        auditLog();	
	        	});		
                break;
            case "attempt-tab":
                $("#loadView").load(baseURL+"Tools/loginattempt_view",function(){
			        loginLog();	
	        	});	
                break;
            case "cash-tab":
                $("#container").load(baseURL+"Pharmacy/viewwalkin",function(){
		            initWalkin();
	            });
                break;
            case "migrate-tab":
                $("#loadView").load(baseURL+"Tools/view_migration",function(){});
                break;
            case "inventory-tab":
                $("#container").load(baseURL+"Pharmacy/viewstk",function(){
	            	initStk();
	            });
                break;
            case "physical-tab":
                $("#container").load(baseURL+"Stockroom/inventory_view",function(){
		            initStk();
	            });
                break;
            case "delivery-tab":
                $("#container").load(baseURL+"Pharmacy/viewdeliv",function(){
		            initDelivery();
	            }); 
                break;
            case "stockcard-tab":
                $("#container").load(baseURL+"Pharmacy/viewstockCard",function(){
		            initDelivery();
	            }); 
                break;
            default:
               $("#container").load(baseURL+"Pharmacy/viewdocord",function(){
		            initDoctor();
	            });
                break;
        }
    });
});
</script>