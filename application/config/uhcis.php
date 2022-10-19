<?php

$config['version'] = env('VERSION', 'v1');
$config['certifications'] = env('CERTIFICATIONS');
$config['passphrase'] = env('PASSPHRASE', '');
$config['ecwsversion'] = env('ECWSVERSION', '');

$config['doh_cloud_upload'] = env('DOH_CLOUD_UPLOAD');
$config['doh_cloud_storage'] = env('DOH_CLOUD_STORAGE');
$config['eclaims_transmittal_url'] = env('DOH_WEBSERVICE_ECLAIMS_TRANSMITTAL_URL');

$config['mail_protocol'] = env('MAIL_MAILER');
$config['mail_host'] = env('MAIL_HOST');
$config['mail_username'] = env('MAIL_USERNAME');
$config['mail_password'] = env('MAIL_PASSWORD');
$config['mail_port'] = env('MAIL_PORT');
$config['mail_encryption'] = env('MAIL_ENCRYPTION');
$config['mail_from_address'] = env('MAIL_FROM_ADDRESS');
$config['mail_from_name'] = env('MAIL_FROM_NAME');

$config['telemedicine_app_url'] = env('TELEMEDICINE_APP_URL');
$config['telemedicine_app_token'] = env('TELEMEDICINE_APP_TOKEN');

$config['icd11_api_uri'] = env('ICD11_API_URI');

$config['iclinicsys_access_code'] = env('ICLINICSYS_ACCESS_CODE');
$config['iclinicsys_url'] = env('ICLINICSYS_URL');