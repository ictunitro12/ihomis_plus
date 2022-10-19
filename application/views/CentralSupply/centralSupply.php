<div class="row">
  <div class="col-md-3">
    <div class="card card-accent-success">
      <div class="card-header">
        <div class="row">
          <div class="col-md-10">
            <div class="h3 text text-success"> 
              <i class="fa fa-th-list"></i>
              &nbsp  Patient Details
            </div>
          </div>
          <div class="col-md-2">
            <div class="btn-group pull-right" role="group" aria-label="">
              <button type="button" id="btnSearchPatient" name="btnSearchPatient" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda" ><i class="fa fa-user-plus"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="box-body box-profile">
          <h5 class="profile-username text-center text-success" id="patFullName"></h5>
          <ul class="list-group">
            <li class="list-group-item">
              <b class="text text-success"><i class="fa fa-address-book"></i>&nbsp Hopital Number:</b> 
              <a class="pull-right text text-success" id ="patHospitalNo"></a>
            </li>
            <li class="list-group-item">
              <b class="text text-success"><i class="fa fa-user-md"></i>&nbsp Encounter Details:</b> 
              <a class="pull-right text text-success" id ="patEncDetails"></a>
            </li>		
            <li class="list-group-item">
              <b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp Room:</b>
              <a class="pull-right text text-success" id="patRoom"></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-footer"></div>
    </div>
  </div>

  <div class="col-md-9">
    <div class="card card-accent-success">
      <div class="card-body table-responsive">
        <!--TABS-->
        <ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
          <li class="nav-item">
            <a class="nav-link text text-success active" id="issue-tab" data-toggle="tab" href="#tabpane-issue" role="tab" aria-controls="issue" aria-expanded="true">&nbsp ISSUANCE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text text-success" id="return-tab" data-toggle="tab" href="#tabpane-return" role="tab" aria-controls="opd">&nbsp RETURN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text text-success" id="delivery-tab" data-toggle="tab" href="#tabpane-delivery" role="tab" aria-controls="er">&nbsp DELIVERIES</a>
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
          <!--issuance table-->
          <div class="tab-pane fade show active" id="tabpane-issue" role="tabpanel" aria-labelledby="issue-tab">
            <form id="frmIssuedSupplyTable" method="post">
              <div class="pull-right" style="margin:5px;">
                <button type="button" id="btnIssueSupply" name="btnIssueSupply" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda issueSupply" title="Charge Slip"formaction="<?php echo site_url('CentralSupply_1/saveIssueSupply'); ?>">Issue</button>
              </div>
              <div class="pull-right" style="margin:5px;">
                <button type="button" id="btnChargeSlipModal" name="btnChargeSlipModal" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda" title="Charge Slip">Charge Slip</button>
              </div>

              <div class="pull-right" style="margin:5px;" hidden>
                <button type="button" id="btnChargeSlip" name="btnChargeSlip" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda chrgeslip" title="Charge Slip" formaction="<?php echo site_url('CentralSupply_1/saveChargeSlip'); ?>">Charge Slip</button>
              </div>
              <div class="pull-right" style="margin:5px;">
                <button type="button" id="btnAddSupply" name="btnAddSupply" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda" title="Charge Slip"> <i class="fa fa-plus"></i></button>
              </div>


              <input type="hidden" id="hiddenChargeSlip" name="hiddenChargeSlip" />
              <input type="hidden" id="hiddenenccode" name="hiddenenccode" />
              <input type="hidden" id="hiddenhpercode" name="hiddenhpercode" />

              <table id="IssuedSupplyTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
                <thead class="thead-dark">
                  <tr>
                    <th>ISSUE</th>
                    <th>CHARGE SLIP #</th>
                    <th>DESCRIPTION</th>
                    <th>QTY ORDERED</th>
                    <th>QTY ISSUED</th>
                    <th>PRICE</th>
                    <th>TOTAL</th>
                    <th>DATE OF ORDER</th>
                    <th>ORDER BY</th>
                    <th style="display:none;"></th>
                    <th style="display:none;"></th>
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
                    <th style="display:none;"></th>
                    <th style="display:none;"></th>
                  </tr>
                </tfoot>
              </table>
            </form>
          </div>
          <!--issuance table-->

          <!--return table-->
          <div class="tab-pane fade" id="tabpane-return" role="tabpanel" aria-labelledby="return-tab">
            <br>
            <table id="opdtbl" class="table table-sm table-striped table-borderless table-condensed table-hover "width="100%">
              <thead class="thead-dark">
                <tr>
                  <th></th>
                  <th width="140px">HEALTH RECORD NO</th>
                  <th >PATIENT NAME</th>
                  <th>SEX</th>
                  <th>ENCOUNTER</th>
                  <th>DATE</th>
                  <th width="50px"></th>
                </tr>
              </thead>
              <tfoot class="thead-dark">
                <tr>
                  <th></th>
                  <th> </th>
                  <th> </th>
                  <th></th>
                  <th></th>
                  <th ></th>
                  <th width="50px"></th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!--return table-->
        </div>
      </div>
    </div>
  </div>
