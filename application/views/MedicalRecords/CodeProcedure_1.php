<style>

table#ProcedureTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#TblPatSearchList.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#TblPatEncList.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#tableSearchIPCM.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
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
      <div class="card-header">
        <div class="row">
          <div class="col-md-6">
            <div class="h3 text text-success"> 
              <i class="fa fa-th-list"></i>
              &nbsp <?php echo $header; ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="btn-group pull-right" role="group" aria-label="">
              <button type="button" data-toggle="tooltip" title="Patient Search" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" id="btnSearchPatient"><i class="fa fa-search"></i></button>
              <button type="button" data-toggle="tooltip" title="Cope Procedure" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" id="btnAddProcedure"><i class="fa fa-user-plus"></i></button>
            </div>
          </div>		
        </div>	
      </div>	
      <div class="card-body">
        <div class="table-responsive">
          <table id="ProcedureTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
            <thead class="thead-dark">
              <tr>
                <th>ENCOUNTER CODE</th>
                <th>docointkey</th>
                <th>PATIENT NAME</th>
                <th>ADMISSION / CONSULTATION</th>
                <th>PROCEDURE</th>
                <th>DATE/TIME OF OPERATION</th>
                <th>ICPM CODE</th>
                <th style="width: 90px;"></th>
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
                <th style="width: 90px;"></th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
</div>


<!-- modal form patient search -->

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
          <button type="submit" name="sSubmit" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="slide-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>

        </div>
      </div>
    </div>
  </div>
</form>
<!-- modal form patient search -->

<!-- modal form patient lists -->
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
<!-- modal form patient lists -->

<!-- modal form patient encounter -->
<form id="frmPatEncList" method="post">
  <div class="modal" id="PatEncList" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> Visit Logs</h1>
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
                <th>Encounter Code</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- modal form patient encounter -->

