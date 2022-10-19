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
