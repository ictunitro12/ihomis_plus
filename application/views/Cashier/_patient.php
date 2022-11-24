<div class="tab-pane fade show active " id="patient" role="tabpanel" aria-labelledby="patient-tab">
<div class="row">
<div class="col-md-6">
	<div class="text-success h4"><i class="fa fa-user"></i> Patient transaction/s</div>
</div>
    <div class="col-md-6">
    <div class="btn-group pull-right" role="group" aria-label="">
        <button type ="button" id="btnPatientSearch"  onclick="search();" class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-search"></i> Search</button>
    	<div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-print"></i> Print Bill
        </button>
		<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
			<a class="dropdown-item" id="finalBill"><i class="fa fa-file-pdf-o"></i>&nbsp Final Bill</a>
			<a class="dropdown-item" data-toggle="modal" data-target="#ModalFinalBill" href="#"><i class="fa fa-file-pdf-o"></i>&nbsp Tentative Bill</a>
		</div>
    </div>
    </div>
    </div>
    </div>
    <?php echo ViewPatientInformation2();?>			
			<div class="row">
				<div class="col-md-2 border-right">
					<div class="row border-bottom p-1"> 
						<div class="col-md-12">
							<div class="h6 form-label text-success">Mode:</div>
							<div class="form-check">
								<input  type="radio"  id="modeofCharge1" onchange="modeof(this.value);" name="modeofCharge" value="1" >
									<span class="text-success"> :Chargeslip</span>
									<label class="form-check-label" for="pchrgslip"></label>
							</div>
							<div class="form-check">
								<input  type="radio"  id="modeofCharge2" name="modeofCharge" onchange="modeof(this.value);" value="2">
								<span class="text-success"> :Type of Account</span>
								<label class="form-check-label" for="toc"></label>
							</div>
						</div>
					</div>
					<div id="modeOfCharges"></div>
		
					</div>
					<div class="col-md-10">
						<div class="clearfix">
						
							<div class="btn-group float-right">
								<button type="button" class="btn  btn-outline-success mb-2" id="btnLate"  onclick="late();"><i class="fa fa-calendar"></i>&nbsp Late</button>
								<button type="button" class="btn  btn-outline-success mb-2" id="btnInitial" onclick="initialpayment();"><i class="fa fa-dot-circle-o"></i>&nbsp Initial</button>
								<button type="button" class="btn  btn-outline-success mb-2" id="btnFull" onclick="fullpayment();"><i class="fa fa-check"></i>&nbsp Full</button>
								<button type="button" class="btn  btn-outline-success mb-2" id="btnFull" onclick="fullpayment();"><i class="fa fa-refresh"></i>&nbsp Distribution</button>
								<button type="button" class="btn  btn-outline-success mb-2" id="btnItemized" onclick="itempayment();"><i class="fa fa-list-alt"></i>&nbsp Itemized</button>
								<button type="button" class="btn  btn-outline-success mb-2" id="btnReceipt" onclick="receipt();"><i class="fa fa-file-pdf-o"></i>&nbsp Receipt/s</button>
							</div>
						</div>
						<div id="paymentList"></div>
						<div id="roomFee"></div>
						<div class="row">
							<div class="col-md-12">
								<div id="profservList"></div>
							</div>
							<div class="col-md-6">
								<div id="assist"></div>
							</div>
							<div class="col-md-6">
								<div id="philhealth"></div>
							</div>
							<div class="col-md-6">
								<div class="text text-danger h5 mb-2"><i class="fa fa-info-circle"></i> Deductions</div>
								<div id="promissory"></div>
							</div>
						</div>
						<div class="row border-bottom mb-2"> 
							<div class="col-md-2"><div class="form-label text-success h4"> Initial deposit:</div></div>
							<div class="col-md-4">
								<input class="form-control form-control-lg  mb-1" readonly type="text"  name="initPayment" id="initPayment" placeholder="Initial Deposit">
							</div>
							<div class="col-md-2"><div class="form-label text-success h4"> Discount/s:</div></div>
							<div class="col-md-4">
								<input class="form-control form-control-lg  mb-1" readonly type="text"  name="discountAmount" id="discountAmount" placeholder="Total Discount">
							</div>
							<div class="col-md-6"><div class="form-label text-success h4"> Hospital charges:</div></div>
							<div class="col-md-6">
								<input class="form-control form-control-lg  mb-1" type="number" disabled name="hospitalTotal" id="hospitalTotal" placeholder="Subtotal">
							</div>
						</div>
						<div class="row border-bottom"> 
							<div class="col-md-8"><div class="form-label text-success h4">Grand Total:</div></div>
							<div class="col-md-4">
								<input class="form-control form-control-lg  mb-1" type="number" disabled name="GTotal" id="GTotal" placeholder="Grand Total">
							</div>
						</div>
					</div>
				</div>
</div>
			