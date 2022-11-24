
function search(){
    $.session.remove('Cashierenccode'); 
    $.session.remove('Cashierhpercode'); 
    location.reload();
}

function initCashier(enccode,hpercode)
{
    var enctr =URLencode(enccode);
    PatientData(hpercode);
    CaseInformation(enccode);
    getInitialPayment(enctr);
    $.post( baseURL+'Cashier/accountInfo/'+enccode, function( data ) {$("#acctno").text(data['paacctno']);});

    $("#paymentList").load(baseURL+'Cashier/viewListItem');

    $("#modeOfCharges").load(baseURL+'Cashier/byChargeslip',function(){
        _tableCharges($.session.get('Cashierenccode'));
    });

    $("#roomFee").load(baseURL+'Cashier/viewRoom',function(){
        roomCharges(enccode);
    });

    $("#profservList").load(baseURL+'Cashier/viewProfserv',function(){
        professional(enccode);
    });

    $("#assist").load(baseURL+'Cashier/viewFundsource',function(){
        fundsource(enccode);
    });

    $("#philhealth").load(baseURL+'Cashier/viewPhic',function(){
        phic(enccode);
    });
}

function initCharges()
{
    $("#btnCharge").addClass('active');
    $("#btnPatient").removeClass('active');
    $("#btnRequest").removeClass('active');
    chargeList();
}

function initPatient()
{
    $("#btnCharge").removeClass('active');
    $("#btnPatient").addClass('active');
    $("#btnRequest").removeClass('active');
    if(($.session.get('Cashierenccode') !== undefined) && ($.session.get('Cashierhpercode') !== undefined))
    {
        initCashier($.session.get('Cashierenccode'),$.session.get('Cashierhpercode'));
    }
    else
    {
        $("#PatSearch").modal('show');
        $("#PatientImage").prop('src','assets/img/avatars/none.png');
    }
}

function charges(enccode,hpercode)
{
    var enctr = encodeURIComponent(encodeURIComponent(enccode));
    var data = new Object();
    data.link = baseURL+"Cashier/chargeLists/"+enctr+"/"+hpercode,
    data
    data.search = false;
    data.paging = true;
    data.info = false;
    data.orderable = false;
    data.id = "paymentbl";
    data.destroy = true;
    data.type = "POST";
    data.coldef =[
        {
            targets: [0,1],
            visible:false
        },
    ];
    loadTable(data);
}

function computePay(t)
{
    var amt = $("#itemAmt").val();
    var bal   = amt -t;
    $("#itemBal").val(bal);
}
        

function cheque(mop)
{
    if(mop=="X"){
        $("input[name='checkno']").attr('readonly',false);
        $("input[name='checkdate']").attr('readonly',false);
    }else if(mop=="C")
    {
        $("input[name='checkno']").attr('readonly',true);
        $("input[name='checkdate']").attr('readonly',true);
    }else{
        $("input[name='checkno']").attr('readonly',true);
        $("input[name='checkdate']").attr('readonly',true);
    }
}

$("#ModalPayment_modal").on('hidden.coreui.modal', function () {
    $('#toPayList').DataTable().clear().destroy();	
});		


function itemtoPay()
{	
    var data = new Object();
    data.id="toPayList";
    data.ordering=false;
    data.information=false;
    data.destroy= true;
    data.searching= false;
    data.rowsGroup= false;		
    data.info= false;
    return Datatable(data);
}


function itempayment()
{
    $("#itemEnccode").val($.session.get('Cashierenccode'));
    $("#itemHpercode").val($.session.get('Cashierhpercode'));
    $("#itemAccount").val($("#acctno").text());
    $("#formtype").val('insert');
var table=  $('#toPayList').DataTable({	
"oLanguage": {
"sProcessing": '<div class="spinner-grow text-success"><span >Loading...</span></div>'},
"scrollCollapse": true,
"Processing": true,
"fixedColumns": true,
"destroy": true,
"searching":false,
"paging":false,
"info":false,
"ordering":false,
"columnDefs":[
{
targets:[4,5,6],
visible:false

},



],
"footerCallback" : function ( row, data, start, end, display ) {
    var api = this.api(), data;
        // Remove the formatting to get integer data for summation
        var intVal = function ( i ) {
            return typeof i === 'string' ?
                i.replace(/[\$,]/g, '')*1 :
                typeof i === 'number' ?
                    i : 0;
        };
        
         totalAmount = api
            .column( 3, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );
        $( api.column(3).footer() ).html(totalAmount);
        $("#balanceAmt_item").val(totalAmount);
}
});

$("#itemToPay").load(baseURL+'Cashier/toPay');
var rowData =chargesLists.rows('.pay').data();
if(rowData.count() > 0)
     {
        $.each(rowData, function (i, d) {
             table.row.add([
                d[2],//0
                d[3],//1
                d[4],//2
                d[5],//3
                d[8],//4
                d[9],//5
                '<input type ="hidden" name="row[]" value="'+i+'">'
                ]).draw(true);
        });
        $('#example').DataTable().ajax.reload();
        $("#ModalPayment_modal").modal({backdrop:true,show:true});
     }else {
         toastr.error('Select item first!','Alert!');
     }
}




$('#byChargeSlip').on('change',function(){
    if(this.checked == true){
        $("#ordate").attr('disabled',false);
        $("#tenderedAmt").attr('disabled',false);
        $("#orno").attr('disabled',false);
        $("#balanceAmt").attr('disabled',false);
        $("#ordate").val(getTimeLocale());
    }else if (this.checked == false){
        $("#ordate").val('');
        $("#balanceAmt").val('');
        $("#ordate").attr('disabled',true);
        $("#tenderedAmt").attr('disabled',true);
        $("#orno").attr('disabled',true);
        $("#balanceAmt").attr('disabled',true);
    }else{
    }
});



$("#tenderedAmt").blur(function() {
this.value = parseFloat(this.value).toFixed(2);
});


function modeof(val){
    $("#paymentbl").DataTable().clear();
    if(val == '1'){
        $("#modeOfCharges").load(baseURL+'Cashier/byChargeslip',function(){
            _tableCharges($.session.get('Cashierenccode'));
        });
    }else if (val == '2'){
        $("#modeOfCharges").load(baseURL+'Charges/radioCharges',function(){
            $("#paymentbl").DataTable().clear().draw();
        });
    }else{
        $("#modeOfCharges").load(baseURL+'Cashier/byChargeslip',function(){
            _tableCharges($.session.get('Cashierenccode'));
        });
    }
}

 function getInitialPayment(enccode){

    $.post( baseURL+'Cashier/initialPayment/'+enccode, function( data ) {
        if(data != false ){
            $('#initPayment').val(formatNumber(data));
            $("#btnInitial").prop('disabled',true);
        }else{
            $("#btnInitial").prop('disabled',false);
        }
        });
 }