<?php $years = range(1980, strftime("%Y", time())); ?>
<style>

table#deliverySupplyTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#adjustmentSupplyTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#nonDrugsLib_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#class1Lib_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#class2Lib_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#class2HLib_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#tblSearchStockCard.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="row">
  <div class="col-md-12">
    <div class="card card-accent-success">
      <div class="card-body table-responsive">
        <!--TABS-->
        <ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
          <li class="nav-item">
            <a class="nav-link text text-success active" id="delivery-tab" data-toggle="tab" href="#tabpane-delivery" role="tab" aria-controls="er">&nbsp DELIVERIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text text-success" id="adjustment-tab" data-toggle="tab" href="#tabpane-adjustment" role="tab" aria-controls="er">&nbsp ADJUSTMENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text text-success" id="replenish-tab" data-toggle="tab" href="#tabpane-replenish" role="tab" aria-controls="er">&nbsp REPLENISH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text text-success" id="stock-tab" data-toggle="tab" href="#tabpane-stock" role="tab" aria-controls="er">&nbsp STOCK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text text-success" id="card-tab" data-toggle="tab" href="#tabpane-card" role="tab" aria-controls="er">&nbsp STOCK CARD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text text-success" id="closing-tab" data-toggle="tab" href="#tabpane-closing" role="tab" aria-controls="er">&nbsp INVENTORY CLOSING</a>
          </li>
        </ul>

        <!--CONTENTS-->
        <div class="tab-content" id="myTabContent">
          <!--delivery table-->
          <div class="tab-pane fade show active" id="tabpane-delivery" role="tabpanel" aria-labelledby="delivery-tab">
            <div class="row">
              <div class="col-md-12">
                <div class="pull-right">
                  <button type="button" id="btnAddDelivery" name="btnAddDelivery" style="margin:5px;" data-toggle="tooltip" class="btn btn-success btn-md btd-ladda" title="Add Delivery"><i class="fa fa-plus"></i></button>
                </div>
              </div>
              <div class="col-md-12">
                <table id="deliverySupplyTable" class="table table-sm table-striped table-borderless table-condensed table-hover "width="100%">
                  <thead class="thead-dark">
                    <tr>
                      <th></th>
                      <th>DELIVERY #</th>
                      <th>DELIVERY DATE</th>
                      <th>SUPPLIER</th>
                      <th>ITEM TYPE</th>
                      <th>ITEM DESCRIPTION</th>
                      <th>QTY DELIVERED</th>
                      <th>EXPIRATION DATE</th>
                      <th>TYPE OF ACCOUNT</th>
                      <th>DELIVERY TYPE</th>
                      <th  width ="50px">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot class="thead-dark">
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th  width ="50px"></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!--delivery table-->

          <!--adjustment table-->
          <div class="tab-pane fade" id="tabpane-adjustment" role="tabpanel" aria-labelledby="adjustment-tab">
            <div class="row">
              <div class="col-md-12">
                <div class="pull-right">
                  <button type="button" id="btnAddAdjustment" name="btnAddAdjustment" style="margin:5px;" data-toggle="tooltip" class="btn btn-success btn-md btd-ladda" title="Add Adjustment"><i class="fa fa-plus"></i></button>
                </div>
              </div>
              <div class="col-md-12">
                <table id="adjustmentSupplyTable" class="table table-sm table-striped table-borderless table-condensed table-hover "width="100%">
                  <thead class="thead-dark">
                    <tr>
                      <th></th>
                      <th>REFERENCE #</th>
                      <th>DATE</th>
                      <th>ITEM TYPE</th>
                      <th>ITEM DESCRIPTION</th>
                      <th>QUANTITY</th>
                      <th>UNIT OF MEASURE</th>
                      <th>QUANTITY</th>
                      <th>PLUS/MINUS</th>
                      <th>TYPE OF ACCOUNT</th>
                      <th>REMARKS</th>
                      <th>ACTIONS</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot class="thead-dark">
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!--adjustment table-->

          <!--stock-->
          <div class="tab-pane fade" id="tabpane-stock" role="tabpanel" aria-labelledby="stock-tab">
            <br/>
            <div class="row">
              <div class="col-md-12">
                <div class="card card-accent-success">
                  <div class="card-body table-responsive">
                    <ul class="nav nav-tabs nav-tabs-stock nav-justified" id="supplies_stock_tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link text text-success active" id="nonDrugsLib-tab" data-toggle="tab" href="#nonDrugsLib" role="tab" aria-controls="nonDrugsLib" aria-expanded="true">NON-DRUGS LIBRARY</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text text-success" id="class1Lib-tab" data-toggle="tab" href="#class1Lib" role="tab" aria-controls="class1Lib">CLASS 1 LIBRARY</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text text-success" id="class2Lib-tab" data-toggle="tab" href="#class2Lib" role="tab" aria-controls="class2Lib">CLASS 2 LIBRARY</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text text-success" id="class2HLib-tab" data-toggle="tab" href="#class2HLib" role="tab" aria-controls="class2HLib">CLASS 2 H LIBRARY</a>
                      </li>
                    </ul>

                    <div class="tab-content">

                      <!-- NON DRUGS LIBRARY -->
                      <div class="tab-pane fade show active" id="nonDrugsLib" role="tabpanel" aria-labelledby="nonDrugsLib-tab">
                        <div class="row">

                          <div class="col-md-12">
                            <div class="pull-right">
                              <button type="button" id="btnAddStockLibrary" name="btnAddStockLibrary" style="margin:5px;" data-toggle="tooltip" class="btn btn-success btn-md btd-ladda" title="Add Stock Library"><i class="fa fa-plus"></i></button>

                            </div>
                          </div>
                          <div class="col-md-12">
                            <table id="nonDrugsLib_tbl" class="table table-md table-striped table-borderless table-condensed table-hover" style="width: 100%;">
                              <thead class="thead-dark">
                                <tr>
                                  <th>MAJOR CATEGORY CODE</th>
                                  <th>DESCRIPTION</th>
                                  <th>STATUS</th>
                                  <th>DATE AS OF</th>
                                </tr>
                              </thead>
                              <tbody>

                              </tbody>
                              <tfoot>
                              </tfoot>
                            </table>
                          </div>
                        </div>
                      </div>

                      <!-- CLASS 1 LIBRARY -->
                      <div class="tab-pane fade" id="class1Lib" role="tabpanel" aria-labelledby="class1Lib-tab">
                        <table id="class1Lib_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="width: 100%;">
                          <thead class="thead-dark">
                            <tr>
                              <th>MAJOR CATEGORY CODE</th>
                              <th>SUB-1 CATEGORY CODE</th>
                              <th>DESCRIPTION</th>
                              <th>cl1comb</th>
                              <th>STATUS</th>
                            </tr>
                          </thead>
                          <tbody></tbody>
                          <tfoot>
                          </tfoot>
                        </table>
                      </div>

                      <!-- CLASS 2 LIBRARY -->
                      <div class="tab-pane fade" id="class2Lib" role="tabpanel" aria-labelledby="class2Lib-tab">
                        <table id="class2Lib_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="width: 100%;">
                          <thead class="thead-dark">
                            <tr>
                              <th>SUB-1 CATEGORY</th>
                              <th>SUB-2 CATEGORY CODE</th>
                              <th>STATUS</th>
                              <th>STOCK NO.</th>
                              <th>BAR CODE</th>
                              <th>DESCRIPTION</th>
                              <th>UNIT OF MEASUREMENT CODE</th>
                              <th>BEGINNING BALANCE</th>
                              <th>STOCK BALANCE</th>
                              <th>PHARMACEUTICAL?</th>
                              <th>RE-ORDER LEVEL</th>
                              <th>cl2comb</th>
                            </tr>
                          </thead>
                          <tbody></tbody>
                          <tfoot>
                          </tfoot>
                        </table>
                      </div>

                      <!-- CLASS 2 H LIBRARY -->
                      <div class="tab-pane fade" id="class2HLib" role="tabpanel" aria-labelledby="class2HLib-tab">
                        <table id="class2HLib_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover" style="width: 100%;">
                          <thead class="thead-dark">
                            <tr>
                              <th>DESCRIPTION</th>
                              <th>PURCHASE PRICE</th>
                              <th>SELLING PRICE</th>
                              <th>STATUS</th>
                              <th>UNIT OF MEASURE</th>
                              <th>DATE AS OF</th>
                            </tr>
                          </thead>
                          <tbody></tbody>
                          <tfoot>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--stock--> 



          <!--Stock Card--> 
          <div class="tab-pane fade" id="tabpane-card" role="tabpanel" aria-labelledby="card-tab">
            <br/>
            <div class="row">
              <div class="col-md-12">
                <div class="pull-right">
                </div>
                <!--<h3 class="text-center font-weight-bold fs-30">Non-Drugs</h3>-->
                <h3 class="text-center font-weight-bold fs-30" id="txtInventoryClosingDateRange"></h3>
              </div>

              <div class="col-md-12">
                <div class="card card-accent-success">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-10">
                        <div class="h3 text text-success"> 
                          <i class="fa fa-th-list"></i>
                          &nbsp  Stock Card
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="btn-group pull-right" role="group" aria-label="">
                          <button type="button" id="btnSearchStockCard" name="btnSearchStockCard" style="margin:5px;" data-toggle="tooltip" class="btn btn-success btn-md btd-ladda" title="Search">Search</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="box-body box-profile">
                      <div class="row">
                        <div class="col-md-7">
                          <ul class="list-group">
                            <li class="list-group-item">
                              <b class="text text-success"><i class="fa fa-address-book"></i>&nbsp Entity Name:</b> 
                              <a class="pull-right text text-success" id ="cardEntityName"></a>
                            </li>
                            <li class="list-group-item">
                              <b class="text text-success"><i class="fa fa-user-md"></i>&nbsp Item:</b> 
                              <a class="pull-right text text-success" id ="cardItemDesc"></a>
                            </li>		
                            <li class="list-group-item">
                              <b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp Description:</b>
                              <a class="pull-right text text-success" id="carddescription"></a>
                            </li>
                            <li class="list-group-item">
                              <b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp Unit of Measure:</b>
                              <a class="pull-right text text-success" id="cardUom"></a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-5">
                          <ul class="list-group">
                            <li class="list-group-item">
                              <b class="text text-success"><i class="fa fa-address-book"></i>&nbsp Fund Cluster:</b> 
                              <a class="pull-right text text-success" id ="cardFundCluster"></a>
                            </li>
                            <li class="list-group-item">
                              <b class="text text-success"><i class="fa fa-user-md"></i>&nbsp Stock Number:</b> 
                              <a class="pull-right text text-success" id ="cardStockNumber"></a>
                            </li>		
                            <li class="list-group-item">
                              <b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp Re-order Point:</b>
                              <a class="pull-right text text-success" id="cardReorder"></a>
                            </li>
                            <li class="list-group-item">
                              <b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp Location:</b>
                              <a class="pull-right text text-success" id="cardLocation"></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer"></div>
                </div>
              </div>

              <div class="col-md-12">
                <table id="tblSearchStockCard" class="table table-sm table-striped table-borderless table-condensed table-hover "width="100%">
                  <thead class="thead-dark">
                    <tr>
                      <th rowspan="2">Date</th>
                      <th rowspan="2">Reference</th>
                      <th rowspan="2">From who received or whom issued</th>
                      <th colspan="3" class="text-center">Received</th>
                      <th colspan="3" class="text-center">Issued</th>
                      <th colspan="3" class="text-center">Balance</th>
                    </tr>
                    <tr>
                      <th>Quantity</th>
                      <th>Unit Cost</th>
                      <th>Total Cost</th>
                      <th>Quantity</th>
                      <th>Unit Cost</th>
                      <th>Total Cost</th>
                      <th>Quantity</th>
                      <th>Unit Cost</th>
                      <th>Total Cost</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot class="thead-dark">
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!--Stock Card--> 


          <!--inventory closing--> 
          <div class="tab-pane fade" id="tabpane-closing" role="tabpanel" aria-labelledby="closing-tab">
            <br/>
            <div class="row">
              <div class="col-md-12">
                <div class="pull-right">
                  <button type="button" id="btnGenerateInventoryClosing" name="btnGenerateInventoryClosing" style="margin:5px;" data-toggle="tooltip" class="btn btn-success btn-md btd-ladda" title="Generate Inventory Closing">Retrieve</button>
                  <button type="button" id="btnGenerateInventoryClosingYear" name="btnGenerateInventoryClosingYear" style="margin:5px;" data-toggle="tooltip" class="btn btn-success btn-md btd-ladda" title="Generate Inventory Closing Year">Yearly Report</button>
                </div>

                <h3 class="text-center font-weight-bold fs-30">Non-Drugs</h3>
                <h3 class="text-center font-weight-bold fs-30" id="txtInventoryClosingDateRange"></h3>
              </div>

              <div class="col-md-12">
                <table id="adjustmentSupplyTable" class="table table-sm table-striped table-borderless table-condensed table-hover "width="100%">
                  <thead class="thead-dark">
                    <tr>
                      <th></th>
                      <th>REFERENCE #</th>
                      <th>DATE</th>
                      <th>ITEM TYPE</th>
                      <th>ITEM DESCRIPTION</th>
                      <th>QUANTITY</th>
                      <th>UNIT OF MEASURE</th>
                      <th>QUANTITY</th>
                      <th>PLUS/MINUS</th>
                      <th>TYPE OF ACCOUNT</th>
                      <th>REMARKS</th>
                      <th>ACTIONS</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot class="thead-dark">
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!--inventory closing--> 
        </div>
      </div>
    </div>
  </div>
