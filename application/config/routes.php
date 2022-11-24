<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'Admission';
$route['404_override'] = '404';
$route['translate_uri_dashes'] = true;

// AUTH
$route['login'] = 'auth/login';

// PHILHEALTH
$route['philhealth/members'] = 'philhealth';

// ECLAIMS
$route['philhealth/eclaims/submissions'] = 'eclaims';
$route['philhealth/eclaims/receipts'] = 'eclaimsreceipt';
$route['philhealth/eclaims/transmittals'] = 'eclaimstransmittal';
$route['philhealth/eclaims/vouchers'] = 'eclaimsvoucher';
$route['philhealth/eclaims/returns'] = 'eclaimsreturn';
$route['covid19'] = 'covid19';
$route['rabies'] = 'rabies';

// Postpartum
$route['postpartum/(:any)/get']['get'] = 'PostpartumController/getData/$1';
$route['postpartum/(:any)/save']['post'] = 'PostpartumController/save/$1';

// Delivery Outcome
$route['delivery-outcome/(:any)/get']['get'] = 'DeliveryOutcomeController/getData/$1';
$route['delivery-outcome/(:any)/save']['post'] = 'DeliveryOutcomeController/save/$1';

// Prenatal
$route['prenatal/(:any)/get']['get'] = 'PrenatalController/getData/$1';
$route['prenatal/(:any)/save']['post'] = 'PrenatalController/save/$1';

// Course In The Ward
$route['course-in-the-ward/(:any)/get']['get'] = 'WardCourseController/getData/$1';
$route['course-in-the-ward/(:any)/get-all']['get'] = 'WardCourseController/getAllData/$1';
$route['course-in-the-ward/(:any)/store']['post'] = 'WardCourseController/store/$1';
$route['course-in-the-ward/(:any)/update']['post'] = 'WardCourseController/update/$1';
$route['course-in-the-ward/(:any)/delete']['post'] = 'WardCourseController/destroy/$1';

// Physical Examination
$route['physical-examinations/(:any)/get']['get'] = 'PhysicalExaminationController/getData/$1';
$route['physical-examinations/(:any)/save']['post'] = 'PhysicalExaminationController/save/$1';

// Vital signs
$route['vital-signs/(:any)/get']['get'] = 'VitalSignController/getData/$1';
$route['vital-signs/(:any)/save']['post'] = 'VitalSignController/save/$1';

// OB/Gyn History
$route['ob-gyn-history/(:any)/get']['get'] = 'ObgynHistoryController/getData/$1';
$route['ob-gyn-history/(:any)/save']['post'] = 'ObgynHistoryController/save/$1';

// Present Illness History
$route['present-illness-history/(:any)/get']['get'] = 'PresentIllnessHistoryController/getData/$1';
$route['present-illness-history/(:any)/get-all']['get'] = 'PresentIllnessHistoryController/getAllData/$1';
$route['present-illness-history/(:any)/save']['post'] = 'PresentIllnessHistoryController/save/$1';
$route['present-illness-history/(:any)/store']['post'] = 'PresentIllnessHistoryController/store/$1';
$route['present-illness-history/(:any)/update']['post'] = 'PresentIllnessHistoryController/update/$1';
$route['present-illness-history/(:any)/delete']['post'] = 'PresentIllnessHistoryController/destroy/$1';

// Pertinent Laboratory and diagnostic findings
$route['pertinent-laboratory-and-diagnostic-findings/(:any)/get']['get'] = 'PertinentLaboratoryDiagnosticController/getData/$1';
$route['pertinent-laboratory-and-diagnostic-findings/(:any)/save']['post'] = 'PertinentLaboratoryDiagnosticController/save/$1';

// Pertinent Sings and Symptoms
$route['pertinent-signs-symptoms/(:any)/get']['get'] = 'PertinentSignsSymptomController/getData/$1';
$route['pertinent-signs-symptoms/(:any)/save']['post'] = 'PertinentSignsSymptomController/save/$1';

// Past Medical History
$route['past-medical-history/(:any)/get']['get'] = 'PastMedicalHistoryController/getData/$1';
$route['past-medical-history/(:any)/save']['post'] = 'PastMedicalHistoryController/save/$1';

