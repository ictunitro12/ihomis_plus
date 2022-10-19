
$("#formMenu").validate({

submitHandler: function (form){
var  POSTURL = baseURL+"Menus/saveMenu";

		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#formIdenMenu').val()=='insert'){
					initAdd();
					toastr.success('Data Successfully Saved! ' ,'Success');
					formReset(form);
				}else if($('#formIdenMenu').val()=='update'){
					toastr.success('Data Successfully Updated! ' ,'Success');
				}else{
					toastr.error('Error:No post' ,'Error');
				}
			},
			error: function(data,textStatus,xhre){
					toastr.error('<small>'+xhre+'</small>','Error!');
		
			}
			});
		return false;
	 $(form).submit();
   },
	rules:{
	menuName:{
		required :true,
			remote:{
			depends: function () 
			  {
                    return $('#formIdenMenu').val()=='insert';
              },				
			  param:{
				url: "existsp",	
				type:'POST'
			  }
			},
	},
	menuStatus:'required',
    menuIcon:'required',
    menuSub:'required',
    menuController:'required',
    menuOrder:'required',
  },	
  messages:{

	menuName: 
	 {	
		required:'Menu is required!',
		remote: "Menu is already Exists!"
     },
    
	menuStatus:'Status is required!',
    menuIcon:'Menu icon is required!',
    menuSub:' Sublevel is required!',
    menuController:' Controller is required!',
    menuOrder:' Menu Order is required!',
  },
  errorElement: 'span',
    errorPlacement: function errorPlacement(error, element) {
  

   if(element.hasClass('select2-hidden-accessible'))
	{
		error.insertAfter(element.next('.select2-container'));
	    error.addClass('invalid-feedback');
	}
	else 
	{
      error.insertAfter(element);
	    error.addClass('invalid-feedback');
    }
  },

  highlight: function highlight(element) {
 $(element).addClass('is-invalid').removeClass('is-valid');
		  if( $(element).hasClass('select2-offscreen'))
		  {
			 
			$(element).addClass('is-invalid').removeClass('is-valid');
		  }else{
			
		  }
  },
  
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
  } 
});
