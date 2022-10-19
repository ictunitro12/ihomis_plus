    <style>
table#stock_tbl.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#drugaccTbl.dataTable tbody tr:hover {
    background-color: #80DB88;
}
    </style>

<script src="//cdn.rawgit.com/placemarker/jQuery-MD5/master/jquery.md5.js"></script>

    <div class="clearfix">
        <div class="h4 text-success float-left"><i class="fa fa-pie-chart"></i>&nbsp Drugs and Medicines</div>
        <div class="btn-group float-right mb-1">
            <button type="button" id="btnAddAccount" class="btn btn-outline-success btn-md"><i class="fa fa-plus"></i>
                Add
                Account</button>
            <button id="btnChart" class="btn btn-outline-success"><i class="fa fa-bar-chart"></i> Stock Chart</button>
        </div>
    </div>
    <form class="typeofaccount">

        <div class='text-success mb-1 legend'><i class="fa fa-info-circle"></i> Type of Account/s</div>
        <div class="form-check  form-check-inline">
            <input class="form-check-input" type="radio" name="typePharm" id="all" value="all">
            <label class="form-check-label text-success" for="exampleRadios1">
                All
            </label>
        </div>
    </form>
    <form id="typeofAccount" class="typeofaccount">
        <i class="fa fa-spinner fa-spin text-success col d-flex justify-content-center"
            style="font-size:30px;  margin: 0 auto; float: none;  margin-bottom: 10px;"></i>
    </form>

    <table id="stock_tbl" style="cursor:pointer;" class="table table-sm table-striped table-bordered  table-hover"
        width="100%">
        <thead>
            <tr>
                <th width="50px" class="align-middle" rowspan="2">Code</th>
                <th width="50px" class="align-middle" rowspan="2">EDPMS</th>
                <th width="100px" class="align-middle" rowspan="2">Description(<small>(Generic/Strength/Form/Route)</small>)</th>
                <th width="50px" class="align-middle" rowspan="2">Class</th>
                <th width="60px" class="align-middle" rowspan="2">Status</th>
                <th width="5px" class="align-middle" rowspan="2">is Pharma?</th>
                <th style="text-align:center; vertical-align:middle;" colspan="3">Stock</th>
                <th width="5px" rowspan="2"></th>
            </tr>
            <tr>
                <th width="5px">Stock</th>
                <th width="5px">Begin</th>
                <th width="5px">Reorder</th>
            </tr>
        </thead>
    </table>
    <div class="modal " id="modalDrugAccount" role="form" style="overflow: auto;">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <div class="h4 text-success"><i class="fa fa-pills"></i> Drug Details</div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="box-body box-profile mb-2">
                        <div class="h5 profile-username text-center text-success" id="drugname"></div>
                        <div class="h6 text-center text-success" id="hpercode"></div>
                        <div class="row">
                            <div class="col-md-2">
                                <img id="drugPhoto" src="<?php echo base_url();?>/assets/img/drug_default.jpg"
                                    style="cursor:pointer;" class="img-fluid rounded mx-auto d-block" height="150"
                                    width="150"></img>
                                <input type="hidden" class="form-control form-control-mb" id="info_pic" name="info_pic">
                                <div class="button-group">
                                    <button type="button" id="btnAddPhoto"
                                        class="btn btn-link" data-style="zoom-in">
                                        <i class="fa fa-upload text-success"></i> Upload Photo</button>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <b class="text text-success"><i class="fa fa-arrow-right"></i>&nbsp EDPMS
                                            ID:</b>
                                        <a class="pull-right text text-success" id="edpms">N/A</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b class="text text-success"><i class="fa fa-arrow-right"></i>&nbsp Salt
                                            Code:</b>
                                        <a class="pull-right text text-success" id="edpms">N/A</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b class="text text-success"><i class="fa fa-arrow-right"></i>&nbsp Code:</b>
                                        <a class="pull-right text text-success" id="code">N/A</a>
                                        <input type="hidden" id="dmdcomb">
                                        <input type="hidden" id="dmdctr">
                                        <input type="hidden" id="dmhdrsub">
                                        <input type="hidden" id="baldteasof">
                                        <input type="hidden" id="formcode">
                                        <input type="hidden" id="drugPicLoc">
                                    </li>
                                    <li class="list-group-item">
                                        <b class="text text-success"><i class="fa fa-arrow-right"></i>&nbsp
                                            Drug/Medicine:</b>
                                        <a class="pull-right text text-success" id="drgname">N/A</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-2"></div>
                    <div class="clearfix">
                        <h5 class="text-success float-left"><i class="fa fa-list"></i>&nbsp List/s of Drug's & Medicine 
                            </h4>
                            <button type="button" id="btnAddDrug"
                                class="btn btn-outline-success btn-sm mb-2 float-right"><i
                                    class="fa fa-plus"></i></button>
                    </div>
                    <table id="drugaccTbl" class="table table-sm table-bordered table-condensed table-hover" width="100%">
                        <thead >
                            <tr >
                                <th rowspan="2">Date </th>
                                <th  rowspan="2">Lotno </th>
                                <th  rowspan="2">Unit Price </th>
                                <th  rowspan="2">Selling </th>
                                <th  rowspan="2">Stock </th>
                                <th  rowspan="2">Beginning </th>
                                <th  rowspan="2">Expiration </th>
                                <th  colspan="3">Sharing </th>
                                <th  rowspan="2">Remarks </th>
                                <th  rowspan="2"></th>
                            </tr>
                            <tr>
                              <th>No</th>
                               <th>Stock</th>
                               <th>Price</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal"
                        data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>

                </div>
            </div>
        </div>
    </div>

    <form name="frmdrugAccount reset" id="frmdrugAccount">
        <div class="modal" id="modalAddDrug" role="dialog" style="overflow: auto;">
            <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="h4 text-success"><i class="fa fa-pills"></i> Drug </div>
                        <div class="row">
                            <div class="col-md-3 mb-1">
                                <label>Unit of Meas. : </label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <select class="form-control" name="selForms" id="selForms">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Delivery:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="delintkey" name="delintkey" readonly
                                        placeholder="Delivery">
                                    <button type="button" class="btn btn-outline-success" id="btnSearchDelivery"><i
                                            class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                          
                            
                                <input type="hidden" name="begin" id="beginbalance" class="form-control" disabled
                                    placeholder="Beginning Balance">
                       
                           
                         
                                <input type="hidden" name="stock" id="stockbalance" class="form-control" disabled
                                    placeholder="Stock Balance">
                          
                            <div class="col-md-3 mb-1">
                                <label>Unit price:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="number" name="unitprice" id="unitprice" class="form-control"
                                    placeholder="Unit Price">
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Selling price:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="number" name="selling" id="selling" class="form-control"
                                    placeholder="Selling Price">
                            </div>
                            <div class="col-md-12 mb-1">
                                <hr class="text-muted">
                                </hr>
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Check if Shared:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="checkbox" name="shared" id="shared">
                                <input type="hidden" name="isshared" id="isshared" value ="N">
                            </div>

                            <div class="col-md-3 mb-1">
                                <label>No of serving:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="number" name="serveno" id="serveno" class="form-control"
                                    placeholder="No of serving">
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Serving Price:</label>
                            </div>

                            <div class="col-md-9 mb-1">
                                <input type="number" name="priceserve" id="priceserve" class="form-control"
                                    placeholder="Serving Price" readonly>
                            </div>
                            <div class="col-md-12 mb-1">
                                <hr class="text-muted">
                                </hr>
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Lotno:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="text" name="lotno" id="lotno" class="form-control" placeholder="Lotno">
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Expiry date:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="date" name="expiry" id="expiry" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label>Remarks:</label>
                                <textarea type="text" name="remarks" id="remarks" placeholder='Remarks'
                                    class="form-control"></textarea>
                            </div>

                        </div>
                        <input type="hidden" name="comb" id="comb">
                        <input type="hidden" name="ctr" id="ctr">
                        <input type="hidden" name="sub" id="sub">
                        <input type="hidden" name="unitcode" id="unitcode">
                        <input type="hidden" name="dmdprdte" id="dmdprdte">
                        <input type="hidden" name="formiden" id="formiden">
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-outline-success btn-md btn-ladda"
                                data-style="zoom-in"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="frmDeleteAccount" name="frmDeleteAccount" method="POST">
        <div class="modal reset" id="modalDeleteAccount" name="modalDeleteAccount" role="form">
            <div class="modal-dialog modal-dialog-centered modal-md" role="form">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title text-white"><i class="fa fa-trash"></i>&nbsp Delete Record?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <h4>Do you want to proceed?</h4>
                            <input type="hidden" name="delcomb" id="delcomb">
                            <input type="hidden" name="delctr" id="delctr">
                            <input type="hidden" name="delsub" id="delsub">
                            <input type="hidden" name="delstock" id="delstock">
                            <input type="hidden" name="delbeg" id="delbeg">
                            <input type="hidden" name="date" id="date">
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <div class="btn-group float-right">
                            <button type="submit" class="btn btn-outline-danger btn-square btn-ladda"
                                data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
                            <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form name="frmDrug" id="frmDrug">
        <div class="modal" id="modalDrug" name="modalDrug" role="form">
            <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title text-success"><i class="fa fa-pills"></i> Drug</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <div class="row">
                            <input type="hidden" name="formIdenDrug" id="formIdenDrug" value="">
                            <div class="col-md-3 col-form-label text-default mb-1">Drugs</div>
                            <input type="hidden" class="form-control" id="drugcomb" name="drugcomb">
                            <input type="hidden" class="form-control" id="drugctr" name="drugctr">
                            <input type="hidden" class="form-control" id="baldteasof" name="baldteasof">
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="drug" readonly
                                        placeholder="Drugs & Medicine">
                                    <button type="button" class="btn btn-outline-success" id="btnSearchDrug">Search
                                    </button>
                                </div>

                            </div>
                            <div class="col-md-3 col-form-label text-default mb-1">Charges:</div>
                            <div class="col-md-9">
                                <select name="chrgDrug" id="chrgDrug" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-form-label text-default mb-1">Barcode:</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-control-mb" autocomplete="off" id="barcode"
                                    name="barcode" placeholder="Barcode">
                            </div>
                            <div class="col-md-3 col-form-label text-default mb-1">Reorder:</div>
                            <div class="col-md-9">
                                <input type="number" class="form-control form-control-mb" autocomplete="off"
                                    id="reorder" name="reorder" placeholder="Reorder Level">
                            </div>
                            <div class="col-md-3 col-form-label text-default mb-1">Remarks:</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-control-mb" autocomplete="off" id="drugrem"
                                    name="drugrem" placeholder="Remarks">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group float-right">
                            <button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i
                                    class="fa fa-save"></i>&nbsp; SAVE</button>
                            <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="modal " id="modaldrugData" role="dialog" style="overflow: auto;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="h4 text-success"><i class="fa fa-pills"></i> Drug List</div>
                    <table id="drugData"
                        class="table table-sm table-striped table-bordered table-condensed table-hover">
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


    <div class="modal reset" id="modalDeliveryList" role="dialog" style="overflow: auto;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="h4 text-success"><i class="fa fa-pills"></i> Delivery</div>
                    <table id="delivDataList"
                        class="table table-sm table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Delivery Date</th>
                                <th>Item name</th>
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

    <form name="frmFilter" id="frmFilter">
        <div class="modal reset" id="modalSelectAccount" role="form" style="overflow: auto;">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="form">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="h5 text-success"><i class="fa fa-pills"></i> Select Account </div>
                        <div class="row">
                            <div class="col-md-12">
                                <select class="form-control form-control" name="stypeDrug" id="stypeDrug">
                                    <option value="">Select</option>
                                </select>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-danger btn-inline-block btn-md  btn-ladda" data-dismiss="modal"
                            data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="modal" id="modalChart" name="modalChart" role="form">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="form">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title text-white"><i class="fa fa-bar-chart"></i>&nbsp Stock</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="viewChart"></div>
                </div>
                <div class="modal-footer ">
                    <div class="btn-group float-right">
                        <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i
                                class="fa fa-close"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form name="frmNewPrice" id="frmNewPrice">
        <div class="modal reset" id="modalNewPrice" name="modalNewPrice" role="form">
            <div class="modal-dialog modal-dialog-centered modal-md" role="form">
                <div class="modal-content">
                    <div class="modal-header card-accent-success">
                        <h5 class="modal-title text-success" id="drugName"><i class="fa fa-calculator"></i>&nbsp New
                            price</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3 mb-1">
                                Enter new price:
                            </div>
                            <div class="col-md-9">
                                <input type="hidden" id="newdmdcomb" name="newdmdcomb">
                                <input type="hidden" id="newdmdctr" name="newdmdctr">
                                <input type="hidden" id="newsub" name="newsub">
                                <input type="hidden" id="newlotno" name="newlotno">
                                <input type="hidden" id="newstockbal" name="newstockbal">
                                <input type="hidden" id="newbegbal" name="newbegbal">
                                <input type="hidden" id="newformcode" name="newformcode">
                                <input type="hidden" id="uprice" name="uprice">
                                <input type="hidden" id="newisShared" name="newisShared">
                                <input type="hidden" id="qtyshare" name="qtyshare">
                                <input type="hidden" id="forshare" name="forshare">
                                <input type="hidden" id="shareprice" name="shareprice"> 
                                <input type="hidden" id="expirydate" name="expirydate">
                                <input type="hidden" id="delivintkey" name="delivintkey">
                                <span class="small text-primary" id="oldprice"></span>
                                <input type="number" class="form-control form-control-lg mb-1" autocomplete="off"
                                    id="newprice" name="newprice" placeholder="Enter Price">

                            </div>
                            <div class="col-md-3">
                                Remarks:
                            </div>
                            <div class="col-md-9">
                                <textarea type="number" class="form-control form-control-lg mb-1" autocomplete="off"
                                    id="newremarks" name="newremarks" placeholder="Remarks"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer ">
                        <div class="btn-group float-right">
                            <button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i
                                    class="fa fa-save"></i> Save</button>
                            <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>


    <form name="formDrugPic" id="formDrugPic" enctype="multipart/form-data">
        <div class="modal" id="modalDrugPic" role="dialog" style="overflow: auto;">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="h4 text-success"><i class="fa fa-image"></i>&nbsp Drug Photo</div>
                        <div class="d-flex justify-content-center">
                            <img id="drugcurPic" src="<?php echo base_url();?>/assets/img/drug_default.jpg" class="img-fluid img-thumbnail rounded mx-auto d-block mb-1"
                                alt="..."></img>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control form-control-md" type="file" name="drug_pic" id="drug_pic">
                                <input  type="hidden" name="dmdcombPic" id="dmdcombPic">
                                <input  type="hidden" name="dmdctrPic" id="dmdctrPic">
                                <input  type="hidden" name="baldteasofPic" id="baldteasofPic">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i
                                    class="fa fa-save"></i> Save</button>
                            <button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>

    <script src="<?php echo base_url()?>assets/scripts/pharmacy/stock.js"></script>
   