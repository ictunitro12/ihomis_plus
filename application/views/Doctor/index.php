<style>
table#admtbl.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#opdtbl.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#ertbl.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#myAppointmentTable.dataTable tbody tr:hover {
    background-color: #80DB88;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card card-accent-success">
            <div class="card-header">
                <?php $this->load->view('Doctor/viewDoctorProfile.php');?>
                <div class="row">
                    <div class="col-md-6 col-md-auto	">
                        <div class="h4 text text-success">
                            <i class="fa fa-user-md"></i>
                            &nbsp<?php echo $header; ?>
                            &nbsp <small><?php echo $subheader; ?></small>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-auto">
                        <div class="pull-right" role="group" aria-label="">
                            <?php //if(env('TELEMEDICINE_APP_URL') && env('TELEMEDICINE_APP_TOKEN')) { ?>
                            <!-- <button type="button" id="getAppointments" class="btn btn-success btn-ladda mr-2" data-style="zoom-in">
								<i class="fa fa-calendar"></i> Get Telemedicine Appointments
							</button> -->
                            <?php //} ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                       <?php $this->load->view('Doctor/_menuDoctor');?>
                    </div>
                    <div class="col-md-10">
                        <div id="container"></div>
                    </div>
                </div>
                <div class="card-footer"></div>
            </div>

        </div>
    </div>
    <?php $this->load->view('PatientRecords/EPRModal.php'); ?>
    <?php $this->load->view('Doctorsorder/_maygohome.php'); ?>

    <!-- start select accreditation modal -->
    <?php $this->load->view('Doctor/_appointmentsTableModal.php'); ?>
    <!-- end select accreditation modal -->

    <?php $this->load->view('Appointment/_doctorSelectionModal.php'); ?>

    <!-- sweetalert2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.min.css">
    <script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>

    <script src="<?php echo base_url() ?>assets/scripts/order/maygohome.js"></script>
    <script src="<?php echo base_url() ?>assets/scripts/appointment/main.js"></script>
    <script>
    var licno = '<?php echo $licno; ?>';
    </script>