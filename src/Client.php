<?php

namespace wappr\DigitalOcean;

use GuzzleHttp\Client as Guzzle;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\ModelInterface;

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
     */
    public function post(string $action, ModelInterface $model)
    {
        $response = $this->httpClient->request('POST', $action, [
            'auth' => [$this->apiToken, ':'],
            'json' => $model->return(),
        ]);
        var_dump($response);
    }

    /**
     * Send a get request to the API.
     *
     * @param string $action
     */
    public function get(string $action)
    {
        $response = $this->httpClient->request('GET', $action, [
            'auth' => [$this->apiToken, ':'],
            'query' => ['page' => 1, 'per_page' => 50],
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ]);
        //var_dump($response->getBody()->getContents());
        $data = serialize($response->getBody()->getContents());
        file_put_contents('output.json', $data);
    }

    /**
     * @param string $action
     * @param ModelInterface $model
     * @param string $method
     */
    public function delete(string $action, ModelInterface $model, string $method)
    {
        $response = $this->httpClient->request('DELETE', $action.'/'.$model->{$method}(), [
            'auth' => [$this->apiToken, ':'],
            'json' => $model->return(),
        ]);
        var_dump($response);
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
}
