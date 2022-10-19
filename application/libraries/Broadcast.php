<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Broadcast
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();

        $this->CI->load->config('broadcasting');
    }

    public function setup()
    {
        $appId = $this->CI->config->item('app_id');
        $key = $this->CI->config->item('key');
        $secret = $this->CI->config->item('secret');
        $host = $this->CI->config->item('host');
        $port = $this->CI->config->item('port');

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true,
            'encrypted' => true,
            'host' => $host,
            'port' => $port,
            'scheme' => 'http'
        );

        $pusher = new Pusher\Pusher(
            $key,
            $secret,
            $appId,
            $options
        );

        return $pusher;
    }
}