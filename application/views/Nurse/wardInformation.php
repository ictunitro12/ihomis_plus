<div class="card">
		<div class="card-body">
		<h5 class="profile-username text-center text-success" id="wardname"></h5>
<div class="text-success h4" id ="wardname"></div>
<hr>
</hr>
<div class="text-success h6"><i class="fa fa-th-list"></i>&nbsp Menu/s</div>
<div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action active" id="patient-tab" data-toggle="list" href="#patient" role="tab"
        aria-controls="order"> <i class="fa fa-arrow-right"></i> Patient/s</a>
	<a class="list-group-item list-group-item-action" id="request-tab" data-toggle="list" href="#request" role="tab"
        aria-controls="request"> <i class="fa fa-arrow-right"></i> Request/s</a>
    <a class="list-group-item list-group-item-action" id="drugs-tab" data-toggle="list" href="#drugs" role="tab"
        aria-controls="patient"> <i class="fa fa-arrow-right"></i> Drugs & Medicines</a>
    <a class="list-group-item list-group-item-action" id="nondrugs-tab" data-toggle="list" href="#nondrugs" role="tab"
        aria-controls="cash"> <i class="fa fa-arrow-right"></i> Non drugs/ Supplies</a>
    <a class="list-group-item list-group-item-action" id="equip-tab" data-toggle="list" href="#equip" role="tab"
        aria-controls="ward"> <i class="fa fa-arrow-right"></i> Equipments</a>
  <hr>
</hr>
<div class="text-success h6"><i class="fa fa-th-list"></i>&nbsp Report/s</div>
<div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action" id="stockcard-tab" data-toggle="list" href="#stockcard" role="tab"
        aria-controls="home"> <i class="fa fa-arrow-right"></i>Stockcard</a>
    <a class="list-group-item list-group-item-action" id="stocklist-tab" data-toggle="list" href="#stocklist" role="tab"
        aria-controls="profile"> <i class="fa fa-arrow-right"></i> Stocklist </a>
</div>
</div>
		</div>
	<div class="card-footer">
	</div>
</div>
<script>
$(function() {
    $('a[data-toggle="list"]').on('click', function(e) {
        var tab = e.target.id;

        switch (tab) {
            case "patient-tab":
				$("#content").load(baseURL+"Nurse/view_patients",function(){
					inpatientList(wardCode);
				});
                break;
			case "request-tab":
				$("#content").load(baseURL+"Nurse/view_request",function(){
					requestList('request',wardCode);
				});
			  break;
            case "drugs-tab":
				$("#content").load(baseURL+"Nurse/view_med",function(){
					medicineStock(wardCode);
				});
                break;
			
            case "nondrugs-tab":
              
                break;
            case "equip-tab":
                
                break;
            default:
				$("#content").load(baseURL+"Nurse/view_patients",function(){
					inpatientList(wardCode);
				});
                break;
        }
    });
});
</script>