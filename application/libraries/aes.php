<?php if (! defined('BASEPATH') ) exit("Not Allow to access this Page");
 
     class aes
    {	
        
        var $bit = 256;
        
        function __construct($bit = 256) {
            $this->bit = $bit;
        }
        function Encrypt($data,$key) {
            
            if ($this->bit == 256)
                return base64_encode($this->aes128Encrypt($key,$data));
            else
                return base64_encode($this->aes256Encrypt($key,$data));
                
        }
        function Decrypt($data,$key) {
            
            if ($this->bit == 256)
                return $this->aes128Decrypt($key, base64_decode($data));
            else
                return $this->aes256Decrypt($key, base64_decode($data));
        }
        function aes128Encrypt($key, $data) 
		{
            if(16 !== strlen($key)) $key = hash('MD5', $key, true);
            $padding = 16 - (strlen($data) % 16);
            $data .= str_repeat(chr($padding), $padding);
            return mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, str_repeat("\0", 16));
        }
        function aes128Decrypt($key, $data) {
            if(16 !== strlen($key)) $key = hash('MD5', $key, true);
            $data = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, str_repeat("\0", 16));
            $padding = ord($data[strlen($data) - 1]); 
            return substr($data, 0, -$padding); 
        }
        function aes256Encrypt($key, $data) {
            if(32 !== strlen($key)) $key = hash('SHA256', $key, true);
            $padding = 16 - (strlen($data) % 16);
            $data .= str_repeat(chr($padding), $padding);
            return mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, str_repeat("\0", 16));
        }
        function aes256Decrypt($key, $data) {
            if(32 !== strlen($key)) $key = hash('SHA256', $key, true);
            $data = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, str_repeat("\0", 16));
            $padding = ord($data[strlen($data) - 1]); 
            return substr($data, 0, -$padding); 
        }
    }
	/* Encrypt data with aes 128 and 256 byte And decrypt it in Codeigniter

Example : $this->load->library('aes',128);

$enc = $this->aes->encrypt('data','password');

echo $enc;

echo $this->aes->descrypt($enc,'password'); */
   
