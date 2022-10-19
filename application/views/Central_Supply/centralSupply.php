<style>

table#centralSupplydt.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="row">
  <div class="col-md-12">
    <div class="card card-accent-success">
      <div class="card-header">
        <div class="row">

          <div class="col-md-6">
            <div class="h3 text text-success"> 
              <i class="fa fa-th-list"></i> Doctors' Order
            </div>
          </div>

        </div>
      </div>
      <div class="card-body table-responsive">
        <div class="row">
          <div class="col-md-12">
            <label class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="radioServe" id="servedOption1" value="1" checked> All
            </label>
            <label class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="radioServe" id="servedOption2"value="2"> Partially Served
            </label>
            <label class="form-check form-check-inline">
              <input type="radio" class="form-check-input" name="radioServe" id="servedOption3" value="3"> Unserved
            </label>
            <label class="form-check form-check-inline">
              <input type="radio"class="form-check-input" name="radioServe" id="servedOption4"value="4"> Fully Served
            </label>
          </div>
          <br/>
          <br/>
          <div class="col-md-12">
            <table id="centralSupplydt" class="table table-sm table-striped table-bordered table-condensed table-hover dataTable"role="grid" width="100%">
              <thead class="thead-dark">
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>PATIENT NAME</th>
                  <th>REQUEST DATE</th>
                  <th>ITEM REQUESTED</th>
                  <th>QUANTITY</th>
                  <th>QUANTITY ISSUED</th>
                  <th>BALANCE</th>
                  <th>STATUS OF ORDER</th>
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
        </div>



      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  $(function () {
    centralSupplydt();
  });

  $('input[type=radio][name=radioServe]').on('change', function () {
    var radioServed = this.value;
    centralSupplydt(radioServed);
  });

  function centralSupplydt(radioServed) {
    $("#centralSupplydt").DataTable({
      oLanguage: {
        sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'
      },
      searching: false,
      orderable: false,
      destroy: true,
      ajax: {
        "url": "<?php echo base_url('Central_Supply/centralSupplydt'); ?>",
        "type": "POST",
        "data": {
          'radioServed': radioServed
        }
      },
      columns: [
        {data: 'docointkey'},
        {data: 'enccode'},
        {data: 'hpercode'},
        {data: 'patName'},
        {data: 'dodate'},
        {data: 'itemDesc'},
        {render: function (data, type, row, meta) {
            return "<span class='text-center'>" + parseInt(row.pchrgqty, 10) + "</span>";
          }
        },
        {render: function (data, type, row, meta) {
            return "<span class='text-center'>" + parseInt(row.qtyissued, 10) + "</span>";
          }
        },
        {render: function (data, type, row, meta) {
            return "<span class='text-center'>" + parseInt(row.qtybal, 10) + "</span>";
          }
        },
        {render: function (data, type, row, meta) {
            if (parseInt(row.pchrgqty, 10) == parseInt(row.qtyissued, 10)) {
              return "FULLY SERVED";
            } else if (parseInt(row.qtyissued, 10) == '0') {
              return "UNSERVED";
            } else if (parseInt(row.pchrgqty, 10) > parseInt(row.qtyissued, 10)) {
              return "PARTIALY SERVED";
            } else {
              return '';
            }
          }
        },
        {render: function (data, type, row, meta) {
            return "<div class='text-center'><button type='button' data-pchrgqty='" + row.pchrgqty + "' data-qtyissued='" + row.qtyissued + "' data-qtybal='" + row.qtybal + "' data-enccode='" + row.enccode + "' data-hpercode='" + row.hpercode + "' class='btn btn-success btnTransaction' title='Issue/Return'><i class='fa fa-search'></i></button></div>";
          }
        }
      ],
      columnDefs: [
        {
          targets: [0, 1, 2],
          visible: false,
          searchable: false

        }
      ]
    });

    $('#centralSupplydt').on("click", ".btnTransaction", function (e) {
      e.preventDefault();
      var pchrgqty = $(this).attr('data-pchrgqty');
      var qtyissued = $(this).attr('data-qtyissued');
      var qtybal = $(this).attr('data-qtybal');

      var enccode = $(this).attr('data-enccode');
      var hpercode = $(this).attr('data-hpercode');

      var encodedEnccode = encodeURIComponent(encodeURIComponent(enccode));
      var encodedHpercode = encodeURIComponent(encodeURIComponent(hpercode));

      if ((parseInt(qtybal, 10) == '0') && (parseInt(pchrgqty, 10) == parseInt(qtyissued, 10))) {
        toastr.warning('Order has been Served already', 'Warning');
      } else {
        window.location.href = "<?php echo base_url('Central_Supply/centralSupplyTransaction/'); ?>" + encodedHpercode + "/" + encodedEnccode;
      }


    });


  }

</script>
