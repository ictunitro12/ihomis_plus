<table id="en_jev" style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
        <thead>
            <tr>
                <th  width="25%">JEV NO</th>
                <th width="25%" >Account #</th>
                <th  width="25%">Patient name</th>
                <th width="5%"></th>
            </tr>
        </thead>
</table>


<form id="frmPatientTransactions" name="frmPatientTransactions" method="post">
	<div class="modal" id="modalPatientTransaction" name="modalPatientTransaction" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="form">
		<div class="modal-content">

        <div class="modal-header">
        <h4 class="modal-title text-success"><i class="fa fa-th-list"></i> Journal Entry Voucher </h4>
</div>
		<div class="modal-body">
	
         <div class="row">
                        <div class="col-md-2 mb-1">
                            Jevno:
                        </div>
                        <div class="col-md-4 mb-1">
                            <input type="text" id="jevno" name="jevno"
                                class="form-control form-control-md" readonly placeholder="Jev Number" autocomplete="off">
                        </div>
                        <div class="col-md-2 mb-1">
                            Transaction:
                        </div>
                        <div class="col-md-4 mb-1">
                            <input type="text" id="trantype" name="trans"  id ="trans" value="Collections" class="form-control form-control-md" autocomplete="off">
                            <input type="hidden" id="trantype" name="trantype"  id ="trantype" value="COL" class="form-control form-control-md" autocomplete="off">
                        </div>
                        <div class="col-md-2 mb-1">
                            Date:
                        </div>
                        <div class="col-md-4 mb-1">
                            <input type="datetime-local" id="jevdate" name="jevdate" step="any"
                                class="form-control form-control-md" autocomplete="off">
                        </div>
                        <div class="col-md-2 mb-1">
                            Fundsource:
                        </div>
                        <div class="col-md-4 mb-1">
                            <input type="text" id="jevfund" name="jevfund"  value="01101101"
                                class="form-control form-control-md" autocomplete="off">
                        </div>
                        <input type="hidden" id="acctno" name="acctno" 
                                class="form-control form-control-md" autocomplete="off">
            </div>
            <div class="h5 text-success"><i class="fa fa-th-list"></i> Transaction Entries</div>
            <table id="tbl_jev" style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
                <thead>
                    <tr>
                        <th class="align-middle" rowspan="2">Responsibility Center</th>
                        <th colspan="2" class="align-middle text-center">Account</th>
                        <th rowspan="2" class="align-middle text-center">Sub Object code</th>
                        <th rowspan="2" class="align-middle text-center">Debit</th>
                        <th rowspan="2" class="align-middle text-center">Credit</th>
                        <th rowspan="2" class="align-middle text-center">Location</th>
                    </tr>
                    <tr>
                        <th class="align-middle">Title</th>
                        <th class="align-middle">Code</th>
                    </tr>
                </thead>
                <tfoot>
                <tr>
                     <th colspan="4" class="h4 text-success">Total</th> 
                     <th id="debit">0.00</th>
                     <th id="credit">0.00</th>
                     <th ></th>
                    </tr>
                   
                </tfoot>
            </table>
            <div class="clearfix">
              <div class="h5 text-success float-left mb-1"><i class="fa fa-file-pdf"></i> Supporting Documents</div>
              <button type="button" id="btnJevDoc" class="btn btn-outline-success float-right mb-1 btn-sm"><i class="fa fa-plus"></i> Add  Documents</button>
            </div>
            <table id="jev_doc" style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
                <thead>
                    <tr>
                        <th class="align-middle">Date</th>
                        <th class="align-middle text-center">Description</th>
                        <th class="align-middle text-center">Document no.</th>
                        <th class="align-middle text-center"></th>
                    </tr>
                </thead>
              
            </table>
            <div class="clearfix">
              <div class="h5 text-success float-left mb-1"><i class="fa fa-file-pdf"></i> Particulars</div>
            </div>
           <textarea class="form-control" name="particulars" id="particulars" placeholder="Particulars"></textarea>
		</div>
		<div class="modal-footer">
        <div class="btn-group">
                <button type="submit"  class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i>&nbsp Save</button>
                <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>&nbsp Cancel</button>
            </div>
        </div>
		</div>
		</div>
	</div>
