function initTabb() {
	_tab_by_tab();
}

function _tab_by_tab() {
	$('a[data-toggle="tab"]').on('click', function (e) {
		var tab = e.target.id;
		switch (tab) {
			case "icd-tab":
				Icd10List();
				break;
			case "exam-tab":
				ExamStdList();
				break;
			case "drugs-tab":
				DrugsMedsList();
				break;
			case "supplies-tab":
				Supply_List();
				break;
			case "miscellaneous-tab":
				MiscellaneousList();
				break;
			case "package-tab":
				PackageList();
				break;
			default:
		}
	});
}




