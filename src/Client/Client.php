<?php

namespace wappr\DigitalOcean\Client;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Class Client.
 *
 * @version 0.8.0
 *
 * @author Levi Durfee <levi.durfee@gmail.com>
 */
class Client implements ClientInterface
{
    /**
     * @var string Current version
     */
    protected $version = '0.8.0';

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
                'headers' => [
                    'User-Agent' => 'wappr\digitalocean:'.$this->version,
                ],
            );
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Send a get request to the API.
     *
     * @param string $action
     * @param array  $query
     *
     * @return ResponseInterface
     */
    public function get(string $action, array $query = []): ResponseInterface
    {
        try {
            $response = $this->httpClient->request('GET', $action, [
                'auth' => [$this->apiToken, ':'],
                'query' => $query,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'User-Agent' => 'wappr\digitalocean:'.$this->version,
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
     * @param array          $query
     *
     * @return ResponseInterface
     */
    public function delete(string $action, ModelInterface $model, string $method, array $query = []): ResponseInterface
    {
        try {
            $response = $this->httpClient->request('DELETE', $action.'/'.$model->{$method}(), [
                'auth' => [$this->apiToken, ':'],
                'query' => $query,
                'json' => $model->return(),
                'debug' => $this->debug,
                'headers' => [
                    'User-Agent' => 'wappr\digitalocean:'.$this->version,
                ],
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
            $response = $this->httpClient->request('PUT', $action, [
                'auth' => [$this->apiToken, ':'],
                'json' => $model->{$method}(),
                'debug' => $this->debug,
                'headers' => [
                    'User-Agent' => 'wappr\digitalocean:'.$this->version,
                ],
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
