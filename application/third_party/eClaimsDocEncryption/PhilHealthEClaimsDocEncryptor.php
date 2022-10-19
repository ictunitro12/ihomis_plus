<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PhilHealthEClaimsDocEncryptor
 *
 * @author manny
 */
class PhilHealthEClaimsDocEncryptor
{
    const PASSWORD1_LEN = 16;
    const PASSWORD2_LEN = 16;
    const IV_LEN = 16;
    private $_loggingEnabled = false;

    public function getLoggingEnabled()
    {
        return $this->_loggingEnabled;
    }

    public function setLoggingEnabled($value)
    {
        $this->_loggingEnabled = $value;
    }
    
    private $_publicKey;
    private $_publicKeyFileName;
    private $_logs = array();

    function __construct($publicKeyFileName)
    {
        $this->_publicKeyFileName = $publicKeyFileName;
        $this->_publicKey = $this->extractPublicKey($this->_publicKeyFileName);
    }

    public function encryptImageFile($imageFileName, $sourceFileMimeType, $encryptedFileName)
    {
        if (!file_exists($imageFileName)) throw new Exception("The file ".$imageFileName." does not exist!");

        $this->log("Encryption processed started.");
        $encryptedDocContent = "";

        $this->log("Reading contents of source file '" . urlencode($imageFileName) . "'...");
        $data = file_get_contents($imageFileName);

        //sets up a password with random bytes
        $password1 = $this->getPassword1();
        $password2 = $this->getPassword2();

        $password = $password1 . $password2;

        //sets up random bytes for the initialization vector to be used for AES encryption
        $iv = $this->getIV();
        
        $encryptedData = $this->encryptUsingAES($data, $password, $iv);
        $this->logErrors();

        if (strlen($encryptedData) > 0)
        {
            $this->log("Getting the public key from the public key file '" . $this->_publicKeyFileName . "'...");

            $password1Encrypted = "";
            $password2Encrypted = "";
            $ivEncrypted = "";

            $this->log("Encryping the first half of password...");
            $this->encryptUsingPublicKey($password1, $password1Encrypted);
            $this->logErrors();
            

            $this->log("Encryping the second half of the password...");
            $this->encryptUsingPublicKey($password2, $password2Encrypted);
            $this->logErrors();

            $this->log("Encryping the initialization vector...");
            $this->encryptUsingPublicKey($iv, $ivEncrypted);
            $this->logErrors();

            $this->log("Encoding the password and the initiaalization vector to base 64...");
            $password1EncryptedBase64 = base64_encode($password1Encrypted);
            $password2EncryptedBase64 = base64_encode($password2Encrypted);
            $ivEncryptedBaseBase64 = base64_encode($ivEncrypted);

            $this->log("Computing the hash of the file using SHA256...");
            $sha256Hash = $this->computeHashUsingSHA256($data);

            $this->log("Encoding the encrypted file content to base 64");
            $encryptedDataBase64 = base64_encode($encryptedData);

            //builds the prescribed json data
            $this->log("Building the JSON string of the encrypted e-claims doc...");

            $cont = array();
            $cont["docMimeType"] = $sourceFileMimeType;
            $cont["hash"] = $sha256Hash;
            $cont["key1"] = $password1EncryptedBase64;
            $cont["key2"] = $password2EncryptedBase64;
            $cont["iv"] = $ivEncryptedBaseBase64;
            $cont["doc"] = $encryptedDataBase64;

            $encryptedDocContent = $this->toJSON($cont);

            //saves the encrypted data to file 
            $this->log("Saving the JSON string of the encrypted e-claim doc as '" . urlencode($encryptedFileName) . "'...");
            file_put_contents($encryptedFileName, $encryptedDocContent);

            $this->log("Deleting the original file...");
            //unlink($imageFileName);
        }

        $this->log("Encryption processed finished.");
    }

    private function log($message)
    {
        if ($this->_loggingEnabled)
        {
            $this->_logs[] = $message;
        }
    }

    private function getRandomBytes($count)
    {
        return openssl_random_pseudo_bytes($count);
    }

    private function toJSON($data)
    {
        return json_encode($data);
    }

    private function repeatString($str, $count)
    {
        return str_repeat($str, $count);
    }

    private function encryptUsingAES($data, $password, $iv)
    {
        $blockSizeInBits = 256;
        $method = "AES-{$blockSizeInBits}-CBC";
        $data = $this->pad($data, $blockSizeInBits/8);
        $options = OPENSSL_ZERO_PADDING + OPENSSL_RAW_DATA;
        //$options = OPENSSL_ZERO_PADDING;

        return openssl_encrypt($data, $method, $password, $options, $iv);
    }

    private function extractPublicKey($publicKeyFileName)
    {
        return openssl_get_publickey($publicKeyFileName);
    }

    private function encryptUsingPublicKey($data, &$encryptedData)
    {
        return openssl_public_encrypt($data, $encryptedData, $this->_publicKey);
    }

    private function computeHashUsingSHA256($data)
    {
        return hash("sha256", $data);
    }

    private function toHexString($data)
    {
        return bin2hex($data);
    }

    public function getLogs()
    {
        return $this->_logs;
    }
  
    public function logErrors(){
        if ($this->getLoggingEnabled()) {
            while (($e = openssl_error_string()) !== false) {
                $this->log($e);
            }
        }
    }   

    private $_password1 = "";
    private $_password2 = "";
    private $_iv = "";

    public function setPassword1UsingHexStr($value)
    {
        $this->_password1 = hex2bin($value);
    }

    public function setPassword2UsingHexStr($value)
    {
        $this->_password2 = hex2bin($value);
    }

    public function setIVUsingHexStr($value)
    {
        $this->_iv = hex2bin($value);
    }

    public function getPassword1()
    {
        if(empty($this->_password1)) {
            $this->log("Generating random bytes for password1 for AES encryption...");
            $this->_password1 = $this->getRandomBytes(self::PASSWORD1_LEN); 
        }

        return $this->_password1;
    }

    public function getPassword2()
    {
        if(empty($this->_password2)) {
            $this->log("Generating random bytes for password1 for AES encryption...");
            $this->_password2 = $this->getRandomBytes(self::PASSWORD1_LEN); 
        }

        return $this->_password2;
    }

    public function getIV() {
        if(empty($this->_iv)) {
            $this->log("Generating 16 random bytes for initialization vector for AES encryption...");
            $this->_iv = $this->getRandomBytes(self::IV_LEN); 
        }

        return $this->_iv;
    }

    public function resetPasswordAndIV()
    {
        $this->_password1 = "";
        $this->_password2 = "";
        $this->_iv = "";
    }
    
    public function pad($string, $blockSizeInBits = 32)
    {
        $pad = $blockSizeInBits - (strlen($string) % $blockSizeInBits);

        return $string . str_repeat(chr(0), $pad - 1) . chr($pad);
    }     
}