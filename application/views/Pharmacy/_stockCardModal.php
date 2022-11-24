<script src="<?php echo base_url()?>assets/scripts/pharmacy/stocks.js"></script>

<div class="modal" name="stockCardModal" id="stockCardModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-xl" tab-index="-1" role="form">
		<div class="modal-content">
			
			<div class="modal-body">
            <div class="clearfix">
				    <div class="text text-success h4 float-left"><i class="fa fa-pills"></i> &nbsp Stock card</div>
                    <button type="button" class="btn btn-outline-success btn-md float-right"><i class="fa fa-print"></i> Print</button>
                </div>
                <form name="frmFilterDrug" id="frmFilterDrug" method="POST">
                <div class="row">   
                    <div class="col-md-4">
                    <h4 class="text-success">Filter:</h4>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="drug" readonly
                                            placeholder="Drugs & Medicine">
                                        <button type="button" class="btn btn-outline-success" id="btnSearchDrug"><i class="fa fa-search"></i>
                                        </button>
                                        <input type="hidden" class="form-control" id="drugcomb" name="drugcomb">
                                        <input type="hidden" class="form-control" id="drugctr" name="drugctr">
                                        <input type="hidden" class="form-control" id="baldteasof" name="baldteasof">
                                    </div>
                                    <select name="chrgDrug" id="chrgDrug" class="form-control">
                                        <option value="">Select</option>
                                    </select>
                                    <div class="clearfix"></div>
                                    <br>
                                <button type="submit" class="btn btn-outline-success btn-block mb-1"><i class="fa fa-search"></i>Search</button>
                    </div>
                    <hr class="text-success"></hr>
                    <div class="col-md-8">
                        <div class="text-success h6"><i class="fa fa-pills"></i> &nbsp Drug information</div>
                        <table class="table table-sm table-bordered">
                             <tr>
                                <td class="text-white bg-success">EDPMS:</td>
                                <td id="drugepdms"></td>
                            </tr>
                            <tr>
                                <td class="text-white bg-success">Drug code:</td>
                                <td id="drugcode"></td>
                            </tr>
                            <tr>
                                <td class="text-white bg-success">Description:</td>
                                <td id="drugname"></td>
                            </tr>
                            <tr>
                                <td class="text-white bg-success">Unit/s:</td>
                                <td id="drugunits"></td>
                            </tr>

                        </table>
        
                    </div>
               </form>
                </div>
                <div class="h4 text-success"><i class="fa fa-th-list"></i> List/s</div>
				<table id="stockcardtbl"  class="table table-md table-striped table-bordered  table-hover" width="100%">
					<thead>
						<tr>
							<th rowspan="2" style="text-align:center; vertical-align:middle;">Date</th>
							<th rowspan="2" style="text-align:center; vertical-align:middle;">Reference</th>
							<th rowspan="2" style="text-align:center; vertical-align:middle;">Received/Issued</th>

                            <th colspan="3" style="text-align:center; vertical-align:middle;">Received</th>
							<th colspan="3" style="text-align:center; vertical-align:middle;">Issued</th>
							<th colspan="3" style="text-align:center; vertical-align:middle;">Balance</th>
						</tr>
                        <tr>
                            <th style="text-align:center; vertical-align:middle;">Quantity</th>
                            <th style="text-align:center; vertical-align:middle;">Unit Cost</th>
                            <th style="text-align:center; vertical-align:middle;">Total</th>
                            <th style="text-align:center; vertical-align:middle;">Quantity</th>
                            <th style="text-align:center; vertical-align:middle;">Unit Cost</th>
                            <th style="text-align:center; vertical-align:middle;">Total</th>
                            <th style="text-align:center; vertical-align:middle;">Quantity</th>
                            <th style="text-align:center; vertical-align:middle;">Unit Cost</th>
                            <th style="text-align:center; vertical-align:middle;">Total</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>

<div class="modal " id="modaldrugData" role="dialog" style="overflow: auto;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
            <div class="modal-content"> 
                <div class="modal-body">
                    <div class="h4 text-success"><i class="fa fa-pills"></i> Drug List</div>
                    <table id="drugData" style="cursor:pointer;" class="table table-sm table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Drugs & Medicine</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal"
                            data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

