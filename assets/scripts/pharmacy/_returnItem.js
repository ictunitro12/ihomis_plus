function returnTable(enccode)
{
 var return_tbl= $('#drugMedsReturn').DataTable({
    "ajax" : baseURL+"Pharmacy/getDrugIssued/"+URLencode(enccode),
    "aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
    "serverside":true,
    "processing":true,
    "select":{  
        select: true,
        style: 'multi',
        selector: 'td:not(:nth-child(2),:nth-child(8))',
        className:'bg-success text-white selectReturn'},
    "responsive": true,
    "destroy":true,
    "searching":true,
    "paging":true,
    "rowCallback" :function ( row, data, start, end, display ) {
        var qty=  data['qtyreturn'] - data['qtyissued'];
        if(qty==0)
        {
            $('td', row).prop('disabled',true);  
        }
    },
    "bSort":false,
        "columns" : [
                    {
                        data:"issuedte",
                        render: function(data, type, row,meta)
                        {							
                            return data;
                        }
                    },
                    {
                        data:null,
                        render: function(data, type, row,meta)
                        {	if(row.qtyissued == 0)
                            {
                              return "<input type='datetime-local' class='form-control form-control-sm' step=1  name='returnDate[]'  disabled id='returnDate"+meta.row+"' placeholder='mm/dd/yyyy'>";
                            }else{
                              return "<input type='datetime-local' class='form-control form-control-sm' step=1  name='returnDate[]' id='returnDate"+meta.row+"' placeholder='mm/dd/yyyy'>";
                            }
                        }
                    },
                    {  
                        data : "pcchrgcod",
                        render: function(data, type, row,meta)
                        {							
                            return data;
                        }
                    },
                    {
                        data:"lotno",	
                        render: function(data, type, row,meta)
                        {							
                            return data;
                        }
                    },
                    { 
                        data:null,
                        render: function(data, type, row,meta)
                        {
                            return "<small>"+ row.gendesc1 + ", " + row.dmdnost2 + ", " + row.formdesc1 + "</small>";
                        }
                    },
                    {
                        data:"dopriority",
                        render: function(data, type, row,meta)
                        {
                            return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial</div>' : '<div class="p-1 bg-info text-white">Unserved</div>'));
                        }
                    },
                    {
                        data:"qtyissued",
                        render: function(data, type, row,meta)
                        {							
                           return parseInt(data) - parseInt(row.qtyreturn);
                        }
                    },
                    {   data:null,
                        render: function(data, type, row,meta)
                        {		
                            if(row.qtyissued == 0)
                            {
                                return "<input type='number' min=0 max= "+row.qtyissued+"  class='form-control form-control-sm' disabled  name='qtyreturn[]' id='qtyreturn' placeholder='0'>";
                            }else{
                                return "<input type='number' min=0 max= "+row.qtyissued+"  class='form-control form-control-sm'  name='qtyreturn[]' id='qtyreturn' placeholder='0'>";
                            }					                             
                           
                        }
                    },
                    
                {data:"remarks",
                    render: function(data, type, row,meta)
                    {							                     
                        if(data ==null){
                            return "<input type='text'  class='form-control form-control-sm'  name='remarks[]' id='remarks' placeholder='Remarks'>";
                        }else{
                            return "<input type='text' value='"+data+"'  class='form-control form-control-sm'  name='remarks[]' id='remarks' placeholder='Remarks'>";
                        }
                       
                    }
                },
                {data:"dmdcomb"},//10
                {data:"dmdctr"},//11
                {data:"chrgcode"},//12
                {data:"dmdprdte"},//13
                {data:'docointkey'},//14
                {data:'enccode'},//15
                {data:'hpercode'},//16
                {data:'uomcode'},//16
                {data:'pchrgup'},//1
                    ],
                   "columnDefs": [
                    { 
                        "visible":false, "targets": [8,9,10,11,12,13,14,15,16,17] 
                    },
                    { 
                        "className":"align-middle", 
                        "targets": ["_all"]
                    }],
});

    $('#drugMedsReturn tbody').on('change', '#qtyreturn', function () {
         var row=$(this).closest("tr"); 
         var qtyissued=$(return_tbl.cell(row, 6).node()).find('input').val();
         var qtyreturn=$(return_tbl.cell(row, 7).node()).find('input').val();
         var  total_left=qtyissued - qtyreturn;
    });
    
    $("#drugMedsReturn").on('click','tr',function(){
        var selectedData= $(this).hasClass('selectReturn');
            if(selectedData==true ){
                $("button[name='returnItem']").prop('disabled',true);
            }else{
                $("button[name='returnItem']").prop('disabled',false);
            }
     });

}


