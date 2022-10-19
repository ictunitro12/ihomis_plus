<div class="row">
  <div class="col-md-7">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-accent-success">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <div class="h3 text text-success"> 
                  <i class="fa fa-th-list"></i>
                  &nbsp  Patient Details
                </div>
              </div>
              <div class="col-md-6">
                <div class="btn-group pull-right" role="group" aria-label="">
                  <button type="button" id="btnSearchPatient" name="btnSearchPatient" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda" ><i class="fa fa-user-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
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
                <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Full Name:</b> 
                <a class="pull-right text text-success" id ="patFullName"></a>
              </li>					
              <li class="list-group-item">
                <b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp Room:</b>
                <a class="pull-right text text-success" id="patRoom"></a>
              </li>
            </ul>
          </div>
        </div>

        <!--        <div class="card card-accent-success">
                  <div class="card-header">
                    <div class="row">
        
                      <div class="col-md-6">
                        <div class="h3 text text-success"> 
                          <i class="fa fa-th-list"></i>
                          &nbsp  Issue Supply
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="btn-group pull-right" role="group" aria-label="">
                          <button type="button" id="btnSearchPatient" name="btnSearchPatient" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda" title="Charge Slip">Charge Slip</button> &nbsp
                          <button type="button" id="btnSearchPatient" name="btnSearchPatient" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda" title="Charge Slip">Issue</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body table-responsive">
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
                          <th>cl2comb</th>
                          <th width="50px"></th>
                        </tr>
                      </thead>
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
                          <th width="50px"></th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="card-footer">
        
                  </div>
                </div>-->

        <form id="frmIssuedSupplyTable2" name="frmIssuedSupplyTable2" method="POST">
          <div class="card card-accent-success">
            <div class="card-header">
              <div class="row">

                <div class="col-md-6">
                  <div class="h3 text text-success"> 
                    <i class="fa fa-th-list"></i>
                    &nbsp  Issue Supply
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="btn-group pull-right" role="group" aria-label="">
                    <button type="button" id="btnChargeSlipModal" name="btnChargeSlipModal" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda" title="Charge Slip">Charge Slip</button>
                    <button type="button" id="btnChargeSlip" name="btnChargeSlip" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda issueSupply" title="Charge Slip" formaction="<?php echo site_url('CentralSupply/saveChargeSlip'); ?>" hidden>Charge Slip</button> &nbsp
                    <button type="button" id="btnIssue" name="btnIssue" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda issueSupply" title="Issue" formaction="<?php echo site_url('CentralSupply/saveIssue'); ?>" >Issue</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body table-responsive">
              <input type="hidden" id="chargeSlip" name="chargeSlip" />
              <input type="hidden" id="hiddenenccode" name="hiddenenccode" />
              <input type="hidden" id="hiddenhpercode" name="hiddenhpercode" />
              <table id="IssuedSupplyTable2" class="table table-sm table-striped table-borderless table-condensed table-hover ">
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
                    <th>cl2comb</th>
                    <th width="50px"></th>
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
                    <th width="50px"></th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div class="card-footer">

            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
  <div class="col-md-5">
    <div class="card card-accent-success">
      <div class="card-header">
        <div class="row">

          <div class="col-md-6">
            <div class="h3 text text-success"> 
              <i class="fa fa-th-list"></i>
              &nbsp  Supply List
            </div>
          </div>

          <div class="col-md-6">
            <div>
              <select class="form-control form-control-sm" name="selectProctype" id="selectProctype">
                <?php
                if (!empty($proctyp)) {
                  foreach ($proctyp as $value) {
                    ?>
                    <option value="<?php echo $value->ptcode; ?>"><?php echo $value->ptdesc; ?></option>
                    <?php
                  }
                }
                ?>
              </select>
            </div>
          </div>

        </div>
      </div>
      <div class="card-body table-responsive">
        <table id="SupplyListTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
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
      <div class="card-footer">

      </div>
    </div>
  </div>
</div>




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
        <div class="modal-footer bg-secondary">
          <a href="<?php echo site_url('Patient/PatientRegister'); ?>" class="btn btn-success btn-square btn-ladda btn-lg" data-style="zoom-in"><i class="fa fa-plus"></i></a>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>

<form id="frmPatEncList" method="post">
  <div class="modal" id="PatEncList" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Admission History</h1>
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
        <div class="modal-footer bg-secondary">
          <a href="<?php echo site_url('Patient/PatientRegister'); ?>" class="btn btn-success btn-square btn-ladda btn-lg" data-style="zoom-in"><i class="fa fa-plus"></i></a>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>


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


