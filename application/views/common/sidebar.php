<body class="c-app header-fixed " >
 
<div class=" c-sidebar c-sidebar-dark  c-sidebar-fixed c-sidebar-lg-show"   role="navigation" id="sidebar">
      <div class="c-sidebar-brand  d-xs-down-none">
        <div class="c-sidebar-brand-full" width="50" height="40" alt="">
		  <div class="text text-success">
				<img src = "<?php echo base_url();?>/assets/img/DOHbrand.png"  class="img-fluid rounded mx-auto d-block" width="40px"; height="40px";></img> 
				<small class="row justify-content">UNIVERSAL HEALTH CARE INFORMATION SYSTEM</small>
		 </div>	
        </div>
        <div class="c-sidebar-brand-minimized" width="46" height="40" alt="">
         DOH
        </div>
      </div> 
      <ul class="c-sidebar-nav ">
	
	  <li class="c-sidebar-nav-title"><small class="row justify-content"><?php echo FacilityInfo()->hhosname; ?></small></li>
	  	
        <li class="c-sidebar-nav-item">
			<a class="c-sidebar-nav-link"  href="<?php echo site_url('Dashboards');?>">
				<svg class="c-sidebar-nav-icon">
				  <use xlink:href="<?php echo base_url();?>/assets/vendors/coreui/icons/svg/free.svg#cil-speedometer"></use>
				</svg> Dashboards
			</a>
		</li>
        <li class="c-sidebar-nav-title">
		<i class="fa fa-th-list"></i>&nbsp Transactions</li>
        <li class="c-sidebar-nav-item">
			<a class="c-sidebar-nav-link" href="<?php echo site_url('Admission');?>">
			<svg class="c-sidebar-nav-icon">
			<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-bed"></use>
			</svg>Admission</a>
		</li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Outpatient');?>">
			<svg class="c-sidebar-nav-icon">
			<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-medical-cross"></use>
			</svg>Outpatient</a>
		</li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Emergency');?>">
			<svg class="c-sidebar-nav-icon">
			<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-bus-alt"></use>
			</svg>Emergency</a>
		</li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Billing');?>">
			<svg class="c-sidebar-nav-icon">
			<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-calculator"></use>
			</svg>Billing</a>
		</li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Cashier');?>">
			<svg class="c-sidebar-nav-icon">
			<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-money"></use>
			</svg>Cashier</a>
		</li>
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle"  id ="1"href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-door"></use>
            </svg>Service</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Doctor');?>">Doctor</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Nurse');?>">Nursing</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('SocialService');?>">M.S.S</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Opera');?>">Operation</a></li>
          </ul>
        </li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle"  id ="1"href="#">
          <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-folder"></use>
          </svg>PIDSR</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Dengue');?>">Dengue</a></li>
          </ul>
		  <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Lepto');?>">Leptospirosis</a></li>
          </ul><ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Measles');?>">Measles</a></li>
          </ul>
        </li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-folder"></use>
            </svg>Medical Records</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Patient');?>">Registered  Patient</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Patientrecord');?>">Records</a></li>
	     <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Patientrecord/codeDiagnosisRecords');?>">Code Diagnosis</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Patientrecord/CodeProcedure_1');?>">Code Procedure</a></li>
          </ul>
        </li>
	   <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-folder"></use>
            </svg>Cost Centers</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Pharmacy');?>">Pharmacy</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Central_Supply');?>">Central Supply</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Laboratory');?>">Laboratory</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Radiology');?>">Radiology</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Dietary');?>">Dietary</a></li>
          </ul>
        </li>

      <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-folder"></use>
            </svg>PIDSR</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('PIDSR_SARI');?>">SARI</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('PIDSR_ILI');?>">ILI</a></li>
          </ul>
        </li>
		
		 <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-folder"></use>
            </svg>Registries</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('FWRI');?>">FWRI</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Oneiss');?>">Oneiss</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Blindness');?>">Blindness</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Chronic');?>">COPD</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Cad');?>">CAD</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Cancer');?>">Cancer</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Diabetes');?>">Diabetes</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Stroke');?>">Stroke</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('VAWC');?>">VAWC</a></li>
          </ul>
        </li>
	
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-folder"></use>
            </svg>PhilHealth</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Philhealth');?>">PHIC</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Eclaims');?>">Eclaims Submission</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('EclaimsReceipt');?>">Eclaims Receipt</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('EclaimsTransmittal');?>">Eclaims Transmittal List</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('EclaimsVoucher');?>">Eclaims Voucher List</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('EclaimsReturn');?>">Eclaims Returned List</a></li>
          </ul>
        </li>
	
		
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title"> <i class="fa fa-file-o"></i>&nbsp Reports</li>
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
          
		<svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
        </svg>Pharmacy</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Pharmacy/SumNonDrug_View');?>">Summary of Issued Non-Drugs</a></li>
		</ul>
		</li>

    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Admission</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/PatientRecordReps');?>">Patient Records</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/admittedpatientsReport');?>">Admitted Patients Reports</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_AdmAggregate');?>">Admission Aggregates Reports</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/bedOccReps');?>">Bed Occupancy</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/DiscPatientReps');?>">Discharged Patients Report</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/HospDailyCensRep');?>">Hospital Daily Census Report</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/ConsolCensusReps');?>">Consolidated Census Report</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/RmStatusReps');?>">Room Status Report</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/VacantRoomRep');?>">Vacant Rooms</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"  href="<?php echo site_url('Rep_Admission/ClincCoverSht');?>">Clinical Cover Sheet</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/RepsPatientsAdmission');?>">Report of Patient Admission</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/blacklistReps');?>">Blaclisted</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/admittedPatient_Sec');?>">Admitted Patient-Security</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/DiscSummary');?>">Discharge Summary</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Admission/AdmissionLogBookRep');?>">Admission Logbook</a></li>
          </ul>
        </li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
				<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>ER</a>
            <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_ER/ERLogbook_View');?>">Emergency Room Logbook</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_ER/ERLeadCause_View');?>"> Top 20 Leading Causes<br>of ER Consultations</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_ER/NonERLeadCause_View');?>"> Top 20 Leading Causes<br>of Non-ER Consultations</a></li>
			</ul>
		</li>
		
			
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Laboratory</a>
		<ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Laboratory/LaboratoryReport_View');?>"> Logbook</a></li>
		</ul>
		</li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Radiology</a>
		<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Radiology/RadiologyReport_View');?>"> Diagnostic Logbook</a></li>
		</ul>
		</li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Outpatient</a>

          <ul class="c-sidebar-nav-dropdown-items">
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
				<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>ER</a>
            <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_ER/ERLogbook_View');?>">Emergency Room Logbook</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_ER/ERLeadCause_View');?>"> Top 20 Leading Causes<br>of ER Consultations</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_ER/NonERLeadCause_View');?>"> Top 20 Leading Causes<br>of Non-ER Consultations</a></li>
			</ul>
		</li>
		
			
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Laboratory</a>
		<ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Laboratory/LaboratoryReport_View');?>"> Logbook</a></li>
		</ul>
		</li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Radiology</a>
		<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Radiology/RadiologyReport_View');?>"> Diagnostic Logbook</a></li>
		</ul>
		</li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Outpatient</a>

          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Outpatient/Logbook_View');?>">Logbook</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Outpatient/ConsultationSort_View');?>">Consultations</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Outpatient/Consultation_View');?>">Consultations with Diagnosis</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Outpatient/PatientProfile_View');?>">Patient Profile</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Outpatient/MonthlyReport_View');?>">Monthly Report</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Outpatient/LeadCause_View');?>">Top 20 Leading Causes<br>of OPD Consultations</a></li>
            </ul>
		</li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>MSS</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MSS/MssGenRegistryReport_View');?>">General Registry</a></li>
          </ul>
		</li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Medical Records</a>
      <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecord/Epidemiology_header');?>">Epidemiology Report</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecord/CertOfConfinement_header');?>">Certificate of Confinement</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecord/DischargeSummaryReport');?>">Discharge Summary</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecord/MedicalCertificateDisc_header');?>">Medical Certificate(Discgarged)</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecord/MedicalCertificateCurrentlyAdmitted');?>">Medical Certificate(Current Admitted)</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecord/MedicalCertificateER_header');?>">Medical Certificate-ER</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecord/Medicol_Legal_Certificate_Discharged');?>">Medicol Legal Certificate(Discharged)</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecord/Medicol_Legal_Certificate_Currently_Admitted');?>">Medicol Legal Certificate(Current Admitted)</a></li>
      </ul>
      <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecords/MorbidityReport_View');?>"> 20 Leading Causes<br>Discharges(Morbidity)</a></li>
			</ul>
			
			<ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecords/MortalityReport_View');?>"> 20 Leading Causes<br>Discharges(Mortality)</a></li>
			</ul>
			
			<ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecords/MorbidityMedicine_View');?>"> 20 Leading Causes<br>Discharges(Morbidity)-Medicine</a></li>
			</ul>
			
			<ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecords/MorbiditySurgery_View');?>"> 20 Leading Causes<br>Discharges(Morbidity)-Surgery</a></li>
			</ul>
			
			<ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecords/MorbidityObGyne_View');?>"> 20 Leading Causes<br>Discharges(Morbidity)-OB-Gyne</a></li>
			</ul>
			
			<ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_MedicalRecords/MorbidityPedia_View');?>"> 20 Leading Causes<br>Discharges(Morbidity)-Pedia</a></li>
			</ul>
		</li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
		<svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
        </svg>Statistical</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Statistical/StatRep_View');?>">HFSRB</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Hfdb/HFDB_StatRep_View');?>">HFDB</a></li>
		</ul>
		</li>
		
		  <li class="c-sidebar-nav-title"> <i class="fa fa-file-o"></i>&nbsp Reference Tables</li>
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
		<svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
        </svg>Statistical</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Statistical/StatRep_View');?>">HFSRB</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Rep_Hfdb/HFDB_StatRep_View');?>">HFDB</a></li>
		</ul>
		</li>
		
		  <li class="c-sidebar-nav-title"> <i class="fa fa-file-o"></i>&nbsp Reference Tables</li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Affliates</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Bank');?>">Bank</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Company');?>">Company</a></li>
          </ul>
        </li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Country');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Country</a>
    </li>
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Payor');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Payor</a>
    </li>
     <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Department');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Department</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Diet');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Diet</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_FHUD');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>FHUD</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_HMO');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>HMO</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_ICPC');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>ICPC</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_MorbidityMortality');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Morbidity and Mortality</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_SocialService');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Social Service</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Religion');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Religion</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_SourceofReferral');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Source of Referral</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_ModeofAdmission');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Mode of Admission</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Occupation');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Occupation</a>
    </li>

     <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_UnitsofMeasure');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Unit of Measure</a>
    </li>
	
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Demographics');?>">
			<svg class="c-sidebar-nav-icon">
			<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
			</svg>Demographics</a>
		</li>
   
     <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_BodySite');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Specimen Body Site</a>
    </li>
     <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_PHIC');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>PHIC</a>
    </li>

    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Case Rates</a>
      <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_AllCaseRate');?>">All Case Rates</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_SecondCaseRate');?>">Second Case Rates</a></li>
      </ul>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_DIET');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Diet</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_FHUD');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>FHUD</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_HMO');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>HMO</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_ICPC');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>ICPC</a>
    </li>

    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_MorbidityMortality');?>">
      <svg class="c-sidebar-nav-icon">
      <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
      </svg>Morbidity and Mortality</a>
    </li>

		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Items</a>
          <ul class="c-sidebar-nav-dropdown-items">
		  
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Form');?>">Form</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Generic');?>">Generic</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Route');?>">Route</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Strength');?>">Strength</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Salt');?>">Salt</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Packaging');?>">Packaging</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Miscellaneous');?>">Miscellanous</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_EDPMS_DM');?>">EDPMS Drugs and Medicines</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_PNDFClass');?>">PNDF<small>(Class)</small></a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_PNDFGeneric');?>">PNDF<small>(Generic)</small></a></li>
          </ul>
        </li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Supplies</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" disabled href="<?php echo site_url('Ref_NonDrugs');?>">Non-Drugs</a></li>
			<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('DrugsandMedicines');?>">Drugs & Medicine</a></li>
          </ul>
        </li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Others</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Activity');?>">Activity</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Service');?>">Service</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Specimen');?>">Specimen</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Supplier');?>">Supplier</a></li>
          </ul>
        </li>
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Payment</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Charge');?>">Charges</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Discount');?>">Discount</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Chart');?>">Chart of Acccount</a></li>
          </ul>
        </li>
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Provider</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Personnel');?>">Personnel/Employees</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_TypeofProfService');?>">Professional Service</a></li>
          </ul>
        </li>
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Ward</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_BedAccom');?>">Bed Accomodation</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Ward');?>">Ward</a></li>
          </ul>
        </li>
      <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Setup</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Setup');?>">Setup</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Hospital');?>">Hospital</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Transfee');?>">Transfer Fee</a></li>
          
          </ul>
        </li>    
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Procedures');?>">
			<svg class="c-sidebar-nav-icon">
			<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-list"></use>
			</svg>Examination</a>
		</li>
		
		<li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">System Administration</li>
		
		<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-columns"></use>
            </svg>Setup/Facility</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Setup');?>">Setup</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Hospital');?>">Hospital</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Ref_Transfee');?>">Transfer Fee</a></li>
          
          </ul>
        </li> 
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Auth');?>">
		<li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Manage & Controls</li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?php echo site_url('Facility');?>">
			<svg class="c-sidebar-nav-icon">
			<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-user"></use>
			</svg>User Account & Controls</a>
		</li>
		
	
      </ul>
	  <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>
 <div class="c-wrapper">
     <header class="c-header c-header-light c-header-fixed  bg-gradient-success">