</div>


<!--modals-->
<!--search patient modal-->
<form id="frmPatSearch" method="post">
  <div class="modal" id="PatSearch" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
      <div class="modal-content card-accent-success">

        <div class="modal-body border-success">
          <h1 class="modal-title text-success"><i class="fa fa-search"></i> Patient Search</h1>
          <div class="col-md-12 mb-2">
            <input type="text" class="form-control form-control-lg" placeholder="Hospital Number" name ="shpercode" id="shpercode" autocomplete="off" >
          </div>
          <div class="col-md-12 mb-2">
            <input type="text" class="form-control form-control-lg" placeholder="LastName" name ="slname" id="slname" autocomplete="off" >
          </div>
          <div class="col-md-12 mb-2">
            <input type="text" class="form-control form-control-lg" placeholder="FirstName" name ="sfname" id="sfname" autocomplete="off" >
          </div>
          <div class="col-md-12 mb-2">
            <input type="text" class="form-control form-control-lg" placeholder="MiddleName" name ="smname" id="smname" autocomplete="off" >
          </div>
          <div class="col-md-12 mb-2">
            <input type="date" class="form-control form-control-lg" placeholder="BirthDate" name ="sbod" id="sbod" autocomplete="off" >
          </div>
          <div class="col-md-12 mb-2">
            <select name="ssex" id="ssex" class="form-control form-control-lg" >
              <option>Select</option>
              <option value="M">Male</option>
              <option  value="F">Female</option>
            </select>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="submit "name="sSubmit" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!--search patient modal-->

<!--search patient list modal-->
<form id="frmPatSearchList" method="post">
  <div class="modal" id="PatSearchList" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Patient List</h1>
          <table id="TblPatSearchList" class="table table-hover table-sm table table-striped table-borderless table-condensed">
            <thead class="thead-dark">
              <tr>
                <th>Health Record:</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Middlename</th>
                <th>Sex</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</form>
<!--search patient list modal-->

<!--search patient encounter modal-->
<form id="frmPatEncList" method="post">
  <div class="modal" id="PatEncList" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Visit Log</h1>
          <table id="TblPatEncList" class="table table-hover table-sm table table-striped table-borderless table-condensed">
            <thead class="thead-dark">
              <tr>
                <th>Health Record:</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Birthdate</th>
                <th>Date/Time</th>
                <th>Type of Encounter</th>
                <th>Discharge Date</th>
                <th>Final Diagnosis</th>
                <th>Room</th>
                <th>Encounter</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</form>
<!--search patient encounter modal-->


<!--search supply modal-->

