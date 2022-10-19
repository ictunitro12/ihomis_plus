<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>IHOMIS</title>
    <!-- Main styles for this application-->
		<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/font-awesome/css/font-awesome.min.css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugin/particles/css/particle.css">
		<link href="<?php echo base_url();?>assets/vendors/ladda/css/ladda-themeless.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/select2/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/select2/css/select2-coreui.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/toastr/css/toastr.min.css">
			<script src="<?php echo base_url();?>assets/vendors/jquery/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/vendors/jquery-validation/js/jquery.validate.js"></script>
		<script src="<?php echo base_url()?>assets/vendors/toastr/js/toastr.js"></script>
		<script src="<?php echo base_url() ?>assets/vendors/select2/js/select2.min.js"></script>
  </head>
  <body class="c-app flex-row align-items-center">
  <div id="particles-js"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card-group">
		
            <div class="card card-accent-success p-4">
			<h2 class="text text-success">
				<i class="fa fa-edit"></i> Register
			</h2>
			<div class="card-body">
            
				
				<form id="formRegister" name="formRegister" method="POST">
				  <input type="hidden" class="form-control" name="userID" readonly id="userID" placeholder="userID"/>
				<div class="form-group">
		            <label for="varchar" id="selEmplabel" >Employee List:</label>
		         <select name ="selEmp" id="selEmp" class="form-control form-control-lg"></select>	
		        
		           <input type="hidden" class=" form-control " name="userName"  id="userName"/>
				
		            <label for="varchar">Email address:</label>
		            <input type="email" class="form-control form-control-lg" name="userEmail" id="userEmail" placeholder="Email Address"/>
		       
			
		            <label for="varchar">Password:</label>
		            <input type="password" class="form-control form-control-lg"   name="userPassword" id="userPassword" placeholder="Password"/>
		       
				
				
		            <label for="varchar">Confirm password:</label>
		            <input type="password" class="form-control form-control-lg"   name="userPasswordConfirm" id="userPasswordConfirm" placeholder="Confirm password"/>
		      
					<label for="varchar">Department:</label>
		            <select type="text" class="form-control " name="userDept" id="userDept" /></select>
		        </div>
					 <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-outline-success btn-ladda btn-block btn-lg"  data-style="zoom-in" type="button"><i class="fa fa-send"></i> Submit</button>
                  </div>	
                </div>
				</form>
					<a  class="text text-success" href="<?php echo base_url();?>Auth/login"><i class="fa fa-arrow-left"></i> Back to login </a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    </div>
	
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url();?>assets/vendors/coreui/coreui/js/coreui.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/ladda/js/spin.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/ladda/js/ladda.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/loading-buttons.js"></script>
    <!--[if IE]><!-->
	<script src="<?php echo base_url();?>assets/vendors/coreui/icons/js/svgxuse.min.js"></script>
 	<script src="<?php echo base_url()?>assets/plugin/particles/js/particles.js"></script>
	<script src="<?php echo base_url()?>assets/plugin/particles/js/app.js"></script>
    <!--<![endif]-->
  </body>
</html>
<script>
		$(function(){
		
		var baseURL = window.location.origin + '/';
			$('#selEmp').select2({
			placeholder: 'Select Employee',
			theme:'coreui',
			minimumInputLength: 0,
			allowClear: true,
			ajax:{
			url: baseURL+"Auth/selPersonnel/",
			dataType: "JSON",
			type:"POST",
			delay: 250,
			data: function(params){
			return{
			searchEmployee: params.term
			};
			},
			processResults: function(data){
			var results = [];
			$.each(data, function(index, item){
			results.push({
			id:item.employeeid,
			text:item.name
			});
			});
			return{
				results: results
			}
			}
			}
			});
			$('#selEmp').on('change', function() {
			var data = $("#selEmp option:selected",this);
			if(this.value=='')
			{
				$("#userID").val("");
			}else{
				var username=generateUserID(this.value);
				$("#userID").val(this.value);
			}
			});
			
		$('#userDept').select2({
			placeholder: 'Select Department',
			theme:'coreui',
			minimumInputLength: 0,
			allowClear: true,
			ajax:{
			url: baseURL+"Auth/selDept",
			dataType: "JSON",
			type:"POST",
			delay: 250,
			data: function(params){
			return{
			searchDepartment: params.term
			};
			},
			processResults: function(data){
			var results = [];
			$.each(data, function(index, item){
			results.push({
			id:item.deptcode,
			text:item.deptname
			});
			});
			return{
				results: results
			}
			}
			}
			});
			$('#userDept').on('change', function() {
			var data = $("#userDept option:selected",this);
			});
			
		function generateUserID(id)
		{
			var empID=encodeURIComponent(encodeURIComponent(id));
			var obj="";
			  $.ajax({
			  type: "POST",
			  url:baseURL+"auth/generateID/"+empID,
			  data: "JSON",
			  success: function(data,response)
				{ 
					$("#userName").val(data);
				},
				error: function(data,textStatus,xhr)
				{
					alert("Error:"+xhr);
				}
			  });
		}
	
	
	
	
		$("#formRegister").validate({
		submitHandler: function (form){
		var  POSTURL = baseURL+"auth/saveRegister";

			  $.ajax({
				type : "POST",
				url  : POSTURL,
				dataType: "JSON",
				cache:false,
				async:true,
				data: $(form).serialize(),
				success: function(data){
					location.href = baseURL+'Auth/login';
					toastr.success('Successfully Registered!' ,'Success');
				},
				error: function(data,textStatus,xhre){
					toastr.error('<small>Email was not sent!</small>','Error!');
			
				}
				});
			return false;
		 $(form).submit();
	   },
		rules:{
			
			selEmp:'required',
			userEmail:{
			required :true,
				remote:{		
				  param:{
					url: "existEmail",	
					type:'POST'
				  }
				},
		},
			userPassword : {
				minlength : 8,
				required:true
			},
			userPasswordConfirm :{
				minlength : 8,
				equalTo : "#userPassword",
				required:true
			}
	  },	
	  messages:{
			userPassword:{
			required:"Password is required!",
			},
			userPasswordConfirm:{
			required:"Confirm password is required!",
			equalTo:"Password does not match!",
			},
		  selEmp:'Select employee here!',
		  userEmail: 
		 {	
			required:'Email address is required!',
			remote: "Email address is already registered!"
		 },
		
	  },
	 errorElement: 'span',
	  errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox')
		{
		  error.insertAfter(element.parent('label'));
		}else if(element.hasClass('select2-hidden-accessible'))
		{
		 element=$("#selReg" + element.attr("id") + "ul").parent();

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
	
	});
	</script>
	