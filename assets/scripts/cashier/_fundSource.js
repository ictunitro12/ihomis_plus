
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
