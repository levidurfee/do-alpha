<?php

namespace wappr\DigitalOcean;

use GuzzleHttp\Client as Guzzle;
use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Class Client.
 */
class Client implements ClientInterface
{
    /**
     * @var string DigitalOcean API URL
     */
    protected $url = 'https://api.digitalocean.com';

    /**
     * @var string API Version
     */
    protected $apiVersion = '2';

    /**
     * @var Guzzle http client
     */
    protected $httpClient;

    /**
     * @var string DigitalOcean API Token
     */
    protected $apiToken;

    /**
     * @var bool Debug Guzzle
     */
    protected $debug = false;

    public function __construct()
    {
        $this->httpClient = new Guzzle(['base_uri' => $this->url.'/v'.$this->apiVersion.'/']);
        $this->apiToken = getenv('DO_API_TOKEN');
    }

    /**
     * Post to the API.
     *
     * @param string         $action
     * @param ModelInterface $model
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function post(string $action, ModelInterface $model): ResponseInterface
    {
        $response = $this->httpClient->request('POST', $action, [
            'auth' => [$this->apiToken, ':'],
            'json' => $model->return(),
            'debug' => $this->debug,
        ]);

        return $response;
    }

    /**
     * Send a get request to the API.
     *
     * @param string $action
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function get(string $action): ResponseInterface
    {
        $response = $this->httpClient->request('GET', $action, [
            'auth' => [$this->apiToken, ':'],
            'query' => ['page' => 1, 'per_page' => 500],
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'debug' => $this->debug,
        ]);

        return $response;
    }

    /**
     * Send a delete request to the API url.
     *
     * @param string         $action
     * @param ModelInterface $model
     * @param string         $method
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function delete(string $action, ModelInterface $model, string $method): ResponseInterface
    {
        $response = $this->httpClient->request('DELETE', $action.'/'.$model->{$method}(), [
            'auth' => [$this->apiToken, ':'],
            'json' => $model->return(),
            'debug' => $this->debug,
        ]);

        return $response;
    }

    /**
     * @param string         $action
     * @param ModelInterface $model
     * @param string         $method
     *
     * @return ResponseInterface
     */
    public function put(string $action, ModelInterface $model, string $method): ResponseInterface
    {
        $response = $this->httpClient->request('PUT', $action.'/'.$model->{$method}(), [
            'auth' => [$this->apiToken, ':'],
            'json' => $model->return(),
            'debug' => $this->debug,
        ]);

        return $response;
    }

    /**
     * Set the http client. This will clients other than Guzzle.
     *
     * @param $client
     */
    public function setHttpClient($client)
    {
        $this->httpClient = $client;
    }

    /**
     * @param boolean $debug
     */
    public function setDebug(bool $debug)
    {
        $this->debug = $debug;
    }
}
