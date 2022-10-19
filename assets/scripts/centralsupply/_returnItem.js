function returnTable(enccode)
{
 var return_tbl= $('#supplyReturn').DataTable({
    "ajax" : baseURL+"Central_Supply/getDrugIssued/"+URLencode(enccode),
    "aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
    "serverside":true,
    "processing":true,
    "select":{
        select: true,
        style: 'multi',
        selector: 'td:not(:nth-child(0))',
        className:'bg-success text-white selectReturn'},
    "rowsGroup": [3],
    "responsive": true,
    "destroy":true,
    "searching":true,
    "paging":true,
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
                        {							
                            return "<input type='datetime-local' class='form-control form-control-sm' step=1  name='returnDate[]' id='returnDate"+meta.row+"' placeholder='mm/dd/yyyy'>";
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
                        data:"description",
                        render: function(data, type, row,meta)
                        {
                            return  data;
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
                            return "<input type='number' min=1 max ='"+data+"' class='form-control form-control-sm' value="+data+" readonly name='qtyissued[]' id='qtyissued"+meta.row+"' value='"+data+"' placeholder='0'>";
                        }
                    },
                    {
                        render: function(data, type, row,meta)
                        {							                             
                            return "<input type='number' min=0 max= "+row.qtyissued+"  class='form-control form-control-sm'  name='qtyreturn[]' id='qtyreturn' placeholder='0'>";
                        }
                    },
                {data:"remarks",
                    render: function(data, type, row,meta)
                    {							                     
                        if(data ==null){
                            return "<input type='text'  class='form-control form-control-sm'  name='remarks[]' id='remarks' placeholder='Remarks'>";
                        }else{
                            return "<input type='text' value="+data+"  class='form-control form-control-sm'  name='remarks[]' id='remarks' placeholder='Remarks'>";
                        }
                       
                    }
                },
                {data:"cl2comb"},//10
                {data:"chrgcode"},//12
                {data:"cl2dteas"},//13
                {data:'docointkey'},//14
                {data:'enccode'},//15
                {data:'hpercode'},//16
                {data:'uomcode'},//16
                {data:'pchrgup'},//1
                    ],
                   "columnDefs": [
                    { 
                        "visible":false, "targets": [8,9,10,11,12,13,14,15,16] 
                    },
                    { 
                        "className":"align-middle", 
                        "targets": ["_all"]
                    }],
});

    $('#supplyReturn tbody').on('change', '#qtyreturn', function () {
         var row=$(this).closest("tr"); 
         var qtyissued=$(return_tbl.cell(row, 6).node()).find('input').val();
         var qtyreturn=$(return_tbl.cell(row, 7).node()).find('input').val();
         var  total_left=qtyissued - qtyreturn;
    });
    
    $("#supplyReturn").on('click','tr',function(){
        var selectedData= $(this).hasClass('selectReturn');
            if(selectedData==true ){
                $("button[name='returnItem']").prop('disabled',true);
            }else{
                $("button[name='returnItem']").prop('disabled',false);
            }
     });

}