</div>

<form id="frmAddDeliveries" method="post">
  <div class="modal" id="modalAddDeliveries" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Add Delivery</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Delivery Number:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="addDelNum" name="addDelNum">
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="addDelintKey" name="addDelintKey">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Delivery Date:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="datetime-local" class="form-control form-control-mb pull-right" autocomplete="off"  id="addDelDate" name="addDelDate">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Supplier:</b> 
                    </div>
                    <div class="col-md-6">
                      <select  class='form-control form-control-sm' id="addDelSupp" name="addDelSupp">
                        <option value="" hidden selected disabled>Select Supplier</option>
                        <option value="001">Associated Drugs Inc.</option>
                        <option value="002">Pharma Trans</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Item Type:</b> 
                    </div>
                    <div class="col-md-6">
                      <select  class='form-control form-control-sm' id="addDelItemType" name="addDelItemType">
                        <option value="" hidden selected disabled>Select Item Type</option>
                        <option value="DM">Drugs and Medicine</option>
                        <option value="MS">Medical Supplies</option>
                        <option value="SE">Supplies and Equipments</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Item Description:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="addDelItemDesc" name="addDelItemDesc" readonly>
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="addDelItemCode" name="addDelItemCode">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Qty Delivered:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control form-control-mb pull-right" autocomplete="off"  id="addDelQty" name="addDelQty">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Expiration Date:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control form-control-mb pull-right" autocomplete="off"  id="addDelExpDate" name="addDelExpDate">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Type of Account:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class='form-control form-control-sm' id="addDelTypeAcc" name="addDelTypeAcc">
                        <option value='' hidden selected disabled>Select Charge Type</option>
                        <option value='DRUMN'>NonDrugs / Supplies</option>
                        <option value='DRUMX'>NonDrugs / Supplies (Consignment)</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Delivery Type:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class='form-control form-control-sm' id="addDelType" name="addDelType">
                        <option value='' hidden selected disabled>Select Delivery Type</option>
                        <option value='P'>Procured</option>
                        <option value='D'>Donation</option>
                        <option value='R'>Received</option>
                      </select>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnSaveDelivery" name="btnSaveDelivery" formaction='<?php echo site_url("Central_Supply/SaveDelivery"); ?>'><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>


