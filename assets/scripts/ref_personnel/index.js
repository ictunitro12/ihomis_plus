var table = $("#personnelTable");

function employeeList() {
	var data = new Object();
	data.id = "personnelTable";
	data.link = baseURL + "Ref_Personnel/PersonnelList";
	data.type = "POST";
	data.coldef = [{
		targets: [4],
		searchable: false,
		orderable: false,
		render: function (data, type, row) {
			switch (data) {
				case 'A': return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
				case 'I': return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
				default: return '<span> </span>';
			}
		},
	}];
	loadTable(data);
}