<!--search patient encounter modal-->
<form id="frmSearchSupply" method="post">
  <div class="modal" id="SearchSupply" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <h1 class="modal-title text-success"><i class="fa fa-th-list"></i>Supply List</h1>
            </div>
            <div class="col-md-6">
              <select class="form-control form-control-md" name="selectChrgCode" id="selectChrgCode">
                <option value="" hidden selected disabled>Select Charge Type</option>
                <?php
                if (!empty($chrgtype)) {
                  foreach ($chrgtype as $value) {
                    ?>
                    <option value="<?php echo $value->chrgcode; ?>"><?php echo $value->chrgdesc; ?></option>
                    <?php
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table id="SupplyListTable" class="table table-lg table-striped table-borderless table-condensed table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th></th>
                    <th>DETAILS</th>
                    <th>PRICE</th>
                    <th>REORDER LEVEL</th>
                    <th>STOCK</th>
                  </tr>
                </thead>
                <tfoot class="thead-dark">
                  <tr>
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
      </div>
    </div>
  </div>
</form>
<!--search supply modal-->


<form id="frmIssueSelect" method="post">
  <div class="modal" id="IssueSelect" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i>&nbspEnter Quantity</h1>
          <ul class="list-group">
            <li class="list-group-item">
              <b class="text text-success"><i class="fa fa-address-book"></i>&nbsp Item Code:</b> 
              <div class="pull-right text text-success" id ="selectItemCode"></div>
            </li>
            <li class="list-group-item">
              <b class="text text-success"><i class="fa fa-user-md"></i>&nbsp Description:</b> 
              <div class="pull-right text text-success" id ="selectDescription"></div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Ordered Quantity:</b> 
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="selectOrderedQuantity" name="selectOrderedQuantity" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Issued Quantity:</b> 
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="selectIssuedQuantity" name="selectIssuedQuantity" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Price:</b> 
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="selectPrice" name="selectPrice" placeholder ="">
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnselectAdd" name="btnselectAdd"><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>

<div class="modal" id="modalChargeSlip" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h1 class="modal-title text-success"><i class="fa fa-th-list"></i>&nbsp Charge Slip</h1>
        <ul class="list-group">
          <li class="list-group-item">
            <div class="row">
              <div class="col-md-6">
                <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Charge Slip Number:</b> 
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="chargeSlipNumber" name="chargeSlipNumber" placeholder ="" readonly>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="modal-footer bg-secondary">
        <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="modalChargeSlipAdd" name="modalChargeSlipAdd"><i class="fa fa-plus"></i></button>
        <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
      </div>
    </div>
  </div>
</div>


<!--modals-->

<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script type="text/javascript">
  var enccode = '';
  var hpercodes = '';
  $(function () {
    window.id_counter = 0;
    $("#PatSearch").modal({backdrop: "static"});
    $('#PatSearch').modal('show');
    $('#slname').val('').focus();
    uppercase();
  });
  $('#btnSearchPatient').click(function () {
    $("#PatSearch").modal({backdrop: "static"});
    $('#PatSearch').modal('show');
    $('#slname').val('').focus();
    uppercase();
  });
  $('#frmPatSearch').submit('click', function () {
    $.ajax({
      url: baseURL + "Patient/PatientAdvanceSearch",
      type: "POST",
      data: new FormData(this),
      dataType: "JSON",
      processData: false,
      contentType: false,
      cache: false,
      async: true,
      success: function (data, response) {
        window.modalHTML = $("#PatSearchList").html();
        $("#PatSearchList").modal({backdrop: "static"});
        $("#PatSearchList").modal('show');
        $("#PatSearch").modal('hide');
        PatSearchList(data);
        $('#shpercode').val('');
        $('#slname').val('').focus();
        $('#sfname').val('');
        $('#smname').val('');
      },
      error: function (response) {
        alert("Error:Please try again!");
      }});
    return false;
  });
  function PatSearchList(data) {
    var table = $("#TblPatSearchList").DataTable({
      data: data,
      destroy: true,
      className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
      columns: [
        {"data": "hpercode"},
        {"data": "patfirst"},
        {"data": "patlast"},
        {"data": "patmiddle"},
        {"data": "patsex"}]
    });
    $('#TblPatSearchList').off('click', 'tr');
    $('#TblPatSearchList').on('click', 'tr', function () {
      var data = table.row(this).data();
      PatEncounter(data['hpercode']);
    });
  }

  function PatEncounter(hpercode) {
    $("#PatEncList").modal({backdrop: "static"});
    $('#PatEncList').modal('show');
    $("#PatSearchList").modal('hide');
    var table2 = $('#TblPatEncList').DataTable({
      "pageLength": 5,
      "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
      "pagingType": "full_numbers",
      "processing": true,
      "serverSide": true,
      "destroy": true,
      "order": [[1, "desc"]],
      "ajax": {
        "url": '<?php echo base_url() . "CentralSupply_1/searchPatEncounter/"; ?>' + hpercode,
        "type": 'POST'
      },
      "columns": [
        {'data': 'hpatcode', 'defaultContent': ''},
        {'data': 'patlast', 'defaultContent': ''},
        {'data': 'patfirst', 'defaultContent': ''},
        {'data': 'patmiddle', 'defaultContent': ''},
        {'data': 'patbdate', 'defaultContent': ''},
        {'data': 'encdate', 'defaultContent': ''},
        {'data': 'toecode', 'defaultContent': ''},
        {'data': 'disdate', 'defaultContent': ''},
        {'data': 'diagdesc', 'defaultContent': ''},
        {'data': 'room', 'defaultContent': ''},
        {'data': 'enccode', 'defaultContent': ''}
      ],
      columnDefs: [{
          targets: [0, 1, 2, 3, 4, 10],
          visible: false,
          orderable: false
        }]

    });
    $('#TblPatEncList').off('click', 'tr');
    $('#TblPatEncList').on('click', 'tr', function () {
      var data = table2.row(this).data();
      $('#patHospitalNo').text(data['hpatcode']);
      $('#patEncDetails').text(data['toecode'] + " - " + data['encdate']).prop('readonly', true);
      $('#patFullName').text(data['patlast'] + ", " + data['patfirst'] + " " + data['patmiddle']);
      $('#patRoom').text(data['room']);
      issueSuppliesdt(data['enccode']);
      enccode = data['enccode'];
      hpercodes = data['hpatcode'];
      $('#hiddenenccode').val(enccode);
      $('#hiddenhpercode').val(hpercodes);
      $('#PatEncList').modal('hide');
    });
  }

  function issueSuppliesdt(enccode) {
    $.post('<?php echo site_url("CentralSupply_1/issueSuppliesdt"); ?>',
            {
              'enccode': enccode
            },
            function (data) {

              var html = "";
              var i;
              for (i = 0; i < data.length; i++) {
                if (data[i].pchrgqty > data[i].qtyissued) {
                  html += "<tr>\n\
                <td align='center'><input type='checkbox' name='issue[" + i + "]'/></td>\n\
                <td><input type='text' class='form - control form - control - sm' name='pcchrgcod[" + i + "]' size='10' value='" + data[i].pcchrgcod + "'/></td>\n\
                <td><input type='hidden' name='gendesc[" + i + "]' value='" + data[i].cl2comb + "' />" + data[i].itemDesc + "</td>\n\
                <td><input type='text' class='form - control form - control - sm' name='pchrgqty[" + i + "]' value='" + data[i].pchrgqty + "' size='5' /></td>\n\
                <td><input type='text' class='form - control form - control - sm qty_ modesto' id='' value='" + data[i].qtyissued + "' name='qty[" + i + "]' size='5' /></td>\n\
                <td><input type='text' class='form - control form - control - sm pchrgup_' id='' name='pchrgup[" + i + "]' value='" + data[i].pchrgup + "' size='5' /></td>\n\
                <td id='td_total_'>" + data[i].pcchrgamt + "</td><input type='hidden' name='total[" + i + "]' id='total_' value='" + data[i].pcchrgamt + "' />\n\
                <td><input type='text' name='dodate[" + i + "]' value='" + data[i].dodate + "'/></td>\n\
                <td><input type='hidden' name='order_by[" + i + "]' /></td>\n\
                <td><input type='hidden' name='docointkey[" + i + "]' value='" + data[i].docointkey + "'/></td>\n\
                <td><input type='hidden' name='docointkey[" + i + "]' value='" + data[i].docointkey + "'/></td>\n\
                </tr>";
                } else {
                  html += "<tr>\n\
                <td>" + data[i].issue + "</td>\n\
                <td>" + data[i].pcchrgcod + "</td>\n\
                <td>" + data[i].itemDesc + "</td>\n\
                <td>" + data[i].pchrgqty + "</td>\n\
                <td>" + data[i].qtyissued + "</td>\n\
                <td>" + data[i].pchrgup + "</td>\n\
                <td>" + data[i].pcchrgamt + "</td>\n\
                <td>" + data[i].dodate + "</td>\n\
                <td>" + data[i].orderBy + "</td>\n\
                <td style='display:none;'>" + data[i].docointkey + "</td>\n\
                </tr>";
                }
              }
              $("#IssuedSupplyTable").append(html);
              $('.modesto').trigger('keyup');
            }, "json");
  }

  function qtyCompute(id) {

    var qty = $(".qty_" + id).val();
    var price = $(".pchrgup_" + id).val();
    var times = "*";
    var total = eval(qty + times + price);
    $("#total_" + id).val(total);
    $("#td_total_" + id).html(total);
  }

  function pchrgupCompute(id) {

    var qty = $(".qty_" + id).val();
    var price = $(".pchrgup_" + id).val();
    var times = "*";
    var total = eval(qty + times + price);
    $("#total_" + id).val(total);
    $("#td_total_" + id).html(total);
  }

  $('#btnAddSupply').on('click', function () {
    $('#SearchSupply').modal('show');
  });
  $('#selectChrgCode').on('change', function () {
    SupplyListTable($(this).val());
  });
  function SupplyListTable(selected) {
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
        "url": "<?php echo site_url('CentralSupply_1/csrSupplylists/'); ?>" + selected,
        "type": "POST"
      },
      columnDefs:
              [{
                  targets: 0,
                  visible: false,
                  orderable: false
                }]
    });
    $('#SupplyListTable').off('dblclick', 'tr');
    $('#SupplyListTable').on('dblclick', 'tr', function () {
      var data = tableSupply.row(this).data();
      if ($('#patHospitalNo').text() === '') {
        toastr.warning('Please select a patient first!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Warning');
      } else {
        if (data[4] === '0.00') {
          toastr.warning('No stock available!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Warning');
        } else {
          $('#IssueSelect').modal({backdrop: 'static'});
          $('#IssueSelect').modal('show');
          $('#selectItemCode').text(data[0]);
          $('#selectDescription').text(data[1]);
          $('#selectOrderedQuantity').val('1').focus();
          $('#selectIssuedQuantity').val('1');
          $('#selectPrice').val(data[2]);
        }
      }
    });
  }

  $('#btnselectAdd').on('click', function () {


    var selectItemCode = $('#selectItemCode').text();
    var selectDescription = $('#selectDescription').text();
    var selectOrderedQuantity = $('#selectOrderedQuantity').val();
    var selectIssuedQuantity = $('#selectIssuedQuantity').val();
    var selectPrice = $('#selectPrice').val();
    var selectTimeStamp = timestamp();
    var html = "";
    html += "<tr>\n\
        <td align='center'><input type='checkbox' name='chargeSlip[" + window.id_counter + "]' checked/></td>\n\
        <td><input type='text' class='form - control form - control - sm' name='chargeSlippcchrgcod[]' size='10' /></td>\n\
        <td><input type='hidden' name='chargeSlipgendesc[]' value='" + selectItemCode + "' />" + selectDescription + "</td>\n\
        <td><input type='text' class='form - control form - control - sm' name='chargeSlippchrgqty[]' value='" + selectOrderedQuantity + "' size='5' /></td>\n\
        <td><input type='text' class='form - control form - control - sm qty_" + window.id_counter + " modesto' id='" + window.id_counter + "' value='" + selectIssuedQuantity + "' onkeyup='qtyCompute(id)' name='chargeSlipqty[]' size='5' /></td>\n\
        <td><input type='text' class='form - control form - control - sm pchrgup_" + window.id_counter + "' id='" + window.id_counter + "' onkeyup='pchrgupCompute(id)' name='chargeSlippchrgup[]' value='" + selectPrice + "' size='5' /></td>\n\
        <td id='td_total_" + window.id_counter + "'></td><input type='hidden' name='chargeSliptotal[]' id='total_" + window.id_counter + "' value='' />\n\
        <td><input type='text' name='chargeSlipdodate[]' value='" + selectTimeStamp + "'/></td>\n\
        <td><input type='hidden' name='chargeSliporder_by[]' /></td>\n\
            </tr>";

    $("#IssuedSupplyTable").append(html);
    $('.modesto').trigger('keyup');
    window.id_counter++;
    $('#IssueSelect').modal('hide');
  });
  function timestamp() {
    function pad(n) {
      return n < 10 ? "0" + n : n
    }
    d = new Date();
    dash = "-";
    colon = ":";
    return d.getFullYear() + dash +
            pad(d.getMonth() + 1) + dash +
            pad(d.getDate()) + " " +
            pad(d.getHours()) + colon +
            pad(d.getMinutes()) + colon +
            pad(d.getSeconds());
  }


  function getChargeSlipMax() {
    $.ajax({
      url: '<?php echo site_url("CentralSupply_1/getChargeSlipMax"); ?>',
      type: 'POST',
      dataType: 'JSON',
      success: function (data) {
        $('#chargeSlipNumber').val(data);
        $('#modalChargeSlip').modal('show');
      }

    });
  }

  $('#btnChargeSlipModal').on('click', function () {
    $('#chargeSlipNumber').val('');
    getChargeSlipMax();
  });

  $('#modalChargeSlipAdd').on('click', function () {
    $('#hiddenChargeSlip').val($('#chargeSlipNumber').val());
    $('#btnChargeSlip').trigger('click');
    $('#modalChargeSlip').modal('hide');
  });

  $('.chrgeslip').click(function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: $(this).attr('formaction'),
      data: $("#frmIssuedSupplyTable").serialize(),
      success: function (data) {
        $("#IssuedSupplyTable  tbody tr").remove();
        issueSuppliesdt(enccode);
        window.id_counter = 0;
      }

    });
  });

  $('.issueSupply').click(function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: $(this).attr('formaction'),
      data: $("#frmIssuedSupplyTable").serialize(),
      success: function (data) {
        $("#IssuedSupplyTable  tbody tr").remove();
        issueSuppliesdt(enccode);
        $('#selectChrgCode').trigger('change');
        window.id_counter = 0;
      }

    });
  });

</script>