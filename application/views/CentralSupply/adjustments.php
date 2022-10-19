<div class="row">
  <div class="col-md-12">
    <div class="card card-accent-success">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6">
            <div class="h3 text text-success"> 
              <i class="fa fa-th-list"></i>
              &nbsp  Adjustments
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
        <table id="AdjustmentsSupplyTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
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
    </div>
  </div>
</div>

<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script type="text/javascript">

  $(function () {
    SupplyListTable();
  });


  function SupplyListTable() {

    var table = $("#AdjustmentsSupplyTable").DataTable({
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
        "url": "<?php echo site_url('CentralSupply/adjustmentsSuppliesdt'); ?>",
        "type": "POST"},
      columnDefs:
              [{
                  targets: 0,
                  visible: false,
                  orderable: false
                }]

    });
  }

</script>