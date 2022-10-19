<form name ="frmPayment_form" id="frmPayment_form" method="post">
   <div class="modal" id="ModalPayment_modal" name="ModalPayment_modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog modal-vertical-dialog modal-lg" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-header">
               <h2 class="modal-title text-success"><i class="fa fa-ok"></i> Payment</h2>
            </div>
            <div class="modal-body">
           	<table id="paymentbl" class="table table-sm table-condensed table-striped table-bordered scroll"width="100%">
				<thead>
					<tr>
						<th width="140px"></th>
						<th></th>
						<th>CHARGESLIP</th>
						<th width="140px">AMOUNT</th>
						<th width="50px"></th>
					</tr>
				</thead>
				
			</table>
            </div>
            <div class="modal-footer bg-secondary">
               <button type="submit" name="sSubmit" class="btn btn-success btn-md btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> SAVE</button>
            </div>
         </div>
      </div>
   </div>
</form>



<!--Caserate_Modal--->
<form name ="frmCaseRate" id="frmCaseRate" method="post">
   <div class="modal" id="ModalCaseRate_modal" name="ModalCaseRate_modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog modal-vertical-dialog modal-md" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-header">
               <h2 class="modal-title text-success"><i class="fa fa-wheelchair"></i>Caserate</h2>
            </div>
            <div class="modal-body">
			<div class="row">
           	  <div class="col-md-2 col-form-label  text-default mb-1">
				ICD 10:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="icd" id="icd"  class="form-control form-control-md" placeholder="ICD 10 Code">
			  </div>
			   <div class="col-md-2 col-form-label  text-default mb-1">
				 RVS:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="rvs" id="rvs"  class="form-control form-control-md" placeholder="RVS code">
			  </div>
			   <div class="col-md-2 col-form-label  text-default mb-1">
				 Description:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="desc" id="desc"  class="form-control form-control-md" placeholder="Description">
			  </div>
            </div>
            </div>
            <div class="modal-footer bg-secondary">
               <button type="submit" name="sSubmit" class="btn btn-success btn-md	 btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> SEND</button>
            </div>
         </div>
      </div>
   </div>
</form>

<!--PBEF_Modal--->
   <div class="modal" id="ModalCaseRateTable_modal" name="ModalCaseRateTable_modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog modal-vertical-dialog modal-md" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-header">
               <h2 class="modal-title text-success"><i class="fa fa-th-list"></i>CaseRate List</h2>
            </div>
            <div class="modal-body">
			
				<div CLASS="text text-success" id="test">as</div>
			<table id="caseRateTable" class="table table-sm table-condensed table-striped table-bordered scroll" width="100%">
				<thead>
					<tr>
						<th width="140px">CODE</th>
						<th>CASERATE</th>
						<th>DESCRIPTION</th>
						<th width="140px">DATE</th>
					</tr>
				</thead>
			</table>
			
		
            </div>
            </div>
		</div>
</div>
	 
<!--MemberPin_Modal--->
<form name ="frmMemberPin" id="frmMemberPin" method="post">
   <div class="modal" id="ModalMemberPin_modal" name="ModalMemberPin_modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-header">
               <h2 class="modal-title text-success"><i class="fa fa-search"></i> Member Pin</h2>
            </div>
            <div class="modal-body">
			<div class="row">
           	  <div class="col-md-2 col-form-label  text-default mb-1">
				Firstname:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="fname" id="fname"  autocomplete ="off" class="form-control form-control-lg" placeholder="Firstname">
			  </div>
			   <div class="col-md-2 col-form-label  text-default mb-1">
				 Middlename:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="mname" id="mname" autocomplete ="off" class="form-control form-control-lg" placeholder="Middlename">
			  </div>
			   <div class="col-md-2 col-form-label  text-default mb-1">
				 Lastname:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="lname" id="lname" autocomplete ="off" class="form-control form-control-lg" placeholder="Lastname">
			  </div>
			   <div class="col-md-2 col-form-label  text-default mb-1">
				 Suffix:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="suffix" id="suffix" autocomplete ="off" class="form-control form-control-lg" placeholder="Suffix">
			  </div>
			    <div class="col-md-2 col-form-label  text-default mb-1">
				 BirthDate:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="date" name="bdate" id="bdate" autocomplete ="off"  class="form-control form-control-lg" placeholder="BirthDate">
			  </div>
            </div>
            </div>
            <div class="modal-footer bg-secondary">
               <button type="submit"  class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> SEND</button>
            </div>
         </div>
      </div>
   </div>
