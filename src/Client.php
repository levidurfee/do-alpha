<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Contracts\Client\ClientContract;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Client as httpClient;

/**
 * Class Client
 * @package wappr\digitalocean
 */
class Client implements ClientContract
{
    protected $version = '0.11.0';

    protected $apiUrl = 'https://api.digitalocean.com';

    protected $apiVersion = '2';

    protected $httpClient;

    protected $apiToken;

    protected $debug = false;

    public function __construct($apiToken = null, ClientInterface $httpClient = null)
    {
        if(isset($httpClient)) {
            $this->httpClient = new $httpClient(['base_uri' => $this->apiUrl.'/v'.$this->apiVersion.'/']);
        } else {
            $this->httpClient = new httpClient(['base_uri' => $this->apiUrl.'/v'.$this->apiVersion.'/']);
        }

        if (isset($apiToken)) {
            $this->apiToken = $apiToken;
            
            return;
        }

        $this->apiToken = getenv('DO_API_TOKEN');
    }
}
