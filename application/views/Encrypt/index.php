<form name="frmObfuscator" id="frmObfuscator">
  <div class="row">
 <div class="col-md-3">
<div class="card card-accent-success">
		<div class="card-body">
		<h4 class="text-center text-success"><i class="fa fa-medkit"></i> Obfuscator</h4>
			<button   id="btnSubmit" value="Encrypt"  class="btn  btn-block btn-outline-success"><i class="fa fa-code fa-2x"></i></br>Encrypt</button>
			<button   id="btnSubmit" value="Decrypt" class="btn  btn-block btn-outline-success"><i class="fa fa-hashtag fa-2x"></i></br>Decrypt</button>
		<hr>
			<input type="radio" id="controllers" checked name="folder[]" value="controllers">
				<label class="text text-success" for="controller">: Controller</label><br>
			<input type="radio" id="models" name="folder[]" value="models">
				<label class="text text-success" for="model">: Model</label><br>
			<input type="radio" id="views" name="folder[]" value="views">
				<label  class="text text-success" for="view">: View</label><br>
		<hr>
		 <label class="form-label">Encryption/Decryption Key:</label>
		<input type ="text" name = "key" id="key" class="form-control form-control-md"  required  placeholder ="Encryption/Decryption Key"> 
		</div>
		
</div>
  </div>
	<div class="col-md-9">
	<div class="card card-accent-success">
	<div class="card-header">
	<div class="row">
	<div class="col-md-6">
	<div class="h4 text text-success"> 
	<i class="fa fa-users"></i>
	&nbsp  <?php echo $header;?> <small><?php echo $subheader;?></small>
	</div>
	</div>
	</div>
	</div>
	<div class="card-body table-responsive">
	<table id="folderTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover ">
	<thead>
	<tr class="thead-dark">
	<th width="10px"></th>
	<th width="50px">Filename</th>
	<th>Size</th>
	<th width="50px"></th>
	</tr>
	</thead>
	</table>
	</div>
	<div class="card-footer"></div>
	</div>
	</div>
</form>


<!-- The Modal -->
<div class="modal" id="modalProgress">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body">
       <div class="progress">
		<div class="progress-bar" id ="progressbar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		var type ="controllers";
		Controller(type);
		
    });
	
	$('#controllers').click(function(){
		Controller('controllers');
	});
	
	$('#models').click(function(){
		Controller('models');
	});
	
	$('#views').click(function(){
		Controller('views');
	});
	
	
  function Controller(type)
   {
 
	var drugsAndMeds_tbl = $('#folderTable').DataTable({
		"ajax" : baseURL+"Encryptor/getFileLists/"+type,
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"processing":true,
		"paging":   false,
		"ordering":   false,
		"serverside":true,
		"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
		"destroy":true,
		"columns" : [
			{
					data:"path",
						render: function(data, type, row)
						{
							
							return "<input type='checkbox'    name ='file[]' value='"+data+"' id='file' >";
						}
						
              },
			{ data : "filename"},

			{ data : "size"},
		
			
			{ 
				data : "enccode" ,
				render: function(data, type, row){
				return "<button class='btn btn-outline-success btn-sm' id='btnCheck' data-hpercode='"+row.hpercode+"' data-name='"+row.name+"' data-enccode ='"+data+"' data-stat='"+row.estatus+"' data-docointkey = '"+row.docointkey+"'  data-chrgcode='"+row.pcchrgcod+"'><i class='fa fa-search'></i></button>";
			}
			}			
			],
    });

}

$('#frmObfuscator').on('submit', function(e){
	
	
	var enc = baseURL+"Encryptor/encryptFiles";
	var dec = baseURL+"Encryptor/decryptFiles";
	
	var button  = $("#btnSubmit").val();
	var  url  =  button == 'Encrypt' ? enc : dec;
	$("#modalProgress").show();
      var form = this;
		$.ajax({
		type : "POST",
		url  :enc ,
		data :new FormData(this),
		processData: false,
		contentType: false,
		beforeSend:function(x){
		$('#progressbar').width(0 + "%").attr('aria-valuenow', 0);

		},
		success: function(xhr,data){
		$('#progressbar').width(100 + "%").attr('aria-valuenow', 100);
		
		},
		
		complete: function() {
       	$("#modalProgress").hide();
		}
		});
		  return false;
	}); 





	
	
	
</script>

