<div class="modal" id="patient_lists_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-success"><i class="fa fa-th-list"></i> Patient List</h2>
                <button type="button" id="closeSearch" class="close text-danger">&times;</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info mb-3" role="alert">
                    <div class="form-row">
                        <div class="col">
                            <p class="mb-1"><strong>Appointment ID:</strong> <span id="appointmentNumber"></span></p>
                            <p class="mb-1"><strong>Name:</strong> <span id="appointmentName"></span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row mb-2">
                            <label class="col-md-3 col-form-label" for="text-input">First Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="first_name" id="first_name" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-md-3 col-form-label" for="text-input">Middle Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="middle_name" id="middle_name" placeholder="Enter Middle Name">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-md-3 col-form-label" for="text-input">Last Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-md-3 col-form-label" for="text-input">Suffix</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="suffix" id="suffix" placeholder="Enter Suffix">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row mb-2">
                            <label class="col-md-3 col-form-label" for="text-input">Sex</label>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="male" value="M">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="female" value="F">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-md-3 col-form-label" for="text-input">Birthdate</label>
                            <div class="col-md-9">
                                <input class="form-control" name="birthdate" id="birthdate" type="date">
                            </div>
                        </div>
                    </div>
                </div>

                <table id="patient_lists_table" class="table table-hover table-sm table table-striped table-borderless table-condensed">
                    <thead class="thead-dark">
                        <tr>
                            <th>Health Record No</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Middlename</th>
                            <th>Suffix</th>
                            <th>Sex</th>
                            <th>Birthdate</th>
                        </tr>
                    </thead>
                </table>
                <div class="btn-group float-right">
                    <a href="<?php echo site_url('Patient/PatientRegister') . "?appointment="; ?>" class="btn btn-outline-success  btn-ladda btn-md register-link" data-style="zoom-in"><i class="fa fa-plus"></i> Register</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .dataTable tbody tr:hover {
        background-color: #80DB88;
        cursor: pointer;
    }
</style>