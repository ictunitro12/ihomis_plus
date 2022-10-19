<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('ECLAIMS','https://ihomis-test.doh.gov.ph/ihomis/webservice2.php?wsdl');	
define('ECLAIMSVERSION','ECWS2.7.1');
define('CERTIFICATION','ECLAIMS-02-06-2018-00002');
define('ECLAIMSCERT', '');
define('EPCB','https://119.92.200.31:9001/PhilHealth/SOAP?wsdl');					   
define('EPCBCERT', '');
//encrypt.decrypt indicator
define('CRYPTO', true);
//Web Directories
define('CLAIMSDIR', "E:/hitp_wsdir");
define('FTPDIR', "E:/ftp_data");
define('WEBLOCINFO', "E:/hitp_wsdir/Web_Location_Info");
define('WEBLOGDIR', "E:/hitp_wsdir/Web_Service_Call_Log");
define('DBERRORDIR', "E:/hitp_wsdir/DBError");
define('CRYPTODIR', "E:/hitp_wsdir/CryptoLog");
define('ADDDOCSDIR', "E:/hitp_wsdir/AddDocURL");
//ftp settings
define('FTPADD', "180.232.103.89");
define('FTPUSER', "hospital");
define('FTPPASS', "1h0m1Sh0Sp1taL");
//SMTP
define('SMTPEMAIL', "alvin.icaonapo@gmail.com");
define('SMTPPASS', "a5c95ace7cafd9a10b7c5b1d415434ab");

//HFSRB WEB
define('OHSRS','http://uhmistrn.doh.gov.ph/ahsr/webservice/index.php?wsdl');
//
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
define('JS_PATH','assets/scripts'); 









