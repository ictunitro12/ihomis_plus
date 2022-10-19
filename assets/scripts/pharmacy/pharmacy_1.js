var baseURL=$('#base_url').val();

/* GET PHARMACY INFORMATION */
function PharmacyInformation(licno){
	
	var data;
	var Obj = new Object();
	Obj.type="POST";
	Obj.url= baseURL+'Pharmacy/PharmacyInformation/'+licno;
	Obj.data="JSON";
	data=Information(Obj);

	$("#empid").text(data['employeeid']);
	$("#licno").text(data['licno']);
	$("#pharmacyname").text(data['empprefix']+'.'+data['firstname']+','+data['lastname']);
	$("#sex").text(data['provsex']);
	$("#dateofbirth").text(data['provbdate']);
	$("#deptname").text(data['deptname']);
	$("#postitle").text(data['postitle']);
	$("#accountno").text(data['accno']);
	var picture = data['photo'];

	if (picture === '' || picture ===null)
	{
		$("#PharmacyImage").prop('src', baseURL+'assets/img/avatars/none.png'); 
	}
	else
	{
		$("#PharmacyImage").prop('src', baseURL+picture);
	}
}

/* GET DOCTORS ORDER */
function doctors_order(){

	$('#drugsAndMeds_tbl').DataTable({
		"ajax" : baseURL+"Pharmacy/doctors_order",
		"columns" : [
			{ render: function(data, type, row){
				return row.patlast + ", " + row.patfirst + " " + row.patmiddle;
			}},
			{ data : "dodate" },
			{ render: function(data, type, row){
				return row.gendesc1 + ", " + row.dmdnost2 + ", " + row.formdesc1 + ", " + row.rtedesc1;
			}},
			{ data : "pcchrgcod" },
			{ data : "pchrgqty" },
			{ data : "pchrgup" },
			{ render: function(data, type, row){
				var tot = row.pchrgqty * row.pchrgup;
				return tot.toFixed(2);
			}},
			{ data : "uomcode" },
			{ data : "qtyissued" },
			{ data : "qtybal" },
			{ render: function(data, type, row){
				return (row.estatus == 'S' ? 'Served' : (row.estatus == 'P' ? 'Partially Serve' : 'Unserved'));
			}}
		]
	});
}

/* INITIALIZE MODALS */
function modalsInit(){
	
	$(".ModalPharmacyIssuance").on('click',function(){
		
		$("#ModalPharmacyIssuance").modal({backdrop: "static"});
		$('#ModalPharmacyIssuance').modal('show');
	});
	
	$(".ModalPharmacyReturn").on('click',function(){
		
		$("#ModalPharmacyReturn").modal({backdrop: "static"});
		$('#ModalPharmacyReturn').modal('show');
	});
	
	$(".ModalPharmacyReplenish").on('click',function(){
		
		$("#ModalPharmacyReplenish").modal({backdrop: "static"});
		$('#ModalPharmacyReplenish').modal('show');
	});
	
	$(".ModalPharmacySuppliesStock").on('click',function(){
		
		$("#ModalPharmacySuppliesStock").modal({backdrop: "static"});
		$('#ModalPharmacySuppliesStock').modal('show');
		
		supplies_stocks();
	});
	
	$(".ModalPharmacyDMStock").on('click',function(){
		
		$("#ModalPharmacyDMStock").modal({backdrop: "static"});
		$('#ModalPharmacyDMStock').modal('show');
		
		dm_stock();
	});
	
	$(".ModalPharmacyDeliveries").on('click',function(){
		
		$("#ModalPharmacyDeliveries").modal({backdrop: "static"});
		$('#ModalPharmacyDeliveries').modal('show');
		
		deliveries();
	});
	
	/* DRAGGABLE */
	$(".modal-header").on("mousedown", function(mousedownEvt){
		
		var $draggable = $(this);
		var x = mousedownEvt.pageX - $draggable.offset().left,
			y = mousedownEvt.pageY - $draggable.offset().top;
			
		$("body").on("mousemove.draggable", function(mousemoveEvt){
			$draggable.closest(".modal-content").offset({
				"left": mousemoveEvt.pageX - x,
				"top": mousemoveEvt.pageY - y
			});
		});
		
		$("body").one("mouseup", function(){
			
			$("body").off("mousemove.draggable");
		});
		
		$draggable.closest(".modal").one("bs.modal.hide", function(){
			
			$("body").off("mousemove.draggable");
		});
	});
}
