var baseURL = window.location.origin + '/';

//var baseURL = window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
	function strpad00(s)
		{
			s = s + '';
			if (s.length === 1) s = '0'+s;
			return s;
		}
	 function searchAgain(){
		
		$("#PatSearchList").modal('hide');
		$("#PatSearch").modal('show');
	 }
	  function searchPatientList(){
		
		$("#PatHistoryList").modal('hide');
		$("#PatSearchList").modal('show');
	 }
	 
	$('.modal').on('hidden.coreui.modal', function(event) {
		$(this).find("input,textarea,select").val('').end();
		$(this).find("checkbox,radio").prop('checked',false);
		$(this).find("radio").removeAttr('checked');
		$(this).find("input,textarea,select").removeClass('is-valid'); 
		$(this).find("input,textarea,select").removeClass('is-invalid');
		$(this).find("select").val('').trigger('change');
		$("#txtMult").find("tr").remove();
	});

	 function resetForm()
	 {
		$('[name $="_modal"]').on('hide.coreui.modal', function (event) {
		$('[name $="_form"]').find("input,textarea").val('').end();
		$('[name $="_form"]').find("input,textarea").removeClass('is-valid');
		$('[name $="_form"]').find("input,textarea").removeClass('is-invalid');
		$('[name $="_form"]').find("select").val('').trigger('change');
		$('.txtMult').remove();
		$('#grandTotal').text('0.00');
		});
	}
	
	function loadImage(hpercode)
	{
		var beforeSend = function(){
			$(".loading").animate({left: '+=100'},500)
		}
		var url  =baseURL+'assets/patient_photo/'+hpercode+'.jpg';
			  var http = new XMLHttpRequest();
				http.open('HEAD', url, false);
				beforeSend(); 
                http.send();
		 if (http.status === 200) {
			 $("img[id^='patientPhoto']").prop('src',url);
			 $(".loading").remove();
		}else{
			$("img[id^='patientPhoto']").prop('src',baseURL+'assets/img/avatars/none.png'); 
			$(".loading").remove();
		}
	}

	function formatNumber(num) {
		return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
	}
	
	toastr.options = {
		
	  "closeButton": true,
	  "debug": false,
	  "newestOnTop": false,
	  "progressBar": true,
	  "positionClass": "toast-top-right",
	  "preventDuplicates": true,
	  "onclick": null,
	  "showDuration": "3000",
	  "hideDuration": "1000",
	  "timeOut": "5000",
	  "extendedTimeOut": "1000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
	  "hideMethod": "fadeOut"
	  
	}
	
	function URLencode(id)
	{
		return encodeURIComponent(encodeURIComponent(id));
	}
	function encrypt()
	{
		
	}
   function  PatientSearch() 
   {
	  $("#PatSearch").modal('show');  
   }

   function calculateColumn(table,colNum) {
	try {

		var intVal = function (i) {
			return typeof i === 'string' ?
			i.replace(/[\$,]/g, '') * 1 :
			typeof i === 'number' ?
			i : 0;
		};
	  var api = table.api();
		sum = api
				.column(colNum,{ page: 'current'})
				.data()
				.reduce( function (a, b) {
					return intVal(a) + intVal(b);
				},0);
			return sum;
		
	} catch (e) {
		console.log('Error in Calculating Column!');
		console.log(e)
	}
}


