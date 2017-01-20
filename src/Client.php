<?php

namespace wappr\digitalocean;

use GuzzleHttp\Client as httpClient;
use GuzzleHttp\Exception\RequestException;
use wappr\digitalocean\Contracts\Client\ClientContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class Client.
 */
class Client implements ClientContract
{
    public $httpClient;

    public $debug = false;

    protected $version = '0.11.0';

    protected $apiUrl = 'https://api.digitalocean.com';

    protected $apiVersion = '2';

    protected $apiToken;

    public function __construct()
    {
        $this->httpClient = new httpClient(['base_uri' => $this->apiUrl.'/v'.$this->apiVersion.'/']);

        $this->apiToken = getenv('DO_API_TOKEN');
    }

    public function post($endpoint, RequestContract $requestContract)
    {
        $request = [
            'auth' => [$this->apiToken, ':'],
            'json' => $requestContract->fetch(),
            'debug' => $this->debug,
            'headers' => [
                'User-Agent' => 'wappr\digitalocean:'.$this->version,
            ],
        ];

        try {
            $response = $this->httpClient->request('POST', $endpoint, $request);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    public function get($endpoint, RequestContract $requestContract)
    {
        $request = [
            'auth' => [$this->apiToken, ':'],
            'query' => [
                'page' => 1,
                'per_page' => 500,
                $requestContract->fetch()
            ],
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'debug' => $this->debug,
        ];

        try {
            $response = $this->httpClient->request('GET', $endpoint, $request);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }
}
