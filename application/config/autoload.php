<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database','datatables','form_validation','breadcrumbs','ion_auth','session','menu', 'encryption', 'SoapRequest', 'CurlRequest');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'form','html','email','language','function','information','statistics','view','date','general', 'string_to_array');
$autoload['config'] = array('trail');
$autoload['language'] = array();
$autoload['model'] = array('FacilityModel','SqlModel','ActivityLogModel');