<button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
<svg class="c-icon c-icon-lg">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-menu"></use>
</svg>
</button><a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
<svg width="118" height="46" alt="CoreUI Logo">
<use xlink:href="assets/brand/coreui-pro.svg#full"></use>
</svg></a>
<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
<svg class="c-icon c-icon-lg">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-menu"></use>
</svg>
</button>
<ul class="c-header-nav d-md-down-none">
<li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
<li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
<li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
</ul>
<ul class="c-header-nav mfs-auto">
<li class="c-header-nav-item px-3 c-d-legacy-none">
<button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom" title="Toggle Light/Dark Mode">
<svg class="c-icon c-d-dark-none">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-moon"></use>
</svg>
<svg class="c-icon c-d-default-none">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-sun"></use>
</svg>
</button>
</li>
</ul>
<ul class="c-header-nav">
<li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<svg class="c-icon">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-bell"></use>
</svg><span class="badge badge-pill badge-danger">5</span></a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
<div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2 text-success">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-user-follow"></use>
</svg> New user registered</a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2 text-danger">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-user-unfollow"></use>
</svg> User deleted</a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2 text-info">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-chart"></use>
</svg> Sales report is ready</a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2 text-success">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-basket"></use>
</svg> New client</a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2 text-warning">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-speedometer"></use>
</svg> Server overloaded</a>
<div class="dropdown-header bg-light"><strong>Server</strong></div><a class="dropdown-item d-block" href="#">
<div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div><span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span><small class="text-muted">348 Processes. 1/4 Cores.</small>
</a><a class="dropdown-item d-block" href="#">
<div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div><span class="progress progress-xs">
 <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</span><small class="text-muted">11444GB/16384MB</small>
