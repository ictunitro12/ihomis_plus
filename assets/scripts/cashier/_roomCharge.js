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