$.fn.dataTable.pipeline = function ( opts ) {
    // Configuration options
    var conf = $.extend( {
        pages: 15,     // number of pages to cache
        url: '',      // script url
        data: null,   // function or object with parameters to send to the server
                      // matching how `ajax.data` works in DataTables
        method: 'GET' // Ajax HTTP method
    }, opts );
 
    // Private variables for storing the cache
    var cacheLower = -1;
    var cacheUpper = null;
    var cacheLastRequest = null;
    var cacheLastJson = null;
 
    return function ( request, drawCallback, settings ) {
        var ajax          = false;
        var requestStart  = request.start;
        var drawStart     = request.start;
        var requestLength = request.length;
        var requestEnd    = requestStart + requestLength;
         
        if ( settings.clearCache ) {
            // API requested that the cache be cleared
            ajax = true;
            settings.clearCache = false;
        }
        else if ( cacheLower < 0 || requestStart < cacheLower || requestEnd > cacheUpper ) {
            // outside cached data - need to make a request
            ajax = true;
        }
        else if ( JSON.stringify( request.order )   !== JSON.stringify( cacheLastRequest.order ) ||
                  JSON.stringify( request.columns ) !== JSON.stringify( cacheLastRequest.columns ) ||
                  JSON.stringify( request.search )  !== JSON.stringify( cacheLastRequest.search )
        ) {
            // properties changed (ordering, columns, searching)
            ajax = true;
        }
         
        // Store the request for checking next time around
        cacheLastRequest = $.extend( true, {}, request );
 
        if ( ajax ) {
            // Need data from the server
            if ( requestStart < cacheLower ) {
                requestStart = requestStart - (requestLength*(conf.pages-1));
 
                if ( requestStart < 0 ) {
                    requestStart = 0;
                }
            }
             
            cacheLower = requestStart;
            cacheUpper = requestStart + (requestLength * conf.pages);
 
            request.start = requestStart;
            request.length = requestLength*conf.pages;
 
            // Provide the same `data` options as DataTables.
            if ( typeof conf.data === 'function' ) {
                // As a function it is executed with the data object as an arg
                // for manipulation. If an object is returned, it is used as the
                // data object to submit
                var d = conf.data( request );
                if ( d ) {
                    $.extend( request, d );
                }
            }
            else if ( $.isPlainObject( conf.data ) ) {
                // As an object, the data given extends the default
                $.extend( request, conf.data );
            }
 
            return $.ajax( {
                "type":     conf.method,
                "url":      conf.url,
                "data":     request,
                "dataType": "json",
                "cache":    false,
                "success":  function ( json ) {
                    cacheLastJson = $.extend(true, {}, json);
 
                    if ( cacheLower != drawStart ) {
                        json.data.splice( 0, drawStart-cacheLower );
                    }
                    if ( requestLength >= -1 ) {
                        json.data.splice( requestLength, json.data.length );
                    }
                     
                    drawCallback( json );
                }
            } );
        }
        else {
            json = $.extend( true, {}, cacheLastJson );
            json.draw = request.draw; // Update the echo for each response
            json.data.splice( 0, requestStart-cacheLower );
            json.data.splice( requestLength, json.data.length );
 
            drawCallback(json);
        }
    }
};
 