</a><a class="dropdown-item d-block" href="#">
<div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div><span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</span><small class="text-muted">243GB/256GB</small>
</a>
</div>
</li>
<li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<svg class="c-icon">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-list-rich"></use>
</svg><span class="badge badge-pill badge-warning">15</span></a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
<div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div><a class="dropdown-item d-block" href="#">
<div class="small mb-1">Upgrade NPM &amp; Bower<span class="float-right"><strong>0%</strong></span></div><span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a><a class="dropdown-item d-block" href="#">
<div class="small mb-1">ReactJS Version<span class="float-right"><strong>25%</strong></span></div><span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a><a class="dropdown-item d-block" href="#">
<div class="small mb-1">VueJS Version<span class="float-right"><strong>50%</strong></span></div><span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a><a class="dropdown-item d-block" href="#">
<div class="small mb-1">Add new layouts<span class="float-right"><strong>75%</strong></span></div><span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a><a class="dropdown-item d-block" href="#">
<div class="small mb-1">Angular 8 Version<span class="float-right"><strong>100%</strong></span></div><span class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</span>
</a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
</div>
</li>
<li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<svg class="c-icon">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg><span class="badge badge-pill badge-info">7</span></a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
<div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a class="dropdown-item" href="#">
<div class="message">
<div class="py-3 mfe-3 float-left">
<div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
</div>
<div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">Just now</small></div>
<div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
<div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
</div>
</a><a class="dropdown-item" href="#">
<div class="message">
<div class="py-3 mfe-3 float-left">
<div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
</div>
<div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">5 minutes ago</small></div>
<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
<div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
</div>
</a><a class="dropdown-item" href="#">
<div class="message">
<div class="py-3 mfe-3 float-left">
<div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
</div>
<div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
<div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
</div>
</a><a class="dropdown-item" href="#">
<div class="message">
<div class="py-3 mfe-3 float-left">
<div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-info"></span></div>
</div>
<div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">4:03 PM</small></div>
<div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
<div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
</div>
</a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
</div>
</li>
<li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
</a>
<div class="dropdown-menu dropdown-menu-right pt-0">
<div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-bell"></use>
</svg> Updates<span class="badge badge-info mfs-auto">42</span></a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg> Messages<span class="badge badge-success mfs-auto">42</span></a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-task"></use>
</svg> Tasks<span class="badge badge-danger mfs-auto">42</span></a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-comment-square"></use>
</svg> Comments<span class="badge badge-warning mfs-auto">42</span></a>
<div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-user"></use>
</svg> Profile</a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-settings"></use>
</svg> Settings</a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-credit-card"></use>
</svg> Payments<span class="badge badge-secondary mfs-auto">42</span></a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-file"></use>
</svg> Projects<span class="badge badge-primary mfs-auto">42</span></a>
<div class="dropdown-divider"></div><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg> Lock Account</a><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-account-logout"></use>
</svg> Logout</a>
</div>
</li>
<button class="c-header-toggler c-class-toggler mfe-md-3" type="button" data-target="#aside" data-class="c-sidebar-show">
<svg class="c-icon c-icon-lg">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-applications-settings"></use>
</svg>
</button>
</ul>
<div class="c-subheader justify-content-between px-3">
<?php echo $breadcrumbs;?>
<div class="c-subheader-nav d-md-down-none mfe-2"><a class="c-subheader-nav-link" href="#">
<svg class="c-icon">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-speech"></use>
</svg></a><a class="c-subheader-nav-link" href="#">
<svg class="c-icon">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-graph"></use>
</svg> &nbsp;Dashboard</a><a class="c-subheader-nav-link" href="#">
<svg class="c-icon">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-settings"></use>
</svg> &nbsp;Settings</a></div>
</div>
</header>

<div class="c-body">
	<main class="c-main">
		<div class="container-fluid">