<?php

namespace wappr\DigitalOcean;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Class Client.
 *
 * @version 0.2.0
 *
 * @author Levi Durfee <levi.durfee@gmail.com>
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

    /**
     * Client constructor.
     *
     * @param string $apiToken
     */
    public function __construct($apiToken = null)
    {
        $this->httpClient = new Guzzle(['base_uri' => $this->url.'/v'.$this->apiVersion.'/']);
        if (isset($apiToken)) {
            $this->apiToken = $apiToken;

            return;
        }

        $this->apiToken = getenv('DO_API_TOKEN');
    }

    /**
     * Post to the API.
     *
     * @param string         $action
     * @param ModelInterface $model
     *
     * @return ResponseInterface
     */
    public function post(string $action, ModelInterface $model): ResponseInterface
    {
        try {
            $response = $this->httpClient->request('POST', $action, [
                'auth' => [$this->apiToken, ':'],
                'json' => $model->return(),
                'debug' => $this->debug,
            ]);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Send a get request to the API.
     *
     * @param string $action
     *
     * @return ResponseInterface
     */
    public function get(string $action): ResponseInterface
    {
        try {
            $response = $this->httpClient->request('GET', $action, [
                'auth' => [$this->apiToken, ':'],
                'query' => ['page' => 1, 'per_page' => 500],
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'debug' => $this->debug,
            ]);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Send a delete request to the API url.
     *
     * @param string         $action
     * @param ModelInterface $model
     * @param string         $method
     *
     * @return ResponseInterface
     */
    public function delete(string $action, ModelInterface $model, string $method): ResponseInterface
    {
        try {
            $response = $this->httpClient->request('DELETE', $action.'/'.$model->{$method}(), [
                'auth' => [$this->apiToken, ':'],
                'json' => $model->return(),
                'debug' => $this->debug,
            ]);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Send an update request to the API.
     *
     * @param string         $action
     * @param ModelInterface $model
     * @param string         $method
     *
     * @return ResponseInterface
     */
    public function put(string $action, ModelInterface $model, string $method): ResponseInterface
    {
        try {
            $response = $this->httpClient->request('PUT', $action.'/'.$model->{$method}(), [
                'auth' => [$this->apiToken, ':'],
                'json' => $model->return(),
                'debug' => $this->debug,
            ]);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Set the http client. This will clients other than Guzzle.
     *
     * @param $client
     *
     * @return bool
     */
    public function setHttpClient($client)
    {
        $this->httpClient = $client;

        return true;
    }

    /**
     * @param bool $debug
     *
     * @return bool
     */
    public function setDebug(bool $debug)
    {
        $this->debug = $debug;

        return true;
    }
}
