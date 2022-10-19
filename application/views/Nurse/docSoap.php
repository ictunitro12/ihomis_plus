<style>

table#docsoapList.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="row">
	<div class="col-md-3">
	<?php echo ViewPatientInformation();?>
	</div>
	<div class="col-md-9">
	<?php  $this->load->view('PatientRecords/caseInformation.php');?>
	<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto	">
			<div class="h3 text text-success"> 
			<i class="fa fa-user-md"></i>
			&nbsp<?php echo $header;?>
			&nbsp <small><?php echo $subheader;?></small>
			</div>
		</div>
		</div>
	</div>
	<div class="card-body">
	 <button id="btnSoap_Add" class="btn btn-success btn-md	 btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-plus"></i></button>
	 
		<div class="tab-pane fade show active" id="adm" role="tabpanel" aria-labelledby="adm-tab">
			<table id="docsoapList" class="table table-sm table-bordered table-condensed table-hover " width="100%">
				<thead>
					<tr>
						<th ></th>
						<th ></th>
						
						<th width="140px">Datelog</th>
						<th >Subject</th>
						<th >Object</th>
						<th >Assess</th>
						<th >Plan</th>
						
						<th width="50px"></th>
					</tr>
				</thead>
			</table>	
		</div>
	</div>
	</div>
	</div>
	</div>
	
<form name ="frmSoap" id="frmSoap" class="form" method="post">
   <div class="modal" id="ModalSoap" name="ModalSoap" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-body">
			   <h2 class="modal-title text-success"><i class="fa fa-edit"></i> S.O.A.P</h2>
			   <div id ="message" class="text  text-danger"></div>
               <div class="form-row" id ="formSoap_Input">
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Date:
                  </div>
                  <div class="col-md-10">
                     <input type="datetime-local" name="datetimeSoap" id="datetimeSoap" value="" class="form-control" placeholder="Date" >
                  </div>
					<div class="col-md-2 col-form-label  text-default mb-1">
                     Subject:
                  </div>
                <div class="col-md-10">
                     <textarea type="text" name="subjSoap" id="subjSoap"  class="form-control mb-1" placeholder="Subject"></textarea>
                  </div>
				<div class="col-md-2 col-form-label  text-default mb-1">
                     Object:
				</div>
                <div class="col-md-10">
                     <textarea type="text" name="objSoap" id="objSoap"  class="form-control mb-1" placeholder="Object"></textarea>
				</div>
				<div class="col-md-2 col-form-label  text-default mb-1">
                     Assessment:
				</div>
                    
                <div class="col-md-10">
				 <textarea type="text" name="assessSoap" id="assessSoap"  class="form-control mb-1" placeholder="Assessment"></textarea>
				</div>
				<div class="col-md-2 col-form-label  text-default mb-1">
                     Plan:
				</div>
                <div class="col-md-10">
                     <textarea type="text" name="planSoap" id="planSoap"  class="form-control mb-1" placeholder="Plan"></textarea>
				</div>
                  <input type="hidden" name="soapformIden" id="soapformIden">
                  <input type="hidden" name="soapEnccode" id="soapEnccode">
                  <input type="hidden" name="soapHpercode" id="soapHpercode">
               </div>
			   <hr>
            <button type="submit" name="sSubmit" class="btn btn-success btn-md	 btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
            </div>          
         </div>
      </div>
   </div>
</form>

