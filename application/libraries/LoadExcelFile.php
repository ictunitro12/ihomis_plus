<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

use \PhpOffice\PhpSpreadsheet\IOFactory;

class LoadExcelFile extends TCPDF
{
    protected $filePath;
    protected $fileType = 'xls';
    protected $spreadsheet;

    public function load()
    {
        $this->spreadsheet = IOFactory::load($this->filePath);
    }

    public function setFile($filePath)
    {
        $this->filePath = $filePath;
    }

    public function getArray(): array
    {
        $this->load();

        $spreadsheet = $this->spreadsheet->getActiveSheet();
		
        return $spreadsheet->toArray();
    }
}
