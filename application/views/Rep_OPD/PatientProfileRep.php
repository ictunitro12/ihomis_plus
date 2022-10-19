<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<form id="frmLCauseRep" name="frmLCauseRep" method="post">
  <div class="card card-accent-success">
    <div class="card-header">
      <div class="row">
        <div class="col-md-6 col-md-auto">
          <div class="h3 text text-success">
            <h4 class="modal-title text-success"><i class=" fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp; Form</h4>
          </div>
        </div>
        <div class="col-md-6 col-md-auto">
          <div class="btn-group pull-right" title="Search Patient" role="group" aria-label="">
            <button type="button" id="search" class="btn btn-success btn-ladda  float-right"> <i class="fa fa-search"></i> </button>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body" id="LCauseRep">
      <embed id="CSS_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></embed>
    </div>
    <div class="card-footer"></div>
  </div>
</form>

<form id="frmPatSearch" method="post">
  <div class="modal" id="PatSearch" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
      <div class="modal-content card-accent-success">
        <div class="modal-body">
          <button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
          <h1 class="modal-title text-success"><i class="fa fa-search fa-2x"></i> Patient Search</h1>
          <br></br>
          <div class="row">
            <div class=" h6 col-md-2 col-form-label text-success  text-default mb-1">
              Record#:
            </div>
            <div class="col-md-10 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="Hospital Number" name="shpercode" id="shpercode" autocomplete="off">
            </div>
            <div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
              Lastname:
            </div>
            <div class=" col-md-10 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="LastName" name="slname" id="slname" autocomplete="off">
            </div>
            <div class="h6 col-md-2 col-form-label text-success text-default mb-1">
              Firstname:
            </div>
            <div class="col-md-10 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="FirstName" name="sfname" id="sfname" autocomplete="off">
            </div>
            <div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
              Middlename:
            </div>
            <div class="col-md-10 mb-2">
              <input type="text" class="form-control form-control-lg" placeholder="MiddleName" name="smname" id="smname" autocomplete="off">
            </div>
            <div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
              Birthdate:
            </div>
            <div class="col-md-10 mb-2">
              <input type="date" class="form-control form-control-lg" placeholder="BirthDate" name="sbod" id="sbod" autocomplete="off">
            </div>
            <div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
              Sex:
            </div>
            <div class="col-md-10 mb-2">
              <select name="ssex" id="ssex" class="form-control form-control-lg">
                <option>Select</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
              </select>
            </div>
          </div>
          <button type="submit" name="sSubmit" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-search"></i> &nbsp SEARCH</button>
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
                <th>Patient Name</th>
                <th>Date of Birth</th>
                <th>Sex</th>
              </tr>
            </thead>
          </table>
        <!--   <input type="hidden" name="enccode" id="enccode"/>
          <input type="hidden" name="hpercode" id="hpercode"/> -->
        </div>
        <div class="modal-footer bg-secondary">
          <button class="btn btn-danger btn-square  btn-ladda btn-lg" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>

<form id="frmPatHistoryList" method="post">
  <div class="modal" id="PatadmitList" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Visit Log</h1>
          <table id="opdLog" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
            <thead class="thead-dark">
              <tr>
              <th></th>
                <th>DATE/TIME</th>
                <th>TYPE OF ENCOUNTER</th>
                <th>DISCHARGE DATE</th>
                <th>FINAL DIAGNOSIS</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="modal-footer bg-secondary">
          <button class="btn btn-danger btn-square  btn-ladda btn-lg" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>

<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script type="text/javascript">
  $(document).ready(function() {
    $("#PatSearch").modal();
  });

  function PatVisitList(data) {
    $('#opdLog').off();
    var table = $("#opdLog").DataTable({
      data: data,
      destroy: true,
      className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
      columns: [{
					"data": "enccode"
				},
        {
          "data": "opddate"
        },
        {
          "data": "toecode"
        },
        {
          "data": "disdate"
        },
        {
          "data": "diagdesc"
        }
      ],
      columnDefs: [{
				targets: 0,
				visible: false,
			}],
    });

    $('#opdLog').on('click', 'tr', function() {
      var data = table.row(this).data();
      console.log(data);
      $('#PatadmitList').modal('hide');
     /*  $("#enccode").val(data['enccode']);
      $("#hpercode").val(data['hpercode']); */
       var src = baseURL + "Rep_Outpatient/OPDPatientProfile/" + encodeURIComponent(encodeURIComponent(data['enccode']));
       $("#CSS_pdf").attr("src", src);
      /* window.location.href = baseURL + "Rep_Outpatient/OPDPatientProfile/" + encodeURIComponent(encodeURIComponent(data['enccode'])); */
    });
  }

  function PatSearchList(data) {
    var table = $("#TblPatSearchList").DataTable({
      data: data,
      destroy: true,
      className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
      columns: [{
          "data": "hpercode"
        },
        {
          "data": "patientname"
        },
        {
          "data": "patbdate"
        },
        {
          "data": "patsex"
        }
      ],
    });

    $('#TblPatSearchList').on('click', 'tr', function() {
      var data = table.row(this).data();
      console.log(data);
      /* $("#enccode").val(data['enccode']); */
      $("#hpercode").val(data['hpercode']);                      
      $.ajax({
        type: "POST",
        url: baseURL + "Rep_Outpatient/OPDhis/" + data['hpercode'],
        data: "JSON",
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(data) {
          $("#PatSearchList").modal('hide');
          $('#PatadmitList').modal('show');
          PatVisitList(data['data']);
        },
        error: function(data) {
          toastr.error('Error: Fetching Patient Visits!', 'Error');
        }
      });
    });
  }

  $('#search').click(function () {
		$("#PatSearch").modal('show');
		window.location.reload();
	});

  $('#frmPatSearch').submit('click', function() {
    $.ajax({
      url: baseURL + "Rep_Outpatient/PatientSearchOPD",
      type: "POST",
      data: new FormData(this),
      dataType: "JSON",
      processData: false,
      contentType: false,
      cache: false,
      async: true,
      success: function(data, response) {
        $("#PatSearchList").modal('show');
        $("#PatSearch").modal('hide');
        PatSearchList(data);
      },
      error: function(response) {
        alert("Error:Please try again!");
      }
    });
    return false;
  });
</script>

