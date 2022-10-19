
function initPatMed(enccode)
{
	getPatientOrderMeds(enccode);
}

/* GET DOCTORS ORDER */
function getPatientOrderMeds(enccode)
{
	var enctr= encodeURIComponent(encodeURIComponent(enccode));
	var drugsAndMeds_tbl = $('#drugsAndMeds_pat').DataTable({
		"ajax" : baseURL+"Pharmacy/getPatientOrder/"+enctr,
		 "aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		 "destroy":true,
		 "columns" : [
			{ data : "dodate" },
			{ data : "pcchrgcod" },
			{ render: function(data, type, row){
				return "<small>"+ row.gendesc1 + ", " + row.dmdnost2 + ", " + row.formdesc1 + ", " + row.rtedesc1+ "</small>";
			}},
			{ data : "pchrgqty" },
			{ data : "pchrgup" },
			{ render: function(data, type, row){
				var tot = row.pchrgqty * row.pchrgup;
				return tot.toFixed(2);
			}},
			{ data : "qtyissued" },
			{ data : "qtybal" },
			{ render: function(data, type, row){
				return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial</div>' : '<div class="p-1 bg-secondary text-white">Unserved</div>'));
			}},
			{ render: function(data, type, row){
				return (row.dopriority == 'ROUTIN' ? '<div class="p-1 bg-primary text-white">ROUTINE</div>' : (row.dopriority == 'STAT' ? '<div class="p-1 bg-danger text-white">URGENT!</div>' : '<div class="p-1 bg-secondary text-white">NONE</div>'));
			}},
			{
			data: "enccode",
			render: function(data, type, row){
				
				return "<div class='btn-group' role='group'><button id='btnGroupDrop1'  type='button' class='btn btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>"
				+"<i class='fa fa-refresh'></i>"
				+"</button>"
				+"<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>"
				+"<a class='dropdown-item' id='btnIssuePat' data-enccode ='"+data+"' href='#'><i class='fa fa-thumbs-up'></i>&nbspIssue</a>"
				+"<a class='dropdown-item' id='btnReturn' data-enccode ='"+data+"' href='#'><i class='fa fa-exclamation'></i>&nbsp Return</a></div>"
				+"</div>";
			}	
			}],
			

	});
}

