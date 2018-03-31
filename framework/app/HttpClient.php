<?php

namespace App;

use GuzzleHttp\Client;

class HttpClient extends Client
{
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }
    
    public function _get(string $url, array $options = [], $json = true)
    {
        $res = (new self)->request('GET', $url, $options)->getBody();
        return $json ? json_decode($res, true) : $res;
    }
}
