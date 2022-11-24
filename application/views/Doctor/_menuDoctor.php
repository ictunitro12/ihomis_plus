<div class="text-success h6"><i class="fa fa-th-list"></i>&nbsp Menu/s</div>
<div class="list-group" id="list-tab" role="tablist">
<a class="list-group-item list-group-item-action active " id="inpatient-tab" data-toggle="list"
    href="#inpatient" role="tab" aria-controls="home"> <i class="fa fa-arrow-right"></i>
    Inpatient</a>
<a class="list-group-item list-group-item-action" id="outpatient-tab" data-toggle="list"
    href="#outpatient" role="tab" aria-controls="profile"> <i class="fa fa-arrow-right"></i>
    Outpatient</a>
<a class="list-group-item list-group-item-action" id="emergency-tab" data-toggle="list"
    href="#emergency" role="tab" aria-controls="messages"> <i class="fa fa-arrow-right"></i>
    Emergency </a>
<a class="list-group-item list-group-item-action" id="tos-tab" data-toggle="list"
    href="#tos" role="tab" aria-controls="messages"> <i class="fa fa-arrow-right"></i>Type of service
</a>
</div>
<hr>
</hr>
<div class="text-success h6"><i class="fa fa-th-list"></i>&nbsp Report/s</div>
<div class="list-group" id="list-tab" role="tablist">
<a class="list-group-item list-group-item-action" id="transaction-tab" data-toggle="list"
    href="#transaction" role="tab" aria-controls="home"> <i
        class="fa fa-arrow-right"></i>Reports </a>
<a class="list-group-item list-group-item-action" id="issue-tab" data-toggle="list"
    href="#issue" role="tab" aria-controls="profile"> <i class="fa fa-arrow-right"></i> My
    logs </a>
</div>
<script>
	$(function(){
	$('a[data-toggle="list"]').click();
});

		$('a[data-toggle="list"]').on('click', function (e){
		var tab = e.target.id;  
		switch(tab){
			case "tos-tab":
				$("#container").load(baseURL+"Doctor/viewInpatient",function(){
					initPatient();
				});
			break;
			case "inpatient-tab":
                $("#container").load(baseURL+"Doctor/viewInpatient",function(){
					Adm();
				});
			break;
            case "outpatient-tab":
                $("#container").load(baseURL+"Doctor/viewOutpatient",function(){
					Opd();
				});
			break;
            case "emergency-tab":
                $("#container").load(baseURL+"Doctor/viewEmergency",function(){
					Er();
				});
			break;
			case "emergency-tab":
                $("#container").load(baseURL+"Doctor/viewTelemed",function(){
					Appointment();
				});
			break;
			default:
			$("#container").load(baseURL+"Doctor/viewInpatient",function(){
					Adm();
				});
			break;
		}
	});
	</script>