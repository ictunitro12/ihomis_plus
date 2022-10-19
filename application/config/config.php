
 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

$root = "https://".$_SERVER['HTTP_HOST'];
//$root .= dirname($_SERVER['SCRIPT_NAME']); 

$config['base_url']    = $root;//env('BASE_URL', $root);
//$config['base_url']    = env('BASE_URL', $root);

$config['index_page'] = '';
$config['uri_protocol']	= 'REQUEST_URI';
$config['use_ci_email'] = FALSE; 
$config['email_config'] = array('mailtype' => 'html');
$config['url_suffix'] = '';
$config['language']	= 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = TRUE;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = 'vendor/autoload.php';
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-=';
$config['enable_query_strings'] = false;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['allow_get_array'] = true;
$config['log_threshold'] = 4;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0777;
$config['log_date_format'] = 'm-d-Y H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = FALSE;
$config['encryption_key'] = hex2bin(getenv('APP_KEY'));
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_sessions';
$config['sess_expiration'] = 7200;	
$config['sess_save_path'] = APPPATH . '/ci_sessions';
$config['sess_match_ip'] = false;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = false;
$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;
$config['standardize_newlines'] = FALSE;
$config['global_xss_filtering'] = TRUE;
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();
$config['compress_output'] = false;
$config['time_reference'] = 'Asia/Manila';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '';  
//Primary
$config['header_css'] = array('style.css','web.css');
$config['header_js']  = array('core.js','jquery_min.js');
$config['composer_autoload'] = FCPATH.'vendor/autoload.php';
date_default_timezone_set('Asia/Manila');