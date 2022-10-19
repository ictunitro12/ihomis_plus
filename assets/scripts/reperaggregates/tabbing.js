	function initTabb(from,to)
	{
		_tab_by_tab(from,to);
	}
	
	function _tab_by_tab(from,to)
	{
		$('a[data-toggle="tab"]').on('click', function (e){
		var tab = e.target.id;
			switch(tab) {
			  case "bysex-tab":
				BySex(from,to);
				break;
			  case "byattendphys-tab":
				ByAttendingPhys(from,to);
				break;
			  case "bydisease-tab":
				ByDisease(from,to);
				break;
			  case "bydaysadm-tab":
				ByDayOfAdmission(from,to);
				break;
			  case "bydaydisc-tab":
				ByDischargeDate(from,to);
				break;
			  default:
			}
		});
	}

	

	
	