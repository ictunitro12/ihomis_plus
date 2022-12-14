<?php if (! defined('BASEPATH') ) exit("Not Allow to access this Page");
 require_once APPPATH . '/third_party/tcpdfnew/tcpdf.php';
 class PDFTemplate extends TCPDF {
    //Page header
    public function Header() {

        $facility_address=FacilityInfo()->hhosstr . ',' . FacilityInfo()->ctyname . ' ' . FacilityInfo()->provname . ' ' . FacilityInfo()->regname;
        $facility_contact= "Contact No:".FacilityInfo()->telno;
		$this->SetCreator(PDF_CREATOR);
		$this->SetAuthor('IHOMIS PLUS');
		$this->SetTitle('');
		$this->SetSubject('');
		$this->SetKeywords('');
       $image_file = K_PATH_IMAGES.'hospital_logo.png';
        $this->Image($image_file, 10, 10, 14, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Ln(4);
        $this->SetFont('helvetica', '', 5);
        $this->Cell(0, 0,'Republic of Philippines', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln(3);
        $this->SetFont('helvetica', '', 6);
        $this->Cell(0, 0,'Department of health', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln(3);
        $this->SetFont('helvetica', 'B', 7);
        $this->Cell(0, 0,FacilityInfo()->hhosname, 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln(3);
        $this->SetFont('helvetica', 'I', 6);
        $this->Cell(0,0,$facility_address, 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln(3);
        $this->Cell(0,0,$facility_contact, 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln(5);
        $this->SetTopMargin(25);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
      $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
}
