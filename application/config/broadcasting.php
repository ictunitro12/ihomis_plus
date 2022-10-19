<?php

$config['key'] = env('PUSHER_APP_KEY');
$config['secret'] = env('PUSHER_APP_SECRET');
$config['app_id'] = env('PUSHER_APP_ID');
$config['host'] = env('WEBSOCKET_HOST', '127.0.0.1');
$config['port'] = env('WEBSOCKET_PORT', 6001);

