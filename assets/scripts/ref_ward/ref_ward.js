
function  vacantlist(sex)
{
	var vacant = $('#vacant_tbl').DataTable({
		"ajax" : baseURL+"Ref_ward/vacantBeds/"+sex,
		"aLengthMenu": [[10,15, 20, -1], [10,15,20,"All"]],
		"processing":true,
		"info":false,
		"lengthChange":false,
		"serverside":true,
		"rowsGroup":[3,4],
		"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
		"destroy":true,
		"columns" : [ 
			{ data : "wardcode" },
			{ data : "rmintkey" },
			{ data : "bdintkey" },
			{ data : "wardname" },
			{ data : "rmname" },
			{ data : "bdname" }
			],
			columnDefs: [
			{
				targets: [0,1,2],
				visible:false
			},
			{
				targets: [3,4],
				className: 'align-middle'
			},
			{
				targets: [3,4],
				className: 'text-center'
			}]

    });
		vacant.on("click",'tr',function(e){
		var wardData = vacant.row(this).data();
			$('[name $="_Bed"]').val(wardData['bdname']);
			$('[name $="_Room"]').val(wardData['rmname']);
			$('[name $="_Ward"]').val(wardData['wardname']);
			$('[name $="_bdintkey"]').val(wardData['bdintkey']);
			$('[name $="_rmintkey"]').val(wardData['rmintkey']);
			$('[name $="_wardcode"]').val(wardData['wardcode']);
		});
}

function bedinfo(bdcode){	
 var result = null;
     var scriptUrl =  baseURL+"Ref_Ward/bedInfo/"+bdcode;
     $.ajax({
        url: scriptUrl,
        type: 'get',
        dataType: 'json',
        async: false,
        success: function(data) {
            result = data;
        } 
     });
     return result;
}