// Register an API method that will empty the pipelined data, forcing an Ajax
// fetch on the next draw (i.e. `table.clearPipeline().draw()`)
	$.fn.dataTable.Api.register( 'clearPipeline()', function () {
		return this.iterator( 'table', function ( settings ) {
			settings.clearCache = true;
		} );
	} );
	function Datatable(data)
	{
		data['search'] = typeof data['search'] !== 'undefined' ? data['search'] : false ;
		data['dataType'] = typeof data['dataType'] !== 'undefined' ? data['dataType'] : 'JSON';
		data['rowCallback'] = typeof data['rowCallback'] !== 'undefined' ? data['rowCallback'] : false ;
		data['paging'] = typeof data['paging'] !== 'undefined' ? data['paging']: false ;
		data['info'] = typeof data['info'] !== 'undefined' ? data['info']: false ;
		data['order'] = typeof data.order !== 'undefined' ? data.order: false ;
		data['processing'] = typeof data.processing !== 'undefined' ? data.processing: false ;
		data['serverside'] = typeof data.serverside !== 'undefined' ? data.serverside: false ;
		data['stateSave'] = typeof data['stateSave'] !== 'undefined' ? data['stateSave']: false ;
		data['responsive'] = typeof data['responsive'] !== 'undefined' ? data['responsive']: false ;
		data['autoWidth'] = typeof data['autoWidth'] !== 'undefined' ? data['autoWidth']: false ;
		data['destroy'] = typeof data['destroy'] !== 'undefined' ? data['destroy']: false ;
		data['rowsGroup'] = typeof data['rowsGroup'] !== 'undefined' ? data['rowsGroup']: false ;
		data['select'] = typeof data['select'] !== 'undefined' ? data['select']: false ;
		data['draw'] = typeof data['draw'] !== 'undefined' ? data['draw']: false ;
		data['init'] = typeof data['init'] !== 'undefined' ? data['init']: false ;
		data['dom'] = typeof data['dom'] !== 'undefined' ? data['dom']: false ;
		data['fixedColumns'] = typeof data['fixedColumns'] !== 'undefined' ? data['fixedColumns'] : false ;
		data['scrollY'] = typeof data['scrollY'] !== 'undefined' ? data['scrollY'] : false ;
		data['scrollX'] = typeof data['scrollX'] !== 'undefined' ? data['scrollX'] : false ;
		data['scrollCollapse'] = typeof data['scrollCollapse'] !== 'undefined' ? data['scrollCollapse'] : false ;
		var tableData = $("#"+data['id']).DataTable({
		lengthMenu: [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		pageLength:15,	
		language: {
			processing: '<div class="spinner-grow text-success"><span ></span></div>'
		},
		
		processing:true,
		ajax:{
		url:data['link'],
		type:data['type'],
		dataType:data['dataType'],
		data:data['data']},
		responsive:true,
		fixedColumns:data['fixedColumns'],
		//scrollY:data['scrollY'],
		//scrollX:data['scrollX'],
	//	scrollCollapse:data['scrollCollapse'],
		autoWidth: data['autoWidth'],
		searching:data['search'],
		serverside:data['serverside'],
		select:data['select'],
		stateSave: data['stateSave'],
		info:data['info'],
		//responsive: data['responsive'],
		orderable: data['order'],
		paging: data['paging'],
		destroy: data['destroy'],
		rowsGroup: data['rowsGroup'],
		columns:data['columns'],
		columnDefs:data['coldef'],
		drawCallback:data['draw'],
		initComplete:data['init'],
		rowCallback:data['rowCallback'],
		footerCallback:data['footerCallback']
		});
		
		return tableData;
	}
	
	
    function loadTable(data)
	{
		data['search'] = typeof data['search'] !== 'undefined' ? data['search'] : true ;
		data['paging'] = typeof data['paging'] !== 'undefined' ? data['paging']: true ;
		data['info'] = typeof data['info'] !== 'undefined' ? data['info']: true ;
		data['orderable'] = typeof data['orderable'] !== 'undefined' ? data['orderable']: true ;
		data['order'] = typeof data.order !== 'undefined' ? data.order: true ;
		data['processing'] = typeof data.processing !== 'undefined' ? data.processing: true ;
		data['serverside'] = typeof data.serverside !== 'undefined' ? data.serverside: true ;
		data['stateSave'] = typeof data['stateSave'] !== 'undefined' ? data['stateSave']: true ;
		data['searching'] = typeof 	data['searching']  !== 'undefined' ? 	data['searching'] : true ;
		data['responsive'] = typeof data['responsive'] !== 'undefined' ? data['responsive']: true ;
		data['orderable'] = typeof data['orderable'] !== 'undefined' ? data['orderable']: true ;
		data['paging'] = typeof data['paging']!== 'undefined' ? data['paging']: true ;
		data['autoWidth'] = typeof data['autoWidth'] !== 'undefined' ? data['autoWidth']: true ;
		data['destroy'] = typeof data['destroy'] !== 'undefined' ? data['destroy']: true ;
		data['rowsGroup'] = typeof data['rowsGroup'] !== 'undefined' ? data['rowsGroup']: false ;
		data['select'] = typeof data['select'] !== 'undefined' ? data['select']: true ;
	//	data['Bfrtip'] = typeof data['Bfrtip'] !== 'undefined' ? data['Bfrtip']: true ;
		data['pageLength'] = typeof data['pageLength'] !== 'undefined' ? data['pageLength']: 15 ;
		data['rowCallback'] = typeof data['rowCallback'] !== 'undefined' ? data['rowCallback'] : false ;
		data['fixedColumn'] = typeof data['fixedColumn'] !== 'undefined' ? data['fixedColumn'] : false ;
		data['scrollY'] = typeof data['scrollY'] !== 'undefined' ? data['scrollY'] : false ;
		data['scrollX'] = typeof data['scrollX'] !== 'undefined' ? data['scrollX'] : false ;
		data['scrollCollapse'] = typeof data['scrollCollapse'] !== 'undefined' ? data['scrollCollapse'] : false ;
		data['td'] = typeof data['td'] !== 'undefined' ? data['td'] : false ;
	
		var tableData = $("#"+data['id']).DataTable({
		oLanguage: {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
		aLengthMenu: [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		ipageLength: data['pageLength'],
		processing: true,
		serverSide: true,
		fixedColumns:data['fixedColumn'],
		//scrollY:data['scrollY'],
		//scrollX:data['scrollX'],
		//scrollCollapse:data['scrollCollapse'],
		select:data['select'],
		rowsGroup:data['rowsGroup'],
		searching:data['searching'],
		responsive: {
			breakpoints: [
				{ name: 'desktop', width: Infinity },
				{ name: 'tablet',  width: 1024 },
				{ name: 'fablet',  width: 768 },
				{ name: 'phone',   width: 480 }
			]
		},
		info:data['info'],
		orderable: data['orderable'],
		paging: data['paging'],
		autoWidth: true,
		stateSave:true,
		deferRender:true,
		destroy: true,
		ajax:{"url":data['link'],type:data['type'],data:data['data']},
		columnDefs:data['coldef'],
		rowCallback:data['rowCallback']
		});
		return tableData;
	}

	function loadTableAdv(data)
	{
		data.search = typeof data.search !== 'undefined' ? data.search: true ;
		data.paging = typeof data.paging !== 'undefined' ? data.paging: true ;
		data.info = typeof data.info !== 'undefined' ? data.info: true ;
		data.orderable = typeof data.orderable !== 'undefined' ? data.orderable: true ;
		data.order = typeof data.order !== 'undefined' ? data.order: true ;
		$("#"+data['id']).dataTable({
		oLanguage: {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
		aLengthMenu: [[15,20, 50, 75, -1], [15,20, 50, 75, "All"]],
		ipageLength: 15,	
		responsive: true,
		processing: true,
		serverSide: true,
		autoWidth: true,
		stateSave:true,
		destroy: true,
		orderable: data.orderable,
		searching: data.search,
		info:data.info,
		paging: data.paging,
		ajax:{"url":data['link'],type:data['type']},
		columnDefs:data['coldef'],
		order:data['order'],
		footerCallback:data['footerCallback']
		
		});
	}		
	
	function Information(Obj)
	{
		var obj;
			$.ajax({
			type:Obj['type'],
			url:Obj['url'],
			data:Obj['data'],
			async:false,
			cache:false,
			success: function(data,response)
			{ 
					obj = $.parseJSON(data);
			}
			});
		return obj;
	}
	
	function Info(param)
	{
		var obj;
			$.ajax({
			type: "POST",
			url: baseURL+infoLink+param,
			data: "JSON",
			async:false,
			success: function(data,response)
			{
				obj = $.parseJSON(data);
			},
			error: function(data)
			{
				alert("Error: Fetching Information!");
			}
			});
		return obj;
	}
	
	function getDate()
	{
		var today = new Date();
		return (today.getFullYear()  + '-' + ('0' + (today.getMonth() + 1 )).slice(-2) + '-' + ('0' + today.getDate()).slice(-2));
	}
	
	function setDate(date)
	{
		var today = new Date(date);
		return ('0' + (today.getMonth() + 1)).slice(-2)  + '/' + ('0' + today.getDate()).slice(-2) + '/' + today.getFullYear();
	}
	
	 function getTimeLocale()
	 {
		var now = new Date();
		var time = new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
		return time;
	 }
	 
	 function setTimeLocale(param)
	 {
		var now = new Date(param);
		var time = new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
		return time;
	 }
	

	function getTime()
	{
		var now = new Date();
		var hours = now.getHours();
		var minutes = now.getMinutes();
	
		var ampm = hours > 12 ? 'PM' : 'AM';
		hours = hours % 12;
		hours = hours ? hours : 12;
		minutes = minutes <= 10 ? minutes:  '0' + minutes;
		var timewithampm = ('0'+hours) + ':' +  minutes + ampm;
		
		return timewithampm;
	}

	function zeroFill(i) 
	{
		var no = (i < 10 ? 0 : '') + i;
		return no;
	}

	function formReset(form)
	{
		$(form)[0].reset();
		$('input[type=text]').empty().trigger('change');
		$('textarea[type=text]').empty().trigger('change');
		$('input[type=select]').empty().trigger('change');
		$('input[type=select2-hidden-accessible]').empty().trigger('change');
		$('input[type=text]').removeClass('is-valid');
		$('textarea[type=text]').removeClass('is-valid');
	}

	function uppercase()
	{
		$('input[type=text]').keyup(function() {
		$(this).val($(this).val().toUpperCase());
		});
		$('textarea[type=text]').keyup(function() {
		$(this).val($(this).val().toUpperCase());
		});
	}

	function enlargeImage()
	{
		$("#modalEnlarge").modal('show');
			document.getElementById('ImageEnlarge').innerHTML = 
			'<img  id ="resultImg" class="img-fluid img-thumbnail rounded mx-auto d-block" src="'+$("#PatientImage").attr("src")+'"/>';
	
	}

	function iniCamera()
	{
		$("#modalSnapShot").modal('show');
		Webcam.set({
		width: 640,
		height: 480,
		dest_width: 640,
		dest_height: 480,
		crop_width: 480,
		crop_height: 480,
		image_format: 'jpeg',
		jpeg_quality: 90,
		flip_horiz: true,
		force_flash: false
		});
		Webcam.attach('#my_camera');
	}

	function take_snapshot() 
	{
		$("#modalSnapShot").modal('hide');
		$("#modalSnapShotResult").modal('show');
		Webcam.snap( function(data_uri) {
		document.getElementById('ImageSnapshot').innerHTML = 
		'<img  id ="resultImg" class="img-fluid img-thumbnail rounded mx-auto d-block" src="'+data_uri+'"/>';
		});
	}

	function save_snapshot() 
	{
		$("#modalSnapShotResult").modal('hide');
		var base64image =  document.getElementById("resultImg").src;
		$("#info_pic").val(base64image);
		$("img[id^='patientPhoto']").prop('src', base64image);
		Webcam.reset();
	}

	function resetCam()
	{
		Webcam.reset();
	}
	function fullname()
	{
		$('#info_fullname').val($('#info_lname').val() +','+ $('#info_fname').val()+' '+$('#info_mname').val()+' '+$('#info_suffix').val());	 
	}

	function maidenname()
	{
		$('#info_mot_fullname').val($('#info_mot_fname').val()+' '+$('#info_mot_mname').val()+' '+$('#info_mot_lname').val());	 
	}
	
	function setCookie(cName,cValue,expDay){
		var expDate = new Date();
		expDate.setTime(expDate.getTime() + (expDay*24*60*60*1000));
		var expires = "expires=" + expDate.toGMTString();
		document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
	}

	function getCookie(cName){
    var cookieName = cName + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookiePiece = decodedCookie.split(";");

    for( var i = 0; i < cookiePiece.length; i++){
        var cookieCrumbs = cookiePiece[i];
        while(cookieCrumbs.charAt(0) == " "){
            cookieCrumbs = cookieCrumbs.substring(1);
        }
        if(cookieCrumbs.indexOf(cookieName) == 0){
            return cookieCrumbs.substring(cookieName.length,cookieCrumbs.length);
        }
    }
    return "";
	}
	
	function deleteAllCookie()
	{
		var cookies = document.cookie.split(";");
		for(var i=0; i < cookies.length; i++) {
			var equals = cookies[i].indexOf("=");
			var name = equals > -1 ? cookies[i].substr(0, equals) : cookies[i];
			document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
		}
	}

	function removeCookie(cName)
	{
		document.cookie=cName+"=; expires=Thu, 01 Jan 1970";
	}

//liveTime
	var span = document.getElementById('liveTime');
	function liveTime() 
	{
		  var d = new Date();
		  var s = ('0'+ d.getSeconds()).slice(-2);
		  var m = ('0'+ d.getMinutes()).slice(-2);
		  var h = ('0'+ d.getHours()).slice(-2);
		  var month = d.getDate();
		  var date = ('0'+ d.getMonth()).slice(-2);
		  var year = d.getFullYear();
		  span.textContent =date+"/"+month+"/"+year +"   "+h + ":" + m + ":" + s;
	}
	
	function employeeInformation(id)
	{
		var empID=URLencode(id);
		var obj;
		  $.ajax({
		  type: "POST",
		  url:baseURL+"Ref_Personnel/Personnelinfo/"+empID,
		  data: "JSON",
		  success: function(data,response)
			{ 
				var obj  = $.parseJSON(data);
				if(obj){
			/* 	var empName = obj['lastname'].concat(' ',obj['firstname'],' ',obj['middlename']);
				$('#empName').text(empName);
				$('#empNo').text(obj['employeeid']);
				$('#empSex').text(obj['provsex']);
				$('#empPos').text(obj['postitle']);
				$('#empBdate').text(obj['provbdate']);
				$('#empEmail').text(obj['emailadd']);
				$("#loginName").text('Hi,'+empName); */
				}
			},
			error: function(data,textStatus,xhr) 
			{
				toaster.error("Error:"+xhr);
			}
		  });
	}
	
	function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

//    return [year, month, day].join('-');
    return [month, day, year].join('/');
	}
 

	function formatDatetime(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();
        hour = '' + d.getHours();
        min = '' + d.getMinutes();
        sec = '' + d.getSeconds();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;
	if (hour.length < 2) 
        hour = '0' + hour;
	if (min.length < 2) 
        min = '0' + min;
	if (sec.length < 2) 
        sec = '0' + sec;

	var amOrPm = (d.getHours() < 12) ? "AM" : "PM";
    var aDate= [month, day, year,].join('/');
	var	aTime = [hour,min,sec].join(':');
	return aDate.concat(" ",aTime);
	}
	
	function toDecimalFormat(number){
		return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

	const numFormatter = new Intl.NumberFormat('en-US', {
		style: "decimal",
		maximumFractionDigits: 2,
		minimumFractionDigits: 2
	});

	