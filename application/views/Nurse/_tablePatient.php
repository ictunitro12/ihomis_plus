<style>
table#patientList.dataTable tbody tr:hover {
    background-color: #80DB88;
}
</style>
<div class="text-success h4"><i class="fa fa-bed"></i>&nbsp Patient list</div>
<table id="patientList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
    <thead>
        <tr>
            <th class="all">Date Entered</th>
            <th >Health Record </th>
            <th class="all">Patient Name</th>
            <th class="all">Birthdate</th>
            <th class="all">Sex</th>
            <th class="all">Type Of Service</th>
            <th>Admission Diagnosis</th>
            <th>Room Assignment</th>
            <th class="all" width="20px"></th>
        </tr>
    </thead>
</table>
<script src="<?php echo base_url()?>assets/scripts/Admission/admission_validation.js"></script>