$route['special-instructions/(:any)/get']['get'] = 'PatientRecords/getSpecialInstruction/$1';
$route['special-instructions/save']['post'] = 'PatientRecords/saveSpecialInstructions/';

//CF4 Drugs and Medicines
$route['cf4-drugs-medicines/update']['post'] = 'Philhealth/updateCF4DrugsMedicines';

// CF4 Atrending Provider
$route['cf4-attending-provider/update']['post'] = 'Philhealth/updateCF4Provider';
/**
 * Vue Routes
 * All routes with 'site' prefix will used by Vue
 * Valid    : site, site/, site/a, site/a/b, site/a/b/etc...
 * Invalid  : sitemap
 */
$route['dashboard'] = 'vue';
//$route['home'] = 'vue';
//$route['about'] = 'vue';

$route['api/v1/sidebar']['GET'] = 'api/v1/MenuController/sidebar';
$route['api/v1/menu-items']['GET'] = 'api/v1/MenuController/menuItem';
$route['afp'] = 'afp';


// Dashboard API
$route['api/v1/dashboard/total-patient-count']['GET'] = 'api/v1/DashboardController/totalPatientCount';
$route['api/v1/dashboard/patient-visit-trends']['GET'] = 'api/v1/DashboardController/patientVisitTrends';
$route['api/v1/dashboard/total-admitted-patient-count']['GET'] = 'api/v1/DashboardController/totalAdmittedPatientCount';
$route['api/v1/dashboard/total-outpatient-patient-count']['GET'] = 'api/v1/DashboardController/totalOutpatientPatientCount';
$route['api/v1/dashboard/total-emergency-patient-count']['GET'] = 'api/v1/DashboardController/totalEmergencyPatientCount';
$route['api/v1/dashboard/morbidities']['GET'] = 'api/v1/DashboardController/morbidity';
$route['api/v1/dashboard/mortalities']['GET'] = 'api/v1/DashboardController/mortality';
$route['api/v1/dashboard/average-length-of-stay']['GET'] = 'api/v1/DashboardController/averageLengthOfStay';
$route['api/v1/dashboard/bed-occupancy-rate']['GET'] = 'api/v1/DashboardController/bedOccupancyRate';
$route['api/v1/dashboard/collection-summary']['GET'] = 'api/v1/DashboardController/hospitalCollections';
$route['api/v1/dashboard/leading-outpatient-consultations']['GET'] = 'api/v1/DashboardController/leadingOutpationConsultations';
$route['api/v1/dashboard/leading-emergency-consultations']['GET'] = 'api/v1/DashboardController/leadingEmergencyConsultations';
$route['api/v1/dashboard/major-operations']['GET'] = 'api/v1/DashboardController/majorOperations';
$route['api/v1/dashboard/minor-operations']['GET'] = 'api/v1/DashboardController/minorOperations';
$route['api/v1/dashboard/expenses']['GET'] = 'api/v1/DashboardController/expenses';
$route['api/v1/dashboard/revenues']['GET'] = 'api/v1/DashboardController/revenues';
$route['api/v1/dashboard/infection-rates']['GET'] = 'api/v1/DashboardController/infectionRate';
$route['api/v1/dashboard/death-rates']['GET'] = 'api/v1/DashboardController/deathRate';
//$route['api/v1/dashboard/bed-count']['GET'] = 'api/v1/DashboardController/beds';
$route['api/v1/dashboard/bed-allocation-count']['GET'] = 'api/v1/DashboardController/bedAllocation';
$route['api/v1/dashboard/room-bed-allocation-count']['GET'] = 'api/v1/DashboardController/roomBedAllocation';
$route['api/v1/dashboard/drugs-and-medicines']['GET'] = 'api/v1/DashboardController/drugsAndMedicine';
$route['api/v1/dashboard/non-drug-supplies']['GET'] = 'api/v1/DashboardController/nonDrugSupplies';
$route['api/v1/dashboard/admissions-per-ward']['GET'] = 'api/v1/DashboardController/wardAdmissions';
$route['api/v1/dashboard/discharge-per-ward']['GET'] = 'api/v1/DashboardController/dischargePerWard';
$route['api/v1/dashboard/discharge-per-ward-per-service']['GET'] = 'api/v1/DashboardController/dischargePerWardPerService';
$route['api/v1/dashboard/discharge-improved']['GET'] = 'api/v1/DashboardController/dischargeImproved';
$route['api/v1/dashboard/emergency-department-per-service']['GET'] = 'api/v1/DashboardController/emergencyPerService';
$route['api/v1/dashboard/emergency-department-per-service-for-admission']['GET'] = 'api/v1/DashboardController/emergencyPerServiceForAdmission';
$route['api/v1/dashboard/emergency-department-per-disposition']['GET'] = 'api/v1/DashboardController/emergencyPerDisposition';
$route['api/v1/dashboard/dead-on-arrival']['GET'] = 'api/v1/DashboardController/deadOnArrival';
$route['api/v1/dashboard/emergency-department-deaths']['GET'] = 'api/v1/DashboardController/emergencyDepartmentDeath';
$route['api/v1/dashboard/caesarean']['GET'] = 'api/v1/DashboardController/caesarean';

