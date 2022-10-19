<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
require_once APPPATH . '/third_party/tcpdfnew/tcpdf.php';

class Fontawesome extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */

