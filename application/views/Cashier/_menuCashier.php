	<div class="text-success text h5 mb-2"><i class="fa fa-th-list"></i>&nbsp Patient Transaction/s</div>
		<div class="list-group mb-2" id="list-tab" role="tablist">
			<a class="list-group-item list-group-item-action" id="patient-tab" data-toggle="list" href="#patient" role="tab" aria-controls="patient"> <i class="fa fa-arrow-right"></i> Patient</a>
			<a class="list-group-item list-group-item-action" id="walkin-tab" data-toggle="list" href="#walkin" role="tab" aria-controls="messages"><i class="fa fa-arrow-right"></i> Walkin/s</a>
		</div>
	<div class="text-success text h5 mb-2"><i class="fa fa-th-list"></i> Report/s</div>
		<div class="list-group" id="list-tab" role="tablist">
			<a class="list-group-item list-group-item-action" id="patient-tab" data-toggle="list" href="#" role="tab" aria-controls="patient"> <i class="fa fa-arrow-right"></i> </a>
			<a class="list-group-item list-group-item-action" id="transaction-tab" data-toggle="list" href="#payment" role="tab" aria-controls="messages"><i class="fa fa-arrow-right"></i> Transaction/s</a>
			<a class="list-group-item list-group-item-action" id="walkin-tab" data-toggle="list" href="#walkin" role="tab" aria-controls="profile"><i class="fa fa-arrow-right"></i> Walkin</a>
			<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="fa fa-th-list"></i> Report/s</a>
		</div>
	<script>
		$('a[data-toggle="list"]').on('click', function (e){
		var tab = e.target.id;  
		switch(tab) 
		{
			case "patient-tab":
				$("#container").load(baseURL+"Cashier/viewPatient",function(){
					initPatient();
				});
			break;
			case "walkin-tab":
                $("#container").load(baseURL+"Cashier/viewCharges",function(){
					initCharges();
				});
			break;
			default:
		
			$("#container").load(baseURL+"Cashier/viewPatient",function(){
					initPatient();
				});
			break;
		}
	});
	</script>