<form id="frmIssueEdit" method="post">
  <div class="modal" id="IssueEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i>&nbsp Edit</h1>
          <ul class="list-group">
            <li class="list-group-item">
              <b class="text text-success"><i class="fa fa-address-book"></i>&nbsp Item Code:</b> 
              <div class="pull-right text text-success" id ="editItemCode"></div>
            </li>
            <li class="list-group-item">
              <b class="text text-success"><i class="fa fa-user-md"></i>&nbsp Description:</b> 
              <div class="pull-right text text-success" id ="editDescription"></div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Ordered Quantity:</b> 
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="editOrderedQuantity" name="selectOrderedQuantity" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Issued Quantity:</b> 
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="editIssuedQuantity" name="selectIssuedQuantity" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Price:</b> 
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="editPrice" name="selectPrice" placeholder ="">
                </div>
              </div>
            </li>

          </ul>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnselectEdit" name="btnselectEdit"><i class="fa fa-plus"></i></button>
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



<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script type="text/javascript">
  var enccode = '';
  var hpercodes = '';
  $(function () {
    getChargeSlipMax();
    window.id_counter = 0;
    uppercase();
    $('#btnSearchPatient').click(function () {
      $('#PatSearch').modal('show');
      $('#shpercode').val('');
      $('#slname').val('').focus();
      $('#sfname').val('');
      $('#smname').val('');
    });
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

  function loadSupplies() {
    var data = new Object();
    data.id = "CentralSupplyTable";
    data.link = "<?php echo site_url('CentralSupply/csrSuppliesList'); ?>";
    data.type = "POST";
    data.coldef = [
      {
        targets: 0,
        visible: false,
        orderable: false
      },
      {
        targets: [6, 7],
        searchable: false,
        orderable: false
      }
    ];
    loadTable(data);
  }

  window.modalHTML = "";
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
        $("#PatSearchList").modal('show');
        $("#PatSearch").modal('hide');
        PatSearchList(data);
      },
      error: function (response) {
        alert("Error:Please try again!");
      }});
    return false;
  });
  function PatSearchList(data)
  {
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
    $('#TblPatSearchList').on('click', 'tr', function () {
      var data = table.row(this).data();
      $("#PatSearchList").html(window.modalHTML);
      PatEncounter(data['hpercode']);
    });
  }


  function PatEncounter(hpercode) {
    window.modalHTML = $("#PatEncList").html();
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
        url: '<?php echo base_url() . "CentralSupply/searchPatEncounter/"; ?>' + hpercode,
        type: 'POST'
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
    $('#TblPatEncList').on('click', 'tr', function () {
      var data = table2.row(this).data();
      $("#PatEncList").html(window.modalHTML);
      $('#patHospitalNo').text(data['hpatcode']);
      $('#patEncDetails').text(data['toecode'] + " - " + data['encdate']).prop('readonly', true);
      $('#patFullName').text(data['patlast'] + ", " + data['patfirst'] + " " + data['patmiddle']);
      $('#patRoom').text(data['room']);
      issueSuppliesdt(data['hpatcode']);
      issueSuppliesdt2(data['enccode']);
      enccode = data['enccode'];
      hpercodes = data['hpatcode'];
      $('#hiddenenccode').val(enccode);
      $('#hiddenhpercode').val(hpercodes);
      $('#PatEncList').modal('hide');
    });
  }




  function SupplyListTable(selected) {
    if ($.fn.DataTable.isDataTable('#SupplyListTable')) {
      $('#SupplyListTable').DataTable().destroy();
    }

    $('#SupplyListTable tbody').empty();
    var tableSupply = $("#SupplyListTable").DataTable({
      oLanguage: {
        sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'
      },
      pageLength: 20,
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
        "url": "<?php echo site_url('CentralSupply/csrSupplylists/'); ?>" + selected,
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
      window.modalHTML = $("#IssueSelect").html();
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
  var issueTable;
  function issueSuppliesdt(hpercode) {
    issueTable = $("#IssuedSupplyTable").DataTable({
      oLanguage: {
        sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'
      },
      pageLength: 20,
      aLengthMenu: [[10, 15, 20, 50, 75, -1], [10, 15, 20, 50, 75, "All"]],
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
        "url": "<?php echo site_url('CentralSupply/issueSuppliesdt/'); ?>" + hpercode,
        "type": "POST"
      }
    });
  }

  function issueSuppliesdt2(enccode) {
    $.post('<?php echo site_url("CentralSupply/issueSuppliesdt2"); ?>',
            {
              'enccode': enccode
            },
            function (data) {
              var html = "";
              var i;
              for (i = 0; i < data.length;
              i++
                      )
              {
              html += "<tr>
                      + '<td>"+data[i].issue+"</td>';
              +'<td>"+data[i].pcchrgcod+"</td>';
              +'<td>"+data[i].itemDesc+"</td>';
              +'<td>"+data[i].pchrgqty+"</td>';
              +'<td>"+data[i].qtyissued+"</td>';
              +'<td>"+data[i].pchrgup+"</td>';
              +'<td>"+data[i].pcchrgamt+"</td>';
              +'<td>"+data[i].dodate+"</td>';
              +'<td>"+data[i].orderBy+"</td>';
              + '<td>"+data[i].cl2comb+"</td>';
                      + '</tr>";
              }
              $("#IssuedSupplyTable2").append(html);
            }, "json");
  }

  $('#btnselectAdd').on('click', function () {
    var selectItemCode = $('#selectItemCode').text();
    var selectDescription = $('#selectDescription').text();
    var selectOrderedQuantity = $('#selectOrderedQuantity').val();
    var selectIssuedQuantity = $('#selectIssuedQuantity').val();
    var selectPrice = $('#selectPrice').val();
    var selectTimeStamp = timestamp();
    var html = "";
            html += "<tr>
            + '<td align='center'><input type='checkbox' name='issue["+window.id_counter+"]' checked/></td>';
            + '<td><input type='text' class='form - control form - control - sm' name='pcchrgcod[]' size='10' /></td>';
            + '<td><input type='hidden' name='gendesc[]' value='"+selectItemCode +"' />"+selectDescription+"</td>';
            + '<td><input type='text' class='form - control form - control - sm' name='pchrgqty[]' value='"+selectOrderedQuantity+"' size='5' /></td>';
            + '<td><input type='text' class='form - control form - control - sm qty_"+window.id_counter+" modesto' id='"+window.id_counter+"' value='"+selectIssuedQuantity+"' onkeyup='qtyCompute(id)' name='qty[]' size='5' /></td>';
            + '<td><input type='text' class='form - control form - control - sm pchrgup_"+window.id_counter+"' id='"+window.id_counter+"' onkeyup='pchrgupCompute(id)' name='pchrgup[]' value='"+selectPrice+"' size='5' /></td>';
            + '<td id='td_total_"+window.id_counter+"'></td><input type='hidden' name='total[]' id='total_"+window.id_counter+"' value='' />';
            + '<td><input type='text' name='dodate[]' value='"+selectTimeStamp +"'/></td>';
            + '<td><input type='hidden' name='order_by[]' /></td>';
            + '<td><input type='text' name='cl2comb[]' value='"+selectItemCode+"'/></td>';
    +
            '</tr>";

            $("#IssuedSupplyTable2").append(html);
    $('.modesto').trigger('keyup');
    window.id_counter++;
    $('#IssueSelect').modal('hide');
  });

  $('#selectProctype').change(function () {
    var selected = $(this).val();
    SupplyListTable(selected);
  }).trigger('change');

  $('#IssuedSupplyTable').on('click', '.modaleditissue', function () {
    var itemdesc = $(this).attr('data-itemdesc');
    var pchrgqty = $(this).attr('data-pchrgqty');
    var qtyissued = $(this).attr('data-qtyissued');
    var pchrgup = $(this).attr('data-pchrgup');
    var cl2comb = $(this).attr('data-cl2comb');
    $('#IssueEdit').modal('show');
    $('#editDescription').text(itemdesc);
    $('#editItemCode').text(cl2comb);
    $('#editOrderedQuantity').val(pchrgqty).focus();
    $('#editIssuedQuantity').val(qtyissued);
    $('#editPrice').val(pchrgup);
  });
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

  function getChargeSlipMax() {
    $.ajax({
      url: '<?php echo site_url("CentralSupply/getChargeSlipMax"); ?>',
      type: 'POST',
      dataType: 'JSON',
      success: function (data) {
        $('#chargeSlipNumber').val(data);
      }

    });
  }


  $('#btnChargeSlipModal').on('click', function () {
    getChargeSlipMax();
    $('#modalChargeSlip').modal('show');
  });

  $('#modalChargeSlipAdd').on('click', function () {
    $('#chargeSlip').val($('#chargeSlipNumber').val());
    $('#btnChargeSlip').trigger('click');
    $('#modalChargeSlip').modal('hide');
  });


  $('.issueSupply').click(function () {
    $.ajax({
      type: 'POST',
      url: $(this).attr('formaction'),
      data: $("#frmIssuedSupplyTable2").serialize(),
      success: function () {
        $("#IssuedSupplyTable2 tbody tr").remove();
        issueSuppliesdt2(enccode);
      }

    });
  });

</script>