</form>

   <div class="modal" id="ModalMemberPinResponse_modal" name="ModalMemberPinResponse_modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-header">
               <h2 class="modal-title text-success"><i class="fa fa-user"></i> Member Pin</h2>
            </div>
            <div class="modal-body">
				<div class="form-label">Member Pin</div>
				<div class="h4 text text-success" id="responsePin"></div>
            
            </div>
         </div>
      </div>
   </div>

<!--PBEF_Modal--->
<form name ="frmPBEF" id="frmPBEF" method="post">
   <div class="modal fade" id="ModalPBEF_modal" name="ModalPBEF_modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog modal-vertical-dialog modal-xl" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-header">
               <h2 class="modal-title text-success"><i class="fa fa-check"></i>Claim Eligibility</h2>
            </div>
            <div class="modal-body">
			<div class="row">
			<div class="col-sm-4">
			<legend class="text text-success"><i class="fa fa-vcard"></i> Member Information</legend>
			<div class="row">
			  <div class="col-md-2 col-form-label  text-default">
				Pin:
			  </div>
			  <div class="col-md-10 ">
				 <input type="text" name="memberPin" id="memberPin"  class="form-control form-control-sm" placeholder="Member Pin">
			  </div>
           	  <div class="col-md-2 col-form-label  text-default">
				 Lastname:
			  </div>
			  <div class="col-md-10">
				 <input type="text" name="memberLastname" id="memberLastname"  class="form-control form-control-sm" placeholder="Lastname">
			  </div>
			   <div class="col-md-2 col-form-label  text-default">
				 Middlename:
			  </div>
			  <div class="col-md-10 ">
				 <input type="text" name="memberMiddlename" id="memberMiddlename"  class="form-control form-control-sm" placeholder="Middlename">
			  </div>
			   
			   <div class="col-md-2 col-form-label  text-default">
				Firstname:
			  </div>
			  <div class="col-md-10 ">
				 <input type="text" name="memberFirstname" id="memberFirstname"  class="form-control form-control-sm" placeholder="Firstname">
			  </div>
			   <div class="col-md-2 col-form-label  text-default">
				 Suffix:
			  </div>
			  <div class="col-md-10 ">
				<select class="form-control  form-control-sm" name="memberSuffix" id="memberSuffix">
					<option value="">SELECT</option>
					<option value="JR">Jr.</option>
					<option value="SR">Sr.</option>
					<option value="I">I</option>
					<option value="II">II</option>
					<option value="III">III</option>
				</select>
			  </div>
			    <div class="col-md-2 col-form-label  text-default">
				 BirthDate:
			  </div>
			  <div class="col-md-10">
				 <input type="date" name="memberBdate" id="memberBdate"  class="form-control form-control-sm" placeholder="BirthDate">
			  
			  </div>
			  <div class="col-md-2 col-form-label  text-default">
				 Sex:
			  </div>
			  <div class="col-md-10">
				<select class="form-control  form-control-sm" name="memberSex" id="memberSex">
					<option value="">SELECT</option>
					<option value="M">MALE</option>
					<option value="F">FEMALE</option>
				</select>
			  </div>
				<div class="col-md-2 col-form-label  text-default">
				 Mailing Address:
			  </div>
			   <div class="col-md-10">
				<textarea class="form-control  form-control-sm" name="memberMailing" placeholder="Mailing Address" id="memberMailing"></textarea>
			  </div>
            </div>
			
			<hr class="text text-success"></hr>
				<legend class="text text-success"><i class="fa fa-stethoscope"></i> Patient Information</legend>
				<div class="row">
           	    <div class="col-md-2 col-form-label  text-default">
				 Lastname:
				</div>
				<div class="col-md-10">
				 <input type="text" name="patLname" id="patLname"  class="form-control form-control-sm" placeholder="Lastname">
			  </div>
			   <div class="col-md-2 col-form-label  text-default">
				 Middlename:
			  </div>
			  <div class="col-md-10">
				 <input type="text" name="patMname" id="patMname"  class="form-control form-control-sm" placeholder="Middlename">
			  </div>
			
			   <div class="col-md-2 col-form-label  text-default">
				Firstname:
			  </div>
			  <div class="col-md-10">
				 <input type="text" name="patFname" id="patFname"  class="form-control form-control-sm" placeholder="Firstname">
			  </div>
			   <div class="col-md-2 col-form-label  text-default ">
				 Suffix:
			  </div>
			  <div class="col-md-10">
				 <input type="text" name="patSuffix" id="patSuffix"  class="form-control form-control-sm" placeholder="Suffix">
			  </div>
			    <div class="col-md-2 col-form-label  text-default">
				 BirthDate:
			  </div>
			  <div class="col-md-10">
				 <input type="date" name="memBdate" id="patBdate"  class="form-control form-control-sm" placeholder="BirthDate">
			  </div>
			  <div class="col-md-2 col-form-label  text-default ">
				 Sex:
			  </div>
			  <div class="col-md-10">
				<select class="form-control  form-control-sm" name="patSex" id="patSex">
				<option value="">SELECT</option>
				<option value="M">MALE</option>
				<option value="F">FEMALE</option>
				</select>
			  </div>
				<div class="col-md-2 col-form-label  text-default ">
				Admission:
			  </div>
			   <div class="col-md-10">
				<input type="date" class="form-control form-control-sm" name="patAdmDate" placeholder="Mailing Address" id="patAdmDate">
			  </div>
			<div class="col-md-2 col-form-label  text-default ">
				Discharge:
			  </div>
			   <div class="col-md-10">
				<input type="date" class="form-control form-control-sm" name="patDisDate" placeholder="Mailing Address" id="patDisDate">
			  </div>
				</div>
            </div>
          
			<div class="col-md-8">
			
			  <embed id="eclaimsPBEF" type="application/pdf" frameborder="2"  src ="" width="100%" height ="100%" class="border-success">
            </div>
			  </div>
            </div>
            <div class="modal-footer bg-secondary">
               <button type="submit"  class="btn btn-success btn-md	 btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-check"></i> VALIDATE</button>
            </div>
         </div>
      </div>
   </div>
