
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
    modeof('');
    $("#modeofCharge1").prop('checked',true);

    $("#paymentList").load(baseURL+'Cashier/viewListItem',function(){
         _tableCharges(enctr);    
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
    })
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

function professional(enccode)
{
    var data = new Object();
    data.id = "profserv";
    data.ordering = false;
    data.link = baseURL+"Cashier/ProfessionalService",
    data.type = "POST";
    data.data = {enccode:enccode};
    data.columns = [ 
        {data:"name"},
        {data:"doctype",
    
        render:function(data,row){
            switch (data){
             case"ADMIT":
                return'Admitting';
                break;
             case"ATTEN":
                return'Attending';
                break;
             default:
                return "";
                break
            }
        }
        },
        {data:"pfamt",
            render:function(data,row){
                return formatNumber(data);
            }
        },
        {data:"pfdisc",
            render:function(data, type, row){
            if(row.pfdisctyp  ==='P' ){
                return parseInt(data) +'%';
            }else{
                return formatNumber(parseInt(data));
            }
        }},
        {data:"pftotamt",
            render:function(data,row){
                return formatNumber(data);
            }
        },
        {data:"pfnotes"}
    ];
    data.footerCallback =  function ( row, data, start, end, display ) {
        var api = this.api(), data;

        // Remove the formatting to get integer data for summation
        var intVal = function ( i ) {
            return typeof i === 'string' ?
                i.replace(/[\$,]/g, '')*1 :
                typeof i === 'number' ?
                    i : 0;
        };
        
        
        // Total over all pages
        total = api
            .column(4)
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        // Total over this page
        pageTotal = api
            .column( 4, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        // Update footer
        $( api.column(4).footer() ).html(formatNumber(pageTotal.toFixed(2,0)));
        
        };
   Datatable(data);
}


function roomCharges(enccode)
{
    var data = new Object();
    data.id = "roomCharges";
    data.ordering = false;
    data.link = baseURL+"Cashier/roomCharges",
    data.type = "POST";
    data.data = {enccode:enccode};
    data.columns = [ 
        {data:"chrgdesc"},
        {data:"rmrate"},
        {data:"pcchrgamt",
        render:function(data,row){
            return formatNumber(data);
        }
    },
  ];

  data.footerCallback =  function ( row, data, start, end, display ) {
    var api = this.api(), data;

    // Remove the formatting to get integer data for summation
    var intVal = function ( i ) {
        return typeof i === 'string' ?
            i.replace(/[\$,]/g, '')*1 :
            typeof i === 'number' ?
                i : 0;
    };
    
    
    // Total over all pages
    total = api
        .column(2)
        .data()
        .reduce( function (a, b) {
            return intVal(a) + intVal(b);
        }, 0 );

    // Total over this page
    pageTotal = api
        .column(2, { page: 'current'} )
        .data()
        .reduce( function (a, b) {
            return intVal(a) + intVal(b);
        }, 0 );

    // Update footer
    $( api.column(2).footer() ).html(formatNumber(pageTotal.toFixed(2,0)));
    
    };
   Datatable(data);
}




function fundsource(enccode)
{
    var data = new Object();
    data.id = "fundsource";
    data.ordering = false;
    data.link = baseURL+"Cashier/fundsource",
    data.type = "POST";
    data.data = {enccode:enccode};
    data.columns = [ 
        {data:"trandate"},
        {data:"refdate"},
        {data:"funddesc"},
        {data:"amount",
            render:function(data,row){
                return formatNumber(data);
            }
        },
  ];

  data.footerCallback =  function ( row, data, start, end, display ) {
    var api = this.api(), data;

    // Remove the formatting to get integer data for summation
    var intVal = function ( i ) {
        return typeof i === 'string' ?
            i.replace(/[\$,]/g, '')*1 :
            typeof i === 'number' ?
                i : 0;
    };
    
    
    // Total over all pages
    total = api
        .column(3)
        .data()
        .reduce( function (a, b) {
            return intVal(a) + intVal(b);
        }, 0 );

    // Total over this page
    pageTotal = api
        .column(3, { page: 'current'} )
        .data()
        .reduce( function (a, b) {
            return intVal(a) + intVal(b);
        }, 0 );

    // Update footer
    $( api.column(3).footer() ).html(formatNumber(pageTotal.toFixed(2,0)));
    
    };
   Datatable(data);
}

function phic(enccode)
{
    var data = new Object();
    data.id = "phicTable";
    data.ordering = false;
    data.link = baseURL+"Cashier/phic",
    data.type = "POST";
    data.data = {enccode:enccode};
    data.columns = [ 
        {data:"casedesc"},
        {data:"icd"},
        {data:"dischargediag"},
        {data:"philhealthbenehci",
            render:function(data,row){
                return formatNumber(data);
            }
        },
  ];

  data.footerCallback =  function ( row, data, start, end, display ) {
    var api = this.api(), data;

    // Remove the formatting to get integer data for summation
    var intVal = function ( i ) {
        return typeof i === 'string' ?
            i.replace(/[\$,]/g, '')*1 :
            typeof i === 'number' ?
                i : 0;
    };
    
    
    // Total over all pages
    total = api
        .column(3)
        .data()
        .reduce( function (a, b) {
            return intVal(a) + intVal(b);
        }, 0 );

    // Total over this page
    pageTotal = api
        .column(3, { page: 'current'} )
        .data()
        .reduce( function (a, b) {
            return intVal(a) + intVal(b);
        }, 0 );

    // Update footer
    $( api.column(3).footer() ).html(formatNumber(pageTotal.toFixed(2,0)));
    
    };
   Datatable(data);
}


function outsideCharges(enccode,hpercode)
{
    var data = new Object();
    data.id = "outsideCharges";
    data.ordering = false;
    data.link = baseURL+"Cashier/outsideCharges",
    data.type = "POST";
    data.data = {enccode:enccode,hpercode:hpercode};
    data.columns = [ 
        {data:"pcchrgdte"},
        {data:"pcchrgcod"},
        {data:"itemdesc"},
        {data:"pchrgup",
            render:function(data,row){
                return formatNumber(data);
            }
        },
        {data:"pchrgqty"},
        {data:"amount",
        render:function(data,row){
            return formatNumber(data);
        }
    },
  ];

  data.footerCallback =  function ( row, data, start, end, display ) {
    var api = this.api(), data;

    // Remove the formatting to get integer data for summation
    var intVal = function ( i ) {
        return typeof i === 'string' ?
            i.replace(/[\$,]/g, '')*1 :
            typeof i === 'number' ?
                i : 0;
    };
    
    
    // Total over all pages
    total = api
        .column(5)
        .data()
        .reduce( function (a, b) {
            return intVal(a) + intVal(b);
        }, 0 );

    // Total over this page
    pageTotal = api
        .column(5, { page: 'current'} )
        .data()
        .reduce( function (a, b) {
            return intVal(a) + intVal(b);
        }, 0 );

    // Update footer
    $( api.column(5).footer() ).html(formatNumber(pageTotal.toFixed(2,0)));
    
    };
   Datatable(data);
}

function charges(enccode,hpercode)
{
    var enctr = encodeURIComponent(encodeURIComponent(enccode));
    var data = new Object();
    data.link = baseURL+"Cashier/chargeLists/"+enctr+"/"+hpercode,
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
    var chargetable =loadTable(data);
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

function _tableCharges(enctr)
{
    var data = new Object();
        data.id="chargestbl";
        data.link=baseURL+"Cashier/chargeLists/"+enctr,
        data.type="POST";
        data.ordering=false;
        data.information=false;
        data.destroy= true;
        data.searching= false;
        data.rowsGroup= false;
        data.select = {
            style: 'multi',
            className:'bg-success text-white select'
        };		
        data.info= false;
        data.draw=function( settings ) {
            var api = this.api();
            if (api.column(0).data().length>0) {
                api.rows().select();
                var rowData = api.rows().data();
            $.each(rowData, function (i, d) {
                var slip = d['pcchrgcod'];
                var type=d['pcchrgcod'].substr(0,1);
           //     $.post(baseURL+'Cashier/chargeItems/'+slip+'/'+type,function(data){		
            $.post(baseURL+'Cashier/chargeItems',{
                slip: slip,
                type: type
              },function(data){	
                    var obj=$.parseJSON(data);
                        $.each(obj, function (i, d) {
                            chargesLists().row.add([
                            d['pcchrgdte'],//0
                            d['descs'],//01
                            d['pcchrgcod'],//02
                            d['chrgdesc'],//03
                            d['uomdtl'],//04
                            d['pcchrgamt'],//05
                            d['amount'],//07
                            d['balance'],//08
                            d['itemcode'],//09
                            d['chrgcode'],//10
                            d['paytype'],//11
                            d['orno'],//11
                            ]).draw(false);
                            });
                            
                        });
                        });
            }
            
        };
        data.columns=[{data:"pcchrgcod"}];
        data.coldef=[{
            target:["_all"],
            className:"no-wrap"
        }];
        sliplist = Datatable(data);



    sliplist.on('click','tr', function (){
        var rowData= $("#chargestbl").DataTable().row(this).data();
        var slipno= URLencode(rowData['pcchrgcod']);
        var type=rowData['pcchrgcod'].substr(0,1);
    
    if ($(this).hasClass('select')) {
    
        var filteredData = chargesLists()
                .rows()
                .indexes()
                .filter( function ( value, index ) {
                    return chargesLists().row(value).data()[2] == slipno; 
                });
                chargesLists().rows(filteredData)
                .remove()
                .draw();
            
    } else {
        $.post(baseURL+'Cashier/chargeItems/'+slipno+'/'+type,function(data){		
        var obj=$.parseJSON(data);
            $.each(obj, function (i, d) {
                chargesLists().row.add([
                d['pcchrgdte'],//0
                d['descs'],//01
                d['pcchrgcod'],//02
                d['chrgdesc'],//03
                d['uomdtl'],//04
                d['pcchrgamt'],//05
                d['amount'],//07
                d['balance'],//08
                d['itemcode'],//09
                d['chrgcode'],//10
                d['paytype'],//11
                d['orno'],//11
                ]).draw(false);
        });
        }); 
    }
    });	
}

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
var rowData =chargesLists().rows('.pay').data();
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


function chargesLists()
{
    var chargesPat=  $('#paymentbl').DataTable({	
            "scrollY":"400px",
            "scrollX":true,
             "scrollY":true,
             "select":{
                style:'multi',
                className:'table-warning text-white pay'
             },
             "oLanguage": {
            "sProcessing": '<div class="spinner-grow text-success"><span >Loading...</span></div>'},
            "scrollCollapse": true,
            "Processing": true,
            "fixedColumns": true,
            "searching":false,
            "info":false,
            "ordering":false,
            "destroy":true,	
            "paging":false,
            "columns":[
                {data:0},//date
                {data:1},//type
                {data:2},//slipno
                {data:3},//description
                {data:4},//qty
                {data:5},//amount
                {data:6,
                    render:function(data){
                    if(data == '' ||  data==null){
                        return 0;
                    }else{
                        return data;
                    }

                    },
                },//paid
                {data:7,
                    render:function(data){
                        if(data == '' ||  data==null){
                            return 0;
                        }else{
                            return data;
                        }
    
                
                
                }
            },//balance
                {data:8},
                {data:9},
                {data:10},
                {data:11}
            ],
            "columnDefs":[
                {
                    targets:[4],
                    className:"text-center" 
                },
            
                {
                    targets:[8,9,10],
                    visible:false
                }
                
            ],
            "drawCallback": function ( settings ) {
                var api = this.api();
                var rows = api.rows( {page:'_all'} ).nodes();
                var last=null;
                api.column(2, {page:'_all'} ).data().each( function ( group, i ) {
                    if ( last !== group ) {
                        $(rows).eq( i ).before(
                            '<tr    data-slipno="'+group+'" class="group text-left"><td colspan="10"><b>Chargeslip # : '+group+'</b></td></tr>'
                        );
     
                        last = group;
                    }
                });
        },
        
    "rowCallback" : function ( row, data, start, end, display ) {
        if(data[10]=='F')
        {
             $('td', row).css('background-color', 'pink');
             $('td', row).prop('disabled',true);   
        }
    
        },
        "footerCallback" : function ( row, data, start, end, display ) {
        var api = this.api(), data;

        // Remove the formatting to get integer data for summation
        var intVal = function ( i ) {
            return typeof i === 'string' ?
                i.replace(/[\$,]/g, '')*1 :
                typeof i === 'number' ?
                    i : 0;
        };
        // Total Amount
        totalAmt = api
            .column( 5, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );
            
        // Total Paid
        totalPaid = api
            .column( 6, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );
            
        // Total Balance
        totalBalance = api
            .column( 7, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );
        
            
        var amount=totalAmt.toFixed(2,0);
        var paid=totalPaid.toFixed(2,0);
        var balance=totalBalance.toFixed(2,0);
        // Total over all pages
        Total = api
            .column(5)
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );
            
        var Gtotal =amount - paid;
     
        $("#gTotal_ChargeSlips").text(Gtotal.toFixed(2,0));

        // Output TotalAmount
        $( api.column(5).footer() ).html(formatNumber(amount));
        
        // Output Paid
        $( api.column(6).footer() ).html(formatNumber(paid));
        
        // Output Balance
        $( api.column(7).footer() ).html(formatNumber(balance));
        }
        });	
        return chargesPat;
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
    
    if(val == '1'){
        $("#modeOfCharges").load(baseURL+'Cashier/byChargeslip',function(){
            _tableCharges(URLencode($.session.get('Cashierenccode')));
        });
    }else if (val == '2'){
        $("#modeOfCharges").load(baseURL+'Charges/radioCharges',function(){
            $("#paymentbl").DataTable().clear().draw();
        });
    }else{
        $("#modeOfCharges").load(baseURL+'Cashier/byChargeslip',function(){
            _tableCharges(URLencode($.session.get('Cashierenccode')));
        });
    }
}


function allCharges(enccode)
 {
var enctr= encodeURIComponent(encodeURIComponent(enccode));
var Obj = new Object();
    Obj.type = "POST";
    Obj.url= baseURL+'Cashier/allCharges/'+enctr;
    Obj.data = "JSON";
    var jsonObj =Information(Obj);

    var table =$("#paymentbl").DataTable({
     data: jsonObj,
     serverside: true,
     processing: true,
     language:{
        'processing': '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'
        },  
     destroy: true,
     className:'table table-sm table-responsive table-bordered table-striped table-hovered',
        columns: [
            {"data" : "pcchrgdte"},
            {"data" : "pcchrgcod"},
            {"data" : "chrgdesc"},
            {"data" : "uomdtl"},
            {"data" : "pcchrgamt"},
            {"data" : "amt"}
        ],
        columnDefs :[ 
        { 
            targets:[1],
            visible:false
        },
        {
            targets:[4],
             render: $.fn.dataTable.render.number( ',', '.', 2 ),
        },
    
     ],
        footerCallback: function ( row, data, start, end, display ) {
        var api = this.api(), data;

        // Remove the formatting to get integer data for summation
        var intVal = function ( i ) {
            return typeof i === 'string' ?
                i.replace(/[\$,]/g, '')*1 :
                typeof i === 'number' ?
                    i : 0;
        };
        
        
        // Total over all pages
        total = api
            .column(4)
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        // Total over this page
        pageTotal = api
            .column( 4, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        // Update footer
        $( api.column(4).footer() ).html(
            '<input type="text" id="TotalAmount" name="TotalAmount" class="form-control form-control-md" readonly value="'+ formatNumber(pageTotal.toFixed(2,0))+'">'
        );
        
        }
     });  		
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