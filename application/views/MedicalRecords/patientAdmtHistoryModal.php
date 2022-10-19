<style>

table#TblPatEncList.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<form id="frmPatEncList" method="post">
  <div class="modal" id="AdmtSearchList" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Admission History</h1>
          <table id="TblPatEncList" class="table table-hover table-sm table table-striped table-borderless table-condensed">
            <thead class="thead-dark">
              <tr>
                <th>Health Record:</th>
                <th>ECODE:</th>
                <th>Date/Time</th>
                <th>Type of Encounter</th>
                <th>Discharge Date</th>
                <th>Final Diagnosis</th>
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