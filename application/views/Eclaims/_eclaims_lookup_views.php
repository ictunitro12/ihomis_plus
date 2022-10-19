<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp; <?php echo $header; ?> - <span class="acreditationDescription"></span>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="container-fluid" id="get-member-pin-input">
			<div class="row">
				<div class="col">
					<div class="h3 text text-success">GET MEMBER PIN</div>
				</div>
			</div>
			<hr>
			<form id="getPINForm">
				<input type="hidden" id="getPINAccreditation" name="getPINAccreditation">
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label for="memberLastName" class="text-success">MEMBER LAST NAME</label>
							<input type="text" class="form-control form-control-sm" id="memberLastName" name="memberLastName" placeholder="Enter Member Last Name">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label for="memberFirstName" class="text-success">MEMBER FIRST NAME</label>
							<input type="text" class="form-control form-control-sm" id="memberFirstName" name="memberFirstName" placeholder="Enter Member First Name">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label for="memberMiddleName" class="text-success">MEMBER MIDDLE NAME</label>
							<input type="text" class="form-control form-control-sm" id="memberMiddleName" name="memberMiddleName" placeholder="Enter Member Middle Name">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label for="memberSuffix" class="text-success">MEMBER SUFFIX</label>
							<input type="text" class="form-control form-control-sm" id="memberSuffix" name="memberSuffix" placeholder="Enter Member Suffix">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label for="memberDateOfBirth" class="text-success">MEMBER DATE OF BIRTH</label>
							<input type="date" class="form-control form-control-sm" id="memberDateOfBirth" name="memberDateOfBirth" placeholder="Enter Member Date of Birth">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<button type="submit" class="btn btn-block btn-lg btn-info" id="getPINBtn" name="getPINBtn"><i class="fas fa-search"></i></i> GET MEMBER PIN</button>
					</div>
				</div>
			</form>
			<hr>
			<div class="row">
				<div class="col-md">
					<span id="getPINResult" class="h4 text-success"></span>
				</div>
			</div>
		</div>
		<div class="container-fluid" id="get-doctor-pan-input" hidden>
			<div class="row">
				<div class="col">
					<div class="h3 text text-success">GET DOCTOR PAN</div>
				</div>
			</div>
			<hr>
			<form id="getDoctorPANForm">
				<input type="hidden" id="getDoctorPANFormAccreditation" name="getDoctorPANFormAccreditation">
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label for="doctorTIN" class="text-success">DOCTOR TIN</label>
							<input type="text" class="form-control form-control-sm" id="doctorTIN" name="doctorTIN" placeholder="Enter Doctor TIN">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label for="doctorLastName" class="text-success">DOCTOR LAST NAME</label>
							<input type="text" class="form-control form-control-sm" id="doctorLastName" name="doctorLastName" placeholder="Enter Doctor Last Name">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label for="doctorFirstName" class="text-success">DOCTOR FIRST NAME</label>
							<input type="text" class="form-control form-control-sm" id="doctorFirstName" name="doctorFirstName" placeholder="Enter Doctor First Name">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label for="doctorMiddleName" class="text-success">DOCTOR MIDDLE NAME</label>
							<input type="text" class="form-control form-control-sm" id="doctorMiddleName" name="doctorMiddleName" placeholder="Enter Doctor Middle Name">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label for="doctorSuffix" class="text-success">DOCTOR SUFFIX</label>
							<input type="text" class="form-control form-control-sm" id="doctorSuffix" name="doctorSuffix" placeholder="Enter Doctor Suffix">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label for="doctorDateOfBirth" class="text-success">DOCTOR DATE OF BIRTH</label>
							<input type="date" class="form-control form-control-sm" id="doctorDateOfBirth" name="doctorDateOfBirth" placeholder="Enter Doctor Date of Birth">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<button type="submit" class="btn btn-block btn-lg btn-info" id="getPANBtn" name="getPANBtn"><i class="fas fa-search"></i></i> GET DOCTOR PAN</button>
					</div>
				</div>
			</form>
			<hr>
			<div class="row">
				<div class="col-md">
					<span id="getPANResult" class="h4 text-success"></span>
				</div>
			</div>
		</div>
		<div class="container-fluid" id="is-doctor-accredited-input" hidden>
			<div class="row">
				<div class="col">
					<div class="h3 text text-success">DOCTOR'S ACCREDITATION CHECK</div>
				</div>
			</div>
			<hr>
			<form id="checkDocAccreditationCheckForm">
				<input type="hidden" id="checkDocAccreditationCheckFormAccreditation" name="checkDocAccreditationCheckFormAccreditation">
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label for="doctorAccreno" class="text-success">HEALTH CARE PROFESSIONAL ACCREDITATION NUMBER</label>
							<input type="text" class="form-control form-control-sm" id="doctorAccreno" name="doctorAccreno" placeholder="Enter Doctor PHIC Accreditation Number">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label for="admissionDate" class="text-success">DATE OF ADMISSION</label>
							<input type="date" class="form-control form-control-sm" id="admissionDate" name="admissionDate" placeholder="Enter Admission Date">
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label for="dischargedDate" class="text-success">DATE OF DISCHARGE</label>
							<input type="date" class="form-control form-control-sm" id="dischargedDate" name="dischargedDate" placeholder="Enter Discharged Date">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<button type="submit" class="btn btn-block btn-lg btn-info" id="checAccreditationBtn" name="checAccreditationBtn"><i class="fas fa-check"></i> CHECK ACCREDITATION</button>
					</div>
				</div>
			</form>
			<hr>
			<div class="row">
				<div class="col-md">
					<span id="accreditationCheckMessage" class="h3 text-danger"></span>
					<div id="accreditationCheckResult" class="text-success">
						<h4 id="result"></h4>
						<h4 id="pDoctorAccreCode"></h4>
						<h4 id="pAdmissionDate"></h4>
						<h4 id="pDischargeDate"></h4>
						<h4 id="pAccreditationStart"></h4>
						<h4 id="pAccreditationEnd"></h4>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" id="search-employer-input" hidden>
			<div class="row">
				<div class="col">
					<div class="h3 text text-success">SEARCH EMPLOYER</div>
				</div>
			</div>
			<hr>
			<form id="searchEmployerForm">
				<input type="hidden" id="searchEmployerFormAccreditation" name="searchEmployerFormAccreditation">
				<div class="row">
					<div class="col-lg">
						<div class="form-group">
							<label for="employerNo" class="text-success">PHILHEALTH EMPLOYER NUMBER</label>
							<input type="text" class="form-control form-control-sm" id="employerNo" name="employerNo" placeholder="Enter Employer Number">
						</div>
					</div>
					<div class="col-lg">
						<div class="form-group">
							<label for="employerName" class="text-success">PHILHEALTH EMPLOYER NAME</label>
							<input type="text" class="form-control form-control-sm" id="employerName" name="employerName" placeholder="Enter Employer Name">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<button type="submit" class="btn btn-block btn-lg btn-info" id="searchEmployerBtn" name="searchEmployerBtn"><i class="fas fa-search"></i> SEARCH EMPLOYER</button>
					</div>
				</div>
			</form>
			<hr>
			<table id="employersTable" class="display table table-striped" style="width:100%" hidden>
                <thead class="thead-dark">
                    <tr>
                        <th>PHILHEALTH EMPLOYER NUMBER</th>
                        <th>EMPLOYER NAME</th>
                        <th>ADDRESS</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
		</div>
		<div class="container-fluid" id="search-caserate-input" hidden>
			<div class="row">
				<div class="col">
					<div class="h3 text text-success">SEARCH CASE RATE</div>
				</div>
			</div>
			<hr>
			<form id="searchCaseRateForm">
				<input type="hidden" id="searchCaseRateFormAccreditation" name="searchCaseRateFormAccreditation">
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="icd10Code" class="text-success">ICD 10 CODE</label>
							<input type="text" class="form-control form-control-sm" id="icd10Code" name="icd10Code" placeholder="Enter ICD 10 Code" >
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="rvsCode" class="text-success">RVS CODE</label>
							<input type="text" class="form-control form-control-sm" id="rvsCode" name="rvsCode" placeholder="Enter RVS Code" >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label for="caseDescription" class="text-success">DESCRIPTION</label>
							<input type="text" class="form-control form-control-sm" id="caseDescription" name="caseDescription" placeholder="Enter Description" >
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md">
						<button type="submit" class="btn btn-block btn-lg btn-info" id="getCaseRateBtn" name="getCaseRateBtn"><i class="fas fa-search"></i></i> SEARCH CASE RATE</button>
					</div>
				</div>
			</form>
			<hr>
			<span id="searchCaseRateMessage" class="h3 text-danger"></span>
			<table id="caseRateTable" class="display table table-striped" style="width:100%" hidden>
				<thead class="thead-dark">
					<tr>
						<th>ICD10/RVS CODE</th>
						<th>ITEM DESCRIPTION</th>
						<th>CASE RATE CODE</th>
						<th>CASE RATE DESCRIPTION</th>
						<th>PRIMARY HCI FEE</th>
						<th>PRIMARY PROF FEE</th>
						<th>PRIMARY CASE RATE</th>
						<th>SECONDARY HCI FEE</th>
						<th>SECONDARY PROF FEE</th>
						<th>SECONDARY CASE RATE</th>
						<th>EFFECTIVITY DATE</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
		<div class="container-fluid" id="search-hospital-input" hidden>
			<div class="row">
				<div class="col">
					<div class="h3 text text-success">SEARCH HOSPITAL</div>
				</div>
			</div>
			<hr>
			<form id="searchHospitalForm">
				<input type="hidden" id="searchHospitalFormAccreditation" name="searchHospitalFormAccreditation">
				<div class="row">
					<div class="col-lg">
						<div class="form-group">
							<label for="hospitalName" class="text-success">Health Care Institution Name</label>
							<input type="text" class="form-control form-control-sm" id="hospitalName" name="hospitalName" placeholder="Enter Hospital Name">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md">
						<button type="submit" class="btn btn-block btn-lg btn-info" id="searchHospitalBtn" name="searchHospitalBtn"><i class="fas fa-search"></i> SEARCH HOSPITAL</button>
					</div>
				</div>
			</form>
			<hr>
			<table id="hospitalTable" class="display table table-striped" style="width:100%" hidden>
                <thead class="thead-dark">
                    <tr>
                        <th>PHILHEALTH ACCREDITATION NUMBER</th>
                        <th>PMCC</th>
                        <th>HOSPITAL NAME</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
		</div>
	</div>	
</div>