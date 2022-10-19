<link rel="stylesheet" type="text/css"  href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<div class="row">
  <div class="col-md-12">
    <div class="card card-accent-success">
      <div class="card-header">
        <div class="row">

          <div class="col-md-6">
            <div class="h3 text text-success"> 
              <i class="fa fa-th-list"></i>
              &nbsp  <?php echo $header; ?>
            </div>
          </div>

          <div class="col-md-6">
            <div class="btn-group pull-right" role="group" aria-label="">
              <a href="<?php echo site_url('Patient/PatientRegister'); ?>" data-toggle="tooltip" title="Register Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i>
              </a>
              <a href="<?php echo site_url('Admission/AdmissionForm'); ?>" data-toggle="tooltip" data-placement="top" title="Admit Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-bed"></i>
              </a>


            </div>
          </div>	
        </div>
      </div>
      <div class="card-body table-responsive">
        <table id="CentralSupplyTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
          <thead class="thead-dark">
            <tr>
              <th></th>
              <th>PATIENT NAME</th>
              <th>REQUEST DATE</th>
              <th>ITEM REQUESTED</th>
              <th>QUANTITY</th>
              <th>UNIT OF MEASURE</th>
              <th>WARD/ROOM/BED</th>
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
              <th width="50px"></th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="card-footer">

      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card card-accent-success">
      <div class="card-header">
        <div class="row">

          <div class="col-md-6">
            <div class="h3 text text-success"> 
              <i class="fa fa-th-list"></i>
              &nbsp  <?php echo $header2; ?>
            </div>
          </div>

          <div class="col-md-6">
            <div class="btn-group pull-right" role="group" aria-label="">
<!--              <a href="<?php echo site_url('Patient/PatientRegister'); ?>" data-toggle="tooltip" title="Register Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i>
              </a>
              <a href="<?php echo site_url('Admission/AdmissionForm'); ?>" data-toggle="tooltip" data-placement="top" title="Admit Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-bed"></i>
              </a>-->
              <button type="button" id="btnIssueNonDrugsAdd" name="btnIssueNonDrugsAdd" class="btn btn-success btn-md  btn-ladda" data-toggle="tooltip"><i class="fa fa-user-plus"></i></button>
            </div>
          </div>

        </div>
      </div>
      <div class="card-body table-responsive">
        <table id="IssueSupplyTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
          <thead class="thead-dark">
            <tr>
              <th></th>
              <th>DATE GIVEN</th>
              <th>TIME GIVEN</th>
              <th>QUANTITY ISSUED</th>
              <th>UNIT OF MEASURE</th>
              <th>GIVEN BY</th>
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


  <div class="col-md-6">
    <div class="card card-accent-success">
      <div class="card-header">
        <div class="row">

          <div class="col-md-6">
            <div class="h3 text text-success"> 
              <i class="fa fa-th-list"></i>
              &nbsp  <?php echo $header3; ?>
            </div>
          </div>

          <div class="col-md-6">
            <div class="btn-group pull-right" role="group" aria-label="">
<!--              <a href="<?php echo site_url('Patient/PatientRegister'); ?>" data-toggle="tooltip" title="Register Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i>
              </a>
              <a href="<?php echo site_url('Admission/AdmissionForm'); ?>" data-toggle="tooltip" data-placement="top" title="Admit Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-bed"></i>
              </a>-->
              <button type="button" id="btnReturnNonDrugsAdd" name="btnReturnNonDrugsAdd" class="btn btn-success btn-md  btn-ladda" data-toggle="tooltip"><i class="fa fa-user-plus"></i></button>
            </div>
          </div>

        </div>
      </div>
      <div class="card-body table-responsive">
        <table id="ReturnSupplyTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
          <thead class="thead-dark">
            <tr>
              <th></th>
              <th>DATE OF RETURN</th>
              <th>TIME OF RETURN</th>
              <th>QUANTITY RETURN</th>
              <th>UNIT OF MEASURE</th>
              <th>RECEIVED BY</th>
              <th>REMARKS</th>
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