</form>

<!--Doctoraccreditation_Modal--->
<form name ="frmDoctorAccre" id="frmDoctorAccre" method="post">
   <div class="modal" id="ModalAccre_modal" name="ModalAccre_modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-header">
               <h2 class="modal-title text-success"><i class="fa fa-search"></i> Member Pin</h2>
            </div>
            <div class="modal-body">
			<div class="row">
           	  <div class="col-md-2 col-form-label  text-default mb-1">
				Accreditation no:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="AccNo" id="AccNo"  autocomplete ="off" class="form-control form-control-lg" placeholder="Accreditation">
			  </div>
			   <div class="col-md-2 col-form-label  text-default mb-1">
				 Admission Date:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="AdmDt" id="AdmDt" autocomplete ="off" class="form-control form-control-lg" placeholder="Admissiondate">
			  </div>
			   <div class="col-md-2 col-form-label  text-default mb-1">
				 Discharge Date:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="DisDt" id="DisDt" autocomplete ="off" class="form-control form-control-lg" placeholder="Dischargedate">
			  </div>
			   <div class="col-md-2 col-form-label  text-default mb-1">
				 Suffix:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="text" name="suffix" id="suffix" autocomplete ="off" class="form-control form-control-lg" placeholder="Suffix">
			  </div>
			    <div class="col-md-2 col-form-label  text-default mb-1">
				 BirthDate:
			  </div>
			  <div class="col-md-10 mb-1">
				 <input type="date" name="bdate" id="bdate" autocomplete ="off"  class="form-control form-control-lg" placeholder="BirthDate">
			  </div>
            </div>
            </div>
            <div class="modal-footer bg-secondary">
               <button type="submit"  class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> SEND</button>
            </div>
         </div>
      </div>
   </div>
</form>

   <div class="modal" id="ModalMemberPinResponse_modal" name="ModalMemberPinResponse_modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-header">
               <h2 class="modal-title text-success"><i class="fa fa-user"></i> Member Pin</h2>
            </div>
            <div class="modal-body">
				<div class="form-label">Member Pin</div>
				<div class="h4 text text-success" id="responsePin"></div>
            
            </div>
         </div>
      </div>
   </div>



