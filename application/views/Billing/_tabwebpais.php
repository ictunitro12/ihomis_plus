<form id="frmWebpais_form" name ="frmWebpais_form" method="post">
   <div class="modal" id="ModalWebpais_modal" name="ModalWebpais_modal"  role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
         <div class="modal-content card-accent-success" >
            <div class="modal-body " >
               <div class="clearfix">
				   <h4 class="text-success float-left"><i class="fa fa-exchange "></i> Webpais</h4>
				   <a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
               </div>
			   <div class="hr clearfix card card-accent-success"></div>
               <div class="h5 card-title text text-success"><i class="fa fa-user"></i>&nbsp Details</div>
               <div class="mb-1">
                  <div class="row">
                     
                     <div class="col-md-2 col-form-label  text-success mb-1 ">
                        Indorsement Date:
                     </div>
                     <div class="col-md-4 mb-1">
                        <input type="datetime-local" name="indDate" id="indDate"  class="form-control form-control-md" placeholder="">
                     </div>
					 <div class="col-md-2 col-form-label  text-success mb-1">
                          Expiry Date:
                     </div>
                     <div class="col-md-4 mb-1">
                        <input type="datetime-local" name="expDate" id="expDate" class="form-control form-control-md"  placeholder="">
                     </div>	
                  </div>
                  <div class="row">
                     <div class="col-md-2 col-form-label  text-success mb-1">
						Unique Code:
                     </div>
                     <div class="col-md-4 mb-1">
                        <input type="text" name="unqCode" id="unqCode"  class="form-control form-control-md" placeholder="Unique Code">
                     </div>
					  <div class="col-md-2 col-form-label  text-success mb-1">
                       Fund Source:
                     </div>
                     <div class="col-md-4 mb-1">
                        <select  name="fundsrc_fund" id="fundsrc_fund"  class="form-control form-control-md" placeholder="Cost Center" >
                          
                        </select>
                     </div>
                  </div>
				  <div class="row">
				   <div class="col-md-2 col-form-label  text-success mb-1">
						Fund Amount:
                     </div>
                     <div class="col-md-4 mb-1">
                       <input type="text" name="fundAmount" readonly id="fundAmount" class="form-control form-control-md"  placeholder="0.00">
                     </div>
			
				   <div class="col-md-2 col-form-label  text-success mb-1">
						Fund Balance:
                     </div>
                     <div class="col-md-4 mb-1">
                       <input type="text" name="fundBalance" readonly id="fundBalance" class="form-control form-control-md"  placeholder="0.00">
                     </div>
					 	  </div>
               </div>
			   
                <div class="row">
				 <div class="col-md-6">
				 <h5 class="clearfix text text-success"><i class="fa fa-th-list"></i> Item List</h5>
				 </div>
				  <div class="col-md-6 pull-right">
				  <button type="button" id="btnWeb" disabled class="btn btn-success btn-sm pull-right Add"><i class="fa fa-plus"></i></button>
				  </div>
				  </div>
				  	<hr class="card card-accent-success">
				      <div class="row">
					   <div class="col-md-12">
                     <div class="text-success  ">
						<table id="webpaisList" class="table table-sm table-bordered table-condensed  scroll" width="100%">
							<thead>
								<tr>
									<th></th>	
									<th>Type of Charge</th>	
									<th>Amount</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
			
								<th class ="h5 text text-success"> </th>
								<th class ="h5 text text-success"> Total :</th>
								<th align="left" class ="h5 text text-success Gtotal" id="GTotal"></th>
								</tr>
							</tfoot>
						</table>						
                     </div>
                     </div>
                     </div>
				<div class="hr clearfix card card-accent-success"></div>
					 <div class="clearfix">
				   <button type="submit" class="btn btn-success btn-md  float-left  mb-1"><i class="fa fa-save"></i></button>
               </div>
            </div>
			<div class="modal-footer ">
				<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
				<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
			</div>
            <input type="hidden" name="webformIden" id="webformIden" >
            <input type="hidden" name="webEnccode" id="webEnccode">
            <input type="hidden" name="webHpercode" id="webHpercode">
            <input type="hidden" name="webpaisTotal" id="webpaisTotal">
         </div>
      </div>
   </div>
</form>
<form id="frmWebDelete" name="frmWebDelete" method="post">
	<div class="modal fade" id="ModalWebDelete" name="ModalWebDelete" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" >
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="unqCodeDel" id="unqCodeDel">
			<input type="hidden" name="deleteWeb" id="deleteWeb" value="delete">
		</div>
		<div class="modal-footer ">
			<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
			<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
		</div>
</form>
	  
	<div class="tab-pane fade" id="web" role="tabpanel" aria-labelledby="web-tab">
			<div class="row">
			<div class="col-md-6">
				<div class="h4 text text-success"> 
				<i class="fa fa-th-list"></i>
					&nbsp Webpais
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type ="button" id = "btnWebpais" title=""  class="btn btn-outline-success btn-md mb-1" data-style="zoom-in"><i class="fa fa-plus"></i> Add Webpais
					</button>
			   </div>
			 </div>		
			</div>	
		<table id="chargeweb" class="table table-sm table-condensed table-bordered "width="100%">
					<thead>
						<tr>
							<th></th>
							<th>Code</th>
							<th>Transact Date</th>
							<th>Indorsement Date</th>
							<th>Expiry Date</th>
							<th>Amount</th>
							<th>Remaining</th>
							<th>Fund Code</th>
							<th width="50px"></th>
						</tr>
					</thead>
		</table>
		</div>
	<script src="<?php echo base_url()?>assets/scripts/billing/webpais.js"></script>