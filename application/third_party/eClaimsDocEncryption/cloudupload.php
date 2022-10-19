<?php
$uploadfile = $_POST['source'];
$filename = $_POST['filename'];
$pclaimdoccode = $_POST['pclaimdoccode'];
$uploadaddress = $_POST['uploadaddress'];
$pcsausername = $_POST['pcsausername'];
$pcsapassword = $_POST['pcsapassword'];

if (function_exists('curl_file_create')) { // php 5.5+
    $cFile = curl_file_create($uploadfile, 'application/json' , $filename);
} else { 
	$cFile = '@' . realpath($filename);
}

$post = array('name' => $pcsausername, 'password' => $pcsapassword, 'description' => $pclaimdoccode, 'uploadFile'=> $cFile);
$ch = curl_init($uploadaddress);

curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);
curl_setopt($ch, CURLOPT_TIMEOUT, 400); //timeout in seconds
curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);  
}

curl_close($ch);