<form id="frmAddAdjustments" method="post">
  <div class="modal" id="modalAddAdjustments" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Plus/Minus</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Reference Number:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="addAdjReferenceNum" name="addAdjReferenceNum"readonly/>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Adjustment Date:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control form-control-mb pull-right" autocomplete="off"  id="addAdjDate" name="addAdjDate">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Item Type:</b> 
                    </div>
                    <div class="col-md-6">
                      <select  class='form-control form-control-sm' id="addAdjItemType" name="addAdjItemType">
                        <option value="" hidden selected disabled>Select Item Type</option>
                        <option value="DM">Drugs and Medicine</option>
                        <option value="MS">Medical Supplies</option>
                        <option value="SE">Supplies and Equipments</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Item Description:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="addAdjItemDesc" name="addAdjItemDesc" readonly />
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="addAdjItemCode" name="addAdjItemCode" />
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Type of Account:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class='form-control form-control-sm' id="addAdjTypeAcc" name="addAdjTypeAcc">
                        <option value='' hidden selected disabled>Select Charge Type</option>
                        <option value='DRUMN'>NonDrugs / Supplies</option>
                        <option value='DRUMX'>NonDrugs / Supplies (Consignment)</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Stock Quantity:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control form-control-mb pull-right" autocomplete="off"  id="addAdjQty" name="addAdjQty" readonly />
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Unit of Measure:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="addAjdUom" name="addAjdUom" readonly />
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="addAjdUomCode" name="addAjdUomCode"/>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Adjustment Quantity:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control form-control-mb pull-right" autocomplete="off"  id="addAjdAdjQty" name="addAjdAdjQty">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Plus/Minus:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class='form-control form-control-sm' id="addAdjPlusMinus" name="addAdjPlusMinus">
                        <option value='' hidden selected disabled>Select Plus/Minus</option>
                        <option value='+'>PLUS</option>
                        <option value='-'>MINUS</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Remarks:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="addAjdRemarks" name="addAjdRemarks">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnSaveAdjustment" name="btnSaveAdjustment" formaction='<?php echo site_url("Central_Supply/saveAdjustment"); ?>'><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>

