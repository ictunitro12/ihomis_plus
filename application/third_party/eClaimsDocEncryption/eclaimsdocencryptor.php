<?php

$uxFileToEncrypt = $_POST['source'];//'@Files/Input/PMRF.pdf';
$uxMimeType = 'application/pdf';
$uxSaveFileName = $_POST['destination'];//'@Files/Output/PMRF.pdf';
$logs = "";
$fileContents = "";
$uxPublicKeyFileName = '@Files/Input/pnpki_philhealth_eclaims_auth_cert.pem'; 
$uxPassword1 = "";
$uxPassword2 = "";
$uxIV = "";
    
$canEncrypt = false; 

if(!file_exists($uxFileToEncrypt)) {
    $logs = "Cannot find the file to be encrypted";
} else if(!file_exists($uxPublicKeyFileName)) {
    $logs = "Cannot find the public key file";
} else {
    $canEncrypt = true;
}

if($canEncrypt) {
    include_once('PhilHealthEClaimsDocEncryptor.php');

    $publicKeyFileName = 'file://' . dirname(__FILE__) . '/' . $uxPublicKeyFileName;
    $encryptor = new PhilHealthEClaimsDocEncryptor($publicKeyFileName);
    $encryptor->setLoggingEnabled(TRUE);
    $encryptor->setPassword1UsingHexStr($uxPassword1);
    $encryptor->setPassword2UsingHexStr($uxPassword2);
    $encryptor->setIVUsingHexStr($uxIV);
    $encryptor->encryptImageFile($uxFileToEncrypt, $uxMimeType, $uxSaveFileName);
    //$logs = implode("\n", $encryptor->getLogs());
    $logs = print_r($encryptor->getLogs(),true);
    $fileContents = file_get_contents($uxSaveFileName);
}

echo $logs;
