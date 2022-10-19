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

        <div class="card card-accent-success">
          <div class="card-header">
            <div class="row">

              <div class="col-md-6">
                <div class="h3 text text-success"> 
                  <i class="fa fa-th-list"></i>
                  &nbsp  Return Supply
                </div>
              </div>
              <div class="col-md-6">
                <div class="btn-group pull-right" role="group" aria-label="">
                  <button type="button" id="btnSearchPatient" name="btnSearchPatient" data-toggle="tooltip" class="btn btn-success btn-md  btn-ladda" title="Charge Slip">Return</button> &nbsp
                </div>
              </div>
            </div>
          </div>
          <div class="card-body table-responsive">
            <table id="ReturnSupplyTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
              <thead class="thead-dark">
                <tr>
                  <th>RETURN</th>
                  <th>CHARGE SLIP #</th>
                  <th>DESCRIPTION</th>
                  <th>QUANTITY ISSUED</th>
                  <th>DATE ISSUED</th>
                  <th>QUANTITY RETURNED</th>
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
                  <th width="50px"></th>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="card-footer">

          </div>
        </div>
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
                <th>Encounter Code</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Birthdate</th>
                <th>Date/Time</th>
                <th>Type of Encounter</th>
                <th>Discharge Date</th>
                <th>Final Diagnosis</th>
                <th>Room</th>
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
                  <input type="number" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="selectOrderedQuantity" name="patEncDetails" placeholder ="">
                </div>
              </div>
            </li>					

          </ul>
        </div>
        <div class="modal-footer bg-secondary">
          <a href="<?php echo site_url('Patient/PatientRegister'); ?>" class="btn btn-success btn-square btn-ladda btn-lg" data-style="zoom-in"><i class="fa fa-plus"></i></a>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>

<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script type="text/javascript">

  $(function () {
    uppercase();
    $('#btnSearchPatient').click(function () {
      $('#PatSearch').modal('show');
      $('#shpercode').val('');
      $('#slname').val('').focus();
      $('#sfname').val('');
      $('#smname').val('');
      $('#slname').val('');
      $('#slname').val('');
    });


  });

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
      console.log(data);

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
        {'data': 'hpatcode', 'defaultContent': ''},
        {'data': 'patlast', 'defaultContent': ''},
        {'data': 'patfirst', 'defaultContent': ''},
        {'data': 'patmiddle', 'defaultContent': ''},
        {'data': 'patbdate', 'defaultContent': ''},
        {'data': 'encdate', 'defaultContent': ''},
        {'data': 'toecode', 'defaultContent': ''},
        {'data': 'disdate', 'defaultContent': ''},
        {'data': 'diagdesc', 'defaultContent': ''},
        {'data': 'room', 'defaultContent': ''}
      ],
      columnDefs: [{
          targets: [0, 1, 2, 3, 4, 5],
          visible: false,
          orderable: false
        }]

    });

    $('#TblPatEncList').on('click', 'tr', function () {
      var data = table2.row(this).data();
      console.log(data);
      $("#PatEncList").html(window.modalHTML);
      $('#patHospitalNo').text(data['hpatcode']);
      $('#patEncDetails').text(data['toecode'] + " - " + data['encdate']).prop('readonly', true);
      $('#patFullName').text(data['patlast'] + ", " + data['patfirst'] + " " + data['patmiddle']);
      $('#patRoom').text(data['room']);
      returnSuppliesdt(data['enccode']);
      $('#PatEncList').modal('hide');
    });

  }

  function SupplyListTable() {

    var table = $("#SupplyListTable").DataTable({
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
        "url": "<?php echo site_url('CentralSupply/csrSupplylists'); ?>",
        "type": "POST"},
      columnDefs:
              [{
                  targets: 0,
                  visible: false,
                  orderable: false
                }]

    });

    $('#SupplyListTable').on('dblclick', 'tr', function () {
      var data = table.row(this).data();
      $('#IssueSelect').modal('show');
      $('#selectItemCode').text(data[0]);
      $('#selectDescription').text(data[1]);
      $('#selectOrderedQuantity').focus();
    });
  }

  function issueSuppliesdt(hpercode) {
  
    var table = $("#IssuedSupplyTable").DataTable({
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
        "url": "<?php echo site_url('CentralSupply/returnSuppliesdt/'); ?>" + hpercode,
        "type": "POST"
      }
    });
  }

  function returnSuppliesdt(enccode) {
    var encountercode = encodeURIComponent(encodeURIComponent(enccode));
    var table = $("#ReturnSupplyTable").DataTable({
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
      destroy: true,
      ajax: {
        "url": "<?php echo site_url('CentralSupply/returnSuppliesdt/'); ?>" + encountercode,
        "type": "POST"
      }
    });
  }
  
   $('#selectProctype').change(function () {
    var selected = $(this).val();
    SupplyListTable(selected);
  }).trigger('change');
  
  
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




</script>