<!-- modal form Add Patient Procedure -->
<form id="frmAddProcedure" method="post">
  <div class="modal" id="modalAddProcedure" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i>&nbsp Procedure/ Operation</h1>
          <input type="hidden" id="hiddenEnccode" name="hiddenEnccode"/>
          <input type="hidden" id="hiddenHpercode" name="hiddenHpercode" />

          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Date of Operation:</b> 
                </div>
                <div class="col-md-6">
                  <input type="date" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="AddProcedureDate" name="AddProcedureDate" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Time of Operation</b> 
                </div>
                <div class="col-md-6">
                  <input type="time" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="AddProcedureTime" name="AddProcedureTime" placeholder ="" step="1">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Surgeon:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="AddProcedureselectSurgeon" id="AddProcedureselectSurgeon">
                    <option value="" hidden selected disabled>Select Surgeon</option>
                    <?php
                    if (!empty($getDoctorInfo)) {
                      foreach ($getDoctorInfo as $value) {
                        ?>
                        <option value="<?php echo $value->licno; ?>"><?php echo $value->fullname; ?></option>
                        <?php
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Anesthesiologist:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="AddProcedureselectAnesthesiologist" id="AddProcedureselectAnesthesiologist">
                    <option value="" hidden selected disabled>Select Anesthesiologist</option>
                    <?php
                    if (!empty($getDoctorInfo)) {
                      foreach ($getDoctorInfo as $value) {
                        ?>
                        <option value="<?php echo $value->licno; ?>"><?php echo $value->fullname; ?></option>
                        <?php
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Procedure/Operation:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="AddProcedureselectProcedure" id="AddProcedureselectProcedure">
                    <option value="" hidden selected disabled>Select Procedure/Operation</option>
                    <?php
                    if (!empty($getProcedureInfo2)) {
                      foreach ($getProcedureInfo2 as $value) {
                        ?>
                        <option value="<?php echo $value->prikey; ?>"><?php echo $value->procdesc; ?></option>
                        <?php
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp ICPM Code:</b> 
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="AddProcedureselectICPM" name="AddProcedureselectICPM" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Category of Operation:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="AddProcedureselectOperationCat" id="AddProcedureselectOperationCat">
                    <option value="" hidden selected disabled>Select Procedure/Operation</option>
                    <option value="MAJOR">MAJOR OPERATION</option>
                    <option value="ADMIN">MINOR OPERATION</option>
                  </select>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Type of Operation:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="AddProcedureselectOperationTyp" id="AddProcedureselectOperationTyp">
                    <option value="" hidden selected disabled>Select Procedure/Operation</option>
                    <option value="PRINC">PRINCIPAL OPERATION</option>
                    <option value="OTHER">OTHER OPERATION</option>
                  </select> 
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Type of Anesthesia:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="AddProcedureselectAnesTyp" id="AddProcedureselectAnesTyp">
                    <option value="" hidden selected disabled>Select Procedure/Operation</option>
                    <option value="GENAN">GENERAL ANESTHESIA</option>
                    <option value="LOCAL">LOCAL ANESTHESIA</option>
                  </select> 
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Result of Operation:</b> 
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="AddProcedureselectResult" name="AddProcedureselectResult" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Remarks:</b> 
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="AddProcedureselectRemarks" name="AddProcedureselectRemarks" placeholder ="">
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnSaveProcedure" name="btnSaveProcedure"><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- modal form Add Patient Procedure -->

<!-- modal form Edit Patient Procedure -->
<form id="frmEditProcedure" method="post">
  <div class="modal" id="modalEditProcedure" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title text-success"><i class="fa fa-th-list"></i>&nbsp Procedure/ Operation</h1>
          <input type="hidden" id="hiddenEditEnccode" name="hiddenEditEnccode"/>
          <input type="hidden" id="hiddenEditHpercode" name="hiddenEditHpercode" />
          <input type="hidden" id="hiddendocointkey" name="hiddendocointkey" />

          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Patient Name:</b> 
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="editpatname" name="editpatname" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Encounter Details:</b> 
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="editEncDetails" name="editEncDetails" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Date of Operation:</b> 
                </div>
                <div class="col-md-6">
                  <input type="date" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="EditProcedureDate" name="EditProcedureDate" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Time of Operation</b> 
                </div>
                <div class="col-md-6">
                  <input type="time" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="EditProcedureTime" name="EditProcedureTime" placeholder ="" step="1">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Surgeon:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="EditProcedureselectSurgeon" id="EditProcedureselectSurgeon">
                    <option value="" hidden selected disabled>Select Surgeon</option>
                    <?php
                    if (!empty($getDoctorInfo)) {
                      foreach ($getDoctorInfo as $value) {
                        ?>
                        <option value="<?php echo $value->licno; ?>"><?php echo $value->fullname; ?></option>
                        <?php
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Anesthesiologist:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="EditProcedureselectAnesthesiologist" id="EditProcedureselectAnesthesiologist">
                    <option value="" hidden selected disabled>Select Anesthesiologist</option>
                    <?php
                    if (!empty($getDoctorInfo)) {
                      foreach ($getDoctorInfo as $value) {
                        ?>
                        <option value="<?php echo $value->licno; ?>"><?php echo $value->fullname; ?></option>
                        <?php
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Procedure/Operation:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="EditProcedureselectProcedure" id="EditProcedureselectProcedure">
                    <option value="" hidden selected disabled>Select Procedure/Operation</option>
                    <?php
                    if (!empty($getProcedureInfo2)) {
                      foreach ($getProcedureInfo2 as $value) {
                        ?>
                        <option value="<?php echo $value->prikey; ?>"><?php echo $value->procdesc; ?></option>
                        <?php
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp ICPM Code:</b> 
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="EditProcedureselectICPM" name="EditProcedureselectICPM" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Category of Operation:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="EditProcedureselectOperationCat" id="EditProcedureselectOperationCat">
                    <option value="" hidden selected disabled>Select Procedure/Operation</option>
                    <option value="MAJOR">MAJOR OPERATION</option>
                    <option value="ADMIN">MINOR OPERATION</option>
                  </select>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Type of Operation:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="EditProcedureselectOperationTyp" id="EditProcedureselectOperationTyp">
                    <option value="" hidden selected disabled>Select Procedure/Operation</option>
                    <option value="PRINC">PRINCIPAL OPERATION</option>
                    <option value="OTHER">OTHER OPERATION</option>
                  </select> 
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Type of Anesthesia:</b> 
                </div>
                <div class="col-md-6">
                  <select class="form-control form-control-md" name="EditProcedureselectAnesTyp" id="EditProcedureselectAnesTyp">
                    <option value="" hidden selected disabled>Select Procedure/Operation</option>
                    <option value="GENAN">GENERAL ANESTHESIA</option>
                    <option value="LOCAL">LOCAL ANESTHESIA</option>
                  </select> 
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Result of Operation:</b> 
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="EditProcedureselectResult" name="EditProcedureselectResult" placeholder ="">
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6">
                  <b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Remarks:</b> 
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control form-control-mb pull-right text-right" autocomplete="off"  id="EditProcedureselectRemarks" name="EditProcedureselectRemarks" placeholder ="">
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-success btn-square btn-ladda btn-lg"  id="btnEditSaveProcedure" name="btnEditSaveProcedure"><i class="fa fa-plus"></i></button>
          <button  class="btn btn-danger btn-square  btn-ladda btn-lg"  data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- modal form Edit Patient Procedure -->

<!-- modal form Add ICPM -->
<form id="frmSearchIPCM" method="post">
  <div class="modal" id="modalSearchIPCM" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <h1 class="modal-title text-success"><i class="fa fa-th-list"></i>ICPM</h1>
            </div>
            <div class="col-md-6">
              <select class="form-control form-control-md" name="AddProcedureselectICPMtype" id="AddProcedureselectICPMtype">
                <option value="" hidden selected disabled>Select ICPM Type</option>
                <?php
                if (!empty($getRICPM)) {
                  foreach ($getRICPM as $value) {
                    ?>
                    <option value="<?php echo $value->procdesc; ?>"><?php echo $value->procdesc; ?></option>
                    <?php
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table id="tableSearchIPCM" class="table table-lg table-striped table-borderless table-condensed table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th>CODE</th>
                    <th>DESCRIPTION</th>
                  </tr>
                </thead>
                <tfoot class="thead-dark">
                  <tr>
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


<!-- Edit ICPM -->

<!-- modal form Add ICPM -->
<form id="frmSearchIPCM" method="post">
  <div class="modal" id="modalSearchIPCM" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <h1 class="modal-title text-success"><i class="fa fa-th-list"></i>ICPM</h1>
            </div>
            <div class="col-md-6">
              <select class="form-control form-control-md" name="EditProcedureselectICPMtype" id="EditProcedureselectICPMtype">
                <option value="" hidden selected disabled>Select ICPM Type</option>
                <?php
                if (!empty($getRICPM)) {
                  foreach ($getRICPM as $value) {
                    ?>
                    <option value="<?php echo $value->procdesc; ?>"><?php echo $value->procdesc; ?></option>
                    <?php
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table id="tableSearchIPCM" class="table table-lg table-striped table-borderless table-condensed table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th>CODE</th>
                    <th>DESCRIPTION</th>
                  </tr>
                </thead>
                <tfoot class="thead-dark">
                  <tr>
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
<!-- Edit ICPM -->


<script type="text/javascript">
  var globalEnccode = '';
  var globalHpercode = '';
  $(function () {
    uppercase();
    $('#PatSearch').modal({'backdrop': 'static'});
    $('#PatSearch').modal('show');
    $('#slname').focus();
  });


  $('#frmPatSearch').submit('click', function () {
    $.ajax({
      url: "<?php echo site_url('Patient/PatientAdvanceSearch'); ?>",
      type: "POST",
      data: new FormData(this),
      dataType: "JSON",
      processData: false,
      contentType: false,
      cache: false,
      async: true,
      success: function (data, response) {
        $("#PatSearchList").modal({'backdrop': 'static'});
        $("#PatSearchList").modal('show');
        $("#PatSearch").modal('hide');
        PatSearchList(data);
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
      varhpercode = data['hpercode'];
      PatEncounters(data['hpercode']);
    });
  }


  function PatEncounters(hpercode) {

    $('#PatEncList').modal({'backdrop': 'static'});
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
        url: '<?php echo base_url() . "Patientrecord/searchPatEncounter/"; ?>' + hpercode,
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
      "columnDefs": [{
        targets: [0, 1, 2, 3, 4, 10],
        visible: false,
        orderable: false
      }]
    });
    $('#TblPatEncList').off('click', 'tr');
    $('#TblPatEncList').on('click', 'tr', function () {
      var data = table2.row(this).data();
      globalEnccode = data['enccode'];
      globalHpercode = data['hpatcode'];
      $('#patHospitalNo').text(data['hpatcode']);
      $('#patEncDetails').text(data['toecode'] + " - " + data['encdate']).prop('readonly', true);
      $('#patFullName').text(data['patlast'] + ", " + data['patfirst'] + " " + data['patmiddle']);
      $('#patRoom').text(data['room']);
      PatProcedure(data['hpatcode']);
      $('#PatEncList').modal('hide');
    });
  }

  function PatProcedure(hpercode) {
    var table = $('#ProcedureTable').DataTable({
      oLanguage: {sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'},
      aLengthMenu: [[15, 20, 50, 75, -1], [15, 20, 50, 75, "All"]],
      ipageLength: 15,
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
        "url": "<?php echo site_url("Patientrecord/CodeProceduredt/"); ?>" + hpercode,
        "type": "POST"
      },
      columnDefs: [{
        "targets": [0, 1, 2],
        "visible": false,
        "orderable": false
      }]
    });
  }

  $('#btnSearchPatient').on('click', function () {
    $('#PatSearch').modal({'backdrop': 'static'});
    $('#PatSearch').modal('show');
  });

  $('#btnAddProcedure').on('click', function () {
    $('#modalAddProcedure').modal({'backdrop': 'static'});
    $('#modalAddProcedure').modal('show');
    $('#hiddenEnccode').val(globalEnccode);
    $('#hiddenHpercode').val(globalHpercode);
    var now = new Date();

    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    var today = now.getFullYear() + "-" + (month) + "-" + (day);

    var day = now.getDate(),
    month = now.getMonth() + 1,
    year = now.getFullYear(),
    hour = now.getHours(),
    min = now.getMinutes();

    month = (month < 10 ? "0" : "") + month;
    day = (day < 10 ? "0" : "") + day;
    hour = (hour < 10 ? "0" : "") + hour;
    min = (min < 10 ? "0" : "") + min;

    var time = year + "-" + month + "-" + day,
    displayTime = hour + ":" + min;

    $('#AddProcedureDate').val(today);
    $('#AddProcedureTime').val(displayTime);

  });

  $('#AddProcedureselectICPM, #EditProcedureselectICPM').on('click', function () {
    $('#modalSearchIPCM').modal('show');

  });

  $('#AddProcedureselectICPMtype, #AddProcedureselectICPMtype').on('change', function () {
    getICPMdt($(this).val());
  });


  function getICPMdt(icpmtype) {
    if ($.fn.DataTable.isDataTable('#tableSearchIPCM')) {
      $('#tableSearchIPCM').DataTable().destroy();
    }


    var table = $("#tableSearchIPCM").DataTable({
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
        "url": "<?php echo site_url('Patientrecord/getRICPMdesc'); ?>",
        "type": "POST",
        "data": {'icpmtype': icpmtype}
      }
    });
    $('#tableSearchIPCM').off('dblclick', 'tr');
    $('#tableSearchIPCM').on('dblclick', 'tr', function () {
      var data = table.row(this).data();
      $('#AddProcedureselectICPM,#EditProcedureselectICPM').val(data[0]);
      $('#modalSearchIPCM').modal('hide');
    });
  }

  $('#btnSaveProcedure').on('click', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '<?php echo site_url("Patientrecord/saveCodeProcedure"); ?>',
      data: $("#frmAddProcedure").serialize(),
      success: function (data) {
        if (data == 1) {
          PatProcedure(globalHpercode);
          toastr.success('Successfully Saved!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Success');
          $('#modalAddProcedure').modal('hide');
        } else {
          toastr.warning('Successfully Failed!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Warning');

        }
      }

    });
  });


  $('#ProcedureTable').on("click", ".ModalEditProc", function() {
    var ModalEditProcenccode = $(this).attr('data-enccode');
    var ModalEditProcdocointkey = $(this).attr('data-docointkey');
    $('#modalEditProcedure').modal({'backdrop': 'static'});
    $('#modalEditProcedure').modal('show');
    modalEditProcedure(ModalEditProcenccode,ModalEditProcdocointkey);
  });

  function modalEditProcedure(ModalEditProcenccode, ModalEditProcdocointkey) {
    var ModalEditProcenccode = encodeURIComponent(encodeURIComponent(ModalEditProcenccode));
    var ModalEditProcdocointkey = encodeURIComponent(encodeURIComponent(ModalEditProcdocointkey));
    console.log("<?php echo base_url() .'Patientrecord/modalEditProcedure/'; ?>" + ModalEditProcenccode + "/" + ModalEditProcdocointkey);

    $.ajax({
        type: "POST",
        url: "<?php echo base_url() .'Patientrecord/modalEditProcedure/'; ?>" + ModalEditProcenccode + "/" + ModalEditProcdocointkey,
        data: "JSON",
        async:false,
        success: function(data)
        { 
          var obj = $.parseJSON(data);
          var docointkey = obj['docointkey'];
          var prikey = obj['prikey'];
          var hpercode = obj['hpercode'];
          var hpldterec = obj['hpldterec'];
          var hpltmerec = obj['hpltmerec'];
          var surglicno = obj['surglicno'];
          var aneslicno = obj['aneslicno'];
          var comme = obj['comme'];
          var hplrem = obj['hplrem'];
          var hpresopt = obj['hpresopt'];
          var protype = obj['protype'];
          var acctno = obj['acctno'];
          var enccode = obj['enccode'];
          var anestype = obj['anestype'];
          var toecode = obj['toecode'];
          var encdate = obj['encdate'];
          var enctime = obj['enctime'];
          var patlast = obj['patlast'];
          var patfirst = obj['patfirst'];
          var patmiddle = obj['patmiddle'];
          console.log(enccode);
          var now = new Date();
          var day = ("0" + now.getDate()).slice(-2);
          var month = ("0" + (now.getMonth() + 1)).slice(-2);
          var today = now.getFullYear() + "-" + (month) + "-" + (day);
          var day = now.getDate(),
          month = now.getMonth() + 1,
          year = now.getFullYear(),
          hour = now.getHours(),
          min = now.getMinutes();
          month = (month < 10 ? "0" : "") + month;
          day = (day < 10 ? "0" : "") + day;
          hour = (hour < 10 ? "0" : "") + hour;
          min = (min < 10 ? "0" : "") + min;
          var time = year + "-" + month + "-" + day,
          displayTime = hour + ":" + min;

          $('#editEncDetails').val(toecode + ": " + encdate + " " + enctime).prop('readonly', true);
          $('#editpatname').val(patlast + ", " + patfirst + " " + patmiddle).prop('readonly', true);
          $("#hiddendocointkey").val(docointkey);
          $("#EditProcedureselectProcedure").val(prikey);
          $("#hiddenEditHpercode").val(hpercode);
          $("#EditProcedureDate").val(today);
          $("#EditProcedureTime").val(displayTime);
          $("#EditProcedureselectSurgeon").val(surglicno);
          $("#EditProcedureselectAnesthesiologist").val(aneslicno);
          $("#EditProcedureselectOperationCat").val(comme);
          $("#EditProcedureselectRemarks").val(hplrem);
          $("#EditProcedureselectResult").val(hpresopt);
          $("#EditProcedureselectOperationTyp").val(protype);
          $("#EditProcedureselectICPM").val(acctno);
          $("#hiddenEditEnccode").val(enccode);
          $("#EditProcedureselectAnesTyp").val(anestype);
        },
        error: function(response)
        {
          alert("Error: Fetching Patient Information!");
        }
      });

 }

$('#btnEditSaveProcedure').on('click', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '<?php echo site_url("Patientrecord/updateCodeProcedure"); ?>',
      data: $("#frmEditProcedure").serialize(),
      success: function (data) {
        if (data == 1) {
          PatProcedure(globalHpercode);
          toastr.success('Successfully Saved!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Success');
          $('#modalEditProcedure').modal('hide');
        } else {
          toastr.warning('Failed!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Warning');

        }
      }

    });
  });




</script>