<form id="frmIssueNonDrugsAdd" method="post">
  <div class="modal" id="IssueNonDrugsAdd" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
      <div class="modal-content card-accent-success">
        <div class="modal-body border-success">
          <h1 class="modal-title text-success"><i class="fa fa-search"></i> Issue Non-Drugs</h1>
          <div class="row">
            <div class="col-md-3 col-form-label text-default mb-1">
              Date Given:
            </div>
            <div class="col-md-9 mb-2">
              <input type="date" class="form-control form-control-lg" placeholder="Hospital Number" name ="shpercode" id="shpercode" autocomplete="off" >
            </div>
            <div class="col-md-3 col-form-label text-default mb-1">
              Time Given:
            </div>
            <div class="col-md-9 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="LastName" name ="slname" id="slname" autocomplete="off" >
            </div>
            <div class="col-md-3 col-form-label text-default mb-1">
              Quantity Issued:
            </div>
            <div class="col-md-9 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="FirstName" name ="sfname" id="sfname" autocomplete="off" >
            </div>
            <div class="col-md-3 col-form-label text-default mb-1">
              Unit of Measure:
            </div>
            <div class="col-md-9 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="MiddleName" name ="smname" id="smname" autocomplete="off" >
            </div>
            <div class="col-md-3 col-form-label text-default mb-1">
              Given By:
            </div>
            <div class="col-md-9 mb-2">
              <input type="date" class="form-control form-control-lg" placeholder="BirthDate" name ="sbod" id="sbod" autocomplete="off" >
            </div>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="submit "name="sSubmit" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="slide-right"><i class="fa fa-plus"></i> &nbsp ADD</button>
        </div>
      </div>
    </div>
  </div>
</form>


<form id="frmReturnNonDrugsAdd" method="post">
  <div class="modal" id="ReturnNonDrugsAdd" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
      <div class="modal-content card-accent-success">
        <div class="modal-body border-success">
          <h1 class="modal-title text-success"><i class="fa fa-search"></i> Return Non-Drugs</h1>
          <div class="row">
            <div class="col-md-3 col-form-label text-default mb-1">
              Date Given:
            </div>
            <div class="col-md-9 mb-2">
              <input type="date" class="form-control form-control-lg" placeholder="Hospital Number" name ="shpercode" id="shpercode" autocomplete="off" >
            </div>
            <div class="col-md-3 col-form-label text-default mb-1">
              Time Given:
            </div>
            <div class="col-md-9 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="LastName" name ="slname" id="slname" autocomplete="off" >
            </div>
            <div class="col-md-3 col-form-label text-default mb-1">
              Quantity Issued:
            </div>
            <div class="col-md-9 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="FirstName" name ="sfname" id="sfname" autocomplete="off" >
            </div>
            <div class="col-md-3 col-form-label text-default mb-1">
              Unit of Measure:
            </div>
            <div class="col-md-9 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="MiddleName" name ="smname" id="smname" autocomplete="off" >
            </div>
            <div class="col-md-3 col-form-label text-default mb-1">
              Given By:
            </div>
            <div class="col-md-9 mb-2">
              <input type="date" class="form-control form-control-lg" placeholder="BirthDate" name ="sbod" id="sbod" autocomplete="off" >
            </div>
          </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="submit "name="sSubmit" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="slide-right"><i class="fa fa-plus"></i> &nbsp ADD</button>
        </div>
      </div>
    </div>
  </div>
</form>

<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url(); ?>">

<script type="text/javascript">
 $(function () {
    centralSupply();
    var table = $('#CentralSupplyTable').DataTable();

    $('#CentralSupplyTable').on('click', 'tr', function () {
      var data = table.row(this).data();
      console.log(data[0]);
      centralSupplyIssue(data[0]);
      centralSupplyReturn(data[0]);
    });
  });

  function centralSupply() {
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

  function centralSupplyIssue(docointkey) {
    var encode = encodeURIComponent(encodeURIComponent(docointkey));
    var data = new Object();
    data.id = "IssueSupplyTable";
    data.link = "<?php echo site_url('CentralSupply/csrSuppliesIssueList/'); ?>" + encode;
    data.type = "POST";
    data.coldef = [
      {
        targets: 0,
        visible: false,
        orderable: false
      }
    ];
    loadTable(data);
  }

  function centralSupplyReturn(docointkey) {
    var encode = encodeURIComponent(encodeURIComponent(docointkey));
    var data = new Object();
    data.id = "ReturnSupplyTable";
    data.link = "<?php echo site_url('CentralSupply/csrSuppliesReturnList/'); ?>" + encode;
    data.type = "POST";
    data.coldef = [
      {
        targets: 0,
        visible: false,
        orderable: false
      }
    ];
    loadTable(data);
  }

  $('#btnIssueNonDrugsAdd').click(function () {
    $('#IssueNonDrugsAdd').modal('show');
  });

  $('#btnReturnNonDrugsAdd').click(function () {
    $('#ReturnNonDrugsAdd').modal('show');
  });

</script>