<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
<script type="text/javascript">
	var enccode = atob('<?php echo $this->uri->segment(3)?>');
	var hpercode = atob('<?php echo $this->uri->segment(4)?>');
	$(function()
	{
		initdocSoap(enccode,hpercode);
	});
	
	function initdocSoap(enccode,hpercode)
	{
		PatientData(hpercode);
		PatientDemographics(hpercode);
		CaseInformation(enccode);
		docSoapList(enccode,hpercode);
	}
	
		
	$('#btnSoap_Add').on('click',function(){
		
		$('#ModalSoap').modal('show');
		$("#formSoap_Input").show();
		$("#message").text('');
		$('#soapformIden').val('insert');
		$('#datetimeSoap').val(getTimeLocale());
		$('#soapEnccode').val(enccode);
		$('#soapHpercode').val(hpercode);
	
	});
	
	$('#docsoapList').on('click','#btnSoap_Edit',function(){
		$('#ModalSoap').modal('show');
		$("#formSoap_Input").show();
		$("#message").text('');
		var datelog = $(this).data('datelog');
		$('#soapformIden').val('update');
		$('#soapEnccode').val(enccode);
		$('#soapHpercode').val(hpercode);
		var  data=docSoapInfo(enccode,datelog);
		$('#datetimeSoap').val(setTimeLocale(data['docdate']));
		$('#subjSoap').val(data['docsubject']);
		$('#objSoap').val(data['docobject']);
		$('#assessSoap').val(data['docassess']);
		$('#planSoap').val(data['docplan']);
	});
	
	$('#docsoapList').on('click','#btnSoap_Delete',function(){
		$('#ModalSoap').modal('show');
		$("#formSoap_Input").hide();
		$("#message").text('Note: Are you sure you want to delete?');
		$('#soapformIden').val('delete');
		$('#datetimeSoap').val(setTimeLocale($(this).data('datelog')));
		$('#soapEnccode').val(enccode);
		$('#soapHpercode').val(hpercode);		
	});
	
	function docSoapInfo(enctr,datelog)
	{
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+"PatientRecords/docSoapInfo/"+URLencode(enctr)+"/"+ URLencode(datelog);
		Obj.data = "JSON";
		var row =Information(Obj);
		return row;
	}
	
	function docSoapList(enccode,hpercode)
	{
	
	 var data = new Object();
		data.id = "docsoapList";
		data.link = baseURL+"PatientRecords/docSoapList/"+ URLencode(enccode) +"/"+ hpercode ;
		data.type = "POST";
		data.coldef =[
			{
				targets: [0,1],
				visible:false,
				orderable:false,
			},
			{
				targets: 7,
				orderable:false,
			}];
		loadTable(data);
	}
	
	
	
$('#frmSoap').validate({
submitHandler: function (form){
var  POSTURL = baseURL+"PatientRecords/savedocSoap";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#soapformIden').val()=='insert'){
					toastr.success('S.O.A.P Successfully Saved!' ,'Success');
					$('.modal').modal('hide');
					docSoapList(enccode,hpercode);
					resetForm();
				}else if($('#soapformIden').val()=='update'){
					toastr.success('S.O.A.P Successfully Updated! ' ,'Success');
					$('.modal').modal('hide');
					docSoapList(enccode,hpercode);
					resetForm();
				}else if($('#soapformIden').val()=='delete'){
				toastr.success('S.O.A.P Successfully Updated! ' ,'Success');
					$('.modal').modal('hide');
					docSoapList(enccode,hpercode);
					resetForm();
					
				}else{
					toastr.success('No Post! ' ,'Success');
				}
			},
			error: function(data,response){
			console.log(data);
			}
			});
		return false;
	 $(form).submit();
   },
  rules:{
    subjSoap:'required',
    objSoap:'required',
    assessSoap:'required',
    planSoap:'required'
  },	
  messages:{
    subjSoap:'Subject is required',
    objSoap:'Object is required',
    assessSoap:'Assess is required',
    planSoap:'Plan is required'
  },
  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
	{
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-hidden-accessible'))
	{
	 element=$(".select" + element.attr("id") + "ul").parent();

	 error.insertAfter(element);
	}
	else 
	{
      error.insertAfter(element);
    }
  },

  highlight: function highlight(element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
	  if( $(element).hasClass('select2-offscreen'))
	  {
		  element=$("#s2id_" + element.attr("id") + " ul").parent();
		$(element).addClass('is-invalid').removeClass('is-valid');
      }
  },
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
	if( $(element).hasClass('select2-offscreen'))
	  {
		 $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
      }
  } 
});
	
</script>