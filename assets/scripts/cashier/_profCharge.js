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