<form id="frmEditDeliveries" method="post">
  <div class="modal" id="modalEditDeliveries" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Edit Delivery</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Delivery Number:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="editDelNum" name="editDelNum">
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="editDelintKey" name="editDelintKey">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Delivery Date:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="datetime-local" class="form-control form-control-mb pull-right" autocomplete="off"  id="editDelDate" name="editDelDate">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Supplier:</b> 
                    </div>
                    <div class="col-md-6">
                      <select  class='form-control form-control-sm' id="editDelSupp" name="editDelSupp">
                        <option value="" hidden selected disabled>Select Supplier</option>
                        <option value="001">Associated Drugs Inc.</option>
                        <option value="002">Pharma Trans</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Item Type:</b> 
                    </div>
                    <div class="col-md-6">
                      <select  class='form-control form-control-sm' id="editDelItemType" name="editDelItemType">
                        <option value="" hidden selected disabled>Select Item Type</option>
                        <option value="DM">Drugs and Medicine</option>
                        <option value="MS">Medical Supplies</option>
                        <option value="SE">Supplies and Equipments</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Item Description:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="editDelItemDesc" name="editDelItemDesc" readonly>
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="editDelItemCode" name="editDelItemCode">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Qty Delivered:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="editDelOldQty" name="editDelOldQty">
                      <input type="number" class="form-control form-control-mb pull-right" autocomplete="off"  id="editDelQty" name="editDelQty">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Expiration Date:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control form-control-mb pull-right" autocomplete="off"  id="editDelExpDate" name="editDelExpDate">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Type of Account:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class='form-control form-control-sm' id="editDelTypeAcc" name="editDelTypeAcc">
                        <option value='' hidden selected disabled>Select Charge Type</option>
                        <option value='DRUMN'>NonDrugs / Supplies</option>
                        <option value='DRUMX'>NonDrugs / Supplies (Consignment)</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Delivery Type:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class='form-control form-control-sm' id="editDelType" name="editDelType">
                        <option value='' hidden selected disabled>Select Delivery Type</option>
                        <option value='P'>Procured</option>
                        <option value='D'>Donation</option>
                        <option value='R'>Received</option>
                      </select>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnUpdateDelivery" name="btnUpdateDelivery" formaction='<?php echo site_url("Central_Supply/UpdateDelivery"); ?>'><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>

<form id="frmEditAdjustments" method="post">
  <div class="modal" id="modalEditAdjustments" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Edit Plus/Minus</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Reference Number:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAdjReferenceNum" name="editAdjReferenceNum"readonly/>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Adjustment Date:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAdjDate" name="editAdjDate">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Item Type:</b> 
                    </div>
                    <div class="col-md-6">
                      <select  class='form-control form-control-sm' id="editAdjItemType" name="editAdjItemType">
                        <option value="" hidden selected disabled>Select Item Type</option>
                        <option value="DM">Drugs and Medicine</option>
                        <option value="MS">Medical Supplies</option>
                        <option value="SE">Supplies and Equipments</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Item Description:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAdjItemDesc" name="editAdjItemDesc" readonly />
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAdjItemCode" name="editAdjItemCode" />
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Type of Account:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class='form-control form-control-sm' id="editAdjTypeAcc" name="editAdjTypeAcc">
                        <option value='' hidden selected disabled>Select Charge Type</option>
                        <option value='DRUMN'>NonDrugs / Supplies</option>
                        <option value='DRUMX'>NonDrugs / Supplies (Consignment)</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Stock Quantity:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAdjQty" name="editAdjQty" readonly />
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Unit of Measure:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAjdUom" name="editAjdUom" readonly />
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAjdUomCode" name="editAjdUomCode"/>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Adjustment Quantity:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAjdAdjQty" name="editAjdAdjQty">
                      <input type="hidden" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAjdAdjOldQty" name="editAjdAdjOldQty">
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Plus/Minus:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="hidden" id="hiddeneditAdjPlusMinus" name="hiddeneditAdjPlusMinus" />
                      <select class='form-control form-control-sm' id="editAdjPlusMinus" name="editAdjPlusMinus">
                        <option value='' hidden selected disabled>Select Plus/Minus</option>
                        <option value='+'>PLUS</option>
                        <option value='-'>MINUS</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Remarks:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb pull-right" autocomplete="off"  id="editAdjdRemarks" name="editAdjdRemarks">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnUpdateAdjustment" name="btnUpdateAdjustment" formaction='<?php echo site_url("Central_Supply/updateAdjustment"); ?>'><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>

<form id="frmSearchStockCard" method="post">
  <div class="modal" id="modalSearchStockCard" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <div class="row">
            <div class="col-md-12">
              <h1 class="modal-title text-white"><i class="fa fa-th-list"></i> Stock Card</h1>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp From:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control form-control-mb" id="cardFrom" name="cardFrom"/>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp To:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control form-control-mb" id="cardTo" name="cardTo"/>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Charge Code:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class="form-control form-control-mb" id="cardChrgCode" name="cardChrgCode">

                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Item:</b> 
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-mb" id="cardItem" name="cardItem" />
                      <input type="hidden" class="form-control form-control-mb" id="cardItemCode" name="cardItemCode" />
                      <input type="hidden" class="form-control form-control-mb" id="cardItemUom" name="cardItemUom" />
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnUpdateSearchStockCard" name="btnUpdateSearchStockCard" formaction='<?php echo site_url("Central_Supply/searchStockCard"); ?>'><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>


<form id="frmSearchSupply" method="post">
  <div class="modal" id="SearchSupply" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Supply List</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table id="SupplyListTable" class="table table-lg table-striped table-borderless table-condensed table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th></th>
                    <th>DESCRIPTION</th>
                    <th>DETAILS</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot class="thead-dark">
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


