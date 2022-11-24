function chargesLists()
{
    var chargesLists=  $('#paymentbl').DataTable({	
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

    if(data[10]=='P' || data[10]=='F')
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
    // Output TotalAmount
    $( api.column(5).footer() ).html(formatNumber(amount));
    
    // Output Paid
    $( api.column(6).footer() ).html(formatNumber(paid));
    
    // Output Balance
    $( api.column(7).footer() ).html(formatNumber(balance));
    }
    });	
    return chargesLists;
}



function _tableCharges(enctr)
{
 
    var data = new Object();
        data.id="chargestbl";
        data.link=baseURL+"Cashier/chargeLists",
        data.data={enctr:enctr};
        data.type="POST";
        data.ordering=false;
        data.info=false;
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
                            d['orno'],//12
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
 
        var filteredData =  chargesLists()
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
        console.log(obj);
            $.each(obj, function (i, d) {
                console.log(obj);
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