// Appointments
$route['appointments']['get'] = 'AppointmentController/index';
$route['confirmed-appointments']['get'] = 'AppointmentController/confirmedAppointments';
$route['appointments/doctors']['post'] = 'AppointmentController/doctorsAppointments';
$route['appointments/(:any)/get']['get'] = 'AppointmentController/getData/$1';
$route['appointments/get-all']['get'] = 'AppointmentController/getAllData';
$route['appointments/fetch-appointments']['get'] = 'AppointmentController/fetchAppointments';
$route['appointments/(:any)/confirm']['post'] = 'AppointmentController/confirmAppointment/$1';
$route['appointments/(:any)/assign-doctor']['post'] = 'AppointmentController/assignDoctor';
$route['appointments/(:any)/link-patient']['post'] = 'AppointmentController/linkPatient';

// Schedules
$route['schedules']['get'] = 'ScheduleController/index';
$route['get-schedules']['get'] = 'ScheduleController/getData/$1';

// Type Of Service
$route['type-of-services/get-all']['get'] = 'Ref_TypeOfService/getAll';

$route['encounter-diagnosis/get-datatable-list']['post'] = 'EncounterDiagnosis/getDataTableList';
$route['encounter-diagnosis/get-icd10-datatable-list']['post'] = 'EncounterDiagnosis/getIcd10DataTableList';
$route['encounter-diagnosis/get-icd11-datatable-list']['post'] = 'EncounterDiagnosis/getIcd11DataTableList';
$route['encounter-diagnosis/get-code-procedure-datatable-list']['post'] = 'EncounterDiagnosis/getCodeProcedureDataTableList';
$route['encounter-diagnosis/save-icd10']['post'] = 'EncounterDiagnosis/saveIcd10';
$route['encounter-diagnosis/save-icd11']['post'] = 'EncounterDiagnosis/saveIcd11';
$route['encounter-diagnosis/save-code-procedure']['post'] = 'EncounterDiagnosis/saveCodeProcedure';

$route['medical-records/encounter-diagnosis']['get'] = 'MedicalRecords/encounterDiagnosis';
$route['medical-records/icd10']['get'] = 'MedicalRecords/icd10';
$route['medical-records/icd11']['get'] = 'MedicalRecords/icd11';
$route['medical-records/code-procedures']['get'] = 'MedicalRecords/codeProcedure';

$route['triage']['get'] = 'TriageController/index';
$route['triage']['post'] = 'TriageController/index';
$route['triage/patients']['post'] = 'TriageController/getPatientList';
$route['triage/patients/save']['post'] = 'TriageController/save';
$route['triage/patients/update']['post'] = 'TriageController/update';
$route['triage/(:any)/patients/(:any)/vital-signs']['post'] = 'TriageController/vitalSigns/$1/$2';
$route['triage/(:any)/patients/(:any)/vital-signs/(:any)']['get'] = 'TriageController/getVitalSignsData/$1/$2/$3';


// ICD 11
$route['icd11/manual-postcoordinations/find']['get'] = 'IcdManualPostcoordination/find';
$route['icd11/code-mapping']['get'] = 'IcdCodeMapping/get';

$route['api/v1/icd/token']['GET'] = 'api/v1/GetIcdTokenController/getToken';