<form id="frmGenerateClosingReport" method="post">
  <div class="modal" id="modalRetrieveClosingReport" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <div class="row">
            <div class="col-md-12">
              <h1 class="modal-title text-white"><i class="fa fa-th-list"></i> Month and Year</h1>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Year:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class="form-control form-control-mb" id="retrieveClosingYear"  name="retrieveClosingYear">
                        <option>Select Year</option>
                        <?php foreach ($years as $year) : ?>
                          <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Month:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class="form-control form-control-mb" id="retrieveClosingMonth"  name="retrieveClosingMonth">
                        <?php
                        foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $monthNumber => $month) {
                          echo "<option value='$monthNumber'>{$month}</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnretrieveClosing" name="btnretrieveClosing" formaction='<?php echo site_url("Central_Supply/retrieveClosing"); ?>'><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>

<form id="frmGenerateClosingReportYear" method="post">
  <div class="modal" id="modalRetrieveClosingReportYear" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <div class="row">
            <div class="col-md-12">
              <h1 class="modal-title text-white"><i class="fa fa-th-list"></i> Year</h1>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">
                      <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Year:</b> 
                    </div>
                    <div class="col-md-6">
                      <select class="form-control form-control-mb" id="retrieveYearClosingYear"  name="retrieveYearClosingYear">
                        <option>Select Year</option>
                        <?php foreach ($years as $year) : ?>
                          <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnretrieveClosingYear" name="btnretrieveClosingYear" formaction='<?php echo site_url("Central_Supply/retrieveClosing"); ?>'><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>



<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script type="text/javascript">


  $(function () {
    stockDeliveriesdt();
    stockAdjustmentsdt();
    nondrugsLib();
  });
  function stockDeliveriesdt() {
    if ($.fn.DataTable.isDataTable('#deliverySupplyTable')) {
      $('#deliverySupplyTable').DataTable().destroy();
    }

    var table = $('#deliverySupplyTable').DataTable({
      "pageLength": 10,
      "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
      "pagingType": "full_numbers",
      "processing": true,
      "serverSide": true,
      "destroy": true,
      "ajax": {
        "url": '<?php echo base_url() . "Central_Supply/stockDeliveriesdt"; ?>',
        "type": 'POST'
      },
      "columns": [
        {'data': 'intkey', 'defaultContent': ''},
        {'data': 'delno', 'defaultContent': ''},
        {'data': 'deldteas', 'defaultContent': ''},
        {'data': 'suppname', 'defaultContent': ''},
        {render: function (data, type, row, meta) {
            if (row.itemtype === 'SE') {
              return 'Supplies and Equipment';
            }
          }, 'defaultContent': ''
        },
        {'data': 'itemDesc', 'defaultContent': ''},
        {'data': 'delqty', 'defaultContent': ''},
        {'data': 'expiredte', 'defaultContent': ''},
        {'data': 'chrgdesc', 'defaultContent': ''},
        {render: function (data, type, row, meta) {
            if (row.suplind == 'D') {
              return 'Donation';
            } else if (row.suplind == 'P') {
              return 'Procured';
            } else if (row.suplind == 'R') {
              return 'Received';
            }
          }, 'defaultContent': ''},
        {render: function (data, type, row, meta) {
            return '<div class="btn-group  btn-ladda btn-sm text-center" data-layout="zoom-in">\n\
                      <button type="button" class="btn btn-success  btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">\n\
                        <span class="caret"></span>\n\
                        <span class="sr-only">Toggle Dropdown</span>\n\
                      </button>\n\
                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" role="menu">\n\
                        <button type="button" data-intkey="' + row.intkey + '" class="dropdown-item editDelivery"><i class="fa fa-pencil"></i>&nbsp Edit</button>\n\
                        <button type="button" data-intkey="' + row.intkey + '" class="dropdown-item deleteDelivery"><i class="fa fa-trash"></i>&nbsp Delete</button>\n\
                      </div>\n\
                    </div>';
          }, 'defaultContent': ''
        }
      ],
      columnDefs: [{
          targets: [0],
          visible: false,
          orderable: false
        }]

    });
  }

  $('#deliverySupplyTable').on('click', '.editDelivery', function (e) {
    e.preventDefault();
    var intkey = $(this).attr('data-intkey');
    $.ajax({
      'type': 'POST',
      'url': '<?php echo site_url("Central_Supply/editDeliveries"); ?>',
      'data': {
        'intkey': intkey
      },
      'dataType': 'JSON',
      success: function (data) {
        $('#editDelNum').val(data['delno']);
        $('#editDelDate').val(data['deldate']);
        $('#editDelintKey').val(data['intkey']);
        $('#editDelSupp').val(data['wardcode']);
        $('#editDelItemType').val(data['itemtype']);
        $('#editDelItemDesc').val(data['cl1desc'] + ", " + data['cl2desc']);
        $('#editDelItemCode').val(data['itemcode']);
        $('#editDelExpDate').val(data['expdate']);
        $('#editDelOldQty').val(data['delqty']);
        $('#editDelQty').val(data['delqty']);
        $('#editDelTypeAcc').val(data['chrgcode']);
        $('#editDelType').val(data['suplind']);
        $('#modalEditDeliveries').modal('show');
      }
    });
  });
  $('#deliverySupplyTable').on('click', '.deleteDelivery', function (e) {
    e.preventDefault();
    var intkey = $(this).attr('data-intkey');
    $.ajax({
      'type': 'POST',
      'url': '<?php echo site_url("Central_Supply/"); ?>',
      'data': {
        'intkey': intkey
      },
      'dataType': 'JSON',
      success: function (data) {

      }
    });
  });
  $('#editDelItemDesc, #addDelItemDesc, #addAdjItemDesc, #cardItem').dblclick(function () {
    $('#SearchSupply').modal('show');
    SupplyListTable();
  });
  function SupplyListTable() {
    if ($.fn.DataTable.isDataTable('#SupplyListTable')) {
      $('#SupplyListTable').DataTable().destroy();
    }

    $('#SupplyListTable tbody').empty();
    var tableSupply = $("#SupplyListTable").DataTable({
      oLanguage: {
        sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'
      },
      pageLength: 10,
      aLengthMenu: [[10, 15, 20, 50, 75, -1], [10, 15, 20, 50, 75, "All"]],
      processing: true,
      serverSide: true,
      searching: true,
      responsive: true,
      info: true,
      orderable: true,
      paging: true,
      autoWidth: true,
      ajax: {
        "url": "<?php echo site_url('Central_Supply/supplyDeliveriesdt'); ?>",
        "type": "POST"
      },
      columns: [
        {'data': 'cl2comb', 'defaultContent': ''},
        {'data': 'cl1desc', 'defaultContent': ''},
        {'data': 'cl2desc', 'defaultContent': ''},
        {'data': 'uomdesc', 'defaultContent': ''}
      ],
      columnDefs:
              [{
                  targets: [0, 3],
                  visible: false,
                  orderable: false
                }]
    });
    $('#SupplyListTable').off('dblclick', 'tr');
    $('#SupplyListTable').on('dblclick', 'tr', function () {
      var data = tableSupply.row(this).data();
      if ($('#modalAddDeliveries').hasClass('show')) {
        $('#addDelItemDesc').val(data['cl1desc'] + ", " + data['cl2desc']);
        $('#addDelItemCode').val(data['cl2comb']);
      } else if ($('#modalEditDeliveries').hasClass('show')) {
        $('#editDelItemDesc').val(data['cl1desc'] + ", " + data['cl2desc']);
        $('#editDelItemCode').val(data['cl2comb']);
      } else if ($('#modalAddAdjustments').hasClass('show')) {
        $('#addAdjItemDesc').val(data['cl1desc'] + ", " + data['cl2desc']);
        $('#addAdjItemCode').val(data['cl2comb']);
      } else if ($('#modalSearchStockCard').hasClass('show')) {
        console.log('qtqwt');
        $('#cardItem').val(data['cl1desc'] + ", " + data['cl2desc']).prop('disabled', true);
        $('#cardItemCode').val(data['cl2comb']);
        $('#cardItemUom').val(data['uomdesc']);
      }
      $('#SearchSupply').modal('hide');
    });
  }

  $('#btnUpdateDelivery').click(function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: $(this).attr('formaction'),
      data: $('#frmEditDeliveries').serialize(),
      dataType: 'JSON',
      success: function (data) {
        if (data['messageResult'] == 1) {
          stockDeliveriesdt();
          $('#modalEditDeliveries').modal('hide');
          toastr.success(data['message'], 'Success');
        } else if (data['messageResult'] == 0) {
          toastr.warning(data['message'], 'Warning');
        }
      }
    });
  });
  $('#btnAddDelivery').on('click', function (e) {
    $('#addDelNum').val('');
    $('#addDelintKey').val('');
    $('#addDelDate').val('');
    $('#addDelSupp').val('');
    $('#addDelItemType').val('SE').prop('disabled', true);
    $('#addDelItemDesc').val('');
    $('#addDelItemCode').val('');
    $('#addDelQty').val('');
    $('#addDelExpDate').val('');
    $('#addDelTypeAcc').val('');
    $('#addDelType').val('');
    $('#modalAddDeliveries').modal('show');
    $('#addDelNum').focus();
  });
  $('#btnSaveDelivery').click(function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: $(this).attr('formaction'),
      data: $('#frmAddDeliveries').serialize(),
      dataType: "JSON",
      success: function (data) {
        if (data['messageResult'] == 1) {
          stockDeliveriesdt();
          $('#modalAddDeliveries').modal('hide');
          toastr.success(data['message'], 'Success');
        } else if (data['messageResult'] == 0) {
          toastr.warning(data['message'], 'Warning');
        }
      }
    });
  });
  function stockAdjustmentsdt() {
    var table = $('#adjustmentSupplyTable').DataTable({
      "pageLength": 10,
      "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
      "pagingType": "full_numbers",
      "processing": true,
      "serverSide": true,
      "destroy": true,
      "ajax": {
        "url": '<?php echo base_url() . "Central_Supply/stockAdjustmentsdt"; ?>',
        "type": 'POST'
      },
      "columns": [
        {'data': 'intkey', 'defaultContent': ''},
        {'data': 'refno', 'defaultContent': ''},
        {'data': 'trandate', 'defaultContent': ''},
        {render: function (data, type, row, meta) {
            if (row.itemtype === 'SE') {
              return 'Supplies and Equipment';
            }
          }, 'defaultContent': ''
        },
        {'data': 'itemDesc', 'defaultContent': ''},
        {'data': 'stockqty', 'defaultContent': ''},
        {'data': 'uomdesc', 'defaultContent': ''},
        {'data': 'qty', 'defaultContent': ''},
        {render: function (data, type, row, meta) {
            if (row.plusminus === '+') {
              return "PLUS";
            } else {
              return "MINUS";
            }
          }, 'defaultContent': ''
        },
        {'data': 'chrgdesc', 'defaultContent': ''},
        {'data': 'adjremarks', 'defaultContent': ''},
        {render: function (data, type, row, meta) {
            return '<div class="btn-group  btn-ladda btn-sm text-center" data-layout="zoom-in">\n\
                      <button type="button" class="btn btn-success  btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">\n\
                        <span class="caret"></span>\n\
                        <span class="sr-only">Toggle Dropdown</span>\n\
                      </button>\n\
                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" role="menu">\n\
                        <button type="button" data-refno="' + row.refno + '" class="dropdown-item editAdjustment"><i class="fa fa-pencil"></i>&nbsp Edit</button>\n\
                        <button type="button" data-refno="' + row.refno + '" class="dropdown-item cancelref"><i class="fa fa-trash"></i>&nbsp Cancel Ref #</button>\n\
                      </div>\n\
                    </div>';
          }, 'defaultContent': ''
        }
      ],
      columnDefs: [{
          targets: [0],
          visible: false,
          orderable: false
        }]

    });
  }

  $('#btnAddAdjustment').click(function () {
    getReferenceNumMax();
  });
  function getReferenceNumMax() {
    $.ajax({
      method: "POST",
      url: "<?php echo site_url('Central_Supply/getReferenceNumMax'); ?>",
      dataType: "JSON",
      success: function (data) {
        $('#addAdjReferenceNum').val(data);
        $('#addAdjDate').val(formatDate(new Date()));
        $('#addAdjItemType').val('SE');
        $('#addAdjItemDesc').val('');
        $('#addAdjItemCode').val('');
        $('#addAdjTypeAcc').val('').trigger('change');
        $('#addAjdAdjQty').val('');
        $('#addAdjPlusMinus').val('');
        $('#addAjdRemarks').val('');
        $('#modalAddAdjustments').modal('show');
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
    return [year, month, day].join('-');
  }


  $('#addAdjTypeAcc').change(function () {
    $('#addAdjDate').val('');
    $('#addAdjItemType').prop('disabled', true);
    
    
    
    var addAdjTypeAcc = $(this).val();
    var addAdjItemCode = $('#addAdjItemCode').val();
    if (addAdjItemCode != '') {
      $.ajax({
        method: "POST",
        url: "<?php echo site_url('Central_Supply/getAdjTypeAcc'); ?>",
        data: {
          'addAdjTypeAcc': addAdjTypeAcc,
          'addAdjItemCode': addAdjItemCode
        },
        dataType: "JSON",
        success: function (data) {
          if (data != null) {
            $('#addAdjQty').val(data['stockbal']);
            $('#addAjdUomCode').val(data['uomcode']);
            $('#addAjdUom').val(data['uomdesc']);
          } else {
            toastr.warning('No Available data under this Type of Account', 'Warning');
            $('#addAdjTypeAcc').val('');
            $('#addAdjQty').val('');
            $('#addAjdUom').val('');
          }
        }
      });
    } else {
      $(this).val('');
    }
  });
  $('#btnSaveAdjustment').click(function (e) {
    e.preventDefault();
    $.ajax({
      method: "POST",
      url: $(this).attr('formaction'),
      data: $('#frmAddAdjustments').serialize(),
      dataType: "JSON",
      success: function (data) {
        if (data == 2) {
          stockAdjustmentsdt();
          $('#modalAddAdjustments').modal('hide');
        }
      }
    });
  });
  $('#adjustmentSupplyTable').on('click', '.editAdjustment', function () {
    var refno = $(this).attr('data-refno');
    $('#editAdjReferenceNum').val('');
    $('#editAdjDate').val('');
    $('#editAdjItemType').val('');
    $('#editAdjItemDesc').val();
    $('#editAdjItemCode').val();
    $('#editAdjTypeAcc').val();
    $('#editAdjQty').val();
    $('#editAjdUom').val();
    $('#editAjdUomCode').val();
    $('#editAjdAdjQty').val();
    $('#editAjdAdjOldQty').val();
    $('#hiddeneditAdjPlusMinus').val();
    $('#editAdjPlusMinus').val();
    $('#editAjdRemarks').val();
    $.ajax({
      method: "POST",
      url: '<?php echo site_url("Central_Supply/editAdjustment"); ?>',
      data: {
        'refno': refno
      },
      dataType: "JSON",
      success: function (data) {
        $('#editAdjReferenceNum').val(data['refno']);
        $('#editAdjDate').val(data['trandates']);
        $('#editAdjItemType').val(data['itemtype']);
        $('#editAdjItemDesc').val(data['cl1desc'] + ", " + data['cl2desc']);
        $('#editAdjItemCode').val(data['itemcode']);
        $('#editAdjTypeAcc').val(data['chrgcode']);
        $('#editAdjQty').val(data['stockqty']);
        $('#editAjdUom').val(data['uomdesc']);
        $('#editAjdUomCode').val(data['uomcode']);
        $('#editAjdAdjQty').val(data['qty']);
        $('#editAjdAdjOldQty').val(data['qty']);
        $('#hiddeneditAdjPlusMinus').val(data['plusminus']);
        $('#editAdjPlusMinus').val(data['plusminus']);
        $('#editAdjdRemarks').val(data['adjremarks']);
        $('#modalEditAdjustments').modal('show');
      }
    });
  });
  $('#btnUpdateAdjustment').click(function (e) {
    e.preventDefault();
    $.ajax({
      method: "POST",
      url: $(this).attr('formaction'),
      data: $('#frmEditAdjustments').serialize(),
      dataType: "JSON",
      success: function (data) {
        if (data == 2) {
          stockAdjustmentsdt();
          $('#modalEditAdjustments').modal('hide');
          toastr.success('Successfully Updated.', 'Success');
        }
      }
    });
  });
  $('#adjustmentSupplyTable').on('click', '.cancelref', function () {
    var refno = $(this).attr('data-refno');
    $.ajax({
      method: "POST",
      url: "<?php echo site_url('Central_Supply/cancelReferenceAdj'); ?>",
      data: {
        'refno': refno
      },
      dataType: "JSON",
      success: function (data) {
        if (data == 2) {
          stockAdjustmentsdt();
          toastr.success('Successfully Cancelled.', 'Success');
        }
      }
    });
  });
  $('#btnGenerateInventoryClosing').on('click', function () {
    $('#retrieveClosingYear').val('<?php echo strftime("%Y", time()); ?>');
    $('#retrieveClosingMonth').val('<?php echo date('m') - 1; ?>');
    $('#modalRetrieveClosingReport').modal('show');
  });
  $('#btnGenerateInventoryClosingYear').on('click', function () {
    $('#retrieveYearClosingYear').val('<?php echo strftime("%Y", time()); ?>');
    $('#modalRetrieveClosingReportYear').modal('show');
  });
  $('#btnretrieveClosing').on('click', function () {
    $.ajax({
      method: "POST",
      url: $(this).attr('formaction'),
      data: $('#frmGenerateClosingReport').serialize(),
      dataType: "JSON",
      success: function (data) {
        console.log(data);
      }
    });
  });
  $('#btnSearchStockCard').on('click', function () {
    getChrgType();
    $('#modalSearchStockCard').modal('show');
  });
  function getChrgType() {
    $('#cardChrgCode').empty();
    $.ajax({
      method: "POST",
      url: "<?php echo site_url('Central_Supply/getChrgType'); ?>",
      dataType: "JSON",
      success: function (data) {
        $('#cardChrgCode').append('<option value="" hidden disabled selected>Please, Select Charge Code</option>');
        for (var i = 0; i < data.length; i++) {
          $('#cardChrgCode').append("<option value='" + data[i].chrgcode + "'>" + data[i].chrgdesc + "</option>");
        }
      }
    });
  }

  $('#btnUpdateSearchStockCard').on('click', function () {
    $.ajax({
      method: "POST",
      url: $(this).attr('formaction'),
      data: $('#frmSearchStockCard').serialize(),
      dataType: "JSON",
      success: function (data) {
        $('#carddescription').text($('#cardItem').val());
        $('#cardItemDesc').text($('#cardItemCode').val());
        $('#cardUom').text($('#cardItemUom').val());
        var html = '';
        var total = 0;
        var price = 0;
        var total_price = 0;
        $('#tblSearchStockCard tbody > tr').remove();
        for (var i = 0; i < data.length; i++) {

          total = eval(parseInt(total) + parseInt(data[i].rcv_qty) - parseInt(data[i].issue_qty));
          if (data[i].reference_col == 'ISSUED') {
            price = data[i].issue_unitcost;
          } else if (data[i].reference_col == 'RETURN') {
            price = data[i].rcv_unitcost;
          }
          total_price = total + price;
          html += "<tr>\n\
                     <td>" + data[i].date_col + "</td>\n\
                     <td>" + data[i].reference_col + "</td>\n\
                     <td></td>\n\
                     <td>" + data[i].rcv_qty + "</td>\n\
                     <td>" + data[i].rcv_unitcost + "</td>\n\
                     <td>" + data[i].rcv_total + "</td>\n\
                     <td>" + data[i].issue_qty + "</td>\n\
                     <td>" + data[i].issue_unitcost + "</td>\n\
                     <td>" + data[i].issue_total + "</td>\n\
                     <td>" + total + "</td>\n\
                     <td>" + price + "</td>\n\
                     <td>" + total_price + "</td>\n\
                  </tr>";
        }
        $('#tblSearchStockCard').append(html);
        $('#modalSearchStockCard').modal('hide');
      }
    });
  });

  function nondrugsLib() {
    $('#class1Lib-tab').attr('data-toggle', '');
    $('#class2Lib-tab').attr('data-toggle', '');
    $('#class2HLib-tab').attr('data-toggle', '');
    var nonDrugsLib_tbl = $("#nonDrugsLib_tbl").DataTable({
      oLanguage: {sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'},
      LengthMenu: [[5, 10, 15, 20, 50, 75, -1], [5, 10, 15, 20, 50, 75, "All"]],
      pageLength: 'All',
      processing: true,
      serverSide: true,
      searching: true,
      responsive: true,
      info: true,
      orderable: true,
      paging: true,
      autoWidth: true,
      destroy: true,
      ajax: {
        "url": "<?php echo base_url() . 'Central_Supply/nondrugsLib'; ?>",
        "type": "POST"
      }
    });
    $("#nonDrugsLib_tbl").off("click", "tr");
    $("#nonDrugsLib_tbl").on("click", "tr", function () {
      var data = nonDrugsLib_tbl.row(this).data();
      nondrugsclass1(data[0]);
    });
  }

  function nondrugsclass1(ptcode) {
    $('#class1Lib-tab').attr('data-toggle', 'tab');
    var class1Lib_tbl = $("#class1Lib_tbl").DataTable({
      oLanguage: {sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'},
      LengthMenu: [[5, 10, 15, 20, 50, 75, -1], [5, 10, 15, 20, 50, 75, "All"]],
      pageLength: 'All',
      processing: true,
      serverSide: true,
      searching: true,
      responsive: true,
      info: true,
      orderable: true,
      paging: true,
      autoWidth: true,
      destroy: true,
      ajax: {
        "url": "<?php echo base_url() . 'Central_Supply/nondrugsclass1'; ?>",
        "type": "POST",
        "data": {
          'ptcode': ptcode
        }
      },
      columnDefs: [{
          targets: [3],
          visible: false,
          orderable: false
        }]
    });
    $('.nav-tabs-stock li:eq(1) a').tab('show');
    $("#class1Lib_tbl").off("click", "tr");
    $("#class1Lib_tbl").on("click", "tr", function () {
      var data = class1Lib_tbl.row(this).data();
      nondrugsclass2(data[3]);
    });
  }

  function nondrugsclass2(cl1comb) {
    $('#class2Lib-tab').attr('data-toggle', 'tab');
    var class2Lib_tbl = $("#class2Lib_tbl").DataTable({
      oLanguage: {sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'},
      aLengthMenu: [[5, 10, 15, 20, 50, 75, -1], [5, 10, 15, 20, 50, 75, "All"]],
      ipageLength: '15',
      processing: true,
      serverSide: true,
      searching: true,
      responsive: true,
      info: true,
      orderable: true,
      paging: true,
      autoWidth: true,
      destroy: true,
      ajax: {
        "url": "<?php echo base_url() . 'Central_Supply/nondrugsclass2'; ?>",
        "type": "POST",
        "data": {
          'cl1comb': cl1comb
        }
      },
      columnDefs: [{
          targets: [11],
          visible: false,
          orderable: false
        }]
    });
    $('.nav-tabs-stock li:eq(2) a').tab('show');
    $("#class2Lib_tbl").off("click", "tr");
    $("#class2Lib_tbl").on("click", "tr", function () {
      var data = class2Lib_tbl.row(this).data();
      nondrugsclass2h(data[11]);
    });
  }

  function nondrugsclass2h(cl2comb) {
    $('#class2HLib-tab').attr('data-toggle', 'tab');
    var class2HLib_tbl = $("#class2HLib_tbl").DataTable({
      oLanguage: {sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'},
      aLengthMenu: [[5, 10, 15, 20, 50, 75, -1], [5, 10, 15, 20, 50, 75, "All"]],
      ipageLength: '15',
      processing: true,
      serverSide: true,
      searching: true,
      responsive: true,
      info: true,
      orderable: true,
      paging: true,
      autoWidth: true,
      destroy: true,
      ajax: {
        "url": "<?php echo base_url() . 'Central_Supply/nondrugsclass2h'; ?>",
        "type": "POST",
        "data": {
          'cl2comb': cl2comb
        }
      }
    });
    $('.nav-tabs-stock li:eq(3) a').tab('show');
  }

  $('#nonDrugsLib-tab').on('click', function () {
    $('#class1Lib_tbl').DataTable().destroy();
    $('#class1Lib-tab').attr('data-toggle', '');
    $('#class1Lib_tbl tbody').empty();

    $('#class2Lib_tbl').DataTable().destroy();
    $('#class2Lib-tab').attr('data-toggle', '');
    $('#class2Lib_tbl tbody').empty();

    $('#class2HLib_tbl').DataTable().destroy();
    $('#class2HLib-tab').attr('data-toggle', '');
    $('#class2HLib_tbl tbody').empty();
  });

  $('#class1Lib-tab').on('click', function () {
    $('#class2Lib_tbl').DataTable().destroy();
    $('#class2Lib-tab').attr('data-toggle', '');
    $('#class2Lib_tbl tbody').empty();

    $('#class2HLib_tbl').DataTable().destroy();
    $('#class2HLib-tab').attr('data-toggle', '');
    $('#class2HLib_tbl tbody').empty();
  });

  $('#class2Lib-tab').on('click', function () {
    $('#class2HLib_tbl').DataTable().destroy();
    $('#class2HLib-tab').attr('data-toggle', '');
    $('#class2HLib_tbl tbody').empty();
  });











</script>