</form>
<form id="frmJevDoc" name="frmJevDoc" method="post">
	<div class="modal" id="modaljevDoc" name="modaljevDoc"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="form">
		<div class="modal-content">
		<div class="modal-body">
        <h5 class="modal-title text-success"><i class="fa fa-file-o"></i>&nbsp Add Documents</h5>
                       
                        Date:
                            <input type="date" id="docdate" name="docdate" class="form-control form-control-md"  placeholder="Date" autocomplete="off">
                     
                        Reference no:
                            <input type="text" id="docref" name="docref" class="form-control form-control-md"  placeholder="Reference no" autocomplete="off">
                    
                        Document Type:
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" readonly placeholder="Document Type" name ="doctypedesc" id="doctypedesc" >
                            <input type="hidden" class="form-control" name="doctype"  id="doctype">
                            <input type="hidden" class="form-control" name="doccode"  id="doccode">
                        
                            <button type="button" id="searchDocuments" class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                        </div>
				
                      <input type="hidden" class="form-control" name="formIden"  id="formIden" >
                      <input type="hidden" class="form-control" name="docjev"  id="docjev">
                      <input type="hidden" class="form-control" name="docacct"  id="docacct">
		</div>
		<div class="modal-footer">
        <div class="btn-group">
                <button type="submit"  class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i>&nbsp Save</button>
                <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>&nbsp Cancel</button>
            </div>
        </div>
		</div>
		</div>
	</div>
</form>

<div class="modal fade" id="modalDocuments"  role="form">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
				<div class="modal-content">
					<div class="modal-header">
					<div class="modal-title">
						<h5 class="modal-title text-success" ><i class="fa fa-plus"></i> Referece Document/s	</h5>
						</div>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div id="container"></div>
					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

<script>
    $("#btnJevDoc").on('click',function(){
		$("#modaljevDoc").modal('show');
        $("#formIden").val("insert");
        $("#docjev").val($.trim($("#jevno").val()));
        $("#docacct").val($("#acctno").val());
        
	});

     $('#frmJevDoc').on('submit', function(e){
		var form = this;
		$.ajax({
			type : "POST",
			url  : baseURL+"ENGAS/saveDocuments",
			data :new FormData(this),
			processData: false,
			contentType: false,
			success: function(data,response){
                $("#jev_doc").DataTable().ajax.reload();
                $('#modaljevDoc').modal('hide');
                toastr.success('Successfully Added! ' ,'Success');
			},
			error: function(xhr, desc, err){
				toastr.error(xhr ,'Error');
			}
		});
		return false;
	}); 
    

    function en_doc()
		{
			var docTable = $("#en_doc").DataTable({
				"ajax": baseURL+"ENGAS/ref_doc",
				"aLengthMenu": [[20, 50, 75, -1], [20,50, 75, "All"]],
				"destroy":true,
				"select":{
				select: true,
				style: 'single',
				selector: 'td:not(:nth-child(4))',
				className:'bg-success text-white selected'},
				"serverside":true, 
				"processing":true,
				"columns" : [
				{data : "REFERENCE_DOCUMENT_UID"},
				{data : "CODE"},
				{data : "DESCRIPTION"}]
			});

			docTable.on('click','tbody>tr',function(){
				$(this).toggleClass("bg-success text-white selected");
				var data = 	$("#en_doc").DataTable().row('.selected').data();
				$("#doctypedesc").val(data.DESCRIPTION);
				$("#doctype").val(data.REFERENCE_DOCUMENT_UID);
                $("#doccode").val(data.CODE);
				$("#modalDocuments").modal('hide');
			});
		}

	$("#searchDocuments").on('click',function(){
		$("#modalDocuments").modal('show');
		$("#container").load(baseURL+"ENGAS/doc_view",function(){
			en_doc();
		});
	});

    function getParticular(acctno){
        $.post(baseURL+'/Engas/getParticulars',{acctno:acctno},function(data){
            var  obj = $.parseJSON(data);
            $("#particulars").val(obj['particulars']);
        });

    }

    $('#frmPatientTransactions').on('submit', function(e){
		var form = this;
		$.ajax({
			type : "POST",
			url  : baseURL+"ENGAS/saveJev",
			data :new FormData(this),
			processData: false,
			contentType: false,
			success: function(data,response){
                toastr.success('Record saved!','Success');
			},
			error: function(xhr, desc, err){
				toastr.error(xhr ,'Error');
			}
		});
		return false;
	}); 

</script>