<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Class Admission
*/
class Admission extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->model=$this->load->model('AdmissionModel');
		$this->load->model('WardModel');
		$this->load->library('Pdf');
	}

	public function index()
	{
		$data=array(
		'header'=>'Admission',
		'subheader'=>'Inpatient Lists',
		'icon'=>'fa fa-bed',
		'breadcrumbs'=>'');
		render_page('Admission' . DIRECTORY_SEPARATOR . 'index.php',$data);
	}


	public function Add()
	{
		$data=array(
		'header'=>'Admission',
		'subheader'=>'Module',
		'icon'=>'fa fa-bed',
		'breadcrumbs'=>'');
		render_page('Admission' . DIRECTORY_SEPARATOR . 'add.php',$data);
	}
	
	public function Edit($enccode)
	{
		$data=array(
		'header'=>'Admission',
		'subheader'=>'Module',
		'icon'=>'fa fa-bed',
		'breadcrumbs'=>'');
		render_page('Admission' . DIRECTORY_SEPARATOR . 'edit.php',$data);
	}
	
	public function Information($enccode)
	{
		$enctr = urldecode(urldecode($enccode));
			$admission=$this->AdmissionModel->admissionLog($enctr);
			$board=$this->AdmissionModel->roomLog($enctr);
			$doctor=$this->AdmissionModel->doctorLog($enctr);
			$enctr=$this->AdmissionModel->encounterLog($enctr);
			$data=array(
			'admission'=>json_encode($admission),
			'board'=>json_encode($board),
			'doctor'=>json_encode($doctor),
			'enctr'=>json_encode($enctr));
		echo json_encode($data);	
	}
	
	public function setTos($tscode)
	{
		$row=$this->AdmissionModel->setTos($tscode);
		echo json_encode($row);
	}
	
	public function setWard($wardcode)
	{
		$row=$this->AdmissionModel->setWard($wardcode);
		echo json_encode($row);
	}
	
	public function setRoom($rmcode)
	{
		$row=$this->AdmissionModel->setRoom($rmcode);
		echo json_encode($row);
	}
	
	public function setBed($bdcode)
	{
		$row=$this->AdmissionModel->setBed($bdcode);
		echo json_encode($row);
	}
	
	
	
	
	
	
	
	
	
	
	
	public  function InpatientInformation($enctr)
	{
		$enccode = urldecode(urldecode($enctr));
		if($enccode)
		{
			echo $this->AdmissionModel->InpatientInformation($enccode);
		}
		else
		{
			exit('invalid access!');	
		} 
	}
	
	public function InpatientRoom($enccode) 
	{	
		$enctr = urldecode(urldecode($enccode));
		$data=$this->AdmissionModel->InPatientRoomHistory($enctr);
		echo json_encode($data);
	}
	
	public function transferRoom()
	{
		if(isset($_POST)&& !empty($_POST))
		 {
			  $newRoom = array(
			 'enccode'=>$this->input->post('rmEnccode'),
			 'hpercode'=>$this->input->post('rmHpercode'),
			 'hprdate'=>date("Y-m-d H:i:s"),
			 'hprtime'=>date("Y-m-d H:i:s"),
			 'wardcode'=>$this->input->post('selWar'),
			 'rmintkey'=>$this->input->post('selRoom'),
			 'bdintkey'=>$this->input->post('selBed'),
			 'rmvcode'=>'ORADM',
			 'patrmstat'=>'A',
			 'patrmlock'=>'N',
			 'updsw'=>'N',
			 'confdl'=>'N',
			 'roombaby'=>'N',
			 'entryby'=>'');
			 
			 
			$curRoom = array(
			 'hprdate'=>date("Y-m-d H:i:s"),
			 'hprtime'=>date("Y-m-d H:i:s"),
			 'wardcode'=>$this->input->post('selWar'),
			 'rmintkey'=>$this->input->post('selRoom'),
			 'bdintkey'=>$this->input->post('selBed'),
			 'rmvcode'=>'ORADM',
			 'patrmstat'=>'A',
			 'patrmlock'=>'N',
			 'updsw'=>'N',
			 'confdl'=>'N',
			 'roombaby'=>'N',
			 'entryby'=>'');
			 
			  $leavedRoom = array(
			 'enccode'=>$this->input->post('rmEnccode'),
			 'hpercode'=>$this->input->post('rmHpercode'),
			 'datemod'=>date("Y-m-d H:i:s"),
			 'bdintkey'=>$this->input->post('patOldBed'),
			 'patrmstat'=>'I',
			 'patrmlock'=>'N',
			 'updsw'=>'N',
			 'confdl'=>'N',
			 'roombaby'=>'N',
			 'entryby'=>'10012');
			$this->AdmissionModel->_leaveRoom($this->input->post('rmEnccode'),$leavedRoom);
			$this->SqlModel->insert('hpatroom',$newRoom);
			$this->AdmissionModel->_occupyRoom($this->input->post('rmEnccode'),$curRoom);
			
		 }else{
			 exit("Invalid access!");
		 }
	}
	
	public function checkAdmit($hpercode)
	{
		$row=$this->AdmissionModel->checkAdmit($hpercode);
		echo  $row->count;
	}
	
	
	
    public function savePatientAdmission()
	{
	 if(isset($_POST)&& !empty($_POST))
	 {
		//hadmlog
	 $log = array(
	 'enccode'=>$this->input->post('enccode'),
	 'hpercode'=>trim($this->input->post('chpercode')),
	 'casenum'=>trim($this->input->post('casenum')),	
	 'newold'=>'O',
	 'tacode'=>$this->input->post('ctacode'),
	 'tscode'=>$this->input->post('ctscode'),
	 'admdate'=>date("Y-m-d H:i:s"),
	 'admtime'=>date("Y-m-d H:i:s"),
	 'licno'=>$this->input->post('cdocadmit'),
	 'admmode'=>$this->input->post('modaccom'),
	 'admtxt'=>$this->input->post('cadmdiag'),
	 'admnotes'=>$this->input->post('creasdiag'),
	 'admpreg'=>$this->input->post('cpind'),
	 'itisind'=>$this->input->post('ctbind'),
	 'patage'=>$this->input->post('cpatage'),
	 'patagemo'=>$this->input->post('cpatmont'),
	 'patagedy'=>$this->input->post('cpatday'),
	 'hsepriv'=>'',
	 'admstat'=>'A',
	 'admlock'=>'N',
	 'updsw'=>'N',
	 'confdl'=>'N',
	 'patagehr'=>'0.00',
	 'admclerk'=>'COVID-10',
	 'entryby'=>'COVID-10');
	
	 //henctr
	 $enctr = array(
	 'enccode'=>$this->input->post('enccode'),
	 'fhud'=>FacilityInfo()->hfhudcode,
	 'hpercode'=>trim($this->input->post('chpercode')),
	 'encdate'=>date("Y-m-d H:i:s"),
	 'enctime'=>date("Y-m-d H:i:s"),
	 'toecode'=>'ADM',
	 'patinform'=>$this->input->post('cinffname'),
	 'patinfadd'=>$this->input->post('cinfaddress'),
	 'patinftel'=>$this->input->post('cinfcontact'),
	 'relacode'=>$this->input->post('cinfrelation'),
	 'sopcode1'=>$this->input->post('csop1'),
	 'sopcode2'=>$this->input->post('csop2'),
	 'sopcode3'=>$this->input->post('csop3'),
	 'acctno'=>$this->input->post('pataccount'),
	 'encstat'=>'A',
	 'enclock'=>'N',
	 'updsw'=>'U',
	 'confdl'=>'N',
	 'entryby'=>'COVID-10');
	 
	 //hpatroom
	 $room = array(
	 'enccode'=>$this->input->post('enccode'),
	 'hpercode'=>$this->input->post('chpercode'),
	 'hprdate'=>date("Y-m-d H:i:s"),
	 'hprtime'=>date("Y-m-d H:i:s"),
	 'wardcode'=>$this->input->post('cward'),
	 'rmintkey'=>$this->input->post('croom'),
	 'bdintkey'=>$this->input->post('cbed'),
	 'rmvcode'=>'ORADM',
	 'patrmstat'=>'A',
	 'patrmlock'=>'N',
	 'updsw'=>'N',
	 'confdl'=>'N',
	 'roombaby'=>'N',
	 'entryby'=>'');
		
	 //hadmcons
	 $admitDoc=array(
	 'enccode'=>$this->input->post('enccode'),
	 'hpercode'=>$this->input->post('chpercode'),
	 'licno'=>$this->input->post('cdocadmit'),
	 'doctype'=>'ADMIT',
	 'acostat'=>'A',
	 'acolock'=>'N',
	 'acoconfdl'=>'N');
	 
	 $consulDoc=array(
	 'enccode'=>$this->input->post('enccode'),
	 'hpercode'=>$this->input->post('chpercode'),
	 'licno'=>$this->input->post('cdocconsult'),
	 'doctype'=>'CONSU',
	 'acostat'=>'A',
	 'acolock'=>'N',
	 'acoconfdl'=>'N');
	 
	 $attendDoc=array(
	 'enccode'=>$this->input->post('enccode'),
	 'hpercode'=>$this->input->post('chpercode'),
	 'licno'=>$this->input->post('cdocattend'),
	 'doctype'=>'ATTEN',
	 'acostat'=>'A',
	 'acolock'=>'N',
	 'acoconfdl'=>'N');
	 
	 $resp=array(
	 'enccode'=>$this->input->post('enccode'),
	 'hpercode'=>$this->input->post('chpercode'),
	 'raname'=>$this->input->post('crfname'),
	 'raaddr'=>$this->input->post('craddress'),
	 'rateln'=>$this->input->post('crcontact'),
	 'ralacode'=>$this->input->post('crrelation'),
	 'rastat'=>'A',
	 'ralock'=>'N',
	 'raupsw'=>'N',
	 'radtmd'=>date("Y-m-d H:i:s"),
	 'conf'=>'N');
		
	$account=array(
	'paacctno'=>$this->input->post('pataccount'),
	'enccode'=>$this->input->post('enccode'),
	'hpercode'=>$this->input->post('chpercode'),
	'padteas'=>date("Y-m-d H:i:s"),
	'patmeas'=>date("Y-m-d H:i:s"),
	'pastat'=>'A',
	'palock'=>'N',
	'updsw'=>'N',
	'confdl'=>'N');
	 
	 if ($this->SqlModel->insert('henctr',$enctr)==1)
	 {
		$this->SqlModel->insert('hadmlog',$log); 
	    $this->SqlModel->insert('hpatroom',$room); 
		$this->SqlModel->insert('hadmcons',$admitDoc); 
		$this->SqlModel->insert('hpatacct',$account); 
		$roomUpdate=array('bdvacocc'=>'O');
	    $this->AdmissionModel->UpdatedBed($this->input->post('cbed'),$roomUpdate);
		  if(!empty($this->input->post('cdocattend')))
		  {
			 $this->SqlModel->insert('hadmcons',$attendDoc);  
		  }
		  if(!empty($this->input->post('cdocconsult')))
		  {
			 $this->SqlModel->insert('hadmcons',$consulDoc);  
		  }
		  if(!empty($this->input->post('crfname')))
		  {
			 $this->SqlModel->insert('hresact',$resp);  
		  }
		  $return=array(
		  'status'=>0,
		  'message'=>'Patient Successfully Admitted!');
	 }else
	 {
		  $return=array(
		  'status'=>1,
		  'message'=>'Patient failed to Admit!'); 
	 }
	}else
	{
		exit('invalid access!');
	}
	}
	
	function savePatientDischarge()
	{
		if(isset($_POST)&& !empty($_POST))
		 {
			$admData=array(
			'disdate'=>date('Y-m-d h:i:s', strtotime($this->input->post('disDateTime'))),
			'distime'=>date('Y-m-d h:i:s', strtotime($this->input->post('disDateTime'))),
			'disnotes'=>$this->input->post('dischNotes'),
			'dispcode'=>$this->input->post('dischDisp'),
			'condcode'=>$this->input->post('dischCond'),
			'pexpireddate'=>$this->input->post('diedTime'),
			'datemod'=>date("Y-m-d H:i:s"),
			'admstat'=>'I');
			$enctrData=array('encstat'=>'I');
			$roomData=array('patrmstat'=>'I');
			$accountData=array('pastat'=>'I');
			$bedData = array('bdvacocc'=>'V');
			$consData = array('acostat'=>'I');
			
			$acctBal=$this->_accountDetails($this->input->post('dischEnccode'));
			
			
			if($acctBal->pabal <> '0.00')
				{
					$message=array(
					'message'=>"Outstanding Balance",
					'value'=>number_format($acctBal->pabal,2));
					echo  json_encode($message);
					
				}else{
					$this->AdmissionModel->_hadmlogDis($this->input->post('dischEnccode'),$admData);
					$this->AdmissionModel->_henctrDis($this->input->post('dischEnccode'),$enctrData);
					$this->AdmissionModel->_accountDis($this->input->post('dischEnccode'),$accountData);
					$this->AdmissionModel->_consDis($this->input->post('dischEnccode'),$consData);
					$this->AdmissionModel->_bedDis($this->input->post('dischBed'),$bedData);
				
					
					
					$message=array(
					'message'=>"Patient Successfully Discharge!",
					'value'=>"");
					echo  json_encode($message);
				}
		 }else{
			exit('invalid access!');
		 }
	}
	
	function _accountDetails($enccode)
	{
		return $this->AdmissionModel->_InpatientAccount($enccode);
	}
	

	public function ClinicalCoverSheet($hpercode)
	{
	
	ob_start(); 
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('');
	$pdf->SetTitle('');
	$pdf->SetSubject('');
	$pdf->SetKeywords('');
	$pdf->SetAutoPageBreak(TRUE, 0);
	$pdf->SetPrintHeader(false);
	$pdf->SetPrintFooter(true);
	$pdf->setJPEGQuality(75);
	$pdf->AddPage();
	
	$pdf->Image('images/image_demo.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);
	$pdf->SetFont('times', '', 12);
	
	$tbl = '
	<table border="0.5" cellpadding="0" align="center">
	 <tr>
	  <td width="70%" rowspan="3">
	  <small>REPUBLIC OF PHILIPPINES</small><br>
		DEPARTMENT OF HEALTH<br>
	  <b>'.FacilityInfo()->hhosname.'</b><br>
	  <small> '.FacilityInfo()->hhosstr.','.FacilityInfo()->ctyname.' '.FacilityInfo()->provname.' '.FacilityInfo()->regname.'</small>
	  </td>
	   <td width="10%">Form: </td>
	  <td width="20%">FM-ADM-AMT-12</td>
	 </tr>
	 
		 <tr>
			<td width="10%">Effect:</td>
			<td width="20%">09/13/2013</td>
		 </tr>
		 <tr>
			<td width="10%">Date:</td>
			<td width="20%">'.date('m/d/Y').'</td>
		 </tr>
	</table>
	';
	
	$pdf->writeHTML($tbl, true, false, false, false, '');
	$pdf->SetFont('times', 'B', 15);
	$pdf->Write(0, 'CLINICAL COVER SHEET', '', 0, 'C', true, 0, false, false, 0);
	$pdf->SetFont('times', '', 9);
	$tbl = '
	<table border="1" cellpadding="3" align="left">
	<tr>
	<td>Senior Citizen No:
	</td>
	<td>Old Hospital No:
	</td>
	<td>Hospital Number:
	</td>
	</tr>
	<tr>
	<td width="40%">Patient Name: <BR>
	ICAONAPO,alVIN EVANGELISTA
	</td>
	<td  width="20%">Ward:
	<BR>
	wardDROBE
	</td>
		<td  width="10%">Room:<BR>
		ROOM 69
		</td>
		<td  width="10%">Bed:<BR>
		BED001
		</td>
		<td width="20%">Service:<BR>
		MEDICINE
		</td>
	</tr>
	<tr>
	<td width="20%" >Birth Date:<br>
	08/08/1992
	</td>
	<td width="10%">Age:<br>
	27YRS OLD
	</td>
	<td width="30%">BirthPlace:<br>
	Quezon City
	</td>
	<td width="10%">Nationality:<br>
	Filipino
	</td>
	<td width="10%">Religion:<br>
	Catholic
	</td>
	<td width="20%">Occupation:<br>
	Taga Ayos
	</td>
	</tr>
	</table>
	';
	$pdf->writeHTML($tbl, true, false, false, false, '	');
	$pdf->Output('example_048.pdf', 'I');
	}
   public function searchDoctor()
	{
		searchDoctor();
	}
	
	public function searchPatient()
	{
		searchPatient();
	}
	public function searchWard($sex)
	{
		searchWard($sex);
	}
	
	public function searchRoom($wardCode)
	{
		searchRoom($wardCode);
	}
	
	public function searchBed($roomCode)
	{
		searchBed($roomCode);
	}
	
	public function PatientAdvanceSearch()
	{ 	
		echo PatientAdvanceSearch();
	}
	
	public function DoctorsInformation($licNo)
	{
		echo DoctorsInformation($licNo);
	}
	
	public function countWardBySex($sex)
	{
		echo $this->WardModel->WardCount($sex);
	}

	public function countRoomAvailable($wardCode)
	{
		echo $this->WardModel->RoomCount($wardCode);
	}
	
	public function countBedAvailable($rmcode)
	{
		echo $this->WardModel->BedCount($rmcode);
	}
	
   	public function InpatientList() 
	{	
		echo $this->AdmissionModel->InpatientList();
	}
	
	public function InpatientListWard($wardcode) 
	{	
		echo $this->AdmissionModel->InpatientListWard($wardcode);
	}
}

