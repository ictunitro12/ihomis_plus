<div class="row">
<div class="col-md-2">
<h5 class="text text-success"><i class="fa fa-user-circle-o"></i> Profile</h5>
<img id="patientPhoto" class="img-fluid rounded mx-auto d-block" src="<?php echo base_url();?>assets/img/avatars/none.png" onclick="enlargeImage()"; style="cursor:pointer; margin:-4px;" height="140" width="140"  src="fa fa-spinner"></img>
</div>
<div class="col-md-4">
    <br>
<h6 class="text text-success"><i class="fa fa-info"></i> Personal Information</h6>
    <table class="table table-sm table-striped table-bordered ">
        <tr>
        <td class="text text-success"><i class="fa fa-vcard-o fa-lg"></i>&nbsp EmployeeID #: <a class="text-success" id="empid"></a></td>
        </tr>
        <tr>
        <td class="text text-success"><i class="fa fa-vcard-o fa-lg"></i>&nbsp Name #: <a class="text-success" id="doctorsname"></a></td>
        
        </tr>
        <tr>
        <td class="text text-success"><i class="fa fa-venus-mars fa-lg"></i>&nbsp Sex: <a class="text-success" id="sex"></a> <i class="fa fa-intersex fa-lg"></i>&nbsp Civil status: <a class="text-success" id="civilstatus">N/A</a>   </td>
        </tr>
        
        <tr>
        <td class="text text-success"><i class="fa fa-calendar-check-o fa-lg"></i>&nbsp BirthDate:<a class="  text-success" id="dateofbirth">N/A</a> &nbsp Age: <a class="text-success" id="age">N/A</a></td>	
        <input type="hidden" name="patAge" id ="patAge">
        </tr>
    </table>
</div>
</div>
<script src="<?php echo base_url()?>assets/scripts/doctor/doctor.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		var docID= $("#docID").val();
		DoctorInformation(docID);
	});
</script>