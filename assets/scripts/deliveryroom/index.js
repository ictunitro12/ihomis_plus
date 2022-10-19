var Module=$('#module').val();

function initDeliveryRoom()
{
	DeliveryRoomList();
}

function DeliveryRoomList()
{
	var data = new Object();
	data.id = "DeliveryRoomTable";
	data.link = "DeliveryRoom/DeliveryRoomList";
	data.type = "POST";
	data.coldef=[
	{
		targets : [3,4,5,6],
		visible:false,
	},

	{
		targets : [0,1,2,3,4],
		orderable:false,
	},


	];
	loadTable(data);
}

$("a[name='btnRegister']").on('click',function(){
	setCookie('fromModule','er','1');
});

$("a[name='btndeliverycode']").on('click',function(){
	setCookie('tscode','BIRTH